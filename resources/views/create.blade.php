@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>
                Új hozzáadása
            </h2>
        </div>
        <div class="pull-right">

        </div>       
    </div>
<div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <form method="POST" action="{{ route('company.store') }}">
    @csrf
    <div class="col-sm-4">
        <div class="left">
            <strong>companyName</strong>
            <input type="text" name="companyName" class="form-control" placeholder="companyName">
        </div>
        <div class="left">
            <strong>country</strong>
            <input type="text" name="country" class="form-control" placeholder="country">
        </div>
        <div class="left">
            <strong>city</strong>
            <input type="text" name="city" class="form-control" placeholder="city">
        </div>
        <div class="left">
            <strong>companyFoundationDate</strong>
            <input type="date" name="companyFoundationDate" class="form-control" placeholder="companyFoundationDate">
        </div>
        <div class="left">
            <strong>activity</strong>
            <input type="text" name="activity" class="form-control" placeholder="activity">
        </div>
 
        <div class="left">
            <input type="submit" name="name" class="btn btn-primary">
            <a href="/"> Vissza </a>
        </div>
   </div>
</form>
</div>
@stop