<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ClusterController extends Controller
{
    public function Index(){
        $cluster = new \App\Cluster_Information;
      
        $search = \Request::get('search'); //<-- we use global request to get the param of URI
 
        //$data = $client::where('mobile_number','like','%'.$search.'%')
        $clusters= DB::table('cluster_info')
        ->select('cluster_info.*','branch.name','branch.region')
        ->join('branch','cluster_info.branch_id','=','branch.id')
        ->where('cluster_info.code','like','%'.$search.'%')
        ->Orwhere('branch.name','like','%'.$search.'%')
        ->Orwhere('branch.region','like','%'.$search.'%')
        ->Orwhere('cluster_info.pa_lastname','like','%'.$search.'%')
        ->orderBy('id')
        ->paginate(15);
        
                return view('pages.view-cluster',['information'=>$clusters]);
    }
    public function PreCreateCluster(){
        $branches = new \App\Branch;
        $data = $branches::all();
        return view('pages.add-cluster',['branches'=>$data]);
    }
    public function PostCreateCluster(Request $request){
        $cluster = new \App\Cluster_Information;
        $rules = [
            'branch_id'=>'required | exists:branch,id',
            'code'=>'required | unique:cluster_info,code',
            'lastname'=>'required',
            'firstname'=>'required',
        ];
        $messages = [
            'branch_id.required'=>'Provice branch location',
            'branch_id.exists'=>'Branch should be existing',
            'code.unique'=>'Cluster code existing',
            'lastname.required'=>'Provide loan officer\'s LASTNAME',
            'firstname.required'=>'Provide loan officer\'s FIRSTNAME',
            'middlename.required'=>'Provide loan officer\'s MIDDLENAME',

        ];
        $validator = \Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
             return redirect('/Cluster/Create/')
            ->withErrors($validator)
            ->withInput();
        }
        $cluster->code=$request->code;
        $cluster->pa_lastname=$request->lastname;
        $cluster->pa_firstname=$request->firstname;
        $cluster->pa_suffix='';
        $cluster->pa_middlename=$request->middlename;
        $cluster->branch_id=$request->branch_id;
        if($cluster->save()){
              return redirect('/Cluster/Create')->with('status', 'Cluster Added!');
        }else{
             return redirect('/Cluster/Create')->with('status', 'Cluster Not Saved!');
        }
        //dd($request);
    //    return view('pages.add-cluster',['branches'=>$data]);
    }
    public function PreUpdateCluster($id){

        $cluster= DB::table('cluster_info')
        ->select('cluster_info.*','branch.name','branch.region')
        ->join('branch','cluster_info.branch_id','=','branch.id')
        ->where('cluster_info.id','=',$id)
        ->get();

     
        $branches = new \App\Branch;
        $branches = $branches::all();
     
         return view('pages.update-cluster',['branches'=>$branches,'branch_info'=> $cluster]);
       
    }
    public function PostUpdateCluster(Request $request,$id){
        $cluster = new \App\Cluster_Information;
        $cluster = $cluster::find($id);
        $rules = [
            'branch_id'=>'required | exists:branch,id',
            'code'=>'required | unique:cluster_info,code,'.$id,
            'lastname'=>'required',
            'firstname'=>'required',
        ];        
        $messages = [
            'branch_id.required'=>'Provice branch location',
            'branch_id.exists'=>'Branch should be existing',
            'code.unique'=>'Cluster code existing',
            'lastname.required'=>'Provide loan officer\'s LASTNAME',
            'firstname.required'=>'Provide loan officer\'s FIRSTNAME',
            'middlename.required'=>'Provide loan officer\'s MIDDLENAME',
        ];
        $validator = \Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
             return redirect('/Cluster/Update/'.$id)
            ->withErrors($validator)
            ->withInput();
        }
        $cluster->code=$request->code;
        $cluster->pa_lastname=$request->lastname;
        $cluster->pa_firstname=$request->firstname;
        $cluster->pa_suffix='';
        $cluster->pa_middlename=$request->middlename;
        $cluster->branch_id=$request->branch_id;
        if($cluster->save()){
            return redirect('/Cluster/Update/'.$id)->with('status', 'Cluster Added!');
        }else{
             return redirect('/Cluster/Update/'.$id)->with('status', 'Cluster Not Saved!');
        }
               
    }
    public function PreAddMembersToCluster($id){
        $cluster = new \App\cluster_Information;
        $cluster = $cluster::find($id);
        dd($cluster);
    }
}
