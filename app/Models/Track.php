<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Track extends Model
{
    use HasFactory;
    protected $table = 'tb_track';
    protected $primaryKey = 'track_id';
    protected $guarded = '[]';
    protected $fillable = [
        'track_id',
        'track_id_album',
        'track_nama',
        'track_time'
    ];
    public function played(): HasMany
    {
        return $this->hasMany(Played::class, 'played_id_track','track_id');    
    }
    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class, 'track_id_album');    
    }
}
