CREATE TABLE categories (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    description TEXT
);

CREATE TABLE pictures (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    category_id INTEGER,
    name TEXT NOT NULL,
    description TEXT,
    image TEXT,
    price REAL,
    status TEXT DEFAULT 'Disponible',
    tecnique TEXT,
    measure TEXT,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);
