<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @MvoContaoGroupWidget/widget_group_element.html.twig */
class __TwigTemplate_f33ea9c8ff644a4e490838c197935a6f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ((($context["type"] ?? null) == "start")) {
            // line 2
            yield "    <div class=\"group-widget--element\" data-id=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["id"] ?? null), "html", null, true);
            yield "\">
        <div class=\"drop-area\"></div>
        <div class=\"controls\">
            <button type=\"button\" disabled=\"disabled\" data-up aria-label=\"";
            // line 5
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.move_up.1", [], "contao_default"), "html", null, true);
            yield "\"></button>
            <div draggable=\"false\" data-drag aria-label=\"";
            // line 6
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.dragItemsHint", [], "contao_default"), "html", null, true);
            yield "\"></div>
            <button type=\"button\" disabled=\"disabled\" data-down aria-label=\"";
            // line 7
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.move_down.1", [], "contao_default"), "html", null, true);
            yield "\"></button>
            <button type=\"button\" disabled=\"disabled\" data-remove aria-label=\"";
            // line 8
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.delete", [], "contao_default"), "html", null, true);
            yield "\"></button>
        </div>
";
        } else {
            // line 11
            yield "    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MvoContaoGroupWidget/widget_group_element.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  69 => 11,  63 => 8,  59 => 7,  55 => 6,  51 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MvoContaoGroupWidget/widget_group_element.html.twig", "/shared/httpd/duc-contao-5/vendor/mvo/contao-group-widget/Resources/views/widget_group_element.html.twig");
    }
}
