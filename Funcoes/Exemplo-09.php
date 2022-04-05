<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Início Diretor Comercial
            array(
                'nome_cargo' => 'Diretor  Comercial',
                'subordinados' => array(
                    //Inicio Gerente de Vendas
                    array(
                    'nome_cargo' => 'Gerente de vendas'
                    )
                //Término Gerente de Vendas
                )
            ),
            //Término Diretor Comercial
            //Inicio Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //Início de Gerente de Contas a Pagar
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            //Início Supervisor de pagamento
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            )
                            //Término Supervisor de pagamentos
                        )
                    ),
                    //Término Gerente de Contas a Pagar
                    //Início Gerente de Compras
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            //Início Supervisor de Suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos',
                                'subordinados' => array(
                                    //Início Comprador
                                    array(
                                        'nome_cargo' => 'Comprador'
                                    )
                                )
                                //Término de comprador
                            )
                            //Término Supervisor de Suprimentos
                        )
                    )
                    //Término Gerente de Compras
                )
            )

        )
        //Término Diretor Financeiro
    )
);


function exibe($cargos){

    $html = '<ul>';

    foreach ($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

            $html .= exibe($cargo['subordinados']);

        }

        $html .= "</li>";

    }

    $html .= '</ul>';
    
    return $html;
}

echo exibe($hierarquia);

?>