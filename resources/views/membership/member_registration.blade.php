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
          <form method="POST" action="{{ route('registration.post') }}">
            @csrf
            <div class="regGrid">
              <div>
                <div class="regText">
                  <input name="first_name" type="text" placeholder="First Name" required/>
                </div>
                <div class="regText">
                  <input name="last_name" type="text" placeholder="Last Name" required/>
                </div>
                <div class="regText">
                  <input name="spouse_name" type="text" placeholder="Spouse Name"/>
                </div>
                <div class="regText">
                  <input name="address_line_1" type="text" placeholder="Street Address"/>
                </div>
                <div class="regText">
                  <input name="address_line_2" type="text" placeholder="APT, Room #, etc."/>
                </div>
                <div class="regText">
                  <input name="city" type="text" placeholder="City"/>
                </div>
                <div class="regText">
                  <input name="state" type="text" placeholder="State"/>
                </div>
                <div class="regText">
                  <input name="zip_code" type="text" placeholder="Zip Code"/>
                </div>
                <div class="regText">
                  <input name="country" type="text" placeholder="Country (if not US)"/>
                </div>
                <div class="regText">
                  <input name="phone_number" type="text" placeholder="Phone Number"/>
                </div>
                <div class="regText">
                  <input name="email" type="email" placeholder="Email" />
                </div>
                <div class="regText">
                  <textarea name="unit_details" placeholder="List the unit(s), job(s), and start/end time(s) in the Regiment. (Example: 'Driver, JUN 2006 - AUG 2007')"></textarea>
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
                <!-- <div class="regInputTitle">Payment Options:</div>
                <input type="hidden" name="cmd" value="_s-xclick">
                <select name="hosted_button_id">
                  <option value="QYJNBQCD33ER2">Active Duty</option>
                  <option value="UKGMW55X5UPQC">One Year</option>
                  <option value="GT2SWY352RVF6">Two Year</option>
                  <option value="BPK67K5YQFH6Y">Five Year</option>
                  <option value="52FBJ8VLNVYLJ">Life member (49 or younger)</option>
                  <option value="AX6VL9PNWMFKY">Life member (50 to 64)</option>
                  <option value="9VQFT3CHBUD2L">Life member (65 or older)</option>
                </select> -->
                <div class="regText">
                  <textarea maxlength="255" name="comments" placeholder="Include any necessarry questions or comments about your registration form"></textarea>
                </div>
                <div class="trialEl">
                  <u>30-Day Free Trial</u>: If you want to try out our membership options first, request our free trial option in the above comment box. This will allow you to see all of our newsletters, see fellow Bobcat profiles, and set up a profile of your own.</br>
                  NOTE: Only paid members can make "Members Only" purchases.
                </div>
              </div>
            </div>
            <div class="submitBttn">
              <input type="submit" name="post" value="SUBMIT"/>
            </div>
          </form>
          <a href="{{ url('items?purpose=registration.index&title=Member%20Registration%20Fee%20Options') }}">
            <div>
              If you are renewing your existing membership, click here.
            </div>
          </a>
        </div>
        <!-- <div class="theOr">
          - OR -
        </div>
        <div>
          <div class="regFormTitle">
            MAILING
          </div>
          <div class="mailingInfo">
            Please print out our <a href="http://www.bobcat.ws/application.htm" target="_blank">official registration form</a> and send it to:
            <div>
              Tom Frame</br>
              460 Center School Road</br>
              Perkasie, PA 18944</br>
            </div>
          </div>
        </div> -->
      </div>
      <div class="regRow">
        <div class="regSection" style="background:rgba(139,0,0,0.8)">
          <div class="regSubtitle">
            Purpose & Values
          </div>
          <div>
            <div>
              <div>Purposes of this Association</div>
              <ul>
                <li>
                  To carry on in mind, spirit, and deed the values and traditions instilled in us as members of the 5th Infantry of the 25th Infantry Division.
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
        <div class="regSection" style="background:rgba(255,255,255,0.8);color:black">
          <div class="regSubtitle">
            Benefits & Opportunities
          </div>
          <div>
            <div>
              Every member of the 5th Infantry Regiment Association gains:
              <ul>
                <li>
                  A personal account within our website. This provides an easy way to: find other members, send direct messages to another member, and customize your profile. No apps or Facebook required!
                </li>
                <li>
                  Quarterly newsletters
                </li>
                <li>
                  Membership roster of names, addresses, and phone numbers
                </li>
                <li>
                  Member names and email addresses
                </li>
                <li>
                  Frequent email updates with Association, Regiment, Division and reunion news
                </li>
                <li>
                  Membership card
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="regSection" style="background:rgba(0,100,0,0.8)">
          <div class="regSubtitle">
            Qualifications &</br> Pricing Options
          </div>
          <div>
            <div>
              <div class="qualTitle">
                <i>Can I become a member?</i>
              </div>
              <div>
                <div>
                  <u>Soldiers & Veterans</u>: If you are/were a member of the 5th Infantry Regiment, and would like to rejoin your unit, you have found the right place. We are the 5th Infantry Regiment Association, and we need a few good soldiers to fill the ranks of the finest chapter in the US Army.
                </div>
                <div style="margin-top:10px">
                  <u>Associate Members</u>: We also offer an associates membership to those that were a family member of a veteran that was in the 5th Infantry Regiment. Associate members share the same dues as regular members do.
                </div>
              </div>
            </div>
            <div>
              <div class="qualTitle">
                <i>What are the membership costs?</i>
              </div>
              <div>
                If you would like to become a member, the dues and how long each due lasts are listed below. The prices of the "Lifetime" options are based on your age when you paid for your Lifetime membership.
              </div>
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
                <!-- <div class="cost">
                  <div class="costTitle">
                    Active duty
                  </div>
                  <div class="costNumbers">
                    $5 per year
                  </div>
                </div>
                <div class="cost">
                  <div class="costTitle">
                    One Year
                  </div>
                  <div class="costNumbers">
                    $15 per year
                  </div>
                </div>
                <div class="cost">
                  <div class="costTitle">
                    Two Years
                  </div>
                  <div class="costNumbers">
                    $25 for 2 years
                  </div>
                </div>
                <div class="cost">
                  <div class="costTitle">
                    Five Years
                  </div>
                  <div class="costNumbers">
                    $60 for 5 years
                  </div>
                </div>
                <div class="cost">
                  <div class="costTitle">
                    Lifetime (< 50 y/o)
                  </div>
                  <div class="costNumbers">
                    $200 once
                  </div>
                </div>
                <div class="cost">
                  <div class="costTitle">
                    Lifetime (50 - 64 y/o)
                  </div>
                  <div class="costNumbers">
                    $150 once
                  </div>
                </div>
                <div class="cost">
                  <div class="costTitle">
                    Lifetime (65+ y/o)
                  </div>
                  <div class="costNumbers">
                    $100 once
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
    @include ('footer.content')
  </div>
@stop