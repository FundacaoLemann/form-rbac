@extends('layout')
@section('conteudo-login')

<style>
.col{
    border: 1px solid gray;
}
.button{
    margin-right:25px;
}
</style>

<body>
   
    <div class="container mt-3">
            <div class="d-flex justify-content-center">
                <div class="row">
                    
                </div>
                <div class="row">
                    <div class="col mb-5">
                        <h1>Login</h1>
                        <form method="post">
                            
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="text-right mb-3">
                                <button type="button" class="btn btn-light">Entrar</button>
                            </div>
                            
                            <div class="alert alert-danger" role="alert">
                                Erro ao realizar o login do usuário.
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
    </div>

</body>
@endsection