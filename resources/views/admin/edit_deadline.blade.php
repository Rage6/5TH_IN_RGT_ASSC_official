@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  {{ __('CHANGE MEMBERSHIP STATUS') }}
                </div>

                <div class="card-body">
                  <div>
                    <a href="{{ route('edit.member.index',[
                      'id' => $member->id
                    ]) }}">
                      << BACK
                    </a>
                    <!-- <form method="POST">
                      @csrf -->
                      <div class="basicStatusGrid">
                        <div>
                          <u>PERMANENT</u>: The following options cause expiration dates to never expire. Casualties and deceased members should be registered recorded as any permanent option.
                          <ul>
                            @foreach ($all_options as $one_option)
                              @if ($one_option->how_long == null)
                                <li>{{ $one_option->name }}</li>
                              @endif
                            @endforeach
                          </ul>
                        </div>
                        <div class="statusButton">
                          <form method="POST" action="{{ route('edit.member.permanent',['id' => $member->id]) }}">
                            @csrf
                            <button class="btn btn-primary" type="submit">
                              MAKE PERMANENT
                            </button>
                          </form>
                        </div>
                      </div>
                      <div class="basicStatusGrid">
                        <div>
                          <u>NONMEMBER</u>: This disables an account, NOT delete it. To reactivate an account it will be in either the "Edit MOH Recipient", "Edit Casualty Records", or "See Nonmember List" options.
                        </div>
                        <div class="statusButton">
                          <form method="POST" action="{{ route('edit.member.nonmember',['id' => $member->id]) }}">
                            @csrf
                            <button class="btn btn-primary" type="submit">
                              MAKE NONMEMBER
                            </button>
                          </form>
                        </div>
                      </div>
                      <div class="basicStatusGrid">
                        <form method="POST" action="{{ route('edit.member.manual',['id'=>$member->id]) }}">
                          @csrf
                          <div>
                            <u>EXPIRATION DATE</u>: Expired account are automatically disabled (but NOT deleted). They can be reactivated in either the "Edit MOH Recipient", "Edit Casualty Records", or "See Nonmember List" options. The following list temporary options and their times.
                            <ul>
                              @foreach ($all_options as $one_option)
                                @if ($one_option->how_long != null)
                                  <li>{{ $one_option->name }}</li>
                                @endif
                              @endforeach
                            </ul>
                            @php
                              $year = date("Y");
                              $month = date("m");
                              $day = date("d");
                              if ($member->expiration_date && $member->expiration_date != "1970-01-01 00:00:00") {
                                $year = substr($member->expiration_date,0,4);
                                $month = substr($member->expiration_date,5,2);
                                $day = substr($member->expiration_date,8,2);
                              };
                            @endphp
                            <div class="setDateInput">
                              <div>
                                YEAR
                              </div>
                              <input
                                name="yearNumber"
                                type="number"
                                value="{{ $year }}"
                                min="1971"
                                max="3000">
                              <div>
                                MONTH
                              </div>
                              <input
                                name="monthNumber"
                                type="number"
                                value="{{ $month }}"
                                min="1"
                                max="12">
                              <div>
                                DAY
                              </div>
                              <input
                                name="dayNumber"
                                type="number"
                                value="{{ $day }}"
                                min="1"
                                max="31">
                            </div>
                          </div>
                          <div class="statusButton">
                            <!-- <button class="btn btn-primary" formaction="{{ route('edit.member.manual',['id'=>$member->id]) }}"> -->
                            <button class="btn btn-primary" type="submit">
                              SET DATE
                            </button>
                          </div>
                        </form>
                      </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
