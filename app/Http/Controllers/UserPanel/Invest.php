<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
use App\Models\Income;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Log;
use Redirect;
use Hash;

class Invest extends Controller
{

  private $downline = "";

    public function index()
    {
        $user=Auth::user();
        $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();

        $this->data['last_package'] = ($invest_check)?$invest_check->amount:0;
        $this->data['page'] = 'user.invest.Deposit';
        return $this->dashboard_layout();
    }


 public function autoinvest()
    {
        $user=Auth::user();
        $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();

        $this->data['last_package'] = ($invest_check)?$invest_check->amount:0;
        $this->data['page'] = 'user.invest.autoinvest';
        return $this->dashboard_layout();
    }


 public function airoinvest()
    {
        $user=Auth::user();
        $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();

        $this->data['last_package'] = ($invest_check)?$invest_check->amount:0;
        $this->data['page'] = 'user.invest.airoinvest';
        return $this->dashboard_layout();
    }




 public function fundActivation2(Request $request)
 {
     try {
         $validation = Validator::make($request->all(), [
             'amount' => 'required',
             'account' => 'required',
             'txHash' => 'required|unique:investments,transaction_id',
         ]);
 
         if ($validation->fails()) {
             Log::info($validation->getMessageBag()->first());
             return redirect()->route('user.autoinvest')->withErrors($validation->getMessageBag()->first())->withInput();
         }
 
       
 
         $user = Auth::user();
         $user_detail = User::where('username', $user->username)->orderBy('id', 'desc')->limit(1)->first();
         $invest_check = Investment::where('user_id', $user_detail->id)->where('status', '!=', 'Decline')->orderBy('id', 'desc')->limit(1)->first();
 
         $invoice = substr(str_shuffle("0123456789"), 0, 7);
         $last_package = $invest_check ? $invest_check->amount : 0;
 
         $data = [
             'plan' => 1,
              'transaction_id' =>$request->txHash,
             'user_id' => $user_detail->id,
             'user_id_fk' => $user_detail->username,
             'amount' => $request->amount,
             'payment_mode' => 'USDT',
             'status' => 'Active',
             'slip' => $request->account,
             'sdate' => date("Y-m-d"),
             'active_from' => $user->username,
             'created_at' => date('Y-m-d H:i:s'),
         ];
 
         $payment = Investment::insert($data);
         
          if ($user_detail->active_status=="Pending")
         {
          $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$request->amount);
           User::where('id',$user_detail->id)->update($user_update);
         }
         else
         {
           $total  =     $user_detail->package+ $request->amount;
           $user_update=array('active_status'=>'Active','package'=>$total);
           User::where('id',$user_detail->id)->update($user_update);
         }

       
         add_direct_income($user_detail->id,$request->amount);


 
         $notify[] = ['success', 'Buy Package successfully'];
         return redirect()->route('user.autoinvest')->withNotify($notify);
 
     } catch (\Exception $e) {
         Log::info('error here');
         Log::info($e->getMessage());
         return redirect()->route('user.autoinvest')->withErrors(['error' => $e->getMessage()])->withInput();
     }
 }
 
 


 public function fundActivation(Request $request)
 {

try{
 $validation =  Validator::make($request->all(), [
     // 'user_id' => 'required',
     'amount' => 'required|numeric|min:0',
     'user_id' => 'required|exists:users,username',
     'transaction_password' => 'required',
    //  'paymentMode' => 'required',


 ]);


 if($validation->fails()) {
     Log::info($validation->getMessageBag()->first());

     return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
 }
    $user=Auth::user();

    $password= $request->transaction_password;

    if (Hash::check($password, $user->tpassword))
    {

    $balance=Auth::user()->FundBalance();
// dd($balance);
   $user_detail=User::where('username',$request->user_id)->orderBy('id','desc')->limit(1)->first();
     //   $icon_image = $request->file('icon_image');
      //  print_r($user_detail);die;
    
     $invest_check=Investment::where('user_id',$user_detail->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();


         $invoice = substr(str_shuffle("0123456789"), 0, 7);
         $last_package=($invest_check)?$invest_check->amount:0;

      // print_r($last_package);

    //   if (!empty($invest_check) && $user_detail->active_status!="Inactive")
    //   {
    //      return Redirect::back()->withErrors(array('User Already Activated'));
    //   }

       if ($last_package>$request->amount)
       {
         return Redirect::back()->withErrors(array('Please choose amount above last package $ '.$request->amount));
       }


         if ($balance>=$request->amount)
          {


        $data = [
             'plan' => 1,
             'transaction_id' =>md5(uniqid(rand(), true)),
             'user_id' => $user_detail->id,
             'user_id_fk' => $user_detail->username,
             'amount' => $request->amount,
             'payment_mode' =>'USDT',
             'status' => 'Active',
             'sdate' => Date("Y-m-d"),
             'walletType' => 1,
             'active_from' => $user->username,
             'roiCandition'=>0,
             
         ];
         $payment =  Investment::insert($data);


         if ($user_detail->active_status=="Pending")
         {
          $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$request->amount);
           User::where('id',$user_detail->id)->update($user_update);
         }
         else
         {
           $total  =     $user_detail->package+ $request->amount;
           $user_update=array('active_status'=>'Active','package'=>$total);
           User::where('id',$user_detail->id)->update($user_update);
         }

       
         add_direct_income($user_detail->id,$request->amount);





  $notify[] = ['success', $user_detail->username.' User Activation  Submited successfully'];
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
 return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
   }



     }






        public function invest_list(Request $request){

      $user=Auth::user();
      $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Investment::where('user_id',$user->id);
      if($search <> null && $request->reset!="Reset"){
        $notes = $notes->where(function($q) use($search){
          $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
          ->orWhere('txn_no', 'LIKE', '%' . $search . '%')
          ->orWhere('status', 'LIKE', '%' . $search . '%')
          ->orWhere('type', 'LIKE', '%' . $search . '%')
          ->orWhere('amount', 'LIKE', '%' . $search . '%');
        });

      }

        $notes = $notes->paginate($limit)->appends(['limit' => $limit ]);

      $this->data['search'] =$search;
      $this->data['deposit_list'] =$notes;
      $this->data['page'] = 'user.invest.DepositHistory';
      return $this->dashboard_layout();


        }

}
