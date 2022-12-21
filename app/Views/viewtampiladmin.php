<?php
$session = session();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - GarudaNews</title>
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
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    </style>
</head>

<body>
    <nav class="admin-nav">
        <div class="container">
            <h2>Dashboard Admin</h2>
            <p>Selamat datang, <strong><?= $session->get('name') ?></strong></p>
            <div class="admin-button">
                <div class="admin-button-left">
                    <button class="btn-primary" onclick="window.location='../admin/formtambah'">
                        Tambah Data
                    </button>
                    <a class="btn-primary" href="/" target="_blank">
                        Lihat Halaman Utama
                    </a>
                </div>
                <div class="admin-button-right">
                    <button class="btn-outline-dark" onclick="window.location='/admin/logout'">Log out</button>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <section class="admin">
            <div class="container">
                <table class="fixed-header" border=" 1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Berita</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $nomor = 0;
                        foreach (array_reverse($tampildata) as $row) :
                            $nomor++;
                        ?>
                        <tr>
                            <td><?= $nomor; ?></td>
                            <td><strong><?= $row->judul ?></strong></td>
                            <td><?= $row->kategori ?></td>
                            <td>
                                <button class="btn-outline-dark-small"
                                    onclick="window.location='../admin/formedit/<?= $row->idberita ?>'">
                                    Edit
                                </button>
                                <button class="btn-outline-dark-small"
                                    onclick="hapus('<?= $row->idberita ?>')">Hapus</button>

                            </td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    function hapus(nim) {
        Swal.fire({
            title: 'Yakih hapus data berita?',
            text: "Data yang sudah dihapus tidak dapat dikembalikan",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    position: 'center',
                    title: 'Terhapus!',
                    text: 'Data berhasil dihapus.',
                    icon: 'success'
                })
                window.location.href = ('../admin/hapus/') + nim;
            }
        })
        // pesan = confirm('Yakin hapus data mahasiswa?');
        // if (pesan) {} else return false;
    }
    </script>
</body>

</html>