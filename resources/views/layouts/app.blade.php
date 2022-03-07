<!DOCTYPE html>
<html lang="en">
    {{-- Head --}}
    @include('partials.head')

    {{-- Body --}}
    <body class="sb-nav-fixed">
        {{-- Navbar --}}
        @include('partials.navbar')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                {{-- Sidebar --}}
                @include('partials.sidebar')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    {{ $slot }}
                </main>
                {{-- Footer --}}
                @include('partials.footer')
            </div>
        </div>
        @include('partials.scripts')
    </body>
</html>
