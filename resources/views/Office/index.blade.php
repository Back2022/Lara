<!-- Stored in resources/views/child.blade.php -->
 
@extends('layouts.classic_models')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @@parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
    <p>This is my body content.</p>
    @foreach ($Offices as $o)
    <p>Office:  <a href="/Office/{{ $o->officeCode}}">{{ $o->city}}</a> <span class="bg-danger">{{ $o->addressLine1}}</span> </p>
@endforeach
    {{ dd($Offices)}}
@endsection
