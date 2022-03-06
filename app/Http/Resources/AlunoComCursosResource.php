<?php

namespace App\Http\Resources;

class AlunoComCursosResource extends UsuarioResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $usuario = parent::toArray($request);
        $usuario['cursos'] = CursoResource::collection($this->cursosInscritos()->get());
        return $usuario;
    }
}
