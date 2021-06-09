<?php
    require_once("db.php");

    $sql = "SELECT * FROM services";

    $query = $db->prepare($sql);

    $query->execute();
    $services = $query->fetchAll(PDO::FETCH_ASSOC);
