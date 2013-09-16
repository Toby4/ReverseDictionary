<?php
$query = $_REQUEST["q"];
$words = explode(" ", $query);
echo var_dump($words);
?>