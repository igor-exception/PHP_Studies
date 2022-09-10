<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=my_db', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

    $query = 'SELECT * FROM users WHERE name LIKE :name';
    $name = '%John%';

    $stmt = $db->prepare($query);
    $stmt->bindParam('name', $name);

    $stmt->execute();

    $ret = $stmt->fetch();

    echo '<pre>';
    var_dump($ret);
    echo '</pre>';
}catch(PDOException $e) {
    throw new PDOException($e->getMessage(), $e->getCode());
}