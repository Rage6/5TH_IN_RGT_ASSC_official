@extends('layouts.master')

@section('casualties_style')
  <!-- Casualties Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/memorials/casualties/360_casualties.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/memorials/casualties/375_casualties.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 375px) and (max-width: 414px)" type="text/css" href="/css/my_custom/memorials/casualties/414_casualties.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/memorials/casualties/768_casualties.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/memorials/casualties/1366_casualties.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/memorials/casualties/1920_casualties.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/memorials/casualties/past_1920_casualties.css">
  @include ('footer.style')
@stop

@section('casualties_selected')
<div class="mainAndFooter">

  <div class="mainBody">
    <div class="whiteBand">
      <div class="purpleBand">
        <div class="casualtyTitle">
          WE REMEMBER
        </div>
        <div class="casualtySubtitle">
          Killed In Action, Missing In Action, & Died In Service
        </div>
      </div>
    </div>
    <div class="backBttn">
      <a href="{{ route('casualties.all') }}">
        << BACK
      </a>
    </div>
    <div class="dailyAndSearchBox">
      <div class="casualtyIntro oneSection selectedSection">
        <div class="casualtyName">
          <div class="rankWithMedal">
            <div>
              @if ($casualty_data->rank)
                {{ $casualty_data->rank }}
              @endif
            </div>
            @if ($casualty_data->moh_conflict_id != null)
              <div class="medal" style="background-image:url('/images/memorials/us-army-medal-of-honor.png')"></div>
            @else
              <div class="medal"></div>
            @endif
          </div>
          <div>
            {{ $casualty_data->first_name }}
            @if ($casualty_data->middle_name != null)
              {{ $casualty_data->middle_name }}
            @endif
            {{ $casualty_data->last_name }}
          </div>
        </div>
        @if ($casualty_data->veteran_img != null)
          <div class="casualtyImg" style="background-image: url('/{{ $img_path }}/{{ $casualty_data->veteran_img }}?t=@php echo(time()) @endphp')"></div>
        @else
          <div class="casualtyImg" style="background-image: url('https://media-cdn.tripadvisor.com/media/photo-s/04/65/24/73/d-day-tours-of-normandy.jpg')"></div>
        @endif
        <div class="casualtyBio casualtyBioSummary">
          <div>
            <u>SUMMARY</u>
          </div>
          {{ $casualty_data->rank }} {{ $casualty_data->last_name }} died
          @if ($casualty_data->kia_location != null)
            in {{ $casualty_data->kia_location }}
          @endif
          on {{ $casualty_data->month_of_death }}/{{ $casualty_data->day_of_death }}/{{ $casualty_data->year_of_death }}
          @if (isset($conflict->name))
            during the {{ $conflict->name }}
          @endif
          @if ($casualty_data->unit != null)
            as a member of {{ $casualty_data->unit }}
          @endif.
          @if ($casualty_data->injury_type != null)
            The soldier's injury type or status was recorded as '{{ $casualty_data->injury_type }}'.
          @endif
          @if ($casualty_data->state != null || $casualty_data->burial_site != null)
            {{ $casualty_data->last_name }}
          @endif
          @if ($casualty_data->state != null)
            originated from {{ $casualty_data->city }}, {{ $casualty_data->state }}
          @endif
          @if ($casualty_data->state != null && $casualty_data->burial_site != null)
            and
          @endif
          @if ($casualty_data->burial_site != null)
            is buried at {{ $casualty_data->burial_site }}
          @endif
          .
        </div>
        @if ($casualty_data->comments != null)
        <div class="casualtyBio casualtyBioDetails">
          <div class="casualtyBioTitle">
            <u>DETAILS</u>
          </div>
          <div class="casualtyBioContent">
            {{ $casualty_data->comments }}
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
  @include ('footer.content')
</div>
@stop
