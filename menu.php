      <!DOCTYPE html>
<html lang="pt-br">
    <head>
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="#">
        <title>Xmd Tecnologia - Sistemas para Internet</title>
<style>
	*{
		padding: 0;
		margin: 0;
	}
	/*CABEÇALHO */
	.topo{
		background: #fff;
		width: 100%;
		min-height: 10%;
		border-bottom: solid 0.1em #ff6600;
		box-shadow: 0 0 0.1em #333333;
		position: fixed;
		top: 0;
		z-index: 10;
	}
	.topo img{
		width: 10em;
		float: left;
		margin-left: 27%;
	}
	.menu {
		float: left;
	}
	.menu ul {
		text-align: center;
	}
	.menu ul li{
		display: inline-block;
		margin: 1em;
	}
	.menu ul li a {
		font: 1.3em Trebuchet MS;
		color: #ff6600;
		text-decoration: none;
	}
	.menu ul li a:hover{
		color: #333333;
	}
	.slider{
		width: 100%;
		position: relative;
		top:4em;
		z-index: 0;  
	}
	/*CORPO*/
	.home {
		margin: 70px 40px 20px 20px;
		padding: 0px 0px;
		font: 16px Trebuchet MS;
		width: 100%;
		height: 200px;
		}
	.bloco1 a {
		text-decoration: none;
		color: #f60;
		}
	.bloco1 a:hover {
		 color: #333;
		}
	.bloco2 a{
		text-decoration: none;
		color: #f60;
		}
	.bloco2 a:hover {
		 color: #333;
		}
	.bloco3 a {
		text-decoration: none;
		color: #f60;
		}
	.bloco3 a:hover {
		color: #333;
		}
	.bloco1, .bloco2, .bloco3 {
		width: 27%;
		height: 60%;
		float:left;
		margin: 30px 20px 30px 35px;
		padding:10px 5px;
		background: #CCC;
		box-shadow: 0.1em 0.1em 0.1em #333;
		}
	/*PÁGINA QUEM SOMOS*/
	.quemsomos{  
		margin: 90px 35px 20px 35px;
		max-width: 95%;
		min-width: 250px; 
		background: #CCC; 
		box-shadow: 0.1em 0.1em 0.1em #333333;		
		font: 16px Trebuchet MS;
		} 

	.quemsomos h1 {
		text-align: center;
		padding: 15px 0px 40px 0px;

	}	
	 .quemsomos p {	
		text-align: center;
		padding: 0px 55px 0px 55px;
    }
	/*	PORTFOLIO*/
	 .pagportifolio{
		margin: 90px 35px 20px 15px;
		min-height: 450px;
		width: 94.8%;
		min-width: 250px; 
		height: 500px;
		padding: 15px;
		
		text-align: center;
		font: 16px Trebuchet MS;
		background: #CCC; 
		box-shadow: 0.1em 0.1em 0.1em #333333;	
	} 

	.pagclientes{
		margin: 90px 35px 20px 15px;
		min-height: 450px;
		width: 94.8%;
		min-width: 250px; 
		height: 500px;
		padding: 15px;
		
		text-align: center;
		font: 16px Trebuchet MS;
		background: #CCC; 
		box-shadow: 0.1em 0.1em 0.1em #333333;	
	}
	/*CONTATO */ 
	 .pagcontato{
		margin: 90px 35px 20px 35px;
		min-height: 450px;
		width: 94.8%;
		min-width: 250px; 
		height: 500px;
		padding: 0px 0px;
		
		font: 1.2em Trebuchet MS;
		background: #CCC; 
		box-shadow: 0.1em 0.1em 0.1em #333333;
	}
	.pagcontato .contatoE{
		float: left;
		width: 30%;
		margin-left: 1em;
		padding: 1em;
	}
	.pagcontato .contatoD{
		float: right;
		width: 60%;
		margin-right: 1em;
		padding: 1em;
	}
	.pagcontato .contatoD label, .input, textarea {
		display: block;	
	}
	.pagcontato .input{
		width: 97%;	
		font: 1.1em Trebuchet MS;	
		margin-bottom: 0.5em;
	}
	.pagcontato textarea{
		width: 97%;	
		font: 1.1em Trebuchet MS;	
		margin-bottom: 0.5em;
		height: 5em;
	}
	
	.pagcontato p {
		margin: 0.7em auto;
	}
	/*RODAPE*/
	.rodape{
		position: relative;
		bottom: 0px;
		width: 100%;
		height: 10%;
		border-top: solid 0.1em #ff6600;
		box-shadow: 0 0 0.1em #333333;
	}
	.rodape p {
		text-align: center;
		padding: 1em;
		font: 20px Trebuchet MS;
		color: #333;
	}
	.rodape p a {
		text-decoration: none;
		color: #f60;
	}
	.rodape p a:hover {
		  color: #333;
	}
	.btn {
		width: 5em;
		height: 2em;
		font: 1.2em Trebuchet MS;
		background: #f60;
		border: solid 0.2em #ffffff;
		color: #ffffff;
	}
	.btn:hover{
		background: #333333;
	}
</style>
    </head>
    <body>
        <div class="topo">
            <img src="img/logo.png" alt="Xmd logo"/>           
				<div class="menu">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="quemsomos.php">Quem Somos</a></li>
						<li><a href="portifolio.php">Portifólio</a></li>
						<li><a href="clientes.php">Clientes</a></li>
						<li><a href="contato.php">Contato</a></li>
					</ul>
				</div>
			</div>
        </div>
