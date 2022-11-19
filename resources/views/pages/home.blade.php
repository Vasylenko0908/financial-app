
@section('script')
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
	<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
@endsection
<x-app-layout>
    <div class="container col-md-12">
        <div class="row">
            <!-- Start Left sidebar -->
            <div class="col-md-3 col-sm-12">
                <!-- Company Name & Currency -->
                <div class="row p-2 ticker_header relative mb-2">
                    <h2>{{ $company->Name}} ({{$company->Code}})</h2>
                    <div class="logo" style="background-image: url(https://eodhistoricaldata.com/{{$fundamental->General->LogoURL}}"></div>
                    <div>
                        <div class="flex"><img class="w-5 h-5 my-auto inline ml-1 mr-3" src="http://localhost/assets/media/flags/united-states.svg">
                        <span>CURRENCY:  <span class="fs-2x ">{{$company->previousClose}}  </span>{{$company->Currency}}</span></div>
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
                                    <div class="flex truncate font-medium">
                                    @if(isset($fundamental->Highlights->MarketCapitalization))
                                        {{Coduo\PHPHumanizer\NumberHumanizer::metricSuffix($fundamental->Highlights->MarketCapitalization)}}
                                    @endif
                                    </div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Enterprise Value (MRO)
                                    </div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">
                                    @if(isset($fundamental->Valuation->EnterpriseValue))
                                        {{Coduo\PHPHumanizer\NumberHumanizer::metricSuffix($fundamental->Valuation->EnterpriseValue)}}
                                    @endif
                                    </div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Total Revenue(FY)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">
                                    @if(isset($fundamental->Financials->Income_Statement->quarterly->$pastquarter->totalRevenue))
                                        {{ Coduo\PHPHumanizer\NumberHumanizer::metricSuffix($fundamental->Financials->Income_Statement->quarterly->$pastquarter->totalRevenue) }}
                                    @endif
                                    </div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Gross Profit(FY)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">
                                    @if(isset($fundamental->Financials->Income_Statement->quarterly->$pastquarter->grossProfit))
                                        {{ Coduo\PHPHumanizer\NumberHumanizer::metricSuffix($fundamental->Financials->Income_Statement->quarterly->$pastquarter->grossProfit) }}
                                    @endif
                                    </div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">EBITDA (TTM)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">
                                    @if(isset($fundamental->Highlights->EBITDA))
                                        {{ Coduo\PHPHumanizer\NumberHumanizer::metricSuffix($fundamental->Highlights->EBITDA) }}
                                    @endif
                                    </div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Net Income (FY)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">
                                    @if(isset($fundamental->Highlights->EBITDA))
                                        {{ Coduo\PHPHumanizer\NumberHumanizer::metricSuffix($fundamental->Financials->Income_Statement->quarterly->$pastquarter->netIncome) }}
                                    @endif
                                    </div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1  text-sm font-light ">
                                    <div class="flex truncate">Free Cash Flow (TTM) </div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">
                                    @if(isset($fundamental->Highlights->EBITDA))
                                        {{ Coduo\PHPHumanizer\NumberHumanizer::metricSuffix($fundamental->Financials->Cash_Flow->quarterly->$pastquarter->freeCashFlow) }}
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="space-y-1 flex flex-col items-start sticky left-0 z-10">
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Total Shares Outstanding...</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">
                                    @if(isset($fundamental->SharesStats->SharesOutstanding))
                                        {{ Coduo\PHPHumanizer\NumberHumanizer::metricSuffix($fundamental->SharesStats->SharesOutstanding) }}
                                    @endif
                                    </div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">total free float
                                    </div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">
                                    @if(isset($fundamental->SharesStats->SharesFloat))
                                        {{ Coduo\PHPHumanizer\NumberHumanizer::metricSuffix($fundamental->SharesStats->SharesFloat) }}
                                    @endif
                                    </div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">insider ownership %</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">
                                    @if(isset($fundamental->SharesStats->PercentInsiders))
                                        {{ number_format($fundamental->SharesStats->PercentInsiders,3) }}
                                    @endif
                                    </div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Shared held by institutions</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">
                                    @if(isset($fundamental->SharesStats->PercentInstitutions))
                                        {{ number_format($fundamental->SharesStats->PercentInstitutions,3) }}
                                    @endif
                                    </div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">% shares short</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">
                                    @if(isset($fundamental->SharesStats->SharesShort))
                                        {{ Coduo\PHPHumanizer\NumberHumanizer::metricSuffix($fundamental->SharesStats->SharesShort) }} 
                                    @endif
                                    </div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">industry</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">{{$fundamental->General->Industry}}</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1  text-sm font-light ">
                                    <div class="flex truncate">dividend yield </div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">{{ $fundamental->Highlights->DividendYield}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-6 col-sm-12">
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
                        <div class="col-md-6 col-sm-12">
                            <div class="w-full flex items-end pb-2 justify-content-center">
                                <div class="text-lg font-normal text-center">BALANCE SHEET </div>
                            </div>
                            <div class="space-y-1 flex flex-col items-start sticky left-0 z-10">
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Quick Ratio(MRQ)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">
                                        
                                    </div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Current Ratio(MRQ)
                                    </div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">{{number_format(($fundamental->Financials->Balance_Sheet->quarterly->$pastquarter->totalAssets/$fundamental->Financials->Balance_Sheet->quarterly->$pastquarter->totalLiab),4)}}</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Debt to Equality Ratio(MRQ)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">{{number_format(($fundamental->Financials->Balance_Sheet->quarterly->$pastquarter->totalLiab/($fundamental->Financials->Balance_Sheet->quarterly->$pastquarter->totalAssets-$fundamental->Financials->Balance_Sheet->quarterly->$pastquarter->totalLiab)),4)}}</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Net Debt(MRQ)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">91.158M</div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Total Debt(MRQ)</div>
                                    <div class="flex flex-1 "></div>
                                    <div class="flex truncate font-medium">165.992M </div>
                                </div>
                                <div class="flex flex-row shrink-0 w-full px-1 text-sm font-light">
                                    <div class="flex truncate">Total Aseets(MRQ)</div>
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
                                <div class="w-full flex font-light text-sm text-left">
                                    <div class=" text-neutral-400">Sector: </div>
                                    <div class="pl-1">{{$fundamental->General->Sector}}</div>
                                </div>
                                <div class="w-full flex font-light text-sm text-left">
                                    <div class="text-neutral-400">Industry: </div>
                                    <div class="pl-1">{{$fundamental->General->Industry}}</div>
                                </div>
                                <div class="w-full flex font-light text-sm text-left">
                                    <div class="text-neutral-400">CEO: </div>
                                    <div class="pl-1">Mr. Timothy Cook</div>
                                </div>
                            </div>
                            <div class=" flex-col space-y-1 py-2 pr-4">
                                <div class="w-full flex font-light text-sm text-left">
                                    <div class=" text-neutral-400">Full-time employees: </div>
                                    <div class="pl-1">{{$fundamental->General->FullTimeEmployees}}</div>
                                </div>
                                <div class="w-full flex font-light text-sm text-left">
                                    <div class="text-neutral-400">City: </div>
                                    <div class="pl-1">{{$fundamental->General->AddressData->City}}</div>
                                </div>
                                <div class="w-full flex font-light text-sm text-left">
                                    <div class="text-neutral-400">Address: </div>
                                    <div class="pl-1">{{$fundamental->General->Address}}</div>
                                </div>
                            </div>
                            <div class=" flex-col space-y-1 py-2 pr-4">
                                <div class="w-full flex font-light text-sm text-left">
                                    <div class="text-neutral-400">IPO: </div>
                                    <div class="pl-1">{{$fundamental->General->IPODate}}</div>
                                </div>
                                <div class="w-full flex font-light text-sm text-left">
                                    <div class=" text-neutral-400">CIK: </div>
                                    <div class="pl-1">
                                        <a href="https://www.sec.gov/edgar/browse/?CIK={{$fundamental->General->CIK}}" target="_blank">{{$fundamental->General->CIK}}</a>
                                    </div>
                                </div>
                                <div class="w-full flex font-light text-sm text-left">
                                    <div class="text-neutral-400">Website: </div>
                                    <div class="pl-1"><a href="{{$fundamental->General->WebURL}}" target="_blank">{{$fundamental->General->WebURL}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex font-light text-base antialiased leading-normal text-justify pt-2 ">{{$fundamental->General->Description}}</div>
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
                                    <div class="col-md-2 col-sm-12 pl-8 pr-1 pt-4 " style="line-height:initial">
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
                                            <div class="flex flex-1  border-t"></div>
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
                                            <div class="flex flex-1  border-t"></div>
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
                                    <div class="col-md-10 col-sm-12 pl-1">
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar" data-kt-buttons="true">
                                            
                                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_1D_btn">1D</a>
                                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_5D_btn">5D</a>
                                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_1M_btn">1M</a>
                                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_3M_btn">3M</a>
                                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_6M_btn">6M</a>
                                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_ytd_btn">YTD</a>
                                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_1Y_btn">1Y</a>
                                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_5Y_btn">5Y</a>
                                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1" id="kt_charts_all_btn">All</a>
                                        </div>
                                        <!--end::Toolbar-->
                                        <!--begin::Chart-->
                                        <div id="kt_charts_widget_20" class="min-h-auto ps-4 pe-6" data-kt-chart-info="Revenue" style="height: 300px"></div>
                                    </div>
                                    <!--begin::Table container-->
                                    <div class="table-responsive currency_detail ps-8">
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
                                    <!--begin::Nav group-->
                                    <div class="nav-group nav-group-outline" data-kt-buttons="true">
                                        <button class="btn btn-color-gray-400 btn-active btn-active-primary px-6 py-3 me-2 active" data-kt-plan="annual">Annual</button>
                                        <button class="btn btn-color-gray-400 btn-active btn-active-primary px-6 py-3" data-kt-plan="quarterly">Quarterly</button>
                                        <a class="btn btn-primary" style="float:right">download</a>
                                    </div>
                                    <!--end::Nav group-->
                                   
                                </div>
                                <div class="row p-2">
                                <div id="kt_charts_widget_1_chart" style="height: 350px"></div>
                                <div class="table-responsive ps-8">
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
                                        <div class="tab-pane fade active show currency_detail" id="kt_tab_pane_6" role="tabpanel">
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
                                        <div class="tab-pane fade currency_detail" id="kt_tab_pane_7" role="tabpanel">
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
                                        <div class="tab-pane fade currency_detail" id="kt_tab_pane_8" role="tabpanel">
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
                            <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-bs-toggle="modal" data-bs-target="#add_company" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-dark" title="Add Company">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <div class="modal fade" tabindex="-1" id="add_company">
                                <div class="modal-dialog">
                                    <div class="modal-content position-absolute">
                                        <div class="modal-header">
                                            <h5 class="modal-title">ADD COMPANY</h5>

                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <span class="svg-icon svg-icon-2x"></span>
                                            </div>
                                            <!--end::Close-->
                                        </div>

                                        <div class="modal-body">
                                            <div class="d-flex flex-stack mb-5">
                                                <!--begin::Search-->
                                                <div class="d-flex align-items-center position-relative my-1">
                                                    <span class="svg-icon svg-icon-2">...</span>
                                                    <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers"/>
                                                </div>
                                                <!--end::Search-->

                                                <!--begin::Toolbar-->
                                                <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                                                    <!--begin::Filter-->
                                                    <button type="button" class="btn btn-light-primary me-3" >
                                                        <span class="svg-icon svg-icon-2">...</span>
                                                        Filter
                                                    </button>
                                                    <!--end::Filter-->
                                                </div>
                                                <!--end::Toolbar-->
                                                
                                            </div>
                                            <!--end::Wrapper-->

                                        <!--begin::Datatable-->
                                        <table id="company_list" class="table align-middle table-row-dashed fs-6 gy-5">
                                            <thead>
                                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="w-10px pe-2">
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#company_list .form-check-input" value="1"/>
                                                    </div>
                                                </th>
                                                <th>Customer Name</th>
                                                <th>Email</th>
                                                <th>Company</th>
                                                <th>Payment Method</th>
                                                <th>Created Date</th>
                                                <th class="text-end min-w-100px">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody class="text-gray-600 fw-bold">
                                            </tbody>
                                        </table>
                                        <!--end::Datatable-->                                       
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    <div class="card-body px-1">
                        <!--begin:: container-->
                        <div class="flex my-2">
                            <div class="w-10 ">
                            <i class="bi bi-bookmark-star-fill"></i>
                            </div>
                            <div class="w-25 ">Symbol</div>
                            <div class="w-20p text-center">Last</div>
                            <div class="w-20p text-center">Chg</div>
                            <div class="w-20p text-center">Chg%</div>
                        </div>
                        <div class="separator my-1"></div>
                        <ul id="sortlist">
                        <li class="bg-hover-light-dark overlay overflow-hidden" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="tooltip-dark" title="Tooltip on left">
                            <div class="flex my-2 overlay-wrapper">
                                <div class="w-10 " data-bs-toggle="popover" data-bs-placement="right" data-bs-custom-class="tooltip-dark" data-bs-content="<button class='btn-circle'>sdas</button>">
                                <i class="bi bi-bookmark-star-fill"></i>
                                </div>
                                <div class="w-25 ">AAPL</div>
                                <div class="w-20p text-center">12.5</div>
                                <div class="w-20p text-center">13.6</div>
                                <div class="w-20p text-center">13.7</div>
                            </div>
                            <div class="overlay-layer">
                            <a href="#" class="btn btn-icon btn-icon-muted btn-color-primary"><i class="bi bi-x"></i></a>
                            </div>
                        </li>
                        <li class="bg-hover-light-dark" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="tooltip-dark" title="Tooltip on left">
                            <div class="flex my-2">
                                <div class="w-10" data-bs-toggle="popover" data-bs-placement="right" data-bs-custom-class="tooltip-dark"  data-bs-content="And here's some amazing content. It's very engaging. Right?">
                                <i class="bi bi-bookmark-star-fill"></i>
                                </div>
                                <div class="w-25 ">AAPL</div>
                                <div class="w-20p text-center">12.5</div>
                                <div class="w-20p text-center">13.6</div>
                                <div class="w-20p text-center">13.7</div>
                            </div>
                        </li>
                        <li class="bg-hover-light-dark" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="tooltip-dark" title="Tooltip on left">
                            <div class="flex my-2">
                                <div class="w-10 " data-bs-toggle="popover" data-bs-placement="right" data-bs-custom-class="tooltip-dark" data-bs-content="And here's some amazing content. It's very engaging. Right?">
                                <i class="bi bi-bookmark-star-fill"></i>
                                </div>
                                <div class="w-25 ">AAPL</div>
                                <div class="w-20p text-center">12.5</div>
                                <div class="w-20p text-center">13.6</div>
                                <div class="w-20p text-center">13.7</div>
                            </div>
                        </li>
                        </ul>
                        <!--end::container-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Tables widget 14-->
            </div>
            <!-- End Right Sidebar -->
        </div>    
    </div>  
</x-app-layout>
<style>
    /* (A) LIST STYLES */
.slist {
  list-style: none;
  padding: 0;
  margin: 0;
}
.slist li {
  /* margin: 2px; */
  /* padding: 5px; */
  border-bottom: 1px solid #dfdfdf;
}

/* (B) DRAG-AND-DROP HINT */
.slist li.hint {
  /* border: 1px solid var(--bs-primary);
  background: #feffb4; */
}
.slist li:hover {
  border: 1px solid var(--bs-info);
  /* background: #feffb4; */
}
.slist li.active {
  border: 1px solid var(--bs-primary);
  /* background: var(--bs-primary); */
}
</style>
<script>
window.addEventListener("DOMContentLoaded", () => {
  slist(document.getElementById("sortlist"));
});
function slist (target) {
  // (A) SET CSS + GET ALL LIST ITEMS
  target.classList.add("slist");
  let items = target.getElementsByTagName("li"), current = null;

  // (B) MAKE ITEMS DRAGGABLE + SORTABLE
  for (let i of items) {
    // (B1) ATTACH DRAGGABLE
    i.draggable = true;
    
    // (B2) DRAG START - YELLOW HIGHLIGHT DROPZONES
    i.ondragstart = (ev) => {
      current = i;
      for (let it of items) {
        if (it != current) { it.classList.add("hint"); }
      }
    };
    
    // (B3) DRAG ENTER - RED HIGHLIGHT DROPZONE
    i.ondragenter = (ev) => {
      if (i != current) { i.classList.add("active"); }
    };

    // (B4) DRAG LEAVE - REMOVE RED HIGHLIGHT
    i.ondragleave = () => {
      i.classList.remove("active");
    };

    // (B5) DRAG END - REMOVE ALL HIGHLIGHTS
    i.ondragend = () => { for (let it of items) {
        it.classList.remove("hint");
        it.classList.remove("active");
    }};
 
    // (B6) DRAG OVER - PREVENT THE DEFAULT "DROP", SO WE CAN DO OUR OWN
    i.ondragover = (evt) => { evt.preventDefault(); };
 
    // (B7) ON DROP - DO SOMETHING
    i.ondrop = (evt) => {
      evt.preventDefault();
      if (i != current) {
        let currentpos = 0, droppedpos = 0;
        for (let it=0; it<items.length; it++) {
          if (current == items[it]) { currentpos = it; }
          if (i == items[it]) { droppedpos = it; }
        }
        if (currentpos < droppedpos) {
          i.parentNode.insertBefore(current, i.nextSibling);
        } else {
          i.parentNode.insertBefore(current, i);
        }
      }
    };
  }
}
var element = document.querySelector('#add_company');
dragElement(element);

function dragElement(elmnt) {
    var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
    if (elmnt.querySelector('.modal-content')) {
        // if present, the header is where you move the DIV from:
        elmnt.querySelector('.modal-content').onmousedown = dragMouseDown;
    } else {
        // otherwise, move the DIV from anywhere inside the DIV:
        elmnt.onmousedown = dragMouseDown;
    }

    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        // get the mouse cursor position at startup:
        pos3 = e.clientX;
        pos4 = e.clientY;
        document.onmouseup = closeDragElement;
        // call a function whenever the cursor moves:
        document.onmousemove = elementDrag;
    }

    function elementDrag(e) {
        e = e || window.event;
        e.preventDefault();
        // calculate the new cursor position:
        pos1 = pos3 - e.clientX;
        pos2 = pos4 - e.clientY;
        pos3 = e.clientX;
        pos4 = e.clientY;
        // set the element's new position:
        elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
        elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
    }

    function closeDragElement() {
        // stop moving when mouse button is released:
        document.onmouseup = null;
        document.onmousemove = null;
    }
}
</script>