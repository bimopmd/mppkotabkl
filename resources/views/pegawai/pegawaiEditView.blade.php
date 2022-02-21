
@extends('layouts.masterView')
@section('title','Edit Data Pegawai')
@section('content')

<main id="main-container">
<!-- Page Content -->
<div class="content">
    <div class="block">
    <div class="block-header block-header-default">
        <!-- Breadcrumb -->
        {{ Breadcrumbs::render('editPegawai') }}
        <!-- end Breadcrumb -->
        {{-- <h3 class="block-title"><a href="{{route('pegawai.index')}}" onclick="Codebase.loader('show', 'bg-gd-cherry');
                setTimeout(function () {
                Codebase.loader('hide');
                }, 3000);">Menu Pegawai</a> / Edit Data Pegawai
        </h3> --}}
        <div class="block-options">
        <button type="button" class="btn-block-option">
            <i class="si si-wrench"></i>
        </button>
        </div>
    </div>
    <div class="block-content form-material">
        <div class="row justify-content-center py-10">
        <div class="col-xl-11">
        <form class="js-validation-bootstrap" action="/dashboard/pegawai/{{$pegawai->id}} " method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group row">
                <div class="col-6">
                <div class="form-material">
                    <input type="text" class="form-control d-inline" id="nip_pegawai" name="nip_pegawai" value="{{old('nip_pegawai', $pegawai->nip_pegawai)}}" placeholder="......">
                    <label for="nip_pegawai" @error('nip_pegawai')
                    class="text-danger"
                    @enderror>NIP Pegawai @error('nip_pegawai')
                        | {{$message}}
                    @enderror</label>
                </div>
                </div>
                <div class="col-6">
                <div class="form-material">
                    <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="{{old('nama_pegawai', $pegawai->nama_pegawai)}}" placeholder="......">
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
                <div class="form-material">
                    <input type="text" class="form-control d-inline" id="instansi_pegawai" name="instansi_pegawai" value="{{old('instansi_pegawai', $pegawai->instansi_pegawai)}}" placeholder="......">
                    <label for="instansi_pegawai" @error('instansi_pegawai')
                    class="text-danger"
                    @enderror>Instansi @error('instansi_pegawai')
                        | {{$message}}
                    @enderror</label>
                </div>
                </div>
                <div class="col-6">
                <div class="form-material">
                    <input type="text" class="form-control" id="alamat_ktp_pegawai" name="alamat_ktp_pegawai" value="{{old('alamat_ktp_pegawai', $pegawai->alamat_ktp_pegawai)}}" placeholder="......">
                    <label for="alamat_ktp_pegawai" @error('alamat_ktp_pegawai')
                    class="text-danger"
                    @enderror>Alamat Pegawai @error('alamat_ktp_pegawai')
                        | {{$message}}
                    @enderror</label>
                </div>
                </div>
            </div>
            <br>
            <br>
            <div class=" form-group row">
                <div class="col-6">
                <div class="form-material">
                    <input type="text" class="form-control d-inline" id="nope_pegawai" name="nope_pegawai" value="{{old('nope_pegawai', $pegawai->nope_pegawai)}}" placeholder="......">
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
                    <input type="hidden" name="oldImageFoto" value="{{$pegawai->foto_pegawai}}">
                    @if ($pegawai->foto_pegawai)
                        <img src="{{asset('storage/' . $pegawai->foto_pegawai)}}" class="img-preview-alur img-fluid mb-2 col-sm-2 d-block">
                    @else

                    @endif
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto_pegawai" name="foto_pegawai" value="{{old('foto_pegawai', $pegawai->foto_pegawai)}}" onchange="previewAlur()" data-toggle="custom-file-input">
                        <label class="custom-file-label" for="foto_pegawai">Choose file</label>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-6 form-group">
                <div class="form-material">
                    {{--  --}}
                </div>
                </div>
                <div class="col-6">
                <div class="form-group row">
                    <div class="col-lg-9 ml-auto">
                    <button type="submit" class="btn btn-alt-primary">Create</button>
                    <a href="{{route('instansi.index')}}" class="btn btn-alt-danger">Back</a>
                    </div>
                </div>
                </div>
            </div>
        </form>
        </div>
        </div>

    </div>
    </div>
    <!-- Bootstrap Forms Validation -->
    <!-- Material Forms Validation -->
    <!-- END Material Forms Validation -->
</div>
<!-- END Page Content -->
</main>
@endsection

@section('preview-gambar')
    <script>
        function previewFoto(){
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
