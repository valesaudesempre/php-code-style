<?php

namespace ValeSaude\PHPCodeStyle\PhpCsFixer;

use PhpCsFixer\Config as BaseConfig;
use PhpCsFixer\ConfigInterface;
use ValeSaude\PHPCodeStyle\PhpCsFixer\Standards\Ruleset;

class Config extends BaseConfig
{
    public function __construct(string $name = 'ValeSaude')
    {
        parent::__construct($name);

        $this->setRules(Ruleset::getRules())
            ->setRiskyAllowed(true)
            ->setLineEnding("\n")
            ->setIndent('    ');
    }

    /**
     * Merge the existing rules with new ones.
     */
    public function mergeRules(array $rules): ConfigInterface
    {
        return $this->setRules(
            array_merge(
                $this->getRules(),
                $rules
            )
        );
    }
}