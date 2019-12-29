<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
use App\Item;
use Redirect;
use PDF;
use DataTables;

class ItemController extends Controller
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
            $data = Item::latest()->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('item_price', function ($orders) {
                  return 'Rs '.$orders->item_price.'/-';
           })
            

            ->addColumn('action', function($row){

             $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->item_id.'" data-original-title="Edit" class="edit btn btn-primary bg-transparent border-0 edititem"><i class="fas fa-edit text-primary" ></i> Edit</a>';

             $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->item_id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteitem bg-transparent border-0"><i class="fas fa-trash-alt text-danger "></i> Delete</a>';

             return $btn;
         })
            ->rawColumns(['action','item_price'])
            ->make(true);

        }

        return view('admin.items');
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
 
    public function store(Request $request)
    {
        if ($request->hasfile('item_img')) {
           $file=$request->file('item_img');
           $extension=$file->getClientOriginalName();
           $filename=rand(). "." . $extension;
           $file->move(public_path()."/images",$filename);
       }
       else
       {
        $filename="";
        return $request;
        
    }
    Item::updateOrCreate(['item_id' => $request->item_id],
        ['item_name' => $request->item_name, 'item_qty' => $request->item_qty, 'item_price' => $request->item_price, 'item_img' => $filename]);

    return response()->json(['Item saved successfully.']);
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
        $item = Item::find($id);
        return response()->json($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $item_id)
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
        Item::find($id)->delete();

        return response()->json(['Item deleted successfully.']);
    }
}
