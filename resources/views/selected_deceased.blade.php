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
    <div class="titleWrap">
      <div class="titleBand">
        <div class="casualtyTitle">
          PLAYING TAPS
        </div>
        <div class="casualtySubtitle">
          In Memory Of Our<br>
          Deceased Members
        </div>
      </div>
    </div>
    <div class="selectedMain leftSearchColumn oneSection">
      <div class="sidePad leftPad"></div>
      <div class="dailyAndSearchBox">
        <div class="backBttn">
          <a href="{{ route('deceased.all') }}">
            << BACK
          </a>
        </div>
        <div class="recipientIntro oneSection selectedSection">
          <div class="recipientNameAndImg" @if (!$member->comments) style="background: transparent" @endif>
            <div class="basicInfo @if (!$member->comments) basicInfoNoComment @endif">
              <div class="recipientName @if (!$member->comments) recipientNameNoComment @endif">
                <div>
                  {{ $member->first_name }}
                  @if ($member->middle_name != null)
                    {{ substr($member->middle_name,0,1) }}.
                  @endif
                  {{ $member->last_name }}
                </div>
                <div class="recipientImg imgCard">
                  @if ($member->current_img != null && $member->veteran_img != null)
                    <div class="primaryImg" data-image="main" style="background-image:url('/images/current/{{ $member->current_img }}?t=@php echo(time()) @endphp)'),linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7))"></div>
                    <div class="secondaryImg" data-image="thumbnail" style="background-image:url('/images/veteran/{{ $member->veteran_img }}?t=@php echo(time()) @endphp)'),linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));"></div>
                  @elseif ($member->current_img != null)
                    <div class="recipientImg" style="background-image:url('/images/current/{{ $member->current_img }}?t=@php echo(time()) @endphp)'),linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7))"></div>
                  @elseif ($member->veteran_img != null)
                    <div class="recipientImg" style="background-image:url('/images/veteran/{{ $member->veteran_img }}?t=@php echo(time()) @endphp)'),linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7))"></div>
                  @else ($member->current_img == null && $member->veteran_img == null)
                    <div class="recipientImg" style="background-size: cover;background-image:url('/images/deceased/default_tombstone.png');filter:grayscale()"></div>
                  @endif
                </div>
              </div>
              <div class="actionDate @if (!$member->comments) actionDateNoComment @endif">
                <div class="recipientBioTitle">
                  BASIC INFORMATION
                </div>
                <div class="basicGrid">
                  <div class="basicKey">Full Name</div>
                  <div class="basicValue">
                    {{ $member->first_name }} {{ $member->middle_name }} {{ $member->last_name }}
                  </div>
                  <div class="basicKey">Date of Death</div>
                  <div class="basicValue">
                    @if ($member->month_of_death) {{ $member->month_of_death }} @else __ @endif/ @if ($member->day_of_death) {{ $member->day_of_death }} @else __ @endif / @if ($member->year_of_death) {{ $member->year_of_death }} @else ____ @endif
                  </div>
                  @if ($member->burial_site)
                    <div class="basicKey">Burial Site</div>
                    <div class="basicValue">{{ $member->burial_site }}</div>
                  @endif
                  @if ($member->spouse)
                    <div class="basicKey">Spouse</div>
                    <div class="basicValue">{{ $member->spouse }}</div>
                  @endif
                  @if ($member->rank)
                    <div class="basicKey">Highest Rank</div>
                    <div class="basicValue">{{ $member->rank }}</div>
                  @endif
                </div>
                @if ($all_conflicts)
                  <div class="basicKey">Veteran of...</div>
                  <div class="basicValue">
                    <ul>
                      @foreach ($all_conflicts as $one_conflict)
                        <li>{{ $one_conflict->name }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
                @if (count($all_links) > 0)
                  <div class="basicKey">
                    External Links
                  </div>
                  <div class="basicValue">
                    @foreach ($all_links as $one_link)
                      <div>
                        <a href="{{ $one_link->url }}" target="_blank">
                          + {{ $one_link->name }}
                        </a>
                      </div>
                    @endforeach
                  </div>
                @endif
              </div>
            </div>@if ($member->comments){{ $member->comments }}@endif
          </div>
          <!-- @if ($member->comments)
            <div class="recipientBio">
              {{ $member->comments }}
            </div>
          @endif -->
          <!-- @if (count($all_links) > 0)
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
          @endif -->
        </div>
      </div>
      <div class="sidePad rightPad"></div>
    </div>

  </div>
  @include ('footer.content')
</div>
@stop
