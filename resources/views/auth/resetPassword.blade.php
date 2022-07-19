@extends('_layout.base')

@section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header py-3">Reset Password</div>
                        <div class="card-body">

                            <form action="{{ route('password.token.send') }}" method="POST">
                                @csrf
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

                                <div class="form-group row pb-4">
                                    <label for="password" class="col-md-4 col-form-label text-end">New Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>

                                 <div class="form-group row pb-3">
                                    <label for="confirm_password" class="col-md-4 col-form-label text-end">Confirm
                                        Password</label>
                                    <div class="col-md-6">
                                        <input type="text" id="confirm_password" class="form-control"
                                            name="confirm_password" required>
                                        @if ($errors->has('confirm_password'))
                                            <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4 text-end pb-2">
                                    <button type="submit" class="btn btn-primary">
                                        Reset
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
