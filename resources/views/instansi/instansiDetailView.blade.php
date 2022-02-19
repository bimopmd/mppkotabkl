@extends('layouts.masterView')
@section('title','Detail Data Instansi')
@section('content')
     <!-- Main Container -->
      <main id="main-container">
        {{-- <div class="bg-image bg-image-bottom" style="background-image: url({{url('assets/img/background-instansi/background-detail2.JPG')}});">
            <div class="bg-primary-dark-op">
            <div class="content content-top text-center overflow-hidden">
                <div class="pt-20 pb-20">
                <h1 class="font-w700 text-white mb-100 invisible" data-toggle="appear" data-class="animated fadeInUp">Detail Data Instansi</h1>
                </div>
            </div>
            </div>
        </div> --}}
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
                href="{{url('/dashboard/instansi/'.$instansi->id.'/edit')}}"><i class="fa fa-gear text-white mr-5"></i> Edit</a>

              </div><a class="btn btn-success" onclick="Codebase.loader('show', 'bg-gd-dusk');
                setTimeout(function () {
                Codebase.loader('hide');
                }, 3000);"
                href="{{route('instansi.index')}}"><i class="fa fa-chevron-left text-white mr-5"></i> Back</a>
            </div>
            <!-- END Navigation -->

            <!-- About Start -->
                <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container">
                        <div class="row g-2">
                            <div class="col-lg-5" style="min-height: 450px;">
                                @if ($instansi->logo_instansi)
                                <td class="text-center">
                                    <img style="width:400px" class="img-fluid options-item" src="{{asset('storage/' . $instansi->logo_instansi)}}" alt="">
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
                                    <h2 class="display-5 mb-0" style="font-family: 'FontNamaInstansi', sans-serif;">{!!($instansi->nama_instansi)!!}
                                    </h2>
                                </div>
                                <!-- <h4 class="text-body fst-italic mb-4">Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no
                                    lorem sit clita duo justo magna dolore</h4> -->
                                <div class="row g-3">
                                    <div class="col-sm wow zoomIn" data-wow-delay="0.3s">
                                        <h4 class="mb-6" style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);"
                                            class=" fa
                                        fa-check-circle me-3">Jenis Instansi</h4>
                                        <h6 class="color: black;">{!!($instansi->kategori_instansi)!!}</h6>
                                        <hr>
                                        <h4 class="mb-6" style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);"
                                            class=" fa
                                        fa-check-circle me-3">Alamat</h4>
                                        <h6 class="color: black;">Jl. Basuki Rahmat (Eks-Balai Kota Bengkulu). Sawah Lebar Baru, Kec. Ratu Agung, Kota Bengkulu, Bengkulu 38115</h6>
                                        <hr>
                                        <h4 class="mb-6" style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);"
                                            class=" fa
                                        fa-check-circle me-3">Waktu Pelayanan</h4>
                                        <h6 class="color: black;">{!!($instansi->waktu_pelayanan_instansi)!!}</h6>
                                        <hr>
                                        <h4 class="mb-6" style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);"
                                            class=" fa
                                        fa-check-circle me-3">Telephone</h4>
                                        <h6 class="color: black;">08123456789</h6>
                                        <hr>
                                        <h4 class="mb-6" style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);"
                                            class=" fa
                                        fa-check-circle me-3">E-Mail</h4>
                                        <h6 class="color: black;">tester@gmail.com</h6>
                                        <hr>
                                        <h4 class="mb-6" style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);"
                                            class=" fa
                                        fa-check-circle me-3">Website</h4>
                                        <h6 class="color: black;" data><a href="{{$instansi->web_instansi}}" target="_blank">{{$instansi->web_instansi}}</a></h6>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Simple Wizards -->
                        <h2 class="content-heading">Keterangan</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Simple Wizard -->
                                <div class="js-wizard-simple block">
                                    <!-- Step Tabs -->
                                    <ul class="nav nav-tabs nav-tabs-block nav-fill" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#profile" data-toggle="tab">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#visimisi" data-toggle="tab">Visi & Misi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#dasarhukum" data-toggle="tab">Dasar Hukum</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#daftarlayanan" data-toggle="tab">Daftar Layanan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#persyaratan" data-toggle="tab">Persyaratan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#alurlayanan" data-toggle="tab">Mekanisme</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#biaya" data-toggle="tab">Biaya</a>
                                        </li>
                                    </ul>
                                    <!-- END Step Tabs -->

                                    <!-- Form -->
                                    <form action="be_forms_wizard.html" method="post">
                                        <!-- Steps Content -->
                                        <div class="block-content block-content-full tab-content" style="min-height: 265px;">
                                            <!-- Step 1 -->
                                            <div class="tab-pane active" id="profile" role="tabpanel">
                                                <br>
                                                <br>
                                                {{-- <h4 class="mb-6"
                                                    style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);" class=" fa
                                                    fa-check-circle me-3">Website</h4> --}}
                                                <label for="profile">Profile</label>
                                                <h6 class="color: black;">{!!($instansi->profile_instansi)!!}</h6>
                                            </div>
                                            <!-- END Step 1 -->

                                            <!-- Step 2 -->
                                            <div class="tab-pane" id="visimisi" role="tabpanel">
                                                <br>
                                                <br>
                                                <label for="visimisi">Visi dan Misi</label>
                                                <h6 class="color: black;">{!!($instansi->visi_misi_instansi)!!}</h6>
                                            </div>
                                            <!-- END Step 2 -->

                                            <!-- Step 3 -->
                                            <div class="tab-pane" id="daftarlayanan" role="tabpanel">
                                                <br>
                                                <br>
                                                <label for="daftarlayanan">Daftar Pelayanan</label>
                                                <h6 class="color: black;">{!!($instansi->daftar_layanan_instansi)!!}</h6>
                                            </div>
                                            <!-- END Step 3 -->

                                            <!-- Step 4 -->
                                            <div class="tab-pane" id="dasarhukum" role="tabpanel">
                                                <br>
                                                <br>
                                                <label for="dasarhukum">Dasar Hukum</label>
                                                <h6 class="color: black;">{!!($instansi->dasar_hukum_instansi)!!}</h6>
                                            </div>
                                            <!-- END Step 4 -->

                                            <!-- Step 5 -->
                                            <div class="tab-pane" id="persyaratan" role="tabpanel">
                                                <br>
                                                <br>
                                                <label for="persyaratan">Syarat</label>
                                                <h6 class="color: black;">{!!($instansi->persyaratan_layanan_instansi)!!}</h6>
                                            </div>
                                            <!-- END Step 5 -->

                                            <!-- Step 6 -->
                                            <img class="tab-pane  rounded wow zoomIn" id="alurlayanan" role="tabpanel" src="{{asset('storage/'. $instansi->alur_layanan_instansi)}}" style="object-fit: cover;" alt="">
                                            {{-- <div class="tab-pane" id="alurlayanan" role="tabpanel">
                                                <div class="col-lg-5" style="min-height: 400px;">
                                                    <div class="position-relative h-100">
                                                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                                                            src="{{asset('storage/'. $instansi->alur_layanan_instansi)}}" style="object-fit: cover;">
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <!-- END Step 6 -->

                                            <!-- Step 7 -->
                                            <div class="tab-pane" id="biaya" role="tabpanel">
                                                <br>
                                                <br>
                                                <label for="biaya">Biaya</label>
                                                <h6 class="color: black;">{!!($instansi->biaya_layanan_instansi)!!}</h6>
                                            </div>
                                            <!-- END Step 7 -->

                                        </div>
                                        <!-- END Steps Content -->

                                        <!-- Steps Navigation -->
                                        <div class="block-content block-content-sm block-content-full bg-body-light">
                                            <div class="row">
                                                <div class="col-6">
                                                    <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                                        <i class="fa fa-angle-left mr-5"></i> kembali
                                                    </button>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                                        selanjutnya <i class="fa fa-angle-right ml-5"></i>
                                                    </button>
                                                    {{-- <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                                        <i class="fa fa-check mr-5"></i> Submit
                                                    </button> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Steps Navigation -->
                                    </form>
                                    <!-- END Form -->
                                </div>
                                <!-- END Simple Wizard -->
                            </div>
                        <!-- END Simple Wizards -->
                    </div>
                </div>
            <!-- About End -->

            {{-- <!-- Key Features -->
            <div class="block-content-full border-t">
              <div class="row text-center py-30 invisible" data-toggle="appear">
                <div class="col-6 col-md-4 col-xl-3 py-30">
                  <div
                    class="item item-rounded item-2x mx-auto bg-primary-lighter push">
                    <i class="si si-rocket text-primary"></i>
                  </div>
                  <h5 class="mb-0">Bootstrap Powered</h5>
                </div>
                <div class="col-6 col-md-4 col-xl-3 py-30">
                  <div
                    class="item item-rounded item-2x mx-auto bg-pulse-lighter push">
                    <i class="si si-screen-smartphone text-pulse"></i>
                  </div>
                  <h5 class="mb-0">Fully Responsive</h5>
                </div>
                <div class="col-6 col-md-4 col-xl-3 py-30">
                  <div
                    class="item item-rounded item-2x mx-auto bg-corporate-lighter push">
                    <i class="si si-globe-alt text-earth"></i>
                  </div>
                  <h5 class="mb-0">Global</h5>
                </div>
                <div class="col-6 col-md-4 col-xl-3 py-30">
                  <div
                    class="item item-rounded item-2x mx-auto bg-elegance-lighter push">
                    <i class="si si-support text-flat"></i>
                  </div>
                  <h5 class="mb-0">Support</h5>
                </div>
              </div>
            </div>
            <!-- END Key Features --> --}}

            <!-- Testimonial -->
            {{-- <div
              class="bg-image" style="background-image: url({{asset('assets/media/photos/photo30@2x.jpg')}});">
              <div class="block-content block-content-full bg-primary-dark-op text-center">
                <div class="py-30 invisible" data-toggle="appear">
                  <div class="py-10">
                    <img
                      class="img-avatar img-avatar96 img-avatar-thumb"
                      src="{{asset('storage/'. $instansi->logo_instansi)}}"
                      alt=""
                    />
                  </div>
                  <div class="row justify-content-center py-10">
                    <div class="col-md-8">
                      <div class="mb-10">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                      </div>
                      <h3 class="font-w700 text-white mb-10">
                        Highly recommended! <i class="fa fa-thumbs-up"></i>
                      </h3>
                      <style type="text/css">
                        body { font-family: Calibri, Helvetica, Arial, sans-serif; }
                        h3 { font-family: Cambria,"Times New Roman",serif; }
                        #paragraf2 { font-family: Georgia, serif; }
                      </style>
                      <p class="font-size-lg text-body-bg-dark">
                        <font id="paragraf2"size="5">
                          "Titik bahaya dari <em>PUNGLI</em> tak cuma dilihat persentase kebocoran uang tapi juga dilihat menipisnya kepercayaan kepada bersihnya aparatur negara secara"
                        </font>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
            <!-- END Testimonial -->
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
@endsection



@section('preview-image')
    <script>
        function previewImage(){
            const image = document.querySelector('#logo_instansi');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
    <script>
      jQuery(function () {
        Codebase.helpers("slick");
      });
    </script>
@endsection
