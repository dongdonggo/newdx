<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
require_once libfile('function/forumlist');
require_once libfile('function/admincp');


if (!empty($_POST)) {
	
	$req = $_POST['req'];
	$res = $_POST['res'];
	$fs=1;
	
	$array=array("1"=>$_G['setting']['domain']['app']['portal'],"2"=>$_G['setting']['domain']['app']['forum'],"3"=>$_G['setting']['domain']['app']['home']);

	if(in_array($req,$array)){		
		cpmsg('�����ַ����ֹ��', 'action=plugins&operation=config&do='.$pluginid.'&identifier=domainset&pmod=domain&op=newop', 'error'); 	 
	}
	if(strpos($req,"http://")!==false||strpos($res,"http://")!==false)
	{
		cpmsg('����д����http��//����ַ��', 'action=plugins&operation=config&do='.$pluginid.'&identifier=domainset&pmod=domain&op=newop', 'error'); 	 
	}
	//�ж������ַ����ת��ַ�Ƿ�Ϊ��
	if(empty($req) || empty($res)) {
		cpmsg('�����ַ����ת��ַ����Ϊ�գ�', 'action=plugins&operation=config&do='.$pluginid.'&identifier=domainset&pmod=domain&op=newop', 'error'); 	 
	}	
	// �ж������ַ����ת��ַ��ͬ
	if($req==$res) {
		cpmsg('�����ַ����ת��ַ������ͬ��', 'action=plugins&operation=config&do='.$pluginid.'&identifier=domainset&pmod=domain&op=newop', 'error'); 	 
	}
	//1����ѡ�����������е�ַ����תʱ�ж�����
	if($fs==1){
		//if(strpos($req,"/"))
	//	{
	//		cpmsg('����д������/��������������', 'action=plugins&operation=config&do='.$pluginid.'&identifier=domainset&pmod=domain&op=newop', 'error'); 	 
		//}		
	}
	//2���ж���ת��ַ�����������ظ�
	/*if(strpos($res,"/")!==false) {
		$rs=substr($res, 0, strpos($res,"/"));
	} else {
		$rs= $res;
	} 
	$query = DB::fetch_first("SELECT * FROM ".DB::table('plugin_domainset')." where reqaddress='{$rs}'");
	if($query){
		cpmsg('��ת��ַ�����������ظ���', 'action=plugins&operation=config&do='.$pluginid.'&identifier=domainset&pmod=domain&op=newop', 'error'); 	 
	}*/
    //3���ж���ת��ַ�������ַ��	
	$query = DB::fetch_first("SELECT * FROM ".DB::table('plugin_domainset')." where reqaddress='{$res}'");
	if($query){
	      cpmsg('��ת��ַ�Ѿ������������£�', 'action=plugins&operation=config&do='.$pluginid.'&identifier=domainset&pmod=domain&op=newop', 'error'); 		   	
	}
	
	//4�������ַ�������ַ�Ƿ��ظ�
	$query = DB::fetch_first("SELECT * FROM ".DB::table('plugin_domainset')." where reqaddress='{$req}'");
	if($query){
		cpmsg('�����ַ�Ѿ����ڣ�', 'action=plugins&operation=config&do='.$pluginid.'&identifier=domainset&pmod=domain&op=newop', 'error'); 		
	   	
	}
	//5���ж������ַ����ת��ַ�Ƿ��ظ�	
	$query = DB::fetch_first("SELECT * FROM ".DB::table('plugin_domainset')." where resaddress='{$req}'");
	if($query){	
		cpmsg('�����ַ������������ת��ַ�ظ���', 'action=plugins&operation=config&do='.$pluginid.'&identifier=domainset&pmod=domain&op=newop', 'error'); 			
	}
	//6
	DB::query("INSERT INTO ".DB::table('plugin_domainset')."
			  (id, reqaddress, resaddress, method) VALUES (null, '{$req}', '{$res}', '{$fs}')");
	memory('rm','domainset_indomain');
	cpmsg('�½����óɹ�', 'action=plugins&operation=config&do='.$pluginid.'&identifier=domainset&pmod=domain', 'succeed');
}


?>

<form action="" method="post">
<?php showtableheader(); ?>
<tr><th class="partition" colspan="15">�½�����</th></tr>
<tr><td class="td27" colspan="2">��������:</td></tr>
<tr class="noborder">
	<td class="vtop rowform">
		<input type="text" name="req" class="txt" id="" />
	</td>
	<td class="vtop tips2">
		���磺tj.<?php echo $_G['setting']['domain']['root']['forum']; ?>&nbsp;&nbsp;(ע�ⲻҪ����http://)
	</td>
</tr>

<tr><td class="td27" colspan="2">��ת��ַ:</td></tr>
<tr class="noborder">
	<td class="vtop rowform">
		<input type="text" name="res" class="txt" id="" />
	</td>
	<td class="vtop tips2">
		���磺tj.<?php echo $_G['setting']['domain']['root']['forum']; ?>&nbsp;&nbsp;(ע�ⲻҪ����http://)
	</td>
</tr>

<tr><td class="td27" colspan="2" style="display:none">��ת��ʽ:</td></tr>
<tr class="noborder">
	<td class="vtop rowform"  style="display:none">
		<ul onmouseover="altStyle(this);">
		<!-- <li class="checked"><input type="hidden" value="0" name="fs" class="radio" checked="checked">&nbsp;���õ�ַ��ת</li>!-->
			<li class="checked"><input type="radio" value="1" name="fs" class="radio">&nbsp;���������е�ַ��ת</li>
		</ul>
	</td>
	<td class="vtop tips2">
		ע�⣺<?php echo $_G['setting']['domain']['app']['portal']."��".$_G['setting']['domain']['app']['forum']."��".$_G['setting']['domain']['app']['home']; ?>Ϊϵͳ������ַ�����õ�ַ���������ӣ��Ѿ��ڰ�������󶨹��������õ������������ӣ�����˴������ý����ǰ�������󶨹����е����ã�
	</td>
</tr>

<tr>
	<td colspan="15">
		<div class="fixsel">
			<input type="submit" value="�ύ" title="�� Enter ������ʱ�ύ����޸�" name="editsubmit" id="submit_editsubmit" class="btn">
		</div>
	</td>
</tr>
<?php showtablefooter(); ?>
</form>