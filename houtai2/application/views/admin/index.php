<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf8">
<title>内容管理系统</title>
<style>
.body
{
	scrollbar-base-color:#C0D586;
	scrollbar-arrow-color:#FFFFFF;
	scrollbar-shadow-color:#DEEFC6;
}
</style>
</head>
<frameset rows="60,*" cols="*" frameborder="no" border="0" framespacing="0">
	<frame src="<?php echo site_url('admin_login/menu/top');?>" name="topFrame" scrolling="no">
	<frameset cols="180,*" name="btFrame" frameborder="No" border="0" framespacing="0">
    	<frame src="<?php echo site_url('admin_login/menu/left');?>" noresize name="menu" scrolling="yes">
    	<frame src="<?php echo site_url('admin_login/menu/main');?>" noresize name="main" scrolling="yes">
    </frameset>
</frameset>
<noframes>
	<body>您的浏览器不支持框架！</body>
</noframes>
</html>