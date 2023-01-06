<?php

namespace ValeSaude\PHPCodeStyle\PhpCsFixer\Standards;

final class Ruleset
{
    public static function getRules(): array
    {
        $rules = [
            // Import the whole PER ruleset
            '@PER' => true,

            #region Rules without custom configuration
            // General rules
            'no_php4_constructor' => true, // Fix old style (PHP 4) constructors
            'protected_to_private' => true, // Convert methods/properties from protected to private, when applicable
            'single_class_element_per_statement' => true, // Separates single statements const/property declarations
            'no_alternative_syntax' => true, // Fix alternative control structure syntax
            'no_useless_sprintf' => true, // Remove useless sprintf (used only with first param)
            'no_empty_statement' => true, // Remove useless semicolons
            'dir_constant' => true, // Replace dirname(__FILE__) with __DIR__
            'no_alias_functions' => true, // Replace aliased core functions with master ones
            'implode_call' => true, // Ensure "implode" function is called as documented (2 params, separator and array)
            'single_space_after_construct' => true, // Ensure single space after language constructs (such as echo, new, etc)
            'combine_nested_dirname' => true, // Replace nested "dirname" calls by single call with second parameter (levels)
            'pow_to_exponentiation' => true, // Replace pow() with ** operator
            'no_multiline_whitespace_around_double_arrow' => true, // Remove line breaks before/after => operator
            'native_constant_invocation' => true, // Add leading slash to native constant invocation (in order to improve resolving speed)
            'fully_qualified_strict_types' => true, // Convert imported FQCN into short version
            'lambda_not_used_import' => true, // Remove unused variables in "use" statements
            'backtick_to_shell_exec' => true, // Convert backtick execution operator (e.g. `ls`) to "shell_exec"
            'no_empty_comment' => true, // Remove empty comments
            'semicolon_after_instruction' => true, // Add semicolon after instructions (such as echo)
            'array_syntax' => true, // Enforce array short syntax
            'empty_loop_condition' => true, // Fix empty loop condition style on control structures
            'standardize_increment' => true, // Standardize increment/decrement operators
            'function_to_constant' => true, // Convert core function calls to constant, where possible (e.g. phpversion() to PHP_VERSION)
            'is_null' => true, // Replace "is_null($var)" to "$var === null"
            'string_length_to_empty' => true, // Convert "strlen($var) === 0" to "$var === ''"
            'ternary_to_elvis_operator' => true, // Convert ternary to short syntax, when applicable (e.g. "$var1 = $var2 ? $var2 : false" becomes "$var1 = $var2 ?: false")
            'clean_namespace' => true, // Remove spaces from namespace
            'concat_space' => true, // Remove spaces on concatenations
            'echo_tag_syntax' => true, // Replace short echo tag with long one
            'function_typehint_space' => true, // Enforce single space between parameter type and name in function declarations
            'include' => true, // Enforce include/require style (single space before path, without braces)
            'increment_style' => true, // Enforce pre-increment/decrement where possible
            'integer_literal_case' => true, // Fix integer literal casing (e.g. 0Xff becomes 0xFF)
            'linebreak_after_opening_tag' => true, // Enforce line break after <?php
            'magic_constant_casing' => true, // Fix magic constants casing
            'magic_method_casing' => true, // Fix magic methods casing
            'native_function_casing' => true, // Fix native functions casing
            'native_function_type_declaration_casing' => true, // Fix return type casing for native types
            'no_alias_language_construct_call' => true, // Replace "die" with "exit"
            'no_binary_string' => true, // Remove binary flag on strings
            'no_leading_namespace_whitespace' => true, // Remove leading spaces before namespace declaration
            'no_spaces_around_offset' => true, // Remove spaces around array offset (e.g. $arr[ 1 ] [ 2 ] becomes $arr[1][2])
            'no_trailing_comma_in_list_call' => true, // Remove trailing comma in list construct
            'no_trailing_comma_in_singleline_array' => true, // Remove trailing comma in single line arrays
            'no_unset_cast' => true, // Convert (unset) cast to null
            'normalize_index_brace' => true, // Replace curly braces with square braces in array access
            'object_operator_without_whitespace' => true, // Remove spaces around object operator (->)
            'binary_operator_spaces' => true, // Enforce single space around binary operators
            'single_quote' => true, // Convert double quotes into single, where possible
            'standardize_not_equals' => true, // Replace "<>" operators with "!="
            'switch_continue_to_break' => true, // Replace "continue" with "break" in switch
            'trailing_comma_in_multiline' => true, // Enforce trailing comma for multiline arrays
            'trim_array_spaces' => true, // Trim leading/trailing spaces in arrays
            'types_spaces' => true, // Remove spaces around union type operator (e.g. TypeA | TypeB becomes TypeA|TypeB)
            'yoda_style' => true, // Enforce yoda style comparison (constant part on the left side of the comparison, to prevent accidental assignment) (e.g. $var === 1 becomes 1 === $var)
            'array_push' => true, // Convert "array_push($arr, $value)" to "$arr[] = $value"
            'ereg_to_preg' => true, // Convert "ereg_*" functions (which are deprecated) to its "preg_*" equivalents
            'error_suppression' => true, // Enforce deprecation notice suppression using @ operator
            'fopen_flag_order' => true, // Standardize "fopen" flags order
            'logical_operators' => true, // Replace "and" with "&&" and "or" with "||"
            'modernize_types_casting' => true, // Replace "*val" functions with its casting equivalents (e.g. intval($var) becomes (int) $var)
            'no_homoglyph_names' => true, // Replace non ascii characters in names
            'no_unneeded_final_method' => true, // Remove unneeded final modifier on class methods
            'non_printable_character' => true, // Remove non-printable characters
            'ordered_traits' => true, // Sort trait use statements alphabetically
            'self_accessor' => true, // Use "self" instead of class/interface name
            'set_type_to_cast' => true, // Replace settype with equivalent cast
            'no_short_bool_cast' => true, // Replace short bool cast (!!) with standard one ((bool) $var)
            'cast_spaces' => true, // Enforce single space between cast and variable
            'no_mixed_echo_print' => true, // Enforce usage of echo instead of print
            'no_unused_imports' => true, // Remove unused import statements
            'psr_autoloading' => true, // Force class name to match file name
            'no_singleline_whitespace_before_semicolons' => true, // Remove whitespaces before semicolon
            'no_whitespace_before_comma_in_array' => true, // Remove whitespace after comma in arrays
            'unary_operator_spaces' => true, // Remove whitespace between unary operator and operand
            'whitespace_after_comma_in_array' => true, // Ensure single whitespace after comma in arrays
            'ternary_to_null_coalescing' => true, // Replace ternary with null coalescing where possible (e.g. isset($var1) ? $var1 : $var2 becomes $var1 ?? $var2)
            'random_api_migration' => true, // Replace rng functions with "mt_*" equivalents
            'list_syntax' => true, // Enforce array destructuring short syntax usage (e.g. list($var) = $arr becomes [$var] = $arr)
        
            // PHPDoc rules
            'phpdoc_to_comment' => true, // Convert unwanted docblock to regular comments
            'phpdoc_indent' => true, // Fix docblock indent to match subject
            'phpdoc_annotation_without_dot' => true, // Add trailing dot do docblock descriptions
            'phpdoc_types' => true, // Fix phpdoc types casing (e.g. null instead of NULL)
            'phpdoc_scalar' => true, // Convert aliased phpdoc types to standard ones (such as bool instead of boolean)
            'phpdoc_no_access' => true, // Remove @access phpdoc tags
            'phpdoc_no_package' => true, // Remove @package and @subpackage phpdoc tags
            'phpdoc_return_self_reference' => true, // Fix self reference types used in @return phpdoc (e.g. $this instead of this)
            'phpdoc_no_useless_inheritdoc' => true, // Remove unwanted @inheritdoc
            'no_empty_phpdoc' => true, // Remove empty docblocks
            'phpdoc_inline_tag_normalizer' => true, // Fix phpdoc inline tags syntax (move @ symbol to inside curly braces)
            'phpdoc_summary' => true, // Enforce phpdoc summary to end with full stop, exclamation or question mark
            'phpdoc_var_without_name' => true, // Remove name in @var tags when used in class properties
            'phpdoc_separation' => true, // Enforce phpdoc tags separation and grouping
            'phpdoc_trim' => true, // Remove empty leading/trailing lines of phpdoc
            'phpdoc_single_line_var_spacing' => true, // Remove unwanted spaces in single line @var phpdoc
            'no_blank_lines_after_phpdoc' => true, // Remove blank lines between phpdoc and its subject
            'phpdoc_trim_consecutive_blank_line_separation' => true, // Remove extra blank lines in phpdoc
            'no_superfluous_phpdoc_tags' => true, // Remove unneeded phpdoc tags (e.g. @return, @param or @var when the equivalent typehint is present)
            'phpdoc_order' => true, // Enforce phpdoc tags order (@param first, then @throws, then @return)
        
            // PHPUnit rules
            'php_unit_test_annotation' => true, // Remove @test phpdoc tags from phpunit tests
            'php_unit_mock_short_will_return' => true, // Replace mock methods (such as "$mock->will($this->returnSelf())") with its shorter equivalent (e.g. "$mock->willReturnSelf()")
            'php_unit_set_up_tear_down_visibility' => true, // Enforce setUp/tearDown methods visibility as protected
            'php_unit_construct' => true, // Replace "assertEquals" (and similar methods) with dedicated ones, when applicable (e.g. "$this->assertEquals(true, $var)" becomes "$this->assertTrue($var)")
            'php_unit_fqcn_annotation' => true, // PHPUnit annotations should be used as FQCN
            #endregion
        
            #region Rules with custom configuration
            // General rules
            'blank_line_before_statement' => [
                // Enforce blank line before given statements
                'statements' => ['break', 'case', 'continue', 'declare', 'default', 'exit', 'goto', 'include', 'include_once', 'require', 'require_once', 'return', 'switch', 'throw', 'try', 'yield'],
            ],
            'single_line_comment_style' => [
                // Convert /* */ single line comments into //
                'comment_types' => ['asterisk'],
            ],
            'ordered_imports' => [
                // Enforce ordered imports and import elements
                // Each group (class, function and const) is ordered alphabetically
                'imports_order' => ['class', 'function', 'const'],
            ],
            'ordered_class_elements' => [
                // Enforce class elements (properties, methods, etc) ordering
                'order' => [
                    // trait "use" statements
                    'use_trait',
                    // constants, ordered by visibility (public/protected/private)
                    'constant_public', 'constant_protected', 'constant_private',
                    // regular properties, ordered by visibility
                    'property_public', 'property_protected', 'property_private',
                    // static properties, ordered by visibility
                    'property_public_static', 'property_protected_static', 'property_private_static',
                    // constructor/destructor/magic methods
                    'construct', 'destruct', 'magic',
                    // phpunit lifecycle methods
                    'phpunit',
                    // abstract methods, ordered by visibility
                    'method_public_abstract', 'method_protected_abstract',
                    // regular methods, ordered by visibility
                    'method_public', 'method_protected', 'method_private',
                    // abstract static methods, ordered by visibility
                    'method_public_abstract_static', 'method_protected_abstract_static',
                    // regular static methods, ordered by visibility
                    'method_public_static', 'method_protected_static', 'method_private_static',
                ],
            ],
            'class_attributes_separation' => [
                // Enforce blank line between class methods
                'elements' => [
                    'method' => 'one',
                ],
            ],
            'no_unneeded_curly_braces' => [
                // Remove unneeded curly braces in control structures
                'namespaces' => true,
            ],
            'empty_loop_body' => [
                // Enforce empty loop body style, using curly braces instead of semicolon
                'style' => 'braces',
            ],
            'class_definition' => [
                // Force class definition to be single line
                'single_line' => true,
            ],
            'braces' => [
                // Enforce braces placement
                'allow_single_line_anonymous_class_with_empty_body' => true,
                'allow_single_line_closure' => true,
            ],
            'method_argument_space' => [
                // Enforce fully multiline method arguments when multiline
                'on_multiline' => 'ensure_fully_multiline',
            ],
            'no_unneeded_control_parentheses' => [
                // Remove unneeded parentheses in control structures
                'statements' => ['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield', 'yield_from'],
            ],
            'native_function_invocation' => [
                // Add leading "\" before function invocation to speed up resolving
                'include' => ['@compiler_optimized'],
                'scope' => 'namespaced',
                'strict' => true,
            ],
            'fopen_flags' => [
                // Omit "b" flag on "fopen"
                'b_mode' => false,
            ],
            'space_after_semicolon' => [
                // Remove whitespaces on empty for expressions
                'remove_in_empty_for_expressions' => true,
            ],
            'no_extra_blank_lines' => [
                // Remove unneeded/extra blank lines between tokens
                'tokens' => ['case', 'continue', 'curly_brace_block', 'default', 'extra', 'parenthesis_brace_block', 'square_brace_block', 'switch', 'throw', 'use'],
            ],
        
            // PHPDoc rules
            'phpdoc_no_alias_tag' => [
                // Replace @type with @var, and @link with @see, in phpdoc
                'replacements' => [
                    'type' => 'var',
                    'link' => 'see',
                ],
            ],
            'phpdoc_align' => [
                // Align all phpdoc tags vertically
                'tags' => ['param', 'property', 'property-read', 'property-write', 'return', 'throws', 'type', 'var', 'method'],
                'align' => 'vertical',
            ],
            'phpdoc_tag_type' => [
                // Force @inheritDoc phpdoc tag to be inline ({@inheritDoc})
                'tags' => ['inheritDoc' => 'inline'],
            ],
            'phpdoc_types_order' => [
                // Force phpdoc null type to be the last position
                'null_adjustment' => 'always_last',
                'sort_algorithm' => 'none',
            ],
            'general_phpdoc_tag_rename' => [
                // Rename phpdoc tags
                'replacements' => ['inheritDocs' => 'inheritDoc'],
            ],
        
            // PHPUnit rules
            'php_unit_method_casing' => [
                // Enforce test methods casing as camel case
                'case' => 'snake_case',
            ],
            #endregion
        
            #region Manually disabled rules
            'no_space_around_double_colon' => false,
            #endregion
        ];
        
        // When PHP Version >= 7.4
        if (\PHP_VERSION_ID >= '70400') {
            // Include PHP 7.4 migration rules
            $rules = array_merge($rules, [
                // Replace null coalescing with coalesce equal where possible (e.g. $var1 = $var1 ?? false becomes $var1 ??= $var1)
                'assign_null_coalescing_to_coalesce_equal' => true,
                // Replace one-liner anonymous functions with arrow functions
                'use_arrow_functions' => true,
                // Remove trailing comma in single line function arguments
                'no_trailing_comma_in_singleline_function_call' => true,
                // Remove unneeded import alias
                'no_unneeded_import_alias' => true,
                // Fix core class name casing (such as Exception)
                'class_reference_name_casing' => true,
                // Enforce class elements (properties, methods, etc) ordering
                'ordered_class_elements' => [
                    'order' => [
                        // trait "use" statements
                        'use_trait',
                        // enum "case" statements
                        'case',
                        // constants, ordered by visibility (public/protected/private)
                        'constant_public', 'constant_protected', 'constant_private',
                        // regular properties, ordered by visibility
                        'property_public', 'property_protected', 'property_private',
                        // static properties, ordered by visibility
                        'property_public_static', 'property_protected_static', 'property_private_static',
                        // constructor/destructor/magic methods
                        'construct', 'destruct', 'magic',
                        // phpunit lifecycle methods
                        'phpunit',
                        // abstract methods, ordered by visibility
                        'method_public_abstract', 'method_protected_abstract', 'method_private_abstract',
                        // regular methods, ordered by visibility
                        'method_public', 'method_protected', 'method_private',
                        // abstract static methods, ordered by visibility
                        'method_public_abstract_static', 'method_protected_abstract_static', 'method_private_abstract_static',
                        // regular static methods, ordered by visibility
                        'method_public_static', 'method_protected_static', 'method_private_static',
                    ],
                ],
                // Enforce blank line before given statements
                'blank_line_before_statement' => [
                    'statements' => ['break', 'case', 'continue', 'declare', 'default', 'exit', 'goto', 'include', 'include_once', 'phpdoc', 'require', 'require_once', 'return', 'switch', 'throw', 'try', 'yield'],
                ],
            ]);
        
            #region Manually disabled rules
            $rules = array_merge($rules, [
                'single_line_comment_spacing' => false,
            ]);
            #endregion
        }
        
        // When PHP Version >= 8.0
        if (\PHP_VERSION_ID >= 80000) {
            // Include PHP 8.0 migration rules
            $rules = array_merge($rules, [
                // Replace get_class($var) with $var::class on object variables
                'get_class_to_class_keyword' => true,
                // Replace "strpos" with "str_starts_with"/"str_contains" where possible
                'modernize_strpos' => true,
            ]);
        }
        
        // When PHP Version >= 8.1
        if (\PHP_VERSION_ID >= 80100) {
            // Include PHP 8.1 migration rules
            $rules = array_merge($rules, [
                // Enforce PHP8.1 octal notation (e.g. 0o123)
                'octal_notation' => true,
            ]);
        }

        return $rules;
    }
}
