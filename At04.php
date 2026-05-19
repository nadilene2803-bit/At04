<?php
for ($i =1; $i<= 5; $i++){
    print" Usuario $i: <input type= 'text' name= 'usuario$i' > <br>";
}

$Acessórios = ['Mouse', 'Teclado', 'Tela' , 'Memoria' , 'Cabo' , 'Rede' , 'HD' , 'Tomada'];
foreach ($Acessórios as $i){
    print "Acessórios: $i <br>";
}

$Alunos = [
    'Ayka' => 10,
    'Paula' => 8,
    'Paulo' => 2,
    'Ayron' => 10,
    'Leon' => 10,
    'Adjardo' => 9,
    'Aryelly' => 10,
];
foreach ($Alunos as $nome => $notas) {
print "Alunos: $nome, Nota: $notas <br>";
    }






?>
