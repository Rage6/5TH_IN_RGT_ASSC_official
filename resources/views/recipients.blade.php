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
          ABOVE & <br class="splitLetters">
          BEYOND
        </div>
        <div class="casualtySubtitle">
          Medal of Honor <br class="splitLetters">
          Recipients
        </div>
      </div>
    </div>
    <div class="leftSearchColumn oneSection">
      <div class="sidePad leftPad"></div>
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
          Total Recipients Found: <span>{{ $recipient_count }}</span>
        </div>
        <div class="allOverallRows">
          @if ($all_recipient_basics != null)
            @php $bkgdColor = 'rowA' @endphp
            @foreach ($all_recipient_basics as $one_recipient_basic)
              <div class="overallRow">
                <div class="casualtyListRow {{ $bkgdColor }}"
                @if ($one_recipient_basic->veteran_img)
                  style="background-image:url('/images/veteran/{{ $one_recipient_basic->veteran_img }}')"
                @else
                  style="background-image:url('/images/recipients/Medal_of_Honor_default.jpg')"
                @endif>
                </div>
                <div class="rowTextOverlap">
                  <div class="rowName">
                    <u>
                      @if ($one_recipient_basic->rank)
                        @if ($one_recipient_basic->moh_rank)
                          {{ $one_recipient_basic->moh_rank }}
                        @else
                          {{ $one_recipient_basic->rank }}
                        @endif
                      @endif {{ $one_recipient_basic->first_name }} {{ $one_recipient_basic->last_name }}
                    </u>
                  </div>
                  <div>
                    <div class="rowDetails">
                      {{ substr($one_recipient_basic->full_date,-4) }} - {{ $one_recipient_basic->con_name }}
                    </div>
                    <div class="rowLink">
                      <a href="{{ route('recipients.select',['id' => $one_recipient_basic->id]) }}">
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
        @if ($recipient_count > 20)
          {{ $all_recipient_basics->links('pagination::casualty-list') }}
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
