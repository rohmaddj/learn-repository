<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Cat;

/**
 * Class CatTransformer.
 *
 * @package namespace App\Transformers;
 */
class CatTransformer extends TransformerAbstract
{
    /**
     * Transform the Cat entity.
     *
     * @param \App\Entities\Cat $model
     *
     * @return array
     */
    public function transform(Cat $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
