@extends('layout.main')

@section('wtitle', 'Catatan Perjalanan')
@section('dashtitle', 'Catatan Perjalanan')

@section('content')
<div class="container-fluid">

    {{-- <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Datatable</a></li>
        </ol>
    </div> --}}
    <!-- row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Tabel Data Perjalanan</h4>
                    <a class="btn btn-success" href="{{route ('addcatatan')}}">Tambah Data Baru</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama User</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Lokasi</th>
                                    <th>Suhu</th>
                                    <th>Updated at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($data as $index => $row)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$row->user_id}}</td>
                                    <td>{{$row->tanggal}}</td>
                                    <td>{{$row->jam}}</td>
                                    <td>{{$row->lokasi}}</td>
                                    <td>{{$row->suhu}}°C</td>
                                    <td>{{$row->updated_at}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="/catatan/editcatatan/{{$row->id}}"
                                                class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                    class="fas fa-pencil-alt"></i></a>
                                            <a href="/deletecatatan/{{$row->id}}"
                                                class="btn btn-danger shadow btn-xs sharp"><i
                                                    class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
