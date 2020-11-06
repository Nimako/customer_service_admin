   
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
										<div class="card-title">All Product</div>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
                                        
                                        @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                        @endif

										<div class="table-responsive">
											<table id="example" class="table table-bordered key-buttons text-nowrap">
												<thead style="text-transform: capitalize;"                                                                                                      >
													<tr>
                                                        <th class="border-bottom-0">#</th>
                                                        <th class="border-bottom-0">Media</th>
														<th class="border-bottom-0">Product</th>
														<th class="border-bottom-0">Sale Price</th>
														<th class="border-bottom-0">Quantity</th>
                                                        <th class="border-bottom-0">Warranty</th>
														{{-- <th class="border-bottom-0 text-center">View/Reply</th> --}}
													</tr>
												</thead>
												<tbody>
                                                    @foreach ($list as $item)   
                                                    <tr>
                                                        <td>{{$item->id}}</td>
                                                        <td></td>
                                                        <td>{{$item->ProductName}}</td>
														<td>{{$item->SalesPrice}}</td>
														<td>{{$item->Quantity}}</td>
                                                        <td>{{$item->Warranty}}</td>
														{{-- <td class="text-center">
                                                            <a href="{{url("ticket-details",$item->id)}}" class="btn btn-success btn-md"><i class="fa fa-eye"></i> View</a>
                                                        </td> --}}
													</tr>
                                                    @endforeach
                                                   
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- row closed -->
        
        </div>
       </div>


   @endsection