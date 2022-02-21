@extends('layouts.masterView')
@section('title','Detail Data Pegawai')
@section('content')
     <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="content">
          <div class="block">
            <!-- Navigation -->
            <div class="block-content block-content-full border-b clearfix">
              <div class="btn-group float-right">
                <a class="btn btn-warning" onclick="Codebase.loader('show', 'bg-gd-dusk');
                setTimeout(function () {
                Codebase.loader('hide');
                }, 3000);"
                href="{{url('/dashboard/pegawai/'.$pegawai->id.'/edit')}}"><i class="fa fa-gear text-white mr-5"></i> Edit</a>

              </div><a class="btn btn-success" onclick="Codebase.loader('show', 'bg-gd-dusk');
                setTimeout(function () {
                Codebase.loader('hide');
                }, 3000);"
                href="{{route('pegawai.index')}}"><i class="fa fa-chevron-left text-white mr-5"></i> Back</a>
            </div>
            <!-- END Navigation -->

            <!-- About Start -->
                <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container">
                        <div class="row g-2">
                            <div class="col-lg-5" style="min-height: 450px;">
                                @if ($pegawai->foto_pegawai)
                                <td class="text-center">
                                    <img style="width:400px" class="img-fluid options-item" src="{{asset('storage/' . $pegawai->foto_pegawai)}}" alt="">
                                    </td>
                                @else
                                    <td class="text-center">
                                    <img  style="width:400px" class="img-fluid options-item" src="\assets\file-default\default.jpg" alt="">
                                    </td>
                                @endif
                            </div>
                            <div class="col-lg-7">
                                <div class="section-title mb-4">
                                    <!-- <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5> -->
                                    <h2 class="display-5 mb-0" style="font-family: 'FontNamaInstansi', sans-serif;">{!!($pegawai->nama_pegawai)!!}
                                    </h2>
                                </div>
                                <!-- <h4 class="text-body fst-italic mb-4">Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no
                                    lorem sit clita duo justo magna dolore</h4> -->
                                <div class="row g-3">
                                    <div class="col-sm wow zoomIn" data-wow-delay="0.3s">
                                        <h4 class="mb-6" style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);"
                                            class=" fa
                                        fa-check-circle me-3">NIP Pegawai</h4>
                                        <h6 class="color: black;">{!!($pegawai->nip_pegawai)!!}</h6>
                                        <hr>
                                        <h4 class="mb-6" style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);"
                                            class=" fa
                                        fa-check-circle me-3">Nama Pegawai</h4>
                                        <h6 class="color: black;">{!!($pegawai->nama_pegawai)!!}</h6>
                                        <hr>
                                        <h4 class="mb-6" style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);"
                                            class=" fa
                                        fa-check-circle me-3">Alamat Pegawai</h4>
                                        <h6 class="color: black;">{{$pegawai->alamat_ktp_pegawai}}</h6>
                                        <hr>
                                        <h4 class="mb-6" style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);"
                                            class=" fa
                                        fa-check-circle me-3">Instansi</h4>
                                        <h6 class="color: black;">{!!($pegawai->instansi_pegawai)!!}</h6>
                                        <hr>
                                        <h4 class="mb-6" style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);"
                                            class=" fa
                                        fa-check-circle me-3">No. Handphone</h4>
                                        <h6 class="color: black;">{{$pegawai->nope_pegawai}}</h6>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            <!-- About End -->
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
@endsection
