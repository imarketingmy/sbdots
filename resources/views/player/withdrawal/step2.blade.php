@include('player.header')
<div class="content">
    <div class="container">
        <div class="page-content">
            <div class="m-page clearfix">
                <ul class="member">
                    <li><a href="{{ url('player') }}" class="">main</a></li>
                    <li><a href="{{ url('player/deposit/step1') }}" class="">deposit</a></li>
                    <li><a href="{{ url('player/withdrawal/step1') }}" class="active">withdrawal</a></li>
                    <li><a href="{{ url('player/transfer/step1') }}" class="">transfer</a></li>
                    <li><a href="{{ url('player/transaction') }}" class="">transaction</a></li>
                    <li><a href="{{ url('player/profile') }}" class="">profile</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active">
                        <div class="title-wrap">
                            <div class="outer-mask">
                                <div class="inner-mask">
                                    <div class="title-p">
                                        <h2 class="smaller">Withdrawal</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        <h4>Step 2 : Please confirm your bank details.</h4>
                        <div class="member-main">
                            <div class="member-row">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-member">
                                    <tr>
                                        <td style="width: 200px;">Bank Name</td>
                                        <td>{{ \Auth::user()->bank_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Account Name</td>
                                        <td>{{ \Auth::user()->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Account Number</td>
                                        <td>{{ \Auth::user()->bank_account_no }}</td>
                                    </tr>
                                </table>
                                <p>* Please contact our customer service if any inaccurate of your bank info.</p>
                            </div>
                            <div class="clearfix">
                                <form method="post" action="{{ url('player/withdrawal/step3') }}">
                                    <a href="{{ URL::previous() }}"><button type="button" class="btn btn-warning btn-more pull-left">BACK</button></a>
                                    @csrf
                                    <input type="hidden" name="game_id" value="{{ $input['game_id'] }}">
                                    <input type="hidden" name="amount" value="{{ $input['amount'] }}">
                                    <button type="submit" class="btn btn-warning btn-more pull-right">NEXT</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('player.footer')
</body></html>