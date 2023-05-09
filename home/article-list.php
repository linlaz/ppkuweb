<?php get_header(); ?>
<div class="container my-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Artikel</li>
        </ol>
    </nav>
    <h1>Recent</h1>
    <div class="vertical-card">
        <div class="row justify-content-center p-0 px-md-3 gap-6">
            <div class="col col-3">
                <div class="card" style="width: 22.5rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/article.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Friday Fun Night</h5>
                        <p class="date">17 Januari 2023</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <div class="d-flex justify-content-end">
                            <a href="/single" class="btn btn-primary rounded-pill">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-3">
                <div class="card" style="width: 22.5rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/article.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Friday Fun Night</h5>
                        <p class="date">17 Januari 2023</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <div class="d-flex justify-content-end">
                            <a href="/single" class="btn btn-primary rounded-pill">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-3">
                <div class="card" style="width: 22.5rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/article.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Friday Fun Night</h5>
                        <p class="date">17 Januari 2023</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <div class="d-flex justify-content-end">
                            <a href="/single" class="btn btn-primary rounded-pill">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menus my-5">
        <div class="menu col-12">
            <nav>
                <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                    <button class="nav-link active fw-bold" id="all" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all" aria-selected="true">Semua Artikel</button>
                    <button class="nav-link fw-bold" id="activity" data-bs-toggle="tab" data-bs-target="#nav-activity" type="button" role="tab" aria-controls="nav-activity" aria-selected="false">Kegiatan</button>
                    <button class="nav-link fw-bold" id="prestasi" data-bs-toggle="tab" data-bs-target="#nav-prestasi" type="button" role="tab" aria-controls="nav-prestasi" aria-selected="false">Prestasi</button>
                </div>
            </nav>
            <div class="tab-content my-5" id="nav-tabContent">
                <div class="tab-pane fade show active p-0 px-4" id="nav-all" role="tabpanel" aria-labelledby="all" tabindex="0">
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
                <div class="tab-pane fade show p-0 px-4" id="nav-activity" role="tabpanel" aria-labelledby="activity" tabindex="0">
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
                <div class="tab-pane fade show p-0 px-4" id="nav-prestasi" role="tabpanel" aria-labelledby="prestasi" tabindex="0">
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
                                            <a href="" class="btn btn-secondary rounded-pill">Kegiatan Asrama</a>
                                        </div>
                                        <div class="col d-flex justify-content-end">
                                            <a href="/single" class="btn btn-primary rounded-pill">See More</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>