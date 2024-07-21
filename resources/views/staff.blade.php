@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  BOBCAT STAFF
                </div>
                <div class="card-body">
                  <a href="{{ route('home') }}">
                    << {{ __('BACK') }}
                  </a>
                  <div>
                    <div>
                      @foreach ($all_staff as $one_staff)
                        <div class="staffEl">
                          <div class="staffTitle">
                            <span>{{ $one_staff->title }}</span>: {{ $one_staff->description }}
                          </div>
                          <div class="staffMemberList">
                            @foreach ($one_staff->all_users as $one_member)
                              <div class="staffMember">
                                <div>
                                  <a href="{{ route('bobcat.profile.index',[
                                    'id' => $one_member->id
                                  ]) }}">
                                    <u>
                                      {{ $one_member->first_name }} {{ $one_member->last_name }}
                                    </u>
                                  </a>
                                </div>
                                @if ($one_member->current_img)
                                  <div style="background-image:url('/images/current/{{ $one_member->current_img }}')">
                                    <!-- Current photo is on background -->
                                  </div>
                                @else
                                  <div style="background-image:url('/images/default_profile.jpeg')">
                                    <!-- Default photo is on background -->
                                  </div>
                                @endif
                              </div>
                            @endforeach
                          </div>
                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
