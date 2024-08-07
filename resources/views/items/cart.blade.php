@extends('layouts.master')

@include('items.style')

@section('cart_content')
  <div class="main">
    <div class="content">
      <div class="mainTitle">
        Review The Cart
      </div>
      <div class="cartList">
        @if ($count > 0)
          <div class="cartFilled">
            <div>
              <form class="emptyCart" method="GET" action="{{ route('items.clear',['id' => $cart_id]) }}">
                <button>
                  EMPTY YOUR CART
                </button>
              </form>
              @php
                $total_cost = 0;
              @endphp
              @for ($a = 0; $a < count($cart); $a++)
                @php
                  $item = $cart[$a];
                  if (isset($item->size)) {
                    $size = ", Size: ".explode(":",$item->size)[0];
                  } else {
                    $size = '';
                  };
                  if (isset($item->color)) {
                    $color = ", Color: ".explode(":",$item->color)[0];
                  } else {
                    $color = '';
                  };
                  if (isset($item->patches)) {
                    $patch_name = explode(":",$item->patches)[0];
                    if ($patch_name != "None" && $patch_name != "None") {
                      $patches = " with ".$patch_name." patch";
                    } else {
                      $patches = '';
                    };
                  } else {
                    $patches = '';
                  };
                  $item = $cart[$a];
                  $item->name = $item->name.$patches.$color.$size;
                  $item_cost = $item->price * $item->count;
                  $total_cost += $item_cost;
                @endphp
                @if ($item->count > 0)
                    <!-- <pre>
                      @php
                        if (isset($item->patches)) {
                          var_dump($item);
                        };
                      @endphp
                    </pre> -->
                    <div class="cartItem">
                      <div class="name">
                        <!-- <div class="cartItemName">Product Name</div> -->
                        <div class="cartItemValue">{{ $item->name }}</div>
                      </div>
                      <div class="cost">
                        <div class="cartItemName">Price</div>
                        @php
                          $string_price = explode('.',strval($item->price));
                        @endphp
                        @if (count($string_price) > 1)
                          @if (strlen($string_price[1]) == 2)
                            <div class="cartItemValue">
                              ${{ strval($item->price) }}
                            </div>
                          @else
                            <div class="cartItemValue">
                              ${{ strval($item->price).'0' }}
                            </div>
                          @endif
                        @else
                          <div class="cartItemValue">
                            ${{ strval($item->price).'.00' }}
                          </div>
                        @endif
                      </div>
                      <div class="quantity">
                        <div class="cartItemName">Quantity</div>
                        <div class="cartItemValue">{{ $item->count }}</div>
                      </div>
                      <div class="subtotal">
                        <div class="cartItemName">Subtotal</div>
                        <div class="cartItemValue">
                          @php
                            $string_cost = explode('.',strval($item_cost));
                          @endphp
                          @if (count($string_cost) > 1)
                            @if (strlen($string_cost[1]) == 2)
                              ${{ strval($item_cost) }}
                            @else
                              ${{ strval($item_cost).'0' }}
                            @endif
                          @else
                            ${{ strval($item_cost).'.00' }}
                          @endif
                          <!-- ${{ $item_cost }} -->
                        </div>
                      </div>
                      <div class="change">
                        <a href="/items?purpose={{ $item->purpose }}&title={{ $item->title }}">
                          <span>
                            CHANGE
                          </span>
                        </a>
                      </div>
                    </div>
                @endif
              @endfor
              <div>
                @php
                  $string_total = explode('.',strval($total_cost));
                @endphp
                @if (count($string_total) > 1)
                  @if (strlen($string_total[1]) == 2)
                    <div class="cartItemValue">
                      TOTAL COST: ${{ strval($total_cost) }}
                    </div>
                  @else
                    <div class="cartItemValue">
                      TOTAL COST: ${{ strval($total_cost).'0' }}
                    </div>
                  @endif
                @else
                  <div class="cartItemValue">
                    TOTAL COST: ${{ strval($total_cost).'.00' }}
                  </div>
                @endif
              </div>
            </div>
            <div>
              <div>
                Credit Card Payment
              </div>
              <!-- <div class="creditCardForm">
                <form method="POST" action="{{ route('items.purchase') }}" class="card-form mt-3 mb-3">
                    @csrf
                    <input class="StripeElement mb-3 cardInput" type="email" name="payment_email" placeholder="Email address" required>
                    <input type="hidden" name="payment_method" class="payment-method">
                    <input type="hidden" name="text_cart" value="{{ $text_cart }}">
                    <input class="StripeElement mb-3 cardInput" name="card_holder_name" placeholder="Card holder name" required>
                    <input class="StripeElement mb-3 cardInput" type="text" name="mailing_address" placeholder="Mailing Address (if necessary)"/>
                    <input type="hidden" name="email_title" value="{{ $title }}">
                    <input type="hidden" name="get_email_list" value="{{ $purpose }}">
                    <div id="card-element" class="cardInput"></div>
                    <div id="card-errors" class="cardInput" role="alert"></div>
                    <div>
                        <button type="submit">
                            PAY NOW
                        </button>
                    </div>
                </form>
              </div> -->
              <div class="creditCardForm">
                 <form role="form" action="{{ route('items.purchase') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                    @csrf
                    <input class="cardInput" placeholder="Name on Card" size='4' type='text' name="card_holder_name" required>
                    <input class="cardInput card-number" placeholder="Card Number" autocomplete='off' size='20' type='text' required>
                    <div class="cardInput expireAndCvc">
                      <input class="card-cvc" autocomplete='off' placeholder='CVC' size='4' type='text' required>
                      <div>
                        <input class="card-expiry-month" placeholder='MM' size='2' type='text' required> / <input class="card-expiry-year" placeholder='YYYY' size='4' type='text' required>
                      </div>
                    </div>
                    <input class='cardInput' placeholder="Email Address" type='email' name="payment_email" required>
                    <input class='cardInput' placeholder="Mailing Address (optional)" type='text' name="mailing_address">
                    <textarea class='cardInput' placeholder="Optional Comments (max. 300 characters)" name="comments" maxlength="300"></textarea>
                    <input type="hidden" name="text_cart" value="{{ $text_cart }}" required>
                    <input type="hidden" name="email_title" value="{{ $title }}" required>
                    <input type="hidden" name="get_email_list" value="{{ $purpose }}" required>
                    {{-- <div class='form-row row'>
                       <div class='col-md-12 error form-group hide'>
                          <div class='alert-danger alert'>Please correct the errors and try again.
                          </div>
                       </div>
                    </div> --}}
                    <button class="payBttn" type="submit">Pay Now</button>
                    <div class="payDisable payRemove">Pay Now</div>
                 </form>
              </div>
            </div>
          </div>
          @if ($purpose && $title)
            <div>
              <a href="/items?purpose={{ $purpose }}&title={{ $title }}"><< Return to the '{{ $title }}' store</a>
            </div>
          @endif
        @elseif ($text_cart == "expired")
          <div>
            Sorry, but your cart has expired. This occurs if nothing is done on the website for 15+ minutes.
          </div>
          @if ($purpose && $title)
            <div>
              <a href="/items?purpose={{ $purpose }}&title={{ $title }}"><< Return to the '{{ $title }}' store</a>
            </div>
          @endif
        @else
          <div>
            No items selected
          </div>
          @if ($purpose && $title)
            <div>
              <a href="/items?purpose={{ $purpose }}&title={{ $title }}"><< Return to the '{{ $title }}' store</a>
            </div>
          @endif
        @endif
      </div>
    </div>
    @include ('footer.content')
  </div>
  
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  <script type="text/javascript">
    $(function() {
      var $form = $(".require-validation");
      var $payBttn = $(".payBttn");
      var $payDisable = $(".payDisable");
      $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]', 'input[type=text]', 'input[type=file]', 'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
        });
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
              number: $('.card-number').val(),
              cvc: $('.card-cvc').val(),
              exp_month: $('.card-expiry-month').val(),
              exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
      });

      function stripeResponseHandler(status, response) {
          if (response.error) {
              $('.error')
                  .removeClass('hide')
                  .find('.alert')
                  .text(response.error.message);
          } else {
              $payBttn.addClass('payRemove');
              $payDisable.removeClass('payRemove');
              /* token contains id, last4, and card type */
              var token = response['id'];
              $form.find('input[type=text]').empty();
              $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
              $form.get(0).submit();
          }
      }
    });
  </script>
@stop
