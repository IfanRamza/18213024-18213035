<?php
	$opt=array('location' => 'http://localhost/SOAP-Server.php', 'uri'=>'http://localhost/');
	$api = new SoapClient (NULL, $opt);
	$a=1;
	$b=2;
	echo $api -> helloword(); 
?>
	<br>
<?php	
	echo $api -> addition($a,$b);
?>
	<br>
<?php
	echo $api -> getData();
?>
