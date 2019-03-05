<?php namespace testeUDSAPI;

use Illuminate\Database\Eloquent\Model;

class adicional extends Model {

	//
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'adicionals';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','nome', 'valor', 'tempo_adicional'];

    public function pizza_adicional()
    {
        return $this->hasMany(pizza_adicional::class);
    }

}
