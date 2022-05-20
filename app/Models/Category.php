<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'age_group_id'
    ];
    protected $guarded = ["id"];

    public function ageGroup() {
        return $this->belongsTo(AgeGroup::class);
    }

    public function products() {
        return $this->hasMany(Product::class);
    }


}
