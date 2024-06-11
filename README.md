### Docker command
###### docker compose up -d  
###### docker compose down  
###### docker system prune -a --volumes -f  
###### docker stop $(docker ps -aq) && docker system prune -af --volumes

### Настройка PhpStorm позволяет искать переменные за пределами текущего файла
###### 1)Перейдите в File -> Settings (или PHPStorm -> Preferences на macOS).
###### 2)В меню настроек выберите Editor -> Inspections.
###### 3)В разделе PHP найдите Undefined symbols и разверните его.
###### 4)Выберите Undefined variable.
###### 5)Установите флажок Search for variables definition outside the current file.
###### 6)Нажмите Apply, а затем OK, чтобы сохранить изменения.

### Tasks  
###### Каждая ветка является мини заданием по php.  
###### 1)синхронизации локального репозитория с удалённым
###### 2)Получить все вопросы - git branch -a
###### 3)Переключение вопросов - git checkout . && git checkout task__1