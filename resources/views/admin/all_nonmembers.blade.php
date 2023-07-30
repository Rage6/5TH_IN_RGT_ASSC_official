@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  LIST OF NONMEMBERS
                </div>
                <div class="card-body">
                  @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                  @endif
                  <div>
                    <a href="{{ route('admin.index') }}"><< BACK</a>
                  </div>
                  <p>
                    The following individuals have not been registered as a member, casualty, or Medal of Honor recipient. They can be added to one of these records by one these options:
                    <ul>
                      <li>
                        <u>Add as member</u>: Click on the 'Edit Member' button below, scroll down to the 'Membership Status' option, select anything EXCEPT for 'nonmember', and click on the "Edit A Member" button.
                      </li>
                      <li>
                        <u>Add as casualty</u>: Click on the 'Edit Casualty' button below and click on the "Edit A Casualty" button.
                      </li>
                    </ul>
                  </p>
                  <p>
                    NOTE: These options will appear if your account has the necessary permissions.
                  </p>
                  <div>
                    <div style="margin-top:50px;width:100%">
                      @php $background = 'white'; @endphp
                      @foreach ($all_nonmembers as $one_nonmember)
                        @php
                          if ($background == 'lightgrey') {
                            $background = 'white';
                          } else {
                            $background = 'lightgrey';
                          };
                        @endphp
                        <div style="margin-bottom:10px;background-color:{{ $background }};display:grid;grid-template-columns:50% 50%">
                          <div>
                            {{ $one_nonmember->last_name }} @if ($one_nonmember->suffix_name) {{ $one_nonmember->suffix_name }} @endif, {{ $one_nonmember->first_name }} @if ($one_nonmember->middle_name) {{ substr($one_nonmember->middle_name,0,1) }}. @endif
                          </div>
                          <div style="display:flex;flex-wrap:wrap">
                            @if ($can_edit_member == true)
                              <div>
                                <a href="{{ route('edit.member.index',['id' => $one_nonmember->id]) }}">
                                  <button>
                                    EDIT MEMBER
                                  </button>
                                </a>
                              </div>
                            @endif
                            @if ($can_edit_casualty == true)
                              <div>
                                <a href="{{ route('edit.casualty.index',['id' => $one_nonmember->id]) }}">
                                  <button>
                                    EDIT CASUALTY
                                  </button>
                                </a>
                              </div>
                            @endif
                          </div>
                        </div>
                      @endforeach
                    </div>
                    {{ $all_nonmembers->links('pagination::default') }}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
