<?php

function isAdmin($email){
    require_once 'model/usrModel.php';
    $usr = new usrModel();
    return $usr->isAdmin($email);
}