<?php
/**
 * Created by PhpStorm.
 * User: caio_
 * Date: 20/05/2019
 * Time: 04:06
 */

$json_file = file_get_contents(
    "https://randomuser.me/api");
$json_str = json_decode($json_file, true);

echo $json_file;