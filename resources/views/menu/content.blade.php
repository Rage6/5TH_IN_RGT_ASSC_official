<div class="menuBody">
  <div class="mainMenuTopBttn">
    <a class="mainMenuLink" href="{{ url('/') }}">
      <img src="/{{ config('app.url_ext') }}images/welcome/5INF_crest-min.png"/>
    </a>
    <div class="userBox">
      @auth

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
        <a href="{{ url('/newsletter') }}">
          <div class="mainMenuSubBttn">+ Newsletters</div>
        </a>
        <a href="{{ url('items?purpose=merchandise.index&title=Bobcat%20Merchandise') }}">
          <div class="mainMenuSubBttn">+ Merchandise</div>
        </a>
        <a href="{{ url('/donations') }}">
          <div class="mainMenuSubBttn">+ Donations</div>
        </a>
      </div>
    </div>
    <div>
      <div class="mainMenuBttn" data-bttn-num="2">
        HISTORY
      </div>
      <div class="mainMenuSubBox" data-box-num="2">
        <a href="{{ route('origin.index') }}">
          <div class="mainMenuSubBttn">+ Origin & Traditions</div>
        </a>
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
        <a href="{{ route('casualties.all') }}">
          <div class="mainMenuSubBttn">+ KIA, MIA, & Died In Service</div>
        </a>
        <a href="{{ route('recipients.all') }}">
          <div class="mainMenuSubBttn">+ Medal of Honor Recipients</div>
        </a>
        <a href="{{ route('deceased.all') }}">
          <div class="mainMenuSubBttn">+ Deceased Members</div>
        </a>
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
                <a href="{{ route('home') }}">
                  <div class="mainMenuSubBttn">
                    + My Profile
                  </div>
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  <div class="mainMenuSubBttn">
                    + Logout
                  </div>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
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
