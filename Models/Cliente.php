<?php

class Cliente {
  private $id;
  private $nome;
  private $cpf;
  private $dt_nasc;
  private $whatsapp;
  private $logradouro;
  private $num;
  private $bairro;

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getNome() {
    return $this->nome;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function getCpf() {
    return $this->cpf;
  }

  public function setCpf($cpf) {
    $this->cpf = $cpf;
  }

  public function getDt_nasc() {
    return $this->dt_nasc;
  }

  public function setDt_nasc($dt_nasc) {
    $this->dt_nasc = $dt_nasc;
  }

  public function getWhatsapp() {
    return $this->whatsapp;
  }

  public function setWhatsapp($whatsapp) {
    $this->whatsapp = $whatsapp;
  }

  public function getLogradouro() {
    return $this->logradouro;
  }

  public function setLogradouro($logradouro) {
    $this->logradouro = $logradouro;
  }

  public function getNum() {
    return $this->num;
  }

  public function setNum($num) {
    $this->num = $num;
  }

  public function getBairro() {
    return $this->bairro;
  }

  public function setBairro($bairro) {
    $this->bairro = $bairro;
  }
}
