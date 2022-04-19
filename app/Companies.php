<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'companyId';
    protected $fillable = [
        'companyId','companyName','companyRegistrationNumber','companyFoundationDate','country','zipCode','city','streetAddress','latitude','longitude','companyOwner','employees','activity','active','email','password'
    ];
}