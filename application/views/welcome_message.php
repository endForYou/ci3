<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=gb2312" />
<title>华夏会计网</title>
<meta name="keywords" content="华夏会计网,会计网,华夏" />
<meta name="description" content="华夏会计网" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" / >
<link rel="stylesheet" type="text/css" href="http://static.hxacc.com/views/site/css/style1.css" />
<script type="text/javascript" src="http://static.hxacc.com/views/site/js/common.js"></script>
<script type="text/javascript" src="http://static.hxacc.com/views/css/site/script/jquery.js"></script>
</head>
<body>
<!-- Banner begin -->
<div class="banner">
  <div class="banner_c"> <img src="/views/site/images/logo.png" alt="华夏会计网" />
     <ul class="banner_nav clearfix">
      <li class="n1"><a href="/kuaijicongye/index.html" target="_blank">会计从业</a></li>
      <li class="n2"><a href="/chujizhicheng/index.html" target="_blank">初级职称</a></li>
      <li class="n3"><a href="/zhongjizhicheng/index.html" target="_blank">中级职称</a></li>
      <li class="n4"><a href="/zhucekuaijishi/index.html" target="_blank">注册会计师</a></li>
      <li class="n5"><a href="/jixujiaoyu/index.html" target="_blank">继续教育</a></li>
      <li class="n6"><a href="/index.php/ucenter/user_home" target="_blank">个人中心</a></li>
    </ul>
  </div>
</div>
<!-- Banner end -->
<!-- 导航 begin -->
<div class="navTop">
  <div class="nav">
    <ul class="clearfix">
      <li class="selected"><a href="/index.html" target="_blank">首页</a></li>
      <li><a href="/kuaijizixun/index.html" target="_blank">会计资讯</a></li>
      <li><a href="/index.php/site/content/li/1/30/caikuaifagui" target="_blank">法律法规</a></li>
      <li><a href="/shuiwufudao/index.html" target="_blank">税务辅导</a></li>
      <li><a href="/caikuaiyuandi/index.html" target="_blank">财会园地</a></li>
      <li><a href="/" target="_blank">论坛</a></li>
      <li><a href="/" target="_blank">网上书店</a></li>
      <li><a href="/index.php/site/card" target="_blank">学习卡</a></li>
    </ul>
    <div class="tel"><img src="/views/site/images/hxacc_index_tel.jpg" alt="4006509250" title="4006509250" /></div>
  </div>
</div>
<!-- 导航 end --><div class="wrap_top">
  <div class="wrap">
    <!-- main -->
    <!-- Part 01 begin -->
    <div class="part_01 clearfix">
      <!--用户登陆 碎片-->
      		<div class="p_left">
        <!-- left begin -->
        <div class="tit tit_01">
          <h2><span class="imgTitle img01">用户登录</span></h2>
        </div>
        <div class="blk_01" id="box_login" style="display:none;">
          <form>
            <div class="p">用户名
              <input type="text" class="inp_01" value="" name="username" id="username" />
            </div>
            <div class="p">密码&nbsp;&nbsp;
              <input type="password" class="inp_01" value="" name="passwd" id="password" />
            </div>
            <div class="p" style="position:relative">验证码
              <input type="text" class="inp_01" value="" style="width:48px;" name="vcode" id="validate_code" />
			  <img id="safecode" class="pvimg" src="/index.php/common/authimg" alt="验证码,点击刷新" onclick="reloadcode();"/> 
            </div>
            <div class="v">              
              <input type="checkbox" class="checkbox" id="remember_me" />
              记住我 | <a href="/index.php/ucenter/lost_pass" target="_blank">忘记密码</a></div>
            <span id="login_msg" style="color:red">　</span>
            <div class="v">
              <input type="button" class="submit" value="" id="btn_login" /> | <a href="/index.php/ucenter/register" class="f_grey">注册会员</a>
            </div>
          </form>
        </div>
        <div class="blk_01" id="box_logined" style="display:none;">
          <div align="center" style="padding:30px 0px 3px 0px;">欢迎 <span id="login_username"></span></div>
          <div align="center" style="padding:3px 0;"><a href="/index.php/ucenter/user_home">进入我的空间</a> | <a href="javascript:void(0);" id="btn_logout">退出登录</a></div>
          <div class="line_01"></div>
          <div align="center" style="padding:3px 0;"><a href="/index.php/ucenter/user_info">修改信息</a> | <a href="/index.php/ucenter/user_info/password">修改密码</a></div>
          <div align="center" style="padding:3px 0;"><a href="/index.php/ucenter/course">课程列表</a> | <a href="/index.php/ucenter/grade">成绩列表</a></div>
          <div align="center" style="padding:3px 0;"><a href="/index.php/ucenter/order">订单列表</a> | <a href="/index.php/ucenter/question">提问列表</a></div>
        </div>
      </div>
      <!-- left end -->
	  
<script type="text/javascript">
function reloadcode(){
	document.getElementById('safecode').src = '/index.php/common/authimg?' + Math.random();
}

function check_login(){
		var	myurl = "/index.php/ucenter/login/validate_login";
		$.ajax({
			type: "GET",
			url: myurl,
			dataType: 'json',
			success: function(rs){
//				alert(rs.msg);
				if(rs.msg == "true"){				
                                        $("#box_login").hide();
                                        $("#box_logined").show();
					$("#login_username").html(rs.account);
				}else if(rs.msg == "false"){
					$("#box_login").show();
					$("#box_logined").hide();
				}else{
					
				}
			}
		});
}

$(document).ready(function()
{
         shouye_login = function(){
                 var	myurl = "/index.php/ucenter/login/validate";
		
		var username = $('#username').val();
		var password = $('#password').val();
		var auth_code = $('#validate_code').val();
		var url = "-1";
		var remember_me = 0;
		if($("#remember_me").attr('checked')){
			remember_me = 1;
		}
		
		var data = {username:username,password:password,auth_code:auth_code,url:url,remember_me:remember_me};
		$.ajax({
			type: "POST",
			url: myurl,
			data: data,
			dataType: 'json',
			success: function(rs){
				if(rs.msg == "succ" && rs.type=='login'){
					//setTimeout("location.reload();",100);
                                        $("#box_login").hide();
                                        $("#box_logined").show();
					$("#login_username").html(username);		
				}else if(rs.msg == "succ" && rs.type=='register'){
					window.location.href='/index.php/ucenter/register/reg5/'+rs.name+'/'+rs.pass;
				}
				else{
					$("#login_msg").html(rs.msg);
                                        $('#password').val('');
					$('#validate_code').val('');
					reloadcode();
				}
			}
		});
         }
$('#btn_login').click(
       shouye_login
);
	$('#btn_logout').click(function(){
		var	myurl = "/index.php/ucenter/login/logout/1";
		
		$.ajax({
			type: "POST",
			url: myurl,
			data: null,
			dataType: 'json',
			success: function(rs){
				if(rs.msg == "succ"){
					setTimeout("location.reload();",100);	
				}
				else{
					$("#login_msg").html(rs.msg);
				}
			}
		});
	});
        $(document).keydown(function(event){
               if(event.keyCode == 13){
                           shouye_login();
               }
        });
	check_login();
});
</script>      <div class="p_middle">
        <!-- middle begin -->
        <!-- 焦点图 begin -->
        <div class="focus">
          <div class="FocusImg" style="position:relative;z-index:19999;">
            <div class="BigPic" id="BigPic"><a href="/kuaijicongye/index.html" target="_blank" onclick="recordBlogHotPv(this, '', '');"><img src="/views/site/images/default.gif" style="FILTER: revealTrans(duration=1,transition=23);" galleryimg="no" alt="" /></a></div>
            <div class="TitleBg"></div>
            <div class="TitleBox" id="TitleBox"></div>
          </div>
          <div class="SmallPics" id="SmallPics">
            <!-- 小图列表 -->
          </div>
          <s class="tl"></s>
          <s class="tr"></s>
          <s class="bl"></s>
          <s class="br"></s>
        </div>
        <script language="javascript" type="text/javascript">
		<!--//--><![CDATA[//><!--
		var FocusPic_01 = new FocusPic("BigPic","SmallPics","TitleBox");
		                FocusPic_01.Add('/image2/0/2015/1516595660713.jpg','',"/jixujiaoyu/index_beijingshizhi.html","");
		FocusPic_01.Add('/image2/0/2015/151700089279.jpg','',"/kuaijicongye/index.html","");		FocusPic_01.begin();
		//--><!]]>
		</script>
        <!-- 焦点图 end  -->
        <!-- middle end -->
      </div>
      <div class="p_right">
        <!-- right begin -->
        <a href="/jixujiaoyu/index.html" target="_blank"><img src="http://static.hxacc.com/views/site/images/hxacc_index_04.jpg" alt="" title="" /></a>
        <img src="/views/site/images/hxacc_index_05.jpg" alt="" title="" style="margin:2px 0 0 3px"" />
        <!-- right end -->
      </div>
    </div>
    <!-- Part 01 end -->
    <div class="p960">
      <!-- Part 02 begin -->
      <div class="part_02">
        <div class="p_left">
          <!-- left begin -->
          <div class="tit tit_01">
          <h2><span class="imgTitle img02">使用帮助</span></h2>
            <span class="more"></span></div>
          <div class="pcont01">
             <ul class="list list_02">
              <li><a href="/index.php/site/content/content_show/1216/0" target="_blank">登录流程</a></li>
              <li><a href="/index.php/site/content/content_show/1220/0" target="_blank">听课计时说明</a></li>
              <li><a href="/index.php/site/content/content_show/1217/0" target="_blank">注册流程</a></li>
              <li><a href="/index.php/site/content/content_show/1222/0" target="_blank">视频软件下载</a></li>
              <li><a href="/index.php/site/content/content_show/1218/0" target="_blank">听课流程</a></li>
              <li><a href="/index.php/site/content/content_show/1227/0" target="_blank">安装使用流程</a></li>
              <li><a href="/index.php/site/content/content_show/1219/0" target="_blank">答疑帮助</a></li>
              <li><a href="/index.php/site/content/content_show/1223/0" target="_blank">课件常见问题</a></li>
            </ul>          </div>
          <!-- left end -->
        </div>
        <div class="p_middle">
          <!-- middle begin -->
          <div class="tit tit_02">
            <h2><a href="/kuaijicongye/index.html" class="imgTitle img03">会计从业</a></h2>
            <div class="menu01">
            <span id="btn01"><a href="/index.php/site/content/li/1/3">考试动态</a></span>
            <span id="btn02"><a href="/index.php/site/content/li/1/4">试题大纲</a></span>
            <span id="btn03"><a href="/index.php/site/content/li/1/5">复习指导</a></span> 
            <span id="btn04"><a href="/index.php/site/content/li/1/6">应试技巧</a></span> 
            </div>
          </div>
          <div class="pcont02">
            <a href="__ke_temp_url__"></a><u><b><a href="/index.php/site/content/content_show/11831/0"><span style="font-size:18px;">2015上半年北京会计从业开始报名</span></a></b></u> <div id="cont01" class="cont01">
<ul class="list pot list_04 lh26"><A href="/index.php/site/content/content_show/3769/0" target=_blank ?="" 0?="" 3769="" content_show="" site="" content=""></a> <li><a href="/index.php/site/content/content_show/11595/0" target="_blank"><span style="color:#003399;">会计从业资格考试大纲（修订）的通知...</span></a></li>
<li><a href="/index.php/site/content/content_show/5019/0" target="_blank"></a><a href="/index.php/site/content/content_show/11826/0" target="_blank"><span style="color:#003399;">2015上半年北京会计从业考试报名时间...</span></a></li>
<li><a href="/index.php/site/content/content_show/11833/0" target="_blank"><span style="color:#003399;"><span style="color:#003399;">关于2015年北京会计专业技术资格考试...</span></span></a></li>
<li><a href="/index.php/site/content/content_show/11836/0" target="_blank"><span style="color:#003399;">2015河北第一季会计从业考试报名时间...</span></a></li>
<li><a href="/index.php/site/content/content_show/11840/0" target="_blank"><span style="color:#003399;">2015黑龙江会计从业考试报名入口</span></a></li>
<li><a href="/index.php/site/content/content_show/11838/0" target="_blank"><span style="color:#003399;">2015云南上半年会计从业考试时间...</span></a></li>
</ul>
</div>
<!-- 历年试题 --><div id="cont02" class="cont01">
<h2 class="f14 bold"><a href="/index.php/site/content/content_show/11596/0" target="_blank"><span style="color:#003399;">2014《会计基础》考试大纲</span></a></h2>
<ul class="list pot lh26 list_04">
<li><a href="/index.php/site/content/content_show/11597/0" target="_blank"><span style="font-family:宋体;color:#003399;font-size:12px;">2014《财经法规与会计职业道德》考试大纲</span><span style="color:#003399;"> </span></a></li>
<li><a href="/index.php/site/content/content_show/11598/0" target="_blank"><span style="font-family:宋体;color:#003399;font-size:12px;">2014《会计电算化》考试大纲</span><span style="color:#003399;"> </span></a></li>
<li><a href="/index.php/site/content/content_show/11599/0" target="_blank"><span style="color:#003399;">2014《珠算》考试大纲</span></a></li>
<li><a href="/index.php/site/content/content_show/50/0" target="_blank"><span style="color:#003399;">2008年北京市会计资格考试《会计基础》试题..</span></a></li>
<li><a href="/index.php/site/content/content_show/101/0" target="_blank"><span style="color:#003399;">2008年北京市会计资格考试《会计基础》答案</span></a></li>
<li><a href="/index.php/site/content/content_show/4407/0" target="_blank"><span style="color:#003399;">2008年北京市会计资格考试《会计基础》答案</span></a></li>
</ul>
</div>
<div id="cont03" class="cont01">
<h2 class="f14 bold"><a href="/index.php/site/content/content_show/11645/0" target="_blank"><span style="color:#003399;">会计从业考试每日一练/会计基础</span></a></h2>
<ul class="list pot lh26 list_04">
<li><a href="/index.php/site/content/content_show/11644/0" target="_blank"><span style="color:#003399;">会计从业考试每日一练/会计基础</span></a></li>
<li><a href="/index.php/site/content/content_show/11643/0" target="_blank"><span style="color:#003399;">会计从业考试每日一练/会计基础</span></a></li>
<li><a href="/index.php/site/content/content_show/11642/0" target="_blank"><span style="color:#003399;">会计从业考试每日一练/财经法规</span></a></li>
<li><a href="/index.php/site/content/content_show/11641/0" target="_blank"><span style="color:#003399;">会计从业考试每日一练/财经法规</span></a></li>
<li><a href="/index.php/site/content/content_show/11640/0" target="_blank"><span style="color:#003399;">会计从业考试每日一练/会计基础</span></a></li>
<li><a href="/index.php/site/content/content_show/11639/0" target="_blank"><span style="color:#003399;">会计从业考试每日一练/财经法规</span></a></li>
</ul>
</div>
<div id="cont04" class="cont01">
<h2 class="f14 bold"><a href="/index.php/site/content/content_show/3792/0" target="_blank">2012年会计从业资格考试备考指导（一）</a></h2>
<ul class="list pot lh26 list_04">
<li><a href="/index.php/site/content/content_show/3793/0" target="_blank">2012年会计从业资格考试备考指导（二）</a></li>
<li><a href="/index.php/site/content/content_show/3794/0" target="_blank">2012年会计从业资格考试备考指导（三）</a></li>
<li><a href="/index.php/site/content/content_show/3795/0" target="_blank">2012年会计从业资格应试技巧(1)</a></li>
<li><a href="/index.php/site/content/content_show/3796/0" target="_blank">2012年会计从业资格应试技巧(2)</a></li>
<li><a href="/index.php/site/content/content_show/3797/0" target="_blank">会计从业资格考试财经法规的应试技巧(1)</a></li>
<li><a href="/index.php/site/content/content_show/3798/0" target="_blank">会计从业资格考试财经法规的应试技巧(2)</a></li>
</ul>
</div>          </div>
          <script type="text/javascript" language="javascript">
        var SubShow_01 = new SubShowClass("none","onmouseover");
        SubShow_01.addLabel("btn01","cont01");
        SubShow_01.addLabel("btn02","cont02");
        SubShow_01.addLabel("btn03","cont03");
        SubShow_01.addLabel("btn04","cont04");
      </script>
          <!-- middle end -->
        </div>
        <div class="p_right">
          <!-- right begin -->
          <div class="tit tit_02">
            <h2><a href="/zhongjizhicheng/index.html" class="imgTitle img04">中级职称</a></h2>
            <div class="menu01"> 
            <span id="btn11"><a href="/index.php/site/content/li/1/13">考试动态</a></span> 
            <span id="btn12"><a href="/index.php/site/content/li/1/14">每日一练</a></span> 
            <span id="btn13"><a href="/index.php/site/content/li/1/16">历年试题</a></span> 
            <span id="btn14"><a href="/index.php/site/content/li/1/15">考试大纲</a></span> </div>
          </div>
          <div class="pcont02">
          <div id="cont11" class="cont01">
<h2 class="f14 bold"><a href="/index.php/site/content/content_show/11832/0" target="_blank"><span style="color:#003399;font-size:16px;">2015年中级会计职称实施无纸化</span></a></h2>
<ul class="list pot list_04 lh26"><A href="/index.php/site/content/content_show/3769/0" target=_blank ?="" content="" site="" content_show="" 3769="" 0?=""></a> <li><a href="/index.php/site/content/content_show/11616/0" target="_blank"></a><a href="/index.php/site/content/content_show/11835/0" target="_blank"><span style="color:#003399;">关于2015北京会计专业技术资格考试</span></a></li>
<li><a href="/index.php/site/content/content_show/11828/0" target="_blank"></a><a href="/index.php/site/content/content_show/11828/0" target="_blank"><span style="color:#003399;">2015年会计职称考试报名时间</span></a></li>
<li><a href="/index.php/site/content/content_show/11617/0" target="_blank"></a><a href="/index.php/site/content/content_show/11825/0" target="_blank"><span style="color:#003399;">2015会计职称考试计划及有关通知</span></a></li>
<li><a href="/index.php/site/content/content_show/11622/0" target="_blank"><span style="color:#003399;">2014年广东省中级会计师报名时间</span></a></li>
<li><a href="/index.php/site/content/content_show/11619/0" target="_blank"></a><a href="/index.php/site/content/content_show/11619/0" target="_blank"><span style="color:#003399;">全国各地中级会计师报名网站汇总</span></a></li>
<li><a href="/index.php/site/content/content_show/11620/0" target="_blank"></a><a href="/index.php/site/content/content_show/11620/0" target="_blank"><span style="color:#003399;">全国会计职称中级证书取得人数</span><!-- 每日一练 --></a></li>
</ul>
</div>
<!-- 历年试题 --><div id="cont12" class="cont01">
<h2 class="f14 bold"><span style="color:#003399;"><a href="/index.php/site/content/content_show/11656/0" target="_blank">中级会计职称与实务---每日一练</a></span></h2>
<ul class="list pot lh26 list_04">
<li><span style="font-family:宋体;color:#003399;font-size:12px;"><a href="/index.php/site/content/content_show/11655/0" target="_blank"><span style="font-family:Tahoma;">中级会计职称与实务---每日一练</span></a></span></li>
<li><span style="font-family:宋体;color:#003399;font-size:12px;"><a href="/index.php/site/content/content_show/11654/0" target="_blank"><span style="font-family:Tahoma;">中级会计职称与实务---每日一练</span></a></span></li>
<li><span style="color:#003399;"><a href="/index.php/site/content/content_show/11653/0" target="_blank">中级会计职称与实务---每日一练</a></span></li>
<li><span style="color:#003399;"><a href="/index.php/site/content/content_show/11652/0" target="_blank">中级会计职称与实务---每日一练</a></span></li>
<li><span style="color:#003399;"><a href="/index.php/site/content/content_show/11651/0" target="_blank">中级会计职称与实务---每日一练</a></span></li>
<li><span style="color:#003399;"><a href="/index.php/site/content/content_show/11650/0" target="_blank">中级会计职称与实务---每日一练</a></span></li>
</ul>
</div>
<div id="cont13" class="cont01">
<h2 class="f14 bold"><span style="color:#003399;"><span style="color:#003399;">2012年会计从业资格考试备考指导</span></span></h2>
<ul class="list pot lh26 list_04">
<li><span style="color:#003399;"><a href="/index.php/site/content/content_show/4506/0" target="_blank"><span style="color:#003399;">2012年中级会计职称考试《财务管理》真题及答案</span></a></span></li>
<li><span style="color:#003399;"><a href="/index.php/site/content/content_show/4507/0" target="_blank"><span style="color:#003399;">20</span><span style="color:#003399;">12中级会计职称考试真题《中级会计实务》</span></a></span></li>
<li><span style="color:#003399;"><a href="/index.php/site/content/content_show/4504/0" target="_blank"><span style="color:#003399;">2012中级职称考试真题及祥解《经济法》</span></a></span></li>
<li><span style="color:#003399;"><a href="/index.php/site/content/content_show/2783/0" target="_blank">2010年中级会计职称考试《财务管理》真题及答案解析</a></span></li>
<li><span style="color:#003399;"><a href="/index.php/site/content/content_show/435/0" target="_blank">2010中级职称《财经法》试题解析</a></span></li>
<li><span style="color:#003399;"><a href="/index.php/site/content/content_show/3855/0" target="_blank">2011年会计职称考试《中级会计实务》试题及答案解析</a></span></li>
</ul>
</div>
<div id="cont14" class="cont01">
<h2 class="f14 bold"><a href="/index.php/site/content/content_show/3848/0" target="_blank">2012《中级会计实务》考试大纲——第一章总论</a></h2>
<ul class="list pot lh26 list_04">
<li><a href="/index.php/site/content/content_show/3849/0" target="_blank">2012年《中级会计实务》考试大纲——第二章 存货</a></li>
<li><a href="/index.php/site/content/content_show/3850/0" target="_blank">2012年《中级会计实务》考试大纲——第三章 固定资产</a></li>
<li><a href="/index.php/site/content/content_show/3851/0" target="_blank">2012年《中级财务管理》考试大纲——第一章 总论</a></li>
<li><a href="/index.php/site/content/content_show/3852/0" target="_blank">2012年《中级财务管理》考试大纲——第二章 预算管理</a></li>
<li><a href="/index.php/site/content/content_show/3853/0" target="_blank">2012年《中级经济法》考试大纲——第一章 经济法总论</a></li>
<li><a href="/index.php/site/content/content_show/3854/0" target="_blank">2012年《中级经济法》考试大纲—— 第二章 公司法律制度</a></li>
</ul>
</div>          </div>
          <script type="text/javascript" language="javascript">
        var SubShow_02 = new SubShowClass("none","onmouseover");
        SubShow_02.addLabel("btn11","cont11");
        SubShow_02.addLabel("btn12","cont12");
        SubShow_02.addLabel("btn13","cont13");
        SubShow_02.addLabel("btn14","cont14");
      </script>
          <!-- right end -->
        </div>
        <div class="p_bot"></div>
      </div>
      <!-- Part 02 end -->
      
      <!-- Part 02 begin -->
      <div class="part_02">
        <div class="p_left">
          <!-- left begin -->
          <div class="tit tit_01">
            <h2><a href="/index.php/site/question" class="imgTitle img05">学员心声</a></h2>
            <span class="more"></span></div>
          <div class="pcont01">
             <ul class="list list_05">
              <li>张**：感谢华夏会计网让我圆梦..</li>
              <li class="line"></li>
              <li>李**：自从毕业之后就没在好好..</li>
              <li class="line"></li>
              <li>宋*:我是一名普通的大学毕业生..</li>
              <li class="line"></li>
              <li>王*：参加过华夏会计网培训感到.</li>
              <li class="line"></li>
              <li>王**:每年考核的时候总是有想学.</li>
              <li class="line"></li>
              <li>莫**:今年参加了华夏会计网教育</li>
              <li class="line"></li>
              <li>胡*:在工作中遇到的问题在这里</li>
            </ul> 
          </div>
          <!-- left end -->
        </div>
        <div class="p_middle">
          <!-- middle begin -->
          <div class="tit tit_02">
            <h2 class="tH2_01"><a href="/chujizhicheng/index.html" class="imgTitle img06">初级职称</a></h2>
            <div class="menu01"> 
            <span id="btn21"><a href="/index.php/site/content/li/1/8">考试动态</a></span> 
            <span id="btn22"><a href="/index.php/site/content/li/1/9">每日一练</a></span> 
            <span id="btn23"><a href="/index.php/site/content/li/1/11">历年试题</a></span> 
            <span id="btn24"><a href="/index.php/site/content/li/1/10">考试大纲</a></span> </div>
          </div>
          <div class="pcont03">
            <!-- 考试动态 --> <div id="cont21" class="cont01">
<div class="blk_tw"><a class="twpic" href="/index.php/site/content/content_show/429/0" target="_blank"><img alt="" src="/image2/0/2011/060620179023.jpg" width="120" height="90" /></a> <div class="b_txt">
<p class="f14"><a href="/index.php/site/content/content_show/11834/0" target="_blank"><b><span style="color:#003399;font-size:16px;">关于2015北京会计专业...</span></b></a></p>
<p><span style="font-size:12px;" lang="EN-US">北京是财政局关于2015年度北京市会计专业技术...</span></p>
</div>
</div>
<div class="line_01"></div>
<ul class="list pot f14 list_06">
<li><a href="/index.php/site/content/content_show/11824/0"></a><a href="/index.php/site/content/content_show/11824/0"><span style="color:#003399;">2015会计职称考试计划...</span></a> </li>
<li><a href="/index.php/site/content/content_show/11827/0"><span style="color:#003399;">2015会计职称考试报名...</span></a></li>
<li><span style="color:#003399;"><a href="/index.php/site/content/content_show/11601/0" target="_blank"><span style="color:#003399;">2014年初级职称报名时间</span></a></span><!-- 每日一练 --></li>
</ul>
</div>
<div id="cont22" class="cont01">
<div class="blk_tw"><a class="twpic" href="/index.php/site/content/content_show/429/0" target="_blank"><img alt="" src="/image2/0/2011/060620179023.jpg" width="120" height="90" /></a> <div class="b_txt">
<p class="f14"><a href="__ke_temp_url__"><u><b><a href="/index.php/site/content/content_show/11649/0" target="_blank"><span style="color:#003399;font-size:14px;">2014年初级职称每日一练/经济法</span></a></b></u></a></p>
<p><span style="font-size:small;"><span style="font-family:'Tahoma', 'sans-serif';color:#333333;font-size:12px;mso-bidi-font-size:10.5pt;" lang="EN-US"><span>根据支付结算法律制度的规定,关于票据保证的下列表...</span></span></span><span style="font-size:small;"><span style="font-family:'Tahoma', 'sans-serif';color:#333333;font-size:12px;mso-bidi-font-size:10.5pt;" lang="EN-US"><span> </span></span></span></p>
</div>
</div>
<div class="line_01"></div>
<ul class="list pot f14 list_06">
<li><a href="/index.php/site/content/content_show/11648/0" target="_blank"><span style="color:#003399;">2014年初级职称每日一练/经济法</span></a></li>
<li><a href="/index.php/site/content/content_show/11647/0" target="_blank"><span style="color:#003399;">2014年初级职称每日一练/会计实务</span></a></li>
<li><a href="/index.php/site/content/content_show/11646/0" target="_blank"><span style="color:#003399;">2014年初级职称每日一练/会计实务</span></a><!-- 历年试题 --></li>
</ul>
</div>
<div id="cont23" class="cont01">
<div class="blk_tw"><a class="twpic" href="/index.php/site/content/content_show/429/0" target="_blank"><img alt="" src="/image2/0/2011/060620179023.jpg" width="120" height="90" /></a> <div class="b_txt">
<p class="f14"><b><span style="color:#003399;font-size:14px;"><span style="color:#003399;"><a href="/index.php/site/content/content_show/4508/0" target="_blank"><span style="color:#003399;">2012年会计职称考试《经济法基础》真题及答案</span></a></span></span></b></p>
<p><span style="font-family:宋体;font-size:12px;">一、单项选择题（本类题共<span style="font-size:12px;" lang="EN-US">24</span>小题</span> <span style="font-family:宋体;font-size:12px;" lang="EN-US">1.根据税收征收管理法律制度</span>... </p>
</div>
</div>
<div class="line_01"></div>
<ul class="list pot f14 list_06">
<li><span style="color:#003399;"><a href="/index.php/site/content/content_show/4505/0" target="_blank"><span style="color:#003399;">2012</span><span style="color:#003399;">年会计职称考试《初级会计实务》真题及答案</span></a></span></li>
<li><a href="/index.php/site/content/content_show/381/0" target="_blank"><span style="color:#003399;">2010会计职称考试《初级会计实务》真题及答案解析</span></a></li>
<li><a href="/index.php/site/content/content_show/380/0" target="_blank"><span style="color:#003399;">2010初级职称《经济法基础》真题及答案解析</span></a></li>
</ul>
</div>
<!-- 考试大纲 --><div id="cont24" class="cont01">
<div class="blk_tw">
<p><a class="twpic" href="/index.php/site/content/content_show/429/0" target="_blank"><img alt="" src="/image2/0/2011/060620179023.jpg" width="120" height="90" /></a> <a href="/index.php/site/content/content_show/3801/0" target="_blank"><br />
</a></p>
<p><a href="/index.php/site/content/content_show/11517/0" target="_blank"><b><span style="color:#003399;font-size:14px;">2013年初级会计职称考试《经济法基础》考试大...</span></b></a></p>
<div class="b_txt">
<p><span style="font-family:宋体;font-size:12px;mso-bidi-font-family:'Times New Roman';mso-font-kerning:1.0pt;mso-ansi-language:EN-US;mso-fareast-language:ZH-CN;mso-bidi-language:AR-SA;" lang="EN-US">[</span><span style="font-family:宋体;font-size:12px;mso-bidi-font-family:'Times New Roman';mso-font-kerning:1.0pt;mso-ansi-language:EN-US;mso-fareast-language:ZH-CN;mso-bidi-language:AR-SA;">基本要求<span style="font-size:12px;" lang="EN-US">] </span></span><span style="font-size:12px;">（一）掌握法和法律、法的本质与特征</span></p>
</div>
</div>
<div class="line_01"></div>
<ul class="list pot f14 list_06">
<li><a href="/index.php/site/content/content_show/11516/0" target="_blank"><span style="color:#003399;">2013年初级会计职称考试《经济法基础》考试大...</span></a></li>
<li><span style="color:#003399;"><a href="/index.php/site/content/content_show/11515/0" target="_blank"><span style="color:#003399;">2013年初级会计职称考试《经济法基础》考试大</span><span style="color:#003399;">...</span></a></span></li>
<li><a href="/index.php/site/content/content_show/11514/0" target="_blank"><span style="color:#003399;">2013年初级会计职称考试《经济法基础》考试大...</span></a></li>
</ul>
</div>          </div>
          <script type="text/javascript" language="javascript">
        var SubShow_03 = new SubShowClass("none","onmouseover");
        SubShow_03.addLabel("btn21","cont21");
        SubShow_03.addLabel("btn22","cont22");
        SubShow_03.addLabel("btn23","cont23");
        SubShow_03.addLabel("btn24","cont24");
      </script>
          <!-- middle end -->
        </div>
        <div class="p_right">
          <!-- right begin -->
          <div class="tit tit_02">
            <h2 class="tH2_01"><a href="/zhucekuaijishi/index.html" class="imgTitle img07">注册会计师</a></h2>
            <div class="menu01"> 
            <span id="btn31"><a href="/index.php/site/content/li/1/18">考试动态</a></span> 
            <span id="btn32"><a href="/index.php/site/content/li/1/19">每日一练</a></span> 
            <span id="btn33"><a href="/index.php/site/content/li/1/21">历年试题</a></span> 
            <span id="btn34"><a href="/index.php/site/content/li/1/20">考试大纲</a></span> </div>
          </div>
          <div class="pcont03">
            <!-- 考试动态 --> <div id="cont31" class="cont01">
    <div class="blk_tw"><a class="twpic" href="/index.php/site/content/content_show/3775/0" target="_blank"><img alt="" src="/image2/0/2011/0606194881010.jpg" width="120" height="90" /></a> <div class="b_txt">
    <p class="f14"><a href="/index.php/site/content/content_show/11615/0" target="_blank"><b><span style="color:#003399;font-size:16px;">2014年注册会计师全国考试报名</span></b></a></p>
    <p><span style="font-size:12px;">内容摘要：报名人员应与2014年3月31日至4月25日...</span></p>
    </div>
    </div>
    <div class="line_01"></div>
    <ul class="list pot f14 list_06">
    <li><a href="/index.php/site/content/content_show/11614/0" target="_blank"><span style="color:#003399;">2014年注册会计师准考证打印时间</span></a></li>
    <li><a href="/index.php/site/content/content_show/11613/0" target="_blank"><span style="color:#003399;">全国各地注册会计师报名网址汇总</span></a></li>
    <li><a href="/index.php/site/content/content_show/11612/0" target="_blank"><span style="color:#003399;">2014年注册会计师报名交费结束时间</span></a></li>
    </ul>
</div>
<!-- 每日一练 --><div id="cont32" class="cont01">
    <div class="blk_tw"><a class="twpic" href="/index.php/site/content/content_show/11612/0" target="_blank"><img alt="" src="/image2/0/2011/0606194881010.jpg" width="120" height="90" /></a> <div class="b_txt">
    <p class="f14"><b><a href="/index.php/site/content/content_show/11660/0" target="_blank"><span style="color:#003399;font-size:14px;">注册会计师《经济法》每日一练：承租人破产后...</span></a></b></p>
    <p class="f14">甲企业与乙融资租赁公司订立融资租赁合同，乙企业向甲企业... </p>
    </div>
    </div>
    <div class="line_01"></div>
    <ul class="list pot f14 list_06">
    <li><a href="/index.php/site/content/content_show/11659/0" target="_blank"><span style="color:#003399;">注册会计师《税法》每日一练：资源税...</span></a></li>
    <li><a href="/index.php/site/content/content_show/11658/0" target="_blank"><span style="color:#003399;">注册会计师《审计》每日一练：信息...</span></a></li>
    <li><a href="/index.php/site/content/content_show/11657/0" target="_blank"><span style="color:#003399;">注册会计师《会计》每日一练：递延所得...</span></a></li>
    </ul>
</div>
<div id="cont33" class="cont01">
<div class="blk_tw">
<a class="twpic" href="/index.php/site/content/content_show/144/0" target="_blank"><img alt="" src="/image2/0/2011/0606194881010.jpg" width="120" height="90" /></a> <div class="b_txt">
<p class="f14"><b><a href="/index.php/site/content/content_show/473/0" target="_blank"><span style="color:#003399;font-size:14px;">2010注册会计师《税法》考试试题</span></a></b></p>
<p>2010年度注册会计师全国统一考试－专业阶段考试《税法》试题及答案解析... </p>
</div>
</div>
<div class="line_01"></div>
<ul class="list pot f14 list_06">
<li><a href="/index.php/site/content/content_show/472/0" target="_blank"><span style="color:#003399;">2010注册会计师专业阶段《公司战略与风险管理》</span></a></li>
<li><a href="/index.php/site/content/content_show/471/0" target="_blank"><span style="color:#003399;">2010注册会计师专业阶段《会计》考试试题</span></a></li>
<li><a href="/index.php/site/content/content_show/470/0" target="_blank"><span style="color:#003399;">2010注会考试专业阶段《经济法》试题及参考答案</span></a></li>
</ul>
</div>
<!-- 考试大纲 --><div id="cont34" class="cont01">
<div class="blk_tw"><a class="twpic" href="/index.php/site/content/content_show/144/0" target="_blank"><img alt="" src="/image2/0/2011/0606194881010.jpg" width="120" height="90" /></a> <div class="b_txt">
<p class="f14"><b><a href="/index.php/site/content/content_show/452/0" target="_blank"><span style="color:#003399;font-size:14px;">2010年注册会计师专业阶段考试大纲</span></a></b></p>
<p>根据会计准则及其指南和解释等，熟练掌握相关交易事项的各种会计处理、计算方... </p>
</div>
</div>
<div class="line_01"></div>
<ul class="list pot f14 list_06">
<li><a href="/index.php/site/content/content_show/453/0" target="_blank"><span style="color:#003399;">2010年注册会计师专业阶段考试大纲《税法》</span></a></li>
<li><a href="/index.php/site/content/content_show/451/0" target="_blank"><span style="color:#003399;">2010年注册会计师专业阶段考试大纲《公司战略与</span></a></li>
<li><a href="/index.php/site/content/content_show/450/0" target="_blank"><span style="color:#003399;">2010年注册会计师专业阶段考试大纲《审计》</span></a></li>
</ul>
</div>          </div>
          <script type="text/javascript" language="javascript">
        var SubShow_04 = new SubShowClass("none","onmouseover");
        SubShow_04.addLabel("btn31","cont31");
        SubShow_04.addLabel("btn32","cont32");
        SubShow_04.addLabel("btn33","cont33");
        SubShow_04.addLabel("btn34","cont34");
      </script>
          <!-- right end -->
        </div>
        <div class="p_bot"></div>
      </div>
      <!-- Part 02 end -->
      
      <!-- Part 03 begin -->
      <div class="part_02 part_03">
        <div class="p_left">
          <!-- left begin -->
          <div class="tit tit_01">
            <h2><a href="/index.php/site/question" class="imgTitle img08">在线答疑</a></h2>
            <span class="more"><a href="/index.php/site/question">更多&gt;&gt;</a></span></div>
          <div class="pcont01">
            <ul class="list list_05">
<li>学员张**：登陆使用的卡号和密..</li>
<li class="line"></li>
<li>学员李**：播放不出来需要更新..</li>
<li class="line"></li>
<li>学员宋*:软件都需要安装什么才..</li>
<li class="line"></li>
<li>学员王*：单位账目核算过程中..</li>
<li class="line"></li>
<li>学员王**:每年审核的过程中总..</li>
</ul> 
          </div>
          <!-- left end -->
        </div>
        <div class="p_right">
          <!-- right begin -->
          <div class="tit tit_03">
          <h2><a href="/index.php/site/teacher" class="imgTitle img09">师资阵容</a></h2>
          <span class="more"><a href="/index.php/site/teacher">更多&gt;&gt;</a></span></div>
          <div class="p_cont clearfix">
             <div class="scroll">
             <a href="javascript:void(0);" class="arr_left" id="FS_arr_left_01">左移动</a>
             <div class="scroll_cont" id="FS_Cont_01">
             <div class="blk_tw_pic btw01"><a href="/index.php/site/teacher/one/16" target="_blank"><img alt="" src="/upload/201105120800143536.jpg" width="86" height="106" /><span>刘成举</span></a> </div>
<div class="blk_tw_pic btw01"><a href="/index.php/site/teacher/one/1" target="_blank"><img alt="" src="/upload/201105120823559283.jpg" width="86" height="106" /><span>林莉</span></a> </div>
<div class="blk_tw_pic btw01"><a href="/index.php/site/teacher/one/4" target="_blank"><img alt="" src="/upload/201101130526246201.jpg" width="86" height="106" /><span>张荣生</span></a> </div>
<div class="blk_tw_pic btw01"><a href="/index.php/site/teacher/one/5" target="_blank"><img alt="" src="/upload/201101130526393331.jpg" width="86" height="106" /><span>张亚峰</span></a> </div>
<div class="blk_tw_pic btw01"><a href="/index.php/site/teacher/one/6" target="_blank"><img alt="" src="/upload/201105120826117275.jpg" width="86" height="106" /><span>赵桂娟</span></a> </div>
<div class="blk_tw_pic btw01"><a href="/index.php/site/teacher/one/23" target="_blank"><img border="0" alt="" src="/upload//201204081708471641.jpg" width="86" height="106" /><span>邹欣</span></a> </div>
<div class="blk_tw_pic btw01"><a href="/index.php/site/teacher/one/13" target="_blank"><img alt="" src="/upload/201101280211394654.jpg" width="86" height="106" /><span>石景光</span></a> </div>
<div class="blk_tw_pic btw01"><a href="/index.php/site/teacher/one/3" target="_blank"><img alt="" src="/upload/201101130524311333.jpg" width="86" height="106" /><span>司宇佳</span></a> </div>
<div class="blk_tw_pic btw01"><a href="/index.php/site/teacher/one/19" target="_blank"><img alt="" src="/upload/201202151015598664.jpg" width="86" height="106" /><span>潘文富</span></a> </div>
<div class="blk_tw_pic btw01"><a href="/index.php/site/teacher/one/20" target="_blank"><img alt="" src="/upload/201202171110323210.jpg" width="86" height="106" /><span>郝永</span></a> </div>
<div class="blk_tw_pic btw01"><a href="/index.php/site/teacher/one/21" target="_blank"><img alt="" src="/upload/201203040945415053.jpg" width="86" height="106" /><span>聂兴凯</span></a> </div>
<div class="blk_tw_pic btw01"><a href="/index.php/site/teacher/one/15" target="_blank"><img alt="" src="/upload/201103150741356686.jpg" width="86" height="106" /><span>朱传华</span></a> </div>
<div class="blk_tw_pic btw01"><a href="/index.php/site/teacher/one/22" target="_blank"><img alt="" src="/upload/201203051115362140.jpg" width="86" height="106" /><span>孙洁</span></a> </div>             </div>
             <a href="javascript:void(0);" class="arr_right" id="FS_arr_right_01">右移动</a>
             </div>
          </div>
		 <script language="javascript" type="text/javascript">
                  <!--//--><![CDATA[//><!--
                  var focusScroll_01 = new ScrollPic();
                  focusScroll_01.scrollContId   = "FS_Cont_01"; //内容容器ID
                  focusScroll_01.arrLeftId      = "FS_arr_left_01";//左箭头ID
                  focusScroll_01.arrRightId     = "FS_arr_right_01"; //右箭头ID
                  
                  focusScroll_01.frameWidth     = 708;//显示框宽度
                  focusScroll_01.pageWidth      = 118; //翻页宽度
                  focusScroll_01.upright        = false; //垂直滚动
                  focusScroll_01.speed          = 20; //移动速度(单位毫秒，越小越快)
                  focusScroll_01.space          = 20; //每次移动像素(单位px，越大越快)
                  focusScroll_01.autoPlay       = false; //自动播放
                  focusScroll_01.autoPlayTime   = 5; //自动播放间隔时间(秒)
                  
                  focusScroll_01.initialize(); //初始化
                      
                  //--><!]]>
            </script>
          <!-- right end -->
        </div>
        <div class="p_bot"></div>
      </div>
      <!-- Part 03 end -->
      <!-- Part 02 begin -->
      <div class="part_02">
        <div class="p_left">
          <!-- left begin -->
          <div class="space" style="height:2px"></div>
          <div class="tit tit_01">
            <h2><a href="/jixujiaoyu/index.html" class="imgTitle img10">网上教育地区</a></h2>
            <span class="more"><a href="/jixujiaoyu/index.html">更多&gt;&gt;</a></span></div>
          <div class="pcont01" style="padding:0 1px 5px 1px">
            <ul class="list list_03">
<li><a href="/jixujiaoyu/index_beijing.html" target="_blank">北京</a></li>
<li><a href="/jixujiaoyu/index_tianjin.html">天津</a></li>
<li><a href="/jixujiaoyu/index_shanghai.html" target="_blank">上海</a></li>
<li><a href="/jixujiaoyu/index_hebei.html" target="_blank">河北</a></li>
<li><a href="/jixujiaoyu/index_shandong.html" target="_blank">山东</a></li>
<li><a href="/jixujiaoyu/index_siyang.html" target="_blank">泗阳</a></li>
<li><a href="/jixujiaoyu/index_liaoning.html" target="_blank">辽宁</a></li>
<li><a href="/jixujiaoyu/index_shenyang.html" target="_blank">沈阳</a></li>
<li><a href="/jixujiaoyu/index_jilin.html" target="_blank">吉林</a></li>
<li><a href="/jixujiaoyu/index_hunan.html" target="_blank">湖南</a></li>
<li><a href="/index.html">湖北</a></li>
<li><a href="/jixujiaoyu/index_guangdong.html" target="_blank">广东</a></li>
<li><a href="/jixujiaoyu/index_jiangxi.html" target="_blank">江西</a></li>
<li><a href="/index.html">重庆</a></li>
<li><a href="/jixujiaoyu/index_sichuan.html" target="_blank">四川</a></li>
<li><a href="/jixujiaoyu/index_guizhou.html" target="_blank">贵州</a></li>
<li><a href="/jixujiaoyu/index_qinghai.html" target="_blank">青海</a></li>
<li><a href="/jixujiaoyu/index_jiangsu.html" target="_blank">江苏</a></li>
<li><a href="/jixujiaoyu/index_gansu.html" target="_blank">甘肃</a></li>
<li><a href="/jixujiaoyu/index_fujian.html" target="_blank">福建</a></li>
<li><a href="/jixujiaoyu/index_shanxi.html" target="_blank">陕西</a></li>
<li><a href="/jixujiaoyu/index_hainan.html" target="_blank">海南</a></li>
<li><a href="/index.html">芜湖</a></li>
<li><a href="/index.html">包头</a></li>
<li><a href="/index.html">锦州</a></li>
<li><a href="/jixujiaoyu/index_suqian.html" target="_blank">宿迁</a></li>
<li><a href="/jixujiaoyu/index_heilongjiang.html" target="_blank">黑龙江</a></li>
<li><a href="/jixujiaoyu/index_guangxi.html" target="_blank">广西</a></li>
<li><a href="/jixujiaoyu/index_lianyungang.html" target="_blank">连云港</a></li>
<li><a href="/jixujiaoyu/index_neimenggu.html" target="_blank">内蒙古</a></li>
<li><a href="/jixujiaoyu/index_anhui.html" target="_blank">安徽</a></li>
</ul>            <div class="map"><img src="/views/site/images/pic_map.png" alt="全国地图" /></div>
          </div>
          <!-- left end -->
        </div>
        <div class="p_middle">
          <!-- middle begin -->
          <div class="tit tit_02">
            <h2 class="tH2_01"><a href="#" class="imgTitle img11">论坛</a></h2>
            <span class="more"><a href="#">更多&gt;&gt;</a></span></div>
          <div class="pcont04">
            <div class="cont01">
<div class="blk_tw"><a class="twpic" href="/index.php/site/content/content_show/1152/0" target="_blank"><img alt="" src="/image2/0/2011/0606200387233.jpg" height="90" width="120" /></a> <div class="b_txt">
<p class="f14"><a target="_blank" href="/index.php/site/content/content_show/4845/0"><b><span style="font-size:14px;color:#003399;">保险公司代收车船税返还手续费的比例是多少？</span></b></a></p>
<p><span style="font-family:宋体;color:black;font-size:14px;">问：保险公司代收车船税返还手续费的比例是多少？</span><span style="font-size:12px;">... </span></p>
</div>
</div>
<div class="line_01"></div>
<ul class="list pot list_07 clearfix">
<li><a target="_blank" href="/index.php/site/content/content_show/4844/0"> 			<span style="color:#003399;">2012年全国税收收入稳定增</span></a></li>
<span style="color:#003399;"> </span><span style="color:#003399;"> </span><li><a target="_blank" href="/index.php/site/content/content_show/4894/0"><span style="color:#003399;">房屋产权证和契税完税证明</span></a></li>
<span style="color:#003399;"> </span><span style="color:#003399;"> </span><li><a target="_blank" href="/index.php/site/content/content_show/4893/0"><span style="color:#003399;">提供外派海员劳务是否缴纳</span></a></li>
<span style="color:#003399;"> </span><span style="color:#003399;"> </span><li><a target="_blank" href="/index.php/site/content/content_show/4895/0"><span style="color:#003399;">在异地取得的收入如何确定</span></a></li>
</ul>
</div>          </div>
          <div class="space"></div>
          <div class="tit tit_02">
            <h2 class="tH2_01"><a href="/kuaijizixun/index.html" class="imgTitle img13">会计资讯</a></h2>
            <span class="more"><a href="/kuaijizixun/index.html">更多&gt;&gt;</a></span></div>
          <div class="pcont05">
            <p><a target="_blank" href="/index.php/site/content/content_show/5134/0"><b><span style="font-size:16px;color:#003399;">关于印发全国会计领军（后备）人才培养...</span></b><span style="color:#003399;"> </span></a></p>
<ul class="list pot f14 list_08"><li><p><a target="_blank" href="/index.php/site/content/content_show/5133/0"><span style="color:#003399;"> 			关于印发《2013年度注册会计师全国统一考试报名...</span></a></p>
<span style="color:#003399;"> </span></li>
<span style="color:#003399;"> </span><li><a target="_blank" href="/index.php/site/content/content_show/5131/0"><span style="color:#003399;"><span style="color:#003399;"> 			财政部注册会计师考试委员会公告2013年第1号</span> </span></a></li>
<span style="color:#003399;"> </span><span style="color:#003399;"> </span><li><a target="_blank" href="/index.php/site/content/content_show/5132/0"><span style="color:#003399;">财政部注册会计师考试委员会公告2013年第2号</span></a></li>
<span style="color:#003399;"> </span><span style="color:#003399;"> </span><span style="color:#003399;"> </span><span style="font-size:14px;color:#003399;"> </span><span style="color:#003399;font-size:14px;"> </span><span style="color:#003399;font-size:14px;"> </span><span style="color:#003399;font-size:14px;">             </span><li>
			<a target="_blank" href="/index.php/site/content/content_show/5130/0"><span style="color:#003399;">财政部关于实施大中型企事业单位总会计师素质提...</span></a></li>
<span style="color:#003399;"> </span><span style="color:#003399;"> </span><span style="font-size:14px;color:#003399;"> </span><span style="color:#003399;font-size:14px;"> </span><span style="color:#003399;font-size:14px;"> </span><span style="color:#003399;font-size:14px;">             </span><li><span style="color:#003399;"> 			</span><a target="_blank" href="/index.php/site/content/content_show/4829/0"><span style="color:#003399;">财政部修订印发《彩票发行销售管理办法》</span></a></li>
          </ul>          </div>
          <!-- middle end -->
        </div>
        <div class="p_right">
          <!-- right begin -->
          <div class="tit tit_02">
            <h2 class="tH2_01"><a href="/shuiwufudao/index.html" class="imgTitle img12">税务辅导</a></h2>
            <span class="more"><a href="/shuiwufudao/index.html">更多&gt;&gt;</a></span></div>
          <div class="pcont04">
            <div class="cont01">
<div class="blk_tw"><a class="twpic" href="/index.php/site/content/content_show/521/0" target="_blank"><img alt="" src="/image2/0/2011/0606242476941.jpg" height="90" width="120" /></a> <div class="b_txt">
<p class="f14"><a target="_blank" href="/index.php/site/content/content_show/4658/0"><span style="color:#003399;"><b><span style="color:#003399;font-size:14px;">[其它税种]</span></b></span></a><span style="color:#003399;"><a target="_blank" href="/index.php/site/content/content_show/4658/0"><b><span style="color:#003399;font-size:14px;">国务院关税税则委员会关于2013年关税实施方案的通知</span></b></a><br />
</span></p>
<span style="color:#003399;"> </span><p class="MsoNormal"><span style="font-size:12px;font-family:宋体;">《<span style="font-size:12px;" lang="EN-US">2013</span>年关税实施方案》已经国务院关税税则委员会第十次全体会议审议通过，并报国务院批准</span><span style="color:#000000;">...</span></p>
<span style="color:#003399;"> </span><p><span style="color:#003399;"> </span></p>
<span style="color:#003399;"> </span></div>
<span style="color:#003399;"> </span></div>
<span style="color:#003399;"> </span><div class="line_01"></div>
<span style="color:#003399;"> </span><ul class="list pot list_07 clearfix"><span style="color:#003399;"> </span><li><a target="_blank" href="/index.php/site/content/content_show/4307/0"><span style="color:#003399;">[增值税]关于北京等8省市</span></a></li>
<span style="color:#003399;"> </span><li><a target="_blank" href="/index.php/site/content/content_show/4306/0"><span style="color:#003399;">[增值税]北京市营业税改征</span></a></li>
<span style="color:#003399;"> </span><li><a target="_blank" href="/index.php/site/content/content_show/4045/0"><span style="color:#003399;">[其他税种]企业转让旧房及</span></a></li>
<span style="color:#003399;"> </span><li><a target="_blank" href="/index.php/site/content/content_show/4046/0"><span style="color:#003399;">[增值税]境外公司开具的发</span></a></li>
</ul>
</div> 
          </div>
          <div class="space"></div>
          <div class="tit tit_02">
            <h2 class="tH2_01"><a href="/caikuaiyuandi/index.html" class="imgTitle img14">财会园地</a></h2>
            <span class="more"><a href="/caikuaiyuandi/index.html">更多&gt;&gt;</a></span></div>
          <div class="pcont05">
            <p class="f14 bold"><span style="color:#003399;font-size:14px;"><b><a target="_blank" href="/index.php/site/content/content_show/240/0"><span style="color:#003399;">十二封印 2011年你必须修补的投资漏洞</span></a></b><br />
</span></p>
<span style="color:#003399;">           </span><ul class="list pot f14 list_08"><span style="color:#003399;">             </span><li><a href="/index.php/site/content/content_show/1153/0" target="_blank"><span style="color:#003399;">[实务咨询]关于土地抵付欠款所涉税种..</span></a></li>
<span style="color:#003399;">             </span><li><a href="/index.php/site/content/content_show/1151/0" target="_blank"><span style="color:#003399;">[实务咨询]什么叫相同的投资主体</span></a></li>
<span style="color:#003399;">             </span><li><a href="/index.php/site/content/content_show/163/0" target="_blank"><span style="color:#003399;">[职场人生]大学生就业的三个误区和四点建议.</span></a></li>
<span style="color:#003399;">             </span><li><a href="/index.php/site/content/content_show/159/0" target="_blank"><span style="color:#003399;">[职场人生]职场人要避免和公司的利益冲突</span></a></li>
<span style="color:#003399;">             </span><li><a href="/index.php/site/content/content_show/1174/0" target="_blank"><span style="color:#003399;">[就业指导]2010年度盘点--职场众生象.</span></a></li>
          </ul>          </div>
          <!-- right end -->
        </div>
        <div class="p_bot"></div>
      </div>
      <!-- Part 02 end -->
      <!-- Part 04 begin -->
      <div class="part_04">
        <div class="tit tit_02">
          <h2 class="tH2_01"><a href="/index.php/site/content/li/1/30/caikuaifagui" class="imgTitle img15">财会法规</a></h2>
          <span class="more blue"><a href="/index.php/site/content/li/1/30/caikuaifagui" target="_blank">税收法规</a> <a href="/index.php/site/content/li/1/30/caikuaifagui" target="_blank">财政法规</a> <a href="/index.php/site/content/li/1/30/caikuaifagui" target="_blank">金融法规</a> <a href="/index.php/site/content/li/1/73/caikuaifagui" target="_blank">海关法规</a> <a href="/index.php/site/content/li/1/74/caikuaifagui" target="_blank">审计法规</a> <a href="/index.php/site/content/li/1/30/caikuaifagui" target="_blank">地方法规</a></span></div>
        <div class="p_cont clearfix">
           <div class="p_left"><!-- left begin --><div class="blk_tw"><a class="twpic" href="url" target="_blank"><img alt="" src="/image2/0/2011/0606203216471.jpg" height="90" width="90" /></a> <div class="b_txt">
<h3 class="f14"><a target="_blank" href="/index.php/site/content/content_show/4658/0"><span style="color:#003399;">[关税]</span><span style="color:#003399;">国务院关税税则委员会关于2013年关税实施方案的通知</span></a></h3>
<p><span style="font-size:12px;font-family:宋体;">《<span style="font-size:12px;" lang="EN-US">2013</span>年关税实施方案》已经国务院关税税则委员会第十次全体会议审议通过，并报国务院批准，自<span style="font-size:12px;" lang="EN-US">2013</span>年<span style="font-size:12px;" lang="EN-US">1</span>月<span style="font-size:12px;" lang="EN-US">1</span>日起实施。</span></p>
</div>
</div>
<ul class="list pot f14 list_08">
<li><a target="_blank" href="/index.php/site/content/content_show/4306/0"><span style="color:#003399;">[增值税]北京市营业税改增值税试点正式启动</span></a></li>
<span style="color:#003399;"> </span><span style="color:#003399;"> </span><li><a target="_blank" href="/index.php/site/content/content_show/4304/0"><span style="color:#003399;">[新闻]关于印发《农村义务教育学生营养改善计...</span></a></li>
<span style="color:#003399;"> </span><span style="color:#003399;"> </span><li><a target="_blank" href="/index.php/site/content/content_show/4303/0"><span style="color:#003399;">[新闻]关于开展城乡居民大病保险工作的指导意见</span></a></li>
</ul>
<!-- left end --></div>
<div class="line_02"></div>
<div class="p_middle"><!-- middle begin --><ul class="list lh24 f14">
<li><a href="/index.php/site/content/content_show/559/0" target="_blank">[消费税]关于对成品油生产企业生产自用...</a></li>
<li><a href="/index.php/site/content/content_show/580/0" target="_blank">[营业税]关于国际运输劳务免征营业税的通知</a></li>
<li><a href="/index.php/site/content/content_show/591/0" target="_blank">[资源税]关于调整耐火粘土和萤石资源税...</a></li>
<li><a href="/index.php/site/content/content_show/595/0" target="_blank">[房产税]国家税务总局关于加强房地产税...</a></li>
<li><a href="/index.php/site/content/content_show/615/0" target="_blank">[印花税]国家税务总局关于发行2010年印...</a></li>
<li><a href="/index.php/site/content/content_show/645/0" target="_blank">[车船税]中华人民共和国车船税法(草案)...</a></li>
<li><a href="/index.php/site/content/content_show/559/0" target="_blank">[消费税]关于对成品油生产企业生产自用...</a></li>
<li><a href="/index.php/site/content/content_show/559/0" target="_blank">[消费税]关于对成品油生产企业生产自用...</a></li>
</ul>
<!-- middle end --></div>
<div class="line_02"></div>
<div class="p_right"><!-- right begin --><ul class="list lh24 f14">
<li><a href="/index.php/site/content/content_show/677/0" target="_blank">[企业所得税]关于工会经费企业所..</a></li>
<li><a href="/index.php/site/content/content_show/688/0" target="_blank">[个人所得税]关于个人转让上市公..</a></li>
<li><a href="/index.php/site/content/content_show/724/0" target="_blank">[土地增值税]国家税务总局关于土..</a></li>
<li><a href="/index.php/site/content/content_show/743/0" target="_blank">[车辆购置税]国家税务总局关于核..</a></li>
<li><a href="/index.php/site/content/content_show/758/0" target="_blank">[耕地占用税]财政部发布耕地占用..</a></li>
<li><a href="/index.php/site/content/content_show/701/0" target="_blank">[城镇土地使用税]国家税务总局关..</a></li>
<li><a target="_blank" href="/index.php/site/content/content_show/4683/0"><span style="color:#003399;">[契税]</span><span style="color:#003399;">关于企业以售后回租方式进</span><span style="color:#003399;">..</span></a></li>
<li><a href="/index.php/site/content/content_show/677/0" target="_blank">[企业所得税]关于工会经费企业所..</a></li>
</ul>
<!-- right end --></div>        </div>
      </div>
      <!-- Part 04 end -->
      <!-- Part 05 begin -->
      <div class="part_05">
         <div class="tit tit_05">
          <h2><a class="imgTitle img16" href="#">网上图书</a></h2>
          <span class="more"></span></div>
         <div class="p_cont clearfix">
          <div class="blk_tw_pic btw02"><img alt="" src="/upload/201101130606561681.jpg" height="120" width="90" /> </div>
<div class="blk_tw_pic btw02"><img alt="" src="/upload/201101130609481464.jpg" height="120" width="90" /> </div>
<div class="blk_tw_pic btw02"><img alt="" src="/upload/201101130720403032.jpg" height="120" width="90" /> </div>
<div class="blk_tw_pic btw02"><img alt="" src="/upload/201101130732192875.jpg" height="120" width="90" /> </div>
<div class="blk_tw_pic btw02"><img alt="" src="/upload/201101130736549181.jpg" height="120" width="90" /> </div>
<div class="blk_tw_pic btw02"><img alt="" src="/upload/201101130737487147.jpg" height="120" width="90" /> </div>
<div class="blk_tw_pic btw02"><img alt="" src="/upload/201101130739283802.jpg" height="120" width="90" /> </div>
<div class="blk_tw_pic btw02"><img alt="" src="/upload/201101130740373348.jpg" height="120" width="90" /> </div>
<div class="blk_tw_pic btw02"><img alt="" src="/upload/201101130743273038.jpg" height="120" width="90" /> </div>        </div>
          <div class="p_bot"></div>
      </div>
      <!-- Part 05 end -->
      <!-- Part 06 begin -->
      <div class="part_06">
        <div class="tit tit_06">
          <h2><span class="imgTitle img17">友情链接</span></h2>
        </div>
        <div class="p_cont"> <a href="http://www.tjcs.gov.cn" target="_blank">天津财政征地税务网</a> | <a href="http://www.bjcz.gov.cn" target="_blank">北京财政局</a> </div>
      </div>
      <!-- Part 06 end -->
      <!-- Part 07 begin -->
      <div class="part_07"> <a href="/index.php/site/content/content_show/1230/0" target="_blank">联系我们</a> | <a href="/index.php/site/content/content_show/1231/0" target="_blank">欢迎合作</a> | <a href="url" target="_blank">招聘信息</a>       </div>
      <!-- Part 07 end -->      <!-- end main -->
      <!--  footer begin -->
      <div class="footer">
<p>报名咨询电话 400-650-9250 传真 010-69623742 邮箱 <a href="mailto:bjxhjc@sina.como">bjxhjc@sina.com</a></p>
<p>华夏会计网校 版权所有 京ICP备10009261号 京公网安备110116000129</p>
</div>      <!--  footer end -->
    </div>
  </div>
</div>
<!-- WPA Button Begin -->
<script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODAzMjQ5MF8yODg5NDNfNDAwNjUwOTI1MF8"></script>
<!-- WPA Button End -->
</body>
</html>