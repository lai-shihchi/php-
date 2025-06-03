<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        //mysqli_connect() 建立資料庫連結(主機位址、使用者名稱、密碼、資料庫名稱)
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        #新增資料SQL命令：insert into bulletin 表格（標題、內容、類型、時間）
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        // 執行 SQL 命令，執行失敗則顯示新增命令錯誤
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤";
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>
