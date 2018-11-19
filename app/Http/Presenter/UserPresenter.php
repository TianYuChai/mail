<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/19
 * Time: 17:27
 */
namespace App\Http\Presenter;

class UserPresenter
{
    public function getFullName($gendr, $name){
        if($gendr  == 'M') {
            $FullName = 'Mr.'. $name;
        } else {
            $FullName = 'Mrs.' . $name;
        }
        return $FullName;
    }
}