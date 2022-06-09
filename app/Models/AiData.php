<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AiData extends Model
{
    protected $table = 'asset';

    public $timestamps = true;

    protected $fillable = [
        'scheme', 'a_color','b_color','c_color','d_color','e_color',
    ];

    public function asset(){
        return $this->belongsToMany(Asset::class,'asset_aidata','aidata_id','asset_id');
    }
}
