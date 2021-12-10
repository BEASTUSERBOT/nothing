<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Debayan</title>
    <style>


.hr-19 {
  border: none;
  height: 10px;
  background: linear-gradient(-135deg, #fff 5px, transparent 0) 0 5px, linear-gradient(135deg, #fff 5px, #8c8c8c 0) 0 5px;
  background-color: #fff;
  background-position: left bottom;
  background-repeat: repeat-x;
  background-size: 10px 10px;
}
input[type=text] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}
input[type=text]:placeholder {
  color: #cccccc;
}input[type=text]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}
input[type=button], input[type=submit], input[type=reset]  {
  background-color: #FF0040;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}


        </style>
</head>
<body>
    <center>

<?php
error_reporting(0);
function dec($data){
          
    
  $iv=hex2bin('6e0830cd56d69b4f5f6e19cb48848c91');
 
 
                   $key=hex2bin('c4909e66d408f7cda95f253534301ad4cd471928d931591f0390a95a3d4fff29');
                   $decode = openssl_decrypt (base64_decode($data), 'aes-256-cbc',$key, 1,$iv); 
           
             return $decode;
         }


         function enc($data){
          
    
          $iv=hex2bin('6e0830cd56d69b4f5f6e19cb48848c91');
         
         
                           $key=hex2bin('c4909e66d408f7cda95f253534301ad4cd471928d931591f0390a95a3d4fff29');
                           $encode = base64_encode(openssl_encrypt ($data, 'aes-256-cbc',$key, 1,$iv)); 
                   
                     return $encode;
                 }

if(isset($_GET['submit'])){
//	header('refresh: 2');
	$x16=$_GET['id'];
function RandomNumber($length){
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);
}
return $str;
}


function rando($length) {
    $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


$a1 = RandomNumber(2);
$a2 = RandomNumber(2);
$a3 = RandomNumber(2);
$a4 = RandomNumber(2);
$ipz = $a1.'.'.$a2.'.'.$a3.'.'.$a4;

	
$url1='https://myappdomaingroup.site/api/TNxtqEJKcc';

$headers1=['Content-Type: application/json; charset=utf-8',
'apid: tpaaa34156jh31bkdf7k19vdxf',
'appv: 3.9',
'secret: MzI0ZjIzQmRmZHNmNDVmZ3NhZGQ9PQ==',
'signature: AvgFOLpUfsO3kXlrYh+1BojrIXho8gkaSp8EWJ8r38CFEiqPOKCEK8+/XV1gtUDDnJcSJKo68n4CnBmFbOWJvr8hP8bfcIJYYzW7fGjHy0zVnAGE0pzicb/Syr2zSMXbp9M94Ba5oxSlgqfpaGOLYuAuQGsqYrAnW3GZEGbcpwfvr8jTqaaoB8+nVBB7V1VNr6VJcPJdx+lxenCOsvgdpivcaDk06xB16cSbpJ/EggJ+HUhUDrzjNF3KwXFHf+m7lRLyCh9Hi0P8KVWNIniyUnB1/7bMQeTFDH1ylZtsSIdNX839nu8UlfCYy/cicw3SoQED3JXIZIdjcg8GNtR3E/fp4eqFC5PG54DV098cOvHwzQrntPxWNu09pT24AdreqElx8GtfD5kkngKcl0saVKJq4YKIxtrL6Uq3f/s/dTyI3XjsM4A1AhqEE6nN5JORx+Au3rlUy7EedmK88Dy6tLHftT5wtYvMq8rC4ZAaH3zsBkLsY7BFaiQjtmCMkUfKg+96yqPc9pqXyawpYegtXmqTX5rI1RSoZQdVGnddUs+D/Zyy5m8VueaPNYIzaq1y5JSbDa9oFPoqrGvhUN4KULUnytgv/4Lv4ER4+1o9IHZgN36qzapLsm7N4k9G3gSU7N9h1I7nV1bjRGoRcVOVVrNX0uDvUbuojuZzX46jo4E=',
'User-Agent: Instagram 154.0.0.32.123 Android (24/7.0;480dpi;1080x1794;HUAWEI;EVA-L19;HWEVA;hi3650;en_US)',
'Host: myappdomaingroup.site',
'Accept-Encoding: gzip, deflate',
'X-Forwarded-For: '.$ipz.''];



$i9=RandomNumber(9);
$x12=rando(12);


$data='{"MCmBnRTepay":"'.$x16.'","DqaJKmKjaqh":"'.$i9.'","iimrCNzGztA":"'.$x12.'","SyKkePkdxhn":"en_US","THFgzASbqkr":"","JCaNgyLfNGT":460}';
$d=enc($data);





$ch=curl_init();
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_URL,$url1); 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $d); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers1);
$data = curl_exec($ch); 
$err = curl_error($ch); curl_close($ch);


$d=dec($data);

 


$json=json_decode($d , 1);
 $tok=$json['JVeCFZgvuY'];

$t=$json['BlbbfzthzA'];


$headers2=['Content-Type: application/json; charset=utf-8',
'apid: tpaaa34156jh31bkdf7k19vdxf',
'appv: 3.9',
'secret: MzI0ZjIzQmRmZHNmNDVmZ3NhZGQ9PQ==',
'signature: AvgFOLpUfsO3kXlrYh+1BojrIXho8gkaSp8EWJ8r38CFEiqPOKCEK8+/XV1gtUDDnJcSJKo68n4CnBmFbOWJvr8hP8bfcIJYYzW7fGjHy0zVnAGE0pzicb/Syr2zSMXbp9M94Ba5oxSlgqfpaGOLYuAuQGsqYrAnW3GZEGbcpwfvr8jTqaaoB8+nVBB7V1VNr6VJcPJdx+lxenCOsvgdpivcaDk06xB16cSbpJ/EggJ+HUhUDrzjNF3KwXFHf+m7lRLyCh9Hi0P8KVWNIniyUnB1/7bMQeTFDH1ylZtsSIdNX839nu8UlfCYy/cicw3SoQED3JXIZIdjcg8GNtR3E/fp4eqFC5PG54DV098cOvHwzQrntPxWNu09pT24AdreqElx8GtfD5kkngKcl0saVKJq4YKIxtrL6Uq3f/s/dTyI3XjsM4A1AhqEE6nN5JORx+Au3rlUy7EedmK88Dy6tLHftT5wtYvMq8rC4ZAaH3zsBkLsY7BFaiQjtmCMkUfKg+96yqPc9pqXyawpYegtXmqTX5rI1RSoZQdVGnddUs+D/Zyy5m8VueaPNYIzaq1y5JSbDa9oFPoqrGvhUN4KULUnytgv/4Lv4ER4+1o9IHZgN36qzapLsm7N4k9G3gSU7N9h1I7nV1bjRGoRcVOVVrNX0uDvUbuojuZzX46jo4E=',
'Authorization: Bearer '.$tok,
'Accept: application/json, text/json, text/x-json, text/javascript, application/xml, text/xml',
'User-Agent: Instagram 154.0.0.32.123 Android (24/7.0;480dpi;1080x1794;HUAWEI;EVA-L19;HWEVA;hi3650;en_US)',
'Host: myappdomaingroup.site',
'Accept-Encoding: gzip, deflate',
'X-Forwarded-For: '.$ipz.''];

$url1='https://myappdomaingroup.site/api/tasks?t=1';

$ch=curl_init();
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_URL,$url1); 
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers2);
 $data = curl_exec($ch); 
$err = curl_error($ch); curl_close($ch);


$d=dec($data);

$json=json_decode($d , 1);


$Tasksid=$json['Tasks'][0]['TaskId'];
$MediaId=$json['Tasks'][0]['MediaId'];
$Status=1;
$TypeId=$json['Tasks'][0]['TypeId'];
$PhotoUrl=$json['Tasks'][0]['PhotoUrl'];
$InstagramUsername=$json['Tasks'][0]['InstagramUsername'];


$data='{
	"TaskId": "'.$Tasksid.'",
	"Status": '.$Status.',
	"TypeId": "'.$TypeId.'",
	"PhotoUrl": "$",
	"InstagramUsername": "'.$InstagramUsername.'",
	"MediaId": "'.$MediaId.'"
}';
$d=enc($data);


$url1='https://myappdomaingroup.site/api/tasks';

$ch=curl_init();
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_URL,$url1); 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $d); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers2);
 $data = curl_exec($ch); 
$err = curl_error($ch); curl_close($ch);
$d=dec($data);


echo $d;
echo '<meta http-equiv="refresh" content="0">';
	    }
	
	if(!isset($_GET['submit'])){
echo"<form action='' method='get'>

<input type='text' name='id'  class='text' placeholder=' Device-ID' required><br><br>";
echo "<input type='submit' class='submit' name='submit' value='submit'>";
}
?>


</center>
</center>
</body>
</html>
