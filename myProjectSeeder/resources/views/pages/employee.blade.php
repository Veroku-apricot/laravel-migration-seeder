@extends('layouts.main-layout')

@section('content')
  <h1>
    {{ $employee->id }}
    {{ $employee->name }}
    {{ $employee->lastname }}
    {{ $employee->date_of_admission }}
  </h1>

@endsection
