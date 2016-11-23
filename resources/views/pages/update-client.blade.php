@extends('layouts.admin-layout')
@section('content')
<form method="post" id="myForm">
    <div style="margin-top:30px"></div>
    
    <div id="step-1">
@{{dd($information)}}
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Personal Information</h1>
                <a href="\Clients"><i class="fa fa-long-arrow-left fa-3x" aria-hidden="true"> Back </i></a>

            </div>
            <!-- /.col-lg-12 -->
        </div>
            
        <div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
 
            @if (session('status'))
                <div class="alert alert-success fade-in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
       
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                    <label for="lastname">Last Name</label>
                      
                    <input type="text" class="form-control" id="lastname" name ="lastname" value ="{{$information->personal->lastname}}" required>
                    </div>
                </div>
                
            
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                    <label for="firstname">Firstname Name</label>
                    <input type="text" class="form-control" id="firstname" name ="firstname" value ="{{$information->personal->firstname}}" required>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                    <label for="middlename">Middle Name</label>
                    <input type="text" class="form-control" id="middlename" name ="middlename" value ="{{$information->personal->middlename}}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                    <label for="suffix">SUFFIX (ex. <i>JR, I, II, III</i>)</label>
                    <input type="text" class="form-control" id="suffix" name ="suffix" value ="{{$information->personal->suffix}}">
                    </div>
                </div>
                
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                    <label for="nickname">Nickname</label>
                    <input type="text" class="form-control" id="nickname" name ="nickname"  value ="{{$information->personal->nickname}}"required >
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                    <label for="mother_name">Mother Maiden Name</label>
                    <input type="text" class="form-control" id="mother_name" name ="mother_name" value ="{{$information->personal->mother_name}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                    <label for="spouse_name">Spouse Name</label>
                    <input type="text" class="form-control" id="spouse_name" name ="spouse_name" value ="{{$information->personal->spouse_name}}">
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                    <label for="tin">TIN </label>
                    <input type="text" class="form-control" id="tin" name ="tin" value ="{{$information->personal->TIN}}">
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                    <label for="birthday">Birthday </label>
                    <input type="date" class="form-control" id="birthday" name ="birthday" value ="{{$information->personal->birthday}}"required>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="form-group">
                    <label for="home_address">Home Address</label>
                    <input type="text" class="form-control" id="spouse_name" name ="home_address" value ="{{$information->personal->home_address}}" required>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                    <label for="home_address_year">Home Address Corresponding Year </label>
                    <input type="text" class="form-control" id="home_address_year" name ="home_address_year"  value ="{{$information->personal->home_year}}"required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="form-group">
                    <label for="business_address">Business Address</label>
                    <input type="text" class="form-control" id="business_address" name ="business_address" value ="{{$information->personal->business_address}}" >
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                    <label for="business_address_year">Business Address Corresponding Year </label>
                    <input type="text" class="form-control" id="business_address_year" name ="business_address_year" value ="{{$information->personal->business_year}}" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                    <label for="mobile">Mobile Number (ex.<i>0923-456-7890</i>)</label>
                    <input type="text" class="form-control" id="mobile" name ="mobile" value ="{{$information->personal->mobile_number}}" required>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                    <label for="telephone">Telephone # (ex.<i>(045)-222-1123</i>) </label>
                    <input type="text" class="form-control" id="telephone" name ="telephone" value ="{{$information->personal->telephone_number}}">
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                    <label for="civil_status">Civil Status </label>
                    <select type="text" class="form-control" id="civil_status" name ="civil_status" required>
                        <option value="{{$information->personal->civil_status}}">{{$information->personal->civil_status}}</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Separated">Separated</option>
                        <option value="Widow">Widow</option>
                    </select>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                    <label for="sex">Sex</label>
                    <select type="text" class="form-control" id="sex" name ="sex" required>
                        <option value="{{$information->personal->sex}}">{{$information->personal->sex}}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                    <label for="education">Highest Educational Attainment</label>
                    <select type="text" class="form-control" id="education" name ="education">
                        <option value="{{$information->personal->education}}">{{$information->personal->education}}</option>
                        <option value="Male">College</option>
                        <option value="Vocational">Vocational</option>
                        <option value="High School">High School</option>
                        <option value="Elementary">Elementary</option>
                        <option value="None">None</option>
                    </select>
                    
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                        <label for="house_rented">House</label>
                    <select type="text" class="form-control" id="house_rented" name ="house_rented" required>
                            <option value="{{$information->personal->house_type}}">{{$information->personal->house_type}}</option>
                            <option value="Owned">Owned</option>
                            <option value="Rented">Rented</option>
                        </select>
                    </div>
                
                </div>
            </div>
        </div>
        
    </div>
    <div id="step-2">
        
        <h1 style="margin-top:-20px"     > &nbsp;</h1>
        <h1 > Household Composition and Source of Income </h1>
        <hr>
        <br>
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                    <label for="hh_lname">Member Last Name</label>
                    <input type="text" class="form-control" id="hh_lname" name ="hh_lname" value ="{{$information->household->member_lastname}}" required>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                    <label for="hh_fname">Member First Name</label>
                    <input type="text" class="form-control" id="hh_fname" name ="hh_fname"  value ="{{$information->household->member_firstname}}" required>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                    <label for="hh_mname">Member Middle Name</label>
                    <input type="text" class="form-control" id="hh_mname" name ="hh_mname"  value ="{{$information->household->member_middlename}}" required>
                    </div>
                </div> 
                <div class="col-md-1 col-lg-1">
                    <div class="form-group">
                    <label for="hh_age">Age</label>
                    <input type="number" class="form-control" id="hh_age" name ="hh_age"  value ="{{$information->household->member_age}}" style="width:70px" required>
                    </div>
                </div> 
                <div class="col-md-2 col-lg-2">
                    <div class="form-group">
                    <label for="hh_suffix">SUFFIX</label>
                    <input type="text" class="form-control" id="hh_suffix" name ="hh_suffix"  value ="{{$information->household->member_suffix}}" style="width:50px" required>
                    </div>
                </div>
            </div>
            <div class="row">
              
                <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                    <label for="hh_relationship">Relationship to Client</label>
                    <input type="text" class="form-control" id="hh_relationship" name ="hh_relationship"  value ="{{$information->household->member_relationship}}" required>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                    <label for="hh_occupation">Occupation</label>
                    <input type="text" class="form-control" id="hh_occupation" name ="hh_occupation"  value ="{{$information->household->member_occupation}}"required>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                    <label for="hh_year_in_occupation">Years</label>
                    <input type="number" class="form-control" id="hh_year_in_occupation" name ="hh_year_in_occupation"  value ="{{$information->household->member_occupation_years}}"style="width:70px">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                    <label for="hh_income">Monthly Income (Php)</label>
                    <input type="number" class="form-control" id="hh_income" name ="hh_income"  value ="{{$information->household->member_monthly_income}}"required>
                    </div>
                </div>
                <div class="col-md-9 col-lg-9">
                    <div class="form-group">
                    <label for="hh_address">Address</label>
                    <textarea id="hh_address" name = "hh_address"  value ="{{$information->household->member_address}}" class="form-control" width="3" row="3" style="margin: 0px -485.556px 0px 0px; width: 759px; height: 75px;" required>{{$information->household->member_address}}</textarea>
                  
                    </div>
                </div>  
            </div>
        
        
    </div>
    <div id="step-3">
        
        <h1 style="margin-top:-20px"> &nbsp;</h1>
        <h1 > Business Activities </h1>
        <hr>
       
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="ba_main">Main Business</label>
                        <input type="text" class="form-control" id="ba_main" name="ba_main"  value ="{{$information->business->main_business}}" required>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2">
                    <div class="form-group">
                        <label for="ba_year_in_business">Years in Business</label>
                        <input type="text" class="form-control" id="ba_year_in_business" name="ba_year_in_business"  value ="{{$information->business->main_business_years}}" required>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="ba_secondary">Secondary Business</label>
                        <input type="text" class="form-control" id="ba_secondary" name ="ba_secondary"  value ="{{$information->business->secondary_business}}">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="ba_emp_total"># of Paid Employess</label>
                        <input type="text" class="form-control" id="ba_emp_total" name ="ba_emp_total" value ="{{$information->business->number_of_paid_employees}}">
                    </div>
                </div> 
                <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="ba_workplace">Workplace</label>
                            <select class="form-control" id="ba_workplace" name ="ba_workplace"  >
                                <option value="{{$information->business->business_place_characteristic}}">{{$information->business->business_place_characteristic}} <option>
                                <option value="Owned">Owned</option>
                                <option value="Rented">Rented</option>
                                <option value="Home-Based">Home-Based</option>
                                <option value="Commercial">Commercial</option>
                                <option value="Ambulant">Ambulant</option>
                            </select>
                        </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-lg-offset-5 col-md-offset-5">
                    <input type="submit" value="submit" name="submit" class="btn btn-success btn-lg">
                </div>
            </div>
        
        
    </div>
   
</form> 
@stop
@section('page-script')
<script>
var curr = 0
$(function(){
    /*
    $('#step-2').hide()
    $('#step-3').hide()
   */
    $.each($('*[required]'),function(k,v){
          $(this).css('border-color','#337ab7')
          $(this).removeAttr('required')
        
    })
    
    
})
/*
$('.btn-back').click(function(){
    console.log(curr)
    if(curr==0){
    }else if (curr==1){
        $('#step-2').hide(100)
        $('#step-3').hide(100)
        $('#step-1').show(100)
    curr=curr-1

    }else if(curr==2){
        $('#step-3').hide(100)
        $('#step-1').hide(100)
        $('#step-2').show(100)
    curr=curr-1    
    }
    console.log(curr)
})

$('.btn-next').click(function(){
     console.log(curr)
    if(curr==0){
   
        $('#step-1').hide(100)
        $('#step-3').hide(100)
        $('#step-2').show(100)
        curr=curr+1
    }else if (curr==1){
   
        $('#step-1').hide(100)
        $('#step-2').hide(100)
        $('#step-3').show(100)
        curr=curr+1
     
        

    }
    
    console.log(curr)
})

$('#myForm').submit(function(e){
    if (curr==2){

    }else{
        $('.btn-next')[0].click();
        e.preventDefault();
    }
})
*/
</script>
@stop