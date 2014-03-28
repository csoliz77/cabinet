<?php
	mysql_connect(localhost,'demo','demo');
	mysql_select_db('cabinets') or die( "Unable to select database");

	parse_str($_POST['pages'], $pageOrder);
	foreach ($pageOrder['page'] as $key => $value) {
		mysql_query("UPDATE images SET `order` = '$key' WHERE `id` = '$value'") or die(mysql_error());
	}
?>
