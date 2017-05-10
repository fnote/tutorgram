<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Http\Requests;

class UploadController extends Controller
{
    public function upload(Request $request){

//        print_r($request->all());

        $files=$request->file('file');
        if(!empty($files)):

            foreach ($files as $file):
                Storage::put($file->getClientOriginalName(),file_get_contents($file));
            endforeach;
        endif;
    }
}
