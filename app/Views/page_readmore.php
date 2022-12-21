<main>
    <section class="home">
        <div class="container home-container">
            <div class="home-left">
                <div class="home-list">
                    <h3 class="home-title"><?= $berita->judul;?></h3>
                    <span class="home-category"><?= $berita->kategori?></span>
                    <br><br>
                    <p class="home-description-full"><?= $berita->isi;?></p>
                </div>
            </div>
            <div class="home-right">
                <div class="home-sidebar">
                    <h5 class="home-sidetitle">Tentang GarudaNews</h5>
                    <p><strong>GarudaNews</strong> adalah sebuah website berita sederhana yang dibangun oleh <a
                            href="https://github.com/agreytosira">Agrey
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