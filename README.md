## Install

- run `git clone https://github.com/trinos-nl/example.git weather`
- run `composer install`
- run `npm install`
- run `npm run dev`

## Info

- Homepage `resources/views/welcome.blade.php`
- Logica in controller `app/Http/Controllers/HomeController.php`

## Tasks

- Laad composer package `composer require gnahotelsolutions/laravel-weather` in.
- Docs van de weather package staan hier: https://github.com/gnahotelsolutions/laravel-weather
- Laad het weer van Nijmegen in. Dit kan via de composer package van hierboven. Dit krijg je terug van de API: http://api.openweathermap.org/data/2.5/weather?APPID=bda6863170470ea55cf2ce9859cc9670&units=metric&lang=nl&q=nijmegen
- Toon in de frontend `welcome.blade.php` in een tabel de waardes van de api. Gebruik hiervoor `main`, daarin zitten de temps. 
- Ik heb een voorbeeld erbij gedaan. Zie screenshot.png in de root van het project
- Als de temperatuur onder de 20 graden is, de balk blauw maken. Temperatuur boven de 20? Dan groen, boven de 22 graden? Dan geel.
- Afronden op hele getallen
- Gebruik comments in de code en zet niet alle code in één functie
  
Extra

- Bouw een grid van 4x4 op desktop, hetzelfde moet op mobiel als 2x8 getoond worden (Responsive). We gebruiken hiervoor css grid. 
- Bouw een footer met 4 columns. Wij maken hiervoor gebruik van flex. Vul deze met een ul li met links. 

Let op; alles met Tailwind CSS maken. Je kan al wat opmaak zien in `welcome.blade.php` Zie ook tailwind CSS documentatie.
