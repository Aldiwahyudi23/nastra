@extends('layouts.Frontend.app')
@section('title')
    Nastra
@endsection

@section('content')
    
    {{-- Slider --}}
    @section('slider')
        @include('frontend.content.slider')
    @endsection

    {{-- About --}}
    @section('about')
        @include('frontend.content.about')
    @endsection

    {{-- Video --}}
    @section('video')
        @include('frontend.content.video')
    @endsection

    {{-- ketua --}}
    @section('ketua')
        @include('frontend.content.ketua')
    @endsection

     {{-- Artikel & Event --}}
     @section('artikelEvent')
        @include('frontend.content.artikelEvent')
    @endsection
@endsection