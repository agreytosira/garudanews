<main>
    <section class="home">
        <div class="container home-container">
            <div class="home-left">
                <p class="home-label">Menampilkan berita dengan kategori <strong>Bola</strong></p>
                <?php foreach ($berita as $rows):?>
                <div class="home-list">
                    <h3 class="home-title"><a href="/readmore/<?=$rows->idberita;?>"><?=$rows->judul;?></a></h3>
                    <span class="home-category"><?=$rows->kategori?></span>
                    <p class="home-description"><?=$rows->isi;?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="home-right">
                <div class="home-sidebar">
                    <h5 class="home-sidetitle">Tentang GarudaNews</h5>
                    <p><strong>GarudaNews</strong> adalah sebuah website berita sederhana yang dibangun oleh <a
                            href="#">Agrey
                            Tosira</a>
                        menggunakan CodeIgniter v4 untuk memenuhi nilai ujian tengah semester 3.</p>
                </div>
                <div class="home-sidebar">
                    <h5 class="home-sidetitle">Kategori Berita</h5>
                    <ul class="category">
                        <li><a href="/category/bola">Bola</a></li>
                        <li><a href="/category/travel">Travel</a></li>
                        <li><a href="/category/lifestyle">Lifestyle</a></li>
                        <li><a href="/category/otomotif">Otomotif</a></li>
                        <li><a href="/category/teknologi">Teknologi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>