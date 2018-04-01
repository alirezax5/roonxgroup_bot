<?php

//===============================================================//

// Variable Source

$update = json_decode(file_get_contents('php://input'));
$for = file_get_contents("admin/admin.txt");
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$username = $update->callback_query->message->chat->username;
$first_name = $update->callback_query->message->chat->first_name;
$last_name = $update->callback_query->message->chat->last_name;
$fromid = $update->callback_query->message->from->id;
$grouplist = file_get_contents('user/'.$from_id."/grouplist.txt");
$from_id = $update->message->from->id;
$command = file_get_contents("user/".$from_id."/command.txt");
$pm_ch = file_get_contents("user/".$from_id."/pm-to-ch.txt");
$message_id = $update->callback_query->message->message_id;
$message_id_feed = $update->message->message_id;
$message = $update->message;
$mid = $message->message_id;
$pm2 = file_get_contents("post.txt");
$msgusergroup = file_get_contents("Group/".$Group."/".$from_id."/msg.txt");
$first = $message->from->first_name;
$lastf = $message->from->last_name;

$chatid = $update->message->chat->id;
$text = $message->text;
$contact = $update->message->contact;
$cnumber = $update->message->contact->phone_number;
$forward = $update->message->forward_from;
$ffirst = $update->message->forward_from->first_name;
$fid = $update->message->forward_from->id;
$flast = $update->message->forward_from->last_name;
$fuser = $update->message->forward_from->username; 
$fadmin = $message->from->id;
$id_feed = $message->from->id;
$first_feed = $message->from->first_name;
$user_feed = $message->from->username;
$username2 = $message->from->username;
$reply_fwd = $update->message->reply_to_message->forward_from->id;
$first_fwd = $update->message->reply_to_message->forward_from->first_name;

$reply_id_id =  $update->message->reply_to_message->from->id;
$reply_id_first_name = $update->message->reply_to_message->from->first_name;
$reply_id_username = $update->message->reply_to_message->from->username;
$reply_id_username2 = $update->message->reply_to_message->from->username;

$reply_id = $update->message->reply_to_message->message_id;
$reply = $update->message->reply_to_message;
$reply_photo = $update->message->reply_to_message->photo;
$reply_text = $update->message->reply_to_message->text;
$reply_photo_id = $update->message->reply_to_message->photo->file_id;
$block = file_get_contents("admin/block-list.txt");
$nophoto = file_get_contents("photo/nophoto.txt");

$feedback = file_get_contents("admin/feedback.txt");
$video = $update->message->video->file_id;


    
$MessageEntity = $update->MessageEntity->url;
$Group = $update->message->chat->id;
$Group_name = $update->message->chat->title;
$type_chat = $update->message->chat->type;

$truechannel = json_decode(file_get_contents("https://api.telegram.org/bot315910616:AAGnSyBmmmfvvt8IJ2z6rAfy6elB03mSzFA/getChatMember?chat_id=@Samyar001&user_id=".$from_id.""));
$tch = $truechannel->result->status;

$truechannel2 = json_decode(file_get_contents("https://api.telegram.org/bot315910616:AAGnSyBmmmfvvt8IJ2z6rAfy6elB03mSzFA/getChatMember?chat_id=@Samyar001&user_id=".$chat_id.""));
$tch2 = $truechannel2->result->status;
$addfeedgroup = file_get_contents("Group/b".$Group."/add.txt");
$antisticker = file_get_contents("active/antisticker.txt");
$antisticker_text_true = file_get_contents("active/antisticker_text_true.txt");
$antisticker_text = file_get_contents("active/antisticker_text.txt");
	$lockvidio = file_get_contents("Group/b".$Group."/lockvidio.txt");
	$lockaudio = file_get_contents("Group/b".$Group."/lockaudio.txt");
	$lockmusic = file_get_contents("Group/b".$Group."/lockmusic.txt");
	$lockphoto = file_get_contents("Group/b".$Group."/lockphoto.txt");
	$locklink = file_get_contents("Group/b".$Group."/locklink.txt");
	$lockusername = file_get_contents("Group/b".$Group."/lockusername.txt");
	$lockedite = file_get_contents("Group/b".$Group."/lockedite.txt");
	$locksimcart = file_get_contents("Group/b".$Group."/locksimcart.txt");
		$lockcude = file_get_contents("Group/b".$Group."/lockcude.txt");
	$lockloc = file_get_contents("Group/b".$Group."/lockloc.txt");
	$locktel = file_get_contents("Group/b".$Group."/locktel.txt");
	$locksticker = file_get_contents("Group/b".$Group."/locksticker.txt");
	$lockfor = file_get_contents("Group/b".$Group."/lockfor.txt");
	$lockgame = file_get_contents("Group/b".$Group."/lockgame.txt");
		$lockvidio_value = file_get_contents("Group/b".$Group."/lockvidio_value.txt");
		$lockaudio_value = file_get_contents("Group/b".$Group."/lockaudio_value.txt");
	$lockmusic_value = file_get_contents("Group/b".$Group."/lockmusic_value.txt");
	$lockphoto_value = file_get_contents("Group/b".$Group."/lockphoto_value.txt");
	$locklink_value = file_get_contents("Group/b".$Group."/locklink_value.txt");
	$lockusername_value = file_get_contents("Group/b".$Group."/lockusername_value.txt");
	$lockedite_value = file_get_contents("Group/b".$Group."/lockedite_value.txt");
	$locksimcart_value = file_get_contents("Group/b".$Group."/locksimcart_value.txt");
	$lockcude_value = file_get_contents("Group/b".$Group."/lockcude_value.txt");
	$lockloc_value = file_get_contents("Group/b".$Group."/lockloc_value.txt");
	$locktel_value = file_get_contents("Group/b".$Group."/locktel_value.txt");
	$locksticker_value = file_get_contents("Group/b".$Group."/locksticker_value.txt");
	$lockfor_value = file_get_contents("Group/b".$Group."/lockfor_value.txt");
	$lockgame_value = file_get_contents("Group/b".$Group."/lockgame_value.txt");
	$lockgroup = file_get_contents("Group/b".$Group."/lockgroup.txt");
$adminlist = file_get_contents("Group/b".$Group."/AdminList.txt");
$addthegroup = file_get_contents("Group/b".$Group."/add.txt");
	$lockfarsi_value = file_get_contents("Group/b".$Group."/lockfarsi_value.txt");
		$lockfarsi = file_get_contents("Group/b".$Group."/lockfarsi.txt");
	$locken_value = file_get_contents("Group/b".$Group."/locken_value.txt");
		$locken = file_get_contents("Group/b".$Group."/locken.txt");
				$welcome = file_get_contents("Group/b".$Group."/welcome.txt");
$leftgroup = file_get_contents("Group/b".$Group."/leftgroup.txt");
$textwelcome = file_get_contents("Group/b".$Group."/welcometext.txt");
$newtitle = file_get_contents("Group/b".$Group."/newtitle.txt");
$newphoto = file_get_contents("Group/b".$Group."/newphoto.txt");
$silenton = file_get_contents("Group/b".$Group."/silenton.txt"); 
$silent = file_get_contents("Group/b".$Group."/silent.txt"); 
$ban_all = file_get_contents("banbot.txt");
$banall = file_get_contents("admin/ban.txt");
//===============================================================//
// Enable OtherSorce
//===============================================================//

if (strpos($ban_all , "$from_id") !== false) {
	return false;
	}


include "Access.php";
include "Button.php";
include "plugin/asli.php";

//lock bot
include "plugin/lockvidio.php";
include "plugin/lockaudio.php";
include "plugin/lockmusic.php";
include "plugin/lockphoto.php";
include "plugin/locklink.php";
include "plugin/lockusername.php";
include "plugin/lockoprator.php";
include "plugin/locklocation.php";
include "plugin/lockcontact.php";
include "plugin/locksticker.php";
include "plugin/lockforward.php";
include "plugin/lockgame.php";
include "plugin/addandremove.php";
include "plugin/banall.php";
include "plugin/lockgroup.php";
include "plugin/admin.php";
include "plugin/id.php";
include "plugin/lockfarsi.php";
include "plugin/locken.php";
include "plugin/welcome.php";
include "plugin/dateandtime.php";
include "plugin/leftgroup.php";
include "plugin/settings.php";
include "plugin/newtitle.php";
include "plugin/newphoto.php";
include "plugin/silent.php";

//===Dlkha===//

//===============================================================//

if ($type_chat == 'group'){
	$txxt1 = file_get_contents('admin/group.txt');
	$pmembersid1= explode("\n",$txxt1);
    if (!in_array($chatid,$pmembersid1)){
      $aaddd1 = file_get_contents('admin/group.txt');
      $aaddd1 .= $chatid."\n";
	  if ($from_id != $chatid){
		file_put_contents('admin/group.txt',$aaddd1);
	}
    }}
    if ($type_chat == 'supergroup'){
	$txxt1 = file_get_contents('admin/supergroup.txt');
	$pmembersid1= explode("\n",$txxt1);
    if (!in_array($chatid,$pmembersid1)){
      $aaddd1 = file_get_contents('admin/supergroup.txt');
      $aaddd1 .= $chatid."\n";
	  if ($from_id != $chatid){
		file_put_contents('admin/supergroup.txt',$aaddd1);
	}
    }}
$txxt = file_get_contents('admin/user.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($chatid,$pmembersid)){
      $aaddd = file_get_contents('admin/user.txt');
      $aaddd .= $chatid."\n";
	if ($from_id == $chatid){
		file_put_contents('admin/user.txt',$aaddd);
	}
    }
unlink("error_log");
//===============================================================//

?>