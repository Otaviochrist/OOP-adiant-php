<div align="center">

# OOP em PHP · Adianti

[![PHP](https://img.shields.io/badge/PHP-8.5-8866C4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![Progresso](https://img.shields.io/badge/Módulo-3%20%2F%208-8866C4?style=for-the-badge)](#exercícios)
[![Adianti](https://img.shields.io/badge/Adianti-Framework-8866C4?style=for-the-badge)](https://www.adianti.com.br/)

<br>

Caderno de exercícios de **Orientação a Objetos em PHP**, preparação para o Adianti Framework.

> *Um conceito por vez — do `new` até `enum`, `interface`, Adapter, Facade e SQL no terminal.*

</div>

<br>

## Sobre

Exercícios práticos no terminal (`php arquivo.php`), no ritmo do curso de POO. Ainda **sem** o framework no código: classe, visibilidade, relações, herança, polimorfismo, abstração, enum, interface, padrões (Adapter, Facade) e SQL (SQLite + PDO) antes do HTML do módulo 3.

<details>
<summary>🇺🇸 English version</summary>
<br>

Hands-on OOP drills on the CLI, following the PHP course toward Adianti. No framework yet — classes, visibility, relationships, inheritance, polymorphism, abstraction, enums, interfaces, Adapter, Facade, and terminal SQL (SQLite + PDO).

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

<details>
<summary>🇺🇸 English version</summary>
<br>

**Basics** — [`fundamentos/`](fundamentos/) — class, majority check, `private`, bank account, constructor promotion, `stdClass`.

**Relationships** — [`relacoes/`](relacoes/) — association, aggregation, composition.

**Trails** — inheritance → abstraction; enum → `TemValor` + Despesas → asymmetric visibility; Adapter → Facade; SQL CRUD on SQLite.

</details>

<br>

## Stack

<img src="https://skillicons.dev/icons?i=php" height="42" alt="PHP"/> <img src="https://skillicons.dev/icons?i=git" height="42" alt="Git"/> <img src="https://skillicons.dev/icons?i=github" height="42" alt="GitHub"/>
