@extends('layouts_admin.main')
@section('content')
                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Hallo Admin Woodwaste !</h1>
                        <p class="mb-4">Silahkan masukan data dengan benar</p>
                        {{-- <div class="alert alert-success" role="alert">
                            Input Berhasil !
                        </div>
                        <div class="alert alert-danger" role="alert">Input Gagal !
                        </div> --}}
                        <!-- Content Row -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-7">
                                    <!-- Area Input -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Edit Wood Data</h6>
                                        </div>
                                        <div class="card-body">
                                            <form action="/admin/wooddata/{{ $wooddata->id }}/update" method="POST" enctype="multipart/form-data">
                                                    {{-- @method('PUT') --}}
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Judul</label>
                                                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" title="title" value="{{ old('title',$wooddata->title) }}" disabled>
                                                        @error('title')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                      @enderror
                                                    </div> 
                                                    <div class="mb-3">
                                                        <label for="jumlah" class="form-label">Jumlah (Kg)</label>
                                                        <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" jumlah="jumlah" value="{{ old('jumlah',$wooddata->jumlah) }}">
                                                        @error('jumlah')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                      @enderror
                                                    </div>            
                                                    {{-- <div class="mb-3">
                                                        <label for="slug" class="form-label">Slug</label>
                                                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" jumlah="slug" value="{{ old('slug') }}">
                                                        @error('slug')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                      @enderror
                                                    </div> --}}
           
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <!-- /.container-fluid -->

                    <script>
                        // const title = document.querySelector('#title');
                        // const slug = document.querySelector('#slug');

                        // title.addEventListener('change', function(){
                        //     fetch('admin/woodpedia/checkSlug?title=' + title.value)
                        //     .then(response => response.json())
                        //     .then(data => slug.value = data.slug)
                        // });

                        document.addEventListener('trix-file-accept', function(e){
                            e.preventDefault();
                        });        
                    </script>
@endsection