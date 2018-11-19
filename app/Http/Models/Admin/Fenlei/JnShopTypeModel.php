<?php

namespace App\Http\Models\Admin\Fenlei;

use Illuminate\Database\Eloquent\Model;

class JnShopTypeModel extends Model
{
    /**
     *数据表 
    */
    protected $table = 'jn_shop_type';
    
    //默认时间开启,修改成不开启
    public $timestamps = false;
}
