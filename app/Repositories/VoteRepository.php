<?php

namespace App\Repositories;

use App\Models\Vote;
use App\Repositories\BaseRepository;

/**
 * Class VoteRepository
 * @package App\Repositories
 * @version August 31, 2020, 11:44 pm UTC
*/

class VoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sender',
        'message',
        'email'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Vote::class;
    }
}
