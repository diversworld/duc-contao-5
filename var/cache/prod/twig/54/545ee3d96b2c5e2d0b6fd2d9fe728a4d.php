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

/* @Contao/content_element/html.html.twig */
class __TwigTemplate_9af06cd7e242ec167c7b607154c3e9f9 extends Template
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
            'editor_view' => [$this, 'block_editor_view'],
            'html' => [$this, 'block_html'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if (($context["as_editor_view"] ?? null)) {
            // line 2
            yield "    ";
            yield from $this->unwrap()->yieldBlock('editor_view', $context, $blocks);
        } else {
            // line 6
            yield "    ";
            yield from $this->unwrap()->yieldBlock('html', $context, $blocks);
        }
        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_editor_view(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "        <pre>";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["html"] ?? null), "contao_html", null, true);
        yield "</pre>
    ";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_html(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\InsertTagRuntime')->replaceInsertTags($context, ((array_key_exists("html", $context)) ? (Twig\Extension\CoreExtension::default(($context["html"] ?? null))) : ("")));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Contao/content_element/html.html.twig";
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
        return array (  72 => 6,  64 => 3,  57 => 2,  50 => 6,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Contao/content_element/html.html.twig", "/shared/httpd/duc-contao-5/vendor/contao/core-bundle/contao/templates/twig/content_element/html.html.twig");
    }
}
