@extends('layout')

@section('conteudo-panel')
<style>
.form-group {
    padding:10px;
}
/* .col-md-5, .col-md-2, .container{ 
    border: 2px solid red;
} */
.card{
    width: 20px;
}
.table{
    height: 100%;
    overflow: scroll;
}
</style>


<div class="container m-5">
    <h2>Painel de Acompanhamento</h2>
</div>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="col-md-3">
            <div class="card text-center" style="width: 10rem;">
                <div class="card-body">
                    <h5 class="card-title">XXX</h5>
                    <p class="card-text">INSCRIÇÕES REALIZADAS</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center" style="width: 10rem;">
                <div class="card-body">
                    <h5 class="card-title">XXX</h5>
                    <p class="card-text">INSCRIÇÕES REVISADAS</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center" style="width: 10rem;">
                <div class="card-body">
                    <h5 class="card-title">XXX</h5>
                    <p class="card-text">AGUARDANDO REVISÃO</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center" style="width: 10rem;">
                <div class="card-body">
                    <h5 class="card-title">XXX</h5>
                    <p class="card-text">AGUARDANDO ATRIBUIÇÃO</p>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="d-flex justify-content-start">
      
        <div class="form-group">
            <label for="">Status</label>
            <br>
            <select name="" id="">
                <option value="">Selecione o status</option>
                <option value="Atribuídos">Em revisão</option>
                <option value="Não atribuídos">Aguardando atribuição</option>
                <option value="Não atribuídos">Aguardando revisão</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Revisor</label>
            <br>
            <select name="" id="">
                <option value="">Selecione</option>
                <option value="Atribuídos">Revisor 1</option>
                <option value="Não atribuídos">Revisor 2</option>
            </select>
        </div>
        
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
    </div>
    <div class="container">
            <button type="button" class="btn btn-light">Download</button>
        </div> 
    <div class="d-flex justify-content-center">
        <!-- <div class="row"> -->
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col"></th>
                        <th scope="col">Projeto</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Revisor</th>
                        <th scope="col">Nota</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                                <tr>
                                    <td scope="col"></td>
                                    <td scope="col">{{$project->projeto_nome}}</td>
                                    <td scope="col">{{$project->departamento_estado}}</td>
                                    <td scope="col">Revisor</td>
                                    <td scope="col">Nota</td>
                                    <td scope="col">Status</td>
                                    <td scope="col">
                                        <button type="submit">Atribuir</button>
                                    </td>
                                </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>

        <!-- </div> -->
    </div>

</div>


@endsection