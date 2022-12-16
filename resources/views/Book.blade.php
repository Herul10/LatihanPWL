@extends('adminlte::page')

@section('title', 'Home page')

@section('content_header')
    <h1>Data Buku</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">{{__('Pengelolaan Buku') }}</div>
        <div class="card-body">
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-container">
                        <th>No</th>
                        <th>JUDUL</th>
                        <th>PENULIS</th>
                        <th>TAHUN</th>
                        <th>PENERBIT</th>
                        <th>COVER</th>
                        <th>AKSI</th>
                    </th>
                </thead>
            </tbody>
            @php $no=1; @endphp
            @foreach($books as $book)
            <tr>
                <td>{{no++}}</td>
                <td>{{$book->judul}}</td>
                <td>{{$book->penulis}}</td>
                <td>{{$book->tahun}}</td>
                <td>{{$book->penerbit}}</td>
                <td>
                @if($book->cover !== null)
                <img src="{{ asset('stronge/cover_buku/'.$book->cover) }}" width=100px"/>
                @else
                    <div Gambar="" tidak="" tersedia=""></div>
                @endif
                </td>
                <td><td/>
                </tr>
                @endforeach
            </body>
            </table>
        </div>
    </div>
</div>
@endsection