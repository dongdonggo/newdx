<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="gbk">
    <title>��ȡװ�� - 8264�����˶�ѧУ</title>
    <meta name="viewport" content="minimal-ui,width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="MobileOptimized" content="width">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="renderer" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <link rel="stylesheet" href="http://static.8264.com/static/css/exam/style.css?20170907">
    <script src="http://static.8264.com/static/js/exam/jquery-1.9.1.min.js" type="text/javascript"></script>
    <style>
        html,body{ background: #f8f8f9; }
    </style>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?49299785f8cc72bacc96c9a5109227da";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>

<body>
<!--ͷ����ʼ-->
<?php if($isWechat == 0) { ?>
<div class="header-content">
    <div class="home-icons" style="display: none;">
        <a href="http://www.8264.com/xuexiao/">��ҳ</a>
    </div>
    <div class="goback-icons">
        <a href="http://www.8264.com/xuexiao/">����</a>
    </div>
    <div class="logo">
        <a href="#">
            <img src="http://static.8264.com/static/images/exam/logo.png" alt="">
        </a>
    </div>
</div>
<?php } else { if($phonetype == 'android') { ?>
<a href="<?php echo $back_url;?>" class="chat-back"></a>
<?php } } ?>
<div class="zhuangbeibranner">
    <a href="#" target="_black">
        <img src="http://static.8264.com/static/images/exam/zhuangbeibranner.jpg">
        <span>1500Ԫ8264����װ����������</span>
    </a>
</div>
<div class="page bggray">
    <div class="zhuangbeiinfo">
        �������ɽ��1�������ⱳ��1����˯��1������ɫ�������
    </div>
    <script src="http://bbs.8264.com/api.php?mod=ad&adid=custom_483" type="text/javascript"></script>
    <?php if($vip_status == 0) { ?>
        <a href="http://www.8264.com/xuexiao/user.html" class="uerlinkbutton" style="width: 100%;">��Ϊ��Ա</a>
    <?php } else { ?>
        <?php if($equipment_order == 1) { ?>
            <a href="javascript:///" class="uerlinkbutton" style="width: 100%;">�Ѿ���ȡ</a>
        <?php } else { ?>
            <a href="http://www.8264.com/exam.php?ctl=topic&amp;act=equipment&amp;page=form" class="uerlinkbutton" style="width: 100%;" >�����ȡ</a>
        <?php } ?>
    <?php } ?>
</div><?php include template('exam/topic/footer'); include template('exam/topic/wechat_share'); ?></body>
</html>