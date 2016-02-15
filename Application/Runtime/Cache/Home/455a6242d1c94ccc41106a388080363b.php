<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生列表</title>
<link rel="stylesheet" type="text/css" href="/Public/Images/css1/css.css" />
<script type="text/javascript" src="/Public/scripts/jquery.js"></script>
<style>
td, th {
	font-size:14px;
	text-align: center;
}
</style>
<script>
$(function(){
	
	$('p > img').css({
		width:'100',
		height:'100'
	});
	
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
<form method='post' action='/index.php/Home/Message/del'>
  <table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
    <tbody>
      <tr>
        <th class="bg_tr" align="left" height="25">序号</th>
		<th class="bg_tr" align="left" height="25">信息名称</th>
		<th class="bg_tr" align="left" height="25">备注信息</th>
        <th class="bg_tr" align="left" height="25">创建时间</th>
		<th class="bg_tr" align="left" height="25">下载资源</th>
        <th class="bg_tr" align="left" height="25"><input type='button' id='delBtn' value='删除' />  </th>
      </tr>
	  <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
        <td class="td_bg" width="5%" height="23" align="center"><?php echo ($vo["id"]); ?></td>
		<td class="td_bg"><?php echo ($vo["title"]); ?></td>
        <td id='contentImg' class="td_bg"><?php echo (htmlspecialchars_decode($vo["content"])); ?></td>
		 <td class="td_bg"><?php echo (date('Y-m-d',$vo["addtime"])); ?></td>
        <td class="td_bg"><a href="/index.php/Home/Message/download/id/<?php echo ($vo["id"]); ?>">下载</a></td>
        <td class="td_bg"><input type='checkbox' value="<?php echo ($vo["id"]); ?>" name='id[]' /></td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	  <tr>
       
		<td colspan='10' style='text-align:right;'></td>
      </tr>
      <tr>
        <td colspan="10">&nbsp;</td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>