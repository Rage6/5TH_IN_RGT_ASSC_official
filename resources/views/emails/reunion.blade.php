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
    <div>Attending US Olympic Museum & Garden of the Gods Tour?: {{ $content->event_one }}</div>
    <div>Attending the Royal Gorge Railroad Tour?: {{ $content->event_two }}</div>
    <div>Attending the Memorial Service @ Ft. Carson?: {{ $content->event_three }}</div>
    <div>Has military ID?: {{ $content->mil_id }}</div>
    <div>Companion has military ID?: {{ $content->comp_mil_id }}</div>
    <div>Attending Ladies Breakfast?: {{ $content->ladies_breakfast }}</div>
    <div>Driving?: {{ $content->driving }}</div>
    <div>First Reunion?: {{ $content->first_reunion }}</div>
    <div>Comments: {{ $content->comments }}</div>
  </body>
</html>
