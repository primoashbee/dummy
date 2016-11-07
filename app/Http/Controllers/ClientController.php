<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use Response;
class ClientController extends Controller
{
    
    public function Index(){
        $client = new \App\Client_Personal_Information;
        $data = $client::all();
        return view('pages.view-all-client',['clients'=>$data]);
   
    }
    public function CreateClient(Request $request){
    
       $client = new \App\Client_Personal_Information;
       $rules =[
           'lastname'=>'required',
           'firstname'=>'required',
           'middlename'=>'required',
           'tin'=>'numeric',
           'nickname'=>'required',
           'birthday'=>'required',
           'home_address'=>'required',
           'home_address_year'=>'required',
           'mobile'=>'required|numeric',
           'civil_status'=>'required',
           'sex'=>'required',
           'house_rented'=>'required',
           'hh_lname'=>'required',
           'hh_fname'=>'required',
           'hh_age'=>'required|numeric',
           'hh_relationship'=>'required',
           'hh_occupation'=>'required',
           'hh_income'=>'required|numeric',
           'hh_address'=>'required',
           'ba_main'=>'required',
           'ba_year_in_business'=>'required',

       ];
       $messages = [
           'lastname.required' => 'Please enter lastname',
           'firstname.required'=>'Please enter firstname',
           'middlename.required'=>'Please enter middlename',
           'nickname.required'=>'Please enter nickname',
           'birthday.required'=>'Please enter birthday',
           'home_address.required'=>'Please enter Address of Client',
           'home_address_year.required'=>'Please enter Address Year',
           'mobile.required'=>'Please enter mobile number',
           'mobile.numeric'=>'Mobile number should be numeric',
           'civil_status.required'=>'Please select civil status',
           'sex.required'=>'Please select sex',
           'house_rented.required'=>'Please select house rented',
           'hh_lname.required'=>'Please Enter household member lastname',
           'hh_fname.required'=>'Please Enter household member firstname',
           'hh_age.required'=>'Please Enter household member age',
           'hh_relationship.required'=>'Please Enter household member relationship to client',
           'hh_occupation.required'=>'Please Enter household members occupation',
           'hh_income.required'=>'Please Enter household members monthly income',
           'hh_income.numeric'=>'Household members monthly income should be numeric',
           'hh_address.required'=>'Please Enter household members address',
           'ba_main.required'=>'Please Enter Main business',
           'ba_year_in_business.required'=>'Please Enter Business Years',
       ];
        $validator =Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect('/Clients')
            ->withErrors($validator)
            ->withInput();
        }
            $client->lastname=$request->lastname;
            $client->firstname=$request->firstname;
            $client->middlename=$request->middlename;
            $client->suffix=$request->suffix;
            $client->nickname=$request->nickname;
            $client->mother_name=$request->mother_name;
            $client->spouse_name=$request->spouse_name;
            $client->TIN=$request->tin;
            $client->birthday=$request->birthday;
            $client->home_address=$request->home_address;
            $client->home_year=$request->home_address_year;
            $client->business_address=$request->business_address;
            $client->business_year=$request->business_address_year;
            $client->mobile_number=$request->mobile;
            $client->telephone_number=$request->telephone;
            $client->civil_status=$request->civil_status;
            $client->sex=$request->sex;
            $client->education=$request->education;
            $client->house_type=$request->house_rented;

            if($client->save()){
                $id = $client->id;
                $chi = new \App\Client_Household_Income;
                $chi->clients_id = $id;
                $chi->member_lastname=$request->hh_lname;
                $chi->member_firstname=$request->hh_fname;
                $chi->member_middlename=$request->hh_mname;
                $chi->member_suffix=$request->hh_suffix;
                $chi->member_age=$request->hh_age;
                $chi->member_relationship=$request->hh_relationship;
                $chi->member_occupation=$request->hh_occupation;
                $chi->member_monthly_income=$request->hh_income;
                $chi->member_address=$request->hh_address;
                if($chi->save()){
                    $ba = new \App\Client_Business_Activities;
                    $ba->clients_id = $id;
                    $ba->main_business = $request->ba_main;
                    $ba->secondary_business = $request->ba_secondary;
                    $ba->main_business_years = $request->ba_year_in_business;
                    $ba->number_of_paid_employees = $request->ba_emp_total;
                    $ba->business_place_characteristic = $request->ba_workplace;
                    $ba->save();

                   return redirect('/Clients')->with('status', 'Client Created!');

             }

            }
           
      
      

    }
    public function Summary($id){
      $client = new \App\Client_Personal_Information;
      $person = $client::findOrFail($id)->income;  
      echo $person->member_lastname.' '.$person->member_firstname;
    }
}
