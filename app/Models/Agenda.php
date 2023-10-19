<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $fillable = [
        'profissional_Id',
        'cliente_Id',
        'servico_Id',
        'dataHora',
        'pagamento',
        'valor',
    ];
}
