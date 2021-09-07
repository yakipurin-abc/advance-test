<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['fullname', 'gender', 'email', 'postcode', 'address', 'opinion', 'building_name'];

    public static $rules = array(

        'fullname' => 'required',
        'gender' => 'required',
        'email' => 'required|email',
        'postcode' => 'required|max:8|min:8',
        'address' => 'required',
        'opinion' => 'required|max:120',

    );
}
