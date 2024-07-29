@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  MEMBERSHIP APPLICATIONS
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
                  <div>
                    <div>
                      <u>APPLICATIONS LIST</u>
                    </div>
                    <div style="width:100%">
                      <div style="display:grid;grid-template-columns:40% 30% 30%;background-color:black; color:white">
                        <div>
                          Name
                        </div>
                        <div>
                          Email
                        </div>
                        <div>
                          Date (East Coast Time)
                        </div>
                      </div>
                      @foreach ($all_applications as $one_application)
                        @php 
                          if ($one_application->status == 'joined') {
                            $bkgd = "rgba(0,128,0,0.3)";
                          } elseif ($one_application->status == 'denied') {
                            $bkgd = "rgba(255,0,0,0.3)";
                          } else {
                            $bkgd = "rgba(0,0,0,0.3)";
                          }
                        @endphp
                        <div style="border-bottom:1px solid black">
                          <div style="display:grid;grid-template-columns:35% 30% 30% 5%;background-color:{{ $bkgd }}">
                            <div style="overflow-x:scroll">
                              {{ $one_application->first_name }} {{ $one_application->last_name }}
                            </div>
                            <div>
                              {{ $one_application->email }}
                            </div>
                            <div>
                              {{ $one_application->created_at }}
                            </div>
                            <div>
                              <div data-id="{{ $one_application->id }}" data-type="head" style="text-align: center;transform: rotate(180deg);cursor:pointer">^</div>
                            </div>
                          </div>
                          <div data-id="{{ $one_application->id }}" data-type="details" style="display:none;background-color:{{ $bkgd }}">
                            <div>
                              First Name: {{ $one_application->first_name }}
                            </div>
                            <div>
                              Last Name: {{ $one_application->last_name }}
                            </div>
                            <div>
                              Spouse Name: {{ $one_application->spouse_name }}
                            </div>
                            <div>
                              Address:
                              <div>
                                {{ $one_application->address_line_1 }}
                                @if ($one_application->address_line_2) <br>{{ $one_application->address_line_2 }} @endif
                              </div>
                              <div>
                                {{ $one_application->city }}, {{ $one_application->state }} {{ $one_application->zip_code }}
                              </div>
                            </div>
                            <div>
                              Country: {{ $one_application->country }}
                            </div>
                            <div>
                              Phone Number: {{ $one_application->phone_number }}
                            </div>
                            <div>
                              Conflicts when with 5th: {{ $one_application->conflicts }}
                            </div>
                            <div>
                              Conflicts when <u>NOT</u> with the 5th: {{ $one_application->conflicts }}
                            </div>
                            <div>
                              Unit Details: {{ $one_application->unit_details }}
                            </div>
                            <div>
                              Email: {{ $one_application->email }}
                            </div>
                            <div>
                              Comments: {{ $one_application->comments }}
                            </div>
                            <div>
                              <form method="POST" action="{{ route('membership.change.status',['id' => $one_application->id]) }}">
                                @csrf
                                Status: 
                                @if ($one_application->status == 'joined') 
                                  <select style="color:white;background-color:green" name="status">
                                @elseif ($one_application->status == 'pending') 
                                  <select style="color:white;background-color:grey" name="status">
                                @else 
                                  <select style="color:white;background-color:red" name="status"> 
                                @endif
                                  <option @if ($one_application->status == "joined") selected @endif value="joined">Joined</option>
                                  <option @if ($one_application->status == "pending") selected @endif value="pending">Pending</option>
                                  <option @if ($one_application->status == "denied") selected @endif value="denied">Denied</option>
                                </select>
                                <button>CHANGE</button>
                              </form>
                            </div>
                            <div style="margin-top: 20px; padding: 0 10px 10px 10px;display:flex;justify-content:end">
                              <a href="{{ route('member.application.delete',['id' => $one_application->id]) }}">
                                <span type="submit" style="background-color:red;color:white;padding:5px;border-radius:5px">DELETE APPLICATION</span>
                              </a>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    </div>
                    {{ $all_applications->links('pagination::default') }}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
