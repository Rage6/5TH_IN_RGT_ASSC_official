@extends('layouts.master')

@section('album_style')
  <!-- History Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/history/album/360_album.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/history/album/375_album.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 375px) and (max-width: 414px)" type="text/css" href="/css/my_custom/history/album/414_album.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/history/album/768_album.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/history/album/1366_album.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/history/album/1920_album.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/history/album/past_1920_album.css">
  @include ('footer.style')
@stop

@section('ww2_content')
  <div class="mainBody">
    <div class="mainTitle">
      <div>World War II</div>
      <div>PHOTO ALBUM</div>
    </div>
    <div class="backBttn">
      <a href="{{ url('/history/timeline') }}">
        <div><< HISTORY</div>
      </a>
    </div>
    <div class="allImgBox">
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/ww2/COL_Wooten.jpg" target="_blank">
            <img src="../../../images/history/albums/ww2/COL_Wooten.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          Col Wooten (71st patch) talking with some Russian tank soldiers. This must have been taken somewhere at the Enns River in or near Steyr, Austria, May 7 or later, 1945.
        </div>
        <div class="photographer">
          Courtesy of Robert J. Lapine
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/ww2/Company_A.jpg" target="_blank">
            <img src="../../../images/history/albums/ww2/Company_A.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          Sgt. Milburn Rogers, Company A, 5th Infantry, gets the first Bronze Star awarded to a member of the Division after it went into action.
        </div>
        <div class="photographer">
          Courtesy of Glen Cuneo
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/ww2/Company_C_left.jpg" target="_blank">
            <img src="../../../images/history/albums/ww2/Company_C_left.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            The left portion of the official photo of Company C, 5th Infantry Regiment.
          </div>
          <div>
            Each name is numbered by its row (front to back) and location within that row (left to right). Not all soldiers could be identified in this photo.
          </div>
          <div>
            <div>Jerry R. Moore (1/1)</div>
            <div>George J. Wilkens (1/3)</div>
            <div>Kenneth A. Young (1/4)</div>
            <div>Everett D. Fish (1/7)</div>
            <div>Stephen G. Gurka [?] (1/8)</div>
            <div>Murray E. Stebbins (2/2)</div>
            <div>Victor L. Forister (2/6)</div>
            <div>Jack E. Waters (2/7)</div>
            <div>Lenardo D. Di Bella (2/8)</div>
            <div>Raymond Mannon (3/4)</div>
            <div>George J. Butler (3/8)</div>
            <div>Doo K. Wong (4/6)</div>
            <div>Stephen G. Gurka [?] (4/8)</div>
            <div>David A. Pollick (4/)</div>
            <div>Monroe LeFevre Jr. (5/1)</div>
            <div>Harold D. Germann (5/2)</div>
            <div>Austin E. Pritchett (5/5)</div>
            <div>Ercil L. Bogner (5/6)</div>
            <div>Milburn Lake (6/1)</div>
            <div>Alvin G. Kramer (6/2)</div>
            <div>Albert I. Faulkner (6/4)</div>
            <div>Donald H. Sitz (6/6)</div>
            <div>Francis J. Schneble (6/8)</div>
            <div>Stvrch[?] (6/9)</div>
          </div>
        </div>
        <div class="photographer">
          Courtesy of Kenneth A. Young
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/ww2/Company_C_middle.jpg" target="_blank">
            <img src="../../../images/history/albums/ww2/Company_C_middle.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            The middle portion of the official photo of Company C, 5th Infantry Regiment.
          </div>
          <div>
            Each name is numbered by its row (front to back) and location within that row (left to right). Not all soldiers could be identified in this photo.
          </div>
          <div>
            <div>Stephen G. Gurka[?] (1/1)</div>
            <div>Stephen M. Hudacik (1/2)</div>
            <div>John Vavrek (1/3)</div>
            <div>Edwin W. Allen (1/4)</div>
            <div>William C. Hartman (1/6)</div>
            <div>Leo C. NcMahon (2/3)</div>
            <div>Robert S. Blim (2/4)</div>
            <div>Dale Barnstable (2/5)</div>
            <div>Joseph Sockel (2/6)</div>
            <div>Mike B. Layden (2/7)</div>
            <div>Carl M. Bush (2/8)</div>
            <div>Charles T. [OR] Robert R. Miller (3/2)</div>
            <div>Carl Nadolsky (3/6)</div>
            <div>Clarence G. Ochs (4/2)</div>
            <div>William L. La Due (4/4)</div>
            <div>Robert E. Bohrer (4/6)</div>
            <div>Joseph Petnuch (4/7)</div>
            <div>Thomas M. Queener (5/3)</div>
            <div>Sturch [?] (6/1)</div>
            <div>Green [?] (6/3)</div>
            <div>Ernest W. Nordquist (6/4)</div>
          </div>
        </div>
        <div class="photographer">
          Courtesy of Kenneth A. Young
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/ww2/Company_C_right.jpg" target="_blank">
            <img src="../../../images/history/albums/ww2/Company_C_right.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            The right portion of the official photo of Company C, 5th Infantry Regiment.
          </div>
          <div>
            Each name is numbered by its row (front to back) and location within that row (left to right). Not all soldiers could be identified in this photo.
          </div>
          <div>
            <div>Arthur Lee [OR] Howard J. Lee (1/3)</div>
            <div>Chester A. Handy (1/4)</div>
            <div>Steven Revilock (1/5)</div>
            <div>James F. Fereira (2/7)</div>
            <div>Harry Lathrop</div>
          </div>
        </div>
        <div class="photographer">
          Courtesy of Kenneth A. Young
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/ww2/Company_D.jpg" target="_blank">
            <img src="../../../images/history/albums/ww2/Company_D.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            "Photo of Co D 5th Inf . I got this yesterday from Stan Isaacson (LTC, USAR, Ret'd). He and his brother Robert are in the third row from the top, fifth and fourth from the right. The photo was probably taken in September or October 1944. The men are still wearing leggins. We didn't get combat boots until November or December, 1944."
          </div>
        </div>
        <div class="photographer">
          Courtesy of Robert J. Lapine
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/ww2/eaglenest1.jpg" target="_blank">
            <img src="../../../images/history/albums/ww2/eaglenest1.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Ken Young at Hitler's Eagles Nest
          </div>
        </div>
        <div class="photographer">
          Courtesy of Ken Young
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/ww2/eaglenest2.jpg" target="_blank">
            <img src="../../../images/history/albums/ww2/eaglenest2.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            SS Barracks part way down the mountain from the Eagles Nest
          </div>
        </div>
        <div class="photographer">
          Courtesy of Ken Young
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/ww2/eaglenest3.jpg" target="_blank">
            <img src="../../../images/history/albums/ww2/eaglenest3.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            SS Barracks part way down the mountain from the Eagles Nest
          </div>
        </div>
        <div class="photographer">
          Courtesy of Ken Young
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/ww2/Kyoung5.jpg" target="_blank">
            <img src="../../../images/history/albums/ww2/Kyoung5.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            (Left to Right) Sgt. Dale Barnstable [Squad Leader], S/SGT Kenneth Young [Section Leader], T/Sgt Everett Fish [Platoon Leader of the 60MM Mortor Section]
          </div>
        </div>
        <div class="photographer">
          Courtesy of Ken Young
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/ww2/COL_Sidney_Wooten.jpg" target="_blank">
            <img src="../../../images/history/albums/ww2/COL_Sidney_Wooten.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Col. Sidney C. Wooten, Regimental Commander
          </div>
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/ww2/COL_Charles_Gettys.jpg" target="_blank">
            <img src="../../../images/history/albums/ww2/COL_Charles_Gettys.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Col. Charles Martin Gettys, 2nd Battalion Commander
          </div>
        </div>
        <div class="photographer">
          Courtesy of "History of the 71st Infantry"
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/ww2/MAJ_James_Haley.jpg" target="_blank">
            <img src="../../../images/history/albums/ww2/MAJ_James_Haley.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Maj. James W. Haley, 3rd Battalion Commander
          </div>
        </div>
        <div class="photographer">
          Courtesy of "History of the 71st Infantry"
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/ww2/area_of_operations.jpg" target="_blank">
            <img src="../../../images/history/albums/ww2/area_of_operations.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Area Of Operations - The 5th Infantry Across Europe
          </div>
        </div>
        <div class="photographer">
          By Col. Sidney C. Wooten
        </div>
      </div>

    </div>
  </div>
  @include ('footer.content')
@stop

@section('korea_content')
  <div class="mainBody">
    <div class="mainTitle">
      <div>Korean War</div>
      <div>PHOTO ALBUM</div>
    </div>
    <div class="backBttn">
      <a href="{{ url('/history/timeline') }}">
        <div><< HISTORY</div>
      </a>
    </div>
    <div class="allImgBox">
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/korea/6771449_orig.jpg" target="_blank">
            <img src="../../../images/history/albums/korea/6771449_orig.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Front Rifle Platoon of 5th RCT, 24th Infantry Division on the Korean Front
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/korea/3950178_orig.jpg" target="_blank">
            <img src="../../../images/history/albums/korea/3950178_orig.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Men of the 5th RCT fire a .30 caliber machine gun at the Communist-led North Koreans across the Naktong River, north of Taegu. 18 September 1950. Korea.
          </div>
        </div>
        <div class="photographer">
          Signal Corps Photo #8A/FEC-50-8561 (Turnbull)
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/korea/1990165.jpg" target="_blank">
            <img src="../../../images/history/albums/korea/1990165.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Sgt. Herbert Ohio of Hilo, T.H., views the battered remains of the Communist defenders of Hill 268, which was taken by men of the 5th RCT, in their advance on Waegwan Korea. 21 September 1950. Korea.
          </div>
        </div>
        <div class="photographer">
          Signal Corps Photo #FEC-50-9327 (Chang)
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/korea/2973783.jpg" target="_blank">
            <img src="../../../images/history/albums/korea/2973783.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            A gun crew firing an eight-inch self propelled howitzer at Communist hill positions after receiving a fire mission from Co. A, 1st Battalion, 5th Infantry Regiment, U.S. Eighth Army, west of Punchbowl. 13 August 1952. Korea.
          </div>
        </div>
        <div class="photographer">
          Signal Corps Photo #1-4237-16/FEC-52-24778 (Kelemanik)
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/korea/4422871_orig.jpg" target="_blank">
            <img src="../../../images/history/albums/korea/4422871_orig.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            A .30 caliber light machine gun crew of the 5th RCT, fires on Communist-led North Koreans, as they push toward Taejon, Korea. 22 September 1950. Korea.
          </div>
        </div>
        <div class="photographer">
          Signal Corps Photo #8A/FEC-50-9438 (Chang)
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/korea/7108622_orig.jpg" target="_blank">
            <img src="../../../images/history/albums/korea/7108622_orig.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Wounded soldiers are evacuated (foreground) as M-4 tanks of the 5th RCT move to the front in the Kumchun area in Korea. 6 October 1950. Korea.
          </div>
        </div>
        <div class="photographer">
          Signal Corps Photo #FEC-50-20137 (Chang)
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/korea/9323161.jpg" target="_blank">
            <img src="../../../images/history/albums/korea/9323161.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Members of the 81-mm Mortar Platoon, Co. D, 2nd Battalion, 5th Infantry Regiment, U.S. Eighth Army, blast Communist positions in Punchbowl, Korea. 12 August 1952. Korea.
          </div>
        </div>
        <div class="photographer">
          Signal Corps Photo #1-4237-2/FEC-52-24764 (Kelemanik)
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop

@section('vietnam_content')
  <div class="mainBody">
    <div class="mainTitle">
      <div>Vietnam War</div>
      <div>PHOTO ALBUM</div>
    </div>
    <div class="backBttn">
      <a href="{{ url('/history/timeline') }}">
        <div><< HISTORY</div>
      </a>
    </div>
    <div class="allImgBox">
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/korea/6771449_orig.jpg">
            <img src="../../../images/history/albums/korea/6771449_orig.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Front Rifle Platoon of 5th RCT, 24th Infantry Division on the Korean Front
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop

@section('ben_cui_content')
  <div class="mainBody">
    <div class="mainTitle">
      <div>Ben Cui Battle</div>
      <div>Photos & Records</div>
    </div>
    <div class="backBttn">
      <a href="{{ url('/history/topic/ben-cui-battle') }}">
        <div><< Ben Cui Tribute</div>
      </a>
    </div>
    <div class="allImgBox">
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/ben_cui_1.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/ben_cui_1.jpg" />
          </a>
        </div>
        <!-- <div class="oneCaption">
          <div>

          </div>
        </div> -->
        <div class="photographer">
          Photographer: SGT Don Mousseau
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/ben_cui_2.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/ben_cui_2.jpg" />
          </a>
        </div>
        <!-- <div class="oneCaption">
          <div>

          </div>
        </div> -->
        <div class="photographer">
          Photographer: SGT Don Mousseau
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/ben_cui_3.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/ben_cui_3.jpg" />
          </a>
        </div>
        <!-- <div class="oneCaption">
          <div>

          </div>
        </div> -->
        <div class="photographer">
          Photographer: SGT Don Mousseau
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/ben_cui_4.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/ben_cui_4.jpg" />
          </a>
        </div>
        <!-- <div class="oneCaption">
          <div>

          </div>
        </div> -->
        <div class="photographer">
          Photographer: SGT Don Mousseau
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/ben_cui_5.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/ben_cui_5.jpg" />
          </a>
        </div>
        <!-- <div class="oneCaption">
          <div>

          </div>
        </div> -->
        <div class="photographer">
          Photographer: SGT Don Mousseau
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/ben_cui_6.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/ben_cui_6.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            The person holding up the stretcher on the left end is Glenn Cassel
          </div>
        </div>
        <div class="photographer">
          Photographer: SGT Don Mousseau
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/ben_cui_7.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/ben_cui_7.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            The man with his right arm bandaged is 1LT John Snodgrass, the Company Commander, The person holding the canteen is the Battalion Chaplain, Chaplain Don Just.
          </div>
        </div>
        <div class="photographer">
          Photographer: SGT Don Mousseau
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/ben_cui_8.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/ben_cui_8.jpg" />
          </a>
        </div>
        <!-- <div class="oneCaption">
          <div>

          </div>
        </div> -->
        <div class="photographer">
          Photographer: SGT Don Mousseau
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/ben_cui_9.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/ben_cui_9.jpg" />
          </a>
        </div>
        <!-- <div class="oneCaption">
          <div>

          </div>
        </div> -->
        <div class="photographer">
          Photographer: SGT Don Mousseau
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/ben_cui_10.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/ben_cui_10.jpg" />
          </a>
        </div>
        <!-- <div class="oneCaption">
          <div>

          </div>
        </div> -->
        <div class="photographer">
          Photographer: SGT Don Mousseau
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/bencuimem1.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/bencuimem1.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Memorial Service held at the Dau Tieng Base Camp In September 1968 for those lost during the Ben Cui action.
          </div>
        </div>
        <div class="photographer">
          Courtesy of Don Fuller
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/bencuimem2.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/bencuimem2.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Memorial Service held at the Dau Tieng Base Camp In September 1968 for those lost during the Ben Cui action.
          </div>
        </div>
        <div class="photographer">
          Courtesy of Don Fuller
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/inc1.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/inc1.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            A recreation of the first enclosure of the Combat Operations Report (COR)
          </div>
        </div>
        <div class="photographer">
          Submitted by 1LT Arthur B. Cook (1968)
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/inc2.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/inc2.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Formation of C Company while movement to the south
          </div>
        </div>
        <div class="photographer">
          Submitted by 1LT Arthur B. Cook (1968)
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/inc3.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/inc3.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Formation of C Company while moving west
          </div>
        </div>
        <div class="photographer">
          Submitted by 1LT Arthur B. Cook (1968)
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/inc4.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/inc4.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Initial contact and immediate deployment
          </div>
        </div>
        <div class="photographer">
          Submitted by 1LT Arthur B. Cook (1968)
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/inc5.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/inc5.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Second defensive position
          </div>
        </div>
        <div class="photographer">
          Submitted by 1LT Arthur B. Cook (1968)
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/inc6.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/inc6.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Third defensive position
          </div>
        </div>
        <div class="photographer">
          Submitted by 1LT Arthur B. Cook (1968)
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/inc7.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/inc7.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Routes of withdrawal
          </div>
        </div>
        <div class="photographer">
          Submitted by 1LT Arthur B. Cook (1968)
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/inc8.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/inc8.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Plot of area of engagement
          </div>
        </div>
        <div class="photographer">
          Submitted by 1LT Arthur B. Cook (1968)
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/inc9.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/inc9.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Location of US KIA
          </div>
        </div>
        <div class="photographer">
          Submitted by 1LT Arthur B. Cook (1968)
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/inc10.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/inc10.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Estimated enemy casualties
          </div>
        </div>
        <div class="photographer">
          Submitted by 1LT Arthur B. Cook (1968)
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/topics/ben_cui/cookreport2.jpg" target="_blank">
            <img src="../../../images/history/topics/ben_cui/cookreport2.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            An official record of soldiers KIA during battle at Ben Cui.
          </div>
        </div>
        <div class="photographer">
          Courtesy of Richard Coffelt
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop

@section('gwot_content')
  <div class="mainBody">
    <div class="mainTitle">
      <div>Global War On Terror</div>
      <div>PHOTO ALBUM</div>
    </div>
    <div class="backBttn">
      <a href="{{ url('/history/timeline') }}">
        <div><< HISTORY</div>
      </a>
    </div>
    <div class="allImgBox">
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/korea/6771449_orig.jpg">
            <img src="../../../images/history/albums/korea/6771449_orig.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Front Rifle Platoon of 5th RCT, 24th Infantry Division on the Korean Front
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop

@section('vietnam_map_content')
  <div class="mainBody">
    <div class="mainTitle">
      <div>Vietnam War</div>
      <div>MAPS</div>
    </div>
    <div class="backBttn">
      <a href="{{ url('/history/timeline') }}">
        <div><< HISTORY</div>
      </a>
    </div>
    <div class="allImgBox">
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map1.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map1.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 1: Overview of South Vietnam
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map2.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map2.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 2: 1966 Operations Maps
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map3.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map3.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 3: 1966 Operations Maps
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map4.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map4.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 4: Cu Chi Base Camp and the "Filhol"
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map5.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map5.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 5: Northern Ho Bo Woods and Southern Ho Bo
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map6.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map6.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 6: Northern Filhol and Southern Ho Bo
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map7.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map7.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 7: Trang Bang and Go Dau Ha
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map8.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map8.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 8: Trang Bang north to Suoi Cao
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map9.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map9.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 9: Bao Trai area.
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map10.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map10.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 10: Dong Hoa area.
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map11.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map11.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 11: Tan Phu Trung
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map12.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map12.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 12: Katum area
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map13.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map13.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 13: Nui Ba Den
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map14.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map14.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 14: "French Fort"
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map15.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map15.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 15: Duc Hoa area.
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map16.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map16.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 16: Dau Tieng and Michelin Rubber Plantation
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map17.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map17.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 17: Dau Tieng and Michelin Rubber Plantation
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map18.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map18.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 18: Tay Ninh area
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map19.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map19.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 19: Tan Son Nhut and Hoc Mon
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map20.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map20.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 20: Vinh Loc area
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map21.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map21.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 21: The Ben Cui Rubber Plantation area
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map22.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map22.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 22: Dau Tieng - Thanh An - Boi Loi Woods area
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/vietnam/maps/map23.jpeg" target="_blank">
            <img src="../../../images/history/albums/vietnam/maps/map23.jpeg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Map 23: Base Area 354 in Cambodia
          </div>
        </div>
        <div class="photographer">
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop