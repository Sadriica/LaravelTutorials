@extends('layouts.app')

@section('email', $email)

@section('address', $address)

@section('phone', $phone)

@section('content')

<div class="container">

<div class="row">

<div class="col-lg-4 ms-auto">

<p class="lead">{{ $email }}</p>

</div>

<div class="col-lg-4 me-auto">

<p class="lead">{{ $address }}</p>

</div>

<div class="col-lg-4 ms-auto">

<p class="lead">{{ $phone }}</p>

</div>

</div>

</div>

@endsection