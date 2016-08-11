<?php

	class MenuPrincipalView {
		public static function exibeMenu() {
			echo file_get_contents("content/menu-principal/menu-principal.html");
		}
		public static function exibeAndamento($itemAndamento){
			$echo = file_get_contents("content/menu-principal/tabela-em-andamento.html");
			if($itemAndamento != null){
				foreach($itemAndamento as $item) {	
				$echo .="<tr id='".$item->id()."'>";
				$echo .="<td>".$item->Descrição()."</td>";
				$echo .="<td>".$item->Inicio()."</td>";
				$echo .="<td>".$item->Fim()."</td>";
				$echo .="<td><button id=\"sucesso\" class=\"tabela\"><span class=\"glyphicon glyphicon-ok\"></span></button></td>";
				$echo .="<td><button class=\"tabela\" type=\"button\" data-toggle=\"modal\" data-target=\"#fracasso\"><span class=\"glyphicon glyphicon-remove\"></span></button></td>";
				$echo .="<td><button class=\"tabela\" type=\"button\" data-toggle=\"modal\" data-target=\"#editar\"><span class=\"glyphicon glyphicon-pencil\"></span></button></td>";
				$echo .="</tr>"
				
				$echo .="<tr id='".$item->id()"'>";
				$echo .="<td class=\"col-md-7\" colspan=\"2\"><input class=\"tabela\" type=\"text\" id=\"descricao-nova\"></td>";
				$echo .="<td class="col-md-1\"><input class=\"tabela\" type=\"text\" id=\"prazo-novo\"></td>";
				$echo .="<td colspan=\"3\"><button class=\"tabela\"><span class=\"glyphicon glyphicon-plus\"></span></button></td>";
				$echo .="</tr>"
				
				}
			}
			
			$echo.="</tbody></table></div></div>";
			echo $echo;
		}
			
		public static function exibeFail($itemFail){
			echo file_get_contents("content/menu-principal/tabela-fail.html");
			if($itemFail !=null){
				foreach($itemFail as $item){
				
				echo "<tr id='".$item->id()."'>";
				echo "<td>".$item->Descrição()."Descrição</td>";
				echo "<td>".$item->Início()."</td>";
				echo "<td>".$item->Fim()."</td>";
				echo "<td>".$item->Motivo()."</td>";
				echo "<td><button class=\"tabela\" type="button\" data-toggle=\"modal\" data-target=\"#deletar\"><span class=\"glyphicon glyphicon-remove\"></span></button></td>";
				
				}
			}
			
			echo "</tbody></table></div></div>";
		}
		public static function exibeSucesso($itemSucesso){
			echo file_get_contents("content/menu-principal/tabela-sucesso.html");
			if($itemSucesso != null){
				foreach($itemSucesso as $item) {
					echo "<tr id='".$item->id()."'>";
					echo "<td>".$item->Descrição()."</td>";
					echo "<td>".$item->Inicio()."</td>";
					echo "<td>".$item->Fim()."</td>";
					echo "<td><button class=\"tabela\" type=\"button\" data-toggle=\"modal\" data-target=\"#deletar\"><span class=\"glyphicon glyphicon-remove\"></span></button></td>";
					echo "</tr>";
				}
			}//$echo (variável) desempenha a mesma função de echo(função) no código
			echo "</tbody></table></div></div>";
		}
	}
?>