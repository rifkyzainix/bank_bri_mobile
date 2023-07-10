@extends('layouts.app')

@section('content')
    <div class="row" style="background-color:#1f8fe5;">
        <div class="col-12 p-2" style="box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
            <h5 class="text-center text-white">BRI mo</h5>
        </div>
    </div>
    <div class="row" style="padding-bottom: 53%;background-color:#1f8fe5;border-radius: 0 0 45% 45%;">
        <div class="col-12 pt-4">
            <h6 class="text-white text-center">Selamat Datang</h6>
        </div>
    </div>
    <div class="row justify-content-center" style="background-color: #fff;">
        <div class="col-lg-6 col-md-8 col-sm-12 pt-3">
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @elseif(session()->has('errors'))
                <div class="alert alert-danger" role="alert">
                    {{ session('errors') }}
                </div>
            @endif
            <form method="POST" action="{{ route('login.attempt') }}">
                @csrf
                <div class="row justify-content-center" style="background-color: #fff;padding-bottom: 10%;">
                    <div  class="col-lg-6 col-md-8 col-sm-12 px-3">
                        <div class="form-group">
                            <label><b style="color: #05539b;font-weight: bold;">Login</b></label>
                            <input type="email" class="form-control mt-3" name="email" placeholder="example@mail.com" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <a class="d-flex justify-content-end" href="{{ route('register.index') }}">Register</a>
                    </div>
                </div>
                <div class="row" style="background-color: #fff;">
                    <div class="col-12">
                        <button type="submit" class="btn w-100 text-white py-2" style="background-color: #1f8fe5;margin-top: 10%;">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
