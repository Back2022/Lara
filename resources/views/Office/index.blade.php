<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.classicmodels')


@section('title', 'Page Title')
@section('sidebar')@@parent
 
<p>This is appended to the master sidebar.</p>
<p>The current UNIX timestamp is {{ time() }}.</p>
<p>Danasnji datum uz pomoć Carbon clase: {{ Carbon\Carbon::now() }}.{{1 + 1}}</p>
@include('user.status', ['status' => 'complete'])

<?php $message="pozdrav iz Offica! žvačemo krafne" ?>
<!-- fiksni parametar bez dvotocke, varijabla s dvotočkom -->
<x-alert type="error" :message="$message"/>

@endsection
@section('content')    <p>This is my body content.</p>


    
@foreach($Offices as $o)    
<i class='fas fa-building'></i> 
<a href="/Office/{{ $o->officeCode}}    ">{{ $o->city}}    </a> 
<div class="bg-danger d-inline-block">{{ $o->addressLine1}}  
    
Zaposlenici: <x-zaposlenici :officeId="$o->officeCode"/>

<form action="{{ route('Office.destroy',$o->officeCode) }}" method="Post" class="form-inline">
<a class="btn btn-primary" href="{{ route('Office.edit',$o->officeCode) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>
<br> 
@endforeach    
<br>
{!! $Offices->links() !!}    
<!-- https://laravel.com/docs/9.x/pagination#paginator-instance-methods -->
<br>
Broj ureda na ovoj stranici {{ $Offices->count() }}     <br>
Trenutna stranica {{ $Offices->currentPage() }}     <br>
Broj ureda po svakoj stranici {{ $Offices->perPage() }}     <br>
Ukupan broj ureda {{ $Offices->total() }}     <br>
Page name: {{ $Offices->getPageName() }} <br>

<hr>
<a href="https://laravel.com/docs/9.x/pagination#paginator-instance-methods">Ovdje pogledaj metode paginacije</a>
<!-- comment -->
<a href="https://dev.to/dendihandian/adding-font-awesome-to-laravel-the-laravel-mix-way-4ndj">KAko dodati Ikone FONT AWESOME</a>
    {{-- dd($Offices) --}}
@endsection
