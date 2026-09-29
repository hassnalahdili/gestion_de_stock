# Développement d'un site web de gestion de stock

## Description

Ce projet consiste en la conception et le développement d'une application web dédiée à la **gestion de stock**.

L'application permet de gérer les différents éléments liés à l'activité de l'entreprise, notamment les composants, les clients, les fournisseurs, les achats, les ventes, les entrepôts et les catégories.

Le système intègre également une **authentification des utilisateurs** et une gestion des accès selon deux rôles : **administrateur** et **utilisateur/employeur**.

Le stock est automatiquement mis à jour lors des opérations d'achat et de vente.

## Contexte du projet

* **Type :** Projet réalisé individuellement
* **Contexte :** Stage
* **Entreprise :** Embition Engineering
* **Année :** 2024

## Fonctionnalités

### Authentification et gestion des utilisateurs

* Connexion des utilisateurs avec un compte.
* Gestion de deux rôles :

  * Administrateur
  * Utilisateur / Employeur
* Gestion des comptes employeurs par l'administrateur :

  * Ajouter un employeur
  * Modifier les informations d'un employeur
  * Supprimer un employeur
  * Afficher les informations d'un employeur
  * Rechercher un employeur

### Gestion des composants

* Ajouter un composant.
* Modifier les informations d'un composant.
* Supprimer un composant.
* Afficher les informations d'un composant.
* Rechercher un composant.
* Gestion des informations telles que le nom, le type, la date d'achat, le prix, la description et l'image.

### Gestion des clients

* Ajouter un client.
* Modifier les informations d'un client.
* Supprimer un client.

### Gestion des fournisseurs

* Ajouter un fournisseur.
* Modifier les informations d'un fournisseur.
* Supprimer un fournisseur.

### Gestion des achats

* Ajouter un achat.
* Modifier les informations d'un achat.
* Supprimer un achat.
* Mise à jour automatique du stock lors des opérations d'achat.

### Gestion des ventes

* Ajouter une vente.
* Modifier les informations d'une vente.
* Supprimer une vente.
* Mise à jour automatique du stock lors des opérations de vente.

### Gestion des entrepôts

* Ajouter un entrepôt.
* Modifier les informations d'un entrepôt.
* Supprimer un entrepôt.
* Gestion de la quantité maximale et de la quantité actuelle.

### Gestion des catégories

* Ajouter une catégorie.
* Modifier une catégorie.
* Supprimer une catégorie.

## Technologies utilisées

* **PHP**
* **Laravel 8**
* **HTML5**
* **CSS3**
* **Bootstrap 5**
* **JavaScript**
* **MySQL**

## Architecture générale

L'application repose sur une architecture web permettant de séparer les différentes responsabilités de l'application et de faciliter la gestion des données.

Laravel est utilisé pour le développement de la partie serveur et la gestion de la logique applicative, tandis que HTML, CSS, Bootstrap et JavaScript sont utilisés pour l'interface utilisateur.

MySQL est utilisé pour le stockage et la gestion des données de l'application.

## Compétences mises en pratique

Ce projet m'a permis de mettre en pratique plusieurs compétences, notamment :

* Développement web avec PHP et Laravel.
* Conception d'interfaces web avec HTML, CSS et Bootstrap.
* Développement avec JavaScript.
* Gestion d'une base de données MySQL.
* Mise en place d'opérations CRUD.
* Gestion de l'authentification et des rôles utilisateurs.
* Gestion des relations entre les différentes données de l'application.
* Gestion automatique des mouvements de stock.

## Installation

### Prérequis

* PHP
* Composer
* Laravel
* MySQL
* Node.js et npm

### Installation du projet

Cloner le dépôt :

```bash
git clone https://githu
```
