# PHP-Inzidenz-Ampel

Eine Inzidenz-Ampel mit Werten des RKI. Beschrieben im Artikel [Corona-Ampel](https://ct.de/yw1c) in c’t 9/2021 ab Seite 160.

## Beispiel ausprobieren

Laden Sie die Inhalte des Repos herunter und navigieren Sie in den Ordner. Starten Sie dann einen lokalen Entwicklungsserver mit:

```
php -S localhost:8000
```

Im Browser unter der Adresse http://localhost:8000/examples/simple.php finden Sie eine simple Tabelle. Unter http://localhost:8000/examples/snippet.php sehen Sie eine Inzidenz-Ampel.
Im Ordner `examples` finden Sie die Dateien. Passen Sie die Regions-ID wie im Artikel beschrieben an.

## Verwenden auf der eigenen Website

Sie brauchen die Datei `src/Incidence.php`, die Sie in Ihrem Dokument per `include()` einbinden. Verwenden Sie zum Beispiel die Datei `examples/snippet.php` als Schnipsel in Ihrer Seite, um eine Ampel darzustellen.