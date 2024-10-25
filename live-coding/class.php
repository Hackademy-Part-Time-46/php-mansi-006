<?php


//Classe astratta parti superiori
//Classe astratta parti inferiori


abstract class ParteSuperiore
{
    abstract function muoviLeBraccia();
}

abstract class ParteInferiore
{
    abstract function muoviLeGambe();
}


class Pugno extends ParteSuperiore
{

    public function muoviLeBraccia()
    {
        echo "Con le mia braccia ti tiro un pugno\n";
    }
}

class Saluta extends ParteSuperiore
{
    public function muoviLeBraccia()
    {
        echo "Con le mia braccia ti saluto \n";
    }
}

class SchioccaLeDita extends ParteSuperiore
{
    public function muoviLeBraccia()
    {
        echo "Con le mia braccia schiocco \n";
    }
}

class Calcio extends ParteInferiore
{
    public function muoviLeGambe()
    {
        echo "Con le mie gambe tiro un calcio  \n";
    }
}


class Camminare extends ParteInferiore
{

    public function muoviLeGambe()
    {
        echo "Corro veloce  \n";
    }
}
