<!DOCTYPE HTML>
<html>

<head>
  <title>Igreja Presbiteriana do Jabaquara</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="../style/style.css" title="style" />
  
  <script language=javascript>
   function validar() {
      var valido = false; 
  
      with(document.form_contato) {
             if (nome.value.length == 0){
                  valido = false;
                  nome.focus();
                  alert ('Campo nome obrigatório.');
     
              }else if(assunto.value.length == 0) {
                  valido = false;
                  assunto.focus();
                  alert ('Campo assunto obrigatório.');
    
              }else if(mensagem.value.length == 0) {
                 valido = false;
                 mensagem.focus();
                 alert ('Campo mensagem obrigatório.');
    
             }else {
                valido = true;
                submit();
             }
        return valido;
       } 
  }
</script>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
        <center>
          <h1><a href="../index.php">&nbsp;&nbsp;&nbsp;Igreja Presbiteriana do Jabaquara</a></h1>
          <h2>A serviço do Reino de Deus</h2></center>
        </div>
        
      <img src="../images/logo.jpg" width="142" height="143"></div>
            <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
		  <li><a href="../index.php">Home</a></li>
          <li><a href="../Conselho/index.php">Conselho</a></li>
          <li><a href="../Diaconia/index.php">Junta Diaconal</a></li>
          <li><a href="../Sociedades/index.php">Sociedades Internas</a></li>          
           <li><a href="../Contato/index.php">Contato</a></li>
        </ul>
      </div>
    </div>
    </div>
    <div id="site_content">
    
      <div id="content">
        <!-- insert the page content here -->
        <font size="4"><b>Contate-nos</b></font><br><br>

<form action="form.php" method="post" name="form_contato" id="form_contato" onsubmit="return validar()">
<table>
<tr><td>Nome</td><td><input name="nome" type="text" size="50" maxlength="50"></td></tr>
<tr><td>E-mail</td><td><input name="email" type="text" size="50" maxlength="50"></td></tr>
<tr><td>Para</td><td><label for="area"></label>
    <select name="area" id="area">
      <option value="boletim@ipjabaquara.com.br">Boletim</option>
      <option value="conselho@ipjabaquara.com.br">Conselho</option>
      <option value="junta.diaconal@ipjabaquara.com.br">Junta Diaconal</option>
      <option value="musica@ipjabaquara.com.br">Musica</option>
      <option value="pastor@ipjabaquara.com.br">Pastor</option>
      <option value="saf@ipjabaquara.com.br">SAF</option>
      <option selected="true" value="secretaria@ipjabaquara.com.br">Secretaria</option>
      <option value="ump@ipjabaquara.com.br">UMP</option>
      <option value="upa@ipjabaquara.com.br">UPA</option>
      <option value="uph@ipjabaquara.com.br">UPH</option>
      <option value="webmaster@ipjabaquara.com.br">Webmaster</option>
    </select></td></tr>
<tr><td>Assunto</td><td><input type="text" name="assunto" id="assunto" size="50" maxlength="50""></td></tr>
<tr><td>Mensagem</td><td><textarea name="mensagem" cols="60" rows="10"></textarea></td></tr>
<tr><td></td><td><input name="enviar" type="submit" value="Enviar"> &nbsp; &nbsp;
				 <input name="Redefinir" type="reset" value="Apagar Formulário"></td></tr>
</table>
</form>
        
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; Igreja Presbiteriana do Jabaquara</div>
  </div>
</body>
</html>

