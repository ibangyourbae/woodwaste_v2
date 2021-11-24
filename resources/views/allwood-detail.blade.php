@extends('layouts.main')
@section('content')
<div class="container layer1">
    <img class="img-fluid mt-5 mb-3" width="100%" src="../assets/images/Line 4.png" alt="">
    <center>
        <h1 class="justify-content-center" style="font-weight: bold;">{{ $store->store_name }}</h1>
        <h2 class="justify-content-flex-end" style="font-weight: bold;">Kontak : {{ $store->store_phone }}</h2>
        <h2 class="justify-content-flex-end" style="font-weight: bold;">Alamat : {{ $store->store_address }}</h2>
        <div class="row mt-5">
            @foreach($store->wood as $wood)
            @if($wood->image)
            <div class="col-6">
                {{-- <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn"> --}}
                    <div class="card mb-2 mt-2 card2">
                        <div class="card-body" style="background-image:url({{ asset('storage/'.$wood->image) }});">
                        </div>
                        <div class="card-footer">
                            <h1>{{ $wood->wood_name }}</h1>
                            
                            <h2>Harga : @currency($wood->price) | Stok : {{ $wood->stock }}</h2>
                        </div>
                    </div>
                {{-- </a> --}}
            </div>
            @else
            <div class="col-6">
                {{-- <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn"> --}}
                    <div class="card mb-2 mt-2 card2">
                        <div class="card-body" style="background-image:url(https://source.unsplash.com/1200x400?wood);">
                        </div>
                        <div class="card-footer">
                            <h1>{{ $wood->wood_name }}</h1>
                            <h2>Harga : @currency($wood->price) | Stok : {{ $wood->stock }}</h2>
                        </div>
                    </div>
                {{-- </a> --}}
            </div>
            @endif
            @endforeach
        </div>
    </center>

</div>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @foreach($store->wood as $store)
    @if($wood->image)
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $store->store_name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="img-fluid" src="{{ asset('storage/' . $wood->image) }}" alt="">

                <div class="row">
                    <div class="col-2">
                        <p>Deskripsi </p>
                    </div>
                    <div class="col-10">
                        <p> : {!! $wood->body !!}</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @else
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $store->store_name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="img-fluid" src="https://source.unsplash.com/1200x400?store" alt="">

                <div class="row">
                    <div class="col-2">
                        <p>Deskripsi </p>
                    </div>
                    <div class="col-10">
                        <p> : Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, numquam. Aut quidem ipsum reiciendis laborum voluptatum pariatur neque quia dolorum, fugit expedita, in autem, consectetur incidunt officia molestiae eos velit!</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @endif
    @endforeach
</div>

@endsection