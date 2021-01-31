@extends('layouts.main-layout')

@section('content')
  <h1>Trademarks</h1>
  <ul>
    @foreach($trademarks as $trademark)
      <li>
        <a href="{{route('trademark-show', $trademark -> id)}}">
          {{ $trademark->name }}
        </a>
      </li>
    @endforeach
  </ul>
@endsection
