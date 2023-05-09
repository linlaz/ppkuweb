<?php get_header(); ?>

<div class="banner">
    <div class="banner-content">
        <h1 class="fw-bolder">PPKU IPB</h1>
        <p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit </p>
    </div>
</div>

<div class="container my-5">
    <section class="artikel">
        <div class="title">
            <h1 class="fw-bolder">Artikel</h1>
        </div>
        <div class="menu col-12">
            <nav>
                <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                    <button class="nav-link active fw-bold" id="activity" data-bs-toggle="tab" data-bs-target="#nav-activity" type="button" role="tab" aria-controls="nav-activity" aria-selected="true">Aktivitas</button>
                    <button class="nav-link fw-bold" id="prestasi" data-bs-toggle="tab" data-bs-target="#nav-prestasi" type="button" role="tab" aria-controls="nav-prestasi" aria-selected="false">Prestasi</button>
                </div>
            </nav>
            <div class="tab-content my-5" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-activity" role="tabpanel" aria-labelledby="activity" tabindex="0">
                    <div class="row justify-content-start align-items-stretch p-0 px-md-3 gap-6">
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
                        <div class="col col-3" style="width: 22.5rem; background-color:#D0E8FF; border-radius:2%; position:relative;">
                            <div class="cards" style="position:absolute;top:50%;left:50%;transform: translate(-50%, -50%);">
                                <a href="/article" class="btn btn-outline-primary rounded-pill">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-prestasi" role="tabpanel" aria-labelledby="prestasi" tabindex="0">
                    <div class="row justify-content-start px-3 gap-6">
                        <div class="col-3">
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
                        <div class="col col-3" style="width: 22.5rem; background-color:#D0E8FF; border-radius:2%; position:relative;">
                            <div class="cards" style="position:absolute;top:50%;left:50%;transform: translate(-50%, -50%);">
                                <a href="/article" class="btn btn-outline-primary rounded-pill">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="sdg py-3">
    <section class="container py-4">
        <div class="title">
            <h1 class="fw-bolder">SDGs</h1>
        </div>
        <div class="row justify-content-start p-0 px-md-3 gap-6">
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
            <div class="col col-3" style="width: 22.5rem; background-color:#D0E8FF; border-radius:2%; position:relative;">
                <div class="cards" style="position:absolute;top:50%;left:50%;transform: translate(-50%, -50%);">
                    <a href="/article" class="btn btn-outline-primary rounded-pill">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
</div>


<section class="container py-4">
    <div class="title">
        <h1 class="fw-bolder">Gallery</h1>
    </div>
    <div class="row justify-content-center px-3 gap-6">
        <div class="col col-3">
            <div class="rounded-image">
                <div class="gallery-total">
                    <p>20 Foto</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery.jpeg" alt="Rounded Image" class="img-fluid">
                <div class="gallery-name">
                    <p>Gedung CCR</p>
                </div>
            </div>
        </div>
        <div class="col col-3" style="width: 18.5rem; background-color:#D0E8FF; border-radius:2%; position:relative;">
            <div class="cards" style="position:absolute;top:50%;left:50%;transform: translate(-50%, -50%);">
                <a href="/gallery" class="btn btn-outline-primary rounded-pill">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>