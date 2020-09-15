<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\restaurant;
use Session;
use PDF;
use App\Exports\restaurantexport;
use Excel;

class restocontroller extends Controller
{
    public function list(){
        //$data= restaurant::paginate(5);
        $data= restaurant::orderBy('id', 'desc')->paginate(10);
        return view('list',['data'=>$data]);
    }

    public function add(Request $req){
       /* $validation=$req->validate([
            'name'=>'required',  
            'email'=> 'required | email',
            'address'=>'required'          
        ]);*/
        $resto=new restaurant;
        $resto->name=$req->name;
        $resto->email=$req->email;
        $resto->address=$req->address;
        $foods=implode(',',$req->food);
        $resto->foods=$foods;
        $resto->type=$req->type;
        $resto->roomtype=$req->roomtype;
        //echo $path=$req->file('image')->store('public');
        //$resto->image=$path;
        //echo $original_path=public_path();
      
        //echo $original_path.$path;
        $resto->save();
        $req->session()->flash('status','Restaurent name are added');
        return redirect('list');
    }

    public function delete($id)
    {
        restaurant::find($id)->delete();
        session::flash('status','Sucessfully deleted');
        return redirect('list');
    }
    public function edit($id)
    {  
        $data=restaurant::find($id);
        return view('edit',['data'=>$data]);
    }
    public function update(Request $req)
    {
        $validation=$req->validate([
            'name'=>'required',  
            'email'=> 'required | email',
            'address'=>'required'          
        ]);
        $resto=restaurant::find($req->id);
        $resto->name=$req->name;
        $resto->email=$req->email;
        $resto->address=$req->address;
        $foods=implode(',',$req->food);
        $resto->foods=$foods;
        $resto->type=$req->type;
        $resto->roomtype=$req->roomtype;
        $resto->save();
        $req->session()->flash('status','Restaurent name are Updated');
        return redirect('list');
    }

    public function downloadPDF(){
        $data= restaurant::all();
        $pdf=PDF::loadView('pdf',compact('data'));
        return $pdf->download('All-Restaurant.pdf');
    }

    public function exportIntoExcel(){
        return Excel::download(new restaurantexport,'restaurantlist.excel');
    }

    public function exportIntoCSV(){
        return Excel::download(new restaurantexport,'restaurantlist.csv');
    }
}
