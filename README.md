# TaskInfinity

## Опис
TaskInfinity - це потужна платформа для управління задачами та проектами, побудована з використанням Laravel і принципів Domain-Driven Design (DDD). Платформа включає модулі для створення, управління, моніторингу та видалення задач.

## Структура проекту
Проект розділений на кілька шарів для покращення читабельності та підтримуваності коду:

- **Domain**: Основна бізнес-логіка та правила.
- **Application**: Інтерфейси, юзкейси та реалізації для роботи з даними.
- **Infrastructure**: Реалізація деталей інфраструктури, таких як моделі даних, контролери та утиліти.
- **Presentation**: Візуалізація даних та взаємодія з користувачем.

## Встановлення
1. Клонуйте репозиторій:
    ```bash
    git clone <URL репозитарію>
    ```
2. Перейдіть до каталогу проекту:
    ```bash
    cd task_infinity
    ```
3. Встановіть необхідні залежності:
    ```bash
    composer install
    ```
4. Налаштуйте файл `.env` та виконайте міграції:
    ```bash
    php artisan migrate
    ```

## Запуск
Для запуску проекту виконайте команду:
```bash
php artisan serve
```

## Структура каталогів
```plaintext
task_infinity/
├── app/
│   ├── Domain/
│   │   ├── Entities/
│   │   │   ├── Task.php
│   │   │   └── Project.php
│   │   ├── Repositories/
│   │   │   └── TaskRepositoryInterface.php
│   │   ├── Services/
│   │   │   └── TaskService.php
│   │   └── UseCases/
│   │       └── ManageTasks.php
│   ├── Infrastructure/
│   │   ├── Persistence/
│   │   │   └── Eloquent/
│   │   │       └── TaskRepository.php
│   │   ├── Providers/
│   │   │   └── AppServiceProvider.php
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── TaskController.php
├── database/
│   ├── migrations/
│   │   └── create_tasks_table.php
├── routes/
│   ├── web.php
├── composer.json
└── README.md
```

## Опис компонентів
### Domain
- **Task.php**: Клас сутності завдання.
- **Project.php**: Клас сутності проекту.
- **TaskRepositoryInterface.php**: Інтерфейс репозиторію завдань.

### Application
- **ManageTasks.php**: Юзкейс для управління завданнями.
- **TaskService.php**: Сервіс для управління завданнями.

### Infrastructure
- **TaskRepository.php**: Реалізація репозиторію завдань з використанням Eloquent ORM.
- **AppServiceProvider.php**: Провайдер для реєстрації репозиторіїв у контейнері служб.

### Presentation
- **TaskController.php**: Контролер для управління завданнями.

## Міграції
- **create_tasks_table.php**: Міграція для створення таблиці завдань у базі даних.

## Маршрути
- **web.php**: Файл для визначення маршрутів веб-додатку.

## Ліцензія
Цей проект ліцензовано під ліцензією MIT. Для отримання додаткової інформації див. файл LICENSE.
