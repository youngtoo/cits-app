<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'profile_name',
        'date_created',
    ];

    protected $table = 'profiles';
    protected $primaryKey = 'id';
    public $incrementing = true;

    public function users(): HasMany {

        return $this->hasMany(User::class);
        
    }
}
