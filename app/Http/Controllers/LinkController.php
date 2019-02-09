<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LinkController extends Controller
{

    //delete singel post
    public function delete(Request $request){
        $url = $this->val_input($request->url);
        $result = DB::table('link')->where('link', '=', $url)->delete();
        if($result){
            return redirect('show')->with('Inserted', 'Your information successfully deleted!');
        }else{
            return redirect('show')->with('errorInserted', 'Error!!, your information does not deleted!');

        }
    }

    //show all informations in show view file
    public function show(){
        $all = DB::table('link')->orderBy('created_at', 'desc')->paginate(2);

        return view('store.show',compact('all'));
    }

    //show page insert informations
    public function insert(){
        return view('store.insert');
    }

    //store information
    public function store(Request $request){
        $validatedData = $request->validate([
            'header' => 'required|max:255|min:5',
            'url' => 'required|max:255|min:10|url'
        ]);
        //is informaiton exist in table
        if($this->get_by_link($request->url)){
            $request->session()->flash('errorInserted','Error!!, your infromation exist!');
            return view('store.insert');
        }

         $header = $this->val_input($request->header);
         $url= $this->val_input($request->url);
         $desc = $this->val_input($request->description);
        // echo $mytime->toDateTimeString();

        $created_at = Carbon::now();
        $updated_at = Carbon::now();
        $result = DB::table('link')->insert(
            ['header'=>$header,'link'=>$url,'description'=>$desc,'created_at'=>$created_at,'updated_at'=>$updated_at]
        );

        if($result){
            return redirect('show')->with('Inserted','Your information successfully inserted!');
        }else{
            $request->session()->flash('errorInserted','Error!!, in insert your informations!');
        }

        return view('store.insert');
    }


    //get information by link
    public function get_by_link($url){
        $info= DB::select('select id from link where link = ?', [$url]);
        if(count($info)>0){
            if($info[0]->id >0){
                return true;
            }
        }
        else{
            return false;
        }
    }

    //validation inputs
    public function val_input($data){
        return htmlspecialchars(htmlentities(trim($data)));
    }

    //change or edit signle link
    public function change(Request $request){

        //get information and validate it
        $url = $this->val_input($request->url);

        //is informaiton exist in table
        //if information exsit update it else show error doest exist
        if($this->get_by_link($request->url)){
            /**
             * if infomations exist
             * get informations by link and set it to the change file
            */
            $data = DB::table('link')->where('link', '=', $url)->get();
            $data =$data[0];

            return view('store.change',compact('data'));
        }else{
            return redirect('show')->with('errorInserted', 'Error!!, your information does not exist!');
        }
    }

    //update sigle link
    public function update(Request $request){
        $validatedData = $request->validate([
            'header' => 'required|max:255|min:5',
            'url' => 'required|max:255|min:10|url'
        ]);
        echo "<ul>";
            foreach ($errors->all() as $error)
                echo '<li>{{ $error }}</li>';
        echo "</ul>";
        return $validatedData;
        $header = $this->val_input($request->header);
        $url= $this->val_input($request->url);
        $url_hidden= $this->val_input($request->url_hidden);
        $desc = $this->val_input($request->description);
       // echo $mytime->toDateTimeString();
       $created_at = Carbon::now();
       $updated_at = Carbon::now();

       $created_at = Carbon::now();
       $updated_at = Carbon::now();
       $result =DB::table('link')
           ->where('link', $url_hidden)
           ->update(
           ['header'=>$header,'link'=>$url,'description'=>$desc,'updated_at'=>$updated_at]
       );

       if($result){
           echo 'redirect';
           return redirect('show')->with('Inserted','Your information successfully updated!');
       }else{
           echo 'message eroor';
           $request->session()->flash('errorInserted','Error!!, in update your informations!');
       }

    }


    //show result page and get post informations
    public function search(Request $request){
        if($request->search==null){
           return redirect()->route('show');
        }
        $search =$this->val_input($request->search);
        $all = DB::table('link')->where('link','=',$search)->orWhere('header','=',$search)->orderBy('created_at', 'desc')->paginate(2);
        return view('store.search',compact('all'));
    }
}
