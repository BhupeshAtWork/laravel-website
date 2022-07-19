@extends('_layout.base')

@section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header py-3">Reset Password</div>
                        <div class="card-body">

                            <form method="POST" action="{{ route('password.token.resend') }}">
                                @csrf
                                <h4>Token sent</h4>
                                <p>Reset password link has been sent to your registered email address, please follow the link to reset your password.</p>

                                <input type="hidden" name="email" value={{ $data['email'] }}>

                                <p>Didn't recieved the mail, resend using below resend button.</p>
                                <div class="col-md-6 offset-md-4 text-center pb-2">
                                     <button type="submit" class="btn btn-primary">
                                         Resend
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
