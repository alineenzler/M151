# Übung 1.2 #

> Erstellen Sie für diese Übung wie immer einen eigenen Ordner.

1. Erstellen Sie eine neue PHP Datei namens `index.php`

1. Fügen Sie folgendne Code in diese Datei ein:

    ```php
    <?php
        $anzahl_aufrufe = 1;
        
        echo "Die Seite wurde {$anzahl_aufrufe}x aufgerufen.";
        
        $anzahl_aufrufe++;
    ?>
    ```

1. Starten Sie den Webserver in dem Ordner der Übung

    ```shell script
    cd ~/m151/Uebungen/Uebung1-2
    php -S 0.0.0.0:8000
    ```

1. Öffnen Sie die Seite im Browser und aktualisieren Sie ein paar mal. Ändert sich der Counter?

    > Nein, aber das ist ja logisch. Auf der ersten Zeile setzen wir `$anzahl_aufrufe` wieder auf 0!

1. Kommentieren Sie also die erste Zeile aus und aktualisieren Sie den Browser noch ein paar mal.

    ```php
    <?php
        //$anzahl_aufrufe = 1;
        
        echo "Die Seite wurde {$anzahl_aufrufe}x aufgerufen.";
        
        $anzahl_aufrufe++;
    ?>
    ```

## Fragen (zu Zweit) ##

- [ ] Ändert sich der Counter nachdem die erste Zeile auskommentiert wurde?
        Ja, aber es gibt nun Fehler aus.

- [ ] Wieso ändert er sich nicht? 
        Weil die Variabel "undefined" ist. Stichwort: Stateless!