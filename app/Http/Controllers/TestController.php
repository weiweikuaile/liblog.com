<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{

 
    /**
     * 测试
     */
    public function getIndex()
    {
    	//echo '测试列表页';
    	return view('test.index');
    }

      /**
     * 测试
     */
    public function getList()
    {
        //echo '测试列表页';
        return view('test.list');
    }
    /**
     * 测试添加表单
     */
    public function getAdd()
    {
    	//显示表单 解析模板
    	return view('user.add');
    }

    /**
     * 测试数据添加
     */
    public function postInsert(Request $request)
    {
    	//提取所有的参数
    	$data = $request->all();
    	// dd($data);
    	//检测数据
    	if($data['username'] != 'admin'){
    		//将所有的请求参数闪存
    		$request->flash();
    		//只闪存一部分参数
    		// $request->flashOnly('username');
    		//除了那一部分参数不闪存
    		// $request->flashExcept('username');
    		//在模板中提取闪存 old('username')
    		// value="{{old('username')}}"
    		//退回
    		// return back();
    		return back()->withInput(['error'=>'数据错误']);
    	}
    }


    /**
     * 上传
     */
    public function postUpload(Request $request)
    {
    	// dd($request->all());

    	//文件上传的form表单中 必须有 enctype="multipart/form-data" 
    	//检测是否有上传文件
    	if($request->hasFile('pic')){
    		//文件名称
    		$name = md5(time()+rand(111111,8999999));
    		//文件后缀名获取
    		$suffix = $request->file('pic')->getClientOriginalExtension();
    		$arr = ['jpg','png'];
    		//判断文件上传类型
    		if(!in_array($suffix,$arr)){
    			echo '上传文件不符合要求';die;
    		}
    		//将指定文件移动到指定位置
    		$request->file('pic')->move('./uploads/', $name.'.'.$suffix);
    	}
    }

 	/**
 	 * 测试修改
 	 */
 	public function getEdit(Request $request)
 	{
 		// echo '用户修改'.$request->input('id');
 		//请求的基本信息获取

 		//获取当前请求的路径
 		echo $request->path().'<br>';
 		//检测当前请求是否复合要求
 		var_dump($request->is('admin/*'));
 		echo '<br>';
 		//获取当前请求的完整url
 		echo $request->url().'<br>';
 		//获取当前请求的方法
 		echo $request->method().'<br>';
 		//检测请求方法
 		var_dump($request->isMethod('post'));
 		echo '<br>';

 		//请求参数的获取
 		//获取当前请求参数
 		echo \Input::get('id').'<br>';

 		//在当前命名空间下没有找到这个类
 		//Class 'App\Http\Controllers\Input' not found 

 		//获取当前请求参数 带默认参数
 		echo $request->input('id',120).'<br>';

 		//检测当前参数是否存在 
 		var_dump($request->has('id'));

 		//提取所有参数
 		// dd($request->all());

 		//提取部分参数 
 		//只提取哪些
 			// dd($request->only(['id','name']));
 		//除了哪些不要
 			// dd($request->except(['name','class']));

 		
 	}


    /**
     * 获取cookie
     */
  public function cookie(Request $request)
  {
    echo $request->cookie('uid');
  }

//如果没有在路由设置，就直接走的隐士路由
   public function getText(Request $request)//这里的Requests和$resquest必须写
   {
   	//普通字符串
        //echo "222";//或者return "222";
   	//显示模板
   	//return response()->view('user.add');
   	//return view('user.add');少写response(),效果一样
   	//echo $request->cookie('uid');
    //return redirect('/getcookie');

    //返回json，这里不能省略response()，
    /*ajax请求数据为数组时，返回的是json;如果你自己封装一个接口，
    请求接口时，返回的是json或xml，大部分返回的是json,xml是微信.
    这里的接口：指的是定义一个链接指定到我当前的一个脚本，要求你传什么参数过来，
    把传过来的参数做预处理，可以返回一些东西。
    其实说的接口就是一个方法，要求返回的格式为json格式*/
      //return response()->json(['a'=>100,'b'=>2000]);//成功，浏览器显示{"a":100,"b":2000}
        //下载文件（调式程序时核对代码里下载文件名和uploads下载的文件名一致，并且把json注释掉，才能下载成功，有时开始不行，可以改改后缀名试一试然后改回来。）
           return response()->download('./uploads/iloveyou.jpg');//谷歌浏览器console出现Resource interpreted as Document but transferred with MIME type image/jpeg: "http://weilitest.liblog.com/test/text".
        //页面跳转(跳转就是去找路由。) 回退 back()
       //return redirect('/getcookie');
   }
    /**
     * 视图演示
     */
    public function getShow()
    {
    	$user=[
    	'id'=>1,
    	'username'=>'admin',
    	'password'=>'123456'
    	];
    	//return view('user.add');
    	return view('Test.hobby',['title'=>'用户爱好','hobby'=>'爱好唱歌']);

    }



}