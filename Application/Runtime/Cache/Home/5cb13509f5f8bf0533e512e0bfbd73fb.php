<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>考勤统计表</title>
<link rel="stylesheet" type="text/css" href="/Public/Images/css1/css.css" />
<script type="text/javascript" src="/Public/scripts/jquery.js"></script>
<script type="text/javascript" src="/Public/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/scripts/highcharts.js"></script>
<script type="text/javascript" src="/Public/scripts/exporting.js"></script>


<script>
//页面加载
$(function(){
	//为’确定‘按钮绑定事件
	$('#okBtn').bind('click',function(){
		//获取时间与班级
		var addtime = $('#addtime').val();
		var subject = $('#subject').val();
		//判断是否为空
		if( addtime=='' || subject == '' ){
			alert('请输入相应信息，才能获取统计图');
			return;
		}
		//组织数据
		var data = {
			addtime : addtime,
			subject : subject
		};
		//发送Ajax请求
		$.post('/index.php/Home/Kaoqin/charts',data,function(msg){
			//将数据赋给统计插件所在的div
			$('#container').html(msg);
		});
	});
});
</script>
<style>
td, th {
	text-align: center
}

</style>
</head>
<body>
<form method='post' action='#' enctype='multipart/form-data'>
  <table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
    <tbody>
      <tr>
        <th style="text-align:left;" colspan="2" class="bg_tr" align="left" height="25">考勤统计图</th>
      </tr>
    
	<tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">选择月份：</td>
        <td style="text-align:left;" class="td_bg">
        	<input class="Wdate" id='addtime' type="text" onClick="WdatePicker({dateFmt:'yyyy-MM'})"> 
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">所属学科：</td>
        <td style="text-align:left;" class="td_bg">
        	<select id='subject' name='subject'>
        		<option value=''>请选择</option>
				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["id"]); ?>'><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        	</select>
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center"></td>
        <td style="text-align:left;" class="td_bg">
        	<input type='button' id='okBtn' value='确定' />
        </td>
      </tr>
	 
	 <tr> 
        <td colspan='2' style='background:#ffffff;'>
        	 <div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
        </td>
      </tr>
	
	
	
	  
    </tbody>
  </table>
</form>
</body>
</html>