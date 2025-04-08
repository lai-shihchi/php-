<?php
    //讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    session_start();
    /*設定一個變數 $_SESSION['變數'] = 值 給他一個值 =1
    判斷Session變數 "counter" 是否存在*/
    if (!isset($_SESSION["counter"]))
        //如果不存在，將 "counter" 設定為 1
        $_SESSION["counter"]=1;
    else
        //如果存在，將 "counter" 的值加 1
        $_SESSION["counter"]++;

    //顯示出目前 "counter" 的值
    echo "counter=".$_SESSION["counter"];
    //顯示可以重置 counter
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
