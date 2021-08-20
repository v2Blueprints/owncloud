#!/bin/sh

/home/app/occ maintenance:install -n --database "mysql" --database-host  ^^mariadb.hostname^^ --database-name ^^mariadb.database_name^^ --data-dir /var/www/data --database-user ^^mariadb.username^^ --database-pass ^^mariadb.password^^ --admin-user "admin" --admin-pass ^^configuration.admin_password^^
/home/app/occ background:cron
#/home/app/occ market:install user_ldap
#/home/app/occ ldap:create-empty-config default
#/home/app/occ ldap:set-config default ldapAgentName $ldap_dn
#/home/app/occ ldap:set-config default ldapAgentPassword $ldap_password
#/home/app/occ ldap:set-config default ldapBase dc=engines,dc=internal
#/home/app/occ ldap:set-config default ldapBaseGroups ou=Groups,dc=engines,dc=internal
#/home/app/occ ldap:set-config default ldapEmailAttribute maildrop
#/home/app/occ ldap:set-config default ldapBaseUsers ou=People,dc=engines,dc=internal
#/home/app/occ ldap:set-config default ldapGroupMemberAssocAttr uniqueMember
#/home/app/occ ldap:set-config default ldapHost ldap
#/home/app/occ ldap:set-config default ldapLoginFilter "(&(|(objectclass=inetOrgPerson))(uid=%uid))"
#/home/app/occ ldap:set-config default ldapLoginFilterEmail 0
#/home/app/occ ldap:set-config default lldapLoginFilterMode 0
#/home/app/occ ldap:set-config default ldapLoginFilterUsername 1
#/home/app/occ ldap:set-config default ldapPort 389
#/home/app/occ ldap:set-config default lldapUserDisplayName cn
#/home/app/occ ldap:set-config default ldapUserDisplayName cn
#/home/app/occ ldap:set-config default ldapUserDisplayName2 uid
#/home/app/occ ldap:set-config default ldapUserFilter  "(|(objectclass=inetOrgPerson))"
#/home/app/occ ldap:set-config default ldapUserFilterObjectclass inetOrgPerson
#/home/app/occ ldap:set-config default ldapExpertUUIDUserAttr entryuuid
#/home/app/occ ldap:set-config default ldapExpertUsernameAttr uid
#/home/app/occ ldap:set-config default ldapGroupFilter "cn=Owncloud Users,ou=$CONTAINER_NAME,ou=Applications,ou=Groups,dc=engines,dc=internal"
#/home/app/occ ldap:set-config default ldapUserFilterMode 1
#/home/app/occ ldap:set-config default ldapGroupFilterMode 1

/home/app/occ config:system:set trusted_domains  0 --value=localhost
/home/app/occ config:system:set trusted_domains  2 --value=^^domain.fqdn^^
