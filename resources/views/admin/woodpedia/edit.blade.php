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
                                            <h6 class="m-0 font-weight-bold text-primary">Edit Woodpedia</h6>
                                        </div>
                                        <div class="card-body">
                                            <form action="/admin/woodpedia/{{ $woodpedia->id }}/update" method="POST" enctype="multipart/form-data">
                                                    {{-- @method('PUT') --}}
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Judul</label>
                                                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title',$woodpedia->title) }}">
                                                        @error('title')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                      @enderror
                                                    </div>            
                                                    {{-- <div class="mb-3">
                                                        <label for="slug" class="form-label">Slug</label>
                                                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
                                                        @error('slug')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                      @enderror
                                                    </div> --}}
                                                    <div class="mb-3">
                                                        <label for="link" class="form-label">Tautan</label>
                                                        <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" value="{{ old('link',$woodpedia->link) }}">
                                                        @error('link')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                      @enderror
                                                    </div> 
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label @error('image') is-invalid @enderror">Gambar Woodpedia</label>
                                                        <input type="hidden" name="oldImage" value="{{ $woodpedia->image }}">
                                                        @if($woodpedia->image)
                                                            <img src="{{ asset('/storage/' . $woodpedia->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                        @else
                                                            <img class="img-preview img-fluid mb-3 col-sm-5">
                                                        @endif
                                                        <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                                                        @error('image')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                      @enderror
                                                    </div> 
                                                    <div class="mb-3">
                                                        <label for="body" class="form-label">Body</label>
                                                        @error('body')
                                                        <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                        <input id="body" type="hidden" name="body" value="{{ old('body',$woodpedia->body) }}">
                                                        <trix-editor input="body"></trix-editor>
                                                    </div>
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
                                // preview image

                            function previewImage(){

                        const image = document.querySelector('#image');
                        const imgPreview = document.querySelector('.img-preview');

                        imgPreview.style.display = 'block';

                        const ofReader = new FileReader();
                        ofReader.readAsDataURL(image.files[0]);

                        ofReader.onload = function(oFREvent){
                            imgPreview.src = oFREvent.target.result;
                        }; 
                    </script>
@endsection