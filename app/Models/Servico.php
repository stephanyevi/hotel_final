<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    // Corrigido: Apenas nome e descricao são campos válidos
    protected $fillable = ['nome', 'descricao'];
}
