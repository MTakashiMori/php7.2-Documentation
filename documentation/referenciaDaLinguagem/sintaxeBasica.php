<h1>Sintaxe Básica</h1>

<p>
A sintaxe base do <strong> PHP </strong> começa com a tag <strong>< ? php</strong> e termina com <strong> ?></strong>
</p>

<p>
A tag de php tambem pode ser <strong> < ?  ? > </strong><font color="red"> Não é recomendado, pois é possivel apenas 
    com configuraçao no php.ini, ou com a tag <strong>--enable-short-tags</strong></font>
</p>

<p>
A tag de fechamento pode ser omitida caso o arquivo seja um <strong>.php</strong>, e é recomendado, pelo buffer
</p>

<h3>Escapando o HTML</h3>

<p>
Tudo que estiver fora das tags php, sera <strong> ignorado pelo interpretador </strong>, e por isso o php pode
    ser escrito dentro das tags html, como :
<pre>
    < ? php 
        $a = 10;
        echo $a;
    ? >
</pre>

Irá imprimir: 10
</p>

<h3>Escapando o HTML usando Condições </h3>

no caso:
<pre>

    < ? php  if($expression == true) :  ? >
        ISTO SERA EXIBIDO CASO VERDADEIRO
    < ? php else : ? >
        CASO NÃO, ISSO APARECERÁ
    < ? php endif; ? >        

</pre>

<p> 
    No caso o php vai interpretar e 'escapar' oque for verdadeiro, e pular os blocos que forem falsos.
    <font color="red">Serve tambem para caso exista uma atribuição em um bloco falso</font>
</p>

<h3>Separação de instruções</h3>

<p>
    Como em outras linguagem, o PHP precisa de um <strong>ponto-e-virgula(;)</strong>
    <font color="red">O ponto e virgula pode ser omitido na presença de uma tag de fechamento php</font>
</p>

<h3>Comentários</h3>

<p><strong> //    </strong> -> uma linha</p>
<p><strong> /* */ </strong> -> multiplas linhas</p>
<p><strong> #     </strong> -> comentario estilo shell</p>

<h3>Operadores</h3>

<p>
    Um operador é algo que recebe um valor e retorna outro. Operadores podem ser agrupados segundo o numero de valores que aceitam
</p>

<p>
    UNÁRIOS -> Um valor, como '!'ou '++'
</p>

<p>
    BINÁRIOS -> Dois valores, como '+' ou '-'
</p>

<p>
    TERNÁRIOS -> Tres valores, existe apenas um exemplo '?:'
</p>

<font color="red">
*******Importante******* <h3>Precedência de operadores</h3> *******Importante*******
</font>

<p>
    1*3*5 é igual a 16, porque a <strong>multiplicação</strong> tem precedencia
</p>

<p>
    <strong>Parentesis</strong> podem ser usados para foca a precedencia, logo -> (1+5)*3 é igual a 18
</p>

<p>
    Operadores com a precedencia igual, como , 'X+Y+Z' e 'X-Y-Z', a <strong>associatividade</strong> decide como os operadores serao agrupados
</p>

<h3>Operações Aritiméticas</h3>

<p>
    Operações aritimeticas Basicas -> <br>
    Soma + <br>
    Subtração - <br>
    Multiplicação * <br>
    Divisão / <br>
</p>

<p>
    Operações aritimeticas não-tao-basicas -> <br>
    Resto % <br>
    $a(2) % $b(3) => 1 <br>
    $a(2) % $b(4) => 0 <br>

    <br>
    Exponencial **<br>
    $a(2)**$b(3) => 8 => 2 elevado a terceira potencia
</p>

