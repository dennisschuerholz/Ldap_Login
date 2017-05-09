<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2014 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['Secure connexion'] = 'Veilige verbinding (ldaps)';
$lang['Username'] = 'Je LDAP gebruikersnaam';
$lang['Your password'] = 'Je LDAP wachtwoord';
$lang['All LDAP users can use their ldap password everywhere on piwigo if needed.'] = 'Alle LDAP gebruikers kunnen, indien nodig, hun LDAP wachtwoord overal in Piwigo gebruiken.';
$lang['Ldap groups'] = 'LDAP groepen';
$lang['Ldap port'] = 'LDAP poort';
$lang['Ldap users'] = 'LDAP gebruikers';
$lang['Search Ldap groups ?'] = 'LDAP-gebruikers zoeken? Als je je groepen rijkelijk hebt verdeeld over verschillende categorieën&euml;n of OU, dan heb je dit nodig. Als je het ontwijkt, dan houd je een LDAP-aanvraag. Je hebt het wellicht niet nodig als je LDAP-indeling simpel is (bijv.: cn=groepsnaam,ou=groepen,dc=voorbeeld,dc=com).';
$lang['Search Ldap users ?'] = 'LDAP-gebruikers zoeken? Als je je gebruikers rijkelijk hebt verdeeld over verschillende categorieën&euml;n of OU, dan heb je dit nodig. Als je het ontwijkt, dan behoud je een LDAP-aanvraag. Je hebt het wellicht niet nodig als je LDAP-indeling simpel is (bijv.: uid=gebruiker,ou=mensen,dc=voorbeeld,dc=com).';
$lang['Test Settings'] = 'Testinstellingen';
$lang['To get them out of these roles, they must be sorted of the ldap group and then role updated in the <a href="admin.php?page=user_list">piwigo admin</a>. If a group is mandatory as described in the <a href="admin.php?page=plugin-Ldap_Login-newusers">new piwigo users tab</a>, then they must also belong to the users group.'] = 'Om ze uit deze rollen te krijgen moeten ze worden gesorteerd in de LDAP-groep en dan bijgewerkt overgaan in de <a href="admin.php?page=user_list">Piwigo-beheer</a>. Als een groep verplicht is, zoals beschreven in de <a href="admin.php?page=plugin-Ldap_Login-newusers">sectie voor nieuwe Piwigo-gebruikers, dan moeten zij ook behoren tot de gebruikersgroep.';
$lang['Users branch'] = 'Categorie waar LDAP-gebruikers moeten worden gevonden (bijv.: ou=users):';
$lang['Warning: LDAP Extension missing.'] = 'Waarschuwing: LDAP-extensie ontbreekt.';
$lang['You must save the settings with the Save button just up there before testing here.'] = 'Voordat je de instellingen kunt testen moet je de instellingen opslaan door de bewaarknop hierboven te gebruiken.';
$lang['Attribute corresponding to the user name'] = 'Attribuut dat overeenkomt met de gebruikersnaam.';
$lang['Base DN'] = 'Base DN van LDAP-server';
$lang['Bind DN, field in full ldap style'] = 'Bekrachtig DN in LDAP-stijl';
$lang['Bind password'] = 'Bekrachtig wachtwoord';
$lang['Do you allow new piwigo users to be created when users authenticate succesfully on the ldap ?'] = 'Moeten nieuwe Piwigo-gebruikers worden aangemaakt wanneer gebruikers succesvol authentiseren via LDAP?';
$lang['Do you want admins to be advertised by mail in case of new users creation upon ldap login ?'] = 'Wil je dat beheerders via email op de hoogte worden gesteld bij de registratie van nieuwe gebruikers bij LDAP-logins?';
$lang['Do you want to send mail to the new users, like casual piwigo users receive ?'] = 'Moeten nieuwe gebruikers mail ontvangen die ook reguliere Piwigo-gebruikers ontvangen?';
$lang['Groups branch'] = 'Categorie waar LDAP-groepen kunnen worden gevonden (bijv.: ou=groepen):';
$lang['If empty, localhost and standard protocol ports will be used in configuration.'] = 'Wanneer dit veld leeg is worden in de configuratie Localhost en standaard protocolpoorten gebruikt.';
$lang['If empty, standard protocol ports will be used by the software.'] = 'Wanneer dit veld leeg is worden door de software Standaard protocolpoorten gebruikt.';
$lang['If you create a <a href="admin.php?page=group_list">piwigo group</a> with the same name as an ldap one, all members of the ldap group will automatically join the piwigo group at their next authentication. This allows you to create <a href="admin.php?page=help&section=groups">specific right access management</a> (restrict access to a particaular album...).'] = 'Als je een <a href="admin.php?page=group_list">Piwigo-groep</a> aanmaakt met dezelfde naam als een LDAP-groep, dan zullen , bij de volgende authenticatie, alle leden van die LDAP-groep automatisch lid worden van de gelijknamige Piwigo-groep. Dit stelt je in staat om <a href="admin.php?page=help&section=groups">specifiek toegangsrechtenbeheer</a> toe te passen (het weigeren van toegang tot een specifiek album...). Om deze gebruikers automatisch lid te laten worden, moet je ze eerst uit de LDAP-groepen halen, zodat de Piwigo-groepen kunnen worden bijgewerkt.';
$lang['Ldap connection credentials'] = 'LDAP-verbindings-gegevens';
$lang['Ldap server host'] = 'LDAP-serverhost';
$lang['Ldap server host connection'] = 'LDAP-serververbinding';
$lang['Ldap_Login Plugin'] = 'Ldap_Login plug-in';
$lang['Ldap_Login Test'] = 'Ldap_Login test';
$lang['Ldap_Login configuration'] = 'Ldap_Login configuratie';
$lang['Let the fields blank if the ldap accept anonymous connections.'] = 'Laat deze velden leeg als LDAP anonieme verbindingen accepteert.';
$lang['New users when ldap auth is successfull'] = 'Nieuwe gebruikers als LDAP-autorisatie succesvol is ';
$lang['Save'] = 'Bewaren';