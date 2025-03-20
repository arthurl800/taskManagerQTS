<?php

use PHPUnit\Framework\TestCase;

class VerificarLoginTest extends TestCase
{
    public function testRedirecionarSeNaoEstiverLogado()
    {
        // Simula o cenário onde o usuário não está logado.
        $_SESSION['usuario_logado'] = null;

        // Captura o output gerado por "verificar_login.php"
        ob_start();
        include('./php/db/verificar_login.php');
        $output = ob_get_clean();

        // Verifica se há um redirecionamento para a página index
        $this->assertStringContainsString('Location: index.php', $output);
    }

    public function testNaoRedirecionarSeEstiverLogado()
    {
        // Simula o cenário onde o usuário está logado
        $_SESSION['usuario_logado'] = true;

        // Captura o output gerado por "verificar_login.php"
        ob_start();
        include('./php/db/verificar_login.php');
        $output = ob_get_clean();

        // Verifica se o redirecionamento não ocorreu (ou seja, nenhuma string com "Location: index.php" deve estar presente)
        $this->assertStringNotContainsString('Location: index.php', $output);
    }
}

