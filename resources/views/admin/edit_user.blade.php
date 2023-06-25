@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT A BOBCAT  ') }}</div>

                <div class="card-body">
                  <div>
                    <a href="{{ route('edit.member.list') }}">
                      << BACK
                    </a>
                    <form method="POST" action="{{ route('edit.member.post',['id' => $id]) }}" enctype="multipart/form-data">
                      @csrf
                      <div class="basicInfoGrid">
                        <div>First Name</div>
                        <input name="firstName" id="firstName" value="{{ $member->first_name }}" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Last Name</div>
                        <input name="lastName" id="lastName" value="{{ $member->last_name }}" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Email</div>
                        <input type="email" name="email" id="email" value="{{ $member->email }}"/>
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
                        <input id="profile" type="file" class="form-control" name="currentImg">
                        <input id="veteran" type="file" class="form-control" name="veteranImg">
                        <div>
                          <button
                            class="btn btn-danger"
                            name="action"
                            value="current">
                            REMOVE
                          </button>
                        </div>
                        <div>
                          <button
                            class="btn btn-danger"
                            name="action"
                            value="veteran">
                            REMOVE
                          </button>
                        </div>
                      </div> -->
                      <div class="form-group historyBox">
                        <label for="biography">Personal History</label>
                        <textarea class="form-control" id="biography" name="biography" maxlength="255" placeholder="Provide a brief summary of yourself and your time in the 5th">{{ $member->biography }}</textarea>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Is this member deceased?
                        </div>
                        <select name="isDeceased">
                          <option value="0" @if ($member->deceased == 0) selected @endif>
                            NO
                          </option>
                          <option value="1" @if ($member->deceased == 1) selected @endif>
                            YES
                          </option>
                        </select>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Membership
                        </div>
                        <select name="membershipStatus">
                          <option value="nonmember" @if ($status == "nonmember") selected @endif>
                            Nonmember
                          </option>
                          <option value="permanent" @if ($status == "permanent") selected @endif>
                            Permanent Member
                          </option>
                          <option value="start_trial" @if ($status == "start_trial") selected @endif>
                            30-day Trial Membership
                          </option>
                        </select>
                        @if ($status == "start_trial")
                          <div>
                            This membership will end on:
                          </div>
                          <div>
                            {{ $member->expiration_date }}
                          </div>
                        @endif
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Mailing Address
                        </div>
                        <input
                          id="mailingAddress"
                          name="mailingAddress"
                          @if ($member->mailing_address)
                            value="{{ $member->mailing_address }}"
                          @endif>
                      </div>
                      <button
                        type="submit"
                        class="btn btn-primary"
                        name="action"
                        value="update">
                        EDIT A BOBCAT
                      </button>
                      <button class="btn">
                        <a href="{{ route('edit.member.list') }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection