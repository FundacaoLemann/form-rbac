<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email_principal',
        'projeto_nome',
        'projeto_rede',
        'projeto_descricao',
        'projeto_publico',
        'projeto_publico_outro',
        'departamento_nome',
        'departamento_rua',
        'departamento_numero',
        'departamento_compl',
        'departamento_bairro',
        'departamento_cidade',
        'departamento_estado',
        'departamento_cep',
        'departamento_regiao',
        'departamento_sobre',
        'departamento_apoio',
        'departamento_links',
        'departamento_inicio_mes',
        'departamento_inicio_ano',
        'escola_nome',
        'escola_rua',
        'escola_numero',
        'escola_compl',
        'escola_bairro',
        'escola_cidade',
        'escola_estado',
        'escola_cep',
        'escola_regiao',
        'escola_equipe',
        'escola_modalidade',
        'escola_sobre',
        'escola_links',
        'escola_inicio_mes',
        'escola_inicio_ano',
        'parceiros',
        'projeto_espacos',
        'projeto_espacos_outro',
        'projeto_comunidade',
        'projeto_comunidade_descricao_publico',
        'projeto_quantidade_pessoas',
        'projeto_atividades',
        'projeto_atividades_outro',
        'projeto_funcionamento',
        'projeto_habilidades',
        'projeto_avaliacao',
        'projeto_testado',
        'projeto_avaliacao_resultado',
        'projeto_link',
        'projeto_video',
        'projeto_justificativa',
        'projeto_ajuda',
        'projeto_mais_candidatos',
        'projeto_indicacao',
        'projeto_indicacao_outro',
        'projeto_info_extra',
        'projeto_doc',
    ];

    public function reviewers()
    {
        return $this->belongsToMany('App\Reviewer');
    }
}
