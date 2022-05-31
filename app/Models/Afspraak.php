<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afspraak extends Model
{
    use HasFactory;

    protected $table = 'afspraak';

    public const CREATED_AT = null;
    public const UPDATED_AT = null;

    protected $primaryKey = 'afspraak_id';

    protected $afspraak_bevestiging = 'tinyint';
    protected $datum_afspraak = 'date';
    protected $tijd_afspraak = 'time';
    protected $afspraak_opmerking = 'text';
    protected $afspraak_status = 'enum';
    protected $afspraak_type = 'enum';
    protected $monteur_id = 'int';
    protected $klant_id = 'int';
    protected $klant_opmerking = 'text';
    protected $factuur_betaald = 'bool';

}
