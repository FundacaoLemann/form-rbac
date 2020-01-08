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
    <h2>Painel de Revisão</h2>
</div>

<div class="container">
    <div class="d-flex justify-content-center">
        <!-- <div class="row"> -->
            <div class="col-md-8">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Projeto</th>
                            <th scope="col">Nota</th>
                            <th scope="col">Revisar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td scope="col"></td>
                                <td scope="col">{{$project->projeto_nome}}</td>
                                <td scope="col">Nota</td>
                                <td scope="col">
                                    <a href="{{url("/projects/{$project->id}")}}">Revisar</a>
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