<?php
    //error_reporting(0)  取消錯誤或警告
    error_reporting(0);
    //讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    session_start();

    // 檢查是否已經登入，如果沒有登入，提示使用者需要先登入
    if (!$_SESSION["id"]) {
        echo "請先登入"; //顯示請先登入
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 設置 3 秒後自動連結到 "2.login.html" 的頁面
    }
    else{
        // 如果已登入，並顯示 歡迎登入 和 使用者的名稱
        echo "歡迎登入, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        //mysqli_connect() 建立資料庫連結 (ip、使用者名稱、密碼、資料庫名稱)
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        //查詢資料庫從 bulletin 資料表中選取資料
        $result=mysqli_query($conn, "select * from bulletin");
        //建立表格標題列和標題名稱
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        //使用 while 迴圈 列印出查詢結果的每一筆資料
        while ($row=mysqli_fetch_array($result)){
            // 顯示每一筆佈告欄資料，提供修改和刪除的連結
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            // 顯示佈告編號
            echo $row["bid"];
            echo "</td><td>";
            // 顯示佈告類別
            echo $row["type"];
            echo "</td><td>"; 
            // 顯示佈告標題
            echo $row["title"];
            echo "</td><td>";
            // 顯示佈告內容
            echo $row["content"]; 
            echo "</td><td>";
            // 顯示發佈時間
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>";
    }
