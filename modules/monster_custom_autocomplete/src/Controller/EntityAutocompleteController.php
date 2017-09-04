<?php

namespace Drupal\monster_custom_autocomplete\Controller;

use Drupal\Core\KeyValueStore\KeyValueStoreInterface;
use Drupal\monster_custom_autocomplete\EntityAutocompleteMatcher;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\system\Controller\EntityAutocompleteController as CoreEntityAutocompleteController;

class EntityAutocompleteController extends CoreEntityAutocompleteController {

  /**
   * The autocomplete matcher for entity references.
   */
  protected $matcher;

  /**
   * {@inheritdoc}
   */
  public function __construct(EntityAutocompleteMatcher $matcher, KeyValueStoreInterface $key_value) {
    $this->matcher = $matcher;
    $this->keyValue = $key_value;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('monster_custom_autocomplete.autocomplete_matcher'),
      $container->get('keyvalue')->get('entity_autocomplete')
    );
  }

}
