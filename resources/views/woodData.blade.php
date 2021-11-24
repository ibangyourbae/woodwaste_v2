@extends('layouts.main')
@section('content')
<div class="container layer1">
    <div class="card mt-5 mb-5">
        <h1 class="card-tittle">Wood Data</h1>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="card card2 mb-2 mt-4">
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
                <div class="col-lg-4 col-sm-12">
                    <div class="card card2 mb-2 mt-4">
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
                <div class="col-lg-4 col-sm-12">
                    <div class="card card2 mb-2 mt-4">
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
            <div class="row mt-5">

            </div>
        </div>
    </div>


</div>
@endsection