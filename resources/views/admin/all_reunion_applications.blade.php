@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  REUNION APPLICATIONS
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
                      @php
                        $bkgd = 'rgba(0,0,0,0.1)';
                      @endphp
                      @foreach ($all_applications as $one_application)
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
                              {{ $one_application->address_line_1 }} {{ $one_application->address_line_2 }}
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
                            Conflicts: {{ $one_application->conflicts }}
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
                          @php
                            $all_options = explode('||',$one_application->all_boolean_options);
                          @endphp
                          @for ($i = 0; $i < count($all_options); $i++)
                            <div>
                              @php
                                $option = explode("::",$all_options[$i]);
                              @endphp
                              {{ $option[0] }}: {{ $option[1] }}
                            </div>
                          @endfor
                        </div>
                        @php
                          if ($bkgd == 'rgba(0,0,0,0.1)') {
                            $bkgd = 'white';
                          } else {
                            $bkgd = 'rgba(0,0,0,0.1)';
                          };
                        @endphp
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
