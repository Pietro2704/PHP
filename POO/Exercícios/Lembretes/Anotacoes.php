<?php /*

  ENCAPSULAMENTO:

  É A TÉCNICA QUE FAZ COM QUE DETALHES INTERNOS
  DO FUNCIONAMENTO DOS MÉTODOS DE UMA CLASSE
  PERMANEÇAM OCULTOS PARA OS OBJETOS

-------------------------------------------------------------------------------------------------------------------------------------------

  HERANÇA:

  Árvore de Herança:

            ______A_______
           |      |       | 
         __AA   __AB__    AC__
        |      |      |       |
        AAA   ABA   ABB     ACA
               | 
          ABAA - ABAB

      Raíz: A
      Progenitora: Aquela que dá origem a outra
      Ancestral: A é ancestral de AAA
      Descendente: ACA é descendente de A
      Folhas: Não tem Filhos



    Tipos de Herança:
      - Herança de Implementação (mais probre)
      - Herança para Diferença



    Abstrato e Final:

    Classe Abstrata:
      Não pode ser instanciada. Só serve como progenitora
    Método Abstrato:
      Declarado, mas não implementado na progenitora.
    
    Classe Final:
      Não pode ser herdada por outra classe. Obrigatoriamente folha
    Método Final:
      Não pode ser sobrescrito pelas suas sub-classes. Obrigatoriamente herdado

-------------------------------------------------------------------------------------------------------------------------------------------

  POLIMORFISMO:

  POLI = muitos
    Morfo = forma

    Polimorfismo: 
      Permite que um mesmo nome represente vários comportamentos diferentes

    Assinatura do Método: 
      É a quantidade e os tipos de seus parâmetros

    Tipos de Polimorfismo
      1) Sobreposição -- mesma assinatura, classe diferente
      2) Sobrecarga -- assinatura diferente, mesma classe

    PHP NÃO SUPORTA O POLIMORFISMO DO TIPO SOBRECARGA, POIS NÃO É POSSÍVEL DECLARAR O TIPO DA VARÍAVEL
    PARA SUPRIR A NECESSIDADE, UTILIZAREMOS OUTRO JEITO

*/?>