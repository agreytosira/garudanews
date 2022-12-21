<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Berita - GarudaNews</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="/css/main.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600;9..144,700&family=Inter:wght@400;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <main>
        <div class="berita">
            <div class="berita-form">
                <h2>Form Tambah Berita</h2>
                <p>
                    <?= form_open('admin/simpandata') ?>
                <div class="input-group">
                    <label for="judul">Judul Berita:</label>
                    <input type="text" name="judul" id="judul" max-length="50" required>
                </div>
                <div class="input-group">
                    <label for="isi">Isi Berita:</label>
                    <textarea name="isi" cols="50" rows="5" required noresi></textarea>
                </div>
                <div class="input-group">
                    <label for="kategori">Kategori:</label>
                    <select name="kategori" id="kategori" required>
                        <option value="Bola">Bola</option>
                        <option value="Travel">Travel</option>
                        <option value="Lifestyle">Lifestyle</option>
                        <option value="Otomotif">Otomotif</option>
                        <option value="Teknologi">Teknologi</option>
                    </select>
                </div>
                <button class="btn-primary" type="submit" onclick="tambah()">Simpan</button>
                <button class="btn-outline-dark fluid" onclick="window.location='../admin/'">
                    Kembali ke Dashboard
                </button>
                </table>
                <?= form_close() ?>
                </p>
            </div>
        </div>
    </main>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    function tambah() {
        Swal.fire(
            'Berhasil!',
            'Data berhasil ditambahkan!',
            'success'
        )
    }
    </script>
</body>

</html>