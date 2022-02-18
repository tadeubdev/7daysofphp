<?php

require_once 'Usuario.php';

class ApiController
{
    private $rota;
    private $dados;
    private $usuario;

    public function __construct($rota, $dados, $usuario)
    {
        $this->rota = $rota;
        $this->dados = $dados;
        $this->usuario = $usuario;
    }

    public function executa() 
    {
        if ($this->rota === '/login') {
            $dados = $this->usuario->logar($this->dados['login'], $this->dados['senha']);

            if (in_array($dados['id'], $this->usuario->usuariosLogados)) {
                return ['mensagem' => 'Usuário está logado'];
            } else {
                return ['mensagem' => 'Usuário não está logado'];
            }
        } else if ($this->rota === '/cadastrar') {
            $dados = $this->usuario->cadastrar($this->dados['login'], $this->dados['senha']);

            if (in_array($dados['id'], $this->usuario->usuariosLogados)) {
                return ['mensagem' => 'Usuário cadastrado e logado'];
            } else {
                return ['mensagem' => 'Usuário não cadastrado'];
            }
        } else if ($this->rota === '/logout') {
            $this->usuario->logout($this->dados['usuarioId']);

            if (in_array($this->dados['usuarioId'], $this->usuario->usuariosLogados) === false) {
                return ['mensagem' => 'Usuário deslogado'];
            } else {
                return ['mensagem' => 'Usuário não deslogado'];
            }
        }
    }
}

$rota = $_SERVER['REQUEST_URI'];
$usuario = new Usuario();
$dados = $_GET;
$api = new ApiController($rota, $dados, $usuario);

$response = $api->executa();
echo json_encode($response);
