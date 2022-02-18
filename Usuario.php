<?php

class Usuario
{
    public $usuarios = [
        ['id' => 1, 'login' => 'tadeu', 'senha' => 'minhasenhasupersecreta'],
        ['id' => 2, 'login' => 'teed', 'senha' => 'lembrardaminhasenha123']
    ];
    public $usuariosLogados = [1];
    public $notas = [
        [
            'id' => 1,
            'usuario_id' => 1,
            'conteudo' => 'Lorem ipsum dolor'
        ]
    ];
    public $listas = [
        [
            'id' => 1,
            'nome' => 'Participantes do desafio',
            'usuarios' => [1, 2]
        ],
    ];

    public function logar($login, $senha)
    {
    }
    public function cadastrar($login, $senha)
    {
    }
    public function logout($usuarioId)
    {
    }
    public function alterarDados($usuarioId, $login = null, $senha = null)
    {
    }
    public function ehAdministrador($usuarioId)
    {
    }
    public function ehModerador($usuarioId)
    {
    }
    public function adicionarALista($usuarioId, $listaId)
    {
    }
    public function removerDaLista($usuarioId, $listaId)
    {
    }
    public function adicionarNota($usuarioId, $conteudo)
    {
    }
    public function editarNota($notaId, $usuarioId, $conteudo)
    {
    }
    public function removerNota($notaId)
    {
    }
}
