@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('CHANGE MY PROFILE  ') }}</div>

                <div class="card-body">
                  <div>
                    <a href="{{ route('profile.edit') }}">
                      << BACK
                    </a>
                    @if ($errors)
                      <div style="color:red;text-align:center">
                        <b>{{ $errors->first() }}</b>
                      </div>
                    @endif
                    <form method="POST" action="{{ route('password.edit.change') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="basicInfoGrid">
                        <div>New Password</div>
                        <input name="newPassword" type="password" min="8" id="newPassword" placeholder="No less than 8 characters" id="confirmPassword" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Confirm New Password</div>
                        <input name="confirmPassword" type="password" min="8" placeholder="Must match first password" id="confirmPassword" required />
                      </div>
                      <button
                        type="submit"
                        class="btn btn-primary">
                        CHANGE PASSWORD
                      </button>
                      <button class="btn">
                        <a href="{{ route('profile.edit') }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
