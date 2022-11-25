# Stack des compétences en microservices

## Introduction

Ce projet est un exemple de stack de microservices. Il est composé de 3 microservices :

- [equipes](./equipes/README.md) : gère les équipes
- [personnes](./personnes/README.md) : gère les personnes
- [competences] (./competences/README.md) : gère les compétences 

## Installation

### Prérequis

- [Docker](https://www.docker.com/)

### Lancement

Lancer la commande suivante :

```bash
docker-compose up -d
```

Si la mise à jour des images est nécessaire, lancer la commande suivante :

```bash
docker-compose up -d --build
```