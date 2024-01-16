### Комментарий к тестовому заданию для разработчика на PHP

# Назначение кода
Отправка уведомлений при операции возврата сотрудникам и клиенту (клиенту только в случае изменения статуса операции). Сотрудникам отправляются email уведомления, клиенту email (при наличии заполненного поля email) и смс (при наличии телефона - заполненного поля mobile).
Метод TsReturnOperation->doOperation() возвращает массив с результатами отправки сообщений, отдельно подтверждения отправки сотрудникам, клиенту на email и клиенту на телефон.

# Качество кода
Оценил бы как среднее, ошибок не очень много, в общем и целом код написан достаточно грамотно, хотя присутствуют грубые ошибки, такие, как обращение к необъявленным свойствам класса



