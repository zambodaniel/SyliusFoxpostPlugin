<?php

declare(strict_types=1);

namespace Tests\ZamboDaniel\SyliusFoxpostPlugin\DependencyInjection;

use ZamboDaniel\SyliusFoxpostPlugin\DependencyInjection\ZamboDanielSyliusFoxpostExtension;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;

/**
 * See examples of tests and configuration options here: https://github.com/SymfonyTest/SymfonyDependencyInjectionTest
 */
final class ZamboDanielSyliusFoxpostExtensionTest extends AbstractExtensionTestCase
{
    protected function getContainerExtensions(): array
    {
        return [
            new ZamboDanielSyliusFoxpostExtension(),
        ];
    }

    protected function getMinimalConfiguration(): array
    {
        return [
            'option' => 'option_value',
        ];
    }

    /**
     * @test
     */
    public function after_loading_the_correct_parameter_has_been_set(): void
    {
        $this->load();

        $this->assertContainerBuilderHasParameter('zambodaniel_sylius_foxpost.option', 'option_value');
    }
}
