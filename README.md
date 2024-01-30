# BETWISE-SYS 💵⚽

## Como Baixar e Instalar

Siga estas instruções para configurar e executar o projeto localmente no seu computador.

### Pré-requisitos

Certifique-se de ter o seguinte instalado em seu sistema:

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)

### Passos para Instalação

1. **Clone o repositório:**

    ```bash
    git clone https://github.com/JheymersonLA/BETWISE-SYS.git
    ```

2. **Navegue até o diretório do projeto:**

    ```bash
    cd BETWISE-SYS
    ```

3. **Instale as dependências do Composer:**

    ```bash
    composer install
    ```

4. **Copie o arquivo de configuração do ambiente:**

    ```bash
    cp .env.example .env
    ```

5. **Configure o arquivo .env com suas informações:**

    Abra o arquivo `.env` em um editor de texto e configure as variáveis de ambiente, como banco de dados e chave de aplicativo.

6. **Gere a chave de aplicativo:**

    ```bash
    php artisan key:generate
    ```

7. **Inicie o servidor de desenvolvimento:**

    ```bash
    php artisan serve
    ```

    O projeto estará disponível em [http://localhost:8000](http://localhost:8000).