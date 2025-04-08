<?php
    //error_reporting(0)  取消錯誤或警告
    error_reporting(0);
    //建立資料庫連結（ip、帳號、密碼、資料庫名稱）
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    //查詢資料庫從 bulletin 資料表中選取資料
    $result=mysqli_query($conn, "select * from bulletin");
    //建立表格標題列和標題名稱
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    //使用 while 迴圈 列印出查詢結果的每一筆資料
    while ($row=mysqli_fetch_array($result)){
        //一筆一筆抓出資料並建立表格
        // 顯示佈告編號
        echo "<tr><td>";
        echo $row["bid"];
         // 顯示佈告類別
        echo "</td><td>";
        echo $row["type"];
        // 顯示佈告標題
        echo "</td><td>"; 
        echo $row["title"];
        // 顯示佈告內容
        echo "</td><td>";
        echo $row["content"]; 
        // 顯示發佈時間
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>";
    }
    echo "</table>"
?>
