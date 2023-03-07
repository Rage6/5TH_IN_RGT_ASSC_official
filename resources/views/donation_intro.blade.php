@extends('layouts.master')

@section('donation_style')
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

@section('donation_content')
  <div class="main">
    <div class="content">
      <div class="regIntro">
        <div class="mainTitle">
          Our</br> Donations
        </div>
        <a href="{{ route('items.all',[
          'purpose' => 'donation.index',
          'title' => 'Scholarship%20Options'
        ]) }}">
          <div class="regBttn">
            Scholarship Donations
          </div>
        </a>
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
