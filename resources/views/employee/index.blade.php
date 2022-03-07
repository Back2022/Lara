<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.classicmodels')
<!-- //TODO Employee view threba prilagoditi sa OFFICE modela !!! -->

@section('title', 'Page Title')
@section('sidebar')@@parent
 
<p>This is appended to the master sidebar.</p>
@endsection
@section('content')    <p>This is my body content.</p>

<br>
   
<!-- https://laravel.com/docs/9.x/pagination#paginator-instance-methods -->
<br>


<hr>
<a href="https://laravel.com/docs/9.x/pagination#paginator-instance-methods">Ovdje pogledaj metode paginacije</a>
<!-- comment -->
<a href="https://dev.to/dendihandian/adding-font-awesome-to-laravel-the-laravel-mix-way-4ndj">KAko dodati Ikone FONT AWESOME</a>
    {{-- dd($Offices) --}}
@endsection
