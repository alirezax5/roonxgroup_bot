<?php
if($text == '/add' or $text == "/add@Samyar88975bot" ){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	    	if ($type_chat == 'group' | $type_chat == 'supergroup'){
	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2){
		if($addfeedgroup == 'yes'){
					$first = $message->from->first_name;
		SendMessage($chatid,"این گروه از قبل اضافه شده است! برای حذف روی /removegroup بزنید","html","true");

		}
		else{

		mkdir("Group/b".$Group);
				mkdir("day/b".$Group);
			savee("b".$Group."/add.txt","yes");		
		savee("b".$Group."/id.txt","$chatid");
copy("Text/lockaudio.txt","Group/b".$Group."/lockaudio.txt") ;
copy("Text/lockmusic.txt","Group/b".$Group."/lockmusic.txt") ;

copy("Text/lockphoto.txt","Group/b".$Group."/lockphoto.txt") ;

copy("Text/lockvidio.txt","Group/b".$Group."/lockvidio.txt") ;

copy("Text/locklink.txt","Group/b".$Group."/locklink.txt") ;

copy("Text/lockusername.txt","Group/b".$Group."/lockusername.txt") ;

copy("Text/lockedite.txt","Group/b".$Group."/lockedite.txt") ;

copy("Text/locksimcart.txt","Group/b".$Group."/locksimcart.txt") ;

copy("Text/lockcude.txt","Group/b".$Group."/lockcude.txt") ;

copy("Text/lockloc.txt","Group/b".$Group."/lockloc.txt") ;
copy("Text/locktel.txt","Group/b".$Group."/locktel.txt") ;
copy("Text/locksticker.txt","Group/b".$Group."/locksticker.txt") ;
copy("Text/lockfor.txt","Group/b".$Group."/lockfor.txt") ;
copy("Text/lockgame.txt","Group/b".$Group."/lockgame.txt") ;

copy("Text/lockaudio_value.txt","Group/b".$Group."/lockaudio_value.txt") ;
copy("Text/lockmusic_value.txt","Group/b".$Group."/lockmusic_value.txt") ;

copy("Text/lockphoto_value.txt","Group/b".$Group."/lockphoto_value.txt") ;

copy("Text/lockvidio_value.txt","Group/b".$Group."/lockvidio_value.txt") ;

copy("Text/locklink_value.txt","Group/b".$Group."/locklink_value.txt") ;

copy("Text/lockusername_value.txt","Group/b".$Group."/lockusername_value.txt") ;

copy("Text/lockedite_value.txt","Group/b".$Group."/lockedite_value.txt") ;

copy("Text/locksimcart_value.txt","Group/b".$Group."/locksimcart_value.txt") ;

copy("Text/lockcude_value.txt","Group/b".$Group."/lockcude_value.txt") ;

copy("Text/lockloc_value.txt","Group/b".$Group."/lockloc_value.txt") ;
copy("Text/locktel_value.txt","Group/b".$Group."/locktel_value.txt") ;
copy("Text/locksticker_value.txt","Group/b".$Group."/locksticker_value.txt") ;
copy("Text/lockfor_value.txt","Group/b".$Group."/lockfor_value.txt") ;
copy("Text/lockgame_value.txt","Group/b".$Group."/lockgame_value.txt") ;
copy("Text/lockgroup.txt","Group/b".$Group."/lockgroup.txt") ;
copy("Text/lockfarsi.txt","Group/b".$Group."/lockfarsi.txt") ;
copy("Text/lockfarsi_value.txt","Group/b".$Group."/lockfarsi_value.txt") ;
copy("Text/locken.txt","Group/b".$Group."/locken.txt") ;
copy("Text/locken_value.txt","Group/b".$Group."/locken_value.txt") ;
copy("Text/welcome.txt","Group/b".$Group."/welcome.txt") ;
copy("Text/leftgroup.txt","Group/b".$Group."/leftgroup.txt") ;
copy("Text/textleftgroup.txt","Group/b".$Group."/textleftgroup.txt") ;
copy("Text/welcometext.txt","Group/b".$Group."/welcometext.txt") ;
copy("Text/newtitle.txt","Group/b".$Group."/newtitle.txt") ;
copy("Text/newtitletext.txt","Group/b".$Group."/newtitletext.txt") ;
copy("Text/newphototext.txt","Group/b".$Group."/newphototext.txt") ;
copy("Text/newphoto.txt","Group/b".$Group."/newphoto.txt") ;
copy("Text/silenton.txt","Group/b".$Group."/silenton.txt") ;

savee("b".$Group."/addid.txt","$from_id");	
	$txxt = file_get_contents('user/'.$from_id."/grouplist.txt");
    $pmembersid= explode("\n",$txxt);
         $aaddd = file_get_contents('user/'.$from_id."/grouplist.txt");
      $aaddd .= $Group."\n";

		file_put_contents('user/'.$from_id."/grouplist.txt",$aaddd);

	

	$first = $message->from->first_name;
SendMessage($chatid,"گروه اضافه شد
نام گروه : $Group_name
اد کننده :$first","html","true");
	}
	}else{
		SendMessage($chatid,"شما ادمین نیستید","html","true");

}}}

elseif($text == '/lock vidio pm' ){
$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($down->result->status == creator or $down->result->status == administrator){
	savee("b".$Group."/lockvidio_value.txt","pm");
		$first = $message->from->first_name;
		SendMessage($chatid,"  حذف پیام فعال شد","html","true");

}else{
		SendMessage($chatid,"شما ادمین نیستید","html","true");

}}
elseif($text == "/removegroup"  or $text ==  "/removegroup@Samyar88975bot"){
    	    	if ($type_chat == 'group' | $type_chat == 'supergroup'){

	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id.""));
	if($down->result->status == creator or $down->result->status == administrator){
		unlink("Group/b".$Group."/add.txt");
		unlink("Group/b".$Group."/lockaudio.txt");
		unlink("Group/b".$Group."/lockmusic.txt");
		unlink("Group/b".$Group."/lockphoto.txt");
		unlink("Group/b".$Group."/lockvidio.txt");
		unlink("Group/b".$Group."/locklink.txt");
		unlink("Group/b".$Group."/lockusername.txt");
		unlink("Group/b".$Group."/lockedite.txt");
		unlink("Group/b".$Group."/locksimcart.txt");
		unlink("Group/b".$Group."/lockcude.txt");
		unlink("Group/b".$Group."/lockloc.txt");
		unlink("Group/b".$Group."/locktel.txt");
		unlink("Group/b".$Group."/locksticker.txt");
		unlink("Group/b".$Group."/lockfor.txt");
		unlink("Group/b".$Group."/lockgame.txt");
				unlink("Group/b".$Group."/lockaudio_value.txt");
		unlink("Group/b".$Group."/lockmusic_value.txt");
		unlink("Group/b".$Group."/lockphoto_value.txt");
		unlink("Group/b".$Group."/lockvidio_value.txt");
		unlink("Group/b".$Group."/locklink_value.txt");
		unlink("Group/b".$Group."/lockusername_value.txt");
		unlink("Group/b".$Group."/lockedite_value.txt");
		unlink("Group/b".$Group."/locksimcart_value.txt");
		unlink("Group/b".$Group."/lockcude_value.txt");
		unlink("Group/b".$Group."/lockloc_value.txt");
		unlink("Group/b".$Group."/locktel_value.txt");
		unlink("Group/b".$Group."/locksticker_value.txt");
		unlink("Group/b".$Group."/lockfor_value.txt");
		unlink("Group/b".$Group."/lockgame_value.txt");
				unlink("Group/b".$Group."/welcome.txt");
		unlink("Group/b".$Group."/addid.txt");
		unlink("Group/b".$Group."/id.txt");
		unlink("Group/b".$Group."/name.txt");
				unlink("Group/b".$Group."/caplink.txt");

				unlink("Group/b".$Group."/lockfarsi_value.txt");
				unlink("Group/b".$Group."/lockfarsi.txt");
	unlink("Group/b".$Group."/locken_value.txt");
				unlink("Group/b".$Group."/locken.txt");
					unlink("Group/b".$Group."/AdminList.txt");
						unlink("Group/b".$Group."/leftgroup.txt");
							unlink("Group/b".$Group."/lockgroup.txt");
														unlink("Group/b".$Group."/welcometext.txt");
					unlink("Group/b".$Group."/textleftgroup.txt");
		unlink("Group/b".$Group."/newtitle.txt");
		unlink("Group/b".$Group."/newtitletext.txt");
unlink("Group/b".$Group."/newphoto.txt");
		unlink("Group/b".$Group."/newphototext.txt");
		unlink("Group/b".$Group."/silent.txt");
		unlink("Group/b".$Group."/silenton.txt");

			rmdir("Group/b".$Group."/$from_id");
		rmdir("Group/b".$Group."");
	SendMessage($chatid,"حذف شد","html","true");
	}else{
	SendMessage($chatid,"شما ادمین نیستید","html","true");
}}}

?>