@extends('glavni')

@section('headsekcija')
  @include('partials.head')
@endsection

@section('sadrzajstranice')
  <h1>{{$naslov}}</h1>
    <h3>{{$tekst}}</h3>
@endsection
