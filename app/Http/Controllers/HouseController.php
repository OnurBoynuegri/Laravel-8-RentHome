<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataList = House::where('user_id',Auth::id())->get();
        return view('home.user_house', ['dataList' => $dataList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $dataList = Category::where('parent_id', '!=', 0)->with('children')->get();
        return view('home.user_house_add', ['dataList' => $dataList]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new House;
        $data->category_id = $request->input('category_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->price = $request->input('price');
        $data->address = $request->input('address');
        $data->square_meters = $request->input('square_meters');
        $data->room_number = $request->input('room_number');
        $data->heating = $request->input('heating');
        $data->stuff = $request->input('stuff');
        $data->dues = (int)$request->input('dues');
        $data->detail = $request->input('detail');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status','False');
        if ($request->file('image') != null) {
            $data->image = Storage::putFile('images', $request->file('image'));
        }

        $data->save();
        return redirect()->route('user_house')->with('success', 'House Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\House $house
     * @return \Illuminate\Http\Response
     */
    public function show(House $house)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\House $house
     * @return \Illuminate\Http\Response
     */
    public function edit(House $house, $id)
    {
        //
        $data = House::find($id);
        $dataList = Category::where('parent_id', '!=', 0)->with('children')->get();
        return view('home.user_house_edit', ['data' => $data, 'dataList' => $dataList]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\House $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, House $house, $id)
    {
        //
        $data = House::find($id);
        $data->category_id = $request->input('category_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->price = $request->input('price');
        $data->address = $request->input('address');
        $data->square_meters = $request->input('square_meters');
        $data->room_number = $request->input('room_number');
        $data->heating = $request->input('heating');
        $data->stuff = $request->input('stuff');
        $data->dues = (int)$request->input('dues');
        $data->detail = $request->input('detail');
        $data->slug = $request->input('slug');
        if ($request->file('image') != null) {
            $data->image = Storage::putFile('images', $request->file('image'));
        }

        $data->save();
        return redirect()->route('user_house')->with('success', 'House Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\House $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house, $id)
    {
        //
        //DB::table('houses')->where('id','=',$id)->delete();
        $data = House::find($id);
        $data->delete();
        return redirect()->route('user_house')->with('success', 'House Deleted Successfully');
    }
}
