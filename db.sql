CREATE DATABASE er_wait_times;

\c er_wait_times

CREATE TABLE patients (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100),
    severity INT,
    arrival_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status VARCHAR(20) DEFAULT 'waiting'
);
