<?php
/**
 * Created by PhpStorm.
 * User: caio_
 * Date: 16/05/2019
 * Time: 15:40
 */

class Arquivo
{
    private $conteudo;

    public function getConteudo()
    {
        return $this->conteudo;
    }

    private function setConteudo($conteudo): void
    {

        $this->conteudo = $conteudo;
    }

    public function CarregarArquivo($arquivo){
        $fp = fopen($arquivo,"r");
        $conteudo = fread($fp,filesize($arquivo));
        fclose($fp);

        $this->setConteudo($conteudo);
    }


}

$Arq = new Arquivo();
$Arq->CarregarArquivo($_FILES['file']['tmp_name']);

echo $Arq->getConteudo();



