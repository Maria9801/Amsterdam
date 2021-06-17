<?php
    require_once("db.php");

    $sql = "SELECT * FROM masters";

    $query = $db->prepare($sql);

    $query->execute();
    $services = $query->fetchAll(PDO::FETCH_ASSOC);