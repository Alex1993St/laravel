Запуск проекта
0) Зуиускаєм composer update i npx vite build
1) Налаштувати .env, на даний момент черги використовують redis
2) Запускає команду php artisan migrate --seed
3) Запускаєм черги php artisan queue:listen
4) Додавання цитати через консоль php artisan command:create "Some text here"
