@extends('layouts.main-layout')

@section('content')
  <h1>
    {{ $location->id }}
    {{ $location->address }}
  </h1>
  <h2>
    Number of employees: {{ $location->number_of_employees }}
  </h2>

@endsection
