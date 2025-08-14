<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BuyFund;
use App\Models\User;
use App\Models\Fundtransfer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Hexters\CoinPayment\CoinPayment;
use App\Models\CoinpaymentTransaction;
use App\Models\PasswordReset;
use Log;
use App\Models\GeneralSetting;

use Redirect;
use Hash;
class AddFund extends Controller
{

public function index(Request $request)
{

$user=Auth::user();
$this->data['page'] = 'user.fund.addFund';
return $this->dashboard_layout();

}

public function fundconfirm(Request $request)
{

$user=Auth::user();
$this->data['page'] = 'user.fund.fundconfirm';
return $this->dashboard_layout();

}

public function transfer_fund(Request $request)
{

$user=Auth::user();
$this->data['page'] = 'user.fund.transfer-fund';
return $this->dashboard_layout();

}


public function fund_transfer(Request $request)
{

$user=Auth::user();
$this->data['page'] = 'user.fund.fund-transfer';
return $this->dashboard_layout();

}




public function transferfundhistory(Request $request)
{

    $user=Auth::user();
  
     $limit = $request->limit ? $request->limit : 10;
       $status = $request->status ? $request->status : null;
       $search = $request->search ? $request->search : null;
       $notes = Fundtransfer::where('transfer_id',$user->id)->orWhere('transfered_id',$user->id);      
      if($search <> null && $request->reset!="Reset"){
       $notes = $notes->where(function($q) use($search){
         $q->Where('transfered_id', 'LIKE', '%' . $search . '%')          
         ->orWhere('transfer_id', 'LIKE', '%' . $search . '%')
         ->orWhere('user_id_to', 'LIKE', '%' . $search . '%')
         ->orWhere('user_id_from', 'LIKE', '%' . $search . '%')
         ->orWhere('amount', 'LIKE', '%' . $search . '%');
       });
   
      }

       $notes = $notes->paginate($limit)
           ->appends([
               'limit' => $limit
           ]);

     $this->data['search'] =$search;
     $this->data['level_income'] =$notes;
$this->data['page'] = 'user.fund.transferfundhistory';
return $this->dashboard_layout();

}


public function fundHistory(Request $request)
{

   
    $user=Auth::user();
    $limit = $request->limit ? $request->limit : paginationLimit();
    $status = $request->status ? $request->status : null;
    $search = $request->search ? $request->search : null;
    $notes = BuyFund::where('user_id',$user->id);
    if($search <> null && $request->reset!="Reset"){
    $notes = $notes->where(function($q) use($search){
        $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
        ->orWhere('txn_no', 'LIKE', '%' . $search . '%')
        ->orWhere('status', 'LIKE', '%' . $search . '%')
        ->orWhere('type', 'LIKE', '%' . $search . '%')
        ->orWhere('amount', 'LIKE', '%' . $search . '%');
    });

    }

    $notes = $notes->paginate($limit)
        ->appends([
            'limit' => $limit
        ]);

    $this->data['search'] =$search;
    $this->data['level_income'] =$notes;
    $this->data['page'] = 'user.fund.fundHistory';
    return $this->dashboard_layout();

}






public function SubmitBuyFund(Request $request)
{

  try{
        $validation =  Validator::make($request->all(), [
            // 'amount' => 'required|numeric|min:30',
            // 'paymentMode' => 'required',
            'transaction_hash' => 'required',
            // 'icon_image'=>'max:4096|mimes:jpeg,png,jpg,svg',
        ]);

        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return redirect()->route('user.addfund')->withErrors($validation->getMessageBag()->first())->withInput();
        }



        $user=Auth::user();

               $data = [
                    'txn_no' =>$request->transaction_hash,
                    'user_id' => $user->id, 
                    'user_id_fk' => $user->username,
                    'amount' => $request->amount,
                    'status'=>'Pending', 
                    'type' => $request->paymentMode,
                    'bdate' => Date("Y-m-d"),

                ];
                // dd($data);
               $payment =  BuyFund::create($data);


      $notify[] = ['success', 'Fund Request Submited successfully'];
      return redirect()->route('user.addfund')->withNotify($notify);
      }
       catch(\Exception $e){
        Log::info('error here');
        Log::info($e->getMessage());
        print_r($e->getMessage());
        die("hi");
        return  redirect()->route('user.addfund')->withErrors('error', $e->getMessage())->withInput();
    }

}






    public function SubmitTransferFund(Request $request)
    {

  try{
            $validation =  Validator::make($request->all(), [
                // 'code' => 'required',
                'amount' => 'required|numeric|min:0',
                'transaction_password' => 'required',
                 
            ]);

            if($validation->fails()) {
                Log::info($validation->getMessageBag()->first());

                return redirect()->route('user.fund_transfer')->withErrors($validation->getMessageBag()->first())->withInput();
            }
             
               $user=Auth::user();

            //   $code = $request->code;
            
            //   if (PasswordReset::where('token', $code)->where('email',$user->email)->count() != 1) {
            //          $notify[] = ['error', 'Invalid token'];
            //          return redirect()->back()->withNotify($notify);
            //      }


                $available_balance=0;
                $user_detail=User::where('username',$user->username)->orderBy('id','desc')->limit(1)->first();
                $available_balance=Auth::user()->available_balance();
             
              $password= $request->transaction_password;
             if (Hash::check($password, $user->tpassword))
               {
             if ($available_balance>=$request->amount) 
             {
                 $data = [
                        'transfer_id' =>$user->id,
                        'transfered_id' => $user_detail->id,
                        'user_id_from' => $user->username,
                        'user_id_to' => $user_detail->username,
                        'amount' => $request->amount,
                        'charge' => $request->amount*10/100,
                        'netAmt' => $request->amount-$request->amount*10/100,
                        'transfer_date' => Date("Y-m-d"),         
                    ];
                   $payment =  Fundtransfer::insert($data);
              
               $notify[] = ['success','Fund Transfer successfully'];
                  return redirect()->back()->withNotify($notify);

              }   
              else
              {
                 return Redirect::back()->withErrors(array('Insufficient Balance in Wallet'));
              }
               }
            else
            {
            return Redirect::back()->withErrors(array('Invalid Transaction Password'));
            }     

           
                  

          }
           catch(\Exception $e){
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
            die("hi");
            return  redirect()->route('user.fund_transfer')->withErrors('error', $e->getMessage())->withInput();
        }

    }








    public function fund(Request $request)
    {
    try{
     $validation =  Validator::make($request->all(), [
        'amount' => 'required|numeric',
        'paymentMode' => 'required',
     ]);
    
    if($validation->fails()) {
        Log::info($validation->getMessageBag()->first());
    
        return redirect()->route('user.fund')->withErrors($validation->getMessageBag()->first())->withInput();
    }
    
    $setting = GeneralSetting::where('id',1)->first();


if($request->paymentMode == "USDT.BEP20"){
      $walletAddress = $setting->usdtBep20;
}else{
    $walletAddress = $setting->usdtTrc20;

}
    
    
    $user=Auth::user();
    
    $this->data['paymentMode'] =$request->paymentMode;
    $this->data['walletAddress'] = $walletAddress;
    
    $this->data['amount'] =$request->amount;
    $this->data['page'] = 'user.fund.fundconfirm';
    return $this->dashboard_layout(); 
    
    
    }
    catch(\Exception $e){
    Log::info('error here');
    Log::info($e->getMessage());
    print_r($e->getMessage());
    die("hi");
    return  redirect()->route('user.fund')->withErrors('error', $e->getMessage())->withInput();
      }
    
    
    
    
    
    }




    
    

}
