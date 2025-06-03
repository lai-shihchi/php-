<html>
    <head><title>修改使用者</title></head> <!-- 設定 HTML 頁面的標題為"修改使用者" -->
    <body>
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
        //mysqli_query() 從資料庫查詢 id 的使用者資料（從網址 GET 取得 id）
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        $row=mysqli_fetch_array($result);

        // 顯示使用者修改表單，帳號為不可修改，只能改密碼
        echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            // 顯示帳號，但不讓修改
            帳號：{$row['id']}<br> 
            // 編輯修改密碼
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>
