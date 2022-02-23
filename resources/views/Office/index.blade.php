<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.classicmodels')
<!-- //TODO ne radi layout -->

@section('title', 'Page Title')
@section('sidebar')@@parent
 
<p>This is appended to the master sidebar.</p>
@endsection
@section('content')    <p>This is my body content.</p>

    @foreach($Offices as $o)    
<i class='fas fa-building'></i> <a href="/Office/{{ $o->officeCode}}    ">{{ $o->city}}    </a> <span class="bg-danger">{{ $o->addressLine1}}    </span><br> 
@endforeach    

{!! $Offices->links() !!}    
<!-- https://laravel.com/docs/9.x/pagination#paginator-instance-methods -->

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
