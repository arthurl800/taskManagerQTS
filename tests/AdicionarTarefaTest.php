<?php

use PHPUnit\Framework\TestCase;

class AdicionarTarefaTest extends TestCase
{
    public function testVerificarLoginRedirecionaSeNaoLogado()
    {
        // Limpa quaisquer funções declaradas anteriormente
        if (function_exists('Mocks\verificar_login')) {
            runkit_function_remove('Mocks\verificar_login');
        }

        include_once __DIR__ . '/mocks/verificar_login_mock_nao_logado.php';

        ob_start();
        include __DIR__ . '/../adicionar_tarefa.php';
        $output = ob_get_clean();

        $this->assertStringContainsString('Location: ./index.php', xdebug_get_headers());
    }

    public function testVerificarLoginNaoRedirecionaSeLogado()
    {
        // Limpa quaisquer funções declaradas anteriormente
        if (function_exists('Mocks\verificar_login')) {
            runkit_function_remove('Mocks\verificar_login');
        }

        include_once __DIR__ . '/mocks/verificar_login_mock_logado.php';

        ob_start();
        include __DIR__ . '/../adicionar_tarefa.php';
        $output = ob_get_clean();

        $this->assertStringNotContainsString('Location: ./index.php', xdebug_get_headers());
        $this->assertStringContainsString('<title>Task Manager - Adicionar Tarefas</title>', $output);
    }
}