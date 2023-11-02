@extends('layouts.master')

@include('welcome.style')

@section('error_content')
  <div class="introBody introBodyMax">
    <!-- <div class="introBody introImage introIraq"></div>
    <div class="introBody introImage introAfghanistan"></div>
    <div class="introBody introImage introVietnam"></div>
    <div class="introBody introImage introKorea"></div>
    <div class="introBody introImage introWW2"></div>
    <div class="introBody introImage introFrontier"></div>
    <div class="introBody introImage intro1812"></div> -->
  </div>
  <div class="introBody">
    <div class="errorTitle">
      <div>Sorry!</div>
      <div>Your page was not found</div>
      <div>
        <a href="{{ route('welcome') }}">
          Return home
        </a>
      </div>
    </div>
    <!-- <div id="bottomView" class="bottomView">
      <div>LEARN MORE BELOW</div>
    </div> -->
  </div>
@stop
