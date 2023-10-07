@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                  <div>
                    <div class="homeContent">
                      <a href="{{ route('bobcat.list.index') }}">
                        <div class="homeButton contentButton">
                          <div>FIND A BOBCAT</div>
                        </div>
                      </a>
                      <a href="{{ route('newsletter.index') }}">
                        <div class="homeButton contentButton">
                          <div>NEWSLETTERS</div>
                        </div>
                      </a>
                      <a href="{{ route('reunion.index') }}">
                        <div class="homeButton contentButton">
                          <div>YEARLY REUNION</div>
                        </div>
                      </a>
                      <a href="{{ url('items?purpose=merchandise.index&title=Bobcat%20Merchandise') }}">
                        <div class="homeButton contentButton">
                          <div>MERCHANDISE</div>
                        </div>
                      </a>
                      <a href="{{ route('staff.index') }}">
                        <div class="homeButton contentButton">
                          <div>BOBCAT STAFF</div>
                        </div>
                      </a>
                      <a href="{{ route('payments.index') }}">
                        <div class="homeButton contentButton">
                          <div>PAYMENT HISTORY</div>
                        </div>
                      </a>
                      <a href="{{ route('profile.edit') }}">
                        <div class="homeButton contentButton">
                          <div>CHANGE ACCOUNT</div>
                        </div>
                      </a>
                      @if ($is_admin)
                        <a href="{{route('admin.index')}}">
                          <div class="homeButton contentButton">
                            <div>ADMINISTRATOR</div>
                          </div>
                        </a>
                      @endif
                    </div>
                    <div class="memberStats">
                      <div class="oneStat">
                        <div>
                          <u>MY MEMBERSHIP:</u>
                        </div>
                        <div>
                          @if ($current_user->expiration_date == '1970-01-01 00:00:00')
                            LIFETIME
                          @elseif ($current_user->expiration_date != null)
                            <div>
                              Expires on {{ substr($current_user->expiration_date,0,10) }}
                            </div>
                            <div>
                              <a href="{{ route('registration.index') }}">
                                Membership Option List
                              </a>
                            </div>
                          @else
                            Not a member
                          @endif
                        </div>
                      </div>
                      <div class="oneStat">
                        @if (count($user_roles) > 1)
                          <u>MY ROLES:</u>
                        @else
                          <u>MY ROLE:</u>
                        @endif
                        @foreach ($user_roles as $one_role)
                          <div>
                            {{ $one_role->title }}
                          </div>
                        @endforeach
                      </div>
                    </div>
                    <div class="homeContent">
                      <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <div class="logoutButton contentButton">
                          <div>LOG OUT</div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
