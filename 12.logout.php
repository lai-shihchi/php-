<?php
    // 讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    session_start();
    // 刪除 "id" 這個 session 變數，達到登出效果
    unset($_SESSION["id"]);
    // 顯示登出成功
    echo "登出成功";
    // 設置 3 秒後自動連結到 "2.login.html" 的頁面
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";

?>
