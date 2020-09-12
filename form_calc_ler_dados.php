<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="cssdir/css.css">
	<!--------->
	<title>Calculadora</title>
</head>
<body>
	<center>
	
		<p class="titulo">Calculadora Histórica</p>
		</center>
		<br><br>
		<div id="div4">
			<center>
				<p style="background-image: url('cssdir/imagens/imagempergaminho2.jpg');" class="c5 c6"><br>Resultado:
				<br>
				<span class="c6" style="padding-right: 30%">
				<?php

				//variáveis

				if(isset($_POST['visor'])){
					$n1 = $_POST['visor'];
				} else {
					$n1 = null;
				}

				if(isset($_POST['visor1'])){
					$op = $_POST['visor1'];
				} else {
					$op = null;
				}
				
				if(isset($_POST['visor2'])){
					$n2 = $_POST['visor2'];
				} else {
					$n2 = null;
				}
				$res = null;

				//Cálculo
				if($n1 != null || $n2 != null || $op != null) {
				switch ($op){
					case "+":
						$res = (float) ($n1) + ($n2);
						if($res >= 0){
							echo "<span class='c6' style='padding-left:3%'>" . $res . " d.C</span><br>";
						}else {
							echo "<span class='c6' style='padding-left:3%'>" . $res . " a.C</span><br>";
						}
					break;

					case "-":
						$res = (float) ($n1) - ($n2);
						if($res >= 0){
							echo "<span class='c6' style='padding-left:3%'>" . $res . " d.C</span><br>";
						}else {
							echo "<span class='c6' style='padding-left:3%'>" . $res . " a.C</span><br>";
						}
					break;

					case "x":
						$res = (float) ($n1) * ($n2);
						if($res >= 0){
							echo "<span class='c6' style='padding-left:3%'>" . $res . " d.C</span><br>";
						}else {
							echo "<span class='c6' style='padding-left:3%'>" . $res . " a.C</span><br>";
						}
					break;

					case "÷":
						if($n2 != 0){
							$res = (float) ($n1) / ($n2);
							if($res >= 0){
								echo "<span class='c6' style='padding-left:3%'>" . $res . " d.C</span><br>";
							}else {
								echo "<span class='c6' style='padding-left:3%'>" . $res . " a.C</span><br>";
							}
						}else{
							echo "<span class='c6' style='padding-left:3%'>Impossível calcular!</span><br>" ;
						}
					break;

					case "EXP":
						$res = (float) pow($n1,$n2);
						if($res >= 0){
							echo "<span class='c6' style='padding-left:3%'>" . $res . " d.C</span><br>";
						}else {
							echo "<span class='c6' style='padding-left:3%'>" . $res . " a.C</span><br>";
						}
					break;

					}

				} else {
					echo "<span class='c6' style='padding-left:3%'>Não foi selecionado os operandos ou o operador</span><br>";
				}

				if(isset($_POST['select'])){
					$select = $_POST['select'];
					if ($select == "Brasil"){
						echo "<span class='c6' style='padding-left:3%'>Você selecionou o " . $select . "<br></span><br>";
					} else if ($select === "Europa") {
						echo "<span class='c6' style='padding-left:3%'>Você selecionou a " . $select . "<br></span><br>";
					} else{
						echo "<span class='c6' style='padding-left:3%'>Você não selecionou nenhum item <br> </span><br>";
					}
				}else {

					echo "<span class='c6' style='padding-left:3%'>Você não selecionou nenhum item <br> </span><br>";
				}
					
				if($select == 'Brasil' && $res < 1500){
					echo "<span class='c6 style='padding-left:60%'>Brasil pré-cabralina (desconhecido - 1500):<br> 
					- Pleistoceno; <br>
					- Luzia; <br>
					- Holoceno; <br>
					- Antes do presente (A.P); <br>
					- Período arcaio (4000 A.P - 1500 d.C); <br>
					- Período pré-cerâmico, Amazônia (12000 - 3000 A.P); <br>
					- Período cerâmico incipiente (3000 - 1000 a.C);<br>
					- Cacicados complexos da Amazônia (1000 a.C - 1500 d.C);<br>
					- Kuhikugu (1500 - 400 A.P); <br>
					- Monte de Teso dos Bichos (400 d.C - 1300 d.C); <br>
					</span><br>";
					

				}

				if($select == 'Brasil' && $res >= 1500 && $res < 1530){
					echo "<span class='c6  style='padding-left:60%'>Brasil pré-colonial (1492 - 1547): <br> 
					- Pedro Álvares Cabral;<br>
					- Bartolomeu Dias; <br>
					- Pau-brasil; <br>
					- Escambo. <br>	
					</span><br>";
				}

				if($select == 'Brasil' && $res >= 1548 && $res < 1808){
					echo "<span class='c6 style='padding-left:60%'>Brasil colonial (1548 - 1808): <br> 
					- Cana-de-açúcar; <br>
					- Engenhos; <br>
					- Escravos; <br>
					- Capitanias hereditárias; <br>
					- Governo Geral; <br>
					- Unificação Ibérica (1580-1640); <br>
					- Invasões francesas:<br>
					- França Antártica;<br>
					- França Equinocial;<br>
					- Invasões holandesas:<br>
					- Pernambuco e Maurício de Nassau;
					- Ouro e diamantes (século XVII-XVIII);
					- Revoltas: Beckman, Emboabas, Mascates; <br>
					- Incofidência Mineira (1789); <br>
					- Conjuração Baiana (1798). <br>
							
					</span><br>";
				}

				if($select == 'Brasil' && $res >= 1808 && $res < 1891){
					echo "<span class='c6 style='padding-left:60%'>Brasil Império (1808 - 1890): <br> 
					- Família Real; <br>
					- Império; <br>
					- Teatros; <br>
					- Bancos; <br>
					- Invasão da Guiana Francesa; <br>
					- Jardim Botânico; <br>
					- Primeiro jornal: Gazeta do Rio de Janeiro; <br>
					- Tratados com a Inglaterra. <br>
					- Independência do Brasil (1822); <br>
					- Dom Pedro I; <br>
					- Revoltas; <br>
					- Período Regencial (1830); <br>
					- Revoltas e Revoluções; <br>
					- Golpe da Maioridade; <br>
					- Dom Pedro II; (1840);
					- Café; <br>
					- Escravos; <br>
					- Italianos; <br>
					- Guerra do Paraguai (1864-1870); <br>
					- Abolição da escravatura (1889). <br>
					</span><br>";
				}

				if($select == 'Brasil' && $res >= 1891 && $res <= 2020){
					echo "<span class='c6 style='padding-left:60%'>Brasil República (1891 - hoje): <br> 
					- República Velha; <br>
					- Marechal Deodoro da Fonseca; <br>
					- Floriano Peixoto; <br>
					- Prudente de Moraes; <br>
					- Política dos Governadores; <br>
					- Política Café-com-Leite; <br>
					- Rodrigues Alves: <br>
					- Revolta da Vacina; <br>
					- I Guerra Mundial; <br>
					- Tenentismo; <br>
					- Luiz Carlos Prestes; <br>
					- Washington Luís; <br>
					- Era Vargas (1930 - 1945); <br>
					- II Guerra Mundial; <br>
					- Quarta República; <br>
					- JK; <br>
					- Brasília; <br>
					- Jânio Quadros; <br>
					- João Goulart; <br>
					- Ditadura; <br>
					- Tancredo Neves; <br>
					- José Sarney; <br>
					- Hiperinflação; <br>
					- Collor; <br>
					- Caras Pintadas; <br>
					- Itamar; <br>
					- Plano Real; <br>
					- FHC; <br>
					- Lula; <br>
					- Dilma; <br>
					- Bolsonaro. <br>
					</span><br>";
				}
				if($select == 'Brasil' && $res > 2020){
					echo "<span class='c6 style='padding-left:60%'>Um futuro melhor?<br></span><br>";
				}

				if($select == 'Europa' && $res < 476){
					echo "<span class='c6 style='padding-left:60%'>Europa:(desconhecido - 476 d.C)<br>
					-Grécia;<br>
					-Persas;<br>
					-Roma;<br>
					-Jesus Cristo.<br>
					</span><br>";
				}

				if($select == 'Europa' && $res >= 476 && $res < 1548){
					echo "<span class='c6  style='padding-left:60%'>Idade Média(476 - 1453): <br>
					-Guerra;<br>
					-Fome;<br>
					-Universidades;<br>
					-Igreja;<br>
					-Senhores;<br>
					-Servos.<br>
					</span><br>";
				}

				if($select == 'Europa' && $res >= 1453 && $res < 1808){
					echo "<span class='c6 style='padding-left:60%'>Idade Moderna (1453 - 1789): <br>
					-Reinados;<br>
					-Guerras;<br>
					-Filósofos;<br>
					-Ciência;<br>
					-Artes;<br>
					-I Revolução Industrial.<br>
					</span><br>";
				}

				if($select == 'Europa' && $res >= 1789 && $res < 2020){
					echo "<span class='c6 style='padding-left:60%'>Idade Contemporânea (1789 - 2020): <br>
					-Revoluções;<br>
					-Independências;<br>
					-Napoleão;<br>
					-II Revolução Industrial;<br>
					-I Guerra Mundial;<br>
					-II Guerra Mundial;<br>
					-Hitler;<br>
					-Guerra Fria;<br>
					-Capitalismo x Socialismo;<br>
					-III Revolução Industrial.<br>
					</span><br>";
				}

				if($select == 'Europa' && $res >= 2020){
					echo "<span class='c6 style='padding-left:60%'>Europa (2020 - futuro):<br>
					-Preservação?;<br>
					-Capitalismo?<br>
					-Blocos econômicos?<br>
					-Multipolarização?<br>
					</span><br>";
				}
				


				 ?></span>
				
				<br><br><br><br></p> 
				
				<button name="voltar" value="Voltar">
					<a href="http://localhost/Aulas/formularios/form_calc.html">Voltar
				</button> 
			</center>
		</div>
</body>
<footer>
	<!-- Javascript -->
	<script src="jscript/calculadora.js"></script>
	<!--  -->
</footer>
</html>