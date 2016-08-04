<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>列表页</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('/css/bootstrap-theme.min.css')}}">
	<script src="{{asset('/js/jquery-1.11.3.min.js')}}"></script>
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
	<style>
		#zonglei{height:50px;margin-bottom:15px;}
		.fenlei{float:left;width:20%;text-align:center;}
		.fenlei ul{position: absolute;display:none;z-index:1;background:#f39;}
		.fenlei div{font-size:25px;}
		li{overflow:hidden;}
	</style>
</head>
<body style="padding:50px 0;">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav" style="float:right">
		    	<li><a href="">您好欢迎光临凡客诚品!</a></li>
		    	<li><a href="">登录</a></li>
		    	<li><a href="">|</a></li>
		    	<li><a href="">注册</a></li>
		    	<li><a href="">我的订单</a></li>
		    	<li><a href=""><span style="color:#d9534f" class="glyphicon glyphicon-shopping-cart" id="span3">我的购物车</span></a></li>
		    </ul>
		</div>
	</nav>
	<!--导航-->
	<nav style="background:gray;height:100px;line-height:100px" class="navbar navbar-default" role="navigation">
	   	<div class="row">
	   	<div id="zonglei" class="col-md-10 col-md-offset-1">
	   		<div class="fenlei">
	   			<div>男装</div>
	   			<ul>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   			</ul>
	   		</div>
	   		<div class="fenlei">
	   			<div>男装</div>
	   			<ul>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   			</ul>
	   		</div>
	   		<div class="fenlei">
	   			<div>男装</div>
	   			<ul>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   			</ul>
	   		</div>
	   		<div class="fenlei">
	   			<div>男装</div>
	   			<ul>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   			</ul>
	   		</div>
	   		<div class="fenlei">
	   			<div>男装</div>
	   			<ul>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   				<li>啊啊啊啊啊啊啊</li>
	   			</ul>
	   		</div>
	   	</div>
	   	</div>
	</nav>

	
	<script type="text/javascript">
		$('.fenlei div').hover(function(){
			$(this).siblings().css({display:'block'});
		},function(){
			$(this).siblings().css({display:'none'});
		})
	</script>
	<div style="width:70%;margin:0 auto">
		<!--列表内容start-->
		<!--<div>当前位置：所有分类&nbsp;>&nbsp;男装</div>-->
		

		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
				  <li><a href="#">当前位置：</a></li>
				  <li><a href="#">所有分类</a></li>
				  <li><a href="#">男装</a></li>
				  <!-- <li><a href="#">连衣裙</a></li>
				  <li class="active">衬衫裙</li> -->
				</ol>
			</div>
		</div>
		<ul class="nav nav-pills">
		  <li role="presentation" class=""><a href="#">T恤</a></li>
		  <li role="presentation" class=""><a href="#">衬衫</a></li>
		  <li role="presentation" class=""><a href="#">上装</a></li>
		  <li role="presentation" class=""><a href="#">裤装</a></li>
		  <li role="presentation" class=""><a href="#">其他</a></li>
		</ul>
		
		
		<div class="row">
			<div class="col-md-1">
			                    <a title="按推荐由高到低" name="s_order_27544_5" class="track" href="#">
			        	                    <b>默认</b>
			        	                    <!-- <span class="upTrendBottom" style="text:hidden">按推荐由高到低</span> -->
			                    </a>
			              
			</div>
			
			<div class="col-md-1">
                    <a title="按评价从高到低" name="s_order_27544_5" class="track" href="#">
        	                    <b>好评</b>
        	                    <!--<span class="upTrendBottom">按评价从高到低</span>-->
                 	</a>
			</div>

			<div class="col-md-1">
        	                <a title="按价格从低到高" name="s_order_27544_3" class="track" href="#">
        	                    <b>价格</b>
        	                    <!--<span class="BottomTrendUp">按价格从低到高</span>-->
        	                </a>
			</div>
		</div>
        <!-- 从网站上粘贴的源代码<div class="presentation">
            <ul>
                <li class="moren">
                    <a title="按推荐由高到低" name="s_order_27544_10" class="track" href="27544.html">
        	                    <em>默认</em>
        	                    <span class="upTrendBottom">按推荐由高到低</span>
                    </a>
                </li>
                
                <li class="haoping">
                    <a title="按评价从高到低" name="s_order_27544_5" class="track" href="27544-s5.html">
        	                    <em>好评</em>
        	                    <span class="upTrendBottom">按评价从高到低</span>
                 	</a>
                </li>
                <li class="jiage jiageHover" id="sortTypeMore">
        	                <a title="按价格从低到高" name="s_order_27544_3" class="track" href="27544-s3.html">
        	                    <em>价格</em>
        	                    <span class="BottomTrendUp">按价格从低到高</span>
        	                </a>
                </li>                        
            </ul>
         		</div>    -->
     
         
		<div class="row">
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="{{asset('/img/201608031.jpg')}}" alt="...">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><!-- <a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a> --></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="{{asset('/img/201608032.jpg')}}" alt="...">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><!-- <a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a> --></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="{{asset('/img/201608031.jpg')}}" alt="...">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><!-- <a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a> --></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="{{asset('/img/201608032.jpg')}}" alt="...">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><!-- <a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a> --></p>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="row">
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="{{asset('/img/2016080331.png')}}" alt="...">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><!-- <a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a> --></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="{{asset('/img/20160803412.jpg')}}" alt="...">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><!-- <a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a> --></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="{{asset('/img/2016080331.png')}}" alt="...">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><!-- <a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a> --></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="{{asset('/img/20160803412.jpg')}}" alt="...">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><!-- <a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a> --></p>
		      </div>
		    </div>
		  </div>
		</div>
		<!--分页start-->
		<div class="container-fluid" style="text-align:right">
			<div class="row-fluid">
				<div class="span12">
					<div class="pagination">
						<ul class="pagination">
							<li>
								<a rel="nofollow" href="#">上一页</a>
							</li>
							<li>
								<a rel="nofollow" href="#">1</a>
							</li>
							<li>
								<a rel="nofollow" href="#">2</a>
							</li>
							<li>
								<a rel="nofollow" href="#">3</a>
							</li>
							<li>
								<a rel="nofollow" href="#">4</a>
							</li>
							<li>
								<a rel="nofollow" href="#">5</a>
							</li>
							<li>
								<a rel="nofollow" href="#">下一页</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--分页end-->
	<div class="jumbotron" style="text-align:center;color:red;background:#f369;border-radius:20px">
		  <h1>丨 京 东 丨 好 快 省 丨</h1>
		  <p></p>
	</div><hr>
	</div>
	<!--列表内容end-->
	<!--底部-->
	<footer class="footer ">
	  <!-- <div class="container">
	    <div class="row footer-top">
	      <div class="col-sm-6 col-lg-6">
	        <h4>
	          <img src="http://static.bootcss.com/www/assets/img/logo.png">
	        </h4>
	        <p>本网站所列开源项目的中文版文档全部由<a href="http://www.bootcss.com/">Bootstrap中文网</a>成员翻译整理，并全部遵循 <a target="_blank" href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>协议发布。</p>
	      </div>
	      <div class="col-sm-6  col-lg-5 col-lg-offset-1">
	        <div class="row about">
	          <div class="col-xs-3">
	            <h4>关于</h4>
	            <ul class="list-unstyled">
	              <li><a href="/about/">关于我们</a></li>
	              <li><a href="/ad/">广告合作</a></li>
	              <li><a href="/links/">友情链接</a></li>
	              <li><a href="/hr/">招聘</a></li>
	            </ul>
	          </div>
	          <div class="col-xs-3">
	            <h4>联系方式</h4>
	            <ul class="list-unstyled">
	              <li><a target="_blank" title="Bootstrap中文网官方微博" href="http://weibo.com/bootcss">新浪微博</a></li>
	              <li><a href="mailto:admin@bootcss.com">电子邮件</a></li>
	            </ul>
	          </div>
	          <div class="col-xs-3">
	            <h4>旗下网站</h4>
	            <ul class="list-unstyled">
	              <li><a target="_blank" href="http://www.golaravel.com/">Laravel中文网</a></li>
	              <li><a target="_blank" href="http://www.ghostchina.com/">Ghost中国</a></li>
	            </ul>
	          </div>
	          <div class="col-xs-3">
	            <h4>赞助商</h4>
	            <ul class="list-unstyled">
	              <li><a target="_blank" href="http://www.ucloud.cn/">UCloud</a></li>
	              <li><a target="_blank" href="https://www.upyun.com">又拍云</a></li>
	            </ul>
	          </div>
	        </div>
	      </div>
	    </div>
	    <hr>
	    <div class="row footer-bottom">
	      <ul class="list-inline text-center">
	        <li><a target="_blank" href="http://www.miibeian.gov.cn/">京ICP备11008151号</a></li><li>京公网安备11010802014853</li>
	      </ul>
	    </div>
	  </div> -->
	</footer>
</body>
</html>