<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\UploadsManager;

class UploadController extends Controller
{
    protected $manager;
    public function __construct(UploadsManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @param Request $request
     */
    public function index(Request $request)
    {
        $folder = $request->get('folder');
        $data = $this->manager->
    }
}
