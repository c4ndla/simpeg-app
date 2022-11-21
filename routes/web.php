<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::controller(App\Http\Controllers\Admin\PegawaiController::class)->group(function () {
        Route::get('/pegawai', 'index');
        Route::get('/detail-pegawai/{pegawai_id}', 'detail');
        Route::get('/pdf-pegawai/{pegawai_id}', 'viewPDF');
    });

    Route::controller(App\Http\Controllers\Admin\KeluargaController::class)->group(function () {
        Route::get('/keluarga', 'index');
        Route::get('/detail-keluarga/{keluarga_id}', 'detail');
        Route::get('/detail-keluarga/{keluarga_id}/{sub_id}', 'viewSub');
    });

    Route::controller(App\Http\Controllers\Admin\PendidikanController::class)->group(function () {
        Route::get('/pendidikan', 'index');
        Route::get('/detail-pendidikan/{pendidikan_id}', 'detail');
        Route::get('/detail-pendidikan/{pendidikan_id}/{sub_id}', 'viewSub');
    });

    Route::controller(App\Http\Controllers\Admin\SeminarController::class)->group(function () {
        Route::get('/seminar', 'index');
        Route::get('/detail-seminar/{seminar_id}', 'detail');
        Route::get('/detail-seminar/{seminar_id}/{sub_id}', 'viewSub');
    });

    Route::controller(App\Http\Controllers\Admin\PangkatController::class)->group(function () {
        Route::get('/pangkat', 'index');
        Route::get('/detail-pangkat/{pangkat_id}', 'detail');
        Route::get('/detail-pangkat/{pangkat_id}/{sub_id}', 'viewSub');
    });

    Route::controller(App\Http\Controllers\Admin\JabatanController::class)->group(function () {
        Route::get('/jabatan', 'index');
        Route::get('/detail-jabatan/{jabatan_id}', 'detail');
        Route::get('/detail-jabatan/{jabatan_id}/{sub_id}', 'viewSub');
    });

    Route::controller(App\Http\Controllers\Admin\CpnsController::class)->group(function () {
        Route::get('/cpns', 'index');
        Route::get('/detail-cpns/{cpns_id}', 'detail');
        Route::get('/detail-cpns/{cpns_id}/{sub_id}', 'viewSub');
    });

    Route::controller(App\Http\Controllers\Admin\RuanganController::class)->group(function () {
        Route::get('/ruangan', 'index');
        Route::get('/detail-ruangan/{ruangan_id}', 'detail');
        Route::get('/detail-ruangan/{ruangan_id}/{sub_id}', 'viewSub');
    });

    Route::controller(App\Http\Controllers\Admin\GajiController::class)->group(function () {
        Route::get('/gaji', 'index');
        Route::get('/detail-gaji/{gaji_id}', 'detail');
        Route::get('/detail-gaji/{gaji_id}/{sub_id}', 'viewSub');
    });

    Route::controller(App\Http\Controllers\Admin\LaporanController::class)->group(function () {
        Route::get('/laporan', 'index');
        Route::get('/detail-laporan/{laporan_id}', 'detail');
        Route::get('/detail-laporan/{laporan_id}/{sub_id}', 'viewSub');
    });


    Route::controller(App\Http\Controllers\Admin\AgamaController::class)->group(function () {
        Route::get('/agama', 'index');
    });

    Route::controller(App\Http\Controllers\Admin\RuangController::class)->group(function () {
        Route::get('/ruang', 'index');
    });

    Route::controller(App\Http\Controllers\Admin\UserController::class)->group(function () {
        Route::get('/users', 'index');
        Route::get('/user/{user_id}', 'edit');
        Route::put('/update-user/{user_id}', 'update');
    });
});




Route::prefix('/pegawai')->middleware(['auth', 'isPegawai'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Pegawai\DashboardController::class, 'index']);

    Route::controller(App\Http\Controllers\Pegawai\PegawaiController::class)->group(function () {
        Route::get('/personal', 'index');
        Route::get('/detail-personal/{personal_id}', 'detail');
        Route::get('/pdf-personal/{personal_id}', 'viewPDF');
    });

    Route::controller(App\Http\Controllers\Pegawai\LaporanController::class)->group(function () {
        Route::get('/laporan', 'index');
        Route::get('/detail-laporan/{laporan_id}', 'detail');
        Route::get('/detail-laporan/{laporan_id}/{sub_id}', 'viewSub');
    });

    Route::controller(App\Http\Controllers\Pegawai\KeluargaController::class)->group(function () {
        Route::get('/keluarga', 'index');
        Route::get('/detail-keluarga/{keluarga_id}', 'detail');
        Route::get('/detail-keluarga/{keluarga_id}/{sub_id}', 'viewSub');
    });

    Route::controller(App\Http\Controllers\Pegawai\PendidikanController::class)->group(function () {
        Route::get('/pendidikan', 'index');
        Route::get('/detail-pendidikan/{pendidikan_id}', 'detail');
        Route::get('/detail-pendidikan/{pendidikan_id}/{sub_id}', 'viewSub');
    });

    Route::controller(App\Http\Controllers\Pegawai\SeminarController::class)->group(function () {
        Route::get('/seminar', 'index');
        Route::get('/detail-seminar/{seminar_id}', 'detail');
        Route::get('/detail-seminar/{seminar_id}/{sub_id}', 'viewSub');
    });

    Route::controller(App\Http\Controllers\Pegawai\PangkatController::class)->group(function () {
        Route::get('/pangkat', 'index');
        Route::get('/detail-pangkat/{pangkat_id}', 'detail');
        Route::get('/detail-pangkat/{pangkat_id}/{sub_id}', 'viewSub');
    });

    Route::controller(App\Http\Controllers\Pegawai\GajiController::class)->group(function () {
        Route::get('/gaji', 'index');
        Route::get('/detail-gaji/{gaji_id}', 'detail');
        Route::get('/detail-gaji/{gaji_id}/{sub_id}', 'viewSub');
    });

    Route::controller(App\Http\Controllers\Pegawai\CpnsController::class)->group(function () {
        Route::get('/cpns', 'index');
        Route::get('/detail-cpns/{cpns_id}', 'detail');
        Route::get('/detail-cpns/{cpns_id}/{sub_id}', 'viewSub');
    });
});
