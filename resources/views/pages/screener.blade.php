@section('script')
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script>
        $( document ).ready(function() {
                $('.tab-pane').hide();
                $('.tab-pane').removeClass('show');
                $('#kt_tab_pane_1').show();      
                $('#kt_tab_pane_1').addClass('show'); 
                $("#kt_datatable_example_1").DataTable({
                "language": {
                "lengthMenu": "Show _MENU_",
                },
                "dom":
                "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
                });
            $("#desc_btn").click(function(){
              $('.tab-pane').hide();
              $('.tab-pane').removeClass('show');
              $('#kt_tab_pane_1').show();      
              $('#kt_tab_pane_1').addClass('show');       
            }); 
            $("#fund_btn").click(function(){
              $('.tab-pane').hide();
              $('.tab-pane').removeClass('show');
              $('#kt_tab_pane_2').show();
              $('#kt_tab_pane_2').addClass('show');      
            });
            $("#cagr_btn").click(function(){
              $('.tab-pane').hide();
              $('.tab-pane').removeClass('show');
              $('#kt_tab_pane_3').show();
              $('#kt_tab_pane_3').addClass('show');      
            });   
        });
</script>

@endsection
<x-app-layout>
    
        <div class="container col-md-10">
            <div class="row">
                <table cellpadding="0">
                    <tbody>
                        <tr><td>
                            <table id="filter-table-top" class="mt-6 mb-3" width="100%" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td width="1%"></td>
                                        <td align="center" width="15%">
                                            <select id="screenerPresetsSelect" style="width: 100%; visibility: visible;" class="body-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                                <option>My Presets</option>
                                                <option value="__save_screen">-Save Screen</option>
                                                <option value="__edit_screens">-Edit Screens</option>
                                            </select>
                                        </td>
                                        <td align="center" width="6%">
                                            <span class="body-combo-title" style="cursor:pointer;">ORDER BY:</span>
                                        </td>
                                        <td align="left" width="20%">
                                            <select id="orderSelect" style="width: 100%; visibility: visible;" class="body-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                                <option value="ticker">Ticker</option>
                                                <option value="company">Company</option>
                                                <option selected="selected" value="sector">Sector</option>
                                                <option value="industry">Industry</option>
                                                <option value="country">Country</option>
                                                <option value="marketcap">Market Cap</option>
                                                <option value="pe">Price/Earnings</option>
                                                <option value="forwardpe">Forward Price/Earnings</option>
                                                <option value="peg">PEG (Price/Earnings/Growth)</option>
                                                <option value="ps">Price/Sales</option>
                                                <option value="pb">Price/Book</option>
                                                <option value="pc">Price/Cash</option>
                                                <option value="pfcf">Price/Free Cash Flow</option>
                                                <option value="dividendyield">Dividend Yield</option>
                                                <option value="payoutratio">Payout Ratio</option>
                                                <option value="eps">EPS (ttm)</option>
                                                <option value="epsyoy">EPS growth this year</option>
                                                <option value="epsyoy1">EPS growth next year</option>
                                                <option value="eps5years">EPS growth past 5 years</option>
                                                <option value="estltgrowth">EPS growth next 5 years</option>
                                                <option value="sales5years">Sales growth past 5 years</option>
                                                <option value="epsqoq">EPS growth qtr over qtr</option>
                                                <option value="salesqoq">Sales growth qtr over qtr</option>
                                                <option value="sharesoutstanding2">Shares Outstanding</option>
                                                <option value="sharesfloat">Shares Float</option>
                                                <option value="insiderown">Insider Ownership</option>
                                                <option value="insidertrans">Insider Transactions</option>
                                                <option value="instown">Institutional Ownership</option>
                                                <option value="insttrans">Institutional Transactions</option>
                                                <option value="shortinterestshare">Short Interest Share</option>
                                                <option value="shortinterestratio">Short Interest Ratio</option>
                                                <option value="earningsdate">Earnings Date</option>
                                                <option value="roa">Return on Assets</option>
                                                <option value="roe">Return on Equity</option>
                                                <option value="roi">Return on Investment</option>
                                                <option value="curratio">Current Ratio</option>
                                                <option value="quickratio">Quick Ratio</option>
                                                <option value="ltdebteq">LT Debt/Equity</option>
                                                <option value="debteq">Total Debt/Equity</option>
                                                <option value="grossmargin">Gross Margin</option>
                                                <option value="opermargin">Operating Margin</option>
                                                <option value="netmargin">Net Profit Margin</option>
                                                <option value="recom">Analyst Recommendation</option>
                                                <option value="perf1w">Performance (Week)</option>
                                                <option value="perf4w">Performance (Month)</option>
                                                <option value="perf13w">Performance (Quarter)</option>
                                                <option value="perf26w">Performance (Half Year)</option>
                                                <option value="perf52w">Performance (Year)</option>
                                                <option value="perfytd">Performance (Year To Date)</option>
                                                <option value="beta">Beta</option>
                                                <option value="averagetruerange">Average True Range</option>
                                                <option value="volatility1w">Volatility (Week)</option>
                                                <option value="volatility4w">Volatility (Month)</option>
                                                <option value="sma20">20-Day SMA (Relative)</option>
                                                <option value="sma50">50-Day SMA (Relative)</option>
                                                <option value="sma200">200-Day SMA (Relative)</option>
                                                <option value="high50d">50-Day High (Relative)</option>
                                                <option value="low50d">50-Day Low (Relative)</option>
                                                <option value="high52w">52-Week High (Relative)</option>
                                                <option value="low52w">52-Week Low (Relative)</option>
                                                <option value="rsi">Relative Strength Index (14)</option>
                                                <option value="averagevolume">Average Volume (3 Month)</option>
                                                <option value="relativevolume">Relative Volume</option>
                                                <option value="change">Change</option>
                                                <option value="changeopen">Change from Open</option>
                                                <option value="gap">Gap</option>
                                                <option value="volume">Volume</option>
                                                <option value="price">Price</option>
                                                <option value="targetprice">Target Price</option>
                                                <option value="ipodate">IPO Date</option>
                                            </select>
                                        </td>
                                        <td align="left" width="6%">
                                            <select id="orderDirSelect" style="width: 100%; visibility: visible;" class="body-combo-text form-select form-select-sm form-select-solid" data-control="select">
                                                <option selected="selected" value="sector">Asc</option>
                                                <option value="sector">Desc</option>
                                            </select>
                                        </td>
                                        <td align="center" width="6%">
                                            <span class="body-combo-title" style="cursor:pointer;">SEARCH BY:</span>
                                        </td>
                                        <td align="left" width="15%">
                                            <select id="signalSelect" style="width: 100%; visibility: visible;" class="body-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">None</option>
                                                <option value="ta_topgainers">All Time High</option>
                                                <option value="ta_toplosers">All Time Low</option>
                                                <option value="ta_newhigh">Biggest Gainers</option>
                                                <option value="ta_newlow">Biggest Losers</option>
                                                <option value="ta_mostvolatile">New Nets</option>
                                                <option value="ta_mostactive">High Dividend</option>
                                                <option value="ta_unusualvolume">Underperformance VS S&P 500(Choose Timeframe)</option>
                                                <option value="ta_overbought">Overperformance VS S&P 500(Choose Timeframe)</option>
                                                
                                            </select>
                                        </td>
                                        <td align="center" width="6%">
                                            <span class="body-combo-title" style="cursor:pointer;">Tickers:</span></td>
                                        <td align="left" width="26%">
                                            <table width="100%" cellpadding="0" cellspacing="0" style="table-layout:fixed;">
                                            <tbody>
                                                <tr>
                                                    <td align="left" width="100%">
                                                        <input id="tickersInput" class="body-combo-text form-control form-control-solid" value="" type="text">
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                        <td>
                                            <input type="button" value=">" data-boxover="Submit tickers" class="screener-combo-button btn btn-white p-1 mr-2" style="cursor:pointer">
                                        </td>
                                        <td align="left"><img src="gfx/nic2x2.gif" style="width:2px;height:22px" alt="" border="0"></td>
                                        <td align="left">
                                            <a href="" class="screener-filter_inv btn btn-primary py-2">Filters <i class="arrow-up"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td></tr>
                        <tr><td>
                            <table id="filter-table-tabs" class=" border-t border-b" width="100%" height="21" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td width="34%">
                                        <b>Filters:</b>
                                        </td>
                                        <td>
                                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-0">
                                            <li class="nav-item">
                                                <a class="nav-link active btn btn-primary" data-bs-toggle="tab" id="desc_btn">DESCRIPTIVE</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-primary" data-bs-toggle="tab" id="fund_btn">FUNDAMENTAL</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-primary" data-bs-toggle="tab" id="cagr_btn">CAGR PER SHARE</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-primary" data-bs-toggle="tab" id="all_btn">ALL</a>
                                            </li>
                                        </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td></tr>
                        <tr class="tab-pane fade show" id="kt_tab_pane_1"><td colspan="30" valign="middle" align="center" class="filters-border border">
                            <table id="filter-table-filters" width="100%" cellspacing="1" cellpadding="1" style="table-layout:fixed;" class="table table-hover table-row-dashed table-row-gray-300">
                                <tbody>
                                    <tr>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">Market Cap.</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_cap" class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                                <option selected="selected" value="">Any</option>
                                                <option value="mega">Mega ($200bln and more)</option>
                                                <option value="large">Large ($10bln to $200bln)</option>
                                                <option value="mid">Mid ($2bln to $10bln)</option>
                                                <option value="small">Small ($300mln to $2bln)</option>
                                                <option value="micro">Micro ($50mln to $300mln)</option>
                                                <option value="nano">Nano (under $50mln)</option>
                                                <option value="largeover">+Large (over $10bln)</option>
                                                <option value="midover">+Mid (over $2bln)</option>
                                                <option value="smallover">+Small (over $300mln)</option>
                                                <option value="microover">+Micro (over $50mln)</option>
                                                <option value="largeunder">-Large (under $200bln)</option>
                                                <option value="midunder">-Mid (under $10bln)</option>
                                                <option value="smallunder">-Small (under $2bln)</option>
                                                <option value="microunder">-Micro (under $300mln)</option>
                                                <option value="frange">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;" >Country</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <!-- <div id="fsm_geo" class="js-custom-modal" style="display: none">
                                                <table style="border-collapse: collapse; table-layout: fixed;" cellpadding="0">
                                                    <tbody><tr>
                                                        <td style="position: relative">
                                                            <input id="fsmi_geo" class="js-custom-modal-edit screener-input-text h" data-filter="geo" type="text" value="" style="width: 100%; padding-left: 2px; padding-right: 15px; cursor: pointer" readonly="">
                                                            <a href="#" class="js-custom-modal-edit" data-filter="geo" style="position: absolute; top: 4px; right: 4px"><img src="/gfx/btn_screener_edit.gif" border="0" class="block"></a>
                                                        </td>
                                                        <td width="13" style="padding-left: 3px">
                                                            <a href="#" class="js-custom-modal-hide screener-input-hide" data-filter="geo"><img src="/gfx/btn_screener_close.gif" border="0"></a>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </div> -->
                                            <select id="" class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                                <option selected="selected" value="">Any</option>
                                                <option value="usa">USA</option>
                                                <option value="notusa">Foreign (ex-USA)</option>
                                                <option value="asia">Asia</option>
                                                <option value="europe">Europe</option>
                                                <option value="latinamerica">Latin America</option>
                                                <option value="bric">BRIC</option>
                                                <option value="argentina">Argentina</option>
                                                <option value="australia">Australia</option>
                                                <option value="bahamas">Bahamas</option>
                                                <option value="belgium">Belgium</option>
                                                <option value="benelux">BeNeLux</option>
                                                <option value="bermuda">Bermuda</option>
                                                <option value="brazil">Brazil</option>
                                                <option value="canada">Canada</option>
                                                <option value="caymanislands">Cayman Islands</option>
                                                <option value="chile">Chile</option>
                                                <option value="china">China</option>
                                                <option value="chinahongkong">China &amp; Hong Kong</option>
                                                <option value="colombia">Colombia</option>
                                                <option value="cyprus">Cyprus</option>
                                                <option value="denmark">Denmark</option>
                                                <option value="finland">Finland</option><option value="france">France</option><option value="germany">Germany</option><option value="greece">Greece</option><option value="hongkong">Hong Kong</option><option value="hungary">Hungary</option><option value="iceland">Iceland</option><option value="india">India</option><option value="indonesia">Indonesia</option><option value="ireland">Ireland</option><option value="israel">Israel</option><option value="italy">Italy</option><option value="japan">Japan</option><option value="kazakhstan">Kazakhstan</option><option value="luxembourg">Luxembourg</option><option value="malaysia">Malaysia</option><option value="malta">Malta</option><option value="mexico">Mexico</option><option value="monaco">Monaco</option><option value="netherlands">Netherlands</option><option value="newzealand">New Zealand</option><option value="norway">Norway</option><option value="panama">Panama</option><option value="peru">Peru</option><option value="philippines">Philippines</option><option value="portugal">Portugal</option><option value="russia">Russia</option><option value="singapore">Singapore</option><option value="southafrica">South Africa</option><option value="southkorea">South Korea</option><option value="spain">Spain</option><option value="sweden">Sweden</option><option value="switzerland">Switzerland</option><option value="taiwan">Taiwan</option><option value="turkey">Turkey</option><option value="unitedarabemirates">United Arab Emirates</option><option value="unitedkingdom">United Kingdom</option><option value="uruguay">Uruguay</option><option value="modal">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">Company Origin</span>
                                        </td>
                                        <td width="10%" class="filters-cells ">
                                            <select id="" class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">Industry</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="" class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                                <option selected="selected" value="">Any</option><option value="stocksonly">Stocks only (ex-Funds)</option><option value="exchangetradedfund">Exchange Traded Fund</option><option value="advertisingagencies">Advertising Agencies</option><option value="aerospacedefense">Aerospace &amp; Defense</option><option value="agriculturalinputs">Agricultural Inputs</option><option value="airlines">Airlines</option><option value="airportsairservices">Airports &amp; Air Services</option><option value="aluminum">Aluminum</option><option value="apparelmanufacturing">Apparel Manufacturing</option><option value="apparelretail">Apparel Retail</option><option value="assetmanagement">Asset Management</option><option value="automanufacturers">Auto Manufacturers</option><option value="autoparts">Auto Parts</option><option value="autotruckdealerships">Auto &amp; Truck Dealerships</option><option value="banksdiversified">Banks - Diversified</option><option value="banksregional">Banks - Regional</option><option value="beveragesbrewers">Beverages - Brewers</option><option value="beveragesnonalcoholic">Beverages - Non-Alcoholic</option><option value="beverageswineriesdistilleries">Beverages - Wineries &amp; Distilleries</option><option value="biotechnology">Biotechnology</option><option value="broadcasting">Broadcasting</option><option value="buildingmaterials">Building Materials</option><option value="buildingproductsequipment">Building Products &amp; Equipment</option><option value="businessequipmentsupplies">Business Equipment &amp; Supplies</option><option value="capitalmarkets">Capital Markets</option><option value="chemicals">Chemicals</option><option value="closedendfunddebt">Closed-End Fund - Debt</option><option value="closedendfundequity">Closed-End Fund - Equity</option><option value="closedendfundforeign">Closed-End Fund - Foreign</option><option value="cokingcoal">Coking Coal</option><option value="communicationequipment">Communication Equipment</option><option value="computerhardware">Computer Hardware</option><option value="confectioners">Confectioners</option><option value="conglomerates">Conglomerates</option><option value="consultingservices">Consulting Services</option><option value="consumerelectronics">Consumer Electronics</option><option value="copper">Copper</option><option value="creditservices">Credit Services</option><option value="departmentstores">Department Stores</option><option value="diagnosticsresearch">Diagnostics &amp; Research</option><option value="discountstores">Discount Stores</option><option value="drugmanufacturersgeneral">Drug Manufacturers - General</option><option value="drugmanufacturersspecialtygeneric">Drug Manufacturers - Specialty &amp; Generic</option><option value="educationtrainingservices">Education &amp; Training Services</option><option value="electricalequipmentparts">Electrical Equipment &amp; Parts</option><option value="electroniccomponents">Electronic Components</option><option value="electronicgamingmultimedia">Electronic Gaming &amp; Multimedia</option><option value="electronicscomputerdistribution">Electronics &amp; Computer Distribution</option><option value="engineeringconstruction">Engineering &amp; Construction</option><option value="entertainment">Entertainment</option><option value="exchangetradedfund">Exchange Traded Fund</option><option value="farmheavyconstructionmachinery">Farm &amp; Heavy Construction Machinery</option><option value="farmproducts">Farm Products</option><option value="financialconglomerates">Financial Conglomerates</option><option value="financialdatastockexchanges">Financial Data &amp; Stock Exchanges</option><option value="fooddistribution">Food Distribution</option><option value="footwearaccessories">Footwear &amp; Accessories</option><option value="furnishingsfixturesappliances">Furnishings, Fixtures &amp; Appliances</option><option value="gambling">Gambling</option><option value="gold">Gold</option><option value="grocerystores">Grocery Stores</option><option value="healthcareplans">Healthcare Plans</option><option value="healthinformationservices">Health Information Services</option><option value="homeimprovementretail">Home Improvement Retail</option><option value="householdpersonalproducts">Household &amp; Personal Products</option><option value="industrialdistribution">Industrial Distribution</option><option value="informationtechnologyservices">Information Technology Services</option><option value="infrastructureoperations">Infrastructure Operations</option><option value="insurancebrokers">Insurance Brokers</option><option value="insurancediversified">Insurance - Diversified</option><option value="insurancelife">Insurance - Life</option><option value="insurancepropertycasualty">Insurance - Property &amp; Casualty</option><option value="insurancereinsurance">Insurance - Reinsurance</option><option value="insurancespecialty">Insurance - Specialty</option><option value="integratedfreightlogistics">Integrated Freight &amp; Logistics</option><option value="internetcontentinformation">Internet Content &amp; Information</option><option value="internetretail">Internet Retail</option><option value="leisure">Leisure</option><option value="lodging">Lodging</option><option value="lumberwoodproduction">Lumber &amp; Wood Production</option><option value="luxurygoods">Luxury Goods</option><option value="marineshipping">Marine Shipping</option><option value="medicalcarefacilities">Medical Care Facilities</option><option value="medicaldevices">Medical Devices</option><option value="medicaldistribution">Medical Distribution</option><option value="medicalinstrumentssupplies">Medical Instruments &amp; Supplies</option><option value="metalfabrication">Metal Fabrication</option><option value="mortgagefinance">Mortgage Finance</option><option value="oilgasdrilling">Oil &amp; Gas Drilling</option><option value="oilgasep">Oil &amp; Gas E&amp;P</option><option value="oilgasequipmentservices">Oil &amp; Gas Equipment &amp; Services</option><option value="oilgasintegrated">Oil &amp; Gas Integrated</option><option value="oilgasmidstream">Oil &amp; Gas Midstream</option><option value="oilgasrefiningmarketing">Oil &amp; Gas Refining &amp; Marketing</option><option value="otherindustrialmetalsmining">Other Industrial Metals &amp; Mining</option><option value="otherpreciousmetalsmining">Other Precious Metals &amp; Mining</option><option value="packagedfoods">Packaged Foods</option><option value="packagingcontainers">Packaging &amp; Containers</option><option value="paperpaperproducts">Paper &amp; Paper Products</option><option value="personalservices">Personal Services</option><option value="pharmaceuticalretailers">Pharmaceutical Retailers</option><option value="pollutiontreatmentcontrols">Pollution &amp; Treatment Controls</option><option value="publishing">Publishing</option><option value="railroads">Railroads</option><option value="realestatedevelopment">Real Estate - Development</option><option value="realestatediversified">Real Estate - Diversified</option><option value="realestateservices">Real Estate Services</option><option value="recreationalvehicles">Recreational Vehicles</option><option value="reitdiversified">REIT - Diversified</option><option value="reithealthcarefacilities">REIT - Healthcare Facilities</option><option value="reithotelmotel">REIT - Hotel &amp; Motel</option><option value="reitindustrial">REIT - Industrial</option><option value="reitmortgage">REIT - Mortgage</option><option value="reitoffice">REIT - Office</option><option value="reitresidential">REIT - Residential</option><option value="reitretail">REIT - Retail</option><option value="reitspecialty">REIT - Specialty</option><option value="rentalleasingservices">Rental &amp; Leasing Services</option><option value="residentialconstruction">Residential Construction</option><option value="resortscasinos">Resorts &amp; Casinos</option><option value="restaurants">Restaurants</option><option value="scientifictechnicalinstruments">Scientific &amp; Technical Instruments</option><option value="securityprotectionservices">Security &amp; Protection Services</option><option value="semiconductorequipmentmaterials">Semiconductor Equipment &amp; Materials</option><option value="semiconductors">Semiconductors</option><option value="shellcompanies">Shell Companies</option><option value="silver">Silver</option><option value="softwareapplication">Software - Application</option><option value="softwareinfrastructure">Software - Infrastructure</option><option value="solar">Solar</option><option value="specialtybusinessservices">Specialty Business Services</option><option value="specialtychemicals">Specialty Chemicals</option><option value="specialtyindustrialmachinery">Specialty Industrial Machinery</option><option value="specialtyretail">Specialty Retail</option><option value="staffingemploymentservices">Staffing &amp; Employment Services</option><option value="steel">Steel</option><option value="telecomservices">Telecom Services</option><option value="textilemanufacturing">Textile Manufacturing</option><option value="thermalcoal">Thermal Coal</option><option value="tobacco">Tobacco</option><option value="toolsaccessories">Tools &amp; Accessories</option><option value="travelservices">Travel Services</option><option value="trucking">Trucking</option><option value="uranium">Uranium</option><option value="utilitiesdiversified">Utilities - Diversified</option><option value="utilitiesindependentpowerproducers">Utilities - Independent Power Producers</option><option value="utilitiesregulatedelectric">Utilities - Regulated Electric</option><option value="utilitiesregulatedgas">Utilities - Regulated Gas</option><option value="utilitiesregulatedwater">Utilities - Regulated Water</option><option value="utilitiesrenewable">Utilities - Renewable</option><option value="wastemanagement">Waste Management</option><option value="modal">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">Sector</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="" class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                                <option selected="selected" value="">Any</option><option value="stocksonly">Stocks only (ex-Funds)</option><option value="exchangetradedfund">Exchange Traded Fund</option><option value="advertisingagencies">Advertising Agencies</option><option value="aerospacedefense">Aerospace &amp; Defense</option><option value="agriculturalinputs">Agricultural Inputs</option><option value="airlines">Airlines</option><option value="airportsairservices">Airports &amp; Air Services</option><option value="aluminum">Aluminum</option><option value="apparelmanufacturing">Apparel Manufacturing</option><option value="apparelretail">Apparel Retail</option><option value="assetmanagement">Asset Management</option><option value="automanufacturers">Auto Manufacturers</option><option value="autoparts">Auto Parts</option><option value="autotruckdealerships">Auto &amp; Truck Dealerships</option><option value="banksdiversified">Banks - Diversified</option><option value="banksregional">Banks - Regional</option><option value="beveragesbrewers">Beverages - Brewers</option><option value="beveragesnonalcoholic">Beverages - Non-Alcoholic</option><option value="beverageswineriesdistilleries">Beverages - Wineries &amp; Distilleries</option><option value="biotechnology">Biotechnology</option><option value="broadcasting">Broadcasting</option><option value="buildingmaterials">Building Materials</option><option value="buildingproductsequipment">Building Products &amp; Equipment</option><option value="businessequipmentsupplies">Business Equipment &amp; Supplies</option><option value="capitalmarkets">Capital Markets</option><option value="chemicals">Chemicals</option><option value="closedendfunddebt">Closed-End Fund - Debt</option><option value="closedendfundequity">Closed-End Fund - Equity</option><option value="closedendfundforeign">Closed-End Fund - Foreign</option><option value="cokingcoal">Coking Coal</option><option value="communicationequipment">Communication Equipment</option><option value="computerhardware">Computer Hardware</option><option value="confectioners">Confectioners</option><option value="conglomerates">Conglomerates</option><option value="consultingservices">Consulting Services</option><option value="consumerelectronics">Consumer Electronics</option><option value="copper">Copper</option><option value="creditservices">Credit Services</option><option value="departmentstores">Department Stores</option><option value="diagnosticsresearch">Diagnostics &amp; Research</option><option value="discountstores">Discount Stores</option><option value="drugmanufacturersgeneral">Drug Manufacturers - General</option><option value="drugmanufacturersspecialtygeneric">Drug Manufacturers - Specialty &amp; Generic</option><option value="educationtrainingservices">Education &amp; Training Services</option><option value="electricalequipmentparts">Electrical Equipment &amp; Parts</option><option value="electroniccomponents">Electronic Components</option><option value="electronicgamingmultimedia">Electronic Gaming &amp; Multimedia</option><option value="electronicscomputerdistribution">Electronics &amp; Computer Distribution</option><option value="engineeringconstruction">Engineering &amp; Construction</option><option value="entertainment">Entertainment</option><option value="exchangetradedfund">Exchange Traded Fund</option><option value="farmheavyconstructionmachinery">Farm &amp; Heavy Construction Machinery</option><option value="farmproducts">Farm Products</option><option value="financialconglomerates">Financial Conglomerates</option><option value="financialdatastockexchanges">Financial Data &amp; Stock Exchanges</option><option value="fooddistribution">Food Distribution</option><option value="footwearaccessories">Footwear &amp; Accessories</option><option value="furnishingsfixturesappliances">Furnishings, Fixtures &amp; Appliances</option><option value="gambling">Gambling</option><option value="gold">Gold</option><option value="grocerystores">Grocery Stores</option><option value="healthcareplans">Healthcare Plans</option><option value="healthinformationservices">Health Information Services</option><option value="homeimprovementretail">Home Improvement Retail</option><option value="householdpersonalproducts">Household &amp; Personal Products</option><option value="industrialdistribution">Industrial Distribution</option><option value="informationtechnologyservices">Information Technology Services</option><option value="infrastructureoperations">Infrastructure Operations</option><option value="insurancebrokers">Insurance Brokers</option><option value="insurancediversified">Insurance - Diversified</option><option value="insurancelife">Insurance - Life</option><option value="insurancepropertycasualty">Insurance - Property &amp; Casualty</option><option value="insurancereinsurance">Insurance - Reinsurance</option><option value="insurancespecialty">Insurance - Specialty</option><option value="integratedfreightlogistics">Integrated Freight &amp; Logistics</option><option value="internetcontentinformation">Internet Content &amp; Information</option><option value="internetretail">Internet Retail</option><option value="leisure">Leisure</option><option value="lodging">Lodging</option><option value="lumberwoodproduction">Lumber &amp; Wood Production</option><option value="luxurygoods">Luxury Goods</option><option value="marineshipping">Marine Shipping</option><option value="medicalcarefacilities">Medical Care Facilities</option><option value="medicaldevices">Medical Devices</option><option value="medicaldistribution">Medical Distribution</option><option value="medicalinstrumentssupplies">Medical Instruments &amp; Supplies</option><option value="metalfabrication">Metal Fabrication</option><option value="mortgagefinance">Mortgage Finance</option><option value="oilgasdrilling">Oil &amp; Gas Drilling</option><option value="oilgasep">Oil &amp; Gas E&amp;P</option><option value="oilgasequipmentservices">Oil &amp; Gas Equipment &amp; Services</option><option value="oilgasintegrated">Oil &amp; Gas Integrated</option><option value="oilgasmidstream">Oil &amp; Gas Midstream</option><option value="oilgasrefiningmarketing">Oil &amp; Gas Refining &amp; Marketing</option><option value="otherindustrialmetalsmining">Other Industrial Metals &amp; Mining</option><option value="otherpreciousmetalsmining">Other Precious Metals &amp; Mining</option><option value="packagedfoods">Packaged Foods</option><option value="packagingcontainers">Packaging &amp; Containers</option><option value="paperpaperproducts">Paper &amp; Paper Products</option><option value="personalservices">Personal Services</option><option value="pharmaceuticalretailers">Pharmaceutical Retailers</option><option value="pollutiontreatmentcontrols">Pollution &amp; Treatment Controls</option><option value="publishing">Publishing</option><option value="railroads">Railroads</option><option value="realestatedevelopment">Real Estate - Development</option><option value="realestatediversified">Real Estate - Diversified</option><option value="realestateservices">Real Estate Services</option><option value="recreationalvehicles">Recreational Vehicles</option><option value="reitdiversified">REIT - Diversified</option><option value="reithealthcarefacilities">REIT - Healthcare Facilities</option><option value="reithotelmotel">REIT - Hotel &amp; Motel</option><option value="reitindustrial">REIT - Industrial</option><option value="reitmortgage">REIT - Mortgage</option><option value="reitoffice">REIT - Office</option><option value="reitresidential">REIT - Residential</option><option value="reitretail">REIT - Retail</option><option value="reitspecialty">REIT - Specialty</option><option value="rentalleasingservices">Rental &amp; Leasing Services</option><option value="residentialconstruction">Residential Construction</option><option value="resortscasinos">Resorts &amp; Casinos</option><option value="restaurants">Restaurants</option><option value="scientifictechnicalinstruments">Scientific &amp; Technical Instruments</option><option value="securityprotectionservices">Security &amp; Protection Services</option><option value="semiconductorequipmentmaterials">Semiconductor Equipment &amp; Materials</option><option value="semiconductors">Semiconductors</option><option value="shellcompanies">Shell Companies</option><option value="silver">Silver</option><option value="softwareapplication">Software - Application</option><option value="softwareinfrastructure">Software - Infrastructure</option><option value="solar">Solar</option><option value="specialtybusinessservices">Specialty Business Services</option><option value="specialtychemicals">Specialty Chemicals</option><option value="specialtyindustrialmachinery">Specialty Industrial Machinery</option><option value="specialtyretail">Specialty Retail</option><option value="staffingemploymentservices">Staffing &amp; Employment Services</option><option value="steel">Steel</option><option value="telecomservices">Telecom Services</option><option value="textilemanufacturing">Textile Manufacturing</option><option value="thermalcoal">Thermal Coal</option><option value="tobacco">Tobacco</option><option value="toolsaccessories">Tools &amp; Accessories</option><option value="travelservices">Travel Services</option><option value="trucking">Trucking</option><option value="uranium">Uranium</option><option value="utilitiesdiversified">Utilities - Diversified</option><option value="utilitiesindependentpowerproducers">Utilities - Independent Power Producers</option><option value="utilitiesregulatedelectric">Utilities - Regulated Electric</option><option value="utilitiesregulatedgas">Utilities - Regulated Gas</option><option value="utilitiesregulatedwater">Utilities - Regulated Water</option><option value="utilitiesrenewable">Utilities - Renewable</option><option value="wastemanagement">Waste Management</option><option value="modal">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">Index</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                        <select id="fs_idx" class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                            <option selected="selected" value="">Any</option><option value="sp500">S&amp;P 500</option><option value="dji">DJIA</option>
                                        </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;" >Years public</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <!-- <div id="fsm_geo" class="js-custom-modal" style="display: none">
                                                <table style="border-collapse: collapse; table-layout: fixed;" cellpadding="0">
                                                    <tbody><tr>
                                                        <td style="position: relative">
                                                            <input id="fsmi_geo" class="js-custom-modal-edit screener-input-text h" data-filter="geo" type="text" value="" style="width: 100%; padding-left: 2px; padding-right: 15px; cursor: pointer" readonly="">
                                                            <a href="#" class="js-custom-modal-edit" data-filter="geo" style="position: absolute; top: 4px; right: 4px"><img src="/gfx/btn_screener_edit.gif" border="0" class="block"></a>
                                                        </td>
                                                        <td width="13" style="padding-left: 3px">
                                                            <a href="#" class="js-custom-modal-hide screener-input-hide" data-filter="geo"><img src="/gfx/btn_screener_close.gif" border="0"></a>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </div> -->
                                            <select id="fs_ipodate" class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                                <option selected="selected" value="">Any</option><option value="today">Today</option><option value="yesterday">Yesterday</option><option value="prevweek">In the last week</option><option value="prevmonth">In the last month</option><option value="prevquarter">In the last quarter</option><option value="prevyear">In the last year</option><option value="prev2yrs">In the last 2 years</option><option value="prev3yrs">In the last 3 years</option><option value="prev5yrs">In the last 5 years</option><option value="more1">More than a year ago</option><option value="more5">More than 5 years ago</option><option value="more10">More than 10 years ago</option><option value="more15">More than 15 years ago</option><option value="more20">More than 20 years ago</option><option value="more25">More than 25 years ago</option><option value="modal">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3"  align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">Insider Ownership</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="" class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">% Float held by institutions</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_sh_float" class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                                <option selected="selected" value="">Any</option><option value="u1">Under 1M</option><option value="u5">Under 5M</option><option value="u10">Under 10M</option><option value="u20">Under 20M</option><option value="u50">Under 50M</option><option value="u100">Under 100M</option><option value="o1">Over 1M</option><option value="o2">Over 2M</option><option value="o5">Over 5M</option><option value="o10">Over 10M</option><option value="o20">Over 20M</option><option value="o50">Over 50M</option><option value="o100">Over 100M</option><option value="o200">Over 200M</option><option value="o500">Over 500M</option><option value="o1000">Over 1000M</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">% shares Outstanding</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_sh_outstanding" class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                                <option selected="selected" value="">Any</option><option value="u1">Under 1M</option><option value="u5">Under 5M</option><option value="u10">Under 10M</option><option value="u20">Under 20M</option><option value="u50">Under 50M</option><option value="u100">Under 100M</option><option value="o1">Over 1M</option><option value="o2">Over 2M</option><option value="o5">Over 5M</option><option value="o10">Over 10M</option><option value="o20">Over 20M</option><option value="o50">Over 50M</option><option value="o100">Over 100M</option><option value="o200">Over 200M</option><option value="o500">Over 500M</option><option value="o1000">Over 1000M</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">% Short Interest</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                        <select id="" class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                            <option selected="selected" value="">Any</option><option value="sp500">S&amp;P 500</option><option value="dji">DJIA</option>
                                        </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;" >Share Turnover</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <!-- <div id="fsm_geo" class="js-custom-modal" style="display: none">
                                                <table style="border-collapse: collapse; table-layout: fixed;" cellpadding="0">
                                                    <tbody><tr>
                                                        <td style="position: relative">
                                                            <input id="fsmi_geo" class="js-custom-modal-edit screener-input-text h" data-filter="geo" type="text" value="" style="width: 100%; padding-left: 2px; padding-right: 15px; cursor: pointer" readonly="">
                                                            <a href="#" class="js-custom-modal-edit" data-filter="geo" style="position: absolute; top: 4px; right: 4px"><img src="/gfx/btn_screener_edit.gif" border="0" class="block"></a>
                                                        </td>
                                                        <td width="13" style="padding-left: 3px">
                                                            <a href="#" class="js-custom-modal-hide screener-input-hide" data-filter="geo"><img src="/gfx/btn_screener_close.gif" border="0"></a>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </div> -->
                                            <select id="" class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                                <option selected="selected" value="">Any</option></select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">3yr Pirce return</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="" class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">5yr Price return</span>
                                        </td>
                                        <td width="10%" class="filters-cells ">
                                            <select id="" class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">Total Price return</span>
                                        </td>
                                        <td width="10%" class="filters-cells ">
                                            <select id="" class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">Average Volume</span>
                                        </td>
                                        <td width="10%" class="filters-cells ">
                                            <select id="fs_sh_avgvol" class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                                <option selected="selected" value="">Any</option><option value="u50">Under 50K</option><option value="u100">Under 100K</option><option value="u500">Under 500K</option><option value="u750">Under 750K</option><option value="u1000">Under 1M</option><option value="o50">Over 50K</option><option value="o100">Over 100K</option><option value="o200">Over 200K</option><option value="o300">Over 300K</option><option value="o400">Over 400K</option><option value="o500">Over 500K</option><option value="o750">Over 750K</option><option value="o1000">Over 1M</option><option value="o2000">Over 2M</option><option value="100to500">100K to 500K</option><option value="100to1000">100K to 1M</option><option value="500to1000">500K to 1M</option><option value="500to10000">500K to 10M</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">dividend yield</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_div" class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                                <option selected="selected" value="">Any</option><option value="none">None (0%)</option><option value="pos">Positive (&gt;0%)</option><option value="high">High (&gt;5%)</option><option value="veryhigh">Very High (&gt;10%)</option><option value="o1">Over 1%</option><option value="o2">Over 2%</option><option value="o3">Over 3%</option><option value="o4">Over 4%</option><option value="o5">Over 5%</option><option value="o6">Over 6%</option><option value="o7">Over 7%</option><option value="o8">Over 8%</option><option value="o9">Over 9%</option><option value="o10">Over 10%</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells" ></td>
                                        <td width="10%" class="filters-cells" ></td>
                                        <td width="10%" class="filters-cells" ></td>
                                        <td width="10%" class="filters-cells" ></td>
                                        <td width="10%" class="filters-cells" ></td>
                                        <td width="10%" class="filters-cells" ></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td></tr>
                        <tr class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel"><td colspan="30" valign="middle" align="center"  class="filters-border border">
                            <table width="100%" cellspacing="1" cellpadding="1" style="table-layout:fixed;" class="table table-hover table-row-dashed table-row-gray-300">
                                <tbody>
                                    <tr>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">P/E</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_pe"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="low">Low (&lt;15)</option><option value="profitable">Profitable (&gt;0)</option><option value="high">High (&gt;50)</option><option value="u5">Under 5</option><option value="u10">Under 10</option><option value="u15">Under 15</option><option value="u20">Under 20</option><option value="u25">Under 25</option><option value="u30">Under 30</option><option value="u35">Under 35</option><option value="u40">Under 40</option><option value="u45">Under 45</option><option value="u50">Under 50</option><option value="o5">Over 5</option><option value="o10">Over 10</option><option value="o15">Over 15</option><option value="o20">Over 20</option><option value="o25">Over 25</option><option value="o30">Over 30</option><option value="o35">Over 35</option><option value="o40">Over 40</option><option value="o45">Over 45</option><option value="o50">Over 50</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">PEG</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_peg"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="low">Low (&lt;1)</option><option value="high">High (&gt;2)</option><option value="u1">Under 1</option><option value="u2">Under 2</option><option value="u3">Under 3</option><option value="o1">Over 1</option><option value="o2">Over 2</option><option value="o3">Over 3</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">P/SALES</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_ps"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="low">Low (&lt;1)</option><option value="high">High (&gt;10)</option><option value="u1">Under 1</option><option value="u2">Under 2</option><option value="u3">Under 3</option><option value="u4">Under 4</option><option value="u5">Under 5</option><option value="u6">Under 6</option><option value="u7">Under 7</option><option value="u8">Under 8</option><option value="u9">Under 9</option><option value="u10">Under 10</option><option value="o1">Over 1</option><option value="o2">Over 2</option><option value="o3">Over 3</option><option value="o4">Over 4</option><option value="o5">Over 5</option><option value="o6">Over 6</option><option value="o7">Over 7</option><option value="o8">Over 8</option><option value="o9">Over 9</option><option value="o10">Over 10</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">P/B</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_pb"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="low">Low (&lt;1)</option><option value="high">High (&gt;5)</option><option value="u1">Under 1</option><option value="u2">Under 2</option><option value="u3">Under 3</option><option value="u4">Under 4</option><option value="u5">Under 5</option><option value="u6">Under 6</option><option value="u7">Under 7</option><option value="u8">Under 8</option><option value="u9">Under 9</option><option value="u10">Under 10</option><option value="o1">Over 1</option><option value="o2">Over 2</option><option value="o3">Over 3</option><option value="o4">Over 4</option><option value="o5">Over 5</option><option value="o6">Over 6</option><option value="o7">Over 7</option><option value="o8">Over 8</option><option value="o9">Over 9</option><option value="o10">Over 10</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">P/FCF</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_pfcf"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="low">Low (&lt;15)</option><option value="high">High (&gt;50)</option><option value="u5">Under 5</option><option value="u10">Under 10</option><option value="u15">Under 15</option><option value="u20">Under 20</option><option value="u25">Under 25</option><option value="u30">Under 30</option><option value="u35">Under 35</option><option value="u40">Under 40</option><option value="u45">Under 45</option><option value="u50">Under 50</option><option value="u60">Under 60</option><option value="u70">Under 70</option><option value="u80">Under 80</option><option value="u90">Under 90</option><option value="u100">Under 100</option><option value="o5">Over 5</option><option value="o10">Over 10</option><option value="o15">Over 15</option><option value="o20">Over 20</option><option value="o25">Over 25</option><option value="o30">Over 30</option><option value="o35">Over 35</option><option value="o40">Over 40</option><option value="o45">Over 45</option><option value="o50">Over 50</option><option value="o60">Over 60</option><option value="o70">Over 70</option><option value="o80">Over 80</option><option value="o90">Over 90</option><option value="o100">Over 100</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">EV/EBIT</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_evebit"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">EV/EBITDA</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_ebitda"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">EV/SALES</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_evsales"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">EV/GROSS PROFIT</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_evgrosss"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">EV/NET INCOME</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_evnet"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">ROIC</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="roic"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">ROA</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_roa"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="pos">Positive (&gt;0%)</option><option value="neg">Negative (&lt;0%)</option><option value="verypos">Very Positive (&gt;15%)</option><option value="veryneg">Very Negative (&lt;-15%)</option><option value="u-50">Under -50%</option><option value="u-45">Under -45%</option><option value="u-40">Under -40%</option><option value="u-35">Under -35%</option><option value="u-30">Under -30%</option><option value="u-25">Under -25%</option><option value="u-20">Under -20%</option><option value="u-15">Under -15%</option><option value="u-10">Under -10%</option><option value="u-5">Under -5%</option><option value="o5">Over +5%</option><option value="o10">Over +10%</option><option value="o15">Over +15%</option><option value="o20">Over +20%</option><option value="o25">Over +25%</option><option value="o30">Over +30%</option><option value="o35">Over +35%</option><option value="o40">Over +40%</option><option value="o45">Over +45%</option><option value="o50">Over +50%</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">ROE</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_roe"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="pos">Positive (&gt;0%)</option><option value="neg">Negative (&lt;0%)</option><option value="verypos">Very Positive (&gt;30%)</option><option value="veryneg">Very Negative (&lt;-15%)</option><option value="u-50">Under -50%</option><option value="u-45">Under -45%</option><option value="u-40">Under -40%</option><option value="u-35">Under -35%</option><option value="u-30">Under -30%</option><option value="u-25">Under -25%</option><option value="u-20">Under -20%</option><option value="u-15">Under -15%</option><option value="u-10">Under -10%</option><option value="u-5">Under -5%</option><option value="o5">Over +5%</option><option value="o10">Over +10%</option><option value="o15">Over +15%</option><option value="o20">Over +20%</option><option value="o25">Over +25%</option><option value="o30">Over +30%</option><option value="o35">Over +35%</option><option value="o40">Over +40%</option><option value="o45">Over +45%</option><option value="o50">Over +50%</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">ROCE</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_roce"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">ROTC</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_rotc"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">FCF MARGIN</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id=""  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">NET MARGIN</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_netmargin"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="pos">Positive (&gt;0%)</option><option value="neg">Negative (&lt;0%)</option><option value="veryneg">Very Negative (&lt;-20%)</option><option value="high">High (&gt;20%)</option><option value="u90">Under 90%</option><option value="u80">Under 80%</option><option value="u70">Under 70%</option><option value="u60">Under 60%</option><option value="u50">Under 50%</option><option value="u45">Under 45%</option><option value="u40">Under 40%</option><option value="u35">Under 35%</option><option value="u30">Under 30%</option><option value="u25">Under 25%</option><option value="u20">Under 20%</option><option value="u15">Under 15%</option><option value="u10">Under 10%</option><option value="u5">Under 5%</option><option value="u0">Under 0%</option><option value="u-10">Under -10%</option><option value="u-20">Under -20%</option><option value="u-30">Under -30%</option><option value="u-50">Under -50%</option><option value="u-70">Under -70%</option><option value="u-100">Under -100%</option><option value="o0">Over 0%</option><option value="o5">Over 5%</option><option value="o10">Over 10%</option><option value="o15">Over 15%</option><option value="o20">Over 20%</option><option value="o25">Over 25%</option><option value="o30">Over 30%</option><option value="o35">Over 35%</option><option value="o40">Over 40%</option><option value="o45">Over 45%</option><option value="o50">Over 50%</option><option value="o60">Over 60%</option><option value="o70">Over 70%</option><option value="o80">Over 80%</option><option value="o90">Over 90%</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">OPERATING MARGIN</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_opermargin"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="pos">Positive (&gt;0%)</option><option value="neg">Negative (&lt;0%)</option><option value="veryneg">Very Negative (&lt;-20%)</option><option value="high">High (&gt;25%)</option><option value="u90">Under 90%</option><option value="u80">Under 80%</option><option value="u70">Under 70%</option><option value="u60">Under 60%</option><option value="u50">Under 50%</option><option value="u45">Under 45%</option><option value="u40">Under 40%</option><option value="u35">Under 35%</option><option value="u30">Under 30%</option><option value="u25">Under 25%</option><option value="u20">Under 20%</option><option value="u15">Under 15%</option><option value="u10">Under 10%</option><option value="u5">Under 5%</option><option value="u0">Under 0%</option><option value="u-10">Under -10%</option><option value="u-20">Under -20%</option><option value="u-30">Under -30%</option><option value="u-50">Under -50%</option><option value="u-70">Under -70%</option><option value="u-100">Under -100%</option><option value="o0">Over 0%</option><option value="o5">Over 5%</option><option value="o10">Over 10%</option><option value="o15">Over 15%</option><option value="o20">Over 20%</option><option value="o25">Over 25%</option><option value="o30">Over 30%</option><option value="o35">Over 35%</option><option value="o40">Over 40%</option><option value="o45">Over 45%</option><option value="o50">Over 50%</option><option value="o60">Over 60%</option><option value="o70">Over 70%</option><option value="o80">Over 80%</option><option value="o90">Over 90%</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">GROSS MARGIN</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_grossmargin"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="pos">Positive (&gt;0%)</option><option value="neg">Negative (&lt;0%)</option><option value="high">High (&gt;50%)</option><option value="u90">Under 90%</option><option value="u80">Under 80%</option><option value="u70">Under 70%</option><option value="u60">Under 60%</option><option value="u50">Under 50%</option><option value="u45">Under 45%</option><option value="u40">Under 40%</option><option value="u35">Under 35%</option><option value="u30">Under 30%</option><option value="u25">Under 25%</option><option value="u20">Under 20%</option><option value="u15">Under 15%</option><option value="u10">Under 10%</option><option value="u5">Under 5%</option><option value="u0">Under 0%</option><option value="u-10">Under -10%</option><option value="u-20">Under -20%</option><option value="u-30">Under -30%</option><option value="u-50">Under -50%</option><option value="u-70">Under -70%</option><option value="u-100">Under -100%</option><option value="o0">Over 0%</option><option value="o5">Over 5%</option><option value="o10">Over 10%</option><option value="o15">Over 15%</option><option value="o20">Over 20%</option><option value="o25">Over 25%</option><option value="o30">Over 30%</option><option value="o35">Over 35%</option><option value="o40">Over 40%</option><option value="o45">Over 45%</option><option value="o50">Over 50%</option><option value="o60">Over 60%</option><option value="o70">Over 70%</option><option value="o80">Over 80%</option><option value="o90">Over 90%</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">ENITA MARGIN</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_enitamargin"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">Price/Cash</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_pc"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="low">Low (&lt;3)</option><option value="high">High (&gt;50)</option><option value="u1">Under 1</option><option value="u2">Under 2</option><option value="u3">Under 3</option><option value="u4">Under 4</option><option value="u5">Under 5</option><option value="u6">Under 6</option><option value="u7">Under 7</option><option value="u8">Under 8</option><option value="u9">Under 9</option><option value="u10">Under 10</option><option value="o1">Over 1</option><option value="o2">Over 2</option><option value="o3">Over 3</option><option value="o4">Over 4</option><option value="o5">Over 5</option><option value="o6">Over 6</option><option value="o7">Over 7</option><option value="o8">Over 8</option><option value="o9">Over 9</option><option value="o10">Over 10</option><option value="o20">Over 20</option><option value="o30">Over 30</option><option value="o40">Over 40</option><option value="o50">Over 50</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">Current Ratio</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_curratio"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="high">High (&gt;3)</option><option value="low">Low (&lt;1)</option><option value="u1">Under 1</option><option value="u0.5">Under 0.5</option><option value="o0.5">Over 0.5</option><option value="o1">Over 1</option><option value="o1.5">Over 1.5</option><option value="o2">Over 2</option><option value="o3">Over 3</option><option value="o4">Over 4</option><option value="o5">Over 5</option><option value="o10">Over 10</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">QUICK RATIO</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_quickratio"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">LT DEBIT/EQUITY</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_ltdebteq"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="high">High (&gt;0.5)</option><option value="low">Low (&lt;0.1)</option><option value="u1">Under 1</option><option value="u0.9">Under 0.9</option><option value="u0.8">Under 0.8</option><option value="u0.7">Under 0.7</option><option value="u0.6">Under 0.6</option><option value="u0.5">Under 0.5</option><option value="u0.4">Under 0.4</option><option value="u0.3">Under 0.3</option><option value="u0.2">Under 0.2</option><option value="u0.1">Under 0.1</option><option value="o0.1">Over 0.1</option><option value="o0.2">Over 0.2</option><option value="o0.3">Over 0.3</option><option value="o0.4">Over 0.4</option><option value="o0.5">Over 0.5</option><option value="o0.6">Over 0.6</option><option value="o0.7">Over 0.7</option><option value="o0.8">Over 0.8</option><option value="o0.9">Over 0.9</option><option value="o1">Over 1</option><option value="frange">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">DEBIT TO EQUITY</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_debteq"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="high">High (&gt;0.5)</option><option value="low">Low (&lt;0.1)</option><option value="u1">Under 1</option><option value="u0.9">Under 0.9</option><option value="u0.8">Under 0.8</option><option value="u0.7">Under 0.7</option><option value="u0.6">Under 0.6</option><option value="u0.5">Under 0.5</option><option value="u0.4">Under 0.4</option><option value="u0.3">Under 0.3</option><option value="u0.2">Under 0.2</option><option value="u0.1">Under 0.1</option><option value="o0.1">Over 0.1</option><option value="o0.2">Over 0.2</option><option value="o0.3">Over 0.3</option><option value="o0.4">Over 0.4</option><option value="o0.5">Over 0.5</option><option value="o0.6">Over 0.6</option><option value="o0.7">Over 0.7</option><option value="o0.8">Over 0.8</option><option value="o0.9">Over 0.9</option><option value="o1">Over 1</option><option value="frange">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">CAPEX TO REVENNU</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_capex"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">INVENTORY TURNOVER</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_inventory"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option></select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">ASSET TURNOVER</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_assetturn"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">BUY BACK YEILD</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_buyback"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option></select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">PAYOUT RATIO</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_payoutratio"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="none">None (0%)</option><option value="pos">Positive (&gt;0%)</option><option value="low">Low (&lt;20%)</option><option value="high">High (&gt;50%)</option><option value="o0">Over 0%</option><option value="o10">Over 10%</option><option value="o20">Over 20%</option><option value="o30">Over 30%</option><option value="o40">Over 40%</option><option value="o50">Over 50%</option><option value="o60">Over 60%</option><option value="o70">Over 70%</option><option value="o80">Over 80%</option><option value="o90">Over 90%</option><option value="o100">Over 100%</option><option value="u10">Under 10%</option><option value="u20">Under 20%</option><option value="u30">Under 30%</option><option value="u40">Under 40%</option><option value="u50">Under 50%</option><option value="u60">Under 60%</option><option value="u70">Under 70%</option><option value="u80">Under 80%</option><option value="u90">Under 90%</option><option value="u100">Under 100%</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="filters-cells" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">AQUISITIONS VS MARKET CAP</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_aquisition"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells"></td>
                                        <td width="10%" class="filters-cells"></td>
                                        <td width="10%" class="filters-cells"></td>
                                        <td width="10%" class="filters-cells"></td>
                                        <td width="10%" class="filters-cells"></td>
                                        <td width="10%" class="filters-cells"></td>
                                        <td width="10%" class="filters-cells"></td>
                                        <td width="10%" class="filters-cells"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td></tr>
                        <tr class="tab-pane fade" id="kt_tab_pane_3"><td colspan="30" valign="middle" align="center" class="filters-border border">
                            <table id="filter-table-filters" width="100%" cellspacing="1" cellpadding="1" style="table-layout:fixed;" class="table table-hover table-row-dashed table-row-gray-300">
                                <tbody>
                                    <tr>
                                        <td width="10%" class="filters-cells mt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">REVENNUE</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_revennue"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells mt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">SALES</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_sales"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells mt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">FCF</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_fcf"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells mt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">NET INCOME</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_netincome"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells mt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">DIVIDENDS</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_dividends"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">GROSS MARGIN</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_grossmargin"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="pos">Positive (&gt;0%)</option><option value="neg">Negative (&lt;0%)</option><option value="high">High (&gt;50%)</option><option value="u90">Under 90%</option><option value="u80">Under 80%</option><option value="u70">Under 70%</option><option value="u60">Under 60%</option><option value="u50">Under 50%</option><option value="u45">Under 45%</option><option value="u40">Under 40%</option><option value="u35">Under 35%</option><option value="u30">Under 30%</option><option value="u25">Under 25%</option><option value="u20">Under 20%</option><option value="u15">Under 15%</option><option value="u10">Under 10%</option><option value="u5">Under 5%</option><option value="u0">Under 0%</option><option value="u-10">Under -10%</option><option value="u-20">Under -20%</option><option value="u-30">Under -30%</option><option value="u-50">Under -50%</option><option value="u-70">Under -70%</option><option value="u-100">Under -100%</option><option value="o0">Over 0%</option><option value="o5">Over 5%</option><option value="o10">Over 10%</option><option value="o15">Over 15%</option><option value="o20">Over 20%</option><option value="o25">Over 25%</option><option value="o30">Over 30%</option><option value="o35">Over 35%</option><option value="o40">Over 40%</option><option value="o45">Over 45%</option><option value="o50">Over 50%</option><option value="o60">Over 60%</option><option value="o70">Over 70%</option><option value="o80">Over 80%</option><option value="o90">Over 90%</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">OPERATING MARGIN</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_opermargin"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="pos">Positive (&gt;0%)</option><option value="neg">Negative (&lt;0%)</option><option value="veryneg">Very Negative (&lt;-20%)</option><option value="high">High (&gt;25%)</option><option value="u90">Under 90%</option><option value="u80">Under 80%</option><option value="u70">Under 70%</option><option value="u60">Under 60%</option><option value="u50">Under 50%</option><option value="u45">Under 45%</option><option value="u40">Under 40%</option><option value="u35">Under 35%</option><option value="u30">Under 30%</option><option value="u25">Under 25%</option><option value="u20">Under 20%</option><option value="u15">Under 15%</option><option value="u10">Under 10%</option><option value="u5">Under 5%</option><option value="u0">Under 0%</option><option value="u-10">Under -10%</option><option value="u-20">Under -20%</option><option value="u-30">Under -30%</option><option value="u-50">Under -50%</option><option value="u-70">Under -70%</option><option value="u-100">Under -100%</option><option value="o0">Over 0%</option><option value="o5">Over 5%</option><option value="o10">Over 10%</option><option value="o15">Over 15%</option><option value="o20">Over 20%</option><option value="o25">Over 25%</option><option value="o30">Over 30%</option><option value="o35">Over 35%</option><option value="o40">Over 40%</option><option value="o45">Over 45%</option><option value="o50">Over 50%</option><option value="o60">Over 60%</option><option value="o70">Over 70%</option><option value="o80">Over 80%</option><option value="o90">Over 90%</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">EBIT</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_evebit"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">EBITDA</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_ebitda"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">EBITA</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_ebita"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">EQUITY</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_quity"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="pos">Positive (&gt;0%)</option><option value="neg">Negative (&lt;0%)</option><option value="high">High (&gt;50%)</option><option value="u90">Under 90%</option><option value="u80">Under 80%</option><option value="u70">Under 70%</option><option value="u60">Under 60%</option><option value="u50">Under 50%</option><option value="u45">Under 45%</option><option value="u40">Under 40%</option><option value="u35">Under 35%</option><option value="u30">Under 30%</option><option value="u25">Under 25%</option><option value="u20">Under 20%</option><option value="u15">Under 15%</option><option value="u10">Under 10%</option><option value="u5">Under 5%</option><option value="u0">Under 0%</option><option value="u-10">Under -10%</option><option value="u-20">Under -20%</option><option value="u-30">Under -30%</option><option value="u-50">Under -50%</option><option value="u-70">Under -70%</option><option value="u-100">Under -100%</option><option value="o0">Over 0%</option><option value="o5">Over 5%</option><option value="o10">Over 10%</option><option value="o15">Over 15%</option><option value="o20">Over 20%</option><option value="o25">Over 25%</option><option value="o30">Over 30%</option><option value="o35">Over 35%</option><option value="o40">Over 40%</option><option value="o45">Over 45%</option><option value="o50">Over 50%</option><option value="o60">Over 60%</option><option value="o70">Over 70%</option><option value="o80">Over 80%</option><option value="o90">Over 90%</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">ASSETS</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_assets"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option><option value="pos">Positive (&gt;0%)</option><option value="neg">Negative (&lt;0%)</option><option value="veryneg">Very Negative (&lt;-20%)</option><option value="high">High (&gt;25%)</option><option value="u90">Under 90%</option><option value="u80">Under 80%</option><option value="u70">Under 70%</option><option value="u60">Under 60%</option><option value="u50">Under 50%</option><option value="u45">Under 45%</option><option value="u40">Under 40%</option><option value="u35">Under 35%</option><option value="u30">Under 30%</option><option value="u25">Under 25%</option><option value="u20">Under 20%</option><option value="u15">Under 15%</option><option value="u10">Under 10%</option><option value="u5">Under 5%</option><option value="u0">Under 0%</option><option value="u-10">Under -10%</option><option value="u-20">Under -20%</option><option value="u-30">Under -30%</option><option value="u-50">Under -50%</option><option value="u-70">Under -70%</option><option value="u-100">Under -100%</option><option value="o0">Over 0%</option><option value="o5">Over 5%</option><option value="o10">Over 10%</option><option value="o15">Over 15%</option><option value="o20">Over 20%</option><option value="o25">Over 25%</option><option value="o30">Over 30%</option><option value="o35">Over 35%</option><option value="o40">Over 40%</option><option value="o45">Over 45%</option><option value="o50">Over 50%</option><option value="o60">Over 60%</option><option value="o70">Over 70%</option><option value="o80">Over 80%</option><option value="o90">Over 90%</option><option value="range">Custom (Elite only)</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">GOODWILL</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_goodwill"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">INVENTORY</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_inventory"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                        <td width="10%" class="filters-cells pt-3" align="center">
                                            <span class="screener-combo-title fs-5" style="cursor:pointer;">NET PPE</span>
                                        </td>
                                        <td width="10%" class="filters-cells">
                                            <select id="fs_fa_netppe"  class="screener-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                                <option selected="selected" value="">Any</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td></tr>
                        <tr><td>
                            <table id="kt_datatable_example_1" class="table table-row-bordered gy-5 ">
                                <thead>
                                    <tr class="fw-bold fs-6 text-muted" align="center">
                                        <th>No</th>
                                        <th>Ticker</th>
                                        <th>Company Name</th>
                                        <th>Sector</th>
                                        <th>Market Cap</th>
                                        <th>P/E</th>
                                        <th>P/FCF</th>
                                        <th>ROiC</th>
                                        <th>Net Margin</th>
                                        <th>Gross Margin</th>
                                        <th>Insider</th>
                                        <th>Ownership</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <tr>
                                        <td>1</td>
                                        <td>AA</td>
                                        <td>Agilent Technology</td>
                                        <td>41.93</td>
                                        <td>23.01</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>AAB</td>
                                        <td>Agilent Technology</td>
                                        <td>41.93</td>
                                        <td>23.01</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>63.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>AAS</td>
                                        <td>Agilent Technology</td>
                                        <td>41.93</td>
                                        <td>23.01</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>AA</td>
                                        <td>Agilent Technology</td>
                                        <td>41.93</td>
                                        <td>23.01</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>AAB</td>
                                        <td>Agilent Technology</td>
                                        <td>41.93</td>
                                        <td>23.01</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>63.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>AAS</td>
                                        <td>Agilent Technology</td>
                                        <td>41.93</td>
                                        <td>23.01</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>AA</td>
                                        <td>Agilent Technology</td>
                                        <td>41.93</td>
                                        <td>23.01</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>AAB</td>
                                        <td>Agilent Technology</td>
                                        <td>41.93</td>
                                        <td>23.01</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>63.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>AAS</td>
                                        <td>Agilent Technology</td>
                                        <td>41.93</td>
                                        <td>23.01</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>AA</td>
                                        <td>Agilent Technology</td>
                                        <td>41.93</td>
                                        <td>23.01</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>AAB</td>
                                        <td>Agilent Technology</td>
                                        <td>41.93</td>
                                        <td>23.01</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>63.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>AAS</td>
                                        <td>Agilent Technology</td>
                                        <td>41.93</td>
                                        <td>23.01</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>AA</td>
                                        <td>Agilent Technology</td>
                                        <td>41.93</td>
                                        <td>23.01</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>AAB</td>
                                        <td>Agilent Technology</td>
                                        <td>41.93</td>
                                        <td>23.01</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>63.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>AAS</td>
                                        <td>Agilent Technology</td>
                                        <td>41.93</td>
                                        <td>23.01</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                        <td>6.16</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td></tr>
                    </tbody>
                </table>
            </div>            
        </div>    
</x-app-layout>