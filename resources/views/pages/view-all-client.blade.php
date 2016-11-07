@extends('layouts.admin-layout')
@section('content')
<form method="post" id="myForm">
    <div style="margin-top:30px"></div>
    

    <div id="step-1">
      
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> List of All Clients</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <table class="table table-striped">
            <thead>
                <th>Name</th>
                <th>Branch</th>
                <th>Name</th>
            </thead>
            <tbody>
                @foreach($clients as $x)
                    <tr>
                        <td>{{$x->lastname.', '.$x->firstname.', '.$x->middlename}}</td>
                        <td>{{$x->branch_id}}</td>
                        <td>{{$x->mobile_number}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>  
    </div>
   
   
</form> 
@stop
@section('page-script')

@stop