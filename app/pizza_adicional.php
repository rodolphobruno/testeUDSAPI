<?php namespace testeUDSAPI;

use Illuminate\Database\Eloquent\Model;

class pizza_adicional extends Model {

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
        return $this->belongsTo(pizza::class);
    }

    public function adicional()
    {
        return $this->belongsTo(adicional::class);
    }

}
