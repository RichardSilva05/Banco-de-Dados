<?php

include 'conexao.php';
?>

<h2 class="text-center" >Usuarios</h2>
<!--Link HTML que leva o usuario
para o formulario de cadastro(form.php)-->
<a href="form.php">NOVO</a><br><br>
<hr>
<?php

$res = mysqli_query($conn, "SELECT * FROM usuarios");

while ($r = mysqli_fetch_assoc($res)){
    echo 
    $r  ['nome'] . " | " .
    $r['email'] ." | " .  
    $r['telefone'] . " | " . 
    $r['idade'] . " | " . 
    $r['cidade'] . " | " . 
    $r['curso'] . "<br>";
}

?>




