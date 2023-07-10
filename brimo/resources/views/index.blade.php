@extends('layouts.app')

@section('content')
    <div class="row" style="background-color:#1578c9;">
        <div class="col-11 d-flex justify-content-center">
            <p class="text-white text-center">BRI mo</p>
        </div>
        <div class="col-1 d-flex justify-content-end">
            <a class="text-white" href="{{ route('logout') }}">Logout</a>
        </div>
    </div>
    <div class="row d-flex justify-content-center" style="background-color:#1578c9;">
        <div class="col-lg-6 col-md-8 col-sm-12 text-white pl-5 pr-5 pb-5 pt-0">
            <p class="text-center">Saldo Rekening Utama</p>
            <p class="text-center">{{ $data['account']->number }}</p>
            <p class="text-center">Rp. {{ $data['account']->amount }}</p>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class=" col-lg-6 col-md-8 col-sm-12">
            <div class="row">
                <div class="col-3 p-4">
                    <a href="{{ route('transfer.index') }}">Transfer</a>
                </div>
                <div class="col-3 p-4">
                    <a href="{{ route('withdraw.create') }}">Tarik Tunai</a>
                </div>
                <div class="col-3 p-4">
                    <a href="{{ route('mutation.index') }}">Mutasi</a>
                </div>
                <div class="col-3 p-4">
                    <a href="{{ route('pulsa.create') }}">Pulsa</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-4 text-center">
        <div class="col-6 p-0">
            <div class="card">
                <div class="card-body">
                    <p>Pemasukan</p>
                    <b>Rp.{{ $data['pemasukan'] }}</b>
                </div>
            </div>
        </div>
        <div class="col-6 p-0">
            <div class="card">
                <div class="card-body">
                    <p>Pengeluaran</p>
                    <b>Rp. {{ $data['pengeluaran'] }}</b>
                </div>
            </div>
        </div>
    </div>
@endsection
