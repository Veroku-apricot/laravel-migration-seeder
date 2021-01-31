@extends('layouts.main-layout')

@section('content')
  <h1>
    {{ $trademark->id }}
    {{ $trademark->name }}
    {{ $trademark->number_of_locations }} offices
  </h1>

@endsection
