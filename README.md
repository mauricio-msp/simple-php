![logo - simple-php - github](https://cloud.githubusercontent.com/assets/13602785/26530140/4f0a0372-43a5-11e7-8d9b-80e102fbc6bc.png)

# Sobre o simple-php

### Aplicação open-source, simples e rápida com PHP 7

simple-php é uma aplicação voltada para projetos com um grau de complexidade baixo e que não requer muitos recursos que uma framework disponibiliza. Ela tem as principais funcionalidades que um projeto web possui basicamente, tais como:

- Gerenciamento de rotas (utilizando url amigável)
- Padronização do layout do código
- Fácil conexão com o banco de dados
- Praticidade no manuseio dos dados

# Instalação

É recomendável que você use o [Composer](https://getcomposer.org) para instalar o simple-php.

```
$ composer create-project mauricio-msp/simple-php [my-app-name] --prefer-dist
```

O simple-php vai instalar todas as dependências necessárias e arquivos necessários.

# Após a instalação

Você deve configurar dois arquivos para que não haja erros em sua aplicação.

###### vendor/mauricio-msp/routing/src/Http/View.php

``` php 
<?php

    // Deverá fazer a seguinte alteração nesse trecho do código

    public function render($view, array $data = []) {
        $this->loader = new \Twig_Loader_Filesystem(dir['views']);
        $this->twig   = new \Twig_Environment($this->loader);
        
        return $this->twig->render($view, $data);
    }
    
    // Adicionar o diretório onde estarão as views da sua aplicação usando o dir['views']
```

###### vendor/mauricio-msp/routing/src/Routing/Route.php

``` php 
<?php

    // Deverá fazer a seguinte alteração nos trechos do código

    public function get($path = '*', $callback = NULL) {
       // Linha 28
       $controller = 'app\\controllers\\' . $params[0];
    }
    
    public function post($path = '*', $callback = NULL) {
       // Linha 46
       $controller = 'app\\controllers\\' . $params[0];
    }
    
    public function put($path = '*', $callback = NULL) {
       // Linha 64
       $controller = 'app\\controllers\\' . $params[0];
    }
    
    public function delete($path = '*', $callback = NULL) {
       // Linha 82
       $controller = 'app\\controllers\\' . $params[0];
    }
    
    // Adiocionar o namespace de acordo com a aplicação do simple-php
```

# Para mais informações 

Visite [mauricio-msp/routing](https://github.com/mauricio-msp/routing).

# Licença

O simple-php é uma aplicação open-source licenciado sob a [licença MIT](https://opensource.org/licenses/MIT).




