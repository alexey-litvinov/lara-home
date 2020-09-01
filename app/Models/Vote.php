<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Vote
 * @package App\Models
 * @version August 31, 2020, 11:44 pm UTC
 *
 * @property string $sender
 * @property string $message
 * @property string $email
 */
class Vote extends Model
{

    public $table = 'votes';
    



    public $fillable = [
        'sender',
        'message',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sender' => 'string',
        'message' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'email'
    ];

    
}
