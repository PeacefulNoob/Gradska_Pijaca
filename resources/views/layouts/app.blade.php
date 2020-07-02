
    @include('admin.admin_header')

    <div id="app">
   
@include('layouts.header_top')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('admin.admin_footer')

