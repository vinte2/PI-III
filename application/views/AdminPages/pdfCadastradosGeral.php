<?php

defined('BASEPATH') OR exit('No direct script access allowed');





//============================================================+

// File name   : example_003.php

// Begin       : 2008-03-04

// Last Update : 2013-05-14

//

// Description : Example 003 for TCPDF class

//               Custom Header and Footer

//

// Author: Nicola Asuni

//

// (c) Copyright:

//               Nicola Asuni

//               Tecnick.com LTD

//               www.tecnick.com

//               info@tecnick.com

//============================================================+



/**

 * Creates an example PDF TEST document using TCPDF

 * @package com.tecnick.tcpdf

 * @abstract TCPDF - Example: Custom Header and Footer

 * @author Nicola Asuni

 * @since 2008-03-04

 */



// Include the main TCPDF library (search for installation path).

// require_once('tcpdf/tcpdf.php');





class MYPDF extends TCPDF {



    //Page header

    public function Header() {



        // Logo

        $image_file = K_PATH_IMAGES.'logoBC.jpg';

        $this->Image($image_file, 16, 11, 25, '', 'JPG', '', 'T', false, 6, '', false, false, 0, false, false, false);

        // Set font

        // $this->SetFont('helvetica', 'B', 10);

        // Title

        // $this->Cell(80, 55, 'PROPOSTA DE CONCESSÃO DE DIÁRIAS', 0, false, 'C', 0, '', 0, false, 'M', 'M');

    }



    // Page footer

    // public function Footer() {

    //     // Position at 15 mm from bottom

    //     $this->SetY(-15);

    //     // Set font

    //     $this->SetFont('helvetica', 'I', 8);

    //     // Page number

    //     $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');

    // }

}



// create new PDF document

$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);



// set default header data

$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);



// set header and footer fonts

$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));



// set default monospaced font

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);



// set margins

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);

$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);



// set auto page breaks

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);



// set image scale factor

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);



// set some language-dependent strings (optional)

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {

    require_once(dirname(__FILE__).'/lang/eng.php');

    $pdf->setLanguageArray($l);

}



// ---------------------------------------------------------



// set font

$pdf->SetFont('helvetica', 'BI', 12);



// add a page

$pdf->AddPage();





$pdf->Write(0, '', '', 0, 'C', true, 0, false, false, 50);



$pdf->SetFont('helvetica', '', 8);




// -----------------------------------------------------------------------------

// $cpf = ($cpf != null) ? '<strong>CPF n° ' . $cpf . '</strong>': '';
// $nome = ($nome != null) ? 'nome de <strong>' . ucwords($nome) .',</strong>' : '';
$tbl = <<<EOD

<br>
<h1 style="text-align:center; ">Secretaria da Educação</h1><br><br>
<h1 style="text-align:center; ">Relatorio de protocolo geral cadastrados</h1>



<p style="margin-left: 50px; font-size:15px"><br><br></p>


EOD;
$pdf->writeHTML($tbl, true, false, false, false, '');
// -----------------------------------------------------------------------------

$html = '';

foreach($cadastrados as $info) {

    // var_dump($info);
    $html .= 
    '<tr>
        <td style="font-size: 10px;text-align:center; border-right: 1px solid dark; padding-left: 200px; border-left: 1px solid dark; border-top:  1px solid dark; border-bottom:  1px solid dark;">'. $info['numero'] .'</td>
        <td colspan="2" style="font-size: 10px;text-align:center; border-right: 1px solid dark; border-top: 1px solid dark; border-bottom:  1px solid dark;">'.date('d/m/Y H:i', strtotime($info['data_cadastro']))  . '</td>
        <td colspan="1" style="font-size: 10px;text-align:center; border-right: 1px solid dark; border-top: 1px solid dark; border-bottom:  1px solid dark;">'. $info['turno'] .'</td>
        <td colspan="1" style="font-size: 10px;text-align:center; border-right: 1px solid dark; border-top: 1px solid dark; border-bottom:  1px solid dark;"> '. date('d/m/Y', strtotime($info['datanascimento'])) .'</td>
        <td colspan="1" style="font-size: 10px;text-align:center; border-right: 1px solid dark; border-top: 1px solid dark; border-bottom:  1px solid dark;">'. $info['responsavel'] .'</td>
        <td style="font-size: 10px;text-align:center; border-right: 1px solid dark; border-top: 1px solid dark; border-bottom:  1px solid dark;"> '. $info['status'] .'</td>
        <td style="font-size: 10px;text-align:center; border-right: 1px solid dark; border-top: 1px solid dark; border-bottom:  1px solid dark;"> '. $info['motivo_indefere'] .'</td>
        
    </tr>';
}


$tbl = <<<EOD

EOD;
$pdf->writeHTML($tbl, true, false, false, false, '');
// -----------------------------------------------------------------------------
// $responsavel = ucfirst($responsavel);
// $nome = ucfirst($nome);

$dataAgora = date('d/m/Y');
$tbl = <<<EOD

<table cellspacing="0" cellpadding="4" style=" font-family:arial; font-size:13px; border: 1px solid #000000;" border='1'>
<tr>
    <th colspan="4" style="text-align:center; border-left: 1px solid dark; border-top: 1px solid dark; border-bottom: 1px solid dark; border-right: 1px solid dark; "><h3> $nomeescola </h3></th>
    <th colspan="3"  style="text-align:center border-left: 1px solid dark; border-top: 1px solid dark; border-bottom: 1px solid dark; border-right: 1px solid dark; ">Série</th>
    <th style="text-align:center border-left: 1px solid dark; border-top: 1px solid dark; border-bottom: 1px solid dark; border-right: 1px solid dark; "> $ano </th>
</tr>

<tr>
    <td style="font-size: 10px;text-align:center; border-right: 1px solid dark; padding-left: 200px; border-left: 1px solid dark; border-top:  1px solid dark; border-bottom:  1px solid dark;"> Protocolo</td>
    <td colspan="2" style="font-size: 10px;text-align:center; border-right: 1px solid dark; border-top: 1px solid dark; border-bottom:  1px solid dark;"> Data Cadastro</td>
    <td colspan="1" style="font-size: 10px;text-align:center; border-right: 1px solid dark; border-top: 1px solid dark; border-bottom:  1px solid dark;"> Turno</td>
    <td colspan="1" style="font-size: 10px;text-align:center; border-right: 1px solid dark; border-top: 1px solid dark; border-bottom:  1px solid dark;"> Data Nascimento</td>
    <td colspan="1" style="font-size: 10px;text-align:center; border-right: 1px solid dark; border-top: 1px solid dark; border-bottom:  1px solid dark;"> Responsável </td>
    <td style="font-size: 10px;text-align:center; border-right: 1px solid dark; border-top: 1px solid dark; border-bottom:  1px solid dark;"> Situação </td>
    <td style="font-size: 10px;text-align:center; border-right: 1px solid dark; border-top: 1px solid dark; border-bottom:  1px solid dark;"> Motivo </td>
    
</tr>

$html

</table>


<h5 style="text-align:left; ">Secretaria da Educação - Balneário Camboriú<br>
Protocolo valido somente para este perídodo de chamamento<br>
Data $dataAgora </h5>
EOD;



$pdf->writeHTML($tbl, true, false, false, false, '');




//Close and output PDF document

$pdf->Output('example_048.pdf', 'I');



//============================================================+

// END OF FILE

//============================================================+

