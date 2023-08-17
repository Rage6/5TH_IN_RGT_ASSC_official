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
                    The following individuals have not been registered as a member, casualty, or Medal of Honor recipient. They can be added to these records with the options below. Some/all of these options will only appear if your account has the necessary permissions.
                    <ul>
                      <li>
                        <u>Add as member</u>: Click on the 'Edit Member' button below, scroll down to the 'Membership Status' option, select anything EXCEPT 'Nonmember', and click on the blue "Edit A Member" button.
                      </li>
                      <li>
                        <u>Add as casualty</u>: Click on the 'Edit Casualty' button below, enter the correct information, and click on the blue "Edit A Casualty" button.
                      </li>
                      <li>
                        <u>Add as Medal of Honor recipient</u>: Click on the 'Edit Recipient' button below, enter the correct information, and click on the blue "Edit A Recipient" button.
                      </li>
                    </ul>
                  </p>
                  <p style="border-top:2px dashed black;">
                    <ul>
                      <li>
                        <u style="color:red"><b>Permanent Delete</b></u>: Clicking on the red 'DELETE' button will take you to a page for permanently deleting a person and their images. <u><i>This cannot be undone!</i></u>
                      </li>
                    </ul>
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
                            @if ($can_edit_recipient == true)
                              <div>
                                <a href="{{ route('edit.recipient.index',['id' => $one_nonmember->id]) }}">
                                  <button>
                                    EDIT RECIPIENT
                                  </button>
                                </a>
                              </div>
                            @endif
                            @if ($can_delete_person == true)
                              <div>
                                <a href="{{ route('delete.member.index',['id' => $one_nonmember->id]) }}">
                                  <button style="background-color:red;color:white">
                                    DELETE
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
