@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD A BOBCAT  ') }}</div>

                <div class="card-body">
                    <a href="{{ route('admin.index') }}">
                      <button class="btn btn-secondary">
                        << BACK
                      </button>
                    </a>
                    <form method="POST" action="{{ route('new.member.post') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="basicInfoGrid">
                        <div>First Name</div>
                        <input name="firstName" id="firstName" placeholder="First Name" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Last Name</div>
                        <input name="lastName" id="lastName" placeholder="Last Name" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Email</div>
                        <input type="email" name="email" id="email" placeholder="Email" required/>
                      </div>
                      <div class="imgGrid">
                        <input id="profile" type="file" class="form-control" name="currentImg">
                      </div>
                      <div class="imgGrid">
                        <input id="veteran" type="file" class="form-control" name="veteranImg">
                      </div>
                      <div class="form-group historyBox">
                        <label for="biography">Personal History</label>
                        <textarea class="form-control" id="biography" name="biography" maxlength="255" placeholder="Provide a brief summary of yourself and your time in the 5th"></textarea>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Is this member deceased?
                        </div>
                        <select name="isDeceased">
                          <option value="0">NO</option>
                          <option value="1">YES</option>
                        </select>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Membership
                        </div>
                        <select name="membershipStatus">
                          <option value="nonmember">
                            Nonmember
                          </option>
                          <option value="permanent">
                            Permanent Member
                          </option>
                          <option value="start_trial">
                            30-day Trial Membership
                          </option>
                        </select>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Q) What is a 'nonmember'?
                        </div>
                        <div>
                          The 'nonmember' status is mostly for any Bobcat that was KIA or a MOH recipient that was not a member. However, it can also be used to make an account for someone outside of our association. The 'nonmember' status provides minimum privileges unless that person is assigned with roles.
                        </div>
                      </div>
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
