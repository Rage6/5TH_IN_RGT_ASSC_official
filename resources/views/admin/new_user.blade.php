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
                      @if ($errors)
                        @foreach ($errors->all() as $one_error)
                          <div style="color:red">
                            <div>- {{ $one_error }}</div>
                          </div>
                        @endforeach
                      @endif
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
                        <input name="phoneNumber" id="phoneNumber"/>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Mailing Address
                        </div>
                        <div>
                          <input
                            name="streetAddressOne"
                            placeholder="Street Address"/></br>
                          <input
                            name="streetAddressTwo"
                            placeholder="Street Address 2"/></br>
                          <input
                            name="mailingCity"
                            placeholder="City"/></br>
                          <select style="width:100%" name="mailingState">
                            <option value>- Select -</option>
                            <option value="AL">AL - Alabama</option>
                            <option value="AK">AK - Alaska</option>
                            <option value="AS">AS - American Samoa</option>
                            <option value="AZ">AZ - Arizona</option>
                            <option value="AR">AR - Arkansas</option>
                            <option value="CA">CA - California</option>
                            <option value="CO">CO - Colorado</option>
                            <option value="CT">CT - Connecticut</option>
                            <option value="DE">DE - Delaware</option>
                            <option value="DC">DC - District of Columbia</option>
                            <option value="FL">FL - Florida</option>
                            <option value="GA">GA - Georgia</option>
                            <option value="GU">GU - Guam</option>
                            <option value="HI">HI - Hawaii</option>
                            <option value="ID">ID - Idaho</option>
                            <option value="IL">IL - Illinois</option>
                            <option value="IN">IN - Indiana</option>
                            <option value="IA">IA - Iowa</option>
                            <option value="KS">KS - Kansas</option>
                            <option value="KY">KY - Kentucky</option>
                            <option value="LA">LA - Louisiana</option>
                            <option value="ME">ME - Maine</option>
                            <option value="MD">MD - Maryland</option>
                            <option value="MA">MA - Massachusetts</option>
                            <option value="MI">MI - Michigan</option>
                            <option value="MN">MN - Minnesota</option>
                            <option value="MS">MS - Mississippi</option>
                            <option value="MO">MO - Missouri</option>
                            <option value="MT">MT - Montana</option>
                            <option value="NE">NE - Nebraska</option>
                            <option value="NV">NV - Nevada</option>
                            <option value="NH">NH - New Hampshire</option>
                            <option value="NJ">NJ - New Jersey</option>
                            <option value="NM">NM - New Mexico</option>
                            <option value="NY">NY - New York</option>
                            <option value="NC">NC - North Carolina</option>
                            <option value="ND">ND - North Dakota</option>
                            <option value="MP">MP - Northern Mariana Islands</option>
                            <option value="OH">OH - Ohio</option>
                            <option value="OK">OK - Oklahoma</option>
                            <option value="OR">OR - Oregon</option>
                            <option value="PA">PA - Pennsylvania</option>
                            <option value="PR">PR - Puerto Rico</option>
                            <option value="RI">RI - Rhode Island</option>
                            <option value="SC">SC - South Carolina</option>
                            <option value="SD">SD - South Dakota</option>
                            <option value="TN">TN - Tennessee</option>
                            <option value="TX">TX - Texas</option>
                            <option value="UM">UM - United States Minor Outlying Islands</option>
                            <option value="UT">UT - Utah</option>
                            <option value="VT">VT - Vermont</option>
                            <option value="VI">VI - Virgin Islands</option>
                            <option value="VA">VA - Virginia</option>
                            <option value="WA">WA - Washington</option>
                            <option value="WV">WV - West Virginia</option>
                            <option value="WI">WI - Wisconsin</option>
                            <option value="WY">WY - Wyoming</option>
                            <option value="AA">AA - Armed Forces Americas</option>
                            <option value="AE">AE - Armed Forces Africa</option>
                            <option value="AE">AE - Armed Forces Canada</option>
                            <option value="AE">AE - Armed Forces Europe</option>
                            <option value="AE">AE - Armed Forces Middle East</option>
                            <option value="AP">AP - Armed Forces Pacific</option>
                          </select>
                          </br>
                          <input
                            name="zipCode"
                            placeholder="Zip Code"/></br>
                        </div>
                        <!-- <input
                          id="mailingAddress"
                          name="mailingAddress" -->
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
                        <div>Veteran Photo</div>
                        <input type="file" name="veteranImg" id="veteran"/>
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
                          If they are an Associated Member, which other member are they associated by?
                        </div>
                        <div>
                          <input name="associateMember" id="associateMember"/>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Is this person an Honorary Member?</div>
                        <div>
                          <select name="honoraryMember" id="honoraryMember">
                            <option value="0">NO</option>
                            <option value="1">YES</option>
                          </select>
                        </div>
                      </div>
                      <div>
                        <div>
                          With which job & unit were they part of the regiment, and when?
                        </div>
                        <input type="hidden" data-tag="list" name="timespanIndexList" value="1"/>
                        <div class="allTimespanBox" data-tag="entries">
                          <div class="oneTimespanBox" data-tag="entry" data-index="1">
                            <input class="gridJob" type="text" data-tag="job" data-index="1" name="timespanJob_1" placeholder="Job">
                            <input class="gridUnit" type="text" data-tag="unit" data-index="1" name="timespanUnit_1" placeholder="Unit"/>
                            <input class="gridStartMonth" type="number" data-tag="startMonth" data-index="1" name="startMonth_1" placeholder="Start Month (1-12)" min="1" max="12">
                            <input class="gridStartYear" type="number" data-tag="startYear" data-index="1" name="startYear_1" placeholder="Start Year" min="1812">
                            <input class="gridEndMonth" type="number" data-tag="endMonth" data-index="1" name="endMonth_1" placeholder="End Month (1-12)" min="1" max="12">
                            <input class="gridEndYear" type="number" data-tag="endYear" data-index="1" name="endYear_1" placeholder="End Year" min="1812">
                            <div class="gridDelete">
                              <span data-tag="delete" data-index="1">X</span>
                            </div>
                          </div>
                        </div>
                        <div class="addEntryRow">
                          <span data-tag="button">
                            + ADD TIMESPAN
                          </span>
                        </div>
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
                          Which conflicts/wars did this person participate in?
                        </div>
                        <div>
                          @php $conflict_number = 1 @endphp
                          @foreach ($all_conflicts as $one_conflict)
                            @php
                              $input_name = 'conflict_'.$conflict_number;
                            @endphp
                            <input type="checkbox" name="{{ $input_name }}" value="{{ $one_conflict->id }}" /><span> {{ $one_conflict->name }}</span><br>
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
                            <option selected value="0">NO</option>
                            <option value="1">YES</option>
                          </select>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Date of Death
                        </div>
                        <div>
                          <div class="basicDateInfo">
                            <input name="monthOfDeath" type="number" min="1" max="12" placeholder="MM">
                            <input name="dayOfDeath" type="number" min="1" max="31" placeholder="DD">
                            <input name="yearOfDeath" type="number" min="1808" max="3000" placeholder="YYYY">

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
                          <input id="burialSite" name="burialSite">
                        </div>
                      </div>
                      <!-- <div class="imgGrid">
                        <label for="biography">
                          Tombstone Photo
                        </label>
                        <input id="tombstone" type="file" class="form-control" name="tombstoneImg">
                      </div> -->
                      <div class="basicInfoGrid">
                        <div>
                          Are there any additional comments about this person? They will only appear on their casualty, Medal of Honor (MoH), or deceased member pages. Examples include obituaries, tributes, and press articles. MoH citations do NOT apply here.
                        </div>
                        <textarea id="comments" name="comments">
                        </textarea>
                      </div>
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
@php
  $unset_these = [
    $all_reg_options,
    $all_conflicts,
    $conflict_number,
    $can_edit_casualty,
    $can_edit_recipient
  ];
  check_memory_limit($unset_these);
@endphp
@endsection
