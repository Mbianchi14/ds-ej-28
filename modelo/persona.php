<?php

class Persona{

    public $Id;
    public $Nombre;
    public $Apellido;
    public $FechaNacimiento;
    public $ObraSocial;
    public $ListDocumentos;


    public function MostrarDatos()
    {
        
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Apellido: ' . $this->Apellido . '<br>';
        echo 'Fecha de Nacimiento: ' . $this->FechaNacimiento . '<br>';
        echo 'Obra Social: '.'<br>';
        echo '->: ' . $this->ObraSocial->RazonSocial . '<br>';
        echo '->: ' . $this->ObraSocial->SitioWeb . '<br>';
        echo 'Documentos: <br>';
        foreach ($this->ListDocumentos as $ld) 
        {
            echo  '--->Numero: '. $ld->Numero . ' <br>';
            echo  '--->Tipo de Docuemto: <br>';
            echo  '-------->Descripcion: '. $ld->TipoDocumento->Descripcion . ' <br>';
            echo  ' <br>';
        }
    }

}