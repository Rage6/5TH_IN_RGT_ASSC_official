@extends('layouts.master')

@section('reunion_style')
  <!-- Welcome Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/reunion/360_reunion.php">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/reunion/375_reunion.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 376px) and (max-width: 414px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/reunion/414_reunion.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/reunion/768_reunion.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/reunion/1366_reunion.php">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/reunion/1920_reunion.php">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/reunion/past_1920_reunion.php">
  <script>
    function openAndCloseForm() {
      let currentDisplay = document.getElementById("reunionForm").style.display;
      let currentWidth = window.outerWidth;
      if (currentDisplay == 'none') {
        if (currentWidth < 1366) {
          document.getElementById("reunionForm").style.display = "block";
        } else {
          document.getElementById("reunionForm").style.display = "grid";
        };
      } else {
        document.getElementById("reunionForm").style.display = "none";
      };
      let menuHeight = document.getElementById("mainMenuTopBttn").offsetHeight;
      let formTop = document.getElementById("reunionForm").offsetTop;
      let scrollAmount = formTop - menuHeight;
      window.scroll({
        top: scrollAmount,
        behavior: 'smooth'
      });
    };
    function clickSection(id,type) {
    // function clickSection(section,type) {
      // Opens the correct box...
      let allBoxes = document.querySelectorAll("[data-type='box']");
      for (let boxNum = 0; boxNum < allBoxes.length; boxNum++) {
        allBoxes[boxNum].style.display = "none";
      };
      // let targetBox = document.querySelectorAll("[data-type='box'][data-section='"+section+"']")[0];
      let targetBox = document.querySelectorAll("[data-type='box'][data-id='"+id+"']")[0];
      targetBox.style.display = "block";
      // ...and scrolls down to opened box
      let menuHeight = document.getElementById("mainMenuTopBttn").offsetHeight;
      let targetTop = targetBox.offsetTop;
      let scrollAmount = targetTop - menuHeight;
      window.scroll({
        top: scrollAmount,
        behavior: 'smooth'
      });
    };
    document.querySelectorAll('[data-type]');
  </script>
  @include ('footer.style')
@stop

@section('reunion_content')
  <div class="main">
    <div class="content">
      <div class="regIntro">
        <div class="mainTitle">
          <span>{{ $reunion_main->title }}</span>
        </div>
        @php
          $months = [
            'January','February','March','April','May','June','July','August','September','October','November','December'
          ];
        @endphp
        <div class="reunionDate dateAndLocation">
          {{ $months[intval(substr($reunion_main->first_day,-5,2)) - 1] }} {{ substr($reunion_main->first_day,-2,2) }} - {{ substr($reunion_main->last_day,-2,2) }}, {{ substr($reunion_main->first_day,0,4) }}
        </div>
        <div class="reunionLocation dateAndLocation">
          {{ $reunion_main->location }}
        </div>
        <div class="regBttn" id="regBttn" onclick="openAndCloseForm()">
          Register Now!
        </div>
      </div>
      <div class="regForm" id="reunionForm" style="display:none">
        <div>
          <!-- <div class="regPart">
            PART 1
          </div> -->
          <form method="POST" action="/reunion/registration">
            @csrf
            <div class="regFormFull">
              <div class="regFormHalf">
                <div class="regFormBasic">
                  <div class="regFormSubtitles">
                    Basic Information
                  </div>
                  @auth
                    <input required type='text' name='first_name' value='{{ $this_user->first_name }}' placeholder='First Name'/>
                    <input required type='text' name='last_name' value='{{ $this_user->last_name }}' placeholder='Last Name'/>
                    <input required type='email' name='email' value='{{ $this_user->email }}' placeholder='Email'/>
                  @else
                    <input required type='text' name='first_name' placeholder='First Name'/>
                    <input required type='text' name='last_name' placeholder='Last Name'/>
                    <input required type='email' name='email' placeholder='Email'/>
                  @endauth
                  <input required type='tel' name='phone_number' placeholder='Phone Number'/>
                </div>
                <div class="regFormBasic">
                  <div class="regFormSubtitles">
                    Arrival Date
                  </div>
                  <input type='date' name='arrival_date' placeholder='mm/dd/yyyy'/>
                  <div class="regFormSubtitles">
                    Additional Guests
                  </div>
                  <input id='guestNum' type='number' min='0' name='guest_num' value='0'/>
                  <input type='text' name='guest_names' placeholder='Guest Name(s)'/>
                </div>
              </div>
              <div class="regFormHalf">
                <div class='radioTypeBox'>
                  <div>
                    Do you plan on attending the Valley Forge Tour?
                  </div>
                  <input type='radio' name='event_one' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='event_one' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Do you plan on attending the Philadelphia City Tour?
                  </div>
                  <input type='radio' name='event_two' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='event_two' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Do you plan on attending the Memorial Service at George Washington Memorial?
                  </div>
                  <input type='radio' name='event_three' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='event_three' value='No'/><span>No</span>
                </div>
                <!-- <div class='radioTypeBox'>
                  <div>
                    Do you have a military ID?
                  </div>
                  <input type='radio' name='mil_id' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='mil_id' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Does your companion have a military ID?
                  </div>
                  <input type='radio' name='comp_mil_id' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='comp_mil_id' value='No'/><span>No</span>
                </div> -->
                <div class='radioTypeBox'>
                  <div>
                    Do you plan on attending the ladies breakfast 9am Saturday morning? There is no charge.
                  </div>
                  <input type='radio' name='ladies_breakfast' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='ladies_breakfast' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Are you driving?
                  </div>
                  <input type='radio' name='driving' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='driving' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Is this your first reunion?
                  </div>
                  <input type='radio' name='first_reunion' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='first_reunion' value='No'/><span>No</span>
                </div>
                <textarea rows="4" class="commentArea" name='comments' placeholder='Comments...'></textarea>
              </div>
            </div>
            <button>REGISTER</button>
          </form>
        </div>
      </div>
      <div class="regRow">
        @foreach ($all_subevents as $one_subevent)
          @if ($one_subevent->is_payment == null)
            <div class="regSection {{ explode(',',$one_subevent->classes)[0] }}">
              <div
                class="reunionSectBttn"
                data-id="{{ strval($one_subevent->id) }}"
                data-section="{{ str_replace('Section','',$one_subevent->classes) }}"
                data-type="button"
                onclick="clickSection({{ strval($one_subevent->id) }},'button')">{{ strtoupper($one_subevent->title) }}</div>
            </div>
          @else
            @php
              $param_array = explode(";",$one_subevent->is_payment);
            @endphp
            <div class="regSection {{ explode(',',$one_subevent->classes)[0] }}">
              <a href="{{ route('items.all',['purpose'=> $param_array[0],'title'=>$param_array[1]]) }}">
                <div class="reunionSectBttn">
                  {{ strtoupper($one_subevent->title) }}
                </div>
              </a>
            </div>
          @endif
        @endforeach
      </div>

      @foreach ($all_subevents as $one_subcontent)
        @php
          // Be sure that the inputs for this column includes 'htmlentities()' to make sure that the user doesn't include unallowed html tags
          $swapCharacters = [
            ["/div-start/","<div>"],
            ["/div-end/","</div>"],
            ["/para-start/","<p>"],
            ["/para-end/","</p>"],
            ["/br/","</br>"],
            ["/u-start/","<u>"],
            ["/u-end/","</u>"],
            ["/unorder-start/","<ul>"],
            ["/unorder-end/","</ul>"],
            ["/order-start/","<ol>"],
            ["/order-end/","</ol>"],
            ["/row-start/","<li>"],
            ["/row-end/","</li>"],
            ["/a-start-open/","<a target='_blank' href='"],
            ["/a-start-close/","'>"],
            ["/a-end/","</a>"],
            ["/button-start/","<span style='background-color:white;color:black;margin-left:10%;padding:5px;border-radius:15px'>"],
            ["/button-end/","</span>"],
            ["","php"],
            ["","SQL"]
          ];
          $all_months = [
            ["01", "Jan."],
            ["02", "Feb."],
            ["03", "Mar."],
            ["04", "Apr."],
            ["05", "May"],
            ["06", "Jun."],
            ["07", "Jul."],
            ["08", "Aug."],
            ["09", "Sept."],
            ["10", "Oct."],
            ["11", "Nov."],
            ["12", "Dec."]
          ];
        @endphp
        <div
          class="{{ str_replace('Section','',$one_subcontent->classes) }}Box reunionSectBox"
          data-id="{{ strval($one_subcontent->id) }}"
          data-section="{{ str_replace('Section','',$one_subcontent->classes) }}"
          data-type="box">
          <div class="boxTitle">
            @php
              $month = null;
              for ($a = 0; $a < count($all_months); $a++) {
                if ($all_months[$a][0] == substr($one_subcontent->start_time,5,2)) {
                  $month = $all_months[$a][1];
                };
              };
              for ($a = 0; $a < count($all_months); $a++) {
                if ($all_months[$a][0] == substr($one_subcontent->end_time,5,2)) {
                  $end_month = $all_months[$a][1];
                };
              };
              $suffix = "th";
              if (substr($one_subcontent->start_time,8,2) == "01") {
                $suffix = "st";
              } else if (substr($one_subcontent->start_time,8,2) == "02") {
                $suffix = "nd";
              } else if (substr($one_subcontent->start_time,8,2) == "03") {
                $suffix = "rd";
              } else if (substr($one_subcontent->start_time,8,2) == "21") {
                $suffix = "st";
              } else if (substr($one_subcontent->start_time,8,2) == "22") {
                $suffix = "nd";
              } else if (substr($one_subcontent->start_time,8,2) == "23") {
                $suffix = "rd";
              } else if (substr($one_subcontent->start_time,8,2) == "31") {
                $suffix = "st";
              };
            @endphp
            {{ $one_subcontent->title }}
            @if ($one_subcontent->start_time)
              , {{ $month }} {{ substr($one_subcontent->start_time,8,2) }}{{ $suffix }}, {{ substr($one_subcontent->start_time,11,5) }}
              @if ($one_subcontent->end_time)
                - @if ($month != $end_month) {{ $end_month }} @endif {{ substr($one_subcontent->end_time,11,5) }}
              @endif
            @endif
          </div>
          <div class="boxContent {{ str_replace('Section','',$one_subcontent->classes) }}Content">
            @if ($one_subcontent->location)
              @php
                $html_location = $one_subcontent->location;
                for ($i = 0; $i < count($swapCharacters); $i++) {
                  $html_location = str_replace($swapCharacters[$i][0],$swapCharacters[$i][1],$html_location);
                };
              @endphp
              <div>
                <u>Location:</u>
                {!! $html_location !!}
              </div>
            @endif
            @if ($one_subcontent->description)
              @php
                $html_description = $one_subcontent->description;
                for ($i = 0; $i < count($swapCharacters); $i++) {
                  $html_description = str_replace($swapCharacters[$i][0],$swapCharacters[$i][1],$html_description);
                };
              @endphp
              {!! $html_description !!}
            @endif
            @if ($one_subcontent->iframe_map_src)
              <div>
                <iframe src="{{ $one_subcontent->iframe_map_src }}" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            @endif
          </div>
        </div>
      @endforeach

    </div>
    @include ('footer.content')
  </div>
@stop
