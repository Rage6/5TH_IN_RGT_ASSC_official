@extends('layouts.master')

@include('casualties.style')

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
          <div class="casualtyImg" style="background-image: url('/{{ $img_path }}/{{ $casualty_data->veteran_img }}')"></div>
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
          @if ($casualty_data->state != null || $casualty_data->burial_site != null)
            .
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
