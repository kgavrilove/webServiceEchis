<?php

namespace App\Http\Controllers;

use App\Models\Asset;
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

    public function edit( $assetId)
    {
        $asset=Asset::findOrFail($assetId);
        try{
            $data=$this->assetService->getAssetById($asset);
            
        }catch (\Throwable $e) {
            throw new \RuntimeException('Failed Delete');
        }
        return view('dashboard.edit',['data'=>$data]);
    }
    public function add()
    {
        return view('dashboard.upload');
    }
    public function delete( $assetId)
    {
        $asset=Asset::findOrFail($assetId);
        try{
            $this->assetService->deleteAsset($asset);
        } catch (\Throwable $e) {
            throw new \RuntimeException('Failed Delete');
        }
        return redirect()->route('table');
    }
    public function asset( $assetId)
    {
        $asset=Asset::findOrFail($assetId);
        try{
            $data=$this->assetService->getAssetById($asset);
        } catch (\Throwable $e) {
            throw new \RuntimeException('Failed find by id');
        }
        return view('dashboard.asset',['data'=>$data]);
    }
    public function update()
    {
        return view('dashboard.table');
    }
}
