<?php 
include 'menu.php';
?>
<div class="">
	<div class="pagcontato">
		<div class="contatoE">
			<h1>Contato</h1>
	'		<p>Telefone: 64.9202-2823</p>
			<p>Whatsapp: 64.9202-7973</p>
			<p>Email: contato@xmd.com.br</p>
			<p>Endereço: Chacara Aliança, Sape de Baixo - </br>Caldas Novas - GO</p>
		</div>
		<div class="contatoD">
		
		<?php
			if(isset($_POST['nome']) && !empty($_POST['nome'])){
				if(isset($_POST['telefone']) && !empty($_POST['telefone'])){
					if(isset($_POST['email']) && !empty($_POST['email'])){
						if(isset($_POST['assunto']) && !empty($_POST['assunto'])){
							if(isset($_POST['descricao']) && !empty($_POST['descricao'])){
									$to = 'joelcio_psx@hotmail.com';
									$Nome = 	$_POST['nome'];
									$Telefone = $_POST['telefone'];
									$Email = $_POST['email'];
									$Assunto = $_POST['assunto'];
									$Descricao = $_POST['descricao'];
									$message ="Nome: $Nome | Telefone: $Telefone | Email: $Email | Mensagem: $Descricao";
									mail($to, $Assunto, $message);
									echo "<p style='color:blue'>Todos os campos estão ok.</p>";
							}else{
								echo "Explique o assunto.";
							}
						}else{
							echo "Preencha o assunto.";
						}
					}else{
						echo "Preencha o Email.";
					}	
				}else{
					echo "Preencha o telefone.";
				}
			}else{
				echo "";
			}
		?>
		<form action="#" method="POST">
		<label>
			<span>Nome:</span>
			<input class="input" type="text" name="nome" placeholder="Digite seu nome" required />
		</label>
		<label>
			<span>Telefone:</span>
			<input class="input" type="tel" name="telefone" placeholder="Informe um telefone"  required />
		</label>
		<label>
			<span>Email:</span>
			<input class="input" type="email" name="email" placeholder="Insira o seu email"  required />
		</label>
		<label>
			<span>Assunto:</span>
			<input class="input" type="text" name="assunto" placeholder="Informe o assunto" required />
		</label>
		<label>
			<span>Explique o Assunto:</span>
			<textarea name="descricao" required  >
			</textarea>
		</label>
		<label>
			<input class="btn "type="submit" name="enviar" value="Enviar"/>
		</label>
		</form>
		</div>
		<div style="clear: both;"></div>
	</div>
</div>

<?php
include 'rodape.php';
?>
