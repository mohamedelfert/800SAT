<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function index()
    {
        $title = trans('main.settings');
        return view('dashboard.settings.settings', compact('title'));
    }

    public function update(StoreSettingRequest $request, Setting $setting)
    {
        $validated = Validator::make($request->all(), $request->rules());

        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $data = $request->except(['logo', 'icon']);

        if ($request->logo) {
            if ($setting->logo != 'logo.jpg') {
                Storage::disk('public_uploads')->delete('/setting_images/' . $setting->logo);
            }
            Image::make($request->logo)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('/uploads/setting_images/' . $request->logo->getClientOriginalName()));
            $data['logo'] = $request->logo->getClientOriginalName();
        }

        if ($request->icon) {
            if ($setting->icon != 'icon.jpg') {
                Storage::disk('public_uploads')->delete('/setting_images/' . $setting->icon);
            }
            Image::make($request->icon)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('/uploads/setting_images/' . $request->icon->getClientOriginalName()));
            $data['icon'] = $request->icon->getClientOriginalName();
        }

        if ($request->cover) {
            if ($setting->cover != 'cover.jpg') {
                Storage::disk('public_uploads')->delete('/setting_images/' . $setting->cover);
            }
            Image::make($request->cover)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('/uploads/setting_images/' . $request->cover->getClientOriginalName()));
            $data['cover'] = $request->cover->getClientOriginalName();
        }

        $setting->update($data);
        toastr()->warning(trans('main.data_updated_successfully'));
        return redirect()->back();
    }
}
