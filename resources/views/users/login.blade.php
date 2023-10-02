<x-layout>
<div class="content">
<div class="container">
<div class="row">
<div class="col-md-6 offset-md-3">

<div class="account-content">
<div class="align-items-center justify-content-center">
<div class="login-right">
<div class="login-header text-center">
<a href="index.html"><img src="assets/img/logo-01.png" alt="logo" class="img-fluid"></a>
<h3>Welcome Back</h3>
<p>Don't miss your next opportunity. Sign in to stay updated on your professional world.</p>
</div>
<form method="POST" action="/users/authenticate">
      @csrf
<div class="form-group form-focus">
<input type="email" name="email" value="{{old('email')}}" class="form-control floating">
<label class="focus-label">Email</label>
		@error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
</div>
<div class="form-group form-focus">
<input type="password" name="password"
          value="{{old('password')}}" class="form-control floating">
<label class="focus-label">Password</label>
		@error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
</div>
<div class="form-group">
<label class="custom_check">
<input type="checkbox" name="rem_password">
<span class="checkmark"></span> Remember password
</label>
</div>
<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login to account</button>
<div class="login-or">
<p>Or login with</p>
</div>
<div class="row social-login">
<div class="col-4">
<a href="#" class="btn btn-twitter btn-block"> Twitter</a>
</div>
<div class="col-4">
<a href="#" class="btn btn-facebook btn-block"> Facebook</a>
</div>
<div class="col-4">
<a href="#" class="btn btn-google btn-block"> Google</a>
</div>
</div>
<div class="row">
<div class="col-6 text-start">
<a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
</div>
<div class="col-6 text-end dont-have">New to Kofejob? <a href="register">Click here</a></div>
</div>
</form>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</x-layout>