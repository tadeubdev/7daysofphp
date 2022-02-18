<?php

require_once 'Usuario.php';

class ApiController
{
    private $usuario;
    private $rota;

    public function __construct($rota, $usuario)
    {
        $this->rota = $rota;
        $this->usuario = $usuario;
    }

    public function executa() {
        if ($this->rota === '/login') {
            // TODO: implementar função de logar
        } else if ($this->rota === '/cadastrar') {
            // TODO: implementar função de cadastrar
        } else if ($this->rota === '/logout') {
            // TODO: implementar função de logout
        } else if ($this->rota === '/alterar-dados') {
            // TODO: implementar função de alterar dados
        } else if ($this->rota === '/eh-administrador') {
            // TODO: implementar função de verificar se é administrador
        } else if ($this->rota === '/eh-moderador') {
            // TODO: implementar função de verificar se é moderador
        } else if ($this->rota === '/adicionar-a-lista') {
            // TODO: implementar função de adicionar a lista
        } else if ($this->rota === '/remover-da-lista') {
            // TODO: implementar função de remover da lista
        } else if ($this->rota === '/adicionar-nota') {
            // TODO: implementar função de adicionar nota
        } else {
            throw new Exception('Rota não encontrada');
        }
    }
}

$rota = $_SERVER['REQUEST_URI'];
$usuario = new Usuario();
$api = new ApiController($rota, $usuario);
