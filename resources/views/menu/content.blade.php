<div class="menuBody">
  <div class="mainMenuTopBttn">
    <a class="mainMenuLink" href="{{ url('/') }}">
      <img src="/{{ config('app.url_ext') }}images/welcome/5INF_crest-min.png"/>
    </a>
    <div class="userBox">
      @auth
      <!-- <a href="{{ url('/home#mail') }}">
        <div class="mailBox">
          <div></div>
          <div>{{ $unread_count }}</div>
        </div>
      </a> -->
      @endauth
      @if ($cart_count > 0)
        <a href="{{ url('/items/cart') }}">
          <div class="cartBox">
            <div></div>
            <div>{{ $cart_count }}</div>
          </div>
        </a>
      @endif
      <div id="mainMenuTopBttn" class="mainMenuTopSquare">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div>
  <div class="mainMenuBox">
    <a href="{{ url('/') }}">
      <div class="mainMenuBttn" data-bttn-num="0">
        HOME
      </div>
    </a>
    <div>
      <div class="mainMenuBttn" data-bttn-num="1">
        ASSOCIATION
      </div>
      <div class="mainMenuSubBox" data-box-num="1">
        <a href="{{ url('/registration') }}">
          <div class="mainMenuSubBttn">+ Membership</div>
        </a>
        <a href="{{ url('/reunion') }}">
          <div class="mainMenuSubBttn">+ Reunion</div>
        </a>
        <div class="mainMenuSubBttn">+ Newsletters</div>
        <div class="mainMenuSubBttn">+ Merchandise</div>
        <a href="{{ url('/donations') }}">
          <div class="mainMenuSubBttn">+ Our Donations</div>
        </a>
      </div>
    </div>
    <div>
      <div class="mainMenuBttn" data-bttn-num="2">
        HISTORY
      </div>
      <div class="mainMenuSubBox" data-box-num="2">
        <!-- <a href="/history/origin"> -->
          <div class="mainMenuSubBttn">+ Origin & Traditions</div>
        <!-- </a> -->
        <a href="{{ url('/history/timeline') }}">
          <div class="mainMenuSubBttn">+ History Timeline</div>
        </a>
        <a href="https://twocenturiesofvalor.com" target="_blank">
          <div class="mainMenuSubBttn">+ Book: "Two Centuries of Valor: The Story of the 5th Infantry Regiment"</div>
        </a>
      </div>
    </div>
    <div>
      <div class="mainMenuBttn" data-bttn-num="3">
        HALL OF HONOR
      </div>
      <div class="mainMenuSubBox" data-box-num="3">
        <a href="{{ url('/memorials/casualties') }}">
          <div class="mainMenuSubBttn">+ KIA, MIA, & Died In Service</div>
        </a>
        <div class="mainMenuSubBttn">+ Medal of Honor Recipients</div>
        <div class="mainMenuSubBttn">+ Deceased Members</div>
      </div>
    </div>
    <div>
      <div class="mainMenuBttn" data-bttn-num="4">
        PHOTO ALBUM
      </div>
      <div class="mainMenuSubBox" data-box-num="4">
        <a href="http://www.bobcat.ws/coppermine/index.php?cat=10001&page=1" target="_blank">
          <div class="mainMenuSubBttn">
            + Album 1
          </div>
        </a>
        <a href="http://www.bobcat.ws/coppermine2/index.php?cat=10001" target="_blank">
          <div class="mainMenuSubBttn">
            + Album 2
          </div>
        </a>
      </div>
    </div>
    @if (Route::has('login'))
      <div>
        <div class="mainMenuBttn" data-bttn-num="5">MEMBERS ONLY</div>
        <div class="mainMenuSubBox" data-box-num="5">
            @auth
                <a href="{{ url('/home') }}">
                  <div class="mainMenuSubBttn">
                    + My Profile
                  </div>
                </a>
                <div class="mainMenuSubBttn">+ Clothing & Items</div>
                <div class="mainMenuSubBttn">+ Reunions</div>
                <a href="http://bobcat.ws/members-newsletters.html" target="_blank">
                  <div class="mainMenuSubBttn">+ Newsletters</div>
                </a>
            @else
                <a href="{{ route('login') }}">
                  <div class="mainMenuSubBttn">+ Login</div>
                </a>
            @endauth
        </div>
      </div>
    @endif
  </div>
</div>
