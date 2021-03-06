@extends('layouts.app')

@section('pageTitle', 'Home')

@section('main-content')
    <div class="container-immagini-box">

        <div class="box-immagini-box">
            <div class="button-immagini-box">CURRENT SERIES</div>
            @foreach($data as $index => $fumetto)
            <div class="box-immagini-immagini-box">
                
                <img class="immagine-immagini-box" src="{{ $fumetto["thumb"] }}" alt="">
                <div class="text-immagini-box"> <a class="a-comic" href="{{ route("comics", ['index' => $index]) }}">{{ $fumetto["series"] }}</a></div>
                
            </div>
            @endforeach
            <div class="button-two-immagini-box">LOAD MORE</div>
            
        </div>
        
    </div>
@endsection