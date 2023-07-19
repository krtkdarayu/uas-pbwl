<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Played extends Model
{
    use HasFactory;
    protected $table = 'tb_played';
    protected $primaryKey = 'played_id';
    protected $guarded = '[]';
    protected $fillable = [
        'played_id',
        'played_id_track',
        'played_date'
    ];
    public function track(): BelongsTo
    {
        return $this->belongsTo(Track::class, 'played_id_track');    
    }
}
