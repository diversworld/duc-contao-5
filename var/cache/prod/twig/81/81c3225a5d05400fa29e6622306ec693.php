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

/* @Contao/content_element/text.html.twig */
class __TwigTemplate_1fce57d0b715348837e591c6b1437f52 extends Template
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
        $_trait_0 = $this->loadTemplate("@Contao_ContaoCoreBundle/component/_figure.html.twig", "@Contao/content_element/text.html.twig", 2);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@Contao_ContaoCoreBundle/component/_figure.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'text_media' => [$this, 'block_text_media'],
                'content' => [$this, 'block_content'],
                'text' => [$this, 'block_text'],
                'text_attributes' => [$this, 'block_text_attributes'],
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
        // line 4
        $context["content_layout_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(), "addClass", [("media media--" .         // line 5
($context["layout"] ?? null)), (($context["layout"] ?? null) && ($context["image"] ?? null))], "method", false, false, false, 4), "mergeWith", [((        // line 6
array_key_exists("content_layout_attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["content_layout_attributes"] ?? null))) : (""))], "method", false, false, false, 5);
        // line 11
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(((array_key_exists("attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["attributes"] ?? null))) : (""))), "mergeWith", [        // line 12
($context["content_layout_attributes"] ?? null), ( !array_key_exists("default_content_layout", $context) || ($context["default_content_layout"] ?? null))], "method", false, false, false, 11);
        // line 1
        $this->parent = $this->loadTemplate("@Contao_ContaoCoreBundle/content_element/_base.html.twig", "@Contao/content_element/text.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "    ";
        if (($context["image"] ?? null)) {
            // line 18
            yield "        ";
            $_v0 = $context;
            $_v1 = ["figure" => ($context["image"] ?? null)];
            if (!is_iterable($_v1)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 18, $this->getSourceContext());
            }
            $_v1 = CoreExtension::toArray($_v1);
            $context = $_v1 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("figure_component", $context, $blocks);
            $context = $_v0;
            // line 19
            yield "    ";
        }
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        if ((($context["layout"] ?? null) != "below")) {
            // line 24
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("text_media", $context, $blocks);
            yield "
    ";
        }
        // line 26
        yield "
    ";
        // line 28
        yield "    ";
        yield from $this->unwrap()->yieldBlock('text', $context, $blocks);
        // line 37
        yield "
    ";
        // line 38
        if ((($context["layout"] ?? null) == "below")) {
            // line 39
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("text_media", $context, $blocks);
            yield "
    ";
        }
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "        ";
        $context["text_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(), "addClass", ["rte"], "method", false, false, false, 29), "mergeWith", [((        // line 31
array_key_exists("text_attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_attributes"] ?? null))) : (""))], "method", false, false, false, 30);
        // line 33
        yield "        <div";
        yield from $this->unwrap()->yieldBlock('text_attributes', $context, $blocks);
        yield ">
            ";
        // line 34
        yield $this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\StringRuntime')->encodeEmail($this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\InsertTagRuntime')->replaceInsertTags($context, $this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\CspRuntime')->inlineStyles(($context["text"] ?? null))));
        yield "
        </div>
    ";
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["text_attributes"] ?? null), "contao_html", null, true);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Contao/content_element/text.html.twig";
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
        return array (  161 => 33,  153 => 34,  148 => 33,  146 => 31,  144 => 29,  137 => 28,  128 => 39,  126 => 38,  123 => 37,  120 => 28,  117 => 26,  111 => 24,  108 => 23,  101 => 22,  95 => 19,  84 => 18,  81 => 17,  74 => 16,  69 => 1,  67 => 12,  66 => 11,  64 => 6,  63 => 5,  62 => 4,  55 => 1,  33 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Contao/content_element/text.html.twig", "/shared/httpd/duc-contao-5/vendor/contao/core-bundle/contao/templates/twig/content_element/text.html.twig");
    }
}
