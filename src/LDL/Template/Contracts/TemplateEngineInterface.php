<?php declare(strict_types=1);

namespace LDL\Template\Contracts;

interface TemplateEngineInterface
{
    public function renderFromString(string $string, $values): string;

    public function render(string $template, $values): string;
}