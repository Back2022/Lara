<!-- Stored in resources/views/child.blade.php -->
 <!-- //TODO Employee view threba prilagoditi sa OFFICE modela !!! -->
@extends('layouts.classicmodels')
 
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
    
    <p>Zaposlenik detalji</p>

<dl>
    <dt>Last Name</dt>
    <dd>{{$emp->lastName}}</dd>
    <dt>First Name</dt>
    <dd>{{$emp->firstName}}</dd>
        <dt>email</dt>
    <dd>{{$emp->email}}</dd>
        <dt>jobTitle</dt>
    <dd>{{$emp->jobTitle}}</dd>
</dl>
    <hr>
    

    

@endsection
<!-- 
 App\Models\Employee {#4538
         employeeNumber: 1504,
         lastName: "Jones",
         firstName: "Barry",
         extension: "x102",
         email: "bjones(at)classicmodelcars.com",
         officeCode: "7",
         reportsTo: 1102,
         jobTitle: "Sales Rep",
         created_at: null,
         updated_at: null,
       },

-->