<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = 'product';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'product_name',
        'short_description',
        'long_description',
        'product_price',
        'product_quantity',
        'rating',
        'total_rating',
        'product_image',
        'created_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

}
