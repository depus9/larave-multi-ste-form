<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model

{

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [
        'company_name', 'company_address', 'company_email', 'company_phone', 'contact_name', 'contact_email', 'contact_phone', 'company_status',
        'company_is_premium', 'accreditation_level', 'company_register_date', 'company_expiry_date', 'company_renewal_date'

    ];
}
