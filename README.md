# 📌 Sistema de Controle de Acesso - ETEC Prof. Elias Miguel Junior

## 📖 Sobre o Projeto

Este projeto foi desenvolvido para a **ETEC Prof. Elias Miguel Junior** com o objetivo de modernizar e otimizar o **registro digital de entrada e saída de professores e funcionários**. O sistema permite:

- **Registro de acessos** de professores e funcionários.
- **Geração de relatórios** detalhados para acompanhamento e auditoria.
- **Facilidade no monitoramento** de presença para atender eventuais solicitações da supervisão.
- **Automação e segurança** na gestão de acessos da instituição.

O projeto foi desenvolvido utilizando tecnologias modernas e frameworks robustos para garantir **eficiência, segurança e escalabilidade**.

---

## 🚀 Tecnologias Utilizadas

O sistema foi construído com as seguintes tecnologias:

- **SQL** - Banco de dados para armazenamento seguro dos registros.
- **HTML, CSS, Bootstrap** - Construção da interface web responsiva e amigável.
- **JavaScript (JS)** - Implementação de interatividade e dinamismo no sistema.
- **PHP** - Lógica do servidor para manipulação dos dados e requisições.
- **Laravel** - Framework PHP para garantir organização, segurança e escalabilidade no backend.

---

## ⚙️ Funcionalidades Principais

✅ **Cadastro de Usuários**: Permite o registro de professores e funcionários no sistema.

✅ **Registro de Entrada e Saída**: Cada acesso é armazenado de forma segura para consultas futuras.

✅ **Autenticação Segura**: Controle de acesso por meio de credenciais únicas.

✅ **Geração de Relatórios**: Relatórios completos para a supervisão acompanhar horários e ocorrências.

✅ **Interface Responsiva**: Desenvolvido com **Bootstrap** para garantir compatibilidade com diversos dispositivos.

✅ **Segurança e Performance**: Utilização das melhores práticas para garantir proteção de dados e eficiência no processamento.

---

## 📌 Como Configurar o Projeto

### 📥 Pré-requisitos
Antes de iniciar, certifique-se de ter os seguintes requisitos instalados:

- **PHP (>=8.1)**
- **Composer**
- **MySQL ou MariaDB**
- **Laravel CLI**
- **Servidor Apache ou Nginx**
- **Node.js & NPM** (Para gerenciar dependências frontend)

### 🔧 Passo a Passo
1. Clone o repositório:
   ```sh
   git clone https://github.com/seuusuario/nome-do-repositorio.git
   cd nome-do-repositorio
   ```
2. Instale as dependências do Laravel:
   ```sh
   composer install
   ```
3. Configure o arquivo **.env** com as credenciais do banco de dados:
   ```sh
   cp .env.example .env
   ```
4. Gere a chave do aplicativo:
   ```sh
   php artisan key:generate
   ```
5. Execute as migrações e popule o banco de dados:
   ```sh
   php artisan migrate --seed
   ```
6. Inicie o servidor local:
   ```sh
   php artisan serve
   ```

Agora, o sistema estará rodando em **http://localhost:8000** 🎉

---

## 🛠️ Estrutura do Projeto

📂 **/app** - Código backend com lógica de autenticação, controllers e models.

📂 **/resources/views** - Views em Blade para renderização frontend.

📂 **/public** - Arquivos estáticos como CSS, JS e imagens.

📂 **/database** - Migrations e seeds para gerenciamento do banco de dados.

📂 **/routes** - Definições das rotas para o fluxo do sistema.

📂 **/config** - Arquivos de configuração do Laravel.

---

## 🏆 Diferenciais do Projeto

✅ **Utilização do Laravel** para um backend robusto e seguro.

✅ **Autenticação e Controle de Acesso** eficiente para professores e funcionários.

✅ **Geração de Relatórios** em tempo real para otimização da gestão escolar.

✅ **Design Responsivo** para uso em qualquer dispositivo.

✅ **Código Limpo e Modular** facilitando manutenção e escalabilidade.

---

## 📢 Contato
Caso tenha dúvidas, sugestões ou interesse em colaborar, entre em contato:

📧 **Email:** leonardoortizalves@gmail.com

🔗 **GitHub:** [github.com/seuusuario](https://github.com/leon14789)

📌 **LinkedIn:** [linkedin.com/in/seuusuario](https://www.linkedin.com/in/leonardo-alves-4691b2269/)

---

### ⭐ Se gostou do projeto, não se esqueça de dar um **star** no repositório!
```sh
git star https://github.com/Leon14789/EtecAccessControl
```
🚀 **Vamos construir algo incrível juntos!** 🚀

