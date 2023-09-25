@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  KNOW A BOBCAT
                </div>
                <div class="card-body">
                    <a href="{{ route('bobcat.list.index') }}">
                      << {{ __('BACK') }}
                    </a>
                    <div class="form-group memberTitle">
                      {{ $bobcat->first_name }} {{ $bobcat->last_name }}
                    </div>
                    <div class="card">
                      @if ($bobcat->current_img)
                        <div id="primaryImg" class="primaryImg" data-time="current" style="background-image: url('/images/current/{{ $bobcat->current_img }}?t=<?php echo(time()); ?>');"></div>
                      @else
                        <div id="primaryImg" class="primaryImg" data-time="current" style="background-image: url('/images/default_profile.jpeg')"></div>
                      @endif
                      @if ($bobcat->veteran_img)
                        <div id="secondaryImg" class="secondaryImg" data-time="veteran" style="background-image: url('/images/veteran/{{ $bobcat->veteran_img }}?t=<?php echo(time()); ?>')"></div>
                      @else
                        <div id="secondaryImg" class="secondaryImg" data-time="veteran" style="background-image: url('/images/default_profile.jpeg')"></div>
                      @endif
                    </div>
                    <div>
                      <div class="card-subtitle memberInfoTitle">
                        Biography
                      </div>
                      <div class="card-text memberInfoContent">
                        @if ($bobcat->biography)
                          {{ $bobcat->biography }}
                        @else
                          <i>{{ __('No biography at this time') }}</i>
                        @endif
                      </div>
                      @if ($bobcat->email_visible == 1 || $bobcat->phone_visible == 1)
                        <div class="card-subtitle memberInfoTitle">
                          Contact Information
                        </div>
                        <div class="card-text memberInfoContent memberInfoContact">
                          @if ($bobcat->email_visible == 1)
                            <div>Email Address</div>
                            <div>{{ $bobcat->email }}</div>
                          @endif
                          @if ($bobcat->phone_visible == 1)
                            <div>Phone Number</div>
                            <div>{{ $bobcat->phone_number }}</div>
                          @endif
                        </div>
                      @endif
                      <!-- <div class="card-subtitle memberInfoTitle">
                        Conflicts
                      </div>
                      <div class="card-text memberInfoContent">

                      </div> -->
                      <!-- <div class="card-subtitle memberInfoTitle">
                        Times In The 5th
                      </div>
                      <div class="card-text memberInfoContent">
                        <ul>

                        </ul>
                      </div> -->
                      <div class="card-subtitle memberInfoTitle">
                        Personal Links
                      </div>
                      <div class="card-text memberInfoContent">
                        <ul>
                          @foreach ($all_links as $one_link)
                            <li>
                              <a href="{{ $one_link->url }}">{{ $one_link->name }}</a>
                            </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
