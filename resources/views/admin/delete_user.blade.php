@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DELETE A BOBCAT  ') }}</div>

                <div class="card-body">
                    <a href="{{ route('delete.member.list') }}">
                      << BACK
                    </a>

                    <div class="basicInfoGrid">
                      <div>First Name: {{ $member->first_name }}</div>
                    </div>
                    <div class="basicInfoGrid">
                      <div>Last Name: {{ $member->last_name }}</div>
                    </div>
                    <div class="basicInfoGrid">
                      <div>Email: {{ $member->email }}</div>
                    </div>
                    <!-- <div class="imgGrid">
                      @if ($member->current_img)
                        <div style="background-image: url('{{ url($member->current_img) }}')">
                        </div>
                      @else
                        <div style="background-image: url('{{ url('storage/images/default_profile.jpeg') }}')">
                        </div>
                      @endif
                      @if ($member->veteran_img)
                        <div style="background-image: url('{{ url($member->veteran_img) }}')">
                        </div>
                      @else
                        <div style="background-image: url('{{ url('storage/images/default_profile.jpeg') }}')">
                        </div>
                      @endif
                    </div> -->
                    @if ($member->biography)
                      <div class="form-group historyBox">
                        <label for="biography">Personal History</label>
                        <textarea class="form-control" readonly>{{ $member->biography }}</textarea>
                      </div>
                    @endif
                    <div class="basicInfoGrid">
                      <div>
                        Is this member deceased?
                      </div>
                      @if ($member->deceased == 0)
                        NO
                      @else
                        YES
                      @endif
                    </div>
                    <div class="basicInfoGrid">
                      <div>
                        Membership
                      </div>
                      @if ($status == "nonmember")
                        Nonmember
                      @elseif ($status == "permanent")
                        Permanent Member
                      @elseif ($status == "start_trial")
                        30-day Trial Membership
                        @if ($status == "start_trial")
                          <div>
                            This membership will end on:
                          </div>
                          <div>
                            {{ $member->expiration_date }}
                          </div>
                        @endif
                      @endif
                    </div>
                    @if ($member->mailing_address)
                      <div class="basicInfoGrid">
                        <div>
                          Mailing Address
                        </div>
                        <div>
                          {{ $member->mailing_address }}
                        </div>
                      </div>
                    @endif
                    <form method="POST" action="{{ route('delete.member.post',['id' => $id]) }}">
                      @csrf
                      <button type="submit" class="btn btn-danger">
                        DELETE A BOBCAT
                      </button>
                    </form>
                    <button class="btn">
                      <a href="{{ route('delete.member.list') }}">{{ __('CANCEL') }}</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
