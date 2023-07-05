@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD A SUBEVENT TO "'.$event->title.'"') }}</div>

                <div class="card-body">
                    <a href="{{ route('edit.event.index',[ 'id' => $event->id ]) }}">
                      << BACK
                    </a>
                    <form
                      method="POST"
                      action="{{ route('subevent.add.post', ['event_id' => $event->id]) }}"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="basicInfoSubtitle">
                        CREATE A SUBEVENT
                      </div>
                      <div class="documentation">
                        Please check out our <a href="{{ URL::to('/') }}/admin_instructions.html" target="_blank">documentation</a> for details about entering "Content", Google Maps, CSS classes, or payment option links.
                      </div>
                      <br>
                      <div class="basicInfoGrid">
                        <div>Subevent Title</div>
                        <input name="subeventTitle" id="subeventTitle" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Start Date</div>
                        <div class="basicInfoDate">
                          <input name="startMonth" type="number" id="startMonth" placeholder="MM" min="1" max="12" data-level="date" data-phase="start" />
                          <input name="startDay" type="number" id="startDay" placeholder="DD" min="1" max="31" data-level="date" data-phase="start" />
                          <input name="startYear" type="number" id="startYear" placeholder="YYYY" min="1800" max="9999" data-level="date" data-phase="start" />
                        </div>
                        <div></div>
                        <div>
                          <span data-level="date" data-phase="start">
                            CLEAR START DATE
                          </span>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Start Time</div>
                        <div class="basicInfoDate">
                          <input name="startHour" type="number" id="startHour" placeholder="hh" min="1" max="12" data-level="time" data-phase="start" />
                          <input name="startMinute" type="number" id="startMinute" placeholder="mm" min="0" max="59" data-level="time" data-phase="start" />
                          <select name="startAmPm">
                            <option value="am">AM</option>
                            <option value="pm">PM</option>
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
                        <div>End Date</div>
                        <div class="basicInfoDate">
                          <input name="endMonth" type="number" id="endMonth" placeholder="MM" min="1" max="12" data-level="date" data-phase="end" />
                          <input name="endDay" type="number" id="endDay" placeholder="DD" min="1" max="31" data-level="date" data-phase="end" />
                          <input name="endYear" type="number" id="endYear" placeholder="YYYY" min="1800" max="9999" data-level="date" data-phase="end" />
                        </div>
                        <div></div>
                        <div>
                          <span data-level="date" data-phase="end">
                            CLEAR END DATE
                          </span>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>End Time</div>
                        <div class="basicInfoDate">
                          <input name="endHour" type="number" id="endHour" placeholder="hh" min="1" max="12" data-level="time" data-phase="end"/>
                          <input name="endMinute" type="number" id="endMinute" placeholder="mm" min="0" max="59" data-level="time" data-phase="end"/>
                          <select name="endAmPm">
                            <option value="am">AM</option>
                            <option value="pm">PM</option>
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
                        <textarea name="description" id="description" rows="5" placeholder="For both security and customization, the content can be entered as an HTML-like content. The instructions will provide explainations and examples of how this works."></textarea>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Location (by city and/or state)</div>
                        <input name="location" type="text" id="location" placeholder="Not for full address" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Google Map</div>
                        <input name="iframe_map_src" type="text" id="map_iframe" placeholder="Insert link of Google Map iframe" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Order among peer subevents</div>
                        <input name="order_num" type="number" min="1" id="order_num" placeholder="Default order by ID number" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>CSS classes (separated by spaces)</div>
                        <input name="classes" type="text" id="classes" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          NOTE: If this subevent is simply a link to a payment form, then only enter the title and select one of these option.
                        </div>
                        <select name="is_payment" id="is_payment">
                          <option value="null">N/A</option>
                          @foreach (explode("::",env('PAYMENT_ROUTES')) as $one_route)
                            <option value="{{ $one_route }}">
                              {{ explode(';',$one_route)[1] }}
                            </option>
                          @endforeach
                        </select>
                      </div>
                      <button type="submit" name="addSubevent" class="btn btn-primary">
                        ADD SUBEVENT
                      </button>
                      <button class="btn">
                        <a href="{{ route('edit.event.index',[ 'id' => $event->id ]) }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
