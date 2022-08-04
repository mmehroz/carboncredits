@extends('layouts.apptheme')
@section('appcontent')
<section>
    <div class="sign-up">
        <div class="sign-up-form-wrapper row">
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
                <div class="sign-up-form">
                <div class="sign-up-form-heading">
                    <h1>Sign Up</h1>
                </div>
                <div class="sign-up-paras">
                    <div class="sign-up-para-1">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                    </div>
                    <div class="sign-up-para-2">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor .</p>
                    </div>
                </div>
                    <form method="Post" action="{{url('/submitsignup')}}" enctype='multipart/form-data' id="form" class="validate">
                      {{ csrf_field() }}
                        <div class="form-field">
                          <div class="full-name row">
                            <div class="col-lg-6 col-md-12 p-0">
                          <label for="full-name">First Name</label>
                              <input type="text" name="user_firstname" id="first-name" placeholder="Enter Your First Name" required />
                            </div>              
                            <div class="col-lg-6 col-md-12 p-0">                
                            <label for="full-name">Last Name</label>
                          <input type="text" name="user_lastname" id="last-name" placeholder="Enter Your Last Name" required/>
                           </div>  
                        </div>
                        </div>
                        <div class="form-field">
                            <div class="full-name row">
                              <div class="col-lg-6 col-md-12 p-0">
                            <label for="full-name">Phone Number</label>
                                <input type="number" name="user_phonenumber" id="phone-number" placeholder="Enter Your Phone Number" required />
                                  </div>              
                                  <div class="col-lg-6 col-md-12 p-0">                
                                  <label for="full-name">Email</label>
                                <input type="email" name="user_email" id="email" placeholder="Enter Your Email" required/>
                                 </div>
                            </div>
                          </div>
                          <div class="form-field">
                            <div class="full-name row">
                              <div class="col-lg-6 col-md-12 p-0">
                            <label for="full-name">Password</label>
                                <input type="password" name="user_password" id="password" placeholder="Enter Password" required />
                                  </div>              
                                  <div class="col-lg-6 col-md-12 p-0">                
                                  <label for="full-name">Confirm Password</label>
                                <input type="password" name="cpassword" id="cpassword" placeholder="Enter Confirm Password" required/>
                                 </div>
                            </div>
                          </div>
                          <div class="news-letter">
                            <input type="checkbox" required id="news-letter-button">
                            <label for="news-letter-button">Yes, I want to receive promotion emails</label>
                        </div>
                        <div class="news-letter">
                            <input type="checkbox" required id="news-letter-button">
                            <label for="news-letter-button">I agree to all the <span style="color: #0071FF; font-weight: 600;">Term, Privacy</span> and <span style="color: #0071FF; font-weight: 600;">Fees</span></label>
                        </div>
                        <div class="form-field">
                          <label for=""></label>
                          <input type="submit" value="Sign Up"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection