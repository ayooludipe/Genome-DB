# Human Genome System

## Overview
The Genome Data Management System is a database system designed to store and manage gene and protein data along with their corresponding nucleotide and protein sequences.

## Features
- Store gene and protein information including names and descriptions.
- Store nucleotide and protein sequence data.
- Establish links between genes and proteins.

## Installation
1. Clone this repository to your local machine.
2. Execute the `ddl.sql` script in your preferred SQL database management system to create the necessary tables.
3. You may populate the tables with sample data for testing purposes using the provided `sample_data.sql` script.
4. Start using the system to manage your genome data.

## Usage
- Use the provided SQL queries to interact with the database and perform operations such as inserting, updating, and querying data.
- Ensure proper handling of foreign key constraints when linking genes and proteins.

## File Structure
- `ddl.sql`: Contains the Data Definition Language (DDL) code to create the database tables.
- `sample_data.sql`: Optional script to populate the tables with sample data.
- `README.md`: Documentation providing an overview of the project, installation instructions, and usage guidelines.

## Contributors
- [aoludipe](https://github.com/ayooludipe)

## License
This project is licensed under the [MIT License](LICENSE).
