<html>
    <head><title>新增使用者</title></head> <!-- HTML 頁面標題為 "新增使用者" -->
    <body>
<?php        
    error_reporting(0); // 取消錯誤或警告，避免錯誤訊息顯示在網頁上
    session_start(); // 啟動 session 功能
    if (!$_SESSION["id"]) {  // 檢查是否已經登入
        echo "請登入帳號"; // 顯示提示訊息"請先登入"
        // 3 秒後自動跳轉到登入頁面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; 
    }
    // 如果已經登入，顯示新增使用者的表單
    else{   
        //表單資料送到 15.user_add.php 處理，使用 POST 方法
        //輸入帳號欄位
        //輸入密碼欄位
        //新增與清除按鈕
        echo " 
            <form action=15.user_add.php method=post> 
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
            </form>
        ";
    }
?>
    </body>
</html>
