@php
    $menuHeader = config('menues.menuHeader');
    $navHeader = config('menues.navHeader');
@endphp

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
