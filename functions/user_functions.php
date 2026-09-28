<?php

function checkLogin($username, $password, $users)
{
    foreach ($users as $user) {
        if ($user["username"] == $username) {
            if (password_verify($password, $user["password"])) {
                return $user;
            }
        }
    }

    return false;
}

function checkMail($mail)
{
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        return true;
    }

    return false;
}

?>
