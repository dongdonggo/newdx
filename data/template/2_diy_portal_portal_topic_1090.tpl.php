<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>�����¿Ц������--2008���˽�ר��</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="http://static.8264.com/oldcms/moban/zt/lovewall/style/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://static.8264.com/oldcms/moban/zt/lovewall/css/style.css" type="text/css">
<link rel="stylesheet" href="http://static.8264.com/oldcms/moban/zt/lovewall/css/default.css" type="text/css">
<style type="text/css">
<!--
body {
background-image: url(bg.gif);
}
-->
</style>
<SCRIPT language="JavaScript1.2">
var Obj=''
var index=10000;//z-index;
document.onmouseup=onMouseUp
document.onmousemove=onMouseMove
function onMouseDown(Object){
Obj=Object.id
document.all(Obj).setCapture()
pX=event.x-document.all(Obj).style.pixelLeft;
pY=event.y-document.all(Obj).style.pixelTop;
}

function onMouseMove(){
if(Obj!=''){
document.all(Obj).style.left=event.x-pX;
document.all(Obj).style.top=event.y-pY;
}
}

function onMouseUp(){
if(Obj!=''){
document.all(Obj).releaseCapture();
Obj='';
}
}

function onFocus(obj){
       if(obj.style.zIndex!=index) {
               index = index + 2;
               var idx = index;
               obj.style.zIndex=idx;
       }
}

function onRemove(){
if (event){
lObj = event.srcElement ;
n=0;
while (lObj && n<2) {
lObj = lObj.parentElement ;
if(lObj.tagName=="DIV") n++;

}
}
var id=lObj.id
document.getElementById(id).removeNode(true);

}

function showLogin(n) {
var formAry = new Array ("formOne","formTwo")
var Obj = getObject(formAry[n])
if (Obj.style.display == "none") {
Obj.style.display = ""
}
else 
{
Obj.style.display = "none"
}
}

function getObject(objectId) {
    if(document.getElementById && document.getElementById(objectId)) {
// W3C DOM
return document.getElementById(objectId);
    } else if (document.all && document.all(objectId)) {
// MSIE 4 DOM
return document.all(objectId);
    } else if (document.layers && document.layers[objectId]) {
// NN 4 DOM.. note: this won't find nested layers
return document.layers[objectId];
    } else {
return false;
    }
}

function chkFM(obj) {
alert(obj.nickname.value);
if(obj.nickname.value == "") {
alert("\n\n\n��������ҪѰ���˵�����!\n\n");
obj.nickname.focus();
return false;
}
return false;
}
</SCRIPT>
<style>
body {margin-left: 0px;margin-top: 0px;margin-right: 0px;margin-bottom: 0px;text-align:center;font-size:12px; color:#333333;}
</style>
</head>
<body>
<div class="warpper99">
    <div class="top99"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/banner.jpg" width="960" height="326" border="0"/></div>
    <div class="mid99">
    	<div class="left99"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" style="border:#c5a6d2 solid 1px;">
  <tr>
    <td height="30" align="center" valign="middle" style="border-bottom:#999999 dotted 1px;"><span style="font-size:14px; font-weight:bold; text-align:center;">����һ��</span></td>
    </tr>
  <tr>
    <td align="center" valign="middle"><table width="98%" border="0" cellspacing="0" cellpadding="0" style=" border-bottom:#999999 dotted 1px;">
      <tr>
        <td height="20" colspan="2" align="center" style="padding-top:2px;"><a href="http://bbs.8264.com/thread-48281-1-1.html" target="_blank">ѩ������</a></td>
        </tr>
      <tr>
        <td height="135" align="center" valign="middle"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/01.jpg" width="150" height="125" border="1" style="border:#999999 solid 1px;"/></td>
        <td align="center" valign="middle"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/02.jpg" width="150" height="125" border="1" style="border:#999999 solid 1px;" /></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td align="center" valign="middle"><table width="98%" border="0" cellspacing="0" cellpadding="0" style=" border-bottom:#999999 dotted 1px;">
      <tr>
        <td height="20" colspan="2" align="center" style="padding-top:2px;"><a href="http://bbs.8264.com/thread-82913-1-1.html" target="_blank">����ȥ�ȼ�</a></td>
        </tr>
      <tr>
        <td height="135" align="center" valign="middle"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/04.jpg" width="150" height="125" border="1" style="border:#999999 solid 1px;"/></td>
        <td align="center" valign="middle"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/03.jpg" width="150" height="125" border="1" style="border:#999999 solid 1px;" /></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td align="center" valign="middle"><table width="98%" border="0" cellspacing="0" cellpadding="0" style=" border-bottom:#999999 dotted 1px;">
      <tr>
        <td height="20" colspan="2" align="center" style="padding-top:2px;"><a href="http://bbs.8264.com/thread-83867-1-1.html" target="_blank">��ʶ����</a></td>
        </tr>
      <tr>
        <td height="135" align="center" valign="middle"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/06.jpg" width="150" height="125" border="1" style="border:#999999 solid 1px;"/></td>
        <td align="center" valign="middle"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/05.jpg" width="150" height="125" border="1" style="border:#999999 solid 1px;" /></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td align="center" valign="middle"><table width="98%" border="0" cellspacing="0" cellpadding="0" style=" border-bottom:#999999 dotted 1px;">
      <tr>
        <td height="20" colspan="2" align="center" style="padding-top:2px;"><a href="http://bbs.8264.com/viewthread.php?tid=87223&amp;extra=page%3D1%26amp%3Bfilter%3Dtype%26amp%3Btypeid%3D13" target="_blank">���ǵİ�</a></td>
        </tr>
      <tr>
        <td height="135" align="center" valign="middle"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/07.jpg" width="150" height="125" border="1" style="border:#999999 solid 1px;"/></td>
        <td align="center" valign="middle"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/08.jpg" width="150" height="125" border="1" style="border:#999999 solid 1px;" /></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td align="center" valign="middle"><table width="98%" border="0" cellspacing="0" cellpadding="0" style=" border-bottom:#999999 dotted 1px;">
      <tr>
        <td height="20" colspan="2" align="center" style="padding-top:2px;"><a href="http://bbs.8264.com/viewthread.php?tid=86177&amp;extra=page%3D1%26amp%3Bfilter%3Dtype%26amp%3Btypeid%3D13" target="_blank">Я��һ��</a></td>
        </tr>
      <tr>
        <td height="135" align="center" valign="middle"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/09.jpg" width="150" height="125" border="1" style="border:#999999 solid 1px;"/></td>
        <td align="center" valign="middle"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/10.jpg" width="150" height="125" border="1" style="border:#999999 solid 1px;" /></td>
      </tr>
    </table></td>
    </tr>
</table></div>
        <div class="right99">
        <div style=" width:95%; padding:5px 5px 5px 5px; border:#999999 dotted 1px; line-height:1.5; text-align:left; margin-bottom:10px; background:#FFC6E9;"><b>[���߰�]</b>08������˽��ڲ�֪�������������߽���Ϊ��ӭ��������������ӣ���������Ϊ�װ��ġ�¿�ѡ���������һ�����˽�ר��??���������¿�� Ц�����⡱��<br>�����ﲻ����¿���ǵ�������չʾ��������ܶ�������װ������<br>����һ�ָ��ܣ�����һ����ᣬ������Ҫ�����ر��08���˽ڣ�����ʲô��Ҫ����������˵��������������������������ԣ��á�¿�ѡ���һ���֤��</div>
        <!--��ǽ����ʼ-->
<div id="bar">
<!--�һ�ֽ�������˵�-->
<div class="form" id="formOne" style="display:none">
<form name=schFM1 action="index.php" method="post" onsubmit="return chkFM(this.form);">
<input type="hidden" name="search" value="1">
<input type="text" value="�����û�����" name="nickname" class="input" onclick="javascript:this.form.nickname.value=''"/><br />
������Ҫ�ҵ�ֽ��<br>
<input type=image src="http://static.8264.com/oldcms/moban/zt/lovewall/images/submit.gif" width="45" height="19" alt="" border="0" />
</form>
</div>
<!--�һ�ֽ�������˵�-->
<span class="white">�������� 140�����Ͻ������������������˵�Ļ�&nbsp;<img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/ico_smile.gif" align="absmiddle"></span>
</div>
<div id="contentarea">
<!----------------------------------------->
<DIV onmousedown="onFocus(this)" id="cc61" class="scrip1">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc61)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[61]�� 2008-02-04 10:36:40��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">���˽����Ϲ�ʡ����õ���Ǯ����������ˮ��������</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">����������ʵ</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc62" class="scrip6">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc62)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[62]�� 2008-02-04 10:44:23��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�װ��ģ��ܸ�����ö�ö�ö���ô���һ�ԹԵ�~~~~</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">�Թ�</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc63" class="scrip5">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc63)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[63]�� 2008-02-04 13:05:09��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�װ����椱������µ�һ���ֵ��ˣ���������������ӣ������Ҷ���������İ���ף����ϣ���ҵ���С����ÿ�춼���Ŀ��֣�Խ��ԽƯ����������������Զ������</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_20.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">�ع�</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc64" class="scrip1">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc64)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[64]�� 2008-02-04 14:54:33��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ףԸ���������ĺͱ����ŵ���,�໥��Я,��ͬ�������õ�һ��...

��ϧ����,�ٴ����������! HAPPY SATIN VALENTINE'S DAY</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_16.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">FRED</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc65" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc65)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[65]�� 2008-02-04 18:45:14��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">123</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_14.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">hoho</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc66" class="scrip4">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc66)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[66]�� 2008-02-04 20:48:24��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�����³�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_14.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc67" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc67)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[67]�� 2008-02-05 09:08:56��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">��ô��û�д󵨱��׵��أ���</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc68" class="scrip5">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc68)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[68]�� 2008-02-05 11:13:00��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">��&nbsp;&nbsp;���Ҵ͸�����ɡ���</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_12.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">jaty</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc69" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc69)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[69]�� 2008-02-05 15:10:21��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">Ը������µ�һ���ﶼ���ҵ��Լ�����һ�룬��ȻС���ѳ���^_^</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">kim</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc70" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc70)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[70]�� 2008-02-05 15:10:52��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ף����¿�ѣ��������ճɾ���</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_14.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">tony</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc71" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc71)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[71]�� 2008-02-05 19:29:06��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">����/�Ұ��Ĵ�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_16.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc72" class="scrip6">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc72)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[72]�� 2008-02-05 21:24:22��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ٻӢ,�������,I LOVE U</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_20.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc73" class="scrip6">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc73)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[73]�� 2008-02-05 21:39:11��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ף�����������ճɾ�������
Ҳף�Ұ����ˣ�������֣����������ģ�&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; �ٺ�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_21.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc74" class="scrip2">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc74)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[74]�� 2008-02-06 12:55:31��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�ҵ��Ǹ����ǲ����������```ĬĬ��˵����ϲ��������һ��</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc75" class="scrip5">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc75)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[75]�� 2008-02-07 09:18:32��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">���˽ڣ�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc76" class="scrip5">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc76)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[76]�� 2008-02-07 12:34:15��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�ҵ��Ǹ��������һ�������������?�����������彡���������Լ��Լ�һ�а��ã�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_19.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">С��</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc77" class="scrip5">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc77)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[77]�� 2008-02-07 13:11:36��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�װ��ĹԹԣ���������08���������㣬�һ�ú�ȥ����~~~</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_21.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">������</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc78" class="scrip2">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc78)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[78]�� 2008-02-07 20:08:01��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">Ů�����ǿɰ��ġ�����������</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">����ĳ�</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc79" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc79)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[79]�� 2008-02-08 01:14:10��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�Ұ���</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">�£��ϡ�</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc80" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc80)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[80]�� 2008-02-08 01:18:52��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�Ұ��㣬è��</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_16.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��è</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc81" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc81)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[81]�� 2008-02-08 16:21:44��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ףԸ���ҵ��˺��Ұ����˽�������ƽƽ����</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_14.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">ǣ��</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc82" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc82)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[82]�� 2008-02-08 21:03:04��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�װ��Ķ������Ұ��㣡��Զ������ϣ������������ʱ�������ǿ�����Զ��һ����Ҳ�����롣</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_21.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">�����С��</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc83" class="scrip4">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc83)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[83]�� 2008-02-08 22:12:48��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ֻ�ж�����ϧ���Ż�֪��ӵ�С�������</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">Ը��ƽ����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc84" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc84)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[84]�� 2008-02-09 15:23:00��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�źף��Ұ��㣡ϣ����������Զ��һ�������ֿ���</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��?�Ļ���</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc85" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc85)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[85]�� 2008-02-09 15:24:25��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�źף��Ұ��㣡ϣ����������Զ��һ�������ֿ���</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_21.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��?�Ļ���</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc86" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc86)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[86]�� 2008-02-11 12:12:12��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�Ұ���,HELEN,��08���������ǵõ�HELEN������.</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc87" class="scrip2">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc87)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[87]�� 2008-02-11 16:28:29��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">08,�������һ��ȥ�Ƕ�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_20.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">һ������ĵ���</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc88" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc88)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[88]�� 2008-02-11 16:30:00��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">����:08���Ƕ���֤���ҵİ���</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_20.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">һ������ĵ���</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc89" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc89)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[89]�� 2008-02-12 08:59:16��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ף�����е����˽��տ��֣�ϣ���Լ����ڽ����ҵ���һ�룡�Ǻǡ�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_21.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��ɽ���ȸ���</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc90" class="scrip2">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc90)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[90]�� 2008-02-12 14:16:28��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�Ұ���������Ҫ���㻷������</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc91" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc91)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[91]�� 2008-02-13 09:50:13��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">���������Ұ��㣬�������󰮴��ס�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">�󱦱�</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc92" class="scrip2">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc92)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[92]�� 2008-02-13 10:12:25��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">���ţ�������</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_21.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc93" class="scrip6">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc93)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[93]�� 2008-02-13 10:36:51��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">��ͷ�ӣ�

�Ұ��㣡</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_17.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">�𱦱�</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc94" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc94)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[94]�� 2008-02-13 11:55:36��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">YY�����ǻ���Զ��һ���</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">���YZ</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc95" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc95)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[95]�� 2008-02-13 13:13:33��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�Ͽ�ץ��ʱ��^^^^^^^^^^^^^</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_22.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">UFO</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc96" class="scrip2">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc96)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[96]�� 2008-02-13 13:28:34��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">��ֻ�����ɵػ���....</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_17.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc97" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc97)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[97]�� 2008-02-13 14:39:27��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">����������������������������������������������������������������������������
������</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_19.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">�����������</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc98" class="scrip6">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc98)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[98]�� 2008-02-13 14:43:46��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">��������������������������������������������������������</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_13.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��D</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc99" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc99)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[99]�� 2008-02-13 14:44:09��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�Ұ���</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_13.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">tata</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc100" class="scrip1">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc100)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[100]�� 2008-02-13 15:08:00��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ϣ���Լ����ҵ�һ����������ִ�����硢���ꡢ���ա����µ��ˡ��Ǻǡ��������ú��Ѻ��ѡ�����������ֻף����������ճɾ����������úõ���ϧ�Է����ҵ��Լ�ϲ�����˲����ס�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_21.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">С��</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc101" class="scrip5">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc101)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[101]�� 2008-02-13 17:00:40��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">���˽���,û�к�����,���㾭�õ�,ͽ�²�,��ǣ��.�ĸ�����.������08��,��ҵ����һ��,�ܹ��и����ʱ�����������Ϲ���Ů���㸸ĸȥ����,ȥ���ܴ���Ȼ������.��Ҫ����,��ҪŬ��.</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_13.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">100����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc102" class="scrip1">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc102)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[102]�� 2008-02-13 23:13:51��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�Ұ���</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_12.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc103" class="scrip1">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc103)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[103]�� 2008-02-13 23:24:21��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�Ұ��㣡</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_12.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc104" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc104)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[104]�� 2008-02-13 23:34:10��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�Ұ���!���˽ڿ���!</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_12.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">���ո��</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc105" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc105)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[105]�� 2008-02-14 09:46:53��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">121</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">222</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc106" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc106)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[106]�� 2008-02-14 10:59:52��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">���а��ҵĺ��Ұ����ˣ����ܿ��֣�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_19.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc107" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc107)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[107]�� 2008-02-14 11:35:49��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">û�����˵����˽�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��ҹ��</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc108" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc108)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[108]�� 2008-02-14 11:39:18��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">���ҵ����������</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��ͷ</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc109" class="scrip3">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc109)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[109]�� 2008-02-14 12:35:44��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ף����Զ����</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_12.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc110" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc110)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[110]�� 2008-02-14 13:41:59��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">����Ը��.....ϣ����2008���ڵ��Լ�������</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">����������</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc111" class="scrip3">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc111)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[111]�� 2008-02-14 14:35:21��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">Ը�ҵ������Ƕ��������ճɾ���</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��īի��ʿ</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc112" class="scrip2">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc112)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[112]�� 2008-02-14 14:38:01��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ֱ�ӱ��������ң�Ը���Ҹ���</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_20.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">11</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc113" class="scrip1">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc113)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[113]�� 2008-02-14 16:42:36��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ף���µ�һ��ʲô���ù���˳�������ҵ�һ��ϲ�����ˣ�����</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_21.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc114" class="scrip6">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc114)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[114]�� 2008-02-14 16:52:56��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�Ұ��㡲��?ȥ�¡���?ȥ�ɡ�ݭֻ��?��?ʼ����?��&nbsp;&nbsp;&nbsp;&nbsp; {???��???, ?��?��???��} `�����? ��-Ҫ��?�� ��_Ps: .?�Ͳ�����. ����� ��?��</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_16.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">?��о��??</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc115" class="scrip5">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc115)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[115]�� 2008-02-14 17:11:30��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ʲô���ֻ��û�����˵����˽ڣ���������̸��??���ᥧ���ҿ�����ק��������</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">??���ᥧ</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc116" class="scrip3">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc116)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[116]�� 2008-02-14 17:29:18��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">����ڣ��У�
��������������������������?ݫ?��???�ϻ�
��������������������????</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_13.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">8��?��?</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc117" class="scrip2">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc117)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[117]�� 2008-02-14 19:15:06��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ף����λ���°�ͷ���ϣ�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_13.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">�ĸ루��ӥ��</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc118" class="scrip4">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc118)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[118]�� 2008-02-14 19:53:01��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ϣ����һ�����˽ڲ�Ҫ��һ���˹��ˣ�Ϊ�Լ����ͣ�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_17.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">һ��</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc119" class="scrip2">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc119)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[119]�� 2008-02-14 22:22:19��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ףԸ������˽ڿ��֣�ҲףԸ�Լ����µ�һ�������µ�����!�Ǻ�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_14.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">hengl</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc120" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc120)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[120]�� 2008-02-15 01:09:03��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�������˽��յ���һ����õ�����.</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">5</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc121" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc121)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[121]�� 2008-02-15 11:38:12��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">���õ������������ݼ��ţ�so ����ϧ����ӵ�еİɣ�ף�����˿���</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_13.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc122" class="scrip6">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc122)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[122]�� 2008-02-15 13:52:43��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�Ϲ���
&nbsp;&nbsp;&nbsp;&nbsp;��ȥ��ʿ�ֳ����ͣ��ĳ�ˮ������ʵҲͦ�õģ���</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_15.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">mm</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc123" class="scrip1">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc123)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[123]�� 2008-02-15 13:57:34��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">���˽����죬���ĵ�������һ�����</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_16.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��ֵ</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc124" class="scrip6">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc124)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[124]�� 2008-02-15 15:02:34��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">���˽���������Ϣ�жȹ�����</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_12.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">���</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc125" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc125)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[125]�� 2008-02-15 22:01:32��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">��������������ܰ����������ף����</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">logofree</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc126" class="scrip2">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc126)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[126]�� 2008-02-19 15:24:32��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ֻ��365���е�һ�죬������Ϣ�Ķȹ���ϣ����������Щ����</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_16.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc127" class="scrip4">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc127)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[127]�� 2008-02-19 17:34:19��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ľľ�����Ұ���</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_17.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��Խ</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc128" class="scrip2">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc128)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[128]�� 2008-02-24 12:32:23��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">��</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_14.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">Kitty</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc129" class="scrip4">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc129)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[129]�� 2008-04-11 21:14:36��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">��Ϊ������ԭ������99�첻���ˣ�������ˣ����ǻ��Ǳ˴���ϧ�ŶԷ����ٹ��������ڣ����Ǽ���ף�����ǣ�ף��С���ӣ�ף�����е����ѣ�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_13.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">С�����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc130" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc130)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[130]�� 2008-04-17 19:34:17��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�Ұ�����������&nbsp;&nbsp;�������̫Զ ���Ǽ������� ������������</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_16.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">Ԭ����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc131" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc131)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[131]�� 2008-04-30 12:37:41��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�Ұ���</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">UH</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc132" class="scrip2">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc132)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[132]�� 2008-05-08 04:15:49��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�Ұ���</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">love you</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc133" class="scrip2">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc133)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[133]�� 2008-05-19 23:35:56��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�����365�� ��</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc134" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc134)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[134]�� 2008-06-17 09:41:01��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">��ݰ�������ĺ����㣬��֪��������ܻ������װ��ı�������Ը�Ⱞ��һ��һ����������ġ�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc135" class="scrip1">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc135)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[135]�� 2008-06-17 14:39:55��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�ҵ�Ը����ά������ĺ�ƽ!����ͳһȫ����!</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_20.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">���˹�</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc136" class="scrip2">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc136)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[136]�� 2008-07-31 20:01:03��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">�Ұ��㣬С��������ֺþò����˵ģ�˼�֪�������ʲô��������֪������ĺ����㣡�е�ʱ����ĺ��ۣ�����ЪһЪ����������Ƶ����ǲ���ͣ����������ǰ�ɣ� Ҳ������ԭ��������ˣ� ���Ű����ܸ����Ǵ����ڴ�����ů��??ףԸ���ǣ���Զ���֣�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��ʹ����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc137" class="scrip2">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc137)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[137]�� 2008-08-07 09:46:15��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">���ˣ���Ϧ���֣�������������������Ŷ�����ǡ����һ�����ģ�</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_21.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">��ʹ����</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc139" class="scrip2">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc139)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[139]�� 2008-08-07 15:48:47��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">˭��ϣ��ÿ��ʱ����̸����ʱ��ô����,����ŷ������Ϲ�Ƣ���ܲ���.</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">������</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc140" class="scrip7">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc140)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[140]�� 2008-10-10 13:41:32��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">ף��</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">ww</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<DIV onmousedown="onFocus(this)" id="cc141" class="scrip2">
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR>
<TD onmousedown="onMouseDown(cc141)" style="CURSOR: move" >
<div class="shead"><span onDblClick="onRemove()" title="˫���ر�ֽ��">��[141]�� 2008-10-10 16:56:03��<a style="CURSOR: hand" onclick="onRemove()" title="�ر�ֽ��">��</a></span></div>
</TD>
</TR>
<TR>
<TD style="CURSOR:default">
<div class="sbody">fffff</div>
<div class="sbot"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/bpic_11.gif" class="left" border="0"><h2><a href="#"  style="font-size:16px;">fff</a></h2></div>
</TD>
</TR>
</TABLE>
</DIV>
<!----------------------------------------->
</div>
<!--end-->
        </div>
     <div class="bottom">
     	<table width="941" border="0" align="center" cellpadding="0" cellspacing="0" style="margin:10px 0px 10px 0px;">
  <tr>
    <td colspan="6" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" style=" padding-left:10px; font-size:14px; font-weight:bold; background:#ffd1f3; border-bottom:#999999 solid 1px; margin:5px 0px 5px 0px">
  <tr>
    <td height="25"><span style="font-size:14px; font-weight:bold;">���ǰ��ڻ���</span></td>
  </tr>
</table>
</td>
    </tr>
  <tr>
    <td align="center" valign="top"><table width="150" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="154" height="140" align="center" valign="middle" style="border:#666666 solid 1px;"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/1a.jpg" width="150" height="140" /></td>
      </tr>
      <tr>
        <td height="25" align="center" valign="middle">����ȥ����</td>
      </tr>
    </table></td>
    <td align="center" valign="top"><table width="150" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="154" height="140" align="center" valign="middle" style="border:#666666 solid 1px;"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/2a.jpg" width="150" height="140" /></td>
      </tr>
      <tr>
        <td height="25" align="center" valign="middle">�Ϲ�������װ��</td>
      </tr>
    </table></td>
    <td align="center" valign="top"><table width="150" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="154" height="140" align="center" valign="middle" style="border:#666666 solid 1px;"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/3a.jpg" width="150" height="140" /></td>
      </tr>
      <tr>
        <td height="25" align="center" valign="middle">װ�������һ��</td>
      </tr>
    </table></td>
    <td align="center" valign="top"><table width="150" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="154" height="140" align="center" valign="middle" style="border:#666666 solid 1px;"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/4a.jpg" width="150" height="140" /></td>
      </tr>
      <tr>
        <td height="25" align="center" valign="middle">������ȥ����</td>
      </tr>
    </table></td>
    <td align="center" valign="top"><table width="150" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="154" height="140" align="center" valign="middle" style="border:#666666 solid 1px;"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/5a.jpg" width="150" height="140" /></td>
      </tr>
      <tr>
        <td height="25" align="center" valign="middle">�ڻ������Ǳ���˫��</td>
      </tr>
    </table></td>
    <td align="center" valign="top"><table width="150" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="154" height="140" align="center" valign="middle" style="border:#666666 solid 1px;"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/6a.jpg" width="150" height="140" /></td>
      </tr>
      <tr>
        <td height="25" align="center" valign="middle">�׽���Ȼ</td>
      </tr>
    </table></td>
  </tr>
</table>
   	   <table width="98%" border="0" cellspacing="0" cellpadding="0" style="margin-top:5px;">
  <tr>
    <td height="25" colspan="3" align="left" valign="middle" bgcolor="#FFD1F3" style="border-bottom:#999999 solid 1px;"><span style="font-size:14px; font-weight:bold;">&nbsp;&nbsp;����װ�� �Զ���</span></td>
    </tr>
  <tr>
    <td width="313" align="center" valign="middle" ><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" style="padding:5px 0px 5px 0px;">
      <tr>
        <td align="center" valign="middle"><a href="http://shop.8264.com/brand-6-c0.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/11.gif" width="150" height="152" border="0" style=" border:#999999 solid 1px;"/></a></td>
        <td align="left" valign="top" style="padding:5px 5px 5px 5px; line-height:1.5;">ץ����Ҳ�������Ŷ�����ץ�����ж��Ŷ�����õ��Ǵ�ϸ����������ϣ��ʺ���Ϊ�м䱣ů�㡣��ʽ��������һ���ץ�޿�������ǿ����ѩ��ʱ������ѡ��</td>
      </tr>
    </table></td>
    <td width="314" align="center" valign="middle" ><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="middle"><a href="http://shop.8264.com/brand-60-c0.html" target="_blank";><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/12.gif" width="150" height="152" border="0" style=" border:#999999 solid 1px;"/></a></td>
        <td align="left" valign="top" style="padding:5px 5px 5px 5px; line-height:1.5;">OSPREY Crescent (����)ϵ�б���??�п�70L��Ů��60L�����ĵ���ʹ���ʶȺ�����֮�䲻�ٳ�Ϊһ��ì�ܣ���ˣ����ʲ��õĳ�Ϊ��;�����ѡ���ǲ��ǿᾢʮ�㣿</td>
      </tr>
    </table></td>
    <td width="314" align="center" valign="middle" ><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="middle"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/13.gif" width="150" height="152" border="0" style=" border:#999999 solid 1px;"/></td>
        <td align="left" valign="top" style="padding:5px 5px 5px 5px; line-height:1.5;">·�գ�LOAP�����¿�ʽ��������ܰ����ƴ����������幤��ѧ��ȷ��ƣ�������ã��������ʺ��塣�����Ŀ�ͨͼ��Ϊ�����ǵĻ������������˺ܶ���Ȥ��</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="middle" ><table width="100%" border="0" cellspacing="0" cellpadding="0" style=" border-top: #999999 dotted 1px; margin:5px 0px 8px 0px;">
      <tr>
        <td></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td align="center" valign="middle" ><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="middle"><a href="http://shop.8264.com/brand-35-c0.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/14.gif" width="150" height="152" border="0" style=" border:#999999 solid 1px;"/></a></td>
        <td align="left" valign="top" style="padding:5px 5px 5px 5px; line-height:1.5;">��������֮�ǳ���Ů��SCALER�����ҰӪ��רΪ�������װ��ʹ������ƺ���ĩ��������ʹ�á���ʽ����,ʹ�÷���,רΪ�������µĳ���װ��ʹ������ƺ���ĩ��������ʹ�ã�</td>
      </tr>
    </table></td>
    <td width="314" align="center" valign="middle" ><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="middle"><a href="http://shop.8264.com/brand-35-c0.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/15.gif" width="150" height="152" border="0" style=" border:#999999 solid 1px;"/></a></td>
        <td align="left" valign="top" style="padding:5px 5px 5px 5px; line-height:1.5;">��������ʹ�ã������¸����ģ�����ʹ�õĹ����У�Ҳ���Էֿ�����˯������ʹ�ã��Ա�������ͷ�����ϲ��÷����ޣ�������Ƥ����??<strong>SCALER˫��˯�����԰��顣</strong></td>
      </tr>
    </table></td>
    <td width="314" align="center" valign="middle" ><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="middle"><a href="http://shop.8264.com/brand-2-c0.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/lovewall/images/16.gif" width="150" height="152" border="0" style=" border:#999999 solid 1px;"/></a></td>
        <td align="left" valign="top" style="padding:5px 5px 5px 5px; line-height:1.5;">���ǵ�������˯��Ҳ������������ɫ����ʽ�϶����Ƕ����~~90%�����ɶȻҶ��ޱ�ů�ȷǳ�֮�ã����˽ڳ��е�����¿�ǿ��Կ���һ��Ŷ~~</td>
      </tr>
    </table></td>
  </tr>
</table>
  </div>
  <div><style>
a{ text-decoration:none; color:#000000;}
a:hover{ text-decoration:underline;}

.bbb a{ color: #000000;text-decoration:none;}
.bbb a:hover{color:#cc0000;text-decoration:underline;}

</style>
<table width="958" border="0" align="center" cellpadding="0" cellspacing="0" style=" font-size:12px; margin-top:8px;" class="bbb">
  <tr>
    <td><table width="958" height="30" border="0" cellpadding="0" cellspacing="0" style="border-top:#686e5d solid 3px; background:#Cdd0c8;">
      <tr>
        <td align="center"><a href="http://www.8264.com/ziliao/about/aboutus.php"  >��������</a> | <a href="http://www.8264.com/list/531/" >��ϵ����</a> | <a href="http://www.8264.com/8954.html#pl"  >�������</a> | <a href="http://www.8264.com/ziliao/sitemap.html"  >��վ��ͼ</a> | <a href="http://bbs.8264.com/forum-160-1.html"  >��ҪͶ��</a> | <a href="http://www.8264.com/ziliao/about/ad2.php"  >������</a> | <a href="http://www.8264.com/list/531/"  >�༭���Ĺ���</a> | <a href="http://www.8264.com/sitelink/index.html" style="color:red">��������</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="20" align="center" valign="middle"><a href="http://www.8264.com/ziliao/about/ad2.php" style="color:red; font-weight:bold;">�����ϵ��022-23708264-818</a> Mail:admin8264.com <a href="http://www.miibeian.gov.cn/">��ICP��05004140��-1</a>   </td>
  </tr>
  <tr>
    <td height="20" align="center" valign="middle" style="color:#5f8c00;"> �������з��յ��˶���8264���������ע�ⰲȫ����</td>
  </tr>
  <tr>
    <td><table width="958" height="30" border="0" cellpadding="0" cellspacing="0" style="border:#004a9c solid 1px;">
      <tr>
        <td align="center" valign="middle"><span style="color:#004a9c;">������Ŀ��</span><a href="/">8264</a> | <a href="http://osm.8264.com/" target="_blank">���⾭����</a> | <a href="http://www.91ski.com/" target="_blank">��Ҫ��ѩ��</a> | <a href="http://www.yododo.com/" target="_blank">�ζ������������</a> | <a href="http://bbs.8264.com/" target="_blank">�й�¿����̳</a> | <a href="http://www.8844shop.com/" target="_blank">������Ʒ�̳�</a> | <a href="http://u.8264.com/" target="_blank">¿��¼</a> | <a href="http://www.8264.com/pp/" target="_blank">������Ů</a> <div style="display:none;"><script src="http://js.tongji.cn.yahoo.com/141390/ystat.js" type="text/javascript" type="text/javascript"></script><noscript><a href="http://tongji.cn.yahoo.com"><img src="http://img.tongji.cn.yahoo.com/141390/ystat.gif"/></a></noscript></div></td>
      </tr>
    </table></td>
  </tr>
</table></div>
    </div>
<script type="text/javascript">
var elements = document.getElementById("contentarea").childNodes;
for (var i = 0; i < elements.length; i++) {
if(elements[i].tagName && elements[i].tagName=='DIV') {
elements[i].style.top = Math.ceil(350 * Math.random()) + "px"
elements[i].style.left = Math.ceil(360 * Math.random()) + "px";
}
}
</script>
</body>
</html>