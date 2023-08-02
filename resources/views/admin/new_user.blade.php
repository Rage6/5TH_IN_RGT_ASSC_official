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
                      <!-- <div class="imgGrid">
                        <label for="biography">
                          Veteran Photo
                        </label>
                        <input id="veteran" type="file" class="form-control" name="veteranImg">
                      </div> -->
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
                      <div class="basicInfoGrid">
                        <div>
                          Date of Death
                        </div>
                        <div class="basicInfoDate">
                          <input id="dayOfDeath" type="number" name="dayOfDeath" min="1" max="31" placeholder="DD" />
                          <input id="monthOfDeath" type="number" name="monthOfDeath" min="1" max="12" placeholder="MM" />
                          <input id="yearOfDeath" type="number" name="yearOfDeath" min="1800" max="9999" placeholder="YYYY" />
                        </div>
                      </div>
                      <!-- <div class="basicInfoSubtitle">
                        MEMBER INFORMTION
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Mailing Address
                        </div>
                        <input id="mailingAddress" name="mailingAddress">
                      </div>
                      <div class="imgGrid">
                        <label for="biography">
                          Current Photo
                        </label>
                        <input id="profile" type="file" class="form-control" name="currentImg">
                      </div>
                      <div class="form-group historyBox">
                        <label for="biography">
                          Personal History
                        </label>
                        <textarea class="form-control" id="biography" name="biography" maxlength="255" placeholder="Provide a brief summary of yourself and your time in the 5th"></textarea>
                      </div>  -->
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
                            <!-- <option value="one_active">
                              Active Duty
                            </option>
                            <option value="one_year">
                              One Year
                            </option>
                            <option value="two_years">
                              Two Year
                            </option>
                            <option value="five_years">
                              Five Years
                            </option>
                            <option value="permanent_1">
                              Lifetime (< 50 y/o)
                            </option>
                            <option value="permanent_2">
                              Lifetime (50 - 64 y/o)
                            </option>
                            <option value="permanent_3">
                              Lifetime (50 - 64 y/o)
                            </option> -->
                            <!-- <option value="permanent">
                              Permanent Member
                            </option> -->
                          </select>
                        </div>
                      </div>
                      <!-- <div class="basicInfoSubtitle">
                        CASUALTY INFORMATION
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Where did this soldier die in combat?
                        </div>
                        <input id="kiaLocation" name="kiaLocation">
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          What type of injury caused the soldier's death?
                        </div>
                        <input id="injuryType" name="injuryType">
                      </div> -->
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
