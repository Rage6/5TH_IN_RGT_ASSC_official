@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT A CASUALTY  ') }}</div>

                <div class="card-body">
                  <div>
                    <a href="{{ route('edit.casualty.list') }}">
                      << BACK
                    </a>
                    <form method="POST" action="{{ route('edit.casualty.post',['id' => $id]) }}" enctype="multipart/form-data">
                      @csrf
                      <div class="basicInfoGrid">
                        <div>First Name</div>
                        <input name="firstName" id="firstName" value="{{ $casualty->first_name }}" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Middle Name</div>
                        <input name="middleName" id="middleName" value="{{ $casualty->middle_name }}" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Last Name</div>
                        <input name="lastName" id="lastName" value="{{ $casualty->last_name }}" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Highest Rank</div>
                        <input name="rank" id="rank" value="{{ $casualty->rank }}" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Location When KIA/MIA</div>
                        <input name="kiaLocation" id="kiaLocation" value="{{ $casualty->kia_location }}" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Type of Injury</div>
                        <input name="injuryType" id="injuryType" value="{{ $casualty->injury_type }}" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Name of war/conflict</div>
                        <select name="conflictId" id="conflictId">
                          @foreach ($all_conflicts as $one_conflict)
                            <option value="{{ $one_conflict->id }}" @if ($one_conflict->id == $casualty->casualty_conflict_id) selected @endif />
                              {{ $one_conflict->name }}
                            </option>
                          @endforeach
                        </select>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Original City</div>
                        <input name="city" id="city" value="{{ $casualty->city }}" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Original State</div>
                        <input name="state" id="state" value="{{ $casualty->state }}" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Burial Site</div>
                        <input name="burialSite" id="burialSite" value="{{ $casualty->burial_site }}" />
                      </div>
                      <!-- <div class="imgGrid">
                        @if ($casualty->veteran_img)
                          <div style="background-image: url('{{ url($casualty->veteran_img) }}')">
                          </div>
                        @else
                          <div style="background-image: url('{{ url('storage/images/default_profile.jpeg') }}')">
                          </div>
                        @endif
                        <input id="veteran" type="file" class="form-control" name="veteranImg">
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
                        <label for="comments">Comments</label>
                        <textarea class="form-control" id="casualty" name="comments" maxlength="100000" placeholder="Max characters: 100,000">{{ $casualty->comments }}</textarea>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Was this casualty a member of the 5th Infantry Regiment Association?
                        </div>
                        <div>
                          <select name="membershipStatus">
                            <option value="1970-01-01 00:00:00" @if ($status == "member") selected @endif>
                              Yes
                            </option>
                            <option value="nonmember" @if ($status == "nonmember") selected @endif>
                              No
                            </option>
                          </select>
                        </div>
                      </div>
                      <div>
                      <button
                        type="submit"
                        class="btn btn-primary">
                        EDIT A CASUALTY
                      </button>
                      <button class="btn">
                        <a href="{{ route('edit.casualty.list') }}">{{ __('CANCEL') }}</a>
                      </button>
                      <a class="btn btn-warning" href="{{ route('edit.casualty.disable',['id' => $id]) }}">
                        NOT A CASUALTY
                      </a>
                    </form>
                    @if ($can_edit_member == true && $casualty->expiration_date != null)
                      <div>
                        + Need to edit this person's member records? <a href="{{ route('edit.member.index',['id' => $id]) }}">Click here</a>
                      </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection