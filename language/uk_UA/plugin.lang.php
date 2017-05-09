<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2015 Piwigo Team                  http://piwigo.org |
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
$lang['Groups branch'] = 'Гілка в якій повинні бути знайдені LDAP групи (наприклад: ou=groups):';
$lang['All LDAP users can use their ldap password everywhere on piwigo if needed.'] = 'Якщо потрібно, усі користувачі LDAP, можуть використовувати всюди в Piwigo свої LDAP паролі.';
$lang['Do you want to send mail to the new users, like casual piwigo users receive ?'] = 'Чи повинні нові користувачі отримувати пошту, як звичайні користувачі Piwigo?';
$lang['Do you want admins to be advertised by mail in case of new users creation upon ldap login ?'] = 'Ви хочете, щоб адміністратори були сповіщенні по пошті в тому разі, якщо було створено нового користувача під час входу в LDAP?';
$lang['Do you allow new piwigo users to be created when users authenticate succesfully on the ldap ?'] = 'Повинні чи ні, створюватись нові користувачі Piwigo, під час вдалої авторизації користувачей через LDAP?';
$lang['Bind password'] = 'Зв\'язаний пароль';
$lang['Bind DN, field in full ldap style'] = 'Зв\'язаний DN в стилі LDAP (наприклад: cn=admin,dc=example,dc=com).';
$lang['Base DN'] = 'Базовий DN серверу LDAP (наприклад: dc=example,dc=com):';
$lang['Attribute corresponding to the user name'] = 'Атрибут, відповідний імені користувача';
$lang['To get them out of these roles, they must be sorted of the ldap group and then role updated in the <a href="admin.php?page=user_list">piwigo admin</a>. If a group is mandatory as described in the <a href="admin.php?page=plugin-Ldap_Login-newusers">new piwigo users tab</a>, then they must also belong to the users group.'] = 'Для отримання цих ролей, вони повинні бути відсортовуванні в групах LDAP, а потім роль оновлюється у <a href="admin.php?page=user_list">розділі адміністратора piwigo</a>. Якщо група обов’язкова, як описано в <a href="admin.php?page=plugin-Ldap_Login-newusers">вкладці нового користувача piwigo</a>, після чого, вони повинні бути також приєднаними до групи користувачів.';
$lang['You must save the settings with the Save button just up there before testing here.'] = 'Ви повинні зберегти налаштування, використовуючи вище кнопку Зберегти, перед тим як переверяти їх.';
$lang['Username'] = 'Ваше LDAP ім’я';
$lang['Your password'] = 'Ваш LDAP пароль';
$lang['Warning: LDAP Extension missing.'] = 'Попередження: LDAP розширення відсутнє.';
$lang['Users branch'] = 'Гілка де повинні бути знайдені LDAP користувачі (наприклад: ou=користувачі)';
$lang['Test Settings'] = 'Перевірити налаштування';
$lang['Secure connexion'] = 'Безпечне з’єднання (ldaps)';
$lang['Search Ldap users ?'] = 'Шукати LDAP користувачей ? Вам це знадобиться, якщо користувачі поширені по декількох гілках чи організаційним підрозділам (OU). Якщо ви уникните цього, ви збережете один LDAP запит. Також воно вам не потрібно, якщо у вас звичане дерево (наприклад: cn=користувач,ou=люди,dc=example,dc=com).';
$lang['Search Ldap groups ?'] = 'Шукати LDAP користувачей ? Вам це знадобиться, якщо групи поширені по декількох гілках чи організаційним підрозділам (OU). Якщо ви уникните цього, ви збережете один LDAP запит. Також воно вам не потрібно, якщо у вас звичане дерево (наприклад: cn=ім’я групи,ou=групи,dc=example,dc=com).';
$lang['If you create a <a href="admin.php?page=group_list">piwigo group</a> with the same name as an ldap one, all members of the ldap group will automatically join the piwigo group at their next authentication. This allows you to create <a href="admin.php?page=help&section=groups">specific right access management</a> (restrict access to a particaular album...).'] = 'Якщо ви створите <a href="admin.php?page=group_list">групу piwigo</a> таку ж саме, як в ldap, то усі члени ldap групи автоматично увійдуть в групу piwigo при наступному вході. Це дозволяє вам створити <a href="admin.php?page=help&section=groups">керування специфічними правами доступу</a> (обмежити доступ до конкретного альбома...). Тим не менше, для того щоб, витягнути цих користувачей, спочатку потрібно отримати їх з ldap групи, і тільки потім група piwigo може бути оновлена.';
$lang['Save'] = 'Зберегти';
$lang['New users when ldap auth is successfull'] = 'Нові користувачі коли авторизація LDAP була успішною';
$lang['Let the fields blank if the ldap accept anonymous connections.'] = 'Залиште поля порожніми якщо LDAP підтримує анонімні з’єднання';
$lang['Ldap_Login configuration'] = 'Налаштування Ldap_Login';
$lang['Ldap_Login Test'] = 'Тест Ldap_Login';
$lang['Ldap_Login Plugin'] = 'Плагін Ldap_Login';
$lang['Ldap users'] = 'LDAP користувачі';
$lang['Ldap server host connection'] = 'З’єднання з сервером LDAP';
$lang['Ldap server host'] = 'Хост з сервером LDAP ';
$lang['Ldap port'] = 'LDAP Порт';
$lang['Ldap groups'] = 'LDAP Групи';
$lang['Ldap connection credentials'] = 'Авторізаційні данні для з’єднання з LDAP';
$lang['If empty, standard protocol ports will be used by the software.'] = 'Якщо пусто, то програма буде використовувати стандартні порти протоколу';
$lang['If empty, localhost and standard protocol ports will be used in configuration.'] = 'Якщо пусто, то в налаштуваннях будуть використовуватись, локальний хост та стандартні порти протоколу.';