Purpose
===========

Provides a Worker to process incoming messages for yesHEis system. Performs the following functions..
* Store updated item data in local storage
* Update taxonomy in local storage
* Re-index local store of Item and Taxonomy data

Installation
============
* Setup artisan workers to bind a number of RabbitMQ queues to specific topics

Usage
==========

Laravel yesHEis Catalog Messaging Workers

Topics
==========
* item.publish
* item.update
* term.create
* term.update
* term.delete
* category.create
* category.update
* category.delete
* user.update
* session.delete
* session.touch
