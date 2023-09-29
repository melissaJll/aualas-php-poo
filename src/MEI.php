<?php
namespace Tabajara;

final class MEI extends PessoaJuridica{
// 'final' é a última classe de sua geração, não permite criar sub-classes a partir desta
    private string $areaAtuacao;
    

    public function getAreaAtuacao(): string
    {
        return $this->areaAtuacao;
    }

    public function setAreaAtuacao(string $areaAtuacao): void
    {
        $this->areaAtuacao = $areaAtuacao;
    }
}
?>