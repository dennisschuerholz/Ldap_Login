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
$lang['Ldap_Login configuration'] = 'Ldap_Login innstillinger';
$lang['Let the fields blank if the ldap accept anonymous connections.'] = 'La feltene stå tomme hvis LDAP godtar anonyme tilkoblinger.';
$lang['New users when ldap auth is successfull'] = 'Nye brukere når LDAP automatisk identifisering er vellykket';
$lang['Save'] = 'Lagre';
$lang['Search Ldap groups ?'] = 'Søk Ldap brukere? Hvis du har dine grupper fordelt i flere bransjer eller OU, trenger du denne. Hvis du unngår det, sparer du en ldap forespørsel. Du trenger det kanskje ikke hvis ditt ldap tre er enkelt (f.eks: cn = gruppenavn, ou = grupper, dc = eksempel, dc = com).';
$lang['Search Ldap users ?'] = 'Søk Ldap brukere? Hvis du har dine brukere fordelt i flere bransjer eller OU, trenger du denne. Hvis du unngå det, sparer du en Ldap forespørsel. Du trenger det kanskje ikke hvis ditt Ldap tre er enkelt (f.eks: uid = bruker, ou = folk, dc = eksempel, dc = com).';
$lang['Secure connexion'] = 'Sikker tilkobling (ldaps)';
$lang['Test Settings'] = 'Testinnstillingene';
$lang['To get them out of these roles, they must be sorted of the ldap group and then role updated in the <a href="admin.php?page=user_list">piwigo admin</a>. If a group is mandatory as described in the <a href="admin.php?page=plugin-Ldap_Login-newusers">new piwigo users tab</a>, then they must also belong to the users group.'] = 'For å få dem ut av disse rollene, må de bli sortert av ldap gruppen og deretter rolle oppdatert i <a href="admin.php?page=bruker_liste"> Piwigo admin </a>. Hvis en gruppe er obligatorisk som beskrevet i <a href="admin.php?page=programtillegget-Ldap_Login-nyebrukere"> ny Piwigo bruker fane</a>, da må de også tilhører bruker gruppen.';
$lang['Username'] = 'Ditt LDAP brukernavn';
$lang['Users branch'] = 'Bransje der LDAP brukere bør finnes (f.eks: ou = brukere):';
$lang['Warning: LDAP Extension missing.'] = 'Advarsel: LDAP Filtype mangler.';
$lang['You must save the settings with the Save button just up there before testing here.'] = 'Du må lagre innstillingene ved hjelp av Lagre-knappen ovenfor, før du tester dem.';
$lang['Your password'] = 'Ditt LDAP-passord';
$lang['All LDAP users can use their ldap password everywhere on piwigo if needed.'] = 'Alle LDAP-brukere kan bruke sine LDAP passord overalt i Piwigo hvis nødvendig.';
$lang['Attribute corresponding to the user name'] = 'kjennetegn som tilsvarer brukernavnet';
$lang['Base DN'] = 'Grunnleggende DN for LDAP server (f.eks.: dc=eksempel,dc=com):';
$lang['Bind DN, field in full ldap style'] = 'Koble DN i LDAP stil (f.eks.: cn=admin,dc=eksempel,dc=com).';
$lang['Bind password'] = 'Koble passord';
$lang['Do you allow new piwigo users to be created when users authenticate succesfully on the ldap ?'] = 'Bør nye Piwigo brukere opprettes når samme brukere godkjennes  via LDAP?';
$lang['Do you want admins to be advertised by mail in case of new users creation upon ldap login ?'] = 'Ønsker du at admin skal bli innformert via e-post i tilfelle  nye brukere registreres med Ldap innlogging?';
$lang['Do you want to send mail to the new users, like casual piwigo users receive ?'] = 'Bør nye brukere motta e-post samme som for tilfeldige Piwigo brukere?';
$lang['Groups branch'] = 'Grener der LDAP-grupper bør finnes (f.eks: ou = grupper):';
$lang['If empty, localhost and standard protocol ports will be used in configuration.'] = 'Hvis tomme, lokale tjener og standard protokoll porter vil bli brukt i innstillingene.';
$lang['If empty, standard protocol ports will be used by the software.'] = 'Dersom tom, vil standard protokoll-portene bli brukt av programvaren.';
$lang['If you create a <a href="admin.php?page=group_list">piwigo group</a> with the same name as an ldap one, all members of the ldap group will automatically join the piwigo group at their next authentication. This allows you to create <a href="admin.php?page=help&section=groups">specific right access management</a> (restrict access to a particaular album...).'] = 'Hvis du oppretter en <a href="admin.php?page=gruppe_liste"> Piwigo gruppe </a> med samme navn som en Ldap, vil alle medlemmer av LDAP-gruppen automatisk bli med Piwigo gruppen på deres neste godkjenning. Dette lar deg lage <a href="admin.php?page=help§ion=grupper"> bestemt høyre tilgangsstyring </a> (begrenset tilgangen til en betemt album ...). Likevel, for å få ut disse brukerene, må du først få dem ut av LDAP-gruppen, så kan Piwigo gruppen oppdateres.';
$lang['Ldap connection credentials'] = 'LDAP tilkoblings legitimasjon';
$lang['Ldap groups'] = 'LDAP-grupper';
$lang['Ldap port'] = 'LDAP port';
$lang['Ldap server host'] = 'LDAP server tjener';
$lang['Ldap server host connection'] = 'LDAP-server-tilkobling';
$lang['Ldap users'] = 'LDAP-brukere';
$lang['Ldap_Login Plugin'] = 'Ldap_Login Programtillegg';
$lang['Ldap_Login Test'] = 'Ldap_Login Test';