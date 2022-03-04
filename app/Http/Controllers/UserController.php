<?php

namespace App\Http\Controllers;

use App\Http\Resources\CursoResource;
use App\Models\Curso;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getUsuarios()
    {
        $curso = Curso::with('professor')->first();
        return response()->json(CursoResource::make($curso), Response::HTTP_CREATED);
    }
}
