@extends('layouts.main')
@section('content')
<div class="container">
    <div class="container layer 2">
        <div class="row mt-5">
            <div class="card ">
                <div class="card-header text-center" style="background-color:#B3DAD5;">
                    Ubah Toko Anda 
                </div>
                <div class="card-body">
                    <form action="/allwood/{{ $store->slug }}/update" method="POST" enctype="multipart/form-data">
                        {{-- @method('put') --}}
                        @csrf
                        <label for="store_name" class="form-label @error('store_name') is-invalid @enderror">Nama Toko</label>
                        <input class="form-control form-control-lg mt-3" type="text" id="store_name" name="store_name" value="{{ old('store_name',$store->store_name) }}">
                        @error('store_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <label for="store_phone" class="form-label @error('store_phone') is-invalid @enderror">No HP Toko</label>
                        <input class="form-control form-control-lg mt-3" type="text" id="store_phone" name="store_phone" value="{{ old('store_phone',$store->store_phone) }}">
                        @error('store_phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <label for="store_address" class="form-label @error('store_address') is-invalid @enderror">Alamat</label>
                        <input class="form-control form-control-lg mt-3" type="text" id="store_address" name="store_address" value="{{ old('store_address',$store->store_address) }}">
                        @error('store_address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="mb-3">
                            <label for="image" class="form-label @error('image') is-invalid @enderror">Gambar Toko Anda</label>
                            <input type="hidden" name="oldImage" value="{{ $store->image }}">
                            @if($store->image)
                                <img src="{{ asset('/storage/' . $store->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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