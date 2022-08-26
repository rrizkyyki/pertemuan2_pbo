<?php

class Pegawai {
    function query($conn, $query){
        $data = mysqli_query($conn, $query);
        // $data = mysqli_fetch_assoc($data);
        return $data;
    }
}

?>