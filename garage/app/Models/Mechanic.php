<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    //o kur sita panaudojam dar?
    protected $fillable = [
        'name',
        'surname',
    ];
    //tures veikti ant visu mechaniku, ne konkreciai vienam. protected kad niekas negaletu redaguoti sorto
    protected static $sorts = [
        'noSort' => 'Nerusiuota',
        'name_asc' => 'Pavarde (A-Z)',
        'name_desc' => 'Pavarde(Z-A)',
        'truck_count_asc' => 'Sunkvezimiu skaicius (didejimo tavrka)',
        'truck_count_desc' => 'Sunkvezimiu skaicius (mazejimo tavrka)',
        'perPageSelec' => 'perPageSelec',
    ]; //cia sudedam rusiavimo galimybes, arejus, indexai ir values. Value matom rusiavimo pasirinkty, fronte, o key perduodamas per query

    protected static $perPageSelect = [
        0 => 'Visi',
        3 => 3,
        11 => 11,
        13 => 13,
        29 => 29,
    ];

    public static function getSorts()
    {
        return self::$sorts;
    }

    public static function getPerPageSelect(){
        return self::$perPageSelect;
    }

    public function trucks()
    {
        return $this->hasMany(Truck::class);
    }


}
