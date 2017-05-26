<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'contact_uses';

    protected $fillable = [
        'contact_name', 'contact_mail', 'contact_subject',
         'contact_message','view','contact_type'
    ];
}
