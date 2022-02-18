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
        throw new \Exception('Não implementado ainda!');
    }

    public function cadastrar($login, $senha)
    {
        throw new \Exception('Não implementado ainda!');
    }

    public function logout($usuarioId)
    {
        throw new \Exception('Não implementado ainda!');
    }

    public function alterarDados($usuarioId, $login = null, $senha = null)
    {
        throw new \Exception('Não implementado ainda!');
    }

    public function ehAdministrador($usuarioId)
    {
        throw new \Exception('Não implementado ainda!');
    }

    public function ehModerador($usuarioId)
    {
        throw new \Exception('Não implementado ainda!');
    }

    public function adicionarALista($usuarioId, $listaId)
    {
        throw new \Exception('Não implementado ainda!');
    }

    public function removerDaLista($usuarioId, $listaId)
    {
        throw new \Exception('Não implementado ainda!');
    }

    public function adicionarNota($usuarioId, $conteudo)
    {
        throw new \Exception('Não implementado ainda!');
    }

    public function editarNota($notaId, $usuarioId, $conteudo)
    {
        throw new \Exception('Não implementado ainda!');
    }

    public function removerNota($notaId)
    {
        throw new \Exception('Não implementado ainda!');
    }
}
