-- Query de selecao de livros por titulo
SELECT books.title FROM books WHERE books.title LIKE '%$pattern%';

-- Query de selecdao de livros por ano
SELECT books.title FROM books WHERE books.release_year = 1900;

-- Query se selecao de livros por autor
SELECT books.title FROM books WHERE books.author LIKE '%$pattern%';


INSERT INTO users(username,name,age,passwdhash,email,about,country) VALUES
("$username","$name","$age","$passwdhash","$email","$about","$country");

INSERT INTO books_read(id_book,id_user,bool_read) VALUES (1,1,1); -- todos os valores sao inteiros, mas o ultimo eh apenas 0/1

-- query para inserir comentarios
-- os campos score, id_book e id_user sao inteiros
-- campo date deve seguir o padrao listado na query como exemplo 'YYYY-MM-DD'
INSERT INTO `comments`(`comment_text`, `score`, `date`, `id_book`, `id_user`) VALUES ("$text", 10,'2015-12-17',1,1)

-- Query para mostrar livros mais lidos
SELECT id_book FROM (SELECT books_read.id_book, SUM(books_read.bool_read) qtd FROM books_read GROUP BY books_read.id_book ORDER BY qtd DESC) AS result;

-- Query para, dado um nome de usuario, retornar todos o nome e infos dos livros lidos desse usuario
SELECT books.id,books.title,books.author,books.release_year,books.language FROM books WHERE books.id IN  (SELECT books_read.id_book FROM `users` INNER JOIN `books_read` ON users.id=books_read.id_user WHERE users.username='$pattern');


-- Query para, dado um nome de usuario, retornar todos o nome e infos dos livros favoritos desse usuario
SELECT books.id,books.title,books.author,books.release_year,books.language FROM books WHERE books.id IN  (SELECT favoritve_books.id_book FROM `users` INNER JOIN `favoritve_books` ON users.id=favoritve_books.id_user WHERE users.username='$pattern');

