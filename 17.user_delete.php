<?php
    error_reporting(0); //取消錯誤或警告，避免錯誤訊息顯示在網頁上
    session_start(); // 啟動 session 功能
    if (!$_SESSION["id"]) { // 檢查是否已經登入
        echo "請登入帳號"; // 顯示提示訊息 "請先登入"
        // 3 秒後跳轉回登入頁面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        //mysqli_connect() 建立資料庫連結(主機位址、使用者名稱、密碼、資料庫名稱)
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        // 新增 SQL 刪除指令，從 user 表中刪除 id 等於 $_GET["id"] 的資料
        $sql="delete from user where id='{$_GET["id"]}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){ 
            echo "使用者刪除錯誤"; // 如果執行 SQL 語法失敗，顯示刪除錯誤訊息
            echo "使用者刪除成功"; // 如果執行 SQL 語法成功，顯示刪除成功訊息
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
