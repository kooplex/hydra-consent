# WellKnown

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorization_endpoint** | **string** | URL of the OP&#39;s OAuth 2.0 Authorization Endpoint | 
**claims_supported** | **string[]** | JSON array containing a list of the Claim Names of the Claims that the OpenID Provider MAY be able to supply values for. Note that for privacy or other reasons, this might not be an exhaustive list. | [optional] 
**id_token_signing_alg_values_supported** | **string[]** | JSON array containing a list of the JWS signing algorithms (alg values) supported by the OP for the ID Token to encode the Claims in a JWT. | 
**issuer** | **string** | URL using the https scheme with no query or fragment component that the OP asserts as its Issuer Identifier. If Issuer discovery is supported , this value MUST be identical to the issuer value returned by WebFinger. This also MUST be identical to the iss Claim value in ID Tokens issued from this Issuer. | 
**jwks_uri** | **string** | URL of the OP&#39;s JSON Web Key Set [JWK] document. This contains the signing key(s) the RP uses to validate signatures from the OP. The JWK Set MAY also contain the Server&#39;s encryption key(s), which are used by RPs to encrypt requests to the Server. When both signing and encryption keys are made available, a use (Key Use) parameter value is REQUIRED for all keys in the referenced JWK Set to indicate each key&#39;s intended usage. Although some algorithms allow the same key to be used for both signatures and encryption, doing so is NOT RECOMMENDED, as it is less secure. The JWK x5c parameter MAY be used to provide X.509 representations of keys provided. When used, the bare key values MUST still be present and MUST match those in the certificate. | 
**response_types_supported** | **string[]** | JSON array containing a list of the OAuth 2.0 response_type values that this OP supports. Dynamic OpenID Providers MUST support the code, id_token, and the token id_token Response Type values. | 
**scopes_supported** | **string[]** | SON array containing a list of the OAuth 2.0 [RFC6749] scope values that this server supports. The server MUST support the openid scope value. Servers MAY choose not to advertise some supported scope values even when this parameter is used | [optional] 
**subject_types_supported** | **string[]** | JSON array containing a list of the Subject Identifier types that this OP supports. Valid types include pairwise and public. | 
**token_endpoint** | **string** | URL of the OP&#39;s OAuth 2.0 Token Endpoint | 
**token_endpoint_auth_methods_supported** | **string[]** | JSON array containing a list of Client Authentication methods supported by this Token Endpoint. The options are client_secret_post, client_secret_basic, client_secret_jwt, and private_key_jwt, as described in Section 9 of OpenID Connect Core 1.0 | [optional] 
**userinfo_endpoint** | **string** | URL of the OP&#39;s UserInfo Endpoint. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


