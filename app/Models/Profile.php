<?php

namespace App\Models;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;
     protected $guarded = ['id'];


     public function profileImage(){
      $imagePath = ($this->image) ? $this->image : 'profile/tjFO2mMzQSIho6ZDnZFh2ic14z2g9CYbcQaGZche.jpg';
      return '/storage/' . $imagePath;
     }

     public function user(){
        return $this->belongsTo(User::class);
     }
}
