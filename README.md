# interFace

##Installation
Lancer les commandes suivantes:

`git clone https://github.com/dlanorlecram/interFace.git`  dans un répertoire de votre serveur dont vous avez les droits

`cd interFace/interface`

Paramétrez le fichier parameters.yml (attention à ne mettre aucune tabulation)

Lancez la commande (elle mettra à jour les dépendances, votre base de données et lancera le serveur):

`./run.sh`

Aller à l'adresse : http://localhost:8000 dans votre navigateur

Vous devriez voir le message 'Welcome to Symfony 2.8'

Vous pouvez aller voir à l'adresse : http://localhost:8000/app_dev.php/login , la vue du login


##Documentation
Information concernant les templates qui s'occupent de la vue :

http://symfony.com/doc/master/bundles/FOSUserBundle/overriding_templates.html

https://symfony.com/doc/2.8/controller/error_pages.html#controller-error-pages-by-status-code
