<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    @foreach ($content as $one_row)
      <div>{{ $one_row }}</div>
    @endforeach
  </body>
</html>
