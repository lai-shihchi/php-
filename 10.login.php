<?php
   //mysqli_connect() 建立資料庫連結 (ip、使用者名稱、密碼、資料庫名稱)
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   //mysqli_query() 查詢資料庫從 user 資料表中選取資料
   $result=mysqli_query($conn, "select * from user");
   
   //#登入狀態設為 false
   $login=FALSE;
   /*mysqli_fetch(查詢結果)
   mysqli_fetch_array() 從查詢出來的資料一筆一筆比對檢查*/
   while ($row=mysqli_fetch_array($result)) {
    //檢查輸入的帳號和密碼是否與資料庫中的資料相同
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       //如果相同 $login 為 TRUE，表示歡迎登入
        $login=TRUE;
     }
   } 
   // 判斷是否成功登入
   if ($login==TRUE) {
    //使用 session，儲存使用者登入資訊，來決定使用者是否登入成功
    session_start();
    //輸入的帳號存到 session 中，表示該使用者已經登入
    $_SESSION["id"]=$_POST["id"];
    //如果正確 顯示歡迎登入
    echo "歡迎登入";
    // 設置 3 秒後自動連結到 "11.bulletin.php" 的頁面
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }

  else{
    //如果有誤 顯示帳號/密碼 錯誤
    echo "帳號/密碼 錯誤";
    // 設置 3 秒後自動跳轉到 "2.bulletin.php" 的頁面
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  }
?>
