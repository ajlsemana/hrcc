@extends('layouts.login')

@section('content')
<div class="account-container">
    
    <div class="content clearfix">
        
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <h1>Admin Login</h1>        
            
            <div class="login-fields">
                
                <p>Please provide your details</p>                
                <div class="field">
                    <label for="username">Username</label>                  
                    <input id="username" type="email" placeholder="Email" name="email" value="{{ old('email') }}" class="login username-field" />                    
                </div> <!-- /field -->
                
                <div class="field">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
                </div> <!-- /password -->
                
            </div> <!-- /login-fields -->        
            <div class="login-actions">
                
                <span class="login-checkbox">
                    <a href="#">Forgotten your password?</a>
                </span>                
                <input type="submit" class="button btn btn-primary btn-large" value="Sign In" name="submit">
                
            </div> <!-- .actions -->
                                    
        </form>
        
    </div> <!-- /content -->
    
</div> <!-- /account-container -->
@endsection
