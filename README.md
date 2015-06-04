# Ldap_Login
LDAP authentication plugin for piwigo with user-group support

## Exmaple-Config for an M$-AD:

##### LDAP-Serververbindung
*LDAP-Server*: srv.emxample.com
(x) *Secure connection* _(--> remember that the LDAPS-Server certificate must be imported on your piwigo server)_
*LDAP-Port*: 636

##### LDAP Attribute
*Base DN wo LDAP-Benutzer gefunden werden sollen (zB.: ou=users,dc=example,dc=com):*: cn=Users,dc=example,dc=com
*Attribute entsprechend des Benutzernamens*: sAMACcountName
*DN of group for membership-check (memberOf)*: dn=piwigo_users,cn=Users,dc=example,dc=com

##### LDAP-Verbindungsreferenzen
*Bind DN im LDAP-Style (zB.: cn=admin,dc=example,dc=com).*: cn=binduser,cn=Users,dc=exmaple,dc=com
*Bind passwort*: mysecret123

_--> SAVE and enjoy :)_
