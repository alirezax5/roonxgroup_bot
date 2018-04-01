<?php

if($update->message->migrate_from_chat_id){

		save($from_id."/a.txt","$update->message->migrate_from_chat_id");


SendMessage(chatid,"اطلاعات گروه شما به سوپر گروه انتقال یافت
        ای دی قدیمی $afterid
        ای دی جدید :$newid","html","true");
  }
?>