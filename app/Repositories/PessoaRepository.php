<?php

namespace App\Repositories;

use App\Models\Pessoa;
use App\Repositories\BaseRepository;

/**
 * Class PessoaRepository
 * @package App\Repositories
 * @version January 3, 2020, 2:44 pm UTC
*/

class PessoaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'cpf'
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
        return Pessoa::class;
    }
}
