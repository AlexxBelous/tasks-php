## Task 15
###### str_starts_with, str_contains, foreach
#### Задача: Написать класс UrlFilter, который фильтрует массив ссылок и возвращает только безопасные ссылки. Ссылка считается безопасной, если она: начинается с протокола https:// или http://. и ведёт на домены, принадлежащие разрешённым (например, example.com или mysite.com).
#### Ожидаемый результат:
#### "https://example.com/page",
#### "http://mysite.com/resource",
#### "https://example.com/malicious-link",
#### "https://mysite.com/blog",
#### "http://example.com/contact"

#### Material
#### ['example.com', 'mysite.com']