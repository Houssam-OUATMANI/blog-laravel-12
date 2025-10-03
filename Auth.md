## Auth

    * Creer une migration (system de versionning de bdd) User
    * (Nom, prenom, email, mot de passe, role)
    * lancer la migration pour creer la table user
    * Page d'inscription
        * formulaire avec les champs (Nom, prenom, email, mot de passe)
        * valider les donnees cote laravel avec le system de forma request
        * hasher le mot de passe 
        * enregistrer l'utilisateur
        * rediriger vers la page de connexion avec un system de notification flash

    * page de connnexion
        * formulaire avec les champs (email, mot de passe)
        * valider les donnees cote laravel avec le system de forma request
        * Connecter l'utilsateur en lui creant une session (object contenent les information de l'utilisateur en question)
        * rediriger vers la page d'acceuil du blog (pour le moment)



## Category
      * Creer une migration (system de versionning de bdd) Category
        * name,
        * lancer la migration pour creer la table post


## Article
      * Creer une migration (system de versionning de bdd) Post
        * titre,slug, content, miniature, categorie, auteur (qui sera un user inscrit dans notre system) 
        * lancer la migration pour creer la table post









