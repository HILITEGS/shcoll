<?
$text = urldecode( $_GET['text'] ); ;
file_put_contents('chatr.txt', $text, FILE_APPEND);
?>
