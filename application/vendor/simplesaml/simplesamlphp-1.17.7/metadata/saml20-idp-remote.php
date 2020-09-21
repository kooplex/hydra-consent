<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote 
 */

$metadata['https://idp.elte.hu/auth/saml2/idp/metadata.php'] = array (
  'metadata-set' => 'saml20-idp-remote',
  'entityid' => 'https://idp.elte.hu/auth/saml2/idp/metadata.php',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://idp.elte.hu/auth/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://idp.elte.hu/auth/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'keys' => 
  array (
    0 => 
    array (
      'type' => 'X509Certificate',
      'signing' => true,
      'encryption' => true,
      'X509Certificate' => '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',
    ),
    1 => 
    array (
      'type' => 'X509Certificate',
      'signing' => true,
      'encryption' => false,
      'X509Certificate' => 'MIIFkDCCBHigAwIBAgIQNtW+cEp4OnI5Axef4+vfPjANBgkqhkiG9w0BAQsFADBkMQswCQYDVQQGEwJOTDEWMBQGA1UECBMNTm9vcmQtSG9sbGFuZDESMBAGA1UEBxMJQW1zdGVyZGFtMQ8wDQYDVQQKEwZURVJFTkExGDAWBgNVBAMTD1RFUkVOQSBTU0wgQ0EgMjAeFw0xNTA0MTYwMDAwMDBaFw0xODA0MTUyMzU5NTlaMDkxITAfBgNVBAsTGERvbWFpbiBDb250cm9sIFZhbGlkYXRlZDEUMBIGA1UEAxMLaWRwLmVsdGUuaHUwggIiMA0GCSqGSIb3DQEBAQUAA4ICDwAwggIKAoICAQDdSZws7Pu9kaXYcH5rjkZfMFbgmqWTRHo4o8mHYU02NS4TSI9QH+f8q9qIH6svvgERmkU0DU6Ynx82mz46MLCZo9Sov+clC+b/K5b6JQGYHPSOu3KxYMaMooOc9EPmbNQbq2b7ph8jfqX+usG4GjXZcPu9N8Q8rtqVdp5spfRFOdYv3GUuUF9aXm6aK6sELSkJMEubk+WBxMZLxKwei65q2tLGXHMVKdXwkLM7/tCtPNOc61EVpLszSYlvdz6j1q+D9BkVGM3MVZvsXVWH4DyYNILUzg6sbz7OijFwe20oBMMqJdQkjWNV2nxtrrqzPIhD377gzP31nUdq08Ra+sdHIJFSZO4WT8oOdU7JVAE0Gk4O9p3B8R5mT+6UPwwDGSFctrZlaxuYNWhrRZMfWi3TcylztA3j2fwUr6nO9SvrzFOaZaaqkQ5Cluv5L8j8wtD9VPXkHlYLBu/RspjT/jLxefvcw2vSlwAi9GNLiVQPl1xQpHf/qQfR+43dr6DfLhYqMz0gb0t3tDrLlRgz3edw6NKcwcW6P5swu2U31qiM/au7MzkFvyoUCjDf6rLiAZkKjejah2QCe4jR2aEooW49lycAgFlJT2l8FuTqLLbl7pSuo/BRlR1vwaqT5CnOCWUV94NVQqGSxeCRRN3JANRK8CP3g1ghnXLTKLGR66amowIDAQABo4IBZzCCAWMwHwYDVR0jBBgwFoAUW9CKHJoyW+C13ZZUG+GGKLD9tr0wHQYDVR0OBBYEFCwT2QevkFnbyHN8yPYBTLejDNU9MA4GA1UdDwEB/wQEAwIFoDAMBgNVHRMBAf8EAjAAMB0GA1UdJQQWMBQGCCsGAQUFBwMBBggrBgEFBQcDAjAiBgNVHSAEGzAZMA0GCysGAQQBsjEBAgIdMAgGBmeBDAECATA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLnVzZXJ0cnVzdC5jb20vVEVSRU5BU1NMQ0EyLmNybDBsBggrBgEFBQcBAQRgMF4wNQYIKwYBBQUHMAKGKWh0dHA6Ly9jcnQudXNlcnRydXN0LmNvbS9URVJFTkFTU0xDQTIuY3J0MCUGCCsGAQUFBzABhhlodHRwOi8vb2NzcC51c2VydHJ1c3QuY29tMBYGA1UdEQQPMA2CC2lkcC5lbHRlLmh1MA0GCSqGSIb3DQEBCwUAA4IBAQBvmUAvpXhrFcxHlk/awFt4kP3WVgCSfalvyobCiYjj6puGvG7gJac33jx4ESxGRzZ19W97nSJ0O04XEE/x/CiC0IPibHKwpsPHCdS+PZpIcEJKHqxuWv5YjggNMoDNCXG92mUs+LqU6Rzczrqoee2KoaNP0oYWkb1P6RAFGJG6hCo3tIEssyMn+BsjVafbwX3+hD/96EFipRgyODqH1sKWyYUhcWsnjJqp0kNN6cEfc0pSpkd0JppGPFnVxu2CdtgFwa93TEupIHgvTN7aDpd2j/tYAVELUltql0ZMZKuNSOvao+k2zHtvYNjxAqGP8A4MpAx9UXcXQZvK9C/M6IUG',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
    0 => 
    array (
      'index' => 0,
      'Location' => 'https://idp.elte.hu/auth/saml2/idp/ArtifactResolutionService.php',
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
    ),
  ),
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  'OrganizationName' => 
  array (
    'hu' => 'Eötvös Loránd Tudományegyetem',
    'en' => 'Eötvös Loránd University',
  ),
  'OrganizationDisplayName' => 
  array (
    'hu' => 'Eötvös Loránd Tudományegyetem',
    'en' => 'Eötvös Loránd University',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'www.elte.hu',
  ),
  'scope' => 
  array (
    0 => 'elte.hu',
  ),
);

