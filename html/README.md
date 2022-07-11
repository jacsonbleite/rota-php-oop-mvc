# Gerenciador de rotas php

Trabalho realizado para estudo. É um gerenciador de rotas, que pode ser usado em qualquer projeto, php, independente do 'tanhamo'
Desenvolvido no padrão MVC, Orientado a Obejtos, no padrão PSR-4.

Projeto de fácil implementação podendo ser, facilmente, escalável.

## Utilizando o sistemas

#### Após clonar o projeto é necessário realizars os seguintes passos:

- Subir o container ``` docker-compose up ```
- Acessar o projeto ``` http://localhost ```

### Testando as Rotas 

As rotas disponíveis nesses projetos estão em: ``` routes/router.php ```

Para adicionar mais rotas insira no arra ``` $router``` no tipo de verbo HTTP que deseja
informando a rota seguido de uma arrow function, informando o método load('nome_do_controller, 'método_do_controller')

Importante, criar um controller para cada rota.

```
$router = [
    "GET"  => [
        "/" => fn() => load('HomeController', "index"),
        "/contact" => fn() => load('ContactController', "index")
    ],
    "POST" => [
        "/contact" => fn() => load('ContactController', "store")
    ],
];

```


