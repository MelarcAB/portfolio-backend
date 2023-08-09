pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Prepare Application') {
            steps {
                script {
                    sh '''
                    cd /var/www/ai-recipes-back
                    git reset --hard
                    git pull
                    php artisan migrate
                    composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev
                    php artisan optimize
                    php artisan cache:clear
                    php artisan config:clear
                    php artisan route:clear
                    sudo chown -R www-data:www-data storage bootstrap/cache
                    sudo chmod -R 775 storage bootstrap/cache
                    '''
                }
            }
        }
    }
}
