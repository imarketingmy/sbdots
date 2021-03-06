@include('player.header')
<div class="content">
    <div class="container">
        <div class="page-content">
            <div class="m-page clearfix">
                <ul class="member">
                    <li><a href="{{ url('player') }}" class="">main</a></li>
                    <li><a href="{{ url('player/deposit/step1') }}" class="">deposit</a></li>
                    <li><a href="{{ url('player/withdrawal/step1') }}" class="">withdrawal</a></li>
                    <li><a href="{{ url('player/transfer/step1') }}" class="">transfer</a></li>
                    <li><a href="{{ url('player/transaction') }}" class="active">transaction</a></li>
                    <li><a href="{{ url('player/profile') }}" class="">profile</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active">
                        <div class="title-wrap">
                            <div class="outer-mask">
                                <div class="inner-mask">
                                    <div class="title-p">
                                        <h2 class="smaller">Transaction</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        
                        <div class="member-main">
                            <div class="member-row">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class=""><a href="{{ url('player/transaction?tab=deposit') }}">deposit</a></li>
                                    <li role="presentation" class=""><a href="{{ url('player/transaction?tab=withdrawal') }}">withdrawal</a></li>
                                    <li role="presentation" class="active"><a href="{{ url('player/transaction?tab=transfer') }}">Transfer</a></li>
                                </ul>
                                <div id="ctl00_MainContent_UpdatePanel1">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="deposit">
                                            <div>
                                                <table class="table-member" cellspacing="0" border="0" id="ctl00_MainContent_dgDeposit" style="width:100%;border-collapse:collapse;">
                                                    <tr>
                                                        <td colspan="7">
                                                            <table cellspacing="0" border="0" style="width:100%;border-collapse:collapse;" class="table-member">
                                                                <tr>
                                                                    <th scope="col">No</th>
                                                                    <th scope="col">Transaction No</th>
                                                                    <th scope="col">Transfer From</th>
                                                                    <th scope="col">Transfer To</th>
                                                                    <th scope="col">Amount (MYR)</th>
                                                                    <th scope="col">Date</th>
                                                                    <th scope="col">Remarks</th>
                                                                </tr>
                                                                @if($transactions->count() == 0)
                                                                <tr >
                                                                    <th scope="col" colspan="7" style="padding-top: 10px; text-align: center">No Transaction</th>
                                                                </tr>
                                                                @else
                                                                    @php
                                                                        $i = 1;
                                                                    @endphp
                                                                    @foreach($transactions as $transaction)
                                                                        <tr>
                                                                            <td scope="col">{{ $i }}</td>
                                                                            <td scope="col">#{{ sprintf('%06d', $transaction->id) }}</td>
                                                                            @php

                                                                                $data = json_decode($transaction->data, true);
                                                                                $transfer_from = \App\Game::find($data['from_game']);
                                                                                $transfer_to = \App\Game::find($data['to_game']);

                                                                            @endphp
                                                                            <td scope="col">{{ $transfer_from->name }}</td>
                                                                            <td scope="col">{{ $transfer_to->name }}</td>
                                                                            <td scope="col">MYR {{ $transaction->amount }}</td>
                                                                            <td scope="col">{{ $transaction->created_at->format('d M Y h:i A') }}</td>
                                                                            <td scope="col">
                                                                                @if($transaction->status == 1)
                                                                                    <span class="label label-info">Processing</span>
                                                                                @elseif($transaction->status == 3)
                                                                                    <span class="label label-danger">Declined</span>
                                                                                @elseif($transaction->status == 2)
                                                                                    <span class="label label-success">Succesfull</span>
                                                                                @endif
                                                                            </td>
                                                                        </tr>
                                                                    @php
                                                                        $i++;
                                                                    @endphp
                                                                    @endforeach

                                                                @endif
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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