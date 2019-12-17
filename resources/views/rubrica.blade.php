@extends('layout')

@section('conteudo-rubrica')

<div class="container m-10">
    <div class="container mt-5 mb-5">
        <h2>Rubricas de Avaliação das Propostas</h2>
    </div>

    <div class="container"> 
        <h5>Diversidade geográfica</h5>
        Ainda a Rede de Aprendizagem Criativa está muito centrada na cidade de São Paulo. A prioridade deverá ser dada a propostas que venham de outras regiões e estados.
    </div>

    <div class="container col-md-12 m-3">
        <table class="table table-bordered table-md table-hover">
            <thead>
                <tr>
                    <th scope="col">0 (insuficiente)</th>
                    <th scope="col">1 (regular)</th>
                    <th scope="col">2 (boa)</th>
                    <th scope="col">3 (excepcional)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="col">O projeto é puramente online. Não há como saber onde o projeto será realizado na prática.</td>
                    <td scope="col">A implementação da proposta é limitada à cidade de São Paulo.</td>
                    <td scope="col">Proposta implementada fora da cidade de São Paulo mas ainda no Sudeste ou em um dos seguintes estados já contemplados pelo DAC em anos anteriores: AM, RN, BA, MS, GO, PA, PR, SC.</td>
                    <td scope="col">Proposta implementada em um  dos Estados não contemplados pelo DAC em anos anteriores:
                    Norte: AC, AP, RO, RR, TO
                    Nordeste: MA, PI, CE, PB, PE, AL, SE
                    Centro-oeste: MT
                    Sudeste: ES
                    Sul: SC, RS
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection