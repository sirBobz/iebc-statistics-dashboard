<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demographic extends Model
{
    use HasFactory;

    protected $fillable = [
        "county_code",
        "county_name",
        "constituency_code",
        "constituency_name",
        "surname",
        "other_names",
        "party_code",
        "political_party_name",
        "abbreviation",
        "votes_garnered",
        "winning_status",
    ];
}
