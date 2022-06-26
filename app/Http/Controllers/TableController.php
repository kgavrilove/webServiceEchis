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
       //dd($data);
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
    public function editAsset(Request $request)
    {
        $assetData=$this->validate(request(), [
            'id' => 'required',
            'name' => 'required|max:32',
            'author' => 'required|max:32',
            'scheme' => 'required|max:16',
            'a_color' => 'required|max:3',
            'b_color' => 'required|max:3',
            'c_color' => 'required|max:3',
            'd_color' => 'required|max:3',
            'e_color' => 'required|max:3',
        ]);

        $asset=Asset::findOrFail($assetData['id']);
        try {
           $isWasEdit= $this->assetService->editAsset($asset,$assetData);
        } catch (\Throwable $e) {
            throw new \RuntimeException('Failed Delete');
        }
        $data = [
            'success' => $isWasEdit,
            'message'=> $isWasEdit ? 'success' : 'failed',
        ] ;
        return response()->json($data);
    }


    public function add()
    {
        return view('dashboard.upload');
    }

    public function upload(Request $request)
    {

        $assetData=$this->validate(request(), [
            'name' => 'required|max:32',
            'author' => 'required|max:32',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif',

        ]);


            $imagePath=$request->file('img')->path();
            $imageName=$request->file('img')->getFilename();
            $imageExtension=$request->file('img')->getClientOriginalExtension();
        try {
            $isAdded= $this->assetService->addAsset($assetData, $imagePath, $imageName,$imageExtension);
        } catch (\Throwable $e) {
            $data = [
                'fail' => $e->getMessage(),
                'message'=> 'failed',
                'img'=>$imagePath,
                'name' => $imageName,
                'extension' => $imageExtension,
            ] ;
            return response()->json($data);
        }
        $data = [
            'success' => $isAdded,
            'message'=> $isAdded ? 'success' : 'failed',
            'img'=>$imagePath,
            'name' => $imageName,
            'extension' => $imageExtension,
        ] ;
        return response()->json($data);

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
