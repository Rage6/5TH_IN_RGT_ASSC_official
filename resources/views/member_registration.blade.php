@extends('layouts.master')

@section('registration_style')
  <!-- Welcome Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/registration/360_registration.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/registration/375_registration.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 376px) and (max-width: 414px)" type="text/css" href="/css/my_custom/registration/414_registration.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/registration/768_registration.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/registration/1366_registration.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/registration/1920_registration.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/registration/past_1920_registration.css">
  <script>
    function openAndCloseForm() {
      let currentDisplay = document.getElementById("regForm").style.display;
      console.log(currentDisplay);
      let currentWidth = window.outerWidth;
      if (currentDisplay == 'none') {
        if (currentWidth < 1366) {
          document.getElementById("regForm").style.display = "block";
        } else {
          document.getElementById("regForm").style.display = "grid";
        };
      } else {
        document.getElementById("regForm").style.display = "none";
      };
    };
  </script>
  @include ('footer.style')
@stop

@section('registration_content')
  <div class="main">
    <div class="content">
      <div class="regIntro">
        <div class="mainTitle">
          Membership</br> &</br> Registration
        </div>
        <div class="regBttn" id="regBttn" onclick="openAndCloseForm()">
          Register Now!
        </div>
      </div>
      <div class="regForm" id="regForm" style="display:none">
        <div>
          <div class="regFormTitle">
            ONLINE
          </div>
          <a href="{{ url('items?purpose=registration.index&title=Member%20Registration%20Fee%20Options') }}">
            <div>
              Already registered? Skip to Part 2
            </div>
          </a>
          <!-- <form method="POST" action="https://www.paypal.com/cgi-bin/webscr" target="_blank"> -->
          <form method="POST" action="{{ route('registration.post') }}">
            @csrf
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
              <textarea name="unit_details" placeholder="List the unit(s), job(s), and start/end time(s) in the Regiment. (Example: 'Driver, JUN 2006 - AUG 2007')"></textarea>
            </div>
            <div class="regText">
              <textarea maxlength="255" name="comments" placeholder="Include any necessarry questions or comments about your registration form"></textarea>
            </div>
            <div class="submitBttn">
              <input type="submit" name="post" value="SUBMIT"/>
            </div>
          </form>
        </div>
        <div class="theOr">
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
        </div>
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
                  <u>Soldiers & Veterans</u>: If you are/were a member of the 5th Infantry Regiment, and would like to rejoin your unit, you have found the right place. We are the 5th Infantry Regiment Association, and we need a few good men to fill the ranks of the finest chapter in the US Army.
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
                <div class="costTitle">
                  <span>Active duty</span>
                  <span class="costInLine">$5 per year</span>
                </div>
                <div class="costNumbers">$5 per year</div>
                <div class="costTitle">
                  <span>One Year</span>
                  <span class="costInLine">$15 per year</span>
                </div>
                <div class="costNumbers">$15 per year</div>
                <div class="costTitle">
                  <span>Two Years</span>
                  <span class="costInLine">$25 for 2 years</span>
                </div>
                <div class="costNumbers">$25 for 2 years</div>
                <div class="costTitle">
                  <span>Five Years</span>
                  <span class="costInLine">$60 for 5 year</span>
                </div>
                <div class="costNumbers">$60 for 5 years</div>
                <div class="costTitle">
                  <span>Lifetime (< 50 y/o)</span>
                  <span class="costInLine">$200 once</span>
                </div>
                <div class="costNumbers">$200 once</div>
                <div class="costTitle">
                  <span>Lifetime (50 - 64 y/o)</span>
                  <span class="costInLine">$150 once</span>
                </div>
                <div class="costNumbers">$150 once</div>
                <div class="costTitle">
                  <span>Lifetime (65+ y/o)</span>
                  <span class="costInLine">$100 once</span>
                </div>
                <div class="costNumbers">$100 once</div>
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
