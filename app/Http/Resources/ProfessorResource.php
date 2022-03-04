<?php

namespace App\Http\Resources;

use App\Constants\EnumTipoUsuario;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfessorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'email' => $this->email,
            'dataVerificacaoEmail' => $this->data_verificacao_email,
            'tipo' => EnumTipoUsuario::fromCodigo($this->tipo)->getNome()
        ];
    }
}
