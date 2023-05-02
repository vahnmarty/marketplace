<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getImage()
    {
        $string = $this->image;
        if (filter_var($string, FILTER_VALIDATE_URL)) {
           return $string;
        } else {
            return asset($string);
        }
    }
}
