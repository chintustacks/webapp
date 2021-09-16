@extends('layout.user.master')
@section('content')
<main>
  @include('layout.user.header')
  <!-- Signup -->
  <style>
    .gfg {
      font-size: 40px;
      color: green;
      font-weight: bold;
      text-align: center;
    }

    .geeks {
      font-size: 17px;
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
  <section class="container g-pt-50 g-pb-20">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 order-lg-2 g-mb-80">
        <div class="g-brd-around g-brd-gray-light-v3 g-bg-white rounded g-px-30 g-py-50 mb-4">
          <header class="text-center mb-4">
            <h1 class="h4 g-color-black g-font-weight-400">Register Here</h1>
            <div class="text-center">
              <p class="g-color-gray-dark-v5 mb-0">Already  Registered ?
               
                <a class="g-font-weight-600" href="/login">Click To Login!</a>
              </p>
            </div>
          </header>
          <!-- Form -->
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
          <form class="g-py-15" action="/addUser" method="post">
            @csrf
            <div class="row">
              <div class="col g-mb-20">
                <input name="full_name" id="full_name" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Full name" required>
                <input name="user_role" id="user_role" value="2"  type="hidden">
              </div>
              @error('full_name')
             <p style="color:red">{{ $message }}</p>
              @enderror
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-12 col-lg-6 g-mb-20">
              <select name="dob_date" class="js-custom-select u-select-v1 h-100 g-brd-gray-light-v3 g-color-gray-dark-v5 rounded g-py-12" style="width: 100%;" data-placeholder="Month" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                  <option value="0">Date</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
                
              </div>

              <div class="col g-mb-20">
              <select name="dob_month" class="js-custom-select u-select-v1 h-100 g-brd-gray-light-v3 g-color-gray-dark-v5 rounded g-py-12" style="width: 100%;" data-placeholder="Month" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                  <option>Month</option>
                  <option value="01">January</option>
                  <option value="02">February</option>
                  <option value="03">March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                </select>
              </div>

              <div class="col g-mb-20">
                <input name="dob_year" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Year" required>
              </div>
            </div>

            <div class="g-mb-20">
              <input name="phone" id="phone" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="number" placeholder="Mobile Number" required>
            </div>
            @error('phone')
            <p style="color:red">{{ $message }}</p>
            @enderror
            <div class="g-mb-20">
              <input name="email" id="email" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Email address" required>
            </div>
            @error('email')
            <p style="color:red">{{ $message }}</p>
            @enderror
            <div class="g-mb-20">
              <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="password" id="password" name="password" placeholder="Password" required>
            </div>
            @error('password')
            <p style="color:red">{{ $message }}</p>
            @enderror
            <div class="g-mb-20">
              <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password">
            </div>
            @error('confirm_password')
            <p style="color:red">{{ $message }}</p>
            @enderror
            <div class="mb-1">
              <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-2">
                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" required>
                <span class="d-block u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                  <i class="fa" data-check-icon="&#xf00c"></i>
                </span>
                I accept the <a href="#">Terms and Conditions</a>
              </label>
            </div>

            <!-- <div class="mb-3">
              <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-2">
                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                <span class="d-block u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                  <i class="fa" data-check-icon="&#xf00c"></i>
                </span>
                Subscribe to our newsletter
              </label> -->
        </div>

        <button id="submit" value="submit" class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit">Signup</button>
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