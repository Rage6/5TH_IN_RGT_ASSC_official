<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <div>First Name: {{ $content->first_name }}</div>
    <div>Last Name: {{ $content->last_name }}</div>
    <div>Number of Additional Guests: {{ $content->guest_num }}</div>
    <div>Name(s) of Additional Guests: {{ $content->guest_names }}</div>
    <div>Phone #: {{ $content->phone_number }}</div>
    <div>Email Address: {{ $content->email }}</div>
    <div>Date of Arrival: {{ $content->arrival_date }}</div>
    @for ($i = 0; $i < $content->all_boolean_count; $i++)
      @php
        $key = 'event_'.$i;
        $this_option = explode("::",$content->{$key});
      @endphp
      <div>{{ $this_option[0] }}: {{ $this_option[1] }}</div>
    @endfor
    <div>Comments: {{ $content->comments }}</div>
  </body>
</html>
