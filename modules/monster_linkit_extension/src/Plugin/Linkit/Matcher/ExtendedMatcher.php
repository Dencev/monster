<?php

namespace Drupal\monster_linkit_extension\Plugin\Linkit\Matcher;

use Drupal\linkit\Plugin\Linkit\Matcher\EntityMatcher;
use Drupal\linkit\Suggestion\EntitySuggestion;
use Drupal\linkit\Suggestion\SuggestionCollection;


/**
 * Provides specific LinkIt matchers for our custom entity type.
 *
 * @Matcher(
 *   id = "entity:your_content_entity_type",
 *   label = @Translation("Your custom content entity"),
 *   target_entity = "your_content_entity_type",
 *   provider = "your_module"
 * )
 */