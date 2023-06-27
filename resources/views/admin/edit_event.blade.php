@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT AN EVENT  ') }}</div>

                <div class="card-body">
                    <a href="{{ route('edit.event.list') }}">
                      << BACK
                    </a>
                    <form
                      method="POST"
                      action="{{ route('edit.event.post',[ 'id' => $id ]) }}"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="basicInfoSubtitle">
                        EDIT AN EVENT
                      </div>
                      <div class="basicInfoGrid">
                        <div>Event Title</div>
                        <input name="eventTitle" id="eventTitle" placeholder="required" value="{{ $event->title }}" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Start Date (MM/DD/YYYY)</div>
                        <div class="basicInfoDate">
                          <input
                            name="startMonth"
                            type="number"
                            id="startMonth"
                            placeholder="MM"
                            @if ($firstDay)
                              value="{{ $firstDay[0] }}"
                            @endif
                            min="1"
                            max="12" />
                          <input
                            name="startDay"
                            type="number"
                            id="startDay"
                            placeholder="DD"
                            @if ($firstDay)
                              value="{{ $firstDay[1] }}"
                            @endif
                            min="1"
                            max="31" />
                          <input
                            name="startYear"
                            type="number"
                            id="startYear"
                            placeholder="YYYY"
                            @if ($firstDay)
                              value="{{ $firstDay[2] }}"
                            @endif
                            min="1800"
                            max="9999" />
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>End Date (MM/DD/YYYY)</div>
                        <div class="basicInfoDate">
                          <input
                            name="endMonth"
                            type="number"
                            id="endMonth"
                            placeholder="MM"
                            @if ($lastDay)
                              value="{{ $lastDay[0] }}"
                            @endif
                            min="1"
                            max="12" />
                          <input
                            name="endDay"
                            type="number"
                            id="endDay"
                            placeholder="DD"
                            @if ($lastDay)
                              value="{{ $lastDay[1] }}"
                            @endif
                            min="1"
                            max="31" />
                          <input
                            name="endYear"
                            type="number"
                            id="endYear"
                            placeholder="YYYY"
                            @if ($lastDay)
                              value="{{ $lastDay[2] }}"
                            @endif
                            min="1800"
                            max="9999" />
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Locatoion (by city and/or state)</div>
                        <input name="location" id="location" placeholder="Not for full address" value="{{ $event->location }}" />
                      </div>
                      <button type="submit" name="editEvent" class="btn btn-primary">
                        EDIT EVENT
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
