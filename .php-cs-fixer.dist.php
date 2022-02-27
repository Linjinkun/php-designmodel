<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/')
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        'increment_style' => false,
        'standardize_increment' => false,
        'no_superfluous_phpdoc_tags' => false,
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],
        'phpdoc_align' => ['align' => 'left'],
        'phpdoc_line_span' => ['const' => 'single', 'property' => 'multi', 'method' => 'multi'],
        'phpdoc_no_alias_tag' => ['replacements' => ['type' => 'var', 'link' => 'see']],
        'phpdoc_summary' => false,
        'phpdoc_order' => true,
        'concat_space' => ['spacing' => 'one'],
    ])
    ->setFinder($finder)
;
