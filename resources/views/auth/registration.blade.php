@extends('_layout.base')

@section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header py-3">Register</div>
                        <div class="card-body">

                            <form action="{{ route('register.post') }}" method="POST">
                                @csrf
                                <div class="form-group row pb-3">
                                    <label for="first_name" class="col-md-4 col-form-label text-end">
                                        First Name
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" id="first_name" class="form-control" name="first_name"
                                            required autofocus>
                                        @if ($errors->has('first_name'))
                                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row pb-3">
                                    <label for="last_name" class="col-md-4 col-form-label text-end">Last Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="last_name" class="form-control" name="last_name"
                                            autofocus>
                                        @if ($errors->has('last_name'))
                                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row pb-3">
                                    <label for="email_address" class="col-md-4 col-form-label text-end">E-Mail
                                        Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email"
                                            required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row pb-3">
                                    <label for="password" class="col-md-4 col-form-label text-end">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row pb-2">
                                    <label for="confirm_password" class="col-md-4 col-form-label text-end">Confirm
                                        Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="confirm_password" class="form-control"
                                            name="confirm_password" required>
                                        @if ($errors->has('confirm_password'))
                                            <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row pb-3">
                                    <div class="col-md-4 col-form-label"></div>
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4 text-end pb-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
