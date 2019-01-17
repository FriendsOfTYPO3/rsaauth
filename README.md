# TYPO3 Extension "rsaauth"

Contains a service to authenticate TYPO3 BE and FE users using private/public key
encryption of passwords.

This is a fallback if the instance is not accessible via HTTPS. However, rsaauth has
many drawbacks and is not a suitable solution over properly encrypted client/server
communication. All sites nowadays should be only accessible via HTTPS and rsaauth
is not needed.

The functionality was part of the TYPO3 Core until TYPO3 v10.0, and moved into its
own extension, receiving its own public repository.

## Installation
The latest version can be installed via TER (http://typo3.org) or via composer
by adding ''composer require friendsoftypo3/rsaauth'' in a TYPO3 v10.0+ installation.

## Current state
The encryption approach of this extension extension is deprecated. Use HTTPS.

## Contribution
Feel free to submit any pull request, or add documentation, tests, as you please.
We will publish a new version every once in a while, depending on the amount of changes
and pull requests submitted.

### License
The extension is published under GPL v2+, all included third-party libraries are
published under their respective licenses.

### Authors
Many contributors have been working on this area while this functionality was part of
the TYPO3 Core. This package is now maintained by a loose group of TYPO3 enthusiasts inside
the TYPO3 Community. Feel free to contact Benni Mack (benni.mack@typo3.org) for any questions
regarding "rsaauth".
