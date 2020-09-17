<?php 

	$hierarquia = array(
		//Inicio: CEO
		array(
			'nome_cargo'=>'CEO',
			'subordinados'=>array(
				//Inicio: Diretor Comercial
				array(
					'nome_cargo'=>'Diretor Comercial',
					'subordinados'=>array(
						array(
							'nome_cargo'=>'Gerente de Vendas'
						)
					)
				),
				//Fim: Diretor Comercial
				//Inicio: Diretor Financeiro
				array(
					'nome_cargo'=>'Diretor Financeiro',
					'subordinados'=>array(
						//Inicio: Gerente de Compras
						array(
							'nome_cargo'=>'Gerente de Compras',
							'subordinados'=>array(
								//Inicio: Supervisor de Suprimentos
								array(
									'nome_cargo'=>'Supervisor de Suprimentos'
								)
								//Fim: Supervisor de Suprimentos
							)
						),
						//Fim: Gerente de Compras
						//Inicio: Gerente Financeiro
						array(
							'nome_cargo'=>'Gerente Financeiro',
							'subordinados'=>array(
								//Inicio: Supervisor de Contas a Pagar
								array(
									'nome_cargo'=>'Supervisor de Contas a Pagar'
								)
								//Fim: Supervisor de Contas a Pagar
							)
						)
						//Fim: Gerente Financeiro
					)
				)
				//Fim: Diretor Financeiro 
			)
		)
		//Fim: CEO
	);

	function exibe($cargos){

		$html = '<ul>';

		foreach ($cargos as $cargo) {
			
			$html .= '<li>';

			$html .= $cargo['nome_cargo'];

			if (isset($cargo['subordinados']) && $cargo['subordinados'] > 0 ) {
				
				$html .= exibe($cargo['subordinados']);

			}

			$html .= '</li>';
		}

		$html .= '</ul>';

		return $html;
	
	}

	echo exibe($hierarquia);

 ?>