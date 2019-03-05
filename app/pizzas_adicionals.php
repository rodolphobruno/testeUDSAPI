<?php namespace testeUDSAPI;

use Illuminate\Database\Eloquent\Model;

class pizzas_adicionals extends Model {

	//
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pizza_adicionals';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','pizza_id', 'adicional_id'];

    public function pizza()
    {
        return $this->belongsToMany('App\pizza','pizza_id');
    }

    public function adicional()
    {
        return $this->belongsToMany('App\adicional','adicional_id');
    }

}
