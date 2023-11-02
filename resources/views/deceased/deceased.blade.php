@extends('layouts.master')

@include('deceased.style')

@section('deceased_content')
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
    <div class="leftSearchColumn oneSection">
      <div class="sidePad leftPad"></div>
      <div class="casualtySearch">
        <div class="casualtySearchTitle">FIND A MEMBER</div>
        <form method="POST" action="{{ route('deceased.search') }}">
          @csrf
          <div class="casualtySearchForm">
            <input class="firstNameInput" type="text" name="firstName" @if ($search_first) value="{{ $search_first }}" @endif placeholder="First Name"/>
            <input class="lastNameInput" type="text" name="lastName" @if ($search_last) value="{{ $search_last }}" @endif placeholder="Last Name"/>
            <select class="conflictInput" name="conflictId">
              <option value="">
                Choose war/conflict
              </option>
              @foreach ($possible_conflicts as $one_conflict)
                <option value="{{ $one_conflict->id }}" @if ($search_conflict == $one_conflict->id) selected @endif>
                  {{ $one_conflict->name }}
                </option>
              @endforeach
            </select>
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
                @if ($one_deceased_basic->current_img)
                  style="background-image:url('/images/current/{{ $one_deceased_basic->current_img }}')"
                @elseif ($one_deceased_basic->veteran_img)
                  style="background-image:url('/images/veteran/{{ $one_deceased_basic->veteran_img }}')"
                @else
                  style="background-image:url('/images/deceased/default_tombstone.png');filter:grayscale();"
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
                      Passed away: @if ($one_deceased_basic->month_of_death) {{ $one_deceased_basic->month_of_death }} @else __ @endif/@if ($one_deceased_basic->day_of_death) {{ $one_deceased_basic->day_of_death }} @else __ @endif/@if ($one_deceased_basic->year_of_death) {{ $one_deceased_basic->year_of_death }} @else ____ @endif
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
            <div>No members found</div>
          @endif
        </div>
        @if ($how_many_pages > 1)
          <div class="deceasedPaginator">
            @for ($i = 1; $i <= $how_many_pages; $i++ )
              <span>
                <a href="{{ url('/deceased-members?page='.$i) }}" @if ($i == $current_page) style="text-decoration: underline" @endif>
                  {{ $i }}
                </a>
              </span>
            @endfor
          </div>
        @endif
      </div>
      <div class="sidePad rightPad">
      </div>
    </div>
  </div>
  @include ('footer.content')
</div>
@stop
