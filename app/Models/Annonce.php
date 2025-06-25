<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'price',
        'location',
        'phone',
        'image',
    ];

    /**
     * Obtenez l'utilisateur propriétaire de cette annonce.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Obtenez la catégorie de cette annonce.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
