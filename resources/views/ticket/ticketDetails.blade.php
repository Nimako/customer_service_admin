    
    @extends('layouts.tempMain')

    @section('content')
    
    <!-- App-content opened -->
    <div class="app-content icon-content">
        <div class="section">

        
            <!-- row opened -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">{{$info->Title}}</div>
                            <div class="card-options ">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                               
                                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                    <div class="card  box-shadow-0 mb-0">
                                        <div class="card-header">
                                        <h4 class="card-title">{{$info->TicketID}} {{$info->Status}}</h4>
                                        </div>
                                        <div class="card-body">
                                                <div class="form-group row">
                                                    <label for="inputName1" class="col-md-3 col-form-label">Subject</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" value="{{$info->Title}}" id="inputName1" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmai2" class="col-md-3 col-form-label">Priority</label>
                                                    <div class="col-md-9">
                                                        <input type="text" disabled class="form-control" value="{{$info->Priority}}" id="Priority" name="priority" placeholder="priority">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword4" class="col-md-3 col-form-label">Category</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="Category" value="{{$info->Category}}" placeholder="Category">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputPassword4" class="col-md-3 col-form-label">Related Product</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="Product" id="Product" value="{{$info->ProductID}}" >
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputPassword4" class="col-md-3 col-form-label">Description</label>
                                                    <div class="col-md-9">
                                                        <textarea type="text" class="form-control" name="Description" id="Description">{{$info->Description}}</textarea>
                                                    </div>
                                                </div>

                                               
                                                <div class="form-group row">
                                                    <label for="inputPassword4" class="col-md-3 col-form-label">Media</label>
                                                    <div class="col-md-9">
                                                        
                                                    </div>
                                                </div>   

                                                <form method="post" action="{{ url('update-ticket') }}" accept-charset="UTF-8">                                                   
                                                @csrf

                                                <input type="hidden" name="TicketID" value="{{$info->id}}">

                                                <div class="form-group row" style="border-top:1px solid #00AE9C">
                                                 <label for="Reply" class="col-md-3 col-form-label"><b>Reply</b></label>
                                                 <textarea class="form-control" name="Reply" placeholder="Reply To ticket">{{$info->Reply}}</textarea>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputPassword4" class="col-md-3 col-form-label"><b>Status</b></label>
                                                    <div class="col-md-9">
                                                    <select class="form-control" name="Status" required="">
                                                        <option value="">--Select--</option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Completed">Completed</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                             
                                                <div class="form-group mb-0 mt-3 row justify-content-end">
                                                    <div class="col-md-9">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="submit" class="btn btn-secondary">Cancel</button>
                                                    </div>
                                                </div>


                                               </form>



                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row closed -->

           

        </div>
    </div>
    <!-- App-content closed -->

    @endsection