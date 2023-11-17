@php
    $menuHeader = config('menues.menuHeader');
    $navHeader = config('menues.navHeader');
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Font-Awesome --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous'/>

    <title>Laravel Boolando</title>

    {{-- Vite --}}
    @vite('resources/js/app.js')

</head>
<body>
    <header>

        <div class="top-bar container d-flex h-100">

          <!-- WEBSITE MENU -->
          <nav class="menu website">
            <ul>
            @foreach ($navHeader as $item)
                <li ><a href="#">{{$item['text']}}</a></li>
            @endforeach
            </ul>
          </nav>
          <!-- /WEBSITE MENU -->

          <!-- LOGO -->
          <div class="logo w-50">
            <a href="#"><img src="/boolean-logo.png" class="ht-25" alt="Logo Boolean"></a>
          </div>
          <!-- /LOGO -->

          <!-- USER MENU -->
           <div class="menu user">
            <ul>
              <li>
                @foreach ($menuHeader as $item)

                <a href="#"><i class="{{$item['class']}}"></i></a>
                @endforeach
              </li>
            </ul>
          </div>
          <!-- /USER MENU -->

        </div>
        <!-- top-bar -->

      </header>
</body>
</html>
