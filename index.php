<?php

require_once 'modelo/persona.php';
require_once 'modelo/obraSocial.php';
require_once 'modelo/documento.php';
require_once 'modelo/tipoDocumento.php';

$o = new ObraSocial();
$o->Id = 1;
$o->RazonSocial = 'OSDE';
$o->Cuit = '30-124522654-6';
$o->SitioWeb  = 'osde.com.ar';
$o->Telefono = '341-4854521';

$td1 = new TipoDocumento();
$td1->Id = 1;
$td1->Descripcion = 'DNI';
$td1->Habilitado = True;

$td2 = new TipoDocumento();
$td2->Id = 2;
$td2->Descripcion = 'Pasaporte';
$td2->Habilitado = True;

$d1 = new Documento();
$d1->Id = 1;
$d1->Numero = '40123123';
$d1->Habilitado = True;
$d1->TipoDocumento = $td1;

$d2 = new Documento();
$d2->Id = 1;
$d2->Numero = '50123123';
$d2->Habilitado = True;
$d2->TipoDocumento = $td2;

$p = new Persona();
$p->Id = 1;
$p->Nombre = 'Persona';
$p->Apellido = 'Ejemplo';
$p->FechaNacimiento  = '15/12/1889';
$p->ObraSocial = $o;
$p->ListDocumentos[] = $d1;
$p->ListDocumentos[] = $d2;
$p->MostrarDatos();

