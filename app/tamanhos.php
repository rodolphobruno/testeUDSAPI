<?php namespace testeUDSAPI;

use Illuminate\Database\Eloquent\Model;

class tamanhos extends Model {

	//
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tamanhos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','nome', 'valor', 'tempo_preparo'];

    public function pizza()
    {
        return $this->belongsToMany('App\pizza');
    }

}
