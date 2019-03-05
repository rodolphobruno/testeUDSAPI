<?php namespace testeUDSAPI;

use Illuminate\Database\Eloquent\Model;

class pizza extends Model {

	//
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pizzas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','sabor_id','tamanho_id'];

    /**
     * Get the comments for the blog post.
     */
    public function sabor()
    {
        return $this->belongsTo(sabor::class);
    }

    /**
     * Get the comments for the blog post.
     */
    public function tamanho()
    {
        return $this->belongsTo(tamanho::class);
    }

    public function pizza_adicional()
    {
        return $this->hasMany(pizza_adicional::class);
    }

    public function pedido()
    {
        return $this->hasOne(pedido::class);
    }

}
