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
                      @if ($errors)
                        @foreach ($errors->all() as $one_error)
                          <div style="color:red">
                            <div>- {{ $one_error }}</div>
                          </div>
                        @endforeach
                      @endif
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
                        <input name="phoneNumber" value="{{ $member->phone_number }}" id="phoneNumber"/>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Spouse</div>
                        <input name="spouseName" value="{{ $member->spouse }}" id="spouseName"/>
                      </div>
                      <div class="imgGrid">
                        <div>Current Photo</div>
                        <div>Veteran Photo</div>
                        @if ($member->current_img)
                          <div style="background-image: url('/{{ $image_path }}/current/{{ $member->current_img }}')" class="img">
                          </div>
                        @else
                          <div style="background-image: url('{{ url('/images/default_profile.jpeg') }}')" class="img">
                          </div>
                        @endif
                        @if ($member->veteran_img)
                          <div style="background-image: url('/{{ $image_path }}/veteran/{{ $member->veteran_img }}')" class="img">
                          </div>
                        @else
                          <div style="background-image: url('{{ url('/images/default_profile.jpeg') }}')" class="img">
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
                              'edit_type' => 'member',
                              'next_route' => 'member-list'
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
                              'edit_type' => 'member',
                              'next_route' => 'member-list'
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
                      <div class="basicInfoGrid">
                        <div>
                          What is/was this person's highest rank?
                        </div>
                        <div>
                          <input id="rank" name="rank" @if ($member->rank) value="{{ $member->rank }}" @endif>
                        </div>
                      </div>
                      <div>
                        <div>
                          BOBCAT HISTORY
                        </div>
                        <div>
                          <div class="timespanBox">
                            @if (count($all_timespans) > 0)
                              @foreach ($all_timespans as $one_timespan)
                                <div>
                                  <a href="{{ route('edit.member.timespan.index',[
                                    'id' => $one_timespan->user_id,
                                    'timespan_id' => $one_timespan->id
                                  ]) }}">
                                    {{ $one_timespan->job }}, {{ $one_timespan->unit }}: {{ $one_timespan->start_year }} @if ($one_timespan->end_year) - {{ $one_timespan->end_year }} @endif
                                  </a>
                                </div>
                              @endforeach
                            @else
                              <div>
                                <i>No timespans found</i>
                              </div>
                            @endif
                          </div>
                          <div class="addMemberTimespan">
                            <a href="{{ route('add.member.timespan.index',['id' => $member->id]) }}">
                              <span>
                                ADD A TIMESPAN
                              </span>
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
                        <div>If they are an Associated Member, which other member are they associated by?</div>
                        <div>
                          <input
                            name="associateMember"
                            id="associateMember"
                            @if ($member->associated_by) value="{{ $member->associated_by }}" @endif />
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Is this person an Honorary Member?</div>
                        <div>
                          <select name="honoraryMember" id="honoraryMember">
                            <option
                              @if ($member->honorary_member == 0) selected @endif
                              value="0">
                                NO
                            </option>
                            <option
                              @if ($member->honorary_member == 1) selected @endif
                              value="1">
                                YES
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Which conflicts/wars did this person participate in?
                        </div>
                        <div>
                          @php $conflict_number = 1 @endphp
                          @foreach ($all_conflicts as $one_conflict)
                            @php
                              $input_name = 'conflict_'.$conflict_number;
                            @endphp
                            <input
                              type="checkbox"
                              name="{{ $input_name }}"
                              value="{{ $one_conflict->id }}"
                              @if ($one_conflict->selected) checked @endif/><span> {{ $one_conflict->name }}</span><br>
                            @php $conflict_number++ @endphp
                          @endforeach
                          <input type="hidden" name="conflictTotal" value="{{ count($all_conflicts) }}">
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
                          Date of Death
                        </div>
                        <div>
                          <div class="basicDateInfo">
                            <input name="monthOfDeath" type="number" @if ($member->month_of_death) value="{{ $member->month_of_death }}" @endif min="1" max="12" placeholder="MM">
                            <input name="dayOfDeath" type="number" @if ($member->day_of_death) value="{{ $member->day_of_death }}" @endif min="1" max="31" placeholder="DD">
                            <input name="yearOfDeath" type="number" @if ($member->year_of_death) value="{{ $member->year_of_death }}" @endif min="1808" max="3000" placeholder="YYYY">

                            <div>Month</div>
                            <div>Day</div>
                            <div>Year</div>
                          </div>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          If deceased, where is this person buried?
                        </div>
                        <div>
                          <input id="burialSite" name="burialSite" @if ($member->burial_site) value="{{ $member->burial_site }}" @endif>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Are there any additional comments about this person? They will only appear on their casualty, Medal of Honor (MoH), or deceased member pages. Examples include obituaries, tributes, and press articles. MoH citations do NOT apply here.
                        </div>
                        <textarea id="comments" name="comments">
                          {{ $member->comments }}
                        </textarea>
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
@php
  $unset_these = [
    $member,
    $image_path,
    $all_timespans,
    $status,
    $conflict_number,
    $all_conflicts,
    $input_name,
    $can_edit_recipient,
    $can_edit_casualty
  ];
  check_memory_limit($unset_these);
@endphp
@endsection
