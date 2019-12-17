@extends('layout')

@section('conteudo-assign')

<style>
/* .col-md-5, .col-md-2, .container{ 
    border: 2px solid red;
} */

.form-group {
    padding:10px;
}
.col-md-5{
    height: 100%;
    overflow-y: scroll;
}
.card{
    margin: 10px;
}


</style>


<div class="container m-5">
    <h2>Painel de atribuição</h2>
</div>

<div class="container">
    <div class="d-flex justify-content-start">
        <div class="form-group">
            <label for="">Estado</label>
            <br>
            <select>
                <option value="">Selecione o estado</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Status do projeto</label>
            <br>
            <select name="" id="">
                <option value="">Selecione o status</option>
                <option value="Atribuídos">Atribuídos</option>
                <option value="Não atribuídos">Não atribuídos</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Status do revisor</label>
            <br>
            <select name="" id="">
                <option value="">Selecione o status</option>
                <option value="Atribuídos">Com projeto atribuído</option>
                <option value="Não atribuídos">Sem atribuições</option>
            </select>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <!-- <div class="row"> -->
            <div class="col-md-5">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col"></th>
                        <th scope="col">Nome do Projeto</th>
                        <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            </div>
                            </td>
                            <td>Inspira e expira...agora já posso criar!</td>
                            <td>SP</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>
                            </td>
                            <td>Projeto 2</td>
                            <td>MG</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>
                            </td>
                            <td>
                            <a href="#" data-toggle="modal" data-target="#modal-projeto">Projeto 3</a>
                            </td>
                            <td>MG</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>
                            </td>
                            <td>Projeto 4</td>
                            <td>MG</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>
                            </td>
                            <td>Projeto 5</td>
                            <td>MG</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="col-md-2">
                <div class="d-flex justify-content-center">
                    <div class="d-flex align-items-center">
                        <div><i class="material-icons" style="font-size:20px;">code</i></div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
            
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col"></th>
                        <th scope="col">Revisor</th>
                        <th scope="col">Estado</th>
                        <th scope="col"># Projetos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            </div>
                            </td>
                            <td>Revisor 1</td>
                            <td>SP</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>
                            </td>
                            <td>Revisor 2</td>
                            <td>PE</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>
                            </td>
                            <td>Revisor 3</td>
                            <td>PE</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>
                            </td>
                            <td>Revisor 4</td>
                            <td>PE</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>
                            </td>
                            <td>Revisor 5</td>
                            <td>PE</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        <!-- </div> -->
    </div>

    <div class="container d-flex justify-content-end">
        <button type="submit">Atribuir</button>
    </div>

</div>


<hr>



<div class="modal" id="modal-projeto" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container font-weight-bold">
            Nome do projeto:	
            <div class="card">
                <div class="card-body font-weight-light">
                projeto_nome
                </div>
            </div>
            O projeto será implementado em qual rede de ensino?
            <div class="card">
                <div class="card-body font-weight-light">
                projeto_rede
                </div>
            </div>
            Estado da rede de ensino:
            <div class="card">
                <div class="card-body font-weight-light">
                departamento_estado
                </div>
            </div>
            Descrição geral do projeto:
            <div class="card">
                <div class="card-body font-weight-light">
                projeto_descricao
                </div>
            </div>
            Qual é o público alvo? Selecione todos os que fizerem sentido.
            <div class="card">
                <div class="card-body font-weight-light">
                projeto_publico
            </div>
        </div>
    </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>


@endsection