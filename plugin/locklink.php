<?php
if($text == "/lock link" ){
    if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false ){
		savee("b".$Group."/locklink.txt","فعال");
			SendMessage($chatid,"قفل فعال شد","html","true");
	}else{
		SendMessage($chatid,"شما ادمین نیستید","html","true");
}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif($text == '/unlock link' ){
     if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/locklink.txt","غیرفعال");
			SendMessage($chatid,"قفل غیرفعال شد","html","true");
	}else{
		SendMessage($chatid,"شما ادمین نیستید","html","true");
}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif($text == "/lock link warn" ){
     if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
    	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
	savee("b".$Group."/locklink_value.txt","warn");
		SendMessage($chatid,"هشدار فعال شد","html","true");
	}else{
		SendMessage($chatid,"شما ادمین نیستید","html","true");
}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}

elseif($text == "/lock link pm" ){
    if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
    	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
	savee("b".$Group."/locklink_value.txt","pm");
		SendMessage($chatid,"  حذف پیام فعال شد","html","true");
	}else{
		SendMessage($chatid,"شما ادمین نیستید","html","true");
}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif($text == "/lock link kick" ){
    if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
        	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
	savee("b".$Group."/locklink_value.txt","kick");
		SendMessage($chatid,"حذف فعال شد","html","true");
	}else{
		SendMessage($chatid,"شما ادمین نیستید","html","true"); 
}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}

elseif($locklink == "فعال" ){
    $caption = $update->message->caption;
    	savee("b".$Group."/caplink.txt","$caption");
    	$link = "Group/b".$Group."/caplink.txt";
    	$caplink = "$link";
        $down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
if($update->message->entities[0]->type == "url" or  $update->message->entities[1]->type == "url" or  $update->message->entities[2]->type == "url" or $update->message->entities[3]->type == "url"){

	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
 	
	}else{
	    	if($locklink_value == "warn"){
		SendMessage($chatid,"ارسال لینک  ممنوع است","html","true");
}
		    	elseif($locklink_value == "kick"){
		    	    $bana = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/kickChatMember?parse_mode=HTML&chat_id=".$Group."&user_id=".$fadmin.""));
 		SendMessage($chatid,"کاربر به علت ارسال لینک حذف شد","html","true");
}    
		    	elseif($locklink_value == "pm"){
		    	    $bana = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/deleteMessage?parse_mode=HTML&chat_id=".$Group."&message_id=".$message_id_feed.""));
 	
}    
	}
	}
  
}
?>