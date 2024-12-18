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

/* @Contao_ContaoCoreBundle/content_element/_base.html.twig */
class __TwigTemplate_8d0ce78822af76535155201d1ce490a7 extends Template
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

        // line 1
        $_trait_0 = $this->loadTemplate("@Contao_ThemeComponentsBundle/component/_headline.html.twig", "@Contao_ContaoCoreBundle/content_element/_base.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@Contao_ThemeComponentsBundle/component/_headline.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'wrapper' => [$this, 'block_wrapper'],
                'wrapper_tag' => [$this, 'block_wrapper_tag'],
                'attributes' => [$this, 'block_attributes'],
                'inner' => [$this, 'block_inner'],
                'content' => [$this, 'block_content'],
                'metadata' => [$this, 'block_metadata'],
                'style' => [$this, 'block_style'],
                'script' => [$this, 'block_script'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "
";
        // line 3
        if ((array_key_exists("searchable", $context) &&  !($context["searchable"] ?? null))) {
            // line 4
            yield "<!-- indexer::stop -->";
        }
        // line 6
        yield "
";
        // line 9
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(), "setIfExists", ["id",         // line 10
($context["element_html_id"] ?? null)], "method", false, false, false, 9), "addClass", [[        // line 11
($context["element_css_classes"] ?? null), ("content-" . Twig\Extension\CoreExtension::replace(($context["type"] ?? null), ["_" => "-"]))]], "method", false, false, false, 10), "mergeWith", [((        // line 12
array_key_exists("attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["attributes"] ?? null))) : (""))], "method", false, false, false, 11);
        // line 14
        yield "
";
        // line 15
        yield from $this->unwrap()->yieldBlock('wrapper', $context, $blocks);
        // line 27
        yield "
";
        // line 28
        if ((array_key_exists("searchable", $context) &&  !($context["searchable"] ?? null))) {
            // line 29
            yield "<!-- indexer::continue -->
";
        }
        // line 31
        yield "
";
        // line 33
        yield from $this->unwrap()->yieldBlock('metadata', $context, $blocks);
        // line 34
        yield "
";
        // line 36
        yield from $this->unwrap()->yieldBlock('style', $context, $blocks);
        // line 37
        yield from $this->unwrap()->yieldBlock('script', $context, $blocks);
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "    ";
        // line 17
        yield "    <";
        yield from $this->unwrap()->yieldBlock('wrapper_tag', $context, $blocks);
        yield from $this->unwrap()->yieldBlock('attributes', $context, $blocks);
        yield ">";
        // line 18
        yield from $this->unwrap()->yieldBlock('inner', $context, $blocks);
        // line 25
        yield "</";
        yield from         $this->unwrap()->yieldBlock("wrapper_tag", $context, $blocks);
        yield ">
";
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper_tag(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "div";
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["attributes"] ?? null), "contao_html", null, true);
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["headline"] ?? null), "text", [], "any", false, false, false, 19)) {
            // line 20
            yield "                ";
            yield from             $this->unwrap()->yieldBlock("headline_component", $context, $blocks);
            yield "
            ";
        }
        // line 22
        yield "
            ";
        // line 23
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 24
        yield "        ";
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metadata(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Contao_ContaoCoreBundle/content_element/_base.html.twig";
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
        return array (  208 => 37,  198 => 36,  188 => 33,  178 => 23,  173 => 24,  171 => 23,  168 => 22,  162 => 20,  159 => 19,  152 => 18,  131 => 17,  123 => 25,  121 => 18,  116 => 17,  114 => 16,  107 => 15,  102 => 37,  100 => 36,  97 => 34,  95 => 33,  92 => 31,  88 => 29,  86 => 28,  83 => 27,  81 => 15,  78 => 14,  76 => 12,  75 => 11,  74 => 10,  73 => 9,  70 => 6,  67 => 4,  65 => 3,  62 => 2,  35 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Contao_ContaoCoreBundle/content_element/_base.html.twig", "/shared/httpd/duc-contao-5/vendor/contao/core-bundle/contao/templates/twig/content_element/_base.html.twig");
    }
}
