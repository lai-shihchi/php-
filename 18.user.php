<html>
    <head><title>使用者管理</title></head>  <!-- HTML 頁面標題為 "新增使用者" -->
    <body>
    <?php
        error_reporting(0); // 取消錯誤或警告，
        session_start(); // 啟動 session 功能
        if (!$_SESSION["id"]) { 
            echo "請登入帳號"; // 顯示提示訊息"請先登入
            // 3 秒後自動跳轉到登入頁面
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        }
        else{   
            // 顯示標題以及功能選單（新增使用者、回到佈告欄列表)
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                // 建立表格
                <table border=1>  
                <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            //mysqli_connect() 建立資料庫連結(主機位址、使用者名稱、密碼、資料庫名稱)
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
            //mysqli_query() 從資料庫查詢資料  取得所有使用者
            $result=mysqli_query($conn, "select * from user");
            while ($row=mysqli_fetch_array($result)){
                 // 顯示修改與刪除連結(使用id作為回傳的值)
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>
