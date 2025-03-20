<?php
use PHPUnit\Framework\TestCase;

class EditarTarefaTest extends TestCase
{
    // Mock para simular a consulta ao banco de dados
    public function testConsultaTarefa()
    {
        // Dados simulados que seriam retornados pela consulta ao banco de dados
        $tarefaMock = [
            'id_task' => 1,
            'title_task' => 'Tarefa de Teste',
            'description_task' => 'Descrição da tarefa de teste',
            'date_task' => '2025-03-20',
            'time_task' => '12:00'
        ];

        // Simulando o retorno do mysqli_query
        $conexaoMock = $this->createMock(mysqli::class);
        $query = "SELECT * FROM task WHERE id_task = '1'";

        $resultadoMock = $this->createMock(mysqli_result::class);
        $resultadoMock->method('fetch_array')->willReturn($tarefaMock);

        // O mock do mysqli_query deve retornar o resultadoMock
        $conexaoMock->method('query')->willReturn($resultadoMock);

        // Simulação de inclusão do código PHP para pegar os dados
        include('./php/db/conexao.php');  // Garantir que o arquivo de conexão seja incluído
        include('./php/db/verificar_login.php');  // Garantir que o arquivo de login seja incluído

        // Capturar a saída do HTML para verificar se os valores estão sendo exibidos corretamente
        ob_start();
        include('./editar_tarefa.php');  // O arquivo que contém o formulário
        $output = ob_get_clean();

        // Verificar se o HTML gerado contém os valores esperados
        $this->assertStringContainsString('Tarefa de Teste', $output);
        $this->assertStringContainsString('Descrição da tarefa de teste', $output);
        $this->assertStringContainsString('2025-03-20', $output);
        $this->assertStringContainsString('12:00', $output);
    }
}
