<?php
return array(
	//'配置项'=>'配置值'
	'DB_DSN' => 'mysql://root:@localhost:3306/web_jxt',
	'TMPL_L_DELIM' => '<{', //修改左定界符
	'TMPL_R_DELIM' => '}>', //修改右定界符
	'URL_PATHINFO_DEPR' => '/',
	'SHOW_PAGE_TRACE' =>true, 
	'DB_PREFIX' => 'tp_',

	 'TMPL_PARSE_STRING' =>  array( // 地址替换,用_UPLOAD_目录 代替 根目录下的Upload目录
     '__UPLOAD__'    =>  __ROOT__.'/Uploads',
     ),
);
?>