@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DELETE AN IMAGE  ') }}</div>

                <div class="card-body">
                    @if (request()->get('next_route') != null)
                      <a href="{{ route($return_name,[
                        'id' => $member->id,
                        'next_route' => request()->get('next_route')
                      ]) }}">
                    @elseif ($img_type = "subevents")
                      <a href="{{ route($return_name,[
                        'id' => $member->id,
                        'event_id' => $member->event_id
                      ]) }}">
                    @else
                      <a href="{{ route($return_name,[
                        'id' => $member->id
                      ]) }}">
                    @endif
                      << BACK
                    </a>
                    <div class="basicInfoSubtitle">
                      @if ($img_type == 'events' || $img_type == 'subevents')
                        Are you sure you want to delete this image for the {{ $member->title }} event?
                      @else
                        Are you sure you want to delete {{ $member->first_name }} {{ $member->last_name }}'s image?
                      @endif
                    </div>
                    @if ($img_type == 'current' && $member->current_img)
                      <div class="deleteImg" style="background-image: url('/{{ $image_path }}/current/{{ $member->current_img }}')">
                      </div>
                    @elseif ($img_type == 'veteran' && $member->veteran_img)
                      <div class="deleteImg" style="background-image: url('/{{ $image_path }}/veteran/{{ $member->veteran_img }}')">
                      </div>
                    @elseif ($img_type == 'events' && $member->primary_image)
                      <div class="deleteImg" style="background-image: url('/{{ $image_path }}/events/{{ $member->primary_image }}')">
                      </div>
                    @elseif ($img_type == 'subevents' && $member->primary_image)
                      <div class="deleteImg" style="background-image: url('/{{ $image_path }}/events/subevents/{{ $member->primary_image }}')">
                      </div>
                    @elseif ($img_type == 'items' && $member->photo)
                      <div class="deleteImg" style="background-image: url('/{{ $image_path }}/items/{{ $member->photo }}')">
                      </div>
                    @else
                      <div class="deleteImg">
                        NO IMAGE FOUND
                      </div>
                    @endif
                    <form method="POST" action="{{ route($delete_method,[
                      'id' => $member->id,
                      'img_type' => $img_type
                    ]) }}">
                      @csrf
                      <button type="submit" class="btn btn-danger">
                        DELETE THIS IMAGE
                      </button>
                    </form>
                    <button class="btn">
                      @if (request()->get('next_route') != null)
                        <a href="{{ route($return_name,[
                          'id' => $member->id,
                          'next_route' => request()->get('next_route')
                        ]) }}">
                      @elseif ($img_type = "subevents")
                        <a href="{{ route($return_name,[
                          'id' => $member->id,
                          'event_id' => $member->event_id
                        ]) }}">
                      @else
                        <a href="{{ route($return_name,[
                          'id' => $member->id
                        ]) }}">
                      @endif
                        {{ __('CANCEL') }}
                      </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
