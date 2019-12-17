@extends('layout')

@section('conteudo-create')

<body>
    <div class="container mt-3">
    <h1>Novo revisor</h1>
        <div class="d-flex justify-content-center">
        
            <div class="row">
                
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                </div>
                <div class="col-md-2">
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

                <div class="col-md-5">
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>
                
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="confirm-password">Confirme a senha</label>
                        <input type="password" class="form-control" name="confirm-password" id="confirm-password">
                    </div>
                </div>

                <div class="col-md-10">
                    <div class='text-right mb-3'>  
                        <button type="button" class="btn btn-light">Cadastrar revisor</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</body>
@endSection