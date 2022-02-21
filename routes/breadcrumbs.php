<?php

use App\Models\Pegawai;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});


// untuk pegawai
// Home > Blog
Breadcrumbs::for('pegawai', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Data Pegawai', route('pegawai.index'));
});

Breadcrumbs::for('addPegawai', function (BreadcrumbTrail $trail) {
    $trail->parent('pegawai');
    $trail->push('Add New Pegawai', route('pegawai.create'));
});

// Home > Blog > [Category]
// Breadcrumbs::for('addPegawai', function (BreadcrumbTrail $trail, Pegawai $pegawai) {
//     $trail->parent('pegawai');
//     $trail->push($pegawai->title, route('pegawai.index', $pegawai));
// });

Breadcrumbs::for('editPegawai', function (BreadcrumbTrail $trail) {
    $trail->parent('pegawai');
    $trail->push('Edit Pegawai', route('pegawai.index'));
});

Breadcrumbs::for('detailPegawai', function (BreadcrumbTrail $trail) {
    $trail->parent('pegawai');
    $trail->push('Detail Pegawai', route('pegawai.index'));
});
// end Pegawai


// untuk instansi
// Home > Blog
Breadcrumbs::for('instansi', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Data Instansi', route('instansi.index'));
});

Breadcrumbs::for('addInstansi', function (BreadcrumbTrail $trail) {
    $trail->parent('instansi');
    $trail->push('Add New Instansi', route('instansi.create'));
});

Breadcrumbs::for('editInstansi', function (BreadcrumbTrail $trail) {
    $trail->parent('instansi');
    $trail->push('Edit Instansi', route('instansi.index'));
});

Breadcrumbs::for('detailInstansi', function (BreadcrumbTrail $trail) {
    $trail->parent('instansi');
    $trail->push('Detail Instansi', route('instansi.index'));
});
// end Instansi
