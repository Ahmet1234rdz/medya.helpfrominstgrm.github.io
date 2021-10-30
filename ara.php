<?php

error_reporting(E_ALL);
require("load.php");

$username=$_GET["username"];

$url="https://smihub.com/v/$username";
$ig=str_get_html(file_get_contents($url));


 $qenzy=$ig->find("div[class='user__img']",0)->style;
 $pp=substr($qenzy,27,-4);

 $erh4n=$ig->find("a[class='btn btn-light m-1']",0);
  $followers=substr($erh4n,0,-13);

   $followers2=$ig->find("li[class='list__item']",1)->plaintext;


  $f_count=$ig->find("a[class='btn btn-light m-1']",1);

  $follower_count=substr($f_count,0,-13);
   $name=$ig->find("div[class='user__title']",0)->childNodes(0)->plaintext;



 $l_p_d=$ig->find("img[class='content__img']",0)->alt;



 $l_p=$ig->find("img[class='content__img']",0)->src;
 //echo $ig->find("div[class='user__img']",0);








/*
 echo "name : ".$name;

 echo "<br>Takipçi Sayısı : ".$followers;

 echo "<br>Takip Ettiği : ".$f_count;

 echo "<br>PP URL : ".$pp;

 echo "<br>Son Post URL : ".$sonPost;

 echo "<br>Son Post Desc : ".$l_p_d;

 */
?>












