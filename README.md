[![Latest Stable Version](https://poser.pugx.org/friendsoftypo3/rsaauth/v/stable.svg)](https://extensions.typo3.org/extension/rsaauth/)
[![TYPO3](https://img.shields.io/badge/TYPO3-10-orange.svg?style=flat-square)](https://get.typo3.org/version/10)
[![Total Downloads](https://poser.pugx.org/friendsoftypo3/rsaauth/d/total.svg)](https://packagist.org/packages/friendsoftypo3/rsaauth)
[![Monthly Downloads](https://poser.pugx.org/friendsoftypo3/rsaauth/d/monthly)](https://packagist.org/packages/friendsoftypo3/rsaauth)

# TYPO3 extension `rsaauth`

Contains a service to authenticate TYPO3 BE and FE users using private/public
key encryption of passwords.

This is a fallback if the instance is not accessible via HTTPS. However, this
extension has many drawbacks and is not a suitable solution over properly
encrypted client/server communication. All sites nowadays should be only
accessible via HTTPS and rsaauth is not needed.

The functionality was part of the TYPO3 Core until TYPO3 v10.0, and moved into
its own extension, receiving its own public repository.

|                  | URL                                                          |
|------------------|--------------------------------------------------------------|
| **Repository:**  | https://github.com/FriendsOfTYPO3/rsaauth                    |
| **Read online:** | https://docs.typo3.org/p/friendsoftypo3/rsaauth/main/en-us/  |
| **TER:**         | https://extensions.typo3.org/extension/rsaauth               |
