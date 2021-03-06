@extends('mobile.master')

@section('content')        
        
        <div class="all-elements">

            @include ('mobile.sidebar')
        
            <div id="content" class="page-content">
        
            @include ('mobile.nav')	
                        
            <div>
                <div id="ctl00_UpdatePanel1">
            
               
                <div class="container bg-dark">
                    <h2>Promotions</h2>
                    
                    <ul id="filterOptions">
                        <li class="active"><a href="#" class="all">All</a></li>
                        <li><a href="#" class="latest">Latest</a></li>
                        <!--<li><a href="#" class="worldcup">World Cup</a></li>-->
                        <li><a href="#" class="new">New Member</a></li>
                        <li><a href="#" class="deposit">Deposit Bonus</a></li>
                        <!--<li><a href="#" class="rebate">Rebate</a></li>-->
                        <li><a href="#" class="special">Special</a></li>
                        <li><a href="#" class="slot">Slots</a></li>
                    </ul>
        
                    <div id="ourHolder" class="promo-box">
                    
                        <div class="promo new slot">
                            <h3><img src="{{ asset('mobile/images/en/bnr1.jpg') }}" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>New Member: Welcome 1<sup>st</sup> Deposit Bonus 30% up to MYR 3,000</h4>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                    <tr>
                                        <th>MIN. FIRST DEPOSIT AMOUNT (RM) </th>
                                        <th>BONUS (%)</th>
                                        <th>MAXIMUM BONUS (RM)</th>
                                        <th>ROLLOVER REQUIREMENT</th>
                                    </tr>
                                    <tr>
                                        <td>100</td>
                                        <td>30%</td>
                                        <td>3000</td>
                                        <td>x15</td>
                                    </tr>
                                </table>
                                
                                Terms & Conditions:
                                <ol>
                                    <li>SBdots will be giving away Welcome Bonus 30% for first time deposit of new registered member on our site with minimum deposit MYR100.</li>
                                    <li>
                                        Member only can withdraw their deposit bonus after achieve the required rollover of deposit amount and bonus.
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                                <tr>
                                                    <th rowspan="3">Example</th>
                                                    <td>First Deposit</td>
                                                    <td>RM100</td>
                                                </tr>
                                                <tr>
                                                    <td>Bonus</td>
                                                    <td>RM30</td>
                                                </tr>
                                                <tr>
                                                    <td>Rollover Requirement </td>
                                                    <td>(100 + 30) x 15 = RM1950</td>
                                                </tr>
                                            </table>
                                    </li>
                                    <li>Any bet places on the two opposite sides or draw will not be taken into the calculation or count towards any rollover requirement. </li>
                                    <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
                                    <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount) </li>
                                    <li>This promotion is applicable for all GAMES including slots like SCR888, Mega888, Club Suncity, 918Kiss and Other Platform Slots games.</li>
                                    <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
                                </ol>
                            </div>
                        </div>
                        
                        <div class="promo new latest">
                            <h3><img src="{{ asset('mobile/images/en/bnr2.jpg') }}" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>New Member 2 : Deposit MYR100 get MYR200</h4>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                    <tr>
                                        <th>MIN. FIRST DEPOSIT AMOUNT (RM) </th>
                                        <th>MAX BONUS (RM)</th>
                                        <th>ROLLOVER REQUIREMENT</th>
                                    </tr>
                                    <tr>
                                        <td>100</td>
                                        <td>100</td>
                                        <td>x10</td>
                                    </tr>
                                </table>
                                
                                Terms & Conditions:
                                <ol>
                                    <li>SBdots will be giving away first deposit bonus of total RM100 when member deposit RM100 to SBDots for the first time.</li>
                                    <li>
                                        Member only can withdraw their deposit bonus after achieving the required rollover of deposit amount and bonus.
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                                <tr>
                                                    <th rowspan="3">Example</th>
                                                    <td>First Deposit</td>
                                                    <td>RM100</td>
                                                </tr>
                                                <tr>
                                                    <td>Bonus</td>
                                                    <td>RM100</td>
                                                </tr>
                                                <tr>
                                                    <td>Rollover Requirement </td>
                                                    <td>(100 + 100) x 10 = RM2000</td>
                                                </tr>
                                            </table>
                                    </li>
                                    <li>Any bet places on the two opposite sides or draw will not be taken into the calculation or count towards any rollover requirement. </li>
                                    <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
                                    <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount) </li>
                                    <li>This promotion is only applicable for Sportsbook & Live Casino Games.</li>
                                    <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
                                </ol>
                            </div>
                        </div>
                        
                        <div class="promo new latest slot">
                            <h3><img src="{{ asset('mobile/images/en/new_member_30_get_90_slot_bonus.jpg') }}" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>New Member for SLOTS: Deposit MYR30 get MYR90</h4>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                    <tr>
                                        <th>First Deposit Amount (RM)</th>
                                        <th>Total Bonus & Deposit Amount (RM)</th>
                                        <th>Winning Requirement</th>
                                        <th>Max Withdrawal (RM)</th>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>90</td>
                                        <td>5x</td>
                                        <td>500</td>
                                    </tr>
                                </table>
                                
                                Terms & Conditions:
                                <ol>
                                    <li>Sbdot will be giving away total RM90 for their new registered member that have deposited RM30 for slots only.</li>
                                    <li>
                                        Member only can withdraw their deposit bonus after achieving the required winning amount of deposit & bonus: 
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                                <tr>
                                                    <th rowspan="3">Example</th>
                                                    <td>Deposit</td>
                                                    <td>RM30</td>
                                                </tr>
                                                <tr>
                                                    <td>Deposit & Bonus</td>
                                                    <td>RM90</td>
                                                </tr>
                                                <tr>
                                                    <td>Winning Requirement</td>
                                                    <td>(30 + 60) x 5 = RM450</td>
                                                </tr>
                                            </table>
                                    </li>
                                    <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
                                    <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount)</li>
                                    <li>This promotion is only applicable for SCR888, 918kiss and Mega888 or other slot games only.</li>
                                    <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>																									
                                </ol>
                            </div>
                        </div>
                        
                        <div class="promo deposit latest">
                            <h3><img src="{{ asset('mobile/images/en/bnr3.jpg') }}" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>Existing Member: 5% Deposit Bonus</h4>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                    <tr>
                                        <th>MIN. DEPOSIT AMOUNT (RM) </th>
                                        <th>BONUS</th>
                                        <th>MAXIMUM BONUS (RM)</th>
                                        <th>ROLLOVER REQUIREMENT</th>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>5%</td>
                                        <td>RM1000</td>
                                        <td>x5</td>
                                    </tr>
                                </table>
                                
                                Terms & Conditions:
                                <ol>
                                    <li>SBdots will be giving away extra 5% deposit bonus to all existing member deposit.</li>
                                    <li>
                                        Member only can withdraw their deposit bonus after achieving the required rollover of deposit amount and bonus.
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                                <tr>
                                                    <th rowspan="3">Example</th>
                                                    <td>First Deposit</td>
                                                    <td>RM100</td>
                                                </tr>
                                                <tr>
                                                    <td>Bonus</td>
                                                    <td>RM5</td>
                                                </tr>
                                                <tr>
                                                    <td>Rollover Requirement </td>
                                                    <td>(100 + 5) x 5 = RM525</td>
                                                </tr>
                                            </table>
                                    </li>
                                    <li>Any bet places on the two opposite sides or draw will not be taken into the calculation or count towards any rollover requirement. </li>
                                    <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
                                    <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount) </li>
                                    <li>This promotion is applicable for all GAMES including slots like SCR888, Mega888, Club Suncity, 918Kiss and Other Platform Slots games.</li>
                                    <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
                                </ol>
                            </div>
                        </div>

                        <div class="promo deposit latest">
                            <h3><img src="{{ asset('mobile/images/en/banner-2_em-sportdbook10.jpg') }}" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>Existing Member: 10% Sports Book Deposit Bonus Only</h4>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                    <tr>
                                        <th>MIN. DEPOSIT AMOUNT (RM) </th>
                                        <th>BONUS</th>
                                        <th>MAXIMUM BONUS (RM)</th>
                                        <th>WINNING REQUIREMENT</th>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>10%</td>
                                        <td>RM1000</td>
                                        <td>x5</td>
                                    </tr>
                                </table>
                                
                                Terms & Conditions:
                                <ol>
                                    <li>SBdots will be giving away extra 10% deposit bonus to all existing member deposit.</li>
                                    <li>
                                        Member only can withdraw their deposit bonus after achieving the required rollover of deposit amount and bonus.
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                            <tr>
                                                <th rowspan="3">Example</th>
                                                <td>First Deposit</td>
                                                <td>RM100</td>
                                            </tr>
                                            <tr>
                                                <td>Bonus</td>
                                                <td>RM10</td>
                                            </tr>
                                            <tr>
                                                <td>Winning Requirement </td>
                                                <td>(100 + 10) x 5 = RM550</td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li>Any bet places on the two opposite sides or draw will not be taken into the calculation or count towards any rollover requirement.</li>
                                    <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all bonus and winning credit will be confiscated.</li>
                                    <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can losses the full bonus amount)</li>
                                    <li>This promotion is applicable for all Sports Book Platform only.</li>
                                    <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>
                                    <li>The bonus amount and all winnings will be forfeited if the deposit and bonus rollover requirement are not met within 30 days of bonus credit.</li>
                                    <li>SBdot reserves the rights to decline the payout and freeze the account for investigation if there are any form of suspicious activities and third-party software found. All payout shall be void as well.</li>
                                </ol>
                            </div>
                        </div>

                        <div class="promo deposit latest slot">
                            <h3><img src="{{ asset('mobile/images/en/Casino-Floor_em-slot-game.jpg') }}" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>Existing Member: 8% 918Kiss Deposit Bonus</h4>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                    <tr>
                                        <th>MIN. DEPOSIT AMOUNT (RM) </th>
                                        <th>BONUS</th>
                                        <th>MAXIMUM BONUS (RM)</th>
                                        <th>WINNING REQUIREMENT</th>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>8%</td>
                                        <td>N/A</td>
                                        <td>x3</td>
                                    </tr>
                                </table>
                                
                                Terms & Conditions:
                                <ol>
                                    <li>SBdot will be giving away extra 8% deposit bonus to their existing member deposit for slot games only.</li>
                                    <li>
                                        Member only can withdraw their deposit bonus after achieving the required winning of deposit amount and bonus:
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table">
                                            <tr>
                                                <th rowspan="3">Example</th>
                                                <td>First Deposit</td>
                                                <td>RM100</td>
                                            </tr>
                                            <tr>
                                                <td>Bonus</td>
                                                <td>RM8</td>
                                            </tr>
                                            <tr>
                                                <td>Winning Requirement </td>
                                                <td>(100 + 8) x 3 = RM324</td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all bonus and winning credit will be confiscated.</li>
                                    <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can losses the full bonus amount)</li>
                                    <li>This promotion is only applicable for 918kiss Platform only.</li>
                                    <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>
                                    <li>The bonus amount and all winnings will be forfeited if the deposit and bonus rollover requirement are not met within 30 days of bonus credit.</li>
                                    <li>SBdot reserves the rights to decline the payout and freeze the account for investigation if there are any form of suspicious activities and third-party software found. All payout shall be void as well.</li>
                                </ol>
                            </div>
                        </div>

                        <!--<div class="promo deposit latest slot">
                            <h3><img src="{{-- asset('mobile/images/en/5_slots_deposit_bonus.jpg') --}}" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>Existing Member: 5% Deposit Bonus for Slots</h4>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                    <tr>
                                        <th>MIN. DEPOSIT AMOUNT (RM) </th>
                                        <th>BONUS</th>
                                        <th>MAXIMUM BONUS (RM)</th>
                                        <th>WINNING REQUIREMENT</th>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>5%</td>
                                        <td>N/A</td>
                                        <td>x2</td>
                                    </tr>
                                </table>
                                
                                Terms & Conditions:
                                <ol>
                                    <li>Sbdot will be giving away extra 5% deposit bonus to their existing member deposit for slot games only.</li>
                                    <li>
                                        Member only can withdraw their deposit bonus after achieving the required winning of deposit amount and bonus:
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                            <tr>
                                                <th rowspan="3">Example</th>
                                                <td>First Deposit</td>
                                                <td>RM100</td>
                                            </tr>
                                            <tr>
                                                <td>Bonus</td>
                                                <td>RM5</td>
                                            </tr>
                                            <tr>
                                                <td>Winning Requirement </td>
                                                <td>(100 + 5) x 2 = RM210</td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
                                    <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount)</li>
                                    <li>This promotion is only applicable for SCR888, 918kiss and Mega888 or other slot games only.</li>
                                    <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>																							
                                </ol>
                            </div>
                        </div>

                        <div class="promo deposit latest slot">
                            <h3><img src="{{-- asset('mobile/images/en/existing_member_10_slot.jpg') --}}" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>Existing Member: 10% Deposit Bonus for Slots</h4>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                    <tr>
                                        <th>MIN. DEPOSIT AMOUNT (RM) </th>
                                        <th>BONUS</th>
                                        <th>MAXIMUM BONUS (RM)</th>
                                        <th>WINNING REQUIREMENT</th>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>10%</td>
                                        <td>N/A</td>
                                        <td>x3</td>
                                    </tr>
                                </table>
                                
                                Terms & Conditions:
                                <ol>
                                    <li>Sbdot will be giving away extra 10% deposit bonus to their existing member deposit for slot games only.</li>
                                    <li>
                                        Member only can withdraw their deposit bonus after achieving the required winning of deposit amount and bonus:
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                            <tr>
                                                <th rowspan="3">Example</th>
                                                <td>First Deposit</td>
                                                <td>RM100</td>
                                            </tr>
                                            <tr>
                                                <td>Bonus</td>
                                                <td>RM10</td>
                                            </tr>
                                            <tr>
                                                <td>Winning Requirement </td>
                                                <td>(100 + 10) x 3 = RM330</td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
                                    <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount)</li>
                                    <li>This promotion is only applicable for SCR888, 918kiss and Mega888 or other slot games only.</li>
                                    <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>																							
                                </ol>
                            </div>
                        </div> -->
                        
                        <div class="promo rebate special">
                            <h3><img src="{{ asset('mobile/images/en/bnr5.jpg') }}" class="img-responsive width-full"/></h3>
                            <div class="promo-font">
                                <h4>Existing Member: 1% Weekly Rebate Bonus for Live Casino and Sports book only</h4>	
                                Terms & Conditions:
                                <ol>
                                    <li>Each existing members of SBdot are allowed to claim 1 time rescue bonus on each day. (Based on total deposit & loss of the day)</li>
                                    <li>The promotion cannot be combine with other promotion.</li>
                                    <li>Before you claiming the Weekly Rebate Bonus should have above 10000 rollovers on Live Casino or Sportsbook.</li>
                                    <li>Weekly Rebate Bonus will start every Monday to Sunday. (Member need to come by the end of the current week and within 7days on our live chat for claim the weekly rebate bonus) Only Live Dealer & Sportsbook Game Turnover will be counted, Other games played will be disqualified from this promotion.</li>
                                    <li>Example: Rescue Bonus RM10</li>
                                    <li>Rollover: RM10 x 5 Rollover = 50</li>
                                    <li>SBdot reserves the rights to decline the payout and freeze the account for investigation if there are any form of suspicious activities and third-party software found. All payout shall be void as well.</li>
                                    <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all bonus and winning credit will be not given and the qualification of the players will be waived.</li>
                                    <li>Our company has the right to modify, change or terminate the promotion without prior notice.</li>
                                    <li>The bonus amount and all winnings will be forfeited if the deposit and bonus rollover requirement are not met within 30 days of bonus credit.</li>
                                    <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can losses the full bonus amount).</li>
                                </ol>
                                </div>						
                            </div>

                            <!--<div class="promo special">
                                <h3><img src="{{ asset('mobile/images/en/bnr6.jpg') }}" class="img-responsive width-full"/></h3>
                                <div class="promo-font">
                                    <h4>Special: 10% Extra Winning Bonus</h4>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                        <tr>
                                            <th>REQUIREMENT</th>
                                            <th>BONUS AMOUNT (%)</th>
                                        </tr>
                                        <tr>
                                            <td>5 times of Deposit amount + Bonus Amount</td>
                                            <td>5%</td>
                                        </tr>
                                        <tr>
                                            <td>10 times of Deposit amount + Bonus Amount</td>
                                            <td>10%</td>
                                        </tr>
                                    </table>
                                    
                                    Terms & Conditions:
                                    <ol>
                                        <li>All members are that taken 5% deposit bonus are entitled for this special bonus. If members are able to win up to 5 times of the deposit amount, they will be eligible to receive extra 5% winning bonus during their withdrawal. If members are able to win up to 10 times of their deposit amount, they will eligible to receive extra 10% winning bonus during withdrawal.</li>
                                        <li>Example: 
                                            <ol type="a">
                                                <li>Deposit = RM500</li> 
                                                <li>Bonus taken = 5% daily deposit</li> 
                                                <li>Total Winning Withdrawal = (RM500 + RM25) x 10 times = RM5,250</li> 
                                                <li>Extra Bonus = RM525</li> 
                                            </ol>
                                        </li>
                                        <li>This promotion cannot be combined with any other existing promotion. Once member have chosen any bonus within the week, they will not be entitled to claim this special bonus.</li>
                                        <li>Any bet place on two opposite sides or draw will not be taken into the calculation or count towards any rollover requirement.</li> 
                                        <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
                                        <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirements are no longer applicable to subsequent deposits (Credits lower than RM10 that mean member has losses the full bonus amount).</li>
                                        <li>This promotion is only applicable for Sportsbook & Live Casino Games.</li> 
                                        <li>Our company has the right to modify, change or terminate the promotion without prior notice.</li>  															
                                    </ol>
                                </div>
                            </div> -->

                            <!--<div class="promo worldcup">
                                <h3><img src="{{ asset('mobile/images/en/wc-1.jpg') }}" class="img-responsive width-full"/></h3>
                                <div class="promo-font">
                                    <h4>Existing Member (World Cup Edition): World Cup Champion Guessing Bonus up to 1,288!</h4>
                                            
                                    Terms & Conditions:
                                    <ol>
                                        <li>Promotion Periods: 16/05/2018 – 13/06/2018</li>
                                        <li>During the promotion periods (15/05 – 12/06), Members are entitled to submit one (1) guessing on the champion team they predict, but with a min. deposit of at least 15 times & min. of RM3,000 during the promotion periods and prizes amount as below table:
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                                <tr>
                                                    <th>Min. Accumulated Deposit Amount during the periods</th>
                                                    <th>Prizes Rewards if successful predict the Champion Team</th>
                                                    <th>Turnover Requirement of the bonus </th>
                                                </tr>
                                                <tr>
                                                    <td>RM 3,000</td>
                                                    <td>188</td>
                                                    <td>1x</td>
                                                </tr>
                                                <tr>
                                                    <td>RM 15,000</td>
                                                    <td>388</td>
                                                    <td>1x</td>
                                                </tr>
                                                <tr>
                                                    <td>RM 50,000</td>
                                                    <td>1288</td>
                                                    <td>1x</td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li>Example Scenario (A):
                                            <ul style="list-style-type: lower-alpha;">
                                                <li>Player (A) has guess the champion team (England) to be the champion of the this World Cup Fifa 2018 and also successfully deposit 15 times during the periods 16/05 – 12/06, and the total accumulated deposit amount is RM15,000</li>
                                                <li>On the July 15, 2018 when the Champion team is England, player (A) will be rewarded with a RM688 free bonus on his preferred product account and subjected to only 1 times turnover requirement.</li>																
                                            </ul>
                                        </li> 
                                        <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be not given and the qualification of the players will be waived.</li> 
                                        <li>Our company has the right to modify, change or terminate the promotion without prior notice.</li>  														
                                    </ol>
                                </div>
                            </div>

                            <div class="promo worldcup">
                                <h3><img src="{{ asset('mobile/images/en/wc-2.jpg') }}" class="img-responsive width-full"/></h3>
                                <div class="promo-font">
                                    <h4>Existing Member(World Cup Edition): 25% Sportsbook Deposit Bonus (WORLD CUP MATCHES ONLY)</h4>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                        <tr>
                                            <th>MIN. DEPOSIT AMOUNT (RM) </th>
                                            <th>BONUS</th>
                                            <th>MAXIMUM BONUS (RM)</th>
                                            <th>ROLLOVER REQUIREMENT</th>
                                        </tr>
                                        <tr>
                                            <td>100</td>
                                            <td>25%</td>
                                            <td>500</td>
                                            <td>x12</td>
                                        </tr>
                                    </table>
                                    
                                    Terms & Conditions:
                                    <ol>
                                        <li>SBdots will be giving away extra 25% deposit bonus to all existing member deposit.</li>
                                        <li>
                                            Member only can withdraw their deposit bonus after achieving the required rollover of deposit amount and bonus.
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                                    <tr>
                                                        <th rowspan="3">Example</th>
                                                        <td>First Deposit</td>
                                                        <td>RM100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bonus</td>
                                                        <td>RM25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rollover Requirement </td>
                                                        <td>(100 + 25) x 12 = RM1500</td>
                                                    </tr>
                                                </table>
                                        </li>
                                        <li>Any bet places on the two opposite sides or draw will not be taken into the calculation or count towards any rollover requirement. </li>
                                        <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
                                        <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount) </li>
                                        <li>This promotion is applicable for Sportsbook betting (World Cup Matches Only)</li>
                                        <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
                                    </ol>
                                </div>
                            </div>

                            <div class="promo worldcup">
                                <h3><img src="{{ asset('mobile/images/en/wc-3.jpg') }}" class="img-responsive width-full"/></h3>
                                <div class="promo-font">
                                    <h4>Existing Member(World Cup Edition): Deposit, Choose & Win up to RM288 Daily!</h4>
                                            
                                    Terms & Conditions:
                                    <ol>
                                        <li>Promotion Periods: 14/06/2018 – 15/07/2018</li>
                                        <li>During the promotion periods, Members who’ve successfully deposit are able to pick a winning team on the matches for the following (1) day.
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                                <tr>
                                                    <th>Deposit Amount (per transactions)</th>
                                                    <th>Prizes Rewards if won</th>
                                                    <th>Turnover Requirement of the bonus</th>
                                                </tr>
                                                <tr>
                                                    <td>RM 100 - RM 999</td>
                                                    <td>18</td>
                                                    <td>1x</td>
                                                </tr>
                                                <tr>
                                                    <td>RM 1,000 - RM 4,999</td>
                                                    <td>38</td>
                                                    <td>1x</td>
                                                </tr>
                                                <tr>
                                                    <td>RM 5,000 and above</td>
                                                    <td>288</td>
                                                    <td>1x</td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li>Example Scenario (A):
                                            <ul style="list-style-type: lower-alpha;">
                                                <li>Player (A) has deposited an amount of RM 500 on 15/06/2018, player (A) will be entitled to guess for a matches he predict within the day or next day itself (matches must be min. 5 hours from the deposit time)</li>
                                                <li>Player (A) team guessing are correct, player (A) will received extra RM18 on the deposited product account subjected to only 1 times turnover requirement.</li>																															
                                            </ul>
                                        </li> 
                                        <li>Members are only entitled to 1 guess of team per day only.</li> 
                                        <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be not given and the qualification of the players will be waived.</li>  	
                                        <li>Our company has the right to modify, change or terminate the promotion without prior notice.</li>													
                                    </ol>
                                </div>
                            </div> -->

                            <div class="promo special">
                                <h3><img src="{{ asset('mobile/images/en/monthly-free-bonus.jpg') }}" class="img-responsive width-full"/></h3>
                                <div class="promo-font">
                                    <h4>Existing Member: MONTHLY FREE BONUS</h4>
                                            
                                    Terms & Conditions:
                                    <ol>
                                        <li>Each existing members of sbdot can claim FREE BONUS during the 1st of every each month. Total deposit on the previous month will be take into the calculation of the bonus given.
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                                <tr>
                                                    <th>Total Deposit Month (RM)</th>
                                                    <th>Bonus</th>
                                                    <th>Rollover</th>
                                                </tr>
                                                <tr>
                                                    <td>RM 20,000 - RM 39,999</td>
                                                    <td>188</td>
                                                    <td>5x</td>
                                                </tr>
                                                <tr>
                                                    <td>RM 40,000 - RM 59,999</td>
                                                    <td>388</td>
                                                    <td>6x</td>
                                                </tr>
                                                <tr>
                                                    <td>RM 60,000 - RM 79,999</td>
                                                    <td>588</td>
                                                    <td>8x</td>
                                                </tr>
                                                <tr>
                                                    <td>RM 80,000 or Above</td>
                                                    <td>888</td>
                                                    <td>10x</td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li>Amount of free bonus is according to your total deposit amount during the previous month, as shown in table above.</li>
                                        <li>Rollover must be met before withdrawals can be processed.
                                            <ul style="list-style-type: lower-alpha;">
                                                <li>Example: FREE BONUS RM88</li>
                                                <li>Rollover: RM88 x 5 = 440</li>																															
                                            </ul>
                                        </li> 
                                        <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be not given and the qualification of the players will be waived.</li> 
                                        <li>Our company has the right to modify, change or terminate the promotion without prior notice.</li>												
                                    </ol>
                                </div>
                            </div>

                            <div class="promo special latest">
                                <h3><img src="{{ asset('mobile/images/en/7_days_attendances_bonus.jpg') }}" class="img-responsive width-full"/></h3>
                                <div class="promo-font">
                                    <h4>Existing Member: Perfect Attendance Bonus up to 7 days</h4>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                        <tr>
                                            <th>Attendances Day (RM)</th>
                                            <th>Total Accu. Deposit (RM)</th>
                                            <th>Bonus (RM)</th>
                                            <th>Turnover Requirement</th>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>300</td>
                                            <td>10</td>
                                            <td>x1</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>500</td>
                                            <td>28</td>
                                            <td>x1</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>800</td>
                                            <td>58</td>
                                            <td>x3</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>1200</td>
                                            <td>88</td>
                                            <td>x5</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>1600</td>
                                            <td>118</td>
                                            <td>x7</td>
                                        </tr>
                                    </table>

                                    Terms & Conditions:
                                    <ol>
                                        <li>To claim the perfect attendance bonus, member must make deposits to their player accounts for a minimum of 3 consecutive days (up to 7 consecutive days) as refer to table above.</li>
                                        <li>This promotion will be able to claim once per week.</li>
                                        <li>This promotion will be automatically credit into members account. If member did not receive the bonus, simply just notified the customer services via the livechat, whatsapp or wechat to redeem the bonus.</li>
                                        <li>Accumulated Deposit will be reset on every Monday and start from 0 again.</li>
                                        <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
                                        <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount)</li>
                                        <li>This promotion is only applicable for SCR888, 918kiss and Mega888 or other slot games only.</li>
                                        <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>														
                                    </ol>
                                </div>
                            </div>

                            <div class="promo special">
                                <h3><img src="{{ asset('mobile/images/en/baccarat-winning-streak.jpg') }}" class="img-responsive width-full"/></h3>
                                <div class="promo-font">
                                    <h4>Baccarat Winning Streak Bonus</h4>
                                            
                                    Terms & Conditions:
                                    <ol>
                                        <li>Each existing members of Sbdot are allowed to claim an additional special bonus if they make a streak win during the gameplay of our baccarat game.
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="promo-table" data-snap-ignore="true">
                                                <tr>
                                                    <th>Total Win Streak /Day</th>
                                                    <th>Bonus Percentage</th>
                                                    <th>Max Bonus (RM)</th>
                                                </tr>
                                                <tr>
                                                    <td>4 – 7 games</td>
                                                    <td>10%</td>
                                                    <td>188</td>
                                                </tr>
                                                <tr>
                                                    <td>8 – 9 games</td>
                                                    <td>20%</td>
                                                    <td>288</td>
                                                </tr>
                                                <tr>
                                                    <td>10 – 11 games</td>
                                                    <td>40%</td>
                                                    <td>488</td>
                                                </tr>
                                                <tr>
                                                    <td>12 games & above</td>
                                                    <td>60%</td>
                                                    <td>888</td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li>The bonus percentage will be calculated based on the min. bet of the winning streak.</li>
                                        <li>For example:
                                            <ul style="list-style-type: lower-alpha;">
                                                <li>1<sup>st</sup> game bet rm100, <sup>2nd</sup> game bet rm150, <sup>3rd</sup> game bet rm100, <sup>4th</sup> game bet rm400</li>
                                                <li>Then, the baccarat player are able to claim a bonus of (RM100 * 4 games) * 10% = RM40</li>																															
                                            </ul>
                                        </li> 
                                        <li>Player must be in the same table and same platform during the winning streak, tie is not included.</li> 
                                        <li>Member are only able to claim once (1) per day.</li>
                                        <li>Min. bet to be entitled is RM20 per stake.</li>
                                        <li>This promotion is not able to claim along with other bonus.</li>
                                        <li>Member can redeem the bonus via our livechat, wechat, whatsapp within 24 hours.</li>
                                        <li>Sbdot reserves the rights to decline the payout and freeze the account for investigation if there are any form of suspicious activities and third-party software found. All payout shall be void as well.</li>
                                        <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be not given and the qualification of the players will be waived.</li>
                                        <li>Our company has the right to modify, change or terminate the promotion without prior notice.</li>										
                                    </ol>
                                </div>
                            </div>

                            <div class="promo special latest">
                                <h3><img src="{{ asset('mobile/images/en/refer_friend_bonus_rm20.jpg') }}" class="img-responsive width-full"/></h3>
                                <div class="promo-font">
                                    <h4>Existing Member: Refer Friend Bonus RM20</h4>
                                            
                                    Terms & Conditions:
                                    <ol>
                                        <li>To claim the refer friend bonus, your introduced friend must deposit an amount of MYR200, excluding the 1st deposit amount and turnover is subjected to x8. Your friend must notify our customer service support by email or livechat with your game username or email. The bonus credit will be credited into your account once the requirement above is met.</li>
                                        <li>Example, once your friend has deposited an amount of RM200, RM20 will be credited into your account and subjected to x8 turnover.</li>
                                        <li>Bonus amount is valid for 10 days.</li>
                                        <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be confiscated.</li>
                                        <li>Member may not transfer money out of the Product before the bonus is fully wagered. If the member losses the full bonus amount, then the previous rollover requirement are no longer applicable to subsequent deposits (Credit lower than RM10, that mean member can loses the full bonus amount)</li>
                                        <li>Our Company has the right to modify, change or terminate the promotion without prior notice.</li>												
                                    </ol>
                                </div>
                            </div>

                            <div class="promo special">
                                <h3><img src="{{ asset('mobile/images/en/daily-rescue-bonus.jpg') }}" class="img-responsive width-full"/></h3>
                                <div class="promo-font">
                                    <h4>5% Daily Rescue Bonus</h4>
                                            
                                    Terms & Conditions:
                                    <ol>
                                        <li>Each existing members of Sbdot are allowed to claim 1 time rescue bonus on each day. (Based on total deposit & lost of the day)</li>
                                        <li>The promotion cannot be combine with other promotion.</li>
                                        <li>Before you claim the Rescue Bonus should not have any withdraw on the same day. (Wallet Credit Balance must below RM10 to qualify this promotion.</li> 
                                        <li>Daily rescue bonus will start every day from 00:00:01 until 23:59:59(GMT+8).(Member need to apply on next day within 24 hours via live chat) Only Live Dealer & Sportsbook Game Turnover will be counted, Other games played will be disqualified from this promotion.</li> 
                                        <li>Example: Rescue Bonus RM10
                                            <ul style="list-style-type: lower-alpha;">
                                                <li>Rollover: RM10 x 5 Rollover = 50
                                            </ul>
                                        </li>
                                        <li>Sbdot reserves the rights to decline the payout and freeze the account for investigation if there are any form of suspicious activities and third-party software found. All payout shall be void as well.</li>
                                        <li>This promotion is not allowed for multiple accounts, if there is any collusion or usage of multiple account, all free credit will be not given and the qualification of the players will be waived.</li> 
                                        <li>Our company has the right to modify, change or terminate the promotion without prior notice.</li>                                    
                                    </ol>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                    
                </div>
                
        
                
        </div>
        <div id="ctl00_UpdateProgress1" style="display:none;">
            
        <div class="overlay" />
                    <div class="overlayContent">
                        <img src="{{ asset('mobile/images/ajax-loader.gif') }}" alt="Loading" border="1" />
                    </div>
            
        </div>
            </div>
        
            @include ('mobile.footer')
                            
            </div>  
            
        </div>
    
@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function () {
        $(".promo div").hide();

        $(".promo h3").click(function () {
            $(this).next("div").slideToggle("fast")
		.siblings("p:visible").slideUp("fast");
            $(this).toggleClass("active");
            $(this).siblings("h3").removeClass("active");
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#filterOptions li a').click(function () {
            // fetch the class of the clicked item
            var ourClass = $(this).attr('class');

            // reset the active class on all the buttons
            $('#filterOptions li').removeClass('active');
            // update the active state on our clicked button
            $(this).parent().addClass('active');

            if (ourClass == 'all') {
                // show all our items
                $('#ourHolder').children('div.promo').show();
            }
            else {
                // hide all elements that don't share ourClass
                $('#ourHolder').children('div:not(.' + ourClass + ')').hide();
                // show all elements that do share ourClass
                $('#ourHolder').children('div.' + ourClass).show();
            }
            return false;
        });
    });
</script>
    
@endsection