<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Project extends Model
{
    use HasFactory,Searchable;
    protected $fillable = [
        'name',
       'description',
        'user_id',
        
    ];
    public function users() :BelongsTo
    {
                
        
            return $this->belongsTo(User::class, 'user_id');
        
    }
    public function toSearchableArray() : array
    {
        return [
            'name'=>$this->name,
        ];
    }

}
