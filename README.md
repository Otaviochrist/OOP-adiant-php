# Fundamentos de OOP em PHP | PHP OOP Fundamentals

> 🇧🇷 Português | 🇺🇸 English

---

## 🇧🇷 Português

### Sobre o projeto
Exercícios práticos de Orientação a Objetos em PHP, desenvolvidos como preparação para trabalhar com o Adianti Framework, que usa fortemente conceitos como visibilidade e métodos mágicos no seu ORM (`TRecord`).

Cada exercício reforça um conceito antes de avançar para o próximo, seguindo pré-requisitos do próprio framework (classe, instância, visibilidade, construtor, herança, método estático).

### Exercícios realizados
- **Pessoa:** criação de objetos, propriedades, método de apresentação, construtor, verificação de maioridade e aniversário.
- **Conta bancária:** propriedade privada, depósito, saque, validação de valores e consulta do saldo com getter.
- **Promoção de construtor:** propriedades declaradas nos parâmetros do `__construct()` (PHP 8+), com tipos `string`, `int` e `float`; getters `getTitular()` e `getSaldo()`. Arquivo: `PromocaoConstrutor.php`.
- **stdClass:** objeto genérico com `new stdClass()`, conversão de array com `(object)` e `json_decode()`, comparado com uma classe `Pessoa` própria. Arquivo: `StdClassExemplo.php`.
- **Associação:** dois objetos independentes; o pedido aponta para um cliente (`Cliente` no construtor) sem ser dono dele. Arquivo: `Associacao.php`.
- **Agregação:** o departamento agrupa funcionários em um array; as pessoas são criadas fora e continuam existindo após `unset` do departamento. Arquivo: `Agregacao.php`.
- **Composição:** o pedido cria e possui os itens (`new ItemPedido` dentro de `adicionarItem`); `calcularTotal()` soma os subtotais. Arquivo: `Composicao.php`.
- **Trilha herança → abstração** (pasta `trilha-heranca-abstracao/`):
  - **Herança + protected:** `ContaPoupanca extends Conta` usa `$saldo` da mãe. Arquivo: `trilha-heranca-abstracao/Heranca.php`.
  - **Polimorfismo:** mesmo `taxa()` em duas filhas; `foreach` numa lista de `Conta`. Arquivo: `trilha-heranca-abstracao/Polimorfismo.php`.
  - **Abstração + require_once:** `abstract class Conta` (não dá `new Conta`); filhas implementam `taxa(): float` em arquivos separados e o script soma as taxas. Arquivos: `Conta.php`, `ContaCorrente.php`, `ContaPoupanca.php`, `Abstracao.php`.

### Como usar
1. Execute qualquer arquivo com `php nome-do-arquivo.php`
2. Trilha: `php trilha-heranca-abstracao/Heranca.php`, depois `Polimorfismo.php` e `Abstracao.php`
3. Ou coloque no htdocs e abra pelo navegador

### O que aprendi desenvolvendo este projeto
- Estrutura básica de classe e objeto (`class`, `new`)
- Propriedades e métodos, e o acesso com `->`
- A palavra-chave `$this` para acessar propriedades do próprio objeto
- Visibilidade: `public` (acesso livre), `private` (bloqueia acesso externo, exige getters/setters)
- Getters e setters como validação de dados (ex: `depositar()` só aceita valores positivos)
- Diferença entre `return` (devolve valor reutilizável) e `echo` (apenas imprime)
- Revisão de funções: declaração, parâmetros e `return`
- Promoção de construtor (PHP 8+): visibilidade e tipo no parâmetro, sem repetir propriedade e atribuição
- Getters (`getSaldo()`, `getTitular()`) para ler propriedades `private`
- `stdClass` para dados soltos (JSON, array convertido) versus classe própria para regras de negócio
- Relacionamentos entre objetos: associação (conhece), agregação (agrupa sem ser dono) e composição (cria e possui as partes)
- Tipo de parâmetro sendo outra classe (`Cliente`, `Funcionario`, `ItemPedido`)
- Array de objetos, `foreach` e `$this->itens[]` / `$this->funcionarios[]`
- No Adianti, associação lembra `belongsTo`; agregação/composição lembram coleções (`hasMany`)
- Herança (`extends`) e visibilidade `protected` (filha acessa; código de fora não)
- Polimorfismo: o tipo da variável é a mãe, o objeto na memória é a filha
- Classe abstrata (`abstract class` / `abstract function`): contrato da mãe, `new` só nas filhas
- A filha tem que repetir a assinatura do método abstrato (`taxa(): float`) e dar `return`
- `require_once` + `__DIR__` para carregar a classe na pasta do arquivo; se faltar, o PHP para (`include_once` só avisa)
- No Adianti, o model concreto `extends TRecord`; você não instancia a classe base como cadastro

### Tecnologias
- PHP 8+
- Git / GitHub

---

## 🇺🇸 English

### About
Hands-on Object-Oriented Programming exercises in PHP, built as preparation to work with the Adianti Framework, which relies heavily on concepts like visibility and magic methods in its ORM (`TRecord`).

Each exercise reinforces one concept before moving to the next, following the framework's own prerequisites (class, instance, visibility, constructor, inheritance, static method).

### Completed exercises
- **Person:** object creation, properties, an introduction method, constructor, age-of-majority check, and birthday.
- **Bank account:** private property, deposits, withdrawals, value validation, and balance lookup with a getter.
- **Constructor promotion:** properties declared in `__construct()` parameters (PHP 8+), with `string`, `int`, and `float` types; `getTitular()` and `getSaldo()` getters. File: `PromocaoConstrutor.php`.
- **stdClass:** a generic object via `new stdClass()`, array casting with `(object)`, and `json_decode()`, compared with a dedicated `Pessoa` class. File: `StdClassExemplo.php`.
- **Association:** two independent objects; the order points to a customer without owning them. File: `Associacao.php`.
- **Aggregation:** a department groups employees in an array; people are created outside and still exist after `unset` on the department. File: `Agregacao.php`.
- **Composition:** the order creates and owns its line items (`new ItemPedido` inside `adicionarItem`); `calcularTotal()` sums subtotals. File: `Composicao.php`.
- **Inheritance → abstraction trail** (folder `trilha-heranca-abstracao/`):
  - **Inheritance + protected:** `ContaPoupanca extends Conta` uses the parent's `$saldo`. File: `trilha-heranca-abstracao/Heranca.php`.
  - **Polymorphism:** the same `taxa()` on two children; `foreach` over a `Conta` list. File: `trilha-heranca-abstracao/Polimorfismo.php`.
  - **Abstraction + require_once:** `abstract class Conta` (no `new Conta`); children implement `taxa(): float` in separate files and the script sums the fees. Files: `Conta.php`, `ContaCorrente.php`, `ContaPoupanca.php`, `Abstracao.php`.

### How to use
1. Run any file with `php file-name.php`
2. Trail: `php trilha-heranca-abstracao/Heranca.php`, then `Polimorfismo.php` and `Abstracao.php`
3. Or drop it into htdocs and open it in the browser

### What I learned building this project
- Basic class and object structure (`class`, `new`)
- Properties and methods, and access via `->`
- The `$this` keyword to access the current object's own properties
- Visibility: `public` (free access), `private` (blocks external access, requires getters/setters)
- Getters and setters as data validation (e.g. `depositar()` only accepts positive values)
- Difference between `return` (returns a reusable value) and `echo` (just prints)
- Refresher on functions: declaration, parameters, and `return`
- Constructor promotion (PHP 8+): visibility and type on the parameter, without repeating the property and assignment
- Getters (`getSaldo()`, `getTitular()`) to read `private` properties
- `stdClass` for loose data (JSON, cast arrays) versus a dedicated class for business rules
- Object relationships: association (knows), aggregation (groups without owning), and composition (creates and owns the parts)
- Another class as a parameter type (`Cliente`, `Funcionario`, `ItemPedido`)
- Arrays of objects, `foreach`, and `$this->itens[]` / `$this->funcionarios[]`
- In Adianti, association maps to `belongsTo`; aggregation/composition map to collections (`hasMany`)
- Inheritance (`extends`) and `protected` visibility (child can access; outside code cannot)
- Polymorphism: the variable's type is the parent, the object in memory is the child
- Abstract class (`abstract class` / `abstract function`): parent contract, `new` only on children
- The child must match the abstract method signature (`taxa(): float`) and `return` a value
- `require_once` + `__DIR__` to load a class from the script's folder; missing file stops PHP (`include_once` only warns)
- In Adianti, a concrete model `extends TRecord`; you do not instantiate the base class as your record

### Tech stack
- PHP 8+
- Git / GitHub

