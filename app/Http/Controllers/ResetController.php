<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResetController extends Controller
{
    public function reset()
    {
        // dd(1);
        \Artisan::call('migrate:fresh --seed');

        foreach (['categories', 'products'] as $folder) {
            Storage::deleteDirectory($folder);
            Storage::makeDirectory($folder);

            $files = Storage::disk('reset')->files($folder);

            foreach ($files as $file) {
                Storage::put($file, Storage::disk('reset')->get($file));
            }
        }

        session()->flash('success', __('main.project_reset'));
        return redirect()->route('main');
    }
}
