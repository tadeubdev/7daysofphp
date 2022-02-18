<?php

class Usuario
{
    public $usuarios = [
        ['id' => 1, 'tipo' => 'admin', 'login' => 'tadeu', 'senha' => 'minhasenhasupersecreta'],
        ['id' => 2, 'tipo' => 'moderador', 'login' => 'teed', 'senha' => 'lembrardaminhasenha123']
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
        // TODO: implementar função de logar
    }

    public function cadastrar($login, $senha)
    {
        // TODO: implementar função de cadastrar
    }

    public function logout($usuarioId)
    {
        // TODO: implementar função de logout
    }

    public function alterarDados($usuarioId, $login = null, $senha = null)
    {
        // TODO: implementar função de alterar dados
    }

    public function ehAdministrador($usuarioId)
    {
        // TODO: implementar função de verificar se é administrador
    }

    public function ehModerador($usuarioId)
    {
        // TODO: implementar função de verificar se é moderador
    }

    public function adicionarALista($usuarioId, $listaId)
    {
        // TODO: implementar função de adicionar a lista
    }

    public function removerDaLista($usuarioId, $listaId)
    {
        // TODO: implementar função de remover da lista
    }

    public function adicionarNota($usuarioId, $conteudo)
    {
        // TODO: implementar função de adicionar nota
    }

    public function editarNota($notaId, $usuarioId, $conteudo)
    {
        // TODO: implementar função de editar nota
    }

    public function removerNota($notaId)
    {
        // TODO: implementar função de remover nota
    }
}
