<?php

namespace App\Models;

use App\Models\District;
use App\Models\Division;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Thana extends Model
{
    use HasFactory;
    //protected $fillable = ['id','name','district_id','division_id'];
     
    protected $guarded = [];

    public function district(){
        return $this->belongsTo(District::class);
    }
    public function divison(){
        return $this->belongsTo(Division::class,'division_id');
    }
}
