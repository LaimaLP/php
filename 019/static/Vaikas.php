<?php
class Vaikas extends Tevas
{

    static public $socialinisTinklas = 'TikTok';
    static public function kaSkrolinaVaikas()
    {
        echo 'Skrolinu ' .self::$socialinisTinklas . '<br>';
    }
}
/*vaikas extendino teva, tai mato ka jis pats skrolina ir ka tevas scrolina
    deka self(jis stiprus, visada priristas prie klases) (late state binding);
    jei vietoj self naudojamas static:: tuomet ivyksta overwritinimas, kuomet paveldimume overwritinimas;
    jei nebutu paveldimumo, tuomet static pasilieka tas pats kas self;
    jei nenorim, kad vaikinese klasese buvu overwrit, naudojam self, priesingu atveju: static.
*/

