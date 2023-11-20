# Hello World


## Instalação e configuração de Docker para criar um projeto Laravel

Roteiro realizado seguindo a OLW-3 (Open Laravel Week) em setembro de 2023, com Windows 10.




Seguir estas etapas da instalação manual do WSL:

https://learn.microsoft.com/pt-br/windows/wsl/install-manual

Eu instalei Ubuntu 22.04.



Instalar o Docker Desktop.

Reiniciar o computador.

OBS: nas configurações do Docker Desktop, pode ser necessário habilitar integração com o Ubuntu instalado, clicando em Resources, e WSL Integration.



Abrir o terminal do Ubuntu no windows, clicando em Iniciar e digitando ubuntu.

Na primeira vez que é executado, será solicitado para definir usuário e senha.



Rodar esse comando para criar o projeto com nome "olw3-app":

curl -s "https://laravel.build/olw3-app?with=mysql,mailpit,redis" | bash

Fonte: https://laravel.com/docs/10.x/installation#choosing-your-sail-services


OBS : deu erro "Docker is not running", quando tentei rodar sem antes abrir o Docker Desktop.


Demora alguns vários minutos até concluir, deve pedir novamente a senha de usuário definida no Ubuntu.

Após concluir, entrar na pasta do projeto "cd  olw3-app" e rodar este comando pra subir o "sail"

./vendor/bin/sail up

OBS: No video falaram em criar um alias para rodar o "sail", mas não vi como faz, e ele roda com um parametro -d.

OBS 2 : o parametro -d serve para não "travar o terminal", como se o comando fosse executado em segundo plano.

Depois de rodar esse comando, o Container com nome do projeto apareceu rodando no Docker Desktop, e você pode testar abrindo http://localhost/.




# Visual Studio Code

Para abrir a pasta do projeto no VSCode, eu criei uma Unidade de rede Z: mapeada para este caminho local

\\wsl$\Ubuntu-22.04

A pasta do projeto se encontra na pasta /home/user_name

Atualizando, para abrir a pasta do projeto no VSCode, basta rodar no terminal o seguinte comando:

code olw3-app



# git commands

git init

git add .

git commit -m "my first commit..."

-- Please tell me who you are

git config --global user.email "cybervoigt@gmail.com"

git config --global user.name "Ricardo Voigt"

git remote add origin https://github.com/cybervoigt/test_olw3.git

git push -u origin master


digitei username e o personal token na senha, e foi :-)






