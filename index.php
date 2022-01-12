<?
$message=md5(rand(0,9999));
$files = scandir('./messages');
$num_files = count($files)-2;
$fileName="$message.txt";
$file= fopen("./messages/$fileName","x");
fwrite($file,$message);
fclose($file);
echo 'teste';

?>