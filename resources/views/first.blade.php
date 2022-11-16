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
							<!--begin::Search-->
							<div id="kt_header_search" class="header-search d-flex align-items-center w-100" data-kt-search-keypress="true" data-kt-search-min-length="1" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
								<!--begin::Form-->
								<form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
									<!--begin::Hidden input(Added to disable form autocomplete)-->
									@csrf
									<input type="hidden" />
									<input type="hidden" id="_token" value="{{ csrf_token() }}" />
									<!--end::Hidden input-->
									<!--begin::Icon-->
									<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
									<span class="svg-icon svg-icon-2 search-icon position-absolute top-50 translate-middle-y ms-4">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
											<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--end::Icon-->
									<!--begin::Input-->
									<input type="text" class="search-input form-control ps-13 fs-7 h-40px" name="search" value="" placeholder="Search a ticker or company name" data-kt-search-element="input" />
									<!--end::Input-->
									<!--begin::Spinner-->
									<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
										<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
									</span>
									<!--end::Spinner-->
									<!--begin::Reset-->
									<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
												<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<!--end::Reset-->
								</form>
								<!--end::Form-->
								<!--begin::Menu-->
								<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-600px w-md-600px">
									<!--begin::Wrapper-->
									<div data-kt-search-element="wrapper">
										<!--begin::Recently viewed-->
										<div data-kt-search-element="results" class="d-none">
											<!--begin::Items-->
											<div class="mh-200px mh-lg-350px">
												<!--begin::Item-->
												<ul>
													<li class="d-flex bg-hover-primary ">
														<a href="{{url('company/AAPL')}}" class="flex fs-6 text-gray-700">
															<div class="w-125px w-md-150px py-1  text-left"><span class="ml-2">A</span></div>
															<div class="flex-1  px-1 lg:px-2 py-1 text-left border-l-2 turncate"><span class="ml-2">Adfsfddswerrwe11111111111111111111111</span></div>
															<div class="flex  px-1 lg:px-2 py-1 text-right items-center turncate self-center text-gray-400"><span class="ml-4">A</span></div>
														</a>		
													</li>
													<li class="d-flex bg-hover-primary ">
														<a href="#" class="flex fs-6 text-gray-700">
															<div class="w-125px w-md-150px py-1  text-left"><span class="ml-2">A</span></div>
															<div class="flex-1  px-1 lg:px-2 py-1 text-left border-l-2 turncate"><span class="ml-2">Adfsfddswerrwe1111111111111111</span></div>
															<div class="flex  px-1 lg:px-2 py-1 text-right items-center turncate self-center text-gray-400"><span class="ml-4">A</span></div>
														</a>		
													</li>
													<li class="d-flex bg-hover-primary ">
														<a href="#" class="flex fs-6 text-gray-700">
															<div class="w-125px w-md-150px py-1  text-left"><span class="ml-2">A</span></div>
															<div class="flex-1  px-1 lg:px-2 py-1 text-left border-l-2 turncate"><span class="ml-2">Adfsfddswerrwe1111111111111111111111</span></div>
															<div class="flex  px-1 lg:px-2 py-1 text-right items-center turncate self-center text-gray-400"><span class="ml-4">A</span></div>
														</a>		
													</li>
													<li class="d-flex bg-hover-primary ">
														<a href="#" class="flex fs-6 text-gray-700">
															<div class="w-125px w-md-150px py-1  text-left"><span class="ml-2">A</span></div>
															<div class="flex-1  px-1 lg:px-2 py-1 text-left border-l-2 turncate"><span class="ml-2">Adfsfddswerrwe11111111111111111111111</span></div>
															<div class="flex  px-1 lg:px-2 py-1 text-right items-center turncate self-center text-gray-400"><span class="ml-4">A</span></div>
														</a>		
													</li>
													<li class="d-flex bg-hover-primary ">
														<a href="#" class="flex fs-6 text-gray-700">
															<div class="w-125px w-md-150px py-1  text-left"><span class="ml-2">A</span></div>
															<div class="flex-1  px-1 lg:px-2 py-1 text-left border-l-2 turncate"><span class="ml-2">Adfsfddswerrwe1111111111111111</span></div>
															<div class="flex  px-1 lg:px-2 py-1 text-right items-center turncate self-center text-gray-400"><span class="ml-4">A</span></div>
														</a>		
													</li>
													<li class="d-flex bg-hover-primary ">
														<a href="#" class="flex fs-6 text-gray-700">
															<div class="w-125px w-md-150px py-1  text-left"><span class="ml-2">A</span></div>
															<div class="flex-1  px-1 lg:px-2 py-1 text-left border-l-2 turncate"><span class="ml-2">Adfsfddswerrwe1111111111111111111111</span></div>
															<div class="flex  px-1 lg:px-2 py-1 text-right items-center turncate self-center text-gray-400"><span class="ml-4">A</span></div>
														</a>		
													</li>
													<li class="d-flex bg-hover-primary ">
														<a href="#" class="flex fs-6 text-gray-700">
															<div class="w-125px w-md-150px py-1  text-left"><span class="ml-2">A</span></div>
															<div class="flex-1  px-1 lg:px-2 py-1 text-left border-l-2 turncate"><span class="ml-2">Adfsfddswerrwe11111111111111111111111</span></div>
															<div class="flex  px-1 lg:px-2 py-1 text-right items-center turncate self-center text-gray-400"><span class="ml-4">A</span></div>
														</a>		
													</li>
													<li class="d-flex bg-hover-primary ">
														<a href="#" class="flex fs-6 text-gray-700">
															<div class="w-125px w-md-150px py-1  text-left"><span class="ml-2">A</span></div>
															<div class="w-125px w-md-250px  px-1 lg:px-2 py-1 text-left border-l-2 turncate"><span class="ml-2">Adfsfddswerrwe1111111111111111</span></div>
															<div class="flex  px-1 lg:px-2 py-1 text-right items-center turncate self-center text-gray-400"><span class="ml-4">A</span></div>
														</a>		
													</li>
													
												</ul>
												
											</div>
											<!--end::Items-->
										</div>
										<!--end::Recently viewed-->
										<!--begin::Recently viewed-->
										<div class="d-none" data-kt-search-element="main">
											
											<!--begin::Items-->
											<div class="mh-200px mh-lg-325px">
												
												<!--end::Item-->
												
											</div>
											<!--end::Items-->
										</div>
										<!--end::Recently viewed-->
										<!--begin::Empty-->
										<div data-kt-search-element="empty" class="text-center d-none">
											
											<!--begin::Message-->
											<div class="pb-10 fw-bold">
												<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
												<div class="text-muted fs-7">Please try again with a different query</div>
											</div>
											<!--end::Message-->
										</div>
										<!--end::Empty-->
									</div>
								</div>
								
							</div>
							<!--end::Search-->
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
