<?php

namespace App\Http\Controllers;

use App\Util\AssetService;
use Illuminate\Http\Request;

class TableController extends Controller
{
    private AssetService $assetService;

    public function __construct()
    {
        $this->assetService = new AssetService();
    }

    public function index()
    {
        $data=$this->assetService->getAllAssets();

        return view('dashboard.table',['data'=>$data]);
    }

    public function edit(Request $request, $assetId)
    {
        return view('dashboard.edit');
    }
    public function add()
    {
        return view('dashboard.upload');
    }
    public function delete(Request $request, $assetId)
    {
        if($assetId){
            $isDeleted=$this->assetService->deleteAsset($assetId);
            return redirect()->route('table');
        }

    }
    public function asset(Request $request, $assetId)
    {
        if($assetId){

            $data=$this->assetService->getAssetById($assetId);

            return view('dashboard.asset',['data'=>$data]);
        }

    }
    public function update()
    {
        return view('dashboard.table');
    }
}
