<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<script type="text/javascript">
    window.onload=function(){
          document.myForm.userid.focus();
    }
    function checkForm(){
          if(document.myForm.userid.value==""){
               alert('ID不能为空！！');
               document.myForm.userid.focus();
               return false;
          }
          if(document.myForm.password.value==""){
               alert('密码不能为空！！');
               document.myForm.password.focus();
               return false;
          }
    }
</script>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>股票交易系统</title>
        <link rel="stylesheet" href="/stocktradingsystem-3/Public/css/bootstrap.min.css">
        <!-- jQuery文件 -->
        <script src="/stocktradingsystem-3/Public/js/jquery-1.12.3.min.js"></script>
        <!-- Bootstrap 核心 JavaScript 文件 -->
        <script src="/stocktradingsystem-3/Public/js/bootstrap.min.js"></script>
        
    </head>

    <body>
            <div class="jumbotron" style="background-image: url(/stocktradingsystem-3/Public/cover3.jpg); background-repeat:no-repeat;  ">
            <div class="container">
             <div class="panel panel-success col-md-offset-8 col-xs-10 col-md-4" style="margin-top: 160px; margin-bottom: 96px;">
                <div class="panel-heading"><strong>用户登录</strong></div>
                <div class="panel-body">
                  <form class="form-horizontal" action="/stocktradingsystem-3/index.php/Home/Login/check_login" target='_self' id="loginForm" method="post" name="myForm" onSubmit="return checkForm();">
                      <br/>
                     <div class="input-group input-group-md">
                      <span class="input-group-addon" id="sizing-addon1" for="form-username"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                      <input type="text" name="username" placeholder="请输入用户名" class="form-username form-control " id="form-username" >
                      </div>
                      <br/>
                      <div class="input-group input-group-md">
                      <span class="input-group-addon" for="form-password"><i class="glyphicon glyphicon-lock"></i></span>
                      <input type="password" name="password" placeholder="请输入密码" class="form-password form-control" id="form-password" >
                      </div>          
                      <hr/>            
                      <button class="btn btn-success btn-block" type="submit" >登录</button>
                      <a href="/stocktradingsystem-3/index.php/Home/Register/reg"  class="btn btn-link  ">快速注册</a>
                      </form>
                  </div>
            </div>
            </div>
        </div>
       
</div>
</body>
</html>