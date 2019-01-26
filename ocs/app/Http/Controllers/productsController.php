<?php
namespace App\Http\Controllers;

use App\Admin;
use App\category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class productsController extends Controller
{

    public function AdminShow()
    {
        $products=Admin::orderBy('id','desc')->paginate(8);

        return view('admin.ShowProduct',['products'=>$products]);
    }

    public function ShowCreateForm()
    {
        $cate=category::all();
        return view('admin.createProduct',['cate'=>$cate]);
    }
    public function AddProduct(Request $r)
    {
        $pro=new Admin;
        //to validate the inputs if not empty
//       $this->validate($r,[
//               'title'=>'required',
//                'description'=>'required',
//               'color'=>'required',
//               'price'=>'required',
//                'category'=>'required'
//
//       ]);
        $pro->title=$r->input('txttitle');
        $pro->description=$r->input('txtdescri');
        $pro->color=$r->input('txtcolor');
        $pro->price=$r->input('txtprice');
        $pro->category=$r->input('txtcate');

        $pro->save();
//        $products=Admin::paginate(10);
//        return view('admin.ShowProduct',['products'=>$products]);
        return redirect()->back();
        // return view('admin.ShowProduct');

    }

    public function EditProduct($id)
    {
        $p=Admin::find($id);
        $cat=category::all();
        return view('admin.EditProduct',['p' => $p,'cat'=>$cat]);
    }
    public function UpdateProduct(Request $r,$id)
    {
        $pro=new Admin();
        $pro->exists=true;
        $pro->id=$id;
        $pro->title=$r->input('txttitle');
        $pro->description=$r->input('txtdescri');
        $pro->color=$r->input('txtcolor');
        $pro->price=$r->input('txtprice');
        $pro->category=$r->input('txtcate');
        $res= $pro->save();

        return redirect()->back();

    }

    public  function  DeleteProduct($id)
    {
        $result=Admin::destroy($id);
        if($result>0)
        {
            return redirect()->back();
        }
    }

    public function AddCategory(Request $request)
    {
        $cate=new category();
        $cate->cname=$request->input('txtcname');
        $cate->save();
//            return redirect('/addcate').with('success','category added successfully.');
        return redirect('/addcate');
    }

}
?>
<link rel="stylesheet" href="css/app.css">
