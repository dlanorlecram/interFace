# interFace

##Installation
Lancer les commandes suivantes:

git clone https://github.com/dlanorlecram/interFace.git  dans un répertoire de votre serveur dont vous avez les droits

cd interFace/interface

composer install


Vous devriez voir des messages en verts apparaitre dans votre console
Démarrer le serveur de Symfony en lancant la commande :

app/console server:run

Aller à l'adresse : http://localhost:8000 dans votre navigateur

Vous devriez voir le message 'Welcome to Symfony 2.8'

Vous pouvez aller voir à l'adresse : http://localhost:8000/app_dev.php/login la vue du login


Pour mettre à jour la base de donées, vous devez configurer le fichier parameters.yml (attention à ne mettre aucune tabulation)

et lancer la commande :

php app/console doctrine:schema:update --force


##Documentation
Information concernant les templates qui s'occupent de la vue :
http://symfony.com/doc/master/bundles/FOSUserBundle/overriding_templates.html
https://symfony.com/doc/2.8/controller/error_pages.html#controller-error-pages-by-status-code
