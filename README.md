# PHP Code Style

Uma biblioteca criada para facilitar a adoção e manutenção do code style em projetos PHP da Vale Saúde.

## Como utilizar

1. Instale a biblioteca utilizando `composer require valesaude/php-code-style`
2. Crie os arquivos de configuração de cada ferramenta (`.phpcs.xml` e `.php-cs-fixer.php`). Opcionalmente, utilize como base os arquivos `.phpcs.xml.example` e `.php-cs-fixer.php.example`.
3. Configure sua IDE/editor e/ou execute-as referenciando os respectivos arquivos de configuração, por exemplo: `vendor/bin/phpcs --standard=.phpcs.xml some-file.php`
