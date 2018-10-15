<?php
if (isset($_POST)) {
    require 'lib.php';

    $id = $_POST['id'];
    $hostname = $_POST['hostname'];
    $ip = $_POST['ip'];
    $user_so = $_POST['user_so'];
    $ip = $_POST['ip'];
    $so = $_POST['so'];
    $obser = $_POST['obser'];

    $object = new CRUD();

    $object->Update($hostname, $ip, $user_so, $ip, $so, $obser, $id);
}