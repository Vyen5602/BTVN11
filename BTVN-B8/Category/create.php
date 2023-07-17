<?php
      require_once 'pdo.php';
      $categoryConnection = new CategoryConnection();
      $data = ['name' => $_POST['name']];
      $categoryConnection->createNewData($data);
    header("Location: http://localhost/BTVN-B8/Category/index.php");
?>