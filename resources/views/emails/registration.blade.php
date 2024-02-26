<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <div>First Name: {{ $content->first_name }}</div>
    <div>Last Name: {{ $content->last_name }}</div>
    <div>Spouse name: {{ $content->spouse_name }}</div>
    <div>Street Address: {{ $content->address_line_1 }}</div>
    <div>APT, Room #, etc: {{ $content->address_line_2 }}</div>
    <div>City: {{ $content->city }}</div>
    <div>State: {{ $content->state }}</div>
    <div>Zip Code: {{ $content->zip_code }}</div>
    <div>Phone #: {{ $content->phone_number }}</div>
    <div>Conflict(s): {{ $content->conflicts }}</div>
    <div>Jobs, Units, Times: {{ $content->unit_details }}</div>
    <div>Email: {{ $content->email }}</div>
    <div>Comments: {{ $content->comments }}</div>
  </body>
</html>
