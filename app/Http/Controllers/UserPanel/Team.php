<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reentry;
use Illuminate\Support\Facades\DB;
use Auth;
use Log;
use Redirect;
use Hash;
use Validator;
use Session;

class Team extends Controller
{
    public function index(Request $request)
    {
      $user=Auth::user();
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = User::where('sponsor',$user->id)->orderBy('id', 'DESC');
        $this->data['total_team'] =User::where('sponsor',$user->id)->count();
        $this->data['active_total_team'] =User::where('sponsor',$user->id)->where('active_status','Active')->count();
        $this->data['totalPackage'] =User::where('sponsor',$user->id)->sum('package');
        
       if($search <> null && $request->reset!="Reset"){
        $notes = $notes->where(function($q) use($search){
          $q->Where('name', 'LIKE', '%' . $search . '%')
          ->orWhere('username', 'LIKE', '%' . $search . '%')
          ->orWhere('email', 'LIKE', '%' . $search . '%')
          ->orWhere('phone', 'LIKE', '%' . $search . '%')
          ->orWhere('jdate', 'LIKE', '%' . $search . '%')
          ->orWhere('active_status', 'LIKE', '%' . $search . '%');
        });

      }

        $notes = $notes->paginate($limit)
            ->appends([
                'limit' => $limit
            ]);

    $this->data['direct_team'] =$notes;
    $this->data['search'] =$search;
  
    
    $this->data['page'] = 'user.team.direct-team';
    // $this->genealogy($request);
    return $this->dashboard_layout();

    }

    public function LevelTeam(Request $request)
    {
      $user=Auth::user();
      // print_r($user->username);die();
      $my_level_team=$this->my_level_team_count($user->id);   
      $selected_level = $request->selected_level ? $request->selected_level :0;

     
          end($my_level_team);        
          $key = key($my_level_team);
          $max_lenght=$key;  
          
        if($selected_level>0)
        {
           $gen_team =  (array_key_exists($selected_level,$my_level_team) ? $my_level_team[$selected_level]:array());
        }
        else
        {
          $gen_team = $my_level_team;
         
        }
        
        

      // print_r($ids);die;
        $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            // $notes = User::where('sponsor',$user->username);
           Session::forget('selected_level');
          
           ($selected_level)?Session::put('selected_level',$selected_level):"";


            // $notes = User::where('sponsor',$user->username);
          $notes = User::where(function($query) use($gen_team)
              {
                if(!empty($gen_team)){
                  foreach ($gen_team as $key => $value) {
                
                   if(is_array($value)){
                      $query->orWhereIn('id', $value);
                   }else{
                    $query->orWhere('id', $value);
                   }
                  }
                }else{$query->where('id',null);}
              })->orderBy('created_at', 'DESC');
        
          $notesNew = User::where(function($query) use($my_level_team)
              {
                if(!empty($my_level_team)){
                  foreach ($my_level_team as $key => $value) {
                
                   if(is_array($value)){
                      $query->orWhereIn('id', $value);
                   }else{
                    $query->orWhere('id', $value);
                   }
                  }
                }else{$query->where('id',null);}
              })->orderBy('created_at', 'DESC');
        
        
        $this->data['total_team'] =$notesNew->count();
        $this->data['active_total_team'] =$notesNew->where('active_status','Active')->count();
        $this->data['totalPackage'] =$notesNew->sum('package');
        
        
        
       if($search <> null && $request->reset!="Reset"){
        $notes = $notes->where(function($q) use($search){
          $q->orWhere('name', 'LIKE', '%' . $search . '%')
          ->orWhere('username', 'LIKE', '%' . $search . '%')
          ->orWhere('email', 'LIKE', '%' . $search . '%')
          ->orWhere('phone', 'LIKE', '%' . $search . '%')
          ->orWhere('jdate', 'LIKE', '%' . $search . '%')
          ->orWhere('active_status', 'LIKE', '%' . $search . '%');
        });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

        $this->data['direct_team'] =$notes;
        $this->data['search'] =$search;
         $this->data['max_lenght'] =$max_lenght;
        $this->data['page'] = 'user.team.level-team';
        return $this->dashboard_layout();

    }
    
    
        public function leftteam(Request $request)
    {  
      $user=Auth::user();
      // print_r($user->username);die();
      $ids=$this->team_by_position($user->id,'Left');
       
        $limit = $request->limit ? $request->limit : 10;
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            // $notes = User::where('sponsor',$user->username);
          $notes = User::whereIn('id',$ids);
          $this->data['total_team'] =$notes->count();
          $this->data['active_total_team'] =$notes->where('active_status','Active')->count();
          $this->data['totalPackage'] =$notes->sum('package');

//   $totalWithdrw = \DB::table('withdraws')->whereIn('user_id',$ids)->where('status','Approved')->sum('amount');
//           $totaltransfer = \DB::table('fundtransfers')->whereIn('transfer_id',$ids)->sum('amount');
    
    
//      echo $totalWithdrw." ".$totaltransfer."<br>";
//      echo "total:".$totalWithdrw+$totaltransfer;
     
     
        if($search <> null && $request->reset!="Reset"){
          $notes = $notes->where(function($q) use($search){
            $q->orWhere('name', 'LIKE', '%' . $search . '%')          
            ->orWhere('username', 'LIKE', '%' . $search . '%')
            ->orWhere('email', 'LIKE', '%' . $search . '%')
            ->orWhere('phone', 'LIKE', '%' . $search . '%')
            ->orWhere('jdate', 'LIKE', '%' . $search . '%')
            ->orWhere('active_status', 'LIKE', '%' . $search . '%');
          });
      
        }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
       
          $this->data['direct_team'] =$notes;
          $this->data['search'] =$search;
     
          $this->data['page'] = 'user.team.left-team';
          return $this->dashboard_layout();

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



  public function find_users($snode,$pos) {
    // $this->load->model('Dashboard_model');
  $user_just_downline = User::where('Parentid',$snode)->where('position',$pos)->first();
       return $user_just_downline;
}



 public function genealogy(Request $request)
    {
       $user=Auth::user();
        $tuser=$request->user_id;
        if($tuser==NULL){
       $suser = @$request->suser;
        if($suser==""){
        $username = $user->username;
        }
        else{
            $session_id = $user->id;
            $username = $suser;
             $user_id=User::where('username',$username)->first();
         if($user_id->id>$session_id)
         {
          $username= $suser;  
         }
         else
         {
           $username = $user->username;   
         }
        }
       }
       else{
           $username = $tuser;
          }

           $check=User::where('username',$username)->count();;
            if($check>0)
            {
               $username = $username;  
            }
            else
            {
             $username = $user->username;    
            }
     
      $complete_tree = array();
      $pool='users';
      $userDetail=User::where('username',$username)->first();
      if($userDetail)
      {
        $userID= $userDetail->id;  
      }
      else
      {
          $userID= Auth::user()->id;     
      }
    
     $alldown= User::where('sponsor',$userID)->get();
     $directCount= $alldown->count();

     

    $this->data['direct_team'] =$alldown;
    $this->data['mydata'] =$userDetail;
    $this->data['directCount'] =$directCount;
    $this->data['page'] = 'user.team.tree-view';
    return $this->dashboard_layout();


    }





    public function rightteam(Request $request)
    {  
      $user=Auth::user();
      // print_r($user->username);die();
      $ids=$this->team_by_position($user->id,'Right');
       
        $limit = $request->limit ? $request->limit : 10;
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            // $notes = User::where('sponsor',$user->username);
          $notes = User::whereIn('id',$ids);
          $this->data['total_team'] =$notes->count();
          $this->data['active_total_team'] =$notes->where('active_status','Active')->count();
          $this->data['totalPackage'] =$notes->sum('package');
          
          //   $totalWithdrw = \DB::table('withdraws')->whereIn('user_id',$ids)->where('status','Approved')->sum('amount');
//           $totaltransfer = \DB::table('fundtransfers')->whereIn('transfer_id',$ids)->sum('amount');
    
    
//      echo $totalWithdrw." ".$totaltransfer."<br>";
//      echo "total:".$totalWithdrw+$totaltransfer;
     
     
       
    
        if($search <> null && $request->reset!="Reset"){
          $notes = $notes->where(function($q) use($search){
            $q->orWhere('name', 'LIKE', '%' . $search . '%')          
            ->orWhere('username', 'LIKE', '%' . $search . '%')
            ->orWhere('email', 'LIKE', '%' . $search . '%')
            ->orWhere('phone', 'LIKE', '%' . $search . '%')
            ->orWhere('jdate', 'LIKE', '%' . $search . '%')
            ->orWhere('active_status', 'LIKE', '%' . $search . '%');
          });
      
        }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
       
          $this->data['direct_team'] =$notes;
          $this->data['search'] =$search;
          $this->data['page'] = 'user.team.right-team';
          return $this->dashboard_layout();

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

        // $final = array();
        // if(!empty($ret)){
        //     array_walk_recursive($ret, function($item, $key) use (&$final){
        //         $final[] = $item;
        //     });
        // }


        return $ret;

    }


}
