<!-- Stored in resources/views/child.blade.php -->
 
@extends('layouts.classic_models')
 
@section('title', 'Show')
 
@section('sidebar')
    @@parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
<a href="{{ URL::route('Office.index') }}">
     <i class="icon-dashboard"></i>
     <span class="menu-text"> Vrati me na listu ureda </span>
</a>
    
    <p>Office detalji</p>

<dl>
    <dt>Kod</dt>
    <dd>{{$office->officeCode}}</dd>

    <dt>City</dt>
    <dd>{{$office->city}}</dd>

    <dt>Adresa</dt>
    <dd>{{$office->addressLine1}}</dd>
</dl>
    <hr>
    

    
    {{ dd($office)}}
@endsection
