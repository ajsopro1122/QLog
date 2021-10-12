<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purpose extends Model
{
    use HasFactory;

    protected $fillable = [
        'facility_id',
        'purpose'
    ];

    public function facility(){
        return $this->belongsTo(Facility::class);
    }
}
