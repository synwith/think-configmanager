<?php
namespace app\index\controller;

use app\config\ConfigManager ;
use think\Controller;
use think\Config;

class ConfigIndex extends Controller
{ 

	public $content;
	public function index()
	{
		$this->configInit();
	}


	public function configInit()
	{
            // return "config===about";

        // $this->allConfig=include()


		
		$app_namespace=Config::get('app_namespace');
		$app_debug=Config::get('app_debug');
		$app_trace=Config::get('app_trace');
		$app_status=Config::get('app_status');
		$app_multi_module=Config::get('app_multi_module');
		$root_namespace=Config::get('root_namespace');
		$extra_config_list=Config::get('extra_config_list');
		$extra_file_list=Config::get('extra_file_list');
		$default_return_type=Config::get('default_return_type');
		$default_ajax_return=Config::get('default_ajax_return');
		$default_jsonp_handler=Config::get('default_jsonp_handler');
		$var_jsonp_handler=Config::get('var_jsonp_handler');
		$default_timezone=Config::get('default_timezone');
		$lang_switch_on=Config::get('lang_switch_on');
		$default_filter=Config::get('default_filter');
		$default_lang=Config::get('default_lang');
		$use_controller_suffix=Config::get('use_controller_suffix');
		$default_module=Config::get('default_module');
		$default_action=Config::get('default_action');
		$action_suffix=Config::get('action_suffix');
		$controller_auto_search=Config::get('controller_auto_search');
		$var_pathinfo=Config::get('var_pathinfo');
		$pathinfo_fetch=Config::get('pathinfo_fetch');
		$pathinfo_depr=Config::get('pathinfo_depr');
		$url_html_suffix=Config::get('url_html_suffix');
		$default_validate=Config::get('default_validate');
		$empty_controller=Config::get('empty_controller');
		$deny_module_list=Config::get('deny_module_list');
		$default_controller=Config::get('$default_controller');
		$url_common_param=Config::get('url_common_param');
		$url_deny_suffix=Config::get('url_deny_suffix');
		$url_param_type=Config::get('url_param_type');
		$url_route_on=Config::get('url_route_on');
		$url_route_must=Config::get('url_route_must');
		$url_domain_deploy=Config::get('url_domain_deploy');
		$url_domain_root=Config::get('url_domain_root');
		$url_convert=Config::get('url_convert');
		$url_controller_layer=Config::get('url_controller_layer');
		$var_method=Config::get('var_method');
		$template=Config::get('template');
		$view_replace_str=Config::get('view_replace_str');
		$dispatch_error_tmpl=Config::get('dispatch_error_tmpl');
		$dispatch_success_tmpl=Config::get('dispatch_success_tmpl');
		$error_message=Config::get('error_message');
		$show_error_msg=Config::get('show_error_msg');
		$exception_handle=Config::get('exception_handle');
		$exception_tmpl=Config::get('exception_tmpl');
		$log=Config::get('log');
		$trace=Config::get('trace');
		$cache=Config::get('cache');
		$session=Config::get('session');
		$cookie=Config::get('cookie');
		$paginate=Config::get('paginate');
		$UC_APP_ID=Config::get('UC_APP_ID');
		$UC_API_TYPE=Config::get('UC_API_TYPE');
		$UC_AUTH_KEY=Config::get('UC_AUTH_KEY');

		$this->content=$this->content.$this->showInfo($app_namespace,"app_namespace","应用命名空间:");
		$this->content=$this->content.$this->showInfo($app_debug,"app_debug(bool)","应用调试模式:");
		$this->content=$this->content.$this->showInfo($app_trace,"app_trace(bool)","应用Trace:");
		$this->content=$this->content.$this->showInfo($app_status,"app_status","应用模式状态:");
		$this->content=$this->content.$this->showInfo($app_multi_module,"app_multi_module(bool)","是否支持多模块:");
		$this->content=$this->content.$this->showInfo($root_namespace,"root_namespace","注册的根命名空间:");
		$this->content=$this->content.$this->showInfo($extra_config_list,"extra_config_list","扩展配置文件:");
		$this->content=$this->content.$this->showInfo($extra_file_list,"extra_file_list","扩展函数文件:");
		$this->content=$this->content.$this->showInfo($default_return_type,"default_return_type","默认输出类型:");
		$this->content=$this->content.$this->showInfo($default_ajax_return,"default_ajax_return","默认AJAX 数据返回格式,可选json xml:");
		$this->content=$this->content.$this->showInfo($default_jsonp_handler,"default_jsonp_handler","默认JSONP格式返回的处理方法:");
		$this->content=$this->content.$this->showInfo($var_jsonp_handler,"var_jsonp_handler","默认JSONP处理方法:");
		$this->content=$this->content.$this->showInfo($default_timezone,"default_timezone","默认时区:");
		$this->content=$this->content.$this->showInfo($lang_switch_on,"lang_switch_on(bool)","是否开启多语言:");
		$this->content=$this->content.$this->showInfo($default_filter,"default_filter","默认全局过滤方法 用逗号分隔多个:");
		$this->content=$this->content.$this->showInfo($default_lang,"default_lang","默认语言:");
		$this->content=$this->content.$this->showInfo($use_controller_suffix,"use_controller_suffix","是否启用控制器类后缀:");
		$this->content=$this->content.$this->showInfo($default_module,"default_module","默认模块名:");
		$this->content=$this->content.$this->showInfo($deny_module_list,"deny_module_list","禁止访问模块:");
		$this->content=$this->content.$this->showInfo($default_controller,"default_controller","默认控制器名:");
		$this->content=$this->content.$this->showInfo($default_action,"default_action","默认操作名:");
		$this->content=$this->content.$this->showInfo($default_validate,"default_validate","默认验证器:");
		$this->content=$this->content.$this->showInfo($empty_controller,"empty_controller","默认的空控制器名:");
		$this->content=$this->content.$this->showInfo($action_suffix,"action_suffix","操作方法后缀:");
		$this->content=$this->content.$this->showInfo($controller_auto_search,"controller_auto_search(bool)","自动搜索控制器:");
		$this->content=$this->content.$this->showInfo($var_pathinfo,"var_pathinfo","PATHINFO变量名 用于兼容模式:");
		$this->content=$this->content.$this->showInfo($pathinfo_fetch,"pathinfo_fetch","兼容PATH_INFO获取:");
		$this->content=$this->content.$this->showInfo($pathinfo_depr,"pathinfo_depr","pathinfo分隔符:");
		$this->content=$this->content.$this->showInfo($url_html_suffix,"url_html_suffix","URL伪静态后缀:");
		$this->content=$this->content.$this->showInfo($url_common_param,"url_common_param(bool)","URL普通方式参数 用于自动生成:");
		$this->content=$this->content.$this->showInfo($url_deny_suffix,"url_deny_suffix","url禁止访问的后缀:");
		$this->content=$this->content.$this->showInfo($url_param_type,"url_param_type","URL参数方式 0 按名称成对解析 1 按顺序解析:");
		$this->content=$this->content.$this->showInfo($url_route_on,"url_route_on(bool)","是否开启路由:");
		$this->content=$this->content.$this->showInfo($url_route_must,"url_route_must(bool)","是否强制使用路由:");
		$this->content=$this->content.$this->showInfo($url_domain_deploy,"url_domain_deploy(bool)","域名部署:");
		$this->content=$this->content.$this->showInfo($url_domain_root,"url_domain_root","域名根，如.thinkphp.cn:");
		$this->content=$this->content.$this->showInfo($url_convert,"url_convert(bool)","是否自动转换URL中的控制器和操作名:");
		$this->content=$this->content.$this->showInfo($url_controller_layer,"url_controller_layer","默认的访问控制器层:");
		$this->content=$this->content.$this->showInfo($var_method,"var_method","表单请求类型伪装变量:");
		$this->content=$this->content.$this->showInfo($template,"template","模板引擎设置:");
		$this->content=$this->content.$this->showInfo($view_replace_str,"view_replace_str","视图输出字符串内容替换:");
		$this->content=$this->content.$this->showInfo($dispatch_error_tmpl,"dispatch_error_tmpl","默认错误跳转对应的模板文件:");
		$this->content=$this->content.$this->showInfo($dispatch_success_tmpl,"dispatch_success_tmpl","默认成功跳转对应的模板文件:");
		$this->content=$this->content.$this->showInfo($exception_tmpl,"exception_tmpl","异常页面的模板文件:");
		$this->content=$this->content.$this->showInfo($error_message,"error_message","错误显示信息,非调试模式有效:");
		$this->content=$this->content.$this->showInfo($show_error_msg,"show_error_msg","显示错误信息:");
		$this->content=$this->content.$this->showInfo($exception_handle,"exception_handle","异常处理handle类 留空使用 \think\exception\Handle:");
		$this->content=$this->content.$this->showInfo($log,"log","日志设置:");
		$this->content=$this->content.$this->showInfo($trace,"trace","Trace设置:");
		$this->content=$this->content.$this->showInfo($cache,"cache","缓存设置:");
		$this->content=$this->content.$this->showInfo($session,"session","会话设置:");
		$this->content=$this->content.$this->showInfo($cookie,"cookie","Cookie设置:");
		$this->content=$this->content.$this->showInfo($paginate,"paginate","分页配置:");



		echo  '<style type="text/css">*{ padding: 0; margin: 0; } 
        #info{
        	background:#222;
        	margin:15px;
        	padding: 15px;
        	
        	padding: 24px 48px;
        } 

        #title{
            background:#222;
            color:#aaa;
            text-align:center;
            width:100%;
            font-size:35px;
         }

		ul
		{
			list-style-type: none;
			padding: 0px;
			margin: 0px;
		}
		ul li
		{
			background-image: url(sqpurple.gif);
			background-repeat: no-repeat;
			background-position: 0px 5px; 
			padding-left: 14px; 
		}  
		a{color:#2E5CD5;cursor: pointer;text-decoration: none} 
		a:hover{text-decoration:underline; } 
		body{ background: #000; font-family: "Century Gothic","Microsoft yahei"; color: #0f0;font-size:18px;} 
		h1{ font-size: 25px; font-weight: normal; margin-bottom: 12px; }
		 p{ line-height: 1.6em; font-size: 20px }
		 </style>
		 '.'<div id="title">===ThinkPHP5.0 Config管理面板By Nil Lu====</div>'.$this->content.' 
		 <h1>:)</h1>
         <p> ThinkPHP V5<br/>
         <span style="font-size:20px" color="#fff">ThinkPHP5 ConfigManager管理面板</span></p>
         <span style="font-size:15px;">[ V1.0 ConfigManager by Luzaimou ]</span>';

}

public function showInfo($data,$tag='',$info='')
{
	if(!is_array($data))
	{
		if(empty($data))
		{
			$data='空';
		}
		return  '<div id="info"><p>'.$info.'</p>'
		.'<ul><li>'.$tag.'<input type="text" value="'.$data.'"></input>'.'</li></ul></div>';

	}else
	{
		$content='<div id="info"><p>'.$info.'('.$tag.')</p>';
		foreach ($data as $key => $value) {
              	# code...
			$content=$content.'<ul><li>'.$key.'<input type="text" value="'.$value.'"></input>'.'</li></ul>';
		}
		return $content.'</div>';
	}
}

}


?>

