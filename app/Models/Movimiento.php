<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use \Illuminate\Database\Eloquent\SoftDeletes;

class Movimiento extends Model {

    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'siglas',
        'cuenta_id',
        'n_op',
        'fecha',
        'fecha_valor',
        'importe',
        'saldo',
        'concepto',
        'contabilizado',
    ];

    public function cuenta(): BelongsTo {
        return $this->belongsTo(Cuenta::class);
    }

}
