@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT A SUBEVENT') }}</div>

                <div class="card-body">
                    <a href="{{ route('edit.event.index',[ 'id' => $subevent->event_id ]) }}">
                      << BACK
                    </a>
                    <form
                      method="POST"
                      action="{{ route('subevent.edit.post', ['event_id' => $subevent->event_id, 'id' => $id]) }}"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="basicInfoSubtitle">
                        EDIT A SUBEVENT
                      </div>
                      <div class="basicInfoGrid">
                        <div>Subevent Title</div>
                        <input name="subeventTitle" id="subeventTitle" value="{{ $subevent->title }}" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Start Date (MM/DD/YYYY)</div>
                        <div class="basicInfoDate">
                          <input
                            name="startMonth"
                            type="number"
                            id="startMonth"
                            placeholder="MM"
                            min="1"
                            max="12"
                            @if ($startDate) value="{{ $startDate[0] }}" @endif />
                          <input
                            name="startDay"
                            type="number"
                            id="startDay"
                            placeholder="DD"
                            min="1"
                            max="31"
                            @if ($startDate) value="{{ $startDate[1] }}" @endif />
                          <input
                            name="startYear"
                            type="number"
                            id="startYear"
                            placeholder="YYYY"
                            min="1800"
                            max="9999"
                            @if ($startDate) value="{{ $startDate[2] }}" @endif />
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Start Time (hh:mm)</div>
                        <div class="basicInfoDate">
                          <input
                            name="startHour"
                            type="number"
                            id="startHour"
                            placeholder="hh"
                            min="1"
                            max="12"
                            @if ($startTime) value="{{ $startTime[0] }}" @endif />
                          <input
                            name="startMinute"
                            type="number"
                            id="startMinute"
                            placeholder="mm"
                            min="0"
                            max="59"
                            @if ($startTime) value="{{ $startTime[1] }}" @endif />
                          <select name="startAmPm">
                            <option
                              value="am"
                              @if (!$startTime || $startTime[2] == "am") selected @endif>
                              AM
                            </option>
                            <option
                              value="pm"
                              @if ($startTime && $startTime[2] == "pm") selected @endif>
                              PM
                            </option>
                          </select>
                        </div>
                      </div>
                      <br>
                      <div class="basicInfoGrid">
                        <div>End Date (MM/DD/YYYY)</div>
                        <div class="basicInfoDate">
                          <input
                            name="endMonth"
                            type="number"
                            id="endMonth"
                            placeholder="MM"
                            min="1"
                            max="12"
                            @if ($endDate) value="{{ $endDate[0] }}" @endif />
                          <input
                            name="endDay"
                            type="number"
                            id="endDay"
                            placeholder="DD"
                            min="1"
                            max="31"
                            @if ($endDate) value="{{ $endDate[1] }}" @endif />
                          <input
                            name="endYear"
                            type="number"
                            id="endYear"
                            placeholder="YYYY"
                            min="1800"
                            max="9999"
                            @if ($endDate) value="{{ $endDate[2] }}" @endif/>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>End Time (hh:mm)</div>
                        <div class="basicInfoDate">
                          <input
                            name="endHour"
                            type="number"
                            id="endHour"
                            placeholder="hh"
                            min="1"
                            max="12"
                            @if ($endTime) value="{{ $endTime[0] }}" @endif />
                          <input
                            name="endMinute"
                            type="number"
                            id="endMinute"
                            placeholder="mm"
                            min="0"
                            max="59"
                            @if ($endTime) value="{{ $endTime[1] }}" @endif />
                          <select name="endAmPm">
                            <option
                              value="am"
                              @if (!$endTime || $endTime[2] == "am") selected @endif>
                              AM
                            </option>
                            <option
                              value="pm"
                              @if ($endTime && $endTime[2] == "pm") selected @endif>
                              PM
                            </option>
                          </select>
                        </div>
                      </div>
                      <br>
                      <div class="basicInfoGrid">
                        <div>Description</div>
                        <textarea name="description" id="description" rows="5" placeholder="This is a test">{{ $subevent->description }}</textarea>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Locatoion (by city and/or state)</div>
                        <input name="location" id="location" value="{{ $subevent->location }}" placeholder="Not for full address" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Google Map</div>
                        <input name="iframe_map_src" id="map_iframe" placeholder="Insert link of Google Map iframe" value="{{ $subevent->iframe_map_src }}" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>CSS classes (separated by spaces)</div>
                        <input name="classes" id="classes" value="{{ $subevent->classes }}"/>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          If this is actually a link to the event's payment options, select the desired options.
                        </div>
                        <select name="is_payment" id="is_payment">
                          <option value="null" @if (!$subevent->is_payment) selected @endif>N/A</option>
                          @foreach (explode("::",env('PAYMENT_ROUTES')) as $one_route)
                            @php
                              $routeName = explode(';',$one_route)[0];
                              $optionName = explode(';',$one_route)[1];
                            @endphp
                            <option value="{{ $routeName }}" @if ($one_route == $subevent->is_payment) selected @endif>
                              {{ $optionName }}
                            </option>
                          @endforeach
                        </select>
                      </div>
                      <button type="submit" name="addSubevent" class="btn btn-primary">
                        EDIT SUBEVENT
                      </button>
                      <button class="btn">
                        <a href="{{ route('edit.event.index',[ 'id' => $subevent->event_id ]) }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
