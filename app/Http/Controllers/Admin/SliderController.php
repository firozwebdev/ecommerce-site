<?php

namespace App\Http\Controllers\Admin;

use Helper;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;

class SliderController extends Controller
{
  public function __construct ()
  {
    $this->middleware('auth:admin');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::all();
        return  view('admin.sliders.manage', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
              'title' => 'required',
              'images' => 'required|image|mimes:jpeg,png|max:2048:',
            ]);
            if ($validator->fails()) {
                return back()
                        ->withErrors($validator)
                        ->withInput();
            }
            if ($request->file('images')->isValid()) {
                $image_name= $request->images->getClientOriginalName();
                $request->images->move(public_path('uploads/documents').'/sliderimages/', $image_name);

                $slider=new Slider();
                $slider->title=$request->title;
                $slider->link=$request->link;

                $slider->images= $image_name;
                $slider->status=1;
                $slider->save();

                Helper::notifySuccess('Slider Added successfully');
                return redirect(route('admin.sliders.index'));
            }
        } catch (\Exception $e) {
            Helper::notifyError($e->getMessage());
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider=Slider::findorFail($id);
        return view('admin.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
              'title' => 'required',
              'images' => 'max:2048:',
            ]);
            if ($validator->fails()) {
                return back()
                        ->withErrors($validator)
                        ->withInput();
            }
            $slider=Slider::findOrFail($id);
            $slider->update($request->all());

            if ($request->hasFile('images')) {
              if ($request->file('images')->isValid()) {
                $image_name= $request->images->getClientOriginalName();
                $slider->images=$image_name;
                $request->images->move(public_path('uploads/documents').'/sliderimages/', $image_name);
                $slider->save();
              }
            }

          Helper::notifySuccess('Slider Updated successfully');
          return redirect(route('admin.sliders.index'));
        } catch (\Exception $e) {
          Helper::notifyError($e->getMessage());
          return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $slider=Slider::findOrFail($id);
            $slider->delete();
            return redirect('admin/sliders')->with([
          'message'=>'Slider Deleted Successfully',
        ]);
        } catch (\Exception $e) {
            return redirect('admin/sliders')->with([
          'message'=>$e->getMessage()
        ]);
        }
    }
}
