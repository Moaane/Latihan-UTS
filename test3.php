<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 mt-5 d-flex justify-content-center">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Umur</label>
                            <input type="number" class="form-control" name="umur">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Tinggi</label>
                            <input type="number" class="form-control" name="tinggi">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Berat Badan</label>
                            <input type="text" class="form-control" name="berat">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mt-3 float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $tinggi = $_POST['tinggi'];
        $berat = $_POST['berat'];
        $tinggiM = $tinggi/100;

        $bmi = $berat / ($tinggiM*$tinggiM);

        echo "Nama : $nama <br>";
        echo "Umur : $umur <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Berat : $berat <br>";
        echo "BMI : $bmi";
    }
    ?>

</body>

</html>