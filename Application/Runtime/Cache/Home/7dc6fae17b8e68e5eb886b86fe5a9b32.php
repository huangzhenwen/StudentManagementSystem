<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改</title>
<link rel="stylesheet" type="text/css" href="/Public/Images/css1/css.css" />
<style>
*{font-size:18px;}
td, th {
	font-size:18px;
	text-align: center
}
</style>
</head>
<body>
<form method='post' action='/index.php/Home/Student/update' enctype='multipart/form-data'>
	<input type='hidden' name='id' value='<?php echo ($stu["id"]); ?>'/>
  <table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
    <tbody>
      <tr>
        <th style="text-align:left;" colspan="2" class="bg_tr" align="left" height="25">学生信息修改</th>
      </tr>
	  
      <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">姓名：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' name='user' value='<?php echo ($stu["username"]); ?>'/>
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">密码：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' name='pass' value='123456' />
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">所属学科：</td>
        <td style="text-align:left;" class="td_bg">
        	<select id='subject' name='subject'>
        		<option value='-1'>请选择</option>
				<?php if(is_array($sub)): $i = 0; $__LIST__ = $sub;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["id"]); ?>' <?php echo ($vo['id']==$stu['subject']?"selected='selected'":''); ?>  ><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        	</select>
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">真实姓名：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' name='name' value='<?php echo ($stu["truename"]); ?>' />
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">性别：</td>
        <td style="text-align:left;" class="td_bg">
			<input type='radio' name='sex' value='男'  <?php echo ($stu['sex']=='男'?'checked="checked"':''); ?> />男
			<input type='radio' name='sex' value='女' <?php echo ($stu['sex']=='女'?'checked="checked"':''); ?> /> 女
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">年龄：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' name='age' value='<?php echo ($stu["age"]); ?>'/>
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">联系电话：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' name='tel' value='<?php echo ($stu["tel"]); ?>' />
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">家庭住址：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' name='address' value='<?php echo ($stu["address"]); ?>' />
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">创建时间：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' disabled='false' name='addtime' value='<?php echo (date("Y-m-d H:i:s",$stu["addtime"])); ?>' />
        </td>
      </tr>
	 <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">最后一次修改时间：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' disabled='false' name='edittime' value='<?php echo (date("Y-m-d H:i:s",$stu["edittime"])); ?>' />
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">备注信息：</td>
        <td style="text-align:left;" class="td_bg">
        	<textarea cols='40' rows='5' name='remark' ><?php echo ($stu["remark"]); ?></textarea>
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">&nbsp;</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='submit' id='submit' value='更新' />
        </td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>