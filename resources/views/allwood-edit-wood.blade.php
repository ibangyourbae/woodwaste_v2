@extends('layouts.main')
@section('content')
<div class="container">
    <div class="container layer 2">
        <div class="row mt-5">
            <div class="card ">
                <div class="card-header text-center" style="background-color:#B3DAD5;">
                    Ubah Kerajinan Anda 
                </div>
                <div class="card-body">
                    <form action="/allwood/update/{{ $allwood->id }}" method="POST" enctype="multipart/form-data">
                        {{-- @method('put') --}}
                        @csrf
                        <label for="wood_name" class="form-label @error('wood_name') is-invalid @enderror">Nama Kerajinan</label>
                        <input class="form-control form-control-lg mt-3" type="text" id="wood_name" name="wood_name" value="{{ old('wood_name',$allwood->wood_name) }}">
                        @error('wood_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <label for="stock" class="form-label @error('stock') is-invalid @enderror">No HP Toko</label>
                        <input class="form-control form-control-lg mt-3" type="number" id="stock" name="stock" value="{{ old('stock',$allwood->stock) }}">
                        @error('stock')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <label for="price" class="form-label @error('price') is-invalid @enderror">Alamat</label>
                        <input class="form-control form-control-lg mt-3" type="number" id="price" name="price" value="{{ old('price',$allwood->price) }}">
                        @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="mb-3">
                            <label for="image" class="form-label @error('image') is-invalid @enderror">Gambar Toko Anda</label>
                            <input type="hidden" name="oldImage" value="{{ $allwood->image }}">
                            @if($allwood->image)
                                <img src="{{ asset('/storage/' . $allwood->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
                        <button type="submit" class="btn mt-3" style="background-color:#B3DAD5;">Kirim</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<script>

    
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