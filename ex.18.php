<?php
echo '<pre>';

function ordenarPorHorario($consultas) {
    usort($consultas, fn($a, $b) => strcmp($a['horario'], $b['horario']));
    return $consultas;
}

function pesquisarPaciente($consultas, $nome) {
    $encontrados = [];
    foreach ($consultas as $consulta) {
        if (strtolower($consulta['paciente']) == strtolower($nome)) {
            $encontrados[] = $consulta;
        }
    }
    return $encontrados;
}

function contarPorEspecialidade($consultas) {
    $contagem = [];
    foreach ($consultas as $consulta) {
        $esp = $consulta['especialidade'];
        $contagem[$esp] = ($contagem[$esp] ?? 0) + 1;
    }
    return $contagem;
}

function contarPacientesDiferentes($consultas) {
    return count(array_unique(array_column($consultas, 'paciente')));
}

function verificarHorariosDuplicados($consultas) {
    $horarios = array_column($consultas, 'horario');
    return count($horarios) !== count(array_unique($horarios));
}

function organizarAgenda($consultas) {
    $ordenadas = ordenarPorHorario($consultas);

    return [
        'total_consultas'              => count($consultas),
        'pacientes_diferentes'         => contarPacientesDiferentes($consultas),
        'consultas_por_especialidade'  => contarPorEspecialidade($consultas),
        'primeiro_atendimento'         => $ordenadas[0],
        'ultimo_atendimento'           => end($ordenadas),
        'lista_ordenada'               => $ordenadas,
        'horarios_duplicados'          => verificarHorariosDuplicados($consultas),
    ];
}

$consultas = [
    ['paciente' => 'Ana',   'especialidade' => 'Cardiologia',  'data' => '2026-09-22', 'horario' => '14:00'],
    ['paciente' => 'Bruno', 'especialidade' => 'Dermatologia', 'data' => '2026-09-22', 'horario' => '09:00'],
    ['paciente' => 'Ana',   'especialidade' => 'Cardiologia',  'data' => '2026-09-22', 'horario' => '10:30'],
];

print_r(organizarAgenda($consultas));
print_r(pesquisarPaciente($consultas, 'Ana'));
echo '</pre>';
