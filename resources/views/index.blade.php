@extends('layout')

@section('title')
@section('header')

@section('content')

<main>
    @yield('content')
        <table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>nama pemain</th>
              <th>no punggung</th>
              <th>posisi</th>
          </thead>
        <tbody class="table">
        @foreach($data as $list)
        <tr>
            <td>{{$list->id}}</td>
            <td>{{$list->nama_pemain}}</td>
            <td>{{$list->no_punggung}}</td>
            <td>{{$list->posisi}}</td>
        </tr>
        @endforeach
        </tbody>
        </table>
  </main>
@endsection
