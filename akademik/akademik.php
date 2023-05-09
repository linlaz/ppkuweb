<?php get_header(); ?>
<div class="container my-4">
    <h1>Akademik</h1>
    <div class="academic-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/akademik.png" alt="akademik">
    </div>
    <div class="menu-academic my-5">
        <h1 class="text-center">Menu Akademik</h1>
        <div class="row justify-content-center">
            <div class="col col-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/akademik-menu.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Peraturan Akademik</h5>
                        <div class="d-flex justify-content-end">
                            <a href="/academic/rules" class="btn btn-primary rounded-pill">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/akademik-menu.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Beasiswa</h5>
                        <div class="d-flex justify-content-end">
                            <a href="/academic/beasiswa" class="btn btn-primary rounded-pill">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/akademik-menu.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jadwal Ujian</h5>
                        <div class="d-flex justify-content-end">
                            <a href="/academic/exam" class="btn btn-primary rounded-pill">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/akademik-menu.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Timeline Akademik</h5>
                        <div class="d-flex justify-content-end">
                            <a href="/academic/timeline" class="btn btn-primary rounded-pill">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/akademik-menu.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jadwal Kuliah</h5>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary rounded-pill">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>