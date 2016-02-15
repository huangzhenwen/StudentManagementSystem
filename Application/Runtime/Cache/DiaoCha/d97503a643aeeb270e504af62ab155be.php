<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html>
<head>
<title>学习情况表</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="/Public/js/jquery.js" tppabs="/Public/js/jquery.js"></script>
<script type="text/javascript" src="/Public/js/page_common.js" tppabs="/Public/js/page_common.js"></script>
<link href="/Public/css/common_style_blue.css" tppabs="/Public/css/common_style_blue.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#TitleArea #TitleArea_Head {
	background: url("/Public/images/title_bg_head.gif")/*tpa=/Public/images/title_bg_head.gif*/ no-repeat scroll 0 0 transparent;
	float: left;
	height: 28px;
	width: 5px;
	margin-left: 12px;
	display: inline;
}
#TitleArea #TitleArea_Title {
	background: url("/Public/images/title_bg.gif")/*tpa=/Public/images/title_bg.gif*/ repeat-x scroll 0 0 transparent;
	color: #004A7D;
	float: left;
	font-family: 宋体;
	font-size: 14px;
	font-weight: bold;
	height: 28px;
	padding-left: 3px;
	padding-right: 30px;
	padding-top: 0px;
}
#TitleArea #TitleArea_Title #TitleArea_Title_Content {
	margin-top: 8px;
}
#TitleArea #TitleArea_End {
	background: url("/Public/images/title_bg_end.gif")/*tpa=/Public/images/title_bg_end.gif*/ no-repeat scroll 0 0 transparent;
	float: left;
	height: 28px;
	width: 80px;
}
.FunctionButton {
	background-image: url("/Public/images/button_bg.png")/*tpa=/Public/images/button_bg.png*/;
	background-repeat: repeat-x;
	float: left;
	height: 16px;
	font-size: 12px;
	border: 1px solid #84A5C6;
	margin: 0;
	margin-left: 8px;
	padding-left: 5px;
	padding-right: 5px;
	padding-top: 3px;
}
.FunctionButtonInput {
	background-color: #FFFFFF;
	background-image: url("/Public/images/button_bg.png")/*tpa=/Public/images/button_bg.png*/;
	background-repeat: repeat-x;
	float: left;
	height: 21px;
	font-size: 12px;
	border: 1px solid #84A5C6;
	margin: 0;
	margin-left: 8px;
	padding-left: 4px;
	padding-right: 4px;
	color: #005294;
	padding-top: 1px;
	cursor: pointer;
}
</style>
<script type="text/javascript">
	function openWin() {
		window.open('http://localhost/diaocha');
		this.close();
	}
	String.prototype.trim=function() {
		return this.replace(/(^\s*)|(\s*$)/g,'');
	}
	$(function(){
		$('#submit').bind('click',function(event){
			if(!$('#username').val().trim()) {
				alert('连名字都不填，没门！');
				event.preventDefault();
			}
			if(!$('#content').val().trim()) {
				alert('你都听懂了？你以为你是涛哥啊!');
				event.preventDefault();
			}
		});
	});
</script>
</head>
<body>

<!-- 页面标题 -->
<div id="TitleArea">
  <div id="TitleArea_Head"></div>
  <div id="TitleArea_Title">
    <div id="TitleArea_Title_Content"> 
    <img border="0" width="13" height="13" src="/Public/images/title_arrow.gif" tppabs="/Public/images/title_arrow.gif" /> 学习情况表 </div>
  </div>
  <div id="TitleArea_End"></div>
</div>

<!-- 主内容区域（数据列表或表单显示） -->
<div id="MainArea"> 
  <!-- 表单内容 -->
  <form action="<?php echo U('deal');?>" method="post">
    <br />
    <br />
    <!-- 本段标题（分段标题） -->
    <div class="ItemBlock_Title"> 亲爱的同学： <br />
      为了及时了解您的学习吸收情况，适时调整教学进度，请您对今天所学的课程做实事求是的反馈，请对下列 问题选择你认为适当
      的答案，并将答案填写在括号里 <br />
      <div align="right"> 班级
        <select name="subject" style="width: 155px">
          <!-- for start -->
          <?php if(is_array($clas)): $i = 0; $__LIST__ = $clas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option label='<?php echo ($vo["title"]); ?>' value='<?php echo ($vo["id"]); ?>'><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
          <!-- for end -->
        </select>
        <br />
        <br />
        姓名
        <input type='text' name='username' id='username' />
        <br />
        <br />
        日期
        <input type="text" name="addtime" value="<?php echo (date('Y-m-d',$time)); ?>" disabled="disabled">
        <br />
      </div>
    </div>
    <br />
    <br />
    <!-- 本段表单字段 -->
    <div class="ItemBlockBorder">
      <div class="ItemBlock"> <br />
        <div class="ItemBlock2"> 1.你认为今天所学习的内容是 <br />
          <!-- for start -->
          
          <input type="radio" name="type" value="1" checked="checked"/>
          A.很难 &nbsp;&nbsp;
          <input type="radio" name="type" value="2" />
          B.不太难 &nbsp;&nbsp;
          <input type="radio" name="type" value="3" />
          C.一般般 &nbsp;&nbsp;
          <input type="radio" name="type" value="4" />
          D.比较简单 &nbsp;&nbsp;
          <input type="radio" name="type" value="5" />
          E.很简单 &nbsp;&nbsp; 
          
          <!-- for end --> 
        </div>
        <br />
        <br />
        <div class="ItemBlock2"> 2.今天的内容你吸收了多少 <br />
          <!-- for start -->
          
          <input type="radio" name="level" value="5" checked="checked" />
          A.80%以上&nbsp;&nbsp;
          <input type="radio" name="level" value="4" />
          B.70~80%&nbsp;&nbsp;
          <input type="radio" name="level" value="3" />
          C.50~70%&nbsp;&nbsp;
          <input type="radio" name="level" value="2" />
          D.30~50%&nbsp;&nbsp;
          <input type="radio" name="level" value="1" />
          E.低于30%&nbsp;&nbsp; 
          
          <!-- for end --> 
        </div>
        <br />
        <br />
        <div class="ItemBlock2"> 3.如果有未听明白的知识，请在下面列出来 <br />
          <textarea name='content' id='content' cols='60' rows='4'></textarea>
          <!-- for end --> 
        </div>
        <br />
        <br />
      </div>
    </div>
    
    <!-- 表单操作 -->
    <div id="InputDetailBar">
      <input type="submit" name='submit' id='submit' value="提交" class="FunctionButtonInput" />
    </div>
  </form>
</div>
</body>
</html>