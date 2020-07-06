<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;
use Image;

class SlideController extends Controller
{
    public  function addSlide(){
        return view('admin.slider.add-slide');
    }
    public function slideValidation($request){
        $this->validate($request,[
            'slide_title' => 'required|regex:/^[\pL\s\-]+$/u|max:15',
        ]);
    }
    public function slideImageUpload($request){
        $slideImage = $request->file('slide_image');
        $fileType = $slideImage->getClientOriginalName();
        $directory = 'slider-images/';
        $imageUrl = $directory.$fileType;
        if(file_exists($imageUrl)){
            die('Image Already Exits');
        }else{
            Image::make($slideImage)->save($imageUrl);
            return $imageUrl;
        }

    }
    public function slideInfoBasicSave($request,$imageUrl){
        $slide = new Slide();
        $slide->slide_title = $request->slide_title;
        $slide->slide_short_description = $request->slide_short_description;
        $slide->slide_long_description = $request->slide_long_description;
        $slide->button1_url = $request->button1_url;
        $slide->button2_url = $request->button2_url;
        $slide->slide_image = $imageUrl;
        $slide->publication_status = $request->publication_status;
        $slide->save();
    }
    public function saveSliderInfo(Request $request){
        $imageUrl = $this->slideImageUpload($request);
        $this->slideInfoBasicSave($request,$imageUrl);

        return redirect('/slide/add')->with('message','Save slide info successfully.');
    }
    public function manageSliderInfo(){
        $slides = Slide::all();
        return view('admin.slider.manage-slide',['slides'=>$slides]);
    }
    public function unpublishedSliderInfo($id){
        $slide = Slide::find($id);
        $slide->publication_status = 0;
        $slide->save();
        return redirect('/slide/manage')->with('message','Unpublished slide info successfully.');
    }
    public function publishedSliderInfo($id){
        $slide = Slide::find($id);
        $slide->publication_status = 1;
        $slide->save();
        return redirect('/slide/manage')->with('message','Unpublished slide info successfully.');
    }
    public function editSliderInfo($id){
        $slide = Slide::find($id);
        return view('admin.slider.slider-edit',['slide'=>$slide]);
    }
    public function updateBasicSliderInfo($request,$slide,$imageUrl=null){
        $slide->slide_title = $request->slide_title;
        $slide->slide_short_description = $request->slide_short_description;
        $slide->slide_long_description = $request->slide_long_description;
        $slide->button1_url = $request->button1_url;
        $slide->button2_url = $request->button2_url;
        $slide->slide_image = $imageUrl;
        $slide->publication_status = $request->publication_status;
        $slide->save();
    }
    public function updateSliderInfo(Request $request){
        $slideImage = $request->file('slide_image');
        $slide = Slide::find($request->id);
        if($slideImage){
            if(file_exists($slide->slide_image)){
                unlink($slide->slide_image);
            }
            $imageUrl = $this->slideImageUpload($request);
            $this->updateBasicSliderInfo($request,$slide,$imageUrl);
        }else{
            $this->updateBasicSliderInfo($request,$slide);
        }
        return redirect('/slide/manage')->with('message','Update slide info successfully.');
    }
    public function deleteSliderInfo($id){
        $slide = Slide::find($id);
        unlink($slide->slide_image);
        $slide->delete();
        return redirect('/slide/manage')->with('message','Delete slide info successfully.');
    }
}
