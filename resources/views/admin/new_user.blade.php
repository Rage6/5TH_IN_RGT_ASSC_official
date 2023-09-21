@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD A BOBCAT  ') }}</div>

                <div class="card-body">
                    <a href="{{ route('admin.index') }}">
                      << BACK
                    </a>
                    <form method="POST" action="{{ route('new.member.post') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="basicInfoSubtitle">
                        BASIC INFORMATION
                      </div>
                      <div class="basicInfoGrid">
                        <div>First Name</div>
                        <input name="firstName" id="firstName" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Middle Name</div>
                        <input name="middleName" id="middleName" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Last Name</div>
                        <input name="lastName" id="lastName" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Email</div>
                        <input type="email" name="email" id="email"/>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Phone Number</div>
                        <input type="number" name="phoneNumber" id="phoneNumber"/>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Spouse</div>
                        <input name="spouseName" id="spouseName"/>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Current Photo</div>
                        <input type="file" name="currentImg" id="current"/>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Service Photo</div>
                        <input type="file" name="veteranImg" id="veteran"/>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          What is/was this person's highest rank?
                        </div>
                        <div>
                          <input id="rank" name="rank">
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          What is their member status? If deceased and a member, select anything EXCEPT 'nonmember'.
                        </div>
                        <div>
                          <select name="membershipStatus">
                            <option value="nonmember">
                              Nonmember
                            </option>
                            <option value="start_trial">
                              30-day Trial Membership
                            </option>
                            @foreach ($all_reg_options as $one_option)
                              @if ($one_option->how_long)
                                <option value="{{ $one_option->id }}">
                                  {{ $one_option->name }}
                                </option>
                              @endif
                            @endforeach
                            @foreach ($all_reg_options as $one_option)
                              @if (!$one_option->how_long)
                                <option value="{{ $one_option->id }}">
                                  {{ $one_option->name }}
                                </option>
                              @endif
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Is this person deceased?
                        </div>
                        <div>
                          <select name="isDeceased">
                            <option selected value="0">NO</option>
                            <option value="1">YES</option>
                          </select>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          If deceased, where is this person buried?
                        </div>
                        <div>
                          <input id="burialSite" name="burialSite">
                        </div>
                      </div>
                      <!-- <div class="imgGrid">
                        <label for="biography">
                          Tombstone Photo
                        </label>
                        <input id="tombstone" type="file" class="form-control" name="tombstoneImg">
                      </div> -->
                      @if ($can_edit_casualty)
                        <div class="basicInfoGrid">
                          <div>
                            If deceased, was their death the direct result of combat (KIA/MIA)?
                          </div>
                          <div>
                            <select name="isKiaMia">
                              <option selected value="0">NO</option>
                              <option value="1">YES</option>
                            </select>
                          </div>
                        </div>
                      @endif
                      @if ($can_edit_recipient)
                        <div class="basicInfoGrid">
                          <div>
                            Were they a recipient of the Congressional Medal of Honor?
                          </div>
                          <div>
                            <select name="isRecipient">
                              <option selected value="0">NO</option>
                              <option value="1">YES</option>
                            </select>
                          </div>
                        </div>
                      @endif
                      <button type="submit" name="addBobcat" class="btn btn-primary">
                        ADD A BOBCAT
                      </button>
                      <button class="btn">
                        <a href="{{ route('admin.index') }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
