@extends('auth.master')

@section('content')
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">{{ __('Register') }}</p>

            <form action="{{route('register')}}" method="post">
                @csrf

                <div class="input-group mb-3">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                           placeholder="Full name" name="nama" value="{{ old('name') }}" required autocomplete="name"
                           autofocus>
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-user"></span>
                    </div>
                </div>
                @error('name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror

                <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                           value="{{old('email')}}" placeholder="Email" required autocomplete="email">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror

                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                           value="{{old('alamat')}}" placeholder="alamat" required autocomplete="alamat">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                @error('alamat')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control @error('NIK') is-invalid @enderror" name="NIK"
                           value="{{old('NIK')}}" placeholder="NIK" required autocomplete="NIK">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                @error('NIK')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror

                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control @error('negara') is-invalid @enderror" name="negara"
                           value="{{old('negara')}}" placeholder="negara" required autocomplete="negara">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                @error('negara')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror

                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi"
                           value="{{old('provinsi')}}" placeholder="provinsi" required autocomplete="provinsi">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                @error('provinsi')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control @error('kota') is-invalid @enderror" name="kota"
                           value="{{old('kota')}}" placeholder="kota" required autocomplete="kota">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                @error('kota')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror


                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control @error('Universitas') is-invalid @enderror" name="Universitas"
                           value="{{old('Universitas')}}" placeholder="Universitas" required autocomplete="Universitas">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                @error('Universitas')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror

                
                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control @error('NRP') is-invalid @enderror" name="NRP"
                           value="{{old('NRP')}}" placeholder="NRP" required autocomplete="NRP">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                @error('NRP')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror

                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control @error('telepon') is-invalid @enderror" name="telepon"
                           value="{{old('telepon')}}" placeholder="telepon" required autocomplete="telepon">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                @error('telepon')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror


                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                           placeholder="Password" name="password" required autocomplete="new-password">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-lock"></span>
                    </div>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror

                <div class="input-group mb-3">
                    <input id="password-confirm" type="password" class="form-control" placeholder="Retype password"
                           name="password_confirmation" required autocomplete="new-password">
                    <div class="input-group-append input-group-text">
                        <span class="fa fa-lock"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 offset-8">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Register') }}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            {{--        @if (Route::has('login'))--}}
            {{--        <hr>--}}
            {{--        <p class="mb-0 text-center">--}}
            {{--            <a href="{{ route('login') }}" class="text-center">{{ __('Sudah punya akun? Login sekarang') }}</a>--}}
            {{--        </p>--}}
            {{--        @endif--}}
        </div>
        <!-- /.login-card-body -->
    </div>
@endsection
