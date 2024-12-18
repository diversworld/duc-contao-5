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

/* @Contao/content_element/headline.html.twig */
class __TwigTemplate_dfe3148e2cf7e1765f86f4dedba6373a extends Template
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

        // line 2
        $_trait_0 = $this->loadTemplate("@Contao_ThemeComponentsBundle/component/_headline.html.twig", "@Contao/content_element/headline.html.twig", 2);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@Contao_ThemeComponentsBundle/component/_headline.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'wrapper_tag' => [$this, 'block_wrapper_tag'],
                'inner' => [$this, 'block_inner'],
            ]
        );
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@Contao_ContaoCoreBundle/content_element/_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Contao_ContaoCoreBundle/content_element/_base.html.twig", "@Contao/content_element/headline.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper_tag(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getFilter('escape')->getCallable()($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["headline"] ?? null), "tag_name", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["headline"] ?? null), "tag_name", [], "any", false, false, false, 4), "h1")) : ("h1")), "contao_html", null, true);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield from         $this->unwrap()->yieldBlock("headline_inner", $context, $blocks);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Contao/content_element/headline.html.twig";
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
        return array (  82 => 7,  75 => 6,  64 => 4,  53 => 1,  33 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Contao/content_element/headline.html.twig", "/shared/httpd/duc-contao-5/vendor/contao-themes-net/theme-components-bundle/contao/templates/twig/content_element/headline.html.twig");
    }
}
