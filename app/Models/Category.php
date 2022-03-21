<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Category extends Model
{
    use HasFactory;
    protected $table="categories";

    // /**
    //  * Get the user associated with the Category
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\Belongsto
    //  */
    // public function info(): BelongsTo
    // {
    //     return $this->belongsTo(User::class, 'phone');
    // }

    //belongSto(name::class,cột model, cột của name)
    
    public function user(){
        
        return $this->belongsTo(User::class,'phone','phone');
    }

    
}
