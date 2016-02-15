<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加学科</title>
<link rel="stylesheet" type="text/css" href="/Public/Images/css1/css.css" />
<style>
td, th {
	text-align: center
}
</style>
</head>
<body>
<form method='post' action='/index.php/Home/Subject/addOk' enctype='multipart/form-data'>
  <table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
    <tbody>
      <tr>
        <th style="text-align:left;" colspan="2" class="bg_tr" align="left" height="25">添加学科</th>
      </tr>
      <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">学科：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' name='title' />
        </td>
      </tr>
      <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">所在课室：</td>
        <td style="text-align:left;" class="td_bg">
        	<select name='room' id='room' >
            	<option value='-1'>请选择</option>
			<?php if(is_array($room)): $i = 0; $__LIST__ = $room;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo); ?>'><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>	
            </select>
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">备注信息：</td>
        <td style="text-align:left;" class="td_bg">
        	<textarea cols='40' rows='5' name='remark'></textarea>
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">&nbsp;</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='submit' name='submit' value='添加' />
        </td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>