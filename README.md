# Ldap_Login
LDAP authentication plugin for piwigo with user-group support

## Exmaple-Config for an M$-AD:

#### LDAP-Serververbindung
**LDAP-Server**: srv.emxample.com</br>
(x) **Secure connection** _(--> remember that the LDAPS-Server certificate must be imported on your piwigo server)_</br>
**LDAP-Port**: 636</br>

#### LDAP Attribute
**Base DN wo LDAP-Benutzer gefunden werden sollen (zB.: ou=users,dc=example,dc=com):**: cn=Users,dc=example,dc=com</br>
**Attribute entsprechend des Benutzernamens**: sAMACcountName</br>
**DN of group for membership-check (memberOf)**: dn=piwigo_users,cn=Users,dc=example,dc=com</br>

#### LDAP-Verbindungsreferenzen
**Bind DN im LDAP-Style (zB.: cn=admin,dc=example,dc=com).**: cn=binduser,cn=Users,dc=exmaple,dc=com</br>
**Bind passwort**: mysecret123</br>
</br>
_--> SAVE and enjoy :)_

## Credits

Original version by [22decembre](http://piwigo.org/dev/browser/extensions/Ldap_Login)
Forked by [f1dot4 on Github](https://github.com/f1dot4/Ldap_Login) and [Frederik Lindenaar on his private GitLab](https://gitlab.lindenaar.net/piwigo/Ldap_Login)
Now further development by [Dennis Schürholz](https://github.com/dennisschuerholz) and [Jan-Frederik Rieckers](https://github.com/janfred/) is going on

