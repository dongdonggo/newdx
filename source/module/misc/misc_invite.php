<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: misc_invite.php 15922 2010-08-30 04:02:10Z liulanbo $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

require_once libfile('function/friend');


if($_G['gp_action'] == 'group') {
	$friendgrouplist = friend_group_list();
	$id = intval($_G['gp_id']);
	$isgroupuser = DB::result_first("SELECT uid FROM ".DB::table('forum_groupuser')." WHERE fid='$id' AND uid='{$_G['uid']}'");
	if(empty($isgroupuser)) {
		showmessage('group_invite_failed');
	}
	$grouplevel = DB::result_first("SELECT level FROM ".DB::table('forum_forum')." WHERE fid='$id'");
	loadcache('grouplevels');
	$grouplevel = $_G['grouplevels'][$grouplevel];
	$membermaximum = $grouplevel['specialswitch']['membermaximum'];
	if(!empty($membermaximum)) {
		$curnum = DB::result_first("SELECT count(*) FROM ".DB::table('forum_groupuser')." WHERE fid='$id'");
		if($curnum >= $membermaximum) {
			showmessage('group_member_maximum', '', array('membermaximum' => $membermaximum));
		}
	}
	$groupname = DB::result_first("SELECT name FROM ".DB::table('forum_forum')." WHERE fid='$id'");
	$invitename = lang('group/misc', 'group_join', array('groupname' => $groupname));
	if(!submitcheck('invitesubmit')) {
		$friends = friend_list($_G['uid'], 100);
		if(!empty($friends)) {
			$frienduids = array_keys($friends);
			$inviteduids = array();
			$query = DB::query("SELECT inviteuid FROM ".DB::table('forum_groupinvite')." WHERE fid='$id' AND inviteuid IN (".dimplode($frienduids).") AND uid='$_G[uid]'");
			while($inviteuser = DB::fetch($query)) {
				$inviteduids[$inviteuser['inviteuid']] = $inviteuser['inviteuid'];
			}
			$query = DB::query("SELECT uid FROM ".DB::table('forum_groupuser')." WHERE fid='$id' AND uid IN (".dimplode($frienduids).")");
			while($inviteuser = DB::fetch($query)) {
				$inviteduids[$inviteuser['uid']] = $inviteuser['uid'];
			}
		}
		$inviteduids = !empty($inviteduids) ? implode(',', $inviteduids) : '';
	} else {
		$uids = $_G['gp_uids'];
		if($uids) {
			if(count($uids) > 1000) {
				showmessage('group_choose_friends_max');
			}
			$query = DB::query("SELECT uid, username FROM ".DB::table('common_member')." WHERE uid IN (".dimplode($uids).")");
			while($user = DB::fetch($query)) {
				DB::query("REPLACE INTO ".DB::table('forum_groupinvite')." (fid, uid, inviteuid, dateline) VALUES ('$id', '$_G[uid]', '$user[uid]', '".TIMESTAMP."')");
				$already = DB::affected_rows();
				if($already == 1) {
					notification_add($user['uid'], 'group', 'group_member_invite', array('groupname' => $groupname, 'fid' => $id, 'url' =>'forum.php?mod=group&action=join&fid='.$id, 'from_id' => $id, 'from_idtype' => 'invite_group'), 1);
				}
			}
			showmessage('group_invite_succeed', "forum.php?mod=group&fid=$id");
		} else {
			showmessage('group_invite_choose_member', "forum.php?mod=group&fid=$id");
		}
	}
} elseif($_G['gp_action'] == 'thread') {
	$count = get_fans_count($_G['uid']);
	$id = intval($_G['gp_id']);
	$thread = DB::fetch_first("SELECT fid,authorid,special,subject FROM ".DB::table('forum_thread')." WHERE tid='$id'");
	if($thread['authorid'] != $_G['uid']) {
		showmessage('group_invite_not_author');
	}
	switch($thread['special']) {
		case 0:$invitename = lang('forum/misc', 'join_topic');break;
		case 1:$invitename = lang('forum/misc', 'join_poll');break;
		case 2:$invitename = lang('forum/misc', 'buy_trade');break;
		case 3:$invitename = lang('forum/misc', 'join_reward');break;
		case 4:$invitename = lang('forum/misc', 'join_activity');break;
		case 5:$invitename = lang('forum/misc', 'join_debate');break;
	}

	if(!submitcheck('invitesubmit')) {
		//获得关注分组
		$groups = friend_group_list();
		$inviteduids 	= '';
	} else {
		$uids = $_G['gp_uids'];
		$locationurl = !empty($_G['gp_referer']) ? $_G['gp_referer'] : "forum.php?mod=viewthread&tid={$id}";
		if($uids) {

			if(count($uids) > 1000) {
				showmessage('group_choose_friends_max');
			}

			$message = lang('notification' ,$thread['fid'] == $_G['config']['fids']['zbfx'] ? 'thread_invitefx' : 'thread_invite' ,array('actor' => "<a href=\"home.php?mod=space&uid=$_G[uid]\">".$_G['member']['username']."</a>" , 'subject' => $thread['subject'], 'invitename' => $invitename, 'tid' => $id, 'from_id' => $id, 'from_idtype' => 'invite_thread'));

			// 新邀请入队列
			// home_notice_queue_list值的顺序:uid, mtype, authorid, author, message, dateline
			require_once libfile('class/myredis');
			$redis = & myredis::instance(6381);

			foreach ($uids as $uid) {
				$redis->obj->rpush('home_notice_queue_list', "{$uid}||1||{$_G['uid']}||{$_G['member']['username']}||{$message}||{$_G['timestamp']}");
			}

			showmessage('group_invite_succeed', $locationurl);
		} else {
			showmessage('group_invite_choose_member', $locationurl);
		}
	}
}

function uc_avatar($uid, $size = '', $returnsrc = FALSE) {
	global $_G;
	return avatar($uid, $size, $returnsrc, FALSE, $_G['setting']['avatarmethod'], $_G['setting']['ucenterurl']);
}
include template('common/invite');
?>
