<?php

namespace App\Http\Models\Admin\Goods;

use Illuminate\Database\Eloquent\Model;

class ShopModel extends Model
{
    /**
     *数据表 
    */
    protected $table = 'jn_shop';
    //默认时间开启,修改成不开启
    public $timestamps = false;
}
