<?php 
    #輸出在 2.login.html 中輸入的帳號（來自 name="id" 的欄位）
    echo $_POST["id"];
    #換行標籤 帳號與密碼分開顯示在不同的行
    echo "<br>";
    #輸出在 2.login.html 中輸入的密碼（來自 name="pwd" 的欄位）
    echo $_POST["pwd"];
?>
