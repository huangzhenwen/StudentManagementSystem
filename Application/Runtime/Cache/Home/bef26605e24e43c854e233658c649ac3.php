<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<SCRIPT language=javascript>
<!--
var displayBar=true;
function switchBar(obj){
	if (displayBar)
	{
		parent.frame.cols="0,*";
		displayBar=false;
		obj.value="打开左边管理菜单";
	}
	else{
		parent.frame.cols="195,*";
		displayBar=true;
		obj.value="关闭左边管理菜单";
	}
}

function fullmenu(url){
	if (url==null) {url = "admin_left.asp";}
	parent.leftFrame.location = url;
}

//-->
</SCRIPT>

<body>
<table class="table" cellspacing="1" cellpadding="2" width="99%" align="center" 
border="0">
  <tbody>
    <tr>
      <th class="bg_tr" align="left" colspan="2" height="25">系统信息统计
        <input onClick="switchBar(this)" type="button" value="关闭左边管理菜单" name="SubmitBtn" />
      </th>
    </tr>
    <tr>
      <td class="td_bg" width="50%" height="23">服务器类型：<span class="TableRow2">PHP(IP:127.0.0.1)</span></td>
      <td class="td_bg" width="50%">脚本解释引擎：<span class="TableRow1">Apache</span></td>
    </tr>
    <tr>
      <td class="td_bg" width="50%" height="23">站点物理路径：<span class="TableRow2"> <b>√</b> </span></td>
      <td class="td_bg" width="50%">ADO无组件上传：<span class="TableRow2"> <b>√</b> </span></td>
    </tr>
    <tr>
      <td class="td_bg" width="50%" height="23">FSO文本读写： <span class="TableRow2"> <b>√</b> </span></td>
      <td class="td_bg" width="50%">数据库使用：<span class="TableRow1">MySQL</span></td>
    </tr>
    <tr>
      <td class="td_bg" width="50%" height="23">Jmail组件支持：<span class="TableRow2">
        <b>√</b>
        </span></td>
      <td class="td_bg" width="50%">CDONTS组件支持：<span class="TableRow1">
        <b>√</b>
        </span></td>
    </tr>
    <tr>
      <td  colspan="2" class="td_bg"> 合作网站： </td>
    </tr>
  </tbody>
</table>
<table class="table" cellspacing="1" cellpadding="2" width="99%" align="center" 
border="0">
  <tbody>
    <tr>
      <th class="bg_tr" align="left" colspan="2" height="25">网站管理系统版本</th>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23">当前版本<span class="TableRow2"></span></td>
      <td width="83%" class="td_bg"><strong>ITCAST网站内容管理系<span class="TableRow1"></span></strong></td>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23">版权声明<span class="TableRow2"></span></td>
      <td class="td_bg" width="83%">1、本软件为共享软件,未经书面授权，不得向任何第三方提供本软件系统; <br>
        2、用户自由选择是否使用,在使用中出现任何问题和由此造成的一切损失作者将不承担任何责任; <br>
        3、您可以对本系统进行修改和美化，但必须保留完整的版权信息;  　<br>
        4、本软件受中华人民共和国《著作权法》《计算机软件保护条例》等相关法律、法规保护，作者保留一切权利。</td>
    </tr>
  </tbody>
</table>
<table class="table" cellspacing="1" cellpadding="2" width="99%" align="center" 
border="0">
  <tbody>
    <tr>
      <th class="bg_tr" align="left" colspan="2" height="25">办公管理系统开发 </th>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23">程序制作<span class="TableRow2"></span></td>
      <td width="83%" class="td_bg"><strong>ITCAST</strong></td>
    </tr>
    <tr>
      <td class="td_bg" height="23">联系方式<span class="TableRow2"></span></td>
      <td class="td_bg">E_mail：abcdefg@qq.com QQ：12345678</td>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23">程序主页<span class="TableRow2"></span></td>
      <td class="td_bg" width="83%"><a href="http://www.itcast.cn" target="_blank">www.itcast.cn</a></td>
    </tr>
  </tbody>
</table>
</body>
</html>