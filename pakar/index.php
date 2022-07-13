<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    body{
        background-color: grey;
    }
</style>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <br><br><br>
    <div class="container">
        <h1 class="text-center">Diagnosa Penyakit Diabetes Melitus</h1>
        <br>
        <form action="diagnosis.php" method="post">
        <table class="table table-dark table-hover table-bordered ">
        <tr class="table-active">
            <td>No</td>
            <td>Gejala</td>
            <td>Pilihan</td>
        </tr>
        <tr>
            <td>01</td>
            <td>Buang air kecil terus menerus</td>
            <td>
                <input type="checkbox" name="cek[]" id="">
            </td>
        </tr>
        <tr>
            <td>02</td>
            <td>Merasa haus yang berlebihan</td>
            <td>
                <input type="checkbox" name="cek[]" id="">
            </td>
        </tr>
        <tr>
            <td>03</td>
            <td>Nafsu makan bertambah banyak</td>
            <td>
                <input type="checkbox" name="cek[]" id="">
            </td>
        </tr>
        <tr>
            <td>04</td>
            <td>Merasa Lemas </td>
            <td>
                <input type="checkbox" name="cek[]" id="">
            </td>
        </tr>
        <tr>
            <td>05</td>
            <td>Gatal gatal di seluruh tubuh</td>
            <td>
                <input type="checkbox" name="cek[]" id="">
            </td>
        </tr>
        <tr>
            <td>06</td>
            <td>Mudah merasa lelah</td>
            <td>
                <input type="checkbox" name="cek[]" id="">
            </td>
        </tr>
        <tr>
            <td>07</td>
            <td>Kulit terasa panas atau seperti tertusuk jarum</td>
            <td>
                <input type="checkbox" name="cek[]" id="">
            </td>
        </tr>
        <tr>
            <td>08</td>
            <td>Gigi mudah goyang dan mudah lepas</td>
            <td>
                <input type="checkbox" name="cek[]" id="">
            </td>
        </tr>
        <tr>
            <td>09</td>
            <td>Kemampuan seksual menurun</td>
            <td>
                <input type="checkbox" name="cek[]" id="">
            </td>
        </tr>
        <tr>
            <td>10</td>
            <td>Pandangan mulai kabur</td>
            <td>
                <input type="checkbox" name="cek[]" id="">
            </td>
        </tr>
        </table>
        <br>
        <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
    <?php
        include 'footer.php';
    ?>
</body>

</html>