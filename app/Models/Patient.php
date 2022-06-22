<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Form;
use App\Models\User;

class Patient extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'address',
        'phone',
        'dob',
        'gender'
    ];

  /**
   * Return the forms this patient has
   * 
   */
public function forms() {
    return $this->hasMany(Form::class); 
}


/**
 * Return the user that this patient belongs to
 * 
 */
public function user() {
    return $this->belongsTo(User::class);
}
  
}
