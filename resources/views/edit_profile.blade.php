@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT MY PROFILE  ') }}</div>

                <div class="card-body">
                  <div>
                    <a href="{{ route('home') }}">
                      << BACK
                    </a>
                    <form method="POST" action="{{ route('profile.edit.change') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="basicInfoGrid">
                        <div>First Name</div>
                        <input name="firstName" id="firstName" value="{{ $user->first_name }}" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Middle Name</div>
                        <input name="middleName" id="middleName" value="{{ $user->middle_name }}" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Last Name</div>
                        <input name="lastName" id="lastName" value="{{ $user->last_name }}" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Email</div>
                        <input type="email" name="email" id="email" value="{{ $user->email }}"/>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Phone Number</div>
                        <input name="phoneNumber" value="{{ $user->phone_number }}" id="phoneNumber"/>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Spouse</div>
                        <input name="spouseName" value="{{ $user->spouse }}" id="spouseName"/>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Mailing Address</div>
                        <input name="mailingAddress" id="mailingAddress" value="{{ $user->mailing_address }}" />
                      </div>
                      <div class="imgGrid">
                        @if ($user->current_img)
                          <div style="background-image: url({{ url('/images/current/'.$user->current_img) }})">
                          </div>
                        @else
                          <div style="background-image: url({{ url('/images/default_profile.jpeg') }})">
                          </div>
                        @endif
                        @if ($user->veteran_img)
                          <div style="background-image: url({{ url('/images/veteran/'.$user->veteran_img) }})">
                          </div>
                        @else
                          <div style="background-image: url({{ url('/images/default_profile.jpeg') }})">
                          </div>
                        @endif
                        <input id="profile" type="file" class="form-control" name="currentImg">
                        <input id="veteran" type="file" class="form-control" name="veteranImg">
                        <!-- <div>
                          <button
                            class="btn btn-danger"
                            name="action"
                            value="current">
                            REMOVE
                          </button>
                        </div>
                        <div>
                          <button
                            class="btn btn-danger"
                            name="action"
                            value="veteran">
                            REMOVE
                          </button>
                        </div> -->
                        <div>
                          @if ($user->current_img)
                            <a href="{{ route('delete.personal.image.index',[
                              'img_type' => 'current'
                            ]) }}">
                              <span class="btn btn-danger">
                                REMOVE
                              </span>
                            </a>
                          @else
                            <div>
                              <a>No image found</a>
                            </div>
                          @endif
                        </div>
                        <div>
                          @if ($user->veteran_img)
                            <a href="{{ route('delete.personal.image.index',[
                              'img_type' => 'veteran'
                            ]) }}">
                              <span class="btn btn-danger">
                                REMOVE
                              </span>
                            </a>
                          @else
                            <div>
                              <a>No image found</a>
                            </div>
                          @endif
                        </div>
                      </div>
                      <div class="form-group historyBox">
                        <label for="biography">Personal History</label>
                        <textarea class="form-control" id="biography" name="biography" maxlength="255" placeholder="Provide a brief summary of yourself and your time in the 5th">{{ $user->biography }}</textarea>
                      </div>
                      <div style="display:flex; flex-direction: row-reverse;">
                        <button class="btn">
                          <a href="{{ route('password.edit') }}">{{ __('CHANGE PASSWORD') }}</a>
                        </button>
                      </div>
                      <button
                        type="submit"
                        class="btn btn-primary">
                        MAKE CHANGES
                      </button>
                      <button class="btn">
                        <a href="{{ route('home') }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
