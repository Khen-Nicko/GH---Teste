<?php
	if (isset($_POST['Enviar'])):
		$nome =      $_POST['nome'];
		$telefone =  $_POST['telefone'];
		$email =     $_POST['email'];
	if (mail('jteste1111@gmail.com', $nome, $telefone, 'From: ' .$email)):
		$aviso = 'Email enviado';
	else:
		$aviso = 'Erro ao enviar';
	endif;	
endif;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<title> GH - BRANDING </title>
	<link rel="stylesheet" href="css/estilo.css" />
	<script type="text/javascript">
		function validar_contato(){
			var nome = contatosGH.nome.nome;
			var telefone = contatosGH.nome.telefone;
			var email = contatosGH.nome.email;

			if (nome == "") {
				alert("Campo nome é obrigatorio");
				contatosGH.nome.focus();
				return false;
			if (telefone == "") {
				alert("Campo nome é obrigatorio");
				contatosGH.telefone.focus();
				return false;
			if (email == "") {
				alert("Campo nome é obrigatorio");
				contatosGH.email.focus();
				return false;
			}
		}
	</script>
</head>
<body>
	<div class="colprincipal"> 
		<div>
			<header>
				<table border="0" width="900">
					<tr class="menu">
						<td><img src="img/logoGH.png"></td>
						<td class="menu1" align="right">
						<a href="Trabalho">Work</a>
						<a href="Serviços">Services</a>
						<a href="Sobre">About</a>
						<a href="Contato">Contact</a>
						</td>
						<td id="linguagens" align="right">
						<a id="lbrasil" href="Brasil">BRA</a>
						<a id="barra">/</a>
						<a id="lunidos" href="Estadosunidos">EUA</a>
						</td>
						<td id="opcoes"><a href="opcoes"><img src="img/opcoes.png"></a></td>
					</tr>

				</table>
				<div class="caixa">
					<img src="img/fotomenu.png">
					<div>
						<?php if(isset($aviso)) echo $aviso; ?>
						<form name="contatosGH" method="POST" action="salvando.php">
							<h2>Entre em contato!</h2>
							<label for="nome" id="dentro">Nome</label>
							<input type="text" name="nome">
							<label for="telefone">Telefone</label>
							<input type="string" name="telefone">
							<label for="email">E-mail</label>
							<input type="text" name="email">
							<input id="botaoEnviar1" type="submit" name="Enviar" onclick="return validar_contato">
						</form>
					</div>
				</div>
			</header>
		</div>
		<div>
		<section>
			<h1>Desenvolvimento <br> de Produtos Digitais</h1>
			<p id="principal">Brands are built based on the DNA of the companies, while respecting.</p>
				<div class="principal1">	
				<p><strong>Brands are built based on the DNA of the companies, while respecting its values and principles. They are built of strategic positioning and through the true identification with people both inside and outside the enterprise. <br>
					Our role is to find the purpose of your brand in this world and thus walk a relevant and consistent way by qualified execution of branding across all touch points of your brand and so occupy a place only your on the market, and especially in the people’s hearts.</strong>
				</p>
		</section>
		</div>
			<div>
				<div class="principal2">
					<h2> Como nós ajudamos</h2>
					<table class="meiodapagina" cellspacing="40" cellpadding="40">
						<tr>
							<td id="noticia1">
							<a href="noticia1">
							<h3>Lorem ipsum dolor sit amet, consectetur  eli</h3>
							<p>Lorem ipsum dolor sit ame tur luctt, consectetur adipiscing elit. Curabitur luctus lorem eget ante dignissim venenatis.</p>
							</a>
							</td>
							<td id="noticia2">
							<a href="noticia2">
							<h3>Lorem ipsum dolor sit amet, consectetur  eli</h3>
							<p>Lorem ipsum dolor sit ame tur luctt, consectetur adipiscing elit. Curabitur luctus lorem eget ante dignissim venenatis.</p>
							</a>
							</td>
							<td id="noticia3">
							<a href="noticia3">
							<h3>Lorem ipsum dolor sit amet, consectetur  eli</h3>
							<p>Lorem ipsum dolor sit ame tur luctt, consectetur adipiscing elit. Curabitur luctus lorem eget ante dignissim venenatis.</p>
							</a>
							</td>
						</tr>
						<tr>
							<td id="noticia4">
							<a href="noticia4">
							<h3>Lorem ipsum dolor sit amet, consectetur  eli</h3>
							<p>Lorem ipsum dolor sit ame tur luctt, consectetur adipiscing elit. Curabitur luctus lorem eget ante dignissim venenatis.</p>
							</a>
							</td>
							<td id="noticia5">
							<a href="noticia5">
							<h3>Lorem ipsum dolor sit amet, consectetur  eli</h3>
							<p>Lorem ipsum dolor sit ame tur luctt, consectetur adipiscing elit. Curabitur luctus lorem eget ante dignissim venenatis.</p>
							</a>
							</td>
							<td id="noticia6">
							<a href="noticia6">
							<h3>Lorem ipsum dolor sit amet, consectetur  eli</h3>
							<p>Lorem ipsum dolor sit ame tur luctt, consectetur adipiscing elit. Curabitur luctus lorem eget ante dignissim venenatis.</p>
							</a>
							</td>
						</tr>
					</table>
					<div>
						<label for="Contato"></label>
						<input class="EContato" type="submit" value="Entre em Contato">
					</div>
					<h2 id="Casos"><a href="Casos">Cases</a></h2>
					<table class="Casos1">
						<tr>
							<td class="c1">
							<a href="">
							<img id="foto3" src="img/captura3.png">
							<h3 >Godoc</h3>
							<p>Godoc is an app for scheduling <br>of medical appointments.</p>
							</td>
							<td class="c2">
							<a href="">
							<img id="foto2" src="img/captura2.png">
							<h3>Gerencial</h3>
							<p>Gerencial is an office of auditing,<br> accounting and consulting.</p>
							</td>
							<td class="c3">
							<a href="">
							<img id="foto1" src="img/captura1.png">
							<h3 id="fontediferenciada">Vetherapy</h3>
							<p>Vetherapy is a San Francisco startup.<br>Focused on therapies from stem cells.</p>
							</td>
						</tr>
					</table>
					<h2 id="TProjetos"><a href="Projetos">All projects</a></h2>
				</div>
			</div>
		<div class="conteudo-extra">
			<div class="extras">
				<ul><b><li>design / </li>
					<li>tech / </li>
					<li>content / </li>
					<li>strategy</li></b>
				</ul>	
			</div>			
			<div class="footer">
				<div>
					<footer>
						<div>
							<span>
								<ul>
									<li>Santa Rosa. BR</li>
									<li>Porto Alegre. Br</li>
									<li>San Francisco. EUA</li>
								</ul>
							</span>
						</div>
					</footer>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>