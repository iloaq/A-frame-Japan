<?
// Скрипт проверки

// Соединямся с БД
$link=mysqli_connect("app", "root", "", "testtable");

if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    $query = mysqli_query($link, "SELECT *,INET_NTOA(user_ip) AS user_ip FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);

    if ($userdata[music] == "BTS") {
		header("Location: sound-BTS.html"); exit();
	} else { 
	if ($userdata[music] == "CLASSICAL") {
		header("Location: sound-CLASSICAL.html"); exit();
	} else { 
	if ($userdata[music] == "ROCK") {
		header("Location: sound-ROCK.html"); exit();
	} else {
		header("Location: login.php");
	}
	}
	}
}
?>