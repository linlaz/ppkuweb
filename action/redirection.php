<?php

function custom_redirect()
{
    $requested_url = $_SERVER['REQUEST_URI'];
    
    if ($requested_url === '/about') {
        include(get_template_directory() . '/about.php');
        exit();
    }

    if ($requested_url === '/about/history') {
        include(get_template_directory() . '/sejarah.php');
        exit();
    }

    if ($requested_url === '/article') {
        include(get_template_directory() . '/home/article-list.php');
        exit();
    }

    if ($requested_url === '/gallery') {
        include(get_template_directory() . '/home/gallery-list.php');
        exit();
    }

    if ($requested_url === '/service') {
        include(get_template_directory() . '/pelayanan.php');
        exit();
    }

    if ($requested_url === '/single') {
        include(get_template_directory() . '/single.php');
        exit();
    }

    if ($requested_url === '/academic') {
        include(get_template_directory() . '/akademik/akademik.php');
        exit();
    }
    if ($requested_url === '/academic/rules') {
        include(get_template_directory() . '/akademik/peraturan-akademik.php');
        exit();
    }
    if ($requested_url === '/academic/beasiswa') {
        include(get_template_directory() . '/akademik/beasiswa-akademik.php');
        exit();
    }
    if ($requested_url === '/academic/exam') {
        include(get_template_directory() . '/akademik/ujian-akademik.php');
        exit();
    }
    if ($requested_url === '/academic/timeline') {
        include(get_template_directory() . '/akademik/timeline-akademik.php');
        exit();
    }
}
add_action('template_redirect', 'custom_redirect');
