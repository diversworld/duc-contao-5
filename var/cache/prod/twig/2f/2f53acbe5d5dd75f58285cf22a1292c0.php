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

/* @Contao_ThemeComponentsBundle/component/_headline.html.twig */
class __TwigTemplate_03fca9cf98b291b27a9d10b5833eee37 extends Template
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
            'headline_component' => [$this, 'block_headline_component'],
            'headline_attributes' => [$this, 'block_headline_attributes'],
            'headline_inner' => [$this, 'block_headline_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "
";
        // line 18
        yield from $this->unwrap()->yieldBlock('headline_component', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headline_component(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "    ";
        $context["headline"] = ((array_key_exists("headline", $context)) ? (Twig\Extension\CoreExtension::default(($context["headline"] ?? null), $context)) : ($context));
        // line 20
        yield "    ";
        $context["tag_name"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["headline"] ?? null), "tag_name", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["headline"] ?? null), "tag_name", [], "any", false, false, false, 20), "h1")) : ("h1"));
        // line 21
        yield "
    <";
        // line 22
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["tag_name"] ?? null), "contao_html", null, true);
        yield from $this->unwrap()->yieldBlock('headline_attributes', $context, $blocks);
        yield ">";
        // line 23
        yield from $this->unwrap()->yieldBlock('headline_inner', $context, $blocks);
        // line 39
        yield "</";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["tag_name"] ?? null), "contao_html", null, true);
        yield ">
";
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headline_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getFilter('escape')->getCallable()($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["headline"] ?? null), "attributes", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["headline"] ?? null), "attributes", [], "any", false, false, false, 22))) : ("")), "contao_html", null, true);
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headline_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        if (($context["as_editor_view"] ?? null)) {
            // line 25
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["headline"] ?? null), "text", [], "any", false, false, false, 25), "contao_html", null, true);
        } else {
            // line 27
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "subline", [], "any", false, false, false, 27) && (!(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "subheadline", [], "any", false, false, false, 27) === "1")))) {
                // line 28
                yield "<span class=\"first-headline";
                if ( !(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "headline_inline", [], "any", false, false, false, 28) === "1")) {
                    yield " block";
                }
                yield "\">";
                yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "subline", [], "any", false, false, false, 28), "contao_html", null, true);
                yield "</span>";
                // line 29
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "headline_inline", [], "any", false, false, false, 29) === "1")) {
                    yield " ";
                }
            }
            // line 31
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "subline", [], "any", false, false, false, 31)) {
                yield "<span class=\"main-headline\">";
            }
            // line 32
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\InsertTagRuntime')->replaceInsertTagsChunkedRaw($context, CoreExtension::getAttribute($this->env, $this->source, ($context["headline"] ?? null), "text", [], "any", false, false, false, 32)), "contao_html", null, true);
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "subline", [], "any", false, false, false, 33)) {
                yield "</span>";
            }
            // line 34
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "subheadline", [], "any", false, false, false, 34)) {
                // line 35
                yield "<span class=\"subheadline block\">";
                yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "subline", [], "any", false, false, false, 35), "contao_html", null, true);
                yield "</span>";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Contao_ThemeComponentsBundle/component/_headline.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  132 => 35,  130 => 34,  126 => 33,  124 => 32,  120 => 31,  115 => 29,  107 => 28,  105 => 27,  102 => 25,  100 => 24,  93 => 23,  82 => 22,  74 => 39,  72 => 23,  68 => 22,  65 => 21,  62 => 20,  59 => 19,  48 => 18,  45 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Contao_ThemeComponentsBundle/component/_headline.html.twig", "/shared/httpd/duc-contao-5/vendor/contao-themes-net/theme-components-bundle/contao/templates/twig/component/_headline.html.twig");
    }
}
