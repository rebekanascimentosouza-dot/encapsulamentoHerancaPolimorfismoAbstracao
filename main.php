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

// abstract class Funcionario{
//     public $nome;
//     protected $cpf;
//     private$numReg;

//   public function __construct($nome, $cpf, $numReg){
//   $this->nome = $nome;
//   $this->cpf = $cpf;
//    $this->numReg = $numReg;
// }

// public function apresentar(){
//     return "Nome: $this->nome\nCPF: $this->cpf\nNumero de registro: $this->numReg\n";
//   }

//   abstract public function promover($salario, $aumentoPorcentual);
//   }

// class RecursosHumanos extends Funcionario{
//   public function promover($salario, $aumentoPorcentual){
//   return $salario = $salario + ($salario * $aumentoPorcentual / 100);
//   }
// }

// $ana = new RecursosHumanos("Ana", 12345678900, 123456);
// echo $ana->apresentar();
// echo $ana->promover(1000, 10);
           
//1
// class Usuario{
//     private $nome;
//     private $email;

//     public function __construct($nome, $email){
//         $this->nome = $nome;
//         $this->email = $email;
//     }

//     public function setNome($nome){
//         $this->nome = $nome;
//     }

//     public function getNome(){
//         return $this->nome;
//     }

//     public function setEmail($email){
//         $this->email = $email;
//     }

//     public function getEmail(){
//         return $this->email;
//     }

//     public function exibirDados(){
//         return "Nome: $this->nome\nEmail: $this->email\n";
//     }
// }

// class Administrador extends Usuario{
//     private $nivelAcesso;

//     public function __construct($nome, $email, $nivelAcesso){
//         parent::__construct($nome, $email);
//         $this->nivelAcesso = $nivelAcesso;
//     }

//     public function setNivelAcesso($nivelAcesso){
//         $this->nivelAcesso = $nivelAcesso;
//     }

//     public function getNivelAcesso(){
//         return $this->nivelAcesso;
//     }

//     public function exibirDados(){
//         return parent::exibirDados() . "Nível de Acesso: $this->nivelAcesso\n";
//     }
// }

// $admin = new Administrador("Carlos", "carlos@email.com", "Médio");
// $admin->setNivelAcesso("Administrador");
// echo $admin->exibirDados();

//2
// class Produto{
//     protected $nome;
//     protected $preco;

//     public function __construct($nome, $preco){
//         $this->nome = $nome;
//         $this->preco = $preco;
//     }

//     public function getNome(){
//         return $this->nome;
//     }

//     public function setNome($nome){
//         $this->nome = $nome;
//     }

//     public function getPreco(){
//         return $this->preco;
//     }

//     public function setPreco($preco){
//         $this->preco = $preco;
//     }

//     public function mostrarProduto(){
//         return "Nome: $this->nome\nPreço: R$ $this->preco\n";
//     }
// }

// class Notebook extends Produto{
//     private $memoriaRAM;

//     public function __construct($nome, $preco, $memoriaRAM){
//         parent::__construct($nome, $preco);
//         $this->memoriaRAM = $memoriaRAM;
//     }

//     public function getMemoriaRAM(){
//         return $this->memoriaRAM;
//     }

//     public function setMemoriaRAM($memoriaRAM){
//         $this->memoriaRAM = $memoriaRAM;
//     }

//     public function mostrarProduto(){
//         return parent::mostrarProduto() . "Memória RAM: $this->memoriaRAM\n";
//     }
// }

// $dell = new Notebook("Dell Inspiron", 4500, "8GB");

// $dell->setMemoriaRAM("16GB");

// echo $dell->mostrarProduto();

// ?>

<!-- //3

// class Funcionario{
//     private $nome;
//     private $salario;

//     public function __construct($nome, $salario){
//         $this->nome = $nome;
//         $this->salario = $salario;
//     }

//     public function setNome($nome){
//         $this->nome = $nome;
//     }

//     public function getNome(){
//         return $this->nome;
//     }

//     public function setSalario($salario){
//         $this->salario = $salario;
//     }

//     public function getSalario(){
//         return $this->salario;
//     }

//     public function mostrarFuncionario(){
//         return "Nome: $this->nome\nSalário: R$ $this->salario\n";
//     }
// }

// class Desenvolvedor extends Funcionario{
//     private $linguagemPrincipal;

//     public function __construct($nome, $salario, $linguagemPrincipal){
//         parent::__construct($nome, $salario);
//         $this->linguagemPrincipal = $linguagemPrincipal;
//     }

//     public function mostrarFuncionario(){
//         return parent::mostrarFuncionario() . "Linguagem Principal: $this->linguagemPrincipal\n";
//     }
// }

// $dev = new Desenvolvedor("Ana", 5000, "PHP");
// $dev->setSalario(7000);
// echo $dev->mostrarFuncionario();

//4

// class Pessoa{
//     protected $nome;
//     protected $idade;

//     public function __construct($nome, $idade){
//         $this->nome = $nome;
//         $this->idade = $idade;
//     }

//     public function setNome($nome){
//         $this->nome = $nome;
//     }

//     public function getNome(){
//         return $this->nome;
//     }

//     public function setIdade($idade){
//         $this->idade = $idade;
//     }

//     public function getIdade(){
//         return $this->idade;
//     }

//     public function apresentar(){
//         return "Nome: $this->nome\nIdade: $this->idade\n";
//     }
// }

// class Aluno extends Pessoa{
//     private $curso;

//     public function __construct($nome, $idade, $curso){
//         parent::__construct($nome, $idade);
//         $this->curso = $curso;
//     }

//     public function apresentar(){
//         return parent::apresentar() . "Curso: $this->curso\n";
//     }
// }

// $aluno = new Aluno("João", 20, "ADS");
// $aluno->setIdade(21);
// echo $aluno->apresentar();

// ?> -->