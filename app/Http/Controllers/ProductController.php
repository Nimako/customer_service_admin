<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    
    public function AllProduct(Request $request){    

        $data['list'] = Product::all();

        return view('product/allProduct',$data);

        
  
    }


    public function AddProduct(Request $request){    

        $data['category'] = DB::table('productcategory')->where('status','active')->get();

        return view('product/addProduct',$data);
  
    }


    public function SaveProduct(Request $request){
      
        $productID = strtoupper(uniqid());

        $UploadFile =  $request->file('productImage'); 

        $request->request->add(['ProductID' => $productID]);


        // if($request->hasfile('productImage')){

        //     foreach($UploadFile as $tempFile){

        //         echo $tempFile;

        //     }
        // }

        // die();

        $product_imagePath1 = null;
        $product_imagePath2 = null;
        $product_imagePath3 = null;
        $product_imagePath4 = null;

        $product = new Product();

        $product->productID      = $productID;
        $product->ProductName    = $request->ProductName;
        $product->Category       = $request->Category;
        $product->SalesPrice     = $request->SalesPrice;
        $product->Quantity       = $request->Quantity;
        $product->Warranty       = $request->Warranty;
        $product->description    = $request->description;
        $product->featuredVideo  = $request->featuredVideo;
        $product->product_img1   = $product_imagePath1;
        $product->product_img2   = $product_imagePath2;
        $product->product_img3   = $product_imagePath3;
        $product->product_img4   = $product_imagePath4;

        $product->save();
  
        return redirect('add-product')->with('status', 'Product Save!');

      }


          //******************************************************************* */

    public static function GenerateQuality($imageSize){

        if($imageSize >= 5000000){
          return 40;
        }elseif($imageSize <= 4000000 && $imageSize >= 3000000){
          return 50;
        }elseif($imageSize <= 3000000 && $imageSize >= 2000000){
          return 60;
        }elseif($imageSize <= 2000000){
          return 70;
        }else{
          return 80;
        }
    
      }
    
    
    public static function UploadMedia(request $request){
    
        $UploadFile =  $request->file('productImage'); 
    
        //$UploadFile->getClientOriginalName();
        //$UploadFile->getRealPath();      //temp file
        //$UploadFile->getClientOriginalExtension();
        //$UploadFile->getSize();
        //$UploadFile->getClientMimeType();
  
        $allowImage = ["gif","png","jpeg","jpg"];
  
        if($request->hasfile('productImage'))
        {
        
        
  
          $extension =  $UploadFile->getClientOriginalExtension();
  
          if(in_array(strtolower($extension),$allowImage)){
  
              $quality = self::GenerateQuality($UploadFile->getSize());
        
              $info = getimagesize($UploadFile);
              if ($info['mime'] == 'image/jpeg' || $info['mime'] == 'image/jpg' ) $image = imagecreatefromjpeg($UploadFile);
              elseif ($info['mime'] == 'image/gif')  $image = imagecreatefromgif($UploadFile);
              elseif ($info['mime'] == 'image/png')  $image = imagecreatefrompng($UploadFile);
              elseif ($info['mime'] == 'image/webp') $image = imagecreatefromwebp($UploadFile);
              
              $productID  = $request->ProductID; 
              
              $NewFileName  = md5(microtime().$productID).".jpeg";  
        
              $path = public_path().'/product/'.$productID.'/';
              File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
              $NewPath = $path.$NewFileName;
        
              imagewebp($image,$NewPath,$quality);
              imagedestroy($image); 
        
              return '/product/'.$productID.'/'.$NewFileName;
  
         }else{
              return false;
         }
    
        }
    
       }
}
