<h1>🔐 Keyper - Sistema de Administração de Chaves</h1>
<p>Aplicação web desenvolvida em CodeIgniter 4 com ambiente totalmente containerizado utilizando Docker Compose, criada para auxiliar no controle e administração de chaves de portas dentro de empresas, condomínios ou instituições.</p>
<p>O sistema permite registrar usuários, empregados e chaves, além de acompanhar a movimentação das chaves através de relatórios completos.</p>

<h2>🚀 Funcionalidades</h2>
✅ Cadastro de usuários do sistema</br>
✅ Cadastro de empregados</br>
✅ Cadastro de chaves</br>
✅ Controle de retirada e devolução de chaves</br>
✅ Registro de qual usuário retirou determinada chave</br>
✅ Histórico de qual chave foi retirada por qual usuário</br>
✅ Relatórios gerenciais:</br>
<ol>
   <li>⭐ Relatório de chaves</li>
   <li>⭐Relatório de empregados</li>
   <li>⭐Histórico de movimentação de chaves</li>
</ol>

<h2>🧱 Tecnologias Utilizadas</h2>
<ul>
   <li>PHP 8+</li>
   <li>CodeIgniter 4</li>
   <li>MySQL / MariaDB</li>
   <li>Docker</li>
   <li>Docker Compose</li>
</ul>

<h2>🐳 Ambiente Docker</h2>
<p>A aplicação roda completamente via containers.</p>
<h3>Portas utilizadas</h3>
<p><b>|   Serviço	   | Porta  | Descrição        |</b></p>
<p>Aplicação Web	|  3000	| Acesso ao sistema</p>
<p>Banco de Dados |	3305	| MySQL/MariaDB</p>

<h2>⚙️ Instalação</h2>
<ol>
   <li>Clonar o repositório => git clone https://github.com/leonardomarcatti/keyper.git</li>
   <li>docker compose up -d --build</li>
   <li>Acessar a aplicação => http://ip:3000</li>
</ol>
 
<h2>🗄️ Banco de Dados</h2>
<p>O banco estará disponível em:</p>
<p>Host: localhost Porta: 3305</p>
<p>As credenciais podem ser consultadas no arquivo docker-compose.yml</p>

<h2>📊 Funcionamento do Sistema</h2>
<p>O fluxo principal da aplicação funciona da seguinte forma:</p>
<p>Usuários são cadastrados no sistema.</p>
<p>Empregados são registrados.</p>
<p>As chaves são cadastradas e vinculadas às portas.</p>
<p>Um usuário registra a retirada de uma chave.</p>
<p>O sistema mantém o histórico completo da movimentação.</p>
<p>Relatórios permitem auditoria e controle administrativo.</p>

<h2>📁 Estrutura do Projeto</h2>

├── app/<br/>
├── public/<br/>
├── writable/<br/>
├── docker/<br/>
├── docker-compose.yml<br/>
└── README.md<br/>

<h2>🔒 Objetivo do Projeto</h2>
<p>Este sistema foi desenvolvido para melhorar o controle físico de acessos, evitando perda de chaves, falta de rastreabilidade e dificuldades na identificação de responsáveis.</p>

<h2>📌 Melhorias Futuras</h2>
<p>Controle de permissões por nível de usuário</p>
<p>Dashboard com indicadores</p>
<p>Notificações de atraso na devolução</p>
<p>API REST pública</p>
<p>Auditoria avançada</p>
<h2>👨‍💻 Autor</h2>
<p>Projeto desenvolvido para fins de organização administrativa e estudo prático utilizando CodeIgniter 4 e Docker.</p>
<h2>📄 Licença</h2>
<p>Este projeto está sob licença MIT.</p>
<p>Sinta-se livre para usar e modificar.</p>
