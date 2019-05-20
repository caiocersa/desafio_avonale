<?php
/**
 * Created by PhpStorm.
 * User: caio_
 * Date: 19/05/2019
 * Time: 20:40
 */

$json_file = file_get_contents(
    "https://itunes.apple.com/lookup?id=882945378,1055074478&entity=song");
$json_str = json_decode($json_file, true);

echo $json_file;
