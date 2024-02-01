<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    @foreach ($customer as $one_row)
      <div>{{ $one_row }}</div>
    @endforeach
    <br>
    <ul>
    @foreach ($content as $one_row)
      <li>{{ $one_row }}</li>
    @endforeach
    </ul>
    <br>
    @foreach ($totals as $one_row)
      <div>{{ $one_row }}</div>
    @endforeach
  </body>
</html>
