<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	function get_info_by_id($id) {
		$info = array();
		mysql_connect('localhost', 'root', '');
		mysql_select_db('progif');
		$result = mysql_query('SELECT * FROM tis WHERE id = ' . $id);
		$info = mysql_fetch_array ($result, MYSQL_ASSOC); 
		return $info; 
	}

	if (isset($_GET["action"])) {
		switch ($_GET["action"]) {
			case "get_info";
				if (isset($_GET["id"])) 
					$value = get_info_by_id($_GET["id"]);
				else
					$value = "ERROR";
				break;
		}
	}
	exit(json_encode($value));
?>
