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

@section('deceased_content')
<div class="mainAndFooter">
  <div class="mainBody">
    <!-- <div class="whiteBand"> -->
      <div class="titleBand">
        <div class="casualtyTitle">
          PLAYING TAPS
        </div>
        <div class="casualtySubtitle">
          In Memory Of Our<br>
          Deceased Members
        </div>
      </div>
    <!-- </div> -->
    <div class="leftSearchColumn oneSection">
      <div class="sidePad leftPad"></div>
      <div class="casualtySearch">
        <div class="casualtySearchTitle">FIND A MEMBER</div>
        <form method="POST" action="">
          @csrf
          <div class="casualtySearchForm">
            <input class="firstNameInput" type="text" name="firstName" placeholder="First Name"/>
            <input class="lastNameInput" type="text" name="lastName" placeholder="Last Name"/>
            <input class="submitInput" type="submit" name="submitSearch" />
          </div>
        </form>
      </div>
      <div class="casualtyList">
        <div class="casualtyTotal">
          Deceased Members Found: <span>{{ $deceased_count }}</span>
        </div>
        <div class="allOverallRows">
          @if ($all_deceased_basics != null)
            @foreach ($all_deceased_basics as $one_deceased_basic)
              <div class="overallRow">
                <div class="casualtyListRow"
                @if ($one_deceased_basic->veteran_img)
                  style="background-image:url('/images/veteran/{{ $one_deceased_basic->veteran_img }}')"
                @else
                  style="background-image:url('/images/deceased/default_tombstone.png')"
                @endif>
                </div>
                <div class="rowTextOverlap">
                  <div class="rowName">
                    <u>
                      @if ($one_deceased_basic->rank)
                        {{ $one_deceased_basic->rank }}
                      @endif {{ $one_deceased_basic->first_name }} {{ $one_deceased_basic->last_name }}
                    </u>
                  </div>
                  <div>
                    <div class="rowDetails">
                      {{ $one_deceased_basic->month_of_death }}/{{ $one_deceased_basic->day_of_death }}/{{ $one_deceased_basic->year_of_death }}
                    </div>
                    <div class="rowLink">
                      <a href="{{ route('deceased.select',['id' => $one_deceased_basic->id]) }}">
                        LEARN MORE >>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          @else
            <div>No recipients found</div>
          @endif
        </div>
        @if ($deceased_count > 18)
          {{ $all_deceased_basics->links('pagination::casualty-list') }}
        @else
          <div style="height:1px"></div>
        @endif
      </div>
      <div class="sidePad rightPad">
      </div>
    </div>
  </div>
  @include ('footer.content')
</div>
@stop
