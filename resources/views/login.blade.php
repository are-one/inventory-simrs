@extends('layouts.master-login')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
                <a href="/" class="d-flex align-items-center w-auto">
                    {{-- <img src="{{ asset('assets') }}/img/icon-smc-header.png" class="img-fluid" style="width: 150px" alt=""> --}}
                </a>
            </div><!-- End Logo -->

            <div class="card mb-3 shadow-lg">

                <div class="card-body">

                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Masuk Ke Aplikasi</h5>
                        <p class="text-center small">Silahkan masukkan username & password </p>
                    </div>

                    <form method="POST" class="row g-3 needs-validation" action="{{ route('login') }}" novalidate>
                        @csrf
                        <div class="col-12">
                            <label for="yourUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                                       value="{{ old('email') }}" id="yourUsername" required>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="yourPassword" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="yourPassword" required>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Masuk</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
