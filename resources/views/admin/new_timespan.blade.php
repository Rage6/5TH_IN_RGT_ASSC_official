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
                  <form method="POST" action="{{ route('add.member.timespan.post',['id' => $id]) }}">
                    @csrf
                    <div class="basicInfoGrid">
                      <div>Job</div>
                      <input type="text" name="job" id="job" />
                    </div>
                    <div class="basicInfoGrid">
                      <div>Unit</div>
                      <input type="text" name="unit" id="unit" />
                    </div>
                    <div class="basicInfoGrid">
                      <div>Began on...</div>
                      <div>
                        <div>Month</div>
                        <div>
                          <select name="startMonth">
                            <option value="0">
                              Unknown
                            </option>
                            <option value="1">
                              JANUARY
                            </option>
                            <option value="2">
                              FEBRUARY
                            </option>
                            <option value="3">
                              MARCH
                            </option>
                            <option value="4">
                              APRIL
                            </option>
                            <option value="5">
                              MAY
                            </option>
                            <option value="6">
                              JUNE
                            </option>
                            <option value="7">
                              JULY
                            </option>
                            <option value="8">
                              AUGUST
                            </option>
                            <option value="9">
                              SEPTEMBER
                            </option>
                            <option value="10">
                              OCTOBER
                            </option>
                            <option value="11">
                              NOVEMBER
                            </option>
                            <option value="12">
                              DECEMBER
                            </option>
                          </select>
                        </div>
                        <div>Year</div>
                        <div>
                          <input type="number" name="startYear" min="1812" max="3000" required>
                        </div>
                      </div>
                    </div>
                    <div class="basicInfoGrid">
                      <div>Ended on...</div>
                      <div>
                        <div>
                          <div>Month</div>
                          <select name="endMonth">
                            <option value="0">
                              Unknown
                            </option>
                            <option value="1">
                              JANUARY
                            </option>
                            <option value="2">
                              FEBRUARY
                            </option>
                            <option value="3">
                              MARCH
                            </option>
                            <option value="4">
                              APRIL
                            </option>
                            <option value="5">
                              MAY
                            </option>
                            <option value="6">
                              JUNE
                            </option>
                            <option value="7">
                              JULY
                            </option>
                            <option value="8">
                              AUGUST
                            </option>
                            <option value="9">
                              SEPTEMBER
                            </option>
                            <option value="10">
                              OCTOBER
                            </option>
                            <option value="11">
                              NOVEMBER
                            </option>
                            <option value="12">
                              DECEMBER
                            </option>
                          </select>
                        </div>
                        <div>
                          <div>Year</div>
                          <input type="number" name="endYear" min="1812" max="3000" required>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="addTimespan" class="btn btn-primary">
                      ADD NEW TIMESPAN
                    </button>
                    <button class="btn">
                      <a href="{{ route('edit.member.index',['id' => $id]) }}">{{ __('CANCEL') }}</a>
                    </button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
