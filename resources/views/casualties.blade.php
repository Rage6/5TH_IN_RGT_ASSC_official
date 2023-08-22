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

@section('casualties_content')
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
    <div class="dailyAndSearchBox">
      <div class="casualtyIntro oneSection">
        <!-- <div class="dailyMemorial oneSection">
          <div class="dailyInfo">
            <div class="rankWithMedal">
              <div>
                {{ $already_selected->rank }}
              </div>
              @if ($already_selected->moh_id != null)
                <div class="medal" style="background-image:url('/images/memorials/us-army-medal-of-honor.png')"></div>
              @else
                <div class="medal"></div>
              @endif
            </div>
            <div>
              {{ $already_selected->first_name }}
              @if ($already_selected->middle_name != null)
                {{ $already_selected->middle_name }}
              @endif
              {{ $already_selected->last_name }}
            </div>
          </div>
          @if ($already_selected->con_name != null)
            <div class="dailyConflict">
              {{ $already_selected->con_name }}
            </div>
          @endif
          @if ($already_selected->photo != null)
            <div class="dailyImg" style="background-image: url('https://5th-rgt-profile-photos.s3.us-east-2.amazonaws.com/{{ $already_selected->photo }}?t=@php echo(time()) @endphp')"></div>
          @else
            <div class="dailyImg" style="background-image: url('https://media-cdn.tripadvisor.com/media/photo-s/04/65/24/73/d-day-tours-of-normandy.jpg')"></div>
          @endif
          <div class="dailyBio">
            @if ($already_selected->city != null && $already_selected->state != null)
              <div>
                Home: {{ $already_selected->city }}, {{ $already_selected->state }}
              </div>
            @elseif ($already_selected->city == null && $already_selected->state != null)
              <div>
                Home: {{ $already_selected->state }}
              </div>
            @endif
            @if ($already_selected->unit != null)
              <div>
                Unit: {{ $already_selected->unit }}
              </div>
            @endif
            <div>
              Date of Death: {{ $already_selected->month_of_death }}/{{ $already_selected->day_of_death }}/{{ $already_selected->year_of_death }}
            </div>
            @if ($already_selected->place != null)
              <div>
                Location of Death: {{ $already_selected->place }}
              </div>
            @endif
            @if ($already_selected->injury_type != null)
              <div>
                Type of Injury: {{ $already_selected->injury_type }}
              </div>
            @endif
            @if ($already_selected->burial_site != null)
              <div>
                Burial Site: {{ $already_selected->burial_site }}
              </div>
            @endif
            @if ($already_selected->comments != null)
              <div>
                Comments: {{ $already_selected->comments }}
              </div>
            @endif
            @if ($already_selected->moh_id != null)
              <div>
                <a href="/memorials/medal_of_honor/{{ $already_selected->moh_id }}">
                  Medal of Honor (5th IN RGT Association)
                </a>
              </div>
            @endif

          </div>
        </div> -->
        <div class="dailyMemorial oneSection">
          <div class="dailyInfo">
            <div class="rankWithMedal">
              <div>
                Today we honor...
              </div>
              @if ($already_selected->moh_id != null)
                <div class="medal" style="background-image:url('/images/memorials/us-army-medal-of-honor.png')"></div>
              @else
                <div class="medal"></div>
              @endif
            </div>
            <div class="dailyName">
              {{ $already_selected->rank }} {{ $already_selected->first_name }}
              @if ($already_selected->middle_name != null)
                {{ $already_selected->middle_name }}
              @endif
              {{ $already_selected->last_name }}
            </div>
          <!-- </div> -->
          @if ($already_selected->veteran_img != null)
            <div class="dailyImg" style="background-image: url('/{{ $image_path }}/{{ $already_selected->veteran_img }}?t=@php echo(time()) @endphp')"></div>
          @else
            <div class="dailyImg" style="background-image: url('https://media-cdn.tripadvisor.com/media/photo-s/04/65/24/73/d-day-tours-of-normandy.jpg')"></div>
          @endif
          @if ($already_selected->con_name != null)
            <div class="dailyConflict">
              {{ $already_selected->con_name }}
            </div>
          @endif
          </div>
          <a href="{{ route('casualties.select',['id' => $already_selected->id]) }}">
            <div>Learn more >></div>
          </a>
        </div>
        The creation of this page was done to honor  those who paid the supreme sacrifice while in service to their nation.  Struck down in the prime of their lives, they never faltered in their dedication to fellow soldiers and gave their lives so that others would survive.   We, who survived the brutal reality of war, must never forget the price they paid.  The Association's recognition of their valor cannot be complete until this page is accurate in detail.  We view it as a work in progress and depend upon you to help make it as comprehensive as possible.  Please submit information about omissions, corrections, or other details that would be helpful too.
      </div>
      <div class="leftSearchColumn oneSection">
        <div class="casualtySearch">
          <div class="casualtySearchTitle">FIND A FALLEN SOLDIER</div>
            <form method="POST" action="{{ route('casualties.search') }}">
              @csrf
              <div class="casualtySearchForm">
                <input class="firstNameInput" type="text" name="firstName" placeholder="First Name"/>
                <input class="lastNameInput" type="text" name="lastName" placeholder="Last Name"/>
                <input class="unitInput" type="text" name="unit" placeholder="Unit"/>
                <select class="conflictInput" name="conflict">
                  <option value="ALL" selected>All Conflicts</option>
                  @foreach ($all_conflicts as $one_conflict)
                    @if ($one_conflict->parent_id == null)
                      <option value="{{ $one_conflict->id }}">
                        {{ $one_conflict->name }}
                      </option>
                      @foreach ($all_conflicts as $subconflict)
                        @if ($subconflict->parent_id == $one_conflict->id)
                          <option value="{{ $subconflict->id }}">
                            - {{ $subconflict->name }}
                          </option>
                        @endif
                      @endforeach
                    @endif
                  @endforeach
                </select>
                <input class="submitInput" type="submit" name="submitSearch" />
                <!-- <div class="submitInput">SEARCH</div> -->
              </div>
            </form>
        </div>
        <div class="casualtyList">
          <div class="casualtyTotal">
            Total: <span>{{ $casualty_count }}</span>
          </div>
          <div class="casualtyListTitle">
            <div class="nameAndUnit">Name & Unit</div>
            <div class="justName">Name</div>
            <div class="justUnit">Unit</div>
            <div class="conflictName">Conflict</div>
          </div>
          <div class="allCasualtyListRows">
            @if ($all_casualty_basics != null)
              @php $bkgdColor = 'rowA' @endphp
              @foreach ($all_casualty_basics as $one_casualty_basic)
                <a href="{{ route('casualties.select',['id' => $one_casualty_basic->id]) }}">
                  <div class="casualtyListRow {{ $bkgdColor }}">
                    <div class="rowName">
                      {{ $one_casualty_basic->last_name }}, {{ $one_casualty_basic->first_name }}
                    </div>
                    <div class="rowUnit">
                      {{ $one_casualty_basic->unit }}
                    </div>
                    <div class="rowConflict">
                      {{ $one_casualty_basic->con_name }}
                    </div>
                  </div>
                  @php
                    if ($bkgdColor != 'rowA') {
                      $bkgdColor = 'rowA';
                    } else {
                      $bkgdColor = 'rowB';
                    };
                  @endphp
                </a>
              @endforeach
            @else
              <div>No casualties found</div>
            @endif
          </div>
          {{ $all_casualty_basics->links('pagination::casualty-list') }}
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
</div>
@stop
