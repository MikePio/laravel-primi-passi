Introduzione Laravel
===
## Descrizione
Creare un nuovo progetto Laravel 9, utilizzando questo comando:

`composer create-project laravel/laravel:^9.2 laravel-primi-passi`

Al termine dell’installazione, entrare nella cartella del progetto `cd laravel-primi-passi`
e avviare l’artisan serve con uno di questi due comandi:
- `php artisan serve` 
- `php -S localhost:8000 -t public`

Cancellare la view `welcome.blade.php` e creare una homepage. Fare in modo che la rotta `/` visualizzi `home.blade.php`

Inizialmente stampare un **Hello World**, poi passare i dati alla view in modo da visualizzarli dinamicamente con Blade.

### **Bonus**
Creare più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione `route()`
