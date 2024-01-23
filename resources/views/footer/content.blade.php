<div class="footer">
  <div class="footerBttns">
    <div>
      <a href="{{ route('welcome') }}">
        <div>HOME</div>
      </a>
    </div>
    <div>
      <div>ASSOCIATION</div>
      <a href="{{ route('registration.index') }}">
        <div class="pageLink">Membership</div>
      </a>
      <a href="{{ route('reunion.index') }}">
        <div class="pageLink">Reunion</div>
      </a>
      <a href="{{ route('newsletter.index') }}">
        <div class="pageLink">Newsletters</div>
      </a>
      <a href="{{ url('items?purpose=merchandise.index&title=Bobcat%20Merchandise') }}">
        <div class="pageLink">Merchandise</div>
      </a>
      <a href="{{ route('scholarship.index') }}">
        <div class="pageLink">Scholarship</div>
      </a>
      <a href="{{ route('donation.index') }}">
        <div class="pageLink">Donations</div>
      </a>
    </div>
    <div>
      <div>HISTORY</div>
      <a>
        <div class="pageLink">Origin & Traditions</div>
      </a>
      <a href="{{ route('history.timeline') }}">
        <div class="pageLink">History Timeline</div>
      </a>
      <a href="https://twocenturiesofvalor.com" target="_blank">
        <div class="pageLink">Book</div>
      </a>
    </div>
    <div>
      <div>HALL OF HONOR</div>
      <a href="{{ route('casualties.all') }}">
        <div class="pageLink">KIA, MIA, & Died In Service</div>
      </a>
      <a href="{{ route('recipients.all') }}">
        <div class="pageLink">Medal of Honor Recipients</div>
      </a>
      <a href="{{ route('deceased.all') }}">
        <div class="pageLink">Deceased Members</div>
      </a>
    </div>
    <div>
      <div>PHOTO ALBUM</div>
      <a href="https://classic.bobcat.ws/coppermine/index.php?cat=10001&page=1" target="_blank">
        <div class="pageLink">Album 1</div>
      </a>
      <a href="https://classic.bobcat.ws/coppermine2/index.php?cat=10001" target="_blank">
        <div class="pageLink">Album 2</div>
      </a>
    </div>
    <div>
      <div>MEMBERS ONLY</div>
      @auth
          <a href="{{ route('home') }}">
            <div class="pageLink">
              My Profile
            </div>
          </a>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <div class="pageLink">
              Logout
            </div>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
      @else
          <a href="{{ route('login') }}">
            <div class="pageLink">
              Login
            </div>
          </a>
      @endauth
    </div>
  </div>
  <div class="socialBttnList">
    <!-- Facebook -->
    <a href="https://www.facebook.com/groups/468555973188533/" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50" style="fill:white" >
        <path d="M40,0H10C4.486,0,0,4.486,0,10v30c0,5.514,4.486,10,10,10h30c5.514,0,10-4.486,10-10V10C50,4.486,45.514,0,40,0z M39,17h-3 c-2.145,0-3,0.504-3,2v3h6l-1,6h-5v20h-7V28h-3v-6h3v-3c0-4.677,1.581-8,7-8c2.902,0,6,1,6,1V17z"></path>
      </svg>
    </a>
    <!-- Discord -->
    <a href="https://discord.gg/sx4ZZc7cuf" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" viewBox="0 0 16 16">
        <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
      </svg>
    </a>
    <a href="https://classic.bobcat.ws" target="_blank">
      <div class="classicBttn">
        Classic Version
      </div>
    </a>
  </div>
</div>
