@extends('layout.master')

@section('halaman')

    <h3 class="alert alert-warning">Data Product</h3>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        </thead>

        <tbody>
        @foreach($data as $row)

        <tr>
            <td></td>
            <td>{{ $row->name  }}</td>
            <td>{{ $row->description  }}</td>
            <td>Rp. {{ number_format($row->price, 2, ',','.')  }}</td>
            <td>{{ $row->created_at  }}</td>
            <td> update | delete </td>
        </tr>

        @endforeach
        </tbody>


    </table>

@endsection

