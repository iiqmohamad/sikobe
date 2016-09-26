<?php

namespace App\Modules\Area\Models\Eloquent;

/*
 * Author: Sulaeman <me@sulaeman.com>.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Eloquent\Model;

use App\Modules\Area\Models\Area as AreaInterface;

class Area extends Model implements AreaInterface
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'areas';

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'identifier',   
        'author_id', 
        'title', 
        'descriptions', 
        'address', 
        'province_id', 
        'regency_id', 
        'district_id', 
        'village_id', 
        'latitude', 
        'longitude', 
        'status'
    ];
}
