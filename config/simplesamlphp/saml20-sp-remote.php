<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

$sp_entity_ids = explode(',', getenv('SIMPLESAMLPHP_SP_ENTITY_ID'));
$assertion_consumers_services = explode(',', getenv('SIMPLESAMLPHP_SP_ASSERTION_CONSUMER_SERVICE'));
$single_logout_services = explode(',', getenv('SIMPLESAMLPHP_SP_SINGLE_LOGOUT_SERVICE'));

foreach ($sp_entity_ids as $index => $sp_entity_id) {
    $metadata[$sp_entity_id] = array(
        'AssertionConsumerService' => $assertion_consumers_services[$index],
        'SingleLogoutService' => $single_logout_services,
    );
}
