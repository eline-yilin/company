<?php 
include_once '../config/config.php';;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
 <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo THEME_PATH;?>css/app.css"/>
     <script src="<?php echo THEME_PATH;?>js/jquery.js"></script> 
       
     <!-- Latest compiled and minified JavaScript -->
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
      <script src="<?php echo THEME_PATH;?>js/app.js"></script>
</head>
<body>
 	<!-- Fixed navbar -->
    <div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        	<a class="navbar-brand pull-left" href="/">{@pre type="content" key="title"/}</a>
        </div>
        <div class="navbar">
          <div class="center">
          	 <div class='btn btn-inverse'>
            <li {@eq key=name value="index"}class="active"{/eq}><a href="/admin">首页</a></li>
            
            <li {@eq key=name value="user"}class="active"{/eq}><a href="/admin/user">业务范围</a></li>
            
            <li {@eq key=name value="comment"}class="active"{/eq}><a href="/admin/comment">成功案例</a></li>  
           
            <li {@eq key=name value="cart"}class="active"{/eq}><a href="/admin/orders">联系我们</a></li>
            </div>
          </div>
        </div><!--/.nav -->
      </div>
    </div>