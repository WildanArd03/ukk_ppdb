@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">{{ __('SIDE BAR') }}</div>
                <div class="card-body p-0">
                    <ul>
                        <li>
                            <a href="{{ route('home') }}" class="btn">DASHBOARD</a>
                        </li>
                        <li>
                            <a href="{{ route('daftarPeserta') }}" class="btn">DAFTAR PESERTA</a>
                        </li>
                    </ul>
                    
                    
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="card-body">
                    <table width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nis</th>
                                <th>Nama</th>
                                <th>jk</th>
                                <th>Tempat Lahir</th>
                                <th>Tgl Lahir</th>
                                <th>Alamat</th>
                                <th>Asal Sekolah</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($daftars as $daftar)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td> {{ $daftar->nis }} </td>
                                <td> {{ $daftar->nama }} </td>
                                <td> {{ $daftar->jenis_kelamin }} </td>
                                <td> {{ $daftar->tempat_lahir }} </td>
                                <td> {{ $daftar->tanggal_lahir }} </td>
                                <td> {{ $daftar->alamat }} </td>
                                <td> {{ $daftar->asal_sekolah }} </td>
                                <td> {{ $daftar->kelas }} </td>
                                <td> {{ $daftar->jurusan }} </td>
                                <td>
                                    <a href="{{ route('pdf', $daftar->id) }}" target="_blank" class="btn btn-success">PDF</a>
                                    <a href="{{ route('edit', $daftar->id) }}" class="btn btn-primary">EDIT</a>
                                    <a href="{{ route('delete', $daftar->id) }}" class="btn btn-danger">DELETE</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="dflex justify-content-end">
                        {{ $daftars->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
