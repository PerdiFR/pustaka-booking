<html>
<head>

    <title>Tampil Data Toko Sepatu</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                   Data Transaksi Toko Sepatu
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Nama Pembeli</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>No. HP</td>
                <td>:</td>
                <td>
                    <?= $nohp; ?>
                </td>
            </tr>
            <tr>
                <td>Sepatu</td>
                <td>:</td>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>
                    <?= $harga; ?>
                </td><a href="modelsepatu.php">
            </tr>
            <tr>
                <td>Size</td>
                <td>:</td>
                <td>
                    <?= $size; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('sepatu'); 
?>">Kembali</a>
            </td>

            </tr>
        </table>
    </center>
</body>
</html>