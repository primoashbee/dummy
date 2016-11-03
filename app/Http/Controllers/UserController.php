<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class UserController extends Controller
{
   /* public function index(){
        $c_info = new \App\Client_Personal_Information;
        $c_info->name = 'bigboy';
        
        $c_info->save();
        $c_id = $c_info->id;
        
        $c_hh = new \App\Client_Household_Income;
        $c_hh->clients_id = $c_id;
        $c_hh->income=rand();
        $c_hh->save();

    }*/
    public function index(){
        return view('pages.add_client',array('name'=>'Ashbee','title'=>'okay'));
    }
    public function show($id){
      /*  $poster = new \App\Post;
        $post = $poster::find($id);   
        
        $comment= $post->comment;
        echo '<h2>'.$post->title.'</h2>'
        echo '<h2>'.$post->body.'</h2>';
        
        foreach($comment as $z){
            echo $z->title." : ".$z->comment."<br>";
        }
        //$client = new \App\Client_Household_Income;
        */
        $client = new \App\Client_Personal_Information;
        
        $curr_client= $client::find($id);
        echo '<h1>I AM <b>' . $curr_client->name.'</b></h1>';
        echo '<h2>My income is <b> ' . $curr_client->income->income.'<b></h2>';
        
    }
}
