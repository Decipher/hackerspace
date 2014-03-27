<?php
/**
 * @file
 * bhack_modifications.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function bhack_modifications_default_rules_configuration() {
  $items = array();
  $items['rules_register_interest'] = entity_import('rules_config', '{ "rules_register_interest" : {
      "LABEL" : "Register interest",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "TAGS" : [ "bHack modifications" ],
      "REQUIRES" : [ "rules", "entityform" ],
      "ON" : { "entityform_insert" : [] },
      "IF" : [
        { "entity_is_of_bundle" : {
            "entity" : [ "entityform" ],
            "type" : "entityform",
            "bundle" : { "value" : { "register_interest" : "register_interest" } }
          }
        },
        { "entity_has_field" : { "entity" : [ "entityform" ], "field" : "field_ri_email" } },
        { "entity_has_field" : { "entity" : [ "entityform" ], "field" : "field_ri_name" } },
        { "entity_has_field" : { "entity" : [ "entityform" ], "field" : "field_ri_referer" } }
      ],
      "DO" : [
        { "mail" : {
            "to" : "admin@bhack.in",
            "subject" : "New \\u0027Register interest\\u0027 submission",
            "message" : "A new \\u0027Register interest\\u0027 submissions has been made:\\r\\n\\r\\nName: [entityform:field-ri-name]\\r\\nEmail: [entityform:field-ri-email]\\r\\nPostcode: [entityform:field-ri-postcode]\\r\\nReferer: [entityform:field-ri-referer]",
            "from" : "admin@bhack.in",
            "language" : [ "entityform:type" ]
          }
        },
        { "mail" : {
            "to" : "[entityform:field-ri-email]",
            "subject" : "Thank you for your interest",
            "message" : "Hi [entityform:field-ri-name],\\r\\n\\r\\nThank you for you interest in bHack.\\r\\n\\r\\nCheers,\\r\\nbHack team",
            "from" : "no-reply@bhack.in",
            "language" : [ "entityform:type" ]
          }
        }
      ]
    }
  }');
  return $items;
}
