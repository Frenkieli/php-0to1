<?php
  $order_receive = array();
  $order_receive['1221000'] = 100; 
  // 1221000 是訂單編號, 100 是黑貓貨到付款代收金額;
  $order_receive['1221001'] = 0;
  $order_receive['1221002'] = 300;
  $order_receive['1221003'] = 200;
  $order_receive['1221004'] = 250;
  $order_receive['1221005'] = 150;
  $order_receive['1221006'] = 300;
  $order_receive['1221008'] = 0;
  $order_receive['1130199'] = 200; 

  $order_not_exist = array();  
// 這個陣列我們預計拿來裝黑貓收款列表中不存在的訂單編號
  $order_zero = array();       
  // 這個陣列我預計拿來裝黑貓代收款，對方不取貨不付款的單號
  $total = 0;
  foreach( $order_receive as $key => $val){
    // $key 隨著迴圈跑起來就會是 1221001, 1221008, 1130199
    $month = substr($key, 0, 2); // 取得從第 0 個字開始，往後抓 2 位 所以是 12
    $day   = substr($key, 2, 2); // 取得從第 2 個字開始，往後抓 2 位 所以是 21
    $count = substr($key, 4, 3); // 取得從第 4 個字開始，往後抓 3 位 所以是 001
    
    if($month == '11')continue; // 從頭開始，不執行下方的工作
    $total += $val;
    // ...略過針對 12 月的事情...
  }
  // 跑完這個迴圈我們把結果印出來
  echo '總金額是：' , $total;
?>