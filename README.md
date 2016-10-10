# BasicConsilium
### Basis Politik 
#### für Transparenz und Mitarbeit in der Politik 


BasicConsilium soll ein Arbeitstool für die Politische Arbeit werden. 
Damit soll eine lückenlose Dokumentation der Arbeit der Vorstände möglich gemacht werden. 
BasicConsilium bietet die Möglichkeit sämtliche schritte welche intern zur Lösungsfindung nötig sind Transparenz darzustellen. 
Einen kompletten Einblick in die Finanzbücher und der elektronischen Kommunikation.
Basisdemokratische Entscheidungen und die Mitarbeit in Arbeitsgruppen und Projekten die von den Mitgliedern erstellt und betreut werden können. 
BasicConsilium soll künftig frei zur Verfügung stehen.  

  
Die Teilnahmemöglichkeit jedes Mitglieds steht an oberster Stelle.   
Die Kontrollmechanismen um dies auch zu gewährgeleistet zu können müssen in den folgenden Monaten nach der Veröffentlichung der HFPbase ausgetestet und angepasst werden.  
Wichtig ist eine Störungsfreie Kommunikation und die Fokussierung auf Sach- und Themengebiete. 

## Startseite - Dashboard / Instrumententafel 

    - Summe aller Spendeneinnamen 
    - Gesamtsumme Finanzen
    - Summe Mitglieder
    - Summe Arbeitsgruppen

    - Allgemeiner Mitglieder Chat

    - Artikelübersicht – neuste Artikel vom Vorstand
    - Artikelübersicht –  neuste Artikel aus den Arbeitsgruppen
    - Artikelübersicht –  neuste Artikel von Mitgliedern

    - neuste Bilder
    - neuste Videos

    - neuste Aufgaben
    - neuste Projekte












## Die Basis Komponenten sind: 

  1. Mitgliederübersicht
  2. Aufgabenliste 
  3. Arbeitsgruppen
  3.1.  Die Arbeitsgruppe
  4. Projekte
  5. E-Mails
  6. Newsletter
  7. Finanzen
  8. Umfragen




# 1. Mitgliederübersicht
Bietet eine Übersicht über alle Mitglieder und User. 


### Funktionen
     - eine Übersicht von allen Mitgliedern
     - zur Kontaktaufnahme unter allen Mitgliedern
     - ist filterbar und durchsuchbar.
     
### Der Vorstand kann:                               
     -ein neues Mitglied anlegen
          - Vorname
          - Nachname
          - E-Mail
          - Ort
          - Bundesland

     -Jedes Mitglied per Mail anschreiben. (Alle Mails welche vom Vorstand geschrieben wurden werden gespeichert und               sind für alle Mitglieder einsehbar. )
     - einsehen wer Beitrag bezahlt hat und wer noch nicht. 
     - kann das Mitgliederpasswort ändern (Das Mitglied bekommt automatisch eine Mail das sein Passwort geändert                   wurde.)
 
      

# 2. Aufgabenliste 
Hier gibt es eine Übersicht über alle Aufgaben. 
In jeder Arbeitsgruppe steht eine Aufgabenliste zur Verfügung. 
 
### Funktionen
    - Neue Aufgabe erstellen
       - Typ
       - Status
       - Arbeitsstand
       - Titel
        - Beschreibung
        - Ansprechpartner
        - Enddatum


     - Aufgaben bearbeiten


### Der Vorstand kann:    
    - Aufgaben öffentlich oder intern stellen 




# 3. Arbeitsgruppen
Eine Auflistung aller angelegten Arbeitsgruppen welche zur Internen Arbeit der HFP angelgt und betreut werden.
Eine Übersicht aller im angeschlossenen Netzwerk PeacePoint erstellten Arbeitsgruppen. 

### Funktionen
    - Beitreten oder Austreten in Arbeitsgruppen

### Der Vorstand kann: 
    - anlegen von neuen Arbeitsgruppen
    - bearbeiten von Arbeitsgruppen


# 3.1.  Die Arbeitsgruppen

### Funktionen
    - neuen Artikel anlegen
    - Artikelübersicht mit Kommentarfunktion
    - Mitgliederübersicht
    - Arbeitsgruppenchat
    - Dokumentablage
    - Aufgabenliste
    - Projektliste



# 4. Projekte
Eine Übersicht von Projekten die die Vorstände angelegt haben. 
Eine Übersicht von allen Projekten die in den Arbeitsgruppen angelegt werden.




# 5. Mails
Der Vorstand kann von hier aus E-Mails schreiben. Die E-Mails werden gespeichert und sind für alle Mitglieder einsehbar. 
                     
### Funktionen
    - E-Maileingang Übersicht
    - E-Mailausgang Übersicht

### der Vorstand kann: 
    - E-Mail schreiben.




# 6. Newsletter
Der Bundesvorstand oder die Vorstände der Untergliederungen kann von hier ihre Mitglieder über z.B. Neuigkeiten informieren.
Mitglieder können sich ein oder austragen um den Newsletter zu erhalten. 
Der Vorstand hat aber die Möglichkeit bei sehr wichtigen Infos die alle Mitglieder angehen eine E-Mail an alle zu versenden. 
 
### Funktionen
    - Mitglieder können sich für den Newsletter ein und austragen


### der Vorstand kann: 
    - Newsletter verfassen und versenden.






# 7.  Finanzen
Das ist der Bereich für den Kassenwart. Auch für die Kassenwarte der Untergliederungen einer Bundespartei.
Es wird die digitale Buchführung. Alle Kassenwarte benutzen dieses Tool um Einnahmen und Ausgaben zu protokollieren. Alle Spendeneinnahmen können auch aufgeführt werden. 
Mitglieder haben immer eine Einsicht in den aktuellen finanzellen Status.
                        
### Funktionen
    - neue Einträge ins Kassenbuch eintragen
 
### der Vorstand kann: 
    - kann neue Einträge tätigen aber sie müssen vom jeweiligen Kassenwart bestätigt werden.




8. Umfragen
Basisdemokratische Entscheidungen innerhalb einer Bundespartei und ihrer Unterverbände ermöglichen und sichtbar machen. 
In den Arbeitsgruppen können auch basisdemokratische Entscheidungen dadurch Möglich und sichtbar gemacht werden. 

Funktionen

    - neu Abstimmung erstellen
    - Abstimmungsübersicht
    - Ergebnisübersicht

der Vorstand kann:

     - Umfragen auf Bundesebene durchführen.  Diese Umfragen können dann auch gleichzeitig in allen zusätzlichen von der HFP betriebenen Medien und Verbündeten Medien durchgeführt und ausgewertet werden. 



_____________________
_____________________

# BasicConsilium Dokumentation


## Startfunktion
    load_counts("index");


## index.php
Hier muss die Websocket Verbindung angepasst werden

      //create a new WebSocket object.
      // example ws://humanistischefriedenspartei.de:9000/server.php
### var wsUri = "ws://0.0.0.0:9000/server.php"; 	
  
  >> Beim ersten Verbinden des Websocket kann es passieren das die Seite ewig lädt. Bei uns hilft es wenn wir den Browser noch mal neu starten und dann wird die Verbindung auch immer ordentlich dargestellt. Local muss man es nach jedem Neustart des Rechners machen! 
  
  

## AJAX Funktion 
hfp_ajax_html.js

#### function myajax(typ,foo,data_foo)
    typ :: muss immer angegeben werden
    foo :: kann angegeben werden
    data_foo :: die daten die per ajax ans php gesendet werden wenn lehr dann wird typ genommen 
    data_foo BEISPIEL:: {"userid":69,"betreff":"yyxyxcyxc","txt":"yyxcyxcyxcyc"}
    
####  "typ" wird von switch(typ) gefiltert. 
####  "typ" wird von hfp.php für MYSQL anfrage gefiltert. 

### AJAX Ergebniss ist == "data"
#### "data_foo" === "dataArray"(ARRAY)
