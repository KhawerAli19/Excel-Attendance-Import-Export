<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public function people()
    {
        return $this->belongsTo(People::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function company_group()
    {
        return $this->belongsTo(CompanyGroup::class);
    }
}
