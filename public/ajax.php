<?php

    include_once('../app/config/ajaxconn.php');


	parse_str($_POST['pages'], $pageOrder);
	foreach ($pageOrder['page'] as $key => $value) {
		mysql_query("UPDATE images SET `order` = '$key' WHERE `id` = '$value'") or die(mysql_error());
	}
?>
