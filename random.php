<!DOCTYPE html>
<html lang="id">

<head>
    <title>Randomizer</title>
</head>

<body>
    <?php
    $Nama = [];
    if (isset($_POST['jumlahnama'])) {

        for ($i = 0; $i < intval($_POST['jumlahnama']); $i++) {

            $Nama[$i] = $_POST['nama' . $i];
        }
    }
    for ($a = 0; $a < intval($_POST['jumlahnama']); $a++) {
        $pick = rand($a, intval($_POST['jumlahnama']) - 1);
        $tmp = $Nama[$a];
        $Nama[$a] = strtoupper($Nama[$pick]);
        $Nama[$pick] = strtoupper($tmp);
    }
    echo "<b>Kelompok 1</b> <br>";
    for ($a = 0; $a < intval($_POST['jumlahnama']); $a++) {
        if ($a == floor(intval($_POST['jumlahnama']) / 2)) {
            echo "<b>Kelompok 2</b> <br>";
        }
        echo $Nama[$a] . "<br>";
    }

    date_default_timezone_set('Asia/Jakarta');
    echo 'Pengacakan dilakukan pada ' . date('<b> d-m-Y H:i:s </b> WIB');
    ?>
    </form>
</body>

</html>