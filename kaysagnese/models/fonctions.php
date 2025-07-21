<?php 


function setmessage($content, $type = "success"){
    $_SESSION["msg"] = [
        "content" => $content,
        "type" => $type
    ];
}

function estAdmin(){
    if (isset($_SESSION["user"]) && $_SESSION["user"]->role == "admin") {
        return true;
    }
    return false;
}

function estClient(){
    if (isset($_SESSION["user"]) && $_SESSION["user"]->role == "client") {
        return true;
    }
    return false;
}

function estConnecte(){
    if (isset($_SESSION["user"])) {
        return true;
    }
    return false;
}