<?php

    error_reporting(0); // 取消錯誤或警告
    session_start(); // 啟動 session 功能
    if (!$_SESSION["id"]) {
        echo "請登入帳號"; // 顯示提示訊息"請先登入
        // 3 秒後自動跳轉到登入頁面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        //mysqli_connect() 建立資料庫連結(主機位址、使用者名稱、密碼、資料庫名稱)
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        // 執行 SQL 更新命令，將指定帳號的密碼更新為新密碼
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){
            echo "修改錯誤"; 
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }else{
            echo "修改成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }
    }

?>
