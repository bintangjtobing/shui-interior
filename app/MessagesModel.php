<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessagesModel extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'message_id';
    protected $fillable = ['nama', 'email', 'nohp', 'subject', 'messages', 'logIP', 'status'];
}
