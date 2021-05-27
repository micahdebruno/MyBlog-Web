<?php

const DB_HOST = "localhost";
const DB_NAME = "myblog_db";
const DB_USER = "root";
const DB_PASS = "123456";

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$con){
    echo "ERROR!" , mysqli_connect_errno();
}
