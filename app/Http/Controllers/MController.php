<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
  
use App\management;
use Redirect;
use PDF;
use DataTables;

class MController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $data['items'] = Item::orderBy('item_id','desc')->paginate(10);
    //     return view('admin.items',$data);
    // }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = management::latest()->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('join', function($row){

             $btn = '<span>'.$row->created_at.'</span>';

             return $btn;
         })

            ->addColumn('action', function($row){

             $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->mem_id.'" data-original-title="Edit" class="edit btn btn-primary bg-transparent border-0 editmem"><i class="fas fa-edit text-primary" ></i> Edit</a>';

             $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->mem_id.'" data-original-title="Delete" class="btn btn-danger btn-sm deletemem bg-transparent border-0"><i class="fas fa-trash-alt text-danger "></i> Delete</a>';

             return $btn;
         })
            ->rawColumns(['action','join'])
            ->make(true);

        }

        return view('admin.managment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//     public function store(Request $request)
//     {
//         $request->validate([
//             'item_name' => 'required',
//             'item_qty' => 'required',
//             'item_price' => 'required',
//             'item_img' => 'nullable',
//         ]);
//         $item = new Item;
//         $item->item_name = $request->input('item_name');
//         $item->item_qty = $request->input('item_qty');
//         $item->item_price = $request->input('item_price');
//         if ($request->hasfile('item_img')) {
//          $file=$request->file('item_img');
//          $extension=$file->getClientOriginalName();
//          $filename=time(). "." . $extension;
//          $file->move(public_path()."/images",$filename);
//          $item->item_img=$filename;
//      }
//      else
//      {
//         return $request;
//         $item->item_img="";
//     }
//     $item->save();
//     return Redirect::to('items')->with('success','Greate! Product Added successfully.');
// }
    public function store(Request $request)
    {
    management::updateOrCreate(['mem_id' => $request->mem_id],
        ['mem_name' => $request->mem_name, 'position' => $request->position, 'age' => $request->age, 'salary' => $request->salary]);

    return response()->json(['Member Record saved successfully.']);
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $management = management::find($id);
        return response()->json($management);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $mem_id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        management::find($id)->delete();

        return response()->json(['Member Record deleted successfully.']);
    }
}
