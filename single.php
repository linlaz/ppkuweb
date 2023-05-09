<?php get_header(); ?>

<div class="container my-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Artikel</li>
        </ol>
    </nav>
    <h1>Friday Fun Night</h1>
    <div class="row">
        <div class="article col col-9">
            <div class="thumbnail">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail-article.png" class="card-img-top" alt="...">
            </div>
            <div class="date mt-4">
                <p>17 Januari 2023</p>
            </div>
            <div class="content-article">
                <p>
                    The Dormitory Club adalah sebuah komunitas yang berada di bawah naungan Asrama PKU IPB yang berfokus kepada pengembangan skill anggota sesuai dengan kemampuan dan bidang yang ditekuni.
                    Wirausaha Muda adalah salah satunya, sebuah kelompok yang berisikan mahasiswa yang ingin belajar dan terus mengembangkan diri di bidang bisnis dan wirausaha. Wirausaha Muda Asrama PKU
                    IPB angkatan 58 mengadakan sebuah kegiatan internalisasi dengan nama kegiatannya yaitu Friday Fun Night (FFN), merupakan kegiatan internal Wirausaha Muda 58 yang bertujuan untuk
                    mengevaluasi program kerja wirausaha muda 58 agar mengetahui yang perlu ditingkatkan dan yang perlu diapresiasi demi kemajuan lini. Di samping itu, kegiatan ini bertujuan untuk mendekatkan
                    diri antar sesama anggota Wirausaha Muda. Dengan spesifik, kegiatan ini mengupas mengenai kesan dan pesan rapat general, saran mengenai kegiatan rapat general, kesan dan pesan dari kegiatan
                    sharing WM.
                </p>
            </div>
        </div>
        <div class="list col col-3">
            <h2>Terkait</h2>
            <!-- <div class="row">
                <div class="col col-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail-article.png" class="" alt="...">
                </div>
            </div> -->
        </div>
    </div>
</div>

<?php get_footer(); ?>