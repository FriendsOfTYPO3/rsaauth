.. include:: /Includes.rst.txt

==================
RSA authentication
==================

:Extension key:
   rsaauth

:Package name:
   friendsoftypo3/rsaauth

:Version:
   |release|

:Language:
   en

:Author:
   TYPO3 Core Team & Contributors

:License:
   This document is published under the
   `Open Content License <https://www.openhub.net/licenses/opl>`__.

:Rendered:
   |today|

----

Contains a service to authenticate TYPO3 BE and FE users using private/public
key encryption of passwords.

This is a fallback if the instance is not accessible via HTTPS. However, this
extension has many drawbacks and is not a suitable solution over properly
encrypted client/server communication. All sites nowadays should be only
accessible via HTTPS and rsaauth is not needed.

The functionality was part of the TYPO3 Core until TYPO3 v10.0, and moved into
its own extension, receiving its own public repository.

----

**Table of Contents:**

.. toctree::
   :maxdepth: 2
   :titlesonly:

   Introduction/Index
   Installation/Index
   UsersManual/Index
   Administration/Index
   Contribution/Index

.. Meta Menu

.. toctree::
   :hidden:

   Sitemap
   genindex
