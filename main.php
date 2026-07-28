<?php 
// class Pessoa{
//     public $nome;
//     private $CPF;

//   public function __construct($nome, $CPF){
//      $this->nome = $nome;
//      $this->CPF = $CPF;
//   }
//   public function apresentar(){
//   return "nome: $this->nome\nCPF: $this->CPF\n";
//   }
//   public function SetnovoCPF(){
//     $this->CPF = $novoCPF;
//     return "CPF alterado com sucesso!";
//   }
//   public function getCPF(){
//     return $this->CPF;
// }
//   }
// class funcionario extends Pessoa{
//   public $nome;
//   private $CPF;
//   protected $numreg;

//   public function __construct($nome, $CPF, $numreg){
//     parent::__construct($nome, $CPF);
//      $this->numreg = $numreg;
//   }
//   public function apresentar(){
//     return parent::apresentar() . "\nNumero de registro: $this->numreg\n";
//   }
// }

// $ana = new Pessoa("Ana", "123.456.789-00");
// // echo "nome impresso diretamente: " . $ana->nome . "\n";
// // echo "CPF impresso diretamente: " . $ana->CPF . "\n";
// echo "Dados impressos pelo metodo apresentar: ";
// echo $ana->apresentar();
// echo $ana->Setnovocpf(readline("Digite um novo CPF para $ana->nome: "));
// echo "Novo CPF: " . $ana->getCPF();
// $Bruno = new funcionario("Bruno", "323.456.789-00", "123456");
// echo $Bruno->apresentar();

abstract class Funcionario{
    public $nome;
    protected $cpf;
    private$numReg;

  public function __construct($nome, $cpf, $numReg){
  $this->nome = $nome;
  $this->cpf = $cpf;
   $this->numReg = $numReg;
}

public function apresentar(){
    return "Nome: $this->nome\nCPF: $this->cpf\nNumero de registro: $this->numReg\n";
  }

  abstract public function promover($salario, $aumentoPorcentual);
  }

class RecursosHumanos extends Funcionario{
  public function promover($salario, $aumentoPorcentual){
  return $salario = $salario + ($salario * $aumentoPorcentual / 100);
  }
}

$ana = new RecursosHumanos("Ana", 12345678900, 123456);
echo $ana->apresentar();
echo $ana->promover(1000, 10);