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
                    <form
                      method="POST"
                      action="{{ route('edit.casualty.post',[
                        'id' => $id,
                        'next_route' => $next_route
                      ]) }}"
                      enctype="multipart/form-data"
                    >
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
                      <div class="basicInfoGrid">
                        <div>
                          Date of Death
                        </div>
                        <div>
                          <div class="basicDateInfo">
                            <input name="monthOfDeath" type="number" @if ($casualty->month_of_death) value="{{ $casualty->month_of_death }}" @endif min="1" max="12" placeholder="MM">
                            <input name="dayOfDeath" type="number" @if ($casualty->day_of_death) value="{{ $casualty->day_of_death }}" @endif min="1" max="31" placeholder="DD">
                            <input name="yearOfDeath" type="number" @if ($casualty->year_of_death) value="{{ $casualty->year_of_death }}" @endif min="1900" max="3000" placeholder="YYYY">
                            <div>Month</div>
                            <div>Day</div>
                            <div>Year</div>
                          </div>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>External Links</div>
                        <div>
                          @foreach ($all_links as $one_link)
                            <div class="externalLinkGrid">
                              <div class="linkEl">
                                <a href="{{ $one_link->url }}" target="_blank">
                                  <u>{{ $one_link->name }}</u>
                                </a>
                              </div>
                              <div class="editEl">
                                <a href="{{ route('edit.casualty.link.index',['id'=>$id,'linkId'=>$one_link->id,'userType'=>'casualty']) }}">
                                  EDIT
                                </a>
                              </div>
                              <div class="deleteEl">
                                <a href="{{ route('delete.casualty.link.index',['id'=>$id,'linkId'=>$one_link->id]) }}">
                                  DELETE
                                </a>
                              </div>
                            </div>
                          @endforeach
                          <a href="{{ route('add.casualty.link.index',['id'=>$id,'userType'=>'casualty']) }}">
                            + ADD A LINK
                          </a>
                        </div>
                      </div>
                      <div class="imgGrid">
                        <div></div>
                        <div>Veteran Photo</div>
                        <div></div>
                        @if ($casualty->veteran_img)
                          <div style="background-image: url('/{{ $image_path }}/veteran/{{ $casualty->veteran_img }}')" class="img">
                          </div>
                        @else
                          <div style="background-image: url('{{ url('/images/default_profile.jpeg') }}')" class="img">
                          </div>
                        @endif
                        <div></div>
                        <input id="veteran" type="file" class="form-control" name="veteranImg">
                        <div></div>
                        <div>
                          @if ($casualty->veteran_img)
                            <a href="{{ route('image.casualty.index',[
                              'id' => $casualty->id,
                              'img_type' => 'veteran',
                              'edit_type' => 'casualty',
                              'next_route' => $next_route
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
                      <div class="form-group historyBox">
                        <label for="comments">Comments</label>
                        <textarea class="form-control" id="casualty" name="comments" maxlength="100000" placeholder="Max characters: 100,000">{{ $casualty->comments }}</textarea>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Was this casualty a member of the 5th Infantry Regiment Association?
                        </div>
                        @if ($can_edit_member == true)
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
                        @else
                         <div>
                           <div>
                            @if ($status == "member")
                              Yes
                            @else
                              No
                            @endif
                          </div>
                         </div>
                        @endif
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Was this casualty a recipient of the Congressional Medal of Honor?
                        </div>
                        @if ($can_edit_recipient)
                          <div>
                            <select name="mohStatus">
                              <option value="1" @if ($casualty->moh_recipient == 1) selected @endif>
                                Yes
                              </option>
                              <option value="0" @if ($casualty->moh_recipient == 0) selected @endif>
                                No
                              </option>
                            </select>
                          </div>
                        @else
                          <div>
                            @if ($casualty->moh_recipient == 1)
                              Yes
                            @else
                              No
                            @endif
                          </div>
                        @endif
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
                      <!-- <a class="btn btn-warning" href="{{ route('edit.casualty.disable',['id' => $id]) }}">
                        NOT A CASUALTY
                      </a> -->
                    </form>
                    <div>
                      <form method="POST" action="{{ route('edit.casualty.disable',['id' => $id]) }}">
                        @csrf
                        <button class="btn btn-warning">
                          NOT A CASUALTY
                        </button>
                      </form>
                    </div>
                    @if ($can_edit_member == true && $casualty->expiration_date != null)
                      <div>
                        + Do you need to edit this person's member records? <a href="{{ route('edit.member.index',['id' => $id]) }}">Click here</a>
                      </div>
                    @endif
                    @if ($can_edit_recipient == true && $casualty->moh_recipient == 1)
                      <div>
                        + Do you need to edit this person's records about their Congressional Medal of Honor? <a href="{{ route('edit.recipient.index',['id' => $id]) }}">Click here</a>
                      </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
