@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT A MEMBER') }}</div>

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
                        <div>Middle Name</div>
                        <input name="middleName" id="middleName" value="{{ $member->middle_name }}" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Last Name</div>
                        <input name="lastName" id="lastName" value="{{ $member->last_name }}" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Email</div>
                        <input type="email" name="email" id="email" value="{{ $member->email }}"/>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Phone Number</div>
                        <input type="number" name="phoneNumber" value="{{ $member->phone_number }}" id="phoneNumber"/>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Spouse</div>
                        <input name="spouseName" value="{{ $member->spouse }}" id="spouseName"/>
                      </div>
                      <div class="imgGrid">
                        @if ($member->current_img)
                          <div style="background-image: url('/{{ $image_path }}/current/{{ $member->current_img }}')">
                          </div>
                        @else
                          <div style="background-image: url('{{ url('/images/default_profile.jpeg') }}')">
                          </div>
                        @endif
                        @if ($member->veteran_img)
                          <div style="background-image: url('/{{ $image_path }}/veteran/{{ $member->veteran_img }}')">
                          </div>
                        @else
                          <div style="background-image: url('{{ url('/images/default_profile.jpeg') }}')">
                          </div>
                        @endif
                        <input id="profile" type="file" class="form-control" name="currentImg">
                        <input id="veteran" type="file" class="form-control" name="veteranImg">
                        <!-- <div>
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
                        </div> -->
                        <div>
                          @if ($member->current_img)
                            <a href="{{ route('image.member.index',[
                              'id' => $member->id,
                              'img_type' => 'current',
                              'edit_type' => 'member'
                            ]) }}">
                              <span class="btn btn-danger">
                                REMOVE
                              </span>
                            </a>
                          @else
                            <div>
                              <a>No image found</a>
                            </div>
                          @endif
                        </div>
                        <div>
                          @if ($member->veteran_img)
                            <a href="{{ route('image.member.index',[
                              'id' => $member->id,
                              'img_type' => 'veteran',
                              'edit_type' => 'member'
                            ]) }}">
                              <span class="btn btn-danger">
                                REMOVE
                              </span>
                            </a>
                          @else
                            <div>
                              <a>No image found</a>
                            </div>
                          @endif
                        </div>
                      </div>
                      <!-- <div class="form-group historyBox">
                        <label for="biography">Personal History</label>
                        <textarea class="form-control" id="biography" name="biography" maxlength="255" placeholder="Provide a brief summary of yourself and your time in the 5th">{{ $member->biography }}</textarea>
                      </div> -->
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
                      <div class="basicInfoGrid">
                        <div>
                          Membership Status
                        </div>
                        <div style="display:flex;justify-content:space-between">
                          @if ($status == "temporary")
                            <div>
                              Expires on:<br>
                              {{ substr($member->expiration_date,0,10) }}<br>
                              (YYYY-MM-DD)
                            </div>
                          @elseif ($status == "permanent")
                            <div>
                              Permanent
                            </div>
                          @elseif ($status == "nonmember")
                            <div>
                              Not a member
                            </div>
                          @else
                            <div>
                              Unknown
                            </div>
                          @endif
                          <div>
                            <a href="{{ route('edit.member.deadline',['id' => $member->id]) }}">
                              CHANGE
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Is this person deceased?
                        </div>
                        <div>
                          <select name="isDeceased">
                            <option value="0" @if ($member->deceased == 0) selected @endif>
                              NO
                            </option>
                            <option value="1" @if ($member->deceased == 1) selected @endif>
                              YES
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          If deceased, was their death the direct result of combat (KIA/MIA)?
                        </div>
                        <div>
                          @if ($can_edit_casualty == true)
                            <select name="isKiaMia">
                              <option value="0" @if ($member->kia_or_mia == 0) selected @endif>NO</option>
                              <option value="1" @if ($member->kia_or_mia == 1) selected @endif>YES</option>
                            </select>
                          @else
                            @if ($member->kia_or_mia == 0)
                              NO
                            @else
                              YES
                            @endif
                          @endif
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Is this person a recipient of the Congressional Medal of Honor?
                        </div>
                        <div>
                          @if ($can_edit_recipient == true)
                            <select name="isRecipient">
                              <option value="0" @if ($member->moh_recipient == 0) selected @endif>NO</option>
                              <option value="1" @if ($member->moh_recipient == 1) selected @endif>YES</option>
                            </select>
                          @else
                            @if ($member->moh_recipient == 0)
                              NO
                            @else
                              YES
                            @endif
                          @endif
                        </div>
                      </div>
                      <!-- <div class="basicInfoGrid">
                        <div>
                          Membership Status
                        </div>
                        <div style="display:flex;justify-content:space-between">
                          @if ($status == "temporary")
                            <div>
                              Expires on:<br>
                              {{ substr($member->expiration_date,0,10) }}<br>
                              (YYYY-MM-DD)
                            </div>
                          @elseif ($status == "permanent")
                            <div>
                              Permanent
                            </div>
                          @elseif ($status == "nonmember")
                            <div>
                              Not a member
                            </div>
                          @else
                            <div>
                              Unknown
                            </div>
                          @endif
                          <div>
                            <a href="{{ route('edit.member.deadline',['id' => $member->id]) }}">
                              CHANGE
                            </a>
                          </div>
                        </div>
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
                      </div> -->
                      <div class="editBttnRow">
                        <button
                          type="submit"
                          class="btn btn-primary"
                          name="action"
                          value="update">
                          EDIT A MEMBER
                        </button>
                        <a href="{{ route('edit.member.list') }}">
                          {{ __('CANCEL') }}
                        </a>
                      </div>
                      @if ($can_edit_casualty == true && $member->kia_or_mia == 1)
                        <div>
                          + Need to edit this person's casualty records? <a href="{{ route('edit.casualty.index',['id' => $id,'next_route' => 'casualty-list']) }}">Click here</a>
                        </div>
                      @endif
                      @if ($can_edit_recipient == true && $member->moh_recipient == 1)
                        <div>
                          + Do you need to edit this person's records about their Congressional Medal of Honor? <a href="{{ route('edit.recipient.index',['id' => $id]) }}">Click here</a>
                        </div>
                      @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
