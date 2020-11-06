   
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
										<div class="card-title">Customers</div>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-bordered key-buttons text-nowrap">
												<thead style="text-transform: capitalize;"                                                                                                      >
													<tr>
                                                        <th></th>
                                                        <th class="border-bottom-0">Full Name</th>
                                                        <th class="border-bottom-0">Phone Number</th>
                                                        <th class="border-bottom-0">Email</th>
                                                        <th class="border-bottom-0">Region</th>
                                                        <th class="border-bottom-0">City/Town</th>
                                                        <th class="border-bottom-0">Gender</th>
														<th class="border-bottom-0">Date Joined</th>
														<th class="border-bottom-0 text-center"></th>
													</tr>
												</thead>
												<tbody>
                                                    @if(!empty($list))
                                                    @foreach ($list as $item)   
                                                    <tr>
                                                        <th></th>
                                                        <td>{{$item->FirstName." ".$item->LastName}}</td>
                                                        <td>{{$item->PhoneNum}}</td>
                                                        <td>{{$item->Email}}</td>
                                                        <td>{{$item->Region}}</td>
														<td>{{$item->CityTown}}</td>
                                                        <td>{{$item->Gender}}</td>
														<td>{{date("M d, Y h:i A",strtotime($item->DateCreated))}}</td>
														<td class="text-center">
                                                            <a href="{{url("ticket-details",$item->id)}}" class="btn btn-success btn-md"><i class="fa fa-eye"></i> View</a>
                                                        </td>
													</tr>
                                                    @endforeach
                                                    @endempty

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