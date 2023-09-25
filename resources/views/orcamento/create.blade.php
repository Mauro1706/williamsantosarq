@extends('master')
<?php
/**
 * @var $msg ;
 */
?>
@section('content')
    <div class="row my-5 border border-dark" style="margin-top: 8em !important; ">
        <div class="text-center my-5 mx-2 col-sm-12">
            <h1 class="text-center col-sm-12"><b>Registrar Solicitação de Orçamento</b></h1>
        </div>
        <?php if (!empty($msg)) { ?>
            <div class="container mx-5">
                <?php foreach (explode('|', $msg) as $ms) { ?>
                <label class="text-danger mx-5"><i class="fas fa-exclamation-triangle"></i> {{$ms}}</label><br/>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="container mx-2">
            <form class="form" action="{{url('/orcamento/gravar')}}" method="post">
                <?= csrf_field(); ?>
                <?= method_field('PUT'); ?>
                <div class="form-group row">
                    <label for="inputNome" class="col-sm-4 col-form-label text-right">Nome:</label>
                    <div class="col-sm-6">
                        <input type="input" required class="form-control" name="name" id="inputNome"
                            placeholder="Nome Completo" value="{{ isset($name) ? $name : '' }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label text-right">E-mail:</label>
                    <div class="col-sm-4">
                        <input type="login" required class="form-control" name="login" id="inputEmail3"
                            placeholder="nomeusuario" value="{{ isset($login) ? $login : '' }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-4 col-form-label text-right">Descrição:</label>
                    <div class="col-sm-6">
                        <textarea required class="form-control" name="senha" id="inputPassword3"
                            placeholder="Coloque aqui uma breve descrição da sua solicitação" min="6">
                        </textarea>
                        <span class="text-danger"><b>* Coloque aqui uma breve descrição da sua solicitação</b></span>
                    </div>
                </div>
                <br/>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark">Solicitar Orçamento</button>
                    <a href="{{url('/')}}" class="btn btn-dark">Voltar</a>
                </div>
                <br /><br />
            </form>
        </div>
    </div>
@endsection
