# Simple Blog

## Grundaufbau

Drei Tabellen:  
article		Die Blog-Einträge  
comment		Kommentare  
user			User-Liste (wird von Laravel verwaltet)

Namenskonventionen: Referenzspalten tragen den Titel der Tabelle, die sie referenzieren+Spalte  
Andere Spalten tragen als Präfix den Tabellennamen zur leichteren Identifizierung.

**Tabelle "article"**  
articleDate DATETIME - Datum des Artikels (muss nicht notwendigerweise mit dem letzten Bearbeitungsdatum übereinstimmen)  
articleTitleSeo VARCHAR255 - SEO-Titel, ergibt zusammen mit Jahr und Monat den Link auf den Eintrag  
articleTitle VARCHAR255  
articleText TEXT  
articleCommentCount INT-UNSIGNED (Default: 0)  
create_user INT-UNSIGNED  
edit_user INT-UNSIGNED

**Tabelle "comment"**  
articleID INT-UNSIGNED  
parentID  INT-UNSIGNED Für Antworten auf Kommentare.  
commentText TEXT  
create_user INT-UNSIGNED  
edit_user INT-UNSIGNED

FOREIGN KEY CONSTRAINT:  
Spalte articleID verweist auf article.id. Bei Delete CASCADE.

**Tabelle "user"**  
password VARCHAR255 gehashtes Passwort

## Rechtesystem

Hierarchisches Rechtesystem in drei Stufen. Auf der untersten steht der **User**, er kann Kommentare schreiben. Darüber ist der **Autor**, er kann Kommentare und Artikel schreiben und seine eigenen Artikel bearbeiten. Ganz oben ist der Administrator, der Zugriff auf die Statistik hat und neue Autoren und Administratoren anlegen kann. Der Admin kann außerdem Kommentare löschen und bearbeiten.

## Installation

Die Tabellen werden über das Laravel Migration-System angelegt. Zum Test kann anschließend die Datenbank geseeded, d.h. mit Testdaten gefüllt werden.

Für eine lauffähige Version muss die .env-Datei angelegt/editiert und ein APP-Key erstellt werden.
