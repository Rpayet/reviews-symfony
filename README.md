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

Pour le front, installer les dépendances avec
```bash
npm install
```

Ne pas oublier de compiler le CSS et le JS
Compile une seule fois
```bash
npm run dev
```

Pour compiler à chaque modifications

```bash
npm run watch
```

Pour compiler à chaque modification et refresh automatique

```bash
npm run dev-server
```