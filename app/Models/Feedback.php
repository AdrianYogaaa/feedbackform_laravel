<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'project', 'message'];

    protected $table = 'feedbackform';  // Sesuaikan nama tabel
}