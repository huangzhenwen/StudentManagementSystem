<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生列表</title>
<link rel="stylesheet" type="text/css" href="/Public/Images/css1/css.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/page.css" />
<script type="text/javascript" src="/Public/scripts/jquery.js"></script>

<style>
td, th {
	font-size:14px;
	text-align: center
}
</style>
<script>
$(function(){
	$('#delBtn').bind('click',function(event){
		//阻止默认行为
		event.preventDefault();
		//弹出提示框
		if(confirm('确认删除吗？')){
			//提交表单
			$('form:first').submit();
		}
	});
});
</script>
</head>
<body>
<form method='post' action='/index.php/Home/Kaoqin/del'>
  <table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
    <tbody>
      <tr>
        <th class="bg_tr" align="left" height="25">序号</th>
		<th class="bg_tr" align="left" height="25">所在学科</th>
		<th class="bg_tr" align="left" height="25">学生姓名</th>
		<th class="bg_tr" align="left" height="25">迟到时间</th>
      </tr>
	  <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
        <td class="td_bg" width="5%" height="23" align="center"><?php echo ($vo["id"]); ?></td>
		<td class="td_bg"><?php echo ($vo["subject"]["title"]); ?></td>
		<td class="td_bg"><?php echo ($vo["truename"]); ?></td>
        <td class="td_bg"><?php echo ($vo["addtime"]); ?></td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	  <tr>
		<td colspan='10' style='text-align:right;'></td>
      </tr>
      <tr>
        <td colspan="10"><div class='viciao'><?php echo ($show); ?></div></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>