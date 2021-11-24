@extends('layouts.main')
@section('content')
<div class="container layer2">
    
        <h1 class="mb-3" style="font-weight:bold;">{{ $woodpedia->title }}</h1>
        <img src="{{ asset('storage/' . $woodpedia->image) }}" alt="{{ $woodpedia->title }}" class="img-fluid">
        <article>
            {!! $woodpedia->body !!}
        </article>
        <a href="{{ $woodpedia->link }}" class="d-block mt-3 text-decoration-none"> Baca selanjutnya</a>
   
</div>
@endsection