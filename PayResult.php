<?php
$ress = filter_input(INPUT_POST, 'xm'); 

if($ress===null){echo "RESULT";}
//$xml = simplexml_load_string($ress);
//$xmlDoc->load("$ress");
//if ((string) $xml->response->data['state'] === '1') {
//    $time = time();
//    $countPay = $pays + $payuser;
//    $db->exec("INSERT INTO userhistory(id,time,count)VALUES('$get','$time','$payuser')");
//    $db->exec("INSERT INTO user(score)VALUES('$countPay')");
//    echo 'Платеж успешно прошел';
//}


