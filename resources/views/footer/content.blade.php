<div class="footer">
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
    <!-- <a href="{{ route('history.timeline') }}"> -->
      <div class="pageLink">Deceased Members</div>
    <!-- </a> -->
  </div>
  <div>
    <div>PHOTO ALBUM</div>
    <a href="http://www.bobcat.ws/coppermine/index.php?cat=10001&page=1" target="_blank">
      <div class="pageLink">Album 1</div>
    </a>
    <a href="http://www.bobcat.ws/coppermine2/index.php?cat=10001" target="_blank">
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
