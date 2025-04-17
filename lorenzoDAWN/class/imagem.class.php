<?php
class Produto
{
    private $id_manga;
    private $nome;
    private $id_imagem;

    public function getId_imagem()
    {
        return $this->id_imagem;
    }

    public function setId_imagem($valor)
    {
        $this->Id_imagem = $valor;
    }

    public function getid_manga()
    {
        return $this->id_manga;
    }

    public function setid_manga($valor)
    {
        $this->id_manga = $valor;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($valor)
    {
        $this->nome = $valor;
    }
}
?>
