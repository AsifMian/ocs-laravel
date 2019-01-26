<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    public function add(Request $r)
    {
       // return view('std');
        $st=new student();
        $st->sname=$r->input('txtname');
        $st->reg=$r->input('txtReg');
        $st->marks=$r->input('txtmarks');
        if( !empty($r->input('txtname'))
            && !empty($r->input('txtReg'))
            && !empty($r->input('txtmarks')) )
        {
            $result= $st->save();
            return redirect()->route('std.addnew');
        }
       else
       {
           echo "<div class='alert alert-danger text-center'>
            <strong>Error in inserting Data....Sorry some values are empty or wrong</strong>
            </div>
            
            <center><div class='btn btn-secondary' ><a href='/addnew'>Back To Home</a></div></center>
            ";
       }

    }

    public function addnew()
    {
        $links = student::all();
        return view('std', ['links' => $links]);
       // return view('std');
    }


    public function UpdateFind($id)
    {
        $std=student::find($id);
        return view('update',['std' => $std]);
    }
    public function Update(Request $r,$id)
    {
       // $stu = student::find($id);
        echo $id;
        $std=new student();
        $std->exists=true;
        $std->id=$id;
        $std->sname=$r->input('txtname');
        $std->reg=$r->input('txtReg');
        $std->marks=$r->input('txtmarks');
        $std->save();
        return redirect()->route('std.addnew');

    }
    public function del($id)
    {

        $res = student::destroy($id);
       // echo $res;
        return redirect()->back();
        //same as
      //  return redirect()->route('std.addnew');
    }


}
?>
<link rel="stylesheet" href="css/app.css">
