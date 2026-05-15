<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}
