<!-- Stored in resources/views/child.blade.php -->
<!-- //TODO Employee view threba prilagoditi sa OFFICE modela !!! -->
@extends('layouts.classicmodels')
@section('title', 'Edit')
@section('sidebar')@@parent<p>This is appended to the master sidebar.</p>
@endsection
@section('content')        
<a href="{{ URL::route('Office.index') }}        ">
    <i class="icon-dashboard"></i>
    <span class="menu-text"> Vrati me na listu ureda </span>
</a>

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Kreiraj novi ured</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Office.index') }}        "> Back</a>
            </div>
        </div>
    </div>
@if(session('status'))        
    <div class="alert alert-success mb-1 mt-1">
{{ session('status') }}        
    </div>
@endif    
    @if ($errors->any())  <!-- $request->validate -->
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
@endif
     @if ($errors->post->any())  <!-- Ukoliko koristimo imenovane grupe grešaka, u uvom slucaju $request->validateWithBag('post' -->
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->post->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    {{dd($errors->post->all())}}
@endif  

    <!--  
    "officeCode" => "1"
    "city" => "San Francisco"
    "phone" => "+1 650 219 4782"
    "addressLine1" => "100 Market Street"
    "addressLine2" => "Suite 300"
    "state" => "CA"
    "country" => "USA"
    "postalCode" => "94080"
    "territory" => "NA"
    "created_at" => "2022-02-23 17:11:57"
    "updated_at" => "2022-02-23 17:11:57"
-->


    <form action="{{ route('Office.update',$office->officeCode) }}" method="POST" enctype="multipart/form-data">
@csrf    
@method('PUT')        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>officeCode:</strong>
                    <input type="text" name="officeCode" class="form-control" placeholder="officeCode" value="{{ $office->officeCode }}">
@error('officeCode')        
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}        </div>
@enderror    </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>city:</strong>
                    <input type="text" name="city" class="form-control" placeholder="city" value="{{ $office->city }}">
@error('city')        
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}        </div>
@enderror    </div>
            </div>
            <!-- input blok start -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>phone:</strong>
                    <input type="text" name="phone" class="form-control" placeholder="phone" value="{{ $office->phone }}">
@error('phone')        
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}        </div>
@enderror    </div>
            </div>
            <!-- input blok end -->


            <!-- input blok start -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>addressLine1:</strong>
  <input type="text" name="addressLine1" class="form-control" placeholder="addressLine1" value="{{ $office->addressLine1 }}">
@error('addressLine1')        
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}        </div>
@enderror    </div>
            </div>
            <!-- input blok end -->
            <!-- input blok start -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>addressLine2:</strong>
  <input type="text" name="addressLine2" class="form-control" placeholder="addressLine2" value="{{ $office->addressLine2 }}">
@error('addressLine2')        
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}        </div>
@enderror    </div>
            </div>
            <!-- input blok end -->
            <!-- input blok start -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>state:</strong>
                    <input type="text" name="state" class="form-control" placeholder="state" value="{{ $office->state }}">
@error('state')        
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}        </div>
@enderror    </div>
            </div>
            <!-- input blok end -->
            <!-- input blok start -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>country:</strong>
                    <input type="text" name="country" class="form-control" placeholder="country" value="{{ $office->country }}">
@error('country')        
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}        </div>
@enderror    </div>
            </div>
            <!-- input blok end -->
            <!-- input blok start -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>postalCode:</strong>
                    <input type="text" name="postalCode" class="form-control" placeholder="postalCode" value="{{ $office->postalCode }}">
@error('postalCode')        
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}        </div>
@enderror    </div>
            </div>
            <!-- input blok end -->
            <!-- input blok start -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>territory:</strong>
                    <input type="text" name="territory" class="form-control" placeholder="territory" value="{{ $office->territory }}">
@error('territory')        
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}        </div>
@enderror</div>
            </div>
            <!-- input blok end -->  


            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
    </form>


@endsection

