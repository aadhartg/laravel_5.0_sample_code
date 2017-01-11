@extends('layouts/innerapp')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-md-offset-2 login-box">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <!-- <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul> -->
                    </div>
                    @endif

                    @if(Session::has('messageAuth'))
                    <div class="alert alert-danger">
                        <p >{{ Session::get('messageAuth') }}</p>
                    </div>
                    @endif
                    @if(Session::has('message'))
                    <div class="alert alert-success">
                        <p >{{ Session::get('message') }}</p>
                    </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                @if($errors->any() && $errors->has('email'))
                                <h4 class="error">{{$errors->first('email')}}</h4>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password">
                                @if($errors->any() && $errors->has('password'))
                                <h4 class="error">{{$errors->first('password')}}</h4>
                                @endif
                            </div>
                        </div>

                        <div class="form-group remember-optn">
                            <div class="col-md-12 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group login-btn-box">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Login</button>

                                <a class="btn btn-link" href="{{ url('/auth/forgotpassword') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

