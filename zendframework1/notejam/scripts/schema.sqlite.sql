-- scripts/schema.sqlite.sql
--
-- You will need load your database schema with this SQL.

CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    email VARCHAR(75) NOT NULL,
    password VARCHAR(128) NOT NULL
);

CREATE TABLE IF NOT EXISTS pads (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    name VARCHAR(100) NOT NULL,
    user_id INTEGER NOT NULL REFERENCES users(id)
);

CREATE TABLE notes (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    pad_id INTEGER REFERENCES pads(id),
    user_id INTEGER NOT NULL REFERENCES users(id),
    name VARCHAR(100) NOT NULL,
    text text NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL
);