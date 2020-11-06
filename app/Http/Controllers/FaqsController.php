<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqsController extends Controller
{
    public function index(){

        $data['list'] = DB::table('faqs')->where('Status','ACTIVE')->get();

        return  view("administration/faqs",$data);
    }

    public function createFaq(request $request){
        
        $query = DB::table('faqs')->insert(
            ['Question' => $request->Question, 'Answer' => $request->Answer]
        );

        if($query){

            //return redirect()->action([FaqsController::class, 'index']);
            return redirect('faq')->with('status', 'Profile updated!');

        }else{
            return redirect()->action([FaqsController::class, 'index']);

        }
    }



    
}
