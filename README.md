<div align="center">

# OOP em PHP · Adianti

[![PHP](https://img.shields.io/badge/PHP-8.5-8866C4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![Progresso](https://img.shields.io/badge/Módulo-3%20%2F%208-8866C4?style=for-the-badge)](#exercícios)
[![Adianti](https://img.shields.io/badge/Adianti-Framework-8866C4?style=for-the-badge)](https://www.adianti.com.br/)

<br>

Caderno de exercícios de **Orientação a Objetos em PHP**, preparação para o Adianti Framework.

> *Um conceito por vez — do `new` até `enum`, `interface`, Adapter, Facade, SQL no terminal e o CRUD HTML do módulo 3.*

</div>

<br>

## Sobre

Exercícios práticos no ritmo do curso de POO. Ainda **sem** o framework no código: classe, visibilidade, relações, herança, polimorfismo, abstração, enum, interface, padrões (Adapter, Facade), SQL (SQLite + PDO) e o **módulo 3** (PHP + HTML + Postgres: CRUD no nível 1 em vários scripts; nível 2 junta ações; nível 3 separa o HTML em templates; nível 4 tira o SQL da página e deixa em funções; nível 5 junta essas funções na classe `Pessoa`).

<details>
<summary>🇺🇸 English version</summary>
<br>

Hands-on OOP drills following the PHP course toward Adianti. No framework yet — classes, visibility, relationships, inheritance, polymorphism, abstraction, enums, interfaces, Adapter, Facade, terminal SQL (SQLite + PDO), and module 3 (HTML CRUD + Postgres: SQL in functions at level 4, model class `Pessoa` at level 5).

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

Cadastro do módulo 3 (navegador). Copie `modulo-3/nivel-1/db.exemplo.php` para `db.php` e preencha o Postgres. O `db.php` **não** vai no Git. Os níveis 2 a 5 reusam esse arquivo (`require` do `nivel-1`). A conexão fica num `try`/`catch` de `PDOException`.

Na **raiz** do projeto:

```bash
php -S localhost:8000
```

- Nível 1 (um script por ação): `http://localhost:8000/modulo-3/nivel-1/pessoa_list.php`
- Nível 2 (form + lista): `http://localhost:8000/modulo-3/nivel-2/pessoa_list.php`
- Nível 3 (HTML em template): `http://localhost:8000/modulo-3/nivel-3/pessoa_list.php`
- Nível 4 (SQL em funções): `http://localhost:8000/modulo-3/nivel-4/pessoa_list.php`
- Nível 5 (classe `Pessoa`): `http://localhost:8000/modulo-3/nivel-5/pessoa_list.php`

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
| [`modulo-3/`](modulo-3/) | 7 etapas até OO. **Nível 1**: um script por ação. **Nível 2**: `pessoa_form.php` (inserir+editar) e `pessoa_list.php` (listar+excluir+reset via `?action=`). **Nível 3**: o mesmo fluxo, com HTML fora do PHP (`html/list.html`, `html/item.html`, `html/form.html`) e `str_replace` nas marcas `{nome}`, `{itens}`, `{cidades}`. **Nível 4**: o mesmo fluxo e os templates; o SQL sai para `funcoes.php` e a página só chama a função. **Nível 5**: essas funções viram métodos `static` da classe `Pessoa` (`Pessoa::getLinhas()` e os demais); a conexão trata `PDOException`. Níveis 6–7: pasta + `ETAPA.txt` até o vídeo |

<details>
<summary>🇺🇸 English version</summary>
<br>

**Basics** — [`fundamentos/`](fundamentos/) — class, majority check, `private`, bank account, constructor promotion, `stdClass`.

**Relationships** — [`relacoes/`](relacoes/) — association, aggregation, composition.

**Trails** — inheritance → abstraction; enum → `TemValor` + Despesas → asymmetric visibility; Adapter → Facade; SQL CRUD on SQLite; module 3 person CRUD (HTML + Postgres): level 1 separate scripts, level 2 fewer files (`?id=` / `?action=`), level 3 HTML templates with `str_replace`, level 4 SQL in functions (`funcoes.php`), level 5 model class `Pessoa` with `PDOException`.

</details>

<br>

## Stack

<img src="https://skillicons.dev/icons?i=php,html,css,postgres,sqlite,git,github" height="42" alt="PHP, HTML, CSS, Postgres, SQLite, Git, GitHub"/>
