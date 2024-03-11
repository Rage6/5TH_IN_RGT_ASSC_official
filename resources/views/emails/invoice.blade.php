<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
    <style>
      .header {
        border: 1px solid rgb(0,100,0);
        padding: 20px;
        background-color: rgb(0,100,0);
        font-family: 'Special Elite', serif;
        font-size: 2rem;
        color: white;
      }
      .content {
        border-left: 1px solid black;
        border-right: 1px solid black;
        padding: 30px 10px;
        font-size: 1.2rem;
        background-color: white;
      }
      .title {
        margin-bottom: 20px;
        text-align: center;
        font-size: 1.4rem;
        text-decoration: underline;
      }
      .customerInfo {
        display: flex;
        justify-content: flex-end;
      }
      .customerBlock {
        border: 1px dashed black;
        padding: 10px;
      }
      .total {
        margin-top: 30px;
      }
      .contactList {
        margin-top: 70px;
      }
      .footer {
        border: 1px solid rgb(139,0,0);
        background-color: rgb(139,0,0);
        color: white;
        height: 100px;
      }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&amp;display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="header">
      5th Infantry Regiment Association
    </div>
    <div class="content">
      <div class="title">
        Purchase Summary
      </div>
      <div class="customerInfo">
        <div class="customerBlock">
          @foreach ($customer as $one_row)
            <div>{{ $one_row }}</div>
          @endforeach
        </div>
      </div>
      <ul>
        @foreach ($content as $one_row)
          <li>{{ $one_row }}</li>
        @endforeach
      </ul>
      <div class="total">
        @foreach ($totals as $one_row)
          <div>{{ $one_row }}</div>
        @endforeach
      </div>
      @if ($follow_up_list != null)
        <div class="contactList">
          Do you have any questions or issues with your payment? Please contact one of our below staff members.</br>
          <ul>
            @foreach ($follow_up_list as $staff_member)
              <li>{{ $staff_member[0] }}: {{ $staff_member[1] }}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </div>
    <div class="footer">
      <!-- Footer -->
    </div>
  </body>
</html>
