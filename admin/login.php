<?php
if (!empty($_POST)) {

    session_start();

    if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'] === true) {
        header("Location: dashboard.php");
    }

    require('sql_connect.php');


    $nick = trim($_POST['nick']);
    $password = hash('whirlpool', trim($_POST['password']));

    if($nick == "" || $password == "") {
        die("Nick lub Hasło są puste!");
    }

    $sql = "SELECT password FROM users WHERE name = ?";

    if ($statement = $mysqli->prepare($sql)) {
        if ($statement->bind_param('s', $nick)) {
            $statement->execute();
            $resualt = $statement->get_result();
            $row = $resualt->fetch_row();
            $user_password = $row[0];
            if ($user_password = $password){
            session_start();
            $_SESSION['isLogged'] = true;
            header("Location:dashboard.php");

        } else {
            die("Niepoprawne hasło!");
        }
        $mysqli->close();
    }
} else {
    die("Zapytanie niepoprawne!");
}

} else {


    die('Nic nie Przesłano');
}