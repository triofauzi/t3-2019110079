@extends('layouts.master')
@section('title', 'Books List')
@push('css_after')
    <style>
        td {
            max-width: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
@endpush
@section('content')
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Book List</h2>
                    </div>
                    <div align="right" class="col-sm-5">
                        <a href="{{ route('books.create') }}" class="btn btn-success">
                            <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
                            <span>Add New Book</span>
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Halaman</th>
                        <th>Penerbit</th>
                        <th>Penulis</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($books as $book)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->judul }}</td>
                            <td>{{ $book->kategori }}</td>
                            <td>{{ $book->halaman }}</td>
                            <td>{{ $book->penerbit }}</td>
                            <td>{{ $book->author->penulis }}</td>
                            {{-- <td>{{ $book->authors_id }}</td> --}}

                            {{-- <td style="width: 40%">{{ $book->description }}</td> --}}
                            <td><a href="{{ route('books.edit', $book->id) }}">
                                    <button class="btn btn-warning btn-sm">Edit</button></a></td>
                            <td>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST">

                                    <button class="btn btn-danger btn-sm"
                                        onClick="return confirm('Yakin mau dihapus?')">Hapus</button>
                                        @method('DELETE')
                                        @csrf

                                </form>
                            </td>


                        </tr>
                    @empty
                        <tr>
                            <td align="center" colspan="6">No data yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <br>
    {{-- <td align="right"><a href="{{ route('books.create', $book->id) }}">
            <button class="btn btn-primary btn-sm">Tambah</button></a></td>
    <td> --}}
    @endsection
