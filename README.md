🔐 Sistema de Administração de Chaves — CodeIgniter 4 + Docker

Aplicação web desenvolvida em CodeIgniter 4 com ambiente totalmente containerizado utilizando Docker Compose, criada para auxiliar no controle e administração de chaves de portas dentro de empresas, condomínios ou instituições.

O sistema permite registrar usuários, empregados e chaves, além de acompanhar a movimentação das chaves através de relatórios completos.

🚀 Funcionalidades

✅ Cadastro de usuários do sistema
✅ Cadastro de empregados
✅ Cadastro de chaves
✅ Controle de retirada e devolução de chaves
✅ Registro de qual usuário retirou determinada chave
✅ Histórico de qual chave foi retirada por qual usuário
✅ Relatórios gerenciais:

Relatório de chaves

Relatório de empregados

Histórico de movimentação de chaves

🧱 Tecnologias Utilizadas

PHP 8+

CodeIgniter 4

MySQL / MariaDB

Docker

Docker Compose

Apache/Nginx (container web)

🐳 Ambiente Docker

A aplicação roda completamente via containers.

Portas utilizadas
Serviço	Porta Host	Descrição
Aplicação Web	3000	Acesso ao sistema
Banco de Dados	3305	MySQL/MariaDB
⚙️ Instalação
1️⃣ Clonar o repositório
git clone https://github.com/leonardomarcatti/keyper.git
cd seu-repositorio
2️⃣ Subir os containers

Execute na raiz do projeto:

docker compose up -d --build
3️⃣ Acessar a aplicação

Abra no navegador:

http://ip:3000
🗄️ Banco de Dados

O banco estará disponível em:

Host: localhost
Porta: 3305

As credenciais podem ser consultadas no arquivo:

docker-compose.yml
📊 Funcionamento do Sistema

O fluxo principal da aplicação funciona da seguinte forma:

Usuários são cadastrados no sistema.

Empregados são registrados.

As chaves são cadastradas e vinculadas às portas.

Um usuário registra a retirada de uma chave.

O sistema mantém o histórico completo da movimentação.

Relatórios permitem auditoria e controle administrativo.

📁 Estrutura do Projeto
/
├── app/
├── public/
├── writable/
├── docker/
├── docker-compose.yml
└── README.md
🧪 Comandos Úteis
Parar containers
docker compose down
Ver logs
docker compose logs -f
Acessar container da aplicação
docker compose exec app bash
🔒 Objetivo do Projeto

Este sistema foi desenvolvido para melhorar o controle físico de acessos, evitando perda de chaves, falta de rastreabilidade e dificuldades na identificação de responsáveis.

📌 Melhorias Futuras

Controle de permissões por nível de usuário

Dashboard com indicadores

Notificações de atraso na devolução

API REST pública

Auditoria avançada

👨‍💻 Autor

Projeto desenvolvido para fins de organização administrativa e estudo prático utilizando CodeIgniter 4 e Docker.

📄 Licença

Este projeto está sob licença MIT.
Sinta-se livre para usar e modificar.