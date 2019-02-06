<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        echo "<style>
            *{
                font-size:1.4rem;
                color:blue;
            }
        </style>";
        $email='computercodemohammad@gmail.com';
        $info = DB::select('select id from users where email=?',[$email]);
       if(count($info)){
           //show informations
            $informations = DB::select('select * from users where email=?',[$email]);
            foreach($informations as $info){
                echo 'your id is => '.$info->id.'<br>';
                echo 'your email is => '.$info->name.'<br >';
                echo 'your email is => '.$info->email.'<br >';
                echo 'your password is => '.$info->password.'<br >';
            }

           //delete informations
            $result = DB::delete('delete from users where email = ?', [$email]);
            if($result){
                echo 'your informations was deleted'.'<br>';
                echo 'please reload page for insert your informations'.'<br>';
            }else{
                echo 'your informations does not delete'.'<br>';;
            }
        }else{
            //insert informations
            echo 'no you must insert your informations'.'<br>';;
            $result = DB::insert('insert into users (name,email,password) values (?,?,?)', ['hedieh', 'computercodemohammad@gmail.com','computercodemohammad']);
            if($result){
                echo 'your informations was inserted'.'<br>';

                //shwo inserted informations
                //show informations
                $informations = DB::select('select * from users where email=?',[$email]);
                foreach($informations as $info){
                    echo 'your id is =>'.$info->id.'<br>';
                    echo 'your name is => '.$info->name.'<br >';
                    echo 'your email is => '.$info->email.'<br >';
                    echo 'your password is => '.$info->password.'<br >';
                }
            }else{
                echo 'your informations does not inserted'.'<br>';;
            }

       }




        // $deleted = DB::delete('delete * from users');
        // $data =DB::select('insert into users(id,name,email,password)values(?,?,?,?)',[1,'mohamamd','computercodemohammad@gmail.com','computercodemohammad']);
        // return $data;

    }
}
