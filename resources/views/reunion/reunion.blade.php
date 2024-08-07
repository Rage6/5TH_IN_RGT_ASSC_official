@extends('layouts.master')

@include('reunion.style')

@section('reunion_content')
  <div class="main">
    <div class="content">
      @if ($reunion_main->primary_image)
      <div class="reunionIntro regIntro">
      @else
      <div class="regIntroDefault">
      @endif
        <div class="regIntroCover">
          <div class="mainTitle">
            <div>Bobcat</div>
            <div>Reunion</div>
          </div>
          @php
            $months = [
              'January','February','March','April','May','June','July','August','September','October','November','December'
            ];
          @endphp
          <!-- <div class="reunionDate dateAndLocation"> -->
          @if ($reunion_main->first_day && $reunion_main->last_day)
            <div class="reunionDate dateAndLocation">
              <span>
                {{ $months[intval(substr($reunion_main->first_day,-5,2)) - 1] }} {{ substr($reunion_main->first_day,-2,2) }} - {{ substr($reunion_main->last_day,-2,2) }}, {{ substr($reunion_main->first_day,0,4) }}
              </span>
            </div>
          @else
            <div class="reunionDate dateAndLocation" style="color:rgba(0,0,0,0)">
              No date/time available
            </div>
          @endif
          <!-- </div> -->
          @if ($reunion_main->location)
            <div class="reunionLocation dateAndLocation">
              {{ $reunion_main->location }}
            </div>
          @else
            <div class="reunionLocation dateAndLocation" style="color: rgba(0,0,0,0)">
              No location available
            </div>
          @endif
          <div class="regBttnOverall">
            <div class="dateAndLocation regBttnIntro">
              Want To Attend?
            </div>
            <div class="regBttn" id="regBttn" onclick="openAndCloseForm()">
              Click Here!
            </div>
          </div>
        </div>
      </div>
      <div class="regForm" id="reunionForm" style="display:none">
        <div>
          <!-- <div class="regPart">
            PART 1
          </div> -->
          <form method="POST" action="{{ route('reunion.submit') }}">
            @csrf
            <div class="regFormFull">
              <div class="regFormHalf">
                <div class="regFormBasic">
                  <div class="regFormSubtitles">
                    Basic Information
                  </div>
                  @auth
                    <input required type='text' name='first_name' value='{{ $this_user->first_name }}' placeholder='First Name (required)'/>
                    <input required type='text' name='last_name' value='{{ $this_user->last_name }}' placeholder='Last Name (required)'/>
                    <input required type='email' name='email' value='{{ $this_user->email }}' placeholder='Email (required)'/>
                  @else
                    <input required type='text' name='first_name' placeholder='First Name (required)'/>
                    <input required type='text' name='last_name' placeholder='Last Name (required)'/>
                    <input required type='email' name='email' placeholder='Email (required)'/>
                  @endauth
                  <input required type='text' minlength='10' maxlength='16' name='phone_number' placeholder='Phone Number (required)'/>
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
                @for ($k = 0; $k < count($all_boolean_list); $k++)
                  @php $key = 'event_'.$k; @endphp
                  <div class='radioTypeBox'>
                    <div>
                      {{ $all_boolean_list[$k] }}
                    </div>
                    <input type='radio' name='{{ $key }}' value='Yes'/><span>Yes</span>
                    <input checked type='radio' name='{{ $key }}' value='No'/><span>No</span>
                  </div>
                @endfor
                <textarea rows="4" class="commentArea" name='comments' placeholder='Comments...'></textarea>
              </div>
            </div>
            <button
              data-callback='onSubmit'
              data-action='submit'
              onclick="showsProcessing()">
              REGISTER
            </button>
            <div class="disabledSubmitBttn">
              REGISTER
            </div>
          </form>
        </div>
      </div>
      <div class="regRow">
        @foreach ($all_subevents as $one_subevent)
          @if ($one_subevent->is_payment == null)
            <div class="regSection" style="background-image:url('/images/events/subevents/{{ $one_subevent->primary_image }}')">
              <div class="regSectionCoating {{ explode(',',$one_subevent->classes)[0] }}">
                <div
                  class="reunionSectBttn"
                  data-id="{{ strval($one_subevent->id) }}"
                  @if ($one_subevent->classes)
                    data-section="{{ str_replace('Section','',$one_subevent->classes) }}"
                  @endif
                  data-type="button"
                  onclick="clickSection({{ strval($one_subevent->id) }},'button')">{{ strtoupper($one_subevent->title) }}</div>
              </div>
            </div>
          @else
            @php
              $param_array = explode(";",$one_subevent->is_payment);
            @endphp
            <div class="regSection @if ($one_subevent->classes) {{ $one_subevent->classes }} @endif" style="background-image:url('/images/events/subevents/{{ $one_subevent->primary_image }}')">
              <div class="regSectionCoating {{ explode(',',$one_subevent->classes)[0] }}">
                <a href="{{ route('items.all',['purpose'=> $param_array[0],'title'=>$param_array[1]]) }}">
                  <div class="reunionSectBttn">
                    {{ strtoupper($one_subevent->title) }}
                  </div>
                </a>
              </div>
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
            ["/link-end/","</a>"],
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
          @if ($one_subcontent->classes)
            class="{{ str_replace('Section','',$one_subcontent->classes) }}Box reunionSectBox"
          @else
            class="reunionSectBox"
          @endif
          data-id="{{ strval($one_subcontent->id) }}"
          @if ($one_subcontent->classes)
            data-section="{{ str_replace('Section','',$one_subcontent->classes) }}"
          @endif
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
              : {{ $month }} {{ substr($one_subcontent->start_time,8,2) }}{{ $suffix }} @if ($one_subcontent->has_start_time == 1), {{ substr($one_subcontent->start_time,11,5) }} @endif
              @if ($one_subcontent->has_end_time == 1)
                @if ($one_subcontent->has_start_time == 1 && $one_subcontent->has_end_time == 1) - @endif @if ($month != $end_month) {{ $end_month }} @endif {{ substr($one_subcontent->end_time,11,5) }}
              @endif
            @endif
          </div>
          @if ($one_subcontent->classes)
            <div class="boxContent {{ str_replace('Section','',$one_subcontent->classes) }}Content">
          @else
            <div class="boxContent">
          @endif
            @if ($one_subcontent->location)
              @php
                $html_location = $one_subcontent->location;
                for ($i = 0; $i < count($swapCharacters); $i++) {
                  $html_location = str_replace($swapCharacters[$i][0],$swapCharacters[$i][1],$html_location);
                };
                if ($html_location) {
                  $swapCharacters[] = ["/location/",$html_location];
                };
              @endphp
            @endif
            @if ($one_subcontent->description)
              @php
                $html_description = $one_subcontent->description;
                $html_split = explode("||",$html_description);
                $html_description = $html_split[0];
                if (count($html_split) > 1) {
                  $all_link_array = explode("::",$html_split[1]);
                  for ($j = 0; $j < count($all_link_array); $j++) {
                    $this_array = explode(">>",$all_link_array[$j]);
                    $html_description = str_replace("/link-start-".$this_array[0]."/","<a target='_blank' href='".$this_array[1]."'>",$html_description);
                  };
                };
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
