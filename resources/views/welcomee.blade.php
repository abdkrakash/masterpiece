{{-- Start Top Section --}}
@include('dashborde.include.top')
{{-- End Top Section --}}

  <div class="container-scroller">

    {{-- Start NAV Section --}}
        @include('dashborde.include.nav')
    {{-- End NAV Section --}}

    <div class="container-fluid page-body-wrapper">

        {{-- Start Aside Section --}}
            @include('dashborde.include.aside')
        {{-- End Aside Section --}}

      <div class="main-panel">
        <div class="content-wrapper">

        {{-- Start Header Section --}}
        @include('dashborde.include.header')
        {{-- End Header Section --}}


                @yield('content')
                
        </div>

            {{-- Start Footer Section --}}
            @include('dashborde.include.footer')
            {{-- End Footer Section --}}

      </div>
    </div>   
  </div>

{{-- Start Bottom Section --}}
@include('dashborde.include.bottom')
{{-- End Bottom Section --}}