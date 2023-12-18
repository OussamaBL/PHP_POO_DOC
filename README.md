# **Overview**

This PHP code demonstrates a simple implementation of a CRUD (Create, Read, Update, Delete) system using a class-based approach. The code includes two classes, crud and User, which work together to perform basic database operations on a hypothetical "users" table.

## crud Class

### Definition

The crud class serves as a generic database handler and provides methods for common CRUD operations.

### Constructor

__construct($host, $dbname, $user, $password): Initializes a database connection using the provided parameters.

### Methods

1. Connexion($host, $dbname, $user, $password): Establishes a database connection using PDO.
2. create($table, $data): Inserts a new record into the specified table and returns the last inserted ID.
3. read($table, $id): Retrieves a record from the specified table based on the given ID.
4. update($table, $id, $data): Updates a record in the specified table based on the given ID.
5. delete($table, $id): Deletes a record from the specified table based on the given ID.

## User Class

### Definition

The User class represents a user entity with basic attributes such as ID, name, and email. It includes methods for performing CRUD operations specific to the "users" table.

### Constructor

__construct(string $name, string $email, int $id = null): Initializes a user object with the provided name, email, and an optional ID.

### Methods

1. insert(): Inserts a new user record into the "users" table and sets the ID of the object.
2. update(): Updates the name of the user in the "users" table and returns the updated user data.
3. delete(): Deletes the user record from the "users" table.
4. select(): Retrieves and returns the user data from the "users" table based on the object's ID.

## Usage Example

A sample usage example is provided at the end of the code, demonstrating the instantiation of the crud class, creating a new User object, performing insert, update, select, and delete operations on the user data.

### Instructions for Running the Code

1. Ensure a MySQL database is set up with the specified credentials.
2. Create a database named "test_poo_crud" and import the necessary table structure.
3. Update the $host, $dbname, $user, and $password variables with your database credentials.
4. Run the PHP script.


Note: The provided code assumes a basic understanding of PHP and PDO, and it serves as a starting point for building more complex CRUD applications.


