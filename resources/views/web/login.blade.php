@extends('layouts.apptheme')
@section('appcontent')
<section>
    <div class="log-in">
        <div class="sign-up row container-fluid">
            <div class="col-lg-5 p-0">
                <div class="sign-up-logo-page">
                    <div class="sign-up-logo">
                        <img src="{!! asset('public/assets/images/logo.svg') !!}">
                        <div class="sign-up-heading">
                        <h3>GREENLIGHT CARBON</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 p-0">
                <div class="log-in-form">
                <div class="sign-up-form">
                <div class="sign-up-form-heading">
                    <h1>Log In</h1>
                </div>
                <div class="sign-up-paras">
                    <div class="sign-up-para-1">
                        <p>Login to your account</p>
                    </div>
                    <div class="sign-up-para-2">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor .</p>
                    </div>
                </div>
                 @if(session('message'))
                    <div>
                        <p class="alert alert-success" >{{session('message')}}</p>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <div><h4><li>{{ $error }}</li></h4> </div>
                        @endforeach
                      </ul>
                    </div>
                @endif
                    <form method="Post" action="{{url('/submitlogin')}}" enctype='multipart/form-data' id="form" class="validate">
                      {{ csrf_field() }}
                        <div class="form-field">
                                <label for="full-name">Useremail</label>
                            <div class="full-name">
                                <input type="email" name="user_email" id="user_email" placeholder="Enter Your Email" required />                              
                            </div>
                        </div>
                        <div class="form-field">
                                <label for="full-name">Password</label>
                            <div class="full-name">
                                <input type="password" name="user_password" id="user_password" placeholder="Enter Your Password" required />
                            </div>
                        </div>
                        <div class="news-letter">
                            <div>
                                <input type="checkbox" id="news-letter-button">
                                <label for="news-letter-button">Remember Me</label>
                           </div>
                            <div class="reset-password">
                                <span style="color: #0070FF; font-weight: 500; cursor: pointer;"><a>Reset password</a></span>
                            </div>
                        </div>
                        <div class="form-field">
                            <label for=""></label>
                            <input type="submit" value="Sign In"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection