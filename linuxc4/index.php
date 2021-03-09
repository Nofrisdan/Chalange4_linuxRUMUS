<?php
ini_set("display_errors", 0);
//property
$r = $_POST['r'];
$d = $_POST['d'];
$phi = $_POST['phi'];



//volume
if (isset($_POST['volume'])) {

    //cek apakah r dan d sama di isi
    if (!empty($r) && !empty($d)) {
        echo "<script>alert('Jari-jari dan Diamter tidak bisa di isi bersamaan, sesuaian dengan Soal');document.location.href = 'index2.php'</script>";
    }

    if (empty($phi)) {
        echo "<script>alert('Phi harap di isi terlebih dahulu');document.location.href = 'index2.php'</script>";
    }

    if (!empty($d)) {
        $r = $d / 2;
    }

    //volume 4/3 phi r2

    if ($phi == '3.14') {
        $ops1 = 4 * 3.14 * pow($r, 3);
        $volume = $ops1 / 3;
        $notif = 'on';
    } else {
        $ops1 = 22 * pow($r, 3) / 7;
        $volume = 4 * $ops1 / 3;
        $notif = 'on';
    }
}


//luas
if (isset($_POST['luas'])) {
    //cek apakah r dan d sama di isi
    if (!empty($r) && !empty($d)) {
        echo "<script>alert('Jari-jari dan Diamter tidak bisa di isi bersamaan, sesuaian dengan Soal');document.location.href = 'index2.php'</script>";
    }

    if (empty($phi)) {
        echo "<script>alert('Phi harap di isi terlebih dahulu');document.location.href = 'index2.php'</script>";
    }

    if (!empty($d)) {
        $r = $d / 2;
    }

    //volume 4/3 phi r2

    if ($phi == '3.14') {
        $luas = 4 * 3.14 * pow($r, 2);
        $notif = 'on';
    } else {
        $ops1 = 22 * pow($r, 2) / 7;
        $luas = 4 * $ops1;
        $notif = 'on';
    }
}





?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- My css -->
    <link rel="stylesheet" href="style2.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">

    <title>Linux | C4</title>
</head>

<body>
    <div class="bg"></div>

    <div class="judul">
        <h1>Rumus<br> Luas & Volume Bola</h1>
    </div>

    <!-- Button 1 -->
    <div class="position-absolute top-0 start-0 button1">
        <div class="container mt-5 ">
            <div class="row">
                <div class="col">

                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#button1">
                        Volume Bola
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- button2 -->

    <div class="position-absolute top-0 start-0 button2">
        <div class="container mt-5 ">
            <div class="row">
                <div class="col">

                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#button2">
                        Luas Permukaan Bola
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- notifikasi -->
    <?php if ($notif == 'on') : ?>
        <div class="position-absolute top-0 start-0 notif">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-primary" role="alert">

                            Diketahui :
                            <br>
                            <?php if (isset($volume)) : ?>
                                <h2>Volume Bola</h2>
                                <ul>
                                    <li>Jari- Jari Bola = <?= $r; ?> Cm</li>
                                    <li>Phi = <?= $phi; ?></li>
                                    <li>Volume Bola = <?= $volume; ?> Cm3</li>
                                </ul>
                            <?php endif; ?>

                            <?php if (isset($luas)) : ?>
                                <h2>Luas Permukaan Bola</h2>
                                <ul>
                                    <li>Jari- Jari Bola = <?= $r; ?> Cm</li>
                                    <li>Phi = <?= $phi; ?></li>
                                    <li>Luas Permukaan Bola = <?= $luas; ?> Cm2</li>
                                </ul>

                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>

    <!-- modal button1 -->
    <div class="modal fade" id="button1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Volume Bola</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- form -->
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Maukkan Jari-jari</label>
                            <input type="number" class="form-control" step="any" id="exampleInputEmail1" name="r" autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="diameter" class="form-label">Masukkan Diameter</label>
                            <input type="number" id="diameter" class="form-control" step="any" id="exampleInputEmail1" name="d" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="select" class="form-label">Pilih Phi</label>
                            <select name="phi" class="form-select" aria-label="Default select example" id="select">
                                <option selected value="">Pilih..</option>
                                <option value="3.14">3.14</option>
                                <option value="22/7">22/7</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer" role="group">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="volume" class="btn btn-primary">Hitung</button>

                    </form>

                    <!-- endform -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal button2 -->
    <div class="modal fade" id="button2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Luas Permukaan Bola</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- form -->
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Maukkan Jari-jari</label>
                            <input type="number" class="form-control" step="any" id="exampleInputEmail1" name="r" autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="diameter" class="form-label">Masukkan Diameter</label>
                            <input type="number" id="diameter" class="form-control" step="any" id="exampleInputEmail1" name="d" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="select" class="form-label">Pilih Phi</label>
                            <select name="phi" class="form-select" aria-label="Default select example" id="select">
                                <option selected value="">Pilih..</option>
                                <option value="3.14">3.14</option>
                                <option value="22/7">22/7</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="luas" class="btn btn-primary">Hitung</button>
                </div>

                </form>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>