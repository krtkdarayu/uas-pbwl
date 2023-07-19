<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends Model
{
    use HasFactory;
    protected $table = 'tb_album';
    protected $primaryKey = 'album_id';
    protected $guarded = '[]';
    protected $fillable = [
        'album_id',
        'album_id_artist',
        'album_nama'
    ];
    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class, 'album_id_artist');    
    }
    public function track(): HasMany
    {
        return $this->hasMany(Track::class, 'track_id_album','album_id');    
    }
}
