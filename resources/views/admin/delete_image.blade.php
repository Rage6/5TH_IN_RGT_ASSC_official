@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DELETE AN IMAGE  ') }}</div>

                <div class="card-body">
                    <a href="{{ route($return_name,[
                      'id' => $member->id
                    ]) }}">
                      << BACK
                    </a>
                    <div class="basicInfoSubtitle">
                      Are you sure you want to delete {{ $member->first_name }} {{ $member->last_name }}'s image?
                    </div>
                    @if ($img_type == 'current' && $member->current_img)
                      <div class="deleteImg" style="background-image: url('/{{ $image_path }}/current/{{ $member->current_img }}')">
                      </div>
                    @elseif ($img_type == 'veteran' && $member->veteran_img)
                      <div class="deleteImg" style="background-image: url('/{{ $image_path }}/veteran/{{ $member->veteran_img }}')">
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
                      <a href="{{ route($return_name,[
                        'id' => $member->id
                      ]) }}">{{ __('CANCEL') }}</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
