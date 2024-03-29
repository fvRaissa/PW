<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = "tbProduto";

    protected $fillable = ['idProduto','nomeProduto','descricaoProduto','valorProduto','qtsProduto'];

    public $timestamps = false;
}
