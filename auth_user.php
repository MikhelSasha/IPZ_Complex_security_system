<meta charset="UTF-8">
<?php
session_start();
if (isset($_POST['email'])) { $login = $_POST['email']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (empty($login) or empty($password)) 
    {
    exit ("Ви ввели не всю інформацію, будь ласка поверніться назад і заповніть всі поля!");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
    include ("bd.php");

    $result = mysql_query("SELECT * FROM users WHERE email='$login'",$db); 
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
    exit ("Вибачте, введений Вами User Name або пароль невірний.");
    }
    else {
    if ($myrow['password']==$password) {
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    echo "Ви успішно зайшли на сайт! <a href='index.php'>Головна сторінка</a>";
    }
 else   {
        exit ("Вибачте, введений Вами User Name або пароль невірний.");
        }
    }
?>