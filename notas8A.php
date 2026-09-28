<!DOCTYPE html> 
<html lang="pt-br">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Notas 8º Ano A</title>
    </head>
    <body>
        <?php
            //Array bidimensional com nome  e notas dos 4 bimestres.
            $alunos = array(
                array("Dayane", 3.0, 5.0, 4.0, 6.5),
                array("Matheus", 9.0, 8.5, 7.5, 8.0),
                array("Vitor", 2.0, 3.5, 4.0, 5.0),
                array("Ana", 5.0, 8.0, 9.5, 8.5),
                array("Lucas", 2.0, 7.5, 6.5, 5.0),
                array("Mikaelly", 9.5, 8.0, 10.0, 8.5),
            );
        ?>
        <h1>Notas 8º Ano A</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>1º Bimestre</th>
                <th>2º Bimestre</th>
                <th>3º Bimestre</th>
                <th>4º Bimestre</th>
                <th>Média</th>
                
            </tr>
            <?php

            $somaMedia = 0;

                //Percorre o array de alunos e exibe as notas na tabela.
                foreach ($alunos as $aluno) {
                    $nome = $aluno[0];
                    $nota1 = $aluno[1];
                    $nota2 = $aluno[2];
                    $nota3 = $aluno[3];
                    $nota4 = $aluno[4];

                    //Calcula a média do aluno.
                    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
                    $somaMedia += $media;

                    if ($media > 6) {
                        $classe = "aprovado";
                    } else {
                        $classe = "reprovado";
                    }

                    echo "<tr class='$classe'>";

                    echo "<td>$nome</td>";
                    echo "<td>$nota1</td>";
                    echo "<td>$nota2</td>";
                    echo "<td>$nota3</td>";
                    echo "<td>$nota4</td>";

                    echo "<td class='media'>" . number_format($media, 1, ',', '.') . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <?php
            //Calcula a média geral da turma.
            $mediaGeral = $somaMedia / count($alunos);
        ?>

        <div class="media-geral">
            Média Geral da Turma: 
            <?php echo number_format($mediaGeral, 1, ',', '.'); ?>
        </div>

    </body>
</html>



