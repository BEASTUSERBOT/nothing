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
echo "<font color='red' size='5'><bold><hr class='hr-19'>UNLIMITED FOLLOWER SCRIPT @ TD<hr class='hr-19'><bold>";
function dec($data){
          
    
  $iv=hex2bin('97208d3d2419cafef6b8a654eb2e4965');
 
 
                   $key=hex2bin('e0a81d023be24b697c881b91f265ca5d64ac120aa21c1bb2ea7056b5025deeeb');
                   $decode = openssl_decrypt (base64_decode($data), 'aes-256-cbc',$key, 1,$iv); 
           
             return $decode;
         }


         function enc($data){
          
    
          $iv=hex2bin('97208d3d2419cafef6b8a654eb2e4965');
         
         
                           $key=hex2bin('e0a81d023be24b697c881b91f265ca5d64ac120aa21c1bb2ea7056b5025deeeb');
                           $encode = base64_encode(openssl_encrypt ($data, 'aes-256-cbc',$key, 1,$iv)); 
                   
                     return $encode;
                 }

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

                    


if(isset($_GET['submit'])){
//	header('refresh: 2');
	$id=$_GET['id'];

$un=$_GET['id'];

$x16=$_GET['x16'];


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
'signature: fzg4IaWUjXGcQgdHu/QVBLHJlWrzptxkuHL9ZTBI1djlzhd4ZsDXhzlvkKrpZgbUt5corByfBcFxB/bp1PCGF9s8hBN11316qLJVjw3ToDv80BIRnzacREXiQFmrKE+UxPRttM7vM/5zGn56XmWVNinfwmMe87dMwx0SEAqVAm2dbVAqRWYizi3sO7j5wJhfFZzYvJlrJ4rcIcl2wrsZFFFbajwmJikp0uCu2vlRzH/MQFhmNsM+/5WZtRdjS6xwdXRIrVXFA2kNjSXLPPmuQZMfDJ3NLn+tYQWR+4ooteKcLOgZ9kOuso8BiTFxlB5UKz3Y40lFt8mjJYVby6I0uE7IaPXA0Z/4z4L9083PWb3yrD/eUeTQ/dcE14keXQjVyxaJQDLHf4ExCP3t8CvyKyyVcE5t9miJhljefYT61Sx6ZDVeNkD2yveQMH0hB8MJvgMHGV1PEg/6maDStPWRB8z6dtWGHIwRT1eEdGOgfDjMLfJMLvnrRzHwiLVr+DnGOeorccROQEYm3J4iDQf8o5C/LJ4eY+eN5tVJlH3EsAmUOCWjthUYzP98rVbBPwJNNpLpzTQXsK3EZtz+/Szu8KLktZAReSY09YFRa9pEVhB5GQB22yovsvYRFZgnfeQqkmf5P6usLvo/HDcV4JhR1uVzBXa5S5Ag8hhdIZBk1p4=',
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
'signature: fzg4IaWUjXGcQgdHu/QVBLHJlWrzptxkuHL9ZTBI1djlzhd4ZsDXhzlvkKrpZgbUt5corByfBcFxB/bp1PCGF9s8hBN11316qLJVjw3ToDv80BIRnzacREXiQFmrKE+UxPRttM7vM/5zGn56XmWVNinfwmMe87dMwx0SEAqVAm2dbVAqRWYizi3sO7j5wJhfFZzYvJlrJ4rcIcl2wrsZFFFbajwmJikp0uCu2vlRzH/MQFhmNsM+/5WZtRdjS6xwdXRIrVXFA2kNjSXLPPmuQZMfDJ3NLn+tYQWR+4ooteKcLOgZ9kOuso8BiTFxlB5UKz3Y40lFt8mjJYVby6I0uE7IaPXA0Z/4z4L9083PWb3yrD/eUeTQ/dcE14keXQjVyxaJQDLHf4ExCP3t8CvyKyyVcE5t9miJhljefYT61Sx6ZDVeNkD2yveQMH0hB8MJvgMHGV1PEg/6maDStPWRB8z6dtWGHIwRT1eEdGOgfDjMLfJMLvnrRzHwiLVr+DnGOeorccROQEYm3J4iDQf8o5C/LJ4eY+eN5tVJlH3EsAmUOCWjthUYzP98rVbBPwJNNpLpzTQXsK3EZtz+/Szu8KLktZAReSY09YFRa9pEVhB5GQB22yovsvYRFZgnfeQqkmf5P6usLvo/HDcV4JhR1uVzBXa5S5Ag8hhdIZBk1p4=',
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
$z=$d;
$json=json_decode($d , 1);
$dd=$json['Coins'];
if($dd<80){
    $d="WAIT WE ARE WORKING ON IT|| KEEP THE BROWSER OPEN";

   
}
if($dd>=80){
 
$url1='https://myappdomaingroup.site/api/Work';
    $data='{"TypeId":"1","Count":11,"MediaId":"'.$id.'","InstagramUsername":"'.$un.'","PhotoUrl":"https:\/\/instagram.fccu3-1.fna.fbcdn.net\/v\/t51.2885-19\/s150x150\/247951313_930015617942075_1213263224700742013_n.jpg?_nc_ht=instagram.fccu3-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=qVy9J9jIsFAAX-nwTb3&edm=ABfd0MgBAAAA&ccb=7-4&oh=4745dfb9f2f1b629bbe29f4c7ec66294&oe=61B91087&_nc_sid=7bff83","StartCount":-1,"Uri":"eyJjb21tZW50c0NvdW50IjowLCJpZCI6MCwiaW1hZ2UiOiJodHRwczovL2luc3RhZ3JhbS5mY2N1My0xLmZuYS5mYmNkbi5uZXQvdi90NTEuMjg4NS0xOS9zMTUweDE1MC8yNDc5NTEzMTNfOTMwMDE1NjE3OTQyMDc1XzEyMTMyNjMyMjQ3MDA3NDIwMTNfbi5qcGc\/X25jX2h0XHUwMDNkaW5zdGFncmFtLmZjY3UzLTEuZm5hLmZiY2RuLm5ldFx1MDAyNl9uY19jYXRcdTAwM2QxMTFcdTAwMjZfbmNfb2hjXHUwMDNkcVZ5OUo5aklzRkFBWC1ud1RiM1x1MDAyNmVkbVx1MDAzZEFCZmQwTWdCQUFBQVx1MDAyNmNjYlx1MDAzZDctNFx1MDAyNm9oXHUwMDNkNDc0NWRmYjlmMmYxYjYyOWJiZTI5ZjRjN2VjNjYyOTRcdTAwMjZvZVx1MDAzZDYxQjkxMDg3XHUwMDI2X25jX3NpZFx1MDAzZDdiZmY4MyIsImltYWdlSGQiOiIiLCJpbnN0YWdyYW1Vc2VybmFtZSI6InNob21lZGViYXlhbiIsImxpa2VzQ291bnQiOjAsIm1lZGlhSWQiOjM0NDIxODcyNDksInBrIjozNDQyMTg3MjQ5LCJzaG9ydGNvZGUiOiIifQ==","CurrencyId":0}';
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
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers2);
     $data = curl_exec($ch); 
    $err = curl_error($ch); curl_close($ch);
    $d=dec($data);

$d="SUCCESSFULLY SENT 10 FOLLOWERS !!!! CHECK YOUR PROFILE...";

}
echo "<div class='success'><hr class='style5'>$z<hr class='style5'><br></div>";
echo "<div class='success'><hr class='style5'>$d<hr class='style5'><br></div>";

echo '<meta http-equiv="refresh" content="0">';

}
	
	if(!isset($_GET['submit'])){
        $x16=rando(16);
echo"<form action='' method='get'>

<input type='text' name='un'  class='text' placeholder='USER-NANE' required><br><br>
<input type='text' name='id'  class='text' placeholder='USER-ID' required><br><br>
<input type='hidden' name='x16'  value=$x16><br><br>
";
echo "<input type='submit' class='submit' name='submit' value='submit'>";
}
?>


</center>
</center>
</body>
</html>
