<?
$text = urldecode( $_GET['text'] ); 
file_put_contents('testing.txt', $text, FILE_APPEND);
?>
