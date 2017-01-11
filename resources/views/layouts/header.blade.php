<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Quickmerch</title>

        <link href="{{ url('/lib/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/lib/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ url('/lib/css/style.css') }}" rel="stylesheet">

    </head>

    <body>

        <header role="banner" id="top" class="navbar navbar-static-top bs-docs-nav">
            <div class="container">
                <div class="navbar-header">
                    <button data-target=".bs-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="#"><img src="{{ url('/lib/img/logo.png') }}" alt="" title=""></a>
                </div>

                <nav class="collapse navbar-collapse bs-navbar-collapse menu">
                    <ul class="nav navbar-nav">
                        <!-- <li><a href="{{ url('/page/features') }}">Features</a></li>
                        <li><a href="{{ url('/page/prices') }}">Pricing</a></li> -->
                        <li><a href="#features">Features</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="{{ url('/auth/login') }}">Login</a></li>
                        <li><a href="{{ url('/auth/signup') }}">Sign up</a></li>
                    </ul>
                </nav>


                <div class="col-lg-12 col-sm-12 col-md-12 search-box"> 
                    <h3>Create your new store in minutes!</h3>
                    <p>No coding necessary — Open your free account today!</p>

                    <div class="search-bar">
                        {!! Form::open(array('url' => 'auth/signup')) !!}
                        <?php echo Form::hidden('_token', csrf_token()); ?>
                        <div class="inner_inputbox">
                            <?php echo Form::text('store_name', '', array('class' => 'search-input', 'placeholder' => 'Your Store Name')); ?>
                            @if($errors->any() && $errors->has('store_name'))
                            <h4 class="error error1">{{$errors->first('store_name')}}</h4>
                            @endif
                        </div>
                        <div class="inner_inputbox">
                            <?php echo Form::email('email', '', array('class' => 'search-input', 'placeholder' => 'Email')); ?>
                            @if($errors->any() && $errors->has('email'))
                            <h4 class="error error2">{{$errors->first('email')}}</h4>
                            @endif
                        </div>
                        <div class="inner_inputbox">
                            <?php echo Form::password('password', array('class' => 'search-input', 'placeholder' => 'Password')); ?>
                            @if($errors->any() && $errors->has('password'))
                            <h4 class="error error3">{{$errors->first('password')}}</h4>
                            @endif
                        </div>
                        <?php
                        echo Form::submit('FREE 14 DAY TRIAL', array('class' => 'search-btn'));
                        ?>
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </header>
        <!--header end-->

    @if(Session::has('success_message'))
    <div class="container">
        <div class="alert col-xs-12 alert-success fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
            <strong>Welldone!</strong> {{ Session::get('success_message') }}
        </div>
    </div>
    @endif
        

