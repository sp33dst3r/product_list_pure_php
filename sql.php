CREATE DATaBASE cart;

CREATE TABLE goods ( id INT NOT NULL AUTO_INCREMENT,  name varchar(255), description varchar(255), picture varchar(255), price INT, on_stock ENUM('0', '1'), PRIMARY KEY(id));


INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Чашка', 'Описание-1', '1.jpg', 854, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Ложка', 'Описание-2', '1.jpg', 549, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Вилка', 'Описание-3', '1.jpg', 4299, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Тарелка', 'Описание-4', '1.jpg', 2334, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Холодильник', 'Описание-5', '1.jpg', 2942, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Телевизор', 'Описание-6', '1.jpg', 417, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Пылесос', 'Описание-7', '1.jpg', 1357, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Кружка', 'Описание-8', '1.jpg', 4889, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Диван', 'Описание-9', '1.jpg', 4822, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Кофемолка', 'Описание-10', '1.jpg', 842, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Видеомагнитофон', 'Описание-11', '1.jpg', 2762, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Плеер', 'Описание-12', '1.jpg', 2959, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Шкаф', 'Описание-13', '1.jpg', 1627, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Книжная полка', 'Описание-14', '1.jpg', 779, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Комод', 'Описание-15', '1.jpg', 1534, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Стул', 'Описание-16', '1.jpg', 3425, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Стол', 'Описание-17', '1.jpg', 3226, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Кофеварка', 'Описание-18', '1.jpg', 1641, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Тостер', 'Описание-19', '1.jpg', 4006, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Блюдце', 'Описание-20', '1.jpg', 2036, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Компьютер', 'Описание-21', '1.jpg', 304, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Видеокамера', 'Описание-22', '1.jpg', 4904, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Ковер', 'Описание-23', '1.jpg', 2896, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Занавески', 'Описание-24', '1.jpg', 3274, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Мыло', 'Описание-25', '1.jpg', 3653, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Стиральный порошок', 'Описание-26', '1.jpg', 3642, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Корыто', 'Описание-27', '1.jpg', 2804, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Мебель', 'Описание-28', '1.jpg', 2105, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Кресло', 'Описание-29', '1.jpg', 3990, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Зеркало', 'Описание-30', '1.jpg', 4153, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Телевизор', 'Описание-31', '1.jpg', 3674, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Магнитофон', 'Описание-32', '1.jpg', 1188, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Телефон', 'Описание-33', '1.jpg', 4784, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Мобильный', 'Описание-34', '1.jpg', 1229, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Ноутбук', 'Описание-35', '1.jpg', 4436, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Книга', 'Описание-36', '1.jpg', 1214, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Журнал', 'Описание-37', '1.jpg', 3364, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Газета', 'Описание-38', '1.jpg', 2656, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Принадлежности', 'Описание-39', '1.jpg', 700, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Нетбук', 'Описание-40', '1.jpg', 3078, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Планшет', 'Описание-41', '1.jpg', 1455, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Скатерть', 'Описание-42', '1.jpg', 2704, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Колотушка', 'Описание-43', '1.jpg', 707, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Ухват', 'Описание-44', '1.jpg', 2488, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Вилы', 'Описание-45', '1.jpg', 1140, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Грабли', 'Описание-46', '1.jpg', 1178, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Лопата', 'Описание-47', '1.jpg', 1592, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Кирка', 'Описание-48', '1.jpg', 1745, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Мотыга', 'Описание-49', '1.jpg', 1408, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Плуг', 'Описание-50', '1.jpg', 4029, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('мясорубка', 'Описание-51', '1.jpg', 1518, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Коса', 'Описание-52', '1.jpg', 3617, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Ножи', 'Описание-53', '1.jpg', 2975, '1');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Бензопила', 'Описание-54', '1.jpg', 300, '0');
INSERT INTO goods (name, description, picture, price, on_stock) VALUES ('Печь', 'Описание-55', '1.jpg', 1305, '1');

