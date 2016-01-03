@extends('layouts.mainAuth')
@section('content')
<div class="container">
  
  <form class="form-signin" method="post" action="{{ route('auth::postRegister') }}">
    <h2 class="form-signin-heading">Please sign in</h2>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="inputEmail" class="sr-only">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
    <label for="inputEmail" class="sr-only">Email address</label>
    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <input type="password" id="passwordConfirm" class="form-control" name="password_confirmation" placeholder="Password Confirmation">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
  </form>

</div> <!-- /container -->

@endsection