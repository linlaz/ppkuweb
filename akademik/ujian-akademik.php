<?php get_header(); ?>
<div class="container my-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/academic">Akademik</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ujian</li>
        </ol>
    </nav>
    <h1>Jadwal Ujian Mahasiswa PPKU</h1>
    <div class="d-flex justify-content-end">
        <a href="/academic/rules" class="btn btn-outline-primary rounded-pill">Unduh Jadwal</a>
    </div>
    <div class="pdf my-5">
        <object data="<?php echo get_template_directory_uri(); ?>/assets/file/coba.pdf" type="application/pdf" width="100%" height="500px">
            <p>Unable to display PDF file. <a href="<?php echo get_template_directory_uri(); ?>/assets/file/coba.pdf">Download</a> instead.</p>
        </object>
    </div>
</div>
<?php get_footer(); ?>