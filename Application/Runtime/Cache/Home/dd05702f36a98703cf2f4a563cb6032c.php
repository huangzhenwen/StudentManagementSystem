<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生列表</title>
<link rel="stylesheet" type="text/css" href="/Public/Images/css1/css.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/page.css" />
<script type="text/javascript" src="/Public/scripts/jquery.js"></script>

<style>
td, th {
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
<form method='post' action='/index.php/Home/Student/del'>
  <table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
    <tbody>
      <tr>
        <th class="bg_tr" align="left" height="25">序号</th>
        <th class="bg_tr" align="left" height="25">学生姓名</th>
		<th class="bg_tr" align="left" height="25">所需学科</th>
        <th class="bg_tr" align="left" height="25">学生性别</th>
        <th class="bg_tr" align="left" height="25">学生年龄</th>
		<th class="bg_tr" align="left" height="25">联系电话</th>
		<th class="bg_tr" align="left" height="25">家庭住址</th>
		<th class="bg_tr" align="left" height="25">创建时间</th>
		<th class="bg_tr" align="left" height="25">备注信息</th>
        <th class="bg_tr" align="left" height="25">修改</th>
        <th class="bg_tr" align="left" height="25"><input type='button' id='delBtn' value='删除' />  </th>
      </tr>
	  <?php if(is_array($stu)): $k = 0; $__LIST__ = $stu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
        <td class="td_bg" width="5%" height="23" align="center"><?php echo ($k); ?></td>
        <td class="td_bg"><?php echo ($vo["truename"]); ?></td>
		<td class="td_bg"><?php echo ($vo["title"]); ?></td>
        <td class="td_bg"><?php echo ($vo["sex"]); ?></td>
        <td class="td_bg"><?php echo ($vo["age"]); ?></td>
		<td class="td_bg"><?php echo ($vo["tel"]); ?></td>
        <td class="td_bg"><?php echo ($vo["address"]); ?></td>
		 <td class="td_bg"><?php echo (date("Y-m-d",$vo["addtime"])); ?></td>
        <td class="td_bg"><?php echo ($vo["remark"]); ?></td>
        <td class="td_bg"><a href="<?php echo U('Student/edit');?>?id=<?php echo ($vo["id"]); ?>">修改</a></td>
        <td class="td_bg"><input type='checkbox' value="<?php echo ($vo["id"]); ?>" name='id[]' /></td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      <tr>
        <td colspan="12"><div class='viciao'><?php echo ($page); ?></div></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>