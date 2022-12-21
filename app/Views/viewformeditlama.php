    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Edit Berita</title>
    </head>

    <body>
        <h2>Form Edit Berita</h2>
        <p>
            <button onclick="window.location='../../admin/'">
                Kembali
            </button>
        </p>
        <p>
            <?= form_open('admin/updatedata') ?>
        <table>
            <tr>
                <td>ID Berita:</td>
                <td>
                    <input type=" text" name="id" id="id" max-length="50" value="<?= $id ?>" readonly required>
                </td>
            </tr>
            <tr>
                <td>Judul Berita:</td>
                <td>
                    <input type=" text" name="judul" id="judul" max-length="50" value="<?= $judul ?>" required>
                </td>
            </tr>
            <tr>
                <td>Isi Berita:</td>
                <td>
                    <textarea name="isi" cols="50" rows="5" required><?= $isi ?></textarea>
                </td>
            </tr>
            <tr>
                <td>Kategori Berita:</td>
                <td>
                    <input type=" text" name="kategori" id="kategori" max-length="15" value="<?= $kategori ?>" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" onclick="ubah()">Update Data</button>
                </td>
            </tr>
        </table>
        <?= form_close() ?>
        </p>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
        function ubah() {
            Swal.fire(
                'Berhasil!',
                'Data berhasil diubah!',
                'success'
            )
        }
        </script>
    </body>

    </html>