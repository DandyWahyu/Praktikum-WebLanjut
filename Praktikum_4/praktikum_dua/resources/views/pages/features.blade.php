@extends('layouts.app')

@section('titlePage', 'Features')

@section('slider')
<div class="tm-banner tm-bn-3">
    <div class="container">
        <div class="row">
            <div class="tm-banner-text">
                <div class="tm-banner-text-inner">
                    <h1 class="tm-banner-title">Creative Design Agency</h1>
                    <p class="tm-banner-description">Lorem Ipsum Proin Gravida</p>
                </div>	
            </div>			
        </div>			
    </div>			
</div>	
@endsection

@section('content')
<div class="row">
    <div class="boxes-container">
        <div class="boxes">
            @foreach ($features as $feature)
            <div class="box">
                <div class="tm-block-1 tm-text-block content">
                    <i class="fa fa-align-left fa-3x"></i>
                    <h3 class="text-uppercase my-2">{{$feature->name}}</h3>
                    <p class="text-justify tm-gray-text">{{$feature->description}}</p>
                </div>	
            </div>
            @endforeach
        </div>
    </div>		
</div>
@endsection