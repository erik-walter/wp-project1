# WordPress Projekt

Dieses Projekt enthält ein WordPress Projekt, das über Docker läuft. 


## Voraussetzungen

1. [Docker Desktop](https://www.docker.com/products/docker-desktop) installiert  
2. [Git](https://git-scm.com/) installiert  


## Anleitung zum lokalen Aufsetzen

Repository klonen:

git clone https://github.com/erik-walter/wp-project1.git
cd wp-project1

Im Ordner wp-project1 liegt die docker-compose.yml. Führe "docker-compose up -d" aus.
Docker erstellt Container für WordPress + MySQL. WordPress läuft dann unter: http://localhost:8080

Damit Inhalte, Seiten, Plugins und Einstellungen in WordPress verfügbar sind, führe das aus: 
docker exec -i wordpress-db /usr/bin/mysql -u wpuser --password=wppasswort wordpress < wp-dump.sql

In Kurz: Klonen → docker-compose up -d → SQL-Dump importieren → Browser öffnen

Login-Daten: 
E-Mail: abonnent@test.local
Passwort: wp-project1Passwort


