<html>
<head>
 <title>Form Input Daftar Riwayat Hidup</title>
</head>
<body>
    <center>
        <form action="<?= base_url('Daftar/cetak'); ?>"
        method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Daftar Riwayat Hidup
                    </th>
                </tr>

                <tr>
                    <td colspan="3">
                <hr>
                    </td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <th>:</th>
                    <td>
                        <input type="number" name="NIM" id="NIM" placeholder="Required">
                        <div class="col-sm-6 col-danger"> <?= form_error('NIM'); ?> </div>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="Nama" id="Nama" placeholder="Required">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal lahir</th>
                    <td>:</td>
                    <td>
                            <input type="date" name="Tanggallahir" id="Tanggallahir">
                    </td>
                </tr>
                <th>Tempat lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="Tempatlahir" id="Tempatlahir" placeholder="Required">
                    </td>
                </tr>
                <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="Alamat" id="Alamat" placeholder="Required">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                    <input type="submit" value="Submit">
                </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>