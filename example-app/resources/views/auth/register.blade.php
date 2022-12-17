@extends('layouts.app')
@inject('userModel', 'App\Models\User')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="user_first_name" class="col-md-4 col-form-label text-md-end">user_first_name</label>

                                <div class="col-md-6">
                                    <input id="user_first_name" type="text" class="form-control @error('user_first_name') is-invalid @enderror" name="user_first_name" value="{{ old('user_first_name') }}" required autocomplete="user_first_name"
                                           autofocus>

                                    @error('user_first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="user_later_name" class="col-md-4 col-form-label text-md-end">user_later_name</label>

                                <div class="col-md-6">
                                    <input id="user_later_name" type="text" class="form-control @error('user_later_name') is-invalid @enderror" name="user_later_name" value="{{ old('user_later_name') }}" required autocomplete="user_later_name"
                                           autofocus>

                                    @error('user_later_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="age" class="col-md-4 col-form-label text-md-end">age</label>

                                <div class="col-md-6">
                                    <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>

                                    @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="work" class="col-md-4 col-form-label text-md-end">work</label>

                                <div class="col-md-6">

                                    <select class="form-control" id="work" name="work">
                                        @foreach (Config::get('user.is_jobs') as $key => $val)
                                            <option value="{{ $key }}">{{ $val }}</option>
                                        @endforeach
                                    </select>
                                    {{--                                <input id="work" type="text" class="form-control @error('work') is-invalid @enderror" name="work" value="{{ old('work') }}" required autocomplete="work" autofocus>--}}

                                    @error('work')
                                    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="university" class="col-md-4 col-form-label text-md-end">university</label>

                                <div class="col-md-6">
                                    <input id="university" type="text" class="form-control @error('university') is-invalid @enderror" name="university" value="{{ old('university') }}" required autocomplete="university" autofocus>

                                    @error('university')
                                    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="speciality" class="col-md-4 col-form-label text-md-end">speciality</label>

                                <div class="col-md-6">
                                    <input id="speciality" type="text" class="form-control @error('speciality') is-invalid @enderror" name="speciality" value="{{ old('speciality') }}" required autocomplete="speciality" autofocus>

                                    @error('speciality')
                                    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
