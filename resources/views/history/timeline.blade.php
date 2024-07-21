@extends('layouts.master')

@include('history.style')

@section('timeline_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_12">
        <div data-button="warOf1812">
          <div data-button="warOf1812">War of 1812</div>
        </div>
        <div data-button="mexicanWar">
          <div data-button="mexicanWar">Mexican War</div>
        </div>
        <div data-button="civilWar">
          <div data-button="civilWar">Civil War</div>
        </div>
        <div data-button="indianWars">
          <div data-button="indianWars">Indian Wars</div>
        </div>
        <div data-button="territorialOccupation">
          <div data-button="territorialOccupation">Territorial Occupation</div>
        </div>
        <div data-button="WWIandDepression">
          <div data-button="WWIandDepression">WWI & Great Depression</div>
        </div>
        <div data-button="WWII">
          <div data-button="WWII">World War II</div>
        </div>
        <div data-button="koreanWar">
          <div data-button="koreanWar">Korean War</div>
        </div>
        <div data-button="1954to1966">
          <div data-button="1954to1966">1954 to 1966</div>
        </div>
        <div data-button="vietnamWar">
          <div data-button="vietnamWar">Vietnam War</div>
        </div>
        <div data-button="1975to2001">
          <div data-button="1975to2001">1975 to 2001</div>
        </div>
        <div data-button="warOnTerror">
          <div data-button="warOnTerror">Global War On Terrorism</div>
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
      <div class="timeSegment firstTimeSegment warOf1812Segment" data-section="warOf1812">
        <div class="segmentTitle"><u>War of 1812</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <div class="segmentImg imgLeft imgSmall img1812">
            </div>
            <p>
              At the onset of the War of 1812, the 5th Infantry was assigned to Winder’s Brigade, U.S. Army of the South.  In the spring of 1813, Winder’s troops marched north to Ontario, Canada to exploit the British defeat at Fort George.  British regulars executed a daring nighttime attack on the brigade forcing it to withdraw to Fort George.  The 5th Infantry participated in the successful defense of Plattsburgh, New York in September, 1814 and then marched north to the Niagara frontier.  The regiment’s victorious assault at Cook’s Mills, on 19 October, 1814 was the last encounter between regular forces in Canada.
            </p>
            <p>
              On July 25, 1814, at the Battle of Lundy’s Lane, Colonel James Miller, commander of the 21st Infantry Regiment, was tasked with the near-suicidal mission of assaulting a British battery of seven cannons which were dominating the battlefield.  In response to his orders, Miller replied, “I’ll try, sir!” When they reached the top of the hill, the Americans delivered a volley that swept away every member of the gun crews and then held the hill against four vicious counterattacks by the British.  The Battle of Lundy’s Lane was the first major American victory against British regulars in that war. Three years later, the men and honors of the 21st Infantry were absorbed by the 5th Infantry, James Miller assumed command of the regiment, and his response of “I’ll try, sir” became the regimental motto.
            </p>
          </div>
          <div class="segmentLinks">
            <div class="linkBox">
              <div class="linkTitle learnMore">LEARN MORE</div>
              <ul class="linkContent">
                <a href="http://bobcat.ws/lundys-lane-history.html">
                  <li>The Battle of Lundy's Lane</li>
                </a>
                <a href="http://bobcat.ws/lundys-lane-july-25-1814---2014.html">
                  <li>200 Year Celebration at Lundy's Lane</li>
                </a>
              </ul>
            </div>
            <div class="linkBox">
              <div class="linkTitle externalLink">EXTERNAL LINKS</div>
              <ul class="linkContent">
                <a href="https://en.wikipedia.org/wiki/James_Miller_(general)" target="_blank">
                  <li>Colonel James Miller</li>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="timeSegment mexicanWarSegment" data-section="mexicanWar">
        <div class="segmentContent">
          <div class="segmentTitle"><u>Mexican War</u></div>
          <div class="segmentWords">
            <div class="segmentImg imgRight imgSmall imgMexican">
            </div>
            <p>
              After the war, the Fifth Infantry was sent to the northwest frontier to help explore and protect the massive new territory acquired before and after the War of 1812.  It built Fort Snelling, participated in the Black Hawk War and suffered through the cold of twenty-six Michigan winters.  In 1845, the regiment was ordered to march south to Corpus Christi, Texas to join Zachary Taylor’s “Army of Observation.”
            </p>
            <p>
              On April 24, 1846, Taylor’s Army crossed the Rio Grande and pushed the Mexican Army deep into Mexico.  The 5th Infantry earned battle streamers for Palo Alto, Resaca De La Palma and Monterey with Taylor. In January 1847, the regiment was transferred to Winfield Scott’s Army and participated in the amphibious attack on Vera Cruz. From there, they advanced and captured Churubusco, Molino del Rey, Chapultepec and finally, Mexico City.
            </p>
            <p>
              Following the Mexican War, the Fifth Infantry Regiment returned to the frontier.  It was involved in exploration of the southwest and the protection of settlements and travelers in the territories that would become Oklahoma, Arkansas, Texas and New Mexico.  In 1857, the 5th was ordered to Florida to coax the Seminoles out of their swampy stronghold.  That mission was diverted when the regiment was ordered to proceed to Utah to deal with the Mormons, who were accused of denying the sovereignty of the United States and inciting Indian attacks on travelers.
            </p>
          </div>
        </div>
      </div>
      <div class="timeSegment civilWarSegment" data-section="civilWar">
        <div class="segmentContent">
          <div class="segmentTitle"><u>Civil War</u></div>
          <div class="segmentWords">
            <div class="segmentImg imgLeft imgExtraSmall imgCivilWar">
            </div>
            <p>
              When the Civil War began in 1861, the 5th Infantry was distributed among several posts in New Mexico.  Twenty-two officers of the regiment went east to serve in the Union Army and nine officers of the regiment resigned their commissions and joined the Confederates.  The remaining officers and men remained in New Mexico under the overall command of Brigadier General Edward Canby.
            </p>
            <p>
              In February, 1862, a column of Texas volunteers commanded by General Henry Sibley, invaded New Mexico.  Sibley’s plan was to capture California and divert its gold to the Confederate treasury.  The 5th Infantry and other units from the Department of New Mexico clashed with Sibley’s column at Valverde, Glorieta Pass and Peralta.  Defeated, the Texans withdrew to San Antonio.  The 5th Infantry remained quietly on the frontier, its boredom broken periodically by expeditions against bands of marauding Navajo Indians.
            </p>
          </div>
          <div class="segmentLinks">
            <div class="linkBox">
              <div class="linkTitle externalLink">EXTERNAL LINKS</div>
              <ul class="linkContent">
                <a href="https://en.wikipedia.org/wiki/New_Mexico_Campaign" target="_blank">
                  <li>New Mexico Campaign</li>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="timeSegment indianWarSegment" data-section="indianWars">
        <div class="segmentTitle"><u>Indian Wars</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              In October, 1868, 5th Infantry Headquarters was established at Ft. Riley, Kansas.  The companies were scattered among several Kansas posts.  The following March, Colonel Nelson Miles assumed command of the regiment.
            </p>
            <div class="segmentImg imgRight imgSmall imgIndianWar">
            </div>
            <p>
              The Indian tribes in the southwest had become bolder and stronger while the U.S. government had been preoccupied with the Civil War. Following a number of hostile actions by Kiowa and Southern Cheyenne warriors, Miles’ 5th Infantry, accompanied by the 10th and 14th Cavalry Regiments, skirmished with the hostile Indians in the Texas Panhandle.  Both tribes surrendered in early 1875.
            </p>
            <p>
              In 1876, the 5th Infantry was dispatched to Southeastern Montana in the wake of Custer’s defeat at the Little Big Horn River.  The regiment built Ft. Keogh near the confluence of the Yellowstone and Tongue Rivers and proceeded to wage year-round campaigns against the local Indians, primarily Sioux and Northern Cheyenne, who were enraged by white prospectors who had violated a treaty and trespassed on their sacred lands.  The regiment prevailed in battles at Cedar Creek, Muddy Creek and the Wolf Mountains and brought an end to the Sioux War.
            </p>
            <p>
              In September 1877, Chief Joseph and his Nez Perce people from the Pacific Northwest tried to escape to Canada to avoid being deported to Oklahoma.  The 5th Infantry caught up with the Nez Perce about thirty miles south of the Canadian border in the Bear Paw Mountains.  After a very bloody battle, Chief Joseph surrendered to Colonel Miles.  When Chief Sitting Bull surrendered at Fort Buford in 1881, hostilities virtually ceased in Montana. The 5th Infantry remained at Fort Keogh until it was transferred to the Texas border in May, 1888.
            </p>
          </div>
          <div class="segmentLinks">
            <div class="linkBox">
              <div class="linkTitle externalLink">EXTERNAL LINKS</div>
              <ul class="linkContent">
                <a href="http://www.pbs.org/weta/thewest/people/a_c/chiefjoseph.htm" target="_blank">
                  <li>Chief Joseph</li>
                </a>
                <a href="https://en.wikipedia.org/wiki/Battle_of_Bear_Paw" target="_blank">
                  <li>Battle of Bear Paw Mountain</li>
                </a>
                <a href="http://www.pbs.org/weta/thewest/people/a_c/crazyhorse.htm" target="_blank">
                  <li>Chief Crazy Horse</li>
                </a>
                <a href="https://en.wikipedia.org/wiki/Battle_of_Cedar_Creek_(1876)" target="_blank">
                  <li>Battle of Cedar Creek</li>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="timeSegment occupationSegment" data-section="territorialOccupation">
        <div class="segmentTitle"><u>Territorial Occupation</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              In 1891, most of the regiment was shifted from Texas to posts in Florida and Alabama.  They were there on February 15, 1898 when the battleship USS Maine blew up in the harbor at Havana, Cuba.  Congress, assuming that the destruction of the Maine had been an act of sabotage, declared war against Spain on April 25. Many of the 5th Infantry officers who had led the regiment during the Indian Wars were promoted and assumed commands of state volunteer units that joined in the invasion of Cuba.  The four-month-long fight was over, however, before the 5th Infantry reached Havana.  It was deployed there as an occupation force for nearly two years.
            </p>
            <p>
              The United States acquired Guam, Puerto Rico and the Philippines as a result of the Spanish-American War.  Filipino nationalists, who had been fighting against Spain for their independence felt that the war had resulted in no more than a change in colonial masters, so they turned their guns on the U.S troops that had been sent to occupy the islands.  The 5th Infantry arrived in the Philippines in September, 1900 to help pacify the insurrectionists.  It was assigned to Abra Province in Northern Luzon.
            </p>
            <p>
              During three years of campaigning in the Philippines, the 5th Infantry was involved in 38 minor engagements while marching an estimated distance of 15,426 miles.  Eighty-six enlisted men perished, six in battle and most of the rest from cholera.
            </p>
          </div>
        </div>
      </div>
      <div class="timeSegment ww1Segment" data-section="WWIandDepression">
        <div class="segmentTitle"><u>World War I & Great Depression</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <div class="segmentImg imgRight imgExtraSmall" style="background-image:url('../../../images/history/PanamaCanal.jpg')">
            </div>
            <p>
              The outbreak of World War I in 1914 caused so much apprehension over the security of the newly-opened Panama Canal that the Panama garrison was heavily augmented.   The 5th Infantry arrived there in November, 1914.  The regiment returned home in the summer of 1918 to prepare for shipment to France, a deployment that was delayed until the fall of 1919, months after the armistice had been signed in Western Europe.  The 5th Infantry was garrisoned near Andernach in western Germany until re-deployment to Portland, Maine in March, 1922.
            </p>
            <p>
              During the Great Depression of the 1930’s, the 5th Infantry and other army units were called upon to organize, equip and lead the Civilian Conservation Corps, an economic stimulus program that maintained and improved many of the nation’s parks.  The pay of the officers and men was reduced by 10% to help balance the national budget.
            </p>
          </div>
        </div>
      </div>
      <div class="timeSegment ww2Segment" data-section="WWII">
        <div class="segmentTitle"><u>World War II</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <div class="segmentImg imgLeft imgBig" style="background-image:url('../../../images/history/Hist_5th_INFANTRY_REGIMENT.png')">
            </div>
            <p>
              The German invasion of Poland in 1939 focused attention upon America’s defenses, particularly in the Caribbean area.  On September 8, 1939, the 5th Infantry was once more ordered to return to the Canal Zone. The regiment served there until early 1943, then was garrisoned temporarily at Camp Van Dorn, Mississippi, and finally departed from there that June, to help form the 71st Infantry Division at Fort Carson, Colorado.
            </p>
            <p>
              The 71st Division commenced combat operations in the Vosges Mountains in Alsace-Lorraine on March 11, 1945.  Attacking eastward into Germany, they breached the Siegfried Line, crossed the Rhine at Worms, and drove as far northeast as the town of Fulda.  On April 1, the 71st Division was shifted to Patton’s 3rd Army. During much of April, riflemen from the 5th engaged in fire fights with elements of Germany’s 6th SS Mountain Division.
            </p>
            <p>
              On May 2, the 5th Infantry crossed the Inn River into Austria and attacked due east with the rest of XII U.S. Army Corps.  Three days later, the regiment stumbled upon Gunskirchen Lager, a concentration camp for 18,000 prisoners of the Nazis.  Companies K and M remained at the camp to supervise the feeding, hospitalization and burial of the inmates, while most of the 5th Infantry pushed on toward Steyer to link-up with the Russians.  When the war ended on May 7, the 5th had completed its 775-mile push through Western Europe and was farther east than any other Allied unit.
            </p>
            <p>
              Following the German surrender, the 5th Infantry was shifted to Augsberg, Germany and became part of the Army of Occupation.  The regiment was de-activated on November 16, 1946.  Depending upon their rotation point totals, the men were either transferred to the 16th Infantry or shipped home to Fort Dix for discharge.
            </p>
          </div>
          <div class="segmentLinks">
            <div class="linkBox">
              <div class="linkTitle learnMore">LEARN MORE</div>
              <ul class="linkContent">
                <a href="{{ url('/history/album/ww2') }}">
                  <li>Photo Album</li>
                </a>
                <a href="https://classic.bobcat.ws/ww2history.html">
                  <li>History of Company C</li>
                </a>
                <a href="https://classic.bobcat.ws/recollections-by-ponder.html">
                  <li>Recollections by Lew Ponder</li>
                </a>
                <a href="https://classic.bobcat.ws/5th-infantry-chorus.html">
                  <li>5th Infantry Soldier Chorus</li>
                </a>
                <a href="http://bobcat.ws/The%20Soldier%20Chorus.PDF">
                  <li>"The Soldier Chorus" by Robert Peck</li>
                </a>
              </ul>
            </div>
            <div class="linkBox">
              <div class="linkTitle externalLink">EXTERNAL LINKS</div>
              <ul class="linkContent">
                <a href="https://www.worldcat.org/title/riding-point-for-patton-the-fifth-infantry-regiment-in-world-war-ii/oclc/16635072" target="_blank">
                  <li>BOOK: "Riding Point For Patton" by Gerald McMahon</li>
                </a>
                <a href="https://www.worldcat.org/title/my-brother-hail-and-farewell/oclc/260222720&referer=brief_results" target="_blank">
                  <li>BOOK: "My Brother, Hail And Fairwell" by Edward Zebrowski</li>
                </a>
                <a href="http://lylestorey.tripod.com/index.html" target="_blank">
                  <li>71st Infantry Division</li>
                </a>
                <a href="https://remember.org/full_version.html" target="_blank">
                  <li>"The 71st Came to Gunskirchen Lager"</li>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="timeSegment koreanSegment" data-section="koreanWar">
        <div class="segmentTitle"><u>Korean War</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              After the defeat of Japan, the Korean Peninsula was divided at the 38th Parallel for the purpose of processing Japanese prisoners of war.  The Soviet Union was responsible for those prisoners north of the parallel and the United States assumed responsibility for those in the southern half of the country.  The intent, on the part of the United States, was not to divide Korea into two hostile camps.  The Soviets, however, took advantage of the situation, formed a North Korean Army and dragged North Korea into the Communist fold.  President Truman reacted by ordering the U.S. Army to form a small South Korean defense force and to leave a token American garrison to train and assist the South Koreans.  The 5thRegimental Combat Team was activated on January 1, 1949 for that purpose.  This re-incarnation of the 5th Infantry Regiment was composed of personnel and equipment transferred from the 7th Infantry Division.
            </p>
            <div class="segmentImg imgRight imgBig" style="background-image:url('../../../images/history/mortar_korea.jpg')">
            </div>
            <p>
              The severely under-strength 5th RCT was transferred to Schofield Barracks, Hawaii in June, 1949, where they spent the next year absorbing and training replacements.  On Saturday, June 24, 1950, the men were enjoying an evening in Honolulu when they were suddenly ordered to return to the base.  The North Korean Peoples’ Army had invaded South Korea.  The combat team was alerted for shipment to Korea.
            </p>
            <p>
              On August 1, the 5th RCT was the first reinforcing unit to reach Korea from an area outside of Japan.  The three under-strength infantry divisions that had been rushed from Japan had already suffered 6000 casualties.  An enemy drive on Pusan at the southern end of the Pusan Perimeter, compelled Eighth Army Commander, General Walton Walker to assign the combat team to that critical area.  Third Battalion, 5th Infantry, received a Presidential Unit Citation, when it helped blunt an enemy  attack proceeding west along the Chinju-Masan corridor.
            </p>
            <p>
              On 18 September, the 5th RCT was assigned to the 24th Infantry Division to replace the 34th Infantry.  The 34th had gone into action in July with 2000 men.  Two months later, its 184 survivors were parceled out to the 24th ID’s remaining regiments, the 19th and the 21st.
            </p>
            <p>
              Following the amphibious landing of the 7th Infantry Division and the Marines at Inchon, the 5th RCT captured the city of Waegwan, crossed the Naktong River and pushed north as part of a general breakout from the Pusan Perimeter.  The combat team crossed into North Korea on 17 October.  When they reached Sinanju near the North Korean-Manchurian border, they met no resistance.  Many soldiers thought that the war was over but, by November 1, thousands of Chinese troops had entered the conflict.  Nevertheless, General MacArthur told the 8th Army to continue attacking until it reached the Yalu River.  The Communist Chinese Forces launched a counter-offensive on November 25 and a battered Eighth Army commenced the longest retreat in the history of the United States Army.  The 5th RCT finally halted and dug in at Changhowan-ni.  At that point, the regiment had withdrawn 300 miles.
            </p>
            <p>
              On 29 January, the Eighth Army resumed the attack northward.  The 5th RCT crossed the Han River, bypassed Seoul and reached Line Utah on April 20.  They were preparing to attack north to Kumwha on the following day, when the Chinese unleashed another offensive.  As the combat team withdrew, it was flanked, on both sides, by the CCF 60th Division and suffered heavy losses.  Despite this victory at Pisi-gol, the morale of the Chinese Army cracked by the end of April.  Seventy thousand Chinese soldiers were killed or wounded during their 1951 offensive.
            </p>
            <div class="segmentImg imgLeft imgBig" style="background-image:url('../../../images/history/rifle_PLT_korea.jpg')">
            </div>
            <p>
              In June, 1951, the 5th RCT relieved the 32nd Infantry on Line Wyoming, near the 38th Parallel and conducted close-in and security patrolling.  In October, the combat team moved forward, wresting the high ground south of Kumsong from five Chinese battalions and dug in on Line Missouri.  In January, 1952, the 5th RCT was released from the 24th Infantry Division and passed to the control of the 40th Infantry Division, California National Guard. First and Second Battalions were sent to help quell the riots at the POW camp on the island of Koje Do and Third Battalion was sent to Sangdong to provide security for the tungsten mines.
            </p>
            <p>
              On June 19, 1952, the 5th RCT returned to combat when it rejoined the 25th Infantry Division and relieved the 14th Infantry on the northern lip of the Punch Bowl, a portion of Line Minnesota in eastern Korea.  It devoted the next ten months to the nightly reconnaissance and ambush patrols that characterized the trench-warfare half of the Korean War.
            </p>
            <p>
              On April 19, 1953, the 5th RCT was released from operational control of the 45th Infantry Division, Oklahoma National Guard, and convoyed 120 miles to the west to join forces with the 3rd Infantry Division on Line Missouri near the village of Songnae-dong. They were placed on the line directly behind Outpost Harry, a critical hill coveted by the Chinese.
            </p>
            <p>
              On the night of June 12-13, three rifle platoons from Able Company and a machine gun section from Dog Company, were assigned to the observation post.  They held off repeated attacks by a reinforced regiment of Chinese.  The skill and bravery of these elements of 1st Battalion and the Forward Observer Team from the 555th FAB was recognized by the award of a second Presidential Unit Citation for the 5th Infantry.
            </p>
            <p>
              The 5th Infantry Regiment returned to eastern Korea and went into position on the left flank of the 45th Division on a ridgeline east of the Puk-han Valley.  The combat team was there when the armistice went into effect at 2030 hours on 27 July 1953.  The 5th Infantry and the 555th FAB pulled back to Chipo-ri, leaving the 72nd Combat Engineers behind to destroy the bunkers.
            </p>
          </div>
          <div class="segmentLinks">
            <div class="linkBox">
              <div class="linkTitle learnMore">LEARN MORE</div>
              <ul class="linkContent">
                <a href="{{ url('/history/album/korea') }}">
                  <li>Photo Album</li>
                </a>
                <a href="https://classic.bobcat.ws/stuffelbeam.html">
                  <li>Myron Stuffelbeam - 50th Year Recognition</li>
                </a>
                <a href="https://classic.bobcat.ws/Co%20A%20Dist.%20Unit%20Cit.%20Korea.pdf">
                  <li>Distinguished Unit Citation</li>
                </a>
                <a href="https://classic.bobcat.ws/million-dollar-hill.html">
                  <li>"Million Dollar Hill"</li>
                </a>
              </ul>
            </div>
            <div class="linkBox">
              <div class="linkTitle externalLink">EXTERNAL LINKS</div>
              <ul class="linkContent">
                <a href="https://www.amazon.com/exec/obidos/ASIN/1563115883/qid%3D975025740/104-0489905-1741534" target="_blank">
                  <li>BOOK: "Hills of Sacrifice: The 5th RCT in Korea" by Michael P. Slater</li>
                </a>
                <a href="https://heritagebooks.com/products/101-k3487" target="_blank">
                  <li>BOOK: "Thirty-Six Points: A Novel of the Korean War" by Samuel P. Kier</li>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="timeSegment preVietnamSegment" data-section="1954to1966">
        <div class="segmentTitle"><u>1954 to 1966</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              Between October and early December, 1954, the 5th RCT redeployed, in segments, to Ft. Lewis, Washington.  The 5th Infantry was re-assigned to the 71st Infantry Division, its World War II parent organization.  It prepared for its next confrontation with a Communist enemy, presumably the Soviet Union.
            </p>
            <p>
              In August, 1956, the 5th Infantry was released from the 71st Infantry Division and the personnel and equipment at Fort Lewis were used to re-activate the 22nd Infantry Regiment.  The 61st Infantry Regiment at Fort Carson was re-designated the 5th Infantry Regiment.  This incarnation of the 5th soon exchanged stations with the 39th Infantry of the 9th Infantry Division in Germany.
            </p>
            <p>
              In September, 1956, the Army proceeded to re-organize its divisions pentomically, replacing the basic three infantry regiments with five battle groups.  First Battalion, 5th Infantry and a company from 2nd Battalion, 5th Infantry were combined to form 1st Battle Group, 5th Infantry, 8th Infantry Division.  This battle group shipped home from Germany to Fort Riley, Kansas, in September, 1958 to become part of the 1st Infantry Division.
            </p>
            <p>
              In the early 60’s, as the army began to be drawn into the troubles in Vietnam, the pentomic organization was dropped in favor of returning to a modified triangular division of three brigades of three infantry battalions each.  The 1st Battle Group, 5th Infantry was released from the 1st Infantry Division on February 1, 1963, re-designated 1st Battalion, 5th Infantry, and assigned to the 2nd Brigade, 25th Infantry Division at Schofield Barracks in Hawaii.
            </p>
            <p>
              At the time of re-organization, the battalion received sixty-eight M-113 armored personnel carriers from the motor pool.  The new mechanized battalion was comprised of three rifle companies and a headquarters company that included a headquarters contingent plus reconnaissance and medical platoons.
            </p>
          </div>

        </div>
      </div>
      <div class="timeSegment vietnameSegment" data-section="vietnamWar">
        <div class="segmentTitle"><u>Vietnam War</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              When 1st Battalion, 5th Infantry was sent to Vietnam in January, 1966, it became one of the few mechanized units to serve in the war.  During the next three months, the 2nd Brigade, 25th Infantry Division, including 1st Battalion, 5th Infantry, was engaged in continuous ground combat against the Viet Cong to secure a base of operations for itself and the rest of the 25th Infantry Division near Tan An Hoi in the Cu Chi District of Vietnam.  During that period, the brigade, through reconnaissance in force,   ambush, counter-ambush and reaction missions, killed 449 Viet Cong, severely disrupted    insurgent activities and discredited the Viet Cong in the eyes of the local populace.  The 2nd Brigade, including the 1st Battalion, 5th Infantry, received a Valorous Unit Award for the Battle for Cu Chi.
            </p>
            <p>
              In January, 1967, the battalion shifted operations from Cu Chi to Tay Ninh Province, some 48 kilometers to the northwest.  Tay Ninh was an exit point for the Ho Chi Minh Trail which was used by the enemy to transport troops, weapons, and military equipment from North Vietnam through Laos and Cambodia and from there to points further south.  The 25thDivision was placed there to plug the hole.  The 5th Infantry participated in daily search and destroy operations in an effort to interdict the movement of supplies to the Saigon area.  When the Viet Cong celebrated Tet 1968 by increasing offensive operations around Saigon, the battalion was shifted south to deal with troubles in the Boi Loi, Ho Bo Woods and Filhol Plantation area.
            </p>
            <div class="segmentImg imgRight imgBig" style="background-image:url('../../../images/history/ben_cui.jpg')">
            </div>
            <p>
              In early August, 1968, 1st Battalion, 5th Infantry moved north and joined the rest of the 2nd Brigade at Dau Tieng.  On the morning of August 21, Charlie Company, flanked by Recon Platoon, departed Dau Tieng to reconnoiter the Ben Cui Rubber Plantation.  Shortly after 11:00 A.M, the two lead platoons came under heavy mortar, rocket-propelled grenade, machine gun and automatic weapons fire.  Company C had run into 4th Battalion of the Phu Loi (VC) Regiment. Gunship support was requested.
            </p>
            <p>
              As they waited for air support, the men of Charlie Company held off the numerically superior enemy force with small arms, LAW anti-tank weapons and their APC-mounted .50 caliber machine guns.  A light fire (helicopter) team did not arrive until 12:01.  Meanwhile, Charlie Company had killed one hundred and eighty-two Viet Cong at a cost of 17 dead and twenty-one wounded Bobcats.  The 1st   Battalion, 5th Infantry received a Presidential Unit Citation for the period 18 August through 20 September, 1968, the third such award in the history of the regiment.
            </p>
            <p>
              In November, 1968, the battalion returned to the Boi Loi Woods area and for the next ten months was engaged in stiff fighting near the VC controlled village of Trung Lap.  At this point in the war, encounters with North Vietnamese Army troops increased.
            </p>
            <div class="segmentImg imgLeft imgBig" style="background-image:url('../../../images/history/vietnam_2.jpeg')">
            </div>
            <p>
              North Vietnamese and Viet Cong units had maintained base areas in eastern Cambodia, a self-proclaimed neutral country, since the mid-1960s.  In April, 1970, President Nixon approved a limited incursion into Cambodia.  First Brigade of the 25th Infantry Division, including 1st Battalion, 5th Infantry, crossed the river into Cambodia on May 7.  The thirty-day incursion into Cambodia, code-named Operation Bold Lancer, resulted in the killing of 11, 349 Communist troops and the capture of 600 supply caches.  The battalion suffered 19 killed and 93 wounded.  The 5th Infantry completed its combat mission in Vietnam near Xuan Loc, the provincial capital of Long Khanh Province, and began re-deployment to Hawaii on April 30, 1971.
            </p>
            <p>
              While the 1st Battalion, 5th Infantry was battling Communist forces near Tay Ninh, Vietnam, in June, 1968, the 3rdBattalion, 5th Infantry was re-activated at Fort Kobbe in the Panama Canal Zone to replace the 3rd Battalion, 508th Airborne Infantry.  Third Battalion was composed of one company of airborne infantry, two regular rifle companies, and a combat support company.  Third battalion folded its flag in 1987 when the 508th Infantry was reactivated just in time for Operation Just Cause, the 1989 invasion of Panama.
            </p>
            <p>
              Following the Vietnam War, the Secretary of the Army directed that the 25th Division’s two brigades be brought up to full strength to increase its capability as a strategic reserve for the Pacific area.  First Battalion, 5th Infantry became part of 1st Brigade, 25th Infantry Division at Schofield Barracks.
            </p>
          </div>
        </div>
        <div class="segmentLinks">
          <div class="linkBox">
            <div class="linkTitle learnMore">LEARN MORE</div>
            <ul class="linkContent">
              <!-- <a href="http://bobcat.ws/after-action-reports.html"> -->
              <a href="{{ route('vietnam.aar') }}">
                <li>After Action Reports (AAR)</li>
              </a>
              <li>"In The Vietnam War 1966 - 1971" by Larry Hadzim</li>
              <div class="subChapters">
                <a href="{{ route('vietnam.preface') }}">
                  <div>+ Preface</div>
                </a>
                <a href="{{ route('vietnam.1966') }}">
                  <div>+ 1966</div>
                </a>
                <a href="{{ route('vietnam.1967') }}">
                  <div>+ 1967</div>
                </a>
                <a href="{{ route('vietnam.1968') }}">
                  <div>+ 1968</div>
                </a>
                <a href="{{ route('vietnam.1969') }}">
                  <div>+ 1969</div>
                </a>
                <a href="{{ route('vietnam.1970') }}">
                  <div>+ 1970</div>
                </a>
                <a href="{{ route('vietnam.1971') }}">
                  <div>+ 1971</div>
                </a>
                <a href="{{ url('/history/vietnam-history/maps') }}">
                  <div>+ Maps</div>
                </a>
                <a href="{{ route('vietnam.glossary') }}">
                  <div>+ Glossary</div>
                </a>
              </div>
              <a href="{{ route('bencui.main') }}">
                <li>Ben Cui Battle</li>
              </a>
              <a href="{{ route('michelin.battle') }}">
                <li>Michelin Rubber Plant Battle</li>
              </a>
              <a href="{{ route('rifle.myth') }}">
                <li>The Rifle And The Myth</li>
              </a>
              <!-- <a href="{{ url('/history/album/vietnam') }}">
                <li>Photo Album</li>
              </a> -->
            </ul>
          </div>
          <div class="linkBox">
            <div class="linkTitle externalLink">EXTERNAL LINKS</div>
            <ul class="linkContent">
              <a href="https://www.scribd.com/document/422797331/bbc-andrew-h-anderson-2?secret_password=AjFxkwUDjtyACCV89zZ4#from_embed" target="_blank">
                <li>"The Human Toll of the Battle of Ben Cui” by MG-R Andrew H. Anderson</li>
              </a>
              <a href="https://www.scribd.com/document/422800015/ben-cui-1?secret_password=vY8QsdJxa70BgjM0yA3i#from_embed" target="_blank">
                <li>"Bobcats in the Ben Cui" by MAJ-R Bob Wright</li>
              </a>
              <a href="https://history.army.mil/html/books/090/90-7/index.html" target="_blank">
                <li>"Cedar Falls-Junction City: A Turning Point" by MG Bernard W. Rogers</li>
              </a>
            </ul>
          </div>
        </div>
      </div>
      <div class="timeSegment southKoreaSegment" data-section="1975to2001">
        <div class="segmentTitle"><u>1975 to 2001</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              By April of 1975, over 100,000 refugees had fled South Vietnam as the Communist takeover became more imminent. The 5th Infantry was sent to Orote Point, Guam to participate in Operation New Life.  There they joined forces with Army logistical and medical units and Navy Seabees to erect and operate a refugee reception camp. During its sixty days on Guam, the task force erected tent cities, provided camp security, administered immunizations, and guided refugees through the registration process.
            </p>
            <p>
              The mission of 1st Battalion, 5th Infantry Regiment, for the next 29 years was to maintain the highest possible level of combat readiness for deployment anywhere in the Pacific region.  The battalion was air-lifted to South Korea annually, between 1976 and 1993, to participate in Operation Team Spirit, rehearsing a quick reaction to possible threat from North Korea.  The Bobcats continue to travel to Australia to collaborate with the Aussies and to the Philippines for Balikatan, an annual exercise with the Philippine Army.
            </p>
            <p>
              Between 1985 and 1987, the Army declared the 6th  Infantry, 10th Mountain, and 25th Infantry Divisions “light” infantry divisions.  As a consequence, on 16 January 1986, the 1st Battalion, 5th Infantry became the 3rd Battalion, 21stInfantry.  There would be no active element of the 5th Infantry for the next sixteen months.
            </p>
            <p>
              Tensions continued on the Korean Peninsula.  By 1987, ninety U.S. soldiers had died in combat in Korea since the implementation of the 1953 truce accord.  On 24 April 1987, the 1st Battalion, 5th Infantry reappeared when the 1st Battalion, 31st Infantry was re-flagged.  The battalion, part of the 3rd Brigade, 2nd Infantry Division was initially garrisoned at Camp Howze, forty miles north of Seoul.  The new Bobcats were, once again, equipped with M-113A3 personnel carriers.  When the 2nd Division moved further north to Camp Hovey in 1990, the battalion turned in its “tracks” for Bradley Fighting Vehicles.
            </p>
            <p>
              In August, 1995, the 1st Battalion, 9th Infantry at Ft. Lewis, Washington exchanged flags with the 1st Battalion, 5th Infantry at Camp Howze.  That same month, the 2nd Battalion, 5th Infantry was re-activated at Schofield Barracks.  The two 5th Infantry battalions were assigned to the 1st and 3rd Brigades of the 25th Infantry Division, respectively.  In 1997, 1stBattalion was involved in training exercises to test the new digital communications equipment that is currently used by the U.S. Army.  The battalion received the Army Superior Unit Award for its contribution to the modernization of light infantry capabilities.  First Battalion subsequently served as peacekeepers on the Sinai Peninsula from January through June of 2000.
            </p>
          </div>
        </div>
      </div>
      <div class="timeSegment gwotSegment" data-section="warOnTerror">
        <div class="segmentTitle"><u>Global War On Terrorism</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              World peace was shattered, however, on September 11, 2001, when Saudi terrorists, linked to Osama bin Laden’s al Qaeda terrorist network, hijacked four American airliners and killed more than three thousand Americans.  On the 28th of November, soldiers from the 10th Mountain Division moved into Afghanistan with the intent of destroying terrorist camps and infrastructure, capture al Qaeda leaders, and overthrow the Taliban regime. The 10th Mountain was soon joined by elements of the 101st Airborne and the 75th Rangers.
            </p>
            <p>
              The active battalions of the 5th Infantry at Fort Lewis and Schofield Barracks began preparing for deployment. Starting in the spring of 2002, the three infantry brigades of the 25th Infantry Division began converting from light infantry brigades to Stryker brigades, using the new wheeled vehicle that serves as the army’s primary weapons platform.
            </p>
            <p>
              Third Brigade, 25th Infantry Division, including the 2nd Battalion, 5th Infantry, was deployed to Afghanistan in April, 2004.  Its mission was to deny sanctuary to the terrorists and to create the conditions for security, stability and reconstruction in the war-torn land.  The battalion began its tour of duty in Ghazni Province but soon moved to Tirin Kot in Oruzgan Province.  As in Vietnam, the components of battalion were usually dispersed.
            </p>
            <div class="segmentImg imgRight imgBig" style="background-image:url('../../../images/history/afghanistan105.jpg')">
            </div>
            <p>
              The first major task was to curtail efforts by the Taliban and other anti-coalition militia to disrupt the Afghan presidential election scheduled for October 9, 2004.  Once the election was over, the operational emphasis was shifted to furnishing support for Afghan reconstruction and the training of Afghan security forces.  There were also plenty of natural disasters in the mountainous country to keep the men of the battalion busy.  Following Second Battalion’s return to Schofield Barracks in the spring of 2005, it was awarded the Meritorious Unit Commendation for its exemplary service in Afghanistan. Second Battalion folded its flag on 16 November 2005 when it became 3rd Squadron, 4th  Cavalry Regiment.
            </p>
            <p>
              Six months before the 2nd Battalion returned from Afghanistan, the 1st Battalion departed Ft. Lewis for Iraq.  It relieved 1st Battalion, 23rd Infantry at Camp Taji, northwest of Baghdad just in time to participate in the second battle for Fallujah.
            </p>
            <p>
              On 11 November, the battalion was ordered to move north to Mosul, Iraq’s second largest city to deal with increased insurgent activity.  The Bobcats were assigned responsibility for a wide area that extended to the outlying villages and hamlets to the south and west of the city.
            </p>
            <p>
              The search for information about the local insurgents was the first crucial challenge faced by the battalion.  It initially relied on mass arrests, random traffic stops, and intelligence gathered from Iraqis who frequently wanted revenge for the murder of a family member.  An Information Operations Team spread word of the battalion’s successes, emphasized the damage created by the terrorists and sought to mitigate any damage done by the coalition forces.  A Civil Affairs Team went from village to village talking to the tribal and religious leaders, determining their major needs and drafting projects to be completed with U.S. funds.
            </p>
            <div class="segmentImg imgLeft imgBig" style="background-image:url('../../../images/history/iraq_MAR2005.jpeg')">
            </div>
            <p>
              Throughout January, 2005, the battalion interdicted insurgents attempting to enter or leave the city as it prepared for the Iraqi national elections.  Election Day, in late January, ended without a major incident.  Iraqis had been able to vote for the first time in 50 years and they began to demonstrate a change in sentiment.  An increased number of citizens began pointing out the homes and safe houses of enemy combatants.
            </p>
            <p>
              Following the election, there was a shift in focus as the battalion dedicated the bulk of its time to making the Iraqi security forces more successful.  Given the high degree of enemy threat in Mosul, most of the training had to be on-the-job, conducted during combat patrols.  These patrols discovered many large weapons caches and many types of IED’s.  These daily encounters continued right up until September 11, when the Bobcats yielded control of their area of operations to the 4th Battalion, 23rd Infantry Tomahawks.
            </p>
            <p>
              First Brigade, 25th Infantry Division, including 1st Battalion, 5th Infantry received the Valorous Unit Award for its fight to secure Mosul. On June 1, 2006, the 1st Brigade, 25th Infantry Division was de-activated.  First Battalion, 5th Infantry became 1st Squadron, 2nd Cavalry.
            </p>
            <p>
              In early December, 2006, the 172nd Stryker Brigade, another recipient of the Valorous Unit Award, returned to Fort Wainwright, Alaska after an extended tour in Iraq.  Ten days later, the brigade’s 1st Battalion was re-flagged 1st Battalion, 5th Infantry, 1st Stryker Brigade, 25th Infantry Division.  The battalion immediately tackled the job of repairing and retrofitting the unit’s 289 Stryker vehicles that had survived sixteen months of combat in Iraq.  While training for its next deployment to the Middle East, the 5th Infantry devoted some time to its continuing obligation to provide security for the Pacific region.  It participated in exercises held in Australia and the Philippines.
            </p>
            <p>
              In September, 2008, 1st Battalion was given a brief indoctrination to desert warfare at Fort Irwin, California and then proceeded to Iraq.  It relieved the 2nd Cavalry Regiment in Diyala Province, a farming area northeast of Baghdad.  The battalion was tasked with clearing and stabilizing Baqubah, the provincial capital.  The Bobcats discovered many caches of arms and munitions, eliminated a significant number of insurgents and accomplished its objectives during the first forty-five days of the operation.
            </p>
            <p>
              On August 16, 2009, 2nd Battalion, 5th Infantry was re-activated at Fort Bliss, Texas.  The battalion is part of the 3rd Infantry Brigade, 1st Armored Division.  Following more than a year of training in the mountainous terrain of New Mexico and West Texas, 2nd Battalion is combat ready and destined to earn further honors for America’s third oldest active infantry regiment.
            </p>
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
      <div class="author">
        <div>
          Author: Sam Kier
        </div>
        <div>
          Date: Veteran’s Day, 2010
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop
