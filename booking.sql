CREATE TABLE booking(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    cus_name VARCHAR(255) NOT NULL,
    movie_name VARCHAR(255) NOT NULL,
    price text NOT NULL,
    total_tickets text NOT NULL,
    movie_name VARCHAR(255) NOT NULL,
    screen VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    available INTEGER NOT NULL
);