@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DELETE A SUBEVENT') }}</div>

                <div class="card-body">
                    <a href="{{ route('edit.event.index',['id' => $event_id]) }}">
                      << BACK
                    </a>

                    <div class="basicInfoSubtitle">
                      DELETE A SUBEVENT
                    </div>
                    <div class="basicInfoGrid">
                      <div>Subevent Title</div>
                      <div>{{ $subevent->title }}</div>
                    </div>
                    <div class="basicInfoGrid">
                      <div>Start Time (YYYY-MM-DD hh:mm)</div>
                      <div>{{ $subevent->start_time }}</div>
                    </div>
                    <div class="basicInfoGrid">
                      <div>End Time (YYYY-MM-DD hh:mm)</div>
                      <div>{{ $subevent->end_time }}</div>
                    </div>
                    <div class="basicInfoGrid">
                      <div>Locatoion (by city and/or state)</div>
                      <div>{{ $subevent->location }}</div>
                    </div>
                    <form
                      method="POST"
                      action="{{ route('subevent.delete.post',[ 'id' => $id, 'event_id' => $event_id ]) }}">
                      @csrf
                      <button type="submit" name="deleteEvent" class="btn btn-danger">
                        DELETE EVENT
                      </button>
                      <button class="btn">
                        <a href="{{ route('edit.event.index',['id' => $event_id]) }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
