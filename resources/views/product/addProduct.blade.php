    
    @extends('layouts.tempMain')

    @section('content')
    
    <!-- App-content opened -->
    <div class="app-content icon-content">
        <div class="section">

            <div class="row">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Add New Product</div>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                            </div>
                        </div>
                        <div class="card-body">

                            <form method="post" action="{{ url('save-product') }}" accept-charset="UTF-8" enctype="multipart/form-data">                                                   
                                @csrf

                            <section class="row">
                               <section class="col-md-6">
                            
                            <!-- Text input-->
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="ProductName">Product Name</label>  
                                <div class="col-md-6">
                                <input id="ProductName" name="ProductName" placeholder="" class="form-control input-md" required="" type="text" required>
                                </div>
                            </div>

                               <!-- Text input-->
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="SalesPrice">Sale Price</label>  
                                <div class="col-md-6">
                                <input  id="SalesPrice" name="SalesPrice" placeholder="" class="form-control input-md" required="" type="text" required>
                                </div>
                            </div>

                               <!-- Text input-->
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="SalesPrice">Category</label>  
                                <div class="col-md-6">
                                <select name="Category" class="form-control" id="Category" required>
                                    <option value="">select</option>
                                    <?php if(!empty($category)): ?>
                                    <?php foreach($category as $item): ?>
                                       <option value="<?= $item->id; ?>"><?= $item->category; ?></option>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                                </div>
                            </div>

                               <!-- Text input-->
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="Quantity">Quantity</label>  
                                <div class="col-md-6">
                                <input min="0" id="Quantity" name="Quantity" placeholder="" class="form-control input-md" required="" type="number">
                                </div>
                            </div>

                           </section>

                           <section class="col-md-6">

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="Warranty">Warranty(Year)</label>  
                                <div class="col-md-6">
                                <input min="0" id="Warranty" name="Warranty" placeholder="" class="form-control input-md" required="" type="number">
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="description">Description</label>  
                                <div class="col-md-6">
                                <textarea min="0" id="description" name="description" placeholder="" class="form-control input-md" required="" ></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="featuredVideo">featured Video link</label>  
                                <div class="col-md-6">
                                <input min="0" id="featuredVideo" name="featuredVideo" placeholder="" class="form-control input-md"  type="text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="product_img1">Product Images</label>  
                                <div class="col-md-6">
                                <input multiple="" name="productImage[]"  placeholder="" class="form-control input-md"  type="file">
                                </div>
                            </div>

                            </section>
                            <button type="submit" class="btn btn-md btn-success" name="save">Submit</button>
                        </section>
                    </form>
                    </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- App-content closed -->

    @endsection