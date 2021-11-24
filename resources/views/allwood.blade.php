@extends('layouts.main')
@section('content')
<div class="container layer1">
    <img class="img-fluid mt-5 mb-3" width="100%" src="../assets/images/Line 4.png" alt="">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <h1 style="font-weight: bold;">All Wood</h1>
    <h1>Semua kategori limbah industri kayu</h1>
    @auth 
        @foreach($stores as $store)
           @if($store->user_id == Auth()->user()->id)
                <div class="row mt-5">
                    <div class="d-grid gap-2 d-flex justify-content-end ">
                        <a href="/allwood/allwood-my-store/{{ $store->slug }}" class="btn " type="button" style="background-color:#B3DAD5;">Toko Saya</a>           
                    </div>
                </div>
                @break
           @endif    
        @endforeach
        @if($store->user_id != Auth()->user()->id)
            <div class="row mt-5">
                <div class="d-grid gap-2 d-flex justify-content-end ">
                    <a href="/allwood-create" class="btn " type="button" style="background-color:#B3DAD5;">Tambah Toko</a>           
                </div>
            </div>
        @endif
                
    @endauth

    <center>
        <div class="row mt-5">
            @foreach($stores as $store)
                <div class="col-6">
                    <a href="/allwood/{{ $store->slug }}" class="text-decoration-none text-muted">
                        @if($store->image)
                            <div class="card mb-2 mt-2 card2">
                                <div class="card-body" style="background-image:url({{ asset('storage/' . $store->image) }});">
                                </div>
                                <div class="card-footer">
                                    <h1>{{ $store->store_name }}</h1>
                                    <h2>TERSEDIA</h2>
                                </div>
                            </div>
                        @else
                            <div class="card mb-2 mt-2 card2">
                                <div class="card-body" style="background-image:url(https://source.unsplash.com/1200x400?store);">
                                </div>
                                <div class="card-footer">
                                    <h1>{{ $store->store_name }}</h1>
                                    <h2>TERSEDIA</h2>
                                </div>
                            </div>
                        @endif
                    </a>
                </div>
            @endforeach
        </div>
    </center>
</div>
{{-- <!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @foreach($stores as $store)
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $store->store_name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="img-fluid" src="https://source.unsplash.com/1200x400?wood" alt="">
                <div class="row">
                    <div class="col-2">
                        <h2>Stok </h2>
                    </div>
                    <div class="col-10">
                        <h2>: {{ $wood->stok }} </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <h2>No.hp</h2>
                    </div>
                    <div class="col-10">
                        <a href="https://api.whatsapp.com/send?phone={{ $wood->no_hp }}" style="text-decoration:none">
                            <h2>: {{ $wood->no_hp }}</h2>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <p>Deskripsi </p>
                    </div>
                    <div class="col-10">
                        <p> : Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, numquam. Aut quidem ipsum reiciendis laborum voluptatum pariatur neque quia dolorum, fugit expedita, in autem, consectetur incidunt officia molestiae eos velit!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <p>Alamat</p>
                    </div>
                    <div class="col-10">
                        <p>: {{ $wood->alamat }}</p>
                    </div>
                </div>

            </div>

        </div>

    </div>
    @endforeach
</div> --}}




@endsection