<p align="center"><a href="https://puikepixels.com" target="_blank"><img src="https://puikepixels.com/wp-content/uploads/2022/11/Logo_pp.svg" width="400" alt="Puikepixels Logo"></a></p>

## Over Puik CRM
Een simpel CRM systeem. De onderdelen die wij gaan implementeren:
- Klanten beheer
- Klant Notities
- Klant Groepen
- Projecten
- Taken
- Taak Status
- Taak Prioriteiten


## Installeren
1. Fork this repository

2. Config .env

3. Migrate DB
At the your terminal, type `php artisan migrate:fresh --seed && php artisan db:seed --class=PermissionsSeeder`.

4. Type `php artisan serve`.



## License

Puik CRM is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
