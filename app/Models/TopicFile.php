<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicFile extends Model
{
 protected $table = 'topics_file';
 protected $fillabe = [
     'topic_id',
     'src',
 ];
}
