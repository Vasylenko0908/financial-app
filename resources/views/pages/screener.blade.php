<x-app-layout>
    
        <div class="container col-md-10">
            <div class="row">
                <table cellpadding="0">
                    <tbody>
                        <tr>
                            <table id="filter-table-top" width="100%" cellspacing="0" cellpadding="0">
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
                                        <span class="body-combo-title" style="cursor:pointer;">Order:</span>
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
                                        <select id="orderDirSelect" style="width: 100%; visibility: visible;" class="body-combo-text form-select form-select-sm form-select-solid" data-control="select2">
                                            <option selected="selected" value="sector">Asc</option>
                                            <option value="sector">Desc</option>
                                        </select>
                                    </td>
                                    <td align="center" width="6%">
                                        <span class="body-combo-title" style="cursor:pointer;">Signal:</span>
                                    </td>
                                    <td align="left" width="15%">
                                        <select id="signalSelect" style="width: 100%; visibility: visible;" class="body-combo-text form-select form-select-sm form-select-solid" data-control="select2" >
                                            <option selected="selected" value="">None (all stocks)</option>
                                            <option value="ta_topgainers">Top Gainers</option>
                                            <option value="ta_toplosers">Top Losers</option>
                                            <option value="ta_newhigh">New High</option>
                                            <option value="ta_newlow">New Low</option>
                                            <option value="ta_mostvolatile">Most Volatile</option>
                                            <option value="ta_mostactive">Most Active</option>
                                            <option value="ta_unusualvolume">Unusual Volume</option>
                                            <option value="ta_overbought">Overbought</option>
                                            <option value="ta_oversold">Oversold</option>
                                            <option value="n_downgrades">Downgrades</option>
                                            <option value="n_upgrades">Upgrades</option>
                                            <option value="n_earningsbefore">Earnings Before</option>
                                            <option value="n_earningsafter">Earnings After</option>
                                            <option value="it_latestbuys">Recent Insider Buying</option>
                                            <option value="it_latestsales">Recent Insider Selling</option>
                                            <option value="n_majornews">Major News</option>
                                            <option value="ta_p_horizontal">Horizontal S/R</option>
                                            <option value="ta_p_tlresistance">TL Resistance</option>
                                            <option value="ta_p_tlsupport">TL Support</option>
                                            <option value="ta_p_wedgeup">Wedge Up</option>
                                            <option value="ta_p_wedgedown">Wedge Down</option>
                                            <option value="ta_p_wedgeresistance">Triangle Ascending</option>
                                            <option value="ta_p_wedgesupport">Triangle Descending</option>
                                            <option value="ta_p_wedge">Wedge</option>
                                            <option value="ta_p_channelup">Channel Up</option>
                                            <option value="ta_p_channeldown">Channel Down</option>
                                            <option value="ta_p_channel">Channel</option>
                                            <option value="ta_p_doubletop">Double Top</option>
                                            <option value="ta_p_doublebottom">Double Bottom</option>
                                            <option value="ta_p_multipletop">Multiple Top</option>
                                            <option value="ta_p_multiplebottom">Multiple Bottom</option>
                                            <option value="ta_p_headandshoulders">Head &amp; Shoulders</option>
                                            <option value="ta_p_headandshouldersinv">Head &amp; Shoulders Inverse</option>
                                        </select>
                                    </td>
                                    <td align="center" width="6%">
                                        <span class="body-combo-title" style="cursor:pointer;">Tickers:</span></td>
                                    <td align="left" width="26%">
                                        <table width="100%" cellpadding="0" cellspacing="0" style="table-layout:fixed;">
                                        <tbody>
                                            <tr>
                                                <td align="left" width="100%">
                                                    <input id="tickersInput" class="body-combo-text" style="width:100%" value="" type="text">
                                                </td>
                                                
                                            </tr>
                                        </tbody></table>
                                    </td>
                                    <td>
                                        <input type="button" value=">" data-boxover="Submit tickers" class="screener-combo-button btn btn-white p-2 mr-2" style="cursor:pointer">
                                    </td>
                                    <td align="left"><img src="gfx/nic2x2.gif" style="width:2px;height:22px" alt="" border="0"></td>
                                    <td align="left">
                                        <a href="" class="screener-filter_inv btn btn-primary py-2">Filters <i class="arrow-up"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </tr>
                    </tbody>
                </table>
            </div>            
        </div>    
</x-app-layout>