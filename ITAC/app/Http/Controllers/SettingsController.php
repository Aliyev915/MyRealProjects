<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Header;
use App\Models\Statistics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingsController extends Controller
{
    // Header Settings Start
    public function head()
    {
        $header = Header::first();
        return view('admin.settings.header', ['header' => $header]);
    }
    public function headPost(Request $request)
    {
        $headerCount = Header::all()->count();
        if ($headerCount == 0) {
            Header::create([
                'caption_az' => $request->caption,
                'caption_en' => $request->caption_en,
                'caption_ru' => $request->caption_ru,
                'title_az' => $request->title,
                'title_en' => $request->title_en,
                'title_ru' => $request->title_ru,
                'description_az' => $request->description,
                'description_en' => $request->description_en,
                'description_ru' => $request->description_ru
            ]);
        } else {
            $header = Header::first();
            $header->update([
                'caption_az' => $request->caption,
                'caption_en' => $request->caption_en,
                'caption_ru' => $request->caption_ru,
                'title_az' => $request->title,
                'title_en' => $request->title_en,
                'title_ru' => $request->title_ru,
                'description_az' => $request->description,
                'description_en' => $request->description_en,
                'description_ru' => $request->description_ru
            ]);
        }
        return redirect()->back();
    }
    //Header Settings end

    //About Settings Start
    public function about()
    {
        $about = About::first();
        return view('admin.settings.about', ['about' => $about]);
    }
    public function aboutPost(Request $request)
    {
        $aboutCount = About::all()->count();
        if ($aboutCount == 0) {
            $image1 = rand() . '.' . $request->img_1->extension();
            $image2 = rand() . '.' . $request->img_2->extension();
            $request->img_1->storeAs('public/images', $image1);
            $request->img_2->storeAs('public/images', $image2);
            $request->img_1 = $image1;
            $request->img_2 = $image2;
            About::create([
                'caption_az' => $request->caption,
                'caption_en' => $request->caption_en,
                'caption_ru' => $request->caption_ru,
                'title_az' => $request->title,
                'title_en' => $request->title_en,
                'title_ru' => $request->title_ru,
                'description_az' => $request->description,
                'description_en' => $request->description_en,
                'description_ru' => $request->description_ru,
                'signature' => $request->signature,
                'img_1' => $request->img_1,
                'img_2' => $request->img_2
            ]);
        }
        else {
            $about = About::first();
            if ($request->img_1 != null) {
                $image1 = rand() . '.' . $request->img_1->extension();
                $request->img_1->storeAs('public/images', $image1);
                $request->img_1 =  $image1;
            }
            else {
                $request->img_1 = $about->img_1;
            }
            if ($request->img_2 != null) {
                $image2 = rand() . '.' . $request->img_2->extension();
                $request->img_2->storeAs('public/images', $image2);
                $request->img_2 = $image2;
            } else {
                $request->img_2 = $about->img_2;
            }
            $path=public_path('/storage/images'.$about->image);
            if (File::exists($path)) {
                File::delete($path);
            }
            if (File::exists($path)) {
                File::delete($path);
            }
            $about->update([
                'caption_az' => $request->caption,
                'caption_en' => $request->caption_en,
                'caption_ru' => $request->caption_ru,
                'title_az' => $request->title,
                'title_en' => $request->title_en,
                'title_ru' => $request->title_ru,
                'description_az' => $request->description,
                'description_en' => $request->description_en,
                'description_ru' => $request->description_ru,
                'signature' => $request->signature,
                'img_1' => $request->img_1,
                'img_2' => $request->img_2
            ]);
        }
        return redirect()->back();
    }
    //About Settings End
}
