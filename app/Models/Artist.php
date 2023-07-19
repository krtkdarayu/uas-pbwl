<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    use HasFactory;
    protected $table = 'tb_artist';
    protected $primaryKey = 'artist_id';
    protected $guarded = '[]';
    protected $fillable = [
        'artist_id',
        'artist_nama'
    ];
    public function album(): HasMany
    {
        return $this->hasMany(Album::class, 'album_id_artist', 'artist_id');    
    }
    public function track(): HasMany
    {
        return $this->hasMany(Track::class, 'track_id_artist', 'artist_id');    
    }
}
