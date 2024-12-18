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

/* @Contao_ContaoCoreBundle/component/_figure.html.twig */
class __TwigTemplate_f3e9fe8277a1e9298ffc491f1474316f extends Template
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

        // line 30
        $_trait_0 = $this->loadTemplate("@Contao_ContaoCoreBundle/component/_picture.html.twig", "@Contao_ContaoCoreBundle/component/_figure.html.twig", 30);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@Contao_ContaoCoreBundle/component/_picture.html.twig".'" cannot be used as a trait.', 30, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'figure_component' => [$this, 'block_figure_component'],
                'media' => [$this, 'block_media'],
                'media_link' => [$this, 'block_media_link'],
                'caption' => [$this, 'block_caption'],
                'caption_inner' => [$this, 'block_caption_inner'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "
";
        // line 31
        yield "
";
        // line 32
        yield from $this->unwrap()->yieldBlock('figure_component', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_figure_component(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        yield "    ";
        $context["figure_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(), "mergeWith", [((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 34
($context["figure"] ?? null), "options", [], "any", false, true, false, 34), "attr", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 34), "attr", [], "any", false, false, false, 34))) : (""))], "method", false, false, false, 33), "mergeWith", [((        // line 35
array_key_exists("figure_attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["figure_attributes"] ?? null))) : (""))], "method", false, false, false, 34);
        // line 37
        yield "    <figure";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["figure_attributes"] ?? null), "contao_html", null, true);
        yield ">
        ";
        // line 38
        if ( !((CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "linkHref", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "linkHref", [], "any", false, false, false, 38))) : (""))) {
            // line 39
            yield "            ";
            // line 40
            yield "            ";
            yield from $this->unwrap()->yieldBlock('media', $context, $blocks);
            // line 43
            yield "        ";
        } else {
            // line 44
            yield "            ";
            // line 45
            yield "            ";
            yield from $this->unwrap()->yieldBlock('media_link', $context, $blocks);
            // line 53
            yield "        ";
        }
        // line 54
        yield "
        ";
        // line 56
        yield "        ";
        yield from $this->unwrap()->yieldBlock('caption', $context, $blocks);
        // line 69
        yield "    </figure>
";
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "                ";
        yield from         $this->unwrap()->yieldBlock("picture_component", $context, $blocks);
        yield "
            ";
        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_media_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "                ";
        $context["link_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(((CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "linkAttributes", [true], "method", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "linkAttributes", [true], "method", false, false, false, 46))) : (""))), "setIfExists", ["title", (((CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["figure"] ?? null), "hasLightbox", [], "any", false, false, false, 47) && CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "hasMetadata", [], "any", false, false, false, 47))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 47), "title", [], "any", false, false, false, 47)) : (null))], "method", false, false, false, 46), "mergeWith", [((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["figure"] ?? null), "options", [], "any", false, true, false, 48), "link_attr", [], "any", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 48), "link_attr", [], "any", false, false, false, 48))) : (""))], "method", false, false, false, 47), "mergeWith", [((        // line 49
array_key_exists("link_attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["link_attributes"] ?? null))) : (""))], "method", false, false, false, 48);
        // line 51
        yield "                <a";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["link_attributes"] ?? null), "contao_html", null, true);
        yield ">";
        yield from         $this->unwrap()->yieldBlock("media", $context, $blocks);
        yield "</a>
            ";
        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_caption(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 57) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 57), "caption", [], "any", false, false, false, 57))) {
            // line 58
            yield "                ";
            $context["caption_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(), "mergeWith", [((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 59
($context["figure"] ?? null), "options", [], "any", false, true, false, 59), "caption_attr", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 59), "caption_attr", [], "any", false, false, false, 59))) : (""))], "method", false, false, false, 58), "mergeWith", [((            // line 60
array_key_exists("caption_attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["caption_attributes"] ?? null))) : (""))], "method", false, false, false, 59);
            // line 62
            yield "                <figcaption";
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["caption_attributes"] ?? null), "contao_html", null, true);
            yield ">";
            // line 63
            yield from $this->unwrap()->yieldBlock('caption_inner', $context, $blocks);
            // line 66
            yield "</figcaption>
            ";
        }
        // line 68
        yield "        ";
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_caption_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 64), "caption", [], "any", false, false, false, 64);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Contao_ContaoCoreBundle/component/_figure.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  191 => 64,  184 => 63,  179 => 68,  175 => 66,  173 => 63,  169 => 62,  167 => 60,  166 => 59,  164 => 58,  161 => 57,  154 => 56,  144 => 51,  142 => 49,  141 => 48,  140 => 47,  138 => 46,  131 => 45,  123 => 41,  116 => 40,  110 => 69,  107 => 56,  104 => 54,  101 => 53,  98 => 45,  96 => 44,  93 => 43,  90 => 40,  88 => 39,  86 => 38,  81 => 37,  79 => 35,  78 => 34,  76 => 33,  65 => 32,  62 => 31,  59 => 29,  35 => 30,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Contao_ContaoCoreBundle/component/_figure.html.twig", "/shared/httpd/duc-contao-5/vendor/contao/core-bundle/contao/templates/twig/component/_figure.html.twig");
    }
}
