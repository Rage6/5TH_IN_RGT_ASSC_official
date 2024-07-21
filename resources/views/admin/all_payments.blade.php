@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  MEMBER PAYMENT HISTORY
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
                      <u>PAYMENT DIRECTORY</u>
                    </div>
                    <div style="width:100%">
                      <!-- <div style="display:grid;grid-template-columns:40% 30% 30%;background-color:black; color:white">
                        <div>
                          Customer Email
                        </div>
                        <div>
                          Amount Paid
                        </div>
                        <div>
                          Date (East Coast Time)
                        </div>
                      </div> -->
                      @php
                        $bkgd = 'rgba(0,0,0,0.1)';
                      @endphp
                      @foreach ($all_payments as $one_payment)
                        @php
                          if ($one_payment->user_id != null) {
                            foreach ($all_members as $one_member) {
                              if ($one_payment->user_id == $one_member->id) {
                                $user_name = $one_member->first_name." ".$one_member->last_name;
                              };
                            };
                          } else {
                            $user_name = null;
                          };
                        @endphp
                        <div class="paymentRow" style="background-color:{{ $bkgd }}">
                          <div class="paymentName">
                            @if ($user_name)
                              {{ $user_name }}
                            @endif
                          </div>
                          <div class="paymentEmail">
                            {{ $one_payment->customer_email }}
                          </div>
                          <div class="paymentAmount">
                            ${{ $one_payment->total_cost }}
                          </div>
                          <div class="paymentDate">
                            {{ $one_payment->created_at }}
                          </div>
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
                    {{ $all_payments->links('pagination::default') }}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
