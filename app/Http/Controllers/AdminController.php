<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestForm;
use Intervention\Image\ImageManagerStatic as Image;
use App\Admin;
use App\Brands;
use App\Categories;
use App\Http\Requests\RequestProducts;
use App\ImagesProducts;
use App\Products;
use App\Tags;
use Illuminate\Http\Request;
use Validator,  Response;

class AdminController extends Controller
{

    public function dashboard()
    {
        $typeHead = 'headerAdmin';
        return view('admin.dashboard', compact('typeHead'));
    }


    public function showProduct()
    {
        $typeHead = 'headerAdmin';
        $products = Products::paginate(10);
         return  view('admin.products', compact('typeHead', 'products'));

    }

    public function showFormCategories(){

        $typeHead = 'headerAdmin';
        $categories = Categories::paginate(10);
        return view('admin.categories', compact('typeHead', 'categories'));

    }


    public function showFormCreate(){

        $tags = Tags::all();
        $categories = Categories::all();
        $brands = Brands::all();
        $title = 'Thêm mới sản phẩm';
        $typeHead = 'adminCreateProducts';

        return view('admin.page.create-products', compact('typeHead','title', 'tags', 'brands', 'categories'));

    }

    public function showFormbrands(){
        $brands = Brands::all();
        $typeHead = 'adminCreateProducts';
        return view('admin.brands', compact('typeHead', 'brands'));
    }


    public function createProducts(RequestProducts $request){

        $name = $request->input('productName');
        $description = $request->input('description');
        $price = $request->input('price');
        $reducedPrice = $request->input('reducedPrice');
        $quantity = $request->input('quantity');
        $date = date('Y-m-d H:i:s');
        $tag = $request->input('tag_id');
        $category = $request->input('category_id');
        $brand = $request->input('brand_id');
        $status = $request->input('status');

        $getIdTag = Tags::where('tagName', '=', $tag)->get('id');
        foreach ($getIdTag as $id){
            $tag = $id->id;
        }

        $getIdCat = Categories::where('categoryName', '=', $category)->get('id');
        foreach ($getIdCat as $id){
            $category = $id->id;
        }

        $getIdBrand = Brands::where('brandName', '=', $brand)->get('id');
        foreach ($getIdBrand as $id){
            $brand = $id->id;
        }

        $product = Products::create([
            'productName' => $name,
            'description' => $description,
            'price' => $price,
            'reducedPrice' => $reducedPrice,
            'quantity' => $quantity,
            'datesubmit' => $date,
            'tag_id' => $tag,
            'category_id' => $category,
            'brand_id' => $brand,
            'status' => $status

        ]);

        if ($request->hasFile('files')){
            foreach ($request->file('files') as $file){
                $thumbnailImage = Image::make($file);
                $thumbnailImage->resize(450,400);
                $thumbnailImage->save(storage_path('app/public/'.$file->getClientOriginalName()));

                ImagesProducts::create([
                    'product_id' => $product->id,
                    'imagePath' => $file->getClientOriginalName()
                ]);
            }
        }


        //$product->save();

        return redirect()->route('admin.products');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function showFormEditProduct($id)
    {
        $tags = Tags::all();
        $categories = Categories::all();
        $brands = Brands::all();
        $product = Products::with('imagesproducts')->find($id);
        $image = ImagesProducts::find($id);
        $title = 'Sửa thông tin sản phẩm';
        $typeHead = 'adminCreateProducts';

        return view('admin.page.edit-products', compact('title', 'typeHead', 'product', 'tags', 'categories', 'brands', 'image'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function updateProduct($id, RequestProducts $request)
    {

        $product = Products::find($id);
        $imagesproducts = ImagesProducts::where('product_id', '=', $product->id);

        $product->update([
            'productName' => $request->get('productName'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'quantity' => $request->get('quantity'),
            'datesubmit' => date('Y-m-d H:i:s'),
            'reducedPrice' => $request->get('reducedPrice'),
            'status' => $request->get('status')
        ]);

        $getIdTag = Tags::where('tagName', '=', $request->get('tag_id'))->get('id');
        foreach ($getIdTag as $id){
            $tag = $id->id;
        }

        $getIdCat = Categories::where('categoryName', '=', $request->get('category_id'))->get('id');
        foreach ($getIdCat as $id){
            $category = $id->id;
        }

        $getIdBrand = Brands::where('brandName', '=', $request->get('brand_id'))->get('id');
        foreach ($getIdBrand as $id){
            $brand = $id->id;
        }

        $product->update(['tag_id' => $tag]);
        $product->update(['category_id' => $category]);
        $product->update(['brand_id' => $brand]);

        if ($request->hasFile('files')) {

            foreach ($request->file('files') as $file) {

                if (ImagesProducts::where('imagePath', '=', $file->getClientOriginalName())->count() < 1){

                    $thumbnailImage = Image::make($file);
                    $thumbnailImage->resize(450, 400);
                    $thumbnailImage->save(storage_path('app/public/' . $file->getClientOriginalName()));

                }else{

                    if ($imagesproducts->count() < 1 || $imagesproducts->count() >= 1) {

                        ImagesProducts::create([
                            'product_id' => $product->id,
                            'imagePath' => $file->getClientOriginalName()
                        ]);

                    }
                }
            }
        }

        return redirect()->route('admin.products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function ajaxDeleteById(Request $request)
    {

       switch ($request->input('type')){
           case 'deleteImgById':
               $idImg = ImagesProducts::find($request->input('id'));
               if ($idImg->delete()){
                   echo 'Delete Success';
               }
               break;

           case 'deleteProductById':
               foreach ($request->input('id') as $id){
                   $product = Products::with('imagesproducts')->find($id);
                   if ($product->delete()){
                       echo 'Delete Success';
                   }
               }
               break;

       }

    }


    public function addCategories(Request $request){

        $customMessenger =  [
            'categoryName.required' => 'Truờng bắt buộc phải nhập',
            'categoryName.min' => 'chuỗi ký tự quá ngắn',
            'categoryName.max' => 'chuỗi ký tự quá dài',
            'categoryName.string' => 'ký tự phải là chữ',
            'description.min' => 'chuỗi ký tự quá ngắn',
            'description.max' => 'chuỗi ký tự quá dài',
        ];


        $validator = Validator::make($request->all(), [
            'categoryName' => 'required|min:5|max:20|string',
            'description' => 'min:5|max:50'

        ], $customMessenger);

        if ($validator->fails()){
            return response()->json($validator->messages(), 200);
        }


        $categories = Categories::create([

        ]);

    }





}
