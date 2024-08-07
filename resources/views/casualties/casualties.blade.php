@extends('layouts.master')

@include('casualties.style')

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
