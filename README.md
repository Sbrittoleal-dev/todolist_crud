# todolist_crud
Descrição do projeto: lista de tarefas CRUD que pode ser editada, permite exclusão de tarefas e marcação de "tarefa feita"

Tecnologias utilizadas: PHP, HTML, CSS, JavaScript, MySQL.

Como executar o projeto:
Xampp:
    Primeiramente, fazer download e instalar o pacote Xampp, para rodar a aplicação;
    Ativar os servidores Apache e MySQL do painel do Xampp;
    Executar os comandos do arquivo mysqlscript.txt (incluso neste projeto) utilizando sua ferramenta de preferência ou o próprio adm do MySQL do Xampp.
Clonagem do repositório no Github:
    Preferencialmente deve ser clonado pelo programa do Github para desktop.
    Em caso da preferência do uso da linha de comando, seguir o tutorial oficial detalhado no link a seguir: https://docs.github.com/pt/repositories/creating-and-managing-repositories/cloning-a-repository
    Os arquivos locais do projeto clonado devem ficar na pasta "htdocs" do servidor do Xampp

Funcionalidades implementadas: A lista cria tarefas, com a possibilidade de adicionar descrição, e com a possibilidade de marcar como feito. Tarefas podem ser excluídas, editadas e também é possível procurar uma tarefa na barra de pesquisa.

Linha de pensamento: A montagem do search.js foi a mais desafiadora, porque pedia uma lógica um tanto diferente daquela que estou estudando no momento (python). Conectar ao banco de dados também trouxe algum desafio, porque não entendia onde estavam os problemas a princípio.