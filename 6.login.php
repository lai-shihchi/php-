<?php
   #mysqli_connect() 建立資料庫連結（ip、使用者名稱、密碼、資料庫名稱）
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 查詢資料庫從 user 資料表中選取資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=falsw;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==true)
     echo "登入成功";
  else
     echo "登入失敗";
?>
