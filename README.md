Запуск проекта
0) Зупускаєм composer update i npx vite build
1) Налаштовуєм .env, на даний момент черги використовують redis
2) Запускає команду php artisan migrate --seed
3) Запускаєм черги php artisan queue:listen
4) Додавання цитати через консоль php artisan command:create "Some text here"
