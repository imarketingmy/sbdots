<?php

namespace App\Http\Controllers;

use App\User;
use App\Transaction;
use DataTables;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use App\Game;
use App\Bank;
use App\Bonus;
use App\Notifications\NewDeposit;
use App\Notifications\NewWithdraw;
use App\Notifications\NewTransfer;
use Pusher\Pusher;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');
    }

    public function data(Datatables $datatables)
    {
        $users = User::All();
        return Datatables::of($users)
            ->addColumn('actions', function($user) {
                return view('admin.users.action', compact('user'))->render();
            })
            ->editColumn('role', function ($user) {
                if($user->role == 1)
                {
                    return 'Administrator';
                }
                else if($user->role == 2)
                {
                    return 'Staff';
                }
                else if($user->role == 3)
                {
                    return 'User';
                }
            })
            ->editColumn('phone_verification', function ($user) {
                if($user->phone_verification == 1)
                {
                    return '<span class="label label-success">Verified</span>';
                }
                else
                {
                    return '<span class="label label-warning">Pending Verification</span>';
                }
            })
            ->editColumn('group_id', function ($user) {
                
                return $user->group->name;

            })
            ->editColumn('created_at', function ($user) {
                return $user->created_at ? with(new Carbon($user->created_at))->format('d M Y, h:i A') : '';
            })
            ->rawColumns(['actions','phone_verification'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $user = new User;
        $user->name = $input['name'];
        $user->password = bcrypt($input['password']);
        $user->email = $input['email'];
        $user->role = $input['role'];
        $user->phone_verification = $input['phone_verification'];
        $user->phone = $input['phone'];

        $user->save();

        Session::flash('message', 'User created succesfully!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/users/'.$user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $games = Game::all();
        $banks = Bank::all();
        $bonuses = Bonus::all();

        return view('admin.users.show',compact('user','games','banks','bonuses'));
    }

    public function transactiondata(Datatables $datatables,$user_id)
    {
        $transactions = Transaction::where('user_id',$user_id)->get();
        return Datatables::of($transactions)
            ->addColumn('actions', function($transaction) {
                return view('admin.transaction.action', compact('transaction'))->render();
            })
            ->editColumn('transaction_id', function ($transaction) {
                return '#'.sprintf('%06d', $transaction->id);
            })
            ->editColumn('status', function ($transaction) {
                
                if($transaction->status == 1)
                {
                    return '<span class="label label-warning">Progress</span>';
                }
                else if($transaction->status == 2)
                {
                    return '<span class="label label-success">Complete</span>';
                }
                else if($transaction->status == 3)
                {
                    return '<span class="label label-danger">Decline</span>';
                }


            })
            ->editColumn('last_login', function ($transaction) {
                return $transaction->last_login ? with(new Carbon($transaction->last_login))->format('d M Y, h:i A') : '';
            })
            ->rawColumns(['actions','status'])
            ->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $user = User::find($id);

        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->role = $input['role'];
        $user->group_id = $input['group'];
        $user->phone = $input['phone'];
        $user->phone_verification = $input['phone_verification'];
        $user->bank_name = $input['bank_name'];
        $user->bank_account_no = $input['bank_account_no'];

        $user->save();

        Session::flash('message', 'User succesfully updated!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/users/'.$user->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ban($id)
    {
        $user = User::find($id);
        $user->is_ban = 1;
        $user->save();

        Session::flash('message', 'User succesfully Banned!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/users/'.$user->id);
    }

    public function unban($id)
    {
        $user = User::find($id);
        $user->is_ban = 0;
        $user->save();

        Session::flash('message', 'User succesfully Unbanned!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/users/'.$user->id);
    }

    public function deposit(Request $request)
    {
        $input = $request->all();

        $transaction = new Transaction;

        if(isset($input['bonus_code']))
        {
            $bonus = Bonus::where('bonus_code',$input['bonus_code'])->first();

            if ($bonus == null)
            {
                Session::flash('message', 'Bonus code does not exist! Leave blank if you dont have bonus code!'); 
                Session::flash('alert-class', 'alert-danger');

                return back()->withInput();
            }
            else
            {   


                if($bonus->daily == 1)
                {
                    $arrToday = explode("-", Carbon::now()->format('d-m-Y'));

                    $from_date = Carbon::create($arrToday[2], $arrToday[1], $arrToday[0], 0, 0, 0);
                    $to_date = Carbon::create($arrToday[2], $arrToday[1], $arrToday[0], 23, 59, 59);

                    $today_count = Transaction::where('bonus_id',$bonus->id)->where('user_id',\Auth::user()->id)->where('created_at','<=',$to_date)->where('created_at','>=',$from_date)->count();

                    if($today_count == 1)
                    {
                        Session::flash('message', 'User Already Used This Code Today, Come Back Tomorrow To use this Code.'); 
                        Session::flash('alert-class', 'alert-danger');

                        return back()->withInput();
                    }
                    else
                    {
                        $can_use_bonus = 1;
                    }
                    
                }


                if($input['amount'] < $bonus->min_deposit)
                {
                    Session::flash('message', 'Minimum deposit to use this code is MYR '.$bonus->min_deposit); 
                    Session::flash('alert-class', 'alert-danger');

                    return back()->withInput();
                }

                $transaction_count = Transaction::where('bonus_id',$bonus->id)->where('user_id',\Auth::user()->id)->count();

                if($bonus->allow_multiple == 0)
                {
                    if($transaction_count == 0)
                    {
                        $can_use_bonus = 1;
                        $transaction->bonus_id = $bonus->id;
                    }
                    else
                    {
                        Session::flash('message', 'You already use this code. Please use other code OR leave blank to continue.'); 
                        Session::flash('alert-class', 'alert-danger');

                        return back()->withInput();
                    }
                }
                else
                {
                    $can_use_bonus = 1;
                    $transaction->bonus_id = $bonus->id;
                }
            }
        }

        $data_raw = array();
        $data_raw = array_add($data_raw, 'game_id', $input['game_id']);
        $data_raw = array_add($data_raw, 'payment_method', $input['payment_method']);
        $data = json_encode($data_raw);

        if ($request->hasFile('receipt')) {
            
            $file = $request->file('receipt');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = 'storage/receipt';
            $file->move($destinationPath,$filename);

            $transaction->receipt_file = $filename;
        }

        

        $transaction->user_id = $input['user_id'];
        $transaction->transaction_id = time();
        $transaction->transaction_type = 'deposit';
        $transaction->deposit_type = 'normal';
        $transaction->data = $data;
        $transaction->amount = $input['amount'];
        $transaction->bank_id = $input['bank'];
        $transaction->datetime = $input['deposit_date']." ".$input['deposit_hour'].":".$input['deposit_minutes']." ".$input['deposit_stamp'];
        $transaction->refference_no = $input['refference_no'];
        $transaction->status = 1;

        $transaction->save();

        $admins = User::where('role',1)->get();
        foreach($admins as $admin)
        {
            $admin->notify(new NewDeposit($transaction));
        }

        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );
        $pusher = new Pusher('32a087e0e1378c7b7210', 'bda79f5550252850598e', '494870', $options);
        $pusher->trigger('sbdots', 'transaction', []);

        Session::flash('message', 'Deposit transaction succesfully added, You still need to approve the deposit at transaction page!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/users/'.$input['user_id']);
    }

    public function withdraw(Request $request)
    {
        $input = $request->all();

        $transaction = new Transaction;

        $data_raw = array();
        $data_raw = array_add($data_raw, 'game_id', $input['game_id']);
        $data = json_encode($data_raw);

        $transaction->user_id = $input['user_id'];
        $transaction->transaction_id = time();
        $transaction->transaction_type = 'withdraw';
        $transaction->data = $data;
        $transaction->bank_id = $input['bank'];
        $transaction->amount = $input['amount'];
        $transaction->status = 1;

        $transaction->save();

        $admins = User::where('role',1)->get();
        foreach($admins as $admin)
        {
            $admin->notify(new NewWithdraw($transaction));
        }

        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );
        $pusher = new Pusher('32a087e0e1378c7b7210', 'bda79f5550252850598e', '494870', $options);
        $pusher->trigger('sbdots', 'transaction', []);

        session::flash('message', 'Withdraw transaction succesfully added, You still need to approve the withdraw at transaction page!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/users/'.$input['user_id']);
    }

    public function transfer(Request $request)
    {
        $input = $request->all();

        $transaction = new Transaction;

        $data_raw = array();
        $data_raw = array_add($data_raw, 'from_game', $input['from_game_id']);
        $data_raw = array_add($data_raw, 'to_game', $input['to_game_id']);
        $data = json_encode($data_raw);

        $transaction->user_id = $input['user_id'];
        $transaction->transaction_id = time();
        $transaction->transaction_type = 'transfer';
        $transaction->data = $data;
        $transaction->amount = $input['amount'];
        $transaction->status = 1;

        $transaction->save();

        $admins = User::where('role',1)->get();
        foreach($admins as $admin)
        {
            $admin->notify(new NewTransfer($transaction));
        }

        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );
        $pusher = new Pusher('32a087e0e1378c7b7210', 'bda79f5550252850598e', '494870', $options);
        $pusher->trigger('sbdots', 'transaction', []);

        session::flash('message', 'Transfer transaction succesfully added, You still need to approve the transfer at transaction page!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/users/'.$input['user_id']);
    }
}
