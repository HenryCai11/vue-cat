<?php
require_once 'AipNlp.php';


function filter_mark($text){
	if(trim($text)=='')return '';
	$text=preg_replace("/[[:punct:]\s]/",' ',$text);
	$text=urlencode($text);
	$text=preg_replace("/(%7E|%60|%21|%40|%23|%24|%25|%5E|%26|%27|%2A|%28|%29|%2B|%7C|%5C|%3D|\-|_|%5B|%5D|%7D|%7B|%3B|%22|%3A|%3F|%3E|%3C|%2C|\.|%2F|%A3%BF|%A1%B7|%A1%B6|%A1%A2|%A1%A3|%A3%AC|%7D|%A1%B0|%A3%BA|%A3%BB|%A1%AE|%A1%AF|%A1%B1|%A3%FC|%A3%BD|%A1%AA|%A3%A9|%A3%A8|%A1%AD|%A3%A4|%A1%A4|%A3%A1|%E3%80%82|%EF%BC%81|%EF%BC%8C|%EF%BC%9B|%EF%BC%9F|%EF%BC%9A|%E3%80%81|%E2%80%A6%E2%80%A6|%E2%80%9D|%E2%80%9C|%E2%80%98|%E2%80%99|%EF%BD%9E|%EF%BC%8E|%EF%BC%88)+/",' ',$text);
	$text=urldecode($text);
	return trim($text);
}

// 你的 APPID AK SK
const APP_ID = '11352570';
const API_KEY = 'qIHlg4OA3vif3EkySH0hek3O';
const SECRET_KEY = 'D7ecpWXkBttKcpa8BFy84nZ7lnqxtOEg';

$client = new AipNlp(APP_ID, API_KEY, SECRET_KEY);

$text = $_GET['wordList'];
$text = filter_mark($text);

// 调用词法分析
$output = $client->lexer($text);
echo json_encode($output);
/*echo "<br />";
var_dump($output["text"]);
echo "<br />";
var_dump($output["items"][0]["item"]);
echo "<br />";
echo "第一个词是：".$output["items"][0]["item"];
echo "<br />";
echo "第一个词的词性是：".$output["items"][0]["ne"];
echo "<br />";
echo "第二个词是：".$output["items"][1]["item"];
echo "<br />";
echo "第二个词的词性是：".$output["items"][1]["pos"];
*/
/*$k = 0;
while (isset($output["items"][$k]["item"])){
	//$str = $output["items"][$k]["item"];
	if ($str == "。" || $str == ",")
		continue;
	echo $output["items"][$k]["item"]."<br/>";
	$k++;
}*/
?>