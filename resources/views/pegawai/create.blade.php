
@extends('layouts.master')
@section('title','Add Data Pegawai')
@section('content')

<main id="main-container">
<!-- Page Content -->
<div class="content">
    <div class="block">
    <div class="block-header block-header-default">
        <!-- Breadcrumb -->
        {{ Breadcrumbs::render('addPegawai') }}
        <!-- end Breadcrumb -->
        <div class="block-options">
        <button type="button" class="btn-block-option">
            <i class="si si-wrench"></i>
        </button>
        </div>
    </div>
    <div class="block-content form-material">
        <div class="row justify-content-center py-10">
        <div class="col-xl-11">
            <form class="js-validation-bootstrap" action="{{route('pegawai.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <div class="col-6">
                <div class="form-material form-material-primary floating">
                    <input type="text" class="form-control" id="nip_pegawai" name="nip_pegawai" value="{{old('nip_pegawai')}}" onkeypress="return hanyaAngka(event)" minlength="18" maxlength="18" data-always-show="true" data-pre-text="Used " data-separator=" of " data-post-text=" characters">
                    <label for="nip_pegawai" @error('nip_pegawai')
                    class="text-danger"
                    @enderror>Nip Pegawai @error('nip_pegawai')
                        | {{$message}}
                    @enderror</label>
                </div>
                </div>
                <div class="col-6">
                <div class="form-material form-material-primary floating">
                    <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="{{old('nama_pegawai')}}">
                    <label for="nama_pegawai" @error('nama_pegawai')
                    class="text-danger"
                    @enderror>Nama Pegawai @error('nama_pegawai')
                        | {{$message}}
                    @enderror</label>
                </div>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-6">
                <div class="form-material form-material-primary floating">
                    <input type="text" class="form-control" id="instansi_pegawai" name="instansi_pegawai" value="{{old('instansi_pegawai')}}">
                    <label for="instansi_pegawai" @error('instansi_pegawai')
                    class="text-danger"
                    @enderror>Instansi @error('instansi_pegawai')
                        | {{$message}}
                    @enderror</label>
                </div>
                </div>
                <div class="col-6">
                <div class="form-material form-material-primary floating">
                    <input type="text" class="form-control" id="alamat_ktp_pegawai" name="alamat_ktp_pegawai" value="{{old('alamat_ktp_pegawai')}}">
                    <label for="alamat_ktp_pegawai" @error('alamat_ktp_pegawai')
                    class="text-danger"
                    @enderror>Alamat KTP @error('alamat_ktp_pegawai')
                        | {{$message}}
                    @enderror</label>
                </div>
                </div>
            </div>
            <br>
            <br>
            <div class=" form-group row">
                <div class="col-6">
                <div class="form-material form-material-primary floating">
                    <input type="text" class="form-control" id="nope_pegawai" name="nope_pegawai" value="{{old('nope_pegawai')}}" onkeypress="return hanyaAngka(event)" maxlength="13" data-always-show="true" data-pre-text="Used " data-separator=" of " data-post-text=" characters">
                    <label for="nope_pegawai" @error('nope_pegawai')
                    class="text-danger"
                    @enderror>No. Handphone @error('nope_pegawai')
                        | {{$message}}
                    @enderror</label>
                </div>
                </div>
                <div class="col-6">
                <div class="form-group row">
                    <label class="col-12"@error('foto_pegawai')
                    class="text-danger"
                    @enderror>Foto Pegawai @error('foto_pegawai')
                        | {{$message}}
                    @enderror</label>
                    <div class="col-lg">
                    <img class="img-preview-foto img-fluid mb-3 col-sm-5 d-block">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto_pegawai" name="foto_pegawai" value="{{old('foto_pegawai')}}" onchange="previewPegawai()" data-toggle="custom-file-input">
                        <label class="custom-file-label" for="foto_pegawai">Choose file</label>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <br>
            {{-- <div class="col-6">
            <div class="form-group row">
                <div class="col-2">
                <button type="submit" class="btn btn-block btn-alt-primary"></i>Save</button>
                <a href="{{route('pegawai.index')}}" class="btn btn-alt-danger" class="d-inline">Back</a>
                </div>
            </div>
            </div> --}}
            <div class="form-group row">
                <div class="col-6 form-group">
                <div class="form-material">

                </div>
                </div>
                <div class="col-6">
                <div class="form-group row">
                    <div class="col-lg-9">
                    <button type="submit" class="btn btn-alt-primary">Create</button>
                    <a href="{{route('pegawai.index')}}" class="btn btn-alt-danger" class="d-inline">Back</a>
                    </div>
                </div>
                </div>
            </div>
        </form>
        </div>
        </div>

    </div>
    </div>
</div>
<!-- END Page Content -->
</main>
@endsection

@section('preview-gambar')
    <script>
        function previewPegawai(){
            const image = document.querySelector('#foto_pegawai');
            const imgPreview = document.querySelector('.img-preview-foto');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection

