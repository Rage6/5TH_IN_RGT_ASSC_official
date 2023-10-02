@extends('layouts.master')

@section('deceased_style')
  <!-- Deceased Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/memorials/deceased/360_deceased.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/memorials/deceased/375_deceased.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 375px) and (max-width: 414px)" type="text/css" href="/css/my_custom/memorials/deceased/414_deceased.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/memorials/deceased/768_deceased.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/memorials/deceased/1366_deceased.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/memorials/deceased/1920_deceased.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/memorials/deceased/past_1920_deceased.css">
  @include ('footer.style')
@stop

@section('deceased_selected')
<div class="mainAndFooter">

  <div class="mainBody">
    <div class="whiteBand">
      <div class="blueBand">
        <div class="casualtyTitle">
          ABOVE & <br class="splitLetters"> BEYOND
        </div>
        <div class="casualtySubtitle">
          Medal of Honor <br class="splitLetters"> Recipients
        </div>
      </div>
    </div>
    <!-- <div class="backBttn">
      <a href="{{ route('recipients.all') }}">
        << BACK
      </a>
    </div> -->
    <div class="dailyAndSearchBox">
      <div class="backBttn">
        <a href="{{ route('recipients.all') }}">
          << BACK
        </a>
      </div>
      <div class="recipientIntro oneSection selectedSection">
        <div class="recipientNameAndImg">
          <div class="recipientName">
            @if ($recipient_data->rank)
              <div class="rankWithMedal">
                {{ $recipient_data->rank }}
              </div>
            @endif
            <div>
              {{ $recipient_data->first_name }}
              @if ($recipient_data->middle_name != null)
                {{ substr($recipient_data->middle_name,0,1) }}.
              @endif
              {{ $recipient_data->last_name }}
              <div>
                {{ $conflict->name }}
              </div>
            </div>
          </div>
          @if ($recipient_data->veteran_img != null)
            <div class="recipientImg" style="background-image:url('/images/veteran/{{ $recipient_data->veteran_img }}?t=@php echo(time()) @endphp)'),linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7))"></div>
          @else
            <div class="recipientImg" style="background-image:url('/images/recipients/Medal_of_Honor_default.jpg'),linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7))"></div>
          @endif
          <div class="actionDate">
            <div class="recipientBioTitle">
              BASIC INFORMATION
            </div>
            <div>
              <div class="basicKey">Full Name</div>
              <div class="basicValue">{{ $recipient_data->first_name }} {{ $recipient_data->middle_name }} {{ $recipient_data->last_name }}</div>
              @if ($recipient_data->month_of_moh_action && $recipient_data->day_of_moh_action && $recipient_data->year_of_moh_action)
                <div class="basicKey">
                  Date
                </div>
                <div class="basicValue">
                  {{ $recipient_data->month_of_moh_action }}/{{ $recipient_data->day_of_moh_action }}/{{ $recipient_data->year_of_moh_action }}
                </div>
              @endif
              @if ($recipient_data->moh_locaction)
                <div class="basicKey">
                  Location
                </div>
                <div class="basicValue">
                  {{ $recipient_data->moh_locaction }}
                </div>
              @endif
              @if ($recipient_data->rank)
                <div class="basicKey">Highest Rank</div>
                <div class="basicValue">{{ $recipient_data->rank }}</div>
              @endif
              <div class="basicKey">Awarded Posthumously</div>
              <div class="basicValue">
                @if ($recipient_data->awarded_posthumously == 1)
                  YES
                @else
                  NO
                @endif
              </div>
              @if ($recipient_data->burial_site)
                <div class="basicKey">Burial Site</div>
                <div class="basicValue">
                  {{ $recipient_data->burial_site }}
                </div>
              @endif
            </div>
          </div>
        </div>
        <div class="recipientBio recipientBioSummary">
          <!-- <div class="recipientNameAndImg">
            <div class="recipientName">
              @if ($recipient_data->rank)
                <div class="rankWithMedal">
                  {{ $recipient_data->rank }}
                </div>
              @endif
              <div>
                {{ $recipient_data->first_name }}
                @if ($recipient_data->middle_name != null)
                  {{ substr($recipient_data->middle_name,0,1) }}.
                @endif
                {{ $recipient_data->last_name }}
              </div>
            </div>
            @if ($recipient_data->veteran_img != null)
              <div class="recipientImg" style="background-image:url('/{{ $img_path }}/{{ $recipient_data->veteran_img }}?t=@php echo(time()) @endphp)')"></div>
            @else
              <div class="recipientImg" style="background-image:url('/images/recipients/Medal_of_Honor_default.jpg')"></div>
            @endif
            <div class="actionDate">
              <div class="recipientBioTitle">
                BASIC INFORMATION
              </div>
              <div>
                <div class="basicKey">Full Name</div>
                <div class="basicValue">{{ $recipient_data->first_name }} {{ $recipient_data->middle_name }} {{ $recipient_data->last_name }}</div>
                @if ($recipient_data->month_of_moh_action && $recipient_data->day_of_moh_action && $recipient_data->year_of_moh_action)
                  <div class="basicKey">
                    Event Date
                  </div>
                  <div class="basicValue">
                    {{ $recipient_data->month_of_moh_action }}/{{ $recipient_data->day_of_moh_action }}/{{ $recipient_data->year_of_moh_action }}
                  </div>
                @endif
                @if ($recipient_data->rank)
                  <div class="basicKey">Highest Rank</div>
                  <div class="basicValue">{{ $recipient_data->rank }}</div>
                @endif
                @if ($recipient_data->awarded_posthumously)
                  <div class="basicKey">Awarded Posthumously</div>
                  <div class="basicValue">
                    @if ($recipient_data->awarded_posthumously == 1)
                      YES
                    @else
                      NO
                    @endif
                  </div>
                @endif
              </div>
            </div>
          </div> -->
          <div class="recipientBioTitle">
            OFFICIAL CITATION
          </div>
          <div>
            "{{ $recipient_data->citation }}"
          </div>
          @if ($recipient_data->comments != null)
          <!-- <div class="recipientBio recipientDetails"> -->
          <div class="recipientBioTitle">
            ADDITIONAL INFORMATION
          </div>
          <div class="recipientBioContent">
            {{ $recipient_data->comments }}
          </div>
          <!-- </div> -->
          @endif
        </div>
        @if (count($all_links) > 0)
          <div class="externalBox">
            <div class="externalTitle">
              External Links
            </div>
            <div class="linkList">
              @foreach ($all_links as $one_link)
                <div class="linkRow">
                  <a href="{{ $one_link->url }}" target="_blank">
                    + {{ $one_link->name }}
                  </a>
                </div>
              @endforeach
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>
  @include ('footer.content')
</div>
@stop
