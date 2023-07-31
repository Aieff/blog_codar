<?php

  $posts = [
    [
      'id' => 1,
      'title' => 'Programando em PHP',
      'description' => 'Neste post você vai aprender tudo que precisa para ser um bom programador de PHP!',
      'tags' => ['programação', 'PHP', 'lógica de programação'],
      'img' => 'prog-1.jpg',
      'documentation' => 'PHP é um acrônimo recursivo para PHP: Hypertext Preprocessor (Pré-Processador de Hipertexto), que originalmente se chamava Personal Home Page (Página Inicial Pessoal).
      Ele também é um subconjunto de linguagens de scripts como JavaScript e Python. A diferença é que PHP costuma ser mais usado para comunicação do lado do servidor (back-end). 
      Enquanto isso, JavaScript pode ser usado tanto para o front-end quanto para o back-end – e Python é apenas para o lado do servidor (back-end).
      Parece confuso? É por isso que precisamos primeiramente entender sobre linguagens de script antes de mergulhar de maneira profunda no PHP.<br><br>
      Uma linguagem de script serve para automatizar a execução de tarefas num ambiente de tempo de execução especial. Isso inclui dizer para uma página estática (construída com HTML e CSS) para executar ações específicas com regras que você definiu anteriormente.
      Por exemplo, você pode usar um script para validar uma forma de garantir que todos os campos de um formulário foram preenchidos antes que eles sejam enviados de volta para o servidor.
      O script, então, iria rodar e checar todos os campos quando um usuário enviar o formulário. Se um deles estiver vazio, um texto de alerta seria exibido para informar o usuário disso.
      Outros usos comuns de linguagens de script incluem mostrar um efeito de menu drop-down quando o cursor do mouse é passado sobre o menu principal, exibir botões de rolagem e animações, abrir caixas de diálogo, e assim em diante.'
    ],
    [
      'id' => 2,
      'title' => 'Orientação a Objetos com Java',
      'description' => 'Aprenda o paradigma de orientação a objetos com Java, uma linguagem em alta no mercado.',
      'tags' => ['Java', 'OOP', 'Programação Avançada'],
      'img' => 'prog-2.jpg',
      'documentation' => 'Programas grandes são difíceis de manter – por isso, é um bom hábito separá-los em unidades mais ou menos isoladas. Em Java, isso é feito utilizando objetos, que são compostos por atributos e métodos definidos a partir de classes, que por sua vez são organizadas em pacotes. Esses conceitos são tão centrais em Java que não se pode programar na linguagem sem utilizá-los.
      Todo programa em Java usa classes e objetos, e compreender esses conceitos é fundamental para compreender a própria linguagem. Na prática, sistemas de software reais são grandes e precisam ser fatorados em partes relativamente independentes para serem viáveis. Como em Java isso é feito com classes e objetos, compreendê-los é imprescindível para escrever qualquer programa significativo.<br><br>
      Antigamente, os programas de computador eram escritos como uma série de instruções, como receitas culinárias: dados os “ingredientes” (arquivos no disco, interfaces de rede, memória, ciclos do processador etc.), uma série de passos era seguida. A semelhança era tão notável que várias linguagens de programação exigiam que os “ingredientes” do programa (variáveis, arquivos etc.) fossem reservados antes de se escrever o “modo de preparo”.<br><br>
      Esta abordagem era ineficiente para grandes programas, com muitas de funcionalidades. Para tentar solucionar isso, uma maneira diferente de programar foi proposta: os softwares não seriam mais vistos apenas como instruções alterando recursos, mas sim como vários pedaços, pequenos softwares trabalhando em conjunto para alcançar o objetivo. Os programas não seriam mais pensados como receitas, mas sim como carros e empresas: várias peças, relativamente independentes e fáceis de trocar, exerceriam tarefas complicadas isoladamente, sendo coordenadas de modo que o resultado final fosse uma máquina fácil de dirigir, ou uma organização eficiente. Assim como o operário que põe o motor na carroceria não precisa compreender seu funcionamento interno, e a secretária não precisa saber dos detalhes do setor de marketing, o programador poderia se concentrar em uma parte do programa, sabendo que as outras partes poderiam ser escritas depois, ser feitas por outros programadores ou até mesmo compradas. O “programa como uma receita” ainda estaria nessas partes (assim como o motor do carro segue uma série de passos, e o funcionário uma série de procedimentos), mas essas “receitas” seriam menores, mais fáceis de entender, alterar e substituir, podendo haver em uma só parte vários “modos de preparo”.
      O primeiro método é chamado programação estruturada e ainda hoje é usado. Entretanto, o segundo modo se tornou popular e preferido de vários programadores e organizações. É chamado programação orientada a objetos e é desse modo que se programa em Java.'
    ],
    [
      'id' => 3,
      'title' => 'A importância da lógica de programação',
      'description' => 'A lógica de programação é o ponto inicial de muitos estudantes de programação, será que é importante?',
      'tags' => ['lógica', 'programação', 'algoritmos'],
      'img' => 'prog-3.jpg',
      'documentation' => 'A lógica de programação é a capacidade que todo programador precisa ter para resolver os problemas que aparecem no dia-a-dia. A capacidade de dividir o problema em partes menores é uma etapa essencial da lógica de programação e precisa ser levada em consideração quando nos deparamos com qualquer exercício/desafio. É nesse ponto que entra o conceito de algoritmo, descrito, geralmente, como uma sequência lógica de ações capaz de resolver um problema.<br><br>
      A representação de algoritmos pode ser feita de várias formas; a que mostramos na Código 2 é uma delas. Entretanto, essa opção não possui nenhum tipo de regra mais formal, o que faz com que esteja um pouco distante da programação propriamente dita. Para aproximar um pouco mais os dois conceitos, o pseudocódigo foi criado (um dos exemplos de pseudocódigo mais conhecidos no Brasil é o Portugol). Além dele, podemos encontrar várias opções. O objetivo de todos, no entanto, é um só: criar um código que se aproxime do que será visto em linguagens de programação como C, C# ou Java.'
    ],
    [
      'id' => 4,
      'title' => 'Ajax (Asynchronous Javascript and XML)',
      'description' => 'É uma técnica javascript que utiliza o método XMLHttpRequest para fazer requisições assíncronas.',
      'tags' => ['programação', 'Javascript', 'lógica de programação', 'Jquery'],
      'img' => 'prog-4.jpg',
      'documentation' => 'AJAX, acrônimo de Asynchronous JavaScript and XML, é uma técnica de desenvolvimento Web que permite a criação de aplicações mais interativas. Um dos principais objetivos é tornar as respostas das páginas Web mais rápidas pela troca de pequenas quantidades de informações com o servidor Web, nos bastidores.
      Além disso, evita-se que a página Web inteira tenha que ser recarregada cada vez que alguma nova informação precisa ser consultada no servidor. Em geral, isso significa que páginas Web com recursos AJAX permitem maior interatividade, velocidade de processamento e usabilidade.
      Este é o primeiro de uma série de artigos sobre ASP.NET AJAX. O objetivo deste primeiro artigo é apresentar os bastidores do AJAX, independente do framework ASP.NET AJAX da Microsoft.   
      A idéia é fornecer uma base consistente de como trabalhar com várias das tecnologias usadas no AJAX para desenvolver uma infra-estrutura que permita criar aplicações Web mais interativas.<br><br>
      Os artigos posteriores estarão focados nas funcionalidades do framework gratuito ASP.NET AJAX, que foi disponibilizado pela Microsoft como uma extensão ao ASP.NET 2.0. Os leitores que entenderem os conceitos apresentados neste artigo, terão um domínio maior sobre o que acontece nos bastidores do framework ASP.NET AJAX, como em qualquer outro framework AJAX.'
    ],
  ];