@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('SIDE BAR') }}</div>
                <div class="card-body p-0">
                    <a href="{{ route('daftarPeserta') }}" class="btn">DAFTAR PESERTA</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="card-body">
                    <h5>Peserta PPDB</h5>
                    <p>{{ $daftars }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
