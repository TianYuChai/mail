<?php
namespace App\Http\Repository;

use App\Http\Models\Post;


class UserRepository
{
	protected $Post;

	public function __construct(Post $Post) {
		$this->post = $Post;
	}

	public function getAllusers() {
		return $this->post->get();
	}
}