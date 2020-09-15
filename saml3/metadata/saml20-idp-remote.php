<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote 
 */
$metadata['https://sts.windows.net/cca54f78-6072-40cd-a585-64625c7767df/'] = array (
  'entityid' => 'https://sts.windows.net/cca54f78-6072-40cd-a585-64625c7767df/',
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://login.microsoftonline.com/cca54f78-6072-40cd-a585-64625c7767df/saml2',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://login.microsoftonline.com/cca54f78-6072-40cd-a585-64625c7767df/saml2',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://login.microsoftonline.com/cca54f78-6072-40cd-a585-64625c7767df/saml2',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIC8DCCAdigAwIBAgIQVbv7ro50A6ZO9IRui58qqDANBgkqhkiG9w0BAQsFADA0MTIwMAYDVQQDEylNaWNyb3NvZnQgQXp1cmUgRmVkZXJhdGVkIFNTTyBDZXJ0aWZpY2F0ZTAeFw0yMDA3MDIwNzI4MjlaFw0yMzA3MDIwNzI4MDZaMDQxMjAwBgNVBAMTKU1pY3Jvc29mdCBBenVyZSBGZWRlcmF0ZWQgU1NPIENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAt1yeXNegSswgpcMCnj5FCEosvlaMshxhSd7K1wcZgkuAJsYH7Nc8cOU6ljIYB5z1cP2R5LThOx1N+3keP+l178qij22+4vxJz4eTYp0n3nJazU8ONSLA8YN+JonwgeoQYFNFwR4gk4HyF4z46A1W3hYMgAmuoF61HYua4dIJhivHPDSwLhDMqxof4ag8Q2+XtTm/jRP0mWUVM+g4eGkNTpikWg+JQUuEnipv+F2ndlnA+/fK1l8tuqxG2yH6nQoC4bAMDvj4Rv9pHkHKHImJVNxJlE95wjhnL0483lh8ao4bgPh84ljlmRCpv0BwBep5IJUJYJniTREPbDYDQye86QIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQA0KGv35EPkJi5aBdTFTdEdvXZjJwnJ5b7BIonAbzMv1UgBC6g13v/RH+eCFRB86QpMRX3mqrqOophm9zv1+6an5U+iL68zdwp1/9tCj37CMq+dBE+h4YwrBFcqsi6wKvCejtmiJF98m16xU7deBtb0GuO2w/8XGnjwCqUiXOBYEduTYpe2wfVEgFhyDbx02VMyoILSGpoauk5k0y2hDjhNmd2wLyl6ZFoP5FOnmVATbKVm8lYRrVU5+Mrv97aigEk1lc/nxd7pqqSG6hoxqhMCfF++K5d2GPQTpIVmOvAr5IjMN5ufYPbAPQHbZltLscNlM7qtuFG2RGNc1mZYgeVB',
    ),
  ),
);
?>
