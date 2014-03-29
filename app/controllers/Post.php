<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 3/29/14
 * Time: 2:58 PM
 */

class Post extends Controller {


    public function postore (){

parse_str($_POST['pages'], $pageOrder);


foreach ($pageOrder['page'] as $key => $value) {
mysql_query("UPDATE images SET `order` = '$key' WHERE `id` = '$value'") or die(mysql_error());
}




}

}