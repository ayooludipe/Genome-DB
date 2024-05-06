# Human Genome Database

Welcome to the Human Genome Database project! This repository contains the code and documentation for a comprehensive human genome database designed to facilitate genetic research and analysis.

## Overview

The Human Genome Database is a centralized repository of genomic data sourced from KEGG Homo sapiens and UniProt. It provides researchers with access to gene sequences, chromosomal information, protein data, and genetic variants associated with the human genome.

## Features
- Database Schema: Utilizes a PostgreSQL database with tables for genes, chromosomes, proteins, and variants.
- Data Loading: Includes scripts to load data from KEGG Homo sapiens and UniProt into the database.
- Data Analysis: Provides PHP scripts for performing various analyses on the genomic data, such as gene-disease association analysis, population genetics analysis, and variant analysis.
- Web Interface: Allows users to interact with the database through a web-based interface for querying and visualization

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
