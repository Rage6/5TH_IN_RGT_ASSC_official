@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  PAYMENT HISTORY
                </div>
                <div class="card-body">
                  @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                  @endif
                  <div>
                    <a href="{{ route('home') }}"><< BACK</a>
                  </div>
                  <div>
                    <div>
                      <u>{{ $user_name }}'s Payments</u>
                    </div>
                    <div style="width:100%">
                      <div style="display:grid;grid-template-columns:40% 30% 30%;background-color:black; color:white">
                        <div>
                          Amount Paid
                        </div>
                        <div>
                          Date (East Coast Time)
                        </div>
                      </div>
                      @php
                        $bkgd = 'rgba(0,0,0,0.1)';
                      @endphp
                      @if (count($all_payments) > 0)
                        @foreach ($all_payments as $one_payment)
                          <div style="display:grid;grid-template-columns:40% 30% 30%;background-color:{{ $bkgd }}">
                            <div>
                              ${{ $one_payment->total_cost }}
                            </div>
                            <div>
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
                      @else
                        <div>
                          <i>No online payments were found</a>. If you have any questions, please talk to the Treasurer on our <a href="{{ route('staff.index') }}">Contact Staff page</a>.
                        </div>
                      @endif
                    </div>
                    {{ $all_payments->links('pagination::default') }}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
