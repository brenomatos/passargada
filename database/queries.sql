-- Query de selecao de livros por titulo
SELECT books.title FROM books WHERE books.title LIKE '%$pattern%';

-- Query de selecdao de livros por ano
SELECT books.title FROM books WHERE books.release_year = 1900;

-- Query se selecao de livros por autor
SELECT books.title FROM books WHERE books.author LIKE '%$pattern%';


INSERT INTO users(username,name,age,passwdhash,email,about,country) VALUES
("$username","$name","$age","$passwdhash","$email","$about","$country");
