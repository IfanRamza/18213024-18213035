<?php
if (isset($_GET["action"]) && isset($_GET["id"]) && isset($_GET["action"]) == "get_info") {
	$info = file_get_contents('http://localhost/RestAPI.php?action=get_info&id=' . $_GET["id"]);
	echo $info;
	echo '<br />';
	echo '<br />';
	$info = json_decode($info,true);
}
?>

<table>
<tr> 
	<td> ID </td>
	<td> <?php echo ': ' . $info["id"] ?> </td>
</tr>
<tr> 
	<td> Name </td>
	<td> <?php echo ': ' . $info["Nama"] ?> </td>
</tr>
<tr> 
	<td> L/P </td>
	<td> <?php echo ': ' . $info["L/P"] ?> </td>
</tr>
</table>
