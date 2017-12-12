<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>

<form action="" method="post">
	<input type="submit" value="PDF" name="pdf">
</form>

</body>
</html>

<?php

if (isset($_POST["pdf"])) {

	ob_start();

	error_reporting(0);

	error_reporting(E_ALL ^ E_DEPRECATED);

	require('../PDF/fpdf.php');

	class PDF extends FPDF
	{
	protected $B = 0;
	protected $I = 0;
	protected $U = 0;
	protected $HREF = '';

	function Header()
	{
		// Arial bold 15
		$this->SetFont('Arial','B',15);
		// Movernos a la derecha
		$this->Cell(80);
		// Título
		//$this->Cell(30,10,'PDF',1,0,'C');
		$this->Image('../img/franjaEncabezadoITS.png', 5,0,200,40);
		// Salto de línea
		$this->Ln(30);
	}



	function WriteHTML($html)
	{
		// Intérprete de HTML
		$html = str_replace("\n",' ',$html);
		$a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
		foreach($a as $i=>$e)
		{
			if($i%2==0)
			{
				// Text
				if($this->HREF)
					$this->PutLink($this->HREF,$e);
				else
					$this->Write(5,$e);
			}
			else
			{
				// Etiqueta
				if($e[0]=='/')
					$this->CloseTag(strtoupper(substr($e,1)));
				else
				{
					// Extraer atributos
					$a2 = explode(' ',$e);
					$tag = strtoupper(array_shift($a2));
					$attr = array();
					foreach($a2 as $v)
					{
						if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
							$attr[strtoupper($a3[1])] = $a3[2];
					}
					$this->OpenTag($tag,$attr);
				}
			}
		}
	}

	function OpenTag($tag, $attr)
	{
		// Etiqueta de apertura
		if($tag=='B' || $tag=='I' || $tag=='U')
			$this->SetStyle($tag,true);
		if($tag=='A')
			$this->HREF = $attr['HREF'];
		if($tag=='BR')
			$this->Ln(5);
	}

	function CloseTag($tag)
	{
		// Etiqueta de cierre
		if($tag=='B' || $tag=='I' || $tag=='U')
			$this->SetStyle($tag,false);
		if($tag=='A')
			$this->HREF = '';
	}

	function SetStyle($tag, $enable)
	{
		// Modificar estilo y escoger la fuente correspondiente
		$this->$tag += ($enable ? 1 : -1);
		$style = '';
		foreach(array('B', 'I', 'U') as $s)
		{
			if($this->$s>0)
				$style .= $s;
		}
		$this->SetFont('',$style);
	}

	function PutLink($URL, $txt)
	{
		// Escribir un hiper-enlace
		$this->SetTextColor(0,0,255);
		$this->SetStyle('U',true);
		$this->Write(5,$txt,$URL);
		$this->SetStyle('U',false);
		$this->SetTextColor(0);
	}
	}

	//conexion a la base de datos
	$servername = "localhost";
 	$username = "root";
 	$password = "";
 	$dbname = "form";

 	$link = mysql_connect("$servername", "$username", "$password") or die ("mysql_error()");
			mysql_select_db("$dbname", $link) or die ("<font face=Tahoma size=2>Error: No es posible conectar a la base de datos. </font>");

 	// Create connection
	 $conn = new mysqli($servername, $username, $password, $dbname);

	 mysql_query("SET NAMES utf8"); //muestra las tildes

	 if ($conn->connect_error) {
	 	die("Connection failed: " . $conn->connect_error);
	}

	//query
	$resSql = mysql_query("select * from ciudades where id = 2;") or die("<br>Error en la consulta</br>" .mysql_error());
	$row = mysql_fetch_assoc($resSql);
	$total_rows = mysql_num_rows($resSql);

	$titulo = utf8_decode('         CARTA COMPROMISO DE RESIDENCIA PROFESIONAL<br><br>');
	$html = utf8_decode('Yo '.$row['ciudad']. ' alumno del Instituto Tecnológico de Saltillo de la carrera ' .$row['ciudad']. ' con número de control ' .$row['habitantes']. ' habiendo cubierto los requisitos para realizar la residencia profesional, me comprometo a dar mi mejor esfuerzo, aplicar mis conocimientos y sentido común en forma honesta y desinteresada en la realización de las actividades que conlleva el proyecto ' .$row['pais']. ' que se llevará a cabo en la Empresa o Institución.
Dirección: ' .$row['pais']. ' Ciudad: ' .$row['ciudad']. ' Tel: '.$row['superficie']. ' dentro del Departamento: '.$row['id']. ' bajo la asesoría del C. '.$row['ciudad']. ' que ocupa el cargo de ' .$row['tieneMetro']. ' con correo electrónico: '.$row['ciudad']. ' dentro de la Empresa o Institución cubriendo el horario que a continuación se menciona:                        L: '.$row['tieneMetro']. '  M: '.$row['id']. ' M: '.$row['tieneMetro']. ' J: '.$row['tieneMetro']. ' V: '.$row['id']. ' S: '.$row['tieneMetro']. ' .
Durante el período: del '.$row['id']. ' de '.$row['pais']. ' al '.$row['ciudad']. ' de ' .$row['habitantes']. ' cubriendo un total de ' .$row['superficie']. ' hrs.');

	$html2 = utf8_decode('<br><br>                                                               ___________________
                       Firma del alumno<br>');

	$html3 = utf8_decode('<br>Se establece el compromiso de proporcionar al alumno residente asesoría para la realización satisfactoria del proyecto.<br><br><br>
		   ___________________________________        _______________________________<br>
		   Nombre y firma del Asesor del I.T.S        Asesor de Empresa o Institucion<br><br>');

	$html4 = utf8_decode('El alumno se compromete a cumplir los requisitos y trámites administrativos y académicos para realizar y concluir la Residencia Profesional de acuerdo al período establecido.
                                           Autorizan<br><br><br>');

	$html5 = utf8_decode('           _________________________                __________________________                       Coordinador de Carrera                   Jefe del Depto. Académico<br><br>');

	$html6 = utf8_decode('Vigencia                                                                    RAC-16-07-11
Mes-Mes Año                                                                       REV 02
');

	$pdf = new PDF();
	// Primera página
	$pdf->AddPage();
	$pdf->SetFont('courier','',10);
	$pdf->SetTitle("CARTA COMPROMISO");
	$pdf->Cell(25);

	$pdf->Cell(0);
	$pdf->SetFont('courier','',15);
	$pdf->WriteHTML($titulo);
	$pdf->SetFont('courier','',10);
	$pdf->WriteHTML($html);
	$pdf->WriteHTML($html2);
	$pdf->WriteHTML($html3);
	$pdf->WriteHTML($html4);
	$pdf->WriteHTML($html5);
	$pdf->WriteHTML($html6);

	$pdf->Output();

}
?>
