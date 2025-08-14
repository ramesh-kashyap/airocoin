<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investment;
use App\Models\Income;
use App\Models\User;
use App\Models\User_trade;
use App\Models\Transaction;
use App\Models\Fundtransfer;
use App\Models\Reward;
use App\Models\Withdraw;
use App\Models\Trade;
use DateTime;
use DateInterval;
use DatePeriod;
use Carbon\Carbon;


class Cron extends Controller
{
    
public function __construct()
{
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
}
public function tradeAmt()
{
  User::where('id','>=',0)->update(['tradeAmt' => 0]);
}




public function generate_roi()
{  
date_default_timezone_set("Asia/Kolkata"); 

$allResult=Investment::where('status','Active')->where('roiCandition',0)->get();
$todays=Date("Y-m-d");
$day=date("l");

if ($allResult && $day!="Saturday" && $day!="Sunday") 
{
 foreach ($allResult as $key => $value) 
 {
  
  $userID=$value->user_id;
   $joining_amt = $value->amount;
 
  $userDetails=User::where('id',$userID)->where('active_status','Active')->first();
  $today=date("Y-m-d");
 

  if ($userDetails) 
  {
     $total_profit_b = Income::where('user_id', $userID)->where('invest_id', $value->id)->where('remarks','Roi Bonus')->sum("comm");
    
      $total_profit=($total_profit_b)?$total_profit_b:0;
       $total_get=$joining_amt*200/100;
        $next15_date =date('Y-m-d H:i:s',(strtotime ( '+ 15 day' , strtotime ( $userDetails->adate) ) ));
        
        $percent = 0.25;
        
        if($joining_amt>=100 && $joining_amt<=999)
        {
         $percent = 0.25;   
        }
        if($joining_amt>=1000 && $joining_amt<=4999)
        {
         $percent = 0.35;   
        }
        if($joining_amt>=5000)
        {
         $percent = 0.50;   
        }
        
        $directReferrals = User::where('sponsor', $userID)->whereBetween('adate', [$userDetails->adate, $next15_date])->where('package','>=',$userDetails->package)->where('active_status','Active')
                    ->count();
                    
        if($directReferrals>=5)
        {
          $percent = $percent*2;  
        }
        
        $roi = $joining_amt*$percent/100; 
         $max_income=$total_get;
        $n_m_t = $max_income - $total_profit;
        // dd($total_received);
          if($roi >= $n_m_t)
          {
              $roi = $n_m_t;
          }  
          
     
          
          
      if ($total_profit<$total_get && $roi>0) 
      {

        echo "ID:".$userDetails->username." Package:".$joining_amt." Roi:".$roi."<br>";
         $data['remarks'] = 'Roi Bonus';
        $data['comm'] = $roi;
        $data['amt'] = $joining_amt;
        $data['level'] = 0;
        $data['invest_id']=$value->id;
        $data['ttime'] = date("Y-m-d");
        $data['user_id_fk'] = $userDetails->username;
        $data['user_id']=$userDetails->id; 
      $income = Income::firstOrCreate(['remarks' => 'Roi Bonus','ttime'=>date("Y-m-d"),'user_id'=>$userID,'invest_id'=>$value->id],$data);
        add_level_income($userDetails->id,$roi);

      }
      else
      {
      Investment::where('id',$value->id)->update(['roiCandition' => 1]);   
      }



  }
  




 }
} 




}




 public function globaly_community()
    {  

    $allResult=User::where('active_status','Active')->get();
// print_r($allResult);die;
    if ($allResult) 
    {
     foreach ($allResult as $key => $value) 
     {
      
      $user_id=$value->id;
      $username=$value->username;
      
      
      
      
         $direct_list=User::where('sponsor',$user_id)->where('active_status','Active')->get(); 
    
	            $vicker_leg=0;
	        $power_leg=0;
	           $arrayabc = array();
	           if($direct_list!="")
	           {
	               foreach($direct_list as $key=>$value)
	               {
	                   $id_value=$value->id;
	                   $user_id_value=$value->username;
	                
	               //   $this->a=0;
	               $this->final_business=0;  
	                 $this->my_level_team_countBusiness($id_value);
	             
	                   $total=Investment::where('user_id',$id_value)->where('status','Active')->orderBy('id', 'DESC')->sum('amount');
	                  $this->final_business +=$total;
	                 $abc = $this->final_business;  
	               //  echo $abc; die;
	                 $arrayabc[$user_id_value] = $abc;
	                    
	                 //print_r($total_business)."<br>".$user_id_value;echo "<br>";
	               }
	             
	              if(!empty($arrayabc))
	              {
	               
	               
	               //  echo "<pre>";
	               ////  print_r($maxValue);
	               //print_r($arrayabc);die;
	               
	               $maxValue = max(@$arrayabc);
                  $maxIndex = array_search(max($arrayabc), $arrayabc);
                   $vicker_leg=array_sum($arrayabc);  
	                 
	       	        $power_leg=$maxValue;
	       $vicker_leg=$vicker_leg-$power_leg;
	       
	              }else
	              {
	                    $vicker_leg=0;
	        $power_leg=0;
	              }
	              
	             
	       //echo $username."<br>";
	       // echo "<pre>";print_r($power_leg)."<br>";
	       // echo "<pre>";print_r($vicker_leg);die;
	  
	    }
	    else
	    {
	        $vicker_leg=0;
	        $power_leg=0;
	    }
	    
             
               echo "<br>";
                 echo "ID : ".$username."<br>";
                 echo "Power : ".$power_leg."<br>";
          echo "Vicker : ".$vicker_leg;
             
        User::where('id', $user_id)
       ->update([
           'power_leg' => $power_leg,
           'vicker_leg' => $vicker_leg
        ]); 
     
     }
    } 

}


   public function my_level_team_countBusiness($userid){
        $arrin=array($userid);
        $ret=array();

        $i=1;
        while(!empty($arrin)){
            $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();    
            $alldown2=User::select('id')->whereIn('sponsor',$arrin)->where('active_status','Active')->get()->toArray(); 
            if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $arrin2 = array_column($alldown2,'id');
                   
                $total=Investment::whereIn('user_id',$arrin2)->where('status','Active')->sum('amount');
                 $this->final_business += $total;
                $ret[$i]=$arrin;
                $i++;
              
            }else{
                $arrin = array();
            } 
        }   
       
        
    }




public function generate_roi_bonus()
{
    date_default_timezone_set("Asia/Kolkata");
    $allResult = Investment::where('status', 'Active')->where('roiCandition', 0)->get();
    $today = date("Y-m-d");
    $dayOfWeek = date('N'); 


    if ($dayOfWeek == 6 || $dayOfWeek == 7) {
        echo "Skipping ROI calculation on weekends.";
        return;
    }

    if ($allResult) {
        foreach ($allResult as $value) {
            $username = $value->user_id_fk;
            $userID = $value->user_id;
            $joining_amt = $value->amount;

            

            $userDetails = User::where('id', $userID)->where('active_status', 'Active')->first();

            if ($userDetails) {
              
                $directReferrals = User::where('sponsor', $userID)
                    ->where('created_at', '>=', date('Y-m-d', strtotime('-15 days')))
                    ->count();
                if ($directReferrals >= 5) {
                    $packageCondition = Investment::where('user_id', $userID)
                        ->where('amount', '>=', $joining_amt)
                        ->exists();

                    if ($packageCondition) {
                       
                        $percent = 1;
                        Investment::where('id', $value->id)->update(['roiCandition' => 0]);
                       
                    }
                } else {
                    $percent = 0; 
                }

                $total_profit_b = Income::where('user_id', $userID)
                    ->where('invest_id', $value->id)
                    ->where('remarks', 'Roi Bonus')
                    ->count();

                $total_profit = ($total_profit_b) ? $total_profit_b : 0;
                $total_get = 200; 
                $roi = $joining_amt * $percent / 100;
                $n_m_t = $total_get - $total_profit;
              
                if ($total_profit < $total_get) { 
               if ($roi >= $n_m_t) 
                  {
                        $roi = $n_m_t;
                    }
                    echo "ID: {$userDetails->username} | Package: {$joining_amt} | ROI: {$roi}<br>";

                    $data = [
                        'remarks' => 'Roi Bonus',
                        'comm' => $roi,
                        'profit' => $roi / 2,
                        'awallet' => $roi / 2,
                        'amt' => $joining_amt,
                        'invest_id' => $value->id,
                        'level' => 0,
                        'ttime' => $today,
                        'user_id_fk' => $userDetails->username,
                        'user_id' => $userDetails->id,
                    ];
                    Income::firstOrCreate(['remarks' => 'Roi Bonus','ttime' => $today,'user_id' => $userID,'invest_id' => $value->id],$data);
                    // add_level_income($userDetails->id, $roi);
                } else {
                    Investment::where('id', $value->id)->update(['roiCandition' => 1]);
                }
            }
        }
    }
}




  public function managePayout()

    {  

date_default_timezone_set("Asia/Kolkata"); 
//   User::where('id',20)->update(['name' =>'Rameshk']);
    $allResult=User::where('active_status','Active')->orderBy('id','ASC')->cursor();



  
    if ($allResult) 
    {
       $counter=1;
     foreach ($allResult as $key => $value) 
     {
      
     $userID=$value->id;
     $userName=$value->username;
     $adate_date =$value->adate;
     $balance=$value->balance;


  
    //  $income =Income::where('user_id',$userID)->sum('comm');
    //  $withdraw = Withdraw::where('user_id',$userID)->sum('amount');
     
    //   $balance = round($income-$withdraw,2);

       
      $totalDepositSponsor=Investment::where('user_id',$userID)->where('status','Active')->sum('amount');
                             
     $total_profit_b = Income::where('user_id', $userID)->sum('comm');
     $total_profit=($total_profit_b)?$total_profit_b:0;
    


         $total_get=($totalDepositSponsor*400/100)+$value->extra_amt;
  
         $n_m_t = $total_get - $total_profit_b;

          
          if($n_m_t<=0)
          {
                echo 'ID: '. $userName." Balance : ".$n_m_t."<br>";   
                
             Investment::where('user_id',$userID)->update(['roiCandition' => 1]);       
             User::where('id',$userID)->update(['active_status' => 'Inactive']);       
                
          }
   
       
   
     
      
     
    

     $counter++;   
     }
    } 
    
    
    

}




  public function RoyalExel()

    {  

date_default_timezone_set("Asia/Kolkata"); 
//   User::where('id',20)->update(['name' =>'Rameshk']);

    $effectiveDate =date("Y-m-d H:i:s");
    $dateTime = date('Y-m-d H:i:s', strtotime("- 5 months", strtotime($effectiveDate)));

    $allResult=User::where('active_status','Active')->where("adate",">", '2024-05-01 00:50:37')->orderBy('id','ASC')->cursor();

    if ($allResult) 
    {
       $counter=1;
         echo "<table>";
         
         echo "<tr style='padding:10px'>";
         
        echo "<th style='padding: 10px;
    border: 2px solid black;'>Sr No</th>";
      echo "<th style='padding: 10px;
    border: 2px solid black;'>Name</th>";

        echo "<th style='padding: 10px;
    border: 2px solid black;'>User ID</th>";
    
    
        echo "<th style='padding: 10px;
    border: 2px solid black;'>Investment</th>";
    
       echo "<th style='padding: 10px;
    border: 2px solid black;'>Activation Date</th>";
    
 

        
         
     foreach ($allResult as $key => $value) 
     {
      
     $userID=$value->id;
     $userName=$value->username;


     $buypackage= Investment::where('user_id',$userID)->where('status','Active')->sum('amount');
     $profitIncome = Income::where('user_id',$userID)->sum('comm');
       $total = $buypackage;
     
       $percentage = ($profitIncome / $total) * 100; // 20 
       
   
        echo "<tr style='padding:10px'>";
        
        echo "<td style='padding: 10px;
    border: 2px solid black;'>".$counter."</td>";
    
          echo "<td style='padding: 10px;
    border: 2px solid black;'>".$value->name."</td>";
    
       echo "<td style='padding: 10px;
    border: 2px solid black;'>".$value->username."</td>";
    
         echo "<td style='padding: 10px;
    border: 2px solid black;'>".$buypackage."</td>";
    
 
         echo "<td style='padding: 10px;
    border: 2px solid black;'>".$value->adate."</td>";
    
 
    
    
    
      
        echo "</tr>";   
           $counter++;   
   
     
    

  
     }
     
      echo "</table>";
    } 
    
    
    

}


  public function managePayout22()
    {  

date_default_timezone_set("Asia/Kolkata"); 
//   User::where('id',20)->update(['name' =>'Rameshk']);
    $allResult=User::where('active_status','!=','Pending')->orderBy('id','ASC')->cursor();

     foreach ($allResult as $key => $value) 
     {
      
     $userID=$value->id;
     $userName=$value->username;
    
         $remarks_req=array('0','Staking Bonus','Direct Bonus','Royalty Bonus','Matching Bonus');

         for ($p=1; $p < 5; $p++) 
         { 
         $remarks=$remarks_req[$p];   
         
          $amount_rmarks=Income::where('user_id',$userID)->where('credit_type',0)->where('remarks',$remarks)->sum('comm');    
          
          
          if($amount_rmarks>0)
          {
            $data['remarks']=$remarks;
          $data['amount'] = $amount_rmarks;
          $data['ttime'] = date("Y-m-d");
          $data['user_id_fk'] = $userName;
          $data['user_id']=$userID;
          $income = Transaction::create($data); 
           Income::where('user_id',$userID)->where('is_swaped',0)->where('credit_type',0)->where('remarks',$remarks)->update(['is_swaped' => 1]);   
           
               
          }
         
             
         }
  
     }
     
  
    
    

}







public function reward_bonus()
{  
    $allResult = User::where('active_status', 'Active')->get();

    // Define levels dynamically based on ranks
   $levels = [
    ["level" => 1, "rank" => "Bronze", "strong_group" => 2500, "other_group" => 2500, "reward" => "Smart Watch"],
    ["level" => 2, "rank" => "Silver", "strong_group" => 2500 + 5000, "other_group" => 2500 + 5000, "reward" => "1N & 2 Days Domestic Trip"],
    ["level" => 3, "rank" => "Platinum", "strong_group" => 2500 + 5000 + 10000, "other_group" => 2500 + 5000 + 10000, "reward" => "2N & 3 Days Domestic Trip"],
    ["level" => 4, "rank" => "Titanium", "strong_group" => 2500 + 5000 + 10000 + 15000, "other_group" => 2500 + 5000 + 10000 + 15000, "reward" => "Tablet"],
    ["level" => 5, "rank" => "Gold", "strong_group" => 2500 + 5000 + 10000 + 15000 + 20000, "other_group" => 2500 + 5000 + 10000 + 15000 + 20000, "reward" => "Android Mobile"],
    ["level" => 6, "rank" => "Pearl", "strong_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000, "other_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000, "reward" => "Laptop"],
    ["level" => 7, "rank" => "Topaz", "strong_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000 + 30000, "other_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000 + 30000, "reward" => "International Trip"],

    // New levels from the second image
    ["level" => 8, "rank" => "Emerald", "strong_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000 + 30000 + 100000, "other_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000 + 30000 + 100000, "reward" => "iPhone"],
    ["level" => 9, "rank" => "Sapphire", "strong_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000 + 30000 + 100000 + 200000, "other_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000 + 30000 + 100000 + 200000, "reward" => "Macbook"],
    ["level" => 10, "rank" => "Ruby", "strong_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000 + 30000 + 100000 + 200000 + 500000, "other_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000 + 30000 + 100000 + 200000 + 500000, "reward" => "HatchBack Car down payment"],
    ["level" => 11, "rank" => "Diamond", "strong_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000 + 30000 + 100000 + 200000 + 500000 + 1000000, "other_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000 + 30000 + 100000 + 200000 + 500000 + 1000000, "reward" => "SUV car down payment + international trip couple"],
    ["level" => 12, "rank" => "Blue Diamond", "strong_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000 + 30000 + 100000 + 200000 + 500000 + 1000000 + 2500000, "other_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000 + 30000 + 100000 + 200000 + 500000 + 1000000 + 2500000, "reward" => "Flat"],
    ["level" => 13, "rank" => "Crown", "strong_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000 + 30000 + 100000 + 200000 + 500000 + 1000000 + 2500000 + 5000000, "other_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000 + 30000 + 100000 + 200000 + 500000 + 1000000 + 2500000 + 5000000, "reward" => "Premium car down payment + couple international trip"],
    ["level" => 14, "rank" => "Crown Ambassador", "strong_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000 + 30000 + 100000 + 200000 + 500000 + 1000000 + 2500000 + 5000000 + 10000000, "other_group" => 2500 + 5000 + 10000 + 15000 + 20000 + 25000 + 30000 + 100000 + 200000 + 500000 + 1000000 + 2500000 + 5000000 + 10000000, "reward" => "Villa Worth 1 Cr"]
];

    if ($allResult) {
        foreach ($allResult as $user) {
            $user_id = $user->id;
            $username = $user->username;
            $Power_leg = $user->power_leg;
            $Vicker_leg = $user->vicker_leg;

            $total_business = Reward::where('status', 'Approved')
                ->where('user_id', $user_id)
                ->sum("total_business");
            $total_business = $total_business ?: 0;

            foreach ($levels as $level) {
                $level_id = $level["level"];
                $required_power = $level["strong_group"];
                $required_vicker = $level["other_group"];
                $bonus = $level["reward"];
                $rank_name = $level["rank"];

                // Check if user has already achieved this level
                $check_level = Reward::where('status', 'Approved')
                    ->where('user_id', $user_id)
                    ->where('level', $level_id)
                    ->count("id");

                if ($check_level <= 0) {
                    $goalstatus = ($Power_leg >= $required_power && $Vicker_leg >= $required_vicker) ? 'Achieved' : 'Pending';

                    if ($goalstatus == 'Achieved') {
                        echo "<br>";
                        echo "ID : " . $username . "<br>";
                        echo "Level : " . $level_id . "<br>";

                        // Update User Rank
                        User::where('id', $user_id)
                            ->update(['rank' => $level_id]);

                        // Create Reward Bonus Entry
                        $data = [
                            'remarks' => 'Reward Bonus',
                            'amount' => $bonus,
                            'total_business' => $required_power,
                            'level' => $level_id,
                            'tdate' => date("Y-m-d"),
                            'user_id_fk' => $username,
                            'user_id' => $user_id,
                            'status' => 'Approved'
                        ];

                        Reward::firstOrCreate(
                            ['remarks' => 'Reward Bonus', 'level' => $level_id, 'user_id' => $user_id],
                            $data
                        );
                    }
                }
            }
        }
    }
}



public function dailyIncentive()
{


    $allResult=User::where('active_status','Active')->get();
    $todays=Date("Y-m-d");


    if ($allResult)
    {
        foreach ($allResult as $key => $value)
        {
        $userID=$value->id;
        $userName = $value->username;
        $userRank = $value->rank;
        
        $rewardDetail = Reward::where('user_id',$userID)->orderBy('id','DESC')->limit(1)->first();
        
        
    
 
        if($rewardDetail)
        {

             $checkLevel =Income::where('user_id',$userID)->where('remarks','Royalty Bonus')->where('level',$rewardDetail->level)->count();
         
             $amount = $rewardDetail->amount;
         
             $totalDepositSponsor=Investment::where('user_id',$userID)->where('status','Active')->sum('amount');
                                     
             $total_profit_b = Income::where('user_id', $userID)->sum('comm');
             $total_profit=($total_profit_b)?$total_profit_b:0;

             $total_get=($totalDepositSponsor*400/100)+@$value->extra_amt;
      
             $n_m_t = $total_get - $total_profit_b;
               if($amount >= $n_m_t)
              {
                  $amount = $n_m_t;
              }  
              
              
             
             if($checkLevel<90)
             {
            $data['remarks'] = 'Royalty Bonus';
            $data['comm'] = $amount;
            $data['level'] = $rewardDetail->level;
            $data['amt'] = $amount;
            $data['invest_id']=$rewardDetail->id;
            $data['ttime'] = date("Y-m-d");
            $data['user_id_fk'] = $userName;
            $data['user_id']=$userID; 
          $income = Income::firstOrCreate(['remarks' => 'Royalty Bonus','ttime'=>date("Y-m-d"),'user_id'=>$userID],$data);   
             }
          
           
        }
        
        
   


        }
    }
}



  public function get_total_invest_by_team($user_ids)
    {
      
     $business= Investment::whereIn('user_id',$user_ids)->where('status','Active')->where('sdate','>=','2024-04-03')->sum('amount');
     return $business;
        
    }
    
    



 public function matching_bonus()

    {  
        

date_default_timezone_set("Asia/Kolkata");
//   User::where('id',20)->update(['name' =>'Rameshk']);
    $allResult=User::where('active_status','Active')->get();

    if ($allResult) 
    {
     foreach ($allResult as $key => $value) 
     {
      
       $userID=$value->id;
        $userName=$value->username;
        $Package=$value->package;

          $capping=$Package;
        
       
       $rightTeam=$this->team_by_position($userID,'Right');
       $leftTeam=$this->team_by_position($userID,'Left');

          $left_direct=User::where('sponsor',$userID)->where('active_status','Active')->where('position','Left')->count('id'); 
         $right_direct=User::where('sponsor',$userID)->where('position','Right')->where('active_status','Active')->count('id');
         
         $totalDirect = $left_direct+$right_direct;

      if (!empty($left_direct) && !empty($right_direct) && $totalDirect>=4) 
        {
        
         $total_right=(!empty($rightTeam))?count($rightTeam):0;
         $total_left=(!empty($leftTeam))?count($leftTeam):0;
        
         if(($total_right>1) && ($total_left>0) || ($total_left>1) && ($total_right>0))
       {


          $left_business=$this->get_total_invest_by_team($leftTeam);
          $right_business=$this->get_total_invest_by_team($rightTeam);


         $tleftpackage=($left_business)? $left_business:0;
         $trightpackage=($right_business)? $right_business:0;

          if($tleftpackage<$trightpackage)
           {
           $amount = $tleftpackage;   
           $curry = $trightpackage-$tleftpackage;     
           }
          if($tleftpackage>$trightpackage)
          {
           $amount = $trightpackage;   
           $curry = $tleftpackage-$trightpackage;      
          }
          if($tleftpackage==$trightpackage)
          {
            $amount = ($trightpackage);

            $curry = $tleftpackage-$trightpackage;

          }
        
        
          $mtching=Income::where('user_id',$userID)->where('remarks','Matching Bonus')->where('ttime','>=','2024-04-03')->orderBy('id', 'DESC')->limit(1)->first();
          
           $amount=$amount;
           $tamount = $amount;
          $amount = $amount - (!empty($mtching)?$mtching->amt:0);
            
             $idate = date("Y-m-d");
              $total_today= Income::where('user_id', $user->id)->sum('comm');
                                 
                      //print_r($user_id_fk);die;
              $joiningAMt = Investment::where('user_id',$userID)->where('status','Active')->sum("amount");

             $percent=0;
             if($joiningAMt>=50 && $joiningAMt<=199)
              {
                $percent=1;    
              }
              if($joiningAMt>=200 && $joiningAMt<=499)
              {
                $percent=1;    
              }
              if($joiningAMt>=500 && $joiningAMt<=999)
              {
                $percent=2;    
              }
                if($joiningAMt>=1000 && $joiningAMt<=1999)
              {
                $percent=2;    
              }
              if($joiningAMt>=2000 && $joiningAMt<=4999)
              {
                $percent=3;    
              }
                  
              $amount = ($amount/100)*$percent;  
          
          

             $max_income=($joiningAMt*400/100)+$value->extra_amt;
               $n_m_t = $max_income - $total_today;
              if($amount >= $n_m_t)
              {
                  $amount = $n_m_t;
              }
                          
                          
        //   print_r($amount);die();
        
            echo "ID:".$userName." amounts:".$amount."<br>";
             $data['remarks'] = 'Matching Bonus';
            $data['comm'] = $amount;
            $data['amt'] = $tamount;
            $data['ttime'] = date("Y-m-d");
            $data['user_id_fk'] = $userName;
            $data['level']=1;
            $data['tleft']=$tleftpackage;
            $data['tright']=$trightpackage;
            $data['user_id']=$userID; 
            $data['curry']=$curry;
          $income = Income::firstOrCreate(['remarks' => 'Matching Bonus','ttime'=>date("Y-m-d"),'user_id'=>$userID],$data);


          


      }
       

     }

      }
   }
}




        public  function my_binary($userid){
        $arrin=array($userid);
        $ret=array();
        // print_r($arrin);die();
        while(!empty($arrin)){
         $alldown= User::select('id')->whereIn('Parentid',$arrin)->get()->toArray();
         if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[]=$arrin;
              
              
            }else{
                $arrin = array();
            } 
        }
        // continue;    
        $final = array();         
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }

        return $final;
        
    }  

        public  function team_by_position($userid,$position){
        $ret=array();
        $get_position_user=User::where('Parentid',$userid)->where('position',$position)->first();
        if($get_position_user){
        
            $ret=$this->my_binary($get_position_user->id);
            $ret[]=$get_position_user->id;
        }
       
        return $ret;
    }







   public function my_level_team_count($userid,$level=10){
        $arrin=array($userid);
        $ret=array();

        $i=1;
        while(!empty($arrin)){
            $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();
            if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[$i]=$arrin;
                $i++;


            }else{
                $arrin = array();
            }
        }

        $final = array();
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }


        return $final;

    }

}
