<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\UploadsManager;
use Illuminate\Http\Request;

use App\Http\Requests\UploadFileRequest;
use App\Http\Requests\UploadNewFolderRequest;
use Illuminate\Support\Facades\File;

class UploadController extends Controller
{
    protected $manager;

    public function __construct(UploadsManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * Show page of files / subfolders
     */
    public function index(Request $request)
    {
        $folder = $request->get('folder');
        $data = $this->manager->folderInfo($folder);

        return view('admin.upload.index', $data);
    }

    /**
     * @param UploadNewFolderRequest $request
     * 创建新目录
     */
    Public function createFolder(UploadNewFolderRequest $request)
    {
        //$new_folder =
    }
}