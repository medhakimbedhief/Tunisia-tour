<?php 

include "../FRONT/Controller/RandonneeC.php";
include "../FRONT/Controller/PanierC.php";
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';
use Twilio\Rest\Client;
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC5ae12f720f77d17914b24ca11bb66341';
$auth_token = 'fa19c23d0e7e763e7c725bac05ea8cd7';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+19382536304";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+21644196276',
    array(
        'from' => $twilio_number,
        'body' => 'Participation avec succées nouveau client !'
    )
);
session_start();
if (isset($_POST['idchoixR']) ){


	$panier1=new panier($_POST['idchoixR'],$_SESSION['e']);


$panier1C=new panierC();

$panier1C->ajouterpanier($panier1);


}


if (isset($_POST["idchoixR"]) )
{
$RandonneeC1=new RandonneeC();
$idrecupR=$_POST["idchoixR"];
$R=$RandonneeC1->recupererrandonnee($idrecupR);
}

ob_start();
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',30);
$pdf->cell(180,10,'Reservation',0,0,'C');
$pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(300,10,"Tunisia tour",0,0,'C');
$pdf->Ln();
$pdf->cell(300,10,"1,2 rue Andre Ampere -2083- pole Technologique - El Ghazala",0,0,'C');
$pdf->Ln();
$pdf->cell(300,10,"23814764",0,0,'C');
$pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',20);
$pdf->cell(50,10,'votre reservation :',0,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(20,10,'nom',1,0,'C');
$pdf->cell(25,10,'region',1,0,'C');
$pdf->cell(30,10,'date',1,0,'C');
$pdf->cell(35,10,'description',1,0,'C');
$pdf->cell(40,10,'Cout',1,0,'C');
$pdf->Ln(); 
foreach ($R as $row) {
	$pdf->cell(20,10,$row['nom'],1,0,'C');
	$pdf->cell(25,10,$row['region'],1,0,'C');
	$pdf->cell(30,10,$row['date'],1,0,'C');
	$pdf->cell(35,10,$row['description'],1,0,'C');
	$pdf->cell(40,10,$row['cout'],1,0,'C');
	$pdf->Ln(20);
}


$pdf->Ln(20);
$pdf->SetFont('Arial','B',20);
$pdf->cell(50,10,'Client:',0,0,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Ln();
$pdf->cell(40,10,'nom',1,0,'C');
$pdf->cell(60,10,'prenom',1,0,'C');
$pdf->Ln();
$pdf->cell(40,10,$_SESSION['e'],1,0,'C');
$pdf->cell(60,10,$_SESSION['e'],1,0,'C');
$pdf->Ln();

$pdf->cell(5,10,"Nb:Au cas d'annulation de la réservation Veuillez nous envoyer un mail :TunisiaTour@gmail.com ");
$pdf->Ln();
$pdf->cell(5,5,"en presiciant votre nom,prenom,numero telephone,le nom choisie de camping ou randonee");

$pdf->Output();
ob_end_flush();
?>
