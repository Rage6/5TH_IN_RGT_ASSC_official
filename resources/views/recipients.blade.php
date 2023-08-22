@extends('layouts.master')

@section('recipients_style')
  <!-- Recipients Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/memorials/recipients/360_recipients.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/memorials/recipients/375_recipients.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 375px) and (max-width: 414px)" type="text/css" href="/css/my_custom/memorials/recipients/414_recipients.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/memorials/recipients/768_recipients.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/memorials/recipients/1366_recipients.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/memorials/recipients/1920_recipients.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/memorials/recipients/past_1920_recipients.css">
  @include ('footer.style')
@stop

@section('recipients_content')
<div class="mainAndFooter">
  <div class="mainBody">
    <div class="whiteBand">
      <div class="blueBand">
        <div class="casualtyTitle">
          ABOVE AND BEYOND
        </div>
        <div class="casualtySubtitle">
          Medal of Honor Recipients
        </div>
      </div>
    </div>
    <div class="dailyAndSearchBox">
      <div class="leftSearchColumn oneSection">
        <div class="casualtySearch">
          <div class="casualtySearchTitle">FIND A RECIPIENT</div>
            <form method="POST" action="{{ route('recipients.search') }}">
              @csrf
              <div class="casualtySearchForm">
                <input class="firstNameInput" type="text" name="firstName" placeholder="First Name"/>
                <input class="lastNameInput" type="text" name="lastName" placeholder="Last Name"/>
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
            Total: <span>{{ $recipient_count }}</span>
          </div>
          <div class="casualtyListTitle">
            <div class="nameAndUnit">Name & Date</div>
            <div class="justName">Name</div>
            <div class="justUnit">Date</div>
            <div class="conflictName">Conflict</div>
          </div>
          <div class="allCasualtyListRows">
            @if ($all_recipient_basics != null)
              @php $bkgdColor = 'rowA' @endphp
              @foreach ($all_recipient_basics as $one_recipient_basic)
                <a href="{{ route('recipients.select',['id' => $one_recipient_basic->id]) }}">
                  <div class="casualtyListRow {{ $bkgdColor }}">
                    <div class="rowName">
                      {{ $one_recipient_basic->last_name }}, {{ $one_recipient_basic->first_name }}
                    </div>
                    <div class="rowUnit">
                      {{ $one_recipient_basic->full_date }}
                    </div>
                    <div class="rowConflict">
                      {{ $one_recipient_basic->con_name }}
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
              <div>No recipients found</div>
            @endif
          </div>
          {{ $all_recipient_basics->links('pagination::casualty-list') }}
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
</div>
@stop
