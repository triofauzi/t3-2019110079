@extends('layouts.master')
@section('title', 'authors List')
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
                        <h2>Penulis List</h2>
                    </div>
                    <div align="right" class="col-sm-5">
                        {{-- <a href="{{ route('authors.createauthor') }}" class="btn btn-success">
                            <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
                            <span>Add New Penulis</span>
                        </a> --}}
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Penulis</th>
                        <th>Judul Buku</th>
                        <th width="15%">Jumlah Buku </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $authors as $author)
                    <tr>
                        <td>{{$author->penulis}}</td>
                        <td>
                             ($author->relationToBook as $book )
                                {{$book->judul}}


                        </td>
                        {{-- <td class="text-center">{{$author->relationToBook ->count}}</td> --}}
                    </tr>
                    @empty

                    @endforelse


                        <tr>
                            <td align="center" colspan="6">No data yet.</td>
                        </tr>

                </tbody>
            </table>
        </div>
    </div>
    <br>
    @endsection
