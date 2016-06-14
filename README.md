# simplemediaserver

Keeping your media stupid simple since 2016.

## Information

simplemediaserver is designed to work with the Bitnami WAMP stack 5.6.22-0, although it is likely to work on other XAMP stacks.

To deploy, pull this repository into your public HTML folder (for Bitnami, this is apache2/htdocs).

## TODO

#### General

- Include SQL for creating (and populating) tables
- Move the following files to a subfolder:
  - query.php
  - reset.php
- Pull database connection variables from a config file

#### Create

- upload.php
- reset.php (for creating and populating the database tables with dummy data)

#### search.php

- Implement search string parsing -- separate keywords by spaces
