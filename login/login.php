<?php

include "koneksi.php";

$email=$_POST['username'];
$password = md5 ($_POST['password']);

$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tbl_users
where email='$email' AND pasword ='$password'"));
if ($cek > 0){
    echo 'login berhasil';
} else {
    // header('location:index.php?eeror=1');
    echo 'login gagal dengan email' .' $email '. $password; 
}

?>