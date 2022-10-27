@section('script')
    <script src="assets/js/widgets.bundle.js"></script>
	<script src="assets/js/custom/widgets.js"></script>
@endsection
<x-app-layout>
    <div class="container col-md-12">
        <div class="row">
            <!-- Start Left sidebar -->
            <div class="col-md-3 col-sm-12">
                <!-- Company Name & Currency -->
                <div class="row p-2">
                    <div class="col-md-6">
                        <h3>Apple.inc</h3>
                    </div>
                    <div class="col-md-6 mt-2">
                        <h5>CURRENCY:USD</h5>
                    </div>
                </div>
                <!-- Overall -->
                <div class="w-full border rounded-lg p-2 mt-xl-1">
                    <div class="row p-2">
                        <div class="w-full flex items-end pb-2 justify-content-center">
                            <div class="text-lg font-normal text-center ">OVERALL </div>
                        </div>
                        <div class="col-md-6">
                            <div class="space-y-1 flex flex-col items-start sticky left-0 z-10">
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Market Capitalization</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">2.731B</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Enterprise Value (MRO)
                                    </div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">1.988B</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Total Revenue(FY)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">920.22M</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Gross Profit(FY)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">91.158M</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">EBITDA (TTM)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">165.992M </div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Net Income (FY)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">59.58M</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1  text-sm font-light ">
                                    <div class="flex truncate">Free Cash Flow (TTM) </div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">97.859M</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="space-y-1 flex flex-col items-start sticky left-0 z-10">
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Total Shares Outstanding...</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">16.13M</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">total free float
                                    </div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">123</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">insider ownership %</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">15</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Shared held by institutions</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">45</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">% shares short</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">123 </div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">industry</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">industrial</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1  text-sm font-light ">
                                    <div class="flex truncate">dividend yield </div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">234</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-6">
                            <div class="w-full flex items-end pb-2 justify-content-center">
                                <div class="text-lg font-normal text-center">MARGINS</div>
                            </div>
                            <div class="space-y-1 flex flex-col items-start sticky left-0 z-10">
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Gross Margin(TTM)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">0.1113</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Net Margin (TTM)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">0.0907</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">fcf margin</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">394</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Operating Margin (TTM)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">0.1112</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Pretex Margin (TTM)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">0.1180</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">ebitda Margin</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">345</div>
                                </div>
                            </div>
                            <div class="w-full flex items-end pb-2 justify-content-center border-b">
                                <div class="text-lg font-normal mt-xl-2 text-center">VALUATION RATIOS </div>
                            </div>
                            <div class="space-y-1 flex flex-col items-start sticky left-0 z-10">
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">P/E</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">24.8</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light ">
                                    <div class="flex truncate" >P/B</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">42.5</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">P/S</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">6.4</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">EV/S</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">6.5</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">EV/EBITDA</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">19.4 </div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">EV/EBIT</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">21.3</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">EV/Pretax</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">21.4</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">EV/FCF</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">23.4 </div>
                                </div>
                            </div>
                            <div class="w-full flex items-end pb-2 justify-content-center border-b">
                                <div class="text-lg font-normal mt-xl-2 text-center">BALANCE SHEET 10YR MEDIAN </div>
                            </div>
                            <div class="space-y-1 flex flex-col items-start sticky left-0 z-10">
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">Assetss/Equity</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">2.7</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">Debt/Equity</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">0.8</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">Debt/Assets</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">0.3</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="w-full flex items-end pb-2 justify-content-center">
                                <div class="text-lg font-normal text-center">BALANCE SHEET </div>
                            </div>
                            <div class="space-y-1 flex flex-col items-start sticky left-0 z-10">
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Market Capitalization</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">2.731B</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Enterprise Value (MRO)
                                    </div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">1.988B</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Total Revenue(FY)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">920.22M</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Gross Profit(FY)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">91.158M</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">EBITDA (TTM)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">165.992M </div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Net Income (FY)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">59.58M</div>
                                </div>
                            </div>
                            <div class="w-full flex items-end pb-2 justify-content-center border-b">
                                <div class="text-lg font-normal mt-xl-2 text-center">10YE CAGR </div>
                            </div>
                            <div class="space-y-1 flex flex-col items-start sticky left-0 z-10">
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">Revennu</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">12.9%</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">Assets</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">11.7%</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">FCF</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">10.8%</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">EPS</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">19.0%</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">SHARE PRICE</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">123</div>
                                </div>
                            </div>
                            <div class="w-full flex items-end pb-2 justify-content-center border-b">
                                <div class="text-lg font-normal mt-xl-2 text-center">10YR MEDIAN MARGINS</div>
                            </div>
                            <div class="space-y-1 flex flex-col items-start sticky left-0 z-10">
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">Gross Profit</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">12.9</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">EBIT</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">11.7</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">Pre-Tax Income</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">10.5</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">FCF</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">19.0</div>
                                </div>
                            </div>
                            <div class="w-full flex items-end pb-2 justify-content-center border-b">
                                <div class="text-lg font-normal mt-xl-2 text-center">10YR MEDIAN RETURNS</div>
                            </div>
                            <div class="space-y-1 flex flex-col items-start sticky left-0 z-10">
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">ROA</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">17.7%</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">ROE</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">44.5%</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-xl font-light">
                                    <div class="flex truncate">ROIC</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">28.1%</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Description -->
                <div class="w-full border rounded-lg  p-2 mt-xl-2 mb-xl-5">
                    <div class="w-full flex-col items-end p-2 ">
                        <div class="w-full flex items-end pb-2">
                            <div class="text-lg font-normal text-center">Company Description </div>
                        </div>
                        <div class="w-full flex flex-wrap justify-items-start ">
                            <div class=" flex-col space-y-1 py-2 pr-4">
                                <div class="w-full flex text-light text-sm text-left">
                                    <div class=" text-neutral-400">Sector: </div>
                                    <div class="pl-1">Technology</div>
                                </div>
                                <div class="w-full flex text-light text-sm text-left">
                                    <div class="text-neutral-400">Industry: </div>
                                    <div class="pl-1">Consumer Electronics</div>
                                </div>
                                <div class="w-full flex text-light text-sm text-left">
                                    <div class="text-neutral-400">CEO: </div>
                                    <div class="pl-1">Mr. Timothy Cook</div>
                                </div>
                            </div>
                            <div class=" flex-col space-y-1 py-2 pr-4">
                                <div class="w-full flex text-light text-sm text-left">
                                    <div class=" text-neutral-400">Full-time employees: </div>
                                    <div class="pl-1">154,000</div>
                                </div>
                                <div class="w-full flex text-light text-sm text-left">
                                    <div class="text-neutral-400">City: </div>
                                    <div class="pl-1">Cupertino</div>
                                </div>
                                <div class="w-full flex text-light text-sm text-left">
                                    <div class="text-neutral-400">Address: </div>
                                    <div class="pl-1">1 Apple Park Way</div>
                                </div>
                            </div>
                            <div class=" flex-col space-y-1 py-2 pr-4">
                                <div class="w-full flex text-light text-sm text-left">
                                    <div class="text-neutral-400">IPO: </div>
                                    <div class="pl-1">Dec 12, 1980</div>
                                </div>
                                <div class="w-full flex text-light text-sm text-left">
                                    <div class=" text-neutral-400">CIK: </div>
                                    <div class="pl-1">
                                        <a href="https://www.sec.gov/edgar/browse/?CIK=0000320193" target="_blank">0000320193</a>
                                    </div>
                                </div>
                                <div class="w-full flex text-light text-sm text-left">
                                    <div class="text-neutral-400">Website: </div>
                                    <div class="pl-1"><a href="https://www.apple.com" target="_blank">apple.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex text-light text-base antialiased leading-normal text-justify pt-2 ">Apple Inc. designs, manufactures, and markets smartphones, personal computers, tablets, wearables, and accessories worldwide. It also sells various related services. In addition, the company offers iPhone, a line of smartphones; Mac, a line of personal computers; iPad, a line of multi-purpose tablets; AirPods Max, an over-ear wireless headphone; and wearables, home, and accessories comprising AirPods, Apple TV, Apple Watch, Beats products, HomePod, and iPod touch. Further, it provides AppleCare support services; cloud services store services; and operates various platforms, including the App Store that allow customers to discover and download applications and digital content, such as books, music, video, games, and podcasts. Additionally, the company offers various services, such as Apple Arcade, a game subscription service; Apple Music, which offers users a curated listening experience with on-demand radio stations; Apple News+, a subscription news and magazine service; Apple TV+, which offers exclusive original content; Apple Card, a co-branded credit card; and Apple Pay, a cashless payment service, as well as licenses its intellectual property. The company serves consumers, and small and mid-sized businesses; and the education, enterprise, and government markets. It distributes third-party applications for its products through the App Store. The company also sells its products through its retail and online stores, and direct sales force; and third-party cellular network carriers, wholesalers, retailers, and resellers. Apple Inc. was incorporated in 1977 and is headquartered in Cupertino, California.</div>
                </div>
            </div>
            </div>
            <!-- End Left sidebar -->
            <!-- Start Container -->
            <div class="col-md-7 col-sm-12">
                <div class="row p-2">
                    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-3 fs-6">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_1">Summary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_2">Financials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_3">Transcripts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_4">Public fillings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_5">Social News</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                            <div class="w-full border rounded-lg p-1">
                                <div class="row p-2">
                                    <div class="col-md-2 pl-8 pr-1 pt-4">
                                        <div class="space-y-1 flex flex-col items-start sticky border-r left-0 z-10">
                                            <div class="flex flex-row shrink-0 w-full px-1 text-xs font-light">
                                                <div class="grid grid-cols-3 w-full text-right text-xs">
                                                    <div class=" text-left font-medium">Return %</div>
                                                    <div class="font-medium">Stock</div>
                                                    <div class="font-medium">S&amp;P 500</div>
                                                    <div class="text-left">1 year</div>
                                                    <div class="">(3.60)</div>
                                                    <div class="">(19.24)</div>
                                                    <div class="text-left">3 years</div>
                                                    <div class="">139.82</div>
                                                    <div class="">22.14</div>
                                                    <div class="text-left">5 years</div>
                                                    <div class="">265.70</div>
                                                    <div class="">42.55</div>
                                                </div>
                                            </div>
                                            <div class="flex flex-1 border-[#f0f3fa] border-t"></div>
                                            <div class="flex flex-row shrink-0 w-full px-1  text-xs font-light ">
                                                <div class="flex truncate">Beta</div>
                                                <div class="flex flex-1 "></div>
                                                <div class="flex truncate font-medium">1.25</div>
                                            </div>
                                            <div class="flex flex-row shrink-0 w-full px-1 text-xs font-light">
                                                <div class="flex truncate">PEG Ratio</div>
                                                <div class="flex flex-1 "></div>
                                                <div class="flex truncate font-medium">2.64</div>
                                            </div>
                                            <div class="flex flex-row shrink-0 w-full px-1 text-xs font-light">
                                                <div class="flex truncate">52w. high/low</div>
                                                <div class="flex flex-1 "></div>
                                                <div class="flex truncate font-medium">182.94/129.04</div>
                                            </div>
                                            <div class="flex flex-row shrink-0 w-full px-1 text-xs font-light">
                                                <div class="flex truncate">Avg. Daily Volume</div>
                                                <div class="flex flex-1 "></div>
                                                <div class="flex truncate font-medium">81.29<!-- -->M</div>
                                            </div>
                                            <div class="flex flex-1 border-[#f0f3fa] border-t"></div>
                                            <div class="flex flex-row shrink-0 w-full px-1 text-xs font-light">
                                                <div class="flex truncate">Upcoming Earnings</div>
                                                <div class="flex flex-1 "></div>
                                                <div class="flex truncate font-medium">26 Oct</div>
                                            </div>
                                            <div class="flex flex-row shrink-0 w-full px-1 text-xs font-light">
                                                <div class="flex truncate">Shares Short
                                                    <div class="text-[0.6rem] pl-0.5 text-neutral-400"> <!-- -->9/30/22</div>
                                                </div>
                                                <div class="flex flex-1 "></div>
                                                <div class="flex truncate font-medium">103.25M</div>
                                            </div>
                                            <div class="flex flex-row shrink-0 w-full px-1 text-xs font-light">
                                                <div class="flex truncate">Short % of Float</div>
                                                <div class="flex flex-1 "></div>
                                                <div class="flex truncate font-medium">0.64%</div>
                                            </div>
                                            <div class="flex flex-row shrink-0 w-full px-1 text-xs font-light">
                                                <div class="flex truncate">Short % of Shares Outs.</div>
                                                <div class="flex flex-1 "></div>
                                                <div class="flex truncate font-medium">0.64%</div>
                                            </div>
                                            <div class="flex flex-row shrink-0 w-full px-1 text-xs font-light">
                                                <div class="flex truncate">% Held by Insiders</div>
                                                <div class="flex flex-1 "></div>
                                                <div class="flex truncate font-medium">0.07%</div>
                                            </div>
                                            <div class="flex flex-row shrink-0 w-full px-1 text-xs font-light">
                                                <div class="flex truncate">% Held by Institutions</div>
                                                <div class="flex flex-1 "></div>
                                                <div class="flex truncate font-medium">59.57%</div>
                                            </div>
                                            <div class="flex flex-1"></div>
                                            <div class="flex text-left pl-2 font-light text-xs text-neutral-400">Scale: 
                                                <button class="mx-1 font-light  text-neutral-400">log</button>|
                                                <button class="mx-1 font-semibold text-neutral-400">linear</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10 pl-1">
                                        <!--begin::Chart-->
                                        <div id="kt_charts_widget_20" class="min-h-auto ps-4 pe-6" data-kt-chart-info="Revenue" style="height: 300px"></div>
                                    </div>
                                    <!--begin::Table container-->
                                    <div class="table-responsive currency_detail ps-8 pe-8">
                                        <table class="table table-hover">
                                        <thead>
                                        <tr class="fw-bold fs-6">
                                            <th class="min-w-100px">Currency: USD</th>
                                            <th>2012</th>
                                            <th>2013</th>
                                            <th>2014</th>
                                            <th>2015</th>
                                            <th>2016</th>
                                            <th>2017</th>
                                            <th>2018</th>
                                            <th>2019</th>
                                            <th>2020</th>
                                            <th>2021</th>
                                            <th>TTM</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Revenu per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>
                                        </tr>
                                        <tr>
                                        <td>Earnings per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>

                                        </tr>
                                        <tr>
                                        <td>FCF per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>
                                        </tr>
                                        <tr>
                                        <td>Diviends per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>

                                        </tr>
                                        <tr>
                                        <td>CAREX per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>

                                        </tr>
                                        <tr>
                                        <td>Book Value per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>

                                        </tr>
                                        <tr>
                                            <td>Revenu per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>
                                        </tr>
                                        <tr>
                                        <td>Earnings per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>

                                        </tr>
                                        <tr>
                                        <td>FCF per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>
                                        </tr>
                                        <tr>
                                        <td>Diviends per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>

                                        </tr>
                                        <tr>
                                        <td>CAREX per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>

                                        </tr>
                                        <tr>
                                        <td>Book Value per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>

                                        </tr>
                                        <tr>
                                            <td>Revenu per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>
                                        </tr>
                                        <tr>
                                        <td>Earnings per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>

                                        </tr>
                                        <tr>
                                        <td>FCF per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>
                                        </tr>
                                        <tr>
                                        <td>Diviends per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>

                                        </tr>
                                        <tr>
                                        <td>CAREX per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>

                                        </tr>
                                        <tr>
                                        <td>Book Value per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>

                                        </tr>
                                        <tr>
                                            <td>Revenu per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>
                                        </tr>
                                        <tr>
                                        <td>Earnings per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>

                                        </tr>
                                        <tr>
                                        <td>FCF per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>
                                        </tr>
                                        <tr>
                                        <td>Diviends per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>

                                        </tr>
                                        <tr>
                                        <td>CAREX per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>

                                        </tr>
                                        <tr>
                                        <td>Book Value per share</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>12.22</td>
                                            <td>213.02</td>
                                            <td>125.23</td>
                                            <td>2103.5</td>
                                            <td>2105.2</td>
                                            <td>2103.5</td>

                                        </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table container-->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                            
                            <div class="w-full border rounded-lg p-1">
                                <div class="p-2">
                                    <a class="btn btn-primary mx-auto ">Annual</a>
                                    <a class="btn btn-primary mx-auto ">Quarterly</a>
                                    <a class="btn btn-primary mr-3" style="float:right">download</a>
                                </div>
                                <div class="row p-2">
                                <div id="kt_charts_widget_1_chart" style="height: 350px"></div>
                                <div class="table-responsive currency_detail ps-8 pe-8">
                                    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-4 fs-6">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_6">INCOME STATEMENT</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_7">BALANCE SHEET</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_8">CASH FLOW</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade active show" id="kt_tab_pane_6" role="tabpanel">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr class="fw-bold fs-6">
                                                    <th class="min-w-100px">Currency: USD</th>
                                                    <th>2012</th>
                                                    <th>2013</th>
                                                    <th>2014</th>
                                                    <th>2015</th>
                                                    <th>2016</th>
                                                    <th>2017</th>
                                                    <th>2018</th>
                                                    <th>2019</th>
                                                    <th>2020</th>
                                                    <th>2021</th>
                                                    <th>TTM</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Revenu per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>
                                                </tr>
                                                <tr>
                                                <td>FCF per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>
                                                </tr>
                                                <tr>
                                                <td>Diviends per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                <td>CAREX per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                <td>Book Value per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                    <td>Revenu per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>
                                                </tr>
                                                <tr>
                                                <td>Earnings per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                <td>FCF per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>
                                                </tr>
                                                <tr>
                                                <td>Diviends per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                <td>CAREX per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                <td>Book Value per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="kt_tab_pane_7" role="tabpanel">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr class="fw-bold fs-6">
                                                    <th class="min-w-100px">Currency: USD</th>
                                                    <th>2012</th>
                                                    <th>2013</th>
                                                    <th>2014</th>
                                                    <th>2015</th>
                                                    <th>2016</th>
                                                    <th>2017</th>
                                                    <th>2018</th>
                                                    <th>2019</th>
                                                    <th>2020</th>
                                                    <th>2021</th>
                                                    <th>TTM</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Revenu per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>
                                                </tr>
                                                <tr>
                                                <td>FCF per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>
                                                </tr>
                                                <tr>
                                                <td>Diviends per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                <td>CAREX per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                <td>Book Value per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                    <td>Revenu per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>
                                                </tr>
                                                <tr>
                                                <td>Earnings per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                <td>FCF per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>
                                                </tr>
                                                <tr>
                                                <td>Diviends per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                <td>CAREX per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                <td>Book Value per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="kt_tab_pane_8" role="tabpanel">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr class="fw-bold fs-6">
                                                    <th class="min-w-100px">Currency: USD</th>
                                                    <th>2012</th>
                                                    <th>2013</th>
                                                    <th>2014</th>
                                                    <th>2015</th>
                                                    <th>2016</th>
                                                    <th>2017</th>
                                                    <th>2018</th>
                                                    <th>2019</th>
                                                    <th>2020</th>
                                                    <th>2021</th>
                                                    <th>TTM</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Revenu per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>
                                                </tr>
                                                <tr>
                                                <td>FCF per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>
                                                </tr>
                                                <tr>
                                                <td>Diviends per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                <td>CAREX per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                <td>Book Value per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                    <td>Revenu per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>
                                                </tr>
                                                <tr>
                                                <td>Earnings per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                <td>FCF per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>
                                                </tr>
                                                <tr>
                                                <td>Diviends per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                <td>CAREX per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                <tr>
                                                <td>Book Value per share</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>12.22</td>
                                                    <td>213.02</td>
                                                    <td>125.23</td>
                                                    <td>2103.5</td>
                                                    <td>2105.2</td>
                                                    <td>2103.5</td>

                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
                            Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do.
                        </div>
                        <div class="tab-pane fade" id="kt_tab_pane_4" role="tabpanel">
                            Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do.
                        </div>
                        <div class="tab-pane fade" id="kt_tab_pane_5" role="tabpanel">
                            Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do.
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Container -->
            <!-- Start Right Sidebar -->
            <div class="col-md-2 col-sm-12 pt-8">
                <!--begin::Tables widget 14-->
                <div class="card w-full border rounded-lg p-1 mt-6">
                    <!--begin::Header-->
                    <div class="card-header">
                        <!--begin::Title-->
                        <div class="d-flex align-items-center">
                            <!--begin::Label-->
                            <span class="fs-7 fw-bolder text-gray-700 pe-4 text-nowrap d-none d-xxl-block">Sort By:</span>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select class="form-select form-select-sm form-select-solid w-100px w-xxl-125px" data-control="select2" data-placeholder="Watchlist" data-hide-search="true">
                                <option value=""></option>
                                <option value="1">Create new list...</option>
                                <option value="2">Import list...</option>
                                <option value="3"><i class="fonticon-bookmark"></i>Red list...</option>
                                <option value="4" selected="selected">Watchlist</option>
                                <option value="5">Deleted Symbols</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
                                        <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
                                        <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
                                        <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                            
                            <!--end::Menu-->
                        </div>
                        <!--end::Toolbar-->
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fs-7 fw-bolder text-gray-400 border-bottom-0">
                                        <th class="p-0 pb-3 text-start">SYMBOL</th>
                                        <th class="p-0 pb-3 min-w-75px text-end">LAST</th>
                                        <th class="p-0 pb-3 min-w-75px text-end">CHG</th>
                                        <th class="p-0 pb-3 min-w-75px text-end pe-12">CHG%</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-20px me-3">
                                                    <img src="assets/media/stock/600x600/img-49.jpg" class="" alt="" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Mivy App</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="text-gray-600 fw-bolder fs-6">$32,400</span>
                                        </td>
                                        <td class="text-end pe-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-success fs-base">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->9.2%</span>
                                            <!--end::Label-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-20px me-3">
                                                    <img src="assets/media/stock/600x600/img-40.jpg" class="" alt="" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Avionica</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="text-gray-600 fw-bolder fs-6">$256,910</span>
                                        </td>
                                        <td class="text-end pe-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-danger fs-base">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->0.4%</span>
                                            <!--end::Label-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-20px me-3">
                                                    <img src="assets/media/stock/600x600/img-39.jpg" class="" alt="" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Charto CRM</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="text-gray-600 fw-bolder fs-6">$8,220</span>
                                        </td>
                                        <td class="text-end pe-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-success fs-base">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->9.2%</span>
                                            <!--end::Label-->
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-20px me-3">
                                                    <img src="assets/media/stock/600x600/img-47.jpg" class="" alt="" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Tower Hill</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="text-gray-600 fw-bolder fs-6">$74,000</span>
                                        </td>
                                        <td class="text-end pe-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-success fs-base">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->9.2%</span>
                                            <!--end::Label-->
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-20px me-3">
                                                    <img src="assets/media/stock/600x600/img-48.jpg" class="" alt="" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">9 Degree</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="text-gray-600 fw-bolder fs-6">$183,300</span>
                                        </td>
                                        <td class="text-end pe-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-danger fs-base">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->0.4%</span>
                                            <!--end::Label-->
                                        </td>
                                        
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Tables widget 14-->
            </div>
            <!-- End Right Sidebar -->
        </div>    
    </div>  
</x-app-layout>