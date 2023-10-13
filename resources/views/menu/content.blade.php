<div class="menuBody">
  <div class="mainMenuTopBttn">
    <a class="mainMenuLink" href="{{ url('/') }}">
      <img src="/{{ config('app.url_ext') }}images/welcome/5INF_crest-min.png"/>
    </a>
    <div class="rightSideBttns">
      <!-- <a href="https://www.facebook.com/groups/468555973188533/" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50" style="fill:#d3d3d3" >
          <path d="M40,0H10C4.486,0,0,4.486,0,10v30c0,5.514,4.486,10,10,10h30c5.514,0,10-4.486,10-10V10C50,4.486,45.514,0,40,0z M39,17h-3 c-2.145,0-3,0.504-3,2v3h6l-1,6h-5v20h-7V28h-3v-6h3v-3c0-4.677,1.581-8,7-8c2.902,0,6,1,6,1V17z"></path>
        </svg>
      </a>
      <a href="https://discord.gg/sx4ZZc7cuf" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#d3d3d3" viewBox="0 0 16 16">
          <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
        </svg>
      </a> -->
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
    <!-- <div>
      <div class="mainMenuBttn">
        <a href="https://www.facebook.com/groups/468555973188533/" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50" style="fill:white" >
            <path d="M40,0H10C4.486,0,0,4.486,0,10v30c0,5.514,4.486,10,10,10h30c5.514,0,10-4.486,10-10V10C50,4.486,45.514,0,40,0z M39,17h-3 c-2.145,0-3,0.504-3,2v3h6l-1,6h-5v20h-7V28h-3v-6h3v-3c0-4.677,1.581-8,7-8c2.902,0,6,1,6,1V17z"></path>
          </svg>
        </a>
        <a href="https://discord.gg/sx4ZZc7cuf" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" viewBox="0 0 16 16">
            <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
          </svg>
        </a>
      </div>
    </div> -->
  </div>
</div>
