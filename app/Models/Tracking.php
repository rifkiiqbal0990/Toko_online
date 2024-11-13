<?php

namespace App\Models;

use App\Models\Tracking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tracking extends Model
{
    use HasFactory;
    protected $table = 'trackings';
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    public function tracking()
    {
        return $this->belongsTo(Tracking::class);
    }
}
