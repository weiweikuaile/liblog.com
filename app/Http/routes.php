<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	//解析模板 
    return view('index');
});
//p配置测试路由
/*Route::get('/admin',function(){
	//echo 'admin';
	echo Config::get('app.AppName');//// 配置读取和设置 'app'=>指的时config文件夹中的app.php配置文件,.AppName指的时该配置文件中的哪个配置项
		// echo Config::get('app.AppName');
	Config::set('app.AppName','lamp148官网');
	echo Config::get('app.AppName');//访问http://localhost/liblog.com/public/admin
});*/
//环境配置文件 读取
		// echo env('DB_HOST');
	//维护模式
		// 启用维护模式，只需要运行 Artisan 命令 down：
		//php artisan down

		// 关闭维护模式，请使用 Artisan 命令 up：
		//php artisan up
	// 维护模式的响应模板#
	// 维护模式的默认模板放在 resources/views/errors/503.blade.php。
//错误请求,lamp148.cn/admin  如果出现下面的错误 证明路由问题.当前访问路径没有响应的路由
//NotFoundHttpException in RouteCollection.php line 161:
// Route::get('/admin',function(){
// 	echo 'admin';
// });//分号不能省略 FatalErrorException in routes.php line 29:
//基本路由
/*Route::get('/love',function(){
	echo 'iloveyou';
});
//错误 说明  访问(请求)方式错误 
//MethodNotAllowedHttpException in RouteCollection.php line 218:
Route::post('/like',function(){
	echo 'ilikeyou';
});*/
//临时关闭token验证 csrf保护
// app/http/kernel.php
	//下面注释就可以
     // \App\Http\Middleware\VerifyCsrfToken::class,
//调试工具 chrome插件 postman


/*Route::get('/test',function(){
	//通过路由的名字来创建url
	//echo route('uadd');
	//通过路由规则创建url
	echo url('/admin/user/add');
	//实现页面跳转

})->middleware('login');//普通*///路由使用中间件
/*Route::get('/test/add',function(){
	return view('user.add');
});
Route::post('/test/insert',function(){
	echo '用户数据插入';
});*/
//带参数的路由
/*Route::get('/goods/{name}-{id}',function($name,$id){
	echo $name;
	echo $id;//如果不传参数，就会报错
	//参数类型约束,这是基本路由，不常用。
})->where('id','\d+');*///限制参数类型，一般用正则来约束
//别名路由
/*
Route::get('/admin/user/add',[
	'as'=>'uadd',//路由别名
	'uses'=>function(){//uses不能改
	//echo '这时用户的添加页面';
	echo Route::currentRouteName();//获取路由名称  获取路由的别名

}]);*/
//普通路由使用中间件
/*Route::get('/test',function(){
	//通过路由的别名来创建url
	//echo route('uadd');//结果显示http://weilitest.liblog.com/admin/user/add
	//echo url('/admin/user/add');	//通过路由规则创建url
	 //return redirect()->route('uadd');//实现页面跳转,后期控制器用这
	 //个最多,数据插入成功，跳转页面，回退有个back是回退的
})->middleware('login');//在中间件那里注册时什么名字括号里就写什么名字*/

//路由组 配合使用中间件
/*Route::group(['middleware'=>'login'],function(){//[]这个表示数组，写中间件，以后会讲。中间件在程序中起到关卡、过滤的作用，
	//是每次请求都要验证是否放行。如果不符合，就指定跳转到哪个页面。例如判断登录，例如检查站
	//后台用户管理列表
	Route::get('/admin/user',function(){
		//echo 'admin/user';
	});
	//后台商品管理列表
	Route::get('/admin/goods',function(){
		//echo 'admin/goods';
	});
	// Route::get('/admin/cate',function(){});
	//后台...
});	 */
//});

//显示用户登录页面
/*Route::get('/login',function(){
	echo '用户登录页面';
});*/

//如何在报错的基础上，显示404页面给用户友好的体验度，在文件夹error里写个404页面，计算机出这个错误会自动找到404页面，计算机逻辑告诉他是路由的问题：没有这个路由关系，没有这个请求路径。
//即需要他登录的页面
/*Route::get('/login',function(){
	//echo '用户登录页面';
	abort(404);//抛出404,文本具体没有说
}); 
*/
//csrf保护 测试
//Route::get('/user/add',function(){
// 	//显示模板
//return view('add');//views/add.blade.php即有user文件夹
//return view('user.add');//views/user/add.blade.php即没有user文件夹
 //});

// Route::post('/user/insert',function(){
// 	echo '用户数据插入';
// });

//老师讲课时(在讲到echo '用户数据插入';时)举例子写的test控制器对应的路由写法。前提是每个test下的方法写好，再写路由
//路由访问控制器  参数1 路由规则  参数2 控制器@方法名,但是这个方法太麻烦，下面马上讲用laravel框架的资源控制器或者隐士控制器
// Route::get('/test/index','TestController@index');
// Route::get('/test/add','TestController@add');
// Route::get('/test/edit/{id}','TestController@edit');
// Route::post('/test/insert','TestController@insert');
//资源控制器 路由
// Route::resource('/user', 'UserController');

//隐式控制器 路由
//Route::Controller('/test','TestController');
Route::Controller('/admins','UserController');
//
/*Route::get('/setcookie',function(){
	//设置cookie
	//Cookie::queue('name','iloveyou',1);//单位为分钟,不是秒
	//Cookie::queue('id','110',1);
	
	return response('haha')->withCookie('uid',10,10);//10是值，10是分钟。
responseText是ajax请求服务器，获取请求回来的内容，response()返回来的是个字符串。
并且用withCookie()方法来设置cookie.

});
//Route::get('/getcookie',function(){
	//读取cookie
	//echo Cookie::get('id');//
	//$request->cookie('name');//请求对象这个报错了，里边没有request
	//echo Cookie::get('name','iloveyou',10);//单位为分钟
//});

//方法获取cookie
Route::get('/getcookie','TestController@cookie');*/
