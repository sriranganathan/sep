<?php
$ldapconn = ldap_connect("10.0.0.38")
    or die("Could not connect to LDAP server.");
ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);
$ldapbind = @ldap_bind($ldapconn, "CN=106114073,OU=2014,OU=UG,OU=CSE,DC=octa,DC=edu", "Password2");
if ($ldapbind) {
   $sr=ldap_search($ldapconn,"DC=octa,DC=edu", "cn=thirumaran");
   print_r(ldap_get_entries($ldapconn,$sr));
} else {
  echo "LDAP bind failed...\n";
}
