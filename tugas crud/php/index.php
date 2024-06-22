<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
   <form action="" method="get">
<input type="text" name="nama" placeholder="nama lengkap" id="">
<input type="text" name="umur" placeholder="umur" id="">
<button>kirim data</button>
   </form>
    <?php
    
    $nama = $_GET['nama'];
    $umur = $_GET['umur'];
   
    if($umur >= 18){
        $status = 'dewasa';
    }elseif ($umur <= 18){
        $status = 'anak';
    }

    echo "nama saya adalah $nama dan umur saya adalah $umur dan berstatus $status";
    ?>
</body>
</html>