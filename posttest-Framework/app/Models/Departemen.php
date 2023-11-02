<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departemen extends Model
{
    use HasFactory;
    protected $table = 'departemens';
    protected $fillable = ['id', 'nama_departemen'];

    public function anggota(): HasMany
    {
    return $this->hasMany(Anggota::class);
    }
}
