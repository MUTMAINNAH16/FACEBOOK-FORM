<?php

include "koneksi.php";


$email      = $_POST['email'];
$pasword   = $_POST['pasword'];
$konfirmasi = $_POST['konfirmasi'];


if ($pasword != $konfirmasi) :
    header('location:newpass.php?email='.$email.'&error=pass');
else :
    $cek =  mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbl_users 
                                                    WHERE email='$email'"));
if ($cek > 0){
    $pass = md5($_POST['pasword']);
    $insert= mysqli_query($koneksi, "UPDATE tbl_users SET pasword='$pasword' WHERE email='$email'");

    echo'Ubah pasword berhasil';

}else {
    
    header('location:newpass.php?email='.$email);
}
        
endif;

?>