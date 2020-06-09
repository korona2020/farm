<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Category;
use App\Http\Requests\ProductsRequest;
use App\Product;
use Illuminate\Support\Str;




class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //
        return view('products.index')
                ->with('products', Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        //
        $categories = Category::pluck('name','id');
        return view('products.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ProductsRequest $request)
    {

        if($request->hasFile('image'))
        {

            $image = $request->file('image');
            $filename = $image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(100, 100);
            $image_resize->save(public_path('img/products/' . $filename));


            //create new product
            Product::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'price' => $request->price,
                'discount' => $request->discount,
                'unit' => $request->unit,
                'category_id' => $request->category_id,
                'description'=>$request->description,
                'image' => $filename

            ]);

        }
        //flash message
        session()->flash('success','Produkti u shtua me sukses');

        //redirect
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        //
        $product = Product::findOrFail($id);
        return view('products.edit')
            ->with('product',$product)
            ->with('categories',Category::pluck('name','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ProductsRequest $request, $id)
    {
        //
        $product = Product::findOrFail($id);
        $old_image = $product->image;
        if($request->hasFile('image'))
        {
            unlink(public_path('img/products/') . $old_image);
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(270, 350);
            $image_resize->save(public_path('img/products/' . $filename));



            //update product
            $product->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'price' => $request->price,
                'discount' => $request->discount,
                'unit' => $request->unit,
                'category_id' => $request->category_id,
                'description'=>$request->description,
                'image' => $filename

            ]);

        }
        //flash message
        session()->flash('success','Produkti u editua me sukses');

        //redirect
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
