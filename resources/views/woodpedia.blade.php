@extends('layouts.main')
@section('content')
<div class="container layer2">
    <h1 class="mt-4">Woodpedia</h1>
    <h2>Edukasi Pengolahan limbah kayu industri</h2>

    <div class="row mt-5 w-100">
        @foreach($woodpedias as $woodpedia)
            <div class="col-lg-6">
                <div class="card mb-2 mt-2 card2">
                    <a href="/woodpedia/{{ $woodpedia->slug }}" class="text-decoration-none text-muted">       
                        <div class="row">
                            <div class="col-8">
                                <div class="card-body">
                                    <h1 class="card-title ">{{ $woodpedia->title }}</h1>
                                    <p>{{ $woodpedia->excerpt }}</p>
                                </div>
                            </div>
                            <div class="col-4 align-self-center">
                                <img class="img-fluid " src="{{ asset('storage/' . $woodpedia->image) }}" alt="" style="height:85px; width: 85px; border-radius: 10%;">
                            </div>     
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection