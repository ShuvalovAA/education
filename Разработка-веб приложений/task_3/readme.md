# Todo_list

Создать проект "Список дел" на Django.

Требования:
все страницы должны быть созданы на основе одного шаблона;
настроить панель администратора для работы со списком дел;
реализовать добавление дела и вывод списка всех дел;
для каждого дела добавить возможность удаления и редактирования.

## How start:
requirements:
* UBUNTU
* PYTHON 3.X

## SUPERUSER CREDS
    root
    root
## Next commands
```
cd task_3
source venv/bin/activate
pip install --index-url https://my.local.mirror.com/simple -r requirements.txt

cd todo_list
./manage.py makemigrations
./manage.py migrate
./manage.py runserver
```

## How endpoints:
/todos/show/?start_date=2023-08-01&end_date=2023-08-05
/todos/create/?name=test&desctiption=testing
/todos/delete/?id=1
/todos/update/?id=1&desctiption=testing1