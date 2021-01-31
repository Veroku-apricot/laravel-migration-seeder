@extends('layouts.main-layout')

@section('content')
  <h1>Locations</h1>
  <ul>
    @foreach($locations as $location)
      <li>
        <a href="{{route('location-show', $location -> id)}}">
          {{ $location->address }}
        </a>
      </li>
    @endforeach
  </ul>
@endsection
