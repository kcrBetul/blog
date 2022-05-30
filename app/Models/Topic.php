<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $table = 'topics';
    protected $fillable = [
      'title',
      'user_id',
      'ticket_id',
      'contents',
      'created_at',
      'updated_at',
    ];
}
