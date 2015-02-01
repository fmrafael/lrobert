<?php
$EmailFrom = "noreply.mendl@gmail.com"; // From email address
$EmailTo = "noreply.mendl@gmail.com"; // Email address you want submitted forms to go to
$Subject = "NOVO CLIENTE"; // subject line for emails
$Name = Trim(stripslashes($_POST['name']));
$Email = Trim(stripslashes($_POST['email']));
$Product = Trim(stripslashes($_POST['product']));
$Message = Trim(stripslashes($_POST['message']));
 
 
// prepare email body text																																
$Body .= "NOME: " . $Name .  "
";
$Body .= "EMAIL: " . $Email . "
";
$Body .= "PRODUTO: " . $Product . "
";
$Body .= "MENSAGEM: " . $Message . "
";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
 
// redirect to success page
if ($success){
	header('Location: http://mendl.com.br/contato');
  exit;
  // You can edit this to your own success message
}	
else{
  echo "Ops, algo deu errado. Por favor, envie email para suporte@mendl.com.br e nos ajude com isso. Obrigado."; // You can edit this to your own error message
}
?>
