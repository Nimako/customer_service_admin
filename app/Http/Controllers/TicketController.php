<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    private  $response = [];


    public function AllTicket(Request $request){    


      $data['AllTicket']  = Ticket::all();

      return view('ticket/openTicket',$data);

    }

    public function TicketDetail($id){    


      $data['info']  = Ticket::where("id",$id)->first();

      return view('ticket/ticketDetails',$data);

    }

    public function UpdateTicket(Request $request){
      
      $ticket = Ticket::find($request->TicketID);

      $ticket->Reply       = $request->Reply;
      $ticket->DateUpdated = date('Y-m-d h:i:s');
      $ticket->Status     = $request->Status;
      $ticket->ReplyBy    = 1;


      $ticket->save();

      return redirect()->route('updateTicket', [$request->TicketID]);

    }



    // public function GetTicket(Request $request){

    //   $TicketId = $request->input('TicketID');

    //   $client = Client::where('PhoneNum',$request->PhoneNum)->first();

    //   if(empty($client->id)){

    //     return response()->json(['statusCode' => 500,  "message" => "User Not found"]);

    //   }else{

    //   $list = Ticket::where('id', $TicketId)->first();

    //   if(!empty($list)){
    //      return response()->json(['payload'=>$list,'message'=>'Ticket found','statusCode'=>200],200);
    //   }else{
    //      return response()->json(['payload'=>$list,'message'=>'Ticket not found','statusCode'=>500],200);
    //   }

    //   }

    // }


    
    // public function SaveTicket(Request $request)
    // {
        
    //     # Field Validations
    //     $validator = Validator::make($request->all(), [
		//             'Title'       => 'bail|required',
    //     ]);
          
    //     if($validator->fails()) {
    //        return ['statusCode' => 500, 'message'=>$validator->errors()];
    //     } 

    //     # Assignment of request variables
    //     $Ticket = new Ticket();

    //     $client = Client::where('PhoneNum',$request->PhoneNum)->first();

    //     if(empty($client->id)){

    //       $this->response = ['statusCode' => 500,  "message" => "User Not found"];

    //     }else{

    //     #Variable Assignments
    //     $Ticket->UserID       = $client->id;
    //     $Ticket->Category     = $request->Category;
    //     $Ticket->ProductID    = $request->ProductID;
    //     $Ticket->Title        = $request->Title;
    //     $Ticket->Media        = $request->Media;
    //     $Ticket->Description  = $request->Description;
    //     $Ticket->Status       = "Pending";

    //     if($Ticket->save()) {
    //         $this->response = ['statusCode' => 200,  "message" => "Ticket save"];
    //     }else{
    //         $this->response = ['statusCode' => 500, "message" => "Failed Saving"];
    //     } 

    //   }
  
    //     return $this->response;  
    // }

    


}
