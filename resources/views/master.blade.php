<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>授業支援システム - @yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" href="{{URL::asset('css/master.css')}}">

</head>
<body>

  <header>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <a class="navbar-brand" href="#">授業支援システム</a>

    
    </nav>
  </header>

  @yield('body')
</body>
</html>
