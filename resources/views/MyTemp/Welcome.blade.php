@extends('MyTemp.Assets')
@include('MyTemp.Assets')

@yield('FDS')
@yield('NavBar')


<div class="ContentHomepage">
<h1>
    <p>
    Welcome to MyBlog.... 
</p>

<p>
    I want to...
</p>
</h1>


<form action="login">
    <input type="submit" value="login" class="btn" />
</form>

<form action="register">
    <input type="submit" value="SignUp" class="btn" />
</form>


</div>