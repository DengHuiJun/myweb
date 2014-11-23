<?php
	class AlbumAction extends CommonAction{
		public function index(){
			$image=M('Photofc');                       
            $data=$image->order('time desc')->select();    //获取最后上传图片
            $this->assign('data',$data);
            $this->display();
		}
	    public function Upload(){        
            //如果不为空
            if(!empty($_FILES))
            {
                $this->_upload();
            }

        }
		public function _upload(){
            import('ORG.Net.UploadFile');
            //导入上传类
            $upload = new UploadFile();
            //设置上传文件大小
            $upload->maxSize            = 3292200;
            //设置上传文件类型
            $upload->allowExts          = explode(',', 'jpg,gif,png,jpeg');
            //设置附件上传目录
            $upload->savePath           = './Uploads/';
            //设置需要生成缩略图，仅对图像文件有效
            $upload->thumb              = true;
            // 设置引用图片类库包路径
            $upload->imageClassPath     = 'ORG.Util.Image';
            //设置需要生成缩略图的文件后缀
            $upload->thumbPrefix        = 'm_,s_';  //生产2张缩略图
            //设置缩略图最大宽度
            $upload->thumbMaxWidth      = '360,100';
            //设置缩略图最大高度
            $upload->thumbMaxHeight     = '360,100';
            //设置上传文件规则
            $upload->saveRule           = 'uniqid';
            //删除原图
            $upload->thumbRemoveOrigin  = true; 
            //如果上传不成功
            if (!$upload->upload()) 
            {
                //捕获上传异常
                $this->error($upload->getErrorMsg());
            } 
            else 
            {
                //取得成功上传的文件信息
                $uploadList = $upload->getUploadFileInfo();            
                //导入图片类
                import('ORG.Util.Image');                
                //给m_缩略图添加水印, Image::water('原文件路径','水印图片地址')
                // Image::water($uploadList[0]['savepath'] . 'm_' . $uploadList[0]['savename'], APP_PATH.'Tpl/Public/Images/logo.png');
                //图片名赋值给 字段image
                $_POST['image'] = $uploadList[0]['savename'];
            }
            $model  = M('Photofc');
            //保存当前数据对象
            $data['image']   = $_POST['image'];
            $data['time']    = date("Y-m-d");
            $list   = $model->add($data);
            if ($list !== false) 
            {
                $this->success('上传图片成功！');
            } 
            else 
            {
                $this->error('上传图片失败!');
            }
        } 
        public function dodel(){
            $id = $_GET['id'];
            $User = M("Photofc"); // 实例化User对象
            $where['id'] = $id;
            $User->where($where)->delete(); // 删除指定id的用户数据
            $this->success("删除成功！");
            $this->redirect("Album/index");      
        }       
    }


?> 