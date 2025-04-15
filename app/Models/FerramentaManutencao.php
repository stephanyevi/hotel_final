<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FerramentaManutencao extends Model
{
    use HasFactory;

    protected $table = 'ferramentas_manutencao';

    protected $fillable = [
        'nome',
        'descricao',
        'quantidade',
        'status',
    ];
}

