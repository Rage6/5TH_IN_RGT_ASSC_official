@extends('layouts.master')

@include('welcome.style')

@section('welcome_content')
  <div class="introBody introBodyMax">
    <div class="introBody introImage introIraq"></div>
    <div class="introBody introImage introAfghanistan"></div>
    <div class="introBody introImage introVietnam"></div>
    <div class="introBody introImage introKorea"></div>
    <div class="introBody introImage introWW2"></div>
    <div class="introBody introImage introFrontier"></div>
    <div class="introBody introImage intro1812"></div>
  </div>
  <div class="introBody">
    <div class="mainTitle">
      <div>5th Infantry</div>
      <div>Regiment</div>
      <div>Association</div>
    </div>
    <div id="bottomView" class="bottomView">
      <div>LEARN MORE BELOW</div>
    </div>
  </div>
  <div class="lowerBody">
    <div id="welcomeTitle" class="sectionTitle">Home of the Bobcats</div>
    <div class="sectionContent welcomeContent">
      This organization is dedicated to all of the past, present, and future members of the United States Army's <u>5th Infantry Regiment</u>, commonly known as the "Bobcats". The 5th Regiment (or its ancestral regiments) has participated in nearly every major American conflict since 1808. Its soldiers are the sinews of the Regiment, both in peace and in war. They are the fabric of its history and its tradition.
    </div>
    <div class="allCompartments">
      <div class="oneCompartment desktopTitle">
        <div class="sectionTitle pastTitle">
          Reflect On Our Past
        </div>
        <div class="sectionTitle presentTitle">
          Act In Our Present
        </div>
        <div class="sectionTitle futureTitle">
          Join In Our Future
        </div>
      </div>
      <div class="oneCompartment">
        <div class="mobileComponent desktopComponent">
          <div class="sectionTitle pastTitle mobileTitle">
            Reflect On Our Past
          </div>
          <div class="sectionContent pastContent">
            <div>
              The 5th Infantry Regiment has a unique and exciting military history that spans over 200 years. Here you can discover the Regiment's origin, read about its role throughout American history, and even find a book about the Regiment's entire story.
            </div></br>
            <div>
              In addition to this, you can learn about noteworthy Bobcats from the past. This includes information about the Regiment's {{ $moh_count }} recipients of the Medal of Honor, tributes to {{ $casualty_count }} of the Bobcats that died in service to our country, and memories of the Association's members that have passed away.
            </div>
          </div>
        </div>
        <div class="mobileComponent desktopComponent">
          <div class="sectionTitle presentTitle mobileTitle">
            Act In Our Present
          </div>
          <div class="sectionContent presentContent">
            The 5th Infantry Regiment Association is a very active organization. It carries out an official reunion every year, and members receive updates on the Association's quarterly newsletters. It also maintains frequent communications with the active Army units that currently bear the Regiment's crest. Finally, the Association often works to raise money and support for our active duty soldiers, fellow members, and related worthwhile causes.
          </div>
        </div>
        <div class="mobileComponent desktopComponent">
          <div class="sectionTitle futureTitle mobileTitle">
            Join In Our Future
          </div>
          <div class="sectionContent futureContent">
            <div>
              The 5th Infantry Regiment Association's door is always open to every honorable soldier that has served as part of the 5th Infantry Regiment, be they past or present. It also accepts "associate members", meaning any family member of a Bobcat veteran. Logged in members have exclusive abilities like:
              <ul>
                <li>Communicate with other members easily</li>
                <li>Find the profiles of other members</li>
                <li>Read all newsletter, past and present</li>
                <li>Purchase members-only merchandise</li>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="footer">
      <a href="{{ url('/') }}">
        <div>HOME</div>
      </a>
      <a>
        <div>ASSOCIATION</div>
      </a>
      <div>HISTORY</div>
      <div>HALL OF HONOR</div>
      <div>PHOTO ALBUM</div>
      <div>MEMBERS ONLY</div>
    </div> -->
    @include ('footer.content')
  </div>
  @php
    $unset_these = [
      $casualty_count,
      $moh_count
    ];

    check_memory_limit($unset_these);
  @endphp
@stop
