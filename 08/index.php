<?php
  require 'vendor/autoload.php';

  // 加上 namespace
  use Monolog\Logger;
  use Monolog\Handler\StreamHandler;

  // 直接開始用套件

  $log = new Logger('name');

  $dataBase = new DatabaseAccessObject('localhost','root','XU3M454xu3m454','westland');
  $resultData = $dataBase->execute("SELECT * FROM notice ORDER BY notice_date_start DESC");
  print_r($resultData);
?>