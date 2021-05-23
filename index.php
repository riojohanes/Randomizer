<!DOCTYPE html>

<html lang="id">

<head>
    <title>
        Randomizer
    </title>
</head>

<body>
    <form action="#" method="POST" name="jmlh_nama">
        Masukkan jumlah nama yang akan dirandom:
        <input type="text" name="jumlahnama" value=""><br>
        <input type="submit" name="input" value="input">
    </form>
</body>

</html>

<?php
if (isset($_POST['jumlahnama'])) {
?>
    <form action="random.php" method="POST" name="randomize">
        <?php
        $jmlh_nama = $_POST['jumlahnama'];
        for ($i = 0; $i < $jmlh_nama; $i++) {
        ?>
            <br>
            Nama ke-<?php echo $i + 1; ?><br>
            <input type="text" name="nama<?php echo $i?>">
        <?php
        }
        ?>
        <br>
        <input type="hidden" name="jumlahnama" value="<?php echo $_POST['jumlahnama']?>">
        <input type="submit" name="input" value="Randomize">
    </form>
<?php
}
?>