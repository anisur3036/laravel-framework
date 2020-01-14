<?php

namespace App\Http\Traits;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

trait ApiResponser
{
	private function successResponse($data, $code)
	{
		return response()->json($data, $code);
	}

	protected function errorResponse($msg, $code)
	{
		return response()->json(['error' => $msg, 'code' => $code], $code);
	}
	
	protected function showAll(Collection $collection, $code=200)
	{
		return $this->successResponse(['data' => $collection], $code);
	}

	protected function showOne(Model $model, $code=200)
	{
		return $this->successResponse(['data' => $model], $code);
	}
}