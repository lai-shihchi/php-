<?php
    #error_reporting(0)  取消錯誤或警告
    error_reporting(0);
    #建立資料庫連結（ip、帳號、密碼、資料庫名稱）
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    #查詢資料庫從 bulletin 資料表中選取資料
    $result=mysqli_query($conn, "select * from bulletin");
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>";
        echo $row["bid"];
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];
        echo "</td><td>";
        echo $row["content"]; 
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>";
    }
    echo "</table>"
?>
