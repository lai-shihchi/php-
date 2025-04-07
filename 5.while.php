<?php
   #mysqli_connect() 建立資料庫連結（ip、使用者名稱、密碼、資料庫名稱）
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 查詢資料庫從 user 資料表中選取資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch(查詢結果)
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   while ($row=mysqli_fetch_array($result)) #逐筆抓出查詢結果的資料
   {
      #顯示出每一筆的 id 與 pwd 欄位
      echo $row["id"]." ".$row["pwd"]."<br>";
   } 
?>
