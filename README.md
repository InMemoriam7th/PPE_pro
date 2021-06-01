# PPE Interface Admin Gestion Client

### Réalisation d'une interface administrateur pour recenser leurs clients

Ce site admin a pour but de permettre aux administrateurs des 
Maisons des ligues, de recenser leurs clients.

## Installation

* Crée la base de données avec le script suivant :
```sql
CREATE TABLE client_ligue (id_client int PRIMARY KEY not null AUTO_INCREMENT, 
	nom varchar(256) not null, 
	prenom varchar(256) not null, 
	age int not null, 
	email varchar(256) not null)
```
* Connecter la base de données en configurent les informations de connexion dans le fichier [ddb.inc.php](https://github.com/InMemoriam7th/PPE_pro/blob/master/src/ddb.inc.php) 

## Utilisation

* La page principale affiche tous les clients et leurs informations.

![Page principale](https://raw.githubusercontent.com/alexmi94/ppe_interface_admin_gestion_client/main/doc/page_principale.jpg)

* Pour ajouter un client il faut indiquer 4 infomation **obligatoire**.  

![Ajouter un client](https://raw.githubusercontent.com/alexmi94/ppe_interface_admin_gestion_client/main/doc/ajouter_client.jpg)

* L'édition d'un client déjà éxistant permet de mettre à jour les infomations sur le client ou de le supprimer.

![Modifier un client](https://raw.githubusercontent.com/alexmi94/ppe_interface_admin_gestion_client/main/doc/modifier_client.jpg)