# Maitriser Symfony

Quand on a cloné le projet, on installe les dépendances avec Composer :

```bash
composer install
```

On configure le fichier `.env.local`. On peut donc créer la BDD :

```bash
php bin/console doctrine:database:create
```

Attention de bien lancer le serveur MySQL ou Laragon. Et bien sûr, on peut lancer les migrations pour être sûr que notre BDD est synchronisée avec le projet :

```bash
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
```
