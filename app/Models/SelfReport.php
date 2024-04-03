<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelfReport extends Model
{
    use HasFactory;
    protected $table = "self_report";
    protected $fillable = [
        'user_id',
        'fileName',
    ];

    public function getUrlAttribute()
    {
        return url("report/" . $this->fileName);
    }
}
