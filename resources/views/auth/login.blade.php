@extends('layouts.mainAuth')
@section('content')
<div class="container">  
  
  <form class="form-signin" method="post" action="{{ route('auth::postLogin') }}">
    <h2 class="form-signin-heading">Please sign in</h2>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="inputEmail" class="sr-only">Email address</label>
    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox">
      <input type="checkbox" name="remember"> Remember Me
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  </form>

</div> <!-- /container -->
@endsection