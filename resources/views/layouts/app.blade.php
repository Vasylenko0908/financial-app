<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Financial App') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

        <!-- Styles -->
        
        <!--begin::Page Vendor Stylesheets(used by this page)-->
		<!-- <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet" type="text/css" /> -->
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		
        <link href="{{ asset('assets/plugins/global/plugins.dark.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.dark.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Scripts -->
        
    </head>
    <body class="font-sans antialiased dark-mode" id="kt_body">
        <div class="main-screen bg-gray-100 ">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <footer>
                @include('layouts.footer')
            </footer>
            
        </div>
        <!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
        <!-- <script src="{{ asset('js/app.js') }}"></script> -->

        <script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
        <script>
        $( document ).ready(function() {
            
            $('#header__sun').click(function(){
                
                $("#header__sun").addClass("hidden");        
                $("#header__indeterminate").removeClass("hidden");        
                $("#header__moon").addClass("hidden");
                if(!$('body').hasClass('dark-mode'))
                $('body').addClass('dark-mode');
                
                KTApp.setThemeMode("dark", function() {
                    console.log("changed to dark mode");
                });
            });
            $('#header__indeterminate').click(function(){
                
                $("#header__sun").addClass("hidden");        
                $("#header__moon").removeClass("hidden");
                $("#header__indeterminate").addClass("hidden");
                if(!$('body').hasClass('dark-mode'))
                    $('body').addClass('dark-mode');
                KTApp.setThemeMode("dark", function() {
                    console.log("changed to dark mode");
                });
            });
            $('#header__moon').click(function(){
                $("#header__sun").removeClass("hidden");        
                $("#header__indeterminate").addClass("hidden");
                $("#header__moon").addClass("hidden");
                $('body').removeClass('dark-mode');
                KTApp.setThemeMode("light", function() {
                    console.log("changed to light mode");
                });
                
            });
             // set dark mode

           
            
        });
        </script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<!-- <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<script src="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script> -->
		
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
        @yield('script')
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
        
    </body>
</html>
