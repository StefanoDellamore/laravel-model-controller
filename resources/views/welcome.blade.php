@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    Laravel Model Controller
</h1>

<h2>
    Ciao {{ $firstName }} {{ $lastName }}
</h2>
@endsection
