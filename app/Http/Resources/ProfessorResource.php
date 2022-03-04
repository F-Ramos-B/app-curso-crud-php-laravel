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
        $aluno = EnumTipoUsuario::ALUNO();
        $prof = EnumTipoUsuario::PROFESSOR();
        error_log('aluno: ' . json_encode($aluno));
        error_log('prof: ' . json_encode($prof));
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'email' => $this->email,
            'dataVerificacaoEmail' => $this->data_verificacao_email,
            'tipo' => EnumTipoUsuario::fromCodigo($this->tipo)->getDescricao()
        ];
    }
}
