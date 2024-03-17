<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $table = "tbProduto";

    protected $fillable = ['idProduto','nomeProduto','valorProduto','qtdProduto','descProduto'];

    //não quero usar data de criação  e de modificação
    public $timestamps = false;

}
