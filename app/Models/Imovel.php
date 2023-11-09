<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Imovel extends Model
{
    use HasFactory;

    protected $fillable = [
        'localizacao',
        'valor',
        'numero_quartos',
        'piscina',
        'user_id',
    ];

    protected $attributes = [
        'localizacao' => '',
        'valor' => 1,
        'numero_quartos' => '1',
        'piscina' => 0,
        'user_id' => 1,
    ];

    public function users() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
