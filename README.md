<div align="center">

# OOP em PHP · Adianti

[![PHP](https://img.shields.io/badge/PHP-8.5-8866C4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![Progresso](https://img.shields.io/badge/Módulo-3%20%2F%208-8866C4?style=for-the-badge)](#exercícios)
[![Adianti](https://img.shields.io/badge/Adianti-Framework-8866C4?style=for-the-badge)](https://www.adianti.com.br/)

<br>

Caderno de exercícios de **Orientação a Objetos em PHP**, preparação para o Adianti Framework.

> *Um conceito por vez — do `new` até `enum`, `interface`, Adapter, Facade, SQL no terminal e o cadastro HTML do módulo 3.*

</div>

<br>

## Sobre

Exercícios práticos no ritmo do curso de POO. Ainda **sem** o framework no código: classe, visibilidade, relações, herança, polimorfismo, abstração, enum, interface, padrões (Adapter, Facade), SQL (SQLite + PDO) e o **módulo 3** (PHP + HTML + Postgres, um script por ação no nível 1).

<details>
<summary>🇺🇸 English version</summary>
<br>

Hands-on OOP drills following the PHP course toward Adianti. No framework yet — classes, visibility, relationships, inheritance, polymorphism, abstraction, enums, interfaces, Adapter, Facade, terminal SQL (SQLite + PDO), and module 3 (HTML form + Postgres).

</details>

<br>

## Como rodar

```bash
php fundamentos/ContaBancaria.php
php trilha-heranca-abstracao/Heranca.php
php trilha-enum-interface/EnumZoom.php
php trilha-facade-adapter/Adapter.php
php trilha-facade-adapter/AdapterCentavos.php
php trilha-facade-adapter/Facade.php
php pratica-sql/criar.php
php pratica-sql/listar.php
```

Cadastro do módulo 3 (navegador). Copie `modulo-3/nivel-1/db.exemplo.php` para `db.php` e preencha o Postgres. O `db.php` **não** vai no Git.

```bash
cd modulo-3/nivel-1
php -S localhost:8000
```

Abra `http://localhost:8000/pessoa_form_insert.php`.

<br>

## Exercícios

**Fundamentos** — [`fundamentos/`](fundamentos/)

`PrimeiraClasse.php` · `MaioridadeClasses.php` · `ClassesPrivate.php` · `ContaBancaria.php` · `PromocaoConstrutor.php` · `StdClassExemplo.php`

**Relações** — [`relacoes/`](relacoes/)

`Associacao.php` · `Agregacao.php` · `Composicao.php`

**Trilhas** (um nível por vez)

| Pasta | Níveis |
| --- | --- |
| [`trilha-heranca-abstracao/`](trilha-heranca-abstracao/) | herança + `protected` → polimorfismo → classe abstrata + `require_once` |
| [`trilha-enum-interface/`](trilha-enum-interface/) | enum `ZoomMode` → interface `TemValor` (Despesas só aceita quem tem valor) → visibilidade assimétrica (`public private(set)`) |
| [`trilha-facade-adapter/`](trilha-facade-adapter/) | Adapter (tomada 110→220) → Adapter (centavos→reais) → Facade (`PacoteViagem` esconde passagem + hotel + seguro) |
| [`pratica-sql/`](pratica-sql/) | SQLite + PDO, um script por ação: `CREATE` → `INSERT` → `SELECT` → `UPDATE` → `DELETE` (sem HTML) |
| [`modulo-3/`](modulo-3/) | 7 etapas até OO. **Nível 1** (3.3.1): cadastro de pessoa — form, CSS, combo de cidade, save (`INSERT`). Níveis 2–7: pasta + `ETAPA.txt` até o vídeo |

<details>
<summary>🇺🇸 English version</summary>
<br>

**Basics** — [`fundamentos/`](fundamentos/) — class, majority check, `private`, bank account, constructor promotion, `stdClass`.

**Relationships** — [`relacoes/`](relacoes/) — association, aggregation, composition.

**Trails** — inheritance → abstraction; enum → `TemValor` + Despesas → asymmetric visibility; Adapter → Facade; SQL CRUD on SQLite; module 3 level 1 person form (HTML + Postgres).

</details>

<br>

## Stack

<img src="https://skillicons.dev/icons?i=php" height="42" alt="PHP"/> <img src="https://skillicons.dev/icons?i=git" height="42" alt="Git"/> <img src="https://skillicons.dev/icons?i=github" height="42" alt="GitHub"/>
