   
   @extends('layouts.tempMain')

   @section('content')


   	<!-- App-content opened -->
       <div class="app-content icon-content">
        <div class="section">


            	<!-- row opened -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">FAQs</div>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">

                                        <section class="row">

                                            <section class="col-4">
                                                @if (session('status'))
                                                <div class="alert alert-success">
                                                    {{ session('status') }}
                                                </div>
                                                @endif

                                                
                                                <form method="post" action="{{ url('create-faq') }}" accept-charset="UTF-8">                                                   
                                                    @csrf

                                                <div class="form-group">
                                                    <label>Question</label>
                                                   <input type="text" class="form-control" name="Question" required=""      >
                                                </div>

                                                <div class="form-group">
                                                    <label>Answer</label>
                                                    <textarea name="Answer" class="form-control" required=""></textarea>
                                                </div>

                                                <button type="submit" name="save" class="btn btn-sm btn-success">Submit</button>
                                                </form>

                                            </section>

                                            <section class="col-8">
                                                
                                                <div class="table-responsive">
                                                    <table id="example" class="table table-bordered key-buttons text-nowrap">
                                                        <thead style="text-transform: capitalize;"                                                                                                      >
                                                            <tr>
                                                                <th class="border-bottom-0">#</th>
                                                                <th class="border-bottom-0">Question</th>
                                                                <th class="border-bottom-0">Answer</th>
                                                                <th class="border-bottom-0">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($list as $item)   
                                                            <tr>
                                                                <td>{{$item->id}}</td>
                                                                <td>{{$item->Question}}</td>
                                                                <td>{{$item->Answer}}</td>
                                                                <td>{{$item->Status}}</td>
                                                            </tr>
                                                            @endforeach
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </section>

                                        </section>


										
									</div>
								</div>
							</div>
						</div>
						<!-- row closed -->
        
        </div>
       </div>


   @endsection