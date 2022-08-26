<?php

class config {
public $db_host = "localhost";
public $db_user = "root";
public $db_pass = "";
public $db_name = "pertemuan2";

public $conn;

function __construct(){
    // create connection
    $conn = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
    $this->conn = $conn;
    // check connection
    if( !$conn ){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }
}
}

?>