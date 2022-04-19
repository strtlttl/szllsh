@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>
                CégLista
            </h2>
        </div>
    </div>
<div>
<div class="row" align="left">
    <div class="pull-right">
       <a class="btn btn-success" href="{{route('company.create')}}">New</a>
    </div>       
</div>

@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>
        {{ $message }}
    </p>
</div>
@endif

<table class="table table-striped">
<tr>
    <th>companyId</th>
    <th>companyName</th>
    <th>country</th>
    <th>city</th>
    <th>companyFoundationDate</th>
    <th>activity</th>
    <th>Option</th>
</tr>
@foreach($companies as $company)
<tr>
    <td>{{ $company->companyId }}</td>
    <td>{{ $company->companyName }}</td>
    <td>{{ $company->country }}</td>
    <td>{{ $company->city }}</td>
    <td>{{ $company->companyFoundationDate }}</td>
    <td>{{ $company->activity }}</td>
    <td>
        <form method="POST" action="{{ route('company.destroy',$company->companyId) }}">
            <a class="btn btn-primary" href="{{ route('company.edit',$company->companyId) }}">&#9998;</a>
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type='submit' class="btn btn-danger delete-user" value="&#128465;">
        </form>
    </td>
</tr>
@endforeach
</table>
@stop