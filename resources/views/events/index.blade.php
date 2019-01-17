<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<ul>
                                @foreach ($events as $event)
                                        <li>{{ $event }}
                                        @if(strpos($event, 'Laravel') !==false)
                                        (sweet framework!)
                                        @endif
                                        </li>
                                @endforeach
                        </ul>
</body>
</html>