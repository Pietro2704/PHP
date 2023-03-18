<?php 
/*
-------------------------------------------------------------------------------------------------------------------------------------------
  (EAGS - 2009)

  1) Assinale a alternativa incorreta com relação ao conceito de classe e objeto em Programação Orientada a Objeto:

 -- a) Uma classe é uma instância de um objeto
    b) Um objeto é uma construção de software que encapsula estado e comportamento
    c) Uma classe define atributos e comportamentos compartilhados por um tipo de objeto
    d) Em uma linguagem POO pura, tudo é um objeto, desde os tipos mais básicos



  2) Assinale a alternativa incorreta sobre a definição de termos usados em POO:

    a) Uma variável interna é um valor mantido dentro do objeto
    b) Atributos são características de uma classe vísiveis externamente
 -- c) Comportamento são as características de uma classe invisíveis externamente
    d) O estado de um objeto é o significado combinado das variáveis internas do objeto

-------------------------------------------------------------------------------------------------------------------------------------------
  (EAGS - 2010)

  1) A maioria das linguagens orientadas a objeto suporta quais níveis de acesso?

    a) Secreto, Público e Primário
 -- b) Público, Protegido e Privado
    c) Público, Protegido e Primário
    d) Público, Privado e Secundário



  2) Entende-se por método abstrato um método:

 -- a) Declarado, mas não implementado
    b) Declarado e implementado
    c) Não declarado, mas implementado
    d) Não declarado e não implementado



  3) Informe se é falso ou verdadeiro o que se afirma sobre o conceito de HERANÇA da POO

    () A herança permite basear uma nova classe na definição de outra classe
    () Não se pode sobrepor um comportamento de uma superclasse em uma subclasse
    () Com o mecanismo de herança, é possível estabelecer relacionamentos "é um" entre classes

    a) V, V, F
--  b) V, F, V
    c) V, V, V
    d) F, F, V

-------------------------------------------------------------------------------------------------------------------------------------------
  (EAGS - 2011)

  1) No contexto dos níveis de acesso, selecione a alternativa que contém o nível que apenas garante o acesso para aquele objeto e suas subclasses:

    a) Público
 -- b) Protegido
    c) Privado
    d) Oculto



  2) _____ é a característica da POO que permite separar o programa em várias partes menores e independentes. Cada parte possui implementação isolada e realiza seu trabalho de forma autônoma.
  Com essa característica é possível ocultar os detalhes internos de cada parte através de uma interface.

    a) Herança
    b) Hierarquia
    c) Polimorfismo
 -- d) Encapsulamento



  3) Observe o diagrama a seguir e assinale a alternativa correta, no que diz respeito a classe DecimalFormat

            Format
              |
      ___NumberFormat___
     |                  | 
  ChoiceFormat    DeciamlFormat   

    a) Qualquer classe dada será ascendente de format
 -- b) DecimalFormat é descendente de Format
    c) DecimalFormat é anscestral de Format
    d) ChoiceFormat é filha de DecimalFormat

-------------------------------------------------------------------------------------------------------------------------------------------
  (EAGS - 2012)

  1) Correlacione as colunas e assinale a alternativa que contém a sequência 

    (1) Atributo                    () Ação executada por um objeto
    (2) Classe                      () Define os atributos e comportamentos comuns
    (3) Comportamento               () Característica de uma classe que é visível
    (4) Domínio                     () Contrução de um software que encapsula estado e comportamento
    (5) Objeto                      () Espaço onde o problema reside

    a) 3, 2, 4, 5, 1
 -- b) 3, 2, 1, 5, 4
    c) 2, 3, 1, 5, 4
    d) 2, 4, 3, 1, 5

-------------------------------------------------------------------------------------------------------------------------------------------
  (EAGS - 2013)

  1) Correlacione as colunas e assinale a alternativa que contém a sequência 

    (1) Construtor                  () Métodos que dão acesso a dados internos
    (2) Acessor                     () Define as diferentes espécies de valores que podem ser usados
    (3) Mutantes                    () Métodos que permitem que se altere o estado de um objeto
    (4) Tipos                       () Métodos usados para inicializar objetos durante a instanciação

    a) 1, 2, 3, 4
    b) 2, 4, 1, 3
 -- c) 2, 4, 3, 1
    d) 4, 2, 3, 1



  2) Correlacione as colunas e assinale a alternativa que contém a sequência

    (1) Classe                      () Define o que uma entidade pode fazer com o objeto
    (2) Interface                   () Instanciação de uma classe
    (3) Construtor                  () Define os atributos e os comportamentos compartilhados
    (4) Objeto                      () Utilizado para inicializar objetos

    a) 1, 2, 4, 3
    b) 1, 4, 2, 3
    c) 2, 3, 1, 4
 -- d) 2, 4, 1, 3

-------------------------------------------------------------------------------------------------------------------------------------------
  (EAGS - 2014)

  1) Quais são os três pilares da Programação Orientada a Objeto?

    a) Herança, Polimorfismo e Instância
    b) Herança, Polimorfismo e Metodologia
 -- c) Encapsulamento, Herança e Polimorfismo
    d) Encapsulamento, Polimorfismo e Metodologia

-------------------------------------------------------------------------------------------------------------------------------------------
  (EAGS - 2015)

  1) A programação orientada a objeto se preocupa em produzir software que tenha as seguintes características:

 -- a) Natural, Confiável, Reutilizável, Manutenível, Extensível e Oportuno
    b) Natural, Mensurável, Manutenível, Instantâneo, Acessível e Confiável
    c) Confiável, Reutilizável, Extensível, Mensurável, Acessível e Fácil de Usar
    d) Extensível, Natural, Mensurável, Reutilizável, Instantâneo e Simples

-------------------------------------------------------------------------------------------------------------------------------------------
  (EAGS - 2016)

  1) Ao programar em PHP Orientado a Objeto e declarar uma classe com a palavra-chave final, conforme o código abaixo, pode-se afirmar que:

    <?php
      final class ClasseA{

      }
    ?>

    a) As subclasses de ClasseA não herdarão seus métodos
    b) A ClasseA não poderá ser instânciada
 -- c) A ClasseA não poderá ter subclasses
    d) A ClasseA não poderá ter métodos
  


  2) Marque a alternativa que completa corretamente a lacuna.

    Ao programar em PHP, utilizando-se o paradigma de orientação a objeto, utiliza-se o símbolo _____ para poder acessar as funções definidas em uma classe

    a) .
    b) >
    c) =>
 -- d) ->

-------------------------------------------------------------------------------------------------------------------------------------------
  (CAP-PD - 2006)

  1) Uma casa está para uma planta arquitetônica assim como um objeto está para:

    a) Um método
    b) Uma propriedade
 -- c) Uma classe
    d) Um atributo

-------------------------------------------------------------------------------------------------------------------------------------------
  (CAP-PD - 2007)

  1) Em relação à POO, assinale a opção correta

    a) Os membros private de uma superclasse são herdados pelas subclasses
    b) Um método public da superclasse pode tornar-se um método protected ou private na subclasse
    c) Um método protected da superclasse pode tornar-se um método private da subclasse
 -- d) Utilizar acesso protected oferece um nível intermediario entre public e private

-------------------------------------------------------------------------------------------------------------------------------------------
  (CAP-PD - 2009)

  1) A proteção de atributos e operações das classes, fazendo com que estas se comuniquem com o meio externo por meio de suas interfaces, define o conceito de:

    a) Polimorfismo
 -- b) Encapsulamento
    c) Herança
    d) Agregação



  2) Quando se utiliza o conceito de encapsulamento da POO, enquanto a _____ define os detalhes internos do componente, a _____ lista os serviços fornecidos por ele

    a) Interface - Implementação
    b) Classe - Implementação
    c) Interface - Classe
 -- d) Implementação - Interface

-------------------------------------------------------------------------------------------------------------------------------------------
  (CAP-PD - 2010)

  1) Uma das formas de reutilização de um software é a criação de uma classe que absorve membros de outra classe ja existente.
  A nova classe é aprimorada com capacidades novas ou modificadas.

    a) Recursão
 -- b) Herança
    c) Orientação a aspesctos
    d) Chamada por parâmetros

-------------------------------------------------------------------------------------------------------------------------------------------
  (CAP-PD - 2014)

  1) Qual é o conceito de POO que significa representar uma entidade, incluindo apenas seus atributos mais relevantes?

    a) Encapsulamento
    b) Polimorfismo
    c) Herança
 -- d) Abstração



  2) Com relação aos conceitos de POO, assinale a alternativa incorreta

    a) Classes são tipos abstratos de dados
    b) Objetos são instâncias de uma classe
    c) Subclasse é uma classe definida por meio de outra classe
 -- d) Atributos são subprogramas que definem as operações em objetos de uma classe
 
-------------------------------------------------------------------------------------------------------------------------------------------

  (CAP-PD - 2016)

  1) Segundo Deitel (2010), com relação a Linguagem de Programção JAVA, é correto afirmar que:

    a) Um construtor pode ter um nome diferente de sua classe
 -- b) O compilador fornece um construtor padrão sem parâmetros em qualquer classe que não inclui explicitamente um construtor
    c) Se uma classe não incluir um construtor, as varíaveis de instância não são inicializadas
    d) não existe o conceito de construtor na linguagem JAVA


  2) Segundo Deitel (2010), fornecer uma superclasse apropriada a partir da qual outras classes podem herdar, e assim, compartilhar um design comum, é o propósito de:

    a) Um objeto
    b) Uma subclasse
 -- c) Uma classe abstrata
    d) Um construtor



  3) Segundo Deitel (2010), em POO, o conceito que permite escrever programas que processam objetos que compartilham a mesma superclasse
  (dereta e indiretamente) como se todos fossem objetos dessa superclasse, é conhecido como:

    a) Associação
 -- b) Polimorfismo
    c) Atributo
    d) Encapsulamento
    

*/
?>