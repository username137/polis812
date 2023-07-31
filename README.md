<b>Примеры вызова класса.</b>

Обращаемся к API:
<p><b>Api::getUsers();</b> - данный метод отправляет запрос на страницу https://jsonplaceholder.typicode.com/users, 
получает в ответе Json и декодирует его с помощью json_decode(). На выходе получаем массив. 
Аналогично с методами Api::getPosts() и Api::getTodos().
</p>
<br>
<br>
Добавление поста:
<br>
<br>
<p><b>Api::editPost('add', $posts, 0, $title, $textBody);</b>
  <br>
Первый параметр 'add' отвечает за то, что будет делать метод, в данном случае это добавление поста.<br>
Тут мы передаем методу массив ранее полученных данных с https://jsonplaceholder.typicode.com/posts</p>


Результат выполнения метода класса мы можем увидеть на примере использования функции var_dump($posts):
<br>
<img width="421" alt="Снимок экрана 2023-07-31 в 17 29 54" src="https://github.com/username137/polis812/assets/98607874/dd614011-93ba-4125-9373-3430414b6816">
<br>
Массив был из 99 элементов, а теперь из 100.
<br>
<br>
<br>
<br>
<b>Api::editPost('remove', $posts, $id);</b>
<br>
<img width="394" alt="Снимок экрана 2023-07-31 в 16 58 51" src="https://github.com/username137/polis812/assets/98607874/563eec65-cd7b-43c4-9dd9-6b417a65b5b4">
<br>Удаление поста под номером 98
<br>
<br>
<br>
<br>
<b>Api::editPost('edit', $posts, $id, $title, $textBody);</b>
<br>
<img width="363" alt="Снимок экрана 2023-07-31 в 17 00 01" src="https://github.com/username137/polis812/assets/98607874/aab7059b-2ceb-49b8-8a0e-80a467de58ea">
<br>Редактирование поста под номером 82
