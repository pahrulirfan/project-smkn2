@extends('layout.master')

@section('halaman')

    <h3 class="alert alert-warning">Data Category</h3>

    <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        </thead>

        <tbody>
        @foreach($data as $row)

        <tr>
            <td>{{ $loop->iteration  }}</td>
            <td>{{ $row->name  }}</td>
            <td>{{ $row->created_at  }}</td>
            <td>
{{--                <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Del</a>--}}
{{--                <a href="#" class="btn btn-warning btn-sm">Edit</a>--}}
            </td>
        </tr>

        @endforeach
        </tbody>


    </table>

@endsection

