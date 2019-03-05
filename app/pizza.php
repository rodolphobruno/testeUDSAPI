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
    public function sabors()
    {
        return $this->belongsToMany('App\sabor','sabor_id');
    }

    /**
     * Get the comments for the blog post.
     */
    public function tamanhos()
    {
        return $this->belongsToMany('App\tamanhos','tamanho_id');
    }

    public function pedido()
    {
        return $this->hasOne('App\pedido');
    }

}
