@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DELETE AN EVENT  ') }}</div>

                <div class="card-body">
                    <a href="{{ route('delete.event.list') }}">
                      << BACK
                    </a>

                    <div class="basicInfoSubtitle">
                      DELETE AN EVENT
                    </div>
                    <div class="basicInfoGrid">
                      <div>Event Title</div>
                      <div>{{ $event->title }}</div>
                    </div>
                    <div class="basicInfoGrid">
                      <div>Start Date (YYYY-MM-DD)</div>
                      <div>{{ $event->first_day }}</div>
                    </div>
                    <div class="basicInfoGrid">
                      <div>End Date (YYYY-MM-DD)</div>
                      <div>{{ $event->last_day }}</div>
                    </div>
                    <div class="basicInfoGrid">
                      <div>Locatoion (by city and/or state)</div>
                      <div>{{ $event->location }}</div>
                    </div>
                    @if ($all_subevents)
                      <div class="basicInfoGrid">
                        <div>Current Subevent(s):</div>
                        <ul>
                          @foreach ($all_subevents as $one_subevent)
                            <li>{{ $one_subevent->title }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                    </div>
                    <form
                      method="POST"
                      action="{{ route('delete.event.post',[ 'id' => $id ]) }}">
                      @csrf
                      <button type="submit" name="deleteEvent" class="btn btn-danger">
                        DELETE EVENT
                      </button>
                      <button class="btn">
                        <a href="{{ route('delete.event.list') }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
