<?php

namespace App\Http\Controllers;

use App\file_entries;
use App\Http\Controllers\Controller;
use App\Fileentry;
use Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

//use Illuminate\Http\Request;

use App\Http\Requests;

class FileEntryController extends Controller
{

    public function index()
    {

        return 1;
        $entries = file_entries::all();

        return view('index', compact('entries'));
    }

    public function add() {

        $file = Request::file('filefield');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
        $entry = new file_entries();
        $entry->mime = $file->getClientMimeType();
        $entry->original_filename = $file->getClientOriginalName();
        $entry->filename = $file->getFilename().'.'.$extension;

        $entry->save();

        return redirect('file_entry');

    }


    public function get($filename){

        $entry = file_entries::where('filename', '=', $filename)->firstOrFail();
        $file = Storage::disk('local')->get($entry->filename);

        return (new Response($file, 200))->header('Content-Type', $entry->mime);

//        return response()->download($pathToFile);
//
//        return response()->download($pathToFile, $name, $headers);
//
//        return response()->download($pathToFile)->deleteFileAfterSend(true);

//        return response()->download($file, 'filename.pdf', $headers);
    }


}
