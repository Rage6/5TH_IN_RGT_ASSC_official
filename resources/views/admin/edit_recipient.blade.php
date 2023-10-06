@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT A RECIPIENT  ') }}</div>

                <div class="card-body">
                  <div>
                    <a href="{{ route('edit.recipient.list') }}">
                      << BACK
                    </a>
                    <form method="POST" action="{{ route('edit.recipient.post',['id' => $id]) }}" enctype="multipart/form-data">
                      @csrf
                      <div class="basicInfoGrid">
                        <div>First Name</div>
                        <input name="firstName" id="firstName" value="{{ $recipient->first_name }}" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Middle Name</div>
                        <input name="middleName" id="middleName" value="{{ $recipient->middle_name }}" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Last Name</div>
                        <input name="lastName" id="lastName" value="{{ $recipient->last_name }}" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Highest Rank</div>
                        <input name="rank" id="rank" value="{{ $recipient->rank }}" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>At what location did this action take place?</div>
                        <input name="mohLocation" id="mohLocation" value="{{ $recipient->moh_location }}" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>What was there rank during this action?</div>
                        <input name="mohRank" id="mohRank" value="{{ $recipient->moh_rank }}" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Original City</div>
                        <input name="city" id="city" value="{{ $recipient->city }}" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Original State</div>
                        <input name="state" id="state" value="{{ $recipient->state }}" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>During which war or conflict did they earn the Medal of Honor?</div>
                        <select name="conflictId" id="conflictId">
                          @foreach ($all_conflicts as $one_conflict)
                            <option value="{{ $one_conflict->id }}" @if ($one_conflict->id == $recipient->moh_conflict_id) selected @endif />
                              {{ $one_conflict->name }}
                            </option>
                          @endforeach
                        </select>
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
                                <a href="{{ route('edit.recipient.link.index',['id'=>$id,'linkId'=>$one_link->id,'userType'=>'recipient']) }}">
                                  EDIT
                                </a>
                              </div>
                              <div class="deleteEl">
                                <a href="{{ route('delete.recipient.link.index',['id'=>$id,'linkId'=>$one_link->id]) }}">
                                  DELETE
                                </a>
                              </div>
                            </div>
                          @endforeach
                          <a href="{{ route('add.recipient.link.index',['id'=>$id]) }}">
                            + ADD A LINK
                          </a>
                        </div>
                      </div>
                      <div class="imgGrid">
                        <div></div>
                        <div>Veteran Photo</div>
                        <div></div>
                        @if ($recipient->veteran_img)
                          <div style="background-image: url('/{{ $image_path }}/veteran/{{ $recipient->veteran_img }}')" class="img">
                          </div>
                        @else
                          <div style="background-image: url('{{ url('/images/default_profile.jpeg') }}')" class="img">
                          </div>
                        @endif
                        <div></div>
                        <input id="veteran" type="file" class="form-control" name="veteranImg">
                        <div></div>
                        <div>
                          @if ($recipient->veteran_img)
                            <a href="{{ route('image.recipient.index',[
                              'id' => $recipient->id,
                              'img_type' => 'veteran',
                              'edit_type' => 'recipient',
                              'next_route' => 'recipient-list'
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
                        <label for="comments">Official Award Citation</label>
                        <textarea class="form-control" id="recipient" name="citation" maxlength="100000" placeholder="Max characters: 100,000">{{ $recipient->citation }}</textarea>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          If deceased, was their death the direct result of combat (KIA/MIA)?
                        </div>
                        @if ($can_edit_casualty == true)
                          <div>
                            <select name="isKiaMia">
                              <option value="0" @if ($recipient->kia_or_mia == 0) selected @endif>NO</option>
                              <option value="1" @if ($recipient->kia_or_mia == 1) selected @endif>YES</option>
                            </select>
                          </div>
                        @else
                          <div>
                            @if ($recipient->kia_or_mia == 0)
                              NO
                            @else
                              YES
                            @endif
                          </div>
                        @endif
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Membership Status
                        </div>
                        <div style="display:flex;justify-content:space-between">
                          @if ($status == "temporary")
                            <div>
                              Expires on:<br>
                              {{ substr($recipient->expiration_date,0,10) }}<br>
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
                          @if ($can_edit_member)
                            <div>
                              <a href="{{ route('edit.member.deadline',['id' => $recipient->id]) }}">
                                CHANGE
                              </a>
                            </div>
                          @else
                            <div>

                            </div>
                          @endif
                        </div>
                      </div>
                      <div>
                      <button
                        type="submit"
                        class="btn btn-primary">
                        EDIT A RECIPIENT
                      </button>
                      <button class="btn">
                        <a href="{{ route('edit.recipient.list') }}">{{ __('CANCEL') }}</a>
                      </button>
                      <a class="btn btn-warning" href="{{ route('edit.recipient.disable',['id' => $id]) }}">
                        NOT A RECIPIENT</rb>
                      </a>
                    </form>
                    @if ($can_edit_member == true && $recipient->expiration_date != null)
                      <div>
                        + Do you need to edit this person's member records? <a href="{{ route('edit.member.index',['id' => $id]) }}">Click here</a>
                      </div>
                    @endif
                    @if ($can_edit_casualty == true && $recipient->kia_or_mia == 1)
                      <div>
                        + Do you need to edit this person's casualty records? <a href="{{ route('edit.casualty.index',['id' => $id,'next_route' => 'casualty-list']) }}">Click here</a>
                      </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
