@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD AN EVENT  ') }}</div>

                <div class="card-body">
                    <a href="{{ route('admin.index') }}">
                      << BACK
                    </a>
                    <form
                      method="POST"
                      action="{{ route('events.add') }}"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="basicInfoSubtitle">
                        CREATE A NEW EVENT
                      </div>
                      <div class="basicInfoGrid">
                        <div>Event Title</div>
                        <input name="eventTitle" id="eventTitle" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Start Date</div>
                        <div class="basicInfoDate">
                          <input name="startMonth" type="number" id="startMonth" placeholder="MM" min="1" max="12" />
                          <input name="startDay" type="number" id="startDay" placeholder="DD" min="1" max="31" />
                          <input name="startYear" type="number" id="startYear" placeholder="YYYY" min="1800" max="9999" />
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>End Date</div>
                        <div class="basicInfoDate">
                          <input name="endMonth" type="number" id="endMonth" placeholder="MM" min="1" max="12" />
                          <input name="endDay" type="number" id="endDay" placeholder="DD" min="1" max="31" />
                          <input name="endYear" type="number" id="endYear" placeholder="YYYY" min="1800" max="9999" />
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Locatoion (by city and/or state)</div>
                        <input name="location" id="location" placeholder="Not for full address" />
                      </div>
                      <button type="submit" name="addEvent" class="btn btn-primary">
                        ADD AN EVENT
                      </button>
                      <button class="btn">
                        <a href="{{ route('admin.index') }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
