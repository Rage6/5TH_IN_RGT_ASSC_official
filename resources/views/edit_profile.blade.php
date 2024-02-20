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
                      @if ($errors)
                        @foreach ($errors->all() as $one_error)
                          <div style="color:red">
                            <div>- {{ $one_error }}</div>
                          </div>
                        @endforeach
                      @endif
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
                        <div>Can members see your email address?</div>
                        <div>
                          <select name="email_visible">
                            <option @if ($user->email_visible == 1) selected @endif value="1">YES</option>
                            <option @if ($user->email_visible == 0) selected @endif value="0">NO</option>
                          </select>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Phone Number</div>
                        <input name="phoneNumber" value="{{ $user->phone_number }}" id="phoneNumber"/>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Can members see your phone number?</div>
                        <div>
                          <select name="phone_visible">
                            <option @if ($user->phone_visible == 1) selected @endif value="1">YES</option>
                            <option @if ($user->phone_visible == 0) selected @endif value="0">NO</option>
                          </select>
                        </div>
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
                        <div>Current Photo</div>
                        <div>Veteran Photo</div>
                        @if ($user->current_img)
                          <div style="background-image: url({{ url('/images/current/'.$user->current_img) }})" class="img">
                          </div>
                        @else
                          <div style="background-image: url({{ url('/images/default_profile.jpeg') }})" class="img">
                          </div>
                        @endif
                        @if ($user->veteran_img)
                          <div style="background-image: url({{ url('/images/veteran/'.$user->veteran_img) }})" class="img">
                          </div>
                        @else
                          <div style="background-image: url({{ url('/images/default_profile.jpeg') }})" class="img">
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
                              'img_type' => 'current',
                              'next_route' => 'edit-profile'
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
                              'img_type' => 'veteran',
                              'next_route' => 'edit-profile'
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
                        <label for="biography">Biography</label>
                        <textarea class="form-control" id="biography" name="biography" maxlength="1000" placeholder="Provide a brief summary of yourself and your time in the 5th">{{ $user->biography }}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="links">Personal Links</label>
                        @if (count($all_links) > 0)
                          <div class="linkBox">
                            @foreach ($all_links as $one_link)
                              <div>
                                <a href="{{ $one_link->url }}" target="_blank">
                                  {{ $one_link->name }}
                                </a>
                              </div>
                              <div>
                                <a href="{{ route('profile.link.view',[
                                  'link_id' => $one_link->id
                                ]) }}">
                                  EDIT
                                </a>
                              </div>
                            @endforeach
                          </div>
                        @else
                          <div>
                            <i>No links found</i>
                          </div>
                        @endif
                        <a href="{{ route('profile.link.new') }}">
                          <span class="addLink">
                            ADD A LINK
                          </span>
                        </a>
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
