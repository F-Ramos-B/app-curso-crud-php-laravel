<?php

namespace App\Http\Controllers;

use App\Constants\EnumTipoUsuario;
use App\Http\Resources\AlunoComCursosResource;
use App\Http\Resources\UsuarioResource;
use App\Models\Usuario;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getUsuarios(Request $request)
    {
        $pageSize = $request->query('pageSize') ?? 15;

        return UsuarioResource::collection(Usuario::paginate($pageSize))->response();

        /* return response()->json($retorno, Response::HTTP_OK); */
    }

    public function getAlunosComCursos(Request $request)
    {
        $pageSize = $request->query('pageSize') ?? 15;

        $resultados = Usuario::where('tipo', EnumTipoUsuario::ALUNO()->getCodigo())
            ->paginate($pageSize);

        return AlunoComCursosResource::collection($resultados)->response();
    }
}
