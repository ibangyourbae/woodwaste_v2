@extends('layouts.main')
@section('content')
    <!-- content -->

    <div class="container layer1">
        <div class="container layer2">
            <div class="container layer3">
                <div class="row mt-5">
                    <div class="card  card1" style="background-image: url('img/Group_94.png');">
                        <h1 class="card-title mt-5" style="font-size: 30px;">Halo, selamat datang {{ auth()->user()->name }}</h1>
                        <h2 class="subtitle"> Kontribusi dalam pengolahan limbah industri kayu sekarang</h2>
                    </div>
                </div>
                <img class="img-fluid mt-5 mb-3" width="100%" src="../img/Line 4.png" alt="">

            </div>
            <h1>Data persebaran limbah industri kayu</h1>
            <h2>28 Oktober 2021 dari KONAN</h2>
            <div class="row mt-5">
                <div class="col-12">

                    <div class="card card2 mb-2 mt-2">
                        <div class="row">
                            <div class="col-8">
                                <div class="card-body ">
                                    <h1 class="card-title title1">{{ $wooddata[1]->jumlah }} <sub>kilogram</sub> </h1>
                                    <h2 style="text-align: center; font-weight: bold;">{{ $wooddata[1]->title }}</h2>

                                </div>
                            </div>
                            <div class="col-4 align-self-center">
                                <img class="img-fluid " src="../img/Group 92.png" alt="" style="height:85px; width: 85px;">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">

                    <div class="card card2 mb-2 mt-2">
                        <div class="row">
                            <div class="col-8">
                                <div class="card-body ">
                                    <h1 class="card-title title2">{{ $wooddata[0]->jumlah }} <sub>kilogram</sub> </h1>
                                    <h2 style="text-align: center; font-weight: bold;">{{ $wooddata[0]->title }}</h2>

                                </div>
                            </div>
                            <div class="col-4 align-self-center">
                                <img class="img-fluid " src="../img/Group 91.png" alt="" style="height:85px; width: 85px;">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">

                    <div class="card card2 mb-2 mt-2">
                        <div class="row">
                            <div class="col-8">
                                <div class="card-body ">
                                    <h1 class="card-title title3">{{ $wooddata[2]->jumlah }} <sub>kilogram</sub> </h1>
                                    <h2 style="text-align: center; font-weight: bold;">{{ $wooddata[2]->title }}</h2>

                                </div>
                            </div>
                            <div class="col-4 align-self-center">
                                <img class="img-fluid " src="../img/Group 93.png" alt="" style="height:85px; width: 85px;">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

                <img class="img-fluid mt-5 mb-3" width="100%" src="img/Line 4.png" alt="">
                <h1>Woodpedia</h1>
                <h2>Edukasi Pengolahan limbah kayu industri</h2>

                <div class="row mt-5 w-100">
                    @foreach($woodpedia as $dataWoodpedia)
                        <a href="/woodpedia/{{ $dataWoodpedia->slug }}" class="text-decoration-none text-muted">
                            <div class="col-lg-6">
                                <div class="card mb-2 mt-2 card2">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="card-body">
                                                <h1 class="card-title ">{{ $dataWoodpedia->title }}</h1>
                                                <p>{{ $dataWoodpedia->excerpt }}</p>

                                            </div>
                                        </div>
                                        <div class="col-4 align-self-center">
                                            <img class="img-fluid " src="{{ asset('storage/' . $dataWoodpedia->image) }}" alt="" style="height:85px; width: 85px; border-radius: 10%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <img class="img-fluid mt-5 mb-3" width="100%" src="img/Line 4.png" alt="">
                <h1>Pranala Penting</h1>

                <div class="row mt-5 w-100">
                    @foreach($pranala as $dataPranala)
                    <div class="col-lg-6">
                        <a href="{{ $dataPranala->map }}" class="text-decoration-none">
                            <div class="card mb-2 mt-2 card3">
                                <div class="card-body">
                                    <h1 class="card-title text-center">{{ $dataPranala->name }}</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
            </div>

            </div>
            <!-- end content -->
@endsection
           