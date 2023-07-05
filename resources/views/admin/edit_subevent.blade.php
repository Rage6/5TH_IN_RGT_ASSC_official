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
                      <div class="documentation">
                        Please check out our <a href="{{ URL::to('/') }}/admin_instructions.html" target="_blank">documentation</a> for details about entering Content, Google Maps, CSS classes, or payment option links.
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
                            data-level="date"
                            data-phase="start"
                            @if ($startDate) value="{{ $startDate[0] }}" @endif />
                          <input
                            name="startDay"
                            type="number"
                            id="startDay"
                            placeholder="DD"
                            min="1"
                            max="31"
                            data-level="date"
                            data-phase="start"
                            @if ($startDate) value="{{ $startDate[1] }}" @endif />
                          <input
                            name="startYear"
                            type="number"
                            id="startYear"
                            placeholder="YYYY"
                            min="1800"
                            max="9999"
                            data-level="date"
                            data-phase="start"
                            @if ($startDate) value="{{ $startDate[2] }}" @endif />
                        </div>
                        <div></div>
                        <div>
                          <span data-level="date" data-phase="start">
                            CLEAR START DATE
                          </span>
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
                            data-level="time"
                            data-phase="start"
                            @if ($startTime) value="{{ $startTime[0] }}" @endif />
                          <input
                            name="startMinute"
                            type="number"
                            id="startMinute"
                            placeholder="mm"
                            min="0"
                            max="59"
                            data-level="time"
                            data-phase="start"
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
                        <div></div>
                        <div>
                          <span data-level="time" data-phase="start">
                            CLEAR START TIME
                          </span>
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
                            data-level="date"
                            data-phase="end"
                            @if ($endDate) value="{{ $endDate[0] }}" @endif />
                          <input
                            name="endDay"
                            type="number"
                            id="endDay"
                            placeholder="DD"
                            min="1"
                            max="31"
                            data-level="date"
                            data-phase="end"
                            @if ($endDate) value="{{ $endDate[1] }}" @endif />
                          <input
                            name="endYear"
                            type="number"
                            id="endYear"
                            placeholder="YYYY"
                            min="1800"
                            max="9999"
                            data-level="date"
                            data-phase="end"
                            @if ($endDate) value="{{ $endDate[2] }}" @endif/>
                        </div>
                        <div></div>
                        <div>
                          <span data-level="date" data-phase="end">
                            CLEAR END DATE
                          </span>
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
                            data-level="time"
                            data-phase="end"
                            @if ($endTime) value="{{ $endTime[0] }}" @endif />
                          <input
                            name="endMinute"
                            type="number"
                            id="endMinute"
                            placeholder="mm"
                            min="0"
                            max="59"
                            data-level="time"
                            data-phase="end"
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
                        <div></div>
                        <div>
                          <span data-level="time" data-phase="end">
                            CLEAR END TIME
                          </span>
                        </div>
                      </div>
                      <br>
                      <div class="basicInfoGrid">
                        <div>Content (see the instructions)</div>
                        <textarea name="description" id="description" rows="5" placeholder="For both security and customization, the content can be entered as an HTML-like content. The instructions will provide explainations and examples of how this works.">{{ $subevent->description }}</textarea>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Locatoion (by city and/or state)</div>
                        <input name="location" id="location" value="{{ $subevent->location }}" placeholder="Not for full address" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Order among peer subevents</div>
                        <input name="order_num" type="number" min="1" id="order_num" value="{{ $subevent->order_number }}" placeholder="Default order by ID number" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Google Map (see instructions)</div>
                        <input name="iframe_map_src" id="map_iframe" placeholder="Insert link of Google Map iframe" value="{{ $subevent->iframe_map_src }}" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>CSS classes (see instructions)</div>
                        <input name="classes" id="classes" value="{{ $subevent->classes }}"/>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          NOTE: If this subevent is simply a link to a payment form, then only enter the title and select one of these option.
                        </div>
                        <select name="is_payment" id="is_payment">
                          <option value="null" @if (!$subevent->is_payment) selected @endif>N/A</option>
                          @foreach (explode("::",env('PAYMENT_ROUTES')) as $one_route)
                            @php
                              $routeName = explode(';',$one_route)[0];
                              $optionName = explode(';',$one_route)[1];
                            @endphp
                            <option value="{{ $one_route }}" @if ($one_route == $subevent->is_payment) selected @endif>
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
