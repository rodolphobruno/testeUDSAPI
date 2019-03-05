<?php namespace testeUDSAPI;

use Illuminate\Database\Eloquent\Model;

class sabors extends Model {

	//
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sabors';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','nome','tempo_preparo_adicional'];
    /**
     * Get the post that owns the comment.
     */
    public function pizza()
    {
        return $this->belongsToMany('App\pizza');
    }


}
