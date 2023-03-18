<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = []; //This unprotect mass assigment

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/DH9M36mP9wJs4kb5QpJmWq50jgfb9soaUe0g3npd.png'; 
        return '/storage/' . $imagePath ;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
