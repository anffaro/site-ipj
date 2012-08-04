 <?php
$date = date("d/m/Y h:i");

// RECEBE OS VALORES VINDO DO FORMULÁRIO E ATRIBUI AS VARIÁVEIS
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$destino = $_POST['area'];

//$email_para_onde_vai_a_mensagem = $destino;
$exibir_apos_enviar='enviado.php';

//MAIS - CONFIGURAÇOES DA MENSAGEM ORIGINAL
$cabecalho_da_mensagem_original="De: $name <$email>\n";
$assunto_da_mensagem_original= "Contato Site - $assunto";
 
// FORMA COMO RECEBERÁ O E-MAIL (FORMULÁRIO)
// ******** OBS: SE FOR ADICIONAR NOVOS CAMPOS, ADICIONE OS CAMPOS NA VARIÁVEL ABAIXO *************
$configuracao_da_mensagem_original="
Nome: $nome\n
Assunto: $assunto\n
Mensagem: $mensagem\n
Data do Envio: $date
";


//ENVIO DA MENSAGEM ORIGINAL
$headers = "$cabecalho_da_mensagem_original";
$assunto = "$assunto_da_mensagem_original";
$mensagem = "$configuracao_da_mensagem_original";
mail($email,$assunto,$mensagem,$headers);

echo "<script>window.location='$exibir_apos_enviar'</script>";

?>