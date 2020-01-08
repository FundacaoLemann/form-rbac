<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>


<style>

.col-md-5{
    border: 1px solid black;
    border-radius: 15px;
    padding:20px;
    height: 450px;
    position: fixed;
    bottom: 15px;
    right: 5px;
}
.card-body {
    margin:5px;
    padding:5px;
}

.texto{
    font-size: 12px;
}

</style>

<body>
    <div class="container m-3">
        <div class="row">
            <div class="col-md-7">
                <h4>Sobre o projeto</h4>
                <hr>
                @foreach($projects as $project)
                
                    <h5>E-mail principal para contato</h5>
                    <div class="card-body">{{$project->email_principal}}</div>

                    <h5>Nome do projeto:</h5>
                    <div class="card-body">{{$project->projeto_nome}}</div>

                    <h5>O projeto será implementado em qual rede de ensino?</h5>
                    <div class="card-body">{{$project->projeto_rede}}</div>

                    <h5>Descrição geral do projeto</h5>
                    <div class="card-body">{{$project->projeto_descricao}}</div>

                    <h5>Qual é o público alvo? Selecione todos os que fizerem sentido.</h5>
                    <div class="card-body">{{$project->projeto_publico}} {{$project->projeto_publico_outro}}</div>

                    <h5>Qual é o departamento da secretaria de ensino ou mantenedor de escola envolvido no projeto?</h5>
                    
                    <h6>Nome do departamento</h6>
                    <div class="card-body">{{$project->departamento_nome}}</div>

                    <h6>Rua</h6>
                    <div class="card-body">{{$project->departamento_rua}}</div>

                    <h6>Número</h6>
                    <div class="card-body">{{$project->departamento_numero}}</div>
                    
                    <h6>Complemento</h6>
                    <div class="card-body">
                        {{$project->departamento_compl}}
                    </div>
                    <h6>Bairro</h6>
                    <div class="card-body">
                        {{$project->departamento_bairro}}
                    </div>
                    <h6>Cidade</h6>
                    <div class="card-body">
                        {{$project->departamento_cidade}}
                    </div>
                    <h6>Estado</h6>
                    <div class="card-body">
                        {{$project->departamento_estado}}
                    </div>
                    <h6>CEP</h6>
                    <div class="card-body">
                        {{$project->departamento_cep}}
                    </div>
                    <h6>Região do Brasil</h6>
                    <div class="card-body">
                        {{$project->departamento_regiao}}
                    </div>

                    <h5>Conte um pouco sobre o departamento na secretaria ou do mantenedor e sobre sua relação com o projeto</h5>
                    <div class="card-body">
                        {{$project->departamento_sobre}}
                    </div>

                    <h5>De que forma o departamento da secretaria ou mantenedor apoia o projeto? Por exemplo, serviços, materiais, infraestrutura, recursos financeiros, dentre outros.</h5>
                    <div class="card-body">
                        {{$project->departamento_apoio}}
                    </div>

                    <h5>Link(s) para página na Internet, facebook e/ou outros canais de comunicação.</h5>
                    <div class="card-body">
                        {{$project->departamento_links}}
                    </div>
                    <h5>Desde quando esta escola desenvolve este trabalho?</h5>
                    <div class="card-body">
                        {{$project->departamento_inicio_mes}}/{{$project->departamento_inicio_ano}}
                    </div>

                    <h5>Em qual escola será desenvolvido e aprofundado o projeto em aprendizagem criativa?</h5>
                    <h6>Nome da escola:</h6>
                    <div class="card-body">{{$project->escola_nome}}</div>
                    <h6>Rua e número</h6>
                    <div class="card-body">{{$project->escola_rua}}, {{$project->escola_numero}}</div>
                    <h6>Complemento</h6>
                    <div class="car-body">{{$project->escola_compl}}</div>
                    <h6>Bairro</h6>
                    <div class="card-body">{{$project->escola_bairro}}</div>
                    <h6>Cidade</h6>
                    <div class="card-body">{{$project->escola_cidade}}</div>
                    <h6>Estado</h6>
                    <div class="card-body">{{$project->escola_estado}}</div>
                    <h6>CEP</h6>
                    <div class="card-body">{{$project->escola_cep}}</div>
                    <h6>Região do Brasil</h6>
                    <div class="card-body">{{$project->escola_regiao}}</div>

                    <h5>Qual é o integrante da equipe gestora da escola envolvido no projeto</h5>
                    <div class="card-body">{{$project->escola_equipe}}</div>

                    <h5>Qual(is) a(s) modalidade(s) do(s) professor(es) envolvido(s) no projeto?</h5>
                    <div class="card-body">{{$project->escola_modalidade}}</div>

                    <h5>Conte um pouco sobre sua escola:</h5>
                    <div class="card-body">
                        {{$project->escola_sobre}}
                    </div>
                    <h5>Link(s) para página na Internet, facebook e/ou outros canais de comunicação da sua escola:</h5>
                    <div class="card-body">{{$project->escola_links}}</div>

                    <h5>Desde quando esta escola desenvolve este trabalho?</h5>
                    <div class="card-body">{{$project->escola_inicio_mes}}/{{$project->escola_inicio_ano}}</div>

                    <h5>Além das instituições citadas acima, o projeto trabalhará com outros parceiros, negócios ou organizações (empresa, ONG, outro órgão público etc)?</h5>
                    <div class="card-body">{{$project->parceiros}}</div>

                    @foreach($partners as $partner)
                        <h5>Parceiro</h5>

                        <h6>Nome da organização parceira:</h6>
                        <div class="card-body">{{$partner->nome}}</div>

                        <h6>Página na Internet da organização parceira:</h6>
                        <div class="card-body">{{$partner->link}}</div>
                        <h6>Descreva o tipo da entidade e o papel que terá essa organização no projeto</h6>
                        <div class="card-body">{{$partner->tipo}}</div>
                        <h6>Desde quando este parceito desenvolve este trabalho?</h6>
                        <div class="card-body">{{$partner->inicio_mes}}/{{$partner->inicio_ano}}</div>

                    @endforeach

                    <h5>Além das escolas citadas acima, o projeto envolverá outro espaço? Você pode selecionar mais de uma opção.</h5>
                    <div class="card-body">{{$project->projeto_espacos}}</div>

                    <h6>Outro (especifique):</h6>
                    <div class="card-body">{{$project->projeto_espacos_outro}}</div>

                    <h5>A chamada de projetos do DAC 2020 prioriza o trabalho com crianças, jovens e professores de escolas públicas. O projeto proposto atende a esta comunidade?</h5>
                    <div class="card-body">{{$project->projeto_comunidade}}</div>

                    <h5>Descreva o perfil do público-alvo de crianças, jovens e/ou professores:</h5>
                    <div class="card-body">{{$project->projeto_comunidade_descricao_publico}}</div>

                    <h5>Quantas pessoas participarão diretamente dos cursos, oficinas, apresentações e outras atividades do seu projeto? (Por favor discriminar por público-alvo)</h5>
                    <div class="card-body">{{$project->projeto_quantidade_pessoas}}</div>

                    <h5>Que tipo de atividades você pretende desenvolver no seu projeto?</h5>
                    <div class="card-body">{{$project->projeto_atividades}}</div>
                    <h6>Outro (especifique):</h6>
                    <div class="card-body">{{$project->projeto_atividades_outro}}</div>

                    <h5>Como seu projeto funcionará na prática? (incluir a descrição do papel de cada membro da equipe, as atividades desenvolvidas, frequência das sessões, organização dos participantes, materiais utilizados, localização, etc.)</h5>
                    <div class="card-body">{{$project->projeto_funcionamento}}</div>
                    <h5>Que atitudes, habilidades e conteúdos os participantes do seu projeto irão desenvolver?</h5>
                    <div class="card-body">{{$project->projeto_habilidades}}</div>

                    <h5>Como você pretende avaliar o seu projeto, após e/ou durante sua implementação?</h5>
                    <div class="card-body">{{$project->projeto_avaliacao}}</div>
                    <h5>Este projeto já foi testado de alguma forma?</h5>
                    <div class="card-body">{{$project->projeto_testado}}</div>

                    <h5>Quando e como? Descreva como foi realizado e conte seus resultados.</h5>
                    <div class="card-body">{{$project->projeto_avaliacao_resultado}}</div>

                    <h5>Caso haja uma página da Internet relacionada a este projeto, insira o link abaixo:</h5>
                    <div class="card-body">{{$project->projeto_link}}</div>

                    <h5>Caso haja um vídeo descritivo do projeto, insira o link abaixo: (só serão considerados vídeos de até 3 minutos.)</h5>
                    <div class="card-body">{{$project->projeto_video}}</div>

                    <h5>Por que a sua proposta deveria ser selecionada pelo Desafio Aprendizagem Criativa? O que a torna especial?</h5>
                    <div class="card-body">
                        {{$project->projeto_justificativa}}
                    </div>

                    <h5>Qual o tipo de ajuda você precisaria para desenvolver o seu projeto?</h5>
                    <div class="card-body">
                        {{$project->projeto_ajuda}}
                    </div>


                    <hr>
                    <h4>Sobre os candidatos à Fellowship</h4>
                    </hr>
                    {{-- @foreach($candidates as $candidate) --}}
            
                        <h5>Candidato 1</h5>

                        <h6>Nome</h6>
                        <div class="card-body">LUIZ CARLOS RODRIGUES DOS SANTOS</div>
                        <h6>Telefone</h6>
                        <div class="card-body">47984735764</div>
                        <h6>Email</h6>
                        <div class="card-body">pixeclevelandia@hotmail.com</div>
                        <h6>Rua</h6>
                        <div class="card-body">RUA SERTÃO VERDE</div>
                        <h6>Número</h6>
                        <div class="card-body">236</div>
                        <h6>Complemento</h6>
                        <div class="card-body">casa</div>
                        <h6>Bairro</h6>
                        <div class="card-body">MARGEM ESQUERDA</div>
                        <h6>Cidade</h6>
                        <div class="card-body">GASPAR</div>
                        <h6>Estado</h6>
                        <div class="card-body">SC</div>
                        <h6>CEP</h6>
                        <div class="card-body">89114778</div>
                        <h6>Região do Brasil</h6>
                        <div class="card-body">Sul</div>
                        <h6>Website pessoal (link)</h6>
                        <div class="card-body">pixeclevelandia@hotmail.com</div>
                        <h6>Se você é membro da Rede Brasileira de Aprendizagem Criativa (aprendizagemcriativa.org), por favor, informe seu nome de usuário do portal</h6>
                        <div class="card-body">No answer given</div>
                        <h6>Em qual das instituições citadas na página anterior você trabalha?</h6>
                        <div class="card-body">Prefeitura Municipal de Gaspar/SC</div>
                        <h6>Qual é seu cargo e função na instituição?</h6>
                        <div class="card-body">Agente de Combate a Endemias</div>
                        <h6>Qual será seu papel no projeto?</h6>
                        <div class="card-body">Orientador</div>
                        <h6>Explique seu grau de disponibilidade para trabalhar no projeto:</h6>
                        <div class="card-body">08 oito horas semanais</div>

                        <h6>Grau de escolaridade</h6>
                        <div class="card-body">Pós graduação - mestrado</div>
                        <h6>Curso ou programa</h6>
                        <div class="card-body">Educador Ambiental</div>
                        <h6>Nome da instituição de ensino mais recente</h6>
                        <div class="card-body">UNIASSELVI</div>
                        <h6>Ano de conclusão</h6>
                        <div class="card-body">2019</div>
                        <h6>Conte um pouco mais sobre você, sua formação acadêmica e experiências profissionais.</h6>
                        <div class="card-body">
                            Pós graduado em Políticas Públicas Municipais, pós graduao em Educação Ambiental, pós graduando em Políticas Sociais Municipais.
                            Atuando como Agente Ambiental, percebi o descarte de exemplares passíveis de leitura e aprendizado dentro da cidade (isto é, repasse de conhecimento para os diversos bairros), em contato com parceiros, os mesmos guardam estes para que os retire e disponibilize para a população.
                            Conte sobre algo que você tenha aprendido, alcançado ou construído nos últimos dois anos.
                            Com a função/atuação de Agente Ambiental, notei a carência de descarte e repasse deste exemplares para outras camadas da sociedade gasparense. A partir do momento de implantação do projeto, o mesmo tomou proporção que surpreendeu.</div>
                        <h6>Por que você gostaria de participar do Desafio Aprendizagem Criativa Brasil? Que características e qualidades o tornariam um bom fellow?</h6>
                        <div class="card-body">Temos, todos nós, exemplares que já lemos, mas não sabemos como descartar.
                            Inúmeras pessoas, às vezes, buscam por esta edição.
                            Despertar o prazer pela leitura, traz mais conhecimento e apreço pela vida.
                            Quando disponibilizado em local de uso comum, todos se sentem a vontade pela retirada.
                            Na intenção de ampliar estes espaços de leitura coletiva, a certeza de quê as Associações Comunitárias de Moradores, serão parceiras.
                        </div>
                    {{-- @endforeach --}}

                    <h5>Candidato 2</h5>

                    <h6>Nome</h6>
                    <div class="card-body">LUIZ CARLOS RODRIGUES DOS SANTOS</div>
                    <h6>Telefone</h6>
                    <div class="card-body">47984735764</div>
                    <h6>Email</h6>
                    <div class="card-body">pixeclevelandia@hotmail.com</div>
                    <h6>Rua</h6>
                    <div class="card-body">RUA SERTÃO VERDE</div>
                    <h6>Número</h6>
                    <div class="card-body">236</div>
                    <h6>Complemento</h6>
                    <div class="card-body">casa</div>
                    <h6>Bairro</h6>
                    <div class="card-body">MARGEM ESQUERDA</div>
                    <h6>Cidade</h6>
                    <div class="card-body">GASPAR</div>
                    <h6>Estado</h6>
                    <div class="card-body">SC</div>
                    <h6>CEP</h6>
                    <div class="card-body">89114778</div>
                    <h6>Região do Brasil</h6>
                    <div class="card-body">Sul</div>
                    <h6>Website pessoal (link)</h6>
                    <div class="card-body">pixeclevelandia@hotmail.com</div>
                    <h6>Se você é membro da Rede Brasileira de Aprendizagem Criativa (aprendizagemcriativa.org), por favor, informe seu nome de usuário do portal</h6>
                    <div class="card-body">No answer given</div>
                    <h6>Em qual das instituições citadas na página anterior você trabalha?</h6>
                    <div class="card-body">Prefeitura Municipal de Gaspar/SC</div>
                    <h6>Qual é seu cargo e função na instituição?</h6>
                    <div class="card-body">Agente de Combate a Endemias</div>
                    <h6>Qual será seu papel no projeto?</h6>
                    <div class="card-body">Orientador</div>
                    <h6>Explique seu grau de disponibilidade para trabalhar no projeto:</h6>
                    <div class="card-body">08 oito horas semanais</div>

                    <h6>Grau de escolaridade</h6>
                    <div class="card-body">Pós graduação - mestrado</div>
                    <h6>Curso ou programa</h6>
                    <div class="card-body">Educador Ambiental</div>
                    <h6>Nome da instituição de ensino mais recente</h6>
                    <div class="card-body">UNIASSELVI</div>
                    <h6>Ano de conclusão</h6>
                    <div class="card-body">2019</div>
                    <h6>Conte um pouco mais sobre você, sua formação acadêmica e experiências profissionais.</h6>
                    <div class="card-body">
                        Pós graduado em Políticas Públicas Municipais, pós graduao em Educação Ambiental, pós graduando em Políticas Sociais Municipais.
                        Atuando como Agente Ambiental, percebi o descarte de exemplares passíveis de leitura e aprendizado dentro da cidade (isto é, repasse de conhecimento para os diversos bairros), em contato com parceiros, os mesmos guardam estes para que os retire e disponibilize para a população.
                        Conte sobre algo que você tenha aprendido, alcançado ou construído nos últimos dois anos.
                        Com a função/atuação de Agente Ambiental, notei a carência de descarte e repasse deste exemplares para outras camadas da sociedade gasparense. A partir do momento de implantação do projeto, o mesmo tomou proporção que surpreendeu.</div>
                    <h6>Por que você gostaria de participar do Desafio Aprendizagem Criativa Brasil? Que características e qualidades o tornariam um bom fellow?</h6>
                    <div class="card-body">Temos, todos nós, exemplares que já lemos, mas não sabemos como descartar.
                        Inúmeras pessoas, às vezes, buscam por esta edição.
                        Despertar o prazer pela leitura, traz mais conhecimento e apreço pela vida.
                        Quando disponibilizado em local de uso comum, todos se sentem a vontade pela retirada.
                        Na intenção de ampliar estes espaços de leitura coletiva, a certeza de quê as Associações Comunitárias de Moradores, serão parceiras.
                    </div>

                    <h5>Candidato 3</h5>

                    <h6>Nome</h6>
                    <div class="card-body">LUIZ CARLOS RODRIGUES DOS SANTOS</div>
                    <h6>Telefone</h6>
                    <div class="card-body">47984735764</div>
                    <h6>Email</h6>
                    <div class="card-body">pixeclevelandia@hotmail.com</div>
                    <h6>Rua</h6>
                    <div class="card-body">RUA SERTÃO VERDE</div>
                    <h6>Número</h6>
                    <div class="card-body">236</div>
                    <h6>Complemento</h6>
                    <div class="card-body">casa</div>
                    <h6>Bairro</h6>
                    <div class="card-body">MARGEM ESQUERDA</div>
                    <h6>Cidade</h6>
                    <div class="card-body">GASPAR</div>
                    <h6>Estado</h6>
                    <div class="card-body">SC</div>
                    <h6>CEP</h6>
                    <div class="card-body">89114778</div>
                    <h6>Região do Brasil</h6>
                    <div class="card-body">Sul</div>
                    <h6>Website pessoal (link)</h6>
                    <div class="card-body">pixeclevelandia@hotmail.com</div>
                    <h6>Se você é membro da Rede Brasileira de Aprendizagem Criativa (aprendizagemcriativa.org), por favor, informe seu nome de usuário do portal</h6>
                    <div class="card-body">No answer given</div>
                    <h6>Em qual das instituições citadas na página anterior você trabalha?</h6>
                    <div class="card-body">Prefeitura Municipal de Gaspar/SC</div>
                    <h6>Qual é seu cargo e função na instituição?</h6>
                    <div class="card-body">Agente de Combate a Endemias</div>
                    <h6>Qual será seu papel no projeto?</h6>
                    <div class="card-body">Orientador</div>
                    <h6>Explique seu grau de disponibilidade para trabalhar no projeto:</h6>
                    <div class="card-body">08 oito horas semanais</div>

                    <h6>Grau de escolaridade</h6>
                    <div class="card-body">Pós graduação - mestrado</div>
                    <h6>Curso ou programa</h6>
                    <div class="card-body">Educador Ambiental</div>
                    <h6>Nome da instituição de ensino mais recente</h6>
                    <div class="card-body">UNIASSELVI</div>
                    <h6>Ano de conclusão</h6>
                    <div class="card-body">2019</div>
                    <h6>Conte um pouco mais sobre você, sua formação acadêmica e experiências profissionais.</h6>
                    <div class="card-body">
                        Pós graduado em Políticas Públicas Municipais, pós graduao em Educação Ambiental, pós graduando em Políticas Sociais Municipais.
                        Atuando como Agente Ambiental, percebi o descarte de exemplares passíveis de leitura e aprendizado dentro da cidade (isto é, repasse de conhecimento para os diversos bairros), em contato com parceiros, os mesmos guardam estes para que os retire e disponibilize para a população.
                        Conte sobre algo que você tenha aprendido, alcançado ou construído nos últimos dois anos.
                        Com a função/atuação de Agente Ambiental, notei a carência de descarte e repasse deste exemplares para outras camadas da sociedade gasparense. A partir do momento de implantação do projeto, o mesmo tomou proporção que surpreendeu.</div>
                    <h6>Por que você gostaria de participar do Desafio Aprendizagem Criativa Brasil? Que características e qualidades o tornariam um bom fellow?</h6>
                    <div class="card-body">Temos, todos nós, exemplares que já lemos, mas não sabemos como descartar.
                        Inúmeras pessoas, às vezes, buscam por esta edição.
                        Despertar o prazer pela leitura, traz mais conhecimento e apreço pela vida.
                        Quando disponibilizado em local de uso comum, todos se sentem a vontade pela retirada.
                        Na intenção de ampliar estes espaços de leitura coletiva, a certeza de quê as Associações Comunitárias de Moradores, serão parceiras.
                    </div>

                    <h5>A proposta tem um quarto candidato?</h5>
                    <div class="card-body"></div>

                    <h5>Candidato 4</h5>

                    <h6>Nome</h6>
                    <div class="card-body">LUIZ CARLOS RODRIGUES DOS SANTOS</div>
                    <h6>Telefone</h6>
                    <div class="card-body">47984735764</div>
                    <h6>Email</h6>
                    <div class="card-body">pixeclevelandia@hotmail.com</div>
                    <h6>Rua</h6>
                    <div class="card-body">RUA SERTÃO VERDE</div>
                    <h6>Número</h6>
                    <div class="card-body">236</div>
                    <h6>Complemento</h6>
                    <div class="card-body">casa</div>
                    <h6>Bairro</h6>
                    <div class="card-body">MARGEM ESQUERDA</div>
                    <h6>Cidade</h6>
                    <div class="card-body">GASPAR</div>
                    <h6>Estado</h6>
                    <div class="card-body">SC</div>
                    <h6>CEP</h6>
                    <div class="card-body">89114778</div>
                    <h6>Região do Brasil</h6>
                    <div class="card-body">Sul</div>
                    <h6>Website pessoal (link)</h6>
                    <div class="card-body">pixeclevelandia@hotmail.com</div>
                    <h6>Se você é membro da Rede Brasileira de Aprendizagem Criativa (aprendizagemcriativa.org), por favor, informe seu nome de usuário do portal</h6>
                    <div class="card-body">No answer given</div>
                    <h6>Em qual das instituições citadas na página anterior você trabalha?</h6>
                    <div class="card-body">Prefeitura Municipal de Gaspar/SC</div>
                    <h6>Qual é seu cargo e função na instituição?</h6>
                    <div class="card-body">Agente de Combate a Endemias</div>
                    <h6>Qual será seu papel no projeto?</h6>
                    <div class="card-body">Orientador</div>
                    <h6>Explique seu grau de disponibilidade para trabalhar no projeto:</h6>
                    <div class="card-body">08 oito horas semanais</div>

                    <h6>Grau de escolaridade</h6>
                    <div class="card-body">Pós graduação - mestrado</div>
                    <h6>Curso ou programa</h6>
                    <div class="card-body">Educador Ambiental</div>
                    <h6>Nome da instituição de ensino mais recente</h6>
                    <div class="card-body">UNIASSELVI</div>
                    <h6>Ano de conclusão</h6>
                    <div class="card-body">2019</div>
                    <h6>Conte um pouco mais sobre você, sua formação acadêmica e experiências profissionais.</h6>
                    <div class="card-body">
                        Pós graduado em Políticas Públicas Municipais, pós graduao em Educação Ambiental, pós graduando em Políticas Sociais Municipais.
                        Atuando como Agente Ambiental, percebi o descarte de exemplares passíveis de leitura e aprendizado dentro da cidade (isto é, repasse de conhecimento para os diversos bairros), em contato com parceiros, os mesmos guardam estes para que os retire e disponibilize para a população.
                        Conte sobre algo que você tenha aprendido, alcançado ou construído nos últimos dois anos.
                        Com a função/atuação de Agente Ambiental, notei a carência de descarte e repasse deste exemplares para outras camadas da sociedade gasparense. A partir do momento de implantação do projeto, o mesmo tomou proporção que surpreendeu.</div>
                    <h6>Por que você gostaria de participar do Desafio Aprendizagem Criativa Brasil? Que características e qualidades o tornariam um bom fellow?</h6>
                    <div class="card-body">Temos, todos nós, exemplares que já lemos, mas não sabemos como descartar.
                        Inúmeras pessoas, às vezes, buscam por esta edição.
                        Despertar o prazer pela leitura, traz mais conhecimento e apreço pela vida.
                        Quando disponibilizado em local de uso comum, todos se sentem a vontade pela retirada.
                        Na intenção de ampliar estes espaços de leitura coletiva, a certeza de quê as Associações Comunitárias de Moradores, serão parceiras.
                    </div>

                    <h5>Como você ouviu falar sobre o Desafio Aprendizagem Criativa Brasil?</h5>
                    <div class="card-body">Portal da Rede Brasileira de Aprendizagem Criativa</div>

                    <h5>Há mais alguma informação que deveríamos saber sobre vocês ou seu projeto? Se sim, escreva abaixo:</h5>
                    <div class="card-body">
                        Não há documento assinado pela BIBLIOTECA.
                        Tem documento assinado pelo mantenedor do local, autorizando o uso.
                    </div>

                    <h5>Carta de compromisso da secretaria de ensino ou mantenedor</h5>
                    <div class="card-body">
                        20190629_165507_Burst01.jpg
                    </div>
                @endforeach


            </div>
            

            <div class="col-md-5 texto">
                <p>Assinale  a sua avaliação com relação aos itens abaixo, considerando a escala de 0 para insuficiente e três para excepcional:
                </p>

                <table class="table table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Critério</th>
                            <th scope="col">0</th>
                            <th scope="col">1</th>
                            <th scope="col">2</th>
                            <th scope="col">3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">Diversidade Geográfica</td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="diversidadeGeografica" id="exampleRadios1" value="option1" checked>
                                </div>
                            </td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="diversidadeGeografica" id="exampleRadios1" value="option1">
                                </div>
                            </td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="diversidadeGeografica" id="exampleRadios1" value="option1">
                                </div>
                            </td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="diversidadeGeografica" id="exampleRadios1" value="option1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="col">Relevância</td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="relevancia" id="exampleRadios1" value="option1" checked>
                                </div>
                            </td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="relevancia" id="exampleRadios1" value="option1">
                                </div>
                            </td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="relevancia" id="exampleRadios1" value="option1">
                                </div>
                            </td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="relevancia" id="exampleRadios1" value="option1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="col">Alinhamento com a AC</td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="alinhamento" id="exampleRadios1" value="option1" checked>
                                </div>
                            </td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="alinhamento" id="exampleRadios1" value="option1">
                                </div>
                            </td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="alinhamento" id="exampleRadios1" value="option1">
                                </div>
                            </td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="alinhamento" id="exampleRadios1" value="option1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="col">Viabilidade</td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="viabilidade" id="exampleRadios1" value="option1" checked>
                                </div>
                            </td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="viabilidade" id="exampleRadios1" value="option1">
                                </div>
                            </td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="viabilidade" id="exampleRadios1" value="option1">
                                </div>
                            </td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="viabilidade" id="exampleRadios1" value="option1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="col">Inovação</td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="inovacao" id="exampleRadios1" value="option1" checked>
                                </div>
                            </td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="inovacao" id="exampleRadios1" value="option1">
                                </div>
                            </td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="inovacao" id="exampleRadios1" value="option1">
                                </div>
                            </td>
                            <td scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="inovacao" id="exampleRadios1" value="option1">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                Comentários para os candidatos e revisores
                <br>
                <textarea name="" id="" rows="2" cols="60"></textarea>
                <br>
                Comentários para revisores apenas
                <br>
                <textarea name="" id="" rows="2" cols="60"></textarea>
                <br>
                Proposta recomendada para ser finalista do desafio?
                <br>
                <select class="select">
                    <option selected>Selecione</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>

                <div class="row justify-content-end">
                    <button type="submit">Enviar</button>
                </div>
                
            </div>
        </div>
            
    </div>
</body>

</html>
