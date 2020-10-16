<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Jobs\DoUploadFile;
class FileUploadController extends Controller
{
    public function index(){
        return view('fileupload.index');;
    }
    public  function store(Request $request){
        $inputData = array();
        foreach($request->file('files') as $fileName) {
            $file = $fileName->store('uploads','public');
            array_push($inputData,$file);
        }
        $this->dispatch(new DoUploadFile($inputData));
        return redirect()->back();
    }
}
