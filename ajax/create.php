<?php
if (isset($_POST['hostname']) && isset($_POST['ip']) && isset($_POST['user_so']) && isset($_POST['pass']) && isset($_POST['so']) && isset($_POST['obser'])) {
    require("lib.php");

    $hostname = $_POST['hostname'];
    $ip = $_POST['ip'];
    $user_so = $_POST['user_so'];
    $ip = $_POST['ip'];
    $so = $_POST['so'];
    $obser = $_POST['obser'];

    $object = new CRUD();

    $object->Create($hostname, $ip, $user_so, $ip, $so, $obser);
}
?>