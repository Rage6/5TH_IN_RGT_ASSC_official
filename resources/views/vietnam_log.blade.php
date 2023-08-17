@extends('layouts.master')

@section('history_style')
  <!-- History Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/history/360_history.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/history/375_history.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 375px) and (max-width: 414px)" type="text/css" href="/css/my_custom/history/414_history.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/history/768_history.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/history/1366_history.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/history/1920_history.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/history/past_1920_history.css">
  @include ('footer.style')
@stop

@section('vietnam_preface_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_12">
        <a href="{{ url('/history/vietnam-history/preface') }}">
          <div>
            <div>Preface</div>
          </div>
        </a>
        <a href="{{ url('/history/vietnam-history/1966') }}">
          <div>
            <div>1966</div>
          </div>
        </a>
        <a href="{{ url('/history/vietnam-history/1967') }}">
          <div>
            <div>1967</div>
          </div>
        </a>
        <a href="{{ url('/history/vietnam-history/1968') }}">
          <div>
            <div>1968</div>
          </div>
        </a>
        <a href="{{ url('/history/vietnam-history/1969') }}">
          <div>
            <div>1969</div>
          </div>
        </a>
        <a href="{{ url('/history/vietnam-history/1970') }}">
          <div>
            <div>1970</div>
          </div>
        </a>
        <a href="{{ url('/history/vietnam-history/1971') }}">
          <div>
            <div>1970</div>
          </div>
        </a>
        <div>
          <div>Maps</div>
        </div>
        <div>
          <div>Glossary</div>
        </div>
      </div>
    </div>
    <!-- <div>
      <p>
        The history of the Fifth Infantry Regiment spans two centuries of American fighting tradition.  During that time, it has received battle streamers for participation in fifty-one separate campaigns in nine major conflicts.  Each of these streamers represents the blood, sweat and tears of infantrymen from every era in the country’s history. Congress authorized the formation of the 5th Infantry on April 12, 1808.  Junior only to the 3rd Infantry (1784) and the 4th Infantry (1792), it is the third oldest active unit in the U.S. Army.
      </p>
      <div>
        <img style="float:left;width:50%;height:50%" src="/images/welcome/bobcat_logo_black-min.png">
      </div>
      <p>
        While garrisoned at the Monteith Barracks in Furth, Germany, the regimental baseball team adopted the name, “5th Infantry Bobcats.”  By the early 1960’s, the Bobcat moniker had been generalized to all members of the regiment.  In 2007, it was discovered that this unit nickname had never been formally recognized and recorded by the Department of the Army and could have been easily usurped by another unit.  The commander of 1st Battalion, 5th Infantry at Fort Wainwright, Alaska successfully registered the name.
      </p>
    </div> -->
    <div class="allSegments">
      <div class="timeSegment vietnamLogSegment" data-section="preface">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>Preface</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              A history is not an action-adventure story where the author stimulates the senses of the reader with the skillful use of descriptive adjectives. It is supposed to be a recording of factual material. We have attempted to locate the material that is available concerning the activities of the men of the 1st Battalion(Mechanized) 5th Infantry, 25th Infantry Division, during the Viet Nam War, verify it, extract from it accurate data, such as date, time, event, and location, and then put that material into a somewhat readable format. There are gaps in the research material found and thus gaps in the finished work. We had requested input from people who were members of the battalion during the Viet Nam era for several years before writing this work. Some responded, some did not. If some who were there disagree with this rendition of events, then we strongly urge them to sit down with pencil and paper and write it the way they think it should be recorded. A few members of the battalion have written works about their individual tours. We strongly urge and welcome others to do so also.
            </p>
            <p>
              This work is not written to meet the approval of a university professor. It is written with the veteran and those interested in the veteran as the primary audience. Any conclusions to be drawn from the material are left to the reader. The reader is reminded that this is an accounting of the activities of an Infantry Battalion, and not of any one individual in particular. The decision was made early on, that the only names mentioned would be the names of those who were killed. The only awards mentioned are the three Medal of Honor awards. To do otherwise would be, in our opinion, a disservice to all the men who served with the battalion, be they leader or follower, rifleman or cook. The actions of a battalion in combat are a team effort. To achieve success in its assigned mission, a battalion needs the applied skills of all its members.
            </p>
            <p>
              War is not nice. War is killing and destroying. No one hates war more than an experienced warrior. Unfortunately, war is a fact of human existence. It has always been a part of the human experience and in all probability always will be.
            </p>
            <p>
              We have made no attempt to justify or discredit the participation of the United States in this particular cold war conflict. Nor has there been any conscious effort to pass judgement on any military strategy or tactics used. That subject material is for other works about the era.
            </p>
            <p>
              Answering the "who, what, where, when, why, and how" of a battalion size organization, spanning a five and a third year period, is an awesome undertaking. In the end it proved to be a very humbling experience.
            </p>
            <p>
              Larry Hadzima</br>
              Neillsville, Wisconsin</br>
              January 05, 2000
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop

@section('vietnam_1966_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_12">
        <div data-button="jan" data-year="1966">
          <div data-button="jan" data-year="1966">January</div>
        </div>
        <div data-button="feb" data-year="1966">
          <div data-button="feb" data-year="1966">February</div>
        </div>
        <div data-button="mar" data-year="1966">
          <div data-button="mar" data-year="1966">March</div>
        </div>
        <div data-button="apr" data-year="1966">
          <div data-button="apr" data-year="1966">April</div>
        </div>
        <div data-button="may" data-year="1966">
          <div data-button="may" data-year="1966">May</div>
        </div>
        <div data-button="jun" data-year="1966">
          <div data-button="jun" data-year="1966">June</div>
        </div>
        <div data-button="jul" data-year="1966">
          <div data-button="jul" data-year="1966">July</div>
        </div>
        <div data-button="aug" data-year="1966">
          <div data-button="aug" data-year="1966">August</div>
        </div>
        <div data-button="sep" data-year="1966">
          <div data-button="sep" data-year="1966">September</div>
        </div>
        <div data-button="oct" data-year="1966">
          <div data-button="oct" data-year="1966">October</div>
        </div>
        <div data-button="nov" data-year="1966">
          <div data-button="nov" data-year="1966">November</div>
        </div>
        <div data-button="dec" data-year="1966">
          <div data-button="dec" data-year="1966">December</div>
        </div>
      </div>
    </div>
    <div class="allSegments">
      <div class="timeSegment vietnamLogSegment" data-section="1966">
        <div class="segmentContent">
          <div class="backBttn">
            <a href="{{ url('/history/timeline') }}">
              <div><< HISTORY</div>
            </a>
          </div>
          <div class="segmentTitle"><u>Vietnam, 1966</u></div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="jan">JANUARY</div>
            <p>
              During the latter part of 1965, the 25th Infantry Division was alerted to deploy to Viet Nam. On December 24, 1965, the advance party for the 25th Division arrived in the Republic of South Viet Nam. It was decided that the 25th Division's 3rd Brigade would be deployed to Pleiku in the central part of South Viet Nam. The 2nd Brigade and the remainder of the division were to be deployed to Cu Chi District of Hau Nghia Province, located between the City of Saigon and the Cambodian Border.
            </p>
            <p>
              The main body of the 2nd Brigade Task Force, 25th Infantry Division, arrived at Vung Tau, South Viet Nam on January 18, 1966. The 2nd Brigade Command Post was initially located in the area of Saigon University. Company B, 1st Bn 503 Bde, 173rd Abn Div was under the operational control of the 2nd Brigade Task Force and supplied the perimeter security for the Task Force. The 2nd Bn 27th Infantry supplied 9 rifle squads to Co B, 1/503rd Inf to reinforce the perimeter security of the staging area. The 1st Bn 27th Infantry and the 1st Bn (M) 5th Infantry were on standby to furnish 3 rifle squads each to Co B, 1/503 rd Infantry, should they be needed. Controlled issue of ammunition for the 2nd Brigade Task Force was to be maintained. Only those personnel occupying perimeter defensive positions and ambush sites were supposed to be issued ammunition.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map1.jpeg" target="_blank">
                  <li>Map 1: Overview of South Vietnam</li>
                </a>
              </ul>
            </div>
            <p>
              On January 22, 1966 an Operations Order was issued to alert units to prepare to move to the area of Cu Chi. Movement was to be in 4 segments. The first segment on January 25; the second on January 27; the third on January 29 and the fourth at a date to be determined.
            </p>
            <p>
              The 1st Infantry Division (Reinf) was given the assignment of receiving, staging and deploying the 2nd Brigade 25th Infantry Division to the base area near Cu Chi. The 1st Division was to coordinate security during movement to, initial occupation of, and development of the Cu Chi base camp area.
            </p>
            <p>
              The 3rd Brigade, 1st Infantry Division was assigned to clear and secure the initial base area near Cu Chi not later than 1200 hrs on January 25, 1966.  The 25th Infantry Division of the Army of the Republic of South Viet Nam (ARVN) was assigned to secure Highway 1 from the area of the Cau Bong Bridge to the road junction of Highway 8A near Cu Chi during the movement of the 2nd Brigade Task Force convoys.
            </p>
            <p>
              On January 25, 1966 at 0930 hours, Task Force Jack, consisting of one company from the 1st Bn(M) 5th Infantry , one battery from the 1st Bn 8th Artillery, Companies B and C of the 65th Engineer Battalion and the advance parties from 2nd Brigade units departed the staging area near Saigon University and proceeded to an assigned assembly area at Cu Chi. After the arrival of TF Jack at Cu Chi, elements of the 1st Infantry Division continued to receive small arms (SA), automatic weapons (AW) and mortar fire. The Viet Cong (VC) in the area were operating in small teams and attempted to maintain continual harassing activities against friendly forces.
            </p>
            <p>
              TF Jack units were moved into assembly areas in the vicinity of their assigned sectors. The 3rd Brigade of the 1st Infantry Division was responsible for the security and defense of the area and orders were issued that strict fire discipline was to be observed by all units. The firing of weapons by TF Jack units was not permitted during the period that the 3rd Brigade, 1st Infantry Division had responsibility for security of the area.
            </p>
            <p>
              On January 27, 1966, at 0830 hours, Task Force Queen, consisting of the 1st Bn 27th Infantry, the 2nd Bn 27th Infantry, the 1st Bn 8th Artillery(-), the 2nd Brigade Headquarters and Headquarters Company (-), and elements of the 2nd Support Bn, proceeded from the staging area near Saigon University to Cu Chi.
            </p>
            <p>
              On January 29, 1966, at 0830, hours Task Force King, consisting of the 1st Bn(M) 5th Infantry(-), The 2nd Brigade HHC Rear element, and elements of the 2nd Support Bn began movement to their assigned assembly area at Cu Chi from the staging area near Saigon University.
            </p>
            <p>
              Meanwhile at 0700 hours, the 1st Bn 27th Infantry began relieving the 1st Bn 28th Infantry, 1st Infantry Division and assumed their perimeter defensive positions. They also provided extraction zone security for the 1st Bn 28th Infantry.
            </p>
            <p>
              At 1200 hours, the 2nd Bn 27th Infantry began relieving Company B, 2nd Bn 2nd Infantry, 1st Infantry Division and assumed their perimeter defensive sector. A secure extraction zone was also provided for Company B, 2nd Bn 2nd Infantry.
            </p>
            <p>
              There were 5 tunnel systems that had been located in the area by the 3rd Brigade, 1st Infantry Division soldiers. Some of the information passed on from the 1st Division soldiers to soldiers of the 2nd Brigade 25th Infantry Division was to beware of hand grenade booby traps marked with a red dot somewhere on the handle as this indicated the grenade had been short fused by the VC and should be destroyed in place. Also rice bags in the area have been found to be booby trapped, and snipers have been firing at them from trees and spider holes.
            </p>
            <p>
              On January 30, 1966, an operation began with the purpose to expand and clear the base camp perimeter. At 0815 hours, two companies from the 1st Bn(M) 5th Infantry passed through the lines of the 2nd Bn 27th Infantry and attacked outward. The 2nd Bn 27th Infantry with Company B, 65th Engineers followed, sweeping and clearing the area and destroying tunnel complexes that were located. During the five day operation 20 tunnel complexes, some as long as a half mile were located and destroyed. Booby traps of all sorts were used by the Viet Cong to inflict casualties.
            </p>
            <p>
              On January 31, 1966, a booby trap was detonated killing two men from Company B, 1st Bn(M), 5th Infantry. The event emotionally jolted some the men of the company and impressed upon them that this was the real thing. Not training, not practice. Soldiers get horribly wounded and disfigured in wartime. Soldiers die in wartime! These were people you knew, if only by sight. One moment they are laughing, talking, breathing, living and the next moment they are very horribly dead.  How thin and delicate the thread between life and death is, was a lesson soon to be indelibly implanted in the consciousness of the soldiers of the battalion. Some wondered who would be next.
            </p>
            <p>
              During January 1966, two Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Armando Tesillo</li>
              <li>Dan R Shearin</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 1)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <p>
              They were the second and third Bobcats to die in Vietnam. The first was Jerry W. Osborn who was killed on April 1, 1965 while TDY from the 1st Bn(M) 5th Infantry as a helicopter door gunner.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map2.jpeg" target="_blank">
                  <li>Map 2: 1966 Operations I</li>
                </a>
                <a href="../../../images/history/albums/vietnam/maps/map3.jpeg" target="_blank">
                  <li>Map 3: 1966 Operations II</li>
                </a>
              </ul>
            </div>
            <div class="oneMonth" data-section="feb">
              FEBRUARY
            </div>
            <p>
              The 1st Bn(M) 5th Infantry soldiers continued to improve upon the defensive positions in their area of the base camp perimeter. This included clearing the thick vegetation growth out to the banks of the Ben Muong, a stream that ran across the front of the portion of the perimeter that the 1st Bn(M) 5th Infantry was assigned to occupy and defend. The men of the line companies lived in the bunkers and fighting positions, washing with water taken from local wells. They got as used to the mosquitoes, bugs and other various local critters that they had so far encountered as well as one can get used to such things.
            </p>
            <p>
              On February 3, 1966 the last element of the 2nd Brigade Task Force closed into the Cu Chi base camp area from the staging area near Saigon University. There were no major convoy incidents during the movement of the entire task force.
            </p>
            <p>
              Patrols, ambushes, 3 to 4 man Claymore teams, out posts (OPs), listening posts (LPs), sniper-killer teams, all became a part of normal life for the soldiers of the battalion. Mistakes were made and lessons were often harshly learned. Extremely rare, if nonexistent, was the combat soldier who did not, at one time or another, make a mistake, of one sort or another. Unfortunately, when a mistake was made in a combat situation, someone usually ended up getting wounded or killed. Not always, but often enough.
            </p>
            <p>
              On February 11, 1966 a man from Company B was shot and killed while examining the kill zone after a nighttime ambush was tripped. No one used a flashlight after that.
            </p>
            <p>
              On February 14, 1966 was a busy day for the medics and the Dust-offs. At 0530 hours, Company A prepared to depart the base camp area and to move across the Ben Muong on a dismounted Reconnaissance in Force (RIF) of the area beyond the stream. An element of Company B secured the stream-crossing site to be used on the operation. They were in place at 0530 hours. Company A crossed their line of departure at 0630 hours.  A platoon from Company C was positioned beyond the Ben Muong to act as a security force for Company A’s route of withdrawal, should it become necessary and also as a left flank security. At 0745 hours, the Company C security platoon received several rounds of small arms fire but sustained no injuries. At 0935 hours, the Company C platoon again received small arms fire. In the exchange four men were wounded. One was hit in the head and another in the hip. By 1019 hours all four had been Dusted-off.
            </p>
            <p>
              Company A was making slow but steady progress on their sweep, destroying houses and tunnels and finding rice caches. By 1100 hrs they had sustained 10 wounded. Then two Chicom Claymores were command detonated by the Viet Cong, killing 8 and wounding 3 in the vicinity of XT 643176.  Four of those killed were from Company A. Two were forward observers from Battery C, 1st Bn 8th Artillery, and two were non-combatant photographers. At 1430 hours, Company A began their return back to the base camp. By 1630 hours the Company C security element had recrossed the stream on the fringe of the base camp perimeter.
            </p>
            <p>
              Also on February 14th, a platoon from Company C was attached to the 2nd Bn 27th Infantry for a clearing operation. At 0837 hours, a man from Company C was injured when he fell on a punji stake. At 1030 hours, the Company C “angel” track (Medical Armored Personnel Carrier) hit an Anti-Tank (AT) mine at XT 632158. The vehicle was disabled and a number of VC attacked from the south in an attempt to capture the vehicle. They were driven off by the track commander and driver firing the .50 caliber machine gun and an M-79 grenade launcher. Several men were later wounded by sniper fire while extracting the downed vehicle.
            </p>
            <p>
              There had been some mention concerning what was considered a slow reaction time of the Dust-offs (medical evacuation helicopters) during the day, but in situations like that minutes can appear to be hours. The medics and doctors were not miracle workers. They did the best they could with what they had. In many instances they performed their duties above and beyond the normal requirements of their responsibilities.
            </p>
            <p>
              Among the Bobcat casualties for the day were 4 killed from Company A and 1 killed from Company C. Wounded were 5 from HQ Company, 15 from Company A, and 3 from Company C. The casualties of members of supporting units were reported and carried on the parent unit rosters.
            </p>
            <p>
              On February 18, 1966 the First Platoon of Company C began a raiding mission at 0100 hours. All 18 members of the raiding party were volunteers. They crossed their line of departure (LD) at about 0115 hours and the Ben Muong at 0130 hours. After crossing the stream they moved through dry rice paddies for about 900 meters, stopping some 25 meters short of the wood line, where they set up security.  Sp/4 Fernandez and the squad leader went into the wood line on a brief reconnaissance of the area. At about 0235 hours Sp/4 Fernandez and the squad leader returned and the party moved forward into the rubber plantation for about 300 meters. The raiding party set up a perimeter and SP/4 Fernandez and the squad leader went out on another reconnaissance of the area. When they returned to the raiding party they stated that there was nothing to raid. The party then moved back about 100 meters and set up in a line perimeter near a graveyard (XT 178654), where they were going to wait until moving back to the base camp at 0900 hours.
            </p>
            <p>
              At about 0700 hours, contact was made with some VC on the left front. The M-60 machine gunner on the left flank opened fire, killing 3 of the Viet Cong. Immediately the entire patrol came under intense enemy small arms, automatic weapons and grenade fire. At this time the M-60 gunner was shot and killed. The left flank was pushed back about 20 meters. Sp/4 Fernandez and the medic moved forward in an attempt to rescue the M-60 gunner. Three more men came out to help them. The gunner was picked up and the group started to move back when the man carrying the M-60 gunner was shot in the left leg. Everyone hit the ground and returned fire. Grenades and small arms and automatic weapons fire from the VC was intense. Sp/4 Fernandez observed a grenade land amongst his small group. He accidentally kicked the grenade when he attempted to move away and it rolled nearer to the wounded soldier. Sp/4 Fernandez yelled a warning and dove onto the grenade and smothered the blast with his body, saving the lives of those around him.
            </p>
            <p>
              Artillery and mortar fire was called in on the enemy positions around the patrol. Tactical air strikes with napalm were also summoned. The remainder of the 1st Platoon of Company C made their way out to the patrol.  At that time the raiding party moved back to the rice paddy area at the edge of the woods. Sp/4 Fernandez was laid on the ground and the wounded man he saved was laid next to him. The wounded man held Sp/4 Fernandez’s hand and talked with him. Sp/4 Fernandez told him he was hurting. The Dust-off arrived and the wounded along with the dead M-60 gunner were evacuated. The man with the leg wound was placed next to Sp/4 Fernandez at the hospital. The next time he looked, Sp/4 Fernandez was not there anymore. The wounded man asked the doctor about SP/4 Fernandez but the doctor would not tell him anything.
            </p>
            <p>
              The 1st Platoon of Company C returned to the base camp perimeter by 0935 hours.
            </p>
            <p>
              SP/4 Daniel Fernandez was later posthumously awarded the Congressional Medal of Honor for his actions.
            </p>
            <p>
              On February 22, 1966, Troop A, 3rd Squadron, 4th Cavalry arrived at the Cu Chi Base Camp Area.
            </p>
            <p>
              While the priority of the 2nd Brigade was the continued expansion and improvement of the Cu Chi Base Camp area, a three day mounted search and clear operation was conducted by the 1st Bn(M) 5th Infantry. Their mission was to search and clear a wooded area located some 1500 meters southeast of the Cu Chi base camp, running from coordinates XT 674135 to 698118. They were then to provide security for six ARVN bulldozers that were to level parts of the area. The 1st Bn, 49th Infantry Regiment (ARVN) was to attack and operate in the southeastern portion of the objective area (XT 698113).
            </p>
            <p>
              The 1/5th Mech crossed the line of departure (LD) at 0830 hours, attacking with Companies A and B abreast. Recon Platoon screened the left (west) flank. A platoon from Company C was to search and clear the wooded area centered at XT 677118. Company C(-) was held in reserve. All units experienced continual sniper fire during the initial advance. At one point the Recon Platoon received intense small arms(SA) and heavy machine gun (MG) fire which was returned with organic weapons, mortar and artillery fire. Extensive tunnel systems were located in the vicinity of XT 688120. The battalion formed a night defensive perimeter at XT 688119 and spent the night at that location. Nine ambushes were deployed, two of which made contact with the enemy.
            </p>
            <p>
              On February 23, 1966, six tanks from the 3/4 Cavalry joined the battalion. The day consisted of search and clearing operations with only light sniper fire being received. A lone sniper firing incident was the only enemy contact made on February 24th.  After conducting a final sweep, the battalion closed back to Cu Chi base camp at the end of the day.
            </p>
            <p>
              The area that had been searched during the operation was found to be heavily fortified with trenches, small bunkers, tunnels, mines and booby traps. An estimated platoon of VC were in the operation area. The battalion suffered casualties of 5 Bobcats killed and 18 wounded. The battalion also reported one of its first incidents of a friendly fire casualty when a man received a gunshot wound to his left buttocks.
            </p>
            <p>
              It was noted in the battalion operations summary that "Troops are unnecessarily exposing themselves in the APCs by sticking their heads and bodies too far out of the tracks."
            </p>
            <p>
              During February 1966, Fourteen Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Safford S. Pye</li>
              <li>Robert O. Cantrell</li>
              <li>William A Hoos Jr.</li>
              <li>Gene C. Milligan</li>
              <li>Joseph T. Benton</li>
              <li>Daniel Fernandez</li>
              <li>Richard H. Cassube</li>
              <li>James L. Fain</li>
              <li>Billy B. Day</li>
              <li>Gary W. Garis</li>
              <li>William B. Parnell</li>
              <li>Ira C. Boggs Jr.</li>
              <li>Sidney John Elyea</li>
              <li>Douglas</li>
              <li>Dwight Alley</li>
              <li>Donald Edward Daniels</li>
              <li>Walter Norris Ammons</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 2)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map4.jpeg" target="_blank">
                  <li>Map 4: Cu Chi Base Camp and the "Filhol."</li>
                </a>
              </ul>
            </div>
            <p>
              "He knew no one and no one knew him. He had no friends here, no confidants. He was not in on the gags, he did not share in the trifles and the traditions. He was new in the outfit. A replacement."
            </p>
            <p>
              "They talked afterwards of how the blood was spurting from the new guy in all directions, how he never uttered a cry of pain, and how, when he finally gave in, he did it quietly. They wondered then who he was and where he was from. What he was like and why he was here. But no one had the answers. They didn't know his first name. They were not sure where he was from. Most only knew his last name cause it was stenciled on his shirt." [From a news article by Tom Thiede]
            </p>
            <p>
              Years later the men would rack their brains trying to recall the names. They could see the faces, they remembered well the details of the death. Some could recall the time of day, even the date, and what the weather was like. But no one could remember the names!
            </p>
            <div class="oneMonth" data-section="mar">MARCH</div>
            <p>
              March 1966 was also a month of working on, expanding upon and improving the defensive perimeter of the Cu Chi base camp. An 8 foot long Monitor Lizard was finally shot and killed in the Ben Muong. The creature had been spotted on occasion and soldiers were extremely watchful when wading across the stream or when working near it.
            </p>
            <p>
              On March 04, 1966, the 1/5th(M) and the 2/27th Infantry conducted a one day search and destroy operation in the vicinity of Xom Moi , Giong Viec and Ba Xa, all located some 1500 meters NE of Cu Chi and along a dirt road marked on the map as Highway 237.  There were no friendly casualties suffered by the 1/5th(M) during the operation and all members were commended for the maximum destruction of enemy equipment and structures. Numerous booby traps and dud rounds of various types were also found and destroyed.
            </p>
            <p>
              The soldiers of the battalion were learning more and more about the booby traps used by the VC.  There were the hand grenades with trip wire; the unexploded cluster bomb units rigged with tip wire; the Chicom Claymore designed to explode in a 360 degree circle, the artillery and bomb duds, rigged to be tripped or command detonated. They were in the ground, on the ground, hung in trees or bamboo clusters, ankle high, knee high, waist high, head high or higher. You would find them on trails or footpaths. They could be encountered in tunnels or attached to spider hole covers. One was even found attached to a pineapple growing in a garden. And there were the sharpened bamboo sticks, referred to as punji stakes. All were designed to damage the human body. They were not everywhere, all the time, but they were around.
            </p>
            <p>
              There was a road that ran from the village of Cu Chi, through the base camp, across the Ben Muong, and then through the Filhol – Balancie Rubber Plantations to the village of Phu Hoa Dong where it linked up with Highway 15. The portion of the dirt road through the plantations had not seen motor vehicle traffic for some time and was overgrown with vegetation. The bridge at the Ben Muong had been destroyed and in March of 1966 the engineers of the 25th Infantry Division completed construction of a new one. This bridge would allow direct access to the area north of the base camp by tracked vehicles. The bridge was in the 1/5th(M)’s sector of the perimeter and the battalion was given the job of providing security for it. This was accomplished by establishing a platoon size combat out post located just to the north of the bridge on the southern edge of the rubber plantation. The area directly north of the outpost was made up of three rubber plantations. The Filhol, the Balancie, and the Liocara. But the area was soon referred to simply as “the Filhol” by the soldiers of the battalion. Ann Margret was the name initially given to the combat outpost by some of the officers and it stuck with the troops.
            </p>
            <p>
              From March 14 thru 19, 1966 the 1/5th(M) participated in a search and destroy operation, the first phase of which was located in the general area southwest of Bao Trai (XT 5204) near the Oriental River. The units of the battalion crossed the LD [line of departure] at 1000 hours on March 14, 1966 and encountered light enemy contact. Some APCs got stuck in the soft ground as they approached to within 1000 to 1500 meters of the Oriental River. The battalion then continued the operation dismounted. The battalion spent the night of March 14 in the vicinity of XT 483023. One man was wounded when he attempted to throw a captured booby-trapped hand grenade into a canal. He pulled the pin and threw the grenade but it had been short-fused and immediately exploded. Light enemy contact was made on the morning of March 15th as the companies moved to and searched various objective areas. At 1507 hours Company C received SA fire and at the same time a booby trap was detonated. The encounter resulted in 4 Bobcats wounded and 1 killed. Sporadic contact continued through the day and by 2045 hours all units closed in the vicinity of XT 5202.
            </p>
            <p>
              At 0710 hours, on March 17th the battalion, now mounted, moved north to an area of operations west of the junction of Highways10 and 6A, towards the Oriental River. Anti-tank mines and booby traps were encountered throughout the day.
            </p>
            <p>
              On March 18, 1966, the battalion continued to search the area. Tunnel networks and booby traps and mines were again encountered. Several Bobcats were wounded and 1 was killed.
            </p>
            <p>
              On March 19, 1966, there was light enemy contact. By 1930 hours all units had closed back to Cu Chi Base Camp.
            </p>
            <p>
              On March 28, 1966, the 25th Infantry Division command group arrived at Cu Chi Base Camp.
            </p>
            <p>
              From March 29, 1966 to April 05, 1966 the 1/5th(M) participated in a four battalion search and destroy operation which began in the Filhol and continued into the Ho Bo Woods (XT 6229).
            </p>
            <p>
              The men of the battalion were still adjusting. Changes were made to the APCs. Sandbags were put around the cargo hatch opening to offer a little better protection to soldiers fighting from the tracks. The M-60 machine gun mounting post was removed from the track and the gun was employed from the side of the cargo hatch using the sandbags as a gun rest.
            </p>
            <p>
              In the initial phase of the operation on March 29, the 1/5th (M) moved through the rubber plantation and established blocking positions to prevent movement in or out of the village of Phu Hoa Dong. The 7th ARVN Regiment then conducted search operations throughout the entire village area. There was light enemy contact throughout the day. Night ambushes were of course employed, and they met with some success.
            </p>
            <p>
              On the next day the units conducted a search of the local area. Numerous supply caches and tunnel systems were located.
            </p>
            <p>
              On March 31, 1966 the battalion enlarged the area of its search and destroy operations. Enemy contact was again sporadic and more tunnel systems and enemy supplies were located. Blocking positions around Phu Hoa Dong continued into the 1st of April and that afternoon the battalion made preparations to move into the Ho Bo Woods area.
            </p>
            <p>
              During March 1966 , two Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>George E. Snodgrass</li>
              <li>Daniel G. Stands Jr.</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 3)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <p>
              A major malfunction of the M-16 Rifle started to appear amongst soldiers in Viet Nam. The rifle would fire, but the extractor would be unable to remove the spent cartridge from the chamber of the rifle. A rod would then have to be inserted down the barrel and the spent cartridge would have to be “punched” out of the chamber. Initially, it was related that the soldiers were not clearning their weapons properly and this was the cause of the jamming.
            </p>
            <p>
              Then it was stated that the weapon needed a new buffer system to correct the problem. Next the barrel chamber was crome plated to reduce fouling friction. Then the barrel twists were changed and a bolt closure device was installed. And the weapon kept jamming. And the department of the Army fell back to saying that the soldier was not keeping the weapon properly cleaned.
            </p>
            <p>
              Bullshit. We cleaned the damn things. We over-cleaned them, if there is such a thing. When your life and the lives of those around you depend upon a weapon, you take care of that weapon. But nothing seemed to solve the problem. They kept jamming all through 1966 and into 1967.
            </p>
            <p>
              Finally, a Congressional Sub-Committee held hearings on the problem in 1967 and concluded that the rifle was initially provided with a cartridge containing IMR Propellant and worked fine. Then the Army Munitions Command contracted with Olin Mathieson to produce the powder for the cartridge and they in turn supplied Ball Propellant, which was cheaper to manufacture. Ball Propellant burned faster and increased the cyclic rate of fire in the M-16 Rifle. According to the weapons inventor, Eugene Stoner, this was a worst case senerio for the weapon and was THE cause of the “failure to extract” jamming malfunction.
            </p>
            <p>
              Furture ammunition was made with IMR Powder and the jamming problem disappeared as the Ball Propellant ammunition was replaced.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <li>
                  <a href="{{ url('/history/topic/the-rifle-and-the-myth') }}" target="_blank">
                    The Rifle and the Myth: Congressional Sub-Committee held hearings on the problem in 1967
                  </a>
                </li>
                <a href="../../../images/history/albums/vietnam/maps/map5.jpeg" target="_blank">
                  <li>
                    Map 5: Northern Ho Bo Woods and Southern Ho Bo
                  </li>
                </a>
                <a href="../../../images/history/albums/vietnam/maps/map6.jpeg" target="_blank">
                  <li>
                    Map 6: Northern Filhol and Southern Ho Bo.
                  </li>
                </a>
              </ul>
            </div>
            <div class="oneMonth" data-section="apr">APRIL</div>
            <p>
              At 0730 hours on April 2, 1966, the battalion units moved along assigned routes to predetermined objective areas. Troop A, ¾ Cavalry was attached to the 1/5th(M) and Company C 1/5th(M) was OPCON to the 1/69th Armor. Company C had 2 APCs bog down and during the extrication process one Bobcat was shot and killed. Upon moving to a secondary objective, Company A had an APC destroyed by a command detonated 175mm Arty round at 1730 hours. A second was damaged by another mine. The 1st APC was flipped over onto its top and resulted in 4 Bobcats killed and 4 wounded. Two Vietnamese National Policemen were also wounded. Three Bobcats were wounded on the 2nd APC.  One of the men described it as one hectic evening and night. “The command detonated mine blew the track up and over onto its back, killing four and seriously wounding others. When I got there the track commander, who was seriously wounded, was determined to ‘call in my own damn dust off.’ Due to enemy contact we had to strip the track, evac the wounded and pull back for the night. We were in contact all night long ¼ then recovered the A5 in the am ... finding our cook, KIA, beneath the track.”
            </p>
            <p>
              Numerous tunnel systems and assorted fortifications were discovered in the area along with some caches of various supplies and equipment. “There were so many houses and tunnels that they couldn’t be effectively covered in a week’s time;” and “The area is honeycombed” were some of the reports being transmitted over the radio.
            </p>
            <p>
              On April 3, 1966, the battalion task force continued a detailed search of the area. Tunnel systems, supply caches and numerous booby traps were encountered. Enemy contact was light. Co B had an APC detonate a mine, the explosion of which ignited the gas tank, resulting in one Bobcat being killed and 4 wounded in the vicinity of XT 655270.  Some of the men started referring to the area as the “Christmas Tree” because it was ‘decorated’ with so many booby traps and mines.
            </p>
            <p>
              On April 4, 1966, Company C returned to battalion control and Troop A, ¾ Cav went OPCON to the 1/69th Armor.  Company C also reported that on April 3rd while OPCON to the 1/69th, they had 3 Bobcats killed and 13 wounded.  The battalion continued its search and destroy mission in the area. A very large cache of polished rice was located along with several smaller ones in well concealed and booby-trapped areas. There were several skirmishes during the day resulting in one Bobcat killed. Among the wounded were 7 men who were badly burned when there was an internal explosion and fire on one of the 4.2 inch mortar tracks.
            </p>
            <p>
              At 0900 hours on April 5, 1966, Company B and the Recon Platoon were committed to assist the 2/27th Infantry, whose A Company had been attacked in their night defensive perimeter in the Ho Bo Woods by the 1st Battalion, 165A VC Regiment. Later in the day they were assigned to assist the return movement of the Brigade Command Group from Trung Lap. All units closed into Cu Chi Base Camp by 1630 hours with no enemy contact, ending the operation.
            </p>
            <p>
              The battalion reported VC killed by body count during the operation and a large amount of enemy supplies and equipment were located. Estimates were also reported on the number of enemy soldiers probably or possibly killed. It was becoming apparent to the men of the battalion that this was to be a war of numbers. How many, how much. It was not sufficient to report that some small arms ammunition was located. It was required that the number of rounds, the caliber, and make of the rounds be reported. It soon got to a point where units were reporting the “capture” of a single, rubber sandal, or ¼ pound of documents, or a pair of gloves, amongst the items found on the various operations. Enemy body count was also being emphasized, big time! Initially some incentives were experimented with, as if the war were some sort of contest which was winnable by whichever side scored the highest number. In the beginning of April 1966, one company had a policy in effect where if a soldier killed a Viet Cong and his body and weapon were recovered, he was entitled to a three day pass to Saigon. Another had a liberal policy as to letting the men keep the weapons of any killed VC.
            </p>
            <p>
              Their were also the friendly losses, as the casualties of war were by no means a one sided event.
            </p>
            <p>
              On April 6, 1966, one of the men burned in the 4.2 inch mortar track fire on April 4th died of his injuries.
            </p>
            <p>
              On April 7, 1966, the 1/5th(M)(-), supported by Troop B, ¾ Cavalry and Company C of the 1/69th Armor and Company A, 1/27th Infantry, participated in phase one of a search and destroy mission of the Phuoc Vinh Ninh area, located southeast of Cu Chi Base Camp at XT 6814. There was sporadic enemy contact during the sweep of the area. Numerous booby traps and mines were encountered. Eight men were wounded by mines and booby traps.
            </p>
            <p>
              On April 8, 1966, a platoon from Company B conducted a reconnaissance into the Filhol. "What I seem to recall," the platoon leader later recollected, "was that it was less than a platoon size recon. After finishing the recon (we had seen a lot of indication of traffic on one trail) I called in and asked for permission to set an ambush for a while and see what happened. I believe I remember springing the ambush quite a few times, maybe four or five. Each encounter was with a small group, 2-4 individuals. Most would not surrender when challenged and although armed, would run and be shot. Each time we would take some branches and clean up the blood on the dusty trail and reset the ambush."
            </p>
            <p>
              "I do recall there being captives and I do remember one was a young woman who was detained behind the platoon position where we had the tracks. I definitely remember going back there when I heard a commotion and found several guys preparing to rape her. I put a stop to that."
            </p>
            <p>
              Soldiers are a reflection of the society that produces them. Thus in the military, as in society in general, there are thieves, rapists, murderers, sadists, alcoholics and drug abusers. And there are men of honor and principle and deep religious beliefs. As in society, the latter far outnumber the former. And there are rules and laws that must be followed, even during war. The officers and NCOs usually did a good job in making sure those rules and laws were followed. And there was a system in place to punish those who violated or disobeyed.
            </p>
            <p>
              On April 9, 1966, Company B dropped off a dismounted platoon sized daylight ambush in the Filhol. The remainder of the company, then conducted a reconnaissance of the area to the north west and stumbled onto an entrenched company size VC force. During the 45 minute fire fight which followed, one of the APC’s was hit twice with 57mm recoilless rifle rounds. Company A and C were dispatched into the area to assist in a further search of the enemy who had fled the trench line after having enough.
            </p>
            <p>
              Later in the afternoon an APC from Company B, driving through the thick vegetation fell into a deep gully and turned over onto its top and caught fire. Somehow there were no casualties in the incident and no fatalities during the day’s activities. All units closed back into Cu Chi Base Camp by 1800 hours.
            </p>
            <p>
              On April 13, 1966, the 25th Division PX commenced operations at the Cu Chi base camp. The major facility was established with a warehouse and sub-exchanges were to be established in subordinate units.
            </p>
            <p>
              On April 13th, the 1st Bn(M) 5th Inf began a two day search and destroy operation in the Filhol. C Company (-) of the 1/69th Armor was attached to the battalion along with 1 platoon of the 65th Engineers. The battalion task force was divided into three teams and a command group. At 0630 hours, all elements departed Cu Chi Base Camp through OP Ann Margret and the teams secured their respective objectives without opposition. The battalion command group established a task force forward base in the vicinity of XT 647207. As the teams conducted searches of their areas throughout the day, 7 APCs, 3 tanks and 1 VTR struck mines. 1 tank was struck by an RPG-2 round that penetrated through the tank and caused 1 minor injury. This was the first time that a tank of the 25th Division had been hit with an RPG round. Company B encountered a small group of VC in spider holes and tunnels who, by the use of snipers and rifle grenades, killed 5 and wounded 7 members of the company. The other teams suffered light casualties in scattered encounters. Companies A and C and the Recon Platoon closed into the battalion night base camp. B Company established its own perimeter as it was providing security for three tanks which had become mired and were not extracted until 2300 hours.
            </p>
            <p>
              On April 14, 1966 the companies continued the search of the area between the Filhol and the Ho Bo Woods. Light contact was made and mines and booby traps were again encountered.  At 0950 hours, Company B received small arms fire resulting in 1 man killed. At 1535 hours, Company A discovered a rice cache. In the process of checking it, a booby trap was detonated and 1 Bobcat was killed and two were wounded. By 1900 hours all elements had closed Cu Chi Base Camp.
            </p>
            <p>
              During the operation VC had been killed and 68 short tunnels, 41 bunkers and various amounts of weapons, munitions, equipment and supplies were seized or destroyed. 8 APCs, 2 tanks and 1 TVR had been damaged by AT mines and 2 tanks were damaged by AT weapons. 7 Bobcats died and 27 were wounded.
            </p>
            <p>
              From April 16th thru the 21st the 1/5th(M), along with the 1/27th Infantry and the 2/27th Infantry, participated in a 2nd Brigade search and destroy operation northeast of Trang Bang. The operation consisted of daytime sweeps and night-time saturation ambushes.
            </p>
            <p>
              On April 23, 1966, the 3rd Platoon of Company C departed Cu Chi base camp at 0720 hours for a mounted patrol into the Filhol. At 1045 hours they reported that 1 man had been killed by sniper fire near XT 696196. At 1600 hours the platoon returned to Cu Chi Base Camp with the one Bobcat KIA.
            </p>
            <p>
              During the day a sergeant from Company B was conducting a class on the use of the Claymore anti-personnel mine in the battalion motor pool. The group was inside an APC with the rear ramp in the down position. One of the B Company mechanics said he had just walked past the track when there was an explosion. Somehow the claymore had detonated. Two men were killed outright and several were wounded. The mechanic related that there were putting people on jeeps and ¾ ton trucks and rushing them to the hospital area. “It was a bloody mess,” he related.
            </p>
            <p>
              On April 27, 1966 one of the Bobcats wounded in the Claymore class incident died of his wounds.
            </p>
            <p>
              On April 30, 1966, the main body of the 25th Infantry Division’s 1st  Brigade arrived at Cu Chi Base Camp.
            </p>
            <p>
              During April 1966, 24 Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Jesse J. Coffey</li>
              <li>Curtis E. Dorris</li>
              <li>George S. Franklin</li>
              <li>Keith L. Shipp</li>
              <li>Lester J. Thornell</li>
              <li>Jimmy B. Taylor</li>
              <li>Larry J. Nichols</li>
              <li>Hamp J. Sykes Jr.</li>
              <li>Johnny B. Boston</li>
              <li>Roger D. Jarrell</li>
              <li>Arthur C. Morris Jr.</li>
              <li>Steven M. Smith</li>
              <li>Donald R. Brown</li>
              <li>Green Conley</li>
              <li>Frank A. D’Amico</li>
              <li>Clinton B. Fackrell</li>
              <li>Phillips LaMarr</li>
              <li>James R. Taylor</li>
              <li>Lewis M. Thomas</li>
              <li>Howard E. Rothring Jr.</li>
              <li>Francisco Correa-Morales</li>
              <li>John P. Isaacs</li>
              <li>Walter J. Type</li>
              <li>Donald Ray Johnson</li>
              <li>John Parnella</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 4)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map7.jpeg" target="_blank">
                  <li>Map 7: Trang Bang and Go Dau Ha.</li>
                </a>
                <a href="../../../images/history/albums/vietnam/maps/map8.jpeg" target="_blank">
                  <li>Map 8: Trang Bang north to Suoi Cao.</li>
                </a>
              </ul>
            </div>
            <p>
              Casualties for the 25th Infantry Division(-) during the period of January 1, 1966 thru April 30, 1966 were: 91 KIA(killed in action), 914 WIA(wounded in action), 0 MIA(missing in action), 17 DOW(died of wounds), and 12 NBD(non-battle deaths).
            </p>
            <p>
              There was a small outbreak of Bacillary Dysentery within the 1/5th Inf(M), which was classified as from a filth borne source. Whether from water, nonpotable ice or food handler was never confirmed.
            </p>
            <p>
              It was also noted that the burn out of human wastes collected in the half drums using diesel fuel had not proven totally satisfactory as some residue always remained and the disposal of the residue had created some problems. There was nothing like the smell of burning shit in the morning to arouse the senses.
            </p>
            <p>
              Although there were some base camp growing pains, the engineer battalion managed to establish the camp to a class II configuration in less than 45 days.
            </p>
            <div class="oneMonth" data-section="may">MAY</div>
            <p>
              From May 1, 1966 thru May 11th, the 1/5th(M) and Company C, 1/69th Armor participated in providing security for engineer operations on Hwy 1 and Hwy 22 in the vicinity of Go Dau Ha.
            </p>
            <p>
              On May 5, 1966, another of the Bobcats wounded in the Claymore class incident in April died of wounds received.
            </p>
            <p>
              On May 7, 1966, Company B, with one platoon of tanks attached, conducted a one day reconnaissance operation in the southern Boi Loi Woods code named “Sitting Bull.”  At 1205 hours, the force engaged some VC in a trench line. At the end of the engagement 1 Bobcat was killed and 22 were wounded. 12 of the WIAs were evacuated and the others were treated and returned to duty.
            </p>
            <p>
              Also on May 7, 1966 another Bobcat who was wounded in the Claymore class incident died from the wounds he received.
            </p>
            <p>
              On May 10, 1966 a Bobcat from Company A, which was attached to the 1st Brigade on an operation in the Filhol, was killed when a booby trapped tunnel door was detonated. Members of the company spent most of the night digging his body out of the collapsed tunnel system. On May 12, 1966 , all 1/5th(M) units were back at Cu Chi Base Camp.
            </p>
            <p>
              From May 15, 1966 thru May 27, the 1/5th(M) participated in a multi-battalion search and destroy operation in the Filhol, the Ho Bo Woods(XT 6228) and the Boi Loi Woods(XT 5630).
            </p>
            <p>
              On May 18, 1966, Company B was involved in a firefight. One of the soldiers was firing from an APC cargo hatch. Another soldier got up to relieve him and as the first went to sit down his rifle accidentally discharged, the round struck and killed the second soldier, who was standing in the cargo hatch. The man who fired the round, when he spoke of the incident, was very distressed and despondent about having killed one of his own men. He would have given anything to change what happened, but he knew that could never be.
            </p>
            <p>
              On May 26, 1966, at 0810 hours, as Company C was in the process of extracting its night ambushes, one man was killed when a Claymore mine he was in the process of disarming, exploded.
            </p>
            <p>
              Also on May 26, a sixth man who was wounded in the Claymore class incident in April, died of his wounds.
            </p>
            <p>
              During the operation 2 Bobcats died and 43 were wounded, of whom 25 returned to duty. Of the 11 APCs that were damaged by AT mines, 5 were repaired in the field, one was unrecoverable and blown in place, and 5 were evacuated to base camp for major repairs.
            </p>
            <p>
              On May 30, 1966 a Bobcat from Company B died from the wounds he received on May 7, 1966
            </p>
            <p>
              During May 1966, Eight Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>James E. Johnson</li>
              <li>Hermando S. Moya</li>
              <li>Ismael Lebron-Lopez</li>
              <li>Robert Smith Jr.</li>
              <li>Bobby J. Barefield</li>
              <li>Frederick C. Bullington</li>
              <li>Jesus Lopez Ramos Jr.</li>
              <li>Pekka Trunkhahn</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 5)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <div class="oneMonth" data-section="jun">JUNE</div>
            <p>
              “During June, all of Southeast Asia is under the influence of the southwest monsoon. The weather will usually follow a daily pattern, highlighted by thundershowers in the afternoon and early evening. Rain can be expected about 22 days of the month, with a total average of 12.5 inches. Heavy showers will not normally last more than 45 minutes.
            </p>
            <p>
              Cloudiness will prevail most of the day, with only about one quarter of the day in sunshine. But temperatures will not be affected much: the mean daily maximum should be 92 degrees with an average minimum of 75 degrees. Although the temperatures are lower for June than May, the high relative humidity will make it seem just as warm. The average relative humidity for the whole month will be between 80 and 90 per cent.”
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map9.jpeg" target="_blank">
                  <li>Map 9: Bao Trai area</li>
                </a>
              </ul>
            </div>
            <p>
              On June 1, 1966, a Bobcat, who was wounded on April 13th, died of his wounds. He was a medic who responded to the call for help from others and took a sniper's bullet in the head.
            </p>
            <p>
              From June 3 thru June 8, the 1/5th(M) participated in a 4 battalion search and destroy operation in the Bao Trai area. As soon as the 1/5th(M) entered their AO the Recon Platoon observed some VC attempting to flee. The Recon Platoon opened fire and killed two. They then ran over two more with their APCs as they gave chase. A search was made of the area (XT 466155) and the VC were found to be hiding under the water. Hand grenades were used to help flush them out. 12 VC were killed and 19 were captured by the members of the Recon Platoon in this initial encounter of the operation.
            </p>
            <p>
              On June 7, 1966, Company C discovered a very large ammunition and weapons cache vic XT 518110. The cache was located on a camouflaged lean-to built just above the water level.
            </p>
            <p>
              By 1645 hours on June 8, 1966, the battalion had closed Cu Chi Base Camp. During the operation there were no Bobcats killed. 24 were wounded, of whom 14 were treated and returned to duty. 6 APCs were damaged by AT mines, 3 of which had to be sent back to base camp for repair.
            </p>
            <p>
              On June 18, 1966, the 1/5th(M) conducted a one day search and destroy operation in the Filhol. At 1030 hours one Recon track hit an AT mine and had to be towed. Company A started receiving sniper fire and then mortar fire at 1145 hours on the southern edge of the Plantation. 2 APCs were hit by RPG-2 rounds. Company A located a bunker and tunnel system vic XT 682166 at 1215 hours. They spent the rest of the afternoon neutralizing the area and searching and destroying the bunker and tunnel system. Company C conducted a search and destroy operation in the center and west end of the Filhol. They deposited a stay behind ambush at XT 675200. Company A left an ambush at XT 679167.  Numerous mines and booby traps were located and destroyed during the day. All elements except the two ambushes closed base camp by 1835 hours. During the operation Company A suffered 3 KIAs and 14 WIAs, 2 of whom were treated and returned to duty.
            </p>
            <p>
              On June 19, 1966, at 0510 hours, the Company C stay-behind ambush reported that one of their men had moved out of position without his helmet and when challenged did not halt, and was shot and killed.
            </p>
            <p>
              Between June 19 and June 24, 1966 different elements of the 1/5th(M) were attached to and OPCON the 2/27th Infantry.
            </p>
            <p>
              On June 21 and June 22, elements of the 1/5th(M) conducted convoy escort to Bao Trai.
            </p>
            <p>
              On June 24, 1966 one Bobcat from Company B died of wounds he had sustained earlier.
            </p>
            <p>
              From June 25 to July 1, 1966 the 1/5th(M) conducted operations in the Boi Loi Woods and the Ho Bo Woods. Their primary objective was to locate and destroy VC units and base camps. This was the fourth excursion of the battalion into the area. Some troops wondered why they were going back into "that damn" area. "I didn’t loose anything the last time we went in there," was one comment expressed. Others wondered why the battalion just didn’t set up a base in the area and stay there, instead of going in, "kicking ass and getting our ass kicked" and then leaving and letting Charlie rebuild his defenses and booby traps and then going back in and starting the whole process all over again. Just didn’t seem to make much sense. But then nothing much did. The majority of the troops did not even know where the Ho Bo and Boi Loi were on a map. They had no idea of the overall "Big Picture" of what was happening in Viet Nam other than the Communists were trying to take over the place. But then at times one wondered if anyone had any idea of the overall "Big Picture" or if there even was a "Big Picture," other than the statistics of who killed how many and who captured what. Yet the men of the battalion carried on, doing what was asked of them.The battalion began its operations on June 25 at 0630 hours, when the battalion left Cu Chi Base Camp and conducted operations along the southern edge of the Boi Loi Woods complex. It was hoped that these maneuvers would deceive the VC as to the main operation which commenced on the 26th and consisted of S&D operations in the Ho Bo Woods.
            </p>
            <p>
              On June 26, 1966, the battalion moved to the Ho Bo Woods area. Company A made contact at a bunker tunnel complex. In the ensuing firefight one Bobcat was killed and 13 were wounded, of whom 7 were dusted off. 2 Company A APCs had hit AT mines. At 1432 hours Company C encountered a large command bunker with an extensive tunnel complex. During the fight which followed, 2 Bobcats were killed and 6 were wounded. 2 of the WIA were returned to duty.
            </p>
            <p>
              On June 28, 1966, at 1040 hours Company B had a man killed in a tunnel. The man who was behind him said, "We got to a corner in the tunnel. It turned 90 degrees to the right. He moved part way around the corner and said ‘Oh No,’ and then some shots were fired and he was dead." The men who went into the tunnel to retrieve his body were fired at by the VC and had to use his body as a shield as they dragged it out.
            </p>
            <p>
              On June 29, 1966, a Bobcat from Company A died from a gunshot wound to the head he had received earlier.
            </p>
            <p>
              On June 30, 1966, a Bobcat from Company B died from fragmentation wounds he had received earlier.
            </p>
            <p>
              During June 1966, 12 Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Jimmy L. Scott</li>
              <li>Elton O. Harris</li>
              <li>Garry L. Burgess</li>
              <li>Joseph S. Vesely Jr.</li>
              <li>Ivor E. Bunch</li>
              <li>William Jones Jr.</li>
              <li>Hachiro Imae</li>
              <li>James L. Northrop</li>
              <li>Gerald R. Rolf</li>
              <li>Rickey D. Castleman</li>
              <li>Clarence Gene Forman</li>
              <li>Arnoldo J. Cardenas.</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 6)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <div class="oneMonth" data-section="jul">JULY</div>
            <p>
              On July 1, the battalion terminated the operation at 0700 hours. Six Bobcats died during the operation and 81 were wounded with 39 being treated and returned to duty.
            </p>
            <p>
              14 APCs were damaged by mines. 6 were repaired in the field and the other 8 had to be evacuated. 6 of the evacuated APCs were declared combat losses. A mechanical problem with the idler arm separating from the carrier hull still existed. This required the vehicle to be short tracked if it was to move under its own power. There were 7 such mechanical failures during the operation, all of which required the evacuation of the tracks.
            </p>
            <p>
              Numerous bunkers and tunnel systems were destroyed by a "special tunnel team" from the 65th Engineer Battalion. A special technique of using acetylene gas and detonator proved inadequate. The method worked well in tunnels of less that 6 feet in depth, but the majority of the tunnel complexes encountered were of much greater depth. Cratering charges placed throughout the tunnels at key locations and linked with detonating cord proved effective. It was noted however that this method would require a large amount of explosives for the extensive tunnel systems in the area. While 78 tunnels were found and destroyed, it was believed that this was only a small portion of the tunnels that exist in the area.
            </p>
            <p>
              During the month of June, agent reports, Chieu Hoi reports, and SPAR activity indicated that the VC had returned to the Ho Bo Woods area. Operations conducted by the 1/5th(M) during the period June 25 to July 1 confirmed these reports. Numerous reports continued to be received during the month concerning large VC units moving into the Boi Loi Woods area from the vicinity of the Michelin Plantation.
            </p>
            <div class="oneMonth" data-section="jul">JULY</div>
            <p>
              On July 4, 1966, Company C, 1/5th(M) was attached to the 2/27th Infantry. They provided road security along Highway 7A south of Heip Hoa (XT 4709) and also provided security for a "County Fair."
            </p>
            <p>
              The beginning of July was a period of maintenance of vehicles and a welcome "break" in the action.
            </p>
            <p>
              During the period of June 26 to July 5, 1966, the 25th Division Chemical Section provided technical supervision to division troop units for the dispersal of 2,4-D Defoliant on the perimeter of Cu Chi Base camp. The mixture used was two parts Diesel and one part 2,4-D.
            </p>
            <p>
              Method of dispersion was the use of the M106 Portable Riot Control Agent Dispenser (Mighty Mite) loaded on a vehicle. In areas that could not be traversed by vehicles, the M106 was back packed. A total of 22 barrels were dispersed. Later evaluation indicated that not enough defoliant was dispersed by this method and recurring applications would be required to defoliate new growth.
            </p>
            <p>
              During the day on July 15, 1966, the 1/5th(M) conducted maintenance and civil affairs activities southeast of Cu Chi in Tan Phu Trung (XT 6809).
            </p>
            <p>
              On July 16, 1966, the 1/5th(M) conducted a platoon size sweep of the area around XT 685069, searching for a suspected VC base camp with no contact being made. The remainder of the battalion conducted escort and maintenance throughout the day.
            </p>
            <p>
              On July 17, 1966, the 1/5th(M) again conducted maintenance and civil affairs activities during the day at Tan Phu Trung.
            </p>
            <p>
              On July 18, 1966, the battalion continued maintenance and civil affairs. Two daylight ambushes were deployed, one of which was tripped.
            </p>
            <p>
              On July 19, 1966, Company A and the Recon Platoon conducted a S&D operation in the area of Ap Phu Loi (XT 707110).
            </p>
            <p>
              Elsewhere on the 19th, the 1/27th Infantry was conducting Eagle Flights. The 1st Platoon Company A, 1/27th Infantry went into a landing zone at XT 577265. At 1235 hours the platoon received sniper fire. At 1239 hours the 3rd Platoon of Company A 1/27th Infantry was inserted into XT 562265. Small arms fire was received as the helicopters approached the LZ and upon dismounting the platoon moved across the LZ under intense small arms fire. Both units became heavily engaged and the 2nd Platoon was committed at 1430 hours into XT 577265. A platoon from Company B, 1/27th Infantry was inserted into XT 562265 at 1550 hours.
            </p>
            <p>
              At 1504 hours Company B, 1/5th(M) was alerted to stand by as a reaction force for the units of the 1/27th Infantry. The men mounted their vehicles in the Cu Chi base camp motor pool and waited. They could see the helicopter gunships firing and the sound of artillery firing was constant. Some of the men wondered why they were not moving. People were in trouble. And they waited. And they waited.
            </p>
            <p>
              At 1630 hours the extraction of the 1st platoon of Company A 1/27th Infantry was completed under intense fire.
            </p>
            <p>
              During the action 25 "Wolfhounds" were killed and 24 wounded.
            </p>
            <p>
              Company B, 1/5th(M) was given the word to stand down but was informed that at least 15 Wolfhounds were left on the field of battle and were presumed dead. The company was to move out in the morning. That information did not sit too well with some of the men. You don’t leave people on the battlefield, dead or alive. Besides, how do you know for sure they were dead? Bobcats were not afraid of the dark. "They should send us now" was a general feeling among the men.
            </p>
            <p>
              It was a restless night.There was an attack on the Phuoc Hiep outpost located on Highway 1, nine kilometers northwest of Cu Chi. The VC also fired 40 – 50 rounds of 82mm mortar into the Trung Lap ARVN Ranger Training Center. This clearly demonstrated the capability of VC main force units to successfully conduct simultaneous attacks on separate targets.
            </p>
            <p>
              On July 20, 1966, at 0630 hours, Companies A and B and the Recon Platoon of the 1/5th(M) left base camp enroute to search the area of the previous day’s contact by the 1/27th Infantry. At 0910 hours the bodies of 15 Wolfhounds were located near XT 576268. They were laying in a neat row, next to each other, all on their backs. They were clothed, but stripped of all weapons and equipment. It was a sad sight indeed. But at the same time, the professional courtesy of the enemy also left an impression.
            </p>
            <p>
              A helicopter had been shot down and burned during the action of the day before. When it was turned over the body of a door gunner and his M-60 machinegun were located. The units of the battalion closed back into base camp at 1640 hours.
            </p>
            <p>
              On July 21, 1966, Companies A and B and the Recon Platoon departed base camp for a search and destroy operation in the western end of the Filhol. Several preselected objective areas were searched. At 1600 hours Company B became engaged in a fire fight in the vicinity of XT 642217. During the course of the fight one of the APCs moved to attack from the right flank and a command-detonated mine was exploded. There were several cases of TNT and C4 explosives inside the carrier. When the mine detonated, it set off the explosives. The only thing left of the APC was the floorboard and the driver’s steering sticks. There were seven Bobcats in the APC at the time of the explosion. Most of their body parts were located and recovered from around the area. Some were not found. By 1700 hours Company A had closed with Company B and the units moved out of the area at 1800 hours heading for Cu Chi Base Camp. It was noted in a medical evaluation report that "There was difficulty identifying the remains of seven men, who were mutilated when their track exploded. A careful search for remains should be made if tactically possible whenever a body has been mutilated. This could assist in the positive identification of the remains."
            </p>
            <p>
              On July 22, 1966, the battalion performed maintenance and prepared for future operations.
            </p>
            <p>
              Also on the 22nd, condolence boxes containing canned food, clothing, rice and health items were donated to the surviving family members of National Police Officers Mai Van Dung and Dang Van Tron who were killed in action while working with the 25th Infantry Division.
            </p>
            <p>
              On July 23, 1966, the 1/5th(M) conducted reconnaissance in force (RIF) operations in the vicinity of XT 5423, 5525, 5724, 5723, 5621 and 5619. 55 VC suspects were apprehended of which 19 were confirmed to be VC. The battalion returned to base camp at 1715 hours.
            </p>
            <p>
              On July 24, 1966, the battalion (minus Company C which was attached to the 4/9th Infantry) began a 19 day period of operations in the northern Filhol, the Ho Bo Woods, and the area around Trung Lap.
            </p>
            <p>
              At 0815 hours Company A and the Recon Platoon commenced operations. With the assistance of a PF soldier and a Chieu Hoi, a VC base camp was located at XT 720104. The camp consisted of 4 buildings and a bunker tunnel complex. One Bobcat was killed when a booby trap was detonated. The camp was destroyed and the units closed Cu Chi Base Camp at 1440 hours.
            </p>
            <p>
              On July 25, 1966, the battalion conducted maintenance throughout the day.
            </p>
            <p>
              On July 26, 1966, the 1/5th(M) conducted maintenance and an element provided a convoy escort to Bao Trai. Company B, 1/5th(M) was attached to the 2/27th Infantry and reinforced Company C, 2/27th Infantry at a fire support base at Bao Trai upon an intelligence report that the Bao Trai outpost was to be attacked.
            </p>
            <p>
              That night Cu Chi Base Camp received a total of 206 rounds of 75mm recoilless rifle and 82mm mortar fire.
            </p>
            <p>
              On July 27, 1966, the battalion(-) departed base camp to establish a battalion forward base at XT 5130. Company B joined the battalion en route. Companies A and B and the Recon Platoon conducted operations in the area and established daytime ambushes. The units closed the battalion base by1630 hours and at 1910 hours deployed night ambushes.
            </p>
            <p>
              Company C returned to Cu Chi Base Camp at 1830 hours, terminating its attachment to the 4/9th Infantry.
            </p>
            <p>
              On July 28, 1966, Companies A and B and the Recon Platoon departed for the village of Loc Hung (XT 5226) at 0655 hours. Operating with a local Regional Forces Platoon, they commenced a seal and search of the village. 19 VC suspects were apprehended, 5 of whom proved to be VC. The units returned to the battalion forward base camp by 1630 hours.
            </p>
            <p>
              On July 29, 1966, the battalion ended operations and returned to the division base camp by 1830 hours.
            </p>
            <p>
              On July 30, 1966, units of the battalion conducted maintenance, civil affairs operations at Tan Phu Trung and provided an escort for an artillery convoy from Duc Hue (XT 4405) to Cu Chi.
            </p>
            <p>
              It was noted in a report that the Filhol Plantation and the Ho Bo Woods in spite of their proximity to the division base camp, constant harassment by artillery, and frequent S&D operations, continued to be the scene of occasional intense fighting.
            </p>
            <p>
              During the Quarterly Reporting Period of May 1 thru July 31, 1966 casualties for the 25th Infantry Division(-) were:
            </p>
            <p>
              KIA- 132; WIA- 1,239; MIA- 0; DOW- 24; NBI- 34; NBD- 11.
            </p>
            <p>
              During July 1966, eight Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>David L. Berry</li>
              <li>James X. Gilch</li>
              <li>Richard D. Gill Jr.</li>
              <li>Samuel G. Harris</li>
              <li>Leo E. Hinterlong</li>
              <li>Wilberto C. Sanchez</li>
              <li>Larry Van Clief</li>
              <li>Charlie Gray</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 7)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <div class="oneMonth" data-section="aug">AUGUST</div>
            <p>
              On August 1, 1966, the 1/5th(M) conducted S&D operations and also checked the effectiveness of a B-52 strike in the area of XT 640225 – XT 665240. Four extensive bunker- tunnel complexes were located and destroyed. Artillery dud rounds rigged for command detonation and some weapons and ammunition were located in the complexes. The battalion set up two night bases with Company A at XT 645227 and the battalion(-) at XT 608234. Night ambushes were employed.
            </p>
            <p>
              On August 2 and 3, 1966, the battalion continued searching the area. More tunnel and bunker complexes were located and destroyed. Enemy contact was light. Some areas were extensively booby-trapped with cluster bomb unit bomblets and command detonated mines. On August 03, one Bobcat was killed when a boobytrap was detonated.
            </p>
            <p>
              On August 4, 1966, the battalion continued its search and destroy operations in the area. At 1101 hours vic XT 658259 a booby trap was detonated killing one Bobcat from Company C and seriously injuring another. At 1132 hours 1 Bobcat from Company C was killed and 3 were injured while they were investigating a bunker that turned out to be booby-trapped. That evening ambushes were again employed from the battalion's night encampment.
            </p>
            <p>
              On August 5, 1966, the battalion conducted RIF operations of two areas. Enemy contact was again light and scattered. Several steel and log reinforced bunkers were located and destroyed, along with munitions and supplies. The battalion relocated its night encampment to XT 569241. No night ambushes were deployed. Also on August 05, a Bobcat died of wounds he had received earlier.
            </p>
            <p>
              On August 6, 1966, the battalion participated in a 2nd Brigade seal and search operation of the village of Trung Lap. At 0545 hours the battalion command APC hit a mine causing 3 WIA. The track was damaged beyond repair and was destroyed in place. At 1205 hours a 4.2 inch mortar track hit a mine resulting in 4 WIA. At 1410 hours the battalion C&C helicopter was knocked to the ground and severely damaged as it detonated a mine while lifting off over a bamboo hedgerow. There were 3 WIA as a result of the crash. The operation was completed at 1540 hours and all units closed Cu Chi Base Camp by 1800 hours.
            </p>
            <p>
              From August 8 thru 14, 1966, the 2nd Platoon of Company C was attached to the 1/27th Infantry.
            </p>
            <p>
              On August 10, 1966, Company B, 1/5th(M) was attached to the 4/9th Infantry effective at 0800 hours. They provided security and conducted S&D operations east of the junction of highways 26 and 19, in the area of XT 355450.
            </p>
            <p>
              On August 13, 1966, Company B, 1/5th(M) conducted reconnaissance of possible stream crossing sites north of Go Dau Ha in the area of XT 328407.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map10.jpeg" target="_blank">
                  <li>Map 10: Dong Hoa area</li>
                </a>
              </ul>
            </div>
            <p>
              On August 14, 1966, the 1/5th(M) became attached to the 1st Brigade. Company A was assigned to provide security for Battery A, 7/11th Artillery at Go Dau Ha. Company B provided security for the extraction of the 4/9th Infantry at XT 355432. Company C conducted S&D operations northeast of Go Dau Ha, in the area of XT 337437. The battalion established a forward base near Trung Mit at XT 4039. From August 14 thru the 20th, the 3rd Platoon of Company A was attached to the 1/27th Infantry.
            </p>
            <p>
              On August 15, 1966, Company A remained at Go Dau Ha providing security. Companies B and C and the Recon Platoon conducted reconnaissance of various areas. At 1150 hours, one APC from the Recon Platoon detonated a mine at XT 371422. Five Bobcats were wounded and evacuated. One died of his injuries later in the day. All units closed the battalion forward base by 1900 hours.
            </p>
            <p>
              On August 16, 1966, Company A continued to provide security at Go Dau Ha for artillery units. Companies B and C conducted separate S&D operations in the area. Both units had light contact and closed back to the battalion forward base by 1730 hours. A Recon Platoon APC detonated a mine at XT 358438 while on an escort mission from Go Dau Ha. Three Bobcats were wounded. One wounded Bobcat died of his wounds before a dust-off could get there. A check of the road revealed 3 more mines in the area. The platoon stayed at Trung Mit overnight.
            </p>
            <p>
              From August 17 thru August 30, 1966, the battalion continued operations in the area. Enemy contact was light. From August 20th thru the 28th, the 1st Platoon of Company B was attached to the 1/27th Infantry. On the 21st, Company B replaced Company A at Go Dau Ha. Enemy munitions and fortifications were located and destroyed. On the 28th, two men were injured when an APC detonated a mine. The 2nd Platoon of Company B was attached to the 1/27th Infantry from August 28 thru September 1, 1966. On the 29th , six Bobcats were wounded by a 60mm mortar round.
            </p>
            <p>
              On August 30, 1966, the battalion(-) returned to Cu Chi Base Camp.
            </p>
            <p>
              On August 31, 1966, Companies A, B(-), and C conducted road clearing, security and convoy escort duties. Company C was the last to close Cu Chi at 2337 hours.
            </p>
            <p>
              In the battalion commander’s analysis of the operation it was noted that "Fragmenting a mechanized battalion reduces its firepower and shock action and seriously hampers its flexibility. Employing a mechanized unit in a static security role, ie., securing an artillery battery, protecting engineer work crews, ect., fails to make use of the mobility and shock action which characterize mechanized infantry."
            </p>
            <p>
              During August 1966, six Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Robbin A. Goodwin</li>
              <li>Rodney W. Casselman</li>
              <li>Joe L. Hill</li>
              <li>Richard J. Willett</li>
              <li>Steve W. Harris</li>
              <li>Robert A. Schmid</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 8)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> --><a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <div class="oneMonth" data-section="sep">SEPTEMBER</div>
            <p>
              On September 1, 1966, elements of Company B were still attached to the 1/27th Infantry.
            </p>
            <p>
              On September 2, 1966, the 1/5th(M) was attached to and under OPCON of the 1st Brigade. Company A established a base at the northern end of the Filhol ( XT 691213) where they conducted daylight patrols and night ambushes of traffic on the Saigon River.
            </p>
            <p>
              On September 3, 1966, the Battalion Headquarters and the Recon Platoon joined Company A and established a forward base in the area of XT 679211. After conducting local S&D operations the battalion command group, and the Recon Platoon departed the Filhol and returned to Cu Chi Base Camp. Company B conducted operations in the Filhol under OPCON of the 4/23rd Infantry and retuned to Cu Chi Base at 2000 hours. Company A remained in the Filhol deploying night ambushes and Company C remained under OPCON of the 2nd Brigade and had 1 platoon attached to the 1/27th Infantry.
            </p>
            <p>
              On September 4, 1966, the battalion command group, Company B and the Recon Platoon joined Company A in the Filhol and established a forward base. Company C remained OPCON to the 2nd Brigade.
            </p>
            <p>
              On September 5 and 6, 1966, battalion units conducted local S&D operations. Contact was light and scattered. One APC detonated a mine without casualties. Miscellaneous enemy supplies and fortifications were located and destroyed.
            </p>
            <p>
              On September 7, 1966, Company B and one platoon from Company A conducted operations in conjunction with the 4/9th Infantry. Recon Platoon suffered one WIA from small arms fire. At 1455 hours Company C (-) joined the battalion at the forward base.
            </p>
            <p>
              On September 8, 1966, the battalion conducted 3 separate company size operations in conjunction with the ARVN 1/7th Infantry.
            </p>
            <p>
              On September 9, 1966, The battalion moved to a new base area at XT 680211 on the northern fringe of the Filhol. S&D operations continued. Company C became OPCON to the 2nd Brigade and established a forward combat base at XT 439349.
            </p>
            <p>
              On September 10, 1966, the battalion conducted two one company operations with light contact. Company C conducted RIF operations north of Bao Don (XT 442365) and received 9 rounds of mortar fire at their night location.
            </p>
            <p>
              On September 11, 1966, the battalion command group moved to XT 637211. Company A conducted an S&D operation, destroying bunker and tunnel complexes. At 1205 hours two WIAs were sustained from small arms fire. At 1220 hrs a 105mm artillery round was command detonated against an APC wounding 3 Bobcats. Company B conducted an S&D operation, destroying bunkers and tunnel complexes and munitions. 3 APCs detonated mines with no casualties. At 1900 hours the battalion forward base received 4 rounds of 60mm mortar fire resulting in 1 Bobcat from Company A being killed.
            </p>
            <p>
              At 2005 hours Company B received 15 rounds of friendly 105mm artillery fire. 1 Bobcat from Company B was killed and 3 were seriously wounded. Supposedly someone was firing a counter-mortar barrage.
            </p>
            <p>
              On September 12, 1966, the battalion(-) was detached from the 1st Brigade and returned to Cu Chi Base Camp, closing by 1215 hours. Company C established a blocking position at XT 540205 and was attached to the 1/27th Infantry. Also on the August 12, one Bobcat from Company C died from wounds he had received earlier.
            </p>
            <p>
              From September 13 thru 19, 1966, the battalion conducted maintenance and prepared for future operations. During the period the Recon Platoon conducted a three day search and destruction of a two level tunnel complex that was reported by a Chieu Hoi at XT 695117. A total of 1270 meters of tunnel were destroyed. There were also Medcaps and road runner operations conducted.
            </p>
            <p>
              On September 20, 1966, a series of operations in preselected objective areas in the Filhol and Boi Loi Woods and vicinity began. The mission of the battalion was to conduct S&D and RIF operations and on order to assist in the destruction of VC forces fixed by 1/27th Infantry Eagle Flights. An APC from Company C detonated an AT mine at XT 614243 resulting in 2 WIA who were evacuated. The Battalion command group, while enroute to establish a forward base, had one APC hit a mine at XT 625218 at 1230 hours resulting in extensive damage to the vehicle and 2 minor injuries. The damaged APC was taken back to Cu Chi by the Recon Platoon who then returned to the battalion forward base at XT 609240. During the day numerous dud artillery rounds and booby traps were located and destroyed. Night ambushes were employed from the forward command base.
            </p>
            <p>
              On September 21, 1966, Co A displaced to the new battalion base location. Companies B and C conducted S&D operations. One platoon from Company A escorted a damaged Recon Platoon APC to Trung Lap. Enroute they had 1 APC detonate a mine. Companies B and C both located enemy base camps with various amounts of equipment and supplies. Among the items found and destroyed were 21 - 55gallon drums of 30W oil.
            </p>
            <p>
              On September 22, 1966, at 0415 hours the forward base received 15 rounds of 60mm mortar rounds resulting in 5 WIA. Company A dispatched one platoon to recon a direct route from the forward base camp to Trung Lap. At 1105 hours an APC from Company A detonated an AT mine resulting in 1 WIA. The vehicle was extensively damaged and the company dispatched additional APCs to assist in its removal. The wet ground caused the damaged APC and the towing vehicles to continually bog down. The party did not close the battalion base until 0200 hours. Company B (-) performed maintenance while one of its platoons extracted stuck vehicles and returned to base camp at 1545 hours. Company C conducted S&D operations in an attempt to locate the area from where the mortar attack had taken place. The area was located and while extending the area of their S&D operation the company engaged an estimated 8 VC at 1216 hours. At 1332 hours an APC detonated a mine and one Bobcat was wounded. Night ambushes were deployed from the battalion forward base with negative contact. Also on September 22, one Bobcat from Company B died from injuries he had received earlier.
            </p>
            <p>
              On September 23, 1966, the battalion moved to a new base location at XT 505307. While enroute S&D operations were conducted. Some vehicles became stuck in the soft ground and all units, except one platoon from Company B, finally closed the new base. The Company B platoon remained at XT 513304 with a stuck 4.2 inch mortar track.
            </p>
            <p>
              On September 24, 1966, elements conducted local S&D operations and repaired and extracted downed vehicles. The Recon Platoon escorted two brigade command carriers to the brigade forward CP at XT 475265. The 3rd platoon from Company B spent the night at Go Dau Ha.
            </p>
            <p>
              On September 25, 1966, at 0110 hours it was reported that one of the men with the platoon at Go Dau Ha was involved in a shooting incident. Apparently he wanted the services of a female companion of one of the American advisors at Go Dau Ha, and when they were refused he shot the American advisor in the foot with his .45 cal pistol.
            </p>
            <p>
              Company A departed the base at 0745 hours and at 0842 hours one APC hit an AT mine at XT 493316. The explosion ignited the gas tank and eight Bobcats burned to death. Three others were seriously injured. At 0955 hours it was requested that Graves Registration dispatch a team to remove the remains of those deceased Bobcats that were still inside the track.
            </p>
            <p>
              At 0940 hours Company B had one APC hit a mine causing 2 minor injuries but extensive damage to the track. At 0947 hours one Recon Platoon APC hit a mine. There were 3 wounded and the APC was a total loss. At 1100 hours a Company B APC hit a mine resulting in 2 wounded.
            </p>
            <p>
              On September 27, 1966, the companies conducted local S&D operations. At 1150 hours an APC from Company A had a booby trap that was suspended in a tree command detonated as the track moved past. One Bobcat from Company A was killed and 2 were wounded.
            </p>
            <p>
              At 2047 hours an OP/LP from Company C was fired upon with an M-79 by a Company C soldier on the Company C portion of the perimeter. One Bobcat was killed and two were wounded in the incident.
            </p>
            <p>
              On September 28, 1966, at 0859 hours, one APC from Company A hit an AT mine resulting in 4 minor wounded and extensive damage to the track. While in the same area at 1000 hours, Company A received 2 rifle grenades with negative casualties. At 1135 hours Company A received 2 rounds of fire from an AT weapon. Company C had just joined Company A in the area. At 1207 hours one APC from Company C detonated an AT mine resulting in 4 minor WIA. At 1210 hours Company A received sniper fire at XT 498333 resulting in one Bobcat from Company A being killed.
            </p>
            <p>
              At 1147 hours, elements of Company B engaged in a fire-fight resulting in two Bobcats from Company B killed and two others wounded.
            </p>
            <p>
              The battalion established a new CP location at XT 533347.
            </p>
            <p>
              On September 30, 1966, 5 APCs from Company A continued their march toward Go Dau Ha at first light. At 0700 hours the vehicles became bogged down at XT 489299 and the element awaited assistance. Company A(-) departed the perimeter at 1110 hours acting as rear guard for the battalion during movement to the 2nd Brigade CP. At 1208 hours one APC from Company C which was traveling with the group struck an AT mine at XT 510447 resulting in 1 Bobcat from Company C being killed and 3 others wounded. The APC was later stripped and destroyed in place.
            </p>
            <p>
              Company A(-) was unable to get to the 2nd Bde CP because of stuck vehicles and established a night base at XT 478352. Company B was also forced to establish its own night perimeter at XT 510346. Company C managed to close the 2nd Brigade forward CP at 1930 hours.
            </p>
            <p>
              During September 1966, seventeen Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Earl E. Irving Jr.</li>
              <li>Rolando L. Soliz</li>
              <li>Billy J. Dailey</li>
              <li>James E. Miller</li>
              <li>Gary A. Barnard</li>
              <li>Gary R. Dopp</li>
              <li>Roy D. Hutting</li>
              <li>Ernest R. Martie</li>
              <li>Terry L. Pundsack</li>
              <li>Robert M. Waters</li>
              <li>Walter Williams Jr.</li>
              <li>Charles M. Centeno</li>
              <li>Thomas A. Lowden</li>
              <li>Thomas J. Ontiveros</li>
              <li>Ralph G. Till</li>
              <li>Terry L. Snyder</li>
              <li>ONE whose name is unknown to us writing this report.</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 9)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <p>
              "Higher temperatures and less thunderstorm activity can be expected in October as the autumn season sets in in the Cu Chi and Tay Ninh area. October marks the transition between the wet and the dry season. Temperatures during this period at Tay Ninh will increase to an average high of 90 degrees and a low of 75 degrees. Cu Chi temperatures will be slightly cooler. Warm moist air from the southwest will be replaced by the relatively cooler, drier air of the northeast monsoon."
            </p>
            <div class="oneMonth" data-section="oct">OCTOBER</div>
            <p>
              On October 1, 1966, the battalion finished closing to the 2nd Brigade forward CP.
            </p>
            <p>
              On October 2, 1966, the battalion defended the brigade forward base and conducted maintenance. One platoon from Company A conducted road runner operations from Trang Bang to Cu Chi.
            </p>
            <p>
              On October 4, 1966, one Bobcat from Company A died from wounds he had previously received. Throughout the day the battalion performed maintenance and secured the brigade perimeter until all brigade elements were removed. At 1700 hours the battalion departed the forward base and returned to Cu Chi Base Camp, closing by 2100 hours.
            </p>
            <p>
              October 5, 1966 was a day of maintenence. On the 6th, Company C operated in the area of Tan Phu Trung. On the 7th, a convoy was escorted to Trang Bang and Companies A and B patroled in the area of Tan Phu Trung. Medcap activities were also conducted in the area.
            </p>
            <p>
              On October 8, 1966, the battalion conducted local operations with no significant contact. During the day elements of the battalion conducted convoy escort to Bao Trai and Duc Lap.
            </p>
            <p>
              On October 8, 1966 a ten man patrol from Company C, 1/27th Infantry departed the Bao Trai airstrip at 1930 hours to set up at XT 544038. At 0146 hours the patrol was attacked and communication was lost. An 18 man reaction force was committed at 0212 hours. Company C 1/27th Infantry began to search at first light. At 0720 hours the bodies of 9 of the patrol members were located at XT 563032. At 0831 hours a villager along the trail being followed disclosed that 30 VC and a Negro US Soldier prisoner passed through the village moving southwest.
            </p>
            <p>
              From October 9 thru 11, 1966, the battalion continued local operations in the area of Tan Phu Trung, souteast of Cu Chi.
            </p>
            <p>
              The battalion participated in the mid-Autumn children's festival at Tan Phu Trung. Candy and toys were distributed to some 1500 children. The 1/5th(M) also delivered a brick-making machine, cement and steel fence posts to the village.
            </p>
            <p>
              In the commander's analysis it was noted that the mines encountered were becoming larger, resulting in greater physical damage to the APCs. However, barring aggravating factors such as fires or secondary explosions, casualties from mine detonations remained relatively light.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map11.jpeg" target="_blank">
                  <li>Map 11: Tan Phu Trung</li>
                </a>
              </ul>
            </div>
            <p>
              On October 12, 1966, the 1/5th(M) continued pacification and security operations at Tan Phu Trung.
            </p>
            <p>
              On October 16, 1966, at 0155 hours, an OP/LP (XT 692095) from Company C received 3 incoming hand grenades resulting in one Bobcat from Company C being killed and one injured who later died of wounds he received. An immediate search of the area was conducted with no enemy contact.
            </p>
            <p>
              On October 17, 1966, operations in the area of Tan Phu Trung continued. At 0700 hours one platoon from Company C made an airmobile combat assault into the area of XT 715120. One platoon from Company A secured the Hoc Mon Bridge (XT 713072).
            </p>
            <p>
              On October 18, 1966, two platoons from Company B closed base camp at 0110 hours after conducting a night road runner operation to and from Trung Lap to escort one battery of the 3/13 Artillery back to Cu Chi. At 1015 hours, Company C conducted an airmobile combat assault into XT 696135. One minor WIA was received when a VC squad was engaged. At 1345 hours Company B conducted an S&D operation at XT 627218 in response to a LRRP contact with 25 VC. One minor WIA was suffered at 1612 hours from a booby trap. At 1641 hours, another minor WIA was received from a booby trap.
            </p>
            <p>
              On October 19, 1966, Company C conducted an airmobile combat assault into multiple landing zones starting at 0920 hours. One platoon from Company A secured the Hoc Mon Bridge during hours of darkness.
            </p>
            <p>
              On October 22, 1966, Company A continued operations from a forward base (XT 687104) in Tan Phu Trung. The remainder of the battalion commenced an S&D operation into the Ho Bo Woods. There was light contact with several WIAs sustained.
            </p>
            <p>
              On October 23, 1966, Company B sustained two Bobcats KIA and two wounded at 1440 hours when an APC was hit by an AT round. Company B and Company C destroyed numerous bunkers and tunnels in the area. The battalion forward base was located at XT 588281. Company A continued operations in Tan Phu Trung.
            </p>
            <p>
              On October 24, 1966, Company C sustained 1 WIA from a sniper at 0940 hours. Company B located an enemy base camp at 1330 hours and destroyed the structures. At 1650 hours, with the assistance of a Chieu Hoi, Company C located a booby trap factory and destroyed 600 pounds of TNT and miscellaneous items used in the manufacture of booby traps. All units closed Cu Chi Base Camp by 1800 hours. Company A continued operations in Tan Phu Trung.
            </p>
            <p>
              On October 27, 1966, The 1/5th(M) Battalion(-) conducted RIF/S&D operations southeast of Trang Bang in the area of XT 5214. The battalion(-) established a forward base at XT 509141. The battalion(-) continued operations in the area and closed back to Cu Chi base camp at 1840 hours on October 29, 1966. Company A remained at a forward base at XT 525141 and Company B continued operations in the Tan Phu Trung area.
            </p>
            <p>
              On October 31, 1966 Company A completed "bushmaster" and S&D operations in Thai My (XT 5214) and returned to Cu Chi Base Camp at 1255 hours. At 1500 hours Company C discovered an extensive tunnel complex just to the northeast of Tan Phu Trung at XT 702102.
            </p>
            <p>
              Exploration was halted due to darkness and was scheduled to resume the next morning.
            </p>
            <p>
              For the Quarterly Reporting Period of August 01, 1966 thru October 31, 1966, the 25th Infantry Division(-) reported the following personnel statistics:
            </p>
            <p>
              79 - KIA; 845 - WIA; 7 - MIA; 19 - DOW; 3 - NBD; and 65 - NBI.
            </p>
            <p>
              It was also noted that there was a shortage of Infantry NCOs in the grades E-5 and E-6. The casualty rate of NCOs has created a shortage in greater proportion than the rate of fill.
            </p>
            <p>
              The influx of approximately 1200 daily hire laborers into the Division base has required intensive and continuous counter-intelligence measures to neutralize VC espionage.
            </p>
            <p>
              Medical: Veneral Disease is being contracted at a steady rate. The rates for August, September, and October were 278.0, 205.5, and 212.2 cases / 1000 men/year respectively.
            </p>
            <p>
              In the Division command analysis it was noted that:
            </p>
            <ol>
              <li>
                Explosives and demolitions are carried in the cargo compartment of APCs with troops. On occasion vehicles carrying troops and explosives hit anti-tank mines which cause the explosives to detonate. It was recommended that only a minimum amount of demolitions should be carried and additional demolitions be brought out by resupply means. The carrier which is used to carry the demolitions should only have a minimum number of personnel aboard to reduce the number of personnel exposed to a single explosion.
              </li>
              <li>
                VC forces make extensive use of mines and booby traps, often placing them in vehicle tracks. Command detonated mines are often rigged in trees to be employed against vehicle crewmen from above. During the last 30 days there has been a marked increase in VC deployment of RPG-2's. The RPG-2's have been employed singly or in groups (up to five) and have been habitually fired from close in.
              </li>
            </ol>
            <p>
              During the month of October 1966, five Bobcats died in Viet nam. They were:
            </p>
            <!-- <ul>
              <li>George W. Alexander Jr.</li>
              <li>Gerald J. Collier</li>
              <li>John C. Ardis</li>
              <li>Thomas William London</li>
              <li>Jimmy Doyle Phipps</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 10)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <div class="oneMonth" data-section="nov">NOVEMBER</div>
            <p>
              On November 1, 1966, Company C continued exploring the tunnel complex at XT 702102. A large ammunition cache was located in the tunnel at 1010 hours. At 1745 hours the tunnel was destroyed.
            </p>
            <p>
              On November 2, 1966, Company C closed Cu Chi at 0900 hours. The battalion continued maintenance and preparation for future operations.
            </p>
            <p>
              On November 3, 1966, at 0615 hours, the 1st Battalion(M) 5th Infantry with Troop B, 3/4 cavelry attached, commenced an attack into the northern Filhol in the area of XT 6322. Company A, with the help of a Chieu Hoi, discovered a munitions cache. At 1800 hours Company A established a base at XT 655231. Company B sustained 1 Bobcat wounded in a fire fight when an APC detonated an AT mine. Company B established a base at XT 647241.
            </p>
            <p>
              Company C became engaged in a firefight at XT 638239. The fight went from 1253 hours until the VC broke contact at 1700 hours. During the fight, two Bobcats were killed and three were wounded. The Battalion CP and Company C established a base at XT 635235. Troop B had 3 APCs hit mines resulting in 3 troopers being wounded. Troop B established a base at XT 642228.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map12.jpeg" target="_blank">
                  <li>Map 12: Katum area</li>
                </a>
              </ul>
            </div>
            <p>
              On November 4, 1966, a Chieu Hoi led Company B to a munitions and weapons cache. At 1250 hours a Company C APC hit an AT mine resulting in two Bobcats wounded. The battalion(-) closed into Cu Chi Base Camp by 2350 hours. Company A continued to move throughout the night.
            </p>
            <p>
              On November 5, 1966, Company A closed Cu Chi Base Camp at 0630 hours. Company B moved to Go Dau Ha, closing at 1730 hours. The remainder of the battalion moved to an assembly area (XT 416238) closing at 0155 hours on November 6.
            </p>
            <p>
              On November 6, 1966, at 0700 hours, the 1/5th(M) was attached to the 3rd Brigade, 1st Infantry Division. The battalion departed Go Dau Ha and established a base at XT 340583 and provided a perimeter defense for the 3rd Brigade, 1st Infantry Division Headquarters, a forward supply airhead, two artillery batteries, a Special Forces compound and a Popular Forces compound. Company A was sent to XT 394622 to reinforce an infantry battalion which was securing a fire support base consisting of two artillery batteries. The 1/5th(M) continued to provide security to fire support bases and conducted local patrolling and ambushes until November 10.
            </p>
            <p>
              On November 10, 1966, the 1/5th(M) reverted to OPCON of the 2nd Brigade, 25th Infantry Division and moved its base to XT 274686 to secure the 2nd Brigade Headquarters at the "Old French Fort" located north of Nui Ba Dinh mountain on Highway 4.
            </p>
            <p>
              On November 11, 1966, the battalion conducted RIF operations in the area, north to the junction of Highways 247 and 4. Many signs of recent activity were found along the trails in the area. Some enemy supplies were located and destroyed. Company A established a perimeter at XT 269755. One platoon of Company C, with a damaged APC, spent the night in the Company A base. Company C(-) and Company B returned to the battalion forward base. Night ambushes were deployed with negative contact.
            </p>
            <p>
              On November 12, 1966, The battalion secured and established an area for a fire support base at XT 273785, on Highway 4, just to the north of the Highway 247 junction. For the next 13 days the battalion units conducted security, reconnaissance, and search and destroy operations in the area between Nui Ba Dinh and Katum. Enemy contact was scattered with some brief intense encounters. APCs hit mines wounding some and booby traps were encountered. Enemy bases and supply caches were discovered and destroyed throughout the area. One Bobcat died on the operation. That was on November 22, 1966 . "We were just standing there talking to each other," said a member of Company C, "when there was a single shot and down he went. He was dead before he hit the ground."
            </p>
            <p>
              On November 25, 1966, Operation Attleboro ended. The majority of the units involved moved back to Cu Chi Base Camp on November 24. The 1/5th(M) conducted deep reconnaissance and had a "training exercise" on extraction techniques east of Trai Bi.
            </p>
            <p>
              "It was noted that two basic things resulted from this operation (Attleboro): (1) We have learned that the controlled road is one of the basic logistical routes utilized by the 9th VC Division, and (2) one thing that surprised us was the adequacy of the intelligence network which the VC had. They knew just about every move we made."
            </p>
            <p>
              On November 28, 1966, the 3rd Brigade of the 4th Infantry Division established a base at Dau Tieng. The 3rd Brigade began continuous operations in the area surrounding Dau Tieng with maximum use of small unit patrols and "Bushmasters."
            </p>
            <p>
              Company C, 1/5th(M), was attached to the 3rd Battalion, 21st Infantry and conducted operations in the Thanh Dien Forest, south of the Tay Ninh Base Camp.
            </p>
            <p>
              During November 1966, three Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Riccardo B. Dickerson</li>
              <li>Milburn H. Starnes</li>
              <li>Dock J. Pinion</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 11)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <div class="oneMonth" data-section="dec">DECEMBER</div>
            <p>
              On December 1, 1966, the 2nd Brigade of the 25th Infantry Division began operations in Hau Nghia Province to interdict the VC harvest, movement and storage of rice and to locate and destroy VC forces, base camps and supplies.
            </p>
            <p>
              On December 7, 1966, the 2nd Brigade established a Brigade Forward Command Post and assumed the additional mission of screening the rice producing areas adjacent to the Ho Bo - Boi Loi Woods complex. The 1/5th(M) effected a ground link up with the 1/27th Infantry at the forward combat base north of Trang Bang. (XT 484271). While enroute the Recon Platoon had 2 APC's hit AT mines near XT 509240 resulting in four Bobcats being wounded.
            </p>
            <p>
              On December 8, 1966, the battalion conducted reconnaissance in the area and received sniper fire which resulted in four Bobcats being wounded.
            </p>
            <p>
              On December 9, 1966, units from the 1/5th(M) conducted a RIF from XT 601307 to 530314, and secured LZs for the 1/27th Infantry. A firefight took place at XT 526314 and shortly thereafter an APC from Company A detonated an AT mine resulting in one Bobcat from Company A being killed and three others wounded.
            </p>
            <p>
              On December 10, 1966, Company A secured an LZ for the 1/27th Infantry and then joined the rest of the battalion in conducting S&D operations. During the day 3 APCs detonated AT mines resulting in seven Bobcats being wounded.
            </p>
            <p>
              On December 11, 1966, 3 underground fortifications, containing numerous electrical items and medicines, were located by Company A.
            </p>
            <p>
              On December 12, 1966, all three companies conducted S&D operations and the Recon Platoon secured a river crossing at XT 525345. There was no enemy contact during the day.
            </p>
            <p>
              On December 13, 1966, Company A located 7 underground fortifications containing supplies and ammo. Also on December 13, a Bobcat from Company B died in hospital from wounds he had received on an earlier date.
            </p>
            <p>
              From December 14, 1966, thru December 18, the 1/5th(M) conducted S&D operations in the Boi Loi Woods and along the Saigon River. Miscellaneous enemy supplies and equipment, along with enemy fortifications and tunnels were located and destroyed.
            </p>
            <p>
              On December 18, 1966, the 1/5th(M) conducted a convoy move to Cu Chi Base Camp, closing at 0900 hours.
            </p>
            <p>
              On December 19, 1966, Company B provided security for villages north of Bao Trai in the area of XT 568069. This was in response to recent VC threats against the villagers.
            </p>
            <p>
              On December 20, 1966, Company A established a company base at XT 629198 near Bau Tron, northwest of the Cu Chi base. Company B secured Battery A of the 1/8th Artillery at Duc Hanh and Company C prepared for night ambushes.
            </p>
            <p>
              On December 21, 1966, the 1/5th(M) conducted company ambushes and patrols. At 2320 hours Company A received mortar and RPG-2 fire which resulted in ten Bobcats being wounded.
            </p>
            <p>
              The fire was returned with Artillery with unknown results.
            </p>
            <p>
              On December 22, 1966, Company A conducted an S&D operation from XT 630197 southeast to Cu Chi Base Camp. Company B established a company base northwest of Cu Chi at XT 630206. Company C continued to provide security northeast of Bao Trai at Duc Hanh (XT 570070).
            </p>
            <p>
              On December 23, 1966, Company B conducted S&D operations around their forward base. Company C continued to provide security for the 1/8th Artillery.
            </p>
            <p>
              On December 24, 1966, Company A and the Recon Platoon prepared for future operations at Cu Chi Base Camp.
            </p>
            <p>
              On December 26, 1966, Companies A and C conducted an S&D operation northwest of the Cu Chi Base Camp near XT 6319 while Company B and the Recon Platoon set up blocking positions near XT 6220. There was no enemy contact but enemy material losses were extensive.
            </p>
            <p>
              On December 28, 1966, the battalion continued S&D operations in the same area. At 0740 hours an unknown number of VC were engaged at XT 627183. One Bobcat from Company A was killed and one was wounded. Also on December 28th, a Bobcat from Company B died in hospital from wounds he had received on a previous date.
            </p>
            <p>
              On December 29, 1966, the battalion conducted S&D operations. Company A established a forward base at XT 630174 and all other elements of the battalion closed Cu Chi Base Camp by 1640 hours.
            </p>
            <p>
              On December 30, 1966, Company B established a forward base at XT 630163. The remainder of the battalion conducted maintenance.
            </p>
            <p>
              On December 31, 1966, the 1/5th(M) conducted daylight ambush patrols. A patrol from Company C was fired upon at 1600 hours by 3 VC. There were no friendly casualties. And that is the best way to have closed out the year.
            </p>
            <p>
              During December 1966, four Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Melvin L. Sherrell</li>
              <li>Dennis F. Delasandro</li>
              <li>William L. McLaughlin</li>
              <li>One whose name is unknown to us who are writing this report</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 12)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop

@section('vietnam_1967_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_12">
        <div data-button="jan" data-year="1967">
          <div data-button="jan" data-year="1967">January</div>
        </div>
        <div data-button="feb" data-year="1967">
          <div data-button="feb" data-year="1967">February</div>
        </div>
        <div data-button="mar" data-year="1967">
          <div data-button="mar" data-year="1967">March</div>
        </div>
        <div data-button="apr" data-year="1967">
          <div data-button="apr" data-year="1967">April</div>
        </div>
        <div data-button="may" data-year="1967">
          <div data-button="may" data-year="1967">May</div>
        </div>
        <div data-button="jun" data-year="1967">
          <div data-button="jun" data-year="1967">June</div>
        </div>
        <div data-button="jul" data-year="1967">
          <div data-button="jul" data-year="1967">July</div>
        </div>
        <div data-button="aug" data-year="1967">
          <div data-button="aug" data-year="1967">August</div>
        </div>
        <div data-button="sep" data-year="1967">
          <div data-button="sep" data-year="1967">September</div>
        </div>
        <div data-button="oct" data-year="1967">
          <div data-button="oct" data-year="1967">October</div>
        </div>
        <div data-button="nov" data-year="1967">
          <div data-button="nov" data-year="1967">November</div>
        </div>
        <div data-button="dec" data-year="1967">
          <div data-button="dec" data-year="1967">December</div>
        </div>
      </div>
    </div>
    <div class="allSegments">
      <div class="timeSegment vietnamLogSegment" data-section="1967">
        <div class="segmentContent">
          <div class="segmentTitle"><u>Vietnam, 1967</u></div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="jan">JANUARY</div>
            <p>
              From January 1 thru January 4, 1967, the battalion continued S&D and ambush operations in the area between the Filhol and the Ho Bo Woods without enemy contact. Enemy fortifications, tunnels, and supplies were discovered and destroyed.
            </p>
            <p>
              On January 5, 1967, the battalion conducted maintenance at Cu Chi and prepared for future operations. For other than track drivers and maintenance personnel, that usually meant cleaning your weapons and catching up on sleep. When out on operations, and with ambushes, one was lucky to get 5 hours of sleep in any 24 hour period. After a few days it begins to catch up to a person.
            </p>
            <p>
              On January 6, 1967, the 1/5th(M) became attached to the 196th Light Infantry Brigade.  Troop B of the 3/4 Cavelry became OPCON to the 1/5th(M). The battalion moved to the area north of Trung Lap in preparation for Operation Cedar Falls.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/cedar-falls.jpeg" target="_blank">
                  <li>Map: Operation Cedar Falls</li>
                </a>
              </ul>
            </div>
            <p>
              On January 7, 1967, the battalion began to work its way north towards the Saigon River and the Ho Bo Woods. Three Bobcats from Company A were killed on January 7. A 105mm artillery dud, hung in a tree, was command detonated as they were checking out some suspicious noise.
            </p>
            <p>
              The 1st Infantry Division along with the 173rd Airborne, 11th Armored Cavalry, and several ARVN units were beginning a detailed search of the Ben Suc, Thanh-Dien Forestry preserve and the so called "Iron Triangle" areas.
            </p>
            <p>
              On January 8, 1967, the 196th LIB established blocking positions on the banks of the Saigon River. The 1/5th(M) was the right (east) flank element in the area north of the Rach Son Creek in the Ho Bo Woods (XT 669248). Four Bobcats died on January 8th. Three of them on a Company B ambush patrol that something went wrong on. The fourth was from Company C.
            </p>
            <p>
              The battalion continued their blocking operation with some local patroling and ambushes.
            </p>
            <p>
              On January 17, 1967, four Bobcats were killed when the helicopter they were passengers in crashed. All four helicopter crew members were also killed. The helicopter was on the return trip to Cu Chi Base Camp from a resupply mission to the battalion forward base when it developed mechanical problems.
            </p>
            <p>
              On January 18, 1967, two Bobcats were killed in separate incidents. One from Company A and one from Company C.
            </p>
            <p>
              On January 19, 1967 one of the companies came across the bodies of 9 VC who had been killed.
            </p>
            <p>
              On January 20, 1967, Company B, with the guidence of a Chieu Hoi located an arms and ammunition cache at XT 661281. Two Bobcats from Company A died when a booby trap was detonated.
            </p>
            <p>
              On January 21, 1967, one Bobcat from Company C died from small arms fire and a medic died from shrapnel. Also on January 21, Company A located a tunnel complex with a main tunnel 600 meters long and also 10 branch tunnels. This was in the area of XT 650235, some 1500 meters south  west of the Saigon River and just to the north of the Rach Son Creek. The tunnel complex was searched for four days and over 60 pounds of documents were evacuated from the area.
            </p>
            <p>
              On January 26, 1967, Operation Cedar Falls ended.
            </p>
            <p>
              From January 27 thru January 30, 1967, the battalion conducted maintenance, training and prepared for future operations at Cu Chi Base Camp.
            </p>
            <p>
              One Bobcat from Company B was accidentally killed north of the Ben Muong Stream, on January 30th.
            </p>
            <p>
              During January 1967, eighteen Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Danny C. Barnes</li>
              <li>Willy V. Quast</li>
              <li>David Young</li>
              <li>Lynn A. Harris</li>
              <li>Arnez F. Miller Jr.</li>
              <li>Carlos M. Rodriguez</li>
              <li>David L. Sheehy</li>
              <li>Herbert H. Crowder</li>
              <li>Herschel L. Epps Jr.</li>
              <li>Larry G. Gray</li>
              <li>Frank J. Krebs</li>
              <li>Donald L. Helton</li>
              <li>Leo V. Silbert</li>
              <li>Morgan E. Savage</li>
              <li>James B. Simmons</li>
              <li>John L. Wilhelm</li>
              <li>Richard L. Parham.</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 1)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <p>
              For the Quarterly Reporting Period of November 1, 1966 to January 31, 1967, the 25th Infantry Division(-) reported the following statistics: KIA- 123; WIA- 1029; MIA- 0; NBD- 0; NBI- 33.
            </p>
            <p>
              Administration: There still remained a shortage in Infantry NCOs. The casualty rate and rotation losses among these NCOs has created a shortage greater than the rate of fill. Other MOS that the Division Headquarters placed in the critical short category were: 05B20; 11D20; 11D40; 11F20; 11F40; 26C20; 45F20; 63E20; 67M20; 67Q20; 72B10; 74D20; 82C10; 82C20; 91C20; 96C20.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map13.jpeg" target="_blank">
                  <li>Map 13: Nui Ba Den</li>
                </a>
              </ul>
            </div>
            <div class="oneMonth" data-section="feb">FEBRUARY</div>
            <p>
              On February 1, 1967, the battalion moved from Cu Chi to Tay Ninh. The battalion was attached and OPCON to the 196th Light Infantry Brigade. During the day one Bobcat from Company B died from small arms fire.
            </p>
            <p>
              On February 2, 1967, Company A, 4/31st Infantry conducted an airmobile assault into the area of XT 055684, some 7 kilometers west of Hwy 22 and the village of Trai Bi.
            </p>
            <p>
              At 0632 hours the 1/5th(M) left Tay Ninh and assaulted to the area where Company A, 4/31st Infantry was located. Lead elements of the 1/5th(M) linked up with the 4/31st at 1050 hours. A bridge was then airlifed to the site and installed by the 175th Engineer Company. The 1/5th(M) crossed the bridge and continued to XT 034717. The battalion secured an LZ for the helilift of the 4/31st Infantry(-) into the area at 1640 hours.
            </p>
            <p>
              On February 03, 1967, the 1/5th(M) commenced an attack at 0818 hours to the area of WT 9869, which was near the Cambodian Border south of the "Dog's Head."  At 0900 hours the Recon Platoon was dispatched to sweep the flank of the battalion. At 0906 hours a Recon APC detonated an AT mine with negative casualties. At 1049 hours Company A located a TA/312 telephone in the area of WT 995699. At 1201 hours Company A, 1/5th(M), secured an LZ for the 2/1st Infantry.
            </p>
            <p>
              At 1330 hours elements from Company B received fire from a 57 mm Recoilless Rifle while repairing a track that had broken down in the area of WT 999698. Two Bobcats were wounded. The Recon Platoon was dispatched to assist the Company B elements and while enroute received RR fire resulting in 2 Bobcats being wounded. Fire was returned and the Recon Platoon proceeded to link up with the elements from Company B.
            </p>
            <p>
              At 1459 hours, an APC from Company C detonated an AT mine in the area of WT 999701 resulting in 13 Bobcats being wounded. At 1510 hours, the Recon Platoon, still providing security for the Company B elements, started to receive heavy small arms fire from an estimated 15 to 20 VC in the area of WT 000697. At this time the Recon Platoon had elements of Company B and Company A with them. The APC of the Company A XO was hit by a RR round, killing him and two others on the APC instantly. The VC managed to overtake and occupy the APC, firing its .50 caliber machine gun. A man from Company B was wounded while attempting to take the APC under fire.
            </p>
            <p>
              "He was laying in a small depression next to me with real bad stomach wounds. We tried to comfort him and kept telling him he would be ok, but then all the color left his face and he died. I felt very helpless about not being able to do something for him," recalled a Bobcat that was with him.
            </p>
            <p>
              The APC was recovered at 1555 hours after air and artillery fire was placed into the area and the VC broke contact. During the day 5 Bobcats were killed and 24 were wounded.  The VC wore a mixture of camoflauged uniforms and black "pajama" type clothing. It was noted that they fought with considerable determination and exhibited good discipline and fire control.
            </p>
            <p>
              Elements of the battalion closed into a new battalion CP at 1750 hours in the area of WT 977698.
            </p>
            <p>
              On February 04, 1967, the battalion conducted S&D operations in the area surrounding their night base. At 0910 hours Company B discovered an uncompleted base camp at WT 976706. At 1520 hours, Company C engaged 2 VC at WT 996693, killing both. Among the items found with the bodies were 7 rounds of 57mm HEAT ammunition and a tripod.
            </p>
            <p>
              On February 05, 1967, at 0812 hours, an ambush patrol from Company A located at WT 969696 received fire from across the Tonle Roti River, which marked the border between Cambodia and South Viet Nam. The ambush returned fire into Cambodia, resulting in 2 VC being killed. One body fell into the river and the other was dangling in a tree. The ambush continued receiving fire from inside Cambodia until 0830 hours when they were retrieved by Company A.
            </p>
            <p>
              At 1006 hours, Company A departed the battalion base camp following Company B. At 1025 hours Company C departed the base camp enroute to link up with the 4/31st Infantry. At 1033 hours Company A received small arms fire from their left flank. The fire was returned with unknown results. At 1244 hours, Company A passed through Company B and assumed the lead. At 1335 hours in the area of WT 983666, Company A became involved in a fire-fight with a force of unknown size. They began receiving RPG-2 fire, rifle grenades and small arms fire. 2 APCs were hit by RPG-2 fire and one detonated a mine. Contact was broken at 1735 hours. Two Bobcats were killed and 18 were wounded in the fire-fight. As elements of Company A were searching the trench line area of the fight, a sniper shot and killed one Bobcat.
            </p>
            <p>
              The battalion established a new base camp at WT 996665. All elements closed the base by 1937 hours.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <li>
                  <a href="http://175thengineers.homestead.com/BridgeGadsdenVietnam.html" target="_blank">
                    Photographs from the 175th Engineers from this day
                  </a>
                </li>
                <li>
                  <a href="http://175thengineers.homestead.com/bridgerepair.html" target="_blank">
                    More related material from the 175th Engineers
                  </a>
                </li>
              </ul>
            </div>
            <p>
              On February 06, 1967, while conducting S&D operations in the area, elements of the battalion discovered a VC base camp and hospital at WT 988682. Documents found identified units of the Staff Directorate of COSVN. Several dead VC were located during the operations along with some radio equipment, weapons and ammunition.
            </p>
            <p>
              On February 07, 1967, Company B departed the battalion forward base to examine the area of WT 995685 after a B-52 strike. Company A and Company C(-) conducted S&D operations in the area of WT 9868. At 1405 hours Company A received fire from an estimated VC platoon resulting in one Bobcat wounded. At 1425 hours, Company A again made contact with the VC, who were wearing kakhi uniforms. At 1450 hours contact was broken but again reestablished at 1501 hours in the area of WT 964670. Air strikes were placed into the area where the VC were firing from. After the air strikes, Company A moved into the area and discovered VC bodies and a cache of 18 tons of rice. All elements closed the battalion forward base at WT 995664 by 1906 hours.
            </p>
            <p>
              On February 08, 1967, the battalion commenced operations "in accordance with the rules governing the TET truce period."  At 1035 hours Company A discovered VC bodies at WT 982666.  5 had been killed by small arms fire, 4 were in a bomb crater and 1 was in a covered bunker.  At 1335 hours, Company B received 3 rounds of small arms fire. At 1540 hours, in the area of WT 010688, Company B received automatic weapons fire from an unknown number of VC. Fire was returned with organic weapons. One Bobcat from Company B was killed in the initial exchange of fire. All elements closed the battalion forward base for the night.
            </p>
            <p>
              On February 10, 1967, an LP outside the battalion perimeter received 1 hand grenade at 0207 hours with negative casualties. At 1315 hours the Recon Platoon received 10 rifle grenades in the area of WT 989650. There were negative casualties and fire was returned with unknown results.  In the area of WT 995670, elements of the battalion located a very sophisticated training area consisting of 44 structures and fortifications, 2 class rooms, 2 mess halls, and a 75 X 30 meter rifle range complete with silouette targets.
            </p>
            <p>
              On February 12, 1967, Companies B and C departed the battalion base at 0730 hours and secured an LZ at FSB Delta in the area of WT 0364. The 2/1st Infantry was airlifted into the LZ. At 0949 hours the battalion headquarters and Company A departed the forward base and established a new battalion forward base at WT 984616. At 1140 hours, Companies B and C departed FSB Delta and closed the new battalion forward base at 1620 hours. During the evening 7 rifle grenades were received into the base.
            </p>
            <p>
              On February 13, 1967, at 0815 hours, the battalion commenced S&D operations in the area of WT 9962.Elements discovered several VC base camps and an ordnance factory at WT 986642. It contained bombs, artillery rounds, hand grenades and tools and molds for manufacturing explosive devices. That night the battalion forward base received 5 rounds of mortar fire.
            </p>
            <p>
              On February 14 and 15, 1967, the battalion continued S&D operations in the area of WT 0256 and 0358. On February 15th, seventeen rounds of 60mm mortar fire was received.
            </p>
            <p>
              On February 16, 1967, the battalion broke camp at 0730 hours and moved to the bridge site at XT 0559. Lead elements crossed the bridge at 0800 hours and the battalion continued movement southeast to Tay Ninh, where they closed at 1330 hours.
            </p>
            <p>
              War Zone C was located north of Tay Ninh City bounded on the north and the west by the Cambodian border. This area was a confirmed VC stronghold. The entire area was characterized by dense forest, with numerous enemy bunkers, tunnels and base camps. On February 22, 1967, the 2nd Brigade of the 25th Infantry Division, began Operation Junction City Alternate. The 2nd Brigade area of operatons was a portion of War Zone C which was heavily wooded and in which no US units had operated in for over a year. It was known that the area contained a lot of bunkers and base camp areas.
            </p>
            <p>
              On February 22, 1967, the 1/5th(M) began Operation Junction City Alternate by moving from the area of Trai Bi at XT 1170 to secure FSB Pershing at XT 1375, which was some 3000 meters southeast of the junction of Highways 22 and 247.
            </p>
            <p>
              On February 23, 1967, the battalion established a forward base at XT 151765, just to the north of Highway 247 and 5000 meters east of Highway 22. Elements of the battalion located a base camp of 5 bunkers and 15 structures north of the battalion forward base. 2 APCs detonated AT mines resulting in 5 Bobcats being wounded. One Bobcat from Company A died of his wounds.
            </p>
            <p>
              On February 24, 1967, elements of the battalion located two base camps containing arms, ammunition and supplies. During the day, 12 Bobcats were wounded and 1 APC was damaged when VC were engaged at XT 166804. The VC employed command detonated mines. 3 of the VC killed in the exchange were identified as members of the 272nd VC Regiment.
            </p>
            <p>
              On February 25, 1967, while further searching a VC base camp located on the 24th at XT 154834, an unknown number of VC were engaged. Among the items found in the base camp area after the fire-fight were 300 rounds of 105mm artillery ammunition.
            </p>
            <p>
              On February 27, 1967, the 1/5th(M) moved to secure FSB Foche for the emplacement of the 1/8th Artillery and the 2nd Brigade forward command post.
            </p>
            <p>
              On February 28, 1967, the battalion conducted S&D operations around and also provided security for the fire support base.
            </p>
            <p>
              During February 1967, eleven Bobcats died in Viet Nam. They Were:
            </p>
            <!-- <p>
              Ervin L. Laird; Jackson Thomas; Paul T. Short Jr.; Marco J. Baruzzi; Raymond F. Demory; James E. Bostock; Joseph M. Brady; Henry R. Lopez; Jack M. Secrest Jr.; and Landon C. Ray.
            </p> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 2)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <div class="oneMonth" data-section="mar">MARCH</div>
            <p>
              On March 01, 1967, the battalion conducted S&D operations to the north and east of FSB Foche, which was located approximately 18 kilometers southwest of Katum. At 0952 hours, an APC detonated an AT mine resulting in nine Bobcats being wounded and moderate damage to the APC. To the east, elements engaged an unknown number of VC, killing 2 and capturing 1. Five Bobcats were wounded in the exchange of fire.
            </p>
            <p>
              On March 02, 1967, Companies A and B conducted S&D operations to the northeast of FSB Foche. An enemy base camp was located and destroyed at XT 165880. Company C provided security for the fire support base.
            </p>
            <p>
              On March 03, 1967, Company A provided security for the base while Companies B and C conducted S&D operations in the area.
            </p>
            <p>
              On March 04, 1967, the battalion provided security for the air extraction of the 2nd Brigade Headquarter's forward elements from the fire support base. At 1300 hours the 1st Battalion(M) 5th Infantry was attached and OPCON to the 11th Armored Cavalry Regiment.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map14.jpeg" target="_blank">
                  <li>Map 14 "French Fort."</li>
                </a>
              </ul>
            </div>
            <p>
              On March 05, 1967, a Bobcat from Company B was killed by shrapnel when the battalion forward base received a 120 round 60mm and 82mm mortar barrage.
            </p>
            <p>
              On March 13, 1967, a Bobcat from Company C was shot and killed.
            </p>
            <p>
              On March 14, 1967, the 1/5th(M)(-) became OPCON to the 196th Light Infantry Brigade. At 1830 hours the battalion(-) closed the "French Fort", located 7 kilometers north of Nui Ba Den at XT 2868.
            </p>
            <p>
              On March 15, 1967, the battalion units conducted local S&D operations and escorted convoys in the area of the French Fort. At 1300 hours the battalion established a command post about 3 kilometers northwest of the French Fort at XT 267734. At 1635 hours, the Recon Platoon was escorting a convoy north on Highway 4 when the lead APC was struck by an RPG-2 round near XT 273722. Two Bobcats were wounded. At 1640 hours an APC from Company B was hit by an RPG-2 round in the same area. Four Bobcats were wounded and one died of his wounds later in the day. The fire was returned with SA and AW fire with unknown results.
            </p>
            <p>
              At 2000 hours the Cu Chi Base Camp received 50 rounds of 82mm mortar fire and 25 rounds of 75mm recoilless rifle fire.
            </p>
            <p>
              On March 16, 1967, between 0135 and 0200 hours, 150 rounds of 60mm, 82mm mortar and 75mm RR rounds were received on the 196th LIB command post located at the French Fort. 4 men were killed and 22 were wounded. One of those killed was a Bobcat at the battalion's rear supply area, which was also located at the fort. 2 Bobcats from the unit were also among the wounded.
            </p>
            <p>
              Units of the battalion cleared and secured roads and then conducted convoy escort from the junction of Highways 4 and 247, south to the French Fort. At 1320 hours, the Recon Platoon located an AT mine in the road at XT 270766 and blew it in place.
            </p>
            <p>
              On March 17, 1967, the 1/5th(M) conducted S&D operations east of Highway 4. At 1600 hours, Company C, 1/5th(M) became OPCON to the 2/34th Armor. Company C, 2/34th Armor became OPCON to the 1/5th(M).
            </p>
            <p>
              On March 18, 1967, the battalion(-) conducted S&D operations west to XT 193726 and at 1530 hours the battalion established a forward base at that location. At 1415 hours, a convoy being escorted by elements of Company B. A command detonated mine was set off against one of the vehcles in the convoy. At 1600 hours, the Recon Platoon was escorting a convoy on Highway 4, south from Prek Klok, when a vehicle was struck by a burst of automatic weapons fire. Fire was returned and gunships were employed with unknown results.
            </p>
            <p>
              On March 19, 1967, units of the battalion conducted S&D operations in the area. Cross attachment with the 2/34th Armor was terminated at 1330 hours. One Bobcat from Company C was accidentally killed. All units closed the new battalion forward base located at XT 238726 by 1700 hours.
            </p>
            <p>
              On March 20, 1967, the Recon Platoon and Company C(-) conducted convoy escort from Soui Da to Prek Klok after clearing and securing the highway. Companies A, B and C(-) conducted S&D operations in the area. Company A had one APC hit a large mine at 1045 hours at XT 241805.  Five Bobcats were wounded and dusted off. All units closed the battalion command post by 1650 hours.
            </p>
            <p>
              On March 21, 1967, the battalion conducted road security and S&D operations in the area.
            </p>
            <p>
              On March 22, 1967, the Recon Platoon with personnel from the 169th Engineers cleared and secured the road from the "French Fort" to the Soui Da turnoff. Company A conducted S&D operations north to the 82 grid line. Companies B and C conducted S&D operations east of Highway 4. At 0825 hours, an APC from Company A hit an AT mine resulting in one Bobcat being wounded.  At 0850 hours, Company C had an APC detonate a mine at XT 273744 resulting in eight Bobcats being wounded. At 1130 hours, an APC from Company A hit a mine at XT 245815. Four Bobcats were wounded. All elements closed the battalion forward base, now located at XT 255755, by 1700 hours. One of the wounded Bobcats from Company A died of his injuries.
            </p>
            <p>
              On March 23, 1967, Company A provided security for the battalion base. Company B and part of Company C conducted S&D operations in the area. The Recon Platoon and part of Company C conducted road security and convoy escort operations.
            </p>
            <p>
              On March 24, 1967, the Recon Platoon conducted road security and escort on Highway 4 from the "French Fort" to the Soui Da turnoff. Company B remained at the battalion base for security. Company C secured a drop zone for a resupply airdrop. Company A screened and blocked from XT 3074 to 3076.
            </p>
            <p>
              On March 25, 1967, Recon Platoon and one platoon from Company C cleared and secured the roadway and escorted convoys. At 1305 hours, one platoon from Company C secured a drop zone at XT 267786. The drop was 90% effective. 10% was damaged and recovered. One platoon from Company C secured a crossing site while the 175th Engineers implaced an AVLB. Companies A and B crossed the bridge and conducted S&D operations from XT 3180 to 3178. There was negative contact and units closed the new battalion base at Prek Klok by 1900 hours.
            </p>
            <p>
              On March 26, 1967, the Recon Platoon and one platoon from Company A were assigned route clearing and convoy escort duty from Prek Klok to Soui Da. The battalion(-) established blocking positions in coordination with sweeps made by the 3rd Brigade, 4th Infantry Division. At 1120 hours, an APC from Company B struck a mine at XT 295737. One Bobcat was wounded. At 1300 hours, one platoon from Company A secured a drop zone for a resupply drop at XT 269711.
            </p>
            <p>
              On March 27, 1967, the Recon Platoon went to the "French Fort" and escorted the 3/13th Artillery to Prek Klok, closing at 0925 hours. Companies A and C departed the base at 0730 hours. At 1155 hours an AVLB was placed across the stream at XT 310804. Elements then conducted S&D operations east to XT 355933. Elements of Company B secured a drop zone for two resupply drops. One was at 1230 hours and the other at 1600 hours.
            </p>
            <p>
              On March 28, 1967, the battalion began operations to secure areas for two new fire support bases. Companies A and C secured the first, untill they were relieved by the 4/31st Infantry at 1115 hours. Company B and the Recon Platoon secured the 2nd area at Katum. While enroute Company B had an APC detonate a mine resulting in extensive damage to the track and one Bobcat wounded. At 1611 hours the battalion CP, Companies A, C and the Recon Platoon(-) closed the fire support base at Katum. Company B secured a resupply drop zone and remained there for the night. Recon Platoon(-) secured an AVLB at XT 289865.
            </p>
            <p>
              On March 29, 1967, the battalion secured an LZ for the airlift of the 2/1st Infantry Battalion from the "French Fort."  The 1/5th(M) then conducted local S&D operations and closed the new Battalion base at XT 276935, some 5000 meters northwest of Katum and 6000 meters south of the Cambodian border.
            </p>
            <p>
              On March 30, 1967, Companies A and B conducted S&D operations in the area, and the Recon Platoon conducted a reconnaissance of the area.  Company C departed the battalion base to escort a convoy from Prek Klok. At 1134 hours, one APC from the Recon Platoon detonated an AT mine at XT 278914. At 1340 hours Company C engaged an unknown size enemy force at XT 249779. Two APCs were hit by 57mm recoilless rifle rounds. One of them was struck in the rear ramp with two rounds. Six Bobcats were wounded. Gunships overhead gave covering fire and contact was broken. The battalion established a new base at XT 281969, only 1500 meters south of the Cambodian Border.
            </p>
            <p>
              On March 31, 1967, Companies A, B, and C conducted S&D operations to the west of the battalion base. The Recon Platoon remained in reserve with the battalion command group. Company A made a brief contact at 0830 hours, exchanging small arms fire with negative results.
            </p>
            <p>
              At 1034 hours, Company B had one APC struck by an RPG-2 round at XT 229973. The fire was received from a trench line less than 1,000 meters south of the Cambodian Border. At 1052 hours while searching the area, Company B received more RPG-2 fire with negative hits. The area was taken under fire with 81mm mortars and organic weapons fire. At 1059 hours, 2 Company B APCs were hit by RPG-2 rounds. At 1125 hours, another APC was hit by RPG fire. Contact was broken at 1140 hours. At 1345 hours, Company B made contact in the same general area. One APC was hit by RPG fire, and contact was immediately broken. In all, four Bobcats from Company B were killed and 16 were wounded.
            </p>
            <p>
              At 1645 hours an APC from Company C hit an AT mine, resulting in 4 Bobcats being wounded. All units closed the battalion base by 1815 hours.
            </p>
            <p>
              During March 1967, ten Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Gerald J. Breen</li>
              <li>Jerry L. Borgens</li>
              <li>James P. Vadbunker</li>
              <li>Robert S. Liszcz</li>
              <li>Viril L. Austin</li>
              <li>Charles M. Douglas</li>
              <li>Kenneth L. Breshears</li>
              <li>Charles C. Dickey Jr.</li>
              <li>Gary F. Schuler</li>
              <li>John A.Todi</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 3)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <div class="oneMonth" data-section="apr">APRIL</div>
            <p>
              On April 01, 1967, Companies A and B conducted S&D operations in the area without enemy contact. Company C secured the battalion forward base while the Recon Platoon secured a drop zone for a resupply drop.
            </p>
            <p>
              On April 03, 1967, the battalion conducted S&D operations in the area. At 1337 hours, Company A engaged some VC at XT 210945. A check of the area resulted in locating 23 60mm mortar rounds and 23 82mm mortar rounds, along with documents and miscellaneous equipment.
            </p>
            <p>
              On April 04, 1967, at 1400 hours, an APC from Company C hit a mine. After striking the mine the APC was hit by a LAW fired from a bunker. Six Bobcats were wounded. At 1550 hours, while searching an area some 8,000 meters due west of Katum, an APC from Company A detonated an AT mine at resulting in five Bobcats being wounded. At 1558 hours, Company A located a communications wire line at XT 240906. While checking the line, an unknown number of VC opened fire with small arms and automatic weapons fire. Fire was returned and the VC broke contact at 1615 hours. One Bobcat from Company A was killed and one was wounded in the exchange of fire.
            </p>
            <p>
              On April 05, 1967, the battalion conducted S&D operations in the area of XT 1582, 1588, 2182, 2188, with negative contact. The Recon Platoon conducted convoy escort for Battery B, 2/35th Artillery.
            </p>
            <p>
              On both April 06 and 07, the battalion conducted S&D operations without contact.
            </p>
            <p>
              On April 08, 1967, the 1/5th(M) secured an LZ for the extraction of the 2/1st Infantry. The battalion then moved overland to Tay Ninh.
            </p>
            <p>
              From April 09, 1967 to April 21, 1967, the 2nd Brigade participated in in an operation in Gia Dinh Province with the mission of interdicting VC supply routes to and from the Saigon area.
            </p>
            <p>
              On April 22, 1967, the 1/5th(M) began another operation in one of their favorite “homes away from home.”
            </p>
            <p>
              Operation Manhattan had the objective of destroying VC elements, supplies and bases in the Ho Bo Woods, the Boi Loi Woods and along the Saigon River. The 2nd Brigade area of operations was the lower Boi Loi and Ho Bo Woods area.
            </p>
            <p>
              An after action report stated "It apperared from the start that the VC had been forwarned of the operation. There was plain evidence that the VC, shortly before the operation began, had deliberately and unhurriedly evacuated the area. They employed AT and AP mines and booby traps along with 2 and 3 man sniper teams to delay friendly forces."
            </p>
            <p>
              One Bobcat from the Recon Platoon was killed when an APC detonated a mine.
            </p>
            <p>
              On April 23, 1967, the 1/5th(M) secured an LZ in the area of XT 5331 for the 1/27th Infantry. The battalion also secured routes of communication. Three APCs detonated AT mines resulting in two Bobcats from Company C being killed and three wounded.
            </p>
            <p>
              On April 24, 1967, the battalion conducted S&D operations in the area of XT 5131 without enemy contact.
            </p>
            <p>
              On April 25, 1967, the battalion continued S&D operations in the area. An APC from Company A detonated an AT mine resulting in one Bobcat being killed and eight others being wounded.  Only a few bunkers were located and destroyed during the day.
            </p>
            <p>
              On April 26, 1967, units of the battalion continued S&D operations. At 1410 hours Company B came upon a VC who was in the process of setting up a Chicom Claymore mine at XT 520324. He was killed in the exchange of fire. The area of the Boi Loi was once again heavily booby-trapped. Eight Bobcats were wounded during the day.
            </p>
            <p>
              On April 27, 1967, units of the battalion located an underground VC hospital complex. Again mines and booby traps were encountered in the area of operations. One Bobcat was killed and fifteen were wounded during the day.
            </p>
            <p>
              On April 28 and 29, 1967, the battalion continued operations in the same area with no enemy contact. Some bunkers and tunnels were located and destroyed. On April 29, the battalion assumed responsibility for the security of engineer activities in the area.
            </p>
            <p>
              On April 30, 1967, the battalion minus Company C conducted S&D operations from XT 538338 to the Saigon River and back without contact.
            </p>
            <p>
              Company C was attached to the 1/27th Infantry. At 1005 hours the unit made contact at XT 578285, while conducting a sweep. The units remained in a fire-fight until 1115 hours, at which time the VC broke contact after friendly artillery was employed. One Bobcat from Company C was killed and two were wounded during the encounter.
            </p>
            <p>
              During April 1967, seven Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>James K. Lindsey</li>
              <li>James P. English</li>
              <li>Stephen L. Colopy</li>
              <li>James L. Russell</li>
              <li>Gary L. Doose</li>
              <li>Rom Worley</li>
              <li>Gene D. Smith</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 4)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <p>
              For the Quarterly Reporting Period of  February 01, 1967 thru April 30, 1967 the 25th Infantry Division(-) reported the following: KIA- 116; WIA- 1,239; MIA- 0; NBD- 8; NBI- 46.
            </p>
            <p>
              Use of highways by convoys continued to be the primary mode of resupply to Cu Chi, Tay Ninh and Dau Tieng base camps. During the last three months there were 448 convoys between Saigon and Cu Chi. Between Cu Chi, Tay Ninh and Dau Tieng there were 172 convoys.
            </p>
            <p>
              Since July 1966 there have been 27 VC agents taken into custody from among the division base camp’s indigenous work force.
            </p>
            <p>
              There continued to be a critical shortage of Infantry and Artillery NCOs in grades E-5 and E-6.
            </p>
            <div class="oneMonth" data-section="may">MAY</div>
            <p>
              On May 01, 1967, the1/5th(M)(-) conducted local S&D operations without contact. Company C remained attached to the 1/27th Infantry.
            </p>
            <p>
              On May 02, 1967, the battalion conducted S&D operations in the area of XT 5333 and also provided resupply convoy escort.
            </p>
            <p>
              On May 03, 1967, the 1/5th(M) commenced a two day sweep of the Ho Bo Woods. At 0925 hours, Company A made contact with an unknown number of VC at XT  604267.  Four Bobcats from Company B were killed when an APC hit a mine. There was intermittent contact throughout the day.
            </p>
            <p>
              On May 04, 1967, the battalion continued the sweep through the Ho Bo. Six Bobcats were killed during the day by mines and booby traps; four from Headquarters Company, one from Company A and one from Company B.
            </p>
            <p>
              On May 05, 1967, elements of the battalion conducted S&D operations in the area and also conducted a road sweep to Trang Bang. There was no enemy contact during the day.
            </p>
            <p>
              On May 06, 1967, the battalion conducted operations in the middle of the Boi Loi Woods in the area of XT 5533. They also secured engineer operations in the area. There was no enemy contact.
            </p>
            <p>
              On May 07, 1967, the battalion continued S&D operations and the securing of engineer activities. At 0840 hours, an APC from the Recon Platoon hit an AT mine. One Bobcat was killed and three were wounded by the explosion.
            </p>
            <p>
              On May 08, 1967, the battalion continued operations without enemy contact.
            </p>
            <p>
              On May 09, 1967, the battalion continued security for engineer activities until 1500 hours. At that time they moved from XT 554337 to the Cu Chi Base Camp, ending their participation in Operation Manhattan.
            </p>
            <p>
              From May 10 thru May 12, 1967, the battalion remained at Cu Chi Base Camp conducting maintenance and preparing for future operations.
            </p>
            <p>
              On May 13, 1967, Company A provided the Cu Chi Base Camp reaction force. Other units of the battalion conducted “roadrunner” operations on Highway 8A, from Cu Chi to Bao Trai and Fire Support Base Nickel, located 3 ½ kilometers east of Bao Trai at XT 565045. This began the battalion’s participation in Operation Kolekole which was concentrated in the areas of Duc Hoa, Bao Tri, Hiep Hoa and Loc Giang as well as along the Oriental River. The operation would “officially” begin on May 14, 1967.
            </p>
            <p>
              On May 14, 1967, elements of the battalion continued roadrunner operations to Bao Trai and also provided security southwest of Bao Trai at XT 527043. At 1225 hours an APC from Company B detonated an AT mine resulting in four Bobcats being wounded. Company A remained the Cu Chi Base Camp reaction force.
            </p>
            <p>
              On May 15 and 16, 1967, the battalion continued roadrunner and security operations in the area of Bao Trai. Company A continued its mission of base camp reaction force.
            </p>
            <p>
              On May 17, 1967, the battalion(-) conducted S&D operations in the area of Ap Dong Hoa(3),  7 kilometers west of Bao Trai near the Oriental River. There was no enemy contact.
            </p>
            <p>
              On May 18, 1967, the 1/5th(M)(-) conducted S&D operations south, north and northwest of Bao Trai.  At 1450 hours the Battalion Commander’s APC detonated an AT mine on Highway 10, one kilometer north of the junction of Highway 7A. One Bobcat was killed and four were wounded.
            </p>
            <p>
              On May 19 and 20, 1967, the battalion(-) continued S&D operations to the east of Bao Trai in the area of  XT 5604. On the 20th, Company C assumed the role of Cu Chi Base reaction force. One Bobcat from Company C was killed by small arms fire.
            </p>
            <p>
              On Sunday, May 21, 1967, the 1/5th(M)(-) along with the 1/27th Infantry(-), conducted a cordon and search of  Ap Duc Ngai (1), located north of Bao Trai, with no enemy contact. One Bobcat from Company C was killed by an explosive device during the day.
            </p>
            <p>
              On May 22, 1967, the battalion conducted cordon and search operations with the 1/49th Infantry(ARVN) east of Bao Trai in the area of XT 5903. They then conducted S&D operations from that area to FSB/PB Nickel with negative enemy contact.
            </p>
            <p>
              On May 23, 1967, the battalion(-) conducted roadrunner operations during the hours of darkness. During daylight they remained at FSB/PB Nickel.
            </p>
            <p>
              From May 24 to 31, 1967, the battalion conducted roadrunner, search and destroy, cordon and search and security operations in the Bao Trai area with light, intermittent enemy contact.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map15.jpeg" target="_blank">
                  <li>Map 15  Duc Hoa area</li>
                </a>
              </ul>
            </div>
            <p>
              During May 1967, fourteen Bobcats died in Viet Nam. They were:
            </p>
            <!-- <p>
              James H. Flickinger; Chester G. Jordan; Glendell Morgan; Lee H. Russ; Thomas A. Brynelsen; John S. Cartwright; Ralph W. Crytzer Jr.; Jack R. Lenner; James N. Law; William E. McGinnis II; Daniel M. Kasten; Ronny L. Palmer; Mack E. Gregory;  and David A. Haraldson.
            </p> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 5)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <div class="oneMonth" data-section="jun">JUNE</div>
            <p>
              From June 01, 1967 to June 06, 1967, the battalion continued a variety of operations in the Bao Trai, Duc Hoa and Cu Chi areas.
            </p>
            <p>
              On June 02, 1967, Company C had an ambush patrol out. An APC from Company C was on road patrol near the ambush site and hit an AT mine. The track was flipped over onto its top. After the explosion, the ambush patrol went to the APC to help the wounded and secure the area. The platoon sergeant was lying next to the track with both his legs pinned underneath it. The driver was dead in the driver’s hatch.
            </p>
            <p>
              On June 07, 1967, the battalion(-) conducted roadrunner operations between Bao Trai and Cu Chi on Highway 8A.  An APC from Company B hit a mine and burned. Six Bobcats were killed. Two of the bodies burned inside the track and could not be recovered until later in the day. Elements of the battalion also conducted a seal and search of Tho Mo on Highway 10, between Bao Trai and Duc Hoa. Elements also continued security missions in the area.
            </p>
            <p>
              From June 08, 1967 to June 13, 1967, the battalion continued various types of operations in the same general area. On June13, a “County Fair” Operation was conducted at Thoi Moi (1), southeast of Bao Trai.
            </p>
            <p>
              On June 14, 1967, the battalion conducted roadrunner operations in the vicinity of Bao Trai. Company C conducted combined security operations with one platoon of the 2/49th Infantry (ARVN) on the road running between Duc Lap and Duc Hoa. An APC from Company C detonated a mine. Two Bobcats were killed by the blast.
            </p>
            <p>
              On June 15, 1967, the battalion conducted local security operations in the vicinity of Bao Trai. Company C worked the road between Duc Lap and Duc Hoa with the 49th Infantry (ARVN).
            </p>
            <p>
              On June 16, 1967, Company A conducted road security operations with the 49th ARVN Infantry. The battalion(-) conducted a cordon and search in the area of Tho Mo, located on Highway10 about halfway between Bao Trai and Duc Hoa.
            </p>
            <p>
              On June 17, 1967, Company C conducted a combined sweep operation of the FSB Nickel perimeter along with an ARVN MI squad.  The remainder of the battalion conducted security operations.
            </p>
            <p>
              On June 18, 1967, the 1/5th(M) along with the 1st and 2nd Battalions of the 27th Infantry conducted a cordon and search operation of Giong Lon, located southeast of Bao Trai at XT 6102.
            </p>
            <p>
              On June 19, 1967, Company B conducted road security operations with elements of the 2/49th ARVN Infantry. The remainder of the battalion conducted local security operations.
            </p>
            <p>
              On June 20, 1967, the Recon Platoon conducted road clearing operations on Highway 8A south of Cu Chi, along with one platoon of ARVN Soldiers from the 2/49th Infantry. The battalion(-) conducted a sweep between Highways 8A and 9A, moving from the southwest to the northeast.
            </p>
            <p>
              From June 21, 1967 to June 30, 1967, the battalion continued operations in the area of Bao Trai and FSB Nickel. The units of the battalion conducted combined operations with various elements of the Army of the Republic of Viet Nam. On June 24, there was a ceremony celebrating the reopening of Highway10 between Duc Hoa and Bao Trai. On the 29th of June units of the battalion conducted “Eagle Flights” to four landing zones east of Bao Trai with negative enemy contact.
            </p>
            <p>
              During June 1967, Eight Bobcats died in Viet Nam. They were:
            </p>
            <!-- <p>
              Everdene Baker Jr.; Harris V. Davis; William L. Evans; Rex A. LaDuke;  Luis E. Milan-Anavitarte; Kenneth P. Newton; Robert L. Holland;  and Joseph H. Urmann.
            </p> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 6)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <div class="oneMonth" data-section="jul">JULY</div>
            <p>
              From July 01, 1967 to July 09, 1967, the battalion concentrated its operations to the southeast of Bao Trai. Numerous combined operations were conducted with elements of the ARVN 49th Infantry. Airmobile combat assaults were made with no enemy contact, however, enemy fortifications were located and destroyed.
            </p>
            <p>
              On July 10, 1967, the battalion shifted its operations to the northwest of Bao Trai, along the Oriental River.
            </p>
            <p>
              On July 12, 1967, the battalion conducted S&D operations in the area bounded by Highways 6A, 10, 7A and the Oriental River. Company A located and destroyed 55 bunkers. Company B located and destroyed 9 bunkers, one tunnel and several booby traps.
            </p>
            <p>
              On July 13, 1967, the battalion encountered light and sporadic enemy contact in the area of Loc Giang, located southeast of the road junction of Highways 10 and 6A. Two Bobcats were wounded by small arms fire and dusted off.
            </p>
            <p>
              At 2135 hours Cu Chi Base Camp came under mortar attack. 16 rounds of 82mm Mortar fire impacted in less than one minute. 15 soldiers were wounded.
            </p>
            <p>
              On July 14, 1967, at 0720 hours one Bobcat from Company B was wounded when an anti-personnel mine was detonated north of Highway 6A between Loc Hua and the Oriental River. At 0721 hours, an APC from Company A detonated an AT mine with negative casualties.
            </p>
            <p>
              At 0745 hours, one Bobcat from Company A was killed and two were wounded when a man stepped on a mine near Loc Thuan. At 0900 hours, Company C suffered four wounded when two booby traps were detonated. Elements of the battalion located and destroyed numerous booby traps during the day.
            </p>
            <p>
              On July 15, 1967, while working the same area, Company B located a munitions cache. Among the items found were 60 81mm mortar rounds, 43 60mm mortar rounds and 32- 2.75inch rockets.
            </p>
            <p>
              From July 16 thru 19, 1967, the battalion conducted S&D operations in the area of Loc Giang. On July16, a search operation was conducted with the Trang Bang Regional Forces Company. Elements of the battalion provided security for engineer activities in the area.
            </p>
            <p>
              On July 24, 1967, the battalion continued local security and S&D operations in the Loc Giang area. Companies A and B had light enemy contact. At 2000 hours Company B suffered four wounded when an AT mine was detonated.
            </p>
            <p>
              At 2328 hours, Dau Tieng Base Camp received 70 82mm Mortar rounds impacting inside the base perimeter and 30 rounds impacting outside the perimeter. One aircraft was destroyed and 24 received substantial damage. 50 personnel were wounded.
            </p>
            <p>
              From July 25 to July 31, 1967, the battalion continued working the Loc Giang area. Security was provided to engineer and artillery activities in the area. S&D operations were conducted along the Oriental River. On July 26th, Company A suffered two wounded when a booby trap was detonated at 1115 hours in the area of XT 435175, north of Highway 6A.
            </p>
            <p>
              At 1320 hours, another man from Company A was wounded from a booby trap in the same general area. On July 27th, airmobile combat assaults were made on the east and west sides of the Oriental River. On July 28th, Company C had one man wounded from a booby trap explosion. On July 29th, four airmobile combat assaults were conducted by units of the battalion along with one Company of CIDG personnel from Hiep Hoa. Enemy contact was light and scattered. On July 30th, elements of the battalion continued to provide security for engineer and artillery activities in the area. Three Bobcats from Company C were wounded when a booby trap was detonated. On July 31st, S&D operations continued in the area.
            </p>
            <p>
              During July 1967, one Bobcat died in Viet Nam. He was:
            </p>
            <!-- <ul>
              <li>Guillermo Munoz</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 7)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <p>
              For the Quarterly Period of May 01, 1967 to July 31, 1967 the 25th Infantry Division reported the following: KIA: 123;   WIA: 1331;   MIA: 0;   DOW: 15;   NBD: 8;   NBI: 93.
            </p>
            <p>
              There continued to be a shortage of approximately 50% of the authorized Infantry NCOs in grades E-5 and E-6 for the Division.
            </p>
            <p>
              Convoys: Cu Chi to Saigon – 202</br>
              Saigon to Cu Chi – 176</br>
              Cu Chi to Tay Ninh / Dau Tieng – 176</br>
            </p>
            <p>
              The 25th Infantry Division Quartermaster Bath Unit reported that “extensive support” was given to the 1st Bn(M), 5th Infantry and to the 4th Bn, 9th Infantry during field operations this reporting quarter.
            </p>
            <p>
              A summary of enemy activities noted that VC activities for the Quarter consisted mainly of harassing attacks and tactics (Mines, booby traps, ect). These were directed toward delaying operations that were in support of rural development. There were also many acts of assassination and kidnapping against the civilian populace.
            </p>
            <div class="oneMonth" data-section="aug">AUGUST</div>
            <p>
              On August 01, 1967, security for engineer and artillery activities continued to be provided by units of the battalion. S&D operations were conducted in the Loc Giang area and an airmobile combat assault was made into an LZ 4 kilometers south of Trang Bang.
            </p>
            <p>
              On August 02, 1967, airmobile combat assaults were made into three different landing zones southeast of Loc Giang along route 10. Enemy contact was light and 2 VC were killed. Security for the activities of engineer and artillery units in the area was provided by units of the battalion.
            </p>
            <p>
              On August 04, 1966, at 1025 hours, a grenade factory was located 1 kilometer north of highway 6A, along the Oriental River at XT 406169. At 1420 hours, a second grenade factory was located several hundred meters to the northeast of the first location.
            </p>
            <p>
              On August 05, 1967, the 1/5th(M)(-) conducted a cordon and search operation in the area of Loc Binh which is located 1 kilometer southeast of the junction of Highways 10A and 6A. That evening at 2145 hours three Bobcats were wounded by enemy mortar fire.
            </p>
            <p>
              On August 06, 1967, at 1430 hours, a munitions factory was located in the area of XT 419180. This was only a couple of hundred meters north of the grenade factories located on August 4.
            </p>
            <p>
              On August 07, 1967, at 1530 hours, a large ammo cache was located in the area of XT 404169, near the banks of the Oriental River.
            </p>
            <p>
              The battalion continued to provide security for engineer and artillery units in the area. On August 9th, Company C had one man wounded from a booby trap. On August 10th, combat airmobile assaults were made into 5 different LZs. Contact was light. At 1145 hours, Company A had 4 men injured by a charging water buffalo in the area of XT 4713. On August 11th, S&D operations continued in the area. At 1215 hours, the Recon Platoon had an APC detonate an AT mine causing two Bobcats to be wounded. On August 12th, a munitions cache containing 268 Chicom grenades, 12 grenade launchers and assorted small arms ammunition was located at XT 414172. Again, this was in the same general area as the munitions factories that had been located earlier in the month. On August 13th, at 0630 hours, a Bobcat from Company C was wounded by a booby trap and dusted off. On August 16th, a small weapons cache was located along the Oriental River at XT 397184. Company C engaged four VC on August 17th and killed all four. At 1241 hours on August 18th, Company A located a weapon’s cache at XT 432146. At 1545 hours Company C located a weapon and ammunition cache at XT 430127.
            </p>
            <p>
              On August 19, 1967, elements of the battalion continued to secure engineer work areas and to provide security for artillery units. At 0515 hours, an ambush patrol from the Recon Platoon that was set up on the Oriental River had one man evacuated with a gunshot wound.
            </p>
            <p>
              On August 20, 1967, elements of the battalion conducted airmobile combat assaults into eight different landing zones. Contact was light and sporadic.
            </p>
            <p>
              On August 22, 1967, at 1100 hours a Chieu Hoi directed the Recon Platoon to a location were several weapons were discovered. At 1425 hours another Chieu Hoi led Company C to a 1,400 pound rice cache at XT 453147.
            </p>
            <p>
              On August 24, 1967, an ambush patrol from Company C engaged a motorized sampan on the Oriental River at 0255 hours, sinking the boat. Elements of the battalion conducted airmobile combat assaults. At 1040 hours, Company A suffered two Bobcats wounded from a booby trap at XT 459039.  Within the next hour the company located 3 small caches in the same area, containing small arms and mortar ammunition.
            </p>
            <p>
              On August 25, 1967, the battalion continued Eagle Flights in the Loc Giang area. That afternoon, 11 detainees and 1 VC POW were apprehended and turned over to Vietnamese authorities.
            </p>
            <p>
              On August 26, 1967, the Recon Platoon was led to a tunnel at XT 412165 by the VC POW of the previous day. One Chicom carbine and 200 rounds of ammunition were found inside the tunnel located several hundred meters north of Highway 6A. Eagle Flights were conducted to an area where a Chieu Hoi stated that a weapons cache was located. No cache could be found.
            </p>
            <p>
              On August 28, 1967, at 1535 hours, Company C with the assistance of a Hoi Chanh located and destroyed 2 tunnels and 4 hidden spider holes. At 1900 hours, a Company C ambush patrol engaged 2 sampans and 5 VC on the Oriental River at XT 406143. The sampans, loaded with cargo were sunk and the VC were killed in the engagement.
            </p>
            <p>
              On August 29, 1967, the battalion continued to provide security for engineer elements working on Highway 10 and also conducted S&D operations in the area.
            </p>
            <p>
              On August 30, 1967, the Recon Platoon engaged and sunk a sampan on the river. Elements also assisted S-2 personnel in apprehending a female who was identified by Hoi Chanhs as a VC nurse.
            </p>
            <p>
              During August 1967, no Bobcats died in Viet Nam.
            </p>
            <div class="oneMonth" data-section="sep">SEPTEMBER</div>
            <p>
              On September 01, 1967, the 1/5th(M) conducted S&D operations in the Loc Giang area and provided security for engineer work areas and artillery units. Three Bobcats from Company C were wounded when a booby trap was detonated at 0925 hours near Loc Hoa at XT 419180. Company A was led to a tunnel by a Hoi Chanh near Xom Mia at XT 453163. Several weapons and a US Claymore mine were located in the tunnel. At 1700 hours, Company C went OPCON to Task Force Hodson.
            </p>
            <p>
              On September 02, 1967, elements of Company B conducted an airmobile combat assault to an LZ at XT 414149. Company A apprehended some detainees near XT 4417.  One platoon from Company B secured a bridge about 5 kilometers west of Trang Bang at XT 453191 during the night. Company C, while OPCON to TF Hodson, conducted security operations in the sugar cane fields near XT 438078.
            </p>
            <p>
              On September 03, 1967, at 0023 hours, the platoon from Company B securing the bridge site received one round of mortar fire. The 1/5th(M)(-) conducted S&D operations in the Loc Giang area as part of the election security for the Republic of Viet Nam. Company C conducted security and S&D operations as part of TF Hodson.
            </p>
            <p>
              On September 04, 1967, elements of the battalion conducted S&D operations in the Loc Giang area. One platoon from Company B remained at the bridge site as security. Company C remained OPCON to TF Hodson and conducted S&D and security operations in the Ap Dong Hoa area.
            </p>
            <p>
              On September 05, 1967, Company C returned to battalion control at 0800 hours. Operations continued in the Loc Giang area.
            </p>
            <p>
              On September 07, 1967, the battalion conducted S&D, saturation patrolling and security operations. At 1237 hours, the Recon Platoon apprehended a female detainee who was later identified as a VC intelligence agent. At 1415 hours, an APC from Company A detonated an AT mine. Four of the nine Bobcats who were wounded were dusted-off.
            </p>
            <p>
              On September 08, 1967, Company A and the Recon Platoon conducted “Bushmaster” operations. Security for engineer and artillery activities was continued. Airmobile combat assaults were also conducted. At 1310 hours, a Bobcat from Company C was injured when a helicopter crashed due to a lost rotor blade.
            </p>
            <p>
              On September 09, 1967, the battalion continued to provide security for artillery and engineer operations. Day and night ambush patrols were also conducted throughout the area. At 1620 hours, an APC from Company A detonated an AT mine with negative casualties. On September 10th, airmobile combat assaults were conducted with negative contact. On September 11th, the battalion conducted mounted sweep operations as well as dismounted search and destroy operations.
            </p>
            <p>
              On September 12, 1967, elements of the battalion conducted an airmobile combat assault and established a blocking position west of Go Dau Ha at XT 2532. Company A remained in the area of FSB Diane, providing security for engineer and artillery operations. At 1445 hours, one Bobcat from Company C was killed by a “friendly” artillery long round. At 1515 hours, a Hoi Chanh led Company C to a small ammunition cache at XT 252324. By 1800 hours, the battalion- completed airmobile movement back to FSB Diane. The Recon Platoon provided security for FSB Carol located northwest of Go Dau Ha at XT 334357.
            </p>
            <p>
              On September 13, 1967, “Eagle Flights” were conducted by units of the battalion to three LZs. One detainee was taken into custody by Company A at 1545 hours.
            </p>
            <p>
              On September 14, 1967, the battalion continued security operations and also conducted saturation ambush patrolling in the area of Loc Giang. At 0515 hours, an ambush patrol from Company A engaged 2 VC with negative results. At 2220 hours, an ambush patrol from Company A, located 500 meters south of the junction of Highways10 and 6A, received small arms and automatic weapons fire at XT 435157. One Bobcat was killed and two were wounded.
            </p>
            <p>
              On September 16, 1967, Company B returned to Cu Chi Base Camp and assumed the role of base reaction force. Company A continued to provide security for engineer operations at the laterite pit and west of the junction of Highways 1 and 7A. A Hoi Chanh led the Recon Platoon to 5 AT mines and they were destroyed in place. Company C, 2/27th Infantry became OPCON to the 1/5th(M) for security of engineer activities in the Loc Giang area. At 1930 hours, an ambush patrol from Company C, 1/5th(M), engaged and killed 3 VC in a sampan on the Oriental River. Company B, 1/5th(M) went OPCON to the 1st Brigade at 2015 hours.
            </p>
            <p>
              On September 17, 1967, the battalion(-) continued operations in the Loc giang area. Company B was released from OPCON to the 1st Brigade at 1715 hours and continued as Cu Chi Base Camp reaction force.
            </p>
            <p>
              On September 18, 1967, at 0621 hours, an APC from Company C detonated an AT mine. Four Bobcats were wounded and the APC was a combat loss. Company B remained at Cu Chi and the battalion with Company C, 2/27th Infantry continued operations in the Loc Giang area.
            </p>
            <p>
              On September 19, 1967, the battalion(-) conducted security operations and prepared for night saturation ambush patrolling. Company B remained at Cu Chi and provided one platoon to secure engineer operations 6 kilometers northwest of Cu Chi.
            </p>
            <p>
              On September 21, 1967, Co C, 2/27th Infantry provided security for engineer operations in the Loc Giang area. The 1/5th(M)(-) conducted S&D operations and saturation night ambush activities in the area. Company B was still the Cu Chi Base reaction force, but provided one platoon for security of engineer operations. At 0730 hours, an APC from Company B detonated an AT mine near Xom Thap at XT 543169. Two Bobcats were killed and four were wounded.
            </p>
            <p>
              On September 22, 1967, the battalion(-) continued S&D operations and ambush patrolling. Company B provided one platoon for engineer security and remained the Cu Chi Base reaction force.
            </p>
            <p>
              On September 25, 1967, Company B went OPCON to the 1/27th Infantry. The remainder of the battalion conducted S&D operations and night ambush patrols in the Loc Giang area.
            </p>
            <p>
              On September 28, 1967, at 0700 hours, Company B was released OPCON from the 1/27th Infantry and secured Rome Plow operations between Highways 1 and 7A at XT 5416. The 1/5th(M)(-) occupied blocking positions along the Oriental River at XT 4116 and XT 4114.
            </p>
            <p>
              On September 29, 1967, the battalion(-) conducted S&D operations and night ambush activities in the Loc Giang area. Company B continued to provide security for Rome Plow operations.
            </p>
            <p>
              On September 30, 1967, the 1/5th(M)(-) occupied night positions at Fire Support/Patrol Base Diane at XT 424166. During the day they began movement to Cu Chi Base Camp, arriving at 1355 hrs. Company B remained at XT 545155 providing security for Rome Plow operations.
            </p>
            <p>
              The battalion had been in the field for 142 days. It was a long time to be moving through the muck and mud. But it paid off in locating hidded enemy caches. During that time period, the battalion had a policy of using everything and anything that was available to throw at the enemy, before using troops.
            </p>
            <p>
              Ambushes along the Oriental River were very successful. Besides mounting 106mm Recoilless Rifles on one APC in each platoon, 90mm Recoilless Rifles, were used on the ambushes. The men used “short rounds, making for one big shotgun. They would blow a sampan plum out of the water.”
            </p>
            <p>
              During September 1967, four Bobcats died in Viet Nam. They were:
            </p>
            <!-- <p>
              Evaristo Sandoval; Harold J. Canan; Michael A. Roberts; and William E. Swensgard.
            </p> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 9)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <div class="oneMonth" data-section="oct">OCTOBER</div>
            <p>
              From October 01, 1967 to October 07, 1967, the 1st Battalion(M) 5th Infantry remained at Cu Chi Base Camp conducting maintenance on vehicles and equipment.
            </p>
            <p>
              On October 08, 1967, the battalion departed Cu Chi Base Camp and moved to an area 4 kilometers southeast of Trang Bang at XT 537168. Their mission was to establish a fire support / patrol base at that location. Platoon sized S&D operations were conducted in the area during the afternoon.
            </p>
            <p>
              On October 09, 1967, the battalion(-) remained at the fire support / patrol base. Company B and Company C set up separate night base perimeters to the south, one north of  Highway 7A and one South of  Highway 7A. Company A provided one platoon for a Cu Chi Base Camp reaction force. Platoon size S&D operations were conducted in the area. At 2216 hours, an ambush patrol from Company B engaged and killed 3 VC, 1000 meters west of the Company night base.
            </p>
            <p>
              On October 11, 1967, platoon sized S&D operations were continued in the area. Company A again provided one platoon for Cu Chi Base Camp reaction force. At 1930 hours, an ambush patrol from Company B, located 200 meters south of the one that was “tripped” on August 9th, engaged 4 VC, killing two of them.
            </p>
            <p>
              On October 12, 1967, Company A provided one platoon for Cu Chi Base Camp reaction force and one platoon to secure Fire Support Base Martha, located 6 kilometers northwest of Trang Bang at XT 452266. The battalion(-) continued small unit S&D operations.
            </p>
            <p>
              On October 13, 1967, the battalion(-) moved to a blocking position on the Oriental River in conjunction with a combined S&D operation of the 1/27th Infantry and the 49th ARVN Infantry. The battalion(-) returned to their forward base area at XT 546155 by 1800 hours. Company A continued to provide one platoon for Cu Chi Base Camp reaction force and one platoon to secure FSB Martha.
            </p>
            <p>
              On October 15, 1967, platoon size S&D operations were conducted. At 1220 hours, in the area of XT 553143, an APC from Company B exploded an 81mm round that was rigged with a pressure type detonating device. One Bobcat was killed and three were wounded.
            </p>
            <p>
              On October 16, 1967, Companies B and C conducted “Bushmaster” operations at Ap Binh Dong and Thai My along Highway 7A. Company A continued to provide one platoon to secure FSB Martha and one platoon for Cu Chi Base Camp. One Bobcat from the Recon Platoon was killed by a booby trap explosion.
            </p>
            <p>
              On October 17, 1967, units of the battalion conducted S&D operations and a combined operation with the Trang Bang Popular Forces. Company B located 1 tunnel and had light contact, capturing 1 VC POW. Company C established a night base near Thai My and the battalion(-) established a base near Xom Thap.
            </p>
            <p>
              On October 18, 1967, one daylight ambush was deployed. S&D operations were conducted with light contact.
            </p>
            <p>
              On October 19, 1967, Company C provided security for Fire Support / Patrol Base Gertrude located southwest of Thai My at XT 524144. Company A provided one platoon to secure FSB Martha. One Bobcat from Company C was killed by a boobytrap explosion. At 2150 hours, an ambush patrol from Company B engaged three VC, killing one.
            </p>
            <p>
              On October 20, 1967, Company B established a new base area south of Ap Dong Hoa (2) on Highway 7A. Company C provided security for FSB Gertrude and Company A provided security for FSB Joyce, north of Go Dau Ha (XT 383262), until relieved by the Recon Platoon.
            </p>
            <p>
              At 2320 hours, a South Vietnamese CIDG patrol walked into the kill zone of a Company B ambush patrol that was set up on the edge of the sugar cane at XT 458079. Three South Vietnamese soldiers were killed and two were wounded.
            </p>
            <p>
              On October 21, 1967, the battalion(-) conducted platoon size S&D operations. Company A provided one platoon to secure FSB Joyce and the Recon Platoon provided security for FSB Gertrude. Company B remained in the area south of Hiep Hoa and deployed extensive night ambush patrols.
            </p>
            <p>
              On October 22 and 23, 1967, Company B deployed combined ambush patrols with elements of the Hiep Hoa Popular Forces.
            </p>
            <p>
              On October 24, 1967, Company C moved to a new base camp in the area of FSB/PB Sandra located just west of Trang Bang. There they conducted security operations with the 34th ARVN Ranger Battalion, providing protection for engineer activity in the area. The Recon Platoon secured FSB Gertrude.
            </p>
            <p>
              On October 25, 1967, Company C remained at FSB/PB Sandra providing local security with the 34th Rangers. Company B provided one platoon for Cu Chi Base Camp reaction force. Company A provided one platoon for the protection of FSB/PB Marilyn and one platoon to secure culvert construction work by engineers on Highway 7A. The Recon Platoon continued to provide protection for FSB Gertrude.
            </p>
            <p>
              From October 26 to October 30, 1967, units of the battalion continued to provide protection for fire support bases and engineer work activities. Ambush patrols and small unit S&D operations were also conducted.
            </p>
            <p>
              On October 31, 1967, Company B provided one platoon for a reaction force at Cu Chi Base Camp. Company C(-) continued working with the 34th ARVN Rangers in providing protection for engineer construction work. At 1950 hours, an APC from Company A detonated an AT mine on Highway 1 near the intersection of Highway 7A, half way between Cu Chi and Trang Bang. Four Bobcats were killed and two were wounded.
            </p>
            <p>
              During October 1967, seven Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Frank A. Price III</li>
              <li>Junior R. Burns</li>
              <li>Gary P. Polley</li>
              <li>Ralph J. DiPace</li>
              <li>Gregory G. Hubbard</li>
              <li>John C. Steer</li>
              <li>Robert W. Larison</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 10)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <div class="oneMonth" data-section="nov">NOVEMBER</div>
            <p>
              On November 01, 1967, elements of the battalion continued to protect engineers working at a culvert site near Xom Thap. Company C worked with the 34th ARVN Rangers securing the roadways in the area of Bao Trai. Ambushes were deployed. (Always).
            </p>
            <p>
              On November 02, 1967, the battalion continued to provide protection for engineer activities. At 1550 hours, one Bobcat from Company B was wounded when he detonated a booby trapped hand grenade. At 1950 hours, the Recon Platoon received harassing sniper fire with negative casualties.
            </p>
            <p>
              On November 03, 1967, at 0235 hours, the Recon Platoon received 30 rounds of enemy mortar fire. Two Bobcats were wounded. Company C continued to work with the 24th ARVN Rangers securing Highway 10 between Bao Trai and Duc Hoa. Protection also continued for the engineers working near Xom Thap. At 2130 hours, a listening post from Company A engaged one VC with unknown results.
            </p>
            <p>
              On November 06, 1967, the 1/5th(M) went OPCON to the 1st Brigade, 25th Infantry Division.
            </p>
            <p>
              On November 11, 1967, a Bobcat from Company C was killed by an explosion. This individual carried a Chicom grenade around with him that he had found. This day a dud artillery round was located and he was going to attempt to detonate the dud using the Chicom grenade. He activated the fuse and the grenade exploded, killing him. It had been rigged with an instantaneous fuse.
            </p>
            <p>
              On November 15, 1967, two Bobcats from Headquarters Company were killed in a mortar attack on the battalion night forward base camp. A third Bobcat from Company C died from multiple fragmentation wounds.
            </p>
            <p>
              On November 17, 1967, the battalion was released from OPCON to the 1st Brigade at 0600 hours. One platoon from Company B was assigned to protect FSPB Janet, located in the northeastern edge of the Filhol at XT 703207. The battalion(-) provided security for Rome Plow operations in the area of Thai My at XT 5415.
            </p>
            <p>
              On November 19, 1967, the 1/5th(M)(-) continued to protect Rome Plow operations. Units also provided protection, along with elements of the 34th ARVN Rangers, for engineer activities along Highway 10 between Dong Hoa(2) and Loc Thanh. At 2102 hours, an ambush patrol from Company C exchanged small arms fire with an estimated 5 VC with negative casualties. At 2205 hours, an ambush patrol from Company C, located along Highway 10, fired on a small group of VC with a 106mm Recoilless Rifle, killing one. Company B(-) provided security for an engineer ferry crossing site on the Saigon River at XT 712209.
            </p>
            <p>
              On November 20, 1967, the battalion forward base remained in the area of Thai My at XT 545155. Company C(-) provided security along Highway 10. Two squads from Company C were assigned to protect FSB Sandra. At 2015 hours, an ambush patrol from Company B engaged 2 VC in a sampan on the Saigon River. Using a 106mm RR, they killed the VC and sank the boat. At 2145 hours, the same ambush, located at XT 712211, killed another VC.
            </p>
            <p>
              On November 21, 1967, Company B provided one platoon for Cu Chi Base Camp security patrol. One platoon was assigned to protect FSB Janet. The remainder of the company provided security for Rome Plow operations in the area of Thai My. Company A provided one platoon to secure an engineer culvert construction site on Highway 7A, at XT 557157. Company C continued operations along Highway 10 until 0800 hours. At that time they commenced movement to Cu Chi Base Camp, closing at 1015 hours.
            </p>
            <p>
              On November 22, 1967, Company C remained at Cu Chi Base Camp as base reaction force. One platoon from Company A continued to protect the engineer culvert site on Highway 7A. The remainder of Company A secured Rome Plow operations. One platoon from Company B secured FSB Janet and the remainder of the company provided protection to the engineer ferry crossing site on the Saigon River at XT 702210.
            </p>
            <p>
              On November 24, 1967, Company A continued to provide protection for engineer and Rome Plow activities. Company B sent one platoon to Cu Chi for base camp reaction force; one platoon to secure FSB Janet and the remainder of the company secured the ferry crossing site on the Saigon River. Company C provided 2 squads to secure FSB Sandra. The remainder of Company C secured motor movement along Highway 10 from Loc Thanh to Dong Hoa.
            </p>
            <p>
              On November 26, 1967, Rome Plow clearing operations were completed and the 1/5th(M)(-) moved to Cu Chi Base Camp, arriving at 1600 hours. Company B(-) continued protecting the ferry crossing site and 2 squads from Company C secured FSB Sandra.
            </p>
            <p>
              On November 27, 1967, at 1200 hours, Company C went OPCON to the 1st Brigade, 25th Infantry Division. The battalion(-) remained at Cu Chi Base.
            </p>
            <p>
              On November 30, 1967, the battalion(-) remained at Cu Chi. Company C remained OPCON to the 1st Brigade. Company B assigned one platoon to secure an engineer ferry crossing site.
            </p>
            <p>
              During November 1967, five Bobcats died in Viet Nam. They were:
            </p>
            <!-- <p>
              Robert W. Larison;
              Anderson Turner;
              Lorinzer P. Clark Jr;
              Jimmie L. McMorris;
              Otis T. Smith.
            </p> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 11)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <div class="oneMonth" data-section="dec">DECEMBER</div>
            <p>
              On December 01, 1967, the 1/5th(M) went OPCON to the 1st Brigade, 25th Infantry Division and ended their participation in Operation Kolekole.
            </p>
            <p>
              Statistical data for units when they were involved in Operation Kolekole which “officially” terminated on December 07, 1967, was:
            </p>
            <p>
              Unit  KIA WIA DOW NBI</br>
              1/5th(M): 27 206 1 27</br>
              1/27th Inf: 69 418 10 23</br>
              2/27th Inf: 47 237 2 18</br>
              4/23rd(M):   1   13 1 1</br>
            </p>
            <p>
              From December 01, 1967 to December 07, 1967, the battalion participated in the close of Operation Barking Sands with the 1st Brigade. Operation Barking Sands involved pacification and Rome Plow clearing in Cu Chi and Trang Bang Districts of Hau Nghia Province.
            </p>
            <p>
              From December 08, 1967 to December 19, 1967, the 1st Battalion(M) 5th Infantry was OPCON to the 25th Infantry Division. The battalion operated in the northern part of Tay Ninh Province, providing road security and protection for engineer work projects.
            </p>
            <p>
              On December 13, 1967, one Bobcat from Company C was killed when the APC he was in was hit by an RPG round. He was an RTO, who spent time the night before taking care of personal matters as if he sensed something was going to happen.
            </p>
            <p>
              On December 16, 1967, the battalion forward base camp was located near Highway 22 at XT 079839, about 8 kilometers north of Highway 247.  At 1100 hours, an estimated platoon sized VC force struck from the west and southwest and southeast. Approximately 20 to 30 rounds of RPG-2 were fired along with AK-47 fire. At 1120 hours, the VC broke contact. Two Bobcats from Company C were killed and 16 were wounded. Two other Bobcats from Company C burned to death inside an APC that was hit by an RPG-2. Their remains had to be removed by Graves Registration personnel. 2 APCs were destroyed in the attack. The VC had 3 men killed by body count.
            </p>
            <p>
              At 1415 hours, a tank that had hit a mine was stripped and destroyed in place.
            </p>
            <p>
              From December 20, 1967 to December 23, 1967, the battalion was OPCON to the 1st Brigade, 25th Infantry Division.
            </p>
            <p>
              During December 1967, five Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Gene F. Lee</li>
              <li>Michael T. Collins</li>
              <li>Edward A. Finlay</li>
              <li>James Y. Hidalgo</li>
              <li>Kenneth D. Kralick</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 12)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentLinks">
            <div class="linkBox">
              <div class="linkTitle learnMore">LEARN MORE</div>
              <ul class="linkContent">
                <a href="{{ url('/history/album/gwot') }}">
                  <li>Photo Album</li>
                </a>
              </ul>
            </div>
            <div class="linkBox">
              <div class="linkTitle externalLink">EXTERNAL LINKS</div>
              <ul class="linkContent">

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop

@section('vietnam_1968_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_12">
        <div data-button="jan" data-year="1968">
          <div data-button="jan" data-year="1968">January</div>
        </div>
        <div data-button="feb" data-year="1968">
          <div data-button="feb" data-year="1968">February</div>
        </div>
        <div data-button="mar" data-year="1968">
          <div data-button="mar" data-year="1968">March</div>
        </div>
        <div data-button="apr" data-year="1968">
          <div data-button="apr" data-year="1968">April</div>
        </div>
        <div data-button="may" data-year="1968">
          <div data-button="may" data-year="1968">May</div>
        </div>
        <div data-button="jun" data-year="1968">
          <div data-button="jun" data-year="1968">June</div>
        </div>
        <div data-button="jul" data-year="1968">
          <div data-button="jul" data-year="1968">July</div>
        </div>
        <div data-button="aug" data-year="1968">
          <div data-button="aug" data-year="1968">August</div>
        </div>
        <div data-button="sep" data-year="1968">
          <div data-button="sep" data-year="1968">September</div>
        </div>
        <div data-button="oct" data-year="1968">
          <div data-button="oct" data-year="1968">October</div>
        </div>
        <div data-button="nov" data-year="1968">
          <div data-button="nov" data-year="1968">November</div>
        </div>
        <div data-button="dec" data-year="1968">
          <div data-button="dec" data-year="1968">December</div>
        </div>
      </div>
    </div>
    <div class="allSegments">
      <div class="timeSegment vietnamLogSegment" data-section="1968">
        <div class="segmentContent">
          <div class="backBttn">
            <a href="{{ url('/history/timeline') }}">
              <div><< HISTORY</div>
            </a>
          </div>
          <div class="segmentTitle"><u>Vietnam, 1968</u></div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="jan">JANUARY</div>
            <p>
              On January 01, 1968, TF 1/5th(M) was released from OPCON to the 1st Brigade. The battalion held a defensive posture and conducted security patrolling in the northwest portion of the Michelin Rubber Plantation in the area of XT 520522.
            </p>
            <p>
              On January 02, 1968, at 1200 hours, the 1/5th(M) became OPCON to the 2nd Brigade, 25th Infantry Division. Company C of the 3/22 Infantry and Company B of the 4/23rd(M) became attached to the 1/5th(M). The task force conducted a road march to a new night location, southwest of Highway 22 and 247.
            </p>
            <p>
              On January 03, 1968, Company A provided security for a Fire Support Base located at XS 728926. An APC from Company A detonated an AT mine killing three Bobcats and wounding several others. The remainder of the task force conducted RIF operations in the area.
            </p>
            <p>
              On January 04, 1968, TF 1/5th(M) conducted cordon and search operations in the area of Binh Hanh at XS 7197 and 7296. The Recon Platoon provided security for the battalion forward base.
            </p>
            <p>
              On January 05, 1968, the task force conducted cordon and search operations in the area of XS 7303. One Bobcat from company A died in hospital from the wounds he received on January 03.
            </p>
            <p>
              On January 06, 1968, TF 1/5th(M) conducted RIF operations in the area of XT 7200. One Popular Forces Company blocked along the road on the north side of the village. APCs from the 1/5th(M) blocked on the south and the west.
            </p>
            <p>
              On January 07, 1968, combined RIF operations were conducted with two Popular Forces platoons from Tam Binh District in the area of XS 728953 and 723915.
            </p>
            <p>
              On January 08, 1968, at 1100 hours, the 1/5th(M) became OPCON to the 3rd Brigade, 25th Infantry Division. The battalion then conducted a road march to Dau Tieng.
            </p>
            <p>
              On January 09, 1968, Companies C and D of the 3/22nd Infantry became OPCON to the 1/5th(M). The battalion remained at Dau Tieng.
            </p>
            <p>
              On January 10, 1968, the battalion conducted cordon and search operations in the Michelin Plantation in the area of XT 520497. At 1145 hours, three Bobcats from Company C were wounded when a booby trapped hand grenade was detonated.
            </p>
            <p>
              On January 11, 1968, the 1/5th(M) Task Force continued daylight patrolling in the Michelin Plantation. At 1043 hours Company D, 3/22nd Infantry engaged one VC at XT 534475. During a sweep of the contact area one short wave radio, a map with positions plotted, one bicycle and miscellaneous documents were located. Two Bobcats from Company B were killed by shrapnel from an explosion.
            </p>
            <p>
              On January 12, 1968, elements of the Task Force continued company size operations in the Michelin Plantation, primarily in the area of XT 5252. At 0755 hours, Company A received 5 RPG rounds along with small arms and automatic weapon fire in the area of XT 436448 in the Ben Cui Rubber Plantation. Fire was returned with unknown results. One tank and two APCs received minor damage. One Bobcat was wounded. At 1320 hours, Company C 1/5th(M) and Company D 3/22nd Infantry conducted a cordon and search of Ap Chanh(2) located at XT 518518 with negative results. At 1528 hours, Company C received 5 or 6 rounds of 60mm mortar fire in the area of XT 522518. One Bobcat was killed. The enemy fire was returned with mortars and a helicopter LFT with unknown results. At 1759 hours, Company C located and destroyed a tilt rod mine.
            </p>
            <p>
              On January 13, 1968, units of the task force conducted S&D operations in the “Michelin” with no enemy contact.
            </p>
            <p>
              On January 14, 1968, the battalion and its attachments continued S&D operations in the Michelin Rubber Plantation. At 1406 hours Company C received sporadic automatic weapons fire in the area of XT 545487. The AW fire was returned with artillery shelling with unknown results.
            </p>
            <p>
              On January 15, 1968, company size operations continued in the Michelin. At 0840 hours Company C received four 60mm mortar rounds and automatic weapons fire in the area of XT 554537.  Artillery was fired at the suspected enemy positions with unknown results. Two Bobcats from Company C were killed in the action.
            </p>
            <p>
              On January 16, 1968, the battalion continued sweep operations in the plantation. On January 17th, Company C, 1/5th(M), established a blocking position while Companies C and D of the 3/22nd Infantry conducted an airmobile combat assault. At 1020 hours, Company C, 1/5th(M) made contact with an unknown sized VC force. They killed three VC by body count and suffered one Bobcat wounded.
            </p>
            <p>
              On January 18, 1968, Company D, 3/22nd Infantry was released OPCON from 1/5th(M) and was airlifted to FSB Burt. Company B, 3/22nd Infantry was air lifted to Dau Tieng and became OPCON to the 1/5th(M). Company C, 3/22nd Infantry remained OPCON to the 1/5th(M).
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map16.jpeg" target="_blank">
                  <li>Map 16 Dau Tieng and Michelin Rubber Plantation</li>
                </a>
                <a href="../../../images/history/albums/vietnam/maps/map17.jpeg" target="_blank">
                  <li>Map 17 Dau Tieng and Michelin Rubber Plantation</li>
                </a>
              </ul>
            </div>
            <p>
              On January 19, 1968, elements of the task force conducted S&D operations in the Michelin Plantation and the area south of Dau Tieng. At 1723 hours, an APC from Company B, which was escorting a convoy on Highway 239 through the Ben Cui Rubber Plantation, was hit by an RPG round. Two Bobcats were killed instantly. While attempting to get the driver out of the damaged APC, another Bobcat from Company B was shot and killed. He had run over to the track that got hit, jumped on top and grabbed a hold of the driver, who had been wounded and was attempting to pull him out. A shot rang out and he fell off the track, into the ditch and died before anyone got to him. The bullet had hit him in the side.
            </p>
            <p>
              From January 20, 1968 to January 22, 1968, the task force continued operations in the Dau Tieng area.
            </p>
            <p>
              On January 23, 1968, at 0600 hours the 1/5th(M) was relieved from OPCON to the 3rd Brigade. At 1015 hours, the battalion became OPCON to the 1st Brigade and departed the 3rd Brigade area of operations.
            </p>
            <p>
              On January 27, 1968, the 1/5th(M)(-) was released from OPCON to the 1st Brigade, 25th Infantry Division.
            </p>
            <p>
              On January 29, 1968, at 0500 hours, the 1/5th(M) became OPCON to the 3rd Brigade. The battalion secured a fire support base northeast of the intersection of Highways 19 and 13 in the area of XT 384626. They then prepared to link up with the 2/22nd(M).
            </p>
            <p>
              On January 30, 1968, the battalion forward base was located near the intersection of Highways 19 and 13 at XT 371630. Units of the battalion provided convoy security between Tay Ninh and Loc Ninh. Elements also conducted defensive patrolling in the area.
            </p>
            <p>
              On January 31, 1968, the 1/5th(M)(-) was released from OPCON to the 3rd Brigade and became OPCON to the 1st Brigade. Company B, 1/5th(M) remained OPCON to the 2/34th Armor. At 2144 hours, an intelligence report indicated that there were 800 VC heading for Tay Ninh market.
            </p>
            <p>
              During January 1968, 12 Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Harry B. Bartholomew</li>
              <li>James L. Scherer</li>
              <li>Paul R. Striepe</li>
              <li>Bruce J. Moran</li>
              <li>Larry F. Kujawa</li>
              <li>Leonard H. Snead Jr.</li>
              <li>Bernard C. Mattson</li>
              <li>Harry J. Boston</li>
              <li>Brian T. Cady</li>
              <li>Charles E. Davis</li>
              <li>Michael P. Halpin</li>
              <li>Jack J. Kupferer</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 1)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <p>
              For the Quarterly Period ending January 31, 1968 the 25th Infantry Division reported the following:
            </p>
            <p>
              Friendly casualties - KIA: 344;  WIA: 1,259;  MIA: 0;  NBD: 17;  NBI: 168.
            </p>
            <p>
              There was a shortage of Infantry Captains during the Quarter and the shortage of Infantry NCOs continued to be a problem.
            </p>
            <p>
              VC Activity: In November and December 1967 VC activities were primarily directed to delaying and harassment operations. During January 1968, VC offensive activity increased. The large number of attacks by fire are believed to have been conducted to cover the movement of VC forces to the Saigon area. By creating a threat to the base camps, the VC had hoped to restrict allied reinforcing capabilities to the population centers, where their main ground efforts were directed.
            </p>
            <p>
              The main infiltration routes ran, generally, north to south, east to west. The north to south route started in the “Fish Hook” area well north of the 2nd Brigade area of operations and ran south through War Zone C, the Michelin Rubber Plantation, the Trapezoid and down to the Boi Loi and Ho Bo Woods.
            </p>
            <p>
              The east to west started in the “Angel’s Wing” area and forked both northeast and into the Citadel and then southwest toward Saigon on multiple approaches. These infiltration routes were the standard ones used by the enemy prior to the TET Offensive of 1968.
            </p>
            <p>
              Road convoys continued to be the primary method of resupply for the Cu Chi, Tay Ninh, and Dau Tieng base camps. During the Quarter there were:
            </p>
            <ul>
              <li>Cu Chi to Saigon – 182 convoys.</li>
              <li>Saigon to Cu Chi / Tay Ninh – 179 convoys.</li>
              <li>Tay Ninh to Dau Tieng – 178 convoys.</li>
              <li>Tay Ninh to Katum – 48 convoys.</li>
              <li>Tay Ninh to Suoi Dau – 61 convoys.</li>
              <li>Tay Ninh to Hoc Mon – 46 convoys.</li>
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="feb">FEBRUARY</div>
            <p>
              On February 01, 1968, the 1/5th(M)(-) base was located at Tay Ninh West. One platoon  from Company C departed at 1135 hours to provide security for engineers who would be repairing a culvert on Highway 239, west of the Ben Cui. The platoon closed back at the forward base at 1530 hours with negative contact. At 2200 hours, an intelligence report was received from brigade indicating that two VC battalions were located 24 kilometers south of Tay Ninh , 3 kilometers inside South Viet Nam from the Cambodian border.
            </p>
            <p>
              On February 02, 1968, Company B 1/5th(M) was returned to operational control of the battalion. At 0655 hours, a mortar attack was launched on Cu Chi base camp.  The 4/23rd Infantry ammo dump was hit and the resulting explosions destroyed the Bobcat Headquarters and B Company areas. B Company and Headquarters Company mess halls were totaled. Company A and C mess halls were damaged. Two Bobcats were wounded.
            </p>
            <p>
              The battalion moved from West Tay Ninh to a new base location 2 kilometers northeast of Tay Ninh at XT 281528. At 1030 hours, one platoon from Company C left the forward base area to secure an engineer work party who were to repair two bridge sites and install AVLBs on Highway 26, east of Tay Ninh in grid square 3148. Elements from the battalion conducted S&D operations in that area also.
            </p>
            <p>
              On February 03, 1968, at 0710 hours, Company B sent 4 APCs to escort engineer dump trucks to the rock quarry and then to the bridge site. At 0815 hours, the Recon Platoon escorted a convoy to Tay Ninh.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map18.jpeg" target="_blank">
                  <li>Map 18) Tay Ninh area.</li>
                </a>
              </ul>
            </div>
            <p>
              On February 04, 1968, Company A departed the forward base at 0630 hours for operations in the area of grid XT 3256. Company C departed at 0705 hours to provide security for engineer activities and secure convoys. Company B departed at 0747 hours for operations in the area of grid XT 3249. The Recon Platoon provided convoy escort.
            </p>
            <p>
              At 1050 hours an APC from Company C hit a mine on Highway 4, on the north side of Nui Ba Den at XT 284618. Three Bobcats were wounded and dusted off. The APC was a combat loss.
            </p>
            <p>
              On February 05, 1968, elements of the battalion conducted S&D operations in the area 5000 meters east of where Highways 13 and 26 split, east of Tay Ninh. Other units conducted convoy security and provided protection for engineer road repair crews. That night ambushes and listening posts were deployed, as always.
            </p>
            <p>
              On February 06, 1968, the battalion moved to a new forward base area at XT 283509, which was east of Tay Ninh, just north of Ap Phuoc Hoa on Highway 26. Elements of the battalion provided security for a convoy from Tay Ninh to Go Dau Ha and also secured engineer activities in the area.
            </p>
            <p>
              On February 07, 1968, two platoons from Company B departed the forward base at 0645 to begin road clearing operations. Company C provided protection for a convoy traveling from Katum to Tay Ninh.  At 1048 hours, Company C requested that the convoy leader be contacted and advised to have people in the convoy cease firing their M-16s into the wood line along the route, as this was endangering the security elements posted along the route.
            </p>
            <p>
              Elements also provided partial escort for a convoy from Tay Ninh to Cu Chi. One platoon from Company B spent the night providing security for part of the convoy due to mechanical problems with some of the convoy vehicles.
            </p>
            <p>
              On February 08, 1968, elements again provided security for engineer activities and convoy escort and route protection. At 1012 hours, a message from Tropic 6 advised that it may be necessary for the 1/5th(M) to move their forward base south on notice. At 1843 hours, the Recon platoon reported one man wounded by sniper fire, no dust off needed. At 2016 hours, the Tay Ninh ammo dump was hit by a friendly “short round”. At 2131 hours, Company B had two Bobcats wounded from an incoming 60mm mortar round.
            </p>
            <p>
              On February 09, 1968, Company B conducted a RIF of the area, checking for any enemy buildup. Company C conducted convoy and route security. At 1450 hours, Company B was ordered OPCON to the 4/23 and proceeded to join them south of Go Dau Ha. At 1708 hours, Company B reported that one Bobcat received 2nd degree burns over 70% of his body when the radiator on his vehicle blew. At 1720 hours Company B met up with the 4/23.
            </p>
            <p>
              On February 10, 1968, the 1/5th(M)(-) was released from OPCON to the 1st Brigade and went OPCON to the 2nd Brigade. At 1820 hours the battalion(-) closed Cu Chi base camp. At 2326 hours the battalion left Cu Chi base camp and became OPCON to the 3rd Brigade.
            </p>
            <p>
              On February 11, 1968, at 0058 hours, the battalion arrived at a forward base located some 3000 meters northwest of Tan Son Nhut at XS 773993. During the day the battalion was deployed in a blocking position northeast of Tan Son Nhut airfield at XT 833993.
            </p>
            <p>
              On February 12, 1968, the battalion remained in a blocking posture. At 1400 hours, the 1/5th(M) was instructed to set up a new night position at Tan Hiep, located 2000 meters north of Hoc Mon at XT 7406. All units closed the new forward base by 1900 hours. Night ambushes and LPs were deployed.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map19.jpeg" target="_blank">
                  <li>Map 19Tan Son Nhut and Hoc Mon</li>
                </a>
              </ul>
            </div>
            <p>
              On February 13, 1968, Companies B and C departed the perimeter for S&D operations in the area. At 0830 hours, Company B had one mortar APC catch fire and burn out of control. There were no injuries. Units from the Recon platoon secured the vehicle till it finally blew up at 0930 hours. During the search of their respective objective areas Companies B and C located VC bodies, ammo, weapons, equipment and documents. All elements closed the battalion perimeter by 1900 hours.
            </p>
            <p>
              Also on the 13th, a misdirected B-52 strike caused considerable damage to Ap Binh Dong Hamlet at XT 8406. 51 civilians were killed and 93 were injured.
            </p>
            <p>
              On February 14, 1968, The battalion conducted RIF operations. Company B and Company C worked the area east of Hoc Mon. Company A worked the area 6 kilometers south of Hoc Mon. Companies B and C began blowing bunkers they encountered in their respective areas and discovered VC bodies, weapons, equipment, and a number of US weapons and documents.
            </p>
            <p>
              At 1210 hours, Company C reported light contact with an unknown sized enemy force 2 kilometers northeast of Hoc Mon. The fight escalated and an APC from Company C was hit by an RPG and caught fire. Company C requested a dust-off for 3 wounded Bobcats at 1344 hours. At 1436 hours they reported one Bobcat killed. Company B and the Recon platoon reinforced the Company C elements. At 1631 hours, a dust-off was requested for three more wounded Bobcats.   At 1800 hours, tank cannons and artillery were fired to cover an attempt to extract wounded from the contact area. At 1823 hours ,Company C requested a dust-off. Two wounded and one dead Bobcat were placed on this dust-off. At 1855 hours, Companies B and C set up a perimeter. All the wounded were dusted-off. At 2006 hours, it was reported that 6 Bobcats from Company C and one Bobcat from Company B were known to be dead, but that the bodies of six of them had not yet been recovered.
            </p>
            <p>
              On February 15, 1968, an assault was planned into the area of Company C’s previous contact. The area was prepped with Artillery and air strikes during the night. Company B, Company C and Troop B, ¾ Cavalry began the sweep (XT 777045) at 0720 hours. At 0945 hours, the units involved in the sweep reported negative contact. At 1137 hours, five of the MIAs were located at XT 773046. They had been stripped of all weapons and equipment. At 1155 hours, the body of the 6th MIA was located in the burned APC at XT 770045. The vehicle also had been stripped of all weapons. By 1341 hours, all the KIAs were dusted-off. In a search of the area the bodies of several VC soldiers along with equipment and supplies were located. Bunkers found in the area were destroyed. At 1535 hours, 3 Bobcats from Company B were dusted-off with wounds, along with one man from Troop B, ¾ Cavalry.  The battalion command group and the Recon Platoon established a new base area, 6 kilometers south of Hoc Mon at XT 744988, near Tan Thoi Nhut on Highway 236.
            </p>
            <p>
              Company B and Company C along with Troop B, ¾ Cavalry set up a night perimeter in the area of XT 7704, where the day’s sweep had taken place.
            </p>
            <p>
              On February 16, 1968, elements of the battalion task force conducted RIFs in the area west of Hoc Mon. Engineer demolition teams were assigned to each company. At 0900 hours, the Recon Platoon and Headquarters Company(-) departed to establish a new base area. Company B reported destroying approximately 200 bunkers southeast of Hoc Mon at XT 764036. Company C had destroyed approximately 130 bunkers. By 1900 hours, Companies B, C and headquarters had closed the new night position, located 2500 meters southeast of Hoc Mon at XT 781033. The Recon Platoon went OPCON to the 3rd Brigade for the night.
            </p>
            <p>
              On February 17, 1968, The Recon Platoon escorted a convoy from Hoc Mon to the battalion forward base area at 0655 hours. At 0955 hours, Company C received small arms fire and one APC was damaged by a command detonated mine. There were two minor injuries. At 1137 hours, the Recon Platoon was assigned to escort a tank to gate 51 at Tan Son Nhut.
            </p>
            <p>
              At 1230 hours, Company B began receiving heavy sniper fire. At 1245 hours, Company C received small arms and automatic weapons fire. Company B requested a dust-off for one Bobcat shot in the head. At 1340 hours, Company B requested another dust-off for two wounded Bobcats. The two companies continued to attack the hedgerow. At 1445 hours, Company B dusted off 3 more wounded Bobcats. A CS gas drop was delivered into the area at 1558 hours and both companies continued the attack. At 1630 hours, Company C had another APC hit by a command detonated mine. The vehicle was a total loss but there were no casualties. At 1644 hours, another dust-off was requested by Company B. At 1653 hours an APC from Company B was hit by an RPG round. At 1654 hours, two APCs from Company C were hit by RPG rounds. At 1713 hours, the two companies pulled back to allow artillery and mortars to fire into the enemy area. At 1829 hours, Company B received heavy RPG, small arms and automatic weapons fire from XT 756046.
            </p>
            <p>
              Both Companies again pulled back to the new battalion forward base at XT 803046 and airstrikes with 1000 and 750 pound bombs and napalm were called in.
            </p>
            <p>
              In the day’s action there were nine Bobcats wounded and four APC’s taken out of action. Two of the APC’s were total combat losses.
            </p>
            <p>
              On February 18, 1968, several Bobcats were slightly wounded by enemy mortar fire during the night. The morning’s operation was postponed due to lack of fuel for the APCs. At 0820 hours, two platoons from Company C were assigned the mission of providing security for the 1/27th Artillery at their Fire Support Base located at XT 802049. At 1535 hours, CS gas was deployed and Company B, elements of the Recon Platoon and Company A, 2/34th Armor moved towards the objective area. At 1702 hours, the units moved through the area of the previous day’s encounter with negative contact. Some enemy weapons and equipment were located and destroyed. The units closed back to the night base at 1845 hours. Night ambushes were deployed. Company A remained OPCON to the 3rd Brigade.
            </p>
            <p>
              On February 19, 1968, at 0748 hours, the Recon Platoon departed the night base to conduct a RIF of the area along the Cau Sang River, north west of Hoc Mon. At 0800 hours Company B and Company A, 2/34th Armor departed to conduct a RIF of grid 8005. Company C remained at the base as battalion reaction force.
            </p>
            <p>
              At 0900 hours the Recon Platoon had one Bobcat shot in the leg by sniper fire. Three tanks from Company A, 2/34th Armor left Company B and started towards the Recon Platoon area with Company C. At 1052 hours, the Recon Platoon received machine gun fire at XT 768053.  At 1134 hours, one APC from Recon was hit by an RPG round and they started receiving small arms fire from their front and rear. One Bobcat had to be dusted off as light fire teams suppressed the fire. At 1421 hours, Recon requested a dust-off for a Bobcat who lost his hand while loading a mortar tube.
            </p>
            <p>
              Company B started closing the area of contact also. At 1539 hours, Company C requested a dust-off for 7 wounded Bobcats. At 1637 hours, Company C requested another dust-off for 4 wounded Bobcats.
            </p>
            <p>
              By 1708 hours one platoon from Company C had been pinned down and was extracted after three attempts to attack and overtake the enemy position at XT 768050. The VC were well dug in with automatic weapons and RPGs covering a 100 meter front. Four Bobcats were confirmed dead and had to be left when the platoon was extracted. Two were from Company C and two were medics. Company B then attacked on line in an attempt to recover the dead Bobcats. One body was recovered and two more Bobcats from Company C were wounded and dusted-off. All units pulled back to the night base by 1915 hours. Air strikes were called in on the area of contact.
            </p>
            <p>
              On February 20, 1968, Companies B and C and Company A of the 2/34th Armor departed the base area at 0700 hours and started to the area of where the dead Bobcats were located. At 0750 hours, Company C captured a wounded NVA soldier. He stated that there were 3 companies in the area of yesterday’s contact and they were well dug in. At 0800 hours the companies were told to halt their advance.
            </p>
            <p>
              At 0815 hours the Recon Platoon left to escort an engineer element to Cu Chi. At 0832 hours, the Recon Platoon had one man wounded in the ankle by a sniper. After numerous airstrikes, the units continued their movement into the area of the previous contact. At 1700 hours, the Recon Platoon located one of the dead Bobcats. At 1745 hours, Company B located and recovered the other two.
            </p>
            <p>
              On February 21, 1968, the Recon Platoon and Company B conducted searches of the area around the grids XT 7603 and 7604, east of Hoc Mon. Some bunkers were located and destroyed. All elements closed the battalion forward base by 1630 hours.
            </p>
            <p>
              On February 22, 1968, Companies B and C, with tanks attached, conducted S&D operations in the area east of Hoc Mon. At 1420 hours, one platoon from Company B was pinned down by machinegun fire. At 1426 hours, the company started receiving automatic weapons and RPG fire. At 1500 hours a dust-off was requested for numerous wounded. At 1535 hours, another dust-off was requested. Company B also had one Bobcat killed. At 1640 hours, Company B suffered two minor wounded from an artillery short round.
            </p>
            <p>
              Companies B and C with attached tanks joined together at 1815 hours and attacked from south to north at XT 7604. At 1945 hours a “snake” was deployed and detonated by engineers with the units. At 2027 hours, all units had closed the night base perimeter.
            </p>
            <p>
              On February 23, 1968, the Recon Platoon escorted an Engineer element to Hoc Mon at 0650 hours and then returned to the forward base. Companies B and C departed for operations in the area of Grid XT 8006. At 1710 hours, the point man from Company C was killed by a burst of enemy fire from XT 815057. The enemy fire was returned with S/A, mortar and artillery fire. The dead Bobcat was left in place and all units closed the battalion forward base. LPs and APs were deployed.
            </p>
            <p>
              On February 24, 1968, At 0801 hours, Companies B and C departed the forward base. At 1320 hours, after artillery prep was fired, the companies moved into the area of the previous day’s contact. At 1400 hours the body of the dead Bobcat from Company C was located and extracted. All units closed the battalion forward base.
            </p>
            <p>
              On February 25, 1968, the battalion conducted sweeps in the area of grid XT 7905 during the morning. At 1315 hours, Company C departed for Cu Chi to prepare for an operation with the 2/34th Armor. Company B and the Recon Platoon remained at the battalion forward base.
            </p>
            <p>
              On February 26, 1968, Company B and the Recon Platoon deployed daytime ambushes starting at 0442 hours. At 1330 hours Company A, 1/5th(M) returned to battalion control after being OPCON to the 2/27th Infantry. Company A closed the battalion’s forward base.
            </p>
            <p>
              On February 27, 1968, Companies A and B, with tanks attached, departed to conduct sweeps in the area of Grid XT 7604, east of Hoc Mon. At 1310 hours, a large bunker complex was located at XT 765054.
            </p>
            <p>
              On February 28, 1968, at 0007 hours, an ambush patrol from Recon killed one VC. At 0107 hours the same ambush patrol suffered one wounded when it received fire form an unknown size VC force. Sweeps of the area were conducted during the day.
            </p>
            <p>
              On February 29, 1968, Company B, one platoon from Company A and the Recon Platoon, with tanks attached, departed the forward base at 0734 hours for a sweep in the XT 7906 grid area, just south of the Cau Sang River. At 1105 hours, the Recon Platoon established enemy contact. Company B and the Company A Platoon moved to flank the contact. LFTs were called in to work over the area. At 1350 hours, a dust-off was requested for 2 wounded Bobcats. At 1517 hours, the units were reported in heavy contact. At 1530 hours, a dust-off was requested for 5 wounded from the tank support element. At 1645 hours, two Bobcats were killed. One was from Company A and the other was from the Recon Platoon. An airstrike and mortar fires were called in before the bodies could be extracted from the contact area at 1745 hours.
            </p>
            <p>
              At 1026 hours, an APC from Company C, 1/5th(M), while attached to the 2/34th Armor, was hit by two RPG rounds. Two Bobcats were wounded. One of the Bobcats died from his injuries shortly therafter.
            </p>
            <p>
              During February 1968, 16 Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Jose J. Santiago</li>
              <li>David G. Isbell</li>
              <li>David E. Keister</li>
              <li>Earl Mack</li>
              <li>Richard P. Vellance</li>
              <li>Ralph L. Williams</li>
              <li>Roger G. Wilson</li>
              <li>Thomas J. Loback</li>
              <li>Joseph P. Zale</li>
              <li>Joseph T. Gallagher</li>
              <li>Sam W. Stewart</li>
              <li>Kenneth W. Roche</li>
              <li>Bruce J. Dent</li>
              <li>Patricio Maldonado</li>
              <li>Frederick L. Martin</li>
              <li>Edgar C. Spence</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 2)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <p>
              The weaponary of enemy forces, both local and main force, consisted of light and medium equipment. AK-47 Rifles, light machine guns, RPG-2 and RPG-7 launchers and mortars were his primary weapons. Support units were equipped with .51 caliber machine guns and a limited amount of 107 and 122 mm rockets. Mines and booby traps were also deployed and accounted for the majority of casualties.
            </p>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="mar">MARCH</div>
            <p>
              On March 01, 1968, Company C remained OPCON to the 2/34th Armor. Companies A and B searched the area northeast of Hoc Mon at XT7906. The Recon Platoon provided security for the battalion forward base, which was still located 5 kilometers east of Hoc Mon at XT 803048.
            </p>
            <p>
              On March 02, 1968, Companies A and B searched the area attempting to locate sites from which rockets were being fired into the Saigon Military District. This “Rocket Belt” was referred to by the soldiers as “Cape Canaveral.”
            </p>
            <p>
              At 0006 hours, Company C, still OPCON to the 2/34th Armor, received approximately 30 rounds of mortar fire, wounding two Bobcats. At 0908 hours, at XT 748156, Company C received sniper fire. One Bobcat was hit and later died from his wounds. This individual was in the field when he first came to Viet Nam. He was then made company clerk. He had volunteered to go back into the field and was shot by a VC firing from a spider hole. He was due to end his tour on April 18.
            </p>
            <p>
              On March 03, 1968, the battalion(-) continued S&D operations in the area east of Hoc Mon. Company C remained OPCON to the 4/23rd Armor and provided protection for Rome Plow cutting operations at XT 7614.
            </p>
            <p>
              On March 04, 1968, the 1/5th(M)(-) conducted sweeps northeast of Hoc Mon. The bodies of several VC soldiers were located along with RPG and mortar ammunition. Company C continued providing protection for Rome Plow operations.
            </p>
            <p>
              On March 05, 1968, the battalion(-) continued sweeps in the area with scattered light enemy contact.
            </p>
            <p>
              On March 06, 1968, Companies A and B along with the Recon Platoon(-) and Company A, 2/34th Armor conducted a sweep in the area of  XT 7605, northeast of Hoc Mon. At 1604 hours, units made heavy contact at XT 769045. At 1615 hours Company A 2/34th Armor reported one killed and one wounded.
            </p>
            <p>
              A Bobcat from Company B was moving along a tree line when he got shot in the head. Two men from Company B went to check him out to see if they could help him. One of them got shot in the chest and killed, the other was shot and wounded in the leg and hip. The Bobcat shot in the chest only had a few weeks to go before he was to get out of the Army. He had plans to get married as soon as he got out. At 1629 hours, Company B requested a dust-off for 8 Bobcats.
            </p>
            <p>
              Company A was moving with men walking in front of the APCs. They received some sniper fire and turned on line to advance toward the sniper fire. The 3rd Platoon was in the middle and got hit first. An M-60 gunner got shot in the stomach and called out for help. The man next to him turned and got shot in the head. People called for a medic and as the medic advanced he was shot and killed. The soldiers were ordered to pull back, “but the M-60 gunner was still alive.” Air strikes with napalm were called in during the night.
            </p>
            <p>
              At 0755 hours, on March 07, 1968, the body of the dead medic was recovered. At 0821 hours, the bodies of the other two were located. The M-60 gunner was found “with a rosary wrapped around his hands, he probably was praying up to the time he died.”
            </p>
            <p>
              During the contact on March 6th, Company A suffered 8 wounded and 3 killed. Company B suffered 5 wounded and 2 killed. One of the Bobcats killed had only been in Viet Nam for 20 days. One APC had been destroyed and one tank and one APC were damaged. At 1720 hours, all personnel were accounted for and the units closed back to the battalion forward base.
            </p>
            <p>
              Company C continued providing security for Rome Plow operations.
            </p>
            <p>
              On March 08, 1968, the battalion(-) conducted RIFs in the area with negative contact. One Bobcat from Company B died from wounds he had previously received.
            </p>
            <p>
              On March 09, 1968, one platoon from Company A provided security at the Hoc Mon Bridge on Highway 1. The remainder of the task force conducted vehicle maintenance at the battalion forward base.
            </p>
            <p>
              On March 11, 1968, at 0601 hours, an ambush patrol from the Recon Platoon killed one VC. That morning the 1/5th(M) moved their forward base to an area 3 kilometers east of the Cu Chi base camp at XT 695145.
            </p>
            <p>
              On March 12, 1968, the battalion conducted RIF operations northwest of the junction of Highways 8A and 15 in the area of XT 7214 and 7115. Company B located and destroyed 98 rounds of 60mm mortar ammunition. One platoon from Company A continued to provide security at the Hoc Mon Bridge. Company C remained OPCON to the 2/34th Armor and provided road and convoy security on Highway 1.
            </p>
            <p>
              On March 13, 1968, the battalion(-) moved to Cu Chi Base Camp and the proceeded to a new forward base in the northwest corner of the Filhol at XT 640217.  At 1155 hours an APC from the Recon Platoon detonated a mine resulting in one Bobcat being wounded.
            </p>
            <p>
              On March 14, 1968, the battalion(-) conducted RIF operations in the area of XT 6321 and 6421. At 1229 hours, in the northwest area of the Filhol at XT 642219, Company A, moving with men on the ground in front of the tracks, received sniper fire. One Bobcat was shot in the chest and died before a dust-off could get him out.  The men were ordered to take cover as artillery was called in. The artillery rounds mistakenly landed on top of the men of Company A, killing two Bobcats and wounding twenty-three.
            </p>
            <p>
              Also on the 14th, a Bobcat from the Recon Platoon died from the wounds he had received the day before.
            </p>
            <p>
              Company C remained OPCON to the 2/34th Armor and conducted operations in the lower Boi Loi Woods in the area of XT 5726.
            </p>
            <p>
              On March 15, 1968, Companies A and B conducted operations in the northwest area of the Filhol near Bao Trang at XT 637217. At 1410 hours, at that location Company B found an ammunition cache of over 12,000 small arms rounds.
            </p>
            <p>
              One man from Company B passed out while in a well. A second man was lowed into the well with belt links fastened to his own belt. He passed out and the belt broke dropping him into the well. A third man attempted rescue, wearing a gas mask, but he too passed out. He was pulled out and a forth man was lowed in with a gas mask, but he also passed out. A man was lowered down and holding his breath, retrieved the men in the well one at a time.
            </p>
            <p>
              Two of the Bobcats could not be revived and died. A third man died while enroute to hospital on a dust-off.
            </p>
            <p>
              On March 16, 1968, the battalion(-) continued operations in the northwest area of the Filhol. At 1937 hours, in the area of XT 640126, four Bobcats were wounded when 7 rounds of 60mm mortar fire were received.
            </p>
            <p>
              Company C conducted operations in the Ho Bo Woods, still attached to the 2/34th Armor.
            </p>
            <p>
              On March 17, 1968, the battalion continued sweeping operations northwest of the Filhol. At 0835 hours, one tank from Company A 2/34th Armor was hit by an RPG round wounding one man. At 0945 hours, another tank was hit by an RPG round during an engagement in the area of XT 632199. At 1000 hours, a small ammunition cache was located and the items destroyed. At 1810 hours, the Recon Platoon discovered and retained an 81mm mortar tube.
            </p>
            <p>
              On March 19, 1968, The battalion(-), with Company A, 2/34th Armor attached, moved to a new forward base at XT 668235 on the north fringe of the Filhol, along the Saigon River.
            </p>
            <p>
              On March 20, 1968, Companies A and B conducted RIF operations to the area of the junction of the Rach Son Creek and the Saigon River. During the day, miscellaneous items of equipment and ammunition were found and destroyed. At 1450 hours, at XT 675230, units discovered a cache containing 29 rounds of 82mm mortar CS Gas rounds, 13 tons of rice, along with peas, peanuts and beans. The food stuffs were stacked and covered with plastic sheets. Vegetation from the area was placed on top of the plastic in an effort to camouflage the material.  One platoon from Company B and the Recon Platoon remained at the cache site over night. The remainder of Company B and Company A withdrew to the battalion night location.
            </p>
            <p>
              At 1420 hours, four Bobcats from Company C were wounded in a fire fight at XT 629293 in the Ho Bo Woods, while still attached to the 2/34th Armor.
            </p>
            <p>
              On March 21, 1968, an extensive search of the cache site was conducted. Located were 24 mines, 20 mortar rounds, over 200 RPG rounds, over 2500 rounds of small arms ammunition and miscellaneous equipment and weapons. An additional 15 tons of rice, 2 tons of salt and 1000 pounds of canned food were also located.
            </p>
            <p>
              The overall cache site consisted of four different complexes. Almost 100 underground bunkers and tunnels were discovered. One tunnel was 200 meters in length and ran under Highway TL15. Ten pound sacks of CS were placed inside the tunnel complex, spaced about 20 meters apart. All demolition charges and sacks of CS were connected and detonated simultaneously. This method sealed the tunnel, trapping the CS gas inside.
            </p>
            <p>
              By nightfall all the bunkers and tunnels were destroyed and the located material had been transferred to the battalion forward base site.
            </p>
            <p>
              On March 22, 1968, the 1/5th(M) along with Company A 2/34th Armor prepared to move back to Cu Chi Base camp. A convoy of 10 five ton trucks arrived at the battalion forward base and were loaded with the captured material from the cache site. The battalion and the convoy then departed for Cu Chi, closing by 1700 hours.
            </p>
            <p>
              On March 23, 1968, the battalion(-) remained at Cu Chi, preparing for future operations.
            </p>
            <p>
              Company C remained OPCON to the 2/34th Armor.
            </p>
            <p>
              On March 25, 1968, the battalion(-) remained at Cu Chi. One platoon was dispatched to secure engineer operations on Highway 8A.
            </p>
            <p>
              Company C remained OPCON 2/34th Armor. At 1200 hours, the Recon Platoon of the 4/23(M) made heavy contact near Trang Bang at XT 523187.  The platoon suffered 11 killed and 16 wounded. Company C, 1/5th(M) and Company C, 4/23(M) were committed to assist the platoon.
            </p>
            <p>
              On March 26, 1968, the 1/5th(M)(-) departed Cu Chi Base Camp and established a forward base approximately half way between Tan Son Nhut and Duc Hoa at XT 698933.
            </p>
            <p>
              Company C remained attached to the 2/34th Armor and conducted RIF operations in the area of Trang Bang.
            </p>
            <p>
              On March 27, 1968, the battalion(-) conducted a reconnaissance in force operation along the Cau An Ha Canal from XT 683020 to 663940. At 2135 hours, an ambush patrol killed 2 VC.
            </p>
            <p>
              On March 28, 1968, at 0203 hours, an ambush patrol from Company A killed one VC.  During the day, elements of the battalion conducted a reconnaissance in the area of XT 740995. At 1430 hours 400 pounds of rice was located.
            </p>
            <p>
              On March 29, 1968, one company conducted a cordon and search in the area of XT 735982. Other elements conducted a RIF operation in the area of XT 7304 and 7401. That night at 2315 hours, the Recon Platoon engaged 7 VC, killing 6 of them.
            </p>
            <p>
              Company C remained OPCON to the 2/34th Armor and provided security for Rome Plow cutting operations.
            </p>
            <p>
              On March 30, 1968, the Recon Platoon captured one VC in the area of the previous night’s contact. The battalion conducted a RIF operation in the area of XT 7497. At 0755 hours, an APC from Company A detonated an AT mine.
            </p>
            <p>
              The 1/5th(M)(-) was released from OPCON to the 3rd Brigade at the end of the day. Company C continued providing security for Rome Plow cutting operations.
            </p>
            <p>
              On March 31, 1968, at 0700 hours the 1/5th(M)(-) returned to 2nd Brigade control. The battalion(-), with one company of Popular Forces Soldiers from Sa Tan Binh, conducted a combined cordon and search of Vin Loc in the area of XT 7197.
            </p>
            <p>
              Company C remained OPCON to the 2/34th Armor.
            </p>
            <p>
              During March 1968, fourteen Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Charles G. Rehberger</li>
              <li>John L. Haines</li>
              <li>Anthony Patrizi</li>
              <li>Joseph D. Seibert</li>
              <li>Stephen W. Downey</li>
              <li>Larry Munoz</li>
              <li>Guy T. Jones</li>
              <li>Roger W. Letto</li>
              <li>William E. Price</li>
              <li>Raul Robledo</li>
              <li>Sammie R. Sneed Jr.</li>
              <li>Edward A. Lionetta</li>
              <li>David R. Young Jr.</li>
              <li>Paul A. Young</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 3)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="apr">APRIL</div>
            <p>
              On April 01, 1968, the 1/5th(M)(-) with one company of Regional Force Soldiers conducted reconnaissance in force operations in the area of XS 701980.
            </p>
            <p>
              On April 02, 1968, Company B conducted air mobile combat assaults. At 1435 hours, the company engaged an unknown number of VC with organic weapons. 3 VC were killed by body count and two Bobcats were wounded. That evening, elements of the battalion conducted a night ambush with Popular Force Soldiers from Sa Tan Binh District.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map20.jpeg" target="_blank">
                  <li>Map 20) Vinh Loc area</li>
                </a>
              </ul>
            </div>
            <p>
              On April 03, 1968, the Recon Platoon was OPCON to the 2/27th Infantry. Company C, 2/14th Infantry was OPCON to the 1/5th(M).
            </p>
            <p>
              Company B, 1/5th(M) and Company C, 2/14th Infantry conducted combined RIF operations with one Popular Force Platoon in the area of XT 6994.
            </p>
            <p>
              At 1135 hours, an APC from the Recon Platoon detonated an AT mine at XT 5599. Two Bobcats were wounded and the APC was a combat loss.
            </p>
            <p>
              On April 04, 1968, Company C remained OPCON to the 2/34th Armor. The Recon Platoon remained OPCON to the 2/27th Infantry. Companies A and B, with one company of National Police, conducted combined cordon and search operations, of  Ap Tay, Ap Go and Vin Loc.
            </p>
            <p>
              On April 05, 1968, Companies A and B and one company of National Police conducted a combined cordon and search of Cu Lao.
            </p>
            <p>
              The Recon Platoon remained OPCON to the 2/27th Infantry and conducted road clearing operations along Highway 1 from Cu Chi to Hoc Mon.
            </p>
            <p>
              On April 08, 1968, at 0700 hours, the Recon Platoon went OPCON to the 2/14th Infantry. The platoon conducted road clearing and convoy security for the Duc Hoa convoy.
            </p>
            <p>
              Company C, 1/5th(M) remains OPCON to the 2/34th Armor. At 1200 hours, Company D, 2/27th Infantry became OPCON to the 1/5th(M).
            </p>
            <p>
              On April 09, 1968, the battalion forward base was located 10 kilometers west of the City of Saigon, in the area of XS 6993. Company A conducted a RIF operation with 4 platoons of Popular Force Soldiers. Company B, 1/5th(M) and Company D, 2/27th Infantry provided security for the battalion forward base and were on stand-by as the battalion reaction force.
            </p>
            <p>
              On April 10, 1968, at 0700 hours, Company D, 2/27th Infantry was released from OPCON to the 1/5th(M). Company A, 2/34th Armor remained OPCON to the 1/5th(M).
            </p>
            <p>
              At 0800 hours, the battalion conducted a motor march to the area of Vinh Loc to establish a new battalion forward base at XS 727986.
            </p>
            <p>
              Company C, remained OPCON to the 2/34th Armor and conducted road security on Highway 1 from Trang Bang to Go Dau Ha.
            </p>
            <p>
              The Recon Platoon cleared Highway 1 from Hoc Mon to the junction of Highway 7A.
            </p>
            <p>
              From April 11, 1968 to April 15, 1968, units conducted sweeps of the area with South Vietnamese Forces. Company C remained OPCON to the 2/34th Armor and continued highway security operations. The Recon Platoon remained OPCON to the 2/14th Infantry.
            </p>
            <p>
              On April 16, 1968, Company B(-) provided security for the move of two batteries of artillery from the Hoc Mon area to the battalion forward base. At 0925 hours, one Bobcat from Company B was killed when a canister round accidentally detonated.
            </p>
            <p>
              On April 17, 1968, Companies A and B conducted airmobile combat assaults.
            </p>
            <p>
              On April 18, 1968, Company B(-) conducted a Medcap at Vinh Loc Village. The Recon Platoon continued route security of Highway 1.  Company C remained OPCON 2/34th Armor. At 1840 hours, an APC from Company B detonated an AT mine wounding three Bobcats.
            </p>
            <p>
              On April 19, 1968, the battalion(-) moved to a new forward base location at XS 733945, located four kilometers south of Vinh Loc.
            </p>
            <p>
              On April 20, 1968, the 1/5th(M) participated in a multi-battalion cordon and search of Tan Thoi Trung Village, located just south of Hoc Mon. The 2/14th Infantry, 1/27th Infantry and one platoon of MPs from the 25th Infantry Division were the other units involved.
            </p>
            <p>
              Cu Chi Base Camp received 7 rounds of 122mm Rocket fire resulting in 24 soldiers being wounded.
            </p>
            <p>
              On April 22, 1968, the Recon Platoon and Company C remained OPCON to the 2/14th Infantry and the 2/34th Armor respectively.  The Recon Platoon conducted road sweeps along Highway 8A.
            </p>
            <p>
              The battalion(-) conducted combined search and screen operations of personnel and vehicles with Popular Force Soldiers in the area of XS 694910.
            </p>
            <p>
              On April 23, 1968, intelligence information indicated that there would be an attack on Saigon on May 01.  All but two of the 25th Infantry Division’s maneuver battalions were positioned to block the main approaches to Saigon from the west. The 2/22nd(M) and the 2/12th Infantry assumed responsibility for Tay Ninh and Dau Tieng.
            </p>
            <p>
              Company C 1/5th(M) remained OPCON to the 2/34th Armor, 1st Brigade. The Recon Platoon was returned to the control of the battalion. One platoon from Company A, 2/34th Armor remained OPCON to the 1/5th(M).
            </p>
            <p>
              At 0630 hours, the battalion(-) with Popular Force Soldiers conducted a cordon and search of Vin Loc Village. They then established and maintained three checkpoints in the area. At 1503 hours, a mine was detonated wounding one Bobcat from Company A.
            </p>
            <p>
              On April 24, 1968, the battalion conducted a cordon and search / Medcap of Ap Binh Hoa at XS 729935.
            </p>
            <p>
              At 2045 hours, Cu Chi Base Camp received 3 rounds of 60mm mortar fire. The rounds landed in the 1/5th(M) area, wounding six soldiers.
            </p>
            <p>
              On April 25, 1968, the battalion(-) conducted a RIF operation in the area of XS 7194, south of Vin Loc. Three screen and search sites were established with National Police Officers from Duc Hoa District. At 1536 hours, Company B had two Bobcats wounded by a booby trap detonation. Company C remained OPCON to the 2/34th Armor.
            </p>
            <p>
              On April 26, 1968, the 1/5th(M) provided security for Fire Support Base Pike II at XS 702910, located 6 kilometers south of Vinh Loc. Elements of the battalion conducted sweeps in the area and also participated in a cordon and search of Vin Loc Village with Regional Force Soldiers from Tan Binh District. Personnel / vehicle checkpoints were also established and maintained in the area.
            </p>
            <p>
              On April 27, 1968, one platoon from Company A provided security for FSB Pike II. The remainder of Company A and the Recon Platoon provided security for the battalion forward base. A cordon and search of Ap Tan Hoa was conducted with National Police and 25th Infantry Division MPs. Checkpoints were also established throughout the area. At 1950 hours, the Recon Platoon received small arms fire from an unknown number of VC. Fire was returned with unknown results. Two Bobcats were wounded.
            </p>
            <p>
              On April 29, 1968, Company C, still OPCON to the 2/34th Armor, participated in conducting road security on Highway 1 from Go Dau Ha to the Hoc Mon Bridge.
            </p>
            <p>
              The 1/5th(M)(-), with one platoon from the 2/34th Armor and one company of RF soldiers, conducted a cordon and search of Ap Binh Hoa, located 4 kilometers south of Vinh Loc. Check points were also established in the area.
            </p>
            <p>
              On April 30, 1968, two platoons from Company A and one platoon from Company A, 2/34th Armor, conducted a RIF operation in the area of XT 7597, the grid just south of Tan Thoi Nhut. The Recon Platoon provided security for a resupply convoy. Other elements of the battalion established check points in the area in union with Popular Force units.
            </p>
            <p>
              During April 1968, one Bobcat died in Viet Nam. He was:
            </p>
            <!-- <ul>
              <li>James E. Young</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 4)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <p>
              The 25th Infantry Division reported the following losses for the Quarterly Period of February 01, 1968 to April 30, 1968: KIA: 520;  WIA: 1,641;  MIA: 0;  NBD: 18;  NBI: 34.
            </p>
            <p>
              A 25th Infantry Division Intelligence Summary for the Quarterly Period stated:  “VC/NVA activity during February and March consisted of trying to maintain their foothold in the Saigon area. They made a determined attempt to control the areas adjacent to Saigon. After great manpower and equipment loss the enemy withdrew to base areas.
            </p>
            <p>
              The time period of March 15 to April 15 was characterized by little action. This period was used by the enemy to refit and receive replacements.
            </p>
            <p>
              During the last 15 days of April enemy activity reached a peak. Large groups of replacements were identified in the TAOI. Supply caches with large amounts of food, ammunition, and arms were located.”
            </p>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="may">MAY</div>
            <p>
              On May 01, 1968, Company C remained OPCON to the 2/34th Armor. One Bobcat from Company C died from wounds he received during an enemy mortar attack.
            </p>
            <p>
              Two platoons from Company A, one platoon from Company A, 2/34th Armor and one company of Regional Force Soldiers conducted a sweep operation. One platoon from Company A secured the battalion’s forward base area located at XS 733945. Company B established checkpoints in the area of Binh Hung Hoa and Xom Go May. Night ambushes were deployed throughout the area.
            </p>
            <p>
              On May 02, 1968, elements of the battalion task force conducted checkpoint operations and a sweep of Grid XS 7292.
            </p>
            <p>
              Company C, still OPCON to the 2/34th Armor, started the day conducting road clearing and security operations on Highway 1 between Trang Bang and Phuoc My. Later that day, at 1500 hours, while working the area of Highway 237, just northwest of Trung Lap, a booby trapped hand grenade was detonated and wounded two Bobcats from Company C. Both men died from the wounds they received.
            </p>
            <p>
              On May 03, 1968, elements of the battalion conducted sweeps in the area of Ap Cu Lao, 5 kilometers west of Tan Son Nhut, with negative contact. Company A, 1/5th(M) went OPCON directly to 2nd Brigade Headquarters.
            </p>
            <p>
              Company C conducted road security operations in the Trang Bang area.
            </p>
            <p>
              On May 04, 1968, elements of the battalion conducted sweeps of the area and provided security for checkpoints. At 1220 hours, Company A was released back to battalion control.
            </p>
            <p>
              One Bobcat from Company C died from multiple fragmentation wounds.
            </p>
            <p>
              On May 05, 1968, Company B provided security for the battalion forward base area. Other units conducted RIF operations and also established and maintained security checkpoints. At 1300 hours, Company B, 1/27th Infantry became OPCON to the 1/5th(M).
            </p>
            <p>
              Company C remained OPCON to the 2/34th Armor and conducted operations east of Bao Trai, where there had been heavy enemy contact.
            </p>
            <p>
              On May 06, 1968, the 4/23(M) and the 2/34th Armor were sent to reinforce the Bao Trai ARVN garrison, which had been attacked that morning by a three battalion sized enemy force.
            </p>
            <p>
              Company C, 1/5th(M), with the 4/9th Infantry conducted a sweep of the contact area east of Bao Trai and discovered many enemy bodies along with weapons, ammunition and supplies.
            </p>
            <p>
              The Recon Platoon, 1/5th(M) provided security for the resupply convoy. Company C, 1/27th Infantry secured the 1/5th(M) forward base area. Other elements of the battalion conducted RIF operations throughout the area with negative contact.
            </p>
            <p>
              On May 07, 1968, at 2030 hours, the 1/5th(M) Task Force was released from the operational control of the 2nd Brigade, but remained in the area of the Capital Military District.
            </p>
            <p>
              On May 08, 1968, at 0805 hours, Company C, still OPCON 2/34th Armor, killed one VC and captured four others south of Hoc Mon.
            </p>
            <p>
              On May 09, 1968, three Bobcats from Company A were killed when an APC blew up from an accidental internal explosion. Speculation was that somehow a hand grenade accidentally blew up inside the track, causing a large secondary explosion.
            </p>
            <p>
              A Bobcat from Company B was shot and killed later in the day.
            </p>
            <p>
              On May 12, 1968, at 0820 hours, the 1/5th(M)(-) became OPCON to the 1st Brigade and moved from the Capital Military District to the northwest corner of the Filhol (XT 665236) near the Rach Son Tributary of the Saigon River. The battalion(-) deployed security patrols and prepared the night defensive perimeter.
            </p>
            <p>
              Company C, still OPCON to the 2/34th Armor, was conducting a sweep southwest of Vinh Loc near XS 7097, when they encountered an estimated VC platoon hiding in bunkers. Supported by artillery and air strikes, the company over ran the enemy positions.
            </p>
            <p>
              On May 13, 1968, the 1/5th(M)(-) conducted a RIF operation in the Filhol. At 1200 hours, the battalion(-) went OPCON to the 3rd Brigade and began to move to a new location for the night. At 1803 hours, Company A received RPG and small arms fire on its right flank, east of the junction of Highway 7A and Highway 1. Enemy fire was returned with organic weapons. At 1841 hours, Company B received 60mm mortar fire. The enemy broke contact and the battalion(-) established a night position off Highway 1 in the area of Phuoc My.  One Bobcat from Company A was killed and twenty other Bobcats from the battalion were wounded, fourteen of them were dusted-off.
            </p>
            <p>
              Company C remained OPCON to the 2/34th Armor and operated in the Vinh Loc area.
            </p>
            <p>
              On May 14, 1968, at 0720 hours, the battalion(-) started moving north. At 1155 hours, the lead APC for Company A hit an AT mine on Highway 7A, just southwest of Trung Lap. One Bobcat was killed and six were wounded and dusted-off. The APC was a combat loss.
            </p>
            <p>
              At 1530 hours, Company B started receiving small arms, automatic weapons and RPG fire. After an airstrike, Company B started assaulting the contact area. At 1750 hours, the company received two 60mm mortar rounds. By 1800 hours, they overran the contact area, capturing some enemy weapons and finding one VC body.
            </p>
            <p>
              At 1830 hours, the Medic APC from Company A hit a 20 pound mine but only the fuse detonated. At 1855 hours, an APC from Company A detonated an AT mine 3 kilometers northwest of Trung Lap at XT 567238. One Bobcat was killed and three were wounded and dusted-off. The battalion(-) established a night position at XT 565247.
            </p>
            <p>
              On May 15, 1968, the battalion(-), with one platoon from Company A, 2/34th Armor attached, conducted sweeps in the area with light scattered contact.  All units closed the battalion forward base. At 2020 hours, the night base area received nine 82mm mortar rounds. Six Bobcats were wounded and dusted-off. Six ambush patrols were established, all within 400 meters of the base perimeter. At 2250 hours, all three of Company B’s APs reported seeing a light moving to the northeast.
            </p>
            <p>
              On May 16, 1968, at 0038 hours, the night base started receiving small arms and RPG fire. At 0040 hours, one of Company B’s patrols reported that they were returning to the perimeter with 3 casualties. At 0042 hours, one of Company A’s patrols was in direct contact. One of Company B’s APCs on the night perimeter was hit by an RPG round and started burning. Elements returned fire with organic weapons, air strikes and mortars.
            </p>
            <p>
              Two soldiers from the 2/34th were wounded, as were six Bobcats from Company A and eight Bobcats from Company B. Six Bobcats from Company B were killed at their ambush site location. Their bodies could not be retrieved because of the contact.
            </p>
            <p>
              At 0325 hours, patrols were sent out to search the area. At 0500 hours, Company B pulled all their patrols in because of enemy movement in the area.
            </p>
            <p>
              A search of the area in the daylight revealed the bodies of VC soldiers, weapons, ammunition and equipment. Numerous blood trails were also found in the area. The bodies of the six Bobcats from the Company B ambush were retrieved. “Word” circulated amongst the soldiers that the men had apparently fallen asleep and had their throats cut.
              A tracker dog team was brought out to the battalion base area and a detailed search of the area was conducted during the day.
            </p>
            <p>
              Company C remained OPCON to the 2/34th Armor and continued operations in the Vinh Loc area.
            </p>
            <p>
              On May 17, 1968, two Bobcats died from burns they had received previously. One was from Company B and the other was a medic. The battalion(-) conducted RIF operations and moved north to the southern edge of the Boi Loi Woods and established a new forward base.
            </p>
            <p>
              On May 18, 1968, the battalion(-) moved to a new base area at XT 533290, located just off  Highway 6A and 4 kilometers south of Highway 238. Ambush patrols departed the perimeter shortly after 1900 hours. At 2015 hours the ambush patrol from the Recon Platoon reported that they had one man accidentally shot in the foot. He was brought back to the base and dusted-off.
            </p>
            <p>
              An 18 man ambush patrol from Company A returned to the perimeter after expending a good part of their ammunition on an unknown size enemy force they encountered on their way out to their ambush site. They were ordered back out and set up about 300 meters from the perimeter when they again detected enemy movement to their front.
            </p>
            <p>
              On May 19, 1968, at approximately 0500 hours, the battalion base area started receiving mortar and RPG fire. The Company A ambush set off its Claymores on a large enemy force. In the ensuing firefight, four Bobcats were killed and several others were wounded. Those still alive fought their way back to the perimeter with the wounded members of the patrol. The enemy attack was repulsed with organic weapons, artillery and air strikes.  Many VC bodies were found in front of the Company A ambush location.
            </p>
            <p>
              During the day Company A(-) and Company B(-) conducted a RIF operation west and north of the base area.
            </p>
            <p>
              On May 20, 1968, One bobcat from Company C died from wounds he had previously received.  Company C remained OPCON to the 2/34th Armor, operating in the Vinh Loc area.
            </p>
            <p>
              The battalion(-) moved to a new night location at XT 530288
            </p>
            <p>
              On May 21, 1968, the battalion(-) moved into an area north of Trang Bang and established a forward base at XT 533290.
            </p>
            <p>
              On May 22, 1968, at 0005 hours, an attack was launched against the battalion night perimeter. Organic weapons, artillery and helicopter light fire teams were used to suppress the enemy assault. Contact was broken by the enemy at 0345 hours. Five Bobcats were killed in the action. Two were from the Recon Platoon and three were from Company A.
            </p>
            <p>
              At daylight, enemy bodies and miscellaneous equipment were policed up from around the battalion perimeter.
            </p>
            <p>
              On May 23, 1968, the 2/34th Armor was released from OPCON to the 2nd Brigade at 1530 hours.
            </p>
            <p>
              On May 24, 1968, the 1/5th(M) returned to Cu Chi Base Camp.
            </p>
            <p>
              On May 26, 1968, the 1/5th(M) continued stand-down at Cu Chi and acted as division ready reaction force.
            </p>
            <p>
              On May 29, 1968, the 1/5th(M) relieved the 2/22(M) of road security. Company A secured the battalion forward base at XT 483196. Company C moved to Tay Ninh Base Camp and the Recon Platoon moved to Dau Tieng Base Camp to provide convoy security between Tay Ninh, Bau Co and Dau Tieng.
            </p>
            <p>
              On May 30, 1968, elements of the battalion cleared Highway 1 from Tay Ninh to the Hoc Mon Bridge. At 1310 hours, an APC from the Recon Platoon detonated an AT mine at XT 391432. One Bobcat was wounded. Company C cleared roads and secured convoys between Tay Ninh and Dau Tieng and also secured the rock crusher site at XT 2856.
            </p>
            <p>
              On May 31, 1968, elements of the 1/5th(M) cleared the main supply route (Highway 1) from Tay Ninh to the Hoc Mon Bridge. After clearing the road Company A reconnoitered the area of XT 6511. Company B reconnoitered the area of XT 4722. Company C and the Recon Platoon cleared roads and provided security for convoys between Tay Ninh and Dau Tieng and also secured the rock crusher site at XT 2856.
            </p>
            <p>
              During May 1968, twenty-eight Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>David A. Stremler</li>
              <li>James D. Molpus</li>
              <li>Charles H. Turner Jr.</li>
              <li>Kellum W. Grant</li>
              <li>Samuel S. Linville</li>
              <li>Claude D. Protz</li>
              <li>Joseph Greene</li>
              <li>Robert G. Hoop</li>
              <li>Stephen R. Powell</li>
              <li>Kenneth D. Rynning</li>
              <li>Clifton Cubbage</li>
              <li>Otis E. Isbell</li>
              <li>Henry J. Kirchner Jr.</li>
              <li>Louie J. Sandoval</li>
              <li>Daniel L. Underwood</li>
              <li>Paul E. Watson</li>
              <li>Dennis L. Everts</li>
              <li>Guy L. Jewett</li>
              <li>William C. Baldwin</li>
              <li>Overtis Hinton Jr.</li>
              <li>Kenneth R. Wilson</li>
              <li>Gary W. Dunn</li>
              <li>Joe R. Courtney</li>
              <li>Gale W. Dixon</li>
              <li>William M. Clarke Jr.</li>
              <li>Paul A. Proehl</li>
              <li>Joe R. Hines</li>
              <li>Timothy McKee Hamilton</li>
              <li>James V. Antolini</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 5)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="jun">JUNE</div>
            <p>
              No data could be located for the month of June 1968.
            </p>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="jul">JULY</div>
            <p>
              On July 22, 1968, at 1100 hours, the 2nd Bn, 506th Infantry encountered an unknown sized enemy force 3 kilometers east-northeast of Trang Bang. The contact continued throughout the day and into the night.
            </p>
            <p>
              At the same time to the west, Company B, 4/23rd(M) engaged an unknown sized enemy force 4 kilometers north of Go Dau Hau at XT 392301. Companies A and B of the 1/5th (M) were sent to reinforce Company B, 4/23rd (M). The contact lasted throughout the day and into the night.
            </p>
            <p>
              Data for the month of July 1968 was virtually non-existant.
            </p>
            <p>
              On July 22, 1968, at 1100 hours, the 2nd Battalion, 506th AB Infantry encountered an unknown sized enemy force 3 kilometers east-northeast of Trang Bang. The contact continued throughout the day and into the night.
            </p>
            <p>
              At the same time to the west, Company B, 4/23rd(M) engaged an unknown sized enemy force 4 kilometers north of Go Dau Hau at XT 392301. Companies A and B of the 1/5th(M) were sent to reinforce Company B, 4/23rd(M). The contact lasted throughout the day and into the night.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map21.jpeg" target="_blank">
                  <li>Map 21) The Ben Cui Rubber Plantation area</li>
                </a>
              </ul>
            </div>
            <p>
              The 25th Infantry Division reported the following statistical data for the Quarterly Period of May 01, 1968 to July 31, 1968: KIA: 345;  WIA: 1,424;  NBD: 24;  NBI: 28.
            </p>
            <p>
              Personnel shortages continued to exist in Infantry Captains and Infantry NCOs in grades E-6 and E-7.
            </p>
            <p>
              During the quarterly period defoliation missions were flown in areas of operation to clear vegetation bordering roads, paths, trails and waterways (Oriental and Saigon Rivers); clearing vegetation from fields of fire and avenues of approach and clearing vegetation surrounding Cu Chi Base Camp and other critical installations.
            </p>
            <p>
              Throughout the quarterly period several units were reorganized under new TOE. These units were: 1st Bn, 5th Inf(Mech); 2nd Bn, 22nd Inf(Mech); 4th Bn, 23rd Inf(Mech).  The new TOE was TOE 7-45G per USARPAC GO 226 dated 7 May 1968.
            </p>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="aug">AUGUST</div>
            <p>
              On August 03, 1968, Company B was conducting a sweep in the eastern portion of the Michelin Rubber Plantation. Contact was made and the VC took shelter in a village. Company A was dispatched to reinforce Company B. At 0915 hours, the village was evacuated with the help of a loud speaker helicopter. One of the villagers stated that there were still 100 VC in the village. CS was dropped on the village and a LFT was called in. At 0958 hours, a dust-off was requested. One of the LFT helicopters had fired a rocket that exploded on Company B soldiers. One Bobcat was killed and five were wounded. Also wounded by the rocket blast were one engineer and one Vietnamese civilian. A search of the village resulted in negative contact.
            </p>
            <p>
              The Recon Platoon provided security for a convoy from Dau Tieng to Tay Ninh. At 2150 hours, elements of Company C providing security at the Dau Tieng Bridge over the Saigon River engaged and destroyed one sampan.
            </p>
            <p>
              On August 07, 1968, at 1825 hours, Dau Tieng Base Camp received small arms fire. Fire was returned with organic weapons. The enemy fire continued for almost 30 minutes before the VC broke contact. One Bobcat from Company C was killed and another wounded in the exchange.
            </p>
            <p>
              On August 09, 1968, Companies A and C conducted sweeps in the area of AP 12, located in the center of the Michelin at XT 557505. At 1345 hours, Company C received sniper fire while moving back to Dau Tieng. There were negative casualties. At 1445 hours, the Recon Platoon departed Tay Ninh with a 48 vehicle convoy. At 1507 hours, Company A received small arms fire from 3 or 4 VC. The VC broke contact when fire was returned. A dust-off was requested for one Bobcat from Company A who was shot in the chest. He died of his wounds later in the day.
            </p>
            <p>
              On August 14, 1968, at 2323 hours, Company C reported that one VC walked toward the night perimeter and was shot.
            </p>
            <p>
              On August 15, 1968, at 0545 hours it was reported that the person killed on August 14, was a US Soldier from Company C, 1/5th(M). He had no weapons or web gear when found. Speculation on how he got outside the perimeter and then walked back towards it varied.
            </p>
            <p>
              On August 16, 1968, Companies A, B, and C conducted a cordon and search of Dau Tieng City with South Vietnamese District officials. 102 people were detained for questioning.
            </p>
            <p>
              On August 17, 1968, at 0400 hours, Dau Tieng Base Camp was hit by a mortar and rocket barrage. Five people were wounded. The enemy fire was returned with artillery fire with unknown results.
            </p>
            <p>
              On August 18, 1968, the battalion departed Dau Tieng to conduct a seacrh of the area northwest of the Ben Cui Airstrip. At 0750 hours, Company B engaged a large enemy force at XT 438467. Company C and the Recon Platoon soon reinforced the action and were supported by artillery, air strikes and helicopter gun ships. Company A remained in a blocking position to the northwest. Seven Bobcats were wounded in the engagement.
            </p>
            <p>
              On August 19, 1968, Company A, 1/5th(M) was dispatched with Company B, 4/23(M) to assist Troop A, ¾ Cavalry who were ambushed while moving from Cu Chi to Tay Ninh on Highway 26.
            </p>
            <p>
              Companies B and C with the Recon Platoon were sweeping the area on the western edge of the previous day’s engagement. At 1225 hours, Company B made contact with an unknown size enemy force. Company C and the Recon Platoon joined Company B in the fight. Artillery, air strikes and helicopter gun ships were called in for support. The units made two assaults on the enemy position before they were able to move through it and the enemy broke contact. The units headed back to Dau Tieng Base Camp after sweeping the area of contact.
            </p>
            <p>
              Company B was then dispatched to head towards Tay Ninh on Highway 239 and meet a Platoon from the ¾ Cavalry who were enroute to Dau Tieng and then to escort them to Dau Tieng. Company B received some enemy fire as it moved west on highway 239.
            </p>
            <p>
              After linking up with the ¾ Cavalry element, they started their return trip to Dau Tieng. At 1828 hours, the Recon Platoon received fire from the south side of Highway 239 at XT 443445. At 1833 hours, Company B received RPG fire in the area of Highway 239 at XT 416444. At 1843 hours, one APC was reported hit by RPG fire shortly after the units had entered the rubber trees at XT 456449. Another APC and a tank were also hit in the same area. The units fought their way east and where Highway 239 turns north, another tank was hit by RPG fire. A little further north at XT 462458 two more APCs were hit. The units had to leave one tank and one APC on the highway. They were too badly damaged to tow. With the help of helicopter gunships and artillery the units made their way around the curve to where Highway 239 heads in an easterly direction. They took some fire at the curve, but once past it, enemy contact ceased. The units closed Dau Tieng Base Camp at 2050 hours.
            </p>
            <p>
              During the day, 9 Bobcats from Company B were killed. Company A had 2 wounded. Company B had 43 wounded and Company C had 20 wounded. The Recon Platoon had 3 wounded. The platoon from ¾ Cavalry had 13 wounded and 1 killed. Four APCs from Company B were heavily damaged and two tanks from the ¾ Cavalry were out of action.
            </p>
            <p>
              On August 20, 1968, at 0625 hours, Company C and the Recon Platoon and the 3rd Brigade CRIP unit departed Dau Tieng to check out the previous day’s contact area on Highway 239, south of the abandoned Ben Cui airstrip at XT 4545. The village at XT 463450 was searched. Villagers reported that a large VC force was in the area. At 1310 hours, the units closed on the contact area where the tank and APC had been left the evening before. One damaged tank and one damaged APC were taken into tow to be returned to Dau Tieng. The body of one tanker from the ¾ Cavalry was found inside the tank.
            </p>
            <p>
              In a search of the immediate area around XT 4545, blood trails, web gear and miscellaneous ammunition were located. The units closed back at Dau Tieng Base Camp by 1600 hours.
            </p>
            <p>
              At  1731 hours the Dau Tieng Base Camp received a 47 round mortar barrage.
            </p>
            <p>
              Company A, still OPCON to the 4/23(M), had one Bobcat shot and killed by a sniper, leaving only one commissioned officer in Company A.
            </p>
            <p>
              On August 21, 1968, at 0640 hours, Company C departed Dau Tieng for a RIF operation through the Ben Cui Rubber Plantation. The company was to be approximately 1 kilometer south of the MSR[Highway 239]. The company had a Scout Dog team with them. At 0658 hours, the Recon Platoon with one “Duster” attached and the 3rd Brigade CRIP Platoon, left Dau Tieng to sweep Highway 239. As Company C moved through the rubber plantation, the Recon Platoon paralleled their movement along the highway.
            </p>
            <p>
              At 1110 hours, Company C, moving with troops on the ground in front of the APCs,  received sniper fire. One Bobcat was killed. The Company then started to receive automatic weapons fire and heavy RPG fire.
            </p>
            <p>
              “I called the S-3, who was flying above me in the air, and told him that at first I was just receiving heavy sniper fire and it constantly started to increase. At this time I pulled my 2nd Platoon up on the right flank of my 1st Platoon, so I could put more fire power up on my front because this is where all the fire was coming from. The enemy fire continued to increase and for a while there it seemed like there must have been hundreds of AKs firing at us. At this time I gave the order for everyone to pull back around where I had my 4th Platoon providing rear security for us, and set up in a perimeter. Just as we started to move back RPGs started raining in like someone shooting M-79s. I never seen so many RPGs and automatic weapons fire in my life. It was so suppressing that people couldn’t hardly move.”
            </p>
            <p>
              At 1149 hours, the Recon Platoon, located on Highway 239, reported that hundreds of enemy soldiers were moving south from the village at XT 4545 to reinforce the enemy contact with Company C. The Recon Platoon fired on these soldiers with their .50 caliber machineguns and the twin 40mm “Duster” but the fire power was not enough to stop the enemy movement.
            </p>
            <p>
              “Once I gave the order for us to move back and form a perimeter around my 4th Platoon, I first moved my 2nd Platoon which was on the right flank back to the 4th Platoon area. Just as the 3rd Platoon and the 1st Platoon started moving back, we started taking very heavy fire from the front and both our flanks and RPGs were flying all over the place. We got up and slowly started moving back. We got back to approximately 50 to 75 yards from where the 2nd and 4th Platoons were. An RPG hit the track close to me or the track that I was by or the ground, I’m not sure what it hit, and knocked me, I was wounded, it hit both my RTOs and 3 or 4 other people around there. And I know the track I was standing by was knocked out and I finally managed to get up and the two other tracks about 5 or 10 meters from me took very heavy RPG fire and they were both knocked out. At this time I was pretty dazed and I lost so much blood that I was just getting weak and they finally grabbed me and throwed me inside one of the tracks and the 3rd Platoon leader took charge of the company. One thing of importance that I might mention too is the fact that we had trouble getting artillery fire in there at first because it was very thick and the choppers in the air had a hard time identifying our smoke plus my artillery FO was wounded. My four-duce FO was wounded, in fact I guess practically everyone in my headquarters group was wounded.”
            </p>
            <p>
              At 1200 hours, Company C reported that their situation was critical and that they were pulling back. In the 50 minute firefight, Company C had 6 APC’s destroyed, 17 men killed and 21 wounded. At 1201 hours the first helicopter light fire team arrived in the area. At 1202 hours, Company B 1/5th(M) was alerted to stand-by to assist Company C, but never left the Dau Tieng Base Camp.
            </p>
            <p>
              “And we fell back about 100 yards to try and get the artillery into that area and trying to give us a little working room so that we could continue keeping them away from us. We drew back about 100 yards and three more of our tracks got hit. By the time we started pulling back the gooks were already swarming all over the first three tracks that were hit. We pulled back about 100 yards and the command group was down behind one of the tracks and that track took a hit from an RPG 7. When it hit, it wounded the company commander and the FO. It killed one of the RTOs and seriously wounded one of the other RTOs.
            </p>
            <p>
              At this point the company was totally disorganized. They were in a rough perimeter, the tracks were still firing toward the front and the fire was still coming at us from the right flank, a little bit from the left flank but not too much, but mostly from the front and right flank. The 1st Platoon Leader had been killed in the initial contact, and so they were without leadership there. The 3rd Platoon, I was still around but I had several men killed and a lot of em wounded. We pulled back. I had lost all three of my tracks. The 2nd Platoon and Mortar Platoon were in the rear and they were quite a ways back and they were only receiving light contact. They hadn’t had anybody hurt, but I had no knowledge of them whatsoever.
            </p>
            <p>
              What I had around me was so disorganized and there were so many killed and wounded at that point, that I just started getting everybody in the tracks. I started yelling at everybody, ‘get in the tracks and get the tracks moving.’ And it took me about 10 minutes before I could get everybody I could get, the dead I just had to leave there. The wounded people, everybody I could get my hands on and everybody that anybody else could get their hands on we started throwing in the tracks. I got everybody thrown into the tracks and the tracks started moving out. Those that were still outside the tracks, we yelled at em to get on the tracks and to my knowledge everybody that was still alive and moving at that time got on the tracks. They could see the tracks were moving out and if they didn’t get on them they were going to be left there. So they all managed to get on the tracks and we pulled back out.”
            </p>
            <p>
              What was left of Company C moved back through the rubber plantation to a clearing they had passed through at the beginning of their sweep. 16 Bobcats and one ARVN soldier were left on the battlefield. At the clearing, Company C was joined by the Recon Platoon(+) and CRIP element and established a perimeter for dust-offs. The dust-offs of the wounded were completed at 1254 hours. The units closed back into Dau Tieng base camp at 1315 hours to regroup.
            </p>
            <p>
              At 1330 hours, Company C made a preliminary report that they had 2 Bobcats killed and 21 wounded and the Recon element had 2 wounded. The 3rd Brigade CRIP had one man killed. At 1343 hours, Dau Tieng base camp started receiving sporadic mortar fire.
            </p>
            <p>
              At 1430 hours, one platoon from the battalion was dispatched to provide security for the Saigon River Bridge at Dau Tieng. At 1445 hours, the Recon Platoon and the 3rd Brigade CRIP unit departed the base camp and established a position at the edge of the woodline of the rubber plantation. At 1600 hours, all elements were ordered to pull back to Dau Tieng Base Camp. Some Company C soldiers wanted to go back into the Ben Cui immediately and retrieve their fellow soldiers. But that was not allowed.
            </p>
            <p>
              At 1843 hours, a battalion preliminary report stated that Company C had 21 wounded, 1 killed and 13 missing in action and 3 MIA who were known to be dead. Also missing was a Vietnamese Soldier who was an interpreter for Company C.
            </p>
            <p>
              Sergeant Marvin R. Young:
            </p>
            <p>
              “On August 21, 1968 Charlie Company of the 1st Battalion (Mechanized), 5th Infantry was conducting a sweep in the Ben Cui Rubber Plantation. At 1100 hours the company came under heavy small arms, automatic weapons, RPG and mortar attack from an estimated North Vietnamese Regiment. On Initial contact the acting platoon leader was shot and killed. Sergeant Young then took charge and started directing our fire and deploying us into better positions. At this time the rest of the company started pulling back but our communications had been knocked out and we had no way to know they were pulling back to regroup. Sergeant Young finally found out the company had pulled back and so he ordered us to do the same. He stayed to provide fire while we withdrew until he thought we were all back. Then he noticed six men still fighting on the right front flank. With complete disregard for his own safety he ran to their location. On the way he was shot through the side of his face completely losing one eye. He kept on to their position and he laid down a base of fire as they all withdrew. When they got back a ways, Sergeant Young was unable to move too good with the one eye gone. He dropped behind and one man of his squad helped him. As they started back again, a group of North Vietnamese came up from behind and shot Sergeant Young again in the upper arm and he went down. The man helping him stayed to hold off the enemy. Another North Vietnamese sprayed the area again and hit Sergeant Young in the leg. The fire also wounded the other man in the foot. Sergeant Young sized up the situation and knowing he couldn’t get out, ordered the man with him to leave and try to save himself. The man protested and stayed a few minutes more. Sergeant Young could tell the enemy would over run them in a matter of minutes and he once again ordered his helper to leave. He told him he had done a good job, but it was time to go and that he knew he couldn’t make it. Sergeant Young gave his life in the cause of freedom, and helped the men he had worked with.”
            </p>
            <p>
              Sergeant Marvin R. Young was later, posthumously, awarded the Congressional Medal of Honor for his actions.
            </p>
            <p>
              The Intelligence Officer of the 1/5th(M) summed up the action of August 21st this way:
            </p>
            <p>
              “This contact on the 21st of August correlates with all the contact that we’ve had since the 18th of August. Now the mission that was assigned Charlie Company today was to sweep through the southern portion of the Ben Cui to try to find any locations, bodies, web gear, documents, also to try to find if any VC were still in the area. The intelligence reports had been building up since our contact on the 18th. We received reports that to the east in the Michelin Rubber, that the 4th Battalion of the Phu Loi Regiment was located in the center of Ap So 13. Now from this report and another report that I received that to the south a large size force was moving north toward the Ben Cui, we thought that the possibility existed that on the 20th we would get hit. However, that night things were generally quiet. The following morning Charlie Company had the mission to sweep in the Ben Cui, primarily to the southern portion of the area of contact on the 19th. Again their mission was to see if there were any gooks left in there, find any bodies, anything, any documents, just to see what was out there in that area.
            </p>
            <p>
              Our friendly losses were, we had 2 KIA, 1 of em from the CRIP Platoon and the acting platoon leader of the 1st Platoon, Charlie Company was killed in the initial contact, a sniper shot him in the head. We had 14 MIA, 2 of these are confirmed KIA. We had 23 wounded. Most of them were able to return to duty. Approximately 8 or 10 of them were serious wounds.
            </p>
            <p>
              We estimate that there’s at least a regiment in there. Tonight the possibility does exist that we may get hit, however, we’re calling in as much artillery and air strikes and so forth that we can within that area. Now the refugees in the village, in those two villages, did evacuate themselves. There’s approximately 200 refugees that came out of the village. They informed myself and MI personnel that the NVA and VC forces were occupying both villages, so we’re going to try and bring as much fire power as we can against those two villages tonight. In tomorrow’s operation we’ll probably be able to get some more information, go out there and see if they have withdrawn completely or if they’re still there.”
            </p>
            <p>
              More details for the actions that took place on August 21, 1968
            </p>
            <p>
              On August 22, 1968, at 0235 hours, the 1/5th(M) was placed under OPCON to the 1/27th Infantry for the day’s operations. At 0300 hours, the 1/5th(M) S-3 and the S-3 from the 1/27th Infantry coordinated plans for the day’s activities. At 0640 hours, Company B, 1/5th (M) with an element of the ¾ Cavalry attached departed Dau Tieng. Company C, 1/5th(M), stood by outside the west gate of Dau Tieng Base Camp.
            </p>
            <p>
              At 0700 hours, the Commanding Officer of the 1/27th Infantry arrived to take command of the day’s operation. At 0715 hours, the Recon Platoon, 1/5th(M) departed Dau Tieng and proceeded west on Highway 239 and then turned south, paralleling Highway 19. The platoon turned west into the Ben Cui, just south of the 46 Grid line.
            </p>
            <p>
              Company B(+) continued west into the Ben Cui along Highway 239. Company C moved south about 500 meters and then turned west into the Ben Cui. Elements of the 2/27th Infantry were located immediately to the rear of Company C. At 0900 hours, all units reported negative contact.
            </p>
            <p>
              At 0918 hours, Company B(+)  moved west from where Highway 239 turns south and Highway 19 goes west. The plan was for them to proceed and check out the area north of the abandoned Ben Cui Airstrip. They reported finding NVA web gear and some hand grenades. At 0919 hours, the Recon Platoon turned in a northerly direction towards Company B.
            </p>
            <p>
              At 0928 hours, Company B(+) reported that they were in heavy contact just west of the highway 239 and 19 split. The soldiers were moving on the ground in front of the APCs. At 1040 hours, Company B(+) reported that they were still receiving RPG fire and automatic weapons fire. Two APCs from the ¾ Cavalry element had been hit by RPG rounds. By 1145 hours, Company B had five wounded. The fighting was intense with an occasional lull. Artillery fire was called in on the enemy positions. The troops would advance and then fall back. Company B(+) was ordered to pull back and regroup on line. The line was staggered and in the confusion of battle two men were left in front of the line.
            </p>
            <p>
              The Recon Platoon and Company C had moved north and linked up with Company B(+) at 1200 hours. Air strikes, artillery and helicopter light fire teams were employed in and around the original contact area. At 1303 hours, a dust-off was requested for one badly burned individual.
            </p>
            <p>
              At 1306 hours, a “duster” and a Quad 50 were moved to the north of the contact area. By 1400 hours, more air strikes were completed. At 1455 hours, it was reported that units were attempting to locate and extract the 2 Company B personnel. Searching elements found one of the Bobcats and his M-60 machinegun. He was dead. They also located the M-60 machinegun of the second Bobcat but there was no sign of him.
            </p>
            <p>
              After searching the area again with negative results, all elements departed the contact area and moved to the area of the abandoned Ben Cui airstrip to establish a night perimeter at XT 444457. All elements closed by 1930 hours. Four ambush patrols were deployed. At 1935 hours, the 1/5th(M) became OPCON to the 2nd Brigade.
            </p>
            <p>
              Also on the 22nd one Bobcat from Company A died from wounds he had received earlier.
            </p>
            <p>
              On August 23, 1968, Company B departed the night base perimeter and began search operations at 0800 hours. Company C followed at 0852 hours. The Recon Platoon provided security for the night perimeter location. At 0950 hours, Troop A, ¾ Cavalry was released from OPCON to the 1/5th(M) and departed the night perimeter. At 1040 hours, Company A, 1/5th(M) was released from OPCON to the 4/23rd(M).
            </p>
            <p>
              At 1051 hours, Company C moved closer to the contact area of August 21. At XT 460444 they located approximately 100 bunkers that had been used in the last few days. At 1120 hours, the company located the first body of the 17 soldiers who were MIA from the fight on the August 21st. At 1125 hours, Company C was instructed to secure the area of the MIAs and not disturb or touch anything. The Battalion Commander, the 2nd Brigade Commander and personnel from the 25th Division Headquarters were going to visit and inspect the battlefield scene.
            </p>
            <p>
              At 1130 hours, Company B was instructed to secure Highway 239 for a convoy from Dau Tieng to Tay Ninh and then for one going in the opposite direction. At 1255 hours, Company A, 1/5th(M) closed the battalion forward base location at the Ben Cui Airstrip.
            </p>
            <p>
              At 1330 hours, Company C reported that they had located 14 bodies of the Company C MIAs. At 1430 hours, it was reported that all 17 bodies that were left on the battlefield some 48 hours earlier had been located and secured.
            </p>
            <p>
              By 1900 hours, all units had closed into the battalion night perimeter at the Ben Cui Airfield.
            </p>
            <p>
              On August 24, 1968, at 0030 hours, FSB Schofield, (XT 407440), located 3 kilometers southwest of the 1/5th(M) night location, was attacked by a large enemy force. At 0530 hours, Companies A, B, and C, 1/5th(M) departed the night location to establish a blocking position north and east of FSB Schofield. At 0800 hours, the units began search operations to the west.
            </p>
            <p>
              At 1604 hours, Company A was sent to reinforce the garrison at Dau Tieng Base Camp. The Recon Platoon was dispatched to secure a bridge site and the other battalion units closed the night perimeter at the Ben Cui “airstrip.”
            </p>
            <p>
              On August 25, 1968, the 1/5th(M) moved its area of operations into the Michelin Rubber Plantation. At 1030 hours, an APC from the Recon Platoon detonated an AT mine. One Bobcat was wounded.
            </p>
            <p>
              On August 26, 1968, at 1005 hours, an APC from Company A detonated an AT mine at XT 550495, in the middle of the Michelin. Three Bobcats were wounded and the APC was a combat loss. Shortly afterwards, Company C had an APC detonate a mine about 1000 meters to the east of the Company A mine incident. There were no injuries.
            </p>
            <p>
              On August 27, 1968, FSB Rawlins, located 3 kilometers east of Tay Ninh at XT 297489, came under heavy mortar, rocket and ground attack by an estimated 2 enemy battalions.
            </p>
            <p>
              On August 28, 1968, at 0910 hours, an APC from Company A detonated an AT mine in the Michelin at XT 547483. Two Bobcats were wounded.
            </p>
            <p>
              On August 29, 1968, the 2nd Brigade departed Dau Tieng and returned to Cu Chi. The operational responsibility for the Dau Tieng area was returned to the 1st Brigade.
            </p>
            <p>
              During August 1968, thirty-two Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Charles R. Crim</li>
              <li>Marshall D. Wolford</li>
              <li>Paul L. Sullivan</li>
              <li>Bruce W. Collins</li>
              <li>Terrence E. Butler</li>
              <li>Willie S. Fields</li>
              <li>Aubrey R. Henley</li>
              <li>Joe E. Lofton</li>
              <li>Jack P. Pashano</li>
              <li>Richard Ramirez Jr.</li>
              <li>Frederick V. Seaborne</li>
              <li>Rene Serrano</li>
              <li>Arthur Watson</li>
              <li>John A. Connell</li>
              <li>Bruce E. Bartlett</li>
              <li>James L. Bowden</li>
              <li>Edward V. Coffey</li>
              <li>Jose R. Colon-Rivera</li>
              <li>Jerry W. Combest</li>
              <li>Richard A. Damschen Jr.</li>
              <li>Gary L. Dobbins</li>
              <li>Edward J. Dull</li>
              <li>James L. Harbottle</li>
              <li>Manior D. Lang Jr.</li>
              <li>David W. Ledbetter</li>
              <li>Michael R. Mangan</li>
              <li>Hubert W. Martin</li>
              <li>Jesus Rivera</li>
              <li>James E. Rush</li>
              <li>Delbert R. Stogsdill</li>
              <li>Marvin R. Young</li>
              <li>Phillip T. Delorenzo</li>
            </ul>
            <p>
              There was one Bobcat missing in action:
            </p>
            <ul>
              <li>Humberto Acosta-Rosario</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 8)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="sep">SEPTEMBER</div>
            <p>
              On September 02, 1968, at 1755 hours, an APC from Company A detonated an AT mine while conducting a sweep in the Michelin. Four Bobcats were wounded and the APC was written off as a combat loss.
            </p>
            <p>
              At 2330 hours, an ambush patrol from Company B set up in the Michelin at XT 517506 opened fire on approximately 15 VC. In the firefight that followed, three Bobcats were wounded. There was one confirmed VC killed.
            </p>
            <p>
              On September 03, 1968, at 1715 hours, Company C was engaged by enemy troops along Highway 239 between XT 4545 and 4645. During the course of the engagement the company received RPG, mortar and small arms fire. In the initial outbreak, one APC was hit and destroyed. At 1820 hours, another APC was hit by RPG fire and also one towing a downed APC was hit. Helicopter Light Fire Teams, artillery fire and Super Spooky Gunships were utilized in suppressing the enemy fire along with the organic weapons of Company C.
            </p>
            <p>
              At 2006 hours, Company B moved out of Dau Tieng to the edge of the Ben Cui on Highway 239. At 2155 hours, Company A moved from the west gate to the edge of the rubber. Company A passed through Company B and proceeded through the area of contact and back again. During the evening’s engagement 33 Bobcats were wounded and one Bobcat from Company C died from the wounds he received. There were also two men wounded from the 65th Engineer Battalion.
            </p>
            <p>
              On  September 04, 1968, at 1715 hours, an APC from the Recon Platoon detonated an AT mine while moving through Ben Cui Village. Four Bobcats were wounded and the track was a combat loss.
            </p>
            <p>
              At 2010 hours, a small VC force made a ground probe of the perimeter of the Dau Tieng Base Camp.
            </p>
            <p>
              On September 05, 1968, at 0730 hours, an APC from the Recon Platoon detonated an AT mine at XT 447453, south of the abandoned Ben Cui Air Strip. Four Bobcats were wounded and the track received minor damage.
            </p>
            <p>
              On September 11, 1968, at 0145 hours, Dau Tieng Base Camp started to receive a barrage of 11 mortar rounds. Company A was in a night perimeter at XT 437451, located about 300 meters west of the Ben Cui Air Strip. The Company C night perimeter was located at XT 463448, about 1000 meters southeast of Company A.
            </p>
            <p>
              At 0425 hours, Company A started receiving mortar, RPG and small arms fire. They did sustain an unknown number of wounded in the initial contact. An enemy ground assault was also launched against the company perimeter. A helicopter LFT was on station at 0435 hours. At 0444 hours, Company C fired mortar illumination over Company A. At 0509 hours, Company C was alerted to be ready to move dismounted to Company A’s location. At 0533 hours Company A reported that they were receiving mortar and small arms fire from the south.
            </p>
            <p>
              At 0542 hours, Company C was ordered to maneuver to prevent enemy movement to the northeast. The Recon Platoon was dispatched to relieve Company B providing security at the bridge site on the Saigon River. At 0545 hours, Company B was ordered to prepare for air deployment. At 0600 hours, Company A reported that they were receiving more fire from the northwest. At 0611 hours, Company C reported that their lead element was pinned down by heavy sniper fire and that they had some wounded. At 0630 hours, Company C reported that they were fighting off an assault on their position from the west. Airstrikes with napalm were utilized as well as helicopter gunships.
            </p>
            <p>
              At 0745 hours, Company B was air inserted at XT 454434 and then proceeded north toward the Ben Cui Airstrip. Company A, 3/22 Infantry was flown in from Tay Ninh to an LZ to the north at XT 440463.
            </p>
            <p>
              At 0711 hours, the Dust-offs for Company A, 1/5th(M) were complete.
            </p>
            <p>
              At 0833 hours, Company C was instructed to move from their night perimeter due west.
            </p>
            <p>
              At 0905 hours, Company C established a blocking position and Company B swept towards them.
            </p>
            <p>
              At 1100 hours, Company A, 3/22nd Infantry was extracted from the area. Company B swept through the Ben Cui Village and then joined Company A, 1/5th(M) and helped in policing the area of VC bodies and equipment. It was estimated that the attacking enemy force had been near battalion size.
            </p>
            <p>
              At 1635 hours, Company A closed Dau Tieng Base Camp. Company B established their night perimeter at XT 438451, where Company A had been the night before.
            </p>
            <p>
              Three Bobcats were killed and 20 were wounded during the encounter.
            </p>
            <p>
              On September 12, 1968, Companies A and B were assigned to escort a three serial convoy from Dau Tieng. The first serial of vehicles was able to proceed to Tay Ninh. Enemy ambushes forced the second serial to spend the night at FSB Rawlins and the third serial was forced to return to Dau Tieng.  Company A suffered two Bobcats killed and five wounded. Company B suffered four wounded. Several APCs were hit by RPG fire in the contact.
            </p>
            <p>
              On September 14, 1968, at 1250 hours, an APC from Company B detonated an AT mine on Highway 239, two kilometers east of Highway 26. Two Bobcats were wounded. A short time later a second APC from Company B detonated another AT mine in the same area, wounding six Bobcats.
            </p>
            <p>
              On September 16, 1968, Company A was set up in a night defensive perimeter at the Ben Cui Air Strip near XT 443451. At 0020 hours, a flare ship was operating over the area of the perimeter. Enemy movement had been observed to the south of the perimeter since late evening. After 0100 hours Company A received heavy RPG, small arms and automatic weapons fire as well as a ground assault against the perimeter. At 0122 hours, contact was reported as still heavy and that two Bobcats had been killed and three wounded, so far. At 0150 hours, Company A reported a renewed ground assault coming from the west. At 0209 hours, Company A reported that the enemy contact had ceased. An occasional RPG round was fired at the perimeter during the remainder of the morning. Dust-offs were completed at 0402 hours. It was an estimated reinforced enemy company that attacked the Company A position. Company A suffered two Bobcats killed and ten wounded.
            </p>
            <p>
              Later in the day at 1136 hours, an APC from Company C detonated an AT mine on Highway 239, about 200 meters east of the junction of Highways 239 and 26. Four Bobcats were wounded.
            </p>
            <p>
              Company B, 1/5th(M) relieved Company A and occupied the night defensive position at the Ben Cui Air Strip.
            </p>
            <p>
              On September 17, 1968, at 0202 hours, Company B reported that they were receiving mortar, RPG and small arms fire from the north and east. At 0220 hours, Company B reported that it was receiving a heavy ground attack. At 0325 hours, RPG and automatic weapons fire was still being received. At 0422 hours, Company B reported that enemy contact had ceased. Air strikes were being employed in the area. At 0435 hours, Company B requested a dust-off.
            </p>
            <p>
              At 0452 hours, another enemy ground assault was launched against the perimeter. Enemy mortar fire was also received. The assault was short lived. At 0516 hours, dust-offs were again requested. By 0640 hours, the dust-offs were completed. Two Bobcats from Company B were killed in the contact and fourteen were wounded.
            </p>
            <p>
              On September 20, 1968, Company A was again occupying the night defensive perimeter at the Ben Cui Airstrip. At 0005 hours, the night base started receiving a heavy volume of RPG and mortar fire. The Communists then launched a ground assault with an estimated battalion sized force. Artillery, helicopter gun ships, air strikes and a “Spooky” gun ship were all used in repulsing the assault. Five Bobcats were wounded in the attack. Three more Bobcats from Company A were wounded when a booby trap was detonated as elements policed up enemy bodies and equipment from around the perimeter.
            </p>
            <p>
              On September 21, 1968, units of the battalion swept the area of the Ben Cui Rubber Plantation.
            </p>
            <p>
              On September 23, 1968, Dau Tieng Base Camp was hit by 7 rounds of 82mm mortar fire.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map22.jpeg" target="_blank">
                  <li>Map 22) Dau Tieng - Thanh An - Boi Loi Woods area</li>
                </a>
              </ul>
            </div>
            <p>
              On September 29, 1968, The Recon Platoon provided convoy escort between Dau Tieng and Tay Ninh.
            </p>
            <p>
              During September 1968, ten Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Richard A. Akin Jr.</li>
              <li>Albert L. Lazzarotto</li>
              <li>Akos D. Szekely</li>
              <li>Thomas W. Roberts</li>
              <li>Donald R. Butler</li>
              <li>Dave C. Dahlin</li>
              <li>Lowell E. Lunzmann</li>
              <li>Colombo P. Del Terzo</li>
              <li>Ronald W. Zydel</li>
              <li>Arnold B. Wimberly</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 9)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="oct">OCTOBER</div>
            <p>
              On October 01, 1968, The battalion units conducted RIFs in the area of Dau Tieng. One Bobcat from Company B died in hospital from an illness he had contracted.
            </p>
            <p>
              Thru October 15, 1968, the 1/5th(M) conducted operations around Dau Tieng Base Camp, including road and convoy security missions.
            </p>
            <p>
              On October 17, 1968, at 1445 hours, an APC from Company B detonated an AT mine on Highway 19 about three kilometers south of Dau Tieng. Two Bobcats were wounded and the APC was a combat loss.
            </p>
            <p>
              On October 19, 1968, at 1115 hours, while sweeping through an area south of the Ben Cui Rubber Plantation at XT 456419, one Bobcat from Company B was killed and another was wounded when a booby trapped RPG round was detonated. About 500 meters to the west, the Recon Platoon located a small food and ammunition cache.
            </p>
            <p>
              At 1656 hours, Company C, working the area just to the southeast of the Highway 19 and 238 split, discovered a cache containing 7 weapons.
            </p>
            <p>
              On October 20, 1968, at 1215 hours, the Recon Platoon had one Bobcat wounded when an AT mine was detonated about 5 kilometers southwest of Dau Tieng.
            </p>
            <p>
              On October 21, 1968, Company B located an abandoned enemy base camp in the southern part of the Ben Cui. The body of a dead VC soldier was located along with a few hundred pounds of rice and some mortar ammunition.
            </p>
            <p>
              On October 22, 1968, units from the battalion were providing security for Rome Plow operations 2 kilometers northeast of Trung Mit. At 1045 hours, an APC detonated an AT mine wounding one Bobcat.
            </p>
            <p>
              On October 24, 1968, Company A cleared and secured Highway 14 between Dau Tieng and Thanh An for the movement of convoys. The 1/27th Infantry was to deploy around Thanh An and FSB Mahone was to be constructed at XT 538375. At 0930 hours, sniper fire was received in the area of a bridge crossing on Route 14 at XT 524408.
            </p>
            <p>
              On October 26, 1968, one Bobcat from Company A was wounded when the APC he was in hit an AT mine on Highway 14, four kilometers north of Thanh An. The APC was a combat loss.
            </p>
            <p>
              On October 27, 1968, Company A and Company B of the 1/5th(M) were assigned the mission to clear and secure Highway 14, between Dau Tieng and Thanh An. At XT 510430 a mine was located and destroyed. At 1000 hours, about 500 meters south of that location, an APC from Company B detonated an AT mine. One medic was killed and five other Bobcats from Company B were injured. The APC was damaged beyond repair.
            </p>
            <p>
              At  1125 hours, Company A located and destroyed 3 anti-tank mines. At 1135 hours, at the bridge site at XT 524408, three Bobcats from Company B were wounded when 2 boobytraps were detonated. At 1208 hours, Company B suffered 3 more wounded when an APC detonated an AT mine along the roadway. At 1612 hours, Company B came under small arms fire 1 ½  kilometers north of Thanh An. Fire was returned with organic weapons, artillery and helicopter gun ships. Three Bobcats were wounded in the contact.
            </p>
            <p>
              On October 28, 1968, Company A cleared and secured Highway 14 between Dau Tieng and Thanh An. 5 AT mines were located and destroyed. Companies B and C conducted a sweep down the west side of the Saigon River from Dau Tieng. At 1345 hours, a food and ammunition cache was located.
            </p>
            <p>
              On October 29, 1968, at 1705 hours, a convoy being escorted by elements of the 1/5th(M) received small arms and RPG fire north of Thanh An. The enemy fire was returned with unknown results. Two soldiers were wounded in the contact.
            </p>
            <p>
              That evening, an ambush patrol from Company B 1/5th(M) set up in Dau Tieng, near the Catholic Church over looking the graveyard. At 2300 hours, after several hours with no activity, the patrol leader took half the ambush patrol and commenced a roving patrol in the general area.
            </p>
            <p>
              The patrol moved south and then turned down an alley. About 75 meters down the alley the patrol came upon a fence blocking the alley, with a gate in the middle. The point man pushed on the gate to open it and there was an explosion. The pointman was killed and the patrol leader and two other Bobcats were wounded. The remainder of the patrol was sent for and the unit then moved to the bridge, where a dust-off was called in.
            </p>
            <p>
              On October 30, 1968, Company C conducted a sweep of the northern portion of the Ben Cui. The unit then returned to Dau Tieng Base Camp to provide night security. At 1942 hours, an unknown size force probed the base perimeter. They were repelled, leaving four dead. One Bobcat from Company C was wounded in the exchange.
            </p>
            <p>
              On October 31, 1968, at 1400 hours, Company A became engaged in a fire fight 1 kilometer north of Thanh An. Fire was returned with organic weapons with unknown results. Three Bobcats were wounded during the contact.
            </p>
            <p>
              During October 1968 four Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Allen P. Broekhuizen</li>
              <li>Paul E. McGinness</li>
              <li>Raymond M. Tanner</li>
              <li>Clarence R. Chaffin</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 10)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <p>
              During the Quarterly Period of August 01 thru October 31, 1968, the 25th Infantry Division reported the following personnel statistics:
            </p>
            <p>
              KIA: 309;  WIA: 1,837 of whom 1,050 were evacuated; NBD: 14;  NBI: 33;  MIA: 7.
            </p>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="nov">NOVEMBER</div>
            <p>
              The beginning of November 1968 found the 1/5th(M) still working out of Dau Tieng and conducting extensive sweeps in the Ben Cui and Michelin Rubber Plantations.
            </p>
            <p>
              On November 01, 1968, Company C, working with members of the 65th Engineers, located and destroyed 3 AT mines on Route 14, 5 kilometers south of Dau Tieng.
            </p>
            <p>
              Company B conducted a sweep along Highway 239 in the Ben Cui.
            </p>
            <p>
              At 1600 hours, a bulldozer from the 65th Engineers and attached to the 1/5th(M) detonated an AT mine on Highway 14 about 2 kilometers north of Thanh An. Eight personnel in the general area were wounded and the vehicle was damaged beyond repair.
            </p>
            <p>
              On November 02, 1968, Company C took part in the daily sweep of Highway 14 between Dau Tieng and Thanh An. The Recon Platoon conducted a sweep along Highway 239 in the Ben Cui.
            </p>
            <p>
              On November 03, 1968, Company A helped sweep Highway 14 south of Dau Tieng. At 1030 hours, a vehicle using the road detonated an AT mine wounding six personnel.
            </p>
            <p>
              On November 04, 1968, Company B conducted the sweep of Route 14. At 1020 hours, two Bobcats from Company B were wounded when a booby trapped hand grenade was detonated about 8 kilometers south of Dau Tieng.
            </p>
            <p>
              On November 07, 1968, Company B was conducting a clear and secure operation on Highway 14. An AT mine was discovered and destroyed at XT 517419. Just north of the bridge at XT 524408, an APC from the company detonated an AT mine at 1042 hours. Two Bobcats from Company B were killed and three others were wounded. One of the Bobcats was trapped under the APC, which was destroyed.
            </p>
            <p>
              Companies A and C conducted a sweep of the Ben Cui. A small ammunition cache was located and destroyed.
            </p>
            <p>
              At 1540 hours, Company B got into a brief firefight at the bridge on Highway 14 at XT 524408. Fire was returned with unknown results. Two Bobcats were wounded by shrapnel from an RPG round.
            </p>
            <p>
              On November 08, 1968, elements of the battalion participated in a clear and secure operation of Route 14 south of Dau Tieng.
            </p>
            <p>
              Company A conducted a sweep of Highway 239 west of Dau Tieng.
            </p>
            <p>
              On November 13, 1968, Company A conducted a sweep of Route 14 south of Dau Tieng. 3 AT mines were located and destroyed.
            </p>
            <p>
              Company C participated in a search operation south of the Ben Cui. At 1430 hours, a small ammunition cache was located at XT 461415.
            </p>
            <p>
              On November 14, 1968, Company A was sweeping Highway 14 south from Dau Tieng. At 1000 hours, a command detonated claymore type mine was exploded on the point element at XT 520415. Three Bobcats were killed. Two members of a scout dog team were also killed along with one scout dog. One ARVN Soldier was wounded and two Bobcats were wounded.
            </p>
            <p>
              The Recon Platoon conducted a sweep of Highway 239 from Dau Tieng to Highway 26 without incident.
            </p>
            <p>
              On November 15, 1968, the 1/5th (M) moved their operations to the Boi Loi Woods area.
            </p>
            <p>
              On November 16, 1968, Company A swept the area south of Bao Don. At XT 445340, the company located a small food and weapons cache.
            </p>
            <p>
              On November 20, 1968, Company C continued securing Rome Plow operations in the area of Thai My, located along Highway 7A around XT 5415. During the morning the company located and destroyed some booby traps and 2 anti-tank mines.
            </p>
            <p>
              The Recon Platoon swept Highway 7A from Route 1 to the Company C night base location.
            </p>
            <p>
              Company B was working an area just northwest of Trung Lap. At 1000 hours, a booby trapped hand grenade located at XT 578228 detonated. One Bobcat was wounded. At 1145 hours, one Bobcat from Company B was killed by a booby trap explosion. A South Vietnamese Soldier was also killed in the explosion. Four Bobcats were wounded by the blast and dusted-off. After completing its sweep of the area, Company B returned to FSB Patton.
            </p>
            <p>
              On November 21, 1968, The Recon Platoon came under small arms and mortar fire on Highway 7A, north of Trung Lap at XT 601222. The enemy fire was returned with fire from the platoon’s weapons, with unknown results. Two Bobcats were wounded in the incident.
            </p>
            <p>
              Company A swept Highway 7A north of the junction of Highway 1. Several AT mines and booby traps were discovered and destroyed with the assistance of elements of Company C, 65th Engineers.
            </p>
            <p>
              On November 23, 1968, at 0928 hours, an APC from the Recon Platoon detonated a 105mm WP round about one kilometer northwest of Trung Lap. There were no injuries nor damage.
            </p>
            <p>
              At 1015 hours, elements of Company C conducting a sweep on Highway 7A in the Thai My area detonated an AT mine. One Bobcat from Company C was killed and one man from the 65th Engineers was wounded by the explosion.
            </p>
            <p>
              At 1225 hours, Company A was searching one kilometer northeast of the junction of Highways 1 and 7A. A booby trap was detonated and six Bobcats from the company were wounded.
            </p>
            <p>
              Later in the day, two Bobcats from Company C were wounded when they received small arms fire in the area of Thai My.
            </p>
            <p>
              On November 28, 1968, at 1200 hours, the Recon Platoon swept along Highway 7A. As they passed through the area of Thai My Village, the platoon apprehended 82 suspected VC for questioning.
            </p>
            <p>
              The 3rd Platoon of Company C closed FSB Stuart at 1855 hours to provide night security.
            </p>
            <p>
              On November 29, 1968, at 0750 hours, an APC from the Recon Platoon detonated an AT mine on Highway 7A, 2 kilometers north of the Highway 1 junction. The vehicle overturned trapping one Bobcat underneath. This Bobcat was killed and another one was wounded. Two South Vietnamese Soldiers were also injured in the blast. The APC was written off as a combat loss.
            </p>
            <p>
              At 0920 hours, the Recon Platoon started moving south. At 0940 hours, a command detonated Claymore Mine was exploded against an APC. Two Bobcats were wounded by the blast. The platoon then started to receive sniper fire, which was returned with 50 caliber fire. The two wounded Bobcats were dusted-off. The helicopter came under small arms fire as it lifted off out of the area.
            </p>
            <p>
              At 0959 hours a command detonated mortar round was set off against members of the platoon. Initially one Bobcat was killed and three were wounded. At 1005 hours, Companies B and C started moving toward the contact area.
            </p>
            <p>
              A Dust-Off helicopter set down for the three wounded. As it touched down, what was believed to be a mine, exploded, killing one Bobcat and wounding four others.
            </p>
            <p>
              At 1410 hours, a dust-off was requested by Company A for one wounded Bobcat. A VC threw a hand grenade from a spider hole, causing the injury. Company A worked the area and killed three VC.
            </p>
            <p>
              One of the Bobcats from the Recon Platoon who was wounded earlier, died from his injuries.
            </p>
            <p>
              One platoon from Company B was assigned to provide security for FSB Stuart. One Platoon from Company C was assigned to Cu Chi Base Camp for the night.
            </p>
            <p>
              On November 30, 1968, a truck from the 1/5th(M) detonated a mine on Highway 1, east of Trang Bang at 0900 hours. The vehicle was destroyed. At 1440 hours, Company C received small arms fire south of Trang Bang. In the exchange, three Bobcats were wounded.
            </p>
            <p>
              During November 1968 eleven Bobcats died in Vietnam. They were:
            </p>
            <!-- <ul>
              <li>David W. Brooks</li>
              <li>James R. Springer</li>
              <li>David A. Bradshaw</li>
              <li>Wayne M. Horne</li>
              <li>Robert T. Jones Jr.</li>
              <li>Horace V. Robinson Jr.</li>
              <li>Grady R. Nelson</li>
              <li>Harold L. Basham</li>
              <li>Johnnie R. Godwin Jr.</li>
              <li>Richard A. Weaver</li>
              <li>Hurston E. Worrell</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 11)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="dec">DECEMBER</div>
            <p>
              On December 01, 1968, Company C was conducting a sweep two kilometers southeast of Trang Bang, when a booby trapped hand grenade was detonated at 1345 hours. Four Bobcats were wounded in the explosion. One of the men died a short time later from his wounds.
            </p>
            <p>
              On December 03, 1968, Company C was conducting a RIF southeast of Trang Bang. At 1012 hours, one Bobcat from the company was wounded when an anti-tank mine was detonated at XT 502164. At 1130 hours, another Bobcat was wounded when a booby trapped hand grenade was tripped and exploded in the same general area. At 1449 hours, another booby trapped hand grenade was detonated wounding one Bobcat. At 1545 hours, an APC from Company C detonated an AT mine. One Bobcat was wounded and the track was a combat loss.
            </p>
            <p>
              On December 05, 1968, a Bobcat from Company C was killed when the vehicle he was in accidentally crashed.
            </p>
            <p>
              On December 06, 1968, Company B was searching an area 2 kilometers southwest of Trung Lap when they discovered a large ammunition cache at 0945 hours. Over 130 RPG rounds and 127 mortar rounds were among the items found.
            </p>
            <p>
              Company C was conducting a sweep at 1058 hours, southeast of Trang Bang, when an APC detonated an AT mine wounding two Bobcats.
            </p>
            <p>
              On December 07, 1968, Company C was conducting a sweep northeast of Trung Lap at 1600 hours when the company received small arms fire. The fire was returned with unknown results. One Bobcat was wounded in the exchange.
            </p>
            <p>
              Company A joined Company C and they established a night defensive perimeter in the area of XT 6023. At 1855 hours, the night defensive base received a mortar barrage. Ten Bobcats were wounded. Fire was returned with artillery and mortars with unknown results.
            </p>
            <p>
              On December 08, 1968, at 0445 hours, the night perimeter of Companies A and C came under small arms and RPG attack. The attack was repulsed with artillery and mortar support. Five Bobcats were wounded in the exchange of fire. In a search of the perimeter area at first light, several VC bodies and weapons were located.
            </p>
            <p>
              At 0857 hours, an APC from Company B detonated an AT mine northeast of Trang Bang at XT 505225. Two Bobcats were wounded. At 1325 hours, an APC from Company B detonated an AT mine east of Trung Lap. Five Bobcats were wounded in the explosion. One Medic later died from his wounds.
            </p>
            <p>
              On December 09, 1968, Company A was conducting a RIF operation 7 kilometers northeast of Trung Lap in the Ho Bo Woods. At 1154 hours, the company encountered a dug in enemy force of unknown size at XT 635260. A helicopter LFT and Dust-Off were requested. At 1217 hours, Company C began moving to the area of Company A’s contact. At 1237 hours, Company A reported that they had three Bobcats killed and two wounded. Helicopter Light Fire Teams, air strikes and artillery pounded the enemy position. The dust-off was completed at 1315 hours.
            </p>
            <p>
              Companies A and C then assaulted the position. The bodies of enemy soldiers were located along with miscellaneous weapons and equipment.
            </p>
            <p>
              At 1343 hours, The Recon Platoon had an APC detonate an AT mine on Highway 7A, one kilometer north of the Highway 1 junction. There were no injuries but the track was a combat loss.
            </p>
            <p>
              On December 10, 1968, the battalion conducted its operations around the Trung Lap area. At 1945 hours, an APC from Company B detonated an AT mine on Highway 7A, north of Trung Lap at XT 609221. Six Bobcats were wounded in the explosion.
            </p>
            <p>
              On December 11, 1968, at 0855 hours, as Company C conducted a RIF north of Trung Lap, they made contact with a small force of VC. Assaulting the position, the company located some enemy dead, one machinegun and one RPG-7 launcher.
            </p>
            <p>
              At 0945 hours, one Bobcat from Company B was wounded when he tripped a booby trapped hand grenade one kilometer northeast of Trung Lap.
            </p>
            <p>
              In the early afternoon, Companies A and C conducted an S&D operation in the northern Ho Bo Woods. At 1715 hours the companies received heavy enemy fire. The fire was returned with organic weapons and artillery fire. After the VC broke contact, the bodies of VC soldiers and one POW were located in the area. Five Bobcats were wounded in the contact.
            </p>
            <p>
              On December 12, 1968, an APC from Company C detonated an AT mine on Highway 7A on the northern fringe of the village of Trung Lap. Four Bobcats were wounded.
            </p>
            <p>
              On December 13, 1968, at 0628 hours, the Recon Platoon left the battalion forward base to sweep Highway 7A to the junction of Highway 1.
            </p>
            <p>
              At 1206 hours, Company A began to receive RPG and automatic weapons fire 3 kilometers west of Trung Lap at XT 558200. One APC was hit by RPG fire and the company began calling in artillery fire on the enemy position. At 1225 hours, the company reported three Bobcats wounded and requested a Dust-Off.
            </p>
            <p>
              At 1245 hours, Company B, 2/12th Infantry was airlifted into the area. At 1301 hours, Company A dusted-off three wounded and one dead Bobcat. Air strikes and helicopter gun ships bombed and strafed the enemy position. At 1328 hours, Company B, 1/5th(M) was sent to the area of Mit Nai on the report of a large VC force in that area. At 1440 hours, Company A, 2/12th Infantry was airlifted to an LZ at XT 536201, west of the enemy position that Company A, 1/5th(M) had engaged.
            </p>
            <p>
              At 1517 hours, Company B had an APC detonate a booby trap of unknown type at XT 565186. Two Bobcats were wounded and dusted off. At 1608 hours, Company A reported that they were receiving fire.
            </p>
            <p>
              At 1615 hours, Company B reported that they were receiving mortar, RPG, small arms and automatic weapons fire. At 1626 hours, Company B backed up their APCs to get better suppressive fire on the enemy position. At 1631 hours, Company B reported that they had casualties and also had a unit pinned down by enemy fire.
            </p>
            <p>
              At 1644 hours, Companies A and B, 2/12th Infantry linked up to form a blocking force. At 1703 hours, Company B, 1/5th(M) reported that they had two Bobcats killed and several wounded from a 60mm mortar barrage. At 1708 hours, Company A, 1/5th(M) requested a Dust-off for at least two wounded. At 1723 hours, the Company B wounded were dusted-off. At 1730 hours, Company A reported that one of their wounded died and they still had three wounded to be taken out. At 1750 hours, the Dust-off was completed. The VC force broke contact and a sweep of the contact area revealed the bodies of  enemy soldiers along with weapons and equipment.
            </p>
            <p>
              During the day’s contact five Bobcats were killed and fourteen were wounded.
            </p>
            <p>
              On December 16, 1968, at 1100 hours, Company B was operating one kilometer north of the junction of Highways 1 and 7A, when they received small arms fire. One Bobcat was wounded. Fire was returned with unknown results.
            </p>
            <p>
              At 1650 hours, the battalion CRIP unit requested a dust-off for two Bobcats wounded and two Bobcats killed. A jeep with the unit had detonated a mine on Highway 7A, just north of the junction of Highway 1.
            </p>
            <p>
              On December 17, 1968, at 1914 hours, Company A reported that its ambush patrol located south of Trung Lap at XT 588196 was receiving small arms, automatic weapons and mortar fire. At 1915 hours, Company B reported that it was receiving heavy small arms fire at XT 580195. The enemy broke contact with both elements by 1930 hours. Company B dusted-off two wounded Bobcats from the encounter.
            </p>
            <p>
              On December 18, 1968, at 0603 hours, the Recon Platoon departed the night encampment to begin a sweep of Highway 7A. At 0719 hours, the platoon requested a Dust-off for one wounded at the junction of Highway 7A and 237.
            </p>
            <p>
              At 1013 hours, Company A reported that they were receiving small arms, automatic weapons and RPG fire 2 kilometers north of Phuoc My at XT 595173. At 1015 hours, they requested a Dust-off as one APC was hit by RPG fire. At 1018 hours, Company B started moving towards the Company A contact. At 1043 hours, Company B started receiving fire from their left flank. Company A put a hold on the Dust-off until a landing zone could be secured. At 1101 hours, three wounded Bobcats were dusted-off. One KIA remained at the Company A location.
            </p>
            <p>
              At 1244 hours, Company A requested a Dust-off for two Bobcats who had been shot. Company B also dusted-off two wounded. Two APCs had been hit by RPG fire so far in the contact. There was a lull till 1521 hours, when both Companies A and B reported receiving sniper fire. Soon Company A started receiving small arms and RPG fire in the same general area of the earlier contact. A Dust-off was requested at 1547 hours for six wounded Bobcats from Company A. Air strikes and helicopter gun ship fire were placed on the enemy position.
            </p>
            <p>
              At 1602 hours, Companies A and B received 60mm mortar fire. Air strikes and light fire team ordinance was again applied to the enemy positions.  At 1715 hours, another barrage of 60mm mortar fire was received. At 1720 hours, Company A had an APC hit by RPG fire. Airstrikes and helicopter light fire teams were again requested. At 1728 hours, Company A had two more APCs hit by RPG fire. Company B requested a Dust-off  at 1742 hours for two wounded Bobcats. Company A received a few more 60mm mortar rounds.
            </p>
            <p>
              The VC broke contact and the two companies made a quick sweep of the area. They then closed into the night perimeter at 1915 hours. Air strikes and artillery were applied to suspected locations of enemy forces in the area. During the contact twenty Bobcats were wounded. One Bobcat from Company A was killed and one Bobcat from Company B was killed.
            </p>
            <p>
              On December 19, 1968, an ambush patrol from Company C was established 1.5 kilometers southwest of the junction of Highways 7A and 1. At 2005 hours, the patrol killed six of ten VC who walked into the kill zone.
            </p>
            <p>
              On December 20, 1968, Company B was conducting a RIF one kilometer north of the junction of Highways 1 and 7A, when at 1355 hours, they made contact with an estimated reinforced enemy company at XT 560180. Company C, 1/5th(M) along with Companies B and D of the 2/12th Infantry and Troop A, ¾ Cavalry were moved into the area of contact. Air strikes, LFTs and artillery were called in to support the forces. After the contact ended, a sweep of the battlefield was conducted. Enemy dead along with miscellaneous weapons and equipment were cleared from the battlefield.
            </p>
            <p>
              Friendly units suffered fourteen wounded and one killed.
            </p>
            <p>
              On December 21, 1968, Company C was assigned to provide security for Rome Plows cutting in the Bau Dieu area at XT 575173. At 0935 hours, an APC from the company detonated a booby trap. Two Bobcats were wounded and one was killed.
            </p>
            <p>
              At 1043 hours, Company B was sweeping the area of the previous day’s contact when an APC detonated a booby trap. One Bobcat was wounded.
            </p>
            <p>
              On December 22, 1968, elements of the battalion continued to sweep the area of the August 20 contact, policing up various enemy ordinance and equipment.
            </p>
            <p>
              On December 28, 1968, at 1425 hours, an APC assigned to secure Rome Plow operations at XT 577177 detonated an AT mine. A second APC detonated another AT mine about a half hour later.
            </p>
            <p>
              On December 29, 1968, at 0900 hours, a member of the Recon Platoon was wounded by a booby trapped hand grenade. Company B was operating 2 kilometers northwest of Trung Lap. At 1014 hours, at XT 571233, a booby trapped 155mm artillery round was detonated by an APC. Five Bobcats from Company B were killed and eleven wounded by the explosion, which also destroyed the APC.
            </p>
            <p>
              At 1050 hours, an APC from Company C detonated a booby trap injuring three Bobcats.
            </p>
            <p>
              During December 1968, twenty-one Bobcats died in Vietnam. They were:
            </p>
            <!-- <ul>
              <li>Curtis R. Crum</li>
              <li>Joseph R. Thornton</li>
              <li>Robert P. English</li>
              <li>Durward G. Morse</li>
              <li>Donald A. Pettitt</li>
              <li>Alan C. Lockard</li>
              <li>Ronald L. Niewahner</li>
              <li>Jerry M. White</li>
              <li>Michael R. Bishop</li>
              <li>Gary W. Gross</li>
              <li>Roger C. McCord</li>
              <li>James E. Sparks</li>
              <li>James F. Rummage</li>
              <li>Leonard E. Bradford</li>
              <li>James I. Cutler</li>
              <li>William S. DeBoer</li>
              <li>Dan M. James</li>
              <li>Joseph E. Strawbridge</li>
              <li>THREE whose names are unknown to us writing this report</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 12)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop

@section('vietnam_1969_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_12">
        <div data-button="jan" data-year="1969">
          <div data-button="jan" data-year="1969">January</div>
        </div>
        <div data-button="feb" data-year="1969">
          <div data-button="feb" data-year="1969">February</div>
        </div>
        <div data-button="mar" data-year="1969">
          <div data-button="mar" data-year="1969">March</div>
        </div>
        <div data-button="apr" data-year="1969">
          <div data-button="apr" data-year="1969">April</div>
        </div>
        <div data-button="may" data-year="1969">
          <div data-button="may" data-year="1969">May</div>
        </div>
        <div data-button="jun" data-year="1969">
          <div data-button="jun" data-year="1969">June</div>
        </div>
        <div data-button="jul" data-year="1969">
          <div data-button="jul" data-year="1969">July</div>
        </div>
        <div data-button="aug" data-year="1969">
          <div data-button="aug" data-year="1969">August</div>
        </div>
        <div data-button="sep" data-year="1969">
          <div data-button="sep" data-year="1969">September</div>
        </div>
        <div data-button="oct" data-year="1969">
          <div data-button="oct" data-year="1969">October</div>
        </div>
        <div data-button="nov" data-year="1969">
          <div data-button="nov" data-year="1969">November</div>
        </div>
        <div data-button="dec" data-year="1969">
          <div data-button="dec" data-year="1969">December</div>
        </div>
      </div>
    </div>
    <div class="allSegments">
      <div class="timeSegment vietnamLogSegment" data-section="1969">
        <div class="segmentContent">
          <div class="backBttn">
            <a href="{{ url('/history/timeline') }}">
              <div><< HISTORY</div>
            </a>
          </div>
          <div class="segmentTitle"><u>Vietnam, 1969</u></div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="jan">JANUARY</div>
            <p>
              On January 03, 1969, At 0925 hours, Company B received enemy small arms fire on Highway 7A about one kilometer north of the junction of Highway 1. The fire was returned with unknown results. One Bobcat was wounded in the exchange.
            </p>
            <p>
              At 1125 hours, an APC from the Recon Platoon detonated an AT mine just north of the area of Company B’s earlier contact. The APC was a combat loss.
            </p>
            <p>
              Company C was assigned to provide security for Rome Plow operations northeast of Trang Bang. At 1555 hours a Rome Plow detonated an AT mine at XT 504216.
            </p>
            <p>
              On January 06, 1969, Company A conducted an S&D operation northeast of Trang Bang. At 1600 hours, a small ammunition cache was located. At 1615 hours, an APC from Company A detonated an AT mine in the same area. At 1830 hours, an ambush patrol from Company A engaged an unknown number of VC, northwest of the cache site at XT 517207. One body of an enemy soldier was located in a later search of the area.
              On January 07, 1969, Company B was conducting a RIF on the north side of Highway 1, about 1 kilometer northwest of the junction of highway 7A.  At 1025 hours, one Bobcat from the company was wounded when a booby trapped hand grenade was tripped and detonated at XT 551177.
            </p>
            <p>
              At 2130 hours, an ambush patrol from Company A engaged an unknown number of  VC about 3 kilometers northeast of Trang Bang at XT 510210. The body of one enemy soldier with his weapon was found after the contact.
            </p>
            <p>
              On January 09, 1969, Company B was securing Rome Plow operations one kilometer southwest of Trung Lap. At 1000 hours, an APC from Company B detonated an AT mine. One Bobcat was wounded and the APC was a combat loss. At 1030 hours, another APC from Company B detonated an AT mine in the same general area. At 1330 hours, the company received a barrage of eight 60mm mortar rounds. One Bobcat was wounded. Fire was returned with unknown results. At 1400 hours, a Rome Plow was damaged when it detonated an AT mine. At 1430 hours, members of the company engaged and killed one VC.
            </p>
            <p>
              On January 10, 1969, Company A was conducting an S&D operation northwest of the junction of Highways 1 and 7A.  At  1400 hours, one Bobcat from the company was wounded when a booby trapped hand grenade exploded at XT 559184. At 1538 hours, as the company was sweeping west, it came under small arms fire. The fire was returned with unknown results. Two Bobcats were wounded in the contact.
            </p>
            <p>
              On January 11, 1969, an ambush patrol from Company C engaged an unknown number of VC shortly after midnight, along Highway 7A, 1 kilometer north of Highway 1. In a search of the area after the contact the bodies of four enemy soldiers were found along with weapons and equipment. One wounded VC soldier was captured.
            </p>
            <p>
              At 1120 hours, the Scout Platoon requested a Dust-off for two injured Bobcats. The pair was wounded as they began to search a tunnel and a booby trap exploded just inside the tunnel. Both men died of their injuries later in the day.
            </p>
            <p>
              On January 12, 1969, Company A’s night perimeter located just north of the junction of Highways 7A and 1 at XT 567173, received 16 rounds of 60mm mortar fire. The fire was returned with unknown results. One Bobcat was wounded in the incident.
            </p>
            <p>
              On January 14, 1969, at 1755 hours, an APC from Company B detonated an AT mine on Highway 7A, one kilometer north of the Highway 1 junction. The APC was turned over by the force of the blast. One Bobcat from Company B was killed and four were wounded.
            </p>
            <p>
              On January 17, 1969, at 1113 hours, a Bobcat from Company B detonated a hand grenade that was rigged with a trip wire and instantaneous fuse at XT 548192. He died within a few minutes of the blast. This incident occurred as the company was sweeping the area southwest of Trung Lap.
            </p>
            <p>
              On January 18, 1969, at 0845 hours, an APC from Company C detonated an AT mine 2 kilometers northwest of Thai My at XT 513165. The vehicle was a combat loss.
            </p>
            <p>
              At 1140 hours, another APC from Company C detonated an AT mine along Highway 7A, 2 kilometers north of the Highway 1 junction.
            </p>
            <p>
              On January 21, 1969, Company B was assigned to sweep and clear Highway 7A from north of Trung Lap to the junction of Highway 1. At 0745 hours, the sweep was delayed until the fog lifted. The sweep was resumed and at 0806 hours, a 30 pound AT mine was located and destroyed. At 0837 hours, Company B reported that while moving through Trung Lap one vehicle hit and killed a pig. At 0939 hours, an APC from Company B detonated an AT mine on Highway 7A, one kilometer north of Highway 1 at XT 572178. The blast flipped the track over pinning one Bobcat underneath, killing him. Another Bobcat was wounded.
            </p>
            <p>
              On January 26, 1969, at 0852 hours, a Bobcat from a flame track assigned to Company C stepped on and detonated a 30 pound AT mine. He was killed instantly and another Bobcat suffered busted eardrums from the blast. The incident occurred ½ kilometer northwest of Trung Lap at XT 585223. Two booby trapped hand grenades were located within 30 meters of the mine and were destroyed in place.
            </p>
            <p>
              The 25th Infantry Division reported the following personnel losses for the quarterly period of November 01, 1968 to January 31, 1969:
            </p>
            <p>
              KIA: 236;   WIA: 3,955 (669 evacuated);  MIA: 0.
            </p>
            <p>
              “Under the direction of the commanding general all available chain link fence was issued to mechanized units of the division. The use of chain link fencing has long been recognized as a means of reducing the effectiveness of RPG rounds in the protection of friendly bunkers, however little attention has been given to tracked vehicles. It has been found that this material can also be carried in tracked vehicles, easily installed, and provides similar effectiveness in reducing damage. One 50 foot roll of fence, divided into two equal lengths, seven eight foot pickets and communications wire is all that is required to construct a “car port.” The two sections of fence and pickets can be carried without difficulty and can be installed within ten minutes. Sufficient chain link fence to insure one roll per tracked vehicle and artillery piece with a 10% stockage for replacement was made available immediately.”
            </p>
            <p>
              During January 1969, 6 Bobcats died in Vietnam. They were:
            </p>
            <!-- <ul>
              <li>Anthony L. Lema</li>
              <li>David M. Williams</li>
              <li>Richard Adiutori</li>
              <li>Roger L. Langford</li>
              <li>James L. Miller</li>
              <li>William D. Murray Jr.</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 1)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="feb">FEBRUARY</div>
            <p>
              On February 01, 1969, Company A was conducting a RIF operation about 4 kilometers northeast of Trang Bang. At 1450 hours, a small food cache was located and four suspected VC were detained. At 1715 hours, one Bobcat from the company was wounded when he detonated a booby trap. At 2240 hours, an ambush patrol from Company A located at XT 512220 engaged 2 VC, killing one.
            </p>
            <p>
              On February 02, 1969, Company B was operating northeast of Trang Bang in the area of XT 5322. In the morning the company located two six ton rice caches.
            </p>
            <p>
              At 1653 hours, a tracked recovery vehicle attached to Company C detonated an AT mine 3 kilometers northeast of Trang Bang. The vehicle was a combat loss.
            </p>
            <p>
              At 2000 hours, an ambush patrol from Company A located 2 kilometers south of Trung Lap, received RPG fire which wounded 3 Bobcats. Fire was returned with small arms and artillery with unknown results.
            </p>
            <p>
              On February 03, 1969, at 1025 hours, an APC from Company B detonated an AT mine
            </p>
            <p>
              1 ½  kilometers north of the junction of Highways 1 and 7A, at XT 563185. One Bobcat was wounded and the track was a combat loss.
            </p>
            <p>
              On February 04, 1969, at 1400 hours, a 75 round artillery barrage of white phosphorous was fired along a 3 kilometer axis of XT 5927 to 6130 in the Ho Bo Woods in the hopes of starting a fire.
            </p>
            <p>
              At 1432 hours, to the south of the above location at XT 578253, Company A requested a Dust-off for three wounded Bobcats and two Bobcats who had been killed. The casualties were the result of two 155mm booby trapped rounds being detonated. They were rigged with trip wires and set 25 meters apart. One was set in a tree to create a low air burst. One of the Bobcats who was wounded, died shortly after being dusted-off.
            </p>
            <p>
              At 1506 hours, Company A had an APC detonate an AT mine that was set in a rice paddy dike in the same general area. The vehicle was a combat loss.
            </p>
            <p>
              On February 05, 1969, Companies A and B were conducting a RIF operation 2 kilometers northeast of Trung Lap in the area of XT 6023. At 1637 hours, Company B requested a Dust-off for two wounded Bobcats. A grenade rigged with a trip wire was detonated at XT 600228, causing the injuries. One of the injured Bobcats died later in the day in hospital from his wounds.
            </p>
            <p>
              On February 08, 1969, the Recon Platoon conducted a RIF southwest of Trung Lap in the area of XT 5619. Companies A and B were conducting a RIF 2 kilometers east of Trung Lap in the area of XT 6222. Scattered contact started at around 1200 hours.
            </p>
            <p>
              At 1338 hours, Company A requested a Dust-off for three wounded Bobcats at XT 625220. The company had engaged an unknown number of VC. After the firefight they found four enemy bodies, a machinegun and an RPG launcher. The company also had four wounded who did not require Dust-off. At 1411 hours, Company A requested another Dust-off for a Bobcat with a gunshot wound. They also had one Bobcat with shrapnel wounds. At 1442 hours, Company A requested another Dust-off for one wounded Bobcat. These were in the same location as the first Dust-off. At 1640 hours an air strike was directed on enemy positions in the area. At 1648 hours, Company A requested a Dust-off for a Bobcat with a severed artery.
            </p>
            <p>
              At 1811 hours, Company B had two APCs hit by RPG rounds at XT 627220. The company Dusted-off six wounded Bobcats and one dead Bobcat. At 1846 hours, an airstrike was delivered on suspected enemy positions.
            </p>
            <p>
              At 2037 hours, Company A linked up with elements of the 2/14th Infantry and established a night perimeter. At 2107 hours, Company B established a night perimeter at XT 618217 and dusted-off three additional dead Bobcats on resupply helicopters.
            </p>
            <p>
              On February 10, 1969, Company A made contact with an estimated VC squad, one kilometer north of Trung Lap at XT 590225. At 1250 hours, Company A requested a Dust-off for one man with a gunshot wound. At 1304 hours, the Dust-off was canceled as the Bobcat had died from his wounds. At 1310 hours, Company A reported that they had an estimated 15 VC on line at XT 586232. Company B was committed to respond to the Company A contact. Air strikes and artillery were called in on the enemy position. At 1411 hours, Company B arrived on scene. A sweep of the enemy position located one enemy body.
            </p>
            <p>
              On February 11, 1969, Companies A and B conducted a RIF operation east of Trung Lap in the area of XT 6121. The bodies of several enemy soldiers that had been killed by earlier air strikes were located in the area.
            </p>
            <p>
              At 1345 hours, Company C, operating on the northern fringe of the Filhol, had an APC detonate an AT mine at XT 656227. The vehicle was a combat loss.
            </p>
            <p>
              On February 12, 1969, Company B was operating 6 kilometers north of Trung Lap with elements of the 2/12th Infantry. At 1000 hours, the company found and destroyed 20 meters of tunnel containing candles at XT 575266.  At 1100 hours, Company B requested a Dust-off for two wounded Bobcats and one dead Bobcat. A Bobcat was probing for possible mines on a dirt road when there was an explosion killing him and wounding two others.
            </p>
            <p>
              On February 13, 1969, Company C was conducting a RIF operation about 3 kilometers south of the junction of Routes 238 and 6A in the Boi Loi Woods. At 1400 hours, they discovered a large rice cache at XT 553297.
            </p>
            <p>
              On February 14, 1969, Company B was conducting operations east of Trung Lap. At 1648 hours, Company B requested a Dust-off for seven wounded Bobcats at XT 605213. An APC from the company had detonated an AT mine and then caught fire and burned out of control. At 1705 hours, the Dust-off was complete, however, the body of one dead Bobcat was still next to the burning APC and could not be removed until the fire was out.
            </p>
            <p>
              Company C conducted operations during the day with one company from the 2/12th Infantry.
            </p>
            <p>
              On February 15, 1969, the battalion conducted an S&D operation in the southern Ho Bo Woods in the area of XT 6025. At 1345 hours, an APC from the Recon Platoon detonated an AT mine. One Bobcat was wounded. At 1355 hours, another APC from the platoon hit an AT mine. The track was a combat loss. At 1430 hours, Company C located a rice cache at XT 599299.
            </p>
            <p>
              On February 16, 1969, the Recon Platoon located and destroyed three booby trapped hand grenades near Trung Lap. Companies A and B conducted a RIF three kilometers northeast of Trung Lap. At 0905 hours, an APC from Company A detonated an AT mine. The vehicle was a combat loss. At 1345 hours, Company A located and destroyed 6 rounds of 82mm mortar ammunition.
            </p>
            <p>
              Also at 1345 hours, an APC from Headquarters Company detonated an AT mine just north of Trung Lap at XT 606226. At 1530 hours, Company C had a brief exchange of small arms fire at XT 566246.
            </p>
            <p>
              On February 17, 1969, the night perimeter of Companies A and B received small arms and RPG fire at 0036 hours. The fire was returned with unknown results. One Bobcat was wounded in the exchange.
            </p>
            <p>
              Company C and Company C, 2/12th Infantry conducted a combined RIF operation northwest of Trung Lap in the area of XT 5627.
            </p>
            <p>
              On February 18, 1969, at 1145 hours, Company B located an ammunition cache 5 kilometers north of Trang Bang at XT 513242. At 1512 hours, the company received small arms fire, but suffered no casualties.
            </p>
            <p>
              At 1630 hours, Company A received small arms and RPG fire in the Ho Bo Woods at XT 623279. Fire was returned with organic weapons, artillery and air strikes. The bodies of several enemy soldiers with their weapons were located in a sweep of the area.
            </p>
            <p>
              On February 21, 1969, at 1625 hours, an APC from Company A detonated an AT mine northwest of Trung Lap at XT 560232. The vehicle was a combat loss.
            </p>
            <p>
              On  February 22, 1969, the Recon Platoon was assigned to work with the 2/12th Infantry in the Boi Loi Woods area. At 1110 hours, an APC from Company B detonated an AT mine in the area of Xom Moi north of Trung Lap. The vehicle was a combat loss.
            </p>
            <p>
              On February 23, 1969, at 0048 hours, the battalion night perimeter began receiving an 82mm mortar barrage. At 0117 hours, the battalion aid station requested a Dust-off for five wounded Bobcats and one dead Bobcat. At 0158 hours, the Dust-off was completed. Company A had 1 WIA and 1 KIA, Company B had 1 WIA, Company C had 2 WIA and Headquarters Company had 1 WIA. At 0225 hours, another mortar barrage was received without casualties.
            </p>
            <p>
              At 0535 hours, it was reported that FSB Mahone was under ground attack. At 0708 hours, Company A started a sweep of Highway 1 to the junction of Highway 7A and then north on 7A. At 0944 hours, Highway 7A was reported open for traffic.
            </p>
            <p>
              At 0905 hours Company B departed the forward base for a RIF operation. At 0930 hours, Company C departed for a RIF. At 1010 hours, Company B reported receiving RPG and small arms fire 7 kilometers north of Trung Lap at XT 602276. Artillery and air strikes were called in on the suspected enemy positions. A sweep revealed a couple of dead bodies of NVA soldiers with weapons. At 1324 hours, Company B requested a Dust-off for one Bobcat with a gunshot wound.
            </p>
            <p>
              At 1448 hours, Company C reported receiving RPG fire in the area of Xom Moi at XT 620223. At 1453 hours, Company C requested a Dust-off. One APC had been hit twice by RPG fire. At 1512 hours, the Dust-off was complete for three wounded Bobcats and one dead Bobcat.  At 1531 hours, Company C requested another Dust-off for four wounded in the same area. At 1550 hours, the dust-off was completed and air strikes started pounding the area. At 1703 hours, Company C reported that they had one APC hit by RPG fire and that they were pulling back to allow more air strikes in the area. At 1757 hours, Company C requested a Dust-off for more wounded Bobcats in the same location as the last Dust-off. At 1830 hours, the Dust-off was complete for six wounded Bobcats and one dead Bobcat. At 1856 hours, as air strikes and heavy artillery were being placed into the area, Company C began moving to FSB Patton.
            </p>
            <p>
              On February 25, 1969, at 0857 hours, Company A was conducting a RIF operation 2 kilometers northeast of the junction of Highways 1 and 7A, when an unknown type booby trap exploded. Three Bobcats were wounded. At 0915 hours, in the same area the company located and destroyed a booby trapped 105mm and a 155mm artillery round.
            </p>
            <p>
              At 1820 hours, Company A and Company A, 2/34th Armor received small arms and RPG fire. Fire was returned with organic weapons and artillery. Several enemy soldiers were killed in the contact. One Bobcat from Company A was killed and four soldiers were wounded.
            </p>
            <p>
              On February 26, 1969, at 0445 hours, Cu Chi Base Camp was attacked. Enemy soldiers penetrated the perimeter and destroyed 9 CH-47 Helicopters. Two others were severely damaged.
            </p>
            <p>
              Company B was operating on Highway 7A, 2 kilometers north of the junction of Highway 1, with elements of the 65th Engineer Battalion. At 1005 hours, three command detonated mines were exploded and they also received small arms fire. Fire was returned with unknown results. Three soldiers were wounded in the contact.
            </p>
            <p>
              On February 27, 1969, Company C was conducting a RIF operation with elements of the 2/34th Armor, 5 kilometers northwest of the junction of Highways 7A and 1. At 1804 hours, the battalion LOH was hit and made a successful crash landing in the area of Company C APCs. At 1840 hours, the units received small arms, automatic weapons and RPG fire. The fire was returned with organic weapons, artillery and helicopter gun ships. At 1849 hours, Company C requested a Dust-off at XT 545217. Two Bobcats from Company C were killed and three were wounded in the contact.
            </p>
            <p>
              At 2045 hours, an APC from Company C detonated an AT mine with only minor damage resulting from the blast. At 2230 hours, another APC from Company C detonated an AT mine along Highway 7A, one kilometer south of Trung Lap. Three Bobcats were wounded in the explosion.
            </p>
            <p>
              On February 28, 1969, at 1125 hours, the Recon Platoon, while attached to Company C, 2/12th Infantry, made contact with an unknown size enemy force while conducting a RIF operation east of Go Dau Ha in the area of XT 4525. They received small arms, automatic weapons and RPG fire. Fire was returned with organic weapons, artillery and air strikes. One Bobcat was killed and three were wounded in the contact. One APC was also a combat loss.
            </p>
            <p>
              At 1230 hours, an APC from Company A detonated an AT mine on Highway 7A, 2 kilometers southwest of Trung Lap. Three Bobcats were wounded and the APC was a combat loss.
            </p>
            <p>
              During February 1969, 19 Bobcats died in Vietnam. They were:
            </p>
            <!-- <ul>
              <li>Lee E. Burnor</li>
              <li>Steven M. Britton</li>
              <li>Harold R. Richardson</li>
              <li>John W. Spafford</li>
              <li>David P. Haegele</li>
              <li>Arthur L. Klaus</li>
              <li>Alexander A.S. Peoples</li>
              <li>Christopher S. Smith</li>
              <li>Kerry F. Wilson</li>
              <li>Dale R. Jackson</li>
              <li>Joe J. Miles</li>
              <li>Alvin R. Fritz</li>
              <li>Donald H. Sisson</li>
              <li>Robert R. Buck</li>
              <li>Paul F. Clark</li>
              <li>James E. Wise</li>
              <li>Ralph E. Nathan</li>
              <li>William S. Potter</li>
              <li>ONE whose name is unknown to us writing this report.</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 2)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="mar">MARCH</div>
            <p>
              On March 01, 1969, one Bobcat from Company A died in hospital from wounds he had received in an earlier contact.
            </p>
            <p>
              On March 04, 1969, at 0535 hours, the Company C night perimeter, located along Highway 237, 4 kilometers northwest of Trung Lap, received small arms and RPG fire. Fire was returned with organic weapons and helicopter gunships. There were no friendly casualties.
            </p>
            <p>
              At 0745 hours, Companies C and D of the 2/12th Infantry made an airmobile combat assault into Grid XT 5425, several kilometers northwest of the Company C, 1/5th(M) night perimeter. They immediately established heavy contact and Companies A and C, 1/5th(M) were dispatched to reinforce the contact.
            </p>
            <p>
              At 1308 hours, Company A requested a Dust-off at XT 556258 for one Bobcat with a gunshot wound. At 1315 hours, Company C requested a Dust-off for three Bobcats with gunshot wounds. At 1327 hours, Companies A and C arrived in the area of the 2/12th Infantry contact.
            </p>
            <p>
              At 1340 hours, Company C requested a Dust-off for five wounded Bobcats. At 1345 hours, Company A requested a Dust-off for two wounded Bobcats.
            </p>
            <p>
              At 1432 hours, Company D, 2/12th Infantry cleared the area of contact and Companies A and C, 1/5th(M) began a sweep of the contact area. At 1703 hours, the mech companies reported that they were no longer receiving enemy fire. The dead bodies of  enemy soldiers along with weapons had been located in a search of the contact area.
            </p>
            <p>
              At 1749 hours, Company C reported that two APCs had been hit by RPG fire and one was on fire. Company C requested a Dust-off at 1757 hours for eleven wounded Bobcats. At 1851 hours, Company C requested a Dust-off for one wounded. At 1933 hours, a Dust-off was requested for six Bobcats from Company A with fragmentation wounds.
            </p>
            <p>
              At 2019 hours, at XT 560263, Company C received 3 RPG rounds and some small arms fire. At 2045 hours, Company C reported that all its APCs were now on Highway 7A, in the area of Trung lap. At 2101 hours, they closed their night perimeter. At 2111 hours, Company B closed their night perimeter.
            </p>
            <p>
              During the day’s contact two Bobcats from Company C were killed and Companies A and C suffered a total of 38 wounded.
            </p>
            <p>
              On March 05, 1969, Company A, 1/5th(M) along with Companies C and D, 2/12th Infantry, were in a combined night perimeter at XT 548251, near the area of the previous day’s contact. At 0451 hours, the perimeter began to receive mortar, RPG and small arms fire from the north. A flare ship and helicopter light fire team were requested. At 0536 hours, two Dust-offs were requested for at least 12 litter and more ambulatory casualties. At 0650 hours, the Dust-offs were completed.
            </p>
            <p>
              At 0700 hours, Company B began a road sweep of Highway 1 and then Highway 7A.
            </p>
            <p>
              At 0710 hours, Company A began a search of the area north of the night perimeter. At 0840 hours, Company C and the recon Platoon began movement to link up with Company A. They reached the area at 1105 hours. The day was spent policing enemy bodies, weapons and equipment from the area of contact.
            </p>
            <p>
              Company A and Company C, and the Recon Platoon, 1/5th(M) closed FSB Patton by 1730 hours. There were three Bobcats from Company A killed in the day’s action.
            </p>
            <p>
              On March 06, 1969, at 1020 hours, an APC from Company A detonated an AT mine 2 kilometers northwest of Trung Lap at XT 560205. Three Bobcats were wounded and the APC was a combat loss.
            </p>
            <p>
              On March 09, 1969, at 1930 hours, the night perimeter of Company B, located 3 kilometers north of Trung Lap, received four 60mm mortar rounds. A Dust-off was requested for eight wounded Bobcats and one wounded soldier from the 2/34th Armor. The Dust-off was completed at 1950 hours. One of the wounded Bobcats died at the hospital that evening.
            </p>
            <p>
              On March 10, 1969, the Recon Platoon was attached to the 2/12th Infantry and conducted S&D operations northeast of Trang Bang.
            </p>
            <p>
              Companies A and B were assigned highway clearing and route security for portions of Highways 1, 7A and 19. At 0720 hours, Company B received one mortar round and several RPG rounds at its night perimeter, northeast of Trung Lap. One Bobcat was killed.
            </p>
            <p>
              On March 11, 1969, the Recon Platoon was operating 3 kilometers northwest of Trung Lap with elements of the 2/12th Infantry. At 1045 hours, an APC from the platoon exploded an AT mine. One Bobcat was killed and two were wounded. The APC was a combat loss.
            </p>
            <p>
              On March 12, 1969, the 1/5th(M) continued operations in the Trung Lap area. Companies A and C conducted a RIF operation near Trung Lap. Company A had an APC detonate a mine, wounding two Bobcats.
            </p>
            <p>
              Company B was operating northeast of Trung Lap, when at 1005 hours, an APC detonated an AT mine southwest of the junction of Routes 7A and 15. One Bobcat was wounded and the APC was a combat loss. As the Dust-off came in to pick up the wounded, it detonated another AT mine, causing major damage to the helicopter.
            </p>
            <p>
              On March 13, 1969, Company A conducted a RIF operation northeast of Trung Lap. At 1615 hours, two booby traps were detonated wounding five Bobcats from the company. Two of them died from wounds before they could get to hospital.
            </p>
            <p>
              A duce and a half truck from the 1/5th(M) detonated an AT mine on Highway 7A, 1 kilometer south of Trung Lap at 1000 hours. The vehicle was destroyed. At 1325 hours, Company B, while sweeping around Trung Lap, had 1 round of RPG fired at one of their tracks, but it missed. Fire was returned with unknown results.
            </p>
            <p>
              On March 14, 1969, at 1859 hours, Company C received a mortar barrage on their night perimeter. Two Bobcats were wounded and Dusted-off.
            </p>
            <p>
              At 2315 hours, Company B departed the night perimeter for a night move.
            </p>
            <p>
              On March 15,1969, at 0007 hours, Company C departed their night perimeter for a link up site. At 0031 hours, Company C was located at XT 601240 and moving east. At 0118 hours, Company C was located at XT 607240. They reported hearing movement to their front and received one round of RPG fire. At 0122, a helicopter light fire team was requested and Company C reported that it had 2 APCs hit at this time. At 0130 hours, Company C reported that they were receiving fire from the front and on both flanks. They reported that there were wounded and killed on the two lead APCs and that the column was backing out of the contact at that time. Company B began closing on the Company C contact area. At 0156 hours, Company C requested a Dust-off to stand-by until they could secure an LZ. At 0228 hours, Company C sent a dismounted patrol to pick up any personnel from the lead APCs. Star Clusters had been fired from the APCs.
            </p>
            <p>
              At 0252 hours, the first Dust-off was complete for 8 wounded Bobcats. At 0320 hours, the 2nd Dust-off was complete for 9 wounded Bobcats and one dead Bobcat. At 0321 hours, Company C reported that they were no longer receiving enemy fire.
            </p>
            <p>
              At 0402 hours, the dismounted patrol reached the downed APCs. They found no one alive. At 0701 hours, Company C moved through the area of contact.
            </p>
            <p>
              Five Bobcats were killed and nineteen were wounded in the contact.
            </p>
            <p>
              On March 16, 1969, Companies A and B provided security for Rome Plow operations north of Trung Lap. Company C conducted a RIF along Highway 7A.
            </p>
            <p>
              On March 17, 1969, at 0402 hours, the Company A night perimeter at XT 555271, received 12 rounds of 60mm mortar fire. Two Bobcats were wounded. Fire was returned with unknown results.
            </p>
            <p>
              Companies B and C cleared and secured Highway 7A for convoy use.
            </p>
            <p>
              On March 19, 1969, Company B was operating east of Phouc My at XT 599157. At 1230 hours, a booby trap was detonated wounding one Bobcat. Company C was providing security for Rome Plow operations north of Trung Lap at XT 575275. At 1400 hours they received small arms and RPG fire, wounding one Bobcat. Fire was returned with unknown results. At 1600 hours, Company C again received small arms and RPG fire. Fire was returned with organic weapons and artillery. One Bobcat was killed and two were wounded in the second contact.
            </p>
            <p>
              On March 20, 1969, at 1336 hours, Company C requested a Dust-off. While securing Rome Plow operations at XT 575270, an APC from Company C detonated an AT mine wounding two Bobcats. The track was a combat loss.
            </p>
            <p>
              At 1608 hours, The Recon Platoon received sniper fire at XT 519263, while escorting two flame tracks and a downed APC. Fire was returned with unknown results.
            </p>
            <p>
              At 2320 hours, the Company C night perimeter at XT 552273, received small arms, automatic weapons, RPG and mortar fire. The fire was returned with organic weapons, artillery, helicopter gunships, C-119 gunships and air strikes. Seven Bobcats were wounded in the contact. A check of the area at first light revealed enemy dead along with miscellaneous weapons and ammunition.
            </p>
            <p>
              On March 24, 1969, Company B was assigned to provide security for Rome Plow operations north of Trung Lap. At 0845 hours, Company B received small arms, automatic weapons and RPG fire. The fire was returned with the support of artillery and helicopter gunships. One Bobcat was wounded in the contact.
            </p>
            <p>
              At 1524 hours, Company C requested a Dust-off northwest of Trung Lap at XT 565242. An APC had detonated an AT mine. Three dead Bobcats and three wounded bobcats from Company C were dusted-off. The APC was a combat loss. At 1555 hours, another Dust-off was requested for a Bobcat with eardrum damage and for one with heat stroke.
            </p>
            <p>
              At 1740 hours, Company B again received small arms and RPG fire in the same area. Fire was returned and the enemy fire was suppressed. One Bobcat was wounded in the contact.
            </p>
            <p>
              On March 25, 1969, at 0655 hours, Company C departed the night perimeter for a sweep of Highway 7A from FSB Patton to Highway 1. They were then to provide convoy escort and road security with the Recon Platoon.
            </p>
            <p>
              At 0825 hours, Company B departed their night perimeter to provide security for Rome Plow operations. At 0845 hours, Company B advised that a tank from the 2/34th Armor struck a mine at XT 566263. The mine blew off the rear road wheel and the track. At 0930 hours, Company B received sniper fire at XT 569261. At 0955 hours, Company B reported receiving small arms fire and one RPG round. At 1000 hours, Company B was advised that the battalion would not be using artillery fire so that they could remain in the contact area and the Rome Plows could keep working. At 1007 hours, Company B requested a Dust-off for 2 wounded Bobcats. One of the wounded still had to be rescued from the area of contact. At 1105 hours, Company B reported that as the patrol was moving in to get the wounded Bobcat, a VC threw a hand grenade and they now have one possible KIA. At 1112 hours, a helicopter light fire team was requested to assist Company B. Brigade informed the battalion that no helicopter light fire teams were available. At 1118 hours, Company B requested a Dust-off for two dead Bobcats and one wounded Bobcat. At 1138 hours, the Dust-off was completed.
            </p>
            <p>
              At 1154 hours, a light fire team arrived at the Company B area of contact. At 1324 hours, Company B received small arms fire from 150 meters away on their right flank. At 1331 hours, Company B requested a Dust-off for two Bobcats wounded by RPG fire. At 1431 hours, Company B received another RPG round. At 1515 hours, Company B received a 10 round 82mm mortar barrage. At 1525 hours, Company A requested a Dust-off for two wounded, same location as Company B. At 1618 hours, Company A requested another Dust-off at the same location for two wounded by RPG shrapnel. In a sweep of the contact area at 1712 hours, the bodies of enemy soldiers with weapons, ammunition and miscellaneous equipment were located and policed up.
            </p>
            <p>
              “While sweeping one area at approximately 0900 hours in the morning, the enemy opened up with AK-47 fire. I was hit in the abdomen and both legs. I fell to the ground and noticed two other men taking cover in a partially destroyed house. The platoons pulled back and attempted to destroy the positions the enemy were in. There were three positions pinning us down, two on one side and one on the other. The platoons attempted several times to get to us but were unable to because of the RPG and AK-47 fire coming from the enemy positions. Soon the enemy started firing AK-47s and RPGs at the house I was next to and the other men were in. Then all our elements started firing on the enemy and I noticed two of the lieutenants low crawling towards the two bunkers which were about 10 meters apart. Lt. Doane, platoon leader of the second platoon, reached the first bunker and threw in several grenades and also fired his M-16 into the bunker. I then saw a grenade thrown from the next bunker and heard the yell “grenade.” I could see that Lt. Doane had been wounded. We yelled at Lt. Doane to go back because he couldn’t make it. But he crawled to the next bunker anyway. When he reached it a burst of AK-47 fire came from the bunker and I could see that it had hit Lt. Doane. He then pulled the pin of a grenade and threw himself into the bunker. Lt. Doane had destroyed the two bunkers on one side of us, and the platoon moved in quickly and pulled the three of us out of the area.”
            </p>
            <p>
              Lt. Stephen H. Doane was later posthumously awarded the Congressional Medal of Honor for his actions.
            </p>
            <p>
              On March 28, 1969, at 1200 hours, Company A was operating north of Trung Lap when they received small arms and RPG fire. One APC received a minor RPG hit. Fire was returned and with the support of a helicopter light fire team the enemy fire was suppressed. At 1830 hours, an APC from Company A detonated an AT mine. One Bobcat was wounded and the APC was a combat loss.
            </p>
            <p>
              Company C lost a TVR (tracked vehicle retriever) when it detonated an AT mine south of Trung Lap.
            </p>
            <p>
              On March 29, 1968, at 1230 hours, Company A had an APC detonate a booby trapped 105mm artillery round north of Trung Lap. There were no casualties but the vehicle suffered considerable damage.
            </p>
            <p>
              During March 1969, 22 Bobcats died in Vietnam. They were:
            </p>
            <!-- <ul>
              <li>Mounce E. West</li>
              <li>Joseph A. Goodson</li>
              <li>Robert L. Sloan</li>
              <li>David P. Jacobs</li>
              <li>Daniel W. Lawson</li>
              <li>John A. Nowakowski</li>
              <li>Larry M. Smith</li>
              <li>Clarence E. Nunnery Jr.</li>
              <li>Donnie W. Caudill</li>
              <li>Daniel W. Lloyd</li>
              <li>John W. Camp</li>
              <li>Julio Hernandez Jr.</li>
              <li>Carl W. Hughes</li>
              <li>Dennis R. Hunsley</li>
              <li>Michael Lynch</li>
              <li>Jack L. Rexrode</li>
              <li>John D. Hamilton Jr.</li>
              <li>Robert A. Holan Jr.</li>
              <li>Dennis M. Silveri</li>
              <li>Stephen H. Doane</li>
              <li>Norman C. Smoots</li>
              <li>ONE whose name is unknown to us writing this report.</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 3)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="apr">APRIL</div>
            <p>
              On April 02, 1969, Company C along with Company B, 2/14th Infantry conducted a RIF operation north of Trung Lap in the western fringes of the Ho Bo Woods. Several mines were located and destroyed.
            </p>
            <p>
              On April 04, 1969, Company C continued to conduct RIF operations northeast of Trung Lap in the Ho Bo Woods area. By 0900 hours, several booby trapped artillery and mortar rounds had been located and destroyed. At 1050 hours, an APC from Company C detonated an AT mine. The track was a combat loss. At 1345 hours, another APC from Company C detonated an AT mine. That vehicle was also a combat loss.
            </p>
            <p>
              On April 05, 1969, Company B was conducting road security when an APC from the company detonated an AT mine. One Bobcat was wounded in the explosion.
            </p>
            <p>
              On April 07, 1969, at 0655 hours, the Recon Platoon departed for a sweep of Highway 7A and Highway 1. At 0715 hours, both Companies A and C departed for a RIF operation with Company B, 2/14th Infantry. At 0735 hours, Company B, 1/5th(M) departed for a sweep of Highway 19.
            </p>
            <p>
              At 0844 hours, the Recon Platoon requested a Dust-off for one Bobcat wounded when a booby trap was detonated south of Trung Lap. At 0927 hours, Company A requested a Dust-off for one Bobcat wounded by a booby trap. At 0948 hours, Company C received one incoming mortar round 3 kilometers northwest of Trung Lap. At 0954 hours, Company C requested a Dust-off for one Bobcat wounded by a booby trap at XT 575244.
            </p>
            <p>
              At 1028 hours, Company C reported that the area they were searching had fighting positions containing RPG ammunition and grenades. They found a couple of bodies and each position had a gas mask in it. At 1050 hours, Company C began receiving small arms and RPG fire. A helicopter light fire team was requested. At 1103 hours, Company C requested a Dust-off for two wounded  Bobcats and one dead Bobcat. At 1157 hours, the Dust-off was completed for two dead Bobcats and three wounded Bobcats. At 1250 hours, another Dust-off was requested for one dead and one wounded Bobcat, also from Company C.
            </p>
            <p>
              At 1548 hours, Company A reported that it was receiving RPG fire. At 1558 hours, Company A requested a Dust-off for four wounded Bobcats.
            </p>
            <p>
              During a sweep of the contact area, enemy bodies, weapons and equipment were policed up and disposed of.
            </p>
            <p>
              On April 09, 1969, at 0049 hours, the Company A night perimeter in the Ho Bo Woods at XT 589294 received some RPG fire. At 0052 hours, one company mortar track was hit and burned out of control. That morning after first light, a graves registration team and an explosives ordinance disposal team was flown to the Company A perimeter to extract two dead Bobcats from the inside of the burned mortar track.
            </p>
            <p>
              On April 10, 1969, at 0240 hours, a Spooky Gunship was operating near the Company B night perimeter. At 0428 hours, Company B reported that they had one Bobcat killed and two wounded from stray rounds from the Spooky Gunship and needed a Dust-off. The Dust-off was completed at 0454 hours.
            </p>
            <p>
              On April 11, 1969, at 0320 hours, the Company B night perimeter, located 8 kilometers northwest of Trung Lap at XT 560280, was attacked by an estimated company size VC force. The enemy attack was suppressed by fire from organic weapons, artillery, helicopter and AC-47 Gunships. In a sweep that morning, the company policed up numerous dead enemy bodies, weapons and equipment. No Bobcats were injured in the contact.
            </p>
            <p>
              At 1310 hours, the CRIP element of the 1/5th(M) was operating southeast of Trung Lap when they engaged an estimated enemy platoon sized force at XT 600187. Artillery and Helicopter gunships were called in for support. Several enemy soldiers and two Bobcats were killed in the contact.
            </p>
            <p>
              On April 12, 1969, Company C was clearing a road north of Highway 8A, about 9 kilometers west of Cu Chi Base Camp. At 0645 hours, an APC detonated an AT mine at XT 745154. One Bobcat from Company C was killed and heavy damage was done to the track.
            </p>
            <p>
              On April 13, 1969, Company B had their night defensive perimeter established 2 kilometers northeast of Bao Trai at XT 560070. An enemy force of unknown size attacked the perimeter with small arms, automatic weapons and RPG fire. The fire was returned and suppressed with the assistance of artillery, helicopter gunships and air strikes. One Bobcat was wounded and one APC was destroyed in the contact. The bodies of enemy soldiers with weapons and miscellaneous equipment were policed from the area of contact and disposed of.
            </p>
            <p>
              At 0830 hours, an APC from the Recon Platoon detonated an AT mine on Highway 7A, one kilometer north of the Highway 1 junction. One Bobcat was wounded in the explosion.
            </p>
            <p>
              On April 15, 1969, an APC from Company A detonated an AT mine in the Ho Bo Woods at XT 615280. The company was conducting a RIF while under OPCON to the 2/34th Armor. The APC was a combat loss.
            </p>
            <p>
              On April 18, 1969, Company B was assigned to provide route security for Highway 7A.
            </p>
            <p>
              At 1600 hours, while Company A was conducting a RIF operation from Cu Chi to FSB Pershing. They engaged a small force of VC, killing several.
            </p>
            <p>
              At 1618 hours, an APC from Company A detonated an AT mine in the same general area as the Company B contact. One Bobcat from Company A was wounded and the APC was a combat loss.
            </p>
            <p>
              On April 22, 1969, Company C was providing security to Route 7A. At 1300 hours, Company A was dispatched to assist a LRRP team that was in contact north of Cu Chi.
            </p>
            <p>
              At 1305 hours, Company B reported that they had one man killed when a booby trapped 105mm artillery round was detonated. A general supply helicopter was requested to extract the Bobcat’s body from the scene.
            </p>
            <p>
              On April 23, 1969, Company C was operating west of Trung Lap when a booby trapped hand grenade was tripped and detonated. One Bobcat was wounded. Companies B and A were operating north of Trung Lap during the day.
            </p>
            <p>
              On April 24, 1968, an M-548 LTVR (Light Tracked Vehicle Retriever) was destroyed when it detonated an AT mine on Highway 7A, south of Trung Lap at 1530 hours.
            </p>
            <p>
              On April 26, 1969, patrol base Frontier City located northwest of Go Dau Ha at XT 202291 and defended by Company C, 4/9th Infantry was attacked by the 271st NVA Regiment at 0035 hours. The company held with the support of artillery, gunships and air strikes.
            </p>
            <p>
              On April 27, 1969, at about 0330 hours, Fire Support Base Patton, located on the north fringe of Trung Lap at XT 593217, began receiving 82mm mortar rounds. Fire was returned with unknown results. One Bobcat from the 4.2 mortar section was killed and 3 were wounded. One Bobcat from the Recon Platoon was also wounded.
            </p>
            <p>
              Company C was sent north of Trung Lap to assist the 2/12th Infantry who were in contact. The members of Company C spent the next two days sweeping the area of the 2/12th Infantry contact, policing up enemy bodies, weapons and equipment.
            </p>
            <p>
              The 25th Infantry Division reported the following personnel statistics for the Quarterly Period of February 01, 1969 to April 30, 1969:
            </p>
            <p>
              KIA: 308;  WIA: 2910;  MIA: 0;  NBD: 9;  NBI: 23.
            </p>
            <p>
              “The 25th Infantry Division G-2 Section rapidly and accurately developed their estimate of the enemy’s intentions for the spring and summer of 1969. The enemy campaign plans did not promise or call for total victory as in the past. Instead they indicated that victory would be achieved in an indirect and complicated way. Military activity would be conducted to gain political and psychological advantage over the United States and the Government of South Viet Nam, thus weakening our resolve, hastening our departure, and leaving the Communist National Liberation Front politically dominant in South Viet Nam.”
            </p>
            <p>
              During April 1969, X Bobcats died in Vietnam. They were:
            </p>
            <!-- <ul>
              <li>Charles L. Hathorn Jr.</li>
              <li>Stanley E. Mc Creary</li>
              <li>Wayne Y. Stewart</li>
              <li>James G. Bunch Jr.</li>
              <li>Rodney T. Fukunaga</li>
              <li>Gerald A. Decker</li>
              <li>Gonzalo H. Villasenor</li>
              <li>Martin Lechuga</li>
              <li>Robert C. King</li>
              <li>David Lee</li>
              <li>Richard A. Oman</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 4)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="may">MAY</div>
            <p>
              At the beginning of May 1969, the 1/5th(M) had the mission of locating and destroying base areas and caches and eliminating Viet Cong Cadre in the Trung Lap – Ho Bo Woods area as well as preventing attacks by fire against Cu Chi Base Camp.
            </p>
            <p>
              During the period, elements of the 1/5th(M) and the 2/14th Infantry, under the operational control of the 2/34th Armor, provided security for the Phu Cuong (XT 8114) and the Ba Bep (XT 7813) Bridges on Highway 8A.
            </p>
            <p>
              On May 01, 1969, one Bobcat from Company A died in hospital from wounds he had previously received. Another Bobcat from the Recon Platoon died from non-hostile causes.
            </p>
            <p>
              On May 08, 1969, Companies B and C were providing route security for Highway 1, east of Trang Bang. Enemy troops were observed about 1 kilometer north of the highway and were taken under fire with organic weapons, artillery and helicopter gunships.
            </p>
            <p>
              On May 10, 1969, Company A and one platoon from Company D, 2/12th Infantry established a night defensive perimeter in the Boi Loi Woods at XT 559278. After establishing their positions, a test fire of weapons was ordered after dark. During the test fire, a mortar illumination round was fired. The light exposed a force of about 30 enemy soldiers advancing toward the perimeter. They were taken under fire and fled in surprise. The next morning, the bodies of dead enemy soldiers with weapons and equipment were policed from the area of contact.
            </p>
            <p>
              On May 12, 1969, at 0315 hours, the 1/5th(M) CRIP element was positioned at the Cu Chi Sub-Sector when an 82mm mortar barrage hit the position. Six Bobcats were wounded and one was killed in the attack.
            </p>
            <p>
              On May 13, 1969, at 0955 hours, Companies B and D of the 2/12th Infantry commenced a combat assault into a suspected NVA base area between the Ho Bo and Boi Loi Woods at XT 569311. Meeting intense enemy fire, Company D withdrew to allow helicopter gunships and artillery to pound the area. Company A, 1/5th(M) set up a blocking position during the air strikes. After the air strikes, the companies moved through the area policing dead enemy bodies, weapons and equipment from the bunker complexes.
            </p>
            <p>
              On May 21, 1969, at 0500 hours, Company B with one platoon from Company C and the 132nd Regional Force Company commenced a cordon and search operation of Giong Viec Hamlet located between Phuoc My and Cu Chi at XT 605155. Immediately upon moving into the objective area, the South Vietnamese RF soldiers captured a VC with his AK-47 Rifle. He said he was a squad leader and that there were 20 other VC in the hamlet. A PSYOPS broadcast was made and one VC surrendered.
            </p>
            <p>
              The RF Company and two platoons from Company B made a sweep of the area. They found a number of VC dead from the preparatory artillery fire that had been placed on the area. They also took 6 VC prisoners, along with weapons, ammunition and equipment.
            </p>
            <p>
              Among the POWs was a nurse who had previously worked for the 554th Engineer Battalion on Cu Chi Base Camp. The nurse was instrumental in the capture of 3 females employed at Cu Chi Base Camp who worked for the VC and were involved in the mining of the 554th Engineer Battalion mess hall on January 03, 1969.
            </p>
            <p>
              On May 26, 1969, based on intelligence gathered from the May 21 operation, another combined operation was commenced in Giong Viec. Killed in this operation was the C-20 Local Force Company Commander and a squad of his soldiers.
            </p>
            <p>
              On May 29, 1969, elements of the 1/5th(M) participated in a combined cordon and search operation 3 kilometers northwest of Trung Lap. As forces moved into the area, the fleeing VC were subjected to artillery and helicopter gunship fire. The blocking forces were Company B(-) on the right, Company A 2/34th Armor and Company C, 2/12th Infantry on the left. To the east was Company C, 2/27th Infantry. Company C,1/5th(M) and ARVN forces would conduct the search.
            </p>
            <p>
              At 1137 hours, Company C requested a Dust-off for one wounded Bobcat. At 1232 hours, Company C requested another Dust-off for one man with a gunshot wound and one with wounds from a booby trapped hand grenade.
            </p>
            <p>
              At 1330 hours, Company C received RPG fire from hedgerows to their front. Two APCs were hit. A Dust-off was requested for one wounded Bobcat. The two damaged APCs were extracted from the area and air strikes were called in. At 1440 hours, Company C had another APC hit by RPG fire. A Dust-off was requested for five wounded Bobcats and one dead Bobcat. Air support was again employed before the units swept through the area.
            </p>
            <p>
              On May 31, 1969, Company B located a rice cache in the Ho Bo Woods while conducting a RIF operation.
            </p>
            <p>
              During May 1969, 4 Bobcats died in Vietnam. They were:
            </p>
            <!-- <ul>
              <li>James D. Blasko</li>
              <li>Ronald A. Hill</li>
              <li>Stephen W. DeAro</li>
              <li>Charles E. McMillion</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 5)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="jun">JUNE</div>
            <p>
              On June 05, 1969, Companies A and C began participation in a five day RIF in an area northwest of Trung Lap. Also participating in the operation on the first day were Companies B and C of the 2/12th Infantry, Company A, 2/34th Armor, and elements of the ARVN 3/49th Infantry.
            </p>
            <p>
              At 1248 hours, a large enemy force in fortified positions was engaged at XT 568255. Elements from Companies A and C, 1/5th(M) received heavy small arms, automatic weapons and RPG fire. Artillery and helicopter gunship fires were called in called in to help suppress the enemy fire. During the firefight, a helicopter gunship was shot down, killing all four members of the crew. Three APCs were also destroyed by enemy fire.
            </p>
            <p>
              Three Bobcats from Company A, two Bobcats from Company C and one Bobcat medic were killed in the encounter. Fourteen Bobcats were wounded.
            </p>
            <p>
              During a sweep of the area after the firefight, bodies of dead enemy soldiers along with weapons and equipment were policed up and disposed of.
            </p>
            <p>
              On June 08, 1969, Company A, 1/5th(M) and Company A, 2/14th Infantry, conducted a RIF operation to assess bomb damage from an air strike north of Trung Lap at XT 573247. The units located several dead enemy soldiers with their weapons. At 1705 hours, an unknown size enemy force was engaged in the same general area. Artillery and Helicopter gunship fires were called in for support. While policing up enemy bodies and weapons after the contact, documents were found indicating that the enemy unit was an element of the 268th VC/NVA Regiment.
            </p>
            <p>
              On June 09, 1969, one Bobcat from Company A was killed by a booby trap explosion.
            </p>
            <p>
              On June 13, 1969, Company C, conducted a sweep north of Trung Lap towards a blocking position established by a Regional Force Company. At 1105 hours, an unknown size enemy force was engaged. One APC was hit by an RPG round, causing major damage and wounding two Bobcats. Artillery and air strikes were called in, eliminating the enemy force.
            </p>
            <p>
              At 2120 hours, an ambush patrol from Company A engaged an enemy squad just north of Phuoc My at XT 587168. One Bobcat was wounded in the exchange, which killed several enemy soldiers.
            </p>
            <p>
              At 2330 hours, a night combat patrol from Company A called in artillery on a suspected enemy position at XT 571164. The enemy responded with RPG fire which hit one APC, wounding four Bobcats. Helicopter gunships were called into the area and one of them was shot down, wounding the four crew members. In a sweep of the area at first light, enemy bodies, weapons and equipment were policed up.
            </p>
            <p>
              On June 15, 1969, Company B responded to assist Troop A, ¾ Cavalry, north of Trang Bang at XT 482243. Also responding were the CRIP element of the 2/12th Infantry and a Regional Force Company. The Cavalry unit had made contact with a large enemy force. Artillery, air strikes and helicopter gunships were employed to destroy the enemy, who were fighting from fortified positions. Many enemy bodies were located in the area of contact after the firing had ceased. 12 US troops were wounded and one was killed in the battle.
            </p>
            <p>
              On June 27, 1969, Company B reacted to reinforce Company C, 2/14th Infantry, who were in contact with an enemy force near the Saigon River, east of Cu Chi, at XT 758170. Artillery and helicopter gunships were used to suppress the enemy fire. After the VC broke contact, many bodies of dead enemy soldiers were found on the field of battle. Weapons and over 100 rounds of RPG ammunition were also located and disposed of.
            </p>
            <p>
              On June 28, 1969, at 1425 hours, elements of Company C detonated a booby trap consisting of two 105mm rounds along Highway 237, southeast of Trung Lap at XT 598181. Two Bobcats were killed and two were wounded by the blast. The Company was providing security for Rome Plow cutting operations.
            </p>
            <p>
              Company A conducted a RIF a few kilometers southeast of Trang Bang without incident.
            </p>
            <p>
              On June 29, 1969, Company C was providing security for Rome Plow cutting operations southwest of Trung Lap. Several booby traps were located during the morning and were disposed of. At 1435 hours, the Company located a booby trapped 155mm artillery round and blew it in place. At 1445 hours, Company C requested a gunship as they were receiving sporadic mortar fire. Also they reported that they had one Bobcat dead at XT 576206, who had stepped on a booby trapped 105mm artillery round, detonating it.
            </p>
            <p>
              At 1642 hours, Company C reported that they found an 81mm mortar tube and a number of rounds of mortar ammunition in a bunker inside a small house at XT 569206.
            </p>
            <p>
              The Recon Platoon provided security along Route 19 during the day.
            </p>
            <p>
              During June 1969, 10 Bobcats died in Vietnam. They were:
            </p>
            <!-- <ul>
              <li>Charles M. Ramsey</li>
              <li>Robert E. Langston</li>
              <li>Patrick E. Poppenga</li>
              <li>James D. Walker</li>
              <li>David P. Callahan</li>
              <li>James A. Mardis Jr.</li>
              <li>Lionel T. Rachal</li>
              <li>William C. Dabbert</li>
              <li>Steven L. McGinnis</li>
              <li>Charles M. Kiniyalocts</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 6)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="jul">JULY</div>
            <p>
              During July 1969, the 1/5th(M) continued operating in the area north of Trung Lap and Trang Bang. A part of the area had become known by the nickname “The Citadel.” Elements of the battalion also continued to provide security along roadways in the area. The battalion forward base continued to be located at FSB Devin.
            </p>
            <p>
              On July 03, 1969, the Recon Platoon swept and opened Highway 1 and 7A. At 0932 hours, Company B departed FSB Patton with a Rome Plow for cutting operations.
            </p>
            <p>
              That morning at 0930 hours, some men from Company B, 2/14th infantry fired a LAW into a hedgerow. When it did not detonate, 4 men went to check it out. It exploded while they were examining it, killing one and injuring 3.
            </p>
            <p>
              At 1130 hours, Company B reported that one of the Rome Plows hit a mine with negative casualties. At 1152 hours, Company B reported that they were receiving small arms and one round of RPG fire northwest of Trung Lap at XT 567215. Fire was returned with unknown results. At 1255 hours, Company B requested a Dust-off for three Bobcats wounded by a booby trap explosion at XT 561216. At 1408 hours, Company B requested another Dust-off for four Bobcats wounded by a booby trap explosion in the same general area.
            </p>
            <p>
              Company A conducted a RIF of the area immediately northwest of the junction of Highways 1 and 7A during the afternoon with negative contact.
            </p>
            <p>
              On July 07, 1969, Company B was operating along Highway 7A, northwest of Trung Lap. At 1250 hours, Company B requested a Dust-off for one Bobcat wounded by a booby trap detonation at XT 605223. At 1325 hours, Company B requested another Dust-off at the same location. One Bobcat had been killed and two others wounded when a booby trap exploded.
            </p>
            <p>
              At 1343 hours, Company B requested two flame baths in the cutting area at XT 602220.
            </p>
            <p>
              On July 08, 1969, at 1500 hours, Company A requested a Dust-off  5 kilometers northwest of Cu Chi Base Camp on Highway 237. Two ARVN soldiers and one Bobcat had been wounded by a booby trap explosion. The Company A Bobcat died from his injuries before he got to hospital.
            </p>
            <p>
              Earlier in the day, three Bobcats from Company B were wounded from a booby trap detonation.
            </p>
            <p>
              On July 15, 1969, Company A was OPCON to the 2/14th Infantry when they captured a wounded NVA soldier. The POW gave directions which led to a small arms cache in the lower Filhol.
            </p>
            <p>
              On July 28, 1969, Company B took part in a one day RIF operation north of Trung Lap. At 1455 hours, Company B started to receive small arms fire at XT 575230. At 1543 hours, the company requested a Dust-off for two wounded Bobcats. One died of his wounds at hospital. By 1700 hours, Company B had 3 POWs, along with several weapons and miscellaneous equipment  which were policed from among the dead bodies of the enemy soldiers in the area of contact.
            </p>
            <p>
              On July 29, 1969, the Recon Platoon was working with a squad from the 162nd RF Company sweeping Highway 7A. At 1620 hours, southwest of Thai My at XT 517144, a VC was observed exiting what appeared to be a tunnel entrance. He was fired on and dove back under cover. As the units approached the area, they observed that it was a bunker with overhead cover. Upon receiving no response to calls to surrender, several LAWs were fired at the bunker. Two VC emerged from the bunker. One ran and was wounded and taken POW with the other one. In talking to him, the RFs learned that there were more VC soldiers in the bunker.
            </p>
            <p>
              While checking around the bunker, a booby trap was detonated wounding one Bobcat and one ARVN soldier. A surrender appeal was again announced. With no response, a shape charge was detonated on top of the bunker. Upon checking, dead enemy soldiers were found inside the bunker.
            </p>
            <p>
              During the Quarterly Period of  May 01, 1969 to July 31, 1969, the 25th Infantry Division reported the following personnel statistics:
            </p>
            <p>
              KIA: 179;  WIA: 2,070 (572 evacuated);  NBD: 21;  NBI: 36; MIA: 0.
            </p>
            <p>
              During the reporting period there continued to be a personnel shortage in the division of Infantry Captains and Lieutenants and Field Artillery Lieutenants. There also continued to be a shortage of NCOs in grades E6 through E9 in the 11B, 11C, 11F, 12B, 17B, 17K, 31G, 63A, 63C, 76A, 76P, 76Y, 76Z and 94B MOS.
            </p>
            <p>
              During July 1969, 3 Bobcats died in Vietnam. They were:
            </p>
            <!-- <ul>
              <li>Thomas J. Lyons</li>
              <li>Jesse Uptigrove</li>
              <li>Paul E. Fabrisi</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 7)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="aug">AUGUST</div>
            <p>
              As August 1969 began, the 1/5th(M) would be assigned offensive operations in the Ho Bo Woods, the “Citadel” area and the Filhol. They would also be responsible for road security operations on sections of the area roadways.
            </p>
            <p>
              On August 04, 1969, The CRIP elements of the 1/5th(M) and the 2/14th Infantry engaged an enemy squad northeast of Cu Chi at XT 628179. In close fighting they eliminated the enemy force.
            </p>
            <p>
              On August 14, 1969, a Bobcat from Company B died as the result of injuries he sustained in an accidental vehicle crash.
            </p>
            <p>
              On August 15, 1969, the Recon Platoon conducted operations southeast of Cu Chi Base Camp in the area of XT 672122. Company C conducted a sweep south of the junction of  Highways 1 and 7A in the area of XT 561142. At 1152 hours, Company B requested a Dust-off  2 kilometers northwest of Thai My at XT 518168. Two Bobcats from the company had been wounded and one was killed when a booby trapped hand grenade was tripped and detonated.
            </p>
            <p>
              On August 17, 1969, Company B was providing security for Rome Plow cutting operations 3 kilometers southeast of Trang Bang. At 1320 hours, the company requested a Dust-off for one Bobcat with shrapnel wounds to his left arm.
            </p>
            <p>
              At 1400 hours, Company A requested a Dust-off. An APC from the company had detonated what was estimated to be a 100 pound mine three kilometers northwest of Cu Chi Base Camp at XT 624184. Five Bobcats were wounded and the APC was a combat loss. One of the wounded Bobcats from Company A died of his wounds in hospital later that day.
            </p>
            <p>
              On August 20, 1969, an unusual sighting was made by US Forces at Duc Hue. Ten enemy were engaged with artillery and fled into Cambodia in the vicinity of XT 3014. At 1845 hours, two helicopters landed in the area to which the enemy personnel had escaped. Helicopters were sighted in the “Angel’s Wing” earlier in 1969 but their manner of employment and ownership remained undetermined.
            </p>
            <p>
              On August 21, 1969, at 1215 hours, the Recon Platoon with one flame track attached, discovered four tunnels along a hedgerow at XT 549195 about 2 kilometers northwest of FSB Devins. The tunnels showed signs of recent use and as they approached the next hedgerow, one VC was observed running from the high grass into the hedgerow. The flame track doused the hedgerow and the VC ran and was shot. A search of the hedgerow revealed the body of another enemy soldier. Suddenly another VC jumped up from the tall grass and ran into the hedgerow. The platoon pulled back and sprayed the hedgerow and area with automatic weapons fire. An airstrike was requested and Company C, with two additional flame tracks responded from FSB Devins. Following the air strike and an artillery barrage, soldiers from Company C dismounted and approached the hedgerow. Bursts of automatic weapons fire from several positions greeted them. As these targets were engaged, an RPG was fired hitting an APC which began to burn. A soldier on the track had risen to throw a hand grenade into a spider hole and the blast knocked him from the track. His hand grenade rolled and detonated wounding two Bobcats. The force withdrew and an LFT expended its load on the hedgerow. The three flame tracks then sprayed the hedgerow and a portion of the tall grass to the right. The soldiers again advanced on the hedgerow and met no resistance.
            </p>
            <p>
              On August 22, 1969, a Bobcat from the Recon Platoon died from multiple fragmentation wounds.
            </p>
            <!-- <p>
              During August 1969,  four Bobcats died in Viet Nam. They were: Richard M. Wise; Richard D. Laxson; Ronald W. Panno; and Thomas M. Ralston.
            </p> -->
            <p>
              During August 1969, 4 Bobcats died in Vietnam. They were:
            </p>
            <!-- <ul>
              <li>Richard M. Wise</li>
              <li>Richard D. Laxson</li>
              <li>Ronald W. Panno</li>
              <li>Thomas M. Ralston</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 8)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="sep">SEPTEMBER</div>
            <p>
              On September 13, 1969, an element from Company C had established an ambush position outside the Cu Chi Base Camp with members of the 167th Popular Forces Company. The ambush was set up at XT 668145, southeast of the base camp. At 2153 hours, hand grenades were thrown into the ambush position. Two Bobcats from Company C were killed and one ARVN soldier was killed. One ARVN soldier was also wounded.
            </p>
            <p>
              On September 19, 1969, Helicopter gunships received heavy ground fire while flying over an area about 2 kilometers east of Phuoc My at grid XT 6116.
            </p>
            <p>
              Companies A and B and the Recon Platoon were dispatched to the area along with the 132nd Regional Forces Company and elements of the 2/12th Infantry. Company B established a blocking position on the west and Company A with the 132nd RF Company set up on the east. The Recon Platoon and the elements of the 2/12th set up on the south side of the contact area.
            </p>
            <p>
              As the air strikes and artillery fires were lifted, Company A and the 132nd began a sweep of the area. The only resistance came from two NVA soldiers in spider holes. Two POWs and  enemy dead with weapons and equipment were located in the area. There were no allied casualties.
            </p>
            <p>
              On September 22 and 23, 1969, snipers from the 1/5th(M) were positioned along Highway 1 and were successful in engaging several targets in the evening hours.
            </p>
            <p>
              On September 24, 1969, Company C and elements of the 10th ARVN Cavalry Regiment established a night defensive perimeter in the Ho Bo Woods at XT 656262. At 0150 hours, the perimeter was attacked by an unknown size enemy force with small arms, automatic weapons, mortar and RPG fire. The attack was repulsed with organic weapons and artillery fires. Two Bobcats were wounded in the contact. Enemy bodies and weapons and ammunition were policed from the area at first light.
            </p>
            <p>
              On September 29, 1969, a Bobcat from Company B died in hospital from burns he had received on an earlier date.
            </p>
            <p>
              During September 1969, 3 Bobcats died in Vietnam. They were:
            </p>
            <!-- <ul>
              <li>Albert L. Belanger</li>
              <li>James D. Darwin</li>
              <li>James Jennings Jr.</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 9)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="oct">OCTOBER</div>
            <p>
              During October 1969, no Bobcats died in Viet Nam.
            </p>
            <p>
              The 25th Infantry Division reported the following personnel statistics for the Quarterly Period of August 01, 1969 thru October 31, 1969:
            </p>
            <p>
              KIA: 87;  WIA: 1107;  MIA: 0;  NBD: 18;  NBI: 27.
            </p>
            <p>
              Personnel shortages in Infantry Captains, Infantry Lieutenants and Artillery Lieutenants continued. There also continued to be a shortage of NCOs in grades E-6 thru E-9 in the 11B, 11C, 12B, 17B, 17K, 31G, 63A, 63C, 76Z, and 94B MOS.
            </p>
            <p>
              Rallier Tran Minh Dao, a former high ranking Communist officer of Sub-Region One, in further debriefing, maintained that the VC/NVA would take into consideration the demonstrations planned by US groups opposed to the Viet Nam War. He also estimated that North Vietnamese political objectives centering on the Paris Peace Talks would be supported by military action.
            </p>
            <p>
              Chemical Operations: “During the Quarterly Period numerous defoliation missions have been flown supporting tactical operations of the 2nd Brigade. The 2nd Brigade experienced difficulty in obtaining Air Force Trail Dust missions in the Ho Bo Woods and the Filhol; thus an attempt was made to spray selected areas within approved Trail Dust areas. Utilizing a slick with attached defoliation spray kit, an extensive program of selective spraying was completed. The results of these missions have significantly reduced the enemy’s movement across traditional infiltration routes and have reduced his cover from aerial observers. During the period, the infamous “Spider Web”, an intricate complex of streams, marsh and heavily booby trapped thick vegetation along the Saigon River northwest of the Phu Cuong Bridge was defoliated. Defoliation with “Orange” defoliant in selected, previously Rome Plowed sites in the “Citadel” area were also completed during the period.”
            </p>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="nov">NOVEMBER</div>
            <p>
              Beginning in November 1969, the 2nd Brigade operated with 3 battalions and one cavalry squadron [2/12th Infantry; 2/14th Infantry; 1/5th(M); ¾ Cavalry(-)] conducting extensive combat patrols, ground and mounted reconnaissance, and combat assault operations in the central portion of the 25th Division area of operations. The brigade also conducted security along sections of Highways 6A, 7A, 8A, 19, 15, and 1. The 2nd Brigade was also instructed to conduct combined operations with the South Vietnamese 5th and 25th Infantry Divisions.
            </p>
            <p>
              On November 03, 1969, Company A proceeded to a location 2 kilometers west of Phuoc My at XT 560142 to relieve the Recon Platoon who were established in a blocking position. At 1440 hours, Company A requested a Dust-off for one dead Bobcat and one wounded Bobcat from a bobby trap that was detonated. The dead Bobcat was a lawyer in the Reserves, just doing his time, when he stepped on a mine.
            </p>
            <p>
              On November 16, 1969, a Chieu Hoi led the Recon Platoon to a weapons cache east of Trang Bang.
            </p>
            <p>
              On November 20, 1969, a Bobcat from the Recon Platoon died from injuries he had earlier received.
            </p>
            <p>
              On November 22, 1969, a Bobcat from Company A died from wounds he had previously received.
            </p>
            <p>
              On November 25, 1969, a patrol from Company A engaged an enemy force at 2014 hours, 4 kilometers southeast of Trung Lap. Several enemy soldiers were killed in the contact.
            </p>
            <p>
              On November 28, 1969, at 1220 hours, Company A located an ammunition cache 3 kilometers southeast of Trung Lap in a water hole.
            </p>
            <p>
              On November 29, 1969, Company B, working with the 132nd RF Company, captured two POWs 7 kilometers northeast of Cu Chi.
            </p>
            <!-- <p>
              During November 1969, Four Bobcats died in Viet Nam. They were:  Franklin T. James; David S. Kline; Stanley Joseph Egan; and Keith Colwell.
            </p> -->
            <p>
              During November 1969, 4 Bobcats died in Vietnam. They were:
            </p>
            <!-- <ul>
              <li>Franklin T. James</li>
              <li>David S. Kline</li>
              <li>Stanley Joseph Egan</li>
              <li>Keith Colwell</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 11)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="dec">DECEMBER</div>
            <p>
              On December 01, 1969, the Commanding General of the 25th Infantry Division sent out a letter to his brigade and battalion commanders. He related: “I have observed our mechanized operations for a couple of months now and I think we are spending too much time riding and moving without gaining contact. At the enclousure are some observations of a former commander of a mechanized infantry company. He has set forth a number of useful hints and observations, and I ask that the appropriate commanders study the enclosure and make use of its items.”
            </p>
            <p>
              Additional copies were provided in the event “you wish to distribute this to your company commanders.”
            </p>
            <p>
              The report had nothing positive to say about mechanized infantry. “The typical mech operation in which the mechanized forces move around in a mobile role with the troops riding on top of the APC is a waste of men and resources. Even when mech troops dismount they do not stray far from their good friend, the APC, for the average mech troop has disdain for walking and carrying heavy loads. He regards the APC as his home away from home, for it carries his food, ammunition and water, as well as his communications, and one must not forget the habitual container of cold soda. He has a good deal and he knows it, and only the most aggressive and competent leader can persuade him to leave his carrier behind.”
            </p>
            <p>
              It was also filled with hints on how to “properly” conduct ambushes that looked good on paper, but were not at all practical in actual application.
            </p>
            <p>
              That the Commanding General apparently shared the opinions of the writer of the report concerning mechanized infantry units, must have been disheartening to most battalion commanders. It is doubtful if many of the reports were passed down to the company commander level. One also has to wonder what “actual” experience the writer of the report had commanding mechanized infantry in combat.
            </p>
            <p>
              On December 02, 1969, at 1345 hours, the Recon Platoon, working with the 158th RF Company, engaged an unknown number of enemy soldiers in a hedgerow with a flame track. Three POWs were captured in the action.
            </p>
            <p>
              On December 06, 1969, at 1450 hours, elements of Company C were providing security for bulldozers of the 65th Engineer Battalion, 4 kilometers northwest of Cu Chi. One of the bulldozers uncovered a hole in which two VC were hiding. They were taken POW and provided information leading to the capture of two more VC hiding in the same general area.
            </p>
            <p>
              On December 09, 1969, at 1550 hours, the CRIP element requested a Dust-off one kilometer south of FSB Devin. A booby trap was detonated killing one Bobcat and wounding another.
            </p>
            <p>
              On December 10, 1969, Company C captured six VC at 1536 hours, three kilometers north of Trung Lap at XT 586294. At the time of capture, the group had been on a food procuring mission.
            </p>
            <p>
              At 1930 hours, an ambush patrol from Company A, enroute to their ambush site, engaged an estimated 15 VC one kilometer south of the junction of Highways 7A and 15 at XT 660250. Artillery and helicopter gunships were called in to assist in the contact.
            </p>
            <p>
              On December 15, 1969, a Bobcat from Company C died in hospital as a result of  a previous illness or injury.
            </p>
            <p>
              On December 16, 1969, Company B located some dead enemy bodies well conducting a bomb damage assessment northeast of Trung Lap.
            </p>
            <p>
              On December 23, 1969, at 2135 hours, the Company C night perimeter at XT 527215 received an 82mm mortar barrage. There were no friendly casualties.
            </p>
            <p>
              During December 1969, two Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Joe B. Ojeda</li>
              <li>Billy B. Leyerle</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 12)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop

@section('vietnam_1970_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_12">
        <div data-button="jan" data-year="1970">
          <div data-button="jan" data-year="1970">January</div>
        </div>
        <div data-button="feb" data-year="1970">
          <div data-button="feb" data-year="1970">February</div>
        </div>
        <div data-button="mar" data-year="1970">
          <div data-button="mar" data-year="1970">March</div>
        </div>
        <div data-button="apr" data-year="1970">
          <div data-button="apr" data-year="1970">April</div>
        </div>
        <div data-button="may" data-year="1970">
          <div data-button="may" data-year="1970">May</div>
        </div>
        <div data-button="jun" data-year="1970">
          <div data-button="jun" data-year="1970">June</div>
        </div>
        <div data-button="jul" data-year="1970">
          <div data-button="jul" data-year="1970">July</div>
        </div>
        <div data-button="aug" data-year="1970">
          <div data-button="aug" data-year="1970">August</div>
        </div>
        <div data-button="sep" data-year="1970">
          <div data-button="sep" data-year="1970">September</div>
        </div>
        <div data-button="oct" data-year="1970">
          <div data-button="oct" data-year="1970">October</div>
        </div>
        <div data-button="nov" data-year="1970">
          <div data-button="nov" data-year="1970">November</div>
        </div>
        <div data-button="dec" data-year="1970">
          <div data-button="dec" data-year="1970">December</div>
        </div>
      </div>
    </div>
    <div class="allSegments">
      <div class="timeSegment vietnamLogSegment" data-section="1970">
        <div class="segmentContent">
          <div class="backBttn">
            <a href="{{ url('/history/timeline') }}">
              <div><< HISTORY</div>
            </a>
          </div>
          <div class="segmentTitle"><u>Vietnam, 1970</u></div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="jan">JANUARY</div>
            <p>
              On January 07, 1970, a Bobcat from Company C died as the result of an accidental explosion.
            </p>
            <p>
              On January 11, 1970, two Chieu Hoi’s provided information leading to a concealed tunnel four kilometers west of Trung Lap at XT 543206. One VC surrendered from within the tunnel. Others were killed when the tunnel was destroyed.
            </p>
            <p>
              On January 22, 1970, Company C, working with one company from the 1/49th ARVN Infantry, discovered a weapons, ammunition and equipment cache in a tunnel northwest of Trung Lap at XT 574249.
            </p>
            <p>
              On January 25, 1970, at 1600 hours, the responsibility of the defense of Cu Chi Base Camp was passed from the 2nd Brigade to the 3rd Brigade.
            </p>
            <p>
              During January 1970, one Bobcat died in Viet Nam. He was:
            </p>
            <!-- <ul>
              <li>Raymond A. White III</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 1)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <p>
              The 25th Infantry Division reported the following for the Quarterly Reporting Period of  November 01, 1969 thru January 31, 1970:
            </p>
            <p>
              KIA: 71;  WIA: 1037;  NBD: 22;  NBI: 107;  MIA: 0
            </p>
            <p>
              Personnel shortages continued to exist in Infantry Captains and Field Artillery Lieutenants as well as NCOs in the grade of E-6 thru E-9 in 11B, 11C, 12B, 17B, 17K, 31G, 63A, 63C, 76P, 76Y, 76Z and 94B MOS.
            </p>
            <p>
              It was also noted that: “With the increased Vietnamization of the war, 25th Infantry Division forces were able to maintain a posture of “protective reaction” as the mode of operations within the division’s tactical area of operations. Protective reaction refers to the type of combat operations used by allied commanders against Communist forces in the Republic of Viet Nam to provide for the security of his unit, his tactical area of operations and the Vietnamese people. This is accomplished primarily by small unit reconnassiance patrols to locate the enemy, disrupt his movements and find his caches of arms, ammunition and food.”
            </p>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="feb">FEBRUARY</div>
            <p>
              At the beginning of February, planning guidence stressed the promotion of small unit combined operations with emphasis on upgrading ARVN Regional Forces and Popular Forces while stressing night operations.
            </p>
            <p>
              The 2nd Brigade operated with two battalions and one cavalry squadron [1/5th(M); 2/12th Infantry; ¾ Cavelry(-)] in the central portion of the division tactical area of interest and also conducted security along Highways 6A, 7A, 19 and 26.
            </p>
            <p>
              On February 05, 1970, at 0055 hours, an ambush patrol from Company C, located in the Ho Bo Woods at XT 573279, received hand grenades from an unknown sized enemy force. Helicopter gunships were called in to pound the enemy location. Several enemy soldiers were killed and one Bobcat was wounded in the contact.
            </p>
            <p>
              On February 06, 1970, at 0017 hours, an ambush patrol from Company C engaged an enemy force 2 kilometers southwest of the previous night’s contact. The unknown size enemy force returned the ambush’s fire with small arms and automatic weapons fire. Artillery and helicopter gunship fire was called in to help suppress the enemy fire. During the contact, two Bobcats from Company C were killed and two were wounded.
            </p>
            <p>
              On February 26, 1970, the 1/5th(M) became OPCON to the 1st Brigade, 25th Infantry Division. The battalion moved to the Michelin Rubber Plantation. There was also a new boundary between the 25th Infantry Division and the 1st Air Cavalry Division effective on February 26th. This new boundary change had the 25th Infantry Division give up its portion of War Zone C to the 1st Air Cavalry Division.
            </p>
            <p>
              On February 28, 1970, at 1216 hours, the lead APC of a resupply convoy headed to Dau Tieng from the battalion forward base detonated an explosive device on one of the dirt roads running through the Michelin at XT 557512. The APC was completely destroyed and seven Bobcats were killed. At 1250 hours, a Dust-off was requested for two Bobcats who were in shock.
            </p>
            <p>
              Graves registration personnel were called to the location to help recover body parts. The explosive device was later estimated to be in the 500 pound bomb category. An M-548 TVR was also damaged in the blast. The ramp from the APC was blown backwards into the 548, knocking out its final drive.
            </p>
            <p>
              During February 1970, nine Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
             <li>Robert J. Dupell</li>
             <li>Erick O. Olson</li>
             <li>Charles R. Baggett</li>
             <li>Eugene Carter</li>
             <li>Donnie R. Chastain</li>
             <li>James P. DeVaney</li>
             <li>Robert E. Guthrie</li>
             <li>Billy J. Roberts</li>
             <li>Douglas M. Woodward</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 2)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="mar">MARCH</div>
            <p>
              On March 02, 1970, the 2nd Brigade of the 25th Infantry Division became OPCON to 2nd Field Force Vietnam [II FFV]. With the redeployment of the 1st Infantry Division to the United States, the area of operations of the 25th Infantry Division became extended. To facilitate command and control of this area of operations, II FFV took operational control of the 2nd Brigade, 25th Infantry Division.
            </p>
            <p>
              On March 11, 1970, at 0800 hours, Company B requested a Dust-off at XT 439579 for nine Bobcats wounded in an explosion. Four of the nine wounded Bobcats died as a result of their injuries.vAt first it was thought that the explosion was caused by an incoming enemy rocket. Later investigation determined that a Claymore mine was accidentally detonated in the area where the soldiers were standing.vOn March 19, 1970, Company C conducted a RIF operation northeast of Dau Tieng. At 1650 hours, the bodies of several enemy soldiers killed by artillery were located at XT 524564.
            </p>
            <p>
              On March 28, 1970, Company C, the Recon Platoon and the 1st Brigade Mini-Cav engaged a small enemy force in bunkers north of Dau Tieng in the “Razorbacks” at XT 491473. Artillery, air strikes and helicopter gunships were called in to suppress the enemy position. During the contact one soldier was killed and 3 were wounded. One “Kit Carson Scout” was also wounded.
            </p>
            <p>
              During March 1970, four Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
             <li>John M. Chappey</li>
             <li>Roger L. Coffman</li>
             <li>Rodney G. Helsel</li>
             <li>Olaf T. Olsen</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 3)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="apr">APRIL</div>
            <p>
              On April 02, 1970, the 1/5th(M) was placed under the operational control of the 1st Air Cavelry Division.
            </p>
            <p>
              On April 09, 1970, a Bobcat from Company C died from multiple fragmentation wounds.
            </p>
            <p>
              On April 10, 1970, two Bobcats from Company C were killed.
            </p>
            <p>
              On April 11, 1970, two Bobcats from Company A were shot and killed.
            </p>
            <p>
              On April 12, 1970, the 1/5th(M) returned to the operational control of the 1st Brigade, 25th Infantry Division.
            </p>
            <p>
              On April 19, 1970, a Bobcat from Company A died in hospital from wounds he had received at an earlier time.
            </p>
            <p>
              On April 23, 1970, at 1900 hours, the Recon Platoon engaged two enemy soldiers in the “Straightedge Woods” at XT 177337.
            </p>
            <p>
              Also on April 23rd, a Bobcat from Company C died from wounds he had previously received.
            </p>
            <p>
              On April 25, 1970, at 1405 hours, Company B received small arms and RPG fire from an unknown sized enemy force at XT 180374. Artillery, air strikes and helicopter light fire teams were called in to help suppress the enemy fire. Two Bobcats were wounded in the contact.
            </p>
            <p>
              On April 28, 1970, elements of the South Vietnamese Army [ARVN] crossed the border into Cambodia to search for and destroy bases belonging to Communist Forces.
            </p>
            <p>
              During April 1970, seven Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Nick A. Aguilar Jr.</li>
              <li>Charles A. Pursell</li>
              <li>Kevin A. Stout</li>
              <li>Valentine B. Gomez Jr.</li>
              <li>Gary D. Jefferson</li>
              <li>Lee A. Stedman</li>
              <li>Harry C. Greer</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 4)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
            <div class="vietnamLogLinkBox">
              <ul>
                <a href="../../../images/history/albums/vietnam/maps/map23.jpeg" target="_blank">
                  <li>Map 23) Base Area 354 in Cambodia</li>
                </a>
              </ul>
            </div>
            <p>
              During the Quarterly Reporting Period of February 01, 1970 thru April 30, 1970, the 25th Infantry Division reported the following personnel statistics:
            </p>
            <p>
              KIA: 113;  WIA: 1112;  NBD: 28;  NBI: 103;  MIA: 0
            </p>
            <p>
              Personnel shortages continued to exist in Infantry, Signal Corps and Engineer Captains and NCOs in grades E-6 thru E-8 in the 11B, 11C, 12B, 13E, 17K, 31G, 63C and 76P MOS.
            </p>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="may">MAY</div>
            <p>
              On May 01, 1970, American Military Forces crossed the Cambodian Border to join ARVN Forces in the destruction of enemy supply and personnel bases in the Parrot’s Beak, the Angel’s Wing and the Fish Hook regions of Cambodia. The first American Forces into Cambodia were the 1st Air Cavalry Division, including the 2/47th(M) Infantry, the 2/34th Armor and the 11th Armor Cavalry Regiment.
            </p>
            <p>
              The President of the United States announced that American Forces had entered Cambodia, however, he stated that they would only remain there until June 30, 1970. Furthermore they would only be allowed to venture 30 kilometers into Cambodia and no further. When word of these restrictions finally reached the soldiers, it took a good deal of the wind out of their sails of enthusiasm of finally taking the war to “Charlie’s” safe havens.
            </p>
            <p>
              On May 03, 1970, an operations order was issued for elements of the 25th Infantry Division to attack into Cambodia.
            </p>
            <p>
              On May 04 and 05, 1970, elements of the 1st Brigade [1/5th(M), 2/22nd(M), 3/22nd Infantry] moved into northwestern War Zone C to the area of Thien Ngon to relieve elements of the 1st Cavelry Division and to prepare for the attack into Cambodia.
            </p>
            <p>
              On May 06, 1970, at 0330 hours, a commando vault [15,000 pound bomb] insertion took place on the Cambodian side of a potential bridge site at XT 967752. Another commando vault insertion was made at 0430 hours. At 0710 hours, the 3/22nd Infantry Battalion made an air combat assault into Cambodia in the area of the village of Tasuos. One company from the battalion secured the bridgehead on the western bank of the river at WT 967752. The 2/22nd (M) attacked to seize the bridgehead on the eastern bank. Company E, 65th Engineer Battalion then commenced construction of a pontoon float bridge at that location.
            </p>
            <p>
              At 0955 hours, Company C, 3/22nd Infantry received a number of artillery rounds killing 2 soldiers and wounding 8. The fire was determined to be friendly artillery.
            </p>
            <p>
              The float bridge was completed and became operational by 2315 hours. 2 platoons from the 1/5th(M) crossed the bridge and assisted in the night security on the western bank of the river.
            </p>
            <p>
              On May 07, 1970, beginning at 0715 hours, the 1/5th(M) and the 2/22nd(M) crossed the river on the pontoon bridge. The 1/5th(M) assaulted west towards Tasuos. The 2/22nd(M) assaulted south along the river.
            </p>
            <p>
              At 1200 hours, Company B, 7/11th Artillery crossed the bridge and followed the 1/5th(M).
            </p>
            <p>
              At 1300 hours, Company A, 1/5th(M) engaged an enemy force about 6 kilometers north east of Kampong Trach at WT 905670. The fire fight lasted ten minutes. Several enemy soldiers were killed. Also in the contact, one Bobcat from Company A was killed and one was wounded.
            </p>
            <p>
              At 2050 hours, a patrol from the Recon Platoon received small arms and RPG fire northeast of Kampong Trach at WT 911666. One Bobcat was killed and one wounded in the initial contact. One platoon from Company B reacted to the contact and the Communists broke off the fight.
            </p>
            <p>
              On May 08, 1970, units of the 1st Brigade continued searching Base Area 354.
            </p>
            <p>
              On May 09, 1970, at 1010 hours, Company C engaged a few individuals and when checking the area of contact at WT 890658, they located a large base camp area with mess halls and bunkers. The base was approximately 400 meters long and 400 meters wide.
            </p>
            <p>
              At 1130 hours, Company A engaged an estimated enemy platoon one kilometer northeast of Trapeang Pikar at WT 833684. In the exchange of fire one Bobcat was killed and fourteen were wounded.
            </p>
            <p>
              At 1130 hours, Company B engaged an unknown size enemy force at WT 835705. A helicopter light fire team was employed and the enemy broke contact.
            </p>
            <p>
              At 1610 hours, Company C received automatic weapons and RPG fire at WT 840674. Helicopter light fire teams, artillery fire and air strikes were called in to suppress the enemy fire with unknown results. One Bobcat was killed and fourteen were wounded in the contact.
            </p>
            <p>
              At 2030 hours, an ambush patrol from the Recon Platoon received small arms fire while enroute to their ambush position. Fire was returned and the enemy broke contact. Two Bobcats were wounded in the contact.
            </p>
            <p>
              On May 10, 1970, elements continued a detailed search of Base Area 354. Contacts during the day were limited to hit and run encounters with one to two individuals.
            </p>
            <p>
              On May 11, 1970, elements continued searching for cache sites and base camps. In three separate incidents, APCs from the 1/5th(M) detonated AT mines. Eight Bobcats were wounded in the explosions.
            </p>
            <p>
              On May 12, 1970, at 0545 hours, the Company C night perimeter at WT 928682 received small arms, automatic weapons, RPG and mortar fire from an unknown size enemy force. Company C returned fire with organic weapons, artillery and helicopter light fire teams. Six APCs were destroyed and five Bobcats were killed. Forty-four Bobcats were wounded. Thirty of these were minor wounds not requiring Dust-off. One Kit Carson Scout was killed when he went to assist the loading of a .50 caliber machine gun and an RPG hit the track and started it on fire.
            </p>
            <p>
              At 1820 hours, an APC from Company C detonated an AT mine. The APC was a combat loss and four Bobcats were wounded.
            </p>
            <p>
              On May 13, 1970, the search of Base Area 354 continued with scattered contacts and limited rice and munitions caches located.
            </p>
            <p>
              On May 14, 1970, the 1st Brigade withdrew from Base Area 354 and moved to Katum to begin operations in Base Area 353. The last elements of the Brigade withdrew from Base Area 354 at 1925 hours.
            </p>
            <p>
              Base Area 354 was dispersed over a large jungle area, which made detailed searching difficult and time consuming. Although a substantial quantity of supplies was located and a large number of facilities destroyed, the time and forces available permitted a neutralization of only a portion of the base area.
            </p>
            <p>
              On May 15, 1970, the 1st Brigade completed movement into its assigned area of operations north of Katum.
            </p>
            <p>
              On May 16, 1970, at 1340 hours, Company B engaged an unknown size enemy force about 3 kilometers inside Cambodia northwest of Katum at XT 253997. Artillery and air strikes were called in to assist in suppressing the enemy fire. Two Bobcats from Company B were killed and six were wounded in the contact.
            </p>
            <p>
              At 2000 hours, Company C was on stand down at Tay Ninh Base Camp attending a floor show. A soldier from another unit attempted to gain entry to the show but was turned away. This soldier returned with an M-16 rifle and opened fire on the soldiers watching the show. Two Bobcats from Company C were murdered and ten were wounded.
            </p>
            <p>
              A Specialist 4th Class named James E. Paul from the 125th Signal Battalion was later convicted in a Courts Martial of two counts of voluntary manslaughter and ten counts of assault to commit voluntary manslaughter.
            </p>
            <p>
              Soldier Is Convicted In Manslaughter Case
            </p>
            <p>
              On May 17, 1970, at 1230 hours, Company A located a large communications cache about 7 kilometers southwest of Memut. The large amount of radio equipment located was evacuated to Katum. At 1400 hours, a second cache was located 400 meters southwest of the earlier one.
            </p>
            <p>
              Also on May17th, a Bobcat from Company B died in hospital from wounds he had received on an earlier date.
            </p>
            <p>
              On May 18, 1970, the 1st and 2nd Brigades continued to operate in north central Tay Ninh Province and a portion of Kampong Province, Cambodia.
            </p>
            <p>
              At 1330 hours, the Recon Platoon located a base camp and weapons cache just northwest of Romeas Chol at XU 249016.
            </p>
            <p>
              One Bobcat from Company A was killed in an accidental explosion.
            </p>
            <p>
              On May 19, 1970, at 0900 hours, the Recon Platoon located a small rice cache between the villages of Khley and Romeas Chol. At 1015 hours, Company A located a hospital complex 4 kilometers west of Sotey at XT 233986. It consisted of approximately 130 bunkers, 50 houses and 3 kitchens. At 1330 hours, the Recon Platoon located a small communications cache at XU 235020.
            </p>
            <p>
              On May 20, 1970, at 0955 hours, Company A received small arms and RPG fire from an unknown size enemy force southeast of Dar at XU 223003. Fire was returned with organic weapons and a helicopter light fire team with unknown results. The enemy broke contact at 1045 hours. Two Bobcats from Company A were killed and five were wounded in the fight.
            </p>
            <p>
              At 1245 hours, Company A received fire from individuals in a bunker. The fire was returned with organic weapons, air strikes with napalm and helicopter light fire teams. Enemy fire ceased at 1415 hours.
            </p>
            <p>
              On May 21, 1970, the 1/5th(M) became OPCON to the 3rd Brigade, 25th Infantry Division.
            </p>
            <p>
              On May 22, 1970, two Bobcats from the Recon Platoon died from multiple fragmentation wounds in Cambodia.
            </p>
            <p>
              On May 30, 1970, one Bobcat from Company B was shot and killed in Cambodia.
            </p>
            <p>
              During May 1970, twenty-one Bobcats died in Cambodia or Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>John E. Dayton</li>
              <li>Michael J. Orwig</li>
              <li>Raymond M. Morris</li>
              <li>Dan R. Stewart</li>
              <li>Oscar A. Solis</li>
              <li>Ronald E. Campbell</li>
              <li>Ardie R. Copas</li>
              <li>Stephen J. Keesler</li>
              <li>Leopoldo A. Lopez</li>
              <li>Thomas A. Stephens</li>
              <li>David W. Hensel</li>
              <li>Clyde W. Lawrence Jr.</li>
              <li>Gary R. White</li>
              <li>Joe E. Raber</li>
              <li>David F. Johnson</li>
              <li>Mark W. Bacher</li>
              <li>Craig Rathbun</li>
              <li>Kenneth S. Vore</li>
              <li>Jerry Roy Marco</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 5)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="jun">JUNE</div>
            <p>
              On June 04, 1970, at 1400 hours, Company A received small arms and RPG fire four kilometers east of the junction of Highways 19 and 26 at XT 473368. The enemy fire was returned with organic weapons, artillery, a helicopter light fire team and finally air strikes. At 1500 hours, the company swept through the area and located a destroyed bunker system and dead enemy soldiers. Four Bobcats were killed and eighteen were wounded in the fight.
            </p>
            <p>
              On June 13, 1970, a Bobcat from Company A died in hospital from wounds he had previously received.
            </p>
            <p>
              On June 17, 1970, a Bobcat from Company A died of injuries sustained as the result of an accidental motor vehicle crash.vOn June 18, 1970, Company B established a night defensive perimeter in the Boi Loi Woods at XT 528352. At 2340 hours, the position received small arms, RPG and mortar fire. The enemy fire was returned with organic weapons, artillery and helicopter light fire teams. Seventeen Bobcats were wounded in the exchange. One wounded POW and several enemy dead were located in a sweep of the area at first light.
            </p>
            <p>
              On June 21, 1970, a Bobcat from Company A died in hospital from wounds he had earlier received.
            </p>
            <p>
              On June 23, 1970, a Bobcat from Company A died in hospital from injuries he had received as the result of an earlier accidental motor vehicle crash.
            </p>
            <p>
              During June 1970, seven Bobcats died in Viet Nam or Cambodia. They were:
            </p>
            <!-- <ul>
              <li>Alan G. Demorow</li>
              <li>Stephen C. Foht</li>
              <li>Richard E. Rutherford</li>
              <li>Arcadio Torres</li>
              <li>Franklin J. Krantz Jr.</li>
              <li>Preston H. Ellis</li>
              <li>Larry W. Anderson</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 6)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="jul">JULY</div>
            <p>
              On July 01, 1970, the 2nd Brigade, 25th Infantry Division assumed control of a new operations area in Long Khanh and Phuoc Tuy Provinces [These two Provinces border Bien Hoa Province on the east and southeast]. Operations Base Lynch, located 12 kilometers south of Xuan Loc, would be the forward command headquarters for the 2nd Brigade from July until early November 1970.
            </p>
            <p>
              The 1st Brigade continued operations in north central Tay Ninh Province. The 3rd Brigade continued operations in Tay Ninh and Binh Duong Provinces.
            </p>
            <p>
              On July 06, 1970, the 1st Battalion(M) 5th Infantry became OPCON to the 2nd Brigade and moved to the Xuan Loc area.
            </p>
            <p>
              On July 28, 1970, Company C was in a night defensive perimeter west of Xuan Loc at YT 339068. At 2010 hours, the position received small arms and RPG fire from an unknown size enemy force. The fire was returned with organic weapons and artillery. Four Bobcats from Company C were wounded in the action.
            </p>
            <p>
              During July 1970, no Bobcats died in Viet Nam.
            </p>
            <p>
              For the Quarterly Period of May 01, 1970 thru July 31, 1970 the 25th Infantry Division reported the following personnel statistics:
            </p>
            <p>
              KIA: 114;  WIA: 1,259;  NBD: 7;  NBI: 114;  MIA: 4.
            </p>
            <p>
              Personnel shortages continued to exist in Infantry Captains and NCOs in grades E-6 thru E-8 in the 11B, 11C, 12B, 13E, 17K, 31G, 63C and 76P MOS.
            </p>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="aug">AUGUST</div>
            <p>
              In the beginning of August 1970, the 2nd Brigade continued operations in Long Khanh and Phuoc Tuy Provinces with three maneuver battalions.
            </p>
            <p>
              On August 23, 1970, a Bobcat from Company A died in hospital from Malaria.
            </p>
            <p>
              On August 31, 1970, at 0930 hours, Company B, 3/22nd Infantry made contact with a large enemy force. At 1545 hours, Company A, 1/5th(M) was sweeping an area 500 meters north of the contact area when they received small arms and RPG fire from an unknown size enemy force at YT 534014. The enemy fire was returned with organic weapons and artillery with unknown results. Two Bobcats from Company A were killed and five were wounded. Two APCs received heavy damage in the fight.
            </p>
            <p>
              During August 1970, three Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Everett E. Wells Jr.</li>
              <li>James H. Heppler</li>
              <li>Charles P. Hutton</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 8)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="sep">SEPTEMBER</div>
            <p>
              During the first week of September 1970, the 2nd Brigade continued their operations. There were no significant shelling incidents or ground contacts reported. The enemy units in the 2nd Brigades area of operations suffered from acute logistical shortages.
            </p>
            <p>
              On September 12, 1970, an APC from Company A detonated an AT mine. The track was flipped over by the force of the blast, killing one Bobcat.
            </p>
            <p>
              On September 17, 1970, at 2045 hours, Company C received small arms and automatic weapons fire at their night defensive perimeter south of Xuan Loc at YT 480005. The enemy fire was suppressed with organic weapons, artillery fire and helicopter light fire teams with unknown results. Five Bobcats were wounded in the contact.
            </p>
            <p>
              During September 1970, one Bobcat died in Viet Nam. He was:
            </p>
            <!-- <ul>
              <li>Dean W. Hardman</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 9)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="oct">OCTOBER</div>
            <p>
              During October 1970 the 2nd Brigade continued operating in Long Khanh and Phuoc Tuy Provinces and added a portion of Bien Hoa Province to their AO.
            </p>
            <p>
              On October 12, 1970, the Keystone Message directing redeployment of the 25th Infantry Division was received by division headquarters.
            </p>
            <p>
              On October 15, 1970, the 25th Infantry Division’s Operations Order 183-70 for the redeployment of the division(-) and the constitution of the 2nd Brigade as a separate brigade was published.
            </p>
            <p>
              During October 1970, no Bobcats died in Viet Nam.
            </p>
            <p>
              The following personnel statistics were reported by the 25th Infantry Division for the Quarterly Period of August 01, 1970 thru October 31, 1970:
            </p>
            <p>
              KIA: 39;  WIA: 542;  NBD: 13;  NBI: 131; MIA: 0.
            </p>
            <p>
              Personnel shortages continued to exist in Infantry and Artillery Captains as well as NCOs in grades E-6 thru E-8 in the 11B, 11C, 12B, 13E, 17K, 31G, 63C and 76P MOS.
            </p>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="nov">NOVEMBER</div>
            <p>
              On November 01, 1970, units to redeploy were moved to stand-down locations from the field concurrent with the shrinking of the 25th Infantry Division’s Area of Operations from north to south.
            </p>
            <p>
              The 2nd Brigade continued to operate as part of the 25th Infantry Division with three maneuver battalions [1/5th(M), 4/23rd (M), 3/22nd Infantry] in Bien Hoa, Long Khanh and Phuoc Tuy Provinces.
            </p>
            <p>
              On November 06, 1970, at 1830 hours, Company C received small arms fire and hand grenades from an unknown size enemy force 4 kilometers south of Long Thanh at YS 118945. The enemy fire was returned with organic weapons with unknown results. Two Bobcats were wounded in the contact.
            </p>
            <p>
              On November 08, 1970, the stand-down of units was to take place at two locations; Cu Chi Base Camp and Camp Frenzell-Jones. Units which had rear elements at Cu Chi stood down at that location while all others, with the exception of the 2/34th Armor, went to Camp Frenzell-Jones.
            </p>
            <p>
              Structuring of the 2nd Brigade was accomplished during the same time period as the redeployment of the 25th Infantry Division(-). The units of the Brigade were designated in the original Keystone Message [ 2/12th Infantry; 3/22nd Infantry; 1/27th Infantry; 1/5th(M) Infantry; 1/8th Artillery; B Company, 65th Engineer Battalion; D Troop, ¾ Cavalry; 125th Signal Company; 25th Combat Support battalion; 38th Scout Dog Platoon; 66th Combat Tracker Team; F Company, 75th Ranger(-); 18th Military History Detachment; 25th Military Intelligence Company; 25th Military Police Company, 20th Public Information Office Detachment; 9th Chemical Detachment.] and a personnel ceiling of 5,796 spaces was imposed.
            </p>
            <p>
              The 2nd Brigade, although not fully constituted, was activated on November 08, 1970 and placed OPCON to II Field Force Vietnam. The 2nd Brigade continued operating in Phuoc Tuy, Long Khnah and Nhon Trach District of Bien Hoa Province with three maneuver battalions during the second week of November.
            </p>
            <p>
              On November 09, 1970, an ambush patrol made up of members of Company B and South Vietnamese Regional Force soldiers was engaged by enemy soldiers as it was enroute to its ambush position. Two Bobcats were killed and one was wounded in the contact.
            </p>
            <p>
              On November 11, 1970, a Bobcat who was wounded in the November 9 ambush patrol contact, died in hospital from his wounds.
            </p>
            <p>
              On November 12, 1970, a Dust-off  helicopter, while attempting to take out wounded from a 3/22nd Infantry contact was hit and forced to crash land at 1530 hours. The helicopter was secured by one platoon from Company A, 1/5th(M) until it was extracted at 1730 hours.
            </p>
            <p>
              On November 18, 1970, all the maneuver elements of the 25th Infantry Division had moved into stand down and the Division(-) occupied only Cu Chi Base Camp and a small area of operations around it for local security reasons. The 1/27th Infantry(-), while assigned to the 2nd Brigade, was under the operational control of the 25th Division and was assigned as the security element for Cu Chi Base Camp during stand down and roll up actions.
            </p>
            <p>
              On November 25, 1970, the 25th Infantry Division held its farewell ceremony at Cu Chi Base Camp.
            </p>
            <p>
              At 1705 hours, the Recon Platoon along with Regional Force soldiers engaged an unknown size enemy force four kilometers south of Long Thanh at YS 131880. Two POWs were captured with negative friendly casualties.
            </p>
            <p>
              During November 1970, three Bobcats died in Vietnam. They were:
            </p>
            <!-- <ul>
              <li>Randall L. Ellis</li>
              <li>Francis W. Harter</li>
              <li>Ronald J. DiBartolomeo</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 11)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="dec">DECEMBER</div>
            <p>
              The 2nd Brigade (Provisional)(Separate) continued to operate in Bien Hoa, Long Khanh and Phuoc Tuy Provinces during the first and second week of December with four maneuver battalions.
            </p>
            <p>
              On December 04, 1970, the Commanding Officer of the 2nd Brigade issued a directive to establish a policy governing the use of mechanical ambushes. The directive stated in part:
            </p>
            <p>
              “Ambush Position: The location of the personnel conducting the ambush.
            </p>
            <p>
              Attended Mechanical Ambush: A mechanical ambush that is located not less than 100 meters and not more than 500 meters from the ambush position. The word “attended” implies that friendly personnel are able to observe and/or move immediately to the mechanical ambush.
            </p>
            <p>
              Unattended Mechanocal Ambush: A mechanical ambush that is located more than 500 meters from the ambush position and cannot be observed by friendly personnel.
            </p>
            <p>
              It is the Brigade Commander’s policy that MAs will be fully utilized to assist in the destruction of the enemy. Inherent in this policy is the responsibility of subordinate comanders to impress upon personnel the hazards connected with the MA and the safety precautions required.
            </p>
            <p>
              The Brigade Commander retains the authority to approve employment of UMAs. UMAs will not be employed in populated areas. Request for permission to employ UMAs in unpopulated areas will be submitted to this Headquarters, attention: AVDCSB-C and include the proposed location, duration, provisions for recovery and a statement to the effect that the UMA has been coordinated with and approved by District and Province.”
            </p>
            <p>
              On December 06, 1970, a Bobcat from the Recon Platoon died from non-hostile accidental causes.
            </p>
            <p>
              On December 15, 1970, the last area of Cu Chi Base Camp was turned over to South Vietnamese Army Personnel and the last United States combat units departed the base camp.
            </p>
            <p>
              On December 18, 1970, the Recon Platoon swept an area at YS 187783 where a mechanical ambush was detonated. They located weapons and equipment from two dead enemy soldiers.
            </p>
            <p>
              On December 20, 1970, the 2nd Brigade was officially notified of its designation for redeployment. The Brigade was operating with four maneuver battalions with its forward location at Xuan Loc and its rear area at Camp Frenzell-Jones. The Brigade was to complete its stand down not later than April 28, 1971.
            </p>
            <p>
              On December 26, 1970, at 1115 hours, Company B made contact with a squad sized element of enemy soldiers five kilometers south of Hung Loc at YT 316044. Artillery fire and a helicopter fire team were called in to help suppress the force. Three POWs were captured after the firing ceased.
            </p>
            <p>
              On December 30, 1970, at 1145 hours, a light observation helicopter crashed after hitting power lines 18 kilometers northwest of Xuan Loc. Company A secured the downed aircraft until the bodies of the crew and the aircraft were extracted.
            </p>
            <p>
              During December 1970, one Bobcat died in Viet Nam. He was:
            </p>
            <!-- <ul>
              <li>Robert J. Seufert</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 12)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop

@section('vietnam_1971_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_12">
        <div data-button="jan" data-year="1971">
          <div data-button="jan" data-year="1971">January</div>
        </div>
        <div data-button="feb" data-year="1971">
          <div data-button="feb" data-year="1971">February</div>
        </div>
        <div data-button="mar" data-year="1971">
          <div data-button="mar" data-year="1971">March</div>
        </div>
        <div data-button="apr" data-year="1971">
          <div data-button="apr" data-year="1971">April</div>
        </div>
        <div data-button="may" data-year="1971">
          <div data-button="may" data-year="1971">May</div>
        </div>
        <div data-button="jun" data-year="1971">
          <div data-button="jun" data-year="1971">June</div>
        </div>
      </div>
    </div>
    <div class="allSegments">
      <div class="timeSegment vietnamLogSegment" data-section="1971">
        <div class="segmentContent">
          <div class="backBttn">
            <a href="{{ url('/history/timeline') }}">
              <div><< HISTORY</div>
            </a>
          </div>
          <div class="segmentTitle"><u>Vietnam, 1971</u></div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="jan">JANUARY</div>
            <p>
              On January 06, 1971, Company B located a small ammunition cache 14 kilometers north of Xuan Loc.
            </p>
            <p>
              On January 11, 1971, at 1735 hours, Company B located a small food cache five kilometers north of Hung Loc at YT 328145. That evening at their night defensive perimeter, located two kilometers north of Hung Loc the company engaged an unknown size enemy force. The enemy fire was suppressed with organic weapons. One Bobcat was killed in the encounter.
            </p>
            <p>
              Even at this late date the numbers game was still of importance to someone. One cooking pot was listed amongst the items that were “captured.”
            </p>
            <p>
              On January 30, 1971, at 0923 hours, members of a patrol from Company C detonated a booby trapped hand grenade 3 kilometers northwest of Long Thanh. Eight Bobcats were wounded in the incident.
            </p>
            <p>
              On January 31, 1971, the 2nd Brigade transferred all of its area of operations within Phuoc Tuy Province to the 1st Australian Task Force. Also a large portion of the operating area east of Xuan Loc was transferred to the 1st Cavelry Division (AM).
            </p>
            <p>
              Also effective this date, replacements were no longer received by the 2nd Brigade.
            </p>
            <p>
              During January 1971, one Bobcat died in Viet Nam. He was:
            </p>
            <!-- <ul>
              <li>Jose R. Sandoval.</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 1)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="feb">FEBRUARY</div>
            <p>
              On February 01, 1971, a Bobcat from Headquarters Company died from what was termed non-hostile, accidental, self-destruction.
            </p>
            <p>
              On February 05, 1971, at 1110 hours, in the vicinity of the old fire support base Henderson, elements of the 1/5th(M) located and evacuated a medium sized ammunition cache.
            </p>
            <p>
              On February 06, 1971, one Bobcat from Company A was killed. He was riding high in the cupola of an APC when a105mm artillery round exploded in front of the APC. A fragment from the exploding shell penetrated his chest, killing him instantly.
            </p>
            <p>
              On February 14, 1971, Company A located a small weapons cache 13 kilometers east of Black Horse at YS 565946.
            </p>
            <p>
              On February 15, 1971, all 2nd Brigade requisitions, except 02 and Redball were cancelled.
            </p>
            <p>
              On February 25, 1971, one Bobcat from Headquarters Company died from what was termed non-hostile, accidental, self-destruction.
            </p>
            <p>
              During February 1971, three Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Keith A. Stoddard</li>
              <li>Frank J. Gasperich Jr.</li>
              <li>David D. Peoples Jr.</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 2)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="mar">MARCH</div>
            <p>
              On March 01, 1971, the 38th Scout Dog Platoon, the 66th Combat tracker Detachment, the 9th Chemical Detachment and the Warrior Training Academy commenced stand-down.
            </p>
            <p>
              Fire Support Base Barbara shut down.
            </p>
            <p>
              On March 02, 1971, a Bobcat from Company A was killed when a booby trap was detonated.
            </p>
            <p>
              On March 03, 1971, the 2nd Brigade further consolidated its area of operation by transferring the Nhon Trach area to Bien Hoa Province.
            </p>
            <p>
              Fire Support Base Rivers shut down on this date also.
            </p>
            <p>
              On March 05, 1971, Company F, 75th Infantry (RGR) commenced stand down.
            </p>
            <p>
              On March 06, 1971, the 2nd Brigade forward command post returned to Camp Frenzell-Jones.
            </p>
            <p>
              On March 09, 1971, Ogle Compound was transferred to the 18th ARVN Infantry Division.
            </p>
            <p>
              On March 10, 1971, Fire Support Base Asper shut down operations.
            </p>
            <p>
              On March 12, 1971, the 2/12th Infantry disengaged from active operations.
            </p>
            <p>
              The Husky Compound was turned over to the 52nd Regiment, 18th ARVN Infantry Division.
            </p>
            <p>
              Fire Support Base Heidi shut down operations.
            </p>
            <p>
              On March 13, 1971, the 2nd Brigade was no longer responsible for reinforcement of Xuan Loc and Black Horse Base Camp.
            </p>
            <p>
              The 2/12th Infantry and Battery C, 1/8th Artillery commenced stand down.
            </p>
            <p>
              On March 15, 1971, a Bobcat from Company A died in hospital from fragmentation wounds he had received on an earlier date.
            </p>
            <p>
              On March 20, 1971, the 584th Military Intelligence Detachment started stand-down.
            </p>
            <p>
              On March 22, 1971, Fire Support Base Leopard was turned over to the 3rd Battalion, 1st Brigade, Royal Thai Army Volunteer Force.
            </p>
            <p>
              On March 23, 1971, the 1/27th Infantry was disengaged from active operations and with Battery D, 1/8th Artillery, commenced stand-down.
            </p>
            <p>
              Fire Support Base Schwartz was turned over to Long Khanh Province.
            </p>
            <p>
              On March 25, 1971, the 54th Engineer Company began stand-down.
            </p>
            <p>
              On March 26, 1971, FSB Marisa and FSB Joan shut down operations.
            </p>
            <p>
              On March 27, 1971, the 1st Battalion (M) 5th Infantry disengaged from combat operations and commenced stand-down.
            </p>
            <p>
              On March 28, 1971, the 1/5th(M) held a battalion awards ceremony.
            </p>
            <p>
              During March 1971, two Bobcats died in Viet Nam. They were:
            </p>
            <!-- <ul>
              <li>Byron A. Bangert</li>
              <li>Phillip D. Monson</li>
            </ul> -->
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 3)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="apr">APRIL</div>
            <p>
              On April 05, 1971, at 1800 hours, at Camp Frenzell-Jones, the 1st Battalion (M), 5th Infantry ceased its operational mission requirement in Viet Nam.
            </p>
            <p>
              On April 12, 1971, the 2nd Brigade farewell ceremony was held.
            </p>
            <p>
              On April 30, 1971, the 2nd Brigade Color Guard departed Tan Son Nhut for Hawaii.
            </p>
            <p>
              “Morale remained quite high throughout the stand down period. The major contributing factors were frequent shows, cook outs, sports activities and an increased number of movies. In addition, early shipment of excess personnel eliminated a large number of people who would have  otherwise had nothing to do.
            </p>
            <p>
              The augmentation of the PX with additional items was a great benefit to all personnel. It provided the opportunity for personnel to purchase high quality items that had previously not been available.
            </p>
            <p>
              The 2nd Brigade operated a Vung Tau Special R&R Center, which was excellent and achieved every goal it was created to accomplish.
            </p>
            <p>
              Increased funding for bands and shows was a definite asset.”
            </p>
            <p>
              During April 1971, no Bobcats died in Viet Nam. *
            </p>
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 4)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="may">MAY</div>
            <p>
              No records were found regarding May.
            </p>
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 5)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="jun">JUNE</div>
            <p>
              During June 1971, One Bobcat died of wounds received on December 28, 1969. He was Thomas Charles Littles
            </p>
            <ul>
              @foreach ($year_casualties as $one_casualty)
                @if ($one_casualty->month_of_death == 6)
                  <!-- <a href="{{ URL::to('/memorials/casualties?id='.$one_casualty->id.'&selected=yes') }}"> -->
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <li>
                      {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                    </li>
                  </a>
                @endif
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop
