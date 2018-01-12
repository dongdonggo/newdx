<?php

/**
 * @author JiangHong
 * @copyright 2013
 */

if(!defined('IN_DISCUZ')){
	exit('Access Denied');
}
if(!$_G['gp_inajax']){
    showformheader('plugins&operation=config&do='.$pluginid.'&identifier=ipbanspider&pmod=whitelist');
    echo '<br /><p>����IP��&nbsp;&nbsp;<input type="text" name="searchip" value="'.$_G['gp_searchip'].'"/>&nbsp;&nbsp;<input type="submit" name="submit" value="��ѯ"/>&nbsp;&nbsp;<b class="green">��ʾ����ѯ���Բ�ѯip�Σ����巽ʽΪ��*����,���磺131.*.14.* ��17.*.*.* �� 192.168.1.*</b></p>';
    showformfooter();
    echo '<br /><p>�Զ�ˢ��<input type="checkbox" checked id="autoref"/></p>';
    showformheader('plugins&operation=config&do='.$pluginid.'&identifier=ipbanspider&pmod=whitelist');
    echo '<div id="BLACKLIST_DIV">';
}else{
    include template('common/header_ajax');
}
if($_G['gp_inajax'] && $_G['groupid']==1){
    include_once libfile('function/admincp');
}
loadcache('plugin');
$pre = $_G['cache']['plugin']['ipbanspider']['redis_per'] ? $_G['cache']['plugin']['ipbanspider']['redis_per'] : "BanIpSpider_";
$ajaxpertime = $_G['cache']['plugin']['ipbanspider']['ajax_per'] > 1 ? $_G['cache']['plugin']['ipbanspider']['ajax_per'] : 5;
require_once libfile('class/myredis');
$redis = & myredis::instance(6379);
//change db
$redis->SELECTDB(1);
$page = $_G['gp_page'] >= 1 ? $_G['gp_page'] : 1;
$perpage = $_G['cache']['plugin']['ipbanspider']['page_per'] ? $_G['cache']['plugin']['ipbanspider']['page_per'] : 15;
$nowpage = $perpage * ($page - 1) - 1;
$nowpage = $nowpage >= 0 ? $nowpage : 0;
$count = $redis->sCard($pre.'whitelist');
$whitelist = $redis->sMembers($pre.'whitelist');
if(empty($_G['gp_searchip'])){
    $multipage = multi($count, $perpage, $page, "admin.php?action=plugins&operation=config&do=$pluginid&identifier=ipbanspider&pmod=whitelist");
}else{
    $grepip = str_replace('*' ,'\d{1,3}' ,$_G['gp_searchip']);
    foreach($whitelist as $n => $ip){
        if(preg_match('#'.$grepip.'#i' ,$ip)==0) unset($whitelist[$n]);
    }
    sort($whitelist);
    $count = count($whitelist);
}
$multipage = isset($multipage) ? $multipage : '';
showtableheader();
showsubtitle(array('' ,'IP' ,'���ʴ���' ,'����'));
showtablerow('' ,array('colspan="4"') ,array('<p id="update"></p>'));
if(!empty($whitelist)){
    $min = min($nowpage+$perpage ,$count);
    for($i=$nowpage;$i<$min;$i++){
        showtablerow('' ,array('class="td25"','','','') ,array(
            "<input type=\"checkbox\" class=\"checkbox\" name=\"deletes[]\" value=\"$whitelist[$i]\">",
            $whitelist[$i].'<a class="blue" href="admin.php?action=plugins&operation=config&do='.$pluginid.'&identifier=ipbanspider&pmod=history&searchip='.$whitelist[$i].'">��</a><b onclick="getmessage(\''.$whitelist[$i].'\')" class="blue">��</b>' , $redis->ZCARD($pre.'COMMON_IP_'.$whitelist[$i].'_zset') , '<b class="red" onclick="ajaxget(\'plugin.php?id=ipbanspider:ajaxget&m=white&v=list&other='.$whitelist[$i].'|whitelist|unsafe\',\'update\')">�Ƴ�������</b>',
        ));
    }
}else{
    showtablerow('' ,array('','colspan="5"'),array('','��ǰû�а�����IP'));
}
showsubmit('delete' ,'submit' ,'<input type="checkbox" name="chkall" id="chkall" class="checkbox" onclick="checkAll(\'prefix\', this.form, \'deletes\')" /><label for="chkall">ȫѡ</label>' ,'' ,$multipage);
showtablefooter();
if(!$_G['gp_inajax']){
    if(submitcheck('delete')){
        echo '<script>';
        foreach($_G['gp_deletes'] as $dip){
            echo 'ajaxget(\'plugin.php?id=ipbanspider:ajaxget&m=white&v=list&other='.$dip.'|whitelist|unsafe\',\'update\');';
        }
        echo '</script>';
    }
    echo '</div>';
?>
<div id="message" style="display:none;">

</div>
<style>
#update p{text-align: center;border:1px solid #F4E4B4;background: #FFFFE9;cursor: pointer;}
#update p a{color:#EFAA00;}
#update p b{margin:0 5px;}
.green,.red,.blue{margin: 0 3px;cursor: pointer;}
.green{color:green;}
.red{color:red;}
.blue{color:blue;}
#message{position: absolute;top: 50px;left: 50px; width: 950px;height: 620px;border: 5px #CCC solid;background: white;}
#message #list{overflow-y: scroll;width: 950px;height: 520px;}
#message #user{overflow-y: scroll;width: 950px;height:70px;}
#message h3{text-align: center;}
#message h3 span{float:right;cursor: pointer;}
#message ul li{float:left;border:1px dashed #0099CC;padding:3px;margin:5px 0 0 5px;}
#message ul li span{margin-left:10px;}
</style>
<script>
    function find_new(){
        if(document.getElementById('autoref').checked == true){
            ajaxget('plugin.php?id=ipbanspider:whitelist&page=<?php echo $page; ?>&searchip=<?php echo $_G['gp_searchip']; ?>' ,'BLACKLIST_DIV');
        }
    }
    function getmessage(ip){
        ajaxget('plugin.php?id=ipbanspider:ajaxget&m=select&v=find&other='+ip ,'message');
    }
    setInterval(find_new,<?php echo $ajaxpertime*1000 ?>);
</script>
<?php
}else{
    include template('common/footer_ajax');
}
?>