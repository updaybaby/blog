<?php

namespace App\Http\Controllers\Admin;

<<<<<<< HEAD
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\UploadsManager;
=======
use App\Http\Controllers\Controller;
use App\Services\UploadsManager;
use Illuminate\Http\Request;
>>>>>>> local to hs test

class UploadController extends Controller
{
    protected $manager;
<<<<<<< HEAD
=======

>>>>>>> local to hs test
    public function __construct(UploadsManager $manager)
    {
        $this->manager = $manager;
    }

    /**
<<<<<<< HEAD
     * @param Request $request
=======
     * Show page of files / subfolders
>>>>>>> local to hs test
     */
    public function index(Request $request)
    {
        $folder = $request->get('folder');
<<<<<<< HEAD
        $data = $this->manager->
=======
        $data = $this->manager->folderInfo($folder);

        return view('admin.upload.index', $data);
>>>>>>> local to hs test
    }
}
