<?php

  // include跟這個沒有關係的樣子
  require('vendor/autoload.php'); // 載入 composer

  if(isset($_GET['page']) AND !empty($_GET['page'])){
      $page = $_GET['page'];
  }else{
      $page = "main";
  }

  include('myapp/header.php'); // 載入共用的頁首
  switch($page){  // 依照 GET 參數載入共用的內容
      case "main":
        include('myapp/main.php');
      break;
      case "list":
        include('myapp/list.php');
      break;
      case "hero":
        include('myapp/hero.php');
      break;
  }
  include('myapp/footer.php'); // 載入共用的頁尾
?>