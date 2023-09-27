@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                  <a href="{{ route('edit.member.index',['id' => $id]) }}">
                    << BACK
                  </a>
                  <div class="basicInfoSubtitle">
                    TIMES ON A BOBCAT UNIT
                  </div>
                  <form method="POST" action="{{ route('edit.member.timespan.post',['id' => $id,'timespan_id'=>$timespan->id]) }}">
                    @csrf
                    <div class="basicInfoGrid">
                      <div>Job</div>
                      <input type="text" name="job" id="job" value="{{ $timespan->job }}" />
                    </div>
                    <div class="basicInfoGrid">
                      <div>Unit</div>
                      <input type="text" name="unit" id="unit" value="{{ $timespan->unit }}" />
                    </div>
                    <div class="basicInfoGrid">
                      <div>Began on...</div>
                      <div>
                        <div>
                          <div>Month</div>
                          <select name="startMonth">
                            <option value="0" @if ($timespan->start_month == null) selected @endif >
                              Unknown
                            </option>
                            <option value="1" @if ($timespan->start_month == 1) selected @endif >
                              JANUARY
                            </option>
                            <option value="2" @if ($timespan->start_month == 2) selected @endif >
                              FEBRUARY
                            </option>
                            <option value="3" @if ($timespan->start_month == 3) selected @endif >
                              MARCH
                            </option>
                            <option value="4" @if ($timespan->start_month == 4) selected @endif >
                              APRIL
                            </option>
                            <option value="5" @if ($timespan->start_month == 5) selected @endif >
                              MAY
                            </option>
                            <option value="6" @if ($timespan->start_month == 6) selected @endif >
                              JUNE
                            </option>
                            <option value="7" @if ($timespan->start_month == 7) selected @endif >
                              JULY
                            </option>
                            <option value="8" @if ($timespan->start_month == 8) selected @endif >
                              AUGUST
                            </option>
                            <option value="9" @if ($timespan->start_month == 9) selected @endif >
                              SEPTEMBER
                            </option>
                            <option value="10" @if ($timespan->start_month == 10) selected @endif >
                              OCTOBER
                            </option>
                            <option value="11" @if ($timespan->start_month == 11) selected @endif >
                              NOVEMBER
                            </option>
                            <option value="12" @if ($timespan->start_month == 12) selected @endif >
                              DECEMBER
                            </option>
                          </select>
                        </div>
                        <div>Year</div>
                        <div>
                          <input type="number" name="startYear" value="{{ $timespan->start_year }}" min="1812" max="3000" required>
                        </div>
                      </div>
                    </div>
                    <div class="basicInfoGrid">
                      <div>Ended on...</div>
                      <div>
                        <div>
                          <div>Month</div>
                          <select name="endMonth">
                            <option value="0" @if ($timespan->end_month == null) selected @endif >
                              Unknown
                            </option>
                            <option value="1" @if ($timespan->end_month == 1) selected @endif >
                              JANUARY
                            </option>
                            <option value="2" @if ($timespan->end_month == 2) selected @endif >
                              FEBRUARY
                            </option>
                            <option value="3" @if ($timespan->end_month == 3) selected @endif >
                              MARCH
                            </option>
                            <option value="4" @if ($timespan->end_month == 4) selected @endif >
                              APRIL
                            </option>
                            <option value="5" @if ($timespan->end_month == 5) selected @endif >
                              MAY
                            </option>
                            <option value="6" @if ($timespan->end_month == 6) selected @endif >
                              JUNE
                            </option>
                            <option value="7" @if ($timespan->end_month == 7) selected @endif >
                              JULY
                            </option>
                            <option value="8" @if ($timespan->end_month == 8) selected @endif >
                              AUGUST
                            </option>
                            <option value="9" @if ($timespan->end_month == 9) selected @endif >
                              SEPTEMBER
                            </option>
                            <option value="10" @if ($timespan->end_month == 10) selected @endif >
                              OCTOBER
                            </option>
                            <option value="11" @if ($timespan->end_month == 11) selected @endif >
                              NOVEMBER
                            </option>
                            <option value="12" @if ($timespan->end_month == 12) selected @endif >
                              DECEMBER
                            </option>
                          </select>
                        </div>
                        <div>
                          <div>Year</div>
                          <input type="number" name="endYear" value="{{ $timespan->end_year }}" min="1812" max="3000" required>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="addTimespan" class="btn btn-primary">
                      EDIT TIMESPAN
                    </button>
                    <button class="btn">
                      <a href="{{ route('edit.member.index',['id' => $id]) }}">{{ __('CANCEL') }}</a>
                    </button>
                  </form>
                  <div class="deleteEl">
                    <a href="{{ route('edit.member.timespan.delete',['id' => $id, 'timespan_id' => $timespan->id]) }}">
                      DELETE
                    </a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
