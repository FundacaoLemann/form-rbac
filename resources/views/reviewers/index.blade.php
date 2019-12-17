@extends('layout')

@section('conteudo-list')

<style>
.text-center{
    margin: 20px;
}
</style>

<div class="container mt-3">
    <div class="text-center">
        <h1>Revisores</h1>
    </div>
    
    <div class="d-flex justify-content-center">
        <table id="reviewers" class="table-sm table-hover table-bordered" style="width:70%">
                <thead>
                    <tr>
                        <th>Nome do revisor</th>
                        <th>E-mail</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Paola Brito</td>
                        <td>paola@mail.com</td>
                        <td>MG</td>
                        <td>
                        <a href=#>
                            <i class="material-icons" style="font-size:20px;">edit</i>
                        </a>
                        <a href=#>
                            <i class="material-icons" style="font-size:20px;">delete_forever</i>
                        </a>
                        </td>
                    </tr>
                </tbody>
        </table>
        
    </div>
    <div class="container" style="width:70%">
        <div class="d-flex justify-content-end">
            <a href='create'>
                <i class="material-icons" style="font-size:40px;">add_circle</i>
            </a>
        </div>
    </div>
    
    
    
    
</div>



@endsection