@section('script')
<script src="{{ asset('assets/js/pages/first.js') }}"></script>
@endsection
<x-app-layout>
    <div class="py-12 min-h-screen">
        <div class="col-md-6 mx-auto sm:px-6 lg:px-8 company_search">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="first_title">Times of Value</h1>
                        <p>A fully comprehensive financial resource</p>
                    </div>
                </div>
                <!-- <div class="col-md-12 "><input type="text" class="h-10 w-full py-3 pl-10 pr-4 bg-white border border-gray-300 bg-slate-50 rounded-xl text-gray-700 hover:shadow-md focus:shadow-md focus:outline-none focus:shadow-none focus:ring-0 focus:ring-opacity-0" placeholder="Search" value=""></div> -->
                <div class="row">
                    <div class="col-md-2"></div>
                    <!--begin::Aside search-->
						<div class="col-md-8 aside-search py-1">
							<div class="relative   ">
								<input type="hidden" class="base_url" value="{{url('/')}}"/>
								<span class="svg-icon svg-icon-2 search-icon position-absolute top-50 left-0 translate-middle-y ms-4">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
										<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
									</svg>
								</span>
								<input type="text" class="w-full search-input form-control ps-13 fs-7 h-40px" placeholder="Search a ticker or company name" value="" name="search">
								<ul class="absolute w-full border border-gray-500 pb-2 menu-sub-dropdown " id="search-result">
									<!-- <li class="w-full bg-hover-primary ">
										<a href="{{url('company/AAPL')}}" class="flex fs-6 text-gray-700">
											<div class="w-125px w-md-100px px-2 lg:px-3 py-1  text-left items-center"><span class="mt-1">A</span></div>
											<div class="flex-1  px-2 lg:px-3 py-1 text-left border-l-2 turncate items-center"><span class="ml-2">Adfsfddswersdsdsdsdsdsdsdsddsssssssssssssssssssssssssssssssrwe11111111111111111111111</span></div>
											<div class="flex  px-2 lg:px-3 py-1 text-right items-center turncate">
												<span class="mt-1">NYSE</span>
											</div>
											<div class="flex px-3 lg:px-3 py-1 items-center self-center">
												<img src="{{asset('assets/media/flags/united-states.svg')}}" class="w-4 h-4 my-auto inline ml-1">
											</div>
										</a>		
									</li> -->
								</ul>
							</div>
							
						</div>
						<!--end::Aside search-->
                    <!-- <div class="col-md-8 search-box">
                        <span class="absolute top-1/2 transform -translate-y-1/2 left-0 flex items-center pl-3 "><svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none"><path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                        <input type="text" class="form-control search-form-control ms-lg-auto" placeholder="Search a ticker or company name"  autocomplete="off" maxlength="240" aria-label="Search" aria-controls="top-search" data-controller="s-popover" data-action="focus->s-popover#show" data-s-popover-placement="bottom-start" aria-expanded="true"/>
                    </div> -->
                    <div class="col-md-2"></div>
                    
                </div>
                <div class="row mt-6">
                    <div class="col-sm-12 col-md-4 mb-4">
                        <div class="list-item1 pt-8">
                            <a href=""><h5>30+years of financial data</h5></a>
                            <p>comprehensive financial data</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-4">
                        <div class="list-item1 pt-8">
                            <a href=""><h5>100,000+ companies</h5></a>
                            <p>Globally Covered Stocks</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-4">
                        <div class="list-item1 pt-8">
                        <a href=""><h5>Tons of features</h5></a>
                        <p>Screener, Forum, Articles & Guru Tracker</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
