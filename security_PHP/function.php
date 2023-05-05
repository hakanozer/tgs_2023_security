<?php 
include('db.php');
include('util.php');


if ( isset($_POST["user_login"]) ) {
    $user_login = $_POST["user_login"];
    $email = htmlentities($_POST["email"]);
    $password = htmlentities($_POST["password"]);
    $email_status = isEmail($email) == true ? "True": "False";

    $sql = "select * from users where email=? and password=?";
    $query = $db->prepare($sql);
    $query->execute([ $email, $password ]);
    $user = $query->fetch();

    if ( $user ) {
        session_start();
        $_SESSION["user"] = $email;
        // Coocike Control
        if ( isset($_POST["remember"]) ) {
            $encEmail = encrypt($email, "key_123");
            setcookie("userCookie", $encEmail, time()+180);
        }
        header("Location: manager.php");
        exit();
    }else {
        header("Location: index.php?loginFail");
        exit();
    }
}


// todo add
if ( isset($_POST["todo_add"]) ) {
    $title = htmlentities($_POST["title"]);
    $detail = htmlentities($_POST["detail"]);
    $email = $_SESSION["user"];
    $sql = "insert into todo values(null, ?, ?, ?)";
    $query = $db->prepare($sql);
    $query->execute([ $title, $detail, $email ]);
    if ( $query ) {
        header("Location: manager.php");
        exit();
    }else {
        header("Location: manager.php?todoSaveFail");
        exit();
    }

}

// todo delete
if ( isset($_GET["deleteTodo"]) && !empty($_GET["deleteTodo"]) ) {
    $tid = $_GET["deleteTodo"];
    $sql = "delete from todo where tid = ? and email = ? limit 1";
    $query = $db->prepare($sql);
    $email = $_SESSION["user"];
    $query->execute([ $tid, $email ]);
    if ( $query ) {
        header("Location: manager.php");
        exit();
    }else {
        header("Location: manager.php?todoDeleteFail");
        exit();
    }
}

function allTodo() {
    include('db.php');
    $email = $_SESSION["user"];
    $query = $db->query("SELECT * FROM todo where email = '".$email."'", PDO::FETCH_ASSOC);
    return $query;
}




?>