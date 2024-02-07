<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
    ];

    public $timestamps = false; //kadangi modelyje nenaudojam timestampu



    protected static $sorts = [
        'noSort' => 'Nerusiuota',
        'name_asc' => 'Imone (A-Z)',
        'name_desc' => 'Imone(Z-A)',
    ]; //cia sudedam rusiavimo galimybes, arejus, indexai ir values. Value matom rusiavimo pasirinkty, fronte, o key perduodamas per query




    public static function getSorts()
    {
        return self::$sorts;
    }
}
