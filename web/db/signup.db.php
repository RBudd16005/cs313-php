<?php
if (isset($_POST['signup-submit'])) {
    require 'dbh.db.php';
    $username = $_POST['uid'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $passwordconfirm = $_POST['pwd-repeat'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordconfirm)) {
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&email=".$email);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username))
    {
        header("Location: ../signup.php?error=invalidemailuid";
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidemail&uid=".$username);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invaliduid&email=".$email);
        exit();
    }
    else if ($password !== $passwordconfirm) {
        header("Location: ../signup.php?error=passwrodcheck&uid=".$username."&email=".$email);
        exit();
    }
    else {
        $sql = "SELECT username FROM user_profile WHERE username=?";
        $stmt = mysq
    }
}