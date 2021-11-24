<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
        <div id="content">
            @include('partials_admin.topbar')
            <!-- Begin Page Content -->
            @yield('content')
    
            @include('partials_admin.footer')
        </div>
        {{-- End of content wrapper --}}
    </div>