<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nameProduct',
        'imgProduct',
        'descriptionProduct',
        'category_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];  
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Succursale::class);
    }
}
