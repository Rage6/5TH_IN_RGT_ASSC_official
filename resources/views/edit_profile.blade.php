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
                        <!-- <input name="mailingAddress" id="mailingAddress" value="{{ $user->mailing_address }}" /> -->
                        <div>
                          <input
                            name="streetAddressOne"
                            placeholder="Street Address"
                            @if ($user->street_address_1)
                              value="{{ $user->street_address_1 }}"
                            @endif/></br>
                          <input
                            name="streetAddressTwo"
                            placeholder="Street Address 2"
                            @if ($user->street_address_2)
                              value="{{ $user->street_address_2 }}"
                            @endif/></br>
                          <input
                            name="mailingCity"
                            placeholder="City"
                            @if ($user->mailing_city)
                              value="{{ $user->mailing_city }}"
                            @endif/></br>
                          <select style="width:100%" name="mailingState">
                            <option style="color:grey" value @if ($user->mailing_state == null) selected @endif >State, territory, etc.</option>
                            <option value="AL" @if ($user->mailing_state == "AL") selected @endif >AL - Alabama</option>
                            <option value="AK" @if ($user->mailing_state == "AK") selected @endif >AK - Alaska</option>
                            <option value="AS" @if ($user->mailing_state == "AS") selected @endif >AS - American Samoa</option>
                            <option value="AZ" @if ($user->mailing_state == "AZ") selected @endif >AZ - Arizona</option>
                            <option value="AR" @if ($user->mailing_state == "AR") selected @endif >AR - Arkansas</option>
                            <option value="CA" @if ($user->mailing_state == "CA") selected @endif >CA - California</option>
                            <option value="CO" @if ($user->mailing_state == "CO") selected @endif >CO - Colorado</option>
                            <option value="CT" @if ($user->mailing_state == "CT") selected @endif >CT - Connecticut</option>
                            <option value="DE" @if ($user->mailing_state == "DE") selected @endif >DE - Delaware</option>
                            <option value="DC" @if ($user->mailing_state == "DC") selected @endif >DC - District of Columbia</option>
                            <option value="FL" @if ($user->mailing_state == "FL") selected @endif >FL - Florida</option>
                            <option value="GA" @if ($user->mailing_state == "GA") selected @endif >GA - Georgia</option>
                            <option value="GU" @if ($user->mailing_state == "GU") selected @endif >GU - Guam</option>
                            <option value="HI" @if ($user->mailing_state == "HI") selected @endif >HI - Hawaii</option>
                            <option value="ID" @if ($user->mailing_state == "ID") selected @endif >ID - Idaho</option>
                            <option value="IL" @if ($user->mailing_state == "IL") selected @endif >IL - Illinois</option>
                            <option value="IN" @if ($user->mailing_state == "IN") selected @endif >IN - Indiana</option>
                            <option value="IA" @if ($user->mailing_state == "IA") selected @endif >IA - Iowa</option>
                            <option value="KS" @if ($user->mailing_state == "KS") selected @endif >KS - Kansas</option>
                            <option value="KY" @if ($user->mailing_state == "KY") selected @endif >KY - Kentucky</option>
                            <option value="LA" @if ($user->mailing_state == "LA") selected @endif >LA - Louisiana</option>
                            <option value="ME" @if ($user->mailing_state == "ME") selected @endif >ME - Maine</option>
                            <option value="MD" @if ($user->mailing_state == "MD") selected @endif >MD - Maryland</option>
                            <option value="MA" @if ($user->mailing_state == "MA") selected @endif >MA - Massachusetts</option>
                            <option value="MI" @if ($user->mailing_state == "MI") selected @endif >MI - Michigan</option>
                            <option value="MN" @if ($user->mailing_state == "MN") selected @endif >MN - Minnesota</option>
                            <option value="MS" @if ($user->mailing_state == "MS") selected @endif >MS - Mississippi</option>
                            <option value="MO" @if ($user->mailing_state == "MO") selected @endif >MO - Missouri</option>
                            <option value="MT" @if ($user->mailing_state == "MT") selected @endif >MT - Montana</option>
                            <option value="NE" @if ($user->mailing_state == "NE") selected @endif >NE - Nebraska</option>
                            <option value="NV" @if ($user->mailing_state == "NV") selected @endif >NV - Nevada</option>
                            <option value="NH" @if ($user->mailing_state == "NH") selected @endif >NH - New Hampshire</option>
                            <option value="NJ" @if ($user->mailing_state == "NJ") selected @endif >NJ - New Jersey</option>
                            <option value="NM" @if ($user->mailing_state == "NM") selected @endif >NM - New Mexico</option>
                            <option value="NY" @if ($user->mailing_state == "NY") selected @endif >NY - New York</option>
                            <option value="NC" @if ($user->mailing_state == "NC") selected @endif >NC - North Carolina</option>
                            <option value="ND" @if ($user->mailing_state == "ND") selected @endif >ND - North Dakota</option>
                            <option value="MP" @if ($user->mailing_state == "MP") selected @endif >MP - Northern Mariana Islands</option>
                            <option value="OH" @if ($user->mailing_state == "OH") selected @endif >OH - Ohio</option>
                            <option value="OK" @if ($user->mailing_state == "OK") selected @endif >OK - Oklahoma</option>
                            <option value="OR" @if ($user->mailing_state == "OR") selected @endif >OR - Oregon</option>
                            <option value="PA" @if ($user->mailing_state == "PA") selected @endif >PA - Pennsylvania</option>
                            <option value="PR" @if ($user->mailing_state == "PR") selected @endif >PR - Puerto Rico</option>
                            <option value="RI" @if ($user->mailing_state == "RI") selected @endif >RI - Rhode Island</option>
                            <option value="SC" @if ($user->mailing_state == "SC") selected @endif >SC - South Carolina</option>
                            <option value="SD" @if ($user->mailing_state == "SD") selected @endif >SD - South Dakota</option>
                            <option value="TN" @if ($user->mailing_state == "TN") selected @endif >TN - Tennessee</option>
                            <option value="TX" @if ($user->mailing_state == "TX") selected @endif >TX - Texas</option>
                            <option value="UM" @if ($user->mailing_state == "UM") selected @endif >UM - United States Minor Outlying Islands</option>
                            <option value="UT" @if ($user->mailing_state == "UT") selected @endif >UT - Utah</option>
                            <option value="VT" @if ($user->mailing_state == "VT") selected @endif >VT - Vermont</option>
                            <option value="VI" @if ($user->mailing_state == "VI") selected @endif >VI - Virgin Islands</option>
                            <option value="VA" @if ($user->mailing_state == "VA") selected @endif >VA - Virginia</option>
                            <option value="WA" @if ($user->mailing_state == "WA") selected @endif >WA - Washington</option>
                            <option value="WV" @if ($user->mailing_state == "WV") selected @endif >WV - West Virginia</option>
                            <option value="WI" @if ($user->mailing_state == "WI") selected @endif >WI - Wisconsin</option>
                            <option value="WY" @if ($user->mailing_state == "WY") selected @endif >WY - Wyoming</option>
                            <option value="AA" @if ($user->mailing_state == "AA") selected @endif >AA - Armed Forces Americas</option>
                            <option value="AE" @if ($user->mailing_state == "AE") selected @endif >AE - Armed Forces Africa</option>
                            <option value="AE" @if ($user->mailing_state == "AE") selected @endif >AE - Armed Forces Canada</option>
                            <option value="AE" @if ($user->mailing_state == "AE") selected @endif >AE - Armed Forces Europe</option>
                            <option value="AE" @if ($user->mailing_state == "AE") selected @endif >AE - Armed Forces Middle East</option>
                            <option value="AP" @if ($user->mailing_state == "AP") selected @endif >AP - Armed Forces Pacific</option>
                          </select>
                          </br>
                          <input
                            name="zipCode"
                            placeholder="Zip Code"
                            @if ($user->zip_code)
                              value="{{ $user->zip_code }}"
                            @endif/></br>
                        </div>
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
