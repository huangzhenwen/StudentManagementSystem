<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户个人信息</title>
<link rel="stylesheet" type="text/css" href="/Public/Images/css1/css.css" />

<style>
*{font-size:18px;}
td, th {
	height:40px;
	font-size:18px;
	text-align: center
}
</style>
</head>
<body>
<form method='post' action='/index.php/Home/Admin/edit' enctype='multipart/form-data'>
<input type='hidden' name='id' value='<?php echo ($data["id"]); ?>' />
  <table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
    <tbody>
      <tr>
        <th style="text-align:left;" colspan="2" class="bg_tr" align="left" height="25">用户信息</th>
      </tr>
	   <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">用户ID：</td>
        <td style="text-align:left;" class="td_bg">
        	<span><?php echo ($data["id"]); ?></span>
        </td>
      </tr>
      <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">用户名：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' id='newUser' name='newUser' value='<?php echo ($data["username"]); ?>'/>
        </td>
      </tr>
	        <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">密码：</td>
        <td style="text-align:left;" class="td_bg">
        	<span><a href='<?php echo U("Admin/editPass");?>' style='text-decoration:underline;color:red;' >修改密码</a></span>
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">登录IP：</td>
        <td style="text-align:left;" class="td_bg">
        	<span><?php echo ($data["loginip"]); ?></span>
        </td>
      </tr>

	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">创建时间：</td>
        <td style="text-align:left;" class="td_bg">
        	<span><?php echo (date("Y-m-d H:i:s",$data["addtime"])); ?></span>
        </td>
      </tr>
	<tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">最后一次修改时间：</td>
        <td style="text-align:left;" class="td_bg">
        	<span><?php echo (date("Y-m-d H:i:s",$data["edittime"])); ?></span>
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">&nbsp;</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='submit' id='submit' value='保存更改' />
        </td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>