<?php
    //讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    session_start();
    
    /* 刪除Session變數
    unset($_SESSION['變數名稱'])
    session_unset() 或者session_destroy()也可以達成同樣功能 */

    //清除 session為 "counter" 的變數
    unset($_SESSION["counter"]);
    //顯示 "counter" 已重置成功
    echo "counter重置成功....";
    //設置 3 秒後自動連結到 "8.counter.php" 的頁面
    echo "<meta http-equiv=REFRESH content='3; url=8.counter.php'>";

?>
