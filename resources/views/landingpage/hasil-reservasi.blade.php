@extends('landingpage.layout')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1>{{ $showData->name }}</h1>
    <h1>{{ $showData->no_hp }}</h1>
    <h1>{{ $showData->reservation_date }}</h1>
    <h1>{{ $showData->reservation_time }}</h1>
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endSection
