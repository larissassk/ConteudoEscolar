# Sequência de Fibonacci
A sequência de Fibonacci é uma sequência numérica em que cada termo a partir do terceiro é a soma dos dois antecessores. O primeiro termo da sequência de Fibonacci é o número 1 e o segundo termo também é o número 1. O terceiro termo é 2, pois 1+1=2. Já o quarto termo é 3, pois 1+2=3. E assim sucessivamente.
## código PHP 

Função fibonacci($n): Esta função é responsável por gerar a sequência de Fibonacci com os primeiros n termos. Ela recebe um parâmetro $n que indica quantos termos da sequência devem ser gerados.

Verificação dos casos base:

Se $n for 0, a função retorna um array vazio, pois não há termos para gerar.
Se $n for 1, a função retorna um array contendo apenas o número 1, pois é o primeiro termo da sequência de Fibonacci.
Se $n for 2, a função retorna um array contendo os dois primeiros termos da sequência (1 e 1).
Cálculo recursivo:

Para $n maior que 2, a função chama a si mesma de forma recursiva para calcular os termos anteriores da sequência. Ou seja, ela calcula fibonacci($n - 1) para obter a sequência até o termo anterior ao último.
Em seguida, calcula o próximo termo da sequência somando os dois últimos termos obtidos na chamada recursiva. Isso é feito pegando o último elemento do array retornado pela chamada recursiva (end($fibonacci_sequence)) e o penúltimo elemento (prev($fibonacci_sequence)).
O próximo termo é então adicionado ao final do array que contém a sequência.
Retorno:

A função retorna o array contendo os primeiros n termos da sequência de Fibonacci.
Entrada do usuário e exibição do resultado:

O usuário é solicitado a inserir o número de termos da sequência de Fibonacci que deseja gerar.
A função fibonacci($n) é chamada com o valor inserido pelo usuário, e a sequência gerada é armazenada na variável $fib_sequence.
Os termos da sequência são então exibidos na tela usando um loop foreach.