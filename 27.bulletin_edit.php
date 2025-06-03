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
        // 執行 SQL 更新命令，將指定 bid 的佈告欄資料更新成表單送來的資料
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            echo "修改錯誤"; //如果 SQL 執行失敗，顯示錯誤訊息
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; //3 秒後跳回佈告列表
        }else{
            echo "修改成功，三秒鐘後回到佈告欄列表"; //成功更新資料
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; //3 秒後跳回佈告列表
        }
    }

?>
