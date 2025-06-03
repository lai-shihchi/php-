<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        // mysqli_connect() 建立資料庫連結(主機位址、使用者名稱、密碼、資料庫名稱)
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        // 新增 SQL 刪除指令，從 bulletin 表中 GET 參數來刪除 bid 對應資料
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤"; //刪除失敗
        }else{
            echo "佈告刪除成功"; //刪除成功
        }
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; //無論成功或失敗，3 秒後跳轉回佈告列表頁
    }
?>
