<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <title>登录表单</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      <link rel="stylesheet" href="/tp2018.4.24test/Public/css/login-zc.css" type="text/css" media="all">
</head>
<body>
  <h1>登录</h1>
  <div class="container ">
      <!-- <h2>登 录</h2> -->
      <form action="/tp2018.4.24test/index.php/Home/Index/Clicklogin" method="post">
        <input type="text" name="username" placeholder="用户名" required>
        <input type="password" name="userpwd" placeholder="密码" required>
        <div class="send-button ">
        <input type="text" placeholder="请输入验证码" name="yzm" required style="width:50%"><img class="weui-vcode-img" id="vcode" src="/tp2018.4.24test/index.php/Home/Index/yzm" alt="看不清？换一张！" onclick="this.src=this.src+'?' + Math.random();" title="点击图片刷新" /></div>
        <ul class="tick w3layouts agileits">
        <li>
          <input type="checkbox" id="brand1" value="">
          <label for="brand1"><span></span>记住我</label>
          <?php echo ($username); ?>
        </li>
      </ul>
       <div class="send-button ">
      <input type="submit" name="login" value="点 击 登 录">
      </div>
      </form>
       <div class="send-button"><a href="/tp2018.4.24test/index.php/Home/Index/zc">
       <input type="submit" name="zc" value="前 往 注 册 " ></a>
       </div>
      <a href="#">忘记  密码?</a>
   </div>
      
      <!-- <div class="social-icons w3layouts agileits">
        <p>- 其他方式登录 -</p>
        <ul>
          <li class="qq"><a href="#">
          <span class="icons w3layouts agileits"></span>
          <span class="text w3layouts agileits">QQ</span></a></li>
          <li class="weixin w3ls"><a href="#">
          <span class="icons w3layouts"></span>
          <span class="text w3layouts agileits">微信</span></a></li>
          <li class="weibo aits"><a href="#">
          <span class="icons agileits"></span>
          <span class="text w3layouts agileits">微博</span></a></li>
          <div class="clear"> </div>
        </ul>
      </div> -->
      <div class="clear"></div>
    </div>
  </div>
  <div class="footer w3layouts agileits">
    <p>Copyright &copy; More Templates <a href="http://www.cssmoban.com/" target="_blank" title="LAUCHER">LAUCHER</a> - Collect from <a href="https://czhlove.cn/" title="LAUCHER" target="_blank">LAUCHER</a></p>
  </div>

</body>
<!-- //END for laucher-->
</html>