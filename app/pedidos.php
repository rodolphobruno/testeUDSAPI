<?php namespace testeUDSAPI;

use Illuminate\Database\Eloquent\Model;

class pedidos extends Model {

	//
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pedidos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','pizza_id', 'valor_total', 'tempo_preparo_total'];

    public function pizza()
    {
        return $this->belongsTo('App\pizza','pizza_id');
    }

}
