<?php
if($text == "/time" ){
    $replyy = $update->message->reply_to_message->from->id;
$time = file_get_contents("http://api.roonx.com/date-time?roonx=time");
$date = file_get_contents("http://api.roonx.com/date-time?roonx=date");
	
	$blocklist = file_get_contents('Group/b".$Group."/AdminList.txt');

$blocklist = str_replace("a","$replyy",$blocklist);

savee("b".$Group."/AdminList.txt",$blocklist);


SendMessage($chatid,"ساعت : $time
		تاریخ : $date","html","true");

}

?>