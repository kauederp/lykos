<?php
class Ong{
  private $nome;
  private $admin;
  private $perfis;
  private $local;
  private $animaisAceitos;
  private $lotacaoMaxima;
  private $gastoMensal;
  private $pix;
  private $imgs;
  private $email;
  private $senha;

  public function data_uri($file, $mime)
  {
    $contents = file_get_contents($file);
    $base64   = base64_encode($contents);
    return ('data:' . $mime . ';base64,' . $base64);
  }


    /**
     * Get the value of Nome
     *
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of Nome
     *
     * @param mixed $nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of Administrador
     *
     * @return mixed
     */
    public function getAdministrador()
    {
        return $this->administrador;
    }

    /**
     * Set the value of Administrador
     *
     * @param mixed $administrador
     *
     * @return self
     */
    public function setAdministrador($administrador)
    {
        $this->administrador = $administrador;

        return $this;
    }

    /**
     * Get the value of Perfis
     *
     * @return mixed
     */
    public function getPerfis()
    {
        return $this->perfis;
    }

    /**
     * Set the value of Perfis
     *
     * @param mixed $perfis
     *
     * @return self
     */
    public function setPerfis($perfis)
    {
        $this->perfis = $perfis;

        return $this;
    }

    /**
     * Get the value of Local
     *
     * @return mixed
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set the value of Local
     *
     * @param mixed $local
     *
     * @return self
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get the value of Animais Aceitos
     *
     * @return mixed
     */
    public function getAnimaisAceitos()
    {
        return $this->animaisAceitos;
    }

    /**
     * Set the value of Animais Aceitos
     *
     * @param mixed $animaisAceitos
     *
     * @return self
     */
    public function setAnimaisAceitos($animaisAceitos)
    {
        $this->animaisAceitos = $animaisAceitos;

        return $this;
    }

    /**
     * Get the value of Lotacao Maxima
     *
     * @return mixed
     */
    public function getLotacaoMaxima()
    {
        return $this->lotacaoMaxima;
    }

    /**
     * Set the value of Lotacao Maxima
     *
     * @param mixed $lotacaoMaxima
     *
     * @return self
     */
    public function setLotacaoMaxima($lotacaoMaxima)
    {
        $this->lotacaoMaxima = $lotacaoMaxima;

        return $this;
    }

    /**
     * Get the value of Gasto Mensal
     *
     * @return mixed
     */
    public function getGastoMensal()
    {
        return $this->gastoMensal;
    }

    /**
     * Set the value of Gasto Mensal
     *
     * @param mixed $gastoMensal
     *
     * @return self
     */
    public function setGastoMensal($gastoMensal)
    {
        $this->gastoMensal = $gastoMensal;

        return $this;
    }

    /**
     * Get the value of Pix
     *
     * @return mixed
     */
    public function getPix()
    {
        return $this->pix;
    }

    /**
     * Set the value of Pix
     *
     * @param mixed $pix
     *
     * @return self
     */
    public function setPix($pix)
    {
        $this->pix = $pix;

        return $this;
    }

    /**
     * Get the value of Imgs
     *
     * @return mixed
     */
    public function getImgs()
    {

      try{
        $db = mysqli_connect("localhost","root","0","lykos"); //keep your db name
        $sql = "SELECT imgs FROM ong";
        $sth = $db->query($sql);
        $result=mysqli_fetch_array($sth);
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['imgs'] ).'"/>';


            return '<img src="data:image/jpeg;base64,'.$result.'">';

        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }

    /**
     * Set the value of Imgs
     *
     * @param mixed $Imgs
     *
     * @return self
     */
    public function setImgs($imgs)
    {
        $this->imgs = $imgs;

    }

    /**
     * Set the value of Email
     * 
     * @param mixed $email
     * 
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setSenha($senha)
    {
        $this->email = $senha;
    }

    public function getSenha()
    {
        return $this->senha;
    }

}
