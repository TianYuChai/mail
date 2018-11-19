<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/19
 * Time: 17:14
 */
namespace App\Http\Service;
use App\Http\Service\OrderService;

class MealCommand implements OrderService{
	private$cook;
	//绑定命令接受者
	public function_construct(cook$cook){
	$this->cook=$cook;
	}
	public function execute(){
	$this->cook->meal();//把消息传递给厨师，让厨师做饭，下同
	}
	}
	class DrinkCommand implements OrderService{
	private$cook;
	//绑定命令接受者
	public function_construct(cook$cook){
	$this->cook=$cook;
	}
	public function execute(){
	$this->cook->drink();
	}
}