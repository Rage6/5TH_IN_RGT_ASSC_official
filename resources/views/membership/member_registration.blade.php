@extends('layouts.master')

@include('membership.style')

@section('registration_content')
  <div class="main">
    <div class="content">
      <div class="regIntro">
        <div class="mainTitle">
          Membership</br> &</br> Registration
        </div>
        <div class="applySection">
          <div class="regApplyLine">
            Want To Apply?
          </div>
          <div class="regBttn" id="regBttn" onclick="openAndCloseForm()">
            Click Here!
          </div>
        </div>
      </div>
      <div class="regForm" id="regForm" style="display:none">
        <div class="regTotal">
          <div class="regRenew">
            Just Paying Your Membership Fee?</br> <a href="{{ url('items?purpose=registration.index&title=Member%20Registration%20Fee%20Options') }}">Click here</a>
          </div>
          @if (session('duplicate'))
            <span class="regDuplicate">
              {{ session('duplicate') }}
            </span>
          @endif
          <form method="POST" id="memberForm" action="{{ route('registration.post') }}">
            @csrf
            <div class="regGrid">
              <div>
                <div class="regText">
                  <input name="first_name" type="text" placeholder="First Name (required)" required/>
                </div>
                <div class="regText">
                  <input name="last_name" type="text" placeholder="Last Name (required)" required/>
                </div>
                <div class="regText">
                  <input name="spouse_name" type="text" placeholder="Spouse Name"/>
                </div>
                <div class="regText">
                  <input name="address_line_1" type="text" placeholder="Street Address (required)" required/>
                </div>
                <div class="regText">
                  <input name="address_line_2" type="text" placeholder="Street Address 2"/>
                </div>
                <div class="regText">
                  <input name="city" type="text" placeholder="City (required)" required/>
                </div>
                <div class="regText">
                  <select class="regFormState" name="state" required>
                    <option value>State, territory, or military post</option>
                    <option value="AL">AL - Alabama</option>
                    <option value="AK">AK - Alaska</option>
                    <option value="AS">AS - American Samoa</option>
                    <option value="AZ">AZ - Arizona</option>
                    <option value="AR">AR - Arkansas</option>
                    <option value="CA">CA - California</option>
                    <option value="CO">CO - Colorado</option>
                    <option value="CT">CT - Connecticut</option>
                    <option value="DE">DE - Delaware</option>
                    <option value="DC">DC - District of Columbia</option>
                    <option value="FL">FL - Florida</option>
                    <option value="GA">GA - Georgia</option>
                    <option value="GU">GU - Guam</option>
                    <option value="HI">HI - Hawaii</option>
                    <option value="ID">ID - Idaho</option>
                    <option value="IL">IL - Illinois</option>
                    <option value="IN">IN - Indiana</option>
                    <option value="IA">IA - Iowa</option>
                    <option value="KS">KS - Kansas</option>
                    <option value="KY">KY - Kentucky</option>
                    <option value="LA">LA - Louisiana</option>
                    <option value="ME">ME - Maine</option>
                    <option value="MD">MD - Maryland</option>
                    <option value="MA">MA - Massachusetts</option>
                    <option value="MI">MI - Michigan</option>
                    <option value="MN">MN - Minnesota</option>
                    <option value="MS">MS - Mississippi</option>
                    <option value="MO">MO - Missouri</option>
                    <option value="MT">MT - Montana</option>
                    <option value="NE">NE - Nebraska</option>
                    <option value="NV">NV - Nevada</option>
                    <option value="NH">NH - New Hampshire</option>
                    <option value="NJ">NJ - New Jersey</option>
                    <option value="NM">NM - New Mexico</option>
                    <option value="NY">NY - New York</option>
                    <option value="NC">NC - North Carolina</option>
                    <option value="ND">ND - North Dakota</option>
                    <option value="MP">MP - Northern Mariana Islands</option>
                    <option value="OH">OH - Ohio</option>
                    <option value="OK">OK - Oklahoma</option>
                    <option value="OR">OR - Oregon</option>
                    <option value="PA">PA - Pennsylvania</option>
                    <option value="PR">PR - Puerto Rico</option>
                    <option value="RI">RI - Rhode Island</option>
                    <option value="SC">SC - South Carolina</option>
                    <option value="SD">SD - South Dakota</option>
                    <option value="TN">TN - Tennessee</option>
                    <option value="TX">TX - Texas</option>
                    <option value="UM">UM - United States Minor Outlying Islands</option>
                    <option value="UT">UT - Utah</option>
                    <option value="VT">VT - Vermont</option>
                    <option value="VI">VI - Virgin Islands</option>
                    <option value="VA">VA - Virginia</option>
                    <option value="WA">WA - Washington</option>
                    <option value="WV">WV - West Virginia</option>
                    <option value="WI">WI - Wisconsin</option>
                    <option value="WY">WY - Wyoming</option>
                    <option value="AA">AA - Armed Forces Americas</option>
                    <option value="AE">AE - Armed Forces Africa</option>
                    <option value="AE">AE - Armed Forces Canada</option>
                    <option value="AE">AE - Armed Forces Europe</option>
                    <option value="AE">AE - Armed Forces Middle East</option>
                    <option value="AP">AP - Armed Forces Pacific</option>
                  </select>
                </div>
                <div class="regText">
                  <input name="zip_code" type="text" placeholder="Zip Code (required)" required/>
                </div>
                <div class="regText">
                  <input name="phone_number" type="text" placeholder="Phone Number"/>
                </div>
                <div class="regText">
                  <input name="email" type="email" placeholder="Email (required)" required />
                </div>
                <div class="regText">
                  <textarea name="unit_details" placeholder="List the unit(s), job(s), and start/end time(s) in the Regiment. (Example: 'Driver, JUN 2006 - AUG 2007')"></textarea>
                </div>
                <div class="trialEl">
                  <u>30-Day Free Trial</u>
                  <div>Want to try out our membership options? Request our free trial in the "Question & Comment" box.</div>
                  <div>Note: Free Trial members <u>cannot</u> make "Members Only" purchases.</div>
                </div>
              </div>
              <div>
                <div class="regInputTitle">I participated in:</div>
                <div class="regCheckbox">
                  @foreach ($modern_conflicts as $one_conflict)
                    <div>
                      <input name="conflict_{{ $one_conflict->id }}" type="checkbox" value="{{ $one_conflict->name }}"/>
                      <label>{{ $one_conflict->name }}</label>
                    </div>
                  @endforeach
                </div>
                <div class="regText">
                  <textarea maxlength="255" name="other_conflicts" placeholder="Did you participate in a war/conflict that is not on this list? Type it here:"></textarea>
                </div>
                <div class="regText">
                  <textarea maxlength="255" name="comments" placeholder="Include any necessarry questions or comments about your registration form"></textarea>
                </div>
              </div>
            </div>
            <div class="submitBttn">
              <button
                data-sitekey="6LfiwBcpAAAAAKC5TcLJjg9Fmg06wHJ_bn4Yr0W3"
                data-callback='onSubmit'
                data-action='submit'
                onclick="showsProcessing()">
                  SUBMIT
              </button>
              <div class="disabledSubmitBttn">
                SUBMIT
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="regRow">
        <div class="regSection regPurpose" style="background:rgba(139,0,0,0.8)">
          <div class="regSubtitle">
            Purpose & Values
          </div>
          <div>
            <div>
              <div>Purposes of this Association</div>
              <ul>
                <li>
                  To carry on in mind, spirit, and deed the values and traditions instilled in us as members of the 5th Infantry Regiment.
                </li>
                <li>
                  To provide support to our members and their families.
                </li>
                <li>
                  To foster our fellowship through organized meetings, reunions, and distribution of information.
                </li>
              </ul>
            </div>
            <div>
              <div>The Association stands for:</div>
              <ul>
                <li>
                  Steadfast devotion to the principles upon which our country was founded.
                </li>
                <li>
                  The high standards and ideals set by our Army.
                </li>
                <li>
                  The determined and aggressive spirit of our fighting 25th Infantry Div.
                </li>
                <li>
                  The ever-present team work that has carried the 5th Infantry of the "Tropic Lightning" to victory.
                </li>
                <li>
                  The perpetuation of the unselfish friendships formed in combat.
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="regSection regBenefits" style="background:rgba(255,255,255,0.8);color:black">
          <div class="regSubtitle">
            Benefits & Opportunities
          </div>
          <div>
            <div>
              Every member of the 5th Infantry Regiment Association gains:
              <ul>
                <li>
                  A personal website account, which includes:
                  <ul>
                    <li>
                      Customizing your own profile
                    </li>
                    <li>
                      Record your unit & roles at the Regiment, as well as any conflict or war you were part of
                    </li>
                    <li>
                      Viewing other members' profiles and contact information
                    </li>
                    <li>
                      Identify and communicate with the Bobcat staff
                    </li>
                    <li>
                      Carrying out all applications, purchases, or fees online
                    </li>
                  </ul>
                </li>
                <li>
                  Eligibility for an annual college scholarship
                </li>
                <li>
                  Access to purchasing member-only merchandise, which include customizable clothing
                </li>
                <li>
                  Quarterly newsletters, both past and present
                </li>
                <li>
                  A printable roster with all of the names and contact info of your fellow members
                </li>
                <li>
                  Frequent email updates with Association, Regiment, and reunion news
                </li>
                <li>
                  Membership card
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="regSection regFee" style="background:rgba(0,100,0,0.8)">
          <div class="regSubtitle regFeeTitle">
            Qualifications &</br> Pricing Options
          </div>
          <div class="regFeeDescription">
            <div>
              <div class="qualTitle">
                <i>Who is eligible for a membership?</i>
              </div>
              <div>
                <div>
                  <u>Active Duty</u>: Soldiers that (a) were member of the 5th Infantry Regiment at any time and (b) are still in active duty are eligible.
                </div>
                <div style="margin-top:10px">
                  <u>Veteran</u>: In this case, "veteran" applies to anyone out of the military and with an honorable discharge. Any veteran that was a members of the 5th Infantry Regiment is eligible.
                </div>
                <div style="margin-top:10px">
                  <u>Associate Members</u>: A family members of someone that served in the 5th Infantry Regiment is eligible for an "associate membership". Associated members recieve the same privileges and appropriate dues.
                </div>
              </div>
              <div class="qualTitle">
                <i>What are the membership costs?</i>
              </div>
              <div>
                If you would like to become a member, the dues and how long each due lasts are listed below.<br>
                <br>
                <u>About "Active Duty" pricing</u>: Our active duty fees reflect the Army's increased incomes of higher ranked soldiers<br>
                <br>
                <u>About "Veteran" pricing</u>: Our age-based, lifetime, veteran fees are set based on how younger members (and their lifetime memberships) will likely live longer<br>
                <br>
                <u>Current age & rank</u>: If your renewal depends on your age or rank, then your fee is based on your <i>current</i> age or rank.
              </div>
            </div>
            <div>
              <div class="costList">
                @foreach ($membership_options as $one_option)
                  <div class="cost">
                    <div class="costTitle">
                      {{ $one_option->name }}
                    </div>
                    @if ($one_option->how_long)
                      <div class="costNumbers">
                        @php
                          $year_count = $one_option->how_long / 365 / 24 / 60 / 60;
                          if ($year_count > 1) {
                            $year_count.=" years";
                          } elseif ($year_count == 1) {
                            $year_count.=" year";
                          } else {
                            $year_count = null;
                          };
                        @endphp
                        ${{ $one_option->price }} for {{ $year_count }}
                      </div>
                    @else
                      <div class="costNumbers">
                        ${{ $one_option->price }}
                      </div>
                    @endif
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
    @include ('footer.content')
  </div>
  <script>
    function onSubmit(token) {
      document.getElementById("memberForm").submit();
    }
  </script>
@stop
