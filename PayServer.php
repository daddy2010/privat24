
<?php
require 'DataBase.php';
require 'autodb.php';
$pay = filter_input(INPUT_POST, 'pay');
$b = new Base();
$get = $b->getId();
if(isset($pay)){
$payuser = filter_input(INPUT_POST, 'payuser', FILTER_SANITIZE_SPECIAL_CHARS);
//$payuser = $_REQUEST["p"];
$pays = $db->query("SELECT score FROM user WHERE id=$get ");
$passwordPay = "Win7sooG3X4j133uZjZ7712D69YtfCUS";
$data = '<oper>cmt</oper>'.'<wait>90</wait>'.'<test>0</test>'.'<payment id="1234567">'.'<prop name="b_card_or_acc" value="4627081718568608" />'.'<prop name="amt" value="'.$payuser.'" />'.'<prop name="ccy" value="UAH" />'.'<prop name="details" value="test%20merch%20not%20active" />'.'</payment>';
$sign = sha1(md5($data.$passwordPay));
$xml = '<?xml version="1.0" encoding="UTF-8"?>'.'<request version="1.0">'.'<merchant>'.'<id>122527</id>'.'<signature>'.$sign.'</signature>'.'</merchant>'.'<data>'.'<oper>cmt</oper>'.'<wait>90</wait>'.'<test>0</test>'.'<payment id="1234567">'.'<prop name="b_card_or_acc" value="4627081718568608" />'.'<prop name="amt" value="'.$payuser.'" />'.'<prop name="ccy" value="UAH" />'.'<prop name="details" value="test%20merch%20not%20active" />'.'</payment>'.'</data>'.'</request>';
//$xmll=simplexml_load_string($xml);
echo $xml;


//$ch = curl_init(" https://api.privatbank.ua/p24api/pay_pb");
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml"));
//    curl_setopt($ch, CURLOPT_HEADER, 0);
//    curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
//    curl_setopt($ch, CURLOPT_POST, 1);
//    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//$ress = curl_exec($ch);
//var_dump($ress);
//curl_close($ch);
//echo $ress;
}

