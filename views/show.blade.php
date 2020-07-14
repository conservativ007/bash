<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>истории</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/card.css">
    <link rel="stylesheet" href="/css/nav.css">

    <script type="text/javascript" src="https://vk.com/js/api/share.js?95" charset="windows-1251"></script>
    <link href="https://fonts.googleapis.com/css2?family=Miriam+Libre&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- авторизация -->
    @include('story.elems.auth')

    <!-- навбар -->
    @include('story.elems.nav')

    <!-- селект -->
    @if($item == 'bezdna')
    @include('story.elems.bezdna-select')
    @else
    @include('story.elems.story-select')
    @endif

    <!-- инфо строка -->
    @include('story.elems.info')

    <!-- отображение списка историй с бездны -->
    @include('story.elems.bezdnatwo')


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
          $(function () {
      $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
  </body>
</html>
