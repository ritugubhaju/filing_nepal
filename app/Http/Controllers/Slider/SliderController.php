<?php

namespace App\Http\Controllers\Slider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\SliderRequest;
use App\Modules\Models\Slider\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    protected $slider;

    function __construct(Slider $slider)
    {
        $this->slider = $slider;
    }
    public function index()
    {
        $sliders = $this->slider->orderBy('created_at', 'desc')->get();

        return view('slider.index', compact('sliders'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('slider.create');
    }

    /**
     * @param Storeslider $request
     * @return mixed
     */
    public function store(SliderRequest $request)
    {
        if ($slider = $this->slider->create($request->data())) {
            if($request->hasFile('image')) {
                $this->uploadFile($request, $slider);
            }
        }
        Toastr()->success('slider Added Successfully.','Success');
        return redirect()->route('slider.index');

    }

    /**
     * @param slider $page
     * @return \Illuminate\View\View
     */
    public function edit(Slider $slider)
    {
        return view('slider.edit', compact('slider'));
    }

    public function update(SliderRequest $request, Slider $slider)
    {
        if ($slider->update($request->data())) {
            $slider->fill([
                'slug' => Str::slug($request->title),
            ])->save();
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $slider);
            }
            Toastr()->success('Slider Updated Successfully.','Success');
            return redirect()->route('slider.index');

        }

    }

    public function destroy($id)
    {
        $slider = $this->slider->find($id);
        $image_path = public_path().'/uploads/slider/'.$slider->image;
        unlink($image_path);
        $slider->delete();
        Toastr()->success('Slider Deleted Successfully.','Success');
        return redirect()->route('slider.index');
    }

    function uploadFile(Request $request, $slider)
    {
        $file = $request->file('image');
        $path = 'uploads/slider';
        $fileName = $this->uploadFromAjax($file, $path);
        if (!empty($slider->image))
            $this->__deleteImages($slider);

        $data['image'] = $fileName;
        $this->updateImage($slider->id, $data);

    }

    public function updateImage($sliderId, array $data)
    {
        try {
            $slider = $this->slider->find($sliderId);
            $slider = $slider->update($data);
            return $slider;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }

    public function __deleteImages($subCat)
    {
        try {
            if (is_file($subCat->image_path))
                unlink($subCat->image_path);

            if (is_file($subCat->thumbnail_path))
                unlink($subCat->thumbnail_path);
        } catch (\Exception $e) {

        }
    }
}


