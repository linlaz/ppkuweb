<?php get_header(); ?>
<div class="container my-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/academic">Akademik</a></li>
            <li class="breadcrumb-item active" aria-current="page">Beasiswa</li>
        </ol>
    </nav>
    <h1>Beasiswa</h1>
    <div class="article-beasiswa px-5">
        <div class="card mb-3 w-full">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/akademik-menu.png" class="img-fluid rounded-start" alt="ajkanld">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Beasiswa Seabank 2023 by Seabank</h5>
                        <p class="date text-muted">17 Januari 2023</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <div class="row justify-content-between">
                            <div class="col">
                                <a href="/academic/rules" class="btn btn-secondary rounded-pill">Kegiatan Asrama</a>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <a href="/academic/rules" class="btn btn-primary rounded-pill">See More</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>