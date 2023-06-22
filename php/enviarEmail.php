<div class="aguarde">
    <img src="<?php echo URL?>img/loading.gif" />
</div>


<?php

$nome =$_POST['nome'];
$telefone =$_POST['telefone'];
$email =$_POST['email'];
$msg =$_POST['msg'];
$dataEnvio = date('d/m/y');
$horaEnvio = date('h:i:s');
$assunto = $_POST['assunto'];

$menssagem = "
    Nome: $nome
    E-mail: $email
    Telefone: $telefone
    Menssagem: $msg
    Este e-mail foi enviado em $dataEnvio às $horaEnvio.
";

$destino="contato@infocimol.com.br";


$headers ="MIME-Version: 1.0\n";
$headers .="Content-type: text/html; charset=iso-8859-1\n";
$headers .="From: $nome <$email>";

mail($destino,$assunto,$menssagem,$headers);

echo "<meta http-equiv='refresh' content='10; URL=".URL."contato'>";

?>