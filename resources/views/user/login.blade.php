@extends('layout.user.master')
@section('content')
<main>
@include('layout.user.header')
       
      <!-- Signup -->
      <section class="container g-pt-50 g-pb-20">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 order-lg-2 g-mb-80">
          <div class="g-brd-around g-brd-gray-light-v3 g-bg-white rounded g-px-30 g-py-50 mb-4">
              <header class="text-center mb-4">
                <h1 class="h4 g-color-black g-font-weight-400">Login Here</h1>
                <div class="text-center">
              <p class="g-color-gray-dark-v5 mb-0">Not Registered ?
               <a class="g-font-weight-600" href="/register">Click To Signup!</a>
              </p>
            </div>
              </header>
              @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif
                @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
                @endif
              <!-- Form -->
              <form class="g-py-15" action="/userLogin" method="post">
              @csrf
                <div class="mb-4">
                  <div class="input-group g-rounded-left-3">
                    <span class="input-group-prepend g-width-45">
                      <span class="input-group-text justify-content-center w-100 g-bg-transparent g-brd-gray-light-v3 g-color-gray-dark-v5">
                        <i class="icon-finance-067 u-line-icon-pro"></i>
                      </span>
                    </span>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-rounded-left-0 g-rounded-right-3 g-py-15 g-px-15" type="text" name="email" placeholder="Email Address Or Mobile Number">
                  </div>
                </div>

                <div class="mb-4">
                  <div class="input-group g-rounded-left-3 mb-4">
                    <span class="input-group-prepend g-width-45">
                      <span class="input-group-text justify-content-center w-100 g-bg-transparent g-brd-gray-light-v3 g-color-gray-dark-v5">
                        <i class="icon-media-094 u-line-icon-pro"></i>
                      </span>
                    </span>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-rounded-left-0 g-rounded-right-3 g-py-15 g-px-15" type="password" name="password" placeholder="Password">
                  </div>
                </div>

                <div class="row justify-content-between mb-5">
                  <div class="col align-self-center">
                    <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-0">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                      <span class="d-block u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </span>
                      Keep signed in
                    </label>
                  </div>
                  <div class="col align-self-center text-right">
                    <a class="g-font-size-13" href="page-password-recovery-1.html">Forgot password?</a>
                  </div>
                </div>

                <div class="mb-5">
                  <button class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit">Login</button>
                </div>

                <div class="d-flex justify-content-center text-center g-mb-30">
                  <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                  <span class="align-self-center g-color-gray-dark-v5 mx-4">OR</span>
                  <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                </div>

                <div class="row no-gutters">
                  <div class="col-6">
                    <button class="btn btn-block u-btn-facebook g-font-size-12 text-uppercase g-py-12 g-px-25 mr-2" type="button">
                      <i class="mr-1 fa fa-facebook"></i>
                      Facebook
                    </button>
                  </div>
                  <div class="col-6">
                    <button class="btn btn-block btn-danger g-font-size-12 text-uppercase g-py-12 g-px-25 ml-2" type="button">
                      <i class="mr-1 fa fa-google"></i>
                      Google
                    </button>
                  </div>
                </div>
              </form>
              <!-- End Form -->
            </div>

            
          </div>

     
        </div>
      </section>
      <!-- End Signup -->
      @include('layout.user.footer') 

 </main>
    
@endsection