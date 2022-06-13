<?php

namespace App\Util;

use App\Models\Asset;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AssetService
{

    public function __construct() {

    }

    public function getAllAssets(): array {
        $data=[];
        foreach (Asset::all() as $asset) {

            $id=$asset->getAttribute('id');
            $data[$id]['asset']=$asset->toArray();
            $data[$id]['image']=$asset->image()->get()->toArray();
            $data[$id]['aidata']=$asset->aiData()->get()->toArray();
        }
        return $data;
    }

    public function getAssetById(int $id):array {

        $asset=Asset::find($id);
        if(!$asset){
            return [];
        }
        try {
            $data['asset']=$asset->toArray();
            $data['image']=$asset->image()->get()->toArray();
            $data['aidata']=$asset->aiData()->get()->toArray();
        }
        catch (\Throwable $e) {
            return [];
        }
        return $data;

    }

    public function deleteAsset(int $id): bool {
        $asset=Asset::find($id);
        if (!$asset) {
            return false;
        }
        try {
            $image=$asset->image();
            $aidata=$asset->aidata();
            $asset->image()->detach();
            $asset->aidata()->detach();
            $asset->delete();
            $image->delete();
            $aidata->delete();


        } catch (\Throwable $e) {
            return false;
        }
        return true;
    }
}
