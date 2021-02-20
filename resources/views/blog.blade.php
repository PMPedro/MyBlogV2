@extends('MyTemp.Assets')
@include('MyTemp.Assets')

@yield('FDS')
@yield('NavBar')

<div class="BlogContent">
<input type="text" class="PostText" id="Text">
<a href="idk" onclick="this.href ='Insert'+'/'+document.getElementById('Text').value " class="FutureBt">Send</a>

</div>
<br>
<br>
<p>
@foreach ($asdasd as $item ) 

<div class="post">


{{  $item->text  }}





</div>


@endforeach




</p>



