@extends('layouts.master')

@section('reunion_style')
  <!-- Welcome Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/{{ config('app.url_ext') }}css/my_custom/cart/360_cart.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/{{ config('app.url_ext') }}css/my_custom/cart/375_cart.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 376px) and (max-width: 414px)" type="text/css" href="/{{ config('app.url_ext') }}css/my_custom/cart/414_cart.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/{{ config('app.url_ext') }}css/my_custom/cart/768_cart.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/{{ config('app.url_ext') }}css/my_custom/cart/1366_cart.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/{{ config('app.url_ext') }}css/my_custom/cart/1920_cart.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/{{ config('app.url_ext') }}css/my_custom/cart/past_1920_cart.css">
  <script>
    function openAndCloseForm() {
      let currentDisplay = document.getElementById("reunionForm").style.display;
      let currentWidth = window.outerWidth;
      if (currentDisplay == 'none') {
        if (currentWidth < 1366) {
          document.getElementById("reunionForm").style.display = "block";
        } else {
          document.getElementById("reunionForm").style.display = "grid";
        };
      } else {
        document.getElementById("reunionForm").style.display = "none";
      };
      let menuHeight = document.getElementById("mainMenuTopBttn").offsetHeight;
      let formTop = document.getElementById("reunionForm").offsetTop;
      let scrollAmount = formTop - menuHeight;
      window.scroll({
        top: scrollAmount,
        behavior: 'smooth'
      });
    };
    function clickSection(section,type) {
      // Opens the correct box...
      let allBoxes = document.querySelectorAll("[data-type='box']");
      for (let boxNum = 0; boxNum < allBoxes.length; boxNum++) {
        allBoxes[boxNum].style.display = "none";
      };
      let targetBox = document.querySelectorAll("[data-type='box'][data-section='"+section+"']")[0];
      targetBox.style.display = "block";
      // ...and scrolls down to opened box
      let menuHeight = document.getElementById("mainMenuTopBttn").offsetHeight;
      let targetTop = targetBox.offsetTop;
      let scrollAmount = targetTop - menuHeight;
      window.scroll({
        top: scrollAmount,
        behavior: 'smooth'
      });
    };
    document.querySelectorAll('[data-type]');
  </script>
  @include ('footer.style')
@stop

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
              <form class="emptyCart" method="GET" action="{{ route('items.clear') }}">
                <button>
                  EMPTY YOUR CART
                </button>
              </form>
              @php
                $total_cost = 0;
              @endphp
              @foreach($cart as $item)
                @php
                  $item_cost = $item[3] * $item[2];
                  $total_cost += $item_cost;
                @endphp
                @if ($item[3] > 0)
                    <div class="cartItem">
                      <div class="quantity">
                        <div class="cartItemName">Quantity</div>
                        <div class="cartItemValue">{{ $item[3] }}</div>
                      </div>
                      <div class="cost">
                        <div class="cartItemName">Cost</div>
                        <div class="cartItemValue">${{ $item[2] }}</div>
                      </div>
                      <div class="name">
                        <!-- <div class="cartItemName">Product Name</div> -->
                        <div class="cartItemValue">{{ $item[1] }}</div>
                      </div>
                      <div class="change">
                        <a href="/items?purpose={{ $item[4] }}&title={{ $item[5] }}">
                          <span>
                            CHANGE
                          </span>
                        </a>
                      </div>
                    </div>
                @endif
              @endforeach
              <div>
                TOTAL COST: ${{ $total_cost }}
              </div>
            </div>
            <div>
              <div>
                Credit Card Payment
              </div>
              <div class="creditCardForm">
                <form method="POST" action="{{ route('items.purchase') }}" class="card-form mt-3 mb-3">
                    @csrf
                    <input class="StripeElement mb-3 cardInput" type="text" name="payment_email" placeholder="Email address" required>
                    <input type="hidden" name="payment_method" class="payment-method">
                    <input type="hidden" name="text_cart" value="{{ $text_cart }}">
                    <input class="StripeElement mb-3 cardInput" name="card_holder_name" placeholder="Card holder name" required>
                    <input class="StripeElement mb-3 cardInput" type="text" name="mailing_address" placeholder="Mailing Address (if necessary)"/>
                    <div id="card-element" class="cardInput"></div>
                    <div id="card-errors" class="cardInput" role="alert"></div>
                    <div>
                        <button type="submit">
                            PAY NOW
                        </button>
                    </div>
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
    <pre>
      @php
        var_dump($cart_content);
        var_dump($session);
        var_dump($text_cart);
      @endphp
    </pre>
    @include ('footer.content')
  </div>
  <script src="https://js.stripe.com/v3/"></script>
  <script>
      let stripe = Stripe("{{ env('STRIPE_KEY') }}")
      let elements = stripe.elements()
      let style = {
          base: {
              color: '#32325d',
              fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
              fontSmoothing: 'antialiased',
              fontSize: '16px',
              backgroundColor: 'white',
              '::placeholder': {
                  color: '#aab7c4'
              }
          },
          invalid: {
              color: '#fa755a',
              iconColor: '#fa755a'
          }
      }
      let card = elements.create('card', {style: style})
      card.mount('#card-element')
      let paymentMethod = null
      $('.card-form').on('submit', function (e) {
          $('button.pay').attr('disabled', true)
          if (paymentMethod) {
              return true
          }
          stripe.confirmCardSetup(
              "{{ $intent->client_secret }}",
              {
                  payment_method: {
                      card: card,
                      billing_details: {name: $('.card_holder_name').val()}
                  }
              }
          ).then(function (result) {
              if (result.error) {
                  $('#card-errors').text(result.error.message)
                  $('button.pay').removeAttr('disabled')
              } else {
                  paymentMethod = result.setupIntent.payment_method
                  $('.payment-method').val(paymentMethod)
                  $('.card-form').submit()
              }
          })
          return false
      })
  </script>
@stop
