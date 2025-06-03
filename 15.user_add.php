<?php

error_reporting(0); // 取消錯誤或警告，避免錯誤訊息顯示在網頁上
session_start();  // 啟動 session 功能
if (!$_SESSION["id"]) {  // 檢查是否已經登入
    echo "請登入帳號"; // 顯示提示訊息 "請先登入"
    // 3 秒後跳轉回登入頁面
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{    

   #mysqli_connect() 建立資料庫連結(主機位址、使用者名稱、密碼、資料庫名稱)
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   
   #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
   #echo $sql;
   // 如果執行 SQL 語法失敗，顯示錯誤訊息
   if (!mysqli_query($conn, $sql)) {
     echo "新增命令錯誤";
   }
   // 如果成功，顯示成功訊息，並在 3 秒後跳轉回使用者列表頁面（18.user.php）
   else{
     echo "新增使用者成功，三秒鐘後回到網頁";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
   }
}
?>
