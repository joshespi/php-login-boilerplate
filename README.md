# Espi's PHP Login Boilerplate
Simple PHP registration/Login boilerplate in docker containers

## Requirements
- Docker Engine
## Installation
Clone Repo ```git clone https://github.com/joshespi/php-login-boilerplate.git```

Change into directory php-login-boilerplate

### Build
```docker compose build```
### Start
```docker compose up -d```

### Stop
```docker compose down```

### .env variables in use
```
DB_NAME="webapp"
DB_USERNAME="webadmin"   
DB_PASSWORD=""
DB_ROOT_PASSWORD=""
DB_HOST="app_db"
```
## Resources
- [PureCSS](https://purecss.io/)
- [PHPMailer](https://github.com/PHPMailer/PHPMailer)